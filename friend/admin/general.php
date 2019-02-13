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
		       <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/classic/admin/settings.php'); ?>" method="post">
                  <input type="hidden" name="action_specific" value="settings" />
                  <input type="hidden" name="specific" value="themes" />
                    <fieldset>
                    <div id="general">
					<h2 class="render-title">
					  <?php _e('General Settings',  'classic'); ?>
					</h2>
					<div class="satu-area">
					    
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Logo text', 'classic'); ?> </div>
                            <div class="form-controls">
                                <input type="text" class="xlarge" name="logo_text" placeholder="<?php echo osc_esc_html(__('Classic', 'classic')); ?>" value="<?php echo osc_esc_html( osc_get_preference('logo_text', 'classic_theme') ); ?>">
                                <div class="help-box">
                                    <?php _e('Logo text available if you not upload logo images', 'classic'); ?> </div>
                            </div>
                        </div>
					</div>
					    
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Search Placeholder', 'classic'); ?> </div>
                            <div class="form-controls">
                                <input type="text" class="xlarge" name="keyword_placeholder" placeholder="<?php echo osc_esc_html(__('Search', 'classic')); ?>" value="<?php echo osc_esc_html( osc_get_preference('keyword_placeholder', 'classic_theme') ); ?>"> </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Welcome text', 'classic'); ?> </div>
                            <div class="form-controls">
                                <textarea class="sedang" name="welcome_text" placeholder="<?php echo osc_esc_html(__('Welcome to classifieds', 'classic')); ?>"><?php echo osc_esc_html( osc_get_preference('welcome_text', 'classic_theme') ); ?></textarea>
                                <div class="help-box">
                                    <?php _e('Insert your welcome text', 'classic'); ?> </div>
                            </div>
                        </div>
					</div>
					<div class="form-horizontal">
					<div class="form-row">
                            <div class="form-label">
                                <?php _e('Header search button', 'classic'); ?> </div>
                            <div class="form-controls">
                                <?php $show_three=osc_esc_html( osc_get_preference('show_three', 'classic_theme') ); ?>
                                <select name="show_three">
                                    <option value="show" <?php if($show_three=='show' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Show', 'classic'); ?> </option>
                                    <option value="hide" <?php if($show_three=='hide' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Hide', 'classic'); ?> </option>
                                </select>
                            </div>
                        </div>
					</div>
					<div class="form-horizontal">
					<div class="form-row">
                            <div class="form-label">
                                <?php _e('Show tab content', 'classic'); ?> </div>
                            <div class="form-controls">
                                <?php $tab_ads=osc_esc_html( osc_get_preference('tab_ads', 'classic_theme') ); ?>
                                <select name="tab_ads">
                                    <option value="premium" <?php if($tab_ads=='premium' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Premium ads', 'classic'); ?> </option>
                                    <option value="latest" <?php if($tab_ads=='latest' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Latest ads', 'classic'); ?> </option>
                                    <option value="category" <?php if($tab_ads=='category' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('All category', 'classic'); ?> </option>
                                </select>
                            </div>
                        </div>
					</div>
					<div class="form-horizontal">
					<div class="form-row">
                            <div class="form-label">
                                <?php _e('Show category count', 'classic'); ?> </div>
                            <div class="form-controls">
                                <?php $show_count=osc_esc_html( osc_get_preference('show_count', 'classic_theme') ); ?>
                                <select name="show_count">
                                    <option value="show" <?php if($show_count=='show' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Show', 'classic'); ?> </option>
                                    <option value="hide" <?php if($show_count=='hide' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Hide', 'classic'); ?> </option>
                                </select>
                            </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Premium ads count', 'classic'); ?> </div>
                            <div class="form-controls">
                                <input type="text" class="xlarge" name="premium_ads" placeholder="<?php echo osc_esc_html(__('6', 'classic')); ?>" value="<?php echo osc_esc_html( osc_get_preference('premium_ads', 'classic_theme') ); ?>"> </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Latest ads count', 'classic'); ?> </div>
                            <div class="form-controls">
                                <input type="text" class="xlarge" name="latest_ads" placeholder="<?php echo osc_esc_html(__('6', 'classic')); ?>" value="<?php echo osc_esc_html( osc_get_preference('latest_ads', 'classic_theme') ); ?>"> </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Search premium ads', 'classic'); ?> </div>
                            <div class="form-controls">
                                <input type="text" class="xlarge" name="search_ads" placeholder="<?php echo osc_esc_html(__('6', 'classic')); ?>" value="<?php echo osc_esc_html( osc_get_preference('search_ads', 'classic_theme') ); ?>"> </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Related ads count', 'classic'); ?> </div>
                            <div class="form-controls">
                                <input type="text" class="xlarge" name="related_ads" placeholder="<?php echo osc_esc_html(__('6', 'classic')); ?>" value="<?php echo osc_esc_html( osc_get_preference('related_ads', 'classic_theme') ); ?>"> </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Footer Copyright', 'classic'); ?> </div>
                            <div class="form-controls">
                                <textarea class="sedang" name="footer_copyright" placeholder="<?php echo osc_esc_html(__('Copyright All right reserved', 'classic')); ?>"><?php echo osc_esc_html( osc_get_preference('footer_copyright', 'classic_theme') ); ?></textarea>
                                <div class="help-box">
                                    <?php _e('Copyright text on footer.', 'classic'); ?> </div>
                            </div>
                        </div>
					</div>
					</div>
					<h2 class="render-title">
					  <?php _e('Element settings',  'classic'); ?>
					</h2>
					<div class="satu-area">
					 <div class="form-horizontal">
                        <div class="form-row">
                            <div class="form-label">
                                <?php _e('Show lists as', 'classic'); ?> </div>
                            <div class="form-controls">
                                <select name="defaultShowAs@all">
                                    <option value="gallery" <?php if(classic_default_show_as()=='gallery' ){ echo 'selected="selected"' ;}?>>
                                        <?php _e('Gallery', 'classic'); ?> </option>
                                    <option value="list" <?php if(classic_default_show_as()=='list' ){ echo 'selected="selected"' ;}?>>
                                        <?php _e('List', 'classic'); ?> </option>
                                    <option value="masonry" <?php if(classic_default_show_as()=='masonry' ){ echo 'selected="selected"' ;}?>>
                                        <?php _e('Large gallery', 'classic'); ?> </option>
                                </select>
                            </div>
                        </div>
                    </div>
					<div class="form-horizontal">
					<div class="form-row">
                            <div class="form-label">
                                <?php _e('Search form', 'classic'); ?> </div>
                            <div class="form-controls">
                                <?php $show_search=osc_esc_html( osc_get_preference('show_search', 'classic_theme') ); ?>
                                <select name="show_search">
                                    <option value="region" <?php if($show_search=='region' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Region', 'classic'); ?> </option>
                                    <option value="city" <?php if($show_search=='city' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('City', 'classic'); ?> </option>
                                    <option value="country" <?php if($show_search=='country' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Country', 'classic'); ?> </option>
                                    <option value="category" <?php if($show_search=='category' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Category', 'classic'); ?> </option>
                                </select>
                            </div>
                        </div>
					</div>
					<div class="form-horizontal">
					<div class="form-row">
                            <div class="form-label">
                                <?php _e('Show main category images', 'classic'); ?> </div>
                            <div class="form-controls">
                                <?php $show_four=osc_esc_html( osc_get_preference('show_four', 'classic_theme') ); ?>
                                <select name="show_four">
                                    <option value="show" <?php if($show_four=='show' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Show', 'classic'); ?> </option>
                                    <option value="hide" <?php if($show_four=='hide' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Hide', 'classic'); ?> </option>
                                </select>
                            </div>
                        </div>
					</div>
					<div class="form-horizontal">
					<div class="form-row">
                            <div class="form-label">
                                <?php _e('Show footer statistic', 'classic'); ?> </div>
                            <div class="form-controls">
                                <?php $show_statistic=osc_esc_html( osc_get_preference('show_statistic', 'classic_theme') ); ?>
                                <select name="show_statistic">
                                    <option value="show" <?php if($show_statistic=='show' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Show', 'classic'); ?> </option>
                                    <option value="hide" <?php if($show_statistic=='hide' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Hide', 'classic'); ?> </option>
                                </select>
                            </div>
                        </div>
					</div>
					<div class="form-horizontal">
					<div class="form-row">
                            <div class="form-label">
                                <?php _e('User delete account button', 'classic'); ?> </div>
                            <div class="form-controls">
                                <?php $show_delete=osc_esc_html( osc_get_preference('show_delete', 'classic_theme') ); ?>
                                <select name="show_delete">
                                    <option value="1" <?php if($show_delete=='1' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Show', 'classic'); ?> </option>
                                    <option value="0" <?php if($show_delete=='0' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Hide', 'classic'); ?> </option>
                                </select>
                            </div>
                        </div>
					</div>
					<div class="form-horizontal">
					<div class="form-row">
                            <div class="form-label">
                                <?php _e('Item post multilanguages', 'classic'); ?> </div>
                            <div class="form-controls">
                                <?php $multi_lang=osc_esc_html( osc_get_preference('multi_lang', 'classic_theme') ); ?>
                                <select name="multi_lang">
                                    <option value="1" <?php if($multi_lang=='1' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Yes', 'classic'); ?> </option>
                                    <option value="0" <?php if($multi_lang=='0' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('No', 'classic'); ?> </option>
                                </select>
                            </div>
                        </div>
					</div>
					</div>
						<h2 class="render-title">
					  <?php _e('Footer widget',  'classic'); ?>
					</h2>
					<div class="satu-area">
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Widget title', 'classic'); ?> <?php _e('1', 'classic'); ?> </div>
                            <div class="form-controls">
                                <input type="text" class="xlarge" name="title_one" placeholder="<?php echo osc_esc_html(__('Your title', 'classic')); ?>" value="<?php echo osc_esc_html( osc_get_preference('title_one', 'classic_theme') ); ?>"> </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Widget content', 'classic'); ?> <?php _e('1', 'classic'); ?></div>
                            <div class="form-controls">
                                <textarea class="sedang" name="widget_one" placeholder="<?php echo osc_esc_html(__('Insert your widget content', 'classic')); ?>"><?php echo osc_esc_html( osc_get_preference('widget_one', 'classic_theme') ); ?></textarea>
                                <div class="help-box">
                                    <?php _e('Insert your title and widget', 'classic'); ?> </div>
                            </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Widget title', 'classic'); ?> <?php _e('2', 'classic'); ?> </div>
                            <div class="form-controls">
                                <input type="text" class="xlarge" name="title_two" placeholder="<?php echo osc_esc_html(__('Your title', 'classic')); ?>" value="<?php echo osc_esc_html( osc_get_preference('title_two', 'classic_theme') ); ?>"> </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Widget content', 'classic'); ?> <?php _e('2', 'classic'); ?></div>
                            <div class="form-controls">
                                <textarea class="sedang" name="widget_two" placeholder="<?php echo osc_esc_html(__('Insert your widget content', 'classic')); ?>"><?php echo osc_esc_html( osc_get_preference('widget_two', 'classic_theme') ); ?></textarea>
                                <div class="help-box">
                                    <?php _e('Insert your title and widget', 'classic'); ?> </div>
                            </div>
                        </div>
					</div>
					</div>
						<h2 class="render-title">
					  <?php _e('Color settings',  'classic'); ?>
					</h2>
					<div class="satu-area" id="color_schemes">
					 <div class="form-horizontal">
					<div class="form-row">
                            <div class="form-label">
                                <?php _e('Custom color', 'classic'); ?> </div>
                            <div class="form-controls">
                                <?php $show_csss=osc_esc_html( osc_get_preference('show_css', 'classic_theme') ); ?>
                                <select name="show_css">
                                    <option value="1" <?php if($show_csss=='1' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Use custom color', 'classic'); ?> </option>
                                    <option value="0" <?php if($show_csss=='0' ){ echo 'selected="selected"' ; } ?>>
                                        <?php _e('Use default color', 'classic'); ?> </option>
                                </select>
                            </div>
                        </div>
					</div>
					<div class="form-horizontal">
				  <div class="form-row">
					<div class="form-label">
					  <?php _e('Select color Scheme ',  'classic'); ?>
					</div>
					<div class="form-controls color_box">
						<table width="100%">
							<tr>
								<td width="15%"><div class="green" style="background: #f3f3f3; cursor: pointer;border:#555 1px solid;"></div></td>
								<td width="15%"><div class="purple" style="background: #B7275C; cursor: pointer;border:#f3f3f3 1px solid;"></div></td>
								<td width="15%"><div class="red" style="background: #34495e; cursor: pointer;border:#f3f3f3 1px solid;"></div></td>
								<td width="15%"><div class="orange" style="background: #27ae60; cursor: pointer;border:#f3f3f3 1px solid;"></div></td>
								<td width="15%"><div class="black" style="background: #ff7f50; cursor: pointer;border:#f3f3f3 1px solid;"></div></td>
								<td width="15%"><div class="blue" style="background: #028bd1; cursor: pointer;border:#f3f3f3 1px solid;"></div></td>
							</tr>
						</table>
					</div>
				  </div>
				</div>
				<br />
				<div class="form-horizontal">
				  <div class="form-row">
					<div class="form-label">
					  <?php _e('Theme Color ',  'classic'); ?>
					</div>
					<div class="form-controls">
						<input type="color"  name="theme_color" id="theme_color" value="<?php echo osc_esc_html(osc_get_preference('theme_color', 'classic_theme')); ?>">
						<input type="text" name="txt_theme_color" class="colore"  id="txt_theme_color" value="<?php echo osc_esc_html(osc_get_preference('theme_color', 'classic_theme')); ?>">
					</div>
				  </div>
				</div>
				<div class="form-horizontal">
				  <div class="form-row">
					<div class="form-label">
					  <?php _e('Background color',  'classic'); ?>
					</div>
					<div class="form-controls">
						<input type="color"  name="background_color"  id="background_color" value="<?php echo osc_esc_html(osc_get_preference('background_color', 'classic_theme')); ?>">
						<input type="text"  name="txt_background_color" class="colore"  id="txt_background_color" value="<?php echo osc_esc_html(osc_get_preference('background_color', 'classic_theme')); ?>">
					</div>
				  </div>

				</div>
				<div class="form-horizontal">
				  <div class="form-row">
					<div class="form-label">
					  <?php _e('a color',  'classic'); ?>
					</div>
					<div class="form-controls">
						<input type="color"  name="a_color"   id="a_color" value="<?php echo osc_esc_html(osc_get_preference('a_color', 'classic_theme')); ?>">
						<input type="text"  name="txt_a_color"  class="colore"  id="txt_a_color" value="<?php echo osc_esc_html(osc_get_preference('a_color', 'classic_theme')); ?>">
					</div>
				  </div>

				</div>
				<div class="form-horizontal">
				  <div class="form-row">
					<div class="form-label">
					  <?php _e("a hover",  'classic'); ?>
					</div>
					<div class="form-controls">
						<input type="color"  name="a_hover"  id="a_hover" value="<?php echo osc_esc_html(osc_get_preference('a_hover', 'classic_theme')); ?>">
						<input type="text"  name="txt_a_hover"  class="colore"  id="txt_a_hover" value="<?php echo osc_esc_html(osc_get_preference('a_hover', 'classic_theme')); ?>">
					</div>
				  </div>
				</div>
				<div class="form-horizontal">
				  <div class="form-row">
					<div class="form-label">
					  <?php _e("Header menu",  'classic'); ?>
					</div>
					<div class="form-controls">
						<input type="color"  name="menu_color"  id="menu_color" value="<?php echo osc_esc_html(osc_get_preference('menu_color', 'classic_theme')); ?>">
						<input type="text"  name="txt_menu_color"   class="colore"  id="txt_menu_color" value="<?php echo osc_esc_html(osc_get_preference('menu_color', 'classic_theme')); ?>">
					</div>
				  </div>
				</div>
				<div class="form-horizontal">
				  <div class="form-row">
					<div class="form-label">
					  <?php _e("font dropdown",  'classic'); ?>
					</div>
					<div class="form-controls">
						<input type="color"  name="menus_color"  id="menus_color" value="<?php echo osc_esc_html(osc_get_preference('menus_color', 'classic_theme')); ?>">
						<input type="text"  name="txt_menus_color"   class="colore"  id="txt_menus_color" value="<?php echo osc_esc_html(osc_get_preference('menus_color', 'classic_theme')); ?>">
					</div>
				  </div>
				</div>
				<div class="form-horizontal">
				  <div class="form-row">
					<div class="form-label">
					  <?php _e("Dropdown background",  'classic'); ?>
					</div>
					<div class="form-controls">
						<input type="color"  name="menu_back"  id="menu_back" value="<?php echo osc_esc_html(osc_get_preference('menu_back', 'classic_theme')); ?>">
						<input type="text"  name="txt_menu_back"   class="colore"  id="txt_menu_back" value="<?php echo osc_esc_html(osc_get_preference('menu_back', 'classic_theme')); ?>">
					</div>
				  </div>
				</div>
				
				<div class="form-horizontal">
				  <div class="form-row">
					<div class="form-label">
					  <?php _e("Ribbon color",  'classic'); ?>
					</div>
					<div class="form-controls">
						<input type="color"  name="ribbon_color"  id="ribbon_color" value="<?php echo osc_esc_html(osc_get_preference('ribbon_color', 'classic_theme')); ?>">
						<input type="text"  name="txt_ribbon_color"   class="colore"  id="txt_ribbon_color" value="<?php echo osc_esc_html(osc_get_preference('ribbon_color', 'classic_theme')); ?>">
					</div>
				  </div>
				</div>
				<div class="form-horizontal">
				  <div class="form-row">
					<div class="form-label">
					  <?php _e("H1 color ",  'classic'); ?>
					</div>
					<div class="form-controls">
						<input type="color"  name="hone_color"  id="hone_color" value="<?php echo osc_esc_html(osc_get_preference('hone_color', 'classic_theme')); ?>">
						<input type="text"  name="txt_hone_color"  class="colore"  id="txt_hone_color" value="<?php echo osc_esc_html(osc_get_preference('hone_color', 'classic_theme')); ?>">
					</div>
				  </div>
				</div>
				<div class="form-horizontal">
				  <div class="form-row">
					<div class="form-label">
					  <?php _e("Price color ",  'classic'); ?>
					</div>
					<div class="form-controls">
						<input type="color"  name="price_color"  id="price_color" value="<?php echo osc_esc_html(osc_get_preference('price_color', 'classic_theme')); ?>">
						<input type="text"  name="txt_price_color"  class="colore"  id="txt_price_color" value="<?php echo osc_esc_html(osc_get_preference('price_color', 'classic_theme')); ?>">
					</div>
				  </div>
				</div>
				<div class="form-horizontal">
				  <div class="form-row">
					<div class="form-label">
					  <?php _e("Footer color",  'classic'); ?>
					</div>
					<div class="form-controls">
						<input type="color"  name="footer_color"  id="footer_color" value="<?php echo osc_esc_html(osc_get_preference('footer_color', 'classic_theme')); ?>">
						<input type="text"  name="txt_footer_color"  class="colore"  id="txt_footer_color" value="<?php echo osc_esc_html(osc_get_preference('footer_color', 'classic_theme')); ?>">
					</div>
				  </div>
				</div>
					<div class="form-horizontal">
				  <div class="form-row">
					<div class="form-label">
					  <?php _e("Footer background",  'classic'); ?>
					</div>
					<div class="form-controls">
						<input type="color"  name="footer_back"  id="footer_back" value="<?php echo osc_esc_html(osc_get_preference('footer_back', 'classic_theme')); ?>">
						<input type="text"  name="txt_footer_back"  class="colore"  id="txt_footer_back" value="<?php echo osc_esc_html(osc_get_preference('footer_back', 'classic_theme')); ?>">
					</div>
				  </div>
				</div>
				</div>
					
						<h2 class="render-title">
					  <?php _e('Ads space',  'classic'); ?>
					</h2>
					<div class="satu-area">
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Header ads', 'classic'); ?></div>
                            <div class="form-controls">
                                <textarea class="sedang" name="header_ads" placeholder="<?php echo osc_esc_html(__('Insert your ads code', 'classic')); ?>"><?php echo osc_esc_html( osc_get_preference('header_ads', 'classic_theme') ); ?></textarea>
                                <div class="help-box">
                                    <?php _e('Insert your ads code', 'classic'); ?> <?php _e('728 x 90', 'classic'); ?></div>
                            </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Footer ads', 'classic'); ?></div>
                            <div class="form-controls">
                                <textarea class="sedang" name="footer_ads" placeholder="<?php echo osc_esc_html(__('Insert your ads code', 'classic')); ?>"><?php echo osc_esc_html( osc_get_preference('footer_ads', 'classic_theme') ); ?></textarea>
                                <div class="help-box">
                                    <?php _e('Insert your ads code', 'classic'); ?> <?php _e('728 x 90', 'classic'); ?></div>
                            </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Right sidebar ads', 'classic'); ?></div>
                            <div class="form-controls">
                                <textarea class="sedang" name="sidebar_ads" placeholder="<?php echo osc_esc_html(__('Insert your ads code', 'classic')); ?>"><?php echo osc_esc_html( osc_get_preference('sidebar_ads', 'classic_theme') ); ?></textarea>
                                <div class="help-box">
                                    <?php _e('Insert your ads code', 'classic'); ?> <?php _e('250 x 250', 'classic'); ?></div>
                            </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Left sidebar ads', 'classic'); ?></div>
                            <div class="form-controls">
                                <textarea class="sedang" name="banner_ads" placeholder="<?php echo osc_esc_html(__('Insert your ads code', 'classic')); ?>"><?php echo osc_esc_html( osc_get_preference('banner_ads', 'classic_theme') ); ?></textarea>
                                <div class="help-box">
                                    <?php _e('Insert your ads code', 'classic'); ?> <?php _e('250 x 250', 'classic'); ?></div>
                            </div>
                        </div>
					</div>
					</div>
						<h2 class="render-title">
					  <?php _e('Social media',  'classic'); ?>
					</h2>
					<div class="satu-area">
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Facebook link', 'classic'); ?> </div>
                            <div class="form-controls">
                                <input type="text" class="xlarge" name="facebook_link" placeholder="<?php echo osc_esc_html(__('https://facebook.com/your_username', 'classic')); ?>" value="<?php echo osc_esc_html( osc_get_preference('facebook_link', 'classic_theme') ); ?>"> </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Twitter link', 'classic'); ?> </div>
                            <div class="form-controls">
                                <input type="text" class="xlarge" name="twitter_link" placeholder="<?php echo osc_esc_html(__('https://twitter.com/your_username', 'classic')); ?>" value="<?php echo osc_esc_html( osc_get_preference('twitter_link', 'classic_theme') ); ?>"> </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Instagram link', 'classic'); ?> </div>
                            <div class="form-controls">
                                <input type="text" class="xlarge" name="instagram_link" placeholder="<?php echo osc_esc_html(__('https://instagram.com/your_username', 'classic')); ?>" value="<?php echo osc_esc_html( osc_get_preference('instagram_link', 'classic_theme') ); ?>"> </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Pinterest link', 'classic'); ?> </div>
                            <div class="form-controls">
                                <input type="text" class="xlarge" name="pin_link" placeholder="<?php echo osc_esc_html(__('https://pinterest.com/your_username', 'classic')); ?>" value="<?php echo osc_esc_html( osc_get_preference('pin_link', 'classic_theme') ); ?>"> </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Google plus link', 'classic'); ?> </div>
                            <div class="form-controls">
                                <input type="text" class="xlarge" name="gplus_link" placeholder="<?php echo osc_esc_html(__('https://plus.google.com/your_username', 'classic')); ?>" value="<?php echo osc_esc_html( osc_get_preference('gplus_link', 'classic_theme') ); ?>"> </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Youtube link', 'classic'); ?> </div>
                            <div class="form-controls">
                                <input type="text" class="xlarge" name="youtube_link" placeholder="<?php echo osc_esc_html(__('https://youtube.com/your_username', 'classic')); ?>" value="<?php echo osc_esc_html( osc_get_preference('youtube_link', 'classic_theme') ); ?>"> </div>
                        </div>
					</div>
					</div>
					<h2 class="render-title">
					  <?php _e('More',  'classic'); ?>
					</h2>
					<div class="satu-area">
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Term of use link', 'classic'); ?> </div>
                            <div class="form-controls">
                                <input type="text" class="xlarge" name="term_ofuse" placeholder="<?php echo osc_esc_html(__('http://your-site.com/term-of-use', 'classic')); ?>" value="<?php echo osc_esc_html( osc_get_preference('term_ofuse', 'classic_theme') ); ?>"> </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Useful title', 'classic'); ?></div>
                            <div class="form-controls">
                                <input type="text" class="xlarge" name="useful_title" placeholder="<?php echo osc_esc_html(__('Your useful title', 'classic')); ?>" value="<?php echo osc_esc_html( osc_get_preference('useful_title', 'classic_theme') ); ?>"> </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Useful content', 'classic'); ?></div>
                            <div class="form-controls">
                                <textarea class="sedang" name="useful_content" placeholder="<?php echo osc_esc_html(__('Insert your useful content', 'classic')); ?>"><?php echo osc_esc_html( osc_get_preference('useful_content', 'classic_theme') ); ?></textarea>
                                <div class="help-box">
                                    <?php _e('Leave blank if you want to use default useful info', 'classic'); ?> </div>
                            </div>
                        </div>
					</div>
					<div class="form-horizontal">
					  <div class="form-row">
                            <div class="form-label">
                                <?php _e('Custom CSS', 'classic'); ?></div>
                            <div class="form-controls">
                                <textarea class="sedang" name="css_text" placeholder="<?php echo osc_esc_html(__('Insert custom css', 'classic')); ?>"><?php echo osc_esc_html( osc_get_preference('css_text', 'classic_theme') ); ?></textarea>
                                <div class="help-box">
                                    <?php _e('Leave blank if you not have custom css', 'classic'); ?> </div>
                            </div>
                        </div>
					</div>
					</div>
			  </div>
			  <div class="rows">
			  <div class="form-actions">
				<input type="submit" value="<?php echo osc_esc_html(__('Save changes',  'classic')); ?>" class="btn btn-submit btn-success">
			  </div>
			  </div>
			  </fieldset>
			</form>
		  
		  <script>
			$(document).ready(function() {
				$(".green").click(function(){
					$('#theme_color').attr('value', '#F3F3F3');
					$('#txt_theme_color').attr('value', '#F3F3F3');
					
					$('#background_color').attr('value', '#ffffff');
					$('#txt_background_color').attr('value', '#ffffff');
					
					$('#a_color').attr('value', '#0258ae');
					$('#txt_a_color').attr('value', '#0258ae');
					
					$('#a_hover').attr('value', '#027efb');
					$('#txt_a_hover').attr('value', '#027efb');
					
					$('#menu_color').attr('value', '#555555');
					$('#txt_menu_color').attr('value', '#555555');
					
					$('#menus_color').attr('value', '#555555');
					$('#txt_menus_color').attr('value', '#555555');
					
					$('#back_menu').attr('value', '#f9f9f9');
					$('#txt_back_menu').attr('value', '#f9f9f9');
					
					$('#ribbon_color').attr('value', '#8cc152');
					$('#txt_ribbon_color').attr('value', '#8cc152');
					
					$('#hone_color').attr('value', '#8cc152');
					$('#txt_hone_color').attr('value', '#8cc152');
					
					$('#price_color').attr('value', '#8cc152');
					$('#txt_price_color').attr('value', '#8cc152');
					
					$('#footer_color').attr('value', '#555555');
					$('#txt_footer_color').attr('value', '#555555');
					
					$('#footer_back').attr('value', '#f3f3f3');
					$('#txt_footer_back').attr('value', '#f3f3f3');
				});
				$(".purple").click(function(){
					$('#theme_color').attr('value', '#b1125e');
					$('#txt_theme_color').attr('value', '#b1125e');
					
					$('#background_color').attr('value', '#f3f3f3');
					$('#txt_background_color').attr('value', '#f3f3f3');
					
					$('#a_color').attr('value', '#770095');
					$('#txt_a_color').attr('value', '#770095');
					
					$('#a_hover').attr('value', '#753ab6');
					$('#txt_a_hover').attr('value', '#753ab6');
					
					$('#menu_color').attr('value', '#ffffff');
					$('#txt_menu_color').attr('value', '#ffffff');
					
					$('#menus_color').attr('value', '#000000');
					$('#txt_menus_color').attr('value', '#000000');
					
					$('#back_menu').attr('value', '#f9f9f9');
					$('#txt_back_menu').attr('value', '#f9f9f9');
					
					$('#ribbon_color').attr('value', '#b1125e');
					$('#txt_ribbon_color').attr('value', '#b1125e');
					
					$('#hone_color').attr('value', '#753784');
					$('#txt_hone_color').attr('value', '#753784');
					
					$('#price_color').attr('value', '#fe1651');
					$('#txt_price_color').attr('value', '#fe1651');
					
					$('#footer_color').attr('value', '#ffffff');
					$('#txt_footer_color').attr('value', '#ffffff');
					
					$('#footer_back').attr('value', '#b1125e');
					$('#txt_footer_back').attr('value', '#b1125e');
				});
				$(".red").click(function(){
					$('#theme_color').attr('value', '#34495e');
					$('#txt_theme_color').attr('value', '#34495e');
					
					$('#background_color').attr('value', '#f3f3f3');
					$('#txt_background_color').attr('value', '#f3f3f3');
					
					$('#a_color').attr('value', '#2980b9');
					$('#txt_a_color').attr('value', '#2980b9');
					
					$('#a_hover').attr('value', '#3498db');
					$('#txt_a_hover').attr('value', '#3498db');
					
					$('#menu_color').attr('value', '#ffffff');
					$('#txt_menu_color').attr('value', '#ffffff');
					
					$('#menus_color').attr('value', '#000000');
					$('#txt_menus_color').attr('value', '#000000');
					
					$('#back_menu').attr('value', '#f9f9f9');
					$('#txt_back_menu').attr('value', '#f9f9f9');
					
					$('#ribbon_color').attr('value', '#2c3e50');
					$('#txt_ribbon_color').attr('value', '#2c3e50');
					
					$('#hone_color').attr('value', '#3498db');
					$('#txt_hone_color').attr('value', '#3498db');
					
					$('#price_color').attr('value', '#e74c3c');
					$('#txt_price_color').attr('value', '#e74c3c');
					
					$('#footer_color').attr('value', '#bdc3c7');
					$('#txt_footer_color').attr('value', '#bdc3c7');
					
					$('#footer_back').attr('value', '#34495e');
					$('#txt_footer_back').attr('value', '#34495e');
				});
				$(".orange").click(function(){
					$('#theme_color').attr('value', '#27ae60');
					$('#txt_theme_color').attr('value', '#27ae60');
					
					$('#background_color').attr('value', '#f3f3f3');
					$('#txt_background_color').attr('value', '#f3f3f3');
					
					$('#a_color').attr('value', '#27ae60');
					$('#txt_a_color').attr('value', '#27ae60');
					
					$('#a_hover').attr('value', '#1abc9c');
					$('#txt_a_hover').attr('value', '#1abc9c');
					
					$('#menu_color').attr('value', '#ffffff');
					$('#txt_menu_color').attr('value', '#ffffff');
					
					$('#menus_color').attr('value', '#000000');
					$('#txt_menus_color').attr('value', '#000000');
					
					$('#back_menu').attr('value', '#f9f9f9');
					$('#txt_back_menu').attr('value', '#f9f9f9');
					
					$('#ribbon_color').attr('value', '#2ecc71');
					$('#txt_ribbon_color').attr('value', '#2ecc71');
					
					$('#hone_color').attr('value', '#27ae60');
					$('#txt_hone_color').attr('value', '#27ae60');
					
					$('#price_color').attr('value', '#f39c12');
					$('#txt_price_color').attr('value', '#f39c12');
					
					$('#footer_color').attr('value', '#f3f3f3');
					$('#txt_footer_color').attr('value', '#f3f3f3');
					
					$('#footer_back').attr('value', '#27ae60');
					$('#txt_footer_back').attr('value', '#27ae60');
				});
				$(".black").click(function(){
					$('#theme_color').attr('value', '#ff7f50');
					$('#txt_theme_color').attr('value', '#ff7f50');
					
					$('#background_color').attr('value', '#fbfefb');
					$('#txt_background_color').attr('value', '#fbfefb');
					
					$('#a_color').attr('value', '#c0392b');
					$('#txt_a_color').attr('value', '#c0392b');
					
					$('#a_hover').attr('value', '#e74c3c');
					$('#txt_a_hover').attr('value', '#e74c3c');
					
					$('#menu_color').attr('value', '#ffffff');
					$('#txt_menu_color').attr('value', '#ffffff');
					
					$('#menus_color').attr('value', '#000000');
					$('#txt_menus_color').attr('value', '#000000');
					
					$('#back_menu').attr('value', '#f9f9f9');
					$('#txt_back_menu').attr('value', '#f9f9f9');
					
					$('#ribbon_color').attr('value', '#e74c3c');
					$('#txt_ribbon_color').attr('value', '#e74c3c');
					
					$('#hone_color').attr('value', '#c0392b');
					$('#txt_hone_color').attr('value', '#c0392b');
					
					$('#price_color').attr('value', '#e67e22');
					$('#txt_price_color').attr('value', '#e67e22');
					
					$('#footer_color').attr('value', '#ffffff');
					$('#txt_footer_color').attr('value', '#ffffff');
					
					$('#footer_back').attr('value', '#c0392b');
					$('#txt_footer_back').attr('value', '#c0392b');
				});
				$(".blue").click(function(){
					$('#theme_color').attr('value', '#2980b9');
					$('#txt_theme_color').attr('value', '#2980b9');
					
					$('#background_color').attr('value', '#fbfefb');
					$('#txt_background_color').attr('value', '#fbfefb');
					
					$('#a_color').attr('value', '#2980b9');
					$('#txt_a_color').attr('value', '#2980b9');
					
					$('#a_hover').attr('value', '#3498db');
					$('#txt_a_hover').attr('value', '#3498db');
					
					$('#menu_color').attr('value', '#ffffff');
					$('#txt_menu_color').attr('value', '#ffffff');
					
					$('#menus_color').attr('value', '#000000');
					$('#txt_menus_color').attr('value', '#000000');
					
					$('#back_menu').attr('value', '#f9f9f9');
					$('#txt_back_menu').attr('value', '#f9f9f9');
					
					$('#ribbon_color').attr('value', '#3498db');
					$('#txt_ribbon_color').attr('value', '#3498db');
					
					$('#hone_color').attr('value', '#2980b9');
					$('#txt_hone_color').attr('value', '#2980b9');
					
					$('#price_color').attr('value', '#f39c12');
					$('#txt_price_color').attr('value', '#f39c12');
					
					$('#footer_color').attr('value', '#f3f3f3');
					$('#txt_footer_color').attr('value', '#f3f3f3');
					
					$('#footer_back').attr('value', '#2980b9');
					$('#txt_footer_back').attr('value', '##2980b9');
				});
					$('#color_schemes input').on('input',function(e){
						var id_name = $(this).attr("id");
						if(id_name.slice(0,4)=='txt_'){
							var id_value = $(this).val();
							var color_pkr = id_name.substring(4);
							$('#'+color_pkr).attr('value', id_value );
						}else{
							var id_value = $(this).val();
							$('#txt_'+id_name).attr('value', id_value );
						}

						
					});
				$("#submit_theme").mouseover(function() {
				   var cate_id = $('#catids').val(); // Get category ID
				   var cate_icon_color = $('#cat_icon_color').val(); // Get category color name
				   var cate_icon_code = $('#cat_icon_code').val(); // Get category color code
				$('#cat_id_icon').attr('value', cate_icon_color + '|'+ cate_icon_code );
				$('#cat_id_icon').attr('name', 'cat-icon[' + cate_id + ']');
				});
			});
		</script>