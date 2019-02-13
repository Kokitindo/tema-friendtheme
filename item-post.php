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
    osc_enqueue_style('jquery-ui-custom', osc_current_web_theme_js_url('jquery-ui/jquery-ui-1.10.2.custom.css'));
    osc_enqueue_style('tabs', osc_current_web_theme_url('css/tabs.css'));
    osc_register_script('tab-theme-js', osc_current_web_theme_js_url('tabber-minimized.js'), 'jquery');
    osc_enqueue_script('tab-theme-js');
    $action = 'item_add_post';
    $edit = false;
    if(Params::getParam('action') == 'item_edit'){
        $action = 'item_edit_post';
        $edit = true;
    }
?>
<?php osc_current_web_theme_path('header.php') ; ?>
<div class="second-area">
    <div class="midle-area">
    <h1><?php _e('Post new ads', 'classic'); ?></h1>
    <div class="head-date"></div>
    </div>
</div>
<!-- content one -->
<div class="main-page">
		<div class="container">
			<div class="row">
			    <!-- sidebar -->
				<div class="col-md-8 centered">
				    
                <form name="item" action="<?php echo osc_base_url(true);?>" method="post" enctype="multipart/form-data" id="item-post">
                    <fieldset>
                    <input type="hidden" name="action" value="<?php echo $action; ?>" />
                        <input type="hidden" name="page" value="item" />
                    <?php if($edit){ ?>
                        <input type="hidden" name="id" value="<?php echo osc_item_id();?>" />
                        <input type="hidden" name="secret" value="<?php echo osc_item_secret();?>" />
                    <?php } ?>
                       <div class="square-box">
				       <div class="ads-heading"><h2 class="title-public text-center"><?php _e('General Information', 'classic'); ?></h2></div>
				       <ul id="error_list"></ul>
                        <div class="form-group">
                            <label class="form-label" for="select_1"><?php _e('Category', 'classic'); ?></label>
                            <div class="forms">
                                <?php ItemForm::category_select(null, null, __('Select a category', 'classic')); ?>
                            </div>
                        </div>
                        <?php if(osc_get_preference('multi_lang', 'classic_theme')=="1" ) { ?>
                        <div class="form-group">
                             <?php ItemForm::multilanguage_title_description(); ?>
                        </div>
                        <?php } else { ?>
                        <div class="form-group">
                            <label class="form-label" for="title[<?php echo osc_locale_code(); ?>]"><?php _e('Title', 'classic'); ?></label>
                            <div class="forms">
                                <?php ItemForm::title_input('title',osc_locale_code(), osc_esc_html( classic_item_title() )); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="description[<?php echo osc_locale_code(); ?>]"><?php _e('Description', 'classic'); ?></label>
                            <div class="forms">
                                <?php ItemForm::description_textarea('description',osc_locale_code(), osc_esc_html( classic_item_description() )); ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if( osc_price_enabled_at_items() ) { ?>
                        <div class="form-group form-group-price">
                            <label class="form-label" for="price"><?php _e('Price', 'classic'); ?></label>
                            <div class="forms clearfix">
                                <div class="lefts">
                                <?php ItemForm::price_input_text(); ?>
                                </div>
                                <div class="rights">
                                <?php ItemForm::currency_select(); ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if( osc_images_enabled_at_items() ) {
                            ItemForm::ajax_photos();
                         } ?>
                         </div>
                         <div class="square-box">
				    <div class="ads-heading"><h2 class="title-public text-center"><?php _e('Ads Location', 'classic'); ?></h2></div>
                        <div class="box location">

                            <div class="form-group">
                                <label class="control-label" for="countryId">
                                    <?php _e("Country", 'classic'); ?> *</label>
                                    <?php ItemForm::country_select(); ?> 
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="regionId">
                                    <?php _e("Region", 'classic'); ?> *</label>
                                    <?php if($edit){ ?>
                                    <?php ItemForm::region_select() ; ?>
                                    <?php } else { ?>
                                    <?php ItemForm::region_select(osc_get_regions(), osc_user()); ?>
                                    <?php } ?> 
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="cityId">
                                    <?php _e("City", 'classic'); ?> *</label>
                                    <?php if($edit){ ?>
                                    <?php ItemForm::city_select() ; ?>
                                    <?php } else { ?>
                                    <?php ItemForm::city_select(osc_get_cities(), osc_user()); ?>
                                    <?php } ?> 
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="cityArea"><?php _e('City Area', 'classic'); ?></label>
                                <div class="forms">
                                    <?php ItemForm::city_area_text(osc_user()); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="address"><?php _e('Address', 'classic'); ?></label>
                                <div class="forms">
                                  <?php ItemForm::address_text(osc_user()); ?>
                                </div>
                            </div>
                            <?php if (function_exists('osc_set_telephone_number')) { ?>
                                <div class="form-group phone">
                                <div class="controls">
                                <?php osc_set_telephone_number(); ?>
                                </div></div>
                            <?php } ?>
                        </div>
                        <!-- seller info -->
                        <?php if(!osc_is_web_user_logged_in() ) { ?>
                        </div>
                        <div class="square-box">
				        <div class="ads-heading"><h2 class="title-public text-center"><?php _e("Seller's information", 'classic'); ?></h2></div>
                        <div class="box seller_info">
                            <div class="form-group">
                                <label class="form-label" for="contactName"><?php _e('Name', 'classic'); ?></label>
                                <div class="forms">
                                    <?php ItemForm::contact_name_text(); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="contactEmail"><?php _e('E-mail', 'classic'); ?></label>
                                <div class="forms">
                                    <?php ItemForm::contact_email_text(); ?>
                                </div>
                            </div>
                        
                        </div>
                        <?php
                        }
                        if($edit) {
                            ItemForm::plugin_edit_item();
                        } else {
                            ItemForm::plugin_post_item();
                        }
                        ?>
                        <div class="form-group">
                                <div class="forms checkbox">
                                    <div class="chk"><?php ItemForm::show_email_checkbox(); ?><label for="showEmail"><?php _e('Show e-mail on the listing page', 'classic'); ?></label>
                                </div>
                                </div>
                        </div>
                        <div class="form-group">
                            <?php if( osc_recaptcha_items_enabled() ) { ?>
                                <div class="forms">
                                    <?php osc_show_recaptcha(); ?>
                                </div>
                            <?php }?>
                            <div class="forms">
                                <button type="submit" class="btn btn-success btn-lg btn-block"><?php if($edit) { _e("Update", 'classic'); } else { _e("Publish", 'classic'); } ?></button>
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
<?php ItemForm::location_javascript(); ?>
<script type="text/javascript">
            $('#price').bind('hide-price', function(){
                $('.form-group-price').hide();
            });

            $('#price').bind('show-price', function(){
                $('.form-group-price').show();
            });

    <?php if(osc_locale_thousands_sep()!='' || osc_locale_dec_point() != '') { ?>
    $().ready(function(){
        $("#price").blur(function(event) {
            var price = $("#price").prop("value");
            <?php if(osc_locale_thousands_sep()!='') { ?>
            while(price.indexOf('<?php echo osc_esc_js(osc_locale_thousands_sep());  ?>')!=-1) {
                price = price.replace('<?php echo osc_esc_js(osc_locale_thousands_sep());  ?>', '');
            }
            <?php }; ?>
            <?php if(osc_locale_dec_point()!='') { ?>
            var tmp = price.split('<?php echo osc_esc_js(osc_locale_dec_point())?>');
            if(tmp.length>2) {
                price = tmp[0]+'<?php echo osc_esc_js(osc_locale_dec_point())?>'+tmp[1];
            }
            <?php }; ?>
            $("#price").prop("value", price);
        });
    });
    <?php }; ?>
</script>
<?php osc_current_web_theme_path('footer.php') ; ?>