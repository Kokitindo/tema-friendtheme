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
    osc_enqueue_script('fancybox');
    osc_register_script('fancybox', osc_current_web_theme_url('js/fancybox/jquery.fancybox.pack.js'), array('jquery'));
    osc_enqueue_style('fancybox', osc_current_web_theme_url('js/fancybox/jquery.fancybox.css'));
    osc_register_script('global-theme-js', osc_current_web_theme_js_url('main.js'), 'jquery');
    osc_enqueue_script('global-theme-js');
    osc_enqueue_script('jquery-validate');
    $address = '';
    if(osc_user_address()!='') {
        if(osc_user_city_area()!='') {
            $address = osc_user_address().", ".osc_user_city_area();
        } else {
            $address = osc_user_address();
        }
    } else {
        $address = osc_user_city_area();
    }
    $location_array = array();
    if(trim(osc_user_city()." ".osc_user_zip())!='') {
        $location_array[] = trim(osc_user_city()." ".osc_user_zip());
    }
    if(osc_user_region()!='') {
        $location_array[] = osc_user_region();
    }
    if(osc_user_country()!='') {
        $location_array[] = osc_user_country();
    }
    $location = implode(", ", $location_array);
    unset($location_array);

?>
<?php osc_current_web_theme_path('header.php') ; ?>
<div class="second-area">
    <div class="midle-area">
    <h1><?php echo osc_user_name(); ?></h1>
    <div class="head-date"></div>
    </div>
</div>
<!-- breadcrumb -->
<?php osc_current_web_theme_path('includes/head/breadcrumb.php') ; ?>
<!-- content one -->
<div class="main-page">
    <div class="container">
			<div class="row">
			    <!-- sidebar -->
				<div class="col-md-3 col-xs-12">
				    <div class="square-box">
      <div class="box-seller">
        <div class="seller-background"></div>
        <div class="seller-avatar">
          <?php if (function_exists('mdh_avatar_preview_url')) { ?>
            <a href="#"><img class="img-avatar" title="<?php echo osc_esc_html(__('Seller profile','classic')); ?>" alt="<?php echo osc_esc_html(__('Seller profile','classic')); ?>" src="<?php echo mdh_avatar_preview_url(osc_user_id()); ?>" /></a>
            <?php } else if (function_exists('show_avatar')) { ?>
            <?php echo show_avatar(osc_user_id()); ?>
            <?php } else { ?>
            <a href="#"><img class="img-avatar"  alt="<?php echo osc_esc_html(__('Seller profile','classic')); ?>" src="<?php echo osc_current_web_theme_url('images/avatar.png') ; ?>" /></a>
            <?php } ?>
          <h2 class="title-avatar"><?php echo osc_user_name(); ?></h2>
        </div>
        <div class="lefts">
                        <?php if( osc_reg_user_can_contact() && !osc_is_web_user_logged_in() ) { ?>
                        <a href="<?php echo osc_user_login_url(); ?>" class="btn btn-success btn-block"><?php _e('Login', 'classic'); ?></a>
                        <?php } else { ?>
                         <?php if(osc_logged_user_id() !=osc_user_id()) { ?>
                        <a class="btn btn-success btn-block" data-toggle="modal" data-target=".modal-sukses"><?php _e('Send mail', 'classic'); ?></a>
                        <?php } else { ?>
                         <a class="btn btn-info  btn-block" href="<?php echo osc_user_profile_url() ; ?>"><?php _e("Edit profile", 'classic'); ?></a>
                        <?php } ?>
                        <?php } ?>
                 </div>
        <div class="rights">
                        <?php if( osc_reg_user_can_contact() && !osc_is_web_user_logged_in() ) { ?>
                        <a class="btn btn-info btn-block" href="<?php echo osc_register_account_url(); ?>"><?php _e("Register", 'classic'); ?></a>
                        <?php } else { ?>
                        <a href="#" class="btn btn-info btn-block"><?php _e('Registered', 'classic'); ?></a>
                         <?php } ?>
                        </div>
        </div>
      <div class="seller-information">
        <div class="seller-about">
          <h2 class="title-maps"><?php _e("Seller information", 'classic'); ?></h2>
          <?php if( osc_reg_user_can_contact() && !osc_is_web_user_logged_in() ) { ?>
          <p><?php _e("Only registered users can contact publisher", 'classic'); ?></p>
          <?php } else { ?>
           <ul class="infors">
            <?php if ( osc_user_phone() !='' ) { ?>
            <li><span class="sub-seller fa fa-phone"></span><?php _e("Phone", 'classic'); ?>: <?php echo osc_user_phone(); ?></li>
            <?php } ?>
            <?php if ( osc_user_phone_mobile() !='' ) { ?>
            <li><span class="sub-seller fa fa-mobile-phone"></span><?php _e("Cell phone", 'classic'); ?>: <?php echo osc_user_phone_mobile(); ?></li>
            <?php } ?>
                </li>            
            </ul>
            <?php } ?>
        </div>
      </div>
       
    </div>
    <div class="modal fade modal-sukses" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <!-- modal start -->
                            <div class="contact-modal form-container form-vertical">
       <?php if(osc_logged_user_id() !=  osc_user_id()) { ?>
    <?php     if(osc_reg_user_can_contact() && osc_is_web_user_logged_in() || !osc_reg_user_can_contact() ) { ?>
        <div id="contact" class="widget-box form-container form-vertical">
            <h2><?php _e("Send email", 'classic'); ?></h2>
                <ul id="error_list"></ul>
                <form action="<?php echo osc_base_url(true); ?>" method="post" name="contact_form" id="contact_form">
                    <input type="hidden" name="action" value="contact_post" />
                    <input type="hidden" name="page" value="user" />
                    <input type="hidden" name="id" value="<?php echo osc_user_id();?>" />
                    <div class="form-group">
                        <label class="control-label" for="yourName"><?php _e('Your name', 'classic'); ?>:</label>
                        <div class="controls"><?php ContactForm::your_name(); ?></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="yourEmail"><?php _e('Your email address', 'classic'); ?>:</label>
                        <div class="controls"><?php ContactForm::your_email(); ?></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="phoneNumber"><?php _e('Phone number', 'classic'); ?> (<?php _e('optional', 'classic'); ?>):</label>
                        <div class="controls"><?php ContactForm::your_phone_number(); ?></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="message"><?php _e('Message', 'classic'); ?>:</label>
                        <div class="controls textarea"><?php ContactForm::your_message(); ?></div>
                    </div>

                    <div class="form-group">
                        <div class="controls">
                            <?php osc_run_hook('item_contact_form', osc_item_id()); ?>
                            
                            <?php osc_show_recaptcha(); ?>
                            <button type="submit" class="btn btn-success btn-block"><?php _e("Send", 'classic');?></button>
                        </div>
                    </div>
                </form>
                <?php ContactForm::js_validation(); ?>
        </div>
        <?php
        }
    }
    ?>
            
            </div>
                            <!-- modal end -->
                        </div>
                    </div>
                </div>
                
    <div class="square-box">
				    <h2 class="title-maps"><?php _e("More information", 'classic'); ?></h2>
				    <?php if( osc_reg_user_can_contact() && !osc_is_web_user_logged_in() ) { ?>
                    <p><?php _e("Only registered users can contact publisher", 'classic'); ?></p>
                    <?php } else { ?>
				    <ul class="infors">
				         <?php if( $address !=='' ) { ?>
                            <li><?php _e("Address", 'classic'); ?>:
                                <?php echo $address; ?> </li>
                            <?php } ?>
                            <?php if( $location !=='' ) { ?>
                            <li><?php _e("Location", 'classic'); ?>:
                                <?php echo $location; ?> </li>
                            <?php } ?>
                            <?php if( osc_user_website() !=='' ) { ?>
                            <li><?php _e("Website", 'classic'); ?>:
                                <a href="<?php echo osc_user_website(); ?>" target="_blank"><?php echo osc_user_website(); ?></a></li>
                            <?php } ?>
                            <?php if( osc_user_info() !=='' ) { ?>
                            <li><?php _e("User Description", 'classic'); ?>:
                                <?php echo osc_user_info(); ?> </li>
                            <?php } ?>                       
                     </ul>
				    <?php } ?>
				</div>
				<?php if(osc_get_preference('banner_ads', 'classic_theme')!='' ) { ?>
		    <div class="clearfix"></div>
			<div class="col-md-12 centeres margined">
            <?php echo osc_get_preference('banner_ads', 'classic_theme'); ?> 
            </div>
            <?php } ?> 
				</div>
			    <!-- content -->
				<div class="col-md-9 col-xs-12">
				    <div class="square-box">
				        <div class="ads-heading"><h2 class="title-public text-center"><?php echo sprintf(__('Ads from %s', 'classic') ,osc_user_name()); ?></h2></div>
				       <?php osc_current_web_theme_path('includes/loop/loop-public.php') ; ?>
				    </div>
				</div>
				
			</div>
		</div>
	</div>	
<?php osc_current_web_theme_path('footer.php') ; ?>