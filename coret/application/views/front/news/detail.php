	<section id="content">


		<!-- Portfolio Projects -->
		<div class="container marginbot50">
		 <div class="page-header">
    <h3><?=$news_data[0]['title']?></h3>      
  </div>
		<div class="row">
		
<div class="col-sm-12">

	
          <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">公告內容
</h3>
                        </div>

                        <div class="panel-body">
                            <?=$news_data[0]['content']?>
                            
                            <hr>
                            <? if(!empty($news_data[0]['sub'])) { ?>
                             <h3>檔案下載</h3>
                            <? foreach ($news_data[0]['sub'] as $key => $value) { ?>
                            	
                            	 <a target="_bank_" href="application/views/download/<?=$value['file_name'];?>"  > <?=$value['real_name'];?></a><br>

                            <? }} ?>
                        </div>
                    </div>
		</div>
		</div>
		</div>
		
		
		<!-- end divider -->
		
		<!-- clients -->
		
	
	</section>
