 <link rel="stylesheet" type="text/css" href="application/views/admin/js/bootstrap-fileupload/bootstrap-fileupload.css" />
 <script type="text/javascript" src="application/views/admin/js/bootstrap-fileupload/bootstrap-fileupload.js"></script>
 <script src="application/views/admin/js/bootstrap-fileupload/jquery-migrate-1.2.1.js"></script>
<script>
jQuery.browser={};(function(){jQuery.browser.msie=false; jQuery.browser.version=0;if(navigator.userAgent.match(/MSIE ([0-9]+)./)){ jQuery.browser.msie=true;jQuery.browser.version=RegExp.$1;}})();
</script>
 
<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading">
                            修改<span class="tools pull-right"><a href="javascript:;" class="fa fa-chevron-down"></a> </span>
                        </header>
                        
                <div class="panel-body">
                    
                        <div class="adv-table">
                        <?$model_id = $html_data['id'];?>
                            <div class="form">
                            <form data-toggle="validator" action="<? echo site_url("admin_html/update/$model_id");?>" method="post" enctype="multipart/form-data" class="form-horizontal" id="register_form">
             <fieldset>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="M_account">標題</label>
                <div class="col-sm-10">
                  <input type="text" name="title" value="<?=$html_data['title']?>" id="title" class="form-control">
                </div>
              </div>
              
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-confirm">內容</label>
                <div class="col-sm-10">
                  <textarea name="content" rows="5" class="form-control ckeditor"  id="input-confirm" ><?=$html_data['content']?></textarea>
                </div>
              </div>
            </fieldset>
          
            
                    <div class="buttons">
              <div class="pull-right">
                <button class="btn btn-primary" type="submit" id="submit_regform">送出</button>
              </div>
            </div>
                  </form>
                            
                       
                                
                            </div>
                        
								
                        </div>
                </div>
         </section>
      </div>
 </div>
 