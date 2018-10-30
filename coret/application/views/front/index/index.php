

<head>
<link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.8";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

<style>
h4 strong:after {
    content: "";
    display: inline-block;
    width: 120px;
    height: 1px;
    margin-left: 10px;
    background: rgba(136,136,136,0.5);
}

.btnn { 
	margin-top: -45px;
    display: inline-block;
    float: right;
  }
.btnn a {
    color: #002c62;
    font-family: "新細明體";
    letter-spacing: 3px;
    padding-left: 25px;
    text-decoration: none;
}

.shadow-table{
	
	
    -webkit-box-shadow: -2px 3px 23px 0px rgba(197,195,197,1);
    -moz-box-shadow: -2px 3px 23px 0px rgba(197,195,197,1);
    box-shadow: -2px 3px 23px -6px rgba(197,195,197,1);
    padding: 30px;
   
}
a:link
{
	text-decoration: none;
}
#news_title:hover
{
	color: #0000ff;
}
</style>


</head>



	
	<section id="content">

	
	

	
		<!-- Portfolio Projects -->
		<div class="container marginbot50">
		
		<br><br>							
		<div class="row1" >

					<div class ="col-sm-7">	
								<h1 style="color : #002c62 ;">LATEST NEWS</h1>
								<h4><strong>最新消息</strong></h4><br>

					<!--tabl  跑前面5筆--> 
					<!-- <div class = "shadow-table" > -->
					<table class="table table-sm table-inverse table-striped table-hover shadow-table">
  <thead style = "background-color: #053579;">
    <tr  style="color: #fff">
      <th width="20px"> </th>
      <th width="150px">發布日期</th>
      <th>標題</th>
     
    </tr>
  </thead>
  <tbody style = "background-color: #fff; font-size: 20px;">
    	<? 
    	foreach ($news_data as $news)
    	 {
    	 $date = explode(" ",$news['date']);?>

    <tr>

      <th scope="row">．</th>
      <td><? echo $date[0] ;?></td>
      <td> <a id="news_title" href="index.php/front_news/index/detail/<?=$news['id']?>"><? echo $news['title'];?> </a></td>
      
    </tr>

    	<?}?>

 			
  </tbody>
</table>
<!-- </div> -->
								
					</div>
					<div class="col-sm-5  fb-page" align="center" data-href="https://www.facebook.com/core.t168/?fref=ts" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/core.t168/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/core.t168/?fref=ts">
					芯億服裝設計開發 - 團體制服設計.承製</a></blockquote>
					</div>
		</div>
		<br><br>
			<!-- divider -->
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		</div>
		<!-- end divider -->
					<h1 style="color : #002c62 ;">NEW PRODUCTS</h1>
					<h4><strong>最新商品</strong></h4><br>

<div id="grid-container" class="cbp-l-grid-projects">
					<ul>
						<? foreach ($product_data_pic as $pic){?>
							


						<li class="cbp-item web-design logo">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
										<img src="application/views/img/product/<?=$pic[0]['pic_name']?>" alt=""  class="img-responsive" />
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
											<a href="application/views/img/product/<?=$pic[0]['pic_name']?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="World Clock Widget<br>by Paul Flavius Nechita">瀏覽大圖</a>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title"><a href="index.php/front_product/index/detail/<?=$pic['id'];?>"><? echo $pic['name'];?></a></div>
						</li>

						<?}?>
				
					</ul>
				</div>


			<!-- divider -->
		<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		</div>
		<!-- end divider -->

				<h1 style="color : #002c62 ;">CORE.T PURPOSE</h1>
				<h4><strong>芯億宗旨</strong></h4>
				<div class = "row">
							<div class="col-sm-5" align="center">
								<br>
								<img src = "application/views/theme/img/top.png" class="img-responsive">
				
											<h4>我們的團隊專精於結合企業形象</h4>
											<h4>創新的設計與製作結合時尚潮流</h4>
											<h4>讓制服不在只是制服而是一種榮耀</h4>
						
						
								<img src = "application/views/theme/img/bottom.png" class="img-responsive">

							</div>

							<div class="col-sm-7">
								<img src = "application/views/theme/img/wall.png" class="img-responsive">
							</div>
				</div>
		

				
		
		
	
		
		<!-- clients -->
		
	
	</section>
