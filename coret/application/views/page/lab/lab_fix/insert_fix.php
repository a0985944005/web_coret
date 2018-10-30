<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading">
                             登記<?=$lab_device_data['lab_name'];?>設備維修<span class="tools pull-right"><a href="javascript:;" class="fa fa-chevron-down"></a> </span>
                        </header>
                        
                <div class="panel-body">
                  <form class="form-horizontal row-border" method='post'action='index.php/csie_lab_device_fix/insert_fix' enctype='multipart/form-data' id="form">                      
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
																<label class="col-sm-9 control-label" style="text-align:left;">
                                                                
																<? if($session['mem_level']=='學生')
																		{
																			$applicant=$session['username']." - ".$session['mem_name'];
																		}
																		else
																		{
																			$applicant=$session['mem_level']." - ".$session['mem_name'];
																		}
																		echo $applicant;
																?>
                                                                </label>
                             								  </div>
                                                                 <div class="form-group">
                                                              <label class="control-label col-sm-2">登記日期</label>
																<label class="col-sm-9 control-label" style="text-align:left;"><?=date('Y-m-d');?></label>
                             								  </div>
                                                              
                                                              
                                                              <div class="form-group">
                                                                <label class="col-sm-2 control-label">故障情形</label>
                                                                <div class="col-sm-9">
                                            					<? foreach($lab_device_problem as $device_problem){ ?>
                                                                         <label class="checkbox icheck">
                                                                            <div class="icheckbox_minimal-blue" style="position: relative;">
                                                                            	<input name="problem_id[]" type="checkbox" id="problem_id[]" style="position: absolute; opacity: 0;" value="<?=$device_problem['name'];?>">
                                                                                <ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);">
                                                                                </ins>
                                                                            </div>
                                                                           <?=$device_problem['name'];?>
                                                                        </label>
                                                                <? }; ?>        
                                                                     <label style="color:#F00">※勾選其他請在下面詳細描述情況</label>                                                                   

                                            
                                                                </div>
                                                            </div>
              												<div class="form-group">
                                                                <label class="col-sm-2 control-label">故障情形描述</label>
                                                                <div class="col-sm-8">
                                                                    <textarea name="problem_content" class="form-control autosize" id="problem_content" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 150px; max-width:675px;"></textarea>
                                                                </div>
                                                            </div>
                
                
                                                              
              
                                                           <div class="form-group">
                                                                <div class="col-lg-offset-6 col-lg-6">
                                                                <input name="lab_device_id" type="hidden" value="<?=$lab_device_data['id'];?>" />
                                                                 <input name="lab_id" type="hidden" value="<?=$lab_device_data['lab_id'];?>" />
                                                                    <button class="btn btn-primary" type="button" onclick="check()">送出</button>
                                                                    <a class="btn btn-default"  href="index.php/csie_lab_device/index/lab_device/<?=$lab_device_data['lab_id'];?>/detail">返回</a>
                                                                </div>
                                                            </div>
                                                         
                                                        </form>


                    
                            </div>
         </section>
      </div>
 </div>
 <script type="text/javascript" src="application/views/page/js/form-autosize/jquery.autosize-min.min.js"></script> <!-- DateTime Picker -->
<script>
	$('textarea.autosize').autosize({append: "\n"});
	
function check()	
{

	if(confirm('確認要送出嗎？'))
	{
		if ($("input[name='problem_id[]']:checked").length == 0 ) 
		{ 
			 alert("故障情形未填！");
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