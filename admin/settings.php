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
<link rel="stylesheet" href="<?php echo osc_current_web_theme_url('admin/css/admin.css');?>">

<div class="headers">
	<div class="left_sections">
		<div class="logos"><img src="<?php echo osc_current_web_theme_url('images/default-logo.png');?>"  alt="<?php echo osc_esc_html(__('classic', 'classic')); ?>"></a></div>
	</div>
	<div class="right_sections">
			<div class="versiones"><?php _e('Version',  'classic') ?> <?php _e('1.0.1',  'classic') ?></div>
			<div class="powereds"><?php _e('By',  'classic') ?> <a target="_blank" href="https://market.osclass.org/user/profile/2614"><?php _e('OsclassDotMe',  'classic') ?></a></div>

	</div>
</div>
<div id="tabs">
    <ul>
        <li class="current"><a href="#tab-1"><?php _e('General',  'classic') ?></a></li>
        <li><a href="#tab-2"><?php _e('Logo and Favicon',  'classic') ?></a></li>
        <li><a href="#tab-3"><?php _e('Category images',  'classic') ?></a></li>
        <li><a href="#tab-4"><?php _e('Update and support',  'classic') ?></a></li>
    </ul>
    <div class="tab">
        <div id="tab-1" class="tab-content">
           <?php include('general.php') ?>
        </div>
        <div id="tab-2" class="tab-content">
            <?php include('logo.php') ?>
        </div>
        <div id="tab-3" class="tab-content">
            <?php include('category.php') ?>
        </div>
        <div id="tab-4" class="tab-content">
			 <?php include('info.php') ?>       
		</div>
</div>

<script>
$(document).ready(function() {
    $( "#tabs" ).tabs();
});
</script>
