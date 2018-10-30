 <link rel="stylesheet" type="text/css" href="application/views/page/js/bootstrap-datepicker/css/datepicker.css" />
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading">
                             修改<?=$lab_device_data['lab_name'];?>實驗室設備<span class="tools pull-right"><a href="javascript:;" class="fa fa-chevron-down"></a> </span>
                        </header>
                        
                <div class="panel-body">
                  <form class='form-horizontal' method='post'action='index.php/csie_lab_device/update_device' enctype='multipart/form-data'>                      
                              								<div class="form-group">
                                                              <label class="col-sm-2 control-label">實驗室名稱</label>
                                                               <label class="col-sm-9 control-label" style="text-align:left;"><?=$lab_device_data['lab_name'];?></label>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">設備編號</label>
                                                                <div class="col-sm-9">
                                                                    <input name="number" type="text" required="required" class="form-control" id="number" value="<?=$lab_device_data['number'];?>" required="required"> 
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">設備名稱</label>
                                                                <div class="col-sm-9">
                                                                    <input name="name" type="text" required="required" class="form-control" id="name" value="<?=$lab_device_data['name'];?>" required="required">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">設備型號/規格</label>
                                                                <div class="col-sm-9">
                                                                 <textarea name="brands" class="form-control" id="brands"><?=$lab_device_data['brands'];?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                              <label class="control-label col-md-2">設備位置</label>
                                                                    <div class="col-md-9">
                                									<input name="position" type="text" class="form-control" id="position" value="<?=$lab_device_data['position'];?>">
                                                                    <label style="color:#F00">EX:第1排第1位2號，請依照教室設備自行編排填寫</label>                                                                   
                                                                    </div>
                             								  </div>
                                                              <div class="form-group">
                                                              <label class="control-label col-md-2">購買年份</label>
                                                                    <div class="col-md-9">
                                                                        <div class="input-group date" id="datepicker-pastdisabled">
                                                                            <span class="input-group-addon"><i class="ti ti-calendar"></i></span>
                                                                            <input name="buy_time" type="text" class="form-control" id="buy_time" value="<?=$lab_device_data['buy_time'];?>" required="required">
                                                                        </div>
                                                                    </div>
                             								  </div>
                                                              
                                                              
                                                              
                                                              <div class="form-group">
                                                              <label class="control-label col-md-2">使用年份</label>
                                                                    <div class="col-md-9">
                                									    <div class="input-group date" id="datepicker-pastdisabled">
                                                                            <span class="input-group-addon"><i class="ti ti-calendar"></i></span>
                                                                            <input name="deadline" type="text" class="form-control" id="deadline" value="<?=$lab_device_data['deadline'];?>" required="required">
                                                                        </div>

                                                                </div>
                             								  </div>
                                                              <div class="form-group">
                                                              <label class="control-label col-md-2">原保管人</label>
                                                                  <label class="col-sm-9 control-label" style="text-align:left;"><?=$lab_device_data['custodian'];?></label>
                             								  </div>
           												    <div class="form-group">
                                                              <label class="control-label col-md-2">新保管人</label>
                                                                    <div class="col-md-9">
                                                                      <select class="form-control" name="custodian">
                                                                         <option value="">無</option>
																		<? foreach($member_data as $member_data_) {
																		?>
                                                                       	 <option value="<?=$member_data_['mem_class']." - ".$member_data_['mem_name'];?>">
                                                                             <?=$member_data_['mem_class']." - ".$member_data_['mem_name']?>
                                                                         </option>
                                                                        <? }?>
                                                                  	   </select>
                                                                    </div>
                             								  </div>


                                               <div class="form-group">
                                                              <label class="control-label col-md-2">更換實驗室</label>
                                                                    <div class="col-md-9">
                                                                      <select class="form-control" name="new_lab">
                                                                         <option value="">無</option>
                                            <? foreach($lab_data as $lab_data_) {
                                            ?>
                                                                         <option value="<?=$lab_data_['id'];?>">
                                                                             <?=$lab_data_['name'];?>
                                                                         </option>
                                                                        <? }?>
                                                                       </select>
                                                                    </div>
                                              </div>
                                                           <div class="form-group">
                                                                <div class="col-lg-offset-6 col-lg-6">
                                                                <input name="lab_id" type="hidden" value="<?=$lab_device_data['lab_id'];?>" />
                                                                <input name="id" type="hidden" value="<?=$lab_device_data['id'];?>" />
                                                                    <button class="btn btn-primary" type="submit" onclick="return(confirm('確認要送出嗎？'))">送出</button>
                                                                    <a class="btn btn-default"  href="index.php/csie_lab_device/index/lab_device/<?=$lab_device_data['lab_id'];?>">返回</a>
                                                                </div>
                                                            </div>
                                                         
                                                        </form>


                    
                            </div>
         </section>
      </div>
 </div>
 <script type="text/javascript" src="application/views/page/js/bootstrap-datepicker_/bootstrap-datepicker.js"></script> <!-- DateTime Picker -->
 <script type="text/javascript" src="application/views/page/js/bootstrap-datepicker_/locales/bootstrap-datepicker.zh-TW.js"></script> <!-- DateTime Picker 繁體中文 -->
<script>

$('.date').datepicker({
			todayHighlight: true,
			 language: 'zh-TW'
		});

</script>

