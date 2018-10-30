    
    <footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-lg-2 col-md-offset-1">
                <div class="widget">
                    <h4>芯億簡介</h4>
                    
                  <ul class="link-list">
                        <li><a href="index.php/front_index/index/about">芯億介紹</a></li>
                        <li><a href="index.php/front_index/index/purpose">芯億宗旨</a></li>
                        <li><a href="index.php/front_index/index/idea">芯億理念</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2 col-lg-2 ">
                <div class="widget">
                    <h4>產品項目</h4>
                    <ul class="link-list">
                      <? foreach ($product_menu as $key => $value) { ?>

                  <li><a href="index.php/front_product/index/index/<?=$value['id']?>"><?=$value['name']?></a></li>

                <? }; ?>  
                    </ul>
                </div>
                
            </div>
            <div class="col-sm-2 col-lg-2">
                <div class="widget">
                    <h4>訂製流程</h4>
                    <ul class="link-list">
                        <li><a href="index.php/front_index/index/process">訂製流程</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2 col-lg-2">
                <div class="widget">
                    <h4>最新訊息</h4>
                  <ul class="link-list">
                        <li><a href="index.php/front_news/index/index">最新公告</a></li>
                    </ul>
                    
                </div>
            </div>
             <div class="col-sm-3 col-lg-3">
                <div class="widget">
                    <h4>聯絡芯億</h4>
                   <ul class="link-list">
                        <li><a href="index.php/front_index/index/information">公司資訊</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p style="color: #FFF;">&copy; CoreT - All Right Reserved</p>
                        <div class="credits">
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <li><a href="https://zh-tw.facebook.com/core.t168/" data-placement="top" title="Facebook" target="_bank_"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/sunny035319" data-placement="top" title="Twitter" target="_bank_"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
<script src="application/views/theme/js/jquery.min.js"></script>
<script src="application/views/theme/js/modernizr.custom.js"></script>
<script src="application/views/theme/js/jquery.easing.1.3.js"></script>
<script src="application/views/theme/js/bootstrap.min.js"></script>
<script src="application/views/theme/plugins/flexslider/jquery.flexslider-min.js"></script> 
<script src="application/views/theme/plugins/flexslider/flexslider.config.js"></script>
<script src="application/views/theme/js/jquery.appear.js"></script>
<script src="application/views/theme/js/stellar.js"></script>
<script src="application/views/theme/js/classie.js"></script>
<script src="application/views/theme/js/uisearch.js"></script>
<script src="application/views/theme/js/jquery.cubeportfolio.min.js"></script>
<script src="application/views/theme/js/google-code-prettify/prettify.js"></script>
<script src="application/views/theme/js/animate.js"></script>
<script src="application/views/theme/js/custom.js"></script>

      <script src='http://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js'></script>

    <script src="application/views/theme/flickity-wraparound/js/index.js"></script>


        <script src="application/views/theme/bootstrap-navbar-dropdowns-master/js/navbar.js"></script>

<script type="text/javascript">
    
   
$(function() {

    productDetailGallery(3000);

});

function productDetailGallery(confDetailSwitch) {
    $('.thumb:first').addClass('active');
    timer = setInterval(autoSwitch, confDetailSwitch);
    $(".thumb").click(function(e) {

    switchImage($(this));
    clearInterval(timer);
    timer = setInterval(autoSwitch, confDetailSwitch);
    e.preventDefault();
    }
    );
    $('#mainImage').hover(function() {
    clearInterval(timer);
    }, function() {
    timer = setInterval(autoSwitch, confDetailSwitch);
    });

    function autoSwitch() {
    var nextThumb = $('.thumb.active').closest('div').next('div').find('.thumb');
    if (nextThumb.length == 0) {
        nextThumb = $('.thumb:first');
    }
    switchImage(nextThumb);
    }

    function switchImage(thumb) {

    $('.thumb').removeClass('active');
    var bigUrl = thumb.attr('href');
    thumb.addClass('active');
    $('#mainImage img').attr('src', bigUrl);
    }
}

    
$(function(){
    var len = 50; // 超過50個字以"..."取代
    $(".JQellipsis").each(function(i){
        if($(this).text().length>len){
            $(this).attr("title",$(this).text());
            var text=$(this).text().substring(0,len-1)+"...";
            $(this).text(text);
        }
    });
});

</script>
</body>
</html>