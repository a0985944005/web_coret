<form class="form-horizontal row-border" method='post' enctype='multipart/form-data' >                      
                              							<? if($lab_device_fix_deatil['fix_type']=='done'){ ?>
                                                              <div class="form-group">
                                                              <label class="control-label col-sm-2">檢修填寫人</label>
																<label class="col-sm-9 control-label" style="text-align:left;">
																<?=$lab_device_fix_deatil['repairers'];?>
                                                                </label>
                                                               
                             								  </div>
                                                                 <div class="form-group">
                                                              <label class="control-label col-sm-2">修復日期</label>
																<label class="col-sm-9 control-label" style="text-align:left;"><?=$lab_device_fix_deatil['done_date'];?></label>
                             								  </div>
                                                              
                                                              
                                                              <div class="form-group">
                                                                <label class="col-sm-2 control-label">修復過程</label>
																	<label class="control-label col-sm-9 " style="text-align:left;"><?=$lab_device_fix_deatil['result'];?></label><br />
                                                              </div>
                                                             <? }else{ ?>
                                                              <div class="form-group">
                                                              <label class="control-label col-sm-2">檢修填寫人</label>
																<label class="col-sm-9 control-label" style="text-align:left;">
																尚未檢修完畢
                                                                </label>
                                                               
                             								  </div>
                                                                 <div class="form-group">
                                                              <label class="control-label col-sm-2">修復日期</label>
																<label class="col-sm-9 control-label" style="text-align:left;">尚未檢修完畢</label>
                             								  </div>
                                                              
                                                              
                                                              <div class="form-group">
                                                                <label class="col-sm-2 control-label">修復過程</label>
																	<label class="control-label col-sm-9 " style="text-align:left;">尚未檢修完畢</label><br />
                                                              </div>
                                                             <? };?> 
</form>