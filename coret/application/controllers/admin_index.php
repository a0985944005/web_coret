<?php
class Admin_index extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('admin/index_model','index_model');
		
		//-----------------------判斷是否登入預防直接載入網址-----------------------
		$session 	= $this->Common->session('select',array());
		
		// echo "<pre>";
		// var_dump($session['privilege_id']);
		// exit;
		
		// echo "<pre>";
		// 	var_dump($session);

			//exit;

		if(!isset($session['account']) )
		{
			$this->session->sess_destroy();
			redirect('admin_login/index/index/', 'refresh'); //轉換function

		}
		
	}

	public function index($page = 'index',$slug = FALSE)
	{
	//-----------------------------載入參數-------------------------------
	
		$header_output['session']	= $this->Common->session('select',array());	//載入session參數

		// echo "<pre>";
		// var_dump($header_output['session'])	;
		// exit;
		$header_output['meun'] 		="close";
		$header_output['page_meun'] ="index";
		
	

		//-----------------------------首頁內容資料-------------------------------
		switch($page)
		{
			case 'index':

			// 		$post 	= array(//輸入的select相關資訊
			// 				'field'			=>array('*'),
			// 				'table'			=>'journal',
			// 				'where' 		=>array(),
			// 				'limit_star' 	=>'',
			// 				'limit_count'	=>'',
			// 				'order_by'		=>array("date"=>"desc")
			// 				);
			// 		$register	= $this->Common->select($post);
	$page_output['journal']='';

			// $page_output['journal']=$register;
			break;
			case 'update':

					$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'journal',
							'where' 		=>array('id'=>$slug),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
							
				$register					= $this->Common->select($post);	

				if(empty($register))
				{
					show_404();
				}
				
				$page_output['journal_data'] 	= $register[0];



				break;

			case 'insert':
				$page_output['journal_data'] 	= '';
				break;
			default:
				break;
		}
		//-----------------------------載入view畫面------------------------------
		
		
		$this->load->view('admin/templates/header',$header_output);
		$this->load->view('admin/index/'.$page,$page_output);
		$this->load->view('admin/templates/footer');
		
	}	

public function insert($blog_id=FALSE)
	{

		//---------------------寫入的資料-----------------------------
				$post		= array (//由view insert表單轉送過來的資料
									
									'title'			=> $this->input->post('title'),  									
									'url'		=> $this->input->post('url'),
									'date'		=> date('Y-m-d H:i:s'));
				
				//---------------------載入參數的資料-----------------------------
				$table 	= array('journal');					//各個資料表
				$data	= array($post);						//各個資料表 - 修改資料
				$this->Common->insert($table, $data);		//送出更新	
			

		//----------------轉換function-------------------
		redirect('admin_index/index/index', 'refresh');




	}



	public function update()
	{
		//---------------------待修改的資料-----------------------------
		$post		= array (//由view update表單轉送過來的資料
							'title' 		=> $this->input->post('title'), 
							'url'		=> $this->input->post('url')
							);
	
		//---------------------載入參數的資料-----------------------------
		//各個資料表
		$table 	= array('journal');
						
		//各個資料表 - 搜尋條件
		$where 	= array(array('id'	=> $this->input->post('id')));
						
		//各個資料表 - 修改資料
		$data	= array($post);
					
		//送出更新	
		$this->Common->update($table, $where, $data);
		





		//----------------轉換function-------------------
		redirect('admin_index/index/index', 'refresh');

}

	public function delete($id)
	{
	


  //------------------刪除部落格項目------------------------------
  		$table 	= array('journal');								//各個資料表
		$where 	= array(array('id' => $id));				//各個資料表 - 搜尋條件
		$this->Common->delete($table, $where);					//送出刪除	

		
	
		redirect($_SERVER['HTTP_REFERER'], 'refresh');
	}		


}