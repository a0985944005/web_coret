<!DOCTYPE html>
<html dir="ltr" lang="zh-TW">
<head>
<meta charset="utf-8">
<title>Core.T 芯億服裝設計開發</title>

    <meta charset="utf-8">
        <base href="<?=base_url()?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Core.T 芯億服裝設計開發" />


<!-- css -->
<link href="application/views/theme/css/bootstrap.min.css" rel="stylesheet" />
<link href="application/views/theme/plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />   
<link href="application/views/theme/css/cubeportfolio.min.css" rel="stylesheet" />
<link href="application/views/theme/css/style.css" rel="stylesheet" />

<!-- Theme skin -->
<link id="t-colors" href="application/views/theme/skins/default.css" rel="stylesheet" />

    <!-- boxed bg -->
    <link id="bodybg" href="application/views/theme/bodybg/bg1.css" rel="stylesheet" type="text/css" />


      <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css'>

      <link rel="stylesheet" href="application/views/theme/flickity-wraparound/css/style.css">

<!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->


        <link href="application/views/theme/bootstrap-navbar-dropdowns-master/css/navbar.css" rel="stylesheet">


</head>

<body>



<div id="wrapper">
    <!-- start header -->
    <header>
            



                </style>
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
       <a  if= class="navbar-brand" href="index.php/front_index/index/index" style="float: none;"><img class="logo" src="application/views/theme/img/log3.png" alt=""  /></a>                </div>
                <div class="collapse navbar-collapse "  id="navbar-collapse">
                    <ul class="nav navbar-nav ">
                        <li class=""">

                             <a style="border:1px #053579 solid;border-radius:10px;" href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">芯億簡介 <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class=""><a href="index.php/front_index/index/about">芯億介紹</a></li>
                                <li><a href="index.php/front_index/index/purpose">芯億宗旨</a></li>
                                 <li><a href="index.php/front_index/index/idea">芯億理念</a></li>
                                
                            </ul>          


                        </li>




                       

                        
                        <li class="dropdown">
                            <a style="border:1px #053579 solid;border-radius:10px;"  href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">產品項目 <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                            <? foreach ($product_menu as $key => $value) { ?>

                                <li <? if(!empty($value['sub'])) echo "class='dropdown-submenu'" ;?> >
                                    <a href="index.php/front_product/index/index/<?=$value['id']?>"  <? if(!empty($value['sub'])) echo " class='dropdown-toggle ' data-toggle='dropdown' data-hover='dropdown'" ;?>  ><?=$value['name'];?></a>
                                    <? if(!empty($value['sub'])) { ?>
                                    <ul class="dropdown-menu">
                                        <? foreach ($value['sub'] as $key_ => $value_) { ?>
                                        <li><a href="index.php/front_product/index/index/<?=$value_['id']?>"><?=$value_['name'];?></a></li>
                                        <? }; ?> 
                                    </ul>   
                                   <? }; ?> 
                                </li>

                            <? }; ?>    
                            
                            </ul>
                        </li>

                          <li class="dropdown ">
                            <a style="border:1px #053579 solid;border-radius:10px;"  href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">訂製流程 <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php/front_index/index/process">訂製流程</a></li>
                                
                            </ul>               
                        
                        </li>



                          <li class="dropdown ">
                            <a style="border:1px #053579 solid;border-radius:10px;"  href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">最新訊息 <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php/front_news/index/index">最新公告</a></li>
                                
                            </ul>               
                        
                        </li>


                          <li class="dropdown ">
                            <a style="border:1px #053579 solid;border-radius:10px;"  href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">聯絡芯億 <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php/front_index/index/information">公司資訊</a></li>
                                
                            </ul>               
                        
                        </li>




                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>


    </header>
    <!-- end header -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      
