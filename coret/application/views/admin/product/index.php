
<link href="application/views/admin/js/bootstrap-fileinput-master/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<script src="application/views/admin/js/bootstrap-fileinput-master/js/fileinput.js" type="text/javascript"></script>
<script src="application/views/admin/js/bootstrap-fileinput-master/js/fileinput_locale_fr.js" type="text/javascript"></script>
<script src="application/views/admin/js/bootstrap-fileinput-master/js/fileinput_locale_es.js" type="text/javascript"></script>

 <div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					新增商品
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
                 
                  <div class="form">
                            <form data-toggle="validator" action="<? echo site_url("admin_html/update");?>" method="post" enctype="multipart/form-data" class="form-horizontal" id="register_form">
             <fieldset>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="M_account">標題</label>
                <div class="col-sm-10">
                  <input type="text" name="title" value="" id="title" class="form-control">
                </div>
              </div>
              
              <? if(!empty($html_files_data))
                      {
                    ?>
               <div class="form-group required">
                                       <label class="col-sm-2 control-label" for="pic">已上傳檔案</label>
                                       <div class="col-md-10">
                                       <div class="table-responsive">
                                         <section id="no-more-tables">
                                        
                                            <table class="table table-bordered table-striped table-condensed cf" id="table_rwd">
                                                <thead class="cf">
                                                    <tr>
                                                        <th>檔案名稱</th>
                                                        <th>動作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <? 
                           foreach($html_files_data as $files_data){?>
                                                        <tr>
                                        
                                                            <td data-title="檔案名稱" align="center" style="word-wrap:break-word;">
                                                                   <a href='index.php/admin_html/download_files/<?=$files_data['id'];?>'><?=$files_data['real_name'];?></a>
                                                            </td>
                                                            <td data-title="動作"  align="center">
                                                             <a class='btn btn-danger delete' href='index.php/admin_html/delete_files/<?=$files_data['id'];?>' onclick="return confirm('確定刪除?')";>
                                                              <i class='fa fa-trash-o'></i><span> 刪除</span>
                                                             </a>
                                                            </td>
                                                         
                                                        <? 
                          };?>
                                                </tbody>
                                            </table>
                                        
                                        </section>
                                        </div>
                                        <label style="color:#F00;">*請仔細確認是否刪除，刪除即不可還原，若不小心刪除請重新上傳。</label>                    
                                      </div>
                               </div>
                   <? }; ?>


                
               <div class="form-group required">
                                       <label class="col-sm-2 control-label" for="pic">檔案</label>
                                       <div class="col-md-10">
                                         <input id="file-0a" class="file" type="file" multiple data-min-file-count="0" name="pic[]">
                                                            
                                      </div>
                               </div>
                  


                              <div class="form-group required">
                                       <label class="col-sm-2 control-label" for="video">影片</label>
                                       <div class="col-md-10">
                                       <section id="no-more-tables">
                                        <table id="mt" border="1" cellpadding="5" cellspacing="0" class="table table-bordered table-striped table-condensed cf" >
                                          <thead>
                                            <tr><th>標題</th><th>連結(youtube)</th></tr>
                                          </thead>
                                          <tbody><tr><td data-title="標題" align="center" style="word-wrap:break-word;"> <input  type="text" class="form-control" name="video_title[]"></td><td data-title="連結(youtube)" align="center" style="word-wrap:break-word;"> <input  type="text" class="form-control" name="video[]"></td></tr></tbody>
                                        </table>
                                        </section>
                                        <button type="button" id="add" class='btn btn-primary'>更多影片</button> 
                                         <button type="button" id="del" class='btn btn-danger'>刪除欄位</button> 
                                      </div>
                               </div>                               




              <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-confirm">內容</label>
                <div class="col-sm-10">
                  <textarea name="content" rows="5" class="form-control ckeditor"  id="input-confirm" ><?=$html_data['content']?></textarea>
                </div>
              </div>
            </fieldset>
          
            
                    <div class="buttons">
              <div class="pull-right">
              <input type="hidden" name="id" value="<?=$html_data['id']?>">
                <button class="btn btn-primary" type="submit" id="submit_regform" onclick="return(confirm('確認要新增嗎？'))">送出</button>                
              </div>
            </div>
                  </form>
                            
                       
                                
                            </div>

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
  

$(function(){
  $("#add").click(function(){
      $('#mt tbody').append('<tr><td data-title="標題" align="center" style="word-wrap:break-word;"> <input  type="text" class="form-control" name="video_title[]"></td><td data-title="連結(youtube)" align="center" style="word-wrap:break-word;"> <input  type="text" class="form-control" name="video[]"></td></tr>');
   });
  $("#del").click(function(){
      $("#mt tbody tr:last").remove();
  });
})
</script>

