<?php
class Admin_news extends CI_Controller 
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

	public function index($page = 'news',$slug = FALSE)
	{
	//-----------------------------載入參數-------------------------------
	
		$header_output['session']	= $this->Common->session('select',array());	//載入session參數

		// echo "<pre>";
		// var_dump($header_output['session'])	;
		// exit;
		$header_output['meun'] 		="close";
		$header_output['page_meun'] ="news";
		$header_output['page_meun_'] ="";				
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
	

		//-----------------------------首頁內容資料-------------------------------
		switch($page)
		{
			case 'news':

					$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'news',
							'where' 		=>array(),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array("date"=>"desc")
							);
					$register	= $this->Common->select($post);
					
					// $page_output['journal']='';

					$page_output['news_data']=$register;
			break;


			case 'update':

					$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'news',
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
				
				$page_output['news_data'] = $register[0];


				$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'news_files',
							'where' 		=>array('news_id'=>$slug),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
				$regist 						= $this->Common->select($post);	
				$page_output['news_files_data']	= $regist;


				break;

			case 'insert':
				$page_output['news_data'] 	= '';
				break;
			default:
				break;
		}
		//-----------------------------載入view畫面------------------------------
		
		
		$this->load->view('admin/templates/header',$header_output);
		$this->load->view('components/ckeditor/ckeditor');
		$this->load->view('admin/news/'.$page,$page_output);
		$this->load->view('admin/templates/footer');
		
	}	

public function insert($blog_id=FALSE)
	{

		//---------------------寫入的資料-----------------------------
				$post		= array (//由view insert表單轉送過來的資料
			
									'title'			=> $this->input->post('title'),  							

									'content'	=> $this->input->post('content')
									);

				
				//---------------------載入參數的資料-----------------------------
				$table 	= array('news');					//各個資料表
				$data	= array($post);						//各個資料表 - 修改資料
				$this->Common->insert($table, $data);		//送出更新	

				$news_id=$this->db->insert_id();


		//---------------------檔案上傳-----------------------------
		$Mutil_upload_msg= false;
		if (!empty($_FILES['pic']['name'][0])) {
				$config = array(
					'upload_path'   => 'application/views/download/',
					'allowed_types' => '*',
					'encrypt_name'  => TRUE,                       
				);
				$Mutil_upload_msg = $this->Common->mutil_file_uploads($_FILES['pic'],$config);
			}
		
			
			$pic_name = '';		//存放最後要存入SQL的圖片名稱
		if($Mutil_upload_msg != false && !empty($Mutil_upload_msg))
		{
			foreach($Mutil_upload_msg as $single_data)
			{				
				//---------------------寫入的資料-----------------------------
				$post		= array (//由view insert表單轉送過來的資料
									'news_id'	=> $news_id, 
									'file_name'	=> $single_data['file_name'],  
									'real_name'	=> $single_data['orig_name']  					);
				
				//---------------------載入參數的資料-----------------------------
				$table 	= array('news_files');					//各個資料表
				$data	= array($post);						//各個資料表 - 修改資料
				$this->Common->insert($table, $data);		//送出更新	
				
				
			}
		}
			

		//----------------轉換function-------------------
		redirect('admin_news/index/news', 'refresh');




	}



	public function update()
	{

		//---------------------待修改的資料-----------------------------
		$news_id =  $this->input->post('id');
		$post		= array (//由view update表單轉送過來的資料
							'title' 		=> $this->input->post('title'), 
							'content'		=> $this->input->post('content')
							);
	
		//---------------------載入參數的資料-----------------------------
		//各個資料表
		$table 	= array('news');
						
		//各個資料表 - 搜尋條件
		$where 	= array(array('id'	=> $this->input->post('id')));
						
		//各個資料表 - 修改資料
		$data	= array($post);
					
		//送出更新	
		$this->Common->update($table, $where, $data);
		


//---------------------檔案上傳-----------------------------
		$Mutil_upload_msg= false;
		if (!empty($_FILES['pic']['name'][0])) {
				$config = array(
					'upload_path'   => 'application/views/download/',
					'allowed_types' => '*',
					'encrypt_name'  => TRUE,                       
				);
				$Mutil_upload_msg = $this->Common->mutil_file_uploads($_FILES['pic'],$config);
			}
		
			
			$pic_name = '';		//存放最後要存入SQL的圖片名稱
		if($Mutil_upload_msg != false && !empty($Mutil_upload_msg))
		{
			foreach($Mutil_upload_msg as $single_data)
			{				
				//---------------------寫入的資料-----------------------------
				$post		= array (//由view insert表單轉送過來的資料
									'news_id'	=> $news_id, 
									'file_name'	=> $single_data['file_name'],  
									'real_name'	=> $single_data['orig_name']  					);
				
				//---------------------載入參數的資料-----------------------------
				$table 	= array('news_files');					//各個資料表
				$data	= array($post);						//各個資料表 - 修改資料
				$this->Common->insert($table, $data);		//送出更新	



	}
		}



		//----------------轉換function-------------------
		redirect('admin_news/index/news', 'refresh');

}

	public function delete($id)
	{
	


  //------------------刪除部落格項目------------------------------
  		$table 	= array('news');								//各個資料表
		$where 	= array(array('id' => $id));				//各個資料表 - 搜尋條件
		$this->Common->delete($table, $where);					//送出刪除	

		
	
		redirect($_SERVER['HTTP_REFERER'], 'refresh');
	}


	public function download_files($delete_id)
	{
		
		
		$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'news_files',
							'where' 		=>array('id' => $delete_id),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
			$news_type_data = $this->Common->select($post);	
		
		//echo $blog_type_data[0]['file_name'];
				
		$this->load->helper('download');		
		$data = file_get_contents("application/views/download/".$news_type_data[0]['file_name']); // Read the file's contents
		$name = $news_type_data[0]['real_name'];
		force_download($name, $data);

	}		

	public function delete_files($delete_id)
	{
		
		
		$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'news_files',
							'where' 		=>array('id' => $delete_id),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
			$blog_type_data = $this->Common->select($post);	
		$this->load->helper('file');
		
		$file = "application/views/download/".$blog_type_data[0]['file_name'];
		@unlink($file);
		
		//---------------------載入參數的資料-----------------------------
		$table 	= array('news_files');								//各個資料表
		$where 	= array(array('id' => $delete_id));				//各個資料表 - 搜尋條件
		$this->Common->delete($table, $where);					//送出刪除	
		
		//----------------轉換function-------------------
		redirect($_SERVER['HTTP_REFERER'], 'refresh');
	}	


}