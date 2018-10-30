
<link href="application/views/theme/bootstrap-fileinput-master/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<script src="application/views/theme/bootstrap-fileinput-master/js/fileinput.js" type="text/javascript"></script>
<script src="application/views/theme/bootstrap-fileinput-master/js/fileinput_locale_fr.js" type="text/javascript"></script>
<script src="application/views/theme/bootstrap-fileinput-master/js/fileinput_locale_es.js" type="text/javascript"></script>
 
 <link type="text/css" href="application/views/theme/admin/form-multiselect/css/multi-select.css" rel="stylesheet">           <!-- Multiselect -->

 <div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					新增商品
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
                 
                  <div class="form">
                            <form data-toggle="validator" action="<? echo site_url("admin_product/insert");?>" method="post" enctype="multipart/form-data" class="form-horizontal" id="register_form">
             <fieldset>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="name">商品名稱</label>
                <div class="col-sm-10">
                  <input type="text" name="name" value="" id="name" class="form-control" required="required">
                </div>
              </div>
              
   


                
               <div class="form-group required">
                                       <label class="col-sm-2 control-label" for="pic">圖片</label>
                                       <div class="col-md-10">
                                         <input id="file-0a" class="file" type="file" multiple data-min-file-count="0" name="pic[]" accept="image/png,image/gif,image/jpg,image/jpeg," required="required">
                                                            
                                      </div>
                               </div>
                  

                                           <div class="form-group">
                                                              <label class="control-label col-md-2">類別</label>
                                                                    <div class="col-md-10">
                                                                     <select class="form-control" multiple="multiple" class="multi-select" id="my_multi_select1" name="administrator[]">
                                                                         <option value="">無</option>
                                                            <? foreach($product_menu as $product_menu_) {
                                                            ?>
                                                                         <option value="<?=$product_menu_['id'];?>">
                                                                             <?=$product_menu_['name']?>
                                                                         </option>
                                                                        <? }?>
                                                                       </select>
                                                                    </div>
                                              </div>
                      




              <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-confirm">商品描述</label>
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

    <script type="text/javascript" src="application/views/theme/admin/form-multiselect/js/jquery.multi-select.min.js"></script>       <!-- Multiselect Plugin -->
    <script type="text/javascript" src="application/views/theme/admin/quicksearch/jquery.quicksearch.min.js"></script>        <!-- Multiselect Plugin -->
    <script type="text/javascript" src="application/views/theme/admin/multi_select.js"></script>        