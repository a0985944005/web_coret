  <div class="row">
    <div class="col-md-12">
      
      <div class="panel panel-default" data-widget='{"draggable": "false"}'>
        <div class="panel-heading">
          管理者帳號管理
          <div class="panel-ctrls" data-actions-container="" data-action-collapse='{"target": ".panel-body"}'></div>
        </div>
        <div class="panel-body">
                 <div align="right">
          <a href="<? echo site_url("admin_member/index/insert");?>" class="btn btn-info"><i class="fa fa-plus"></i> 新增</a>
                    </div>
                  <div class="adv-table">
                   
                      <div class="table-responsive"> 
                    <table  class="display table table-bordered table-striped dynamic-table">
                    <thead>
                        <tr>
                            <th style="min-width:50px;">#</th>
                            <th style="min-width:100px;">帳號</th> 
                            <th style="min-width:100px;">姓名</th>                       
                            <th  style="min-width:150px;"class='sorting_asc_disabled' ><div align="center">動作</div></th>
                        </tr>
                    </thead>
                    <tbody>
                      <? 
            $count = 1;
            foreach($tb_user as $user){?>
                      <tr>
                          <td><?=$count;?></td>
                          <td><?=$user['account']?></td>
                          <td><?=$user['name']?></td>

                          <td align="center">
                            <a class="btn btn-danger" href="<?=site_url("admin_member/delete/".$user['id']);?>" onclick="return(confirm('確認刪除嗎？'))">刪除</a>
                            </td>

                        </tr>
                        <? $count++;} ?>
                    </tbody>
                </table>
              </div> 
                    </div>
                    </div>

      </div>
    </div>
  </div>

