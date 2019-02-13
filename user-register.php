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
    <!-- <h1><?php _e("Register", 'classic'); ?></h1> -->
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
                        <div class="wrapper">
            <form name="register" id="register" action="<?php echo osc_base_url(true); ?>" method="post" class="form-signin">
                <input type="hidden" name="page" value="register" />
                <input type="hidden" name="action" value="register_post" />
                <fieldset>
                    <h2 class="title-all text-center"><?php _e("Create new account", 'classic'); ?></h2>
                    
                    <ul id="error_list"></ul>
                    <div class="form-group">
                       <label class="control-label" for="s_email"><?php _e("E-mail", 'classic '); ?></label> 
                       <div class="controls"><?php UserForm::email_text(); ?></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="s_name">
                            <?php _e("Name", 'classic'); ?> </label>
                        <div class="controls">
                            <?php UserForm::name_text(); ?> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="s_password">
                            <?php _e("Password", 'classic'); ?> </label>
                        <div class="controls">
                            <?php UserForm::password_text(); ?> </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="s_password2">
                            <?php _e("Re-type password", 'classic'); ?> </label>
                        <div class="controls">
                            <?php UserForm::check_password_text(); ?> </div>
                    </div>
                    <p id="password-error" style="display:none;">
                        <?php _e("Passwords don't match", 'classic '); ?>.
                        </p>
                       <?php if (function_exists('show_avatar')) { ?>
                       <br><br>
                       <?php } ?>
                       <div class="form-group">
                       <?php osc_run_hook('user_register_form'); ?>
                       </div>
                       <div class="form-group">
                       <?php osc_show_recaptcha('register'); ?>
                       </div>
                       <div class="form-group">
                       <?php osc_current_web_theme_path('includes/plugins/login.php') ; ?>
                       </div>
                        <div class="form-group">
                        <input class="cekk" type="checkbox" required=""> <label><?php _e("I agree to the", 'classic'); ?> <a target="_blank" href="<?php echo osc_get_preference('term_ofuse', 'classic_theme'); ?>"> <?php _e("Terms of Use", 'classic'); ?></a></label>
                        </div>
                        <button class="btn btn-success btn-lg topper btn-block" type="submit"><span class="fa fa-paper-plane-o" aria-hidden="true"></span> <?php _e("Register", 'classic'); ?></button>
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
                                    <?php _e("Already have an account?", 'classic') ; ?>
                                    <a class="kir10" href="<?php echo osc_user_login_url(); ?>"><?php _e("Login", 'classic') ; ?></a>
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