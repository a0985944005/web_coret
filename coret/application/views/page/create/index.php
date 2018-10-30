

<?
function form_menu($menu_data = array(),$count)
{
	if(empty($menu_data)) {return;}
	foreach($menu_data as $output)
	{
		$left = $count * 10; ?>
		<tr>
			<td>
				<?=$output['id']?>
			</td>
            <td>
                <? for($i = 0 ; $i < $left ; $i++) {echo "&nbsp;";} ?>
                <?=$output['name']?>
            </td>
            <td>
                <?=$output['parent']?>
            </td>
            <td>
				<?=$output['local']?>
            </td>		
            	
            <? if($output['edit']=='Yes') 	{ ?>
            <td>
            	可修改
            </td>
           	<? } else { ?>	
            <td>
            	不可修改
            </td>
            <? } ?> 
            <? if($output["active"]=='Yes') {?>
            <td>
            	顯示
            </td>
            <? } else {?>
            <td>
            	不可顯示
            </td>
            <? } ?>
            <td>
            	<?=$output['fpath']?>
            </td>
            <td>
            	<?=$output['bpath']?>
            </td>
            <td>
            	<?=$output['model_name']?>
            </td>
            <td align="center">
              <a class="btn btn-inverse" href="<?=site_url("csie_create/index/update/".$output['id']);?>">修改</a> 
              <a class="btn btn-danger" href="<?=site_url("csie_create/delete/".$output['id']);?>">刪除</a>

			</td>
        </tr>
		<?
		if(!empty($output['sub'])) 
		{
			form_menu($output['sub'],$count+1);
		}
	}
}
?>


	<div class="row">
		<div class="col-md-12">
			
			<div class="panel panel-default" data-widget='{"draggable": "false"}'>
				<div class="panel-heading">
					<h2>選單管理</h2>
					<div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
				</div>
				<div class="panel-body">
                 <div align="right">
					<a href="<? echo site_url("csie_create/index/insert");?>" class="btn btn-info"><i class="fa fa-plus"></i> 新增</a>
                    </div>
                   <div class="adv-table">
                   
                   <div class="table-responsive">
                   
                    <table  class="display table table-bordered table-striped" id="dynamic-table" style="margin:0 5px;">
                    <thead>
                    <tr>
                            <th style="min-width:100px;">索引值</th>
                            <th style="min-width:200px;">項目名稱</th>
                            <th style="min-width:100px;">父項目</th>
                            <th style="min-width:100px;">子項目</th>
                            <th style="min-width:100px;">廠商使用</th>
                            <th style="min-width:100px;">前台顯示</th>
                            <th style="min-width:100px;">前台連結</th>
                            <th style="min-width:100px;">後台連結</th>
                            <th style="min-width:100px;">模組名稱</th>
                            <th style="min-width:150px;" class='sorting_asc_disabled' ><div align="center">動作</div></th>
                        </tr>
                    </thead>
                    <tbody>
						<? form_menu($create_data,'0');?>
					</tbody>
                    </table>
                    </div>
                    </div>

			</div>
		</div>
	</div>
</div>

