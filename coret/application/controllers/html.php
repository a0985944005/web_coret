<?php
class Html extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('model_html','html_model');
		
		//-----------------------權限判斷預防直接載入網址-----------------------
		$session = $this->Common->session('select',array('P_status'=>''));
		if($session['P_status'] != 'admin')
		{
			redirect('admin_login/logout/', 'refresh');
		}
		
	}
	public function index($page = 'news', $update_id = FALSE)
	{
		if (!file_exists('application/views/admin/blog/'.$page.'.php'))
		{
			//show_404();	// 沒有這個頁面
		}
		//-----------------------------載入參數-------------------------------
		$session = $this->Common->session('select',array('P_level'=>''));
		if($session['P_level'] == 0)
		{
			$header_output['menu_data'] = $this->Common->menu('all');				//目錄
		}
		else
		{
			$header_output['menu_data'] = $this->Common->menu('edit');				//目錄
		}
		$header_output['session']	= $this->Common->session('select',array());	//載入session參數	
		
		//-----------------------------麵包削仔入-------------------------------
		$breadcrumbs_data					= $this->Common->breadcrumbs('bpath');	
		$show_menu							= $breadcrumbs_data;
		if(is_array($show_menu)){
			unset($show_menu[count($show_menu)-1]);
		}
		$header_output['breadcrumbs_data'] 	= $breadcrumbs_data;					//麵包削
		$header_output['show_menu']			= $show_menu;							//目前點選的選單id
		
		
		//-----------------------依照畫面不同，載入不同資料------------------------
		switch($page)
		{
			case 'update_news':
				$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'blog',
							'where' 		=>array('id'=>$update_id),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
				$regist 					= $this->Common->select($post);
				$page_output['blog_data']	= $regist[0];
			case 'insert_news':
				$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'blog_type',
							'where' 		=>array('enable'=>'Yes'),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array('local'=>'ASC')
							);
				$page_output['blog_type_data'] = $this->Common->select($post);	
				break;
			case 'type':
				$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'blog_type',
							'where' 		=>array(),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array('local'=>'ASC')
							);
				$page_output['blog_type_data'] = $this->Common->select($post);	
				
				break;
			case 'update_type':
				$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'blog_type',
							'where' 		=>array('id'=>$update_id),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
				$regist 						= $this->Common->select($post);	
				$page_output['blog_type_data']	= $regist[0];
				break;	
			
			case 'news':
				$post 	= array(//輸入的select相關資訊
							'field'			=>array('blog_type.title 	as BT_title',
													'blog.id			as B_id',
													'blog.title			as B_title',
													'blog.link			as B_link',
													'blog.date			as B_date'),
							'table'			=>'blog',
							'where' 		=>array(),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array('blog.date'=>'DESC')
							);
				$page_output['blog_data'] = $this->blog_model->select($post);
				
				break;	
			default:
			case 'insert_type':
				$page_output['null_data'] = '';
				break;
			
		}
		
		//-----------------------------載入view畫面------------------------------
		$this->load->view('admin/templates/header',$header_output);
		$this->load->view('components/ckeditor/ckeditor');
		$this->load->view('admin/blog/'.$page, $page_output);
		$this->load->view('admin/templates/footer');
	}
	public function insert_type()
	{
		//---------------------寫入的資料-----------------------------
		$post		= array (//由view insert表單轉送過來的資料
							'local' 	=> $this->input->post('local'), 
							'title'		=> $this->input->post('title'), 
							'enable'	=> $this->input->post('enable'), 
							'date'		=> date('Y-m-d H:i:s'));
		
		//---------------------載入參數的資料-----------------------------
		$table 	= array('blog_type');				//各個資料表
		$data	= array($post);						//各個資料表 - 修改資料
		$this->Common->insert($table, $data);		//送出更新	
		
		//----------------轉換function-------------------
		redirect('admin_blog/index/type', 'refresh');
	}
	
	public function update_type()
	{
		//---------------------待修改的資料-----------------------------
		$post		= array (//由view update表單轉送過來的資料
							'local' 	=> $this->input->post('local'), 
							'title'		=> $this->input->post('title'), 
							'enable'	=> $this->input->post('enable'));
		
		//---------------------載入參數的資料-----------------------------
		$table 	= array('blog_type');								//各個資料表
		$where 	= array(array('id' => $this->input->post('id')));	//各個資料表 - 搜尋條件
		$data	= array($post);										//各個資料表 - 修改資料
		$this->Common->update($table, $where, $data);				//送出更新	
		
		//----------------轉換function-------------------
		redirect('admin_blog/index/type', 'refresh');
	}
	
	public function delete_type($delete_type_id)
	{
		//---------------------載入參數的資料-----------------------------
		$table 	= array('blog_type');							//各個資料表
		$where 	= array(array('id' => $delete_type_id));		//各個資料表 - 搜尋條件
		$this->Common->delete($table, $where);					//送出刪除	
		
		//----------------轉換function-------------------
		redirect('admin_blog/index/type', 'refresh');
	}
	
	public function insert_news()
	{
		//---------------------寫入的資料-----------------------------
		$post		= array (//由view insert表單轉送過來的資料
							'type_id'	=> $this->input->post('type_id'), 
							'title'		=> $this->input->post('title'), 
							'content'	=> $this->input->post('content'),  
							'date'		=> date('Y-m-d H:i:s'));
		
		//---------------------載入參數的資料-----------------------------
		$table 	= array('blog');					//各個資料表
		$data	= array($post);						//各個資料表 - 修改資料
		$this->Common->insert($table, $data);		//送出更新	
		
		$post 	= array(//輸入的select相關資訊
					'field'			=>array('*'),
					'table'			=>'blog',
					'where' 		=>array(),
					'limit_star' 	=>'',
					'limit_count'	=>'',
					'order_by'		=>array('id'=>'DESC')
					);
		$regist 						= $this->Common->select($post);	
		$blog_data	= $regist[0];
		
		
		//---------------------待修改的資料-----------------------------
		$link_string = 'front_blog/index/detail/'.$blog_data['type_id'].'/'.$blog_data['id'];
		$post		= array ('link' 	=> $link_string);
		
		//---------------------載入參數的資料-----------------------------
		$table 	= array('blog');									//各個資料表
		$where 	= array(array('id' => $blog_data['id']));			//各個資料表 - 搜尋條件
		$data	= array($post);										//各個資料表 - 修改資料
		$this->Common->update($table, $where, $data);				//送出更新	
			
		
		//----------------轉換function-------------------
		redirect('admin_blog/index/news', 'refresh');
	}
	
	public function update_news()
	{
		//---------------------待修改的資料-----------------------------
		$post		= array (//由view update表單轉送過來的資料
							'type_id'	=> $this->input->post('type_id'), 
							'title'		=> $this->input->post('title'), 
							'content'	=> $this->input->post('content'));
		
		//---------------------載入參數的資料-----------------------------
		$table 	= array('blog');									//各個資料表
		$where 	= array(array('id' => $this->input->post('id')));	//各個資料表 - 搜尋條件
		$data	= array($post);										//各個資料表 - 修改資料
		$this->Common->update($table, $where, $data);				//送出更新	
		
		//----------------轉換function-------------------
		redirect('admin_blog/index/news', 'refresh');
	}
	
	public function delete_news($delete_id)
	{
		//---------------------載入參數的資料-----------------------------
		$table 	= array('blog');								//各個資料表
		$where 	= array(array('id' => $delete_id));				//各個資料表 - 搜尋條件
		$this->Common->delete($table, $where);					//送出刪除	
		
		//----------------轉換function-------------------
		redirect('admin_blog/index/news', 'refresh');
	}
}