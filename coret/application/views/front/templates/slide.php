
<div class="container">
    <div class="row">
        <!-- Carousel -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <? 
              $count2=0;
              foreach ($slide as $key => $value) { ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?=$count2?>" class="<? if($count2==0) {echo 'active';} ?>"></li>
                 <? $count2++; }; ?> 
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <? 
              $count=1;
              foreach ($slide as $key => $value) { ?>
                <div class="item <? if($count==1) {echo 'active';} ?>">
                   <img src="application/views/img/slideshow/<?=$value['pic_name']?>" alt=""   />
                    <!-- Static Header -->
                
                </div>
                <? $count++; }; ?>
               
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div><!-- /carousel -->
    </div>
</div>


   <!--  <section id="featured" class="bg">

            
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

        <div id="main-slider" class="main-slider flexslider">
            <ul class="slides">
            <? foreach ($slide as $key => $value) { ?>
              <li>
                <img src="application/views/img/slideshow/<?=$value['pic_name']?>" alt=""  width="300px"  />
              
              </li>
            <? }; ?>
            </ul>
        </div>

  
             

            </div>
        </div>
    </div>  


    </section> -->

      <div class="navbar-collapse collapse sub_menu"> 
                <ul class="nav navbar-nav">    
                <? foreach ($product_menu as $key => $value) { ?>

                  <li><a href="index.php/front_product/index/index/<?=$value['id']?>"><?=$value['name']?></a></li>

                <? }; ?>  
                </ul>
      </div>