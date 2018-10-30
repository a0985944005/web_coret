


	<section id="content">


		<!-- Portfolio Projects -->
		<div class="container marginbot50">
		 <div class="page-header">
    <h3>最新公告</h3>      
  </div>
		<div class="row">
		

				<div class="col-lg-12">
				<? if (!empty($news)) {
					foreach ($news as $key => $value) {
				?>
				<article>
						<div class="post-image">
							<div class="post-heading">
								<h3><a href="#"><?=$value['title']?></a></h3>
							</div>
						</div>
						<div  class="JQellipsis" >
							<?=$value['content']?>
						</div>
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="fa fa-calendar"></i><a href="#"><?=$value['date']?></a></li>
						<!-- 		<li><i class="fa fa-user"></i><a href="#"> Admin</a></li>
								<li><i class="fa fa-folder-open"></i><a href="#"> Blog</a></li>
								<li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li> -->
								<a href="index.php/front_news/index/detail/<?=$value['id']?>" class="readmore pull-right btn btn-info btn-lg">繼續閱讀 <i class="fa fa-angle-right"></i></a>
							</ul>
							
						</div>
				</article>
				<? }}; ?>
			
			 <div align="center">

				     <ul class="pagination">

                        <li><a href="index.php/front_news/index/index/1"><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i></a></li>

                        <? $pre=$now_count-1 ; 
                           if($pre<=0){$pre=1;}
                        ?>

						<li><a href="index.php/front_news/index/index/<?=$pre;?>"><i class="fa fa-angle-left"></i></a></li>


						
                     
					<? for($i=1; $i<=$pages; $i++)            
                     {
                     ?>	

					                 

					   
						<li <? if($i==$now_count){echo "class= 'active'";};?>><a href="index.php/front_news/index/index/<?=$i;?>"><?=$i;?></a></li>
					<?	
                     };
                      $end= $now_count+1;
                      if ($end>=$pages){$end=$pages;}


                     ?>

                        
						<li><a href="index.php/front_news/index/index/<?=$end;?>"><i class="fa fa-angle-right"></i></a></li>


						<li><a href="index.php/front_news/index/index/<?=$pages;?>"><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a></li>
					</ul>
					</div>
			<!-- 	<div id="pagination">
					<span class="all">Page 1 of 3</span>
					<span class="current">1</span>
					<a href="#" class="inactive">2</a>
					<a href="#" class="inactive">3</a>
				</div> -->
			</div>
		</div>
		</div>
		
		
		<!-- end divider -->
		
		<!-- clients -->
		
	
	</section>
