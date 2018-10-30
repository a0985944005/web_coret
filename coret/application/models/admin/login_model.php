<?php
class Login_model extends CI_Model
{
	public function select_join($post)
	{
		
		$select=array('member.id 			AS id',
					  'member.account 		AS account',
					  'member.name 			AS name');

		$this->db->select($select);
		$this->db->from('member');
		$this->db->where('account',$post['account']);
		$this->db->where('password',$post['password']);
		$query 		= $this->db->get();			//取的資料庫資料
		return $query->result_array();			//查詢結果陣列資料

	}
	
}
