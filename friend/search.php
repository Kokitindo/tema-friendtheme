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
    osc_add_hook('header','classic_search_js');
    $user_type = Params::getParam('sCompany');
if ($user_type == '') {
    $user_type = 'all';
}
?>
<?php osc_current_web_theme_path('header.php') ; ?>
<div class="second-area">
    <div class="midle-area">
    <?php if( search_title() != '' ) { ?>
    <h1><?php echo search_title(); ?></h1>
    <div class="descriptione"><?php echo osc_category_description($locale = ""); ?></div>
    <ul class="subcategory"><?php $spubcat = get_categoriesclassic(); ?>
					<?php if (!isset($spubcat[2]) && !isset($spubcat[1]) && isset($spubcat[0])) { ?>
						<?php ;
							foreach(get_subcategories() as $subcat) {
								
								echo "<li><a href='".$subcat["url"]."'><span>".$subcat["s_name"]."</span> <span class='color'>(" . get_category_num_items($subcat) . ")</span></a></li>";
								
							} }?>
	</ul>
    <?php } else { ?>
    <h1><?php _e("All categories", 'classic'); ?></h1>
    <?php osc_goto_first_category() ; ?>
    <?php if(osc_count_categories ()> 0) { ?>
        <ul class="subcategory">
            <?php while ( osc_has_categories() ) { ?>
            <li><a href="<?php echo osc_search_category_url() ; ?>"><span><?php echo osc_category_name() ; ?></span> <span class='color'>(<?php echo osc_category_total_items() ; ?>)</span></a></li>
            <?php } ?>
        </ul>
    <?php } ?>
    <?php } ?>
    </div>
</div>
<!-- breadcrumb 
<?php osc_current_web_theme_path('includes/head/breadcrumb.php') ; ?>
-->
<!-- content one -->
<div class="main-page">
		<div class="container">
			<div class="row">
			    <!-- content -->
				<div class="col-md-9 col-xs-12">
				    
	<div class="col-md-12 col-xs-12">		    
	<div id="search-head" class="non <?php osc_get_premiums($max=100) ; if( osc_count_premiums()> 0 ) { ?><?php } else { ?>zerobottom<?php } ?>">
      <div class="user-sort">
      <a class="div all <?php if ($user_type == 'all') { ?>active<?php } ?>" href="<?php echo osc_esc_html(osc_update_search_url(array('sCompany' => 'all'))); ?>"><span><?php _e("All", 'classic'); ?></span></a>
      
      <a class="div personal <?php if ($user_type == 'personal') { ?>active<?php } ?>" href="<?php echo osc_esc_html(osc_update_search_url(array('sCompany' => 'personal'))); ?>"><span><?php _e("Personal", 'classic'); ?></span></a>
      
      <a class="div company <?php if ($user_type == 'company') { ?>active<?php } ?>" href="<?php echo osc_esc_html(osc_update_search_url(array('sCompany' => 'company'))); ?>"><span><?php _e("Company", 'classic'); ?></span></a>
      </div>
      <div class="list-grid">
        <a href="<?php echo osc_esc_html(osc_update_search_url(array('sShowAs'=> 'gallery'))); ?>" title="<?php echo osc_esc_html(__('View in gallery','classic')); ?>" 
        <?php if(classic_show_as()=='gallery'){ ?>class="active"<?php } ?>><i class="fa fa-th"></i></a>
        <a href="<?php echo osc_esc_html(osc_update_search_url(array('sShowAs'=> 'list'))); ?>" title="<?php echo osc_esc_html(__('View in list','classic')); ?>" <?php if(classic_show_as()=='list'){ ?>class="active"<?php } ?>><i class="fa fa-th-list"></i></a>
        <a class="four-down" href="<?php echo osc_esc_html(osc_update_search_url(array('sShowAs'=> 'masonry'))); ?>" title="<?php echo osc_esc_html(__('View in large galley','classic')); ?>" 
        <?php if(classic_show_as()=='masonry'){ ?>class="active"<?php } ?>><i class="fa fa-th-large"></i></a>
      </div>
    </div>
    </div>
				
	<?php osc_current_web_theme_path('search_premium.php') ; ?>
            
    <div class="col-md-12 col-xs-12">		    
	<div id="search-head2">
      <div class="pull-left counters"><?php _e('Result', 'classic'); ?> <?php $search_number = classic_search_number(); printf(__('%1$d - %2$d of %3$d listings', 'classic'), $search_number['from'], $search_number['to'], $search_number['of']); ?></div>
      <div class="sorter">
        <!--     START sort by       -->
        <div class="btn-group">
            <div class="see_by">
              <span><?php _e('Sort by', 'classic'); ?>:</span>
              <?php
              $orders = osc_list_orders();
              $current = '';
              foreach($orders as $label => $params) {
                  $orderType = ($params['iOrderType'] == 'asc') ? '0' : '1';
                  if(osc_search_order() == $params['sOrder'] && osc_search_order_type() == $orderType) {
                      $current = $label;
                  }
              }
              ?>
              
              <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><?php echo $current; ?> <b class="fa fa-caret-down"></b></button>
              <?php $i = 0; ?>
              <ul class="dropdown-menu"  role="menu">
                  <?php
                  foreach($orders as $label => $params) {
                      $orderType = ($params['iOrderType'] == 'asc') ? '0' : '1'; ?>
                      <?php if(osc_search_order() == $params['sOrder'] && osc_search_order_type() == $orderType) { ?>
                          <li><a class="current" href="<?php echo osc_esc_html(osc_update_search_url($params)); ?>"><?php echo $label; ?></a></li>
                      <?php } else { ?>
                          <li><a href="<?php echo osc_esc_html(osc_update_search_url($params)); ?>"><?php echo $label; ?></a></li>
                      <?php } ?>
                      <?php $i++; ?>
                  <?php } ?>
                </ul>
            </div>
            </div>
            <!--     END sort by       -->
    </div>
    </div>
    </div>
                <?php if(osc_count_items()==0 ) { ?>
                        <div class="col-md-12 col-xs-12">
                        <p class="empty">
                            <?php printf(__('There are no results matching "%s"', 'classic'), osc_search_pattern()); ?>
                        </p>
                        </div>
                        <?php } else { ?>
                        <?php if(classic_show_as()=='list' ){ ?>
                        <?php osc_current_web_theme_path('search_list.php') ; ?>
                        <?php } else if(classic_show_as()=='gallery' ){ ?>
                        <?php osc_current_web_theme_path('search_gallery.php') ; ?>
                        <?php } else if(classic_show_as()=='masonry' ){ ?>
                        <?php osc_current_web_theme_path('search_masonry.php') ; ?>
                        <?php } ?>
                        <div class="col-md-12 col-xs-12"><div class="paginate"><?php echo osc_search_pagination(); ?></div></div>
                <?php } ?>
				</div>
			    <!-- left sidebar -->
				<div class="col-md-3 col-xs-12">
				<div id="sidebars">
<div class="col-md-12 panel">
    <div class="tab-content search-h3">
    <form action="<?php echo osc_base_url(true); ?>" method="get" class="nocsrf">
        <input type="hidden" name="page" value="search"/>
        <input type="hidden" name="sOrder" value="<?php echo osc_search_order(); ?>" />
        <input type="hidden" name="sCompany" class="sCompany" id="sCompany" value="<?php echo Params::getParam('sCompany'); ?>" />
        <input type="hidden" name="iOrderType" value="<?php $allowedTypesForSorting = Search::getAllowedTypesForSorting() ; echo $allowedTypesForSorting[osc_search_order_type()]; ?>" />
        <?php foreach(osc_search_user() as $userId) { ?>
        <input type="hidden" name="sUser[]" value="<?php echo $userId; ?>"/>
        <?php } ?>
        <fieldset class="first">
            <h3><?php _e('Your search', 'classic'); ?></h3>
            <div class="row">
                <input class="input-text" type="text" name="sPattern"  id="query" value="<?php echo osc_esc_html(osc_search_pattern()); ?>" />
            </div>
        </fieldset>
         <fieldset>
            <h3><?php _e('Country', 'classic'); ?></h3>
            <div class="row">
        <?php classic_countries_select('sCountry', 'sCountry', __('Select a country', 'classic'));?>
        </div>
        </fieldset>
        <fieldset>
            <h3><?php _e('Region', 'classic'); ?></h3>
            <div class="row">
        <?php classic_regions_select('sRegion', 'sRegion', __('Select a region', 'classic')) ; ?>
        </div>
        </fieldset>
        <fieldset>
            <h3><?php _e('City', 'classic'); ?></h3>
            <div class="row">
                <?php classic_cities_select('sCity', 'sCity', __('Select a city', 'classic')) ; ?>
            </div>
        </fieldset>
        <?php if( osc_images_enabled_at_items() ) { ?>
        <fieldset>
            <div class="row top15">
                <input type="checkbox" name="bPic" class="icheckbox_flat" value="1" <?php echo (osc_search_has_pic() ? 'checked' : ''); ?> />
                <span><?php _e('Show only ads with images', 'classic') ; ?></span>
            </div>
        </fieldset>
        <?php } ?>
        <?php if( osc_price_enabled_at_items() ) { ?>
        <fieldset>
            <h3><?php _e('Price', 'classic') ; ?></h3>
            <div class="row price-slice">
                <span><?php _e('Min', 'classic') ; ?>.</span>
                <input class="input-text" type="text" id="priceMin" name="sPriceMin" value="<?php echo osc_esc_html(osc_search_price_min()); ?>" size="6" maxlength="6" />
                <span><?php _e('Max', 'classic') ; ?>.</span>
                <input class="input-text" type="text" id="priceMax" name="sPriceMax" value="<?php echo osc_esc_html(osc_search_price_max()); ?>" size="6" maxlength="6" />
            </div>
        </fieldset>
        <?php } ?>
        <div class="plugin-hooks">
            <?php
            if(osc_search_category_id()) {
                osc_run_hook('search_form', osc_search_category_id()) ;
            } else {
                osc_run_hook('search_form') ;
            }
            ?>
        </div>
        <?php
        $aCategories = osc_search_category();
        foreach($aCategories as $cat_id) { ?>
            <input type="hidden" name="sCategory[]" value="<?php echo osc_esc_html($cat_id); ?>"/>
        <?php } ?>
        <div class="actions row">
            <div class="top-button">
            <button class="btn btn-success btn-block btn-company" type="submit"><?php _e('Apply', 'classic') ; ?></button>
            </div>
        </div>
    </form>
</div>
</div>
			<?php osc_alert_form(); ?>
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
</div>

<?php osc_current_web_theme_path('footer.php') ; ?>