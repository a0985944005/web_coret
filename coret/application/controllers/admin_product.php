<?php
class Admin_product extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('admin/index_model','index_model');
		
		//-----------------------判斷是否登入預防直接載入網址-----------------------
				//-----------------------判斷是否登入預防直接載入網址-----------------------
		$session 	= $this->Common->session('select',array());


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
		$header_output['page_meun'] ="product_insert";
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
			


			case 'insert':

			

					$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'product_menu',
							'where' 		=>array(),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array("date"=>"desc")
							);
					$register	= $this->Common->select($post);



			$page_output['product_menu']=$register;
			break;
		
			default:
				break;
		}
		//-----------------------------載入view畫面------------------------------
		
		
		$this->load->view('admin/templates/header',$header_output);
		$this->load->view('components/ckeditor/ckeditor');
		$this->load->view('admin/product/'.$page,$page_output);
		$this->load->view('admin/templates/footer');
		
	}	


	public function insert($blog_id=FALSE)
	{

		$product_menu_id='';
	
	$administrator = encode_php_tags(strip_image_tags(xss_clean($this->input->post('administrator'))));

	  if(!empty($administrator))
	  {
		foreach($administrator as $administrator_)
		{
			$product_menu_id .= ','.$administrator_.',';
		}
		//$product_menu_id=substr($product_menu_id,0,-1);
	  }


	//---------------------寫入的資料-----------------------------
				$post		= array (//由view insert表單轉送過來的資料
									
									'product_menu_id'	=> $product_menu_id,  
									'name'			=> $this->input->post('name'),  						
									'content'		=> $this->input->post('content'),
									'date'		    => date('Y-m-d H:i:s'));
				//---------------------載入參數的資料-----------------------------
				$table 	= array('product');					//各個資料表
				$data	= array($post);						//各個資料表 - 修改資料
				$this->Common->insert($table, $data);		//送出更新	

				$id=$this->db->insert_id();



//---------------------檔案上傳-----------------------------
		$Mutil_upload_msg= false;
		if (!empty($_FILES['pic']['name'][0])) {
				$config = array(
					'upload_path'   => 'application/views/img/product',
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
									'product_id'	=> $id, 
									'pic_name'=> $single_data['file_name'], 									
									'date'		=> date('Y-m-d H:i:s'));
				
				//---------------------載入參數的資料-----------------------------
				$table 	= array('product_pic');					//各個資料表
				$data	= array($post);						//各個資料表 - 修改資料
				$this->Common->insert($table, $data);		//送出更新	
				
				
			}
		}


		redirect('admin_product/index/insert/', 'refresh');
	}
	
	
}