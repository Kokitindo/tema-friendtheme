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
    <!-- <h1><?php _e("Login", 'classic'); ?></h1> -->
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
                    <input type="hidden" name="action" value="login_post" />
                    <fieldset>
                        <div class="cat-box-title">
                            <h2 class="title-all text-center"><?php _e("Access your account", 'classic'); ?></h2>
                            <div class="stripe-line"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email">
                                <?php _e("E-mail", 'classic'); ?> </label>
                            <div class="controls">
                                <?php UserForm::email_login_text(); ?> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">
                                <?php _e("Password", 'classic'); ?> </label>
                            <div class="controls">
                                <?php UserForm::password_login_text(); ?> 
                            </div>
                        </div>
                        <div class="form-group">
                       <?php osc_current_web_theme_path('includes/plugins/login.php') ; ?>
                       </div>
                        <div class="form-group">
                            <div class="controls">
                                <?php UserForm::rememberme_login_checkbox();?>
                                <label for="remember">
                                    <?php _e("Remember me", 'classic'); ?> </label>
                            </div>
                        </div>
                        <button class="btn btn-success btn-lg btn-block" type="submit"><span class="fa fa-sign-in" aria-hidden="true"></span>
                            <?php _e("Login", 'classic');?> </button>
                        <br>
                        <div class="jarak"></div>
                        
                        <div class="forg">
                            <div class="control">
                                <div style="padding-top:15px">
                                    <a class="forgot2" href="<?php echo osc_recover_user_password_url(); ?>">
                                        <?php _e("Forgot password?", 'classic'); ?> </a>
                                </div>
                            </div>
                        </div>
                        <div class="forg">
                            <div class="control">
                                <div style="padding-top:15px;padding-bottom:15px">
                                    <?php _e("Don't have an account!", 'classic') ; ?>
                                    <a class="kir10" href="<?php echo osc_register_account_url() ; ?>">
                                        <?php _e("Register here", 'classic') ; ?> </a>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
<?php osc_current_web_theme_path('footer.php'); ?> 