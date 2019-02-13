<?php
     /*
     *       Classic Responsive Osclass Themes
     *       
     *       Copyright by Osclass.me
     *  
     *       This program is a commercial software. Copying or distribution without a license is not allowed.
     *         
     *       If you need more licenses for this software. Please contact cs@osclass.me
     *
     *       Special thanks and credit for all source can see in /includes/credit/credit.txt
     */
    // meta tag 
    osc_add_hook('header','classic_follow_construct');
    osc_add_hook('header','classic_search_js');
?>
<?php osc_current_web_theme_path('header.php') ; ?>

<!-- content one -->
<div class="bb-slider-wrapper" style="padding: 10px;">
        <div class="container">
            <div class="bb-wrapper">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8" id="bb-slider-left">
                        <div class="bb-slider-area">
                            <div class="bb-slider">

                                <div>
                                    <a href="https://www.belanjabekas.com/pdl/all-product-lelang" >
                                        <img src="https://www.belanjabekas.com/content/official/20190103163524yureijei783nsmd9.png">
                                    </a>
                                </div>
                                <div>
                                    <a href="https://www.belanjabekas.com/p/otomotif" >
                                        <img src="https://www.belanjabekas.com/content/official/20190104113210otomot.png">
                                    </a>
                                </div>
                                <div>
                                    <a href="https://www.belanjabekas.com/p/all-product/0/kamera?" >
                                        <img src="https://www.belanjabekas.com/content/official/20190117140013201901378912rekomendasicamera.jpg">
                                    </a>
                                </div>
                                <div>
                                    <a href="www.belanjabekas.com" >
                                        <img src="https://www.belanjabekas.com/content/official/20190125111324imlek.jpg">
                                    </a>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 hidden-xs" id="bb-slider-right">
                        <div class="row">

                            <div class="col-xs-12 col-sm-4 col-md-12">
                                <div class="bb-single-banner bb-banner-img-3">
                                    <a href="https://www.belanjabekas.com/page/diskon10" target="_blank">
                                        <img src="https://www.belanjabekas.com/content/official/20190107125018diskon-all-produk-1280.png">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-12">
                                <div class="bb-single-banner bb-banner-img-3">
                                    <a href="https://www.belanjabekas.com/user/register" target="_blank">
                                        <img src="https://www.belanjabekas.com/content/official/20190104153359seller-of-the-month1280.png">
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- PRODUK TERBARU -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h4 class="bb-other-items-title font13 bold"><?php _e('Produk Premium', 'classic'); ?></h4>
            </div>
            <div class="col-xs-6 hidden-xs text-right">
                <!--<button href="" class="btn btn-default-custom btn-others">Lihat Produk Lain</button>-->
            </div>
        </div>

        <div class="bb-line  bb-line-index hidden-xs">
            <hr class="margintop5px">
        </div>
        <div class="the-product-terbaru">
            <div class="product-terbaru">
                <div class="row list-product-nonslide">
                    
                    <!-- show poost latest Premium -->
                    <?php osc_current_web_theme_path('includes/loop/loop-premium.php') ; ?>
                    
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h4 class="bb-other-items-title font13 bold"><?php _e('Latest Produk', 'classic'); ?></h4>
            </div>
            <div class="col-xs-6 hidden-xs text-right">
                <!--<button href="" class="btn btn-default-custom btn-others">Lihat Produk Lain</button>-->
            </div>
        </div>

         <div class="the-product-terbaru">
            <div class="product-terbaru">
                <div class="row list-product-nonslide">
                    
                    <!-- latest post -->
                    <?php osc_current_web_theme_path('includes/loop/loop-latest.php') ; ?>
                    

                </div>
            </div>
        </div>
    </div>

  

</div>
<?php osc_current_web_theme_path('footer.php') ; ?>