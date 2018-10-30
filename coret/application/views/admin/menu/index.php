
 <div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					商品類別管理
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
                                                 
                   <div class="adv-table">
                    <div class="table-responsive">
                   
                     <div align="right">
                    <a href="<?=site_url("admin_menu/index/insert/");?>" class="btn btn-primary"><i class="fa fa-plus"></i> 新增商品類別</a>
                   
					</div>
                <div class="table-responsive"> 
                    <table  class="display table table-bordered table-striped" id="dynamic-table" >
                    <thead>
                    
                        <tr>
                            <th style="min-width:50px;"><div align="center">#</div></th>
                            
                            <th style="min-width:100px;"><div align="center">名稱</div></th>
                            
                            <th  style="min-width:150px;"class='sorting_asc_disabled' ><div align="center">動作</div></th>
                        </tr>
                       
                    </thead>
                    <tbody>
                    	<? $i=1;
                      foreach($product_menu as $value)
                      { ?>
						
                    	<tr>
                        	<td><div align="center">
                        	  <? echo $i; ?>
                      	  </div></td>
                        	
                        	<td><div>
                          <? echo $value['name']; ?>
                        	 
                      	  </div></td>
                        	
                        <td align="center">
                            <a class="btn btn-success" style="width:82px;" href="<?=site_url("admin_menu/index/update/".$value['id']);?>">修改</a>
                            <a class="btn btn-danger" style="width:82px;" href="<?=site_url("admin_menu/delete_all/".$value['id']);?>" onclick="return(confirm('確認刪除嗎？\n刪除父項，子項將會一併刪除！'))">刪除</a>

                         </td>


                        </tr>

                        <? if($value['sub']!=''){ 
                           $j=1;
                          foreach ($value['sub'] as $key2 => $sub) {
                          
                          
                        ?>


                        <tr>
                          <td><div align="center">
                            <? echo $i."-".$j; ?>
                          </div></td>
                          
                          <td><div>
                          <? echo "　".$sub['name']; ?>
                           
                          </div></td>
                          
                        <td align="center">
                            <a class="btn btn-success" style="width:82px;" href="<?=site_url("admin_menu/index/update/".$sub['id']);?>">修改</a>
                            <a class="btn btn-danger" style="width:82px;" href="<?=site_url("admin_menu/delete/".$sub['id']);?>" onclick="return(confirm('確認刪除嗎？'))">刪除</a>

                         </td>


                        </tr>


                        <? $j++; } } $i++; } ?>
                      
                    </tbody>
                </table>
               </div>     
                    </div>
                                    
                                               
              </div>
           </div>
		</div>
	</div>
</div>





