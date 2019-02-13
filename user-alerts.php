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
    osc_add_hook('header','classic_nofollow_construct');
    
?>
<?php osc_current_web_theme_path('header.php') ; ?>
<div class="second-area">
    <div class="midle-area">
    <h1><?php _e("Alert", 'classic'); ?></h1>
    <div class="head-date"></div>
    </div>
</div>
<!-- breadcrumb <?php osc_current_web_theme_path('includes/head/breadcrumb.php') ; ?> -->

<!-- content one -->
<div class="main-page">
		<div class="container">
			<div class="row">
			    <?php osc_current_web_theme_path('user-sidebar.php') ; ?>
				<div class="col-md-9 col-xs-12">
				    <div class="square-box">
				    <div class="ads-heading"><h2 class="title-public text-center"><?php _e("My alert", 'classic'); ?></h2></div>
				     <?php if(osc_count_alerts()==0 ) { ?>
                        <p><?php _e("You do not have any alerts yet", 'classic'); ?>.</p>
                        <?php } else { ?>
                        <?php while(osc_has_alerts()) { ?>
                        <div class="useralert col-xs-12">
                            <div>
                                <?php _e("Alert", 'classic'); ?> |
                                <a onclick="javascript:return confirm('<?php echo osc_esc_js(__('This action can\'t be undone. Are you sure you want to continue?', 'classic')); ?>');" href="<?php echo osc_user_unsubscribe_alert_url(); ?>">
                                    <?php _e("Delete this alert", 'classic'); ?> </a>
                            </div>
                        </div>
                                 <?php osc_current_web_theme_path('includes/loop/loop.php') ; ?>
                       
                        <?php } ?>
                        <?php } ?>
                    <div class="col-md-12 col-xs-12 paginate" >
                        <?php echo osc_pagination_items(); ?>
                    </div>
				    </div>
				    
				</div>
			</div>
		</div>
	</div>
<?php osc_current_web_theme_path('footer.php'); ?> 