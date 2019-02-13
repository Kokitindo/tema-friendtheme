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
?>
<?php osc_current_web_theme_path('header.php') ; ?>
<div class="second-area">
    <div class="midle-area">
    <h1><?php echo osc_static_page_title(); ?></h1>
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
				    <div class="ads-heading"><h2 class="title-public text-center"><?php echo osc_static_page_title(); ?></h2></div>
                     <?php echo osc_static_page_text(); ?>
				    </div>
			</div>
		</div>
	</div>
</div>
<?php osc_current_web_theme_path('footer.php') ; ?>