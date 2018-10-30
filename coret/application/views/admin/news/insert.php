   <link href="application/views/theme/bootstrap-fileinput-master/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <script src="application/views/theme/bootstrap-fileinput-master/js/fileinput.js" type="text/javascript"></script>
        <script src="application/views/theme/bootstrap-fileinput-master/js/fileinput_locale_fr.js" type="text/javascript"></script>
        <script src="application/views/theme/bootstrap-fileinput-master/js/fileinput_locale_es.js" type="text/javascript"></script>


 <div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					新增公告
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
                 
                  <div class="form">
                            <form data-toggle="validator" action="<? echo site_url("admin_news/insert");?>" method="post" enctype="multipart/form-data" class="form-horizontal" id="register_form">
             <fieldset>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="M_account">標題</label>
                <div class="col-sm-10">
                  <input type="text" name="title"  id="title" class="form-control" >
                </div>
              </div>
                                     



             <div class="form-group required">
                  <label class="col-sm-2 control-label" for="pic">檔案</label>
                       <div class="col-md-10">
                       <input id="file-0a" class="file" type="file" multiple data-min-file-count="0" name="pic[]">
                                                            
                       </div>
              </div>



            <div class="form-group required">
                <label class="col-sm-2 control-label" >內容</label>
                <div class="col-sm-10">
                  <textarea name="content" rows="5" class="form-control ckeditor"  id="input-confirm" ></textarea>
                </div>
              </div>

            </fieldset>
          
            
                    <div class="buttons">
              <div class="pull-right">

                <button class="btn btn-primary" type="submit" id="submit_regform" onclick="return(confirm('確認要新增嗎？'))">送出</button>                
              </div>
            </div>
                  </form>
                            
                       
                                
                            </div>

			</div>
		</div>
	</div>
</div>



