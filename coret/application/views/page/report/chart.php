    <script type="text/javascript" src="application/views/page/js/form-multiselect/js/jquery.multi-select.min.js"></script>  			<!-- Multiselect Plugin -->
    <script type="text/javascript" src="application/views/page/js/quicksearch/jquery.quicksearch.min.js"></script>  			<!-- Multiselect Plugin -->
    <script type="text/javascript" src="application/views/page/js/lab_multi_select.js"></script>  			


<script type="text/javascript" src="application/views/page/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="application/views/page/js/datepicker.css"/>

 <link type="text/css" href="application/views/page/js/form-multiselect/css/multi-select.css" rel="stylesheet">           <!-- Multiselect -->

<!--script src="http://code.highcharts.com/modules/exporting.js"></script>
<script src="http://highcharts.github.io/export-csv/export-csv.js"></script-->
<style>
.form-horizontal .control-label
{
	text-align:left;
}
</style>

<div class="row">
                <div class="col-sm-6">
                    <section class="panel">
                        <header class="panel-heading">
                            時間篩選
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span>
                        </header>
                        <div class="panel-body" style="min-height:310px;">
                        
                          <form action="#" class="form-horizontal ">
                            <div class="form-group">
                                
                              <div  class="control-label col-sm-3">                           
                               <input  name="RadioGroup1"  type="radio"  id="RadioGroup1_0" value="year_range" checked="checked" />
                                <label for="RadioGroup1_0">年區間</label>
                            </div>  
                                
                                <div class="col-md-9">
                                    <div class="input-group input-large">
                                        <input type="text" class="form-control dpYears dtp-1" id="start" name="from" data-date-minviewmode="years" data-date-viewmode="years" data-date-format=" /yyyy">
                                        <span class="input-group-addon">To</span>
                                        <input type="text" class="form-control dpYears dtp-1"  id="end" name="to" data-date-minviewmode="years" data-date-viewmode="years" data-date-format=" /yyyy">
                                    </div>
                                </div>
                            </div>


                           <div class="form-group">
							<div  class="control-label col-sm-3">                           
                               <input  type="radio" value="year"  name="RadioGroup1"  id="RadioGroup1_1" />
                                <label for="RadioGroup1_1">年份</label>
                            </div>  
                              
                                <div class="col-sm-9">
							
                            		  <div class="input-group date input-append date dpMonths" id="datepicker-pastdisabled"  data-date-minviewmode="years" data-date-viewmode="years" data-date-format=" /yyyy" data-date="<?=date ("md/Y"); ?>" >
                                            <span class="input-group-addon add-on" style="float:none !important;"><div align="center"><i class="ti ti-calendar"></i></div></span>
                                            <input name="year_data" type="text" class="form-control add-on" id="year_data" style="float:none !important; margin-top:0 !important; text-align: left !important;">
                                        </div>                                    
                                </div>
                            </div>

                            <div class="form-group">
							<div  class="control-label col-sm-3">                           
                               <input  type="radio" value="Month"  name="RadioGroup1"  id="RadioGroup1_2" />
                                <label for="RadioGroup1_2">月份</label>
                            </div>  
   
                    
                                <div class="col-sm-9">
							
                            		  <div class="input-group date input-append date dpYears" id="datepicker-pastdisabled"  data-date-minviewmode="months" data-date-viewmode="years" data-date-format="yyyy-mm" data-date="<?=date ("Y-m"); ?>" >
                                            <span class="input-group-addon add-on" style="float:none !important;"><div align="center"><i class="ti ti-calendar"></i></div></span>
                                     		  <input name="month_data" type="text" class="form-control add-on" id="month_data"  style="float:none !important; margin-top:0 !important; text-align: left !important;">
                                        </div>                                    
                                </div>
                                
                            </div>
                            
                            <div class="form-group">
							<div  class="control-label col-sm-3">                           
                               <input  type="radio" value="Date"  name="RadioGroup1"  id="RadioGroup1_3" />
                                <label for="RadioGroup1_3">日期</label>
                            </div>  
                             
                                
                                 <div class="col-sm-9">
							
                            		  <div class="input-group date input-append date dpYears" id="datepicker-pastdisabled"  data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="<?=date ("Y-m-d"); ?>"  >
                                            <span class="input-group-addon add-on" style="float:none !important;"><div align="center"><i class="ti ti-calendar"></i></div></span>
                                        <input name="day_data" type="text" class="form-control add-on" id="day_data"  style="float:none !important; margin-top:0 !important; text-align: left !important;">
                                        </div>                                    
                                </div>
                                
                                
                            </div>

                        </form>
                        
                        </div>
                    </section>
                </div>
                
                
                
                  <div class="col-sm-6" id="charts">
                    <section class="panel">
                        <header class="panel-heading">
                           顯示項目
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span>
                        </header>
                        <div class="panel-body" style=" height:312px;">
                        
                        
                            <div class="form-group">
                              <label class="control-label col-md-3">故障問題</label>
                                    <div class="col-md-9">
                                        <select multiple="multiple" class="multi-select" id="my_multi_select1" name="type_id[]">
                                        <? foreach($problem_type_all as $type_all){?>
                                             <option value="<?=$type_all['id']?>"><?=$type_all['name']?></option>
                                        <? };?>     
                                        </select>
                                         <br />
                                         <select name="fix_type" id="fix_type" class="form-control m-bot15">
                                           <option value="all" selected="selected">總數</option>
                                           <option value="done">已完成</option>
                                           <option value="undone">尚未完成</option>
                                        </select>
                                                    
                                    </div>
                              </div>                        
                        
                        
    
                        
                        </div>
                    </section>
                </div>                                                                
               
               
             
             
             
             <div class="col-sm-6" id="datas" style="display:none;">
                    <section class="panel">
                        <header class="panel-heading">
                           顯示項目
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span>
                        </header>
                        <div class="panel-body" style=" height:312px;">
                        
                        
                            <div class="form-group">
                              <label class="control-label col-md-2">實驗室</label>
                                    <div class="col-md-10">
                                        <select multiple="multiple" class="multi-select" id="lab_mult" name="type_id[]">
                                        <? foreach($lab_all as $lab_){?>
                                             <option value="<?=$lab_['id']?>"><?=$lab_['name']?></option>
                                        <? };?>     
                                        </select>
                                         <br />
                                         <select name="fix_type" id="fix_type_lab" class="form-control m-bot15">
                                           <option value="all" selected="selected">總數</option>
                                           <option value="done">已完成</option>
                                           <option value="undone">尚未完成</option>
                                        </select>
                                                    
                                    </div>
                              </div>                        
                        
                        
    
                        
                        </div>
                    </section>
                </div>   
                
                
                
</div>

  <a href="javascript:void(0);" class="btn btn-pink" onclick="update_chart('problem')" id="update_btn"><i class="fa fa-cloud-download"></i> 更新數據圖</a>
      <a href="javascript:void(0);" class="btn btn-pink" onclick="change()" id="change_btn">切換實驗室數據</a>


 <br />
<br />

<div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            圖表
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                        
                             <div id="container" style="height:400px"></div>                                                          
                         
                        </div>
                   
                    </section>
                </div>
          
</div>


 <script>
 
 function change()
 {
	 $("#datas").toggle();
	 $("#charts").toggle();
	 
	 //$(".table-responsive").toggle();
	 //$("#container").toggle();
	 
	if($('#datas').is(':visible'))
	{
	 $("#change_btn").html('切換圖表');
	 $("#update_btn").attr("onclick","update_chart('lab')");
	 
	}else
	{
		 $("#change_btn").html('切換實驗室數據');
		  $("#update_btn").attr("onclick","update_chart('problem')");

	}
	 
 }
 
 $('.multi-select').multiSelect();
 
 
function update_chart(select_type) { 

	 
	 var categories_data =  Array()
	 var xAxis_title;
	 var yAxis_title;
	 var tital_data;
	 var time_data;
	 var count = 0;
	 
	switch($('input[type=radio]:checked').val())
	{
	 case 'year_range':
	  
	  var start = $("#start").val();
	  var end   = $("#end").val();
	  
	 if(start<end) 
	 {

		  if((start!='')&&(end !=''))
		  {
			  time_data = start+","+end;
				for(start;start<=end;start++)
				{
					categories_data[count]=start;
					count++;
				}
				xAxis_title = '年份'
		  }
		  else
		  {
			time_data = '';
		  }
	 }
	 else
	 {
		alert('時間區間錯誤！')
		return false; 
	 };
	 
	 tital_data=start+'~'+end;
	 break;
	 
	 case 'year':
	  time_data = $("#year_data").val();
	  
		for(var mon = 1 ; mon <= 12 ; mon++)
		{
			categories_data[mon-1]=mon+'月';
			count++;
		}
	  xAxis_title = '月份'
	  tital_data=time_data;
	 break;	 
	 
	 case 'Month':
	  time_data = $("#month_data").val();
	  
	  	for(var day = 1 ; day <= 31 ; day++)
		{
			categories_data[day-1]=day+'號';
			count++;
		}
	  xAxis_title = '日期'
	  tital_data=time_data;
	 break;
	 	 
	 case 'Date':
	  time_data = $("#day_data").val();
	  
	   	for(var hour = 1 ; hour <= 24 ; hour++)
		{
			categories_data[hour-1]=hour+'點';
			count++;
		}
	  xAxis_title = '小時'
	 tital_data=time_data; 
	 break;	 
	}
	
	if(select_type=='lab')
	{
		var url='index.php/csie_report/index/lab_services';
		var select_=$("#lab_mult").val();
		var fix_type="#fix_type_lab";
	}
	else
	{
		var url='index.php/csie_report/index/chart_services';
		var select_=$("#my_multi_select1").val();
		var fix_type="#fix_type";
	}
	
		$.ajax({
				url: url,
				data:
				{
					fix_type:$(fix_type).val(),
					problem_type:select_,
					time_type:$('input[type=radio]:checked').val(),
					time:$.trim(time_data),
				},
				type:"POST",
				dataType:'json',
			
				success: function(chart_data){
					
					yAxis_title=$(fix_type+' :selected').text();
					generate_chart(xAxis_title,categories_data,yAxis_title,chart_data,tital_data);
				},
			
				 error:function(xhr, ajaxOptions, thrownError){ 
					alert(xhr.status); 
					alert(thrownError); 
					alert("伺服器忙碌，請重新整理後在試。")
				 }
		});
	
};
 
 
 
 function generate_chart(xAxis_title,categories_data,yAxis_title,chart_data,tital_data)
 {
	 $('#container').highcharts({                   //图表展示容器，与div的id保持一致
        chart: {
            type: 'column'                         //指定图表的类型，默认是折线图（line）
        },
        title: {
            text: tital_data+'實驗室設備維修'      //指定图表标题
        },
        xAxis: {
			 title: {
					  text: xAxis_title
                    },
            categories: categories_data   //指定x轴分组
        },
        yAxis: {
			allowDecimals:false,
            title: {
                text: yAxis_title           //指定y轴的标题
            }
        },
        series: chart_data
    });
 }

//date picker start

if (top.location != location) {
    top.location.href = document.location.href ;
}
$(function(){
    window.prettyPrint && prettyPrint();

    $('.default-date-picker').datepicker({
        format: 'mm-dd-yyyy'
    });
    $('.dpYears').datepicker();
    $('.dpMonths').datepicker();


    var startDate = new Date();
    var endDate = new Date();
    $('.dp4').datepicker()
        .on('changeDate', function(ev){
            if (ev.date.valueOf() > endDate.valueOf()){
                $('.alert').show().find('strong').text('The start date can not be greater then the end date');
            } else {
                $('.alert').hide();
                startDate = new Date(ev.date);
                $('#startDate').text($('.dp4').data('date'));
            }
            $('.dp4').datepicker('hide');
        });
    $('.dp5').datepicker()
        .on('changeDate', function(ev){
            if (ev.date.valueOf() < startDate.valueOf()){
                $('.alert').show().find('strong').text('The end date can not be less then the start date');
            } else {
                $('.alert').hide();
                endDate = new Date(ev.date);
                $('.endDate').text($('.dp5').data('date'));
            }
            $('.dp5').datepicker('hide');
        });

});

//date picker end

</script>

