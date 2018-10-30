<?php
class Admin_slideshow extends CI_Controller 
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
		$header_output['meun'] 		="close";
		$header_output['page_meun'] ="slideshow";
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
			case 'index':

					$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'slide',
							'where' 		=>array(),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array("local"=>"asc")
							);
					$register	= $this->Common->select($post);
					
					// $page_output['journal']='';

					$page_output['slideshow_data']=$register;
			break;


			case 'update':

					$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'slide',
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
				
				$page_output['slideshow_data'] = $register[0];


				break;

			case 'insert':
				$page_output['slideshow_data'] 	= '';
				break;
			default:
				break;
		}
		//-----------------------------載入view畫面------------------------------
		
		
		$this->load->view('admin/templates/header',$header_output);
		$this->load->view('admin/slideshow/'.$page,$page_output);
		$this->load->view('admin/templates/footer');
		
	}	

public function insert($blog_id=FALSE)
	{
		
		$local =  $this->input->post('local');
		$tittle = $this->input->post('tittle');
		

						$this->db->select('*');
						$this->db->from('slide');
						$this->db->where("local >= $local");
						$this->db->order_by("local", "asc"); 
						$query 		= $this->db->get();			//取的資料庫資料
						$row= $query->result_array();

						//變更排序
				if($local == $row[0]['local'])
					{

						$temp = 0;
						$slide_id = $this->insert_sort($local,$temp,$tittle) ;
						
	 
					}
				else
					{
							//---------------------寫入的資料-----------------------------
					$post		= array (//由view insert表單轉送過來的資料
				
										'local'		=> $local,  	
										'tittle'	=> $tittle,					
										'date'		=> date('Y-m-d H:i:s'));
										
					
					//---------------------載入參數的資料-----------------------------
					$table 	= array('slide');					//各個資料表
					$data	= array($post);						//各個資料表 - 修改資料
					$this->Common->insert($table, $data);		//送出更新	

					$slide_id=$this->db->insert_id();

					}
					

		//---------------------檔案上傳-----------------------------
		$Mutil_upload_msg= false;
		if (!empty($_FILES['pic']['name'][0]))
			 {
				$config = array(
					'upload_path'   => 'application/views/img/slideshow/',
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
											'pic_name'	=> $single_data['file_name'] );
						
						//---------------------載入參數的資料-----------------------------
						$table 	= array('slide');	

						//各個資料表
						$where 	= array(array('id'	=> $slide_id));

						$data	= array($post);						//各個資料表 - 修改資料
						$this->Common->update($table,$where, $data);		//送出更新	
						
						
					}
				}

			
		//----------------轉換function-------------------
		redirect('admin_slideshow/index/index', 'refresh');




	}


function insert_sort($local,$temp,$tittle)
	{
						$this->db->select('*');
						$this->db->from('slide');
						$this->db->where("local >= $local");
						$this->db->order_by("local", "asc"); 
						$query 		= $this->db->get();			//取的資料庫資料
						$row= $query->result_array();


		foreach ($row as $row_)
			{
				if ($row_['local']+1 == $local)
					{

								$post		= array (//由view update表單轉送過來的資料
								
											'local'		=> $local,  						
											'date'		=> date('Y-m-d H:i:s'));
								//---------------------載入參數的資料-----------------------------
								//各個資料表
								$table 	= array('slide');
												
								//各個資料表 - 搜尋條件
								$where 	= array(array('id'	=> $temp));
												
								//各個資料表 - 修改資料
								$data	= array($post);
											
								//送出更新	
								$this->Common->update($table, $where, $data);

								$temp = $row_['id'];
								$temp_tittle = $row_['tittle'];
								$local += 1;

					}
				else
					{
						if($temp == 0)
							{
								$temp = $row_['id'];
								$temp_tittle = $row_['tittle'];

								$post		= array (//由view insert表單轉送過來的資料
					
											'local'		=> $local,  
											'tittle'	=> $tittle,					
											'date'		=> date('Y-m-d H:i:s'));
											
							//---------------------載入參數的資料-----------------------------
							$table 	= array('slide');					//各個資料表
							$data	= array($post);						//各個資料表 - 修改資料
							$this->Common->insert($table, $data);		//送出更新	

							$slide_id=$this->db->insert_id();

							$local += 1;



							$post		= array (//由view insert表單轉送過來的資料
					
											'local'		=> $local,  					
											'date'		=> date('Y-m-d H:i:s'));

							$table 	= array('slide');
												
								//各個資料表 - 搜尋條件
								$where 	= array(array('id'	=> $temp));
												
								//各個資料表 - 修改資料
								$data	= array($post);
											
								//送出更新	
								$this->Common->update($table, $where, $data);

							$local += 1;

							}
						else
						{


						$post		= array (//由view insert表單轉送過來的資料
					
											'local'		=> $local,  
											'tittle'	=> $temp_tittle,					
											'date'		=> date('Y-m-d H:i:s'));
											
						
							//---------------------載入參數的資料-----------------------------
							$table 	= array('slide');					//各個資料表
							
							$where 	= array(array('id'	=> $temp));		//各個資料表 - 修改資料
							
							$data	= array($post);
											
								//送出更新	
							$this->Common->update($table, $where, $data);
						}

				}

			}

		return $slide_id;

	}



	public function update()
	{

		//---------------------待修改的資料-----------------------------
		$slide_id =  $this->input->post('id');
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
					'upload_path'   => 'application/views/img/slideshow/',
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
									'id'	=> $slide_id, 
									'pic_name'	=> $single_data['file_name']
									 					);
				
				//---------------------載入參數的資料-----------------------------
				$table 	= array('slide');					//各個資料表
				$data	= array($post);						//各個資料表 - 修改資料
				$this->Common->insert($table, $data);		//送出更新	



	}
		}



		//----------------轉換function-------------------
		redirect('admin_slideshow/index/index', 'refresh');

}

	public function delete($id)
	{
	


  //------------------刪除部落格項目------------------------------
  		$table 	= array('slide');								//各個資料表
		$where 	= array(array('id' => $id));				//各個資料表 - 搜尋條件
		$this->Common->delete($table, $where);					//送出刪除	

		
	
		redirect($_SERVER['HTTP_REFERER'], 'refresh');
	}


	public function download_files($delete_id)
	{
		
		
		$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'slide',
							'where' 		=>array('id' => $delete_id),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
			$news_type_data = $this->Common->select($post);	
		
		//echo $blog_type_data[0]['file_name'];
				
		$this->load->helper('download');		
		$data = file_get_contents("application/views/img/slideshow/".$news_type_data[0]['pic_name']); // Read the file's contents
		$name = $news_type_data[0]['pic_name'];
		force_download($name,$data);

	}		

	public function delete_files($delete_id)
	{
		
		
		$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'slide',
							'where' 		=>array('id' => $delete_id),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
			$blog_type_data = $this->Common->select($post);	
		$this->load->helper('file');
		
		$file = "application/views/img/slideshow/".$blog_type_data[0]['pic_name'];
		@unlink($file);
		
		//---------------------載入參數的資料-----------------------------
		$table 	= array('slide');								//各個資料表
		$where 	= array(array('id' => $delete_id));				//各個資料表 - 搜尋條件
		$this->Common->delete($table, $where);					//送出刪除	
		
		//----------------轉換function-------------------
		redirect($_SERVER['HTTP_REFERER'], 'refresh');
	}	


}