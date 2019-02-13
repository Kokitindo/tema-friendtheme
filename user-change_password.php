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
    <h1><?php _e("Change password", 'classic'); ?></h1>
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
                    <div class="ads-heading"><h2 class="title-public text-center"><?php _e("Change your e-mail", 'classic'); ?></h2></div>
				    <form action="<?php echo osc_base_url(true); ?>" method="post">
                            <input type="hidden" name="page" value="user" />
                            <input type="hidden" name="action" value="change_password_post" />
                            <fieldset>
                                <div class="form-group">
                                    <label class="form-label" for="password">
                                        <?php _e("Current password", 'classic'); ?> *</label>
                                    <input type="password" name="password" id="password" value="" /> 
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="new_password">
                                        <?php _e("New password", 'classic'); ?> *</label>
                                    <input type="password" name="new_password" id="new_password" value="" /> 
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="new_password2">
                                        <?php _e("Repeat new password", 'classic'); ?> *</label>
                                    <input type="password" name="new_password2" id="new_password2" value="" /> 
                                </div>
                                <div style="clear:both;"></div>
                                <button class="btn btn-primary btn-lg" type="submit"><span class="fa fa-check-square" aria-hidden="true"></span>
                                    <?php _e("Update", 'classic'); ?> </button>
                            </fieldset>
                        </form>
				    </div>
				    
				</div>
			</div>
		</div>
	</div>
<?php osc_current_web_theme_path('footer.php'); ?> 