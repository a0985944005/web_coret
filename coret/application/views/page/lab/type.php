
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading">
                            報修類別管理<span class="tools pull-right"><a href="javascript:;" class="fa fa-chevron-down"></a> </span>
                        </header>
                        
                           <div class="panel-body">                                    
                   <div class="adv-table">
                   
                   <div align="right">
                    <a href="<?=site_url("csie_lab/index/insert_type");?>" class="btn btn-primary"><i class="fa fa-plus"></i> 新增類別</a>
                   
					</div>
                    <section id="no-more-tables">
                   
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
						foreach($device_problem_data as $type_data){?>
                    	<tr>
                        	<td data-title="排序"><?=$count;?></td>
                        	<td data-title="類別"><?=$type_data['name']?></td>
                        	<td data-title="是否啟用"><?=$type_data['enable']?></td>
                        	<td data-title="新增日期"><?=$type_data['date']?></td>
                        	<td align="center" data-title="動作">
                            <a class="btn btn-success" href="<?=site_url("csie_lab/index/update_type/".$type_data['id']);?>">修改</a>
                            <a class="btn btn-danger" href="<?=site_url("csie_lab/delete_type/".$type_data['id']);?>" onclick="return(confirm('確認刪除嗎？'))">刪除</a>
                            </td>

                        </tr>
                        <? $count++;} ?>
                    </tbody>
                </table>
                 </div>   
                    </section>
                                    
                                               
              </div>
           </div>
         </section>
      </div>
 </div>





