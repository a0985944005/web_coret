<?php
class Admin_product_detail extends CI_Controller 
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

	public function index($page = 'index',$slug = FALSE,$type_id=FALSE)
	{
	//-----------------------------載入參數-------------------------------
		$header_output['session']	= $this->Common->session('select',array());	//載入session參數

		// echo "<pre>";
		// var_dump($header_output['session'])	;
		// exit;
		$header_output['meun'] 		="open";
		$header_output['page_meun'] ="product_detail";
		$header_output['page_meun_'] ="product_detail".$slug;
		$header_output['product_menu']=$type_id;

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
							'table'			=>'product_menu',
							'where' 		=>array('id'=>$slug),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array("date"=>"ASC")
							);
					$register	= $this->Common->select($post);

			$page_output['meunu_name']=$register[0]['name'];

				$slug_=",".$slug.",";



					$this->db->select('*');
					$this->db->from('product');
					
					$this->db->like('product_menu_id',$slug_); 
					$query 		=$this->db->get();			//取的資料庫資料
					$register= $query->result_array();			//查詢結果陣列資料

			
			// echo "<pre>";
			// var_dump($register);
			// exit;
				




			$page_output['product']=$register;
			break;


			case 'update':

							$post 	= array(//輸入的select相關資訊
									'field'			=>array('*'),
									'table'			=>'product',
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
						
						$page_output['data'] 	= $register[0];


						$output = explode(",", $register[0]['product_menu_id']);

						$arr = array_filter($output);
						$page_output['m_data']=$arr;
						// echo "<pre>";
						// var_dump($arr);
						// exit;
						

					$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'product_pic',
							'where' 		=>array('product_id'=>$slug),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array("date"=>"ASC")
							);
					$register	= $this->Common->select($post);



			$page_output['product_pic']=$register;



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
			show_404();
				break;
		}
		//-----------------------------載入view畫面------------------------------
		
		
		$this->load->view('admin/templates/header',$header_output);
				$this->load->view('components/ckeditor/ckeditor');

		$this->load->view('admin/product_detail/'.$page,$page_output);
		$this->load->view('admin/templates/footer');
		
	}	


	public function insert($blog_id=FALSE)
	{

		//---------------------寫入的資料-----------------------------
				$post		= array (//由view insert表單轉送過來的資料
									
									'name'			=> $this->input->post('name'),  									
									'parents_id'		=> $this->input->post('parents_id'),
									'date'		=> date('Y-m-d H:i:s'));
				
				//---------------------載入參數的資料-----------------------------
				$table 	= array('product_menu');					//各個資料表
				$data	= array($post);						//各個資料表 - 修改資料
				$this->Common->insert($table, $data);		//送出更新	
			

		//----------------轉換function-------------------
		redirect('admin_product_detail/index/index', 'refresh');




	}


public function update()
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

		//---------------------待修改的資料-----------------------------
		$post		= array (//由view insert表單轉送過來的資料
									
									'product_menu_id'	=> $product_menu_id,  
									'name'			=> $this->input->post('name'),  						
									'content'		=> $this->input->post('content'),
									'date'		    => date('Y-m-d H:i:s'));
	
		//---------------------載入參數的資料-----------------------------
		//各個資料表
		$table 	= array('product');
						
		//各個資料表 - 搜尋條件
		$where 	= array(array('id'	=> $this->input->post('id')));
						
		//各個資料表 - 修改資料
		$data	= array($post);
					
		//送出更新	
		$this->Common->update($table, $where, $data);



		$id=$this->input->post('id');

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


			redirect($_SERVER['HTTP_REFERER'], 'refresh');
	}


 public function delete_files($delete_id)
	{
		
		
		$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'product_pic',
							'where' 		=>array('id' => $delete_id),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
			$html_type_data = $this->Common->select($post);	
		$this->load->helper('file');
		
		$file = "application/views/img/product/".$html_type_data[0]['pic_name'];
		@unlink($file);
		
		//---------------------載入參數的資料-----------------------------
		$table 	= array('product_pic');								//各個資料表
		$where 	= array(array('id' => $delete_id));				//各個資料表 - 搜尋條件
		$this->Common->delete($table, $where);					//送出刪除	
		
		//----------------轉換function-------------------
		redirect($_SERVER['HTTP_REFERER'], 'refresh');
	}


	public function delete($id)
	{
	

$post 	= array(//輸入的select相關資訊							*刪除部落格檔案*
							'field'			=>array('*'),
							'table'			=>'product_pic',
							'where' 		=>array('product_id' => $id),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
			$blog_type_data = $this->Common->select($post);	
		$this->load->helper('file');
		
		foreach($blog_type_data as $value)
		{
			$file = "application/views/img/product/".$value['pic_name'];
			@unlink($file);
		}

		//---------------------載入參數的資料-----------------------------
		$table 	= array('product_pic');								//各個資料表
		$where 	= array(array('product_id' => $id));				//各個資料表 - 搜尋條件
		$this->Common->delete($table, $where);					//送出刪除	



  //------------------刪除項目------------------------------
  		$table 	= array('product');								//各個資料表
		$where 	= array(array('id' => $id));				//各個資料表 - 搜尋條件
		$this->Common->delete($table, $where);					//送出刪除	

		
	
		redirect($_SERVER['HTTP_REFERER'], 'refresh');
	}	


}