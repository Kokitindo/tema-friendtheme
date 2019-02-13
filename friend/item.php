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
    osc_add_hook('header','classic_follow_construct');
    osc_enqueue_script('fancybox');
    osc_register_script('fancybox', osc_current_web_theme_url('js/fancybox/jquery.fancybox.pack.js'), array('jquery'));
    osc_enqueue_style('fancybox', osc_current_web_theme_url('js/fancybox/jquery.fancybox.css'));
    osc_register_script('global-theme-js', osc_current_web_theme_js_url('main.js'), 'jquery');
    osc_enqueue_script('global-theme-js');
    osc_enqueue_script('jquery-validate');
    
?>
<?php osc_current_web_theme_path('header.php') ; ?>
<div class="second-area">
    <div class="midle-area">
    <h1><?php echo osc_item_title(); ?></h1>
    <div class="head-date"></div>
    </div>
</div>
<!-- breadcrumb -->
<?php osc_current_web_theme_path('includes/head/breadcrumb.php') ; ?>
<!-- content one -->
<div class="main-page">
		<div class="container">
			<div class="row">
			    <!-- sidebar -->
				<div class="col-md-3 col-xs-12">
				    
				    <div class="square-box">
      <div class="box-seller">
        <div class="seller-background"></div>
        <div class="seller-avatar">
          <?php if (function_exists('mdh_avatar_preview_url')) { ?>
            <a href="<?php echo osc_user_public_profile_url( osc_item_user_id() ); ?>"><img class="img-avatar" title="<?php echo osc_esc_html(__('Seller profile','classic')); ?>" alt="<?php echo osc_esc_html(__('Seller profile','classic')); ?>" src="<?php echo mdh_avatar_preview_url(osc_user_id()); ?>" /></a>
            <?php } else if (function_exists('show_avatar')) { ?>
            <?php echo show_avatar(osc_item_user_id()); ?>
            <?php } else { ?>
            <a href="<?php echo osc_user_public_profile_url( osc_item_user_id() ); ?>"><img class="img-avatar"  alt="<?php echo osc_esc_html(__('Seller profile','classic')); ?>" src="<?php echo osc_current_web_theme_url('images/avatar.png') ; ?>" /></a>
            <?php } ?>

          <h2 class="title-avatar">
            <?php if( osc_item_user_id() !=null ) { ?>
            <a class="seller-fullname" href="<?php echo osc_user_public_profile_url( osc_item_user_id() ); ?>"><?php echo osc_item_contact_name(); ?></a>
            <?php } else { ?>
            <div class="seller-fullname"><?php echo osc_item_contact_name(); ?></div>
            <?php } ?>
          </h2>

        </div>
        <div class="lefts">
            <?php if( osc_item_is_expired () ) { ?>
            <a href="#" class="btn btn-warning btn-block"><?php _e('Ads expired', 'classic'); ?></a>
        <?php } else if( ( osc_logged_user_id() == osc_item_user_id() ) && osc_logged_user_id() != 0 ) { ?>
            <a class="btn btn-info  btn-block" href="<?php echo osc_user_profile_url() ; ?>"><?php _e("Edit profile", 'classic'); ?></a>
        <?php } else if( osc_reg_user_can_contact() && !osc_is_web_user_logged_in() ) { ?>
            <a href="<?php echo osc_user_login_url(); ?>" class="btn btn-success btn-block"><?php _e('Login', 'classic'); ?></a>
        <?php } else { ?>
            <a class="btn btn-success btn-block" data-toggle="modal" data-target=".modal-sukses"><?php _e('Send mail', 'classic'); ?></a>
         <?php } ?>
        </div>
        <div class="rights">
            <?php if( osc_item_user_id() !=null ) { ?><a href="<?php echo osc_user_public_profile_url( osc_item_user_id() ); ?>" class="btn btn-info btn-block"><?php _e('View profile', 'classic'); ?></a><?php } else { ?><span class="btn btn-danger btn-block"><?php _e("Unregistered", 'classic'); ?></span><?php } ?>
        </div>
        </div>

      <div class="seller-information">
        <div class="seller-about">
          <h2 class="title-maps"><?php _e("Seller information", 'classic'); ?></h2>
          <ul class="infors">
          <?php if( osc_item_is_expired () ) { ?>
            <li>
                <?php _e("The ads is expired. You can't contact the publisher.", 'classic'); ?>
            </li>
          <?php } else if( ( osc_logged_user_id() == osc_item_user_id() ) && osc_logged_user_id() != 0 ) { ?>
            <li>
                <?php _e("It's your own ads, you can't contact the publisher.", 'classic'); ?>
            </li>
          <?php } else if( osc_reg_user_can_contact() && !osc_is_web_user_logged_in() ) { ?>
            </li>
                <?php _e("You must log in or register a new account in order to contact the advertiser", 'classic'); ?>
            </li>
          <?php } else { ?>
             <?php if( osc_item_show_email() ) { ?>
            <li><span class="sub-seller fa fa-envelope"></span><?php _e("Email", 'classic'); ?>: <?php echo osc_item_contact_email(); ?></li>
            <?php } ?>
            <?php if ( osc_user_phone() !='' ) { ?>
            <li><span class="sub-seller fa fa-phone"></span><?php _e("Phone", 'classic'); ?>: <?php echo osc_user_phone(); ?></li>
            <?php } ?>
            <?php if ( osc_user_phone_mobile() !='' ) { ?>
            <li><span class="sub-seller fa fa-mobile-phone"></span><?php _e("Cell phone", 'classic'); ?>: <?php echo osc_user_phone_mobile(); ?></li>
            <?php } ?>
            <?php if (function_exists('osc_telephone_number')) { ?>
             <li><?php osc_telephone_number(); ?></li>
            <?php } ?>
            <?php } ?>
          </ul>
        </div>
      </div>
       
    </div>
    
    <div class="modal fade modal-sukses" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <!-- modal start -->
                            <div class="contact-modal form-container form-vertical">
        <h2><?php _e("Send email", 'classic'); ?></h2>
        <?php if( osc_item_is_expired () ) { ?>
            <p>
                <?php _e("The listing is expired. You can't contact the publisher.", 'classic'); ?>
            </p>
        <?php } else if( ( osc_logged_user_id() == osc_item_user_id() ) && osc_logged_user_id() != 0 ) { ?>
            <p>
                <?php _e("It's your own listing, you can't contact the publisher.", 'classic'); ?>
            </p>
        <?php } else if( osc_reg_user_can_contact() && !osc_is_web_user_logged_in() ) { ?>
            <p>
                <?php _e("You must log in or register a new account in order to contact the advertiser", 'classic'); ?>
            </p>
            <p class="contact_button">
                <strong><a href="<?php echo osc_user_login_url(); ?>"><?php _e('Login', 'classic'); ?></a></strong>
                <strong><a href="<?php echo osc_register_account_url(); ?>"><?php _e('Register for a free account', 'classic'); ?></a></strong>
            </p>
        <?php } else { ?>
            <ul id="error_list"></ul>
            <form action="<?php echo osc_base_url(true); ?>" method="post" name="contact_form" id="contact_form" <?php if(osc_item_attachment()) { echo 'enctype="multipart/form-data"'; };?> >
                <?php osc_prepare_user_info(); ?>
                 <input type="hidden" name="action" value="contact_post" />
                    <input type="hidden" name="page" value="item" />
                    <input type="hidden" name="id" value="<?php echo osc_item_id(); ?>" />
                <div class="form-group">
                    <label class="control-label" for="yourName"><?php _e('Your name', 'classic'); ?>:</label>
                    <div class="controls"><?php ContactForm::your_name(); ?></div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="yourEmail"><?php _e('Your e-mail address', 'classic'); ?>:</label>
                    <div class="controls"><?php ContactForm::your_email(); ?></div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="phoneNumber"><?php _e('Phone number', 'classic'); ?> (<?php _e('optional', 'classic'); ?>):</label>
                    <div class="controls"><?php ContactForm::your_phone_number(); ?></div>
                </div>

                <div class="form-group">
                    <label class="control-label" for="message"><?php _e('Message', 'classic'); ?>:</label>
                    <div class="controls textarea"><?php ContactForm::your_message(); ?></div>
                </div>

                <?php if(osc_item_attachment()) { ?>
                    <div class="form-group">
                        <label class="control-label" for="attachment"><?php _e('Attachment', 'classic'); ?>:</label>
                        <div class="controls"><?php ContactForm::your_attachment(); ?></div>
                    </div>
                <?php }; ?>

                <div class="form-group">
                    <div class="controls">
                        <?php osc_run_hook('item_contact_form', osc_item_id()); ?>
                        
                        <?php osc_show_recaptcha(); ?>
                        <button type="submit" class="btn btn-success btn-block"><?php _e("Send", 'classic');?></button>
                    </div>
                </div>
            </form>
            <?php ContactForm::js_validation(); ?>
        <?php } ?>
    </div>
                            <!-- modal end -->
                        </div>
                    </div>
                </div>
                
    <div class="square-box">
				    <h2 class="title-maps"><?php _e('Location', 'classic'); ?></h2>
				    <ul class="infors">
				            <?php if ( osc_item_address() !="" ) { ?>
                            <li><?php echo osc_item_address(); ?> <?php echo osc_item_city_area(); ?></li>
                            <?php } ?>
                            <li><?php if ( osc_item_city() !="" ) { ?><?php echo osc_item_city(); ?><?php } ?> <?php if ( osc_item_region() !="" ) { ?>(<?php echo osc_item_region(); ?>)
                            <?php } ?></li>
                            
                        <?php if ( osc_item_country() !="" ) { ?> 
                            <li><?php echo osc_item_country(); ?></li>
                        <?php } ?>
                       </ul>
				    <div class="maps">
                        <?php osc_run_hook('location'); ?>
                    </div></div>
            <?php if(osc_get_preference('banner_ads', 'classic_theme')!='' ) { ?>
		    <div class="clearfix"></div>
			<div class="col-md-12 centeres margined">
            <?php echo osc_get_preference('banner_ads', 'classic_theme'); ?> 
            </div>
            <?php } ?> 
				</div>
			    <!-- content -->
				<div class="col-md-6 col-xs-12">
				    <div class="square-box">
				    <div class="ads-heading"><span class="info-row"> <span class="info-time"><i class="fa fa-clock-o"></i> <?php if ( osc_item_pub_date() != '' ) echo osc_format_date( osc_item_pub_date() ); ?></span>
				    <span class="item-location"> <i class="fa fa-map-marker"></i>  
                            <?php if ( osc_item_region() !="" ) { ?>
                            <?php echo osc_item_region(); ?>
                            <?php } ?>
                            <?php if ( osc_item_country() !="" ) { ?> 
                            (<?php echo osc_item_country(); ?>)
                        <?php } ?>
                        </span> </span> <?php if(osc_is_web_user_logged_in() && osc_logged_user_id()==osc_item_user_id()) { ?><a href="<?php echo osc_item_edit_url(); ?>"><span class="item-edit pull-right"><i class="fa fa-edit"></i> <?php _e("Edit", 'classic'); ?></span></a><?php } else { ?>
                        <a href="<?php echo osc_item_send_friend_url(); ?>"><span class="item-edit pull-right"><i class="fa fa-share"></i> <?php _e("Share", 'classic'); ?></span></a><?php } ?></div>
				    <?php if( osc_images_enabled_at_items() ) { ?>
                    <?php if( osc_count_item_resources() > 0 ) { $i = 0; ?>
                    <div class="item-photos">
                        <div class="row">
                    <div class="col-md-10 col-xs-12 big-thumb">
                        <a href="<?php echo osc_resource_url(); ?>" class="main-photo" title="<?php _e('Image', 'classic'); ?> <?php echo $i+1;?> / <?php echo osc_count_item_resources();?>">
                        <img src="<?php echo osc_resource_url(); ?>" alt="<?php echo osc_item_title(); ?>" title="<?php echo osc_item_title(); ?>" />
                        </a>
                    </div>
                    <div class="thumbs col-md-2 col-xs-12">
                        <div class="row">
                        <?php for ( $i = 0; osc_has_item_resources(); $i++ ) { ?>
                        <div class="col-md-12 col-sm-3 col-xs-4">
                        <a href="<?php echo osc_resource_url(); ?>" class="fancybox" data-fancybox-group="group" title="<?php _e('Image', 'classic'); ?> <?php echo $i+1;?> / <?php echo osc_count_item_resources();?>">
                        <img src="<?php echo osc_resource_thumbnail_url(); ?>" alt="<?php echo osc_item_title(); ?>" title="<?php echo osc_item_title(); ?>" />
                        </a>
                        </div>
                        <?php } ?>
                        </div>
                    </div>
                    </div></div>
                    <?php } ?>
                    <?php } ?>
                    
                    <div id="description" class="col-md-12 col-xs-12">
                        <div class="row">
                        <h3 class="ads-title"><?php _e('Description', 'classic'); ?></h3>
                        <p><?php echo osc_item_description(); ?></p>
                        <h3 class="ads-title"><?php _e('More information', 'classic'); ?></h3>
                        <div class="metas">
                        <div class="metas-area">
                            <div class="meta-list">
                                <div class="inc">
                                    <div class="left"><?php _e("Categories", 'classic'); ?></div>
                                    <div class="right"><?php echo osc_item_category(); ?></div>
                                </div>
                            </div>
                            <div class="meta-list">
                                <div class="inc">
                                    <div class="left"><?php _e("Id", 'classic'); ?></div>
                                    <div class="right">#<?php echo osc_item_id(); ?></div>
                                </div>
                            </div>
                            <div class="meta-list">
                                <div class="inc">
                                    <div class="left"><?php _e("Views", 'classic'); ?></div>
                                    <div class="right"><?php echo osc_item_views(); ?></div>
                                </div>
                            </div>
                            
                            <?php if ( osc_item_mod_date() !== '' ) { ?>
                            <div class="meta-list">
                                <div class="inc">
                                    <div class="left"><?php _e("Modified", 'classic'); ?></div>
                                    <div class="right"><?php echo osc_format_date( osc_item_mod_date() );?></div>
                                </div>
                            </div>
                            <?php }; ?>
                            
                            <?php if( osc_count_item_meta() >= 1 ) { ?>
                            <div class="meta_list">
                            <?php while ( osc_has_item_meta() ) { ?>
                            <?php if(osc_item_meta_value()!='') { ?>
                             <div class="inc">
                                <div class="left"><?php echo osc_item_meta_name(); ?></div>
                                <div class="right"><?php echo osc_item_meta_value(); ?></div>
                            </div>
                            <?php } ?>
                            <?php } ?>
                            </div>
                            <?php } ?>
                            
                        </div>
                    </div>
        
                   <?php osc_run_hook('item_detail', osc_item() ); ?>
                    
                </div></div>
                
                <?php if( osc_comments_enabled() ) { ?>
        <?php if( osc_reg_user_post_comments () && osc_is_web_user_logged_in() || !osc_reg_user_post_comments() ) { ?>
        <div id="comments" class="col-md-12 col-xs-12">
            <div class="row">
            <h3 class="ads-title"><?php _e('Comments', 'classic'); ?></h3>
            <ul id="comment_error_list"></ul>
            <?php CommentForm::js_validation(); ?>
            <?php if( osc_count_item_comments() >= 1 ) { ?>
                <div class="comments_list">
                    <?php while ( osc_has_item_comments() ) { ?>
                        <div class="comment">
                            <h3><strong><?php echo osc_comment_title(); ?></strong></h3>
                            <p class="events"><?php echo nl2br( osc_comment_body() ); ?> </p>
                            <?php if ( osc_comment_user_id() && (osc_comment_user_id() == osc_logged_user_id()) ) { ?>
                            <p>
                                <a rel="nofollow" href="<?php echo osc_delete_comment_url(); ?>" title="<?php _e('Delete your comment', 'classic'); ?>"><?php _e('Delete', 'classic'); ?></a>
                            </p>
                            <?php } ?>
                            <em><?php _e("by", 'classic'); ?> <?php echo osc_comment_author_name(); ?></em>
                        </div>
                    <?php } ?>
                    <div class="paginate" style="text-align: right;">
                        <?php echo osc_comments_pagination(); ?>
                    </div>
                </div>
            <?php } else { ?>
            <div class="comments_list"><div class="alert alert-info alert-dismissable"><?php _e('No comments added yet. Be first to leave comment!', 'classic'); ?></div></div>
            <?php } ?>
            <div class="form-container form-horizontal">
                <div class="resp-wrapper col-md-12 col-xs-12">
                    <form action="<?php echo osc_base_url(true); ?>" method="post" name="comment_form" id="comment_form">
                        <fieldset>

                            <input type="hidden" name="action" value="add_comment" />
                            <input type="hidden" name="page" value="item" />
                            <input type="hidden" name="id" value="<?php echo osc_item_id(); ?>" />
                            <?php if(osc_is_web_user_logged_in()) { ?>
                                <input type="hidden" name="authorName" value="<?php echo osc_esc_html( osc_logged_user_name() ); ?>" />
                                <input type="hidden" name="authorEmail" value="<?php echo osc_logged_user_email();?>" />
                            <?php } else { ?>
                                <div class="form-group">
                                    <label class="control-label" for="authorName"><?php _e('Your name', 'classic'); ?></label>
                                    <div class="controls">
                                        <?php CommentForm::author_input_text(); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="authorEmail"><?php _e('Your e-mail', 'classic'); ?></label>
                                    <div class="controls">
                                        <?php CommentForm::email_input_text(); ?>
                                    </div>
                                </div>
                            <?php }; ?>
                            <div class="form-group">
                                <label class="control-label" for="title"><?php _e('Title', 'classic'); ?></label>
                                <div class="controls">
                                    <?php CommentForm::title_input_text(); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="body"><?php _e('Comment', 'classic'); ?></label>
                                <div class="controls textarea">
                                    <?php CommentForm::body_input_textarea(); ?>
                                </div>
                            </div>
                            <div class="form-group actions">
                                <button class="btn btn-success btn-block" type="submit"><?php _e('Submit comment', 'classic'); ?></button>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <?php } ?>
        <?php } ?>
                    
				    </div>
				    </div>
				<!-- sidebar -->
				<div class="col-md-3 col-xs-12">
				    
				    <div class="square-box">
				        <div class="pricess"><?php if( osc_price_enabled_at_items() ) { ?><span class="price"><?php echo osc_item_formated_price(); ?></span> <?php } ?></div>
                     <div class="metas">
                        <div class="metas-area">
                            
                        </div>
                    </div>

    </div>
				
				<div class="square-box">
	    
	<!-- Useful info -->
    <div id="useful_info" class="bordered-box">
        <h2 class="title-maps"><?php _e('Useful information', 'classic'); ?></h2>
        <ul>
            <li><?php _e('Avoid scams by acting locally or paying with PayPal', 'classic'); ?></li>
            <li><?php _e('Never pay with Western Union, Moneygram or other anonymous payment services', 'classic'); ?></li>
            <li><?php _e('Don\'t buy or sell outside of your country. Don\'t accept cashier cheques from outside your country', 'classic'); ?></li>
            <li><?php _e('This site is never involved in any transaction, and does not handle payments, shipping, guarantee transactions, provide escrow services, or offer "buyer protection" or "seller certification"', 'classic'); ?></li>
        </ul>
    </div>
    </div>
    <!-- Related ads -->
     <?php related_listings(); ?>
        <?php if( osc_count_items() > 0 ) { ?>
    <div class="square-box">
    <div id="useful_infos" class="bordered-box">
        <div class="similar_ads">
           <h2 class="title-maps"><?php _e('Related ads', 'classic'); ?></h2>
            <?php
            View::newInstance()->_exportVariableToView("listType", 'items');
            osc_current_web_theme_path('related.php');
            ?>
            <div class="clear"></div>
        </div>
   
        
    </div>
	    
	</div> <?php } ?>
	<?php if(osc_get_preference('sidebar_ads', 'classic_theme')!='' ) { ?>
		    <div class="clearfix"></div>
			<div class="col-md-12 centeres margined">
            <?php echo osc_get_preference('sidebar_ads', 'classic_theme'); ?> 
            </div>
        <?php } ?> 
				</div>
				
			</div>
		</div>
</div>
<?php osc_current_web_theme_path('footer.php') ; ?>