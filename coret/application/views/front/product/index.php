



	
	<section id="content">

	
	

	
		<!-- Portfolio Projects -->
		<div class="container marginbot50">
		<div class="row">
			<div class="col-lg-12">
				<h4 class="heading"><?=$product_menu_name;?>樣式</h4>

					<div id="grid-container" class="cbp-l-grid-projects">
					<ul>
					<? foreach ($product as $key => $value) { ?>
						<li class="cbp-item graphic logo3">
							<div class="cbp-caption">
								<div class="cbp-caption-defaultWrap">
								<? if(!empty($value['list'])){ ?>
									<img src="application/views/img/product/<?=$value['list']['pic_name'];?>" alt=""  class="img-responsive" />
								<? }else{ ?>
									<img src="application/views/img/no-image/no-img-parallax-bg.jpg" alt=""  class="img-responsive"  />
								<? }; ?>
								</div>
								<div class="cbp-caption-activeWrap">
									<div class="cbp-l-caption-alignCenter">
										<div class="cbp-l-caption-body">
										<? if(!empty($value['list'])){ ?>
											<a href="application/views/img/product/<?=$value['list']['pic_name'];?>" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">瀏覽大圖</a>
										<? }else{ ?>
									

									<a href="application/views/img/no-image/no-img-parallax-bg.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">瀏覽大圖</a>
								<? }; ?>
										</div>
									</div>
								</div>
							</div>
							<div class="cbp-l-grid-projects-title"><a href="index.php/front_product/index/detail/<?= $value['id']?>"><?=$value['name'];?></a></div>
						</li>
					
					<? } ?>
					</ul>
				</div>

			</div>
		</div>
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
		
		<!-- clients -->
		
	
	</section>
