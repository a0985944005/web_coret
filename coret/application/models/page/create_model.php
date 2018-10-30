<?php
class Create_model extends CI_Model
{
	public function select_join($post_create)
	{
		//----------------------------參數表----------------------------
		/*
		【post_menu】
		'field'			=>array('*'),
		'table'			=>'menu',
		'where' 		=>array(),
		'limit_star' 	=>'',
		'limit_count'	=>'',
		'order_by'		=>array('id'=>'desc')
		*/
		
		//-------------------------SQL語法載入區-------------------------
		$this->db->select($post_create['field']);		//要取得的欄位
		$this->db->from($post_create['table']);		//要取得的資料表名稱
		$this->db->where($post_create['where']);		//要取得的資料表篩選條件
		
		//排序
		foreach($post_create['order_by'] as $field=>$sort){
			$this->db->order_by($field,$sort);
			}
		
		//要取得的筆數及偏移量
		if($post_create['limit_count'] != 0){   
			$this->db->limit($post_create['limit_count'], $post_create['limit_star']);
			}
		
		$this->db->join('path', 'path.menu_id = menu.id', 'left');	//要關連的表
		$this->db->join('model','model.id = menu.model_id', 'left');		//要關連的表
		$query 		= $this->db->get();					//取的資料庫資料
		$query_data	= $query->result_array();			//查詢結果陣列資料
		
		for($file_count = 0 ; $file_count < count($query_data) ; $file_count++)
		{
			$post_create['where'] 			= array('parent'=>$query_data[$file_count]['id']);
			$query_data[$file_count]['sub'] = $this->select_join($post_create);
		}
		
		return $query_data;			
	}
	
	public function select($post_create)
	{
		//--------------參數表--------------
		/*
		【post_menu】
		'field'			=>array('*'),
		'table'			=>'menu',
		'where' 		=>array(),
		'limit_star' 	=>'',
		'limit_count'	=>''
		*/
		
		$this->db->select($post_create['field']);		//要取得的欄位
		$this->db->from($post_create['table']);			//要取得的資料表名稱
		$this->db->where($post_create['where']);		//要取得的資料表篩選條件
		
		if($post_create['limit_count'] != 0){			//要取得的筆數及偏移量
			$this->db->limit($post_create['limit_count'], $post_create['limit_star']);
			}
		$this->db->join('path', 'path.menu_id = menu.id', 'left');	//要關連的表
		$query = $this->db->get();					//取的資料庫資料
		
		return $query->result_array();				//資料回傳
	}
	
	public function insert($post_create, $post_path)
	{
		//--------------執行步驟--------------
		/*
		1.先將model寫入
		2.將model_id取出
		3.將model_id以及對應的路徑(controllor/function)存入path table
		4.將model_id以及對應menu的資料存入
		*/
		
		//--------------參數表--------------
		/*
		【post_create】
		'name' 		=> $this->input->post('name') 		
		'model_id'	=> $this->input->post('model_id')
		'local' 	=> $this->input->post('local')
		'parent' 	=> $this->input->post('parent')
		'active' 	=> $this->input->post('active')
		'edit' 		=> $this->input->post('edit')
		
		【post_path】
		'fpath' 	=> $this->input->post('fpath')
		'bpath' 	=> $this->input->post('bpath')
		*/
		
		$error_msg  = '';	//儲存錯誤訊息
		
		//------------先判斷輸入的parent是否有錯誤-------------
		$select_parent			= $this->db->get_where('menu', array('id' => $post_create['parent']));
		$select_parent_data 	= $select_parent->result_array();
		if($post_create['parent'] != 0 && empty($select_parent_data))
		{
			return $error_msg ='父項目輸入錯誤';
		}
		
		
		
		
		//------------model寫入-------------
		switch($post_create['model_id'])
		{ 	
			//新增空白頁面
			case "0":
				$this->db->insert('menu',$post_create); 				//寫入menu
				$post_path['menu_id'] = $this->db->insert_id();		//找出剛新增那筆資料的id
				$this->db->insert('path',$post_path); 					//寫入path
				break;
				
			//新增模組
			//model table新增後，要找出需要剛新增的model_id來寫入menu及path table
			case "cal":
			case "privilege":
			case "mails":
			case "news":
			case "Link":
			case "photorun":													//寫入path
			case "order":
			case "chart":
			case "record":
			case "discount":
				$this->db->insert('menu',$post_create); 				//寫入menu
				$post_path['menu_id']  	= $this->db->insert_id();
				
				//將寫入的model_id置入前台路徑中
				if(empty($post_path['fpath'])){
					$post_path['fpath']		= '';	
					}
					
				//將寫入的model_id置入後台路徑中
				if(empty($post_path['bpath'])){
					$post_path['bpath']		= 'index.php/admin_discount/index/index/';	
					}
				$this->db->insert('path',$post_path); 					//寫入path
				break;
			case "photorun":
				$this->db->insert('menu',$post_create); 				//寫入menu
				$post_path['menu_id']  	= $this->db->insert_id();
				
				//將寫入的model_id置入前台路徑中
				if(empty($post_path['fpath'])){
					$post_path['fpath']		= 'index.php/photorun/index/index/';	
					}
					
				//將寫入的model_id置入後台路徑中
				if(empty($post_path['bpath'])){
					$post_path['bpath']		= 'index.php/admin_photorun/index/index/';	
					}
				$this->db->insert('path',$post_path); 					//寫入path
				break;
			case "shopgirl":
				$this->db->insert('menu',$post_create); 				//寫入menu
				$post_path['menu_id']  	= $this->db->insert_id();
				
				//將寫入的model_id置入前台路徑中
				if(empty($post_path['fpath'])){
					$post_path['fpath']		= 'index.php/shopgirl/index/index/';	
					}
					
				//將寫入的model_id置入後台路徑中
				if(empty($post_path['bpath'])){
					$post_path['bpath']		= 'index.php/admin_shopgirl/index/index/';	
					}
				$this->db->insert('path',$post_path); 					//寫入path
				break;
			case "html":
				$post_model = array(//model 寫入資料
									'name'			=>	$post_create['model_id'],
									'privilege_id'	=>	'0');
									
				$this->db->insert('model',$post_model); 				//寫入model
				
				$post_create['model_id'] = $this->db->insert_id();		//找出剛新增那筆資料的id，並存入
				$this->db->insert('menu',$post_create); 				//寫入menu
				
				
				$post_path['menu_id']  	= $this->db->insert_id();	
				
				
				//---------------------寫入path------------------------------------------------------
				//將寫入的model_id置入前台路徑中
				if(empty($post_path['fpath'])){
					$post_path['fpath']		= 'index.php/html/index/index/'.$post_create['model_id'];	
					}
					
				//將寫入的model_id置入後台路徑中
				if(empty($post_path['bpath'])){
					$post_path['bpath']		= 'index.php/admin_html/index/index/'.$post_create['model_id'];	
					}
				$this->db->insert('path',$post_path); 					
				
				//-------------------寫入html 預設資料--------------------------------------
				$this->db->insert('mod_html',array('model_id'=>$post_create['model_id'])); 
				break;
			case "activity":
				$post_model = array(//model 寫入資料
									'name'			=>	$post_create['model_id'],
									'privilege_id'	=>	'0');
									
				$this->db->insert('model',$post_model); 				//寫入model
				
				$post_create['model_id'] = $this->db->insert_id();		//找出剛新增那筆資料的id，並存入
				$this->db->insert('menu',$post_create); 				//寫入menu
				
				
				$post_path['menu_id']  	= $this->db->insert_id();	
				
				
				//---------------------寫入path------------------------------------------------------
				//將寫入的model_id置入前台路徑中
				if(empty($post_path['fpath'])){
					$post_path['fpath']		= 'index.php/activity/index/index/'.$post_create['model_id'];	
					}
					
				//將寫入的model_id置入後台路徑中
				if(empty($post_path['bpath'])){
					$post_path['bpath']		= 'index.php/admin_activity/index/index/'.$post_create['model_id'];	
					}
				$this->db->insert('path',$post_path); 					
				
				//-------------------寫入html 預設資料--------------------------------------
				$this->db->insert('mod_html',array('model_id'=>$post_create['model_id'])); 
				break;
			case "shopcar":
				$post_model = array(//model 寫入資料
									'name'			=>	$post_create['model_id'],
									'privilege_id'	=>	'0');
									
				$this->db->insert('model',$post_model); 				//寫入model
				
				$post_create['model_id'] = $this->db->insert_id();		//找出剛新增那筆資料的id，並存入
				$this->db->insert('menu',$post_create); 				//寫入menu
				
				
				$post_path['menu_id']  	= $this->db->insert_id();	
				if(empty($post_path['fpath'])){
					$post_path['fpath']		= 'index.php/product/index/index/'.$post_create['model_id'];	//將寫入的model_id置入前台路徑中
					}
				if(empty($post_path['bpath'])){
					$post_path['bpath']		= 'index.php/admin_product/index/index/'.$post_create['model_id'];	//將寫入的model_id置入前台路徑中
					}
				$this->db->insert('path',$post_path); 					//寫入path
				break;		
			case "mService":
				//-----------------先寫入空白主目錄--------------------------
				$model_id					= $post_create['model_id'];	//先原先的model_id轉存到$model_id
				$post_create['model_id'] 	= 0;						//令原先的model_id為0
				$this->db->insert('menu',$post_create); 				//query~
				$post_create['parent']		= $this->db->insert_id();	//將剛寫入資料庫的menu_id轉存至$post_create['parent']
				
				$post_path['menu_id'] 		= $post_create['parent'];	//載入menu_id
				$this->db->insert('path',$post_path); 					//寫入path
				
				//-----------------寫入model--------------------------
				$post_model = array('name'			=>	$model_id,		
									'privilege_id'	=>	'0');			//model 寫入資料
				$this->db->insert('model',$post_model); 				//寫入model
				$model_id 					= $this->db->insert_id();	//找出新增model資料的id，並存入 $model_id
				$post_create['model_id']	= $model_id;				//將$model_id的資料轉存回$post_create資料集
				
				//-----------------寫入次要目錄	【類別】		【admin_mod_mService_class】--------------------
				$post_create['name']	= '客服分類';															//寫入名稱
				$post_create['local']	= 0;																//寫入排列順序預設值
				$this->db->insert('menu',$post_create); 													//寫入menu
				
				$post_path['menu_id']  	= $this->db->insert_id();											//找出新增menu_id，並存入
				$post_path['fpath']		= 'index.php/mod_mService_class/index/index/'.$post_create['model_id'];	//將寫入的model_id置入前台路徑中
				$post_path['bpath']		= 'index.php/admin_mod_mService_class/index/index/'.$post_create['model_id'];	//將寫入的model_id置入前台路徑中
				$this->db->insert('path',$post_path); 														//寫入path
				
				
				//-----------------寫入次要目錄	【問題子資料】	【admin_mod_mService】--------------------------
				$post_create['name']	= '網站問題';															//寫入名稱
				$post_create['local']	= 1;																//寫入排列順序預設值
				$this->db->insert('menu',$post_create); 													//寫入menu
				
				$post_path['menu_id']  	= $this->db->insert_id();											//找出新增menu_id，並存入
				$post_path['fpath']		= 'index.php/mod_mService/index/index/'.$post_create['model_id'];		//將寫入的model_id置入前台路徑中
				$post_path['bpath']		= 'index.php/admin_mod_mService/index/index/'.$post_create['model_id'];		//將寫入的model_id置入前台路徑中
				$this->db->insert('path',$post_path); 														//寫入path
				
				
				//-----------------寫入次要目錄	【線上提問】	【admin_mod_mService_online】-------------------
				$post_create['name']	= '線上客服';															//寫入名稱
				$post_create['local']	= 2;																//寫入排列順序預設值
				$this->db->insert('menu',$post_create); 													//寫入menu
				
				$post_path['menu_id']  	= $this->db->insert_id();											//找出新增menu_id，並存入
				$post_path['fpath']		= 'index.php/mod_mService_online/index/index/'.$post_create['model_id'];//將寫入的model_id置入前台路徑中
				$post_path['bpath']		= 'index.php/admin_mod_mService_online/index/index/'.$post_create['model_id'];//將寫入的model_id置入前台路徑中
				$this->db->insert('path',$post_path); 														//寫入path
							
				break;
			//範圍以外的部份，需要進行錯誤處理
			default:
				$error_msg = 'model_id 產生例外狀況';
				break;
		}		
	}
	
	public function delete($post)
	{
		//--------------參數表--------------
		$id 		= $post['id'];		//儲存menu_id
		$model_id;						//儲存model_id來刪除path與model用
		
		
		//-----------------找出子項目，並且需要刪除-------------------
		$select = array(//輸入的select相關資訊
						'field'			=>array('menu.id',
												'menu.model_id'),
						'table'			=>'menu',
						'where' 		=>array('parent'=>$id),
						'limit_star' 	=>'',
						'limit_count'	=>'',
						'order_by'		=>array('local'=>'asc')
						);
		$select_data = $this->select_join($select);
		$this->delete_sub($select_data);				//刪除子項目
				
		
		//-----------------刪除主項目--------------------------
		//取出model_id
		$query = $this->db->get_where('menu', array('id'=>$id));
		foreach ($query->result_array() as $row)
		{
		   $model_id = $row['model_id'];
		   break;
		}
		
		//刪除menu的資料
		$this->db->where('id',$post['id']);
		$this->db->delete('menu');
				
		//刪除path的資料
		$this->db->where('menu_id',$post['id']);
		$this->db->delete('path');
		
		//刪除model的資料
		$this->db->where('id',$model_id);
		$this->db->delete('model');
	}
	
	function delete_sub($post_data = array())
	{
		foreach($post_data as $data)
		{
			if(!empty($data['sub'])) 
			{
				$this->delete_sub($data['sub']);
			}
			
			//------------刪除menu的資料-------------
			$this->db->where('id',$data['id']);
			$this->db->delete('menu');
					
			//------------刪除path的資料-------------
			$this->db->where('menu_id',$data['id']);
			$this->db->delete('path');
			
			
			//------------刪除model的資料-------------
			$this->db->where('id',$data['model_id']);
			$this->db->delete('model');
		}
	}
}
