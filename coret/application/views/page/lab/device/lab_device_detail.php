<div class="adv-table">
                      <section id="no-more-tables">
                   <div>
                   
                    <div class="row">
                        <div class="col-md-4">  <label style="font-size:24px;"><?=$lab_data[0]['name'].' 設備列表'?></label></div>
                        <div class="col-md-4 col-md-offset-4" align="right">  
                          <? if($session['mem_level']=='系辦人員'){ ?>
                          <a href="<?=site_url("csie_lab_device/index/insert_device/".$lab_data[0]['id']);?>" class="btn btn-primary"><i class="fa fa-plus"></i> 新增設備</a>
                          <? }
						  	else
							{								
								if($teacher_actity =='Yes'||$student_actity =='Yes')
									{
										$id=$lab_data[0]['id'];
										echo "<a href='index.php/csie_lab_device/index/insert_device/$id' class='btn btn-primary'><i class='fa fa-plus'></i> 新增設備</a>";									
									}
							}; ?>
                        </div>
                    </div>

                   <div class="table-responsive"> 
                    <table  class="display table table-bordered table-striped dynamic-table2" >
                    <thead>
                        <tr>
                            <th  style="max-width:70px;"><div align="center">排序</div></th>
                            <th style="min-width:100px;"><div align="center">編號</div></th>
                            <th style="min-width:100px;"><div align="center">設備名稱</div></th>
                            <th style="min-width:100px;"><div align="center">位置</div></th>
                            <th style="min-width:100px;"><div align="center">購買年份</div></th>
                            <th style="min-width:100px;"><div align="center">使用年份</div></th>
                            <th style="min-width:100px;"><div align="center">保管人</div></th>
                            <th style="min-width:100px;"><div align="center">最後維修日期</div></th>
                            <th  style="min-width:240px;"class='sorting_asc_disabled' ><div align="center">功能</div></th>
                        </tr>
                    </thead>
                    <tbody>
                    	<? 
						$count=1;
						foreach($lab_device as $device){							
						?>
                    	<tr>
                        	<td align="center" data-title="排序"><?=$count;?></td>
                        	<td align="" data-title="編號"><?=$device['number'];?></td>
                            <td  align=""data-title="設備名稱"><a href="index.php/csie_lab_device/index/device_detail/<?=$device['id']?>"><?=$device['name'];?></a></td>
                        	<td  align="center"data-title="位置"><?=$device['position'];?></td>
                            <td  align="center"data-title="購買年份"><?=$device['buy_time'];?></td>
                            <td  align="center"data-title="使用年份"><?=$device['deadline'];?></td>
                            <td  align="center"data-title="保管人"><?=$device['custodian'];?></td>
                             <td  align="center"data-title="最後維修日期"><? if($device['fix_type']=='undone') echo $device['fix_time']."<br> 檢修中"; else if($device['fix_type']=='done') echo $device['done_date']."<br> 檢修完成";?></td>

                        <td data-title="功能" align="center">
                        	 <? if(($device['fix_type']=='done')||($device['fix_type']=='')){ ?>
	                             <a class="btn btn-inverse" style="min-width:112px;" href="index.php/csie_lab_device_fix/index/insert_fix/<?=$device['id']?>">維修登記</a>
                             <? }else {?>                             
                                
                                 <? if(($session['mem_level']=='系辦人員')||($teacher_actity =='Yes'||$student_actity =='Yes')){ ?>
                                 <a class="btn btn-inverse" style="min-width:112px;"  href="index.php/csie_lab_device_fix/index/return/<?=$device['fix_id']?>" >維修中(回報)</a>
								   <? }
                                    else
                                    {
                                       echo "<a class='btn btn-inverse' style='min-width:112px;' disabled='disabled' href='javascript: void(0)' >維修中...</a>";
                                    }; ?>
                                
                                
                             <? }; ?>
                              <a class="btn btn-success" style="min-width:112px;" href="<?=site_url("csie_lab_device_fix/index/history_index/".$device['id']);?>">歷史維修紀錄</a>
                              
                           <? if($session['mem_level']=='系辦人員'){ ?>
  								<a class="btn btn-warning" style="min-width:112px;" href="index.php/csie_lab_device/index/update_device/<?=$device['id']?>">修改</a>
                               <a class="btn btn-danger" style="min-width:112px;" href="<?=site_url("csie_lab_device/delete_device/".$device['id']);?>" onclick="return(confirm('確認刪除嗎？'))">刪除</a>                        
                           <? }
						  	else
							{
								if($teacher_actity =='Yes'||$student_actity =='Yes')
									{
										$device_id=$device['id'];
										?>

  								<a class="btn btn-warning" style="min-width:112px;" href="index.php/csie_lab_device/index/update_device/<?=$device['id']?>">修改</a>
                                <a class="btn btn-danger" style="min-width:112px;" href="<?=site_url("csie_lab_device/delete_device/".$device['id']);?>" onclick="return(confirm('確認刪除嗎？'))">刪除</a>    				
							<?		}
							}; ?>
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

              <script type="text/javascript">


var opt2={"oLanguage":{"sProcessing":"處理中...",
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
                                      stateSave: true,
                    "aaSorting": [],
                    "aoColumns": [
            { sWidth: '9%' },
            { sWidth: '9%' },
            { sWidth: '9%' },
            { sWidth: '9%' },
            { sWidth: '9%' },
            { sWidth: '9%' },
            { sWidth: '9%' },
            { sWidth: '9%' },
            { sWidth: 'auto' }]
               };


                  $(".dynamic-table2").dataTable(opt2);
$(".dynamic-table2").css("width","100%")

              </script>