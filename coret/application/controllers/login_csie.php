<?php
class Login_csie extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('page/login_model','login_model');
		
	}
	public function index($page, $msg = FALSE)
	{
		if (!file_exists('application/views/page/login/'.$page.'.php'))
		{
			show_404();	// 沒有這個頁面
		}
		
		//-----------------------------判斷是否為已登入狀態-------------------------
		$account_data = $this->Common->session('select');
			//echo "<pre>";
			//var_dump($account_data);
		if(isset($account_data['mem_level']))
		{
			redirect('csie_index/index/index/', 'refresh'); //轉換function
		}
		else
		{
			//-----------------------------載入view畫面------------------------------
			$page_output['login_error'] = '';	//若登入帳戶密碼錯誤，則會回傳error
			if(!($msg === FALSE))
			{
				$page_output['login_error'] = '帳戶或密碼錯誤或者是權限不符';
			}					
			$this->load->view('page/login/'.$page, $page_output);
		}
	}
	public function login()
	{
		//-----------------------先找出是否有該筆會員資料-----------------------
		$account = $this->input->post('account');
		$password = md5($this->input->post('password'));
		
		$post 	= array('account'=>$account,
						'password'=>$password	
						);
							
		$account_data	= $this->login_model->select_join($post);
			//echo "<pre>";
			//var_dump($account_data);
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
			if($session['mem_level']=='系辦人員')
			{
				redirect('csie_index/index/index', 'refresh');
			}
			else
			{
				redirect('csie_index/index/news', 'refresh');
			}
			//----------------轉換function-------------------
			
		}
		//若無該帳戶
		else	
		{
			//----------------轉換function-------------------
			redirect('login_csie/index/index/error', 'refresh');
		}
		
	}
	
	
	public function logout()
	{
		//登出全部刪除	
		$this->session->sess_destroy();
		
		//----------------轉換function-------------------
		redirect('login_csie/index/index/', 'refresh');
	}
}