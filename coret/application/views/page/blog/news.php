
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading">
                            文章管理<span class="tools pull-right"><a href="javascript:;" class="fa fa-chevron-down"></a> </span>
                        </header>
                        
                           <div class="panel-body">                                    
                   <div class="adv-table">
                    <div class="table-responsive">
                   
                     <div align="right">
                    <a href="<?=site_url("csie_blog/index/insert_news");?>" class="btn btn-primary"><i class="fa fa-plus"></i> 新增文章</a>
                   
					</div>
                <div class="table-responsive"> 
                    <table  class="display table table-bordered table-striped" id="dynamic-table" >
                    <thead>
                        <tr>
                            <th style="min-width:50px;"><div align="center">#</div></th>
                            <th style="min-width:100px;"><div align="center">類別</div></th>
                            <th style="min-width:100px;"><div align="center">標題</div></th>
                            <th style="min-width:100px;"><div align="center">新增日期</div></th>
                            <th  style="min-width:150px;"class='sorting_asc_disabled' ><div align="center">動作</div></th>
                        </tr>
                    </thead>
                    <tbody>
                    	<? 
						foreach($blog_data as $blog){?>
                    	<tr>
                        	<td><div align="center">
                        	  <?=$blog['B_id']?>
                      	  </div></td>
                        	<td><div align="center">
                        	  <?=$blog['BT_title']?>
                      	  </div></td>
                        	<td><div align="center">
                        	  <?=$blog['B_title']?>
                      	  </div></td>
                        	<td><div align="center">
                        	  <?=$blog['B_date']?>
                      	  </div>
                          </td>
                        <td align="center">
                            <a class="btn btn-success"style="width:82px;" href="<?=site_url("csie_blog/index/update_news/".$blog['B_id']);?>">修改</a>
                            <a class="btn btn-danger"style="width:82px;" href="<?=site_url("csie_blog/delete_news/".$blog['B_id']);?>" onclick="return(confirm('確認刪除嗎？'))">刪除</a>
                             <a class="btn btn-info"  style="width:82px;" href="<?=site_url("csie_blog/index/notice_email/".$blog['B_id']);?>">寄通知信</a>

                         </td>

                        </tr>
                        <? } ?>
                    </tbody>
                </table>
               </div>     
                    </div>
                                    
                                               
              </div>
           </div>
         </section>
      </div>
 </div>





