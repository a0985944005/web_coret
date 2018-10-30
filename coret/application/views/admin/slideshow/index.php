
 <div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					廣告牆管理
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
                                                 
                   <div class="adv-table">
                    <div class="table-responsive">
                   
                     <div align="right">
                    <a href="<?=site_url("admin_slideshow/index/insert/");?>" class="btn btn-primary"><i class="fa fa-plus"></i> 新增廣告牆相片</a>
                   
					</div>
                <div class="table-responsive"> 
                    <table  class="display table table-bordered table-striped" id="dynamic-table" >
                    <thead>
                    
                        <tr>
                            <th style="min-width:50px;"><div align="center">#</div></th>

                            <th style="min-width:100px;"><div align="center">標題</div></th>
                            
                            <th style="min-width:100px;"><div align="center">圖片</div></th>

                            <th style="min-width:100px;"><div align="center">新增日期</div></th>
                            
                            <th  style="min-width:150px;" class='sorting_asc_disabled' ><div align="center">動作</div></th>
                        </tr>
                       
                    </thead>
                    <tbody>
                  
					           	<? 
                      foreach($slideshow_data as $slideshow)
                      { ?>
            
                      <tr>
                          <td><div align="center" style="margin: 60px auto;">
                            <? echo $slideshow['local']; ?>
                          </div></td>

                          <td><div align="center" style="margin: 60px auto;">
                            <? echo $slideshow['tittle']; ?>
                          </div></td>
                          
                          <td><div align="center" >
                          <? if(empty($slideshow['pic_name'])){?>
                                          <h4 style="margin: 60px auto;">無圖片</h4>
                          <?}else{?>
                            <img src = "application/views/img/slideshow/<?=$slideshow['pic_name'];?>" width="200px" heigh="80px">

                         <?}?>
                         
                          
                          
                           
                          </div></td>

                           <td><div align="center" style="margin: 60px auto;">
                          <? echo $slideshow['date']; ?>
                           
                          </div></td>
                          
                        <td align="center">
                            <a class="btn btn-success" style="width:82px; margin: 60px auto;" href="<?=site_url("admin_slideshow/index/update/".$slideshow['id']);?>">修改排序</a>
                            <a class="btn btn-danger" style="width:82px; argin: 60px auto;" href="<?=site_url("admin_slideshow/delete/".$slideshow['id']);?>" onclick="return(confirm('確認刪除嗎？'))">刪除</a>

                         </td>


                        </tr>
                        <?   } ?>
                    </tbody>
                </table>
               </div>     
                    </div>
                                    
                                               
              </div>
           </div>
		</div>
	</div>
</div>





