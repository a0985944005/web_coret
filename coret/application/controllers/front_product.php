<?php
class Front_product extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index($page = 'index',$slug = '1')
	{
			// $account_data = $this->Common->session('select');

			// $header_output['session']=$account_data;

			// echo "<pre>";
			// var_dump($account_data);
			// exit;
		
			$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'product_menu',
							'where' 		=>array('parents_id'=>0),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array('date'=>'ASC')
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
							'order_by'		=>array('date'=>'ASC')
							);
						$register[$key]['sub']	= $this->Common->select($post);
					}

			// echo "<pre>";
			// var_dump($register);
			// exit;
		

			$header_output['product_menu']=$register;

		
		//-----------------------------首頁內容資料-------------------------------
				$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'slide',
							'where' 		=>array(),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array('date'=>"desc")
							);
					$register	= $this->Common->select($post);
					$header_output['slide']=$register;
		switch($page)
		{
			case 'index':

			$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'product_menu',
							'where' 		=>array('id'=>$slug),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array('date'=>"desc")
							);
					$register	= $this->Common->select($post);
			$page_out['product_menu_name'] = $register[0]['name'];


			$this->db->select('*');
			$this->db->from('product');
			$this->db->like('product_menu_id', ','.$slug.','); 	
			$query = $this->db->get();
			$register=$query->result_array();		

			foreach ($register as $key => $value) {
				

				$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'product_pic',
							'where' 		=>array('product_id'=>$value['id']),
							'limit_star' 	=>'0',
							'limit_count'	=>'1',
							'order_by'		=>array('date'=>"desc")
							);
					$register_	= $this->Common->select($post);

					if(!empty($register_))
					{
					 $register[$key]['list']=$register_[0];
					}
					else
					{
						 $register[$key]['list']=array();
					}
			}
				$page_out['product'] = $register;

			// echo "<pre>";
			// var_dump($page_out['product']);
			// exit;
		


				//if((!empty($account_data))&&(isset($account_data['id'])))
				//{

					// 	$post 	= array(//輸入的select相關資訊
					// 		'field'			=>array('*'),
					// 		'table'			=>'web_set',
					// 		'where' 		=>array('id'=>$account_data['id']),
					// 		'limit_star' 	=>'',
					// 		'limit_count'	=>'',
					// 		'order_by'		=>array()
					// 		);
					// $register	= $this->Common->select($post);

					//$header_output['member']=$register[0];
					
				//}
					break;
			case 'detail':



			$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'product_menu',
							'where' 		=>array('parents_id'=>0),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array('date'=>'ASC')
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
							'order_by'		=>array('date'=>'ASC')
							);
						$register[$key]['sub']	= $this->Common->select($post);
					}

			$page_out['product_menu_list'] = $register;
// echo "<pre>";
// 			var_dump($page_out['product_menu_list']);
// 			exit;

					$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'product',
							'where' 		=>array('id'=>$slug),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array('date'=>"desc")
							);
					$register	= $this->Common->select($post);



			foreach ($register as $key => $value) {
				

				$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'product_pic',
							'where' 		=>array('product_id'=>$value['id']),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array('date'=>"desc")
							);
					$register_	= $this->Common->select($post);

					if(!empty($register_))
					{
					 $register[$key]['list']=$register_;
					}
					else
					{
						 $register[$key]['list']=array();
					}
				}
					$page_out['product_detail'] = $register;

			// 			echo "<pre>";
			// var_dump($page_out['product_detail']);
			// exit;

					break;

			
			default:
			
			show_404();
				break;
		}
		//-----------------------------載入view畫面------------------------------

		
		
		$this->load->view('front/templates/header',$header_output);
		$this->load->view('front/templates/slide',$header_output);
		$this->load->view('front/product/'.$page,$page_out);
		$this->load->view('front/templates/footer',$header_output);
	}






	public function contact()
	{


		$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'web_set',
							'where' 		=>array('id'=>1),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
					$register	= $this->Common->select($post);	

					$admin_email=$register[0]['value'];
						 
		 $send[] = $register[0]['value'];


		//管理員EMAIL資料 
		 $post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'member',
							'where' 		=>array('privilege_id'=>1),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array()
							);
					$register	= $this->Common->select($post);

			foreach ($register as $key => $value) {
				$send[]=$value['email'];
			}
		$email  =$this->input->post('email');
		$name   =$this->input->post('name');
		$subject=$this->input->post('subject');
		$message=$this->input->post('message');



		//$send='actionkeep@gmail.com';
		$this->load->library('email');
		$this->email->from($email, $name);
		$this->email->to($send);
		$this->email->subject($subject);
		$this->email->message($message); 
		$this->email->send();
	redirect('front_index/index/index/', 'refresh'); //轉換function
	}
}