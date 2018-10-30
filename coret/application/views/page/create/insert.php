
	<div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>新增選單</h2>
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
					<form class="cmxform form-horizontal " id="insert_from"  method="post" name="insert_from" action="<? echo site_url("csie_create/insert");?>">
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">項目名稱</label>
                                        <div class="col-lg-6">
                                        <input name="name" class=" form-control" >
                                        </div>
                                    </div>
                                   
                                   
                                   <div class="form-group ">
                                        <label class="control-label col-lg-3">模組</label>
                                      <div class="col-lg-6">
                                            <select name="model_id" class="form-control">
                                                  <option value="0">無</option>
                                                  <option value="html">網頁模組</option>
                                                  <!--
                                                  <option value="cal">日曆模組</option>
                                                  <option value="privilege">權限模組</option>
                                                  <option value="mails">電子報模組</option>
                                                  <option value="news">公告模組</option>
                                                  <option value="Link">連結模組</option>
                                                  <option value="photorun">廣告牆模組</option>
                                                  <option value="shopcar">電子商務(商品模組)</option>
                                                  <option value="order">電子商務(訂單模組)</option>
                                                  <option value="chart">報表模組</option>
                                                  <option value="mService">客服模組</option>
                                                  <option value="record">修改紀錄模組</option>
                                                  <option value="shopgirl">模特兒模組</option>
                                                 
                                                  
                                                  <option value="activity">活動模組</option>
                                                   -->
                                            </select>
                                        </div>
                                    </div>
                                   
                                   
                                   
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">父項目</label>
                                        <div class="col-lg-6">
                                            <input name="parent" class="form-control">
                                        </div>
                                    </div>
                                     
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">子項目順位</label>
                                        <div class="col-lg-6">
                                            <input name="local" class="form-control">
                                        </div>
                                    </div> 
                                   
                                   
                                      <div class="form-group ">
                                        <label class="control-label col-lg-3">前台顯示</label>
                                      <div class="col-lg-6">
                                        <select name="active" class="form-control">
                                              <option value="Yes" selected="selected">是</option>
                                              <option value="No" >否</option>
                                        </select>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">管理者外是否可編輯</label>
                                      <div class="col-lg-6">
                                            <select name="edit" class="form-control">
                                                <option value="Yes" selected="selected">是</option>
                                                <option value="No" >否</option>
                                            </select>
                                        </div>
                                    </div>
                                   
                                   
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">前台預設路徑</label>
                                        <div class="col-lg-6">
                                            <input name="fpath" class="form-control">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">後台預設路徑</label>
                                        <div class="col-lg-6">
                                            <input name="bpath" class="form-control">
                                        </div>
                                    </div>
                                    
                                                                                                           
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">送出</button>
                                        </div>
                                    </div>
                                </form>
			</div>
		</div>
	</div>
</div>
