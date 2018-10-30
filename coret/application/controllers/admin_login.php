<?php
class Admin_login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('admin/login_model','login_model');
		
	}
	public function index($page, $msg = FALSE)
	{
		if (!file_exists('application/views/admin/login/'.$page.'.php'))
		{
			show_404();	// 沒有這個頁面
		}

		$page_output['login_error']=$msg;
		//-----------------------------判斷是否為已登入狀態-------------------------
		$account_data = $this->Common->session('select');

			// echo "<pre>";
			// var_dump($account_data);

			// exit;

		if(isset($account_data['account']))
		{
							
			redirect('admin_news/index/news', 'refresh');
		}
		else
		{
						
			$this->load->view('admin/login/'.$page, $page_output);
		}
	}
	public function login()
	{
		//-----------------------先找出是否有該筆會員資料-----------------------
		$account = $this->input->post('account');
		$password = md5($this->input->post('password'));

		// $password = $this->input->post('password');
		
		$post 	= array('account'=>$account,
						'password'=>$password	
						);
							
		$account_data	= $this->login_model->select_join($post);



		//-----------------------依照帳戶資料判斷寫入資訊及轉跳頁面-----------------------
		//若有該帳戶
		
	
		if(!empty($account_data))	
		{
			$delete_session = array();
			$insert_session = array();
			foreach($account_data[0] as $index=>$value)
			{
				$delete_session[$index] = $value;
				$insert_session[$index] = $value;
			}
			
			$this->Common->session('delete',$delete_session);	//清空session
			$this->Common->session('insert',$insert_session);	//寫入session
		
			$session 	= $this->Common->session('select');

			// echo "<pre>";
			// var_dump($session);
			// // echo "in login controller<br>";	
			// exit;
			
		
			  redirect('admin_news/index/news', 'refresh');
			
		}
		//若無該帳戶
		else	
		{
			//----------------轉換function-------------------
			redirect('admin_login/index/index/error', 'refresh');
		}
		
	}
	
	
	public function logout()
	{
		//登出全部刪除	
		$this->session->sess_destroy();
		
		//----------------轉換function-------------------
		redirect('admin_login/index/index/', 'refresh');
	}

	



}