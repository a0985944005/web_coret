
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading">
                            設備歷史維修紀錄<span class="tools pull-right"><a href="javascript:;" class="fa fa-chevron-down"></a> </span>
                        </header>
                        
                           <div class="panel-body">                                    
                   <div class="adv-table">
                      <section id="no-more-tables">
                   
                     <div align="left">
                  		 <label style="font-size:24px;"><?=$lab_device_data['lab_name'].'編號：'.$lab_device_data['number'];?></label>
                         <br />
                        <label style="font-size:14px;"><?='位置：'.$lab_device_data['position'];?></label>
                   
					</div>
                   <div class="table-responsive"> 
                    <table  class="display table table-bordered table-striped" id="dynamic-table" >
                    <thead>
                        <tr>
                            <th style="min-width:50px;"><div align="center">#</div></th>
                            <th style="min-width:150px;"><div align="center">登記人</div></th>
                            <th style="min-width:100px;"><div align="center">日期</div></th>        
                            <th style="min-width:100px;"><div align="center">維修完成日期</div></th>   
                            <th style="min-width:100px;"><div align="center">檢修填寫人</div></th>                    
                            <th  style="min-width:100px;"class='sorting_asc_disabled' ><div align="center">動作</div></th>                            
                        </tr>
                    </thead>
                    <tbody>
                    	<? $count=1;
						foreach($lab_device_data['history'] as $history){?>
                    	<tr>
                        	<td align="center" data-title="#"><?=$count?></td>
                        	<td align="center" data-title="登記人"><?=$history['applicant']?></td>                      	
                            <td  align="center"data-title="登記日期"><?=$history['date']?></td>
                            <td  align="center"data-title="維修完成日期"><? if($history['fix_type']=='undone')echo "<label style='color:#F00;'>尚未檢修完畢</label>";else echo $history['done_date'];?></td>
                            <td  align="center"data-title="檢修填寫人"><?=$history['repairers']?></td>

                        <td data-title="動作" align="center">
                        	 <a class="btn btn-success" style="min-width:82px;" href="index.php/csie_lab_device_fix/index/history_detail/<?=$history['id']?>">詳細</a>
                         </td>

                        </tr>
                        <? $count++; }; ?>
                    </tbody>
                </table>
                 </div>   
                    </section>
                                    
                                               
              </div>
           </div>
         </section>
      </div>
 </div>





