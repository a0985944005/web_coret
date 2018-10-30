<?php
class Front_index extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index($page = 'index'/*,$slug = FALSE*/)
	{

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

			// $account_data = $this->Common->session('select');

			// $header_output['session']=$account_data;

			// echo "<pre>";
			// var_dump($account_data);
			// exit;
		
			// $post 	= array(//輸入的select相關資訊
			// 				'field'			=>array('*'),
			// 				'table'			=>'web_set',
			// 				'where' 		=>array('id'=>4),
			// 				'limit_star' 	=>'',
			// 				'limit_count'	=>'',
			// 				'order_by'		=>array()
			// 				);
			// 		$register	= $this->Common->select($post);


//			$header_output['pic']=$register[0]['value'];

		
		//-----------------------------首頁內容資料-------------------------------
		
		// switch($page)
		// {
		// 	case 'index':
		// 		if((!empty($account_data))&&(isset($account_data['id'])))
		// 		{

		// 				$post 	= array(//輸入的select相關資訊
		// 					'field'			=>array('*'),
		// 					'table'			=>'member',
		// 					'where' 		=>array('id'=>$account_data['id']),
		// 					'limit_star' 	=>'',
		// 					'limit_count'	=>'',
		// 					'order_by'		=>array()
		// 					);
		// 			$register	= $this->Common->select($post);

		// 			$header_output['member']=$register[0];
					
		// 		}

		
				
		// 			$this->db->select('*');		//要取得的欄位
		// 			$this->db->from('web_set');		//要取得的資料表名稱

		// 			$where = "id=2";
		// 			$this->db->where($where, NULL, FALSE);

		// 			$query 		= $this->db->get();					//取的資料庫資料
		// 			$query_data	= $query->result_array();			//查詢結果陣列資料
			

		// 			foreach ($query_data as $key => $value) 
		// 			{
		// 				$output[] = explode("=", $value['value'])[1];
		// 			}

		// 			$page_out['video']=$output;

		// 			// echo "<pre>";
		// 			// var_dump($output);
		// 			// exit;
				
		// 				$post 	= array(//輸入的select相關資訊
		// 					'field'			=>array('*'),
		// 					'table'			=>'web_set',
		// 					'where' 		=>array('id'=>3),
		// 					'limit_star' 	=>'',
		// 					'limit_count'	=>'',
		// 					'order_by'		=>array()
		// 					);
		// 			$register	= $this->Common->select($post);

		// 			$page_out['map']=$register[0];
				
		// 	break;
				
			
		// 	default:
		// 	show_404();
		// 		break;
		// }
		//-----------------------------載入view畫面------------------------------

		
		
		$this->load->view('front/templates/header',$header_output);
		$this->load->view('front/templates/slide',$header_output);
		$this->load->view('front/index/'.$page);
		$this->load->view('front/templates/footer');
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