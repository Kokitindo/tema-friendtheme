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
    $locales   = __get('locales');
    $osc_user = osc_user();
    osc_enqueue_style('jquery-ui-datepicker', osc_assets_url('css/jquery-ui/jquery-ui.css'));
    
?>
<?php osc_current_web_theme_path('header.php') ; ?>
<div class="second-area">
    <div class="midle-area">
    <h1><?php _e("Edit profile", 'classic'); ?></h1>
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
				    <div class="ads-heading"><h2 class="title-public text-center"><?php _e("Update your profile", 'classic'); ?></h2></div>
				     <?php UserForm::location_javascript(); ?>
                    <script type="text/javascript">
                    $(document).ready(function(){
                        $("#delete_account").click(function(){
                            $("#dialog-delete-account").dialog('open');
						});
						
                        $("#dialog-delete-account").dialog({
                            autoOpen: false,
                            modal: true,
                            buttons: {
                                "<?php echo osc_esc_js(__('Delete', 'classic')); ?>": function() {
                                    window.location = '<?php echo osc_base_url(true).'?page=user&action=delete&id='.osc_user_id().'&secret='.$user['s_secret']; ?>';
								},
                                "<?php echo osc_esc_js(__('Cancel', 'classic')); ?>": function() {
                                    $( this ).dialog( "close" );
								}
							}
						});
					});
				</script>
                        <form action="<?php echo osc_base_url(true); ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="page" value="user" />
                            <input type="hidden" name="action" value="profile_post" />
                            <fieldset>
                                <?php if (function_exists('show_avatar')) { ?>
                                <br><br>
                                <?php } ?>
                                <?php if (function_exists('osc_run_hook')) { osc_run_hook('user_profile_form', osc_user()); } ?>
                                <br>
                                <div class="form-group">
                                    <label class="form-label" for="name">
                                        <?php _e("Name", 'classic'); ?> </label>
                                    <?php UserForm::name_text(osc_user()); ?> 
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="email">
                                        <?php _e("Username", 'classic'); ?> </label> <span class="update">
                                <?php echo osc_user_username(); ?><br />
                                <?php if(osc_user_username()==osc_user_id()) { ?>
                                    <a href="<?php echo osc_change_user_username_url(); ?>"><?php _e("Modify username", 'classic'); ?></a>
                                <?php }; ?>
                            </span> </div>
                                <div class="form-group">
                                    <label class="form-label" for="email">
                                        <?php _e("E-mail", 'classic'); ?> </label> <span class="update">
                                <?php echo osc_user_email(); ?>
                                
                            </span> </div>
                                <div class="form-group">
                                    <label class="form-label" for="user_type">
                                        <?php _e("User type", 'classic'); ?> </label>
                                    <?php UserForm::is_company_select(osc_user()); ?> 
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phoneLand">
                                        <?php _e("Phone", 'classic'); ?> </label>
                                    <?php UserForm::phone_land_text(osc_user()); ?> 
                                </div>
                                <div class="form-group">
                                    <label for="phoneMobile">
                                        <?php _e("Cell phone", 'classic'); ?> </label>
                                    <?php UserForm::mobile_text(osc_user()); ?> 
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="country">
                                        <?php _e("Country", 'classic'); ?> *</label>
                                    <?php UserForm::country_select(osc_get_countries(), osc_user()); ?> 
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="region">
                                        <?php _e("Region", 'classic'); ?> *</label>
                                    <?php UserForm::region_select(osc_get_regions(), osc_user()); ?> 
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="city">
                                        <?php _e("City", 'classic'); ?> *</label>
                                    <?php UserForm::city_select(osc_get_cities(), osc_user()); ?> 
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="city_area">
                                        <?php _e("City area", 'classic'); ?> </label>
                                    <?php UserForm::city_area_text(osc_user()); ?> 
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="address">
                                        <?php _e("Address", 'classic'); ?> </label>
                                    <?php UserForm::address_text(osc_user()); ?>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="webSite">
                                        <?php _e("Website", 'classic'); ?> </label>
                                    <?php UserForm::website_text(osc_user()); ?> 
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="s_info">
                                        <?php _e("Description", 'classic'); ?> </label>
                                    <div class="controls">
                                        <?php UserForm::info_textarea( 's_info', osc_locale_code(), @$osc_user[ 'locale'][osc_locale_code()][ 's_info']); ?> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-lg" type="submit"><span class="fa fa-check-square" aria-hidden="true"></span>
                                        <?php _e("Update", 'classic'); ?> </button>
                                    <?php if(osc_get_preference('show_delete', 'classic_theme') == "1") { ?>
                                    <a class="btn btn-danger btn-lg" id="delete_account" type="button"><span class="fa fa-warning" aria-hidden="true"></span>
                                        <?php _e("Delete my account", 'classic'); ?> </a>
                                    <?php } ?>
                                </div>
                                <?php osc_run_hook('user_form'); ?> 
                            </fieldset>
                        </form>
                    
				    </div>
				    
				</div>
			</div>
		</div>
	</div>
	<div id="dialog-delete-account" title="<?php echo osc_esc_html(__('Delete account','classic')); ?>" class="has-form-actions">
        <div class="form-horizontal">
            <div class="form-row">
                <p>
                    <?php _e("All your listings and alerts will be removed, this action can not be undone.", 'classic');?> 
                </p>
            </div>
        </div>
    </div>
<?php osc_current_web_theme_path('footer.php'); ?> 