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
    $locales   = __get('locales');
    $osc_user = User::newInstance()->findByPrimaryKey(osc_logged_user_id());
    View::newInstance()->_exportVariableToView('user', $osc_user);
    
?>
<!-- sidebar -->
	<div class="col-md-3 col-xs-12">
	 <div class="square-box">
      <div class="box-seller">
        <div class="seller-background"></div>
        <div class="seller-avatar">
            <?php if (function_exists('mdh_avatar_preview_url')) { ?>
            <a href="<?php echo osc_user_profile_url(); ?>"><img class="img-avatar" title="<?php echo osc_esc_html(__('Change profile picture','classic')); ?>" alt="<?php echo osc_esc_html(__('Seller profile','classic')); ?>" src="<?php echo mdh_avatar_preview_url(osc_user_id()); ?>" /></a>
            <?php } else if (function_exists('show_avatar')) { ?>
            <?php echo show_avatar(osc_logged_user_id()); ?>
            <?php } else { ?>
            <a href="<?php echo osc_user_profile_url(); ?>"><img class="img-avatar"  alt="<?php echo osc_esc_html(__('Seller profile','classic')); ?>" src="<?php echo osc_current_web_theme_url('images/avatar.png') ; ?>" /></a>
            <?php } ?>
          <h2 class="title-avatar"><?php echo osc_user_name(); ?></h2>
        </div>
        <div class="lefts">
                        <a class="btn btn-info  btn-block" href="<?php echo osc_user_profile_url(); ?>"><?php _e("Edit profile", 'classic'); ?></a>
                </div>
        <div class="rights">
            <a href="<?php echo osc_user_public_profile_url(); ?>" class="btn btn-info btn-block"><?php _e("View profile", 'classic'); ?></a></div>
        </div>

      <div class="seller-information">
        <div class="seller-about">
          <h2 class="title-maps"><?php _e("Your contact info", 'classic'); ?></h2>
          <ul class="infors">
        <?php if ( osc_user_phone() !='' ) { ?>
        <li class="dua"><span class="sub-seller fa fa-phone"></span> <?php _e("Phone", 'classic'); ?>: <?php echo osc_user_phone(); ?></li>
         <?php } else { ?>
         <li class="dua"><span class="sub-seller fa fa-phone"></span> <?php _e("Phone", 'classic'); ?>: <a href="<?php echo osc_user_profile_url(); ?>"><?php _e('Insert number', 'classic') ; ?></a></li>
        <?php } ?>
        <?php if ( osc_user_phone_mobile() !='' ) { ?>
        <li class="dua"><span class="sub-seller fa fa-mobile-phone"></span> <?php _e("Cell phone", 'classic'); ?>: <?php echo osc_user_phone_mobile(); ?></li>
        <?php } else { ?>
         <li class="dua"><span class="sub-seller fa fa-mobile-phone"></span> <?php _e("Cell phone", 'classic'); ?>: <a href="<?php echo osc_user_profile_url(); ?>"><?php _e('Insert number', 'classic') ; ?></a></li>
        <?php } ?>
           </ul>
        </div>
      </div>
       
    </div>
            <div class="clearfix"></div>
			<?php echo osc_private_user_menu( get_user_menu() ); ?>
			<?php if(osc_get_preference('banner_ads', 'classic_theme')!='' ) { ?>
		    <div class="clearfix"></div>
			<div class="col-md-12 centeres margined">
            <?php echo osc_get_preference('banner_ads', 'classic_theme'); ?> 
            </div>
            <?php } ?> 
				</div>