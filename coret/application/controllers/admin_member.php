<?php
class Admin_member extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	   // $this->load->model('page/blog_model','blog_model');
		
		$session 	= $this->Common->session('select',array());
		
		//echo "<pre>";
		//var_dump($session);
		//exit;
		
		if(!isset($session['account']) )
		{
			$this->session->sess_destroy();
			redirect('admin_login/index/index/', 'refresh'); //轉換function

		}
	}
	public function index($page = 'index', $update_id = FALSE)
	{
		$header_output['session']	= $this->Common->session('select',array());	//載入session參數

		// echo "<pre>";
		// var_dump($header_output['session'])	;
		// exit;
		$header_output['meun'] 		="close";
		$header_output['page_meun'] ="member";
		
		$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'Journal',
							'where' 		=>array(),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array("date"=>"desc")
							);
					$register	= $this->Common->select($post);

		$header_output['Journal_sub']	=$register;		
		$header_output['Journal_id']=$update_id;
		//-----------------------依照畫面不同，載入不同資料------------------------
		switch($page)
		{
			
			case 'index':
				$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'member',
							'where' 		=>array(),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array('id'=>'ASC')
							);
				$page_output['tb_user'] = $this->Common->select($post);	

				
				
				break;

				
			default:
			case 'insert':
				$page_output['null_data'] = '';
				break;
			
		}
		
		//-----------------------------載入view畫面------------------------------
		$this->load->view('admin/templates/header',$header_output);	
		$this->load->view('admin/member/'.$page, $page_output);
		$this->load->view('admin/templates/footer');
	}
	
	
	
	
	public function delete($delete_type_id)
	{
		//---------------------載入參數的資料-----------------------------
		$table 	= array('member');							//各個資料表
		$where 	= array(array('id' => $delete_type_id));		//各個資料表 - 搜尋條件
		$this->Common->delete($table, $where);					//送出刪除	
		
		//----------------轉換function-------------------
		redirect('admin_member/index/index', 'refresh');
	}
	
	
	public function insert()
	{
			$post		= array (//由view insert表單轉送過來的資料
									
									'account'	=>  $this->input->post('account'),  
									'password'	=> md5($this->input->post('password')),
									'name'       => $this->input->post('name'));
				//---------------------載入參數的資料-----------------------------
				$table 	= array('member');					//各個資料表
				$data	= array($post);						//各個資料表 - 修改資料
				$this->Common->insert($table, $data);		//送出更新	

	redirect('admin_member/index/index', 'refresh');				

	}	
}