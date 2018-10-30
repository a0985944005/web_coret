
	<div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>修改權限</h2>
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
					<form action="index.php/csie_privilege/update" method="post" enctype="multipart/form-data" class="form-horizontal row-border">
				<div class="form-group">
					<label class="col-sm-2 control-label">名稱</label>
					<div class="col-sm-8">
						<input name="name" type="text" class="form-control" id="name" value="<?=$privilege_data['name'];?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">等級</label>
					<div class="col-sm-8">
						<input name="level" type="text" class="form-control" id="level" value="<?=$privilege_data['level'];?>">
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-2 control-label">使用人員</label>
					<div class="col-sm-8">
						<select name="status" class="form-control" id="status">
                        <option value="user">無</option> 
                        <option value="admin" <? if($privilege_data['status']=='admin') echo "selected='selected'"; ?>>系辦管理員</option> 
                        <option value="lab_admin" <? if($privilege_data['status']=='lab_admin') echo "selected='selected'"; ?>>實驗室管理員</option>
                        <option value="user" <? if($privilege_data['status']=='user') echo "selected='selected'"; ?>>一般使用者</option>                       					
						</select>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-2 control-label"></label>
					<div class="col-sm-8" align="right">
						<input name="id" type="hidden" value="<?=$privilege_data['id'];?>" />
                		 <button class="btn btn-info" type="submit">送出</button>
                        <a class="btn btn-default" onclick="javascript:history.go(-1)">返回</a>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>