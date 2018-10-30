    <div class="container">
        <nav id="menu" class="navbar">
            <div class="navbar-header"><span id="category" class="visible-xs">目錄</span>
                <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i>MENU</button>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <?php foreach ($Categories as $Category): ?>
                    <li class="dropdown"><a href="<?php echo $Category['fpath']?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $Category['name'];?></a>
                        <div class="dropdown-menu">
                            <div class="dropdown-inner">
                                <ul class="list-unstyled">
                                    <?php foreach ($Category['sub'] as $items): ?>
                                    <li><a href="<?php echo $items['fpath']?>">
                                            <?php echo $items['name']?></a>
                                    </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                         </div>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </nav>
    </div>