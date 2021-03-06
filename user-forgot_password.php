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
    <h1><?php _e("Forgot password?", 'classic'); ?></h1>
    <div class="head-date"></div>
    </div>
</div>
<!-- breadcrumb <?php osc_current_web_theme_path('includes/head/breadcrumb.php') ; ?> -->

<!-- content one -->
<div class="main-page">
		<div class="container">
			<div class="row">
			    <!-- sidebar -->
				<div class="col-md-6 col-xs-12 centered">
				    <div class="square-box">
				        <div class="wraps">
                <form action="<?php echo osc_base_url(true); ?>" method="post" class="form-signin">
                    <input type="hidden" name="page" value="login" />
                    <input type="hidden" name="page" value="login" />
                    <input type="hidden" name="action" value="forgot_post" />
                    <input type="hidden" name="userId" value="<?php echo osc_esc_html(Params::getParam('userId')); ?>" />
                    <input type="hidden" name="code" value="<?php echo osc_esc_html(Params::getParam('code')); ?>" />
                    <fieldset>
                        <div class="cat-box-title">
                            <h2 class="title-all text-center"><?php _e("Recover your password", 'classic'); ?></h2>
                            <div class="stripe-line"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control bawah" name="new_password" value="" placeholder="<?php echo osc_esc_html(__('New password','classic')); ?>" required="" autofocus="" /> </div>
                        <div class="form-group">
                            <input type="password" class="form-control bawah" name="new_password2" value="" placeholder="<?php echo osc_esc_html(__('Repeat new password','classic')); ?>" required="" autofocus="" /> </div>
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block" name="Submit" value="Login" type="Submit">
                                <?php _e("Change password", 'classic');?> </button>
                        </div><br> 
                    </fieldset>
                </form>
            </div>
				    </div>
				</div>
			</div>
		</div>
</div>
<?php osc_current_web_theme_path('footer.php'); ?> 