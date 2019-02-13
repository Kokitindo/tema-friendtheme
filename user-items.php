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
<!-- <div class="second-area">
    <div class="midle-area">
    <h1><?php _e("My ads", 'classic'); ?></h1>
    <div class="head-date"></div>
    </div>
</div> -->

&nbsp;
<!-- content one -->
<div class="main-page">
		<div class="container">
			<div class="row">
			     <?php osc_current_web_theme_path('user-sidebar.php') ; ?>
				<div class="col-md-9 col-xs-12">
				    <div class="square-box">
				    <div class="ads-heading"><?php osc_current_web_theme_path('includes/head/breadcrumb.php') ; ?></div>
				     <?php osc_current_web_theme_path('includes/loop/loop-myads.php') ; ?>
                    <div class="col-md-12 col-xs-12 paginate" >
                        <?php echo osc_pagination_items(); ?>
                    </div>
				    </div>
				    
				</div>
			</div>
		</div>
	</div>
<?php osc_current_web_theme_path('footer.php'); ?> 