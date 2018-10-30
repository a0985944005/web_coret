 <link type="text/css" href="application/views/page/js/form-multiselect/css/multi-select.css" rel="stylesheet">           <!-- Multiselect -->

<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading">
                            修改文章<span class="tools pull-right"><a href="javascript:;" class="fa fa-chevron-down"></a> </span>
                        </header>
                        
                <div class="panel-body">
                    
                        <div class="adv-table">
                        
                            <div class="form">
                            <form data-toggle="validator" action="<? echo site_url("csie_blog/send_email");?>" method="post" enctype="multipart/form-data" class="form-horizontal" id="register_form">
             <fieldset>
             
             
                             
             
              <div class="form-group required">
                <label class="col-sm-2 control-label">主旨</label>
                <div class="col-sm-10">
                  <input type="text" name="title" value="國立勤益科技大學資訊工程系實驗室設備維修系統通知信 標題：<?=$blog_data['title'];?>" id="title" class="form-control">
                </div>
              </div> 

                <div class="form-group">
                  <label class="control-label col-md-2">收件人</label>
                        <div class="col-md-9">
                            <select multiple="multiple" class="multi-select" id="my_multi_select2" name="email_mamber[]">
                            
                            <? foreach($email as $email_) {
                            ?>
                             <option value="<?=$email_['mem_id']?>">
                                 <?=$email_['mem_class']." - ".$email_['username']." - ".$email_['mem_name']?>
                             </option>
                            <? }?>
                      
                            </select>
                        </div>
                  </div>               
               
               
               <div class="form-group">
                      <label class="control-label col-md-2">收件人(實驗室群組)</label>
                            <div class="col-md-9">
                                <select class="form-control" multiple="multiple" id="my_multi_select1" name="lab[]">
                                <? foreach($lab as $lab_) {
                                ?>
                                 <option value="<?=$lab_['id']?>">
                                     <?=$lab_['name']?>
                                 </option>
                                <? }?>
                               </select>
                               <label style="color:#F00">※選擇後會寄信給此間實驗室所有管理學生與老師</label>
           		  </div>
                      
				</div>
               
               
              <div class="form-group required">
                <label class="col-sm-2 control-label" >信件內容</label>
                <div class="col-sm-10">
                  <textarea name="content" rows="5" class="form-control ckeditor"  id="input-confirm" >
                  <h2>實驗室設備維修系統公告：</h2>
				   <h3>標題：<?=$blog_data['title'];?></h3>
				   <h3>內容：</h3><?=$blog_data['content'];?><br />

                    國立勤益科技大學 資訊工程系<br />
                    電話：04-2392-4505 分機號碼：8701、8702、8706、8703<br /><br />
                    
                    傳真：04-2391-7426<br />
                    信箱：csie@ncut.edu.tw<br /> 
                    系網：http://csie.ncut.edu.tw/<br />

                  </textarea>
                </div>
              </div>
            </fieldset>
          <input name="id" type="hidden" id="id" value="<?=$blog_data['id'];?>" />
            
                    <div class="buttons">
              <div class="pull-right">
                <button class="btn btn-primary" type="submit" id="submit_regform" onclick="return(confirm('確認要寄信嗎？'))">寄信</button>
                 <a  href="<? echo site_url("csie_blog/index/news");?>"class="btn btn-danger" id="submit_regform">返回</a>
              </div>
            </div>
                  </form>
                            
                       
                                
                            </div>
                        
								
                        </div>
                </div>
         </section>
      </div>
 </div>
     <script type="text/javascript" src="application/views/page/js/form-multiselect/js/jquery.multi-select.min.js"></script>  			<!-- Multiselect Plugin -->
    <script type="text/javascript" src="application/views/page/js/quicksearch/jquery.quicksearch.min.js"></script>  			<!-- Multiselect Plugin -->
    <script type="text/javascript" src="application/views/page/js/lab_multi_select.js"></script>  			
