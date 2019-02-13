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
    <h1><?php _e("404 Not Found", 'classic'); ?></h1>
    <div class="head-date"></div>
    </div>
</div>
<!-- content one -->
<div class="main-page">
		<div class="container">
			<div class="row">
			    <!-- sidebar -->
				<div class="col-md-8 centered">
				    <div class="square-box">
				    <div class="errorfound">
                        <?php _e("Sorry, an error has occured, Requested page not found!", 'classic'); ?> 
                    </div>
                    <div class="error-actions text-center"> <a href="<?php echo osc_base_url(); ?>" class="btn btn-primary btn-lg"><span class="fa fa-home"></span>
                       <?php _e("Take me home", 'classic'); ?></a> <?php _e("or", 'classic'); ?> <a href="<?php echo osc_contact_url(); ?>" class="btn btn-success btn-lg"><span class="fa fa-envelope"></span> <?php _e("Contact support", 'classic'); ?></a> 
                    </div>
				    </div>
			</div>
		</div>
		</div>
</div>
<?php osc_current_web_theme_path('footer.php') ; ?>