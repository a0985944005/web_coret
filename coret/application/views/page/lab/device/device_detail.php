<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading">
                             設備資訊<span class="tools pull-right"><a href="javascript:;" class="fa fa-chevron-down"></a> </span>
                        </header>
                        
                <div class="panel-body">
                  <form class="form-horizontal row-border" method='post'enctype='multipart/form-data' id="form">                      
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
                                                              <label class="control-label col-sm-2">設備型號/規格</label>
                                                                   <label class="col-sm-9 control-label" style="text-align:left;"><?=$lab_device_data['brands'];?></label>
                                                            </div>
                                                            <div class="form-group">
                                                              <label class="control-label col-sm-2">設備位置</label>
                                                                   <label class="col-sm-9 control-label" style="text-align:left;"><?=$lab_device_data['position'];?></label>
                             								                </div>
                                                              <div class="form-group">
                                                              <label class="control-label col-sm-2">保管人/使用人</label>
                                                               <label class="col-sm-9 control-label" style="text-align:left;"><?=$lab_device_data['custodian'];?></label>
                             								                 </div>
                                                                 <div class="form-group">
                                                              <label class="control-label col-sm-2">取得日期</label>
															                               	<label class="col-sm-9 control-label" style="text-align:left;"><?=$lab_device_data['buy_time'];?></label>
                             								                   </div>
                                                                <div class="form-group">
                                                              <label class="control-label col-sm-2">使用年份</label>
                                                              <label class="col-sm-9 control-label" style="text-align:left;"><?=$lab_device_data['deadline'];?></label>
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