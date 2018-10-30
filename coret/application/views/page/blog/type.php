
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading">
                            文章類別管理<span class="tools pull-right"><a href="javascript:;" class="fa fa-chevron-down"></a> </span>
                        </header>
                        
                           <div class="panel-body">                                    
                   <div class="adv-table">
                   
                   <div align="right">
                    <a href="<?=site_url("csie_blog/index/insert_type");?>" class="btn btn-primary"><i class="fa fa-plus"></i> 新增分類</a>
                   
					</div>
                    <div class="table-responsive">
                   
                <div class="table-responsive"> 
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                        <tr>
                            <th style="min-width:50px;">排序</th>
                            <th style="min-width:100px;">類別</th>
                            <th style="min-width:100px;">是否啟用</th>
                            <th style="min-width:100px;">新增日期</th>
                            <th  style="min-width:150px;"class='sorting_asc_disabled' ><div align="center">動作</div></th>
                        </tr>
                    </thead>
                    <tbody>
                    	<? 
						$count = 1;
						foreach($blog_type_data as $type_data){?>
                    	<tr>
                        	<td><?=$type_data['local'];?></td>
                        	<td><?=$type_data['title']?></td>
                        	<td><?=$type_data['enable']?></td>
                        	<td><?=$type_data['date']?></td>
                        	<td align="center">
                            <a class="btn btn-success" href="<?=site_url("csie_blog/index/update_type/".$type_data['id']);?>">修改</a>
                            <a class="btn btn-danger" href="<?=site_url("csie_blog/delete_type/".$type_data['id']);?>" onclick="return(confirm('確認刪除嗎？'))">刪除</a>
                            </td>

                        </tr>
                        <? $count++;} ?>
                    </tbody>
                </table>
              </div>      
                    </div>
                                    
                                               
              </div>
           </div>
         </section>
      </div>
 </div>





