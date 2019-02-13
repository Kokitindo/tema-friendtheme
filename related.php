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
?>
<div class="related col-md-12">
    <div id="owl-demo45" class="owl-carousel">
        <?php while(osc_has_items()) { ?>
        <div class="item productbox gallerys">
                <?php if( osc_item_is_premium() ) { ?>
                  <div class="ribbonz"><span class="premiumss"><?php _e("Premium", 'classic'); ?></span></div>
                <?php } ?>
              <div class="thumbnail product-thumb">
                <?php if( osc_count_item_resources() ) { ?>
                <?php if( osc_images_enabled_at_items() ) { ?>
                <a title="<?php echo osc_esc_html(osc_item_title()) ; ?>" href="<?php echo osc_item_url(); ?>">
                <img alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" class="img-rounded" src="<?php echo osc_resource_thumbnail_url(); ?>">
                </a>
                <?php } ?>
                <?php } else { ?>
                <a title="<?php echo osc_esc_html(osc_item_title()) ; ?>" href="<?php echo osc_item_url(); ?>">
                <img alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" class="img-rounded" src="<?php echo osc_current_web_theme_url('images/no_images.png') ; ?>">
                </a>
                <?php } ?>
                <div class="hides photo-count"><em class="fa fa-camera"></em> <span><?php echo osc_count_item_resources(); ?></span></div>
                <div class="caption text-center">
                <div class="overtitle">
                  <a class="title-product" title="<?php echo osc_esc_html(osc_item_title()) ; ?>" href="<?php echo osc_item_url(); ?>"><?php echo osc_item_title(); ?></a>
                </div>
                <?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { ?>
                        <p class="price-product"><?php echo osc_format_price(osc_item_price()); ?></p>
                <?php } ?>
                <p class="location-product overflows">
                      <?php if(osc_item_city()!='' ) { ?><i class="fa fa-map-marker"></i>
                            <?php echo osc_item_city(); ?>
                            <?php } ?> &middot;
                            <?php if(osc_item_region()!='' ) { ?>
                            <?php echo osc_item_region(); ?>
                            <?php } ?>
                </p>
                </div>
              </div>
            </div>
        <?php } ?> </div>
</div>
<script src="<?php echo osc_current_web_theme_js_url('owl.carousel.js') ; ?>"></script> 
<script>
$("#owl-demo45").owlCarousel({
    items : 1,
    autoPlay: 5000,
    autoplay: true,
    lazyLoad : true,
    navigation : true,
    navigationText: [
      "<i class='fa fa-chevron-left'></i>",
      "<i class='fa fa-chevron-right'></i>"
      ],
  }); 
</script>