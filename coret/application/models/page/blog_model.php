<?php
class Blog_model extends CI_Model
{
	public function select($post)
	{
		//----------------------------參數表----------------------------
		/*
		【post】
		'field'			=>array(),
		'table'			=>'',
		'where' 		=>array(),
		'limit_star' 	=>'',
		'limit_count'	=>'',
		'order_by'		=>array()
		*/
		
		//-------------------------SQL語法載入區-------------------------
		$this->db->select($post['field']);		//要取得的欄位
		$this->db->from($post['table']);		//要取得的資料表名稱
		$this->db->where($post['where']);		//要取得的資料表篩選條件
		
		//排序
		foreach($post['order_by'] as $field => $sort){
			$this->db->order_by($field, $sort);
			}
		
		//要取得的筆數及偏移量
		if($post['limit_count'] != 0){   
			$this->db->limit($post['limit_count'], $post['limit_star']);
			}
		
		$this->db->join('blog_type', 'blog_type.id = blog.type_id', 'left');		//要關連的表
		$query 		= $this->db->get();									//取的資料庫資料
		$query_data	= $query->result_array();							//查詢結果陣列資料
		
		return $query_data;			
	}
}
