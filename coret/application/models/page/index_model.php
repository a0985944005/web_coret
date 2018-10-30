<?php
class Index_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function select_join($post)
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
		$query 		= $this->db->get();									//取的資料庫資料
		$query_data	= $query->result_array();							//查詢結果陣列資料
		
		
		foreach($query_data as $key=> $_data)
		{
					$post_search				= array('field'			=>array('*'),
														'table'			=>'blog',
														'where' 		=>array('type_id'=>$_data['id']),
														'limit_star' 	=>'',
														'limit_count'	=>'',
														'order_by'		=>array());
					$register	= $this->Common->select($post_search);
					
					
			foreach($register as $file_key => $index_data)
			{
				$post 	= array(//輸入的select相關資訊
								'field'			=>array('*'),
								'table'			=>'blog_files',
								'where' 		=>array('blog_id' => $index_data['id']),
								'limit_star' 	=>'',
								'limit_count'	=>'',
								'order_by'		=>array()
								);
				$register[$file_key]['file'] = $this->Common->select($post);
			}
			$query_data[$key]['data'] = $register;
		}
		
		return $query_data;			
	}
}
