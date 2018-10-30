        <link href="application/views/theme/bootstrap-fileinput-master/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <script src="application/views/theme/bootstrap-fileinput-master/js/fileinput.js" type="text/javascript"></script>
        <script src="application/views/theme/bootstrap-fileinput-master/js/fileinput_locale_fr.js" type="text/javascript"></script>
        <script src="application/views/theme/bootstrap-fileinput-master/js/fileinput_locale_es.js" type="text/javascript"></script>


 <div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					修改廣告牆資料
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
                 
                  <div class="form">
                            <form data-toggle="validator" action="<? echo site_url("admin_slideshow/update");?>" method="post" enctype="multipart/form-data" class="form-horizontal" id="register_form">
             <fieldset>

              <div class="form-group required">
                <label class="col-sm-2 control-label" for="M_account">排序</label>
                <div class="col-sm-10">
                  <input type="text" name="local" value="<?=$slideshow_data['local']?>" id="local" class="form-control">
                </div>
              </div>

              <div class="form-group required">
                <label class="col-sm-2 control-label" for="M_account">標題</label>
                <div class="col-sm-10">
                  <input type="text" name="tittle" value="<?=$slideshow_data['tittle']?>" id="tittle" class="form-control">
                </div>
              </div>

			  <div class="form-group required">
                <label class="col-sm-2 control-label" for="M_account">圖片</label>
                <div class="col-sm-10">
                  	<img src = "application/views/img/slideshow/<?=$slideshow_data['pic_name'];?>" width="200px" heigh="80px">
                </div>
              </div>



                     <!--  <? if(!empty($slideshow_data['pic_name']))
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
                                                        <th>檔案</th>
                                                        <th>動作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                        <tr>
                                        
                                                            <td data-title="檔案名稱" align="center" style="word-wrap:break-word;">
                                                                   <a href='index.php/admin_slideshow/download_files/<?=$slideshow_data['id'];?>'><img src = "application/views/img/slideshow/<?=$slideshow_data['pic_name'];?>" width="200px" heigh="80px"></a>
                                                            </td>
                                                            <td data-title="動作"  align="center">
                                                             <a  style="margin: 60px auto;" class='btn btn-danger delete' href='index.php/admin_slideshow/delete_files/<?=$slideshow_data['id'];?>' onclick="return confirm('確定刪除?')";>
                                                              <i class='glyphicon glyphicon-trash'></i><span> 刪除</span>
                                                             </a>
                                                            </td>
                                                         
                                                </tbody>
                                            </table>
                                        
                                        </section>
                                        </div>
                                        <label style="color:#F00;">*請仔細確認是否刪除，刪除即不可還原，若不小心刪除請重新上傳。</label>                    
                                      </div>
                               </div>
                   <? }; ?> -->
              

            
                    <div class="buttons">
              <div class="pull-right">
              <input type="hidden" name="id" value="<?=$slideshow_data['id']?>">
                <button class="btn btn-primary" type="submit" id="submit_regform" onclick="return(confirm('確認要更改嗎？'))">送出</button>   
                 <a  href="<? echo site_url("admin_slideshow/index/index");?>" class="btn btn-danger" id="submit_regform">返回</a>       
              </div>
            </div>
                  </form>
                            
                       
                                
                            </div>

			</div>
		</div>
	</div>
</div>

