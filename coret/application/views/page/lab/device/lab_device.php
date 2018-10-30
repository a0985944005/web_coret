<?
if($session['mem_level']!='系辦人員')
   {
		$teacher_actity='no';	
		$student_actity='no';
		
		if (in_array($session['mem_id'], $teacher_manager))
			{
				$teacher_actity='Yes';
			};
		if (in_array($session['mem_id'], $student_manager))
			{
				$student_actity='Yes';
			};
	};
?>
<div class="row">
	<div class="col-sm-12">
		<div class="panel">
			<div class="panel-heading">
				<h2 style="margin-right:10px; font-size:18px;"><?=$lab_data[0]['name']?></h2>
				<div class="options">
					<ul class="nav nav-tabs" style="float:none;">
                    
						  <? if($session['mem_level']=='系辦人員'){ ?>
                                <li <? if($type_tab!='detail') echo "class='active'";?> style="border:thin #EEE solid; border-bottom:none;"><a href="#tab-1-1" data-toggle="tab">使用紀錄</a></li>
                                <li <? if($type_tab=='detail') echo "class='active'";?> style="border:thin #EEE solid; border-bottom:none;"><a href="#tab-1-2" data-toggle="tab">設備列表</a></li>                       
                          <? }
						  	else
							{								
								if($teacher_actity =='Yes'||$student_actity =='Yes')
									{ ?>
							  	<li <? if($type_tab!='detail') echo "class='active'";?>  style="border:thin #EEE solid; border-bottom:none;"><a href="#tab-1-1" data-toggle="tab">使用紀錄</a></li>
                        		<li <? if($type_tab=='detail') echo "class='active'";?> style="border:thin #EEE solid; border-bottom:none;"><a href="#tab-1-2" data-toggle="tab">設備列表</a></li>	
								<?	}else 
									{										
								?>
                                <li class='active' style="border:thin #EEE solid; border-bottom:none;"><a href="#tab-1-2" data-toggle="tab">設備列表</a></li>
                                
						 <? 		}	
							}; ?>     
					</ul>
				</div>
			</div>
			<div class="panel-body">
				<div class="tab-content">
                
                	  <? if($session['mem_level']=='系辦人員'){ ?>
                      
                                    <div class="tab-pane  <? if($type_tab!='detail') echo " active";?>"  id="tab-1-1">
                                  	  <? include('lab_use_history.php');?>
                                    </div>
                                    <div class="tab-pane  <? if($type_tab=='detail') echo " active";?>" id="tab-1-2">
                                   	 <? include('lab_device_detail.php');?>
                                    </div>
                          
								<? }
						  	else
							{								
								if($teacher_actity =='Yes'||$student_actity =='Yes')
									{ ?>
							  		<div class="tab-pane  <? if($type_tab!='detail') echo " active";?>"  id="tab-1-1">
                                    	<? include('lab_use_history.php');?>
                                    </div>
                                    <div class="tab-pane  <? if($type_tab=='detail') echo " active";?>" id="tab-1-2">
                                   	 <? include('lab_device_detail.php');?>
                                    </div>
								<?	}else 
									{										
								?>
                                	
                                    <div class="tab-pane active" id="tab-1-2">
                                    <? include('lab_device_detail.php');?>
                                    </div>
                                
			                                
						 <? 		}	
							}; ?>    
                
				</div>
			</div>
		</div>
	</div>

</div>
