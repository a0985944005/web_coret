 <div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					新增勤報
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
                 
                  <div class="form">
                            <form data-toggle="validator" action="<? echo site_url("admin_index/insert");?>" method="post" enctype="multipart/form-data" class="form-horizontal" id="register_form">
             <fieldset>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="M_account">標題</label>
                <div class="col-sm-10">
                  <input type="text" name="title"  id="title" class="form-control">
                </div>
              </div>
                                     



              <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-confirm">連結</label>
                <div class="col-sm-10">
                     <input type="text" name="url"  id="url" class="form-control">
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



