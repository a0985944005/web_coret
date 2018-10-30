
	<div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>修改選單</h2>
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
					<form class="cmxform form-horizontal " action="<? echo site_url("csie_create/update");?>" method="post" name="update_from" id="update_from">
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">項目名稱</label>
                                        <div class="col-lg-6">
                                        <input id="name" name="name" value="<?=$create_update_data['0']['name'];?>" class=" form-control" >
                                        </div>
                                    </div>

                                   
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">父項目</label>
                                        <div class="col-lg-6">
                                            <input id="parent" name="parent" value="<?=$create_update_data['0']['parent'];?>" class="form-control">
                                        </div>
                                    </div>
                                     
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">子項目順位</label>
                                        <div class="col-lg-6">
                                            <input id="local" name="local" value="<?=$create_update_data['0']['local'];?>" class="form-control">
                                        </div>
                                    </div> 
                                   
                                   
                                      <div class="form-group ">
                                        <label class="control-label col-lg-3">前台顯示</label>
                                      <div class="col-lg-6">
                                        <select name="active" class="form-control">
                                              <option value="Yes"  <? if($create_update_data['0']['active'] == 'Yes') {echo "selected='selected'";}?>>是</option>
                                              <option value="No"   <? if($create_update_data['0']['active'] == 'No')  {echo "selected='selected'";}?>>否</option>
                                        </select>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">管理者外是否可編輯</label>
                                      <div class="col-lg-6">
                                            <select name="edit" class="form-control">
                                                <option value="Yes" <? if($create_update_data['0']['edit'] == 'Yes') {echo "selected='selected'";}?>>是</option>
                                                <option value="No"  <? if($create_update_data['0']['edit'] == 'No')  {echo "selected='selected'";}?>>否</option>
                                            </select>
                                        </div>
                                    </div>
                                   
                                   
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">前台預設路徑</label>
                                        <div class="col-lg-6">
                                            <input id="fpath" name="fpath" value="<?=$create_update_data['0']['fpath'];?>" class="form-control">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">後台預設路徑</label>
                                        <div class="col-lg-6">
                                            <input id="bpath" name="bpath" value="<?=$create_update_data['0']['bpath'];?>" class="form-control">
                                        </div>
                                    </div>
                                    
                                                                                                           
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                        
                                            <input type="hidden" name="id" id="id" value="<?=$create_update_data['0']['id'];?>"/>
									        <input type="hidden" name="model_id" id="model_id" value="<?=$create_update_data['0']['model_id'];?>"/>
                                            <button class="btn btn-primary" type="submit">送出</button>
                                        </div>
                                    </div>
                                </form>
			</div>
		</div>
	</div>
</div>
