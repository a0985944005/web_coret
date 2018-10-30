
 
 <link type="text/css" href="application/views/page/js/form-multiselect/css/multi-select.css" rel="stylesheet">           <!-- Multiselect -->

<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading">
                            修改實驗室<span class="tools pull-right"><a href="javascript:;" class="fa fa-chevron-down"></a> </span>
                        </header>
                        
                <div class="panel-body">
                  <form class='form-horizontal' method='post'action='index.php/csie_lab/update_index' enctype='multipart/form-data'>                      
                             
                                    
				    <!--div class="form-group">
                                                              <label class="col-sm-2 control-label">排序</label>
                                                                <div class="col-sm-9">
                                                                    <input name="local" type="text"  required="required" class="form-control" id="local" value="<?=$lab_data['local'];?>">
					    </div>
                                                            </div-->
                                                            
                                                            <div class="form-group">
                                                              <label class="col-sm-2 control-label">實驗室名稱</label>
                                                                <div class="col-sm-9">
                                                                    <input name="name" type="text" required="required" class="form-control" id="name" value="<?=$lab_data['name'];?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                              <label class="control-label col-md-2">實驗室負責人</label>
                                                                    <div class="col-md-9">
                                										  <div class="table-responsive">
                                                                        <select multiple="multiple" class="multi-select" id="my_multi_select1" name="administrator[]">
                                                                        
                                                                        <? foreach($teacher_data as $teacher) {
																		?>
                                                                       	 <option value="<?=$teacher['mem_id']?>"
                                                                          <? 
                                                                             foreach($administrator as $administrator_)
                                                                             {
                                                                              if($administrator_==$teacher['mem_id'])echo"selected='selected'";
                                                                             };
																		   ?>                                                                                                                                                  
                                                                         >
                                                                             <?=$teacher['mem_level']." - ".$teacher['mem_name']?>
                                                                         </option>
                                                                        <? }?>
                                                                        </select>
                                                                        </div>
                                                                    </div>
                             								  </div>
                                                            
                                                            
                                                            <div class="form-group">
                                                              <label class="control-label col-md-2">實驗室管理學生</label>
                                                                    <div class="col-md-9">
                                                                        <select multiple="multiple" class="multi-select" id="my_multi_select2" name="student_manager[]">
                                                                        
                                                                        <? foreach($student_data as $student) {
																		?>
                                                                       	 <option value="<?=$student['mem_id']?>"
                                                                         <? 
                                                                             foreach($student_manager as $student_manager_)
                                                                             {
                                                                              if($student_manager_==$student['mem_id'])echo"selected='selected'";
                                                                             };
																		   ?>    
                                                                         
                                                                         >
                                                                             <?=$student['mem_class']." - ".$student['username']." - ".$student['mem_name']?>
                                                                         </option>
                                                                        <? }?>
                                                                  
                                                                        </select>
                                                                    </div>
				    </div>
                                                            <div class="form-group">
                                                              <label class="control-label col-md-2">實驗室管理老師</label>
                                                                    <div class="col-md-9">
                                                                        <select class="form-control" id="my_multi_select1" name="teacher_manager">
                                                                         <option value="" <? if($lab_data['teacher_manager']=='') echo "selected='selected'";?>>無</option>
																		<? foreach($teacher_data as $single_teacher) {
																		?>
                                                                       	 <option value="<?=$single_teacher['mem_id']?>" <? if($lab_data['teacher_manager']==$single_teacher['mem_id']) echo "selected='selected'";?>>
                                                                             <?=$single_teacher['mem_level']." - ".$single_teacher['mem_name']?>
                                                                         </option>
                                                                        <? }?>
                                                                  	   </select>
                                                              </div>
				    </div>
                    <div class="form-group ">
                                                                <label class="col-sm-2 control-label">是否啟用</label>
                                                                  <div class="col-sm-9">
                                                                    <select name="enable" class="form-control" id="enable">
                                                                      <option value="Yes" <? if($lab_data['enable']=='Yes') echo "selected='selected'";?>>啟用</option>
                                                                      <option value="No"  <? if($lab_data['enable']=='No')  echo "selected='selected'";?>>不啟用</option>
                                                                    </select>
                      </div>
                                                            </div>
                                                            
                                                          <input name="id" type="hidden" id="id" value="<?=$lab_data['id'];?>" />
                                                           <div class="form-group">
                                                                <div class="col-lg-offset-3 col-lg-6">
                                                                    <button class="btn btn-primary" type="submit" onclick="return(confirm('確認要送出嗎？'))">送出</button>
                                                                    <a class="btn btn-default"  href="index.php/csie_lab/index/index">返回</a>
                                                                </div>
                                                            </div>
                                                                  
                                                        </form>
                                                        
                            </div>
         </section>
      </div>
 </div>
 
    
    
    <script type="text/javascript" src="application/views/page/js/form-multiselect/js/jquery.multi-select.min.js"></script>  			<!-- Multiselect Plugin -->
    <script type="text/javascript" src="application/views/page/js/quicksearch/jquery.quicksearch.min.js"></script>  			<!-- Multiselect Plugin -->
    <script type="text/javascript" src="application/views/page/js/lab_multi_select.js"></script>  			
