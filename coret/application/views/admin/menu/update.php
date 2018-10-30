

 <div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					修改商品選單
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
                 
                  <div class="form">
                            <form data-toggle="validator" action="<? echo site_url("admin_menu/update");?>" method="post" enctype="multipart/form-data" class="form-horizontal" id="register_form">
             <fieldset>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="M_account">名稱</label>
                <div class="col-sm-10">
                  <input type="text" name="name" value="<?=$menu_data['name']?>" id="name" class="form-control">
                </div>
              </div>
              
    


              <div class="form-group required">
                <label class="col-sm-2 control-label">父項</label>
                <div class="col-sm-10">
                      <select class="form-control" name="parents_id">
                        <option value="0">無</option>
                      <? foreach ($product_menu as $key => $value) { 
                         if($value['id']!=$menu_data['id']){
                        ?>
                        <option value="<?=$value['id']?>" <? if($value['id']==$menu_data['parents_id']){ echo "selected='selected'"; } ?>><?=$value['name']?></option>
                      <? }}; ?>  
                      </select>

             </div>
              </div>

            </fieldset>
          
            
                    <div class="buttons">
              <div class="pull-right">
              <input type="hidden" name="id" value="<?=$menu_data['id']?>">
                <button class="btn btn-primary" type="submit" id="submit_regform" onclick="return(confirm('確認要更改嗎？'))">送出</button>                
              </div>
            </div>
                  </form>
                            
                       
                                
                            </div>

			</div>
		</div>
	</div>
</div>

