 <link rel="stylesheet" type="text/css" href="application/views/page/js/bootstrap-datetimepicker/css/daterangepicker-bs3.css" />
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading">
                            新增<?=$labname;?>實驗室使用紀錄<span class="tools pull-right"><a href="javascript:;" class="fa fa-chevron-down"></a> </span>
                        </header>
                        
                <div class="panel-body">
                  <form class='form-horizontal' method='post'action='index.php/csie_lab_device/insert_use_history' enctype='multipart/form-data'>                      
                             
                                                             <div class="form-group">
                                                              <label class="col-sm-2 control-label">實驗室名稱</label>
                                                               <label class="col-sm-9 control-label" style="text-align:left;"><?=$labname;?></label>

                                                            </div>                                                          
                                
                                                     <div class="form-group">
                                                            <label for="dtp-1" class="col-sm-2 control-label">使用日期</label>
                                                            <div class="col-sm-8">
                                                            <div class="input-daterange input-group" id="datepicker-range">
                                                                <input name="date_start" type="text" class="form-control dtp-1" required>
                                                                    <span class="input-group-addon">to</span>
                                                                <input name="date_end" type="text" class="form-control dtp-1" required>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                           <div class="form-group">
                                                              <label class="control-label col-md-2">設備</label>
                                                                    <div class="col-md-9">
                                                                     <select class="form-control" name="device" id="device">
                                                                         <option value="Normal">正常</option>
                                                                         <option value="Error">故障</option>
                                                                  	   </select>
                                                                    </div>
                             								  </div>
                                                              <div class="form-group">
                                                              <label class="control-label col-md-2">電源開關是否關閉</label>
                                                                    <div class="col-md-9">
                                                                     <select class="form-control" name="power" id="power">
                                                                         <option value="Yes">是</option>
                                                                         <option value="No">否</option>
                                                                  	   </select>
                                                                    </div>
                             								  </div>
                                                              <div class="form-group">
                                                              <label class="control-label col-md-2">冷氣是否關閉</label>
                                                                    <div class="col-md-9">
                                                                     <select class="form-control" name="air_conditioning" id="air_conditioning">
                                                                         <option value="Yes">是</option>
                                                                         <option value="No">否</option>
                                                                  	   </select>
                                                                    </div>
                             								  </div>
           													   <div class="form-group">
                                                              <label class="col-sm-2 control-label">填寫人</label>
                                                               <label class="col-sm-9 control-label" style="text-align:left;"><?=$session['mem_name']?></label>
															<input name="applicant" type="hidden" value="<?=$session['mem_id']?>" />
                                                            </div>
                                                           <div class="form-group">
                                                                <div class="col-lg-offset-6 col-lg-6">
                                                                <input name="lab_id" type="hidden" value="<?=$id;?>" />
                                                                    <button class="btn btn-primary" type="submit" onclick="return(confirm('確認要送出嗎？'))">送出</button>
                                                                    <a class="btn btn-default"  href="index.php/csie_lab_device/index/lab_device/<?=$id;?>">返回</a>
                                                                </div>
                                                            </div>
                                                         
                                                        </form>


                    
                            </div>
         </section>
      </div>
 </div>
 <script type="text/javascript" src="application/views/page/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> <!-- DateTime Picker -->
 <script type="text/javascript" src="application/views/page/js/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.zh-TW.js"></script> <!-- DateTime Picker 繁體中文 -->
<script>
$('.dtp-1').datetimepicker({format: 'yyyy-mm-dd hh:ii', language: 'zh-TW'});


</script>

