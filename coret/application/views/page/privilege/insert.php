
	<div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>新增權限</h2>
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
					<form action="index.php/csie_privilege/insert" method="post" enctype="multipart/form-data" class="form-horizontal row-border">
				<div class="form-group">
					<label class="col-sm-2 control-label">名稱</label>
					<div class="col-sm-8">
						<input name="name" type="text" class="form-control" id="name">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">等級</label>
					<div class="col-sm-8">
						<input name="level" type="text" class="form-control" id="level">
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-2 control-label">使用人員</label>
					<div class="col-sm-8">
						<select name="status" class="form-control" id="status">
                        <option value="admin">系辦管理員</option> 
                        <option value="lab_admin">實驗室管理員</option>
                        <option value="user">一般使用者</option>                       					
						</select>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-2 control-label"></label>
					<div class="col-sm-8" align="right">
						
                		 <button class="btn btn-info" type="submit">送出</button>
                        <a class="btn btn-default" onclick="javascript:history.go(-1)">返回</a>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>