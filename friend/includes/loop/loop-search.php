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
<?php if(osc_get_preference('show_search', 'classic_theme') == "region") { ?>
        <?php osc_current_web_theme_path('includes/loop/search/loop-region.php') ; ?>
<?php } else if(osc_get_preference('show_search', 'classic_theme') == "city") { ?>
        <?php osc_current_web_theme_path('includes/loop/search/loop-city.php') ; ?>
<?php } else if(osc_get_preference('show_search', 'classic_theme') == "country") { ?>
        <?php osc_current_web_theme_path('includes/loop/search/loop-country.php') ; ?>
<?php } else if(osc_get_preference('show_search', 'classic_theme') == "category") { ?>
        <?php osc_current_web_theme_path('includes/loop/search/loop-category.php') ; ?>
<?php }  ?>