
  
          <link href="application/views/page/js/bootstrap-fileinput-master/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <script src="application/views/page/js/bootstrap-fileinput-master/js/fileinput.js" type="text/javascript"></script>
        <script src="application/views/page/js/bootstrap-fileinput-master/js/fileinput_locale_fr.js" type="text/javascript"></script>
        <script src="application/views/page/js/bootstrap-fileinput-master/js/fileinput_locale_es.js" type="text/javascript"></script>

<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading">
                            新增文章<span class="tools pull-right"><a href="javascript:;" class="fa fa-chevron-down"></a> </span>
                        </header>
                        
                <div class="panel-body">
                    
                        <div class="adv-table">
                        
                            <div class="form">
                            <form data-toggle="validator" action="<? echo site_url("csie_blog/insert_news");?>" method="post" enctype="multipart/form-data" class="form-horizontal" id="register_form">
             <fieldset>
             
             
                <div class="form-group ">
                    <label class="col-sm-2 control-label">分類</label>
                      <div class="col-sm-10">
                        <select name="type_id" class="form-control" id="type_id">
                        	<? foreach($blog_type_data as $type_id) {?>
                             <option value="<?=$type_id['id'];?>"><?=$type_id['title'];?></option>
                            <? }; ?> 
                        </select>
                  </div>
                </div>             
             
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="M_account">標題</label>
                <div class="col-sm-10">
                  <input type="text" name="title" value="" id="title" class="form-control">
                </div>
              </div>
              <div class="form-group required">
                                       <label class="col-sm-2 control-label" for="pic">檔案</label>
                                       <div class="col-md-10">
                                         <input id="file-0a" class="file" type="file" multiple data-min-file-count="0" name="pic[]">
                                                            
                                      </div>
                               </div>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-confirm">內容</label>
                <div class="col-sm-10">
                  <textarea name="content" rows="5" class="form-control ckeditor"  id="input-confirm" ></textarea>
                </div>
              </div>
            </fieldset>
          
            
                    <div class="buttons">
              <div class="pull-right">
                <button class="btn btn-pink" type="submit" id="submit_regform" onclick="return(confirm('確認要送出嗎？'))">送出</button>
                 <a  href="<? echo site_url("csie_blog/index/news");?>"class="btn btn-default " id="submit_regform">返回</a>
              </div>
            </div>
                  </form>
                            
                       
                                
                            </div>
                        
								
                        </div>
                </div>
         </section>
      </div>
 </div>
