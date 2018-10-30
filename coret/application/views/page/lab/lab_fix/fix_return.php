<form action='index.php/csie_lab_device_fix/return_fix' method='post' enctype='multipart/form-data' class="form-horizontal row-border" id="form">                      
                              							
                                                              <div class="form-group">
                                                              <label class="control-label col-sm-2">檢修填寫人</label>
																<label class="col-sm-9 control-label" style="text-align:left;"><?
                                                                if($session['mem_level']=='學生')
																	{
																		echo $applicant=$session['username']." - ".$session['mem_name'];
																	}
																	else
																	{
																		echo $applicant=$session['mem_level']." - ".$session['mem_name'];
																	}
																?>
                                                                </label>
                                                               
                             								  </div>
                                                                 <div class="form-group">
                                                              <label class="control-label col-sm-2">修復日期</label>
																<label class="col-sm-9 control-label" style="text-align:left;"><?=date('Y-m-d');?></label>
                             								  </div>
                                                              
                                                              
                                                              <div class="form-group">
                                                                <label class="col-sm-2 control-label">修復過程</label>
                                                                <div class="col-sm-8">
                                                                    <textarea name="result" class="form-control autosize" id="result" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 150px; max-width:675px;"></textarea>
                                                                </div>
                                                            </div>
                
                
                                                           <div class="form-group">
                                                                <div class="col-lg-offset-6 col-lg-6">
                                                                <input name="id" type="hidden" value="<?=$lab_device_fix_deatil['id'];?>" />
                                                                  <input name="lab_id" type="hidden" value="<?=$lab_device_data['lab_id'];?>" />
                                                                    <button class="btn btn-primary" type="button" onclick="check()">送出</button>
                                                                    <? if($type=='unread'){ ?>
                                                                     <a class="btn btn-default"  href="index.php/csie_lab_device/index/device_undone">返回</a>
                                                                    <? }else{?>
                                                                     <a class="btn btn-default"  href="index.php/csie_lab_device/index/lab_device/<?=$lab_device_data['lab_id'];?>/detail">返回</a>
                                                                    <? };?>
                                                                </div>
                                                            </div>
                
</form> <script type="text/javascript" src="application/views/page/js/form-autosize/jquery.autosize-min.min.js"></script> <!-- DateTime Picker -->
<script>
	$('textarea.autosize').autosize({append: "\n"});
	
	function check()	
{

	if(confirm('確認要送出嗎？'))
	{
		if ($("#result").val()=='' ) 
		{ 
			 alert("修復過程未填！");
			 return false;
		}
		else
		{
			document.getElementById("form").submit();			
		}
		
	}
	else
	{
		return false;
	}
};	
</script>