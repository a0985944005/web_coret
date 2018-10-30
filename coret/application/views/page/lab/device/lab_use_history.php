<div class="adv-table">
                      <section id="no-more-tables">
                   <div>
                   
                    <div class="row">
                        <div class="col-md-4">  <label style="font-size:24px;"><?=$lab_data[0]['name'].' 使用紀錄'?></label></div>
                        <div class="col-md-4 col-md-offset-4" align="right">  
                          <? if($session['mem_level']=='系辦人員'){ ?>
                          <a href="<?=site_url("csie_lab_device/index/insert_use_history/".$lab_data[0]['id']);?>" class="btn btn-primary"><i class="fa fa-plus"></i> 新增使用紀錄</a>
                          <? }
						  	else
							{								
								if($teacher_actity =='Yes'||$student_actity =='Yes')
									{
										$id=$lab_data[0]['id'];
										echo "<a href='index.php/csie_lab_device/index/insert_use_history/$id' class='btn btn-primary'><i class='fa fa-plus'></i> 新增使用紀錄</a>";									
									}
							}; ?>
                        </div>
                    </div>

                 <div class="table-responsive"> 
                    <table  class="display table table-bordered table-striped dynamic-table3">
                    <thead>
                        <tr>
                            <th style="min-width:50px;"><div align="center">#</div></th>
                            <th style="min-width:100px;"><div align="center">使用日期</div></th>
                            <th style="min-width:100px;"><div align="center">設備</div></th>
                            <th style="min-width:150px;"><div align="center">電源是否關閉</div></th>
                            <th style="min-width:150px;"><div align="center">冷氣開關是否關閉</div></th>
                            <th style="min-width:100px;"><div align="center">填寫人</div></th>
                            <th  style="min-width:250px;"class='sorting_asc_disabled' ><div align="center">功能</div></th>
                        </tr>
                    </thead>
                    <tbody>
                    	<? 
						$count=1;
						foreach($lab_type_data as $type_data){							
						?>
                    	<tr>
                        	<td align="center" data-title="#"><?=$count;?></td>
                        	<td align="center" data-title="使用日期"><?=$type_data['date_start']." ~ ".$type_data['date_end'];?></td>
                            <td  align="center"data-title="設備"><? if($type_data['device']=="Normal")echo "正常"; else echo "<label style='color:#F00;'>故障</label>";?></td>
                        	<td  align="center"data-title="電源是否關閉"><? if($type_data['power']=="Yes")echo "已關閉"; else echo "<label style='color:#F00;'>未關閉</label>";?></td>
                            <td  align="center"data-title="冷氣開關是否關閉"><? if($type_data['air_conditioning']=="Yes")echo "已關閉"; else echo "<label style='color:#F00;'>未關閉</label>";?></td>
                            <td  align="center"data-title="填寫人"><?=$type_data['applicant'];?></td>

                        <td data-title="功能" align="center">
                        
  								<a class="btn btn-success" style="min-width:112px;" href="index.php/csie_lab_device/index/update_use_history/<?=$type_data['id']?>">修改</a>
                               <a class="btn btn-danger" style="min-width:112px;" href="<?=site_url("csie_lab_device/delete_use_history/".$type_data['id']);?>" onclick="return(confirm('確認刪除嗎？'))">刪除</a>                        
                           
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
            { sWidth: '14%' },
            { sWidth: '14%' },
            { sWidth: '14%' },
            { sWidth: '14%' },
            { sWidth: '14%' },
            { sWidth: '14%' },
            { sWidth: '14%' }]
               };

                  $(".dynamic-table3").dataTable(opt3);
$(".dynamic-table3").css("width","100%")

              </script>