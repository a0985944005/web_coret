<!DOCTYPE html>
<html dir="ltr" lang="zh-TW">
<head>
    <meta charset="utf-8">
    <title>勤益科技大學實驗室維修系統</title>
        <base href="<?=base_url()?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">

<!--[if lte IE 10]>
<script> alert('瀏覽器版本老舊，為求完美使用環境，請更新瀏覽器或使用google瀏覽器。') 
document.location.href="http://csie.ncut.edu.tw/";
</script>
<![endif]-->

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>

    <link type="text/css" href="application/views/theme/font-awesome/css/font-awesome.min.css" rel="stylesheet">       				 <!-- Font Awesome -->
    
    <link type="text/css" href="application/views/theme/assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">              <!-- Themify Icons -->
    <link type="text/css" href="application/views/theme/assets/css/styles.css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link type="text/css" href="application/views/theme/assets/plugins/codeprettifier/prettify.css" rel="stylesheet">                <!-- Code Prettifier -->
    <link type="text/css" href="application/views/theme/assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">              <!-- iCheck -->

    <!--[if lt IE 10]>
        <script type="text/javascript" assets="application/views/theme/assets/js/media.match.min.js"></script>
        <script type="text/javascript" assets="application/views/theme/assets/js/respond.min.js"></script>
        <script type="text/javascript" assets="application/views/theme/assets/js/placeholder.min.js"></script>
    <![endif]-->

	<script type="text/javascript" src="application/views/theme/assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
    <script type="text/javascript" src="application/views/theme/assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
    <script type="text/javascript" src="application/views/theme/assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->


<!--排序表格dynamic table-->
    <link href="application/views/page/js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="application/views/page/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="application/views/page/js/data-tables/DT_bootstrap.css" />
    <link rel="stylesheet" href="application/views/page/css/no-more-tables.css" />

 <!--排序表格dynamic table-->
	<!--<script type="text/javascript" language="javascript" src="application/views/admin/js/advanced-datatable/js/jquery.dataTables.js"></script>-->
	<script type="text/javascript" language="javascript" src="application/views/page/js/advanced-datatable/js/jquery.dataTables_search.js"></script>
    <script type="text/javascript" src="application/views/page/js/data-tables/DT_bootstrap.js"></script>
    <!--排序表格dynamic table initialization -->
	<script src="application/views/page/js/dynamic_table_init.js"></script>
    <link href="application/views/page/css/style.css" rel="stylesheet">

<script type="text/javascript" src="application/views/page/js/Highcharts-4.1.8/js/highcharts.js"></script>
<script src="application/views/page/js/Highcharts-4.1.8/js/modules/exporting.js" type="text/javascript"></script> 


<body class="infobar-overlay sidebar-hideon-collpase sidebar-scroll animated-content">
	<? if($session['mem_level']=='系辦人員'){ ?>
    <header id="topnav" class="navbar navbar-fixed-top navbar-pink" role="banner"> <!-- 綠色管理員用 -->
    <? }else if($session['mem_level']=='老師'){?>
    <header id="topnav" class="navbar navbar-fixed-top navbar-green" role="banner"><!-- 實驗室用 -->
    <? }else{ ?>
    <header id="topnav" class="navbar navbar-fixed-top navbar-cyan" role="banner"><!-- 一般用 -->
    <? };?>

	<div class="logo-area">
		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="ti ti-menu"></i>
				</span>
			</a>
		</span>
        <style>
		#topnav .navbar-img {
			text-shadow: none !important;
			background-color: transparent !important;
			border: 0 !important;
			width: 50px;
			padding: 5px 8px 0 0; !important;
			float: left;
		}
		
		@media screen and (max-width: 767px) {
			#topnav .navbar-img {
				padding-top:10px;
			width: 40px !important;
			vertical-align:middle !important;
			}
		}	
		
		</style>
		<img  class="navbar-img" src="application/views/img/csie.png">
		<? if($session['mem_level']=='系辦人員'){ ?>
        <a class="navbar-brand" href="index.php/csie_index/index/index">實驗室維修系統</a>
        <? }else{ ?>
        <a class="navbar-brand" href="index.php/csie_index/index/news">實驗室維修系統</a>
        <? }; ?>

		

	</div><!-- logo-area -->

	 <? include('notification.php')?>

</header>

 <div id="wrapper">
            <div id="layout-static">
                <? include('menu.php')?>
  
  
  
                
         <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                        <div class="col-md-12">
                            <ol class="breadcrumb" style="margin:10px 0; background:#fff;">
                               
                                <li>
                               	 <a href="index.php/csie_index/index/index"><i class="fa fa-home" style="color:#999;"></i> </a>
                                </li>
                                <? foreach($breadcrumbs_data as $breadcrumbs){ ?>                               
                                	<li style="color:#999;"><?=$breadcrumbs["menu_name"]?></li>
                                <? }; ?>   

                            </ol>
                            </div>
  <div class="container-fluid">                                
<div data-widget-group="group1">