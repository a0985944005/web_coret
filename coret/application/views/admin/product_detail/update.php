
<link href="application/views/theme/bootstrap-fileinput-master/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<script src="application/views/theme/bootstrap-fileinput-master/js/fileinput.js" type="text/javascript"></script>
<script src="application/views/theme/bootstrap-fileinput-master/js/fileinput_locale_fr.js" type="text/javascript"></script>
<script src="application/views/theme/bootstrap-fileinput-master/js/fileinput_locale_es.js" type="text/javascript"></script>
  <link type="text/css" href="application/views/theme/admin/form-multiselect/css/multi-select.css" rel="stylesheet">           <!-- Multiselect -->


 <div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					修改Blog
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
                 
                  <div class="form">
                            <form data-toggle="validator" action="<? echo site_url("admin_product_detail/update");?>" method="post" enctype="multipart/form-data" class="form-horizontal" id="register_form">
             <fieldset>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="M_account">商品名稱</label>
                <div class="col-sm-10">
                  <input type="text" name="name" value="<?=$data['name']?>" id="name" class="form-control">
                </div>
              </div>
              
              
              <? if(!empty($product_pic))
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
                                                        <th>圖片</th>
                                                        <th>動作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <? 
                           foreach($product_pic as $files_data){?>
                                                        <tr>
                                        
                                                            <td data-title="圖片" align="center" style="word-wrap:break-word;">
                                                                  <img src="application/views/img/product/<?=$files_data['pic_name']?>" class='img-thumbnail img-responsive' width='150'>
                                                            </td>
                                                            <td data-title="動作"  align="center">
                                                             <a class='btn btn-danger delete' href='index.php/admin_product_detail/delete_files/<?=$files_data['id'];?>' onclick="return confirm('確定刪除?')";>
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
                  


                                               <div class="form-group">
                                                              <label class="control-label col-md-2">類別</label>
                                                                    <div class="col-md-10">
                                                                     <select class="form-control" multiple="multiple" class="multi-select" id="my_multi_select1" name="administrator[]">
                                                            <? foreach($product_menu as $product_menu_) {
                                                            ?>
                                                                        


                                                                       <option value="<?=$product_menu_['id']?>"
                                                                         <? 
                                                                             foreach($m_data as $m_data_)
                                                                             {
                                                                              if($m_data_==$product_menu_['id'])echo"selected='selected'";
                                                                             };  ?>    
                                                                         
                                                                         >
                                                                             <?=$product_menu_['name']?>
                                                                         </option>
                                                                        <? }?>


                                                                       </select>
                                                                    </div>
                                              </div>
                      


                       

              <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-confirm">內容</label>
                <div class="col-sm-10">
                  <textarea name="content" rows="5" class="form-control ckeditor"  id="input-confirm" ><?=$data['content']?></textarea>
                </div>
              </div>
            </fieldset>
          
            
                    <div class="buttons">
              <div class="pull-right">
              <input type="hidden" name="id" value="<?=$data['id']?>">
                <button class="btn btn-primary" type="submit" id="submit_regform" onclick="return(confirm('確認要更改嗎？'))">送出</button>                
              </div>
            </div>
                  </form>
                            
                       
                                
                            </div>

			</div>
		</div>
	</div>
</div>

    <script type="text/javascript" src="application/views/theme/admin/form-multiselect/js/jquery.multi-select.min.js"></script>       <!-- Multiselect Plugin -->
    <script type="text/javascript" src="application/views/theme/admin/quicksearch/jquery.quicksearch.min.js"></script>        <!-- Multiselect Plugin -->
    <script type="text/javascript" src="application/views/theme/admin/multi_select.js"></script>        


