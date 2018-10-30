
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading">
                            待維修設備<span class="tools pull-right"><a href="javascript:;" class="fa fa-chevron-down"></a> </span>
                        </header>
                        
                           <div class="panel-body">                                    
                   <div class="adv-table">

                    <section id="no-more-tables">
                   
                <div class="table-responsive"> 
                    <table  class="display table table-bordered table-striped dynamic-table5" >
                    <thead>
                        <tr>
                            <th  style="max-width:70px;"><div align="center">排序</div></th>
                            <th style="min-width:100px;"><div align="center">教室</div></th>
                            <th style="min-width:100px;"><div align="center">編號</div></th>
                            <th style="min-width:100px;"><div align="center">設備名稱</div></th>
                            <th style="min-width:100px;"><div align="center">位置</div></th>
                            <th style="min-width:100px;"><div align="center">登記維修日期</div></th>
                            <th  style="min-width:240px;"class='sorting_asc_disabled' ><div align="center">功能</div></th>
                        </tr>
                    </thead>
                    <tbody>
                    	<? 
						$count=1;
						foreach($lab_data as $device){							
						?>
                    	<tr>
                        	<td align="center" data-title="排序"><?=$count;?></td>
                            <td align="center" data-title="教室"><?=$device['lab_name'];?></td>
                        	<td align="center" data-title="編號"><?=$device['device_number'];?></td>
                            <td  align="center"data-title="設備名稱"><?=$device['device_name'];?></td>
                        	<td  align="center"data-title="位置"><?=$device['device_position'];?></td>
                            <td  align="center"data-title="登記維修日期"><?=$device['fix_date'];?></td>

                        <td data-title="功能" align="center">
                        	  <a class="btn btn-inverse" style="min-width:112px;"  href="index.php/csie_lab_device_fix/index/return/<?=$device['fix_id']?>/unread" >維修中(回報)</a>
                              <a class="btn btn-success" style="min-width:112px;" href="<?=site_url("csie_lab_device_fix/index/history_index/".$device['device_id']);?>">歷史維修紀錄</a>
                         </td>

                        </tr>
                        <? 
						$count++;
						}; ?>
                    </tbody>
                </table>
                 </div>   
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
                    "aoColumns": [
            { sWidth: 'auto' },
            { sWidth: 'auto' },
            { sWidth: 'auto' },
            { sWidth: 'auto' },
            { sWidth: 'auto' },
            { sWidth: 'auto' },
            { sWidth: 'auto' }]
               };

                  $(".dynamic-table5").dataTable(opt3);
$(".dynamic-table5").css("width","100%")

              </script>

