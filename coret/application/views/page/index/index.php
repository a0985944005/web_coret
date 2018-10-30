<div class="row">
    <div class="col-md-3">
			<div class="info-tile tile-info">
				<div class="tile-icon"><i class="fa fa-university"></i></div>
				<div class="tile-heading"><span>實驗室總數</span></div>
				<div class="tile-body"><span><?=$lab_count;?></span></div>
                <div class="tile-footer"><span class="text-success"></span></div>                
			</div>
		</div>
		<div class="col-md-3">
			<div class="info-tile tile-warning">
				<div class="tile-icon"><i class="fa fa-cogs"></i></div>
				<div class="tile-heading"><span>設備總數</span></div>
				<div class="tile-body"><span><?=$lab_device_count;?></span></div>
                <div class="tile-footer"><span class="text-success"></span></div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="info-tile tile-success">
				<div class="tile-icon"><i class="ti ti-check-box"></i></div>
				<div class="tile-heading"><span>設備維修完成總數</span></div>
				<div class="tile-body"><span><?=$lab_device_fix_deatil_yes_count;?></span></div>
                <div class="tile-footer"><span class="text-success"></span></div>                
			</div>
		</div>
		<div class="col-md-3">
			<div class="info-tile tile-danger">
				<div class="tile-icon"><i class="fa fa-wrench"></i></div>
				<div class="tile-heading"><span>設備尚未維修數量</span></div>
				<div class="tile-body"><span><?=$lab_device_fix_deatil_no_count;?></span></div>
                <div class="tile-footer"><span class="text-success"></span></div>                
			</div>
		</div>		
	</div>
    
    
    <div class="row">
    <div class="col-md-6">
			<div class="panel panel-pink" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
				<div class="panel-heading">
					<h2>前五大維修實驗室故障維修率</h2>
					<div class="panel-ctrls button-icon-bg" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"></div>
				</div>
				<div class="panel-body no-padding">
					<table class="table browsers m-n">
						<tbody>
                        <? foreach($lab_name_error as $lab_error) {?>
							<tr>
								<td>
							    <a href="index.php/csie_lab_device/index/lab_device/<?=$lab_error['id'];?>/detail"><?=$lab_error['name'];?></a>
								</td>
                                <td class="text-right"><?=$lab_error['lab_name_error']."%";?></td>
								<td class="vam" style="width: 150px;">
									<div class="progress m-n">
	                                  <div class="progress-bar progress-bar-teal" style="width:<?=$lab_error['lab_name_error']."%";?> ;background-color:#e51c23;"></div>
	                                </div>
	                            </td>
							</tr>
						<? } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
        
      <div class="col-md-6">
			<div class="panel panel-pink" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
				<div class="panel-heading">
					<h2>前五大維修問題</h2>
					<div class="panel-ctrls button-icon-bg" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}">
                    
                    </div>
				</div>
				<div class="panel-body no-padding">
					<table class="table browsers m-n">
						<tbody>
                        <? 
						$count=1;
						foreach($top_problem as $top_problem_) {?>
							<tr>
                                <td align="center" width="100px;">
                                <? if($count==1){ ?><h4 style="margin:0 !important;"><span class="label label-danger">TOP1</span></h4><? }; ?>
                                </td>
								<td class="text-left">
							    	<?=$top_problem_['name'];?>
								</td >
                                <td class="text-center" ><?=$top_problem_['count']."件";?></td>
								
							</tr>
						<? $count++;} ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>  
        
        
    </div>
    
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

 generate_chart()
 function generate_chart()
 {	 
	 
	 
	 $('#container').highcharts({                   //图表展示容器，与div的id保持一致
        chart: {
            type: 'column'                         //指定图表的类型，默认是折线图（line）
        },
        title: {
            text: '<?=date('Y-m');?>月實驗室維修問題數量統計'      //指定图表标题
        },
        xAxis: {
			 title: {
					  text: '實驗室'
                    },
            categories: <?=$lab_name;?>   //指定x轴分组
        },
        yAxis: {
			allowDecimals:false,
            title: {
                text: '數量'                  //指定y轴的标题
            }
        },
		        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:1f} 件</b></td></tr>',
				
			// pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',

				
				
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
				//stacking: 'percent',
                borderWidth: 0
            }
        },
        series:<?=$chart_data;?>
    });
 }
 </script>
 