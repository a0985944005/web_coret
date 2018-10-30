<?php
class Admin_html extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	   // $this->load->model('page/html_model','html_model');
		
	//-----------------------判斷是否登入預防直接載入網址-----------------------
		$session 	= $this->Common->session('select',array());
	if(!isset($session['account']) )
		{
			$this->session->sess_destroy();
			redirect('admin_login/index/index/', 'refresh'); //轉換function

		}
	}
	public function index($page,$model_id, $update_id = FALSE)
	{
		if (!file_exists('application/views/admin/html/'.$page.'.php'))
		{
			//show_404();	// 沒有這個頁面
		}
		
		$header_output['session']	= $this->Common->session('select',array());	//載入session參數

		// echo "<pre>";
		// var_dump($header_output['session'])	;
		// exit;
		$header_output['meun'] 		="open";
		$header_output['page_meun_'] ="html".$model_id;
		$header_output['page_meun'] ="set";				
		$header_output['product_menu']="";
		

		$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'product_menu',
							'where' 		=>array('parents_id'=>'0'),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array("date"=>"ASC")
							);
					$register	= $this->Common->select($post);
				foreach ($register as $key => $value) 
				{
						

					$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'product_menu',
							'where' 		=>array('parents_id'=>$value['id']),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array("date"=>"ASC")
							);
					$register_	= $this->Common->select($post);
					if(!empty($register_))
					{
						$register[$key]['sub']=$register_;
					}
					else
					{
						$register[$key]['sub']='';
					}	
				}	

				$header_output['p_menu']=$register;
	
		//-----------------------依照畫面不同，載入不同資料------------------------
		switch($page)
		{
			case 'index':
				$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'web_set',
							'where' 		=>array('id'=>$model_id),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
							
				$register					= $this->Common->select($post);	
				$page_output['html_data'] 	= $register[0];
			default:
				break;
		}
		//-----------------------------載入view畫面------------------------------
		$this->load->view('admin/templates/header',$header_output);
		$this->load->view('components/ckeditor/ckeditor');
		$this->load->view('admin/html/'.$page, $page_output);
		$this->load->view('admin/templates/footer');

	}
	public function update($model_id)
	{
		//---------------------待修改的資料-----------------------------
		$post		= array (//由view update表單轉送過來的資料
							'title' 		=> $this->input->post('title'), 

							'content'		=> $this->input->post('content')
							);
	
		//---------------------載入參數的資料-----------------------------
		//各個資料表
		$table 	= array('web_set');
						
		//各個資料表 - 搜尋條件
		$where 	= array(array('id'	=> $model_id));
						
		//各個資料表 - 修改資料
		$data	= array($post);
					
		//送出更新	
		$this->Common->update($table, $where, $data);
		
		
		//----------------轉換function-------------------
		redirect('admin_html/index/index/'.$model_id, 'refresh');
	}
}