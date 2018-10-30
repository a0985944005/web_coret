<?php
class Admin_menu extends CI_Controller 
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
		$header_output['meun'] 		="open";
		$header_output['page_meun'] ="menu";
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
							'table'			=>'product_menu',
							'where' 		=>array('parents_id'=>'0'),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array("date"=>"ASC")
							);
					$register	= $this->Common->select($post);

					foreach ($register as $key => $value) {
						

					$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'product_menu',
							'where' 		=>array('parents_id'=>$value['id']),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array("date"=>"ASC")
							);
					$sub	= $this->Common->select($post);


					$register[$key]['sub']=$sub;
					}




			$page_output['product_menu']=$register;
			break;


			case 'insert':

			

					$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'product_menu',
							'where' 		=>array('parents_id'=>'0'),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array("date"=>"desc")
							);
					$register	= $this->Common->select($post);



			$page_output['product_menu']=$register;
			break;
			case 'update':

							$post 	= array(//輸入的select相關資訊
									'field'			=>array('*'),
									'table'			=>'product_menu',
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
						
						$page_output['menu_data'] 	= $register[0];



					$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'product_menu',
							'where' 		=>array('parents_id'=>'0'),
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
		$this->load->view('admin/menu/'.$page,$page_output);
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
		redirect('admin_menu/index/index', 'refresh');




	}
	public function update()
	{
		//---------------------待修改的資料-----------------------------
		$post		= array (//由view update表單轉送過來的資料
							'name'			=> $this->input->post('name'),  									
							'parents_id'		=> $this->input->post('parents_id')
							);
	
		//---------------------載入參數的資料-----------------------------
		//各個資料表
		$table 	= array('product_menu');
						
		//各個資料表 - 搜尋條件
		$where 	= array(array('id'	=> $this->input->post('id')));
						
		//各個資料表 - 修改資料
		$data	= array($post);
					
		//送出更新	
		$this->Common->update($table, $where, $data);
		
		//----------------轉換function-------------------
		redirect('admin_menu/index/index', 'refresh');

	}



	public function delete($id)
	{
	


  //------------------刪除子選單項目------------------------------
  		$table 	= array('product_menu');								//各個資料表
		$where 	= array(array('id' => $id));				//各個資料表 - 搜尋條件
		$this->Common->delete($table, $where);					//送出刪除	

		
	
		redirect($_SERVER['HTTP_REFERER'], 'refresh');
	}	



		public function delete_all($id)
	{
	  //------------------刪除子選單項目------------------------------
  		$table 	= array('product_menu');								//各個資料表
		$where 	= array(array('parents_id' => $id));				//各個資料表 - 搜尋條件
		$this->Common->delete($table, $where);					//送出刪除	

  //------------------刪除父選單項目------------------------------
  		$table 	= array('product_menu');								//各個資料表
		$where 	= array(array('id' => $id));				//各個資料表 - 搜尋條件
		$this->Common->delete($table, $where);					//送出刪除	

		
	
		redirect($_SERVER['HTTP_REFERER'], 'refresh');
	}
}