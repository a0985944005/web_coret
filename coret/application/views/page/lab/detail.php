
 
 <link type="text/css" href="application/views/page/js/form-multiselect/css/multi-select.css" rel="stylesheet">           <!-- Multiselect -->

<div class="row">
            <div class="col-sm-12">
                <section class="panel">
                        <header class="panel-heading">
                            修改實驗室<span class="tools pull-right"><a href="javascript:;" class="fa fa-chevron-down"></a> </span>
                        </header>
                        
                <div class="panel-body">
                  <form class='form-horizontal' method='post'action='index.php/csie_lab/update_index' enctype='multipart/form-data'>                      
                             
                                    
				                                                    <div class="form-group">
                                                              <label class="col-sm-2 control-label">實驗室名稱</label>
                                                               <div class="col-md-9">
                                                                   <label class="col-sm-9 control-label " style="text-align:left;"><?=$lab_data['name'];?></label>
                                                                   </div>
                                                            </div>
                                                           
                                                            <div class="form-group">
                                                              <label class="control-label col-md-2">實驗室負責人</label>
                                                                    <div class="col-md-9">
                                                                      <? 
                                                                      if(!empty($lab_data['teacher_data']))
                                                                      {
                                                                          foreach($lab_data['teacher_data'] as $teacher) 
                                                                            {?>
                                                                            
                                                                              <label class=" control-label col-md-9" style="text-align:left;">
                                                                         <?=$teacher['mem_level']." - ".$teacher['mem_name'];?></label>
                                                                         <br>
                                                                        <?  }

                                                                      }else{?>

                                                                       <label class=" control-label col-md-9" style="text-align:left;">暫無負責人</label>
                                                                      <? };?>
                                                                    </div>
                             								  </div>
                                                            
                                                            
                                                            <div class="form-group">
                                                              <label class="control-label col-md-2">實驗室管理學生</label>
                                                                    <div class="col-md-9">

                                                                      <? 
                                                                      if(!empty($lab_data['student_data']))
                                                                      {
                                                                          foreach($lab_data['student_data'] as $student) 
                                                                            {?>
                                                                            
                                                                             <label class=" control-label col-md-9" style="text-align:left;">
                                                                              <?=$student['mem_class']." - ".$student['username']." - ".$student['mem_name']?></label>
                                                                             <br>
                                                                        <?  }

                                                                      }else{?>

                                                                       <label class=" control-label col-md-9" style="text-align:left;">暫無管理學生</label>
                                                                      <? };?>


                                                                    </div>
				    </div>
                                                            <div class="form-group">
                                                              <label class="control-label col-md-2">實驗室管理老師</label>
                                                                   <div class="col-md-9">

                                                                      <? 
                                                                      if(!empty($lab_data['teacher']))
                                                                      {
                                                                          foreach($lab_data['teacher'] as $teacher_manager_) 
                                                                            {?>
                                                                            
                                                                             <label class=" control-label col-md-9" style="text-align:left;">
                                                                               <?=$teacher_manager_['mem_level']." - ".$teacher_manager_['mem_name'];?></label>
                                                                             <br>
                                                                        <?  }

                                                                      }else{?>

                                                                       <label class=" control-label col-md-9" style="text-align:left;">暫無管理老師</label>
                                                                      <? };?>


                                                                    </div>
				    </div>

              <div class="form-group">
                                                              <label class="control-label col-md-2">實驗室設備數量</label>
                                                                   <div class="col-md-9">

                                                                   <label class=" control-label col-md-9" style="text-align:left;">
                                                                               <?=$lab_device_count.'件';?></label>


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
