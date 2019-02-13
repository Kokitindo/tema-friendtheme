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
<?php osc_get_premiums($max=osc_get_preference('premium_ads', 'classic_theme')) ; if( osc_count_premiums()> 0 ) { ?>  
            <?php while ( osc_has_premiums() ) { ?>
            <?php if(classic_default_show_as()=='gallery' ){ ?>
            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 four-6">
              <div class="thumbnail product-thumb">
                <div class="ribbonz hidden-lg"><span class="premiumss"><?php _e("Premium", 'classic'); ?></span></div>
                <div class="ribbonz hidden-sm" style="height: 68px"><span class="premiumss"><?php _e("Premium", 'classic'); ?></span></div>
                 <?php if( osc_count_premium_resources() ) { ?>
                 <?php if( osc_images_enabled_at_items() ) { ?>
                <a title="<?php echo osc_esc_html(osc_premium_title()) ; ?>" href="<?php echo osc_premium_url() ; ?>">
                <img alt="<?php echo osc_esc_html(osc_premium_title()) ; ?>" class="img-rounded" src="<?php echo osc_resource_thumbnail_url() ; ?>">
                </a>
                <?php } ?>
                <?php } else { ?>
                <a title="<?php echo osc_esc_html(osc_premium_title()) ; ?>" href="<?php echo osc_premium_url() ; ?>">
                <img alt="<?php echo osc_esc_html(osc_premium_title()) ; ?>" class="img-rounded" src="<?php echo osc_current_web_theme_url('images/no_images.png') ; ?>">
                </a>
                <?php } ?>
                <div class="hides photo-count"><em class="fa fa-camera"></em> <span><?php echo osc_count_item_resources(); ?></span></div>
                <div class="caption text-center">
                    <div class="overtitle">
                  <a class="title-product" title="<?php echo osc_esc_html(osc_premium_title()) ; ?>" href="<?php echo osc_premium_url() ; ?>"><?php echo osc_premium_title(); ?></a>
                  </div>
                   <?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled(osc_premium_category_id()) ) { ?>
                  <p class="price-product"><?php echo osc_format_price(osc_premium_price(), osc_premium_currency_symbol()); ?></p>
                   <?php } ?> 
                  
                  <p class="location-product overflows"><?php if(osc_premium_city()!='' ) { ?><i class="fa fa-map-marker"></i>
                            <?php echo osc_premium_city(); ?>
                            <?php } ?> &middot;
                            <?php if(osc_premium_region()!='' ) { ?>
                            <?php echo osc_premium_region(); ?>
                            <?php } ?></p>
                </div>
              </div>
            </div>
            <?php } else if(classic_default_show_as()=='masonry' ){ ?>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                <div class="ribbonz hidden-lg"><span class="premiumss"><?php _e("Premium", 'classic'); ?></span></div>
                <div class="ribbonz hidden-sm" style="height: 68px"><span class="premiumss"><?php _e("Premium", 'classic'); ?></span></div>
              <div class="thumbnail product-thumb">
                 <?php if( osc_count_premium_resources() ) { ?>
                 <?php if( osc_images_enabled_at_items() ) { ?>
                <a title="<?php echo osc_esc_html(osc_premium_title()) ; ?>" href="<?php echo osc_premium_url() ; ?>">
                <img alt="<?php echo osc_esc_html(osc_premium_title()) ; ?>" class="img-rounded" src="<?php echo osc_resource_thumbnail_url() ; ?>">
                </a>
                <?php } ?>
                <?php } else { ?>
                <a title="<?php echo osc_esc_html(osc_premium_title()) ; ?>" href="<?php echo osc_premium_url() ; ?>">
                <img alt="<?php echo osc_esc_html(osc_premium_title()) ; ?>" class="img-rounded" src="<?php echo osc_current_web_theme_url('images/no_images.png') ; ?>">
                </a>
                <?php } ?>
                <div class="hides photo-count"><em class="fa fa-camera"></em> <span><?php echo osc_count_item_resources(); ?></span></div>
                <div class="caption text-center">
                    <div class="overtitle">
                  <a class="title-product" title="<?php echo osc_esc_html(osc_premium_title()) ; ?>" href="<?php echo osc_premium_url() ; ?>"><?php echo osc_premium_title(); ?></a>
                  </div>
                   <?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled(osc_premium_category_id()) ) { ?>
                  <p class="price-product"><?php echo osc_format_price(osc_premium_price(), osc_premium_currency_symbol()); ?></p>
                   <?php } ?> 
                  
                  <p class="location-product overflows"><?php if(osc_premium_city()!='' ) { ?><i class="fa fa-map-marker"></i>
                            <?php echo osc_premium_city(); ?>
                            <?php } ?> &middot;
                            <?php if(osc_premium_region()!='' ) { ?>
                            <?php echo osc_premium_region(); ?>
                            <?php } ?></p>
                </div>
              </div>
            </div>
            <?php } else if(classic_default_show_as()=='list' ){ ?>
            <div class="col-md-12 col-xs-12">
            <div class="ribbonz"><span class="premiumss"><?php _e("Premium", 'classic'); ?></span></div>
        <div class="thumbnail fulls">
        <div class="col-md-3 col-sm-3 col-xs-3 four-4 ari-4 three-6">
          <?php if( osc_count_premium_resources() ) { ?>
                 <?php if( osc_images_enabled_at_items() ) { ?>
                <a title="<?php echo osc_esc_html(osc_premium_title()) ; ?>" href="<?php echo osc_premium_url() ; ?>">
                <img alt="<?php echo osc_esc_html(osc_premium_title()) ; ?>" class="img-rounded" src="<?php echo osc_resource_thumbnail_url() ; ?>">
                </a>
                <?php } ?>
                <?php } else { ?>
                <a title="<?php echo osc_esc_html(osc_premium_title()) ; ?>" href="<?php echo osc_premium_url() ; ?>">
                <img alt="<?php echo osc_esc_html(osc_premium_title()) ; ?>" class="img-rounded" src="<?php echo osc_current_web_theme_url('images/no_images.png') ; ?>">
                </a>
                <?php } ?>
         </div>
         <div class="hides photo-count"><em class="fa fa-camera"></em> <span><?php echo osc_count_item_resources(); ?></span></div>
         <div class="col-md-9 col-sm-9 col-xs-9 four-8 ari-8 three-6 text kat1">
                     <h3>
                          <a class="title-product" title="<?php echo osc_esc_html(osc_premium_title()) ; ?>" href="<?php echo osc_premium_url() ; ?>"><?php echo osc_premium_title(); ?></a>
                     </h3> 
                     <div class="pricing">
                         <?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled(osc_premium_category_id()) ) { ?>
                  <p class="price-product"><?php echo osc_format_price(osc_premium_price(), osc_premium_currency_symbol()); ?></p>
                   <?php } ?> </div>
        <p class="hidden-xs-down"><?php echo osc_highlight( strip_tags( osc_premium_description() ) ); ?> <a href="<?php echo osc_premium_url() ; ?>" class="btns"><?php _e("Read more", 'classic'); ?></a></p>
        <div class="loc"><?php if(osc_premium_city()!='' ) { ?><i class="fa fa-map-marker"></i>
                            <?php echo osc_premium_city(); ?>
                            <?php } ?> &middot;
                            <?php if(osc_premium_region()!='' ) { ?>
                            <?php echo osc_premium_region(); ?>
                            <?php } ?>
        <span class="datt"><strong><i class="fa fa-clock-o"></i></strong> <?php echo osc_format_date(osc_premium_pub_date()); ?></span></div>
        </div>
        </div>
        </div>
        <?php } ?>
            
        <?php } ?>
        <?php } else { ?>
            <div class="col-md-12"><p class="empty"><?php _e("No premium ads", 'classic'); ?></p></div>
        <?php } ?>