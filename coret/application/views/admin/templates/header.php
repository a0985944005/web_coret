<!DOCTYPE html>

<!--[if IE]><![endif]-->

<!--[if IE 8 ]><html dir="ltr" lang="zh-TW" class="ie8"><![endif]-->

<!--[if IE 9 ]><html dir="ltr" lang="zh-TW" class="ie9"><![endif]-->

<!--[if (gt IE 9)|!(IE)]><!-->

<html dir="ltr" lang="zh-TW">

<!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Core T.心億管理系統</title>
    <base href="<? echo base_url()?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Main CSS file -->
  <link rel="stylesheet" href="application/views/theme/css/bootstrap.css" />
	<link rel="stylesheet" href="application/views/theme/font-awesome/css/font-awesome.min.css" />
<!-- 
    <link rel="shortcut icon" type="image/x-icon" href="application/views/img/favicon.png?2328776998412631627"> -->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- JS -->
	<script src="application/views/theme/js/jquery.min.js"></script><!-- jQuery -->
	<script type="text/javascript" src="application/views/theme/js/bootstrap.min.js"></script><!-- Bootstrap -->

 <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="application/views/theme/admin/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="application/views/theme/admin/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="application/views/theme/admin/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="application/views/theme/admin/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="application/views/theme/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="application/views/theme/admin/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="application/views/theme/admin/plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="application/views/theme/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
  
  <!--排序表格dynamic table-->

    <link rel="stylesheet" href="application/views/theme/admin/css/no-more-tables.css" />
    
 <link href="application/views/theme/admin/js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="application/views/theme/admin/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
     <link href="application/views/theme/admin/js/advanced-datatable/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="application/views/theme/admin/js/data-tables/DT_bootstrap.css" />
    

    

</head>
<body class="sidebar-mini skin-red">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php/admin_news/index/news" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" style="font-family:'微軟正黑體'; font-size:10px;">Core T.</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="font-family:'微軟正黑體'; font-size:25px;">Core T.管理系統</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             
              <span>會員：<?=$session['name']?></span>
            </a>
   
          </li>
          <!-- Control Sidebar Toggle Button -->
          

            <li class="dropdown user user-menu">
            <a href="index.php/admin_login/logout" class="dropdown-toggle" onclick="return confirm('確定要登出嗎?')" >
             
              <span>登出 </span>
            </a>
           
          </li>



        </ul>
      </div>
    </nav>
  </header>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- search form -->
  <!--     <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">功能選單</li>
    <!--       <li <? if($page_meun=='member') echo "class='active'";?>>
          <a href="index.php/admin_member/index/index/<?=$session['id']?>">
              <i class="fa fa-users"></i> <span>帳號資料</span>
            
          </a>
        </li> -->
         <li <? if($page_meun=='news') echo "class='active'";?>>
          <a href="index.php/admin_news/index/news">
          <i class="fa  fa-pencil-square-o"></i> <span>公告管理</span>
            
          </a>
        </li>

 <li <? if($page_meun=='slideshow') echo "class='active'";?>>
          <a href="index.php/admin_slideshow/index/index">
          <i class="fa  fa-pencil-square-o"></i> <span>廣告牆</span>
            
          </a>
        </li>



    <li class="treeview <? if($meun=='open'&& $page_meun=='set') echo 'active';?>">
          <a href="#">
            <i class="fa fa-file-text-o"></i> <span>網站設定</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">

            <li <? if($page_meun_=='html1') echo "class='active'"; ?> >
              <a href="index.php/admin_html/index/index/1">
                 <i class="fa fa-circle-o"></i> <span> 芯億介紹</span>
                
              </a>
            </li>
             <li <? if($page_meun_=='html2') echo "class='active'"; ?> >
              <a href="index.php/admin_html/index/index/2">
                 <i class="fa fa-circle-o"></i> <span> 芯億宗旨</span>
                
              </a>
            </li>
              <li <? if($page_meun_=='html3') echo "class='active'"; ?> >
              <a href="index.php/admin_html/index/index/3">
                 <i class="fa fa-circle-o"></i> <span> 訂製流程</span>
                
              </a>
            </li>
              <li <? if($page_meun_=='html4') echo "class='active'"; ?> >
              <a href="index.php/admin_html/index/index/4">
                <i class="fa fa-circle-o"></i> <span> 公司資訊</span>
                
              </a>
            </li>
             <li <? if($page_meun_=='html2') echo "class='active'"; ?> >
              <a href="index.php/admin_html/index/index/5">
                 <i class="fa fa-circle-o"></i> <span> 芯億理念</span>
                
              </a>
            </li>


          </ul>
        </li>
        
      <li <? if($page_meun=='menu') echo "class='active'";?>>
          <a href="index.php/admin_menu/index/index">
          <i class="fa  fa-bars"></i> <span>選單設定</span>
            
          </a>
        </li>

  


          <li <? if($page_meun=='product_insert') echo "class='active'";?>>
              <a href="index.php/admin_product/index/insert"><i class="fa fa-cart-plus"></i>新增商品</a>
            
            </li>


         
        <li class="treeview  <? if($meun=='open'&& $page_meun=='product_detail') echo 'active';?>">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>商品選單</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
         
          <ul class="treeview-menu">

          <? foreach ($p_menu as $key => $value) {

           $PM_id="product_detail".$value['id'];

           ?>

            <li <? if($product_menu==0){if($page_meun_==$PM_id) {echo " class='active'";};}else{if($product_menu==$value['id']) {echo " class='active'";}} ?>><a href="index.php/admin_product_detail/index/index/<?=$value['id'];?>/<?=$value['parents_id'];?>"><i class="fa fa-circle-o"></i> <?=$value['name']  ?>
            <? if($value['sub']!=''){ ?>
             <i class="fa fa-angle-left pull-right"></i>
             </a>

               <ul class="treeview-menu">

               <!-- 補大標 -->
               <li <? if($page_meun_==$PM_id) echo " class='active'";?> ><a href="index.php/admin_product_detail/index/index/<?=$value['id'];?>/<?=$value['parents_id'];?>"><i class="fa fa-circle-o"></i><?=$value['name']  ?></a></li>

               <? foreach ($value['sub'] as $key2 => $sub) { 

                $_id="product_detail".$sub['id'];
                  

                ?>
                <li <? if($page_meun_==$_id) echo " class='active'";?> ><a href="index.php/admin_product_detail/index/index/<?=$sub['id'];?>/<?=$sub['parents_id'];?>"><i class="fa fa-circle-o"></i> <?=$sub['name'];?></a></li>
              <? }; ?>
              </ul>

            <? }else{  ?>
             </a>
            <? }; ?>
            </li>


            <? }; ?>

          </ul>
        </li>
       
        
        
        <!-- 
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>






  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

    <!-- Main content -->
    <section class="content">





