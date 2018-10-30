<form class="form-horizontal row-border" method='post' enctype='multipart/form-data'>                      
                              								<div class="form-group">
                                                              <label class="col-sm-2 control-label">實驗室名稱</label>
                                                               <label class="col-sm-9 control-label" style="text-align:left;"><?=$lab_device_data['lab_name'];?></label>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">設備編號</label>
                                                                 <label class="col-sm-9 control-label" style="text-align:left;"><?=$lab_device_data['number'];?></label>
                                                            </div>
                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">設備名稱</label>
                                                                      <label class="col-sm-9 control-label" style="text-align:left;"><?=$lab_device_data['name'];?></label>
                                                            </div>
                                                            <div class="form-group">
                                                              <label class="control-label col-sm-2">設備位置</label>
                                                                   <label class="col-sm-9 control-label" style="text-align:left;"><?=$lab_device_data['position'];?></label>
                             								  </div>
                                                              <div class="form-group">
                                                              <label class="control-label col-sm-2">登記人</label>
																<label class="col-sm-9 control-label" style="text-align:left;"><?=$lab_device_fix_deatil['applicant'];?></label>
                             								  </div>
                                                                 <div class="form-group">
                                                              <label class="control-label col-sm-2">登記日期</label>
																<label class="col-sm-9 control-label" style="text-align:left;"><?=$lab_device_fix_deatil['date'];?></label>
                             								  </div>
                                                              
                                                              
                                                              <div class="form-group">
                                                                <label class="col-sm-2 control-label">故障情形</label>
                                                                <div class="col-sm-9">      
                                                                <? foreach($problem_id as $problem){?>
																<label class="control-label " style="text-align:left;"><?=$problem;?></label><br />
																<? };?>                                            						
                                                                </div>
                                                            </div>
              												<div class="form-group">
                                                                <label class="col-sm-2 control-label">故障情形描述</label>
                                                                <label class="control-label col-sm-9 " style="text-align:left;"><?=$lab_device_fix_deatil['problem_content'];?></label><br />
                                                               
                                                            </div>
                
</form>