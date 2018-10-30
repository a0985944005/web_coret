<div data-widget-group="group1">
	<div class="row">
    
		<div class="col-sm-3">
		<? foreach($index_data as $data ){ ?>
			<div class="list-group list-group-alternate mb-n nav nav-tabs">
            <a href="javascript: void(0)"  style="background:#fafafa; padding: 8px;" class="list-group-item"><?="類別：".$data['title'];?></a>
			<? 
			if(!empty($data['data']))
			 {
				foreach($data['data'] as $blog_data ){ ?>
					<a href="#tab-id<?=$blog_data['id'];?>" 	role="tab" data-toggle="tab" class="list-group-item"><?=$blog_data['title'];?></a>
			<? 
				};
			 }
			else
			 {
				 echo "<a href='javascript: void(0)' role='tab' data-toggle='tab' class='list-group-item'>無</a>";
			 };
			?>
			</div> 
			<? }; ?>
		</div><!-- col-sm-3 -->
       
        
       
		<div class="col-sm-9">
			<div class="tab-content">
             <? 
			 $count=0;
			 foreach($index_data as $data ){ 
					foreach($data['data'] as $blog_data ){ 
			 ?> 
				<div class="tab-pane <? if($count==0) echo "active";?>" id="tab-id<?=$blog_data['id'];?>">
					<div class="panel panel-default">
						<div class="panel-heading">
                      
							<h2><?=$blog_data['title'];?></h2>
						</div>
						<div class="panel-body">
							<div class="table-responsive2"> 
                              <? if(!empty($blog_data['file'])){?>
                            <div align="right">
                                <div class="btn-group">
                                        <button type="button" class="btn btn-default-alt  dropdown-toggle"  data-toggle="dropdown" aria-expanded="false">
                                            檔案下載 <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                        <? 
                                        $count=count($blog_data['file']);
                                        foreach($blog_data['file'] as $file ){ ?>
                                            <li> <a href='index.php/csie_index/download_files/<?=$file['id'];?>'><i class="fa fa-cloud-download"></i> <?=$file['real_name'];?></a></li>
                                        <? $count--;
                                        if($count!=0) echo "<li class='divider'></li>";
                                         }?>
                                        </ul>
                                    </div>
                               </div> 
                              <? }; ?>                        
								<?=$blog_data['content'];?>
							</div><!-- /.table-responsive -->
						</div> <!-- /.panel-body -->
					</div>
				</div> <!-- #tab-projects -->
     <? 
	 $count++;
	 }
};
?>   
			</div><!-- .tab-content -->
		</div><!-- col-sm-8 -->

	</div>
</div>
