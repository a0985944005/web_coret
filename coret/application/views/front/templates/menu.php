<div class="static-sidebar-wrapper sidebar-midnightblue">
                    <div class="static-sidebar">
                        <div class="sidebar">
                    
                    <div class="widget stay-on-collapse" id="widget-sidebar">
                        <nav role="navigation" class="widget-body">
                    <ul class="acc-menu">
                        <li class="nav-separator"><span>選單</span></li>
                        
                    <? if($session['mem_level']=='系辦人員'){ ?><li><a href="index.php/csie_index/index/index"><span>首頁</span></a></li> <? }; ?>  
                   <? if($session['mem_level']=='系辦人員'){ ?> <li><a href="index.php/csie_index/index/news"><span>規章瀏覽</span></a></li><? }else{ ?>
                    <li><a href="index.php/csie_index/index/news"><span>規章</span></a></li>
                   <? };?>
                      
                <? menu_view($menu_data,$show_menu);?>
                    
                    </ul>
                </nav>
                    </div>
                
                    
                </div>
    </div>
</div>
<?
//echo "<pre>";
//var_dump($show_menu);

function menu_view($menu_data = array(),$show_menu=array())
{	  
	foreach($menu_data as $data)
	{
			$path = $data['bpath'];
			if(!empty($data['sub']))
			{ 
			
			
			
			  echo "<li ";
			  
			  foreach($show_menu as $menu_active)
	 			  {
					 if($data['name']==$menu_active['menu_name'])
					 {
				     	echo "class='hasChild active open'";
					 }
				  }
			    echo ">";
			  
			  
			   echo "<a href='javascript:;'";
			   
			  foreach($show_menu as $menu_active)
	 			  {
					 if($data['name']==$menu_active['menu_name'])
					 {
				     	echo "class='active'";
					 }
				  }
				  echo ">";
					  echo "<span>$data[name]</span>";
				  echo "</a>";
					  echo "<ul class='acc-menu'";
			 foreach($show_menu as $menu_active)
	 			  {
					 if($data['name']==$menu_active['menu_name'])
					 {
				     	echo "style='display: block;'";
					 }
				  }
				  echo ">";  
					  
					  
					  menu_view($data['sub'],$show_menu);
					  echo "</ul>";
			}
			else
			{	
			
			
			 echo "<li";
			   
			  foreach($show_menu as $menu_active)
	 			  {
					 if($data['name']==$menu_active['menu_name'])
					 {
				     	echo " class='active'";
					 }
				  }
				  echo ">";
				  
				if(empty($path))	{echo "<a href='javascript: void(0)'><span>$data[name]</span></a>";}
				else				{echo "<a href=$path><span>$data[name]</span></a>";}
			}
			echo "</li>";
		
	}
}
?>      
