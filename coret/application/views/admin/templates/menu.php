  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- search form --><!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">選單</li>
        
        
        
          <? menu_view($menu_data,$show_menu);?>
          
     
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  

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
			  echo "<li class='treeview'";
			 /* 
			  foreach($show_menu as $menu_active)
	 			  {
					 if($data['name']==$menu_active['menu_name'])
					 {
				     	echo "class='hasChild active open'";
					 }
				  }
			*/  
			    echo ">";
			  
			  
			   echo "<a href='javascript:;'";
			   
			  /* 
			  foreach($show_menu as $menu_active)
	 			  {
					 if($data['name']==$menu_active['menu_name'])
					 {
				     	echo "class='active'";
					 }
				  }
				*/  
				  echo ">";
					  echo " <i class='fa fa-circle-o'></i> <span>$data[name]</span>";
					  echo "<i class='fa fa-angle-left pull-right'></i>";
				  echo "</a>";
					  echo "<ul";
					  
			 foreach($show_menu as $menu_active)
	 			  {
					 if($data['name']==$menu_active['menu_name'])
					 {
				     	echo " class='treeview-menu menu-open' style='display: block;'";
					 }
					 else
					 {
					 	echo " class='treeview-menu' style='display: none;'";
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
				  
				if(empty($path))	{echo "<a href='javascript: void(0)'><i class='fa fa-circle-o'></i> <span>$data[name]</span></a>";}
				else				{echo "<a href=$path><i class='fa fa-circle-o'></i> <span>$data[name]</span></a>";}
			}
			echo "</li>";
		
	}
}
?>      
