        <link href="application/views/theme/bootstrap-fileinput-master/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <script src="application/views/theme/bootstrap-fileinput-master/js/fileinput.js" type="text/javascript"></script>
        <script src="application/views/theme/bootstrap-fileinput-master/js/fileinput_locale_fr.js" type="text/javascript"></script>
        <script src="application/views/theme/bootstrap-fileinput-master/js/fileinput_locale_es.js" type="text/javascript"></script>


 <div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					修改公告
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
                 
                  <div class="form">
                            <form data-toggle="validator" action="<? echo site_url("admin_news/update");?>" method="post" enctype="multipart/form-data" class="form-horizontal" id="register_form">
             <fieldset>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="M_account">標題</label>
                <div class="col-sm-10">
                  <input type="text" name="title" value="<?=$news_data['title']?>" id="title" class="form-control">
                </div>
              </div>

                      <? if(!empty($news_files_data))
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
                           foreach($news_files_data as $files_data){?>
                                                        <tr>
                                        
                                                            <td data-title="檔案名稱" align="center" style="word-wrap:break-word;">
                                                                   <a href='index.php/admin_news/download_files/<?=$files_data['id'];?>'><?=$files_data['real_name'];?></a>
                                                            </td>
                                                            <td data-title="動作"  align="center">
                                                             <a class='btn btn-danger delete' href='index.php/admin_news/delete_files/<?=$files_data['id'];?>' onclick="return confirm('確定刪除?')";>
                                                              <i class='glyphicon glyphicon-trash'></i><span> 刪除</span>
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
                <label class="col-sm-2 control-label" for="input-confirm">內容</label>
                <div class="col-sm-10">
                  <textarea name="content" rows="5" class="form-control ckeditor"  id="input-confirm" ><?=$news_data['content']?></textarea>
                </div>
              </div>





            
                    <div class="buttons">
              <div class="pull-right">
              <input type="hidden" name="id" value="<?=$news_data['id']?>">
                <button class="btn btn-primary" type="submit" id="submit_regform" onclick="return(confirm('確認要更改嗎？'))">送出</button>   
                 <a  href="<? echo site_url("admin_news/index/news");?>" class="btn btn-danger" id="submit_regform">返回</a>       
              </div>
            </div>
                  </form>
                            
                       
                                
                            </div>

			</div>
		</div>
	</div>
</div>

