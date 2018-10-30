<script type="text/javascript" src="application/views/front/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" type="text/css" href="application/views/front/js/datepicker.css"/>


<link rel="stylesheet" type="text/css" href="application/views/admin/js/jquery-multi-select/css/multi-select.css" />
<script type="text/javascript" src="application/views/admin/js/jquery-multi-select/js/jquery.multi-select.js"></script>



<script type="text/javascript" src="application/views/admin/js/Highcharts-4.1.8/js/highcharts.js"></script>
<script src="application/views/admin/js/Highcharts-4.1.8/js/modules/exporting.js" type="text/javascript"></script> 

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
                        <div class="panel-body">
                        
                          <form action="#" class="form-horizontal ">
                            <div class="form-group">
                                
                              <div  class="control-label col-sm-3">                           
                               <input  name="RadioGroup1"  type="radio"  id="RadioGroup1_0" value="year_range" checked="checked" />
                                <label>年區間</label>
                            </div>  
                                
                                <div class="col-md-9">
                                    <div class="input-group input-large">
                                        <input type="text" class="form-control dpYears" id="start" name="from" data-date-minviewmode="years" data-date-viewmode="years" data-date-format=" /yyyy">
                                        <span class="input-group-addon">To</span>
                                        <input type="text" class="form-control dpYears"  id="end" name="to" data-date-minviewmode="years" data-date-viewmode="years" data-date-format=" /yyyy">
                                    </div>
                                </div>
                            </div>


                           <div class="form-group">
							<div  class="control-label col-sm-3">                           
                               <input  type="radio" value="year"  name="RadioGroup1"  id="RadioGroup1_1" />
                                <label>年份</label>
                            </div>  
                              
                                <div class="col-sm-8">

                                    <div>
                                        <input name="year_data" type="text"  data-date-minviewmode="years" data-date-viewmode="years" data-date-format=" /yyyy" data-date="102/2012"  class="form-control input-append date dpMonths" id="year_data"  size="16" >
                                              <span class="input-group-btn add-on">
                                              <button class="btn btn-primary" type="button" ><i class="fa fa-calendar"></i></button>
                                              </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
							<div  class="control-label col-sm-3">                           
                               <input  type="radio" value="Month"  name="RadioGroup1"  id="RadioGroup1_2" />
                                <label>月份</label>
                            </div>  
   
                              
                                <div class="col-sm-8">

                                    <div data-date-minviewmode="months" data-date-viewmode="years" data-date-format="yyyy-mm" data-date="2012-12"  class="input-append date dpYears">
                                        <input name="month_data" type="text" class="form-control" id="month_data"   size="16">
                                              <span class="input-group-btn add-on">
                                              <button class="btn btn-primary" type="button" ><i class="fa fa-calendar"></i></button>
                                              </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
							<div  class="control-label col-sm-3">                           
                               <input  type="radio" value="Date"  name="RadioGroup1"  id="RadioGroup1_3" />
                                <label>日期</label>
                            </div>  
                              
                                <div class="col-sm-8">

                                    <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2012-12-02"  class="input-append date dpYears">
                                        <input name="day_data" type="text" class="form-control" id="day_data"   size="16">
                                              <span class="input-group-btn add-on">
                                              <button class="btn btn-primary" type="button" ><i class="fa fa-calendar"></i></button>
                                              </span>
                                    </div>
                                </div>
                            </div>

                        </form>
                        
                        </div>
                    </section>
                </div>
                
                
                
                  <div class="col-sm-6">
                    <section class="panel">
                        <header class="panel-heading">
                           主要篩選目標
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                         </span>
                        </header>
                        <div class="panel-body" style="min-height:235px;">
                        
                        
                        <div class="form-group">
                            <div  class="control-label col-sm-12">                           
                            <input  name="type_select"  type="radio"  id="RadioGroup2_1" value="order" checked="checked" />
                            <label>訂單</label>
                            </div>
                        </div>  
                        <br />

        				<div class="form-group">
                            <div  class="control-label col-sm-12">                           
                            <input  type="radio" value="member"  name="type_select"  id="RadioGroup2_2" />
                            <label>會員</label>
                            </div>
                        </div>                                                  
                        

                        
                        </div>
                    </section>
                </div>
                
</div>
  <a href="javascript:void(0);" class="btn btn-primary" onclick="update_chart()"><i class="fa fa-cloud-download"></i> 更新數據圖</a>
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
                    <div class="table-responsive">
                   <div class="adv-table">
                   
                   <div id="data"> 
         
                    </div>       
                            
    
                            
                    </div>
              </div>
           </div>
                    </section>
                </div>
          
</div>


 <script>
 
   function table_data(type,data)
 {

	 
	 
	if(type=='order') 
	{
	    var opt={
		"aaSorting": [],
		 "aoColumns":[
					  {"sTitle":"訂單編號","mData":"O_id"},
					  {"sTitle":"訂單會員","mData":"M_name"},
					  {"sTitle":"訂單總額","mData":"OL_price"},
					  {"sTitle":"訂單日期","mData":"O_date"}],
									  
               "aaData":data
    	} ;
	
	}
	
	if(type=='member') 
	{
	    var opt={
		"aaSorting": [],
		 "aoColumns":[{"sTitle":"#","mData":"order_count"},
                                      {"sTitle":"訂單會員","mData":"name"},
                                      {"sTitle":"訂單筆數","mData":"order_count"},
                                      {"sTitle":"總銷售額","mData":"price"}],
									  
               "aaData":data
    	} ;
	
	}
	
		
	  $('#dynamic-table_'+type).dataTable(opt);
	
	
 }
 
function update_chart() { 

	 
	 var categories_data =  Array()
	 var xAxis_title;
	 var yAxis_title;

	 var time_data;
	 var count = 0;
	 
	switch($('input[name=RadioGroup1]:checked').val())
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
	 break;
	 
	 case 'year':
	  time_data = $("#year_data").val();
	  
		for(var mon = 1 ; mon <= 12 ; mon++)
		{
			categories_data[mon-1]=mon+'月';
			count++;
		}
	  xAxis_title = '月份'
	 break;	 
	 
	 case 'Month':
	  time_data = $("#month_data").val();
	  
	  	for(var day = 1 ; day <= 31 ; day++)
		{
			categories_data[day-1]=day+'號';
			count++;
		}
	  xAxis_title = '日期'
	 break;
	 	 
	 case 'Date':
	  time_data = $("#day_data").val();
	  
	   	for(var hour = 1 ; hour <= 24 ; hour++)
		{
			categories_data[hour-1]=hour+'點';
			count++;
		}
	  xAxis_title = '小時'
	 break;	 
	}
	 
	 var type_select_data = $('input[name=type_select]:checked').val()
	 
	 
		$.ajax({
				url: 'index.php/admin_report/index/datas_'+type_select_data+'_services',
				data:
				{
					M_O_choice:$("#M_O_choice").val(),
					product_type:$("#my_multi_select1").val(),
					time_type:$('input[type=radio]:checked').val(),
					time:time_data,
				},
				type:"POST",
				dataType:'json',
			
				success: function(msg){
					if(type_select_data=='order')
					{
						$("#data").empty();
						$("#data").append(" <table  class='display table table-bordered table-striped' id='dynamic-table_order'></table>");
						table_data('order',msg);
					}
					else if(type_select_data=='member')
					{
						$("#data").empty();
						$("#data").append(" <table  class='display table table-bordered table-striped' id='dynamic-table_member'></table>");
						table_data('member',msg);
					}
				},
			
				 error:function(xhr, ajaxOptions, thrownError){ 
					alert(xhr.status); 
					alert(thrownError); 
				 }
		});
	
};
 
 </script>



<script>
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


    var startDate = new Date(2012,1,20);
    var endDate = new Date(2012,1,25);
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