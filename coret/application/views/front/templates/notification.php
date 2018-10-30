<ul class="nav navbar-nav toolbar pull-right ">

	<li class="dropdown toolbar-icon-bg hidden-xs">
			<a href="javascript: void(0)" class="dropdown-toggle username" data-toggle="dropdown">
				<span class="icon-bg" style="width:auto !important; font-size:14px; color:#FFF; background:none;"><?=$session['mem_level']." - ".$session['mem_name']?></span>
			</a>

		</li>

		<? if($session['mem_level']=='系辦人員'){ ?>
		<li class="dropdown toolbar-icon-bg">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="ti ti-bell"></i></span><span class="badge badge-deeporange" id="notic_count"></span></a>
			<div class="dropdown-menu notifications arrow">
				<div class="topnav-dropdown-header">
					<span>待維修設備</span>
				</div>
				<div class="scroll-pane">
					<ul class="media-list scroll-content" id="notic">
                    
						
                        
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="index.php/csie_lab_device/index/device_undone">所有待維修設備</a>
				</div>
			</div>
		</li>
            <script src="application/views/page/js/notic.js"></script>

        <? };?>

		<li class="dropdown toolbar-icon-bg">
			<a href="#" class="dropdown-toggle username" data-toggle="dropdown">
				<span class="icon-bg"><i class="fa fa-sign-out"></i></span>
			</a>
			<ul class="dropdown-menu userinfo arrow">
				<li><a href="javascript: void(0)"><i class="ti ti-user"></i><span><?=$session['mem_level']." - ".$session['mem_name']?></span></a></li>
				<li class="divider"></li>
				<li><a href="index.php/login_csie/logout"><i class="ti ti-shift-right"></i><span>登出</span></a></li>
			</ul>
		</li>

	</ul>
    