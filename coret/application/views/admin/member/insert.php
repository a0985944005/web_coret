
 <div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					新增管理者
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
                 
                  <div class="form">
                            <form data-toggle="validator" action="<? echo site_url("admin_member/insert");?>" method="post" enctype="multipart/form-data" class="form-horizontal" id="register_form">
             <fieldset>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="account">帳號</label>
                <div class="col-sm-8">
                  <input type="text" name="account"  id="account" class="form-control">
                </div>
              </div>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="password">密碼</label>
                <div class="col-sm-8">
                  <input type="text" name="password"  id="password" class="form-control">
                </div>
              </div>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="name">姓名</label>
                <div class="col-sm-8">
                  <input type="text" name="name"  id="name" class="form-control">
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


