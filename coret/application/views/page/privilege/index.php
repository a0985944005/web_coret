
  
	<div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>權限管理</h2>
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
                 <div align="right">
					<a href="<? echo site_url("csie_privilege/index/insert");?>" class="btn btn-info"><i class="fa fa-plus"></i> 新增</a>
                    </div>
                        <section id="no-more-tables">
                   <div class="adv-table">
                   
                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                    <tr>
                        <th>排序</th>
                        <th>權限名稱</th>
                        <th>層級</th>
                        <th>使用人員</th>
                        <th class='sorting_asc_disabled' ><div align="center">功能</div></th>
                    </tr>
                    </thead>
                    <tbody>
                   <? foreach($privilege_data as $data){ ?> 
                    <tr>
                        <td  class="center"data-title="排序"><?=$data['id'];?></td>
                        <td class="center" data-title="權限名稱"><?=$data['name'];?></td>
                        <td class="center" data-title="層級"><?=$data['level'];?></td>
                        <td class="center" data-title="使用人員"><?=$data['status'];?></td>
                        <td class="center" data-title="功能">
                         <a class="btn btn-success" href="index.php/csie_privilege/index/update/<?=$data['id'];?>">修改</a> 
                         <a class="btn btn-danger" href="index.php/csie_privilege/delete/<?=$data['id'];?>">刪除</a>
                        </td>
                    </tr>
                  <? }?>
					</tbody>
                    </table>
                    </div>
                                    
                                               
                        </section>
			</div>
		</div>
	</div>
</div>