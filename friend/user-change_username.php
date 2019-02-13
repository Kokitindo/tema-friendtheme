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
    <h1><?php _e("Username", 'classic'); ?></h1>
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
				    <div class="ads-heading"><h2 class="title-public text-center"><?php _e("Change your username", 'classic'); ?></h2></div>
				    <ul id="error_list"></ul>
                        <form id="change-username" action="<?php echo osc_base_url(true); ?>" method="post">
                            <input type="hidden" name="page" value="user" />
                            <input type="hidden" name="action" value="change_username_post" />
                            <fieldset>
                                <div class="form-group">
                                    <label class="form-label" for="s_username">
                                        <?php _e("Username", 'classic'); ?> </label>
                                        
                                    <input type="text" name="s_username" id="s_username" value="" /> </div>
                                    
                                <p> <span class="help-box"><?php _e("WARNING: Once set, you will not be able to change your username again. Choose wisely.", 'classic'); ?></span> </p>
                                <div style="clear:both;"></div>
                                <div id="available"></div>
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