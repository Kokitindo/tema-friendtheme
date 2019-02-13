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
    <h1><?php _e("Share ads", 'classic'); ?></h1>
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
				    <div class="ads-heading"><h2 class="title-public text-center"><?php _e("Send to a friend", 'classic'); ?></h2></div>
				    <ul id="error_list"></ul>
                <form class="form-signin" name="sendfriend" action="<?php echo osc_base_url(true); ?>" method="post">
                    <fieldset>
                        <input type="hidden" name="action" value="send_friend_post" />
                        <input type="hidden" name="page" value="item" />
                        <input type="hidden" name="id" value="<?php echo osc_esc_html( osc_item_id() ); ?>" />
                        <div class="form-group">
                        <label>
                              <?php if( osc_count_item_resources() ) { ?>
                              <?php if( osc_images_enabled_at_items() ) { ?>
                                    <img alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" class="img-rounded" src="<?php echo osc_resource_thumbnail_url(); ?>">
                              <?php } ?>
                              <?php } else { ?>
                                    <img alt="<?php echo osc_esc_html(osc_item_title()) ; ?>" class="img-rounded" src="<?php echo osc_current_web_theme_url('images/no_images.png') ; ?>">
                               <?php } ?>
                            <?php _e("Product", 'classic'); ?>:
                            <a href="<?php echo osc_item_url( ); ?>"><?php echo osc_item_title(); ?></a>
                        </label>
                        </div>
                        <?php if(osc_is_web_user_logged_in()) { ?>
                        <input type="hidden" name="yourName" value="<?php echo osc_esc_html( osc_logged_user_name() ); ?>" />
                        <input type="hidden" name="yourEmail" value="<?php echo osc_logged_user_email();?>" />
                        <?php } else { ?>
                        <div class="form-group">
                        <label for="yourName">
                            <?php _e("Your name", 'classic'); ?> </label>
                        <?php SendFriendForm::your_name(); ?>
                        </div>
                        <div class="form-group">
                        <label for="yourEmail">
                            <?php _e("Your e-mail address", 'classic'); ?> </label>
                        <?php SendFriendForm::your_email(); ?>
                        </div>
                        <?php }; ?>
                        <div class="form-group">
                        <label for="friendName">
                            <?php _e("Your friend's name", 'classic'); ?> </label>
                        <?php SendFriendForm::friend_name(); ?>
                        </div>
                        <div class="form-group">
                        <label for="friendEmail">
                            <?php _e("Your friend's e-mail address", 'classic'); ?> </label>
                        <?php SendFriendForm::friend_email(); ?>
                        </div>
                        <div class="form-group">
                        <label for="message">
                            <?php _e("Message", 'classic'); ?> </label>
                        <?php SendFriendForm::your_message(); ?>
                        </div>
                        <div class="form-group">
                        <?php osc_show_recaptcha(); ?>
                        </div>
                        <div class="form-group">
                        <button class="btn btn-primary btn-lg btn-block" type="submit"><span class="fa fa-send" aria-hidden="true"></span>
                            <?php _e("Send", 'classic'); ?> </button>
                        </div>
                    </fieldset>
                </form>
                    <?php SendFriendForm::js_validation(); ?>
				</div>
			</div>
		</div>
		</div>
</div>
<?php osc_current_web_theme_path('footer.php') ; ?>