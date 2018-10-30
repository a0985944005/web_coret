<?php
class Report_model extends CI_Model
{
	public function chart_select($post)
	{
		//----------------------------參數表----------------------------
		/*
		【post】
		'M_O_choice' 	=> $this->input->post('M_O_choice'), 	=> 'money' or 'order'
		'product_type' 	=> $this->input->post('product_type'),	=> array()
		'time_type'		=> $this->input->post('time_type'),		=> 'year_range' 'year' 'month' 'date'
		'time'			=> $this->input->post('time')			=> '2015,2018' '2015' '2016-4' '2014-7-8'
		*/
		
		//----------------------------類別處理----------------------------
		$product_type_data = array();
		foreach($post['problem_type'] as $product_type_Data)
		{
			$product_type_data[] 	= array('id'	=> $product_type_Data['id'],
											'name'	=> $product_type_Data['name'],
											'data'	=> array());
		}
		//----------------------------日期處理----------------------------
		$time_type_data	= array();		//[傳送給圖表data的陣列索引為0開始] = 存放where篩選日期
		switch(strtolower($post['time_type']))//轉小寫
		{
			case 'year_range':
				//若傳過來的年區間有值，就直接計算其區間
				if(!empty($post['time']))
				{
					$time 	= explode(',',$post['time']);
					for($y = $time[0] ; $y <= $time[1] ; $y++)
					{
						$time_type_data[] = (string)$y;
					}
				}
				//若傳過來的年區間沒有值，就計算近三年的年區間
				else
				{
					$Now_year 	= (int)date('Y');	//目前年分
					$Past_year 	= $Now_year-2;		//過去兩年
					
					for($y = $Past_year ; $y <= $Now_year ; $y++)
					{
						$time_type_data[] = (string)$y;
					}
				}
				break;
			case 'year':
				for($y = 1 ; $y <= 12 ; $y++)
				{
					if($y < 10)
					{
						$time_type_data[] = $post['time'].'-0'.$y;
					}
					else
					{
						$time_type_data[] = $post['time'].'-'.$y;
					}
				}
				break;
			case 'month':
				for($m = 1 ; $m <= 31 ; $m++)
				{
					if($m < 10)
					{
						$time_type_data[] = $post['time'].'-0'.$m;
					}
					else
					{
						$time_type_data[] = $post['time'].'-'.$m;
					}
				}
				break;
			case 'date':
				for($d = 0 ; $d <= 23 ; $d++)
				{
					if($d < 10)
					{
						$time_type_data[] = $post['time'].'-0'.$d;
					}
					else
					{
						$time_type_data[] = $post['time'].'-'.$d;
					}
				}
				break;
			default:
				return 'error';
				break;
		}
		//--------------------跟取篩選主軸的部份去執行SQL的部分-----------------------
		//找出類別中所有的商品id
		$output_data 		= array();
		//return $product_type_data;
		//exit;
		for($ptd = 0; $ptd < count($product_type_data) ; $ptd++)
		//for($ptd = 0; $ptd < count($post['problem_type']) ; $ptd++)
		{
			$output_data[$ptd] = array( 'name'=>'',
										'data'=>array());
			//依照類別中的商品找出對應的order_list資料
			//且需符合表單設定的日期區間
			for($date = 0 ; $date < count($time_type_data) ; $date++)
			{
					
								$this->db->select(array('id'));	//要取得的欄位
									$this->db->from('lab_device_fix_deatil');											//要取得的資料表名稱
									
									$where = array();
									if($date != count($time_type_data)-1)								//最後一筆日期區間需額外判斷
									{
										$where	= array('date >='		=> $time_type_data[$date],
														'date <'		=> $time_type_data[$date+1]
														);//篩選出符合條件的order_list
									}
									else
									{
										switch(strtolower($post['time_type']))//轉小寫
										{
											case 'year_range':
												$where	= array('date >='		=> $time_type_data[$date],
																'date <'		=> (string)((int)$time_type_data[$date]+1));
												break;
											case 'year':
												$where	= array('date >='		=> $time_type_data[$date],
																'date <'		=> $post['time'].'-13');
												break;
											case 'month':
												$where	= array('date >='		=> $time_type_data[$date],
																'date <'		=> $post['time'].'-32');
												break;
											case 'date':
												$where	= array('date >='		=> $time_type_data[$date],
																'date <'		=> $post['time'].'-24');
												break;
											default:
												return 'error';
												break;
										}	
									}
						
							
							switch($post['fix_type'])
							{
								case 'all':
									break;
								case 'done':
									$this->db->where('fix_type','done');						//要取得的資料表篩選條件
									break;
								case 'undone':
									$this->db->where('fix_type','undone');						//要取得的資料表篩選條件
									break;			
								default:
									break;
							}
									$this->db->where($where);						//要取得的資料表篩選條件
									$this->db->like('problem_id', $product_type_data[$ptd]['name']); 
									$query 		= $this->db->get();					//取的資料庫資料
									$query_data	= $query->result_array();			//查詢結果陣列資料
									
									//$output_data[0]['data'][$date] = count($query_data);
			$output_data[$ptd]['name'] 			= $product_type_data[$ptd]['name'];	
			
			$output_data[$ptd]['data'][$date]	= count($query_data);	
				
			}

		}
		
		return $output_data;
	}
	
	public function chart_select_all($post)
	{
		//----------------------------參數表----------------------------
		/*
		【post】
		'M_O_choice' 	=> $this->input->post('M_O_choice'), 	=> 'money' or 'order'
		'time_type'		=> $this->input->post('time_type'),		=> 'year_range' 'year' 'month' 'date'
		'time'			=> $this->input->post('time')			=> '2015,2018' '2015' '2016-4' '2014-7-8'
		*/
		
		//----------------------------日期處理----------------------------
		$time_type_data	= array();		//[傳送給圖表data的陣列索引為0開始] = 存放where篩選日期
		switch(strtolower($post['time_type']))//轉小寫
		{
			case 'year_range':
				//若傳過來的年區間有值，就直接計算其區間
				if(!empty($post['time']))
				{
					$time 	= explode(',',$post['time']);
					for($y = $time[0] ; $y <= $time[1] ; $y++)
					{
						$time_type_data[] = (string)$y;
					}
				}
				//若傳過來的年區間沒有值，就計算近三年的年區間
				else
				{
					$Now_year 	= (int)date('Y');	//目前年分
					$Past_year 	= $Now_year-2;		//過去兩年
					
					for($y = $Past_year ; $y <= $Now_year ; $y++)
					{
						$time_type_data[] = (string)$y;
					}
				}
				break;
			case 'year':
				for($y = 1 ; $y <= 12 ; $y++)
				{
					if($y < 10)
					{
						$time_type_data[] = $post['time'].'-0'.$y;
					}
					else
					{
						$time_type_data[] = $post['time'].'-'.$y;
					}
				}
				break;
			case 'month':
				for($m = 1 ; $m <= 31 ; $m++)
				{
					if($m < 10)
					{
						$time_type_data[] = $post['time'].'-0'.$m;
					}
					else
					{
						$time_type_data[] = $post['time'].'-'.$m;
					}
				}
				break;
			case 'date':
				for($d = 0 ; $d <= 23 ; $d++)
				{
					if($d < 10)
					{
						$time_type_data[] = $post['time'].'-0'.$d;
					}
					else
					{
						$time_type_data[] = $post['time'].'-'.$d;
					}
				}
				break;
			default:
				return 'error';
				break;
		}
		
		//--------------------SQL的部分-----------------------
		$output_data = array(0 => array('name'=>'','data'=>array()));
		$output_data[0]['name'] = '【全部設備維修】';
		
		//陣列初始化
		for($date = 0 ; $date < count($time_type_data) ; $date++)
		{
			$output_data[0]['data'][$date] = 0;
		}	
		
		
		//查詢order_list資料
		//且需符合表單設定的日期區間
		for($date = 0 ; $date < count($time_type_data) ; $date++)
		{		
		
			$this->db->select(array('id'));	//要取得的欄位
					$this->db->from('lab_device_fix_deatil');											//要取得的資料表名稱
					
					$where = array();
					if($date != count($time_type_data)-1)								//最後一筆日期區間需額外判斷
					{
						$where	= array('date >='		=> $time_type_data[$date],
										'date <'		=> $time_type_data[$date+1]
										);//篩選出符合條件的order_list
					}
					else
					{
						switch(strtolower($post['time_type']))//轉小寫
						{
							case 'year_range':
								$where	= array('date >='		=> $time_type_data[$date],
												'date <'		=> (string)((int)$time_type_data[$date]+1));
								break;
							case 'year':
								$where	= array('date >='		=> $time_type_data[$date],
												'date <'		=> $post['time'].'-13');
								break;
							case 'month':
								$where	= array('date >='		=> $time_type_data[$date],
												'date <'		=> $post['time'].'-32');
								break;
							case 'date':
								$where	= array('date >='		=> $time_type_data[$date],
												'date <'		=> $post['time'].'-24');
								break;
							default:
								return 'error';
								break;
						}	
					}
		
			
			switch($post['fix_type'])
			{
				case 'all':
					break;
				case 'done':
					$this->db->where('fix_type','done');						//要取得的資料表篩選條件
					break;
				case 'undone':
					$this->db->where('fix_type','undone');						//要取得的資料表篩選條件
					break;			
				default:
					break;
			}
					$this->db->where($where);						//要取得的資料表篩選條件
					$query 		= $this->db->get();					//取的資料庫資料
					$query_data	= $query->result_array();			//查詢結果陣列資料
					
					$output_data[0]['data'][$date] = count($query_data);
		}
		
		return $output_data;
	}
	


	public function chart_select_lab_all($post)
	{
		//----------------------------參數表----------------------------
		/*
		【post】
		'M_O_choice' 	=> $this->input->post('M_O_choice'), 	=> 'money' or 'order'
		'time_type'		=> $this->input->post('time_type'),		=> 'year_range' 'year' 'month' 'date'
		'time'			=> $this->input->post('time')			=> '2015,2018' '2015' '2016-4' '2014-7-8'
		*/
		
		//----------------------------日期處理----------------------------
		$time_type_data	= array();		//[傳送給圖表data的陣列索引為0開始] = 存放where篩選日期
		switch(strtolower($post['time_type']))//轉小寫
		{
			case 'year_range':
				//若傳過來的年區間有值，就直接計算其區間
				if(!empty($post['time']))
				{
					$time 	= explode(',',$post['time']);
					for($y = $time[0] ; $y <= $time[1] ; $y++)
					{
						$time_type_data[] = (string)$y;
					}
				}
				//若傳過來的年區間沒有值，就計算近三年的年區間
				else
				{
					$Now_year 	= (int)date('Y');	//目前年分
					$Past_year 	= $Now_year-2;		//過去兩年
					
					for($y = $Past_year ; $y <= $Now_year ; $y++)
					{
						$time_type_data[] = (string)$y;
					}
				}
				break;
			case 'year':
				for($y = 1 ; $y <= 12 ; $y++)
				{
					if($y < 10)
					{
						$time_type_data[] = $post['time'].'-0'.$y;
					}
					else
					{
						$time_type_data[] = $post['time'].'-'.$y;
					}
				}
				break;
			case 'month':
				for($m = 1 ; $m <= 31 ; $m++)
				{
					if($m < 10)
					{
						$time_type_data[] = $post['time'].'-0'.$m;
					}
					else
					{
						$time_type_data[] = $post['time'].'-'.$m;
					}
				}
				break;
			case 'date':
				for($d = 0 ; $d <= 23 ; $d++)
				{
					if($d < 10)
					{
						$time_type_data[] = $post['time'].'-0'.$d;
					}
					else
					{
						$time_type_data[] = $post['time'].'-'.$d;
					}
				}
				break;
			default:
				return 'error';
				break;
		}
		
		//--------------------SQL的部分-----------------------
		$output_data = array(0 => array('name'=>'','data'=>array()));
		$output_data[0]['name'] = '【全部實驗室】';
		
		//陣列初始化
		for($date = 0 ; $date < count($time_type_data) ; $date++)
		{
			$output_data[0]['data'][$date] = 0;
		}	
		
		
		//查詢order_list資料
		//且需符合表單設定的日期區間
		for($date = 0 ; $date < count($time_type_data) ; $date++)
		{		
		
			$this->db->select(array('id'));	//要取得的欄位
					$this->db->from('lab_device_fix_deatil');											//要取得的資料表名稱
					
					$where = array();
					if($date != count($time_type_data)-1)								//最後一筆日期區間需額外判斷
					{
						$where	= array('date >='		=> $time_type_data[$date],
										'date <'		=> $time_type_data[$date+1]
										);//篩選出符合條件的order_list
					}
					else
					{
						switch(strtolower($post['time_type']))//轉小寫
						{
							case 'year_range':
								$where	= array('date >='		=> $time_type_data[$date],
												'date <'		=> (string)((int)$time_type_data[$date]+1));
								break;
							case 'year':
								$where	= array('date >='		=> $time_type_data[$date],
												'date <'		=> $post['time'].'-13');
								break;
							case 'month':
								$where	= array('date >='		=> $time_type_data[$date],
												'date <'		=> $post['time'].'-32');
								break;
							case 'date':
								$where	= array('date >='		=> $time_type_data[$date],
												'date <'		=> $post['time'].'-24');
								break;
							default:
								return 'error';
								break;
						}	
					}
		
			
			switch($post['fix_type'])
			{
				case 'all':
					break;
				case 'done':
					$this->db->where('fix_type','done');						//要取得的資料表篩選條件
					break;
				case 'undone':
					$this->db->where('fix_type','undone');						//要取得的資料表篩選條件
					break;			
				default:
					break;
			}
					$this->db->where($where);						//要取得的資料表篩選條件
					$query 		= $this->db->get();					//取的資料庫資料
					$query_data	= $query->result_array();			//查詢結果陣列資料
					
					$output_data[0]['data'][$date] = count($query_data);
		}
		
		return $output_data;
	}
	public function chart_lab_select($post)
	{
		//----------------------------參數表----------------------------
		/*
		【post】
		'M_O_choice' 	=> $this->input->post('M_O_choice'), 	=> 'money' or 'order'
		'product_type' 	=> $this->input->post('product_type'),	=> array()
		'time_type'		=> $this->input->post('time_type'),		=> 'year_range' 'year' 'month' 'date'
		'time'			=> $this->input->post('time')			=> '2015,2018' '2015' '2016-4' '2014-7-8'
		*/
		
		//----------------------------類別處理----------------------------
		$product_type_data = array();
		foreach($post['problem_type'] as $product_type_Data)
		{
			$product_type_data[] 	= array('id'	=> $product_type_Data['id'],
											'name'	=> $product_type_Data['name'],
											'data'	=> array());
		}
		//----------------------------日期處理----------------------------
		$time_type_data	= array();		//[傳送給圖表data的陣列索引為0開始] = 存放where篩選日期
		switch(strtolower($post['time_type']))//轉小寫
		{
			case 'year_range':
				//若傳過來的年區間有值，就直接計算其區間
				if(!empty($post['time']))
				{
					$time 	= explode(',',$post['time']);
					for($y = $time[0] ; $y <= $time[1] ; $y++)
					{
						$time_type_data[] = (string)$y;
					}
				}
				//若傳過來的年區間沒有值，就計算近三年的年區間
				else
				{
					$Now_year 	= (int)date('Y');	//目前年分
					$Past_year 	= $Now_year-2;		//過去兩年
					
					for($y = $Past_year ; $y <= $Now_year ; $y++)
					{
						$time_type_data[] = (string)$y;
					}
				}
				break;
			case 'year':
				for($y = 1 ; $y <= 12 ; $y++)
				{
					if($y < 10)
					{
						$time_type_data[] = $post['time'].'-0'.$y;
					}
					else
					{
						$time_type_data[] = $post['time'].'-'.$y;
					}
				}
				break;
			case 'month':
				for($m = 1 ; $m <= 31 ; $m++)
				{
					if($m < 10)
					{
						$time_type_data[] = $post['time'].'-0'.$m;
					}
					else
					{
						$time_type_data[] = $post['time'].'-'.$m;
					}
				}
				break;
			case 'date':
				for($d = 0 ; $d <= 23 ; $d++)
				{
					if($d < 10)
					{
						$time_type_data[] = $post['time'].'-0'.$d;
					}
					else
					{
						$time_type_data[] = $post['time'].'-'.$d;
					}
				}
				break;
			default:
				return 'error';
				break;
		}
		//--------------------跟取篩選主軸的部份去執行SQL的部分-----------------------
		//找出類別中所有的商品id
		$output_data 		= array();
		//return $product_type_data;
		//exit;
		for($ptd = 0; $ptd < count($product_type_data) ; $ptd++)
		//for($ptd = 0; $ptd < count($post['problem_type']) ; $ptd++)
		{
			$output_data[$ptd] = array( 'name'=>'',
										'data'=>array());
			//依照類別中的商品找出對應的order_list資料
			//且需符合表單設定的日期區間
			for($date = 0 ; $date < count($time_type_data) ; $date++)
			{
					
								$this->db->select(array('*'));	//要取得的欄位
									$this->db->from('lab_device_fix_deatil');											//要取得的資料表名稱
									
									$where = array();
									if($date != count($time_type_data)-1)								//最後一筆日期區間需額外判斷
									{
										$where	= array('lab_device_fix_deatil.date >='		=> $time_type_data[$date],
														'lab_device_fix_deatil.date <'		=> $time_type_data[$date+1]
														);//篩選出符合條件的order_list
									}
									else
									{
										switch(strtolower($post['time_type']))//轉小寫
										{
											case 'year_range':
												$where	= array('lab_device_fix_deatil.date >='		=> $time_type_data[$date],
																'lab_device_fix_deatil.date <'		=> (string)((int)$time_type_data[$date]+1));
												break;
											case 'year':
												$where	= array('lab_device_fix_deatil.date >='		=> $time_type_data[$date],
																'lab_device_fix_deatil.date <'		=> $post['time'].'-13');
												break;
											case 'month':
												$where	= array('lab_device_fix_deatil.date >='		=> $time_type_data[$date],
																'lab_device_fix_deatil.date <'		=> $post['time'].'-32');
												break;
											case 'date':
												$where	= array('lab_device_fix_deatil.date >='		=> $time_type_data[$date],
																'lab_device_fix_deatil.date <'		=> $post['time'].'-24');
												break;
											default:
												return 'error';
												break;
										}	
									}
						
							
							switch($post['fix_type'])
							{
								case 'all':
									break;

								case 'done':
									$this->db->where('fix_type','done');						//要取得的資料表篩選條件
									break;
								case 'undone':
									$this->db->where('fix_type','undone');						//要取得的資料表篩選條件
									break;			
								default:
									break;
							}
							
									$this->db->join('lab_device', 'lab_device.id = lab_device_fix_deatil.lab_device_id', 'left');		//要關連的表
									$this->db->join('lab', 'lab.id = lab_device.lab_id', 'left');		//要關連的表
									$this->db->where($where);						//要取得的資料表篩選條件
									$this->db->where('lab.id', $product_type_data[$ptd]['id']); 
									$query 		= $this->db->get();					//取的資料庫資料
									$query_data	= $query->result_array();			//查詢結果陣列資料
									
									//$output_data[0]['data'][$date] = count($query_data);
			$output_data[$ptd]['name'] 			= $product_type_data[$ptd]['name'];	
			
			$output_data[$ptd]['data'][$date]	= count($query_data);	
				
			}

		}
		
		return $output_data;
	}


}
