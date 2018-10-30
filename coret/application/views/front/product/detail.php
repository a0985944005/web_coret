
<style type="text/css">
    

.box {
  background: #fff;
  margin: 0 0 30px;
  border: solid 1px #e6e6e6;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 20px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
}
.box .box-header {
  background: #f7f7f7;
  margin: -20px -20px 20px;
  padding: 20px;
  border-bottom: solid 1px #eeeeee;
}
.box .box-header:before,
.box .box-header:after {
  content: " ";
  display: table;
}
.box .box-header:after {
  clear: both;
}
.box .box-footer {
  background: #f7f7f7;
  margin: 30px -20px -20px;
  padding: 20px;
  border-top: solid 1px #eeeeee;
}
.box .box-footer:before,
.box .box-footer:after {
  content: " ";
  display: table;
}
.box .box-footer:after {
  clear: both;
}
@media (max-width: 991px) {
  .box .box-footer .btn {
    margin-bottom: 20px;
  }
}
.box.slideshow {
  padding: 20px 0 0 0;
  text-align: center;
}
.box.slideshow h3 {
  text-transform: uppercase;
  font-weight: 700;
}

#content .panel.sidebar-menu {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
}
#content .panel.sidebar-menu .panel-heading .btn.btn-danger {
  color: #fff;
}

#content .panel.sidebar-menu ul.nav.category-menu {
  margin-bottom: 20px;
}
#content .panel.sidebar-menu ul.nav.category-menu li a {
  text-transform: uppercase;
  font-weight: bold;
}
#content .panel.sidebar-menu ul.nav ul {
  list-style: none;
  padding-left: 0;
}
#content .panel.sidebar-menu ul.nav ul li {
  display: block;
}
#content .panel.sidebar-menu ul.nav ul li a {
  position: relative;
  font-weight: normal;
  text-transform: none !important;
  display: block;
  padding: 10px 15px;
  padding-left: 30px;
  font-size: 12px;
  color: #999999;
}
#content .panel.sidebar-menu ul.nav ul li a:hover,
#content .panel.sidebar-menu ul.nav ul li a:focus {
  text-decoration: none;
  background-color: #eeeeee;
}



#content .product {
  background: #fff;
  border: solid 1px #e6e6e6;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin-bottom: 30px;
  /* entire container, keeps perspective */
  /* flip speed goes here */
  /* hide back of pane during swap */
  /*  UPDATED! front pane, placed above back */
  /* back, initially hidden pane */
}
#content .product .flip-container {
  cursor: pointer;
  -webkit-perspective: 1000;
  -moz-perspective: 1000;
  perspective: 1000;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
@media (max-width: 767px) {
  #content .product .flip-container img.img-responsive {
    min-width: 100%;
  }
}
#content .product .flip-container,
#content .product .front,
#content .product .back {
  width: 100%;
}
#content .product .flipper {
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
  position: relative;
}
#content .product .front,
#content .product .back {
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
  position: absolute;
  top: 0;
  left: 0;
}
#content .product .front {
  z-index: 2;
  -webkit-transform: rotateY(0deg);
  -ms-transform: rotateY(0deg);
  transform: rotateY(0deg);
}
#content .product .back {
  -webkit-transform: rotateY(-180deg);
  -ms-transform: rotateY(-180deg);
  transform: rotateY(-180deg);
}
#content .product:hover .back {
  -webkit-transform: rotateY(0deg);
  -ms-transform: rotateY(0deg);
  transform: rotateY(0deg);
  z-index: 2;
}
#content .product:hover .front {
  -webkit-transform: rotateY(180deg);
  -ms-transform: rotateY(180deg);
  transform: rotateY(180deg);
  z-index: 1;
}
#content .product .invisible {
  visibility: hidden;
}

#content #mainImage {
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
}

#content #productMain .goToDescription {
  margin-top: 20px;
  font-size: 12px;
  text-align: center;
}
#content #productMain .goToDescription a {
  color: #999999;
  text-decoration: underline;
}
#content #productMain .price {
  font-size: 30px;
  font-weight: 300;
  text-align: center;
  margin-top: 40px;
}
#content #productMain .buttons {
  margin-bottom: 0;
  text-align: center;
}
#content #productMain .buttons .btn {
  margin-bottom: 10px;
}

#content #thumbs a {
  display: block;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
  border: solid 2px transparent;
}
#content #thumbs a.active {
  border-color: #4fbfa8;
}

#content img {
     margin-bottom: 0px; 
}
/* Original Boostrap template overwrite */


</style>


   

	
	<section id="content">

	
	

	
		<!-- Portfolio Projects -->
		<div class="container marginbot50">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="heading"><?=$product_detail[0]['name']?></h2>
<div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">產品項目</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">

                            <? foreach ($product_menu_list as $key_ => $value_) { ?>
                                <li>
                                    <a href="index.php/front_product/index/index/<?=$value_['id']?>"><?=$value_['name']?> <span class="badge pull-right"></span></a>
                                   <? if(!empty($value_['sub'])){ ?> 
                                    <ul>
                                    <? foreach ($value_['sub'] as $key__ => $list) { ?>
                                        <li><a href="index.php/front_product/index/index/<?=$list['id']?>"><?=$list['name']?></a></li>
                                    <? }; ?>    
                                      
                                    </ul>
                                   <? };?>
                                </li>
                            <? }; ?> 

                            </ul>

                        </div>
                    </div>

             

                 

                    <!-- *** MENUS AND FILTERS END *** -->

                </div>
<div class="col-md-9">
                <div class="row" id="productMain" style=" margin-top: 0px; ">
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <img src="application/views/img/product/<?=$product_detail[0]['list'][0]['pic_name']?>" alt="" class="img-responsive">
                            </div>

                        
                            <!-- /.ribbon -->

                        </div>
                        <div class="col-sm-6">
                       
                            <div class="" id="thumbs">
                            <? foreach ($product_detail[0]['list'] as $key => $value) { ?>
                                <div class="col-xs-4">
                                    <a href="application/views/img/product/<?=$value['pic_name']?>" class="thumb">
                                        <img src="application/views/img/product/<?=$value['pic_name']?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                            <? }; ?> 
                            </div>
                        </div>

                    </div>
				
 </div>
			</div>




<div class="col-sm-12">

	
          <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">商品詳細資訊</h3>
                        </div>

                        <div class="panel-body">
                            <?=$product_detail[0]['content']?>

                        </div>
                    </div>
		</div>
    </div>	
		
		<!-- clients -->
		
	
	</section>

