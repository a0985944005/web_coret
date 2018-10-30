<h2><?echo $Products['category']?></h2>
<div class="row">
    <?php foreach ($Products['items'] as $Product): ?>
    <div class="product-layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="transition">
            <div class="image">
                <a href="<?echo base_url().'index.php/'.$Product['link']?>">
                    <img 
                        src="<?echo $Product['img']?>" 
                        alt="<?echo $Product['name']?>" 
                        title="<?echo $Product['name']?>" 
                        class="img-responsive" />
                </a>
            </div>
            <div class="caption">
                <h4>
                    <a href="<?echo base_url()?>index.php?route=product/product&amp;product_id=43">
                        <?echo $Product['name']?>
                    </a>
                </h4>
                <p> 秒殺款荷葉䄂上衣三色今天也現貨供應中真的好好搭..</p>
            </div>
        </div>
    </div>
    <?php endforeach ?>

</div>