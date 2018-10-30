 <link rel="stylesheet" type="text/css" href="application/views/page/js/bootstrap-datepicker/css/datepicker.css" />
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading">
                            新增<?=$labname;?>實驗室設備<span class="tools pull-right"><a href="javascript:;" class="fa fa-chevron-down"></a> </span>
                        </header>
                        
                <div class="panel-body">
                  <form class='form-horizontal' method='post'action='index.php/csie_lab_device/insert_device' enctype='multipart/form-data'>                      
                             
                                                             <div class="form-group">
                                                              <label class="col-sm-2 control-label">實驗室名稱</label>
                                                               <label class="col-sm-9 control-label" style="text-align:left;"><?=$labname;?></label>

                                                            </div>
                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">設備編號</label>
                                                                <div class="col-sm-9">
                                                                    <input name="number" type="text" class="form-control" id="number" required="required">
                                                                    <label  style="color:#F00" id="number_msg"></label>  
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">設備名稱</label>
                                                                <div class="col-sm-9">
                                                                    <input name="name" type="text" class="form-control" id="name" required="required">
                                                                       
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                              <label class="col-sm-2 control-label">設備型號/規格</label>
                                                                <div class="col-sm-9">
                                                                <textarea name="brands" class="form-control" id="brands"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                              <label class="control-label col-md-2">設備位置</label>
                                                                    <div class="col-md-9">
                                									<input name="position" type="text" class="form-control" id="position">
                                                                    <label style="color:#F00">EX:第1排第1位2號，請依照教室設備自行編排填寫</label>                                                                   
                                                                    </div>
                             								  </div>
                                                              <div class="form-group">
                                                              <label class="control-label col-md-2">購買年份</label>
                                                                    <div class="col-md-9">
                                                                        <div class="input-group date" id="datepicker-pastdisabled">
                                                                            <span class="input-group-addon"><i class="ti ti-calendar"></i></span>
                                                                            <input name="buy_time" type="text" class="form-control" id="buy_time" required="required">
                                                                        </div>
                                                                    </div>
                             								  </div>
                                                              
                                                              
                                                              
                                                              <div class="form-group">
                                                              <label class="control-label col-md-2">使用年份</label>
                                                                    <div class="col-md-9">
                                									    <div class="input-group date" id="datepicker-pastdisabled">
                                                                            <span class="input-group-addon"><i class="ti ti-calendar"></i></span>
                                                                            <input name="deadline" type="text" class="form-control" id="deadline" required="required">
                                                                        </div>

                                                                </div>
                             								  </div>
                                                              <div class="form-group">
                                                              <label class="control-label col-md-2">保管人/使用人</label>
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
                                                                <div class="col-lg-offset-6 col-lg-6">
                                                                <input name="lab_id" type="hidden" value="<?=$id;?>" />
                                                                    <button id="submit_btn" class="btn btn-primary" type="submit" onclick="return(confirm('確認要送出嗎？'))">送出</button>
                                                                    <a class="btn btn-default"  href="index.php/csie_lab_device/index/lab_device/<?=$id;?>/detail">返回</a>
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

$("#number").change(function() {

  $.ajax({
    url: 'index.php/csie_lab_device/ajax_device_nmber',
    type: 'POST',
    dataType: 'json',
    data: {number: $("#number").val()},
    success: function(response) {
     if(response!='')
     {
      $("#number_msg").html('※設備編號已經有建檔，請勿重複新增，謝謝');
     $("#submit_btn").attr('disabled', 'disabled');
     }
     else
     {
       $("#number_msg").html('');
       $("#submit_btn").removeAttr('disabled');
     }

    }, 
    error: function() {
      //console.log("ajax error!"); 
      //alert('ERROR')
    }
  })

});

</script>

