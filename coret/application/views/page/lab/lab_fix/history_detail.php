<div class="row">
	<div class="col-sm-12">
		<div class="panel">
			<div class="panel-heading">
				<h2 style="margin-right:10px; font-size:18px;"><?=$lab_device_data['lab_name']?></h2>
				<div class="options">
					<ul class="nav nav-tabs" style="float:none;">
                        <li class='active' style="border:thin #EEE solid; border-bottom:none;"><a href="#tab-1-1" data-toggle="tab">維修內容詳細</a></li>
                        <li class='' style="border:thin #EEE solid; border-bottom:none;"><a href="#tab-1-2" data-toggle="tab">維修結果</a></li>

					</ul>
				</div>
			</div>
			<div class="panel-body">
				<div class="tab-content">
                        <div class="tab-pane active"  id="tab-1-1">
                           <? include('history_fix_detail.php');?>
                        </div>
                        <div class="tab-pane" id="tab-1-2">
                       <? include('history_fix_return.php');?>
                        </div>
				</div>
			</div>
		</div>
	</div>

</div>
