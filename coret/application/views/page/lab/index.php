
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading">
                            實驗室管理<span class="tools pull-right"><a href="javascript:;" class="fa fa-chevron-down"></a> </span>
                        </header>
                        
                           <div class="panel-body">                                    
                   <div class="adv-table">
                      <section id="no-more-tables">
                   
                     <div align="right">
                    <a href="<?=site_url("csie_lab/index/insert_index");?>" class="btn btn-primary"><i class="fa fa-plus"></i> 新增實驗室</a>
                   
					</div>
                   
                    <table  class="display table table-bordered table-striped" id="dynamic-table3" >
                    <thead>
                        <tr>
                            <th style="min-width:50px;"><div align="center">#</div></th>
                            <th style="min-width:150px;"><div align="center">實驗室名稱</div></th>
                            <th style="min-width:100px;"><div align="center">是否開放</div></th>
                            <th style="min-width:100px;"><div align="center">新增日期</div></th>                            
                            <th  style="min-width:100px;"class='sorting_asc_disabled' ><div align="center">動作</div></th>                            
                        </tr>
                    </thead>
                    <tbody>
                    	<?  $count=1;
						foreach($lab_data as $lab){?>
                    	<tr>
                        	<td align="center" data-title="#"><?=$count;?></td>
                        	<td align="center" data-title="實驗室名稱"><?=$lab['name']?></td>                      	
                            <td  align="center"data-title="是否開放"><? if($lab['enable']=="Yes"){echo "開放";}else{ echo "不開放";};?></td>
                            <td  align="center"data-title="新增日期"><?=$lab['date']?></td>

                        <td data-title="動作" align="center">
                           <a class="btn btn-pink" style="min-width:94px;" href="index.php/csie_lab/index/detail/<?=$lab['id']?>">實驗室詳細</a>
                        	 <a class="btn btn-inverse" style="min-width:94px;" href="index.php/csie_lab_device/index/lab_device/<?=$lab['id']?>">使用紀錄</a>
                              <a class="btn btn-warning" style="min-width:94px;"  href="index.php/csie_lab_device/index/lab_device/<?=$lab['id']?>/detail">設備清單</a>
                            <a class="btn btn-success"  style="min-width:94px;" href="<?=site_url("csie_lab/index/update_index/".$lab['id']);?>">修改</a>
                            <a class="btn btn-danger" style="min-width:94px;" href="<?=site_url("csie_lab/delete_index/".$lab['id']);?>"  onclick="return(confirm('確認刪除嗎？'))">刪除</a>
                         </td>

                        </tr>
                        <? $count++;} ?>
                    </tbody>
                </table>
                    
                    </section>
                                    
                                               
              </div>
           </div>
         </section>
      </div>
 </div>


                <script type="text/javascript">


var opt3={"oLanguage":{"sProcessing":"處理中...",
                                     "sLengthMenu":" _MENU_ 每頁顯示筆數",
                                     "sZeroRecords":"沒有資料",
                                     "sInfo":"顯示第 _START_ 至 _END_ 項結果，共 _TOTAL_ 項",
                                     "sInfoEmpty":"顯示第 0 至 0 項結果，共 0 項",
                                     "sInfoFiltered":"(從 _MAX_ 項結果過濾)",
                                     "sSearch":"搜尋:",
                                     "oPaginate":{"sFirst":"首頁",
                                                          "sPrevious":"上頁",
                                                          "sNext":"下頁",
                                                          "sLast":"尾頁,"}
                              
                                     },
                    "aaSorting": [],
                    stateSave: true,
                    "aoColumns": [
            { sWidth: 'auto' },
            { sWidth: 'auto' },
            { sWidth: 'auto' },
            { sWidth: 'auto' },
            { sWidth: 'auto' }]
               };

                  $("#dynamic-table3").dataTable(opt3);
$("#dynamic-table3").css("width","100%")

              </script>



