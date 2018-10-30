<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading">
                            修改類別<span class="tools pull-right"><a href="javascript:;" class="fa fa-chevron-down"></a> </span>
                        </header>
                        
                                    <div class="panel-body">
                                      <form class='form-horizontal' method='post'action='index.php/csie_blog/update_type' enctype='multipart/form-data'>                      
                                                              
           								<div class="form-group">
                                                              <label class="col-sm-2 control-label">排序</label>
                                                                <div class="col-sm-10">
                                                                <input name="local" type="text"  class="form-control" id="local" value="<?=$blog_type_data['local'];?>">
                                                    </div>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">類別名稱</label>
                                                                <div class="col-sm-10">
                                                                    <input name="title" type="text" required="required" class="form-control" id="title" value="<?=$blog_type_data['title'];?>">
                                                                </div>
                                                            </div>
                                                            
                                                            
                   										 <div class="form-group ">
                                                                <label class="col-sm-2 control-label">是否啟用</label>
                    							 			 <div class="col-sm-10">
                                                                   <select name="enable" class="form-control">
                                                                         <option value="1" <? if($blog_type_data['enable']=='Yes')echo "selected='selected'";?>>啟用</option>
                                                                         <option value="2" <? if($blog_type_data['enable']=='No')echo "selected='selected'";?>>不啟用</option>
                                                                        
                                                                    </select>
                      											</div>
                                                            </div>
                                                            
                                                            
                                                          <input name="id" type="hidden" id="id" value="<?=$blog_type_data['id'];?>" />
                                                           <div class="form-group">
                                                                <div class="col-lg-offset-3 col-lg-6">
                                                                    <button class="btn btn-primary" type="submit" onclick="return(confirm('確認要送出嗎？'))">送出</button>
                                                                    <a class="btn btn-default"  href="index.php/csie_blog/index/type">返回</a>
                                                                </div>
                                                            </div>
                                                                  
                                                        </form>
                            </div>
         </section>
      </div>
 </div>
 
