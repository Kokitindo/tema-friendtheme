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
/**
DEFINES
*/
    define('CLASSIC_THEME_VERSION', '1.0.0');
    define('OSCLASS_THEMES', 'classic_theme');
    if( !osc_get_preference('keyword_placeholder', 'classic_theme') ) {
        osc_set_preference('keyword_placeholder', __('ie. PHP Programmer', 'classic'), 'classic_theme');
    }
    osc_register_script('close-js', osc_current_web_theme_js_url('alert.js'), 'jquery');
    osc_enqueue_script('close-js');
    osc_enqueue_style('font-awesome', osc_current_web_theme_url('css/font-awesome/css/font-awesome.min.css'));
    osc_enqueue_script('php-date');
    if(!OC_ADMIN) {
        osc_enqueue_style('fine-uploader-css', osc_assets_url('js/fineuploader/fineuploader.css'));
        osc_enqueue_style('classic-fine-uploader-css', osc_current_web_theme_url('css/ajax-uploader.css'));
    }
    osc_enqueue_script('jquery-fineuploader');

/**
FUNCTIONS
*/
    // install options
    if( !function_exists('classic_theme_install') ) {
        function classic_theme_install() {
            // general
            osc_set_preference('keyword_placeholder', Params::getParam('keyword_placeholder'), 'classic_theme');
            osc_set_preference('version', CLASSIC_THEME_VERSION, 'classic_theme');
            osc_set_preference('defaultShowAs@all', 'gallery', 'classic_theme');
            osc_set_preference('defaultShowAs@search', 'gallery');
            osc_set_preference('footer_copyright', 'Copyright', 'classic_theme');
            osc_set_preference('welcome_text', 'Welcome to classifieds', 'classic_theme');
            osc_set_preference('logo_text', 'Classic', 'classic_theme');
            // color
            osc_set_preference('theme_color', '#27ae60', 'classic_theme');
            osc_set_preference('a_color', '#27ae60', 'classic_theme');
            osc_set_preference('a_hover', '#1abc9c', 'classic_theme');
            osc_set_preference('background_color', '#f3f3f3', 'classic_theme');
            osc_set_preference('hone_color', '#27ae60', 'classic_theme');
            osc_set_preference('price_color', '#f39c12', 'classic_theme');
            osc_set_preference('menu_color', '#ffffff', 'classic_theme');
            
            osc_set_preference('menus_color', '#555555', 'classic_theme');
            osc_set_preference('ribbon_color', '#2ecc71', 'classic_theme');
            
            osc_set_preference('menu_back', '#f9f9f9', 'classic_theme');
            osc_set_preference('footer_color', '#f3f3f3', 'classic_theme');
            osc_set_preference('footer_back', '#27ae60', 'classic_theme');
            // widget
            osc_set_preference('widget_one', 'insert widget', 'classic_theme');
            osc_set_preference('widget_two', 'insert widget', 'classic_theme');
            osc_set_preference('title_one', 'widget title', 'classic_theme');
            osc_set_preference('title_two', 'widget title', 'classic_theme');
            // show or hide element
            osc_set_preference('multi_lang', '0', 'classic_theme');
            osc_set_preference('show_delete', '0', 'classic_theme');
            osc_set_preference('show_css', '0', 'classic_theme');
            osc_set_preference('show_search', 'region', 'classic_theme');
            osc_set_preference('tab_ads', 'latest', 'classic_theme');
            osc_set_preference('show_count', 'show', 'classic_theme');
            osc_set_preference('show_three', 'hide', 'classic_theme');
            osc_set_preference('show_four', 'show', 'classic_theme');
            osc_set_preference('show_statistic', 'show', 'classic_theme');
            // ads 
            osc_set_preference('premium_ads', '6', 'classic_theme');
            osc_set_preference('latest_ads', '12', 'classic_theme');
            osc_set_preference('search_ads', '4', 'classic_theme');
            osc_set_preference('related_ads', '4', 'classic_theme');
            // social icon
            osc_set_preference('facebook_link', 'https://facebook.com', 'classic_theme');
            osc_set_preference('twitter_link', 'https://twitter.com', 'classic_theme');
            osc_set_preference('youtube_link', 'https://youtube.com', 'classic_theme');
            osc_set_preference('instagram_link', 'https://instagram.com', 'classic_theme');
            osc_reset_preferences();
        }
    }
    
    function theme_classic_actions_admin() {
        //if(OC_ADMIN)
        if( Params::getParam('file') == 'oc-content/themes/classic/admin/settings.php' ) {
            
        }
        switch( Params::getParam('action_specific') ) {
            case('settings'):
                osc_set_preference('keyword_placeholder', Params::getParam('keyword_placeholder'), 'classic_theme');
                osc_set_preference('defaultShowAs@all', Params::getParam('defaultShowAs@all'), 'classic_theme');
                osc_set_preference('defaultShowAs@search', Params::getParam('defaultShowAs@all'));
                osc_set_preference('footer_copyright',         trim(Params::getParam('footer_copyright', false, false, false)),                  'classic_theme');
                osc_set_preference('welcome_text',         trim(Params::getParam('welcome_text', false, false, false)),                  'classic_theme');
                osc_set_preference('logo_text',         trim(Params::getParam('logo_text', false, false, false)),                  'classic_theme');
                osc_set_preference('css_text',         trim(Params::getParam('css_text', false, false, false)),                  'classic_theme');
                // color
                osc_set_preference('theme_color',         trim(Params::getParam('theme_color', false, false, false)),                  'classic_theme');
                osc_set_preference('a_color',         trim(Params::getParam('a_color', false, false, false)),                  'classic_theme');
                osc_set_preference('a_hover',         trim(Params::getParam('a_hover', false, false, false)),                  'classic_theme');
                osc_set_preference('hone_color',         trim(Params::getParam('hone_color', false, false, false)),                  'classic_theme');
                osc_set_preference('background_color',         trim(Params::getParam('background_color', false, false, false)),                  'classic_theme');
                osc_set_preference('menu_color',         trim(Params::getParam('menu_color', false, false, false)),                  'classic_theme');
                osc_set_preference('menus_color',         trim(Params::getParam('menus_color', false, false, false)),                  'classic_theme');
                osc_set_preference('ribbon_color',         trim(Params::getParam('ribbon_color', false, false, false)),                  'classic_theme');
                
                osc_set_preference('menu_back',         trim(Params::getParam('menu_back', false, false, false)),                  'classic_theme');
                osc_set_preference('footer_color',         trim(Params::getParam('footer_color', false, false, false)),                  'classic_theme');
                osc_set_preference('footer_back',         trim(Params::getParam('footer_back', false, false, false)),                  'classic_theme');
                osc_set_preference('price_color',         trim(Params::getParam('price_color', false, false, false)),                  'classic_theme');
                // widget
                osc_set_preference('widget_one',         trim(Params::getParam('widget_one', false, false, false)),                  'classic_theme');
                osc_set_preference('widget_two',         trim(Params::getParam('widget_two', false, false, false)),                  'classic_theme');
                osc_set_preference('title_one',         trim(Params::getParam('title_one', false, false, false)),                  'classic_theme');
                osc_set_preference('title_two',         trim(Params::getParam('title_two', false, false, false)),                  'classic_theme');
                // show or hide
                osc_set_preference('multi_lang',         trim(Params::getParam('multi_lang', false, false, false)),                  'classic_theme');
                osc_set_preference('show_search',         trim(Params::getParam('show_search', false, false, false)),                  'classic_theme');
                osc_set_preference('show_delete',         trim(Params::getParam('show_delete', false, false, false)),                  'classic_theme');
                osc_set_preference('show_css',         trim(Params::getParam('show_css', false, false, false)),                  'classic_theme');
                osc_set_preference('tab_ads',         trim(Params::getParam('tab_ads', false, false, false)),                  'classic_theme');
                osc_set_preference('show_count',         trim(Params::getParam('show_count', false, false, false)),                  'classic_theme');
                osc_set_preference('show_three',         trim(Params::getParam('show_three', false, false, false)),                  'classic_theme');
                osc_set_preference('show_four',         trim(Params::getParam('show_four', false, false, false)),                  'classic_theme');
                osc_set_preference('show_statistic',         trim(Params::getParam('show_statistic', false, false, false)),                  'classic_theme');
                // ads count
                osc_set_preference('premium_ads',         trim(Params::getParam('premium_ads', false, false, false)),                  'classic_theme');
                osc_set_preference('latest_ads',         trim(Params::getParam('latest_ads', false, false, false)),                  'classic_theme');
                osc_set_preference('related_ads',         trim(Params::getParam('related_ads', false, false, false)),                  'classic_theme');
                osc_set_preference('search_ads',         trim(Params::getParam('search_ads', false, false, false)),                  'classic_theme');
                // social icon
                osc_set_preference('facebook_link',         trim(Params::getParam('facebook_link', false, false, false)),                  'classic_theme');
                osc_set_preference('twitter_link',         trim(Params::getParam('twitter_link', false, false, false)),                  'classic_theme');
                osc_set_preference('instagram_link',         trim(Params::getParam('instagram_link', false, false, false)),                  'classic_theme');
                osc_set_preference('youtube_link',         trim(Params::getParam('youtube_link', false, false, false)),                  'classic_theme');
                osc_set_preference('pin_link',         trim(Params::getParam('pin_link', false, false, false)),                  'classic_theme');
                osc_set_preference('gplus_link',         trim(Params::getParam('gplus_link', false, false, false)),                  'classic_theme');
                // ads space
                osc_set_preference('header_ads',         trim(Params::getParam('header_ads', false, false, false)),                  'classic_theme');
                osc_set_preference('footer_ads',       trim(Params::getParam('footer_ads', false, false, false)),                'classic_theme');
                osc_set_preference('sidebar_ads',       trim(Params::getParam('sidebar_ads', false, false, false)),                'classic_theme');
                osc_set_preference('banner_ads',     trim(Params::getParam('banner_ads', false, false, false)),          'classic_theme');
                // more element
                osc_set_preference('term_ofuse',     trim(Params::getParam('term_ofuse', false, false, false)),          'classic_theme');
                osc_set_preference('useful_title',     trim(Params::getParam('useful_title', false, false, false)),          'classic_theme');
                osc_set_preference('useful_content',     trim(Params::getParam('useful_content', false, false, false)),          'classic_theme');

                osc_add_flash_ok_message(__('Theme settings updated correctly', 'classic'), 'admin');
                osc_redirect_to(osc_admin_render_theme_url('oc-content/themes/classic/admin/settings.php'));
            break;
            //upload category icon
			case('up_category'):
			$package = Params::getFiles('set_image');
			$idt = $_POST['id_category'];
			if( $package['error'] == UPLOAD_ERR_OK ) {
				if( move_uploaded_file($package['tmp_name'], WebThemes::newInstance()->getCurrentThemePath() . "images/category/".$idt.".png" ) ) {
					osc_add_flash_ok_message(__('The image has been uploaded correctly', 'classic'), 'admin');
                    } else {
					osc_add_flash_error_message(__("An error has occurred, please try again", 'classic'), 'admin');
				}
                } else {
				osc_add_flash_error_message(__("An error has occurred, please try again", 'classic'), 'admin');
			}
			header('Location: ' . osc_admin_render_theme_url('oc-content/themes/classic/admin/settings.php#tab-3')); exit;
            break;		
	     //remove category
			case('remove_category'):
			$id_remove = $_POST['id_remove'];
			if(file_exists (osc_themes_path() . 'classic/images/category/' . $id_remove . '.png') ) {
				@unlink(osc_themes_path() . 'classic/images/category/' . $id_remove . '.png') ;
				osc_add_flash_ok_message(__('The image has been removed', 'classic'), 'admin');
                } else {
				osc_add_flash_error_message(__("Image not found", 'classic'), 'admin');
			}
			header('Location: ' . osc_admin_render_theme_url('oc-content/themes/classic/admin/settings.php#tab-3')); exit;
            break;
        }
    }
    // menu admin
    if(!function_exists('check_install_classic_theme')) {
        function check_install_classic_theme() {
            $current_version = osc_get_preference('version', 'classic_theme');
            //check if current version is installed or need an update
            if( !$current_version ) {
                classic_theme_install();
            }
        }
    }

    function classic_delete() {
        Preference::newInstance()->delete(array('s_section' => 'classic'));
    }
    osc_add_hook('init', 'classic_redirect_user_dashboard', 2);
    osc_add_hook('init_admin', 'theme_classic_actions_admin');
    osc_add_hook('theme_delete_classic', 'classic_delete');
    osc_add_admin_submenu_divider('appearance', 'Classic themes', 'classic_divider', 'administrator');
    osc_admin_menu_appearance(__('Theme options', 'classic'), osc_admin_render_theme_url('oc-content/themes/classic/admin/settings.php'), 'classic_admin');
    check_install_classic_theme();
    
    // redirect dasboard
    if(!function_exists('user_dashboard_redirect')) {
        function user_dashboard_redirect() {
            $page   = Params::getParam('page');
            $action = Params::getParam('action');
            if($page=='user' && $action=='dashboard') {
                if(ob_get_length()>0) {
                    ob_end_flush();
                }
                header("Location: ".osc_user_list_items_url(), TRUE,301);
            }
        }
        osc_add_hook('init', 'user_dashboard_redirect');
    }
    function classic_redirect_user_dashboard()
    {
        if( (Rewrite::newInstance()->get_location() === 'user') && (Rewrite::newInstance()->get_section() === 'dashboard') ) {
            header('Location: ' .osc_user_list_items_url());
            exit;
        }
    }
    if(!function_exists('classic_nofollow_construct')) {
        /**
        * Hook for header, meta tags robots nofollos
        */
        function classic_nofollow_construct() {
            echo '<meta name="robots" content="noindex, nofollow, noarchive" />' . PHP_EOL;
            echo '<meta name="googlebot" content="noindex, nofollow, noarchive" />' . PHP_EOL;
        }
    }
    if( !function_exists('classic_follow_construct') ) {
        /**
        * Hook for header, meta tags robots follow
        */
        function classic_follow_construct() {
            echo '<meta name="robots" content="index, follow" />' . PHP_EOL;
            echo '<meta name="googlebot" content="index, follow" />' . PHP_EOL;
        }
    }
    // search js
    if( !function_exists('classic_search_js') ) {
        function classic_search_js(){
    	echo '<script type="text/javascript" src="'.osc_current_web_theme_js_url('search.js').'"></script>';
        }
    }
    // RTL css
    function arabic_language_direction(){
        $rtllang = array('ar_SY','he_HE','fa_IR');
        if(in_array(osc_current_user_locale(), $rtllang)){
            return 'rtl';
        }else{
            return 'ltr';
        }
    }
    //logo header
    if( !function_exists('logo_site') ) {
        function logo_site() {
            $html = '<img src="'.osc_current_web_theme_url('images/logo.png').'" alt="'. osc_esc_html( osc_page_title() ).'" />';
            if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/logo.png" ) ) {
                return $html;
            } else if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/default-logos.png")) {
                return '<img alt="'.osc_esc_html( osc_page_title() ).'" src="' . osc_current_web_theme_url('images/default-logos.png') . '" />';
            } else {
                return osc_get_preference('logo_text', 'classic_theme');
            }
        }
    }
    // favicon images
    if( !function_exists('favicon_images') ) {
        function favicon_images() {

             $html = '<link href="' . osc_current_web_theme_url('images/favicon.png') . '" rel="shortcut icon">';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/favicon.png" ) ) {
                return $html;
             } else {
                return '<link href="' . osc_current_web_theme_url('images/default-favicon.png') . '" rel="shortcut icon">';
            }
        }
    }
    // category icon
    if( !function_exists('category_img') ) {
        function category_img() {

             $html = '<img  src="'.osc_current_web_theme_url().'/images/category/'.osc_category_id().'.png" class="img-responsive" alt="'.osc_category_name().'">';
             if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "images/category/".osc_category_id().".png" ) ) {
                return $html;
             } else {
                return '<img  src="'.osc_current_web_theme_url().'/images/category/none.png" class="img-responsive" alt="'.osc_category_name().'">		';

            }
        }
    }
    //subcategory
    if( !function_exists('get_categoriesclassic') ) {
        function get_categoriesclassic( ) {
            $location = Rewrite::newInstance()->get_location() ;
            $section  = Rewrite::newInstance()->get_section() ;
            
            if ( $location != 'search' ) {
                return false ;
			}
            
            $category_id = osc_search_category_id() ;
			
            if(count($category_id) > 1) {
                return false;
			}
            
			
            $category_id = (int) $category_id ;
            
            $categoriesclassic = Category::newInstance()->hierarchy($category_id) ;
            
            foreach($categoriesclassic as &$category) {
                $category['url'] = get_category_url($category) ;
			}
            
            return $categoriesclassic ;
		}
	}
	
	if( !function_exists('get_subcategories') ) {
		function get_subcategories( ) {
			$location = Rewrite::newInstance()->get_location() ;
			$section  = Rewrite::newInstance()->get_section() ;
			
			if ( $location != 'search' ) {
				return false ;
			}
            
			$category_id = osc_search_category_id() ;
            
			if(count($category_id) > 1) {
				return false ;
			}
            
			$category_id = (int) $category_id[0] ;
            
			$subCategories = Category::newInstance()->findSubcategories($category_id) ;
            
			foreach($subCategories as &$category) {
				$category['url'] = get_category_url($category) ;			 
			}
            
			return $subCategories ;
		}
	}
	if ( !function_exists('get_category_url') ) {
		function get_category_url( $category ) {
			$path = '';
			if ( osc_rewrite_enabled() ) {
                if ($category != '') {
                    $category = Category::newInstance()->hierarchy($category['pk_i_id']) ;
                    $sanitized_category = "" ;
                    for ($i = count($category); $i > 0; $i--) {
                        $sanitized_category .= $category[$i - 1]['s_slug'] . '/' ;
					}
                    $path = osc_base_url() . $sanitized_category ;
				}
				} else {
                $path = sprintf( osc_base_url(true) . '?page=search&sCategory=%d', $category['pk_i_id'] ) ;
			}
            
            return $path;
		}
	}
	
	if ( !function_exists('get_category_num_items') ) {
		function get_category_num_items( $category ) {
            $category_stats = CategoryStats::newInstance()->countItemsFromCategory($category['pk_i_id']) ;
            
            if( empty($category_stats) ) {
                return 0 ;
			}
            
            return $category_stats;
		}
	}
	// search number
	if( !function_exists('classic_search_number') ) {
        /**
          *
          * @return array
          */
        function classic_search_number() {
            $search_from = ((osc_search_page() * osc_default_results_per_page_at_search()) + 1);
            $search_to   = ((osc_search_page() + 1) * osc_default_results_per_page_at_search());
            if( $search_to > osc_search_total_items() ) {
                $search_to = osc_search_total_items();
            }

            return array(
                'from' => $search_from,
                'to'   => $search_to,
                'of'   => osc_search_total_items()
            );
        }
    }
    //select countries 
    function classic_countries_select($name, $id, $label) {
	$aCountries = Country::newInstance()->listAll(); 
	if(count($aCountries) > 0 ) { 
		$html  = '<select name="'.$name.'" class="form-control three" id="'.$id.'">';
		$html .= '<option value="">'.$label.'</option>';
		foreach($aCountries as $country) { 
			$html .= '<option value="'. $country['pk_c_code'].'">'. $country['s_name'].'</option>';
		} 
		$html .= '</select>';
	} 

	echo $html;
    }
    //select region
    function classic_regions_select($name, $id, $label) {
	$aRegions = Region::newInstance()->listAll(); 
	if(count($aRegions) > 0 ) { 
		$html  = '<select name="'.$name.'" class="form-control three" id="'.$id.'">';
		$html .= '<option value="" id="sRegionSelect">'.$label.'</option>';
		foreach($aRegions as $region) { 
			$html .= '<option value="'. $region['pk_i_id'].'">'. $region['s_name'].'</option>';
		} 
		$html .= '</select>';
	} 
	echo $html;
    }
    //select city
    function classic_cities_select($name, $id, $label)
    {
	$html  = '<select name="'.$name.'" class="form-control three" id="'.$id.'">';
	$html .= '<option value="" id="sCitySelect">'.$label.'</option>';
	if(osc_count_list_cities() > 0 ) {
		while(osc_has_list_cities() ) { 
			$html .= '<option value="'.osc_esc_html( osc_list_city_name() ).'">'. osc_list_city_name().'</option>';
		}
	}
	$html .= '</select>';

	echo $html;
    }
    // breadcrumb
    if( !function_exists('get_breadcrumb_lang') ) {
        function get_breadcrumb_lang() {
            $lang = array();
            $lang['item_add']               = __('Post new ads', 'classic');
            $lang['item_edit']              = __('Edit your ads', 'classic');
            $lang['item_send_friend']       = __('Send to a friend', 'classic');
            $lang['item_contact']           = __('Contact publisher', 'classic');
            $lang['search']                 = __('Search results', 'classic');
            $lang['search_pattern']         = __('Search results: %s', 'classic');
            $lang['user_dashboard']         = __('Dashboard', 'classic');
            $lang['user_dashboard_profile'] = __("%s's profile", 'classic');
            $lang['user_account']           = __('Account', 'classic');
            $lang['user_items']             = __('My ads', 'classic');
            $lang['user_alerts']            = __('Alerts', 'classic');
            $lang['user_profile']           = __('Edit profile', 'classic');
            $lang['user_change_email']      = __('Change email', 'classic');
            $lang['user_change_username']   = __('Change username', 'classic');
            $lang['user_change_password']   = __('Change password', 'classic');
            $lang['login']                  = __('Login', 'classic');
            $lang['login_recover']          = __('Recover password', 'classic');
            $lang['login_forgot']           = __('Change password', 'classic');
            $lang['register']               = __('Create a new account', 'classic');
            $lang['contact']                = __('Contact', 'classic');
            return $lang;
        }
    }
    // member menu
    if( !function_exists('get_user_menu') ) {
        function get_user_menu() {
            $options   = array();
            $options[] = array(
                'name'  => __('Manage my ads', 'classic'),
                'url'   => osc_user_list_items_url(),
                'class' => 'opt_items'
            );
            $options[] = array(
                'name' => __('My alerts', 'classic'),
                'url' => osc_user_alerts_url(),
                'class' => 'opt_alerts'
            );
            $options[] = array(
                'name'  => __('Edit profile', 'classic'),
                'url'   => osc_user_profile_url(),
                'class' => 'opt_account'
            );
            $options[] = array(
                'name'  => __('Change email', 'classic'),
                'url'   => osc_change_user_email_url(),
                'class' => 'opt_change_email'
            );
            $options[] = array(
                'name'  => __('Change password', 'classic'),
                'url'   => osc_change_user_password_url(),
                'class' => 'opt_change_password'
            );
            $options[] = array(
                'name'  => __('Logout', 'classic'),
                'url'   =>  osc_user_logout_url(),
                'class' => 'opt_delete_account'
            );

            return $options;
        }
    }

    // show as
    if( !function_exists('classic_show_as') ){
        function classic_show_as(){
            $p_sShowAs    = Params::getParam('sShowAs');
            $aValidShowAsValues = array('list', 'gallery','masonry');
            if (!in_array($p_sShowAs, $aValidShowAsValues)) {
                $p_sShowAs = classic_default_show_as();
            }

            return $p_sShowAs;
        }
    }
    if( !function_exists('classic_default_show_as') ){
        function classic_default_show_as(){
            return getPreference('defaultShowAs@all','classic_theme');
        }
    }
    // Title ads
    if( !function_exists('classic_item_title') ) {
        function classic_item_title() {
            $title = osc_item_title();
            foreach( osc_get_locales() as $locale ) {
                if( Session::newInstance()->_getForm('title') != "" ) {
                    $title_ = Session::newInstance()->_getForm('title');
                    if( @$title_[$locale['pk_c_code']] != "" ){
                        $title = $title_[$locale['pk_c_code']];
                    }
                }
            }
            return $title;
        }
    }
    if( !function_exists('classic_item_description') ) {
        function classic_item_description() {
            $description = osc_item_description();
            foreach( osc_get_locales() as $locale ) {
                if( Session::newInstance()->_getForm('description') != "" ) {
                    $description_ = Session::newInstance()->_getForm('description');
                    if( @$description_[$locale['pk_c_code']] != "" ){
                        $description = $description_[$locale['pk_c_code']];
                    }
                }
            }
            return $description;
        }
    }
    //related ads
    if( !function_exists('related_listings') ) {
        function related_listings() {
            View::newInstance()->_exportVariableToView('items', array());

            $mSearch = new Search();
            $mSearch->addCategory(osc_item_category_id());
            $mSearch->addRegion(osc_item_region());
            $mSearch->addItemConditions(sprintf("%st_item.pk_i_id < %s ", DB_TABLE_PREFIX, osc_item_id()));
            $mSearch->limit('0', '3');

            $aItems      = $mSearch->doSearch();
            $iTotalItems = count($aItems);
            if( $iTotalItems == osc_get_preference('related_ads', 'classic_theme') ) {
                View::newInstance()->_exportVariableToView('items', $aItems);
                return $iTotalItems;
            }
            unset($mSearch);

            $mSearch = new Search();
            $mSearch->addCategory(osc_item_category_id());
            $mSearch->addItemConditions(sprintf("%st_item.pk_i_id != %s ", DB_TABLE_PREFIX, osc_item_id()));
            $mSearch->limit('0', '5');

            $aItems = $mSearch->doSearch();
            $iTotalItems = count($aItems);
            if( $iTotalItems > 0 ) {
                View::newInstance()->_exportVariableToView('items', $aItems);
                return $iTotalItems;
            }
            unset($mSearch);

            return 0;
        }
    }
// personal or company    
if (!function_exists('aribudin_search_filters')) {

    function aribudin_search_filters() {
        if (Params::getParam('sCompany') != '') {
            $sCompany = Params::getParam('sCompany');
            if ($sCompany == 'company') {
                Search::newInstance()->addJoinTable('pk_i_id', DB_TABLE_PREFIX . 't_user', DB_TABLE_PREFIX . 't_item.fk_i_user_id = ' . DB_TABLE_PREFIX . 't_user.pk_i_id', 'LEFT OUTER');
                Search::newInstance()->addConditions(sprintf("%st_user.b_company = 1", DB_TABLE_PREFIX));
            } else if ($sCompany == 'personal') {
                Search::newInstance()->addJoinTable('pk_i_id', DB_TABLE_PREFIX . 't_user', DB_TABLE_PREFIX . 't_item.fk_i_user_id = ' . DB_TABLE_PREFIX . 't_user.pk_i_id', 'LEFT OUTER');
                Search::newInstance()->addConditions(sprintf("%st_user.b_company = 0", DB_TABLE_PREFIX));
            }
        }
        if (Params::getParam('currency') != '') {
            $value = Params::getParam('currency');
            Search::newInstance()->addConditions(sprintf("%st_item.fk_c_currency_code = '%s' ", DB_TABLE_PREFIX, $value));
        }

        if (Params::getParam('OnlyPremium') == 1) {
            Search::newInstance()->onlyPremium(true);
        }
    }

}
osc_add_hook('search_conditions', 'aribudin_search_filters');

?>