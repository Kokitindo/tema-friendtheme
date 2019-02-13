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
    osc_enqueue_script('jquery-validate');
?>
<?php osc_current_web_theme_path('header.php') ; ?>
<div class="second-area">
    <div class="midle-area">
    <h1><?php _e("Contact us", 'classic'); ?></h1>
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
				    <div class="ads-heading"><h2 class="title-public text-center"><?php _e('Contact administrator', 'classic'); ?></h2></div>
				    <ul id="error_list"></ul>
                    <form action="<?php echo osc_base_url(true); ?>" method="post" name="contact_form" id="contact">
                        <input type="hidden" name="page" value="contact" />
                        <input type="hidden" name="action" value="contact_post" />
                        <fieldset>
                            <div class="form-group">
                            <label for="yourName">
                                <?php _e("Your name", 'classic'); ?> (
                                <?php _e("optional", 'classic'); ?>)</label>
                            <?php ContactForm::your_name(); ?>
                            </div>
                            <div class="form-group">
                            <label for="yourEmail">
                                <?php _e("Your e-mail address", 'classic'); ?> </label>
                            <?php ContactForm::your_email(); ?>
                            </div>
                            <div class="form-group">
                            <label for="subject">
                                <?php _e("Subject", 'classic'); ?> (
                                <?php _e("optional", 'classic'); ?>)</label>
                            <?php ContactForm::the_subject(); ?>
                            </div>
                            <div class="form-group">
                            <label for="message">
                                <?php _e("Message", 'classic'); ?> </label>
                            <?php ContactForm::your_message(); ?>
                            </div>
                            <div class="form-group">
                             <label>
                            <?php osc_run_hook( 'contact_form'); ?></label>
                             <label>
                            </div>
                            <div class="form-group">
                            <?php osc_run_hook('admin_contact_form'); ?> 
                            </div>
                            <div class="form-group">
                            <?php osc_show_recaptcha(); ?></label>
                            <button class="btn btn-primary btn-block" type="submit">
                                <?php _e("Send messages", 'classic'); ?> </button>
                            </div>
                      </fieldset>
                    </form>
                    <?php ContactForm::js_validation(); ?>
				    </div>
			</div>
		</div>
		</div>
</div>
<?php osc_current_web_theme_path('footer.php') ; ?>