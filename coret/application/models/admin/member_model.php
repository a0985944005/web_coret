<?php
class Member_model extends CI_Model
{
	public function select_join($post)
	{
		$this->db->select($post['field']);		//要取得的欄位
		$this->db->from($post['table']);		//要取得的資料表名稱
		$this->db->where($post['where']);		//要取得的資料表篩選條件
		
		//排序
		foreach($post['order_by'] as $field=>$sort){
			$this->db->order_by($field,$sort);
			}
		
		//要取得的筆數及偏移量
		if($post['limit_count'] != 0){   
			$this->db->limit($post['limit_count'], $post['limit_star']);
			}
		
		$this->db->join('inventory_detail', 'inventory_detail.id = inventory_size.inventory_detail_id', 'left');
		$this->db->join('quote_size', 'quote_size.id = inventory_size.quote_size_id', 'left');
		$this->db->join('quote', 'quote.id = inventory_detail.quote_id', 'left');
		$this->db->join('type', 'type.id = inventory_size.type_id', 'left');
		$this->db->join('quote_detail', 'quote_detail.id = quote_size.quote_detail_id', 'left');




		$query 		= $this->db->get();					//取的資料庫資料
		$query_data	= $query->result_array();			//查詢結果陣列資料
		
		
		//echo $str = $this->db->last_query();
		
		//exit;
		return $query_data;
	}
	public function select_all($data)
	{


	}

	public function select_detail($detail)
	{
		foreach($detail as $key=> $value)
		{
			$this->db->select('*');
			$this->db->from('quote_size');
			$this->db->where('quote_detail_id',$value['id']);

			$detail_a=$this->db->get();
			$detail_data=$detail_a->result_array();

			$detail[$key]['size']=$detail_data;



			$this->db->select('*');
			$this->db->from('quote_photo');
			$this->db->where('quote_detail_id',$value['id']);

			$detail_b=$this->db->get();
			$detail_photo=$detail_b->result_array();

			$detail[$key]['photo']=$detail_photo;


		}
		return $detail;


	}

	public function quote_all($detail)
	{
		foreach($detail as $key=> $value)
		{
			$this->db->select('*');
			$this->db->from('quote_size');
			$this->db->where('quote_detail_id',$value['id']);

			$detail_a=$this->db->get();
			$detail_data=$detail_a->result_array();

			$detail[$key]['size']=$detail_data;


		}
		return $detail;


	}


	
}
