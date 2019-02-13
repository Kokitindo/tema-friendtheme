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
<?php if(osc_count_items()==0 ) { ?>
                            <div class="item  col-md-12">
                                <h6><?php _e("You not have ads", 'classic'); ?></h6> 
                            </div>
                            <?php } else { ?>
                            <?php while(osc_has_items()) { ?>
            <?php if(classic_default_show_as()=='gallery'){ ?>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 four-6 three-12">
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
                  
                   <p class="location overflows">
                      <?php if(osc_item_city()!='' ) { ?><i class="fa fa-map-marker"></i>
                            <?php echo osc_item_city(); ?>
                            <?php } ?> &middot;
                            <?php if(osc_item_region()!='' ) { ?>
                            <?php echo osc_item_region(); ?>
                            <?php } ?>
                    </p>
                    <p class="location overflows"><i class="fa fa-line-chart"></i> <?php echo osc_item_views(); ?> <?php _e("Views", 'classic'); ?></p>
               
                <div class="loci"><a class="kanani" href="<?php echo osc_item_edit_url(); ?>"><i class="fa fa-edit"></i> <?php _e("Edit", 'classic'); ?></a> <span><a class="delete kanani" onclick="javascript:return confirm('<?php echo osc_esc_js(__('This action can not be undone. Are you sure you want to continue?', 'classic')); ?>')" href="<?php echo osc_item_delete_url();?>">
                                                    <i class="fa fa-power-off"></i> <?php _e("Delete", 'classic'); ?> </a></span>
                                                <?php if(osc_item_is_inactive()) {?> <span>|</span>
                                                <span><a class="kanani" href="<?php echo osc_item_activate_url();?>">
                                                    <?php _e("Activate", 'classic'); ?> </a></span>
                                                <?php } ?></div>
                     </div>
                                                
              </div>
            </div>
            <?php } else if(classic_default_show_as()=='masonry' ) { ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-4 four-6 three-12">
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
                  
                   <p class="location overflows">
                      <?php if(osc_item_city()!='' ) { ?><i class="fa fa-map-marker"></i>
                            <?php echo osc_item_city(); ?>
                            <?php } ?> &middot;
                            <?php if(osc_item_region()!='' ) { ?>
                            <?php echo osc_item_region(); ?>
                            <?php } ?>
                    </p>
                   <p class="location overflows"><i class="fa fa-line-chart"></i> <?php echo osc_item_views(); ?> <?php _e("Views", 'classic'); ?></p>
               
                <div class="loci"><a class="kanani" href="<?php echo osc_item_edit_url(); ?>"><i class="fa fa-edit"></i> <?php _e("Edit", 'classic'); ?></a> <span><a class="delete kanani" onclick="javascript:return confirm('<?php echo osc_esc_js(__('This action can not be undone. Are you sure you want to continue?', 'classic')); ?>')" href="<?php echo osc_item_delete_url();?>">
                                                    <i class="fa fa-power-off"></i> <?php _e("Delete", 'classic'); ?> </a></span>
                                                <?php if(osc_item_is_inactive()) {?> <span>|</span>
                                                <span><a class="kanani" href="<?php echo osc_item_activate_url();?>">
                                                    <?php _e("Activate", 'classic'); ?> </a></span>
                                                <?php } ?></div>
                </div>
              </div>
            </div>
            <?php } else if(classic_default_show_as()=='list' ) { ?>
            
            <div class="col-md-12 col-xs-12">
     <?php if( osc_item_is_premium() ) { ?>
              <div class="ribbonz"><span class="premiumss"><?php _e("Premium", 'classic'); ?></span></div>
     <?php } ?>
<div class="thumbnail fulls">
        <div class="col-md-3 col-sm-3 col-xs-3 four-4 ari-4 three-6">
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
         </div>
         <div class="hides photo-count"><em class="fa fa-camera"></em> <span><?php echo osc_count_item_resources(); ?></span></div>
        <div class="col-md-9 col-sm-9 col-xs-9 four-8 ari-8 three-6 text kat1">
           
                     <h3>
                         <a class="title-product" title="<?php echo osc_esc_html(osc_item_title()) ; ?>" href="<?php echo osc_item_url(); ?>"><?php echo osc_item_title(); ?></a>
                     </h3> 
                     <div class="pricing"> <?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { ?>
                            <p class="price-product"><?php echo osc_format_price(osc_item_price()); ?></p>
                    <?php } ?>
                    </div>
                    <p class="hidden-xs-down"><?php echo osc_highlight( strip_tags( osc_item_description() ) ); ?> <a href="<?php echo osc_item_url(); ?>" class="btns"><?php _e("Read more", 'classic'); ?></a></p>
                    <div class="loc">
                    <?php if(osc_item_city()!='' ) { ?><i class="fa fa-map-marker"></i>
                            <?php echo osc_item_city(); ?>
                            <?php } ?> &middot;
                            <?php if(osc_item_region()!='' ) { ?>
                            <?php echo osc_item_region(); ?>
                            <?php } ?>
                    <span class="datt"><strong><i class="fa fa-clock-o"></i></strong> <?php echo osc_format_date(osc_item_pub_date()); ?></span> <span><i class="fa fa-line-chart"></i> <?php echo osc_item_views(); ?> <?php _e("Views", 'classic'); ?></span>
                    </div>
                    <div class="loc"><a class="kanani" href="<?php echo osc_item_edit_url(); ?>"><i class="fa fa-edit"></i> <?php _e("Edit", 'classic'); ?></a> <span><a class="delete kanani" onclick="javascript:return confirm('<?php echo osc_esc_js(__('This action can not be undone. Are you sure you want to continue?', 'classic')); ?>')" href="<?php echo osc_item_delete_url();?>">
                                                    <i class="fa fa-power-off"></i> <?php _e("Delete", 'classic'); ?> </a></span>
                                                <?php if(osc_item_is_inactive()) {?> <span>|</span>
                                                <span><a class="kanani" href="<?php echo osc_item_activate_url();?>">
                                                    <?php _e("Activate", 'classic'); ?> </a></span>
                                                <?php } ?></div>
                   
        </div>
        </div>
        </div>
            
            <?php } ?>
            <?php } ?>
                            <?php } ?>