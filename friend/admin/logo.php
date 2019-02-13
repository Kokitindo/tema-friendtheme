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
?>
<?php if ( (!defined('ABS_PATH')) ) exit('ABS_PATH is not loaded. Direct access is not allowed.'); ?>
<?php if ( !OC_ADMIN ) exit('User access is not allowed.'); ?>
<?php
    if(Params::getParam("action_specific")!='') {
        switch(Params::getParam("action_specific")) {
             
            case('upload_logo_images'):
                $package = Params::getFiles("logo");

                if ($package['error'] == UPLOAD_ERR_OK) {
                    if( move_uploaded_file($package['tmp_name'], WebThemes::newInstance()->getCurrentThemePath() . "images/logo.png" ) ){
                        osc_add_flash_ok_message(__("The image has been uploaded correctly","classic"), 'admin');
                    } else {
                        osc_add_flash_error_message(__("An error has occurred, please try again","classic"), 'admin');
                    }
                } else {
                    osc_add_flash_error_message(__("An error has occurred, please try again","classic"), 'admin');
                }
            break;
            case('upload_favicon_images'):
                $package = Params::getFiles("favicon");

                if ($package['error'] == UPLOAD_ERR_OK) {
                    if( move_uploaded_file($package['tmp_name'], WebThemes::newInstance()->getCurrentThemePath() . "images/favicon.png" ) ){
                        osc_add_flash_ok_message(__("The image has been uploaded correctly","classic"), 'admin');
                    } else {
                        osc_add_flash_error_message(__("An error has occurred, please try again","classic"), 'admin');
                    }
                } else {
                    osc_add_flash_error_message(__("An error has occurred, please try again","classic"), 'admin');
                }
            break;
            case('upload_logo_cover'):
                $package = Params::getFiles("covers");

                if ($package['error'] == UPLOAD_ERR_OK) {
                    if( move_uploaded_file($package['tmp_name'], WebThemes::newInstance()->getCurrentThemePath() . "images/pattern.png" ) ){
                        osc_add_flash_ok_message(__("The image has been uploaded correctly","classic"), 'admin');
                    } else {
                        osc_add_flash_error_message(__("An error has occurred, please try again","classic"), 'admin');
                    }
                } else {
                    osc_add_flash_error_message(__("An error has occurred, please try again","classic"), 'admin');
                }
            break;
            case('remove_logo'):
                if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/logo.png" ) ) {
                    unlink( WebThemes::newInstance()->getCurrentThemePath() . "images/logo.png" );
                    osc_add_flash_ok_message(__("The image has been removed","classic"), 'admin');
                }else{
                    osc_add_flash_error_message(__("Image not found","classic"), 'admin');
                }
            break;
            case('remove_favicon'):
                if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/favicon.png" ) ) {
                    unlink( WebThemes::newInstance()->getCurrentThemePath() . "images/favicon.png" );
                    osc_add_flash_ok_message(__("The image has been removed","classic"), 'admin');
                }else{
                    osc_add_flash_error_message(__("Image not found","classic"), 'admin');
                }

            break;
            case('remove_covers'):
                if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/pattern.png" ) ) {
                    unlink( WebThemes::newInstance()->getCurrentThemePath() . "images/pattern.png" );
                    osc_add_flash_ok_message(__("The image has been removed","classic"), 'admin');
                }else{
                    osc_add_flash_error_message(__("Image not found","classic"), 'admin');
                }
            break;
        }
    }
?>
<?php osc_show_flash_message('admin') ; ?>
<?php if(is_writable( WebThemes::newInstance()->getCurrentThemePath() ."images/") )  { ?>
<h2 class="render-title"><?php _e("Settings images", 'classic'); ?></h2>
<div class="satu-area">
        <?php if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/logo.png" ) ) {?>
        <p><?php _e("Preview", 'classic'); ?></p> 
        <img alt="<?php echo osc_page_title(); ?>" src="<?php echo osc_current_web_theme_url('images/logo.png');?>" />
        <!-- form start -->
        <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/classic/admin/settings.php#tab-2');?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action_specific" value="remove_logo" />
            <fieldset>
                <div class="uploader">
                <input id="button_remove" class="btn btn-red" type="submit" value="<?php echo osc_esc_html(__('Remove','classic')); ?>" /> 
                </div><p><?php _e("Reset your browser cache if your logo images not changed.", 'classic'); ?></p>
            </fieldset>
        </form>
        <?php } else { ?>
        <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/classic/admin/settings.php#tab-2');?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action_specific" value="upload_logo_images" />
            <fieldset>
                <div class="form-horizontal">
                    <div class="form-row">
                        <div class="form-label">
                            <label for="package"><?php _e("Recommended size", 'classic'); ?><br><?php _e("360 x 88", 'classic'); ?> <?php _e("png,gif,jpg", 'classic'); ?></label>
                        </div>
                        <div class="form-controls">
                            <input type="file" name="logo" id="package" /> 
                            <div class="uploader">
                            <input id="button_save" class="btn btn-submit" type="submit" value="<?php echo osc_esc_html(__('Upload','classic')); ?>" /> 
                        </div>
                        </div>
                        
                    </div>
                </div>
            </fieldset>
        </form>
        <p><?php _e("You not upload any images", 'classic');?> </p>
        <?php } ?> 
</div>
<h2 class="render-title"><?php _e("Favicon images", 'classic'); ?></h2>
<div class="satu-area">
        <?php if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/favicon.png" ) ) {?>
        <p>
            <?php _e("Preview", 'classic'); ?> </p> <img alt="<?php echo osc_page_title(); ?>" src="<?php echo osc_current_web_theme_url('images/favicon.png');?>" />
        <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/classic/admin/settings.php#tab-2');?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action_specific" value="remove_favicon" />
            <fieldset>
                <div class="uploader">
                <input id="button_remove" class="btn btn-red" type="submit" value="<?php echo osc_esc_html(__('Remove','classic')); ?>" /> 
                </div><p><?php _e("Reset your browser cache if your favicon images not changed.", 'classic'); ?></p>
            </fieldset>
        </form>
        <?php } else { ?>
        <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/classic/admin/settings.php#tab-2');?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action_specific" value="upload_favicon_images" />
            <fieldset>
                <div class="form-horizontal">
                    <div class="form-row">
                        <div class="form-label">
                            <label for="package"><?php _e("Recommended size", 'classic'); ?><br><?php _e("100 x 100", 'classic'); ?> <?php _e("png,gif,jpg", 'classic'); ?></label>
                        </div>
                        <div class="form-controls">
                            <input type="file" name="favicon" id="package" /> 
                            <div class="uploader">
                            <input id="button_save" class="btn btn-submit" type="submit" value="<?php echo osc_esc_html(__('Upload','classic')); ?>" /> 
                            </div>
                        </div>
                        
                    </div>
                </div>
            </fieldset>
        </form>
        <p><?php _e("You not upload any images", 'classic');?> </p>
        <?php } ?>
</div>
<h2 class="render-title"><?php _e("Background pattern images", 'classic'); ?></h2>
<div class="satu-area">
        <?php if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/pattern.png" ) ) {?>
        <p><?php _e("Preview", 'classic'); ?> </p> 
        <img alt="<?php echo osc_page_title(); ?>" src="<?php echo osc_current_web_theme_url('images/pattern.png');?>" />
        <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/classic/admin/settings.php#tab-2');?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action_specific" value="remove_covers" />
            <fieldset>
                <div class="uploader">
                <input id="button_remove" class="btn btn-red" type="submit" value="<?php echo osc_esc_html(__('Remove','classic')); ?>" /> 
                </div><p><?php _e("Reset your browser cache if your background images not changed.", 'classic'); ?></p>
            </fieldset>
        </form>
        <?php } else { ?>
        <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/classic/admin/settings.php#tab-2');?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action_specific" value="upload_logo_cover" />
            <fieldset>
                <div class="form-horizontal">
                    <div class="form-row">
                        <div class="form-label">
                            <label for="package"><?php _e("Pattern images", 'classic'); ?><br><a target="_blank" href="http://bgrepeat.com/">Download pattern</a></label>
                        </div>
                        <div class="form-controls">
                            <input type="file" name="covers" id="package" /> 
                        <div class="uploader">
                            <input id="button_save" class="btn btn-submit" type="submit" value="<?php echo osc_esc_html(__('Upload','classic')); ?>" /> 
                        </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
        <p><?php _e("You not upload any images", 'classic');?> </p>
        <?php } ?>
</div>
<div style="clear: both;"></div>
             <?php } else { ?>
<div id="flash_message">
                <p>
                    <?php
                        $msg  = sprintf(__('The images folder %s is not writable on your server','classic'), WebThemes::newInstance()->getCurrentThemePath() ."images/" ) .", ";
                        $msg .= __('Osclass can\'t upload logo image from the administration panel','classic') . '. ';
                        $msg .= __('Please make the mentioned images folder writable','classic') . '.';
                        echo $msg;
                    ?>
                </p>
                <p><?php _e("To make a directory writable under UNIX execute this command from the shell",'classic'); ?></p>
                <p class="no_way">
                    chmod a+w <?php echo WebThemes::newInstance()->getCurrentThemePath() ."images/" ; ?>
                </p>
            </div>
            <?php } ?>