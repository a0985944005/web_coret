<?php
class Front_news extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index($page = 'index',$count = false)
	{

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
							'table'			=>'news',
							'where' 		=>array(),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array('date'=>"desc")
							);
					$register	= $this->Common->select($post);
		$page_output['news']=$register;		


		  $data_nums =count($register);
	//$sql   = "select * from test.member";

    //$result = mysql_query($sql);
    //$data_nums = mysql_num_rows($result); //統計總比數  
    $per = 5; //每頁顯示項目數量  
    $pages = ceil($data_nums/$per); //取得不小於值的下一個整數  
    
    if (empty($count)){ //假如$_GET["page"]未設置  
        $page_count=1; //則在此設定起始頁數  
    } else {  
        $page_count = intval($count); //確認頁數只能夠是數值資料
        if ($page_count>=$pages)
          {$page_count=$pages; }; 
          if ($page_count<1)
             {$page_count=1; };
    }  
    $start = ($page_count-1)*$per; //每一頁開始的資料序號  
    
     // $post 	= array(//輸入的select相關資訊
					// 		'field'			=>array('*'),
					// 		'table'			=>'news',
					// 		'where' 		=>array('news_type_id'=>$slug),
					// 		'limit_star' 	=>$start,
					// 		'limit_count'	=>$per,
					// 		'order_by'		=>array('date'=>'desc')
					// 		);
					// $register	= $this->Common->select($post);

					// $news_all=$this->news_model->select_all($register);
					// $page_output['news_data']=$news_all;


					//$page_output['news_data']=$register;
					$page_output['data_nums']=$data_nums;
					$page_output['page']=$page_count;
					$page_output['pages']=$pages;
					$page_output['now_count']=$count;
				
			break;
				
			case 'detail':
				$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'news',
							'where' 		=>array('id'=>$count),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array('date'=>'ASC')
							);
					$register	= $this->Common->select($post);


					$post 	= array(//輸入的select相關資訊
							'field'			=>array('*'),
							'table'			=>'news_files',
							'where' 		=>array('news_id'=>$register[0]['id']),
							'limit_star' 	=>'',
							'limit_count'	=>'',
							'order_by'		=>array('date'=>'ASC')
							);
					$register_	= $this->Common->select($post);

					$register[0]['sub']=$register_;


					$page_output['news_data']=$register;
			break;		
					
			default:
			show_404();
				break;
		}
		//-----------------------------載入view畫面------------------------------

		
		
		$this->load->view('front/templates/header',$header_output);
		$this->load->view('front/templates/slide',$header_output);
		$this->load->view('front/news/'.$page,$page_output);
		$this->load->view('front/templates/footer',$header_output);
	}


}