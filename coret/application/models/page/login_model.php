<?php
class Login_model extends CI_Model
{
	public function select_join($post)
	{

		$csie = $this->load->database('csie',TRUE);
		$csie->select('*');
		$csie->from('csie.member');
		//$this->db->join('laboratorymaintenance_system.mcode', 'laboratorymaintenance_system.mcode.member_id = csie.member.mem_id','left');
		//$this->db->join('laboratorymaintenance_system.privilege', 'laboratorymaintenance_system.privilege.id =laboratorymaintenance_system.mcode.privilege_id','left');
		$csie->where('username',$post['account']);
		$csie->where('password',$post['password']);
		$query 		= $csie->get();			//取的資料庫資料
		return $query->result_array();			//查詢結果陣列資料

	}
	
}
