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
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo meta_title(); ?></title>
<meta name="title" content="<?php echo osc_esc_html(meta_title()); ?>" />
<?php if( meta_description() != '' ) { ?>
<meta name="description" content="<?php echo osc_esc_html(meta_description()); ?>" />
<?php } ?>
<?php if( function_exists('meta_keywords') ) { ?>
<?php if( meta_keywords() != '' ) { ?>
<meta name="keywords" content="<?php echo osc_esc_html(meta_keywords()); ?>" />
<?php } ?>
<?php } ?>
<?php if( osc_get_canonical() != '' ) { ?>
<link rel="canonical" href="<?php echo osc_get_canonical(); ?>"/>
<?php } ?>
<!-- Favicon here -->
<?php echo favicon_images(); ?>
<!-- Search js -->
<script type="text/javascript">
    var classic = window.classic || {};
    classic.base_url = '<?php echo osc_base_url(true); ?>';
    var fileDefaultText = '<?php echo osc_esc_js( __('No file selected', 'classic') ) ; ?>';
    var fileBtnText     = '<?php echo osc_esc_js( __('Choose File', 'classic') ) ; ?>';
</script>
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<!-- internal css -->
<link rel="stylesheet" type="text/css" href="https://www.belanjabekas.com/bima-themes/sitampan/assets/css/styles.css?v=20190206212633">
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="https://www.belanjabekas.com/bima-themes/sitampan/vendors/bootstrap/css/bootstrap.min.css?v=2">
<!-- vendor css -->
<link rel="stylesheet" type="text/css" href="https://www.belanjabekas.com/bima-themes/sitampan/vendors/bxslider/jquery.bxslider.min.css">
<link rel="stylesheet" type="text/css" href="https://www.belanjabekas.com/bima-themes/sitampan/vendors/slick/slick.css">
<link rel="stylesheet" type="text/css" href="https://www.belanjabekas.com/bima-themes/sitampan/vendors/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="https://www.belanjabekas.com/bima-themes/sitampan/vendors/slick-lightbox/slick-lightbox.css">
<!-- Style CSS -->
<link href="<?php echo osc_current_web_theme_styles_url('style.css') ; ?>" rel="stylesheet">
<?php if(arabic_language_direction()=='rtl'){ ?>
<!-- RTL CSS -->
<link href="<?php echo osc_current_web_theme_url('css/rtl.css') ; ?>" rel="stylesheet" type="text/css" />
<?php } ?>
<!-- css color here -->
<?php if(osc_get_preference('show_css', 'classic_theme') == "1") { ?>
<?php osc_current_web_theme_path('includes/css/css.php'); ?>
<?php } ?>
<!-- javascript -->
<?php osc_current_web_theme_path('includes/js/codejs.php'); ?>
<!-- jQuery -->
<script src="<?php echo osc_current_web_theme_js_url('jquery.js') ; ?>"></script>
<script type="text/javascript" src="https://www.belanjabekas.com/bima-themes/sitampan/assets/js/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="<?php echo osc_current_web_theme_js_url('bootstrap.js') ; ?>"></script>
<?php 
    osc_enqueue_script('jquery-ui');
    osc_run_hook('header');
FieldForm::i18n_datePicker();
?>

<link rel="stylesheet" type="text/css" href="../osclass/oc-content/themes/friend/css/slick/slick.css">
<link rel="stylesheet" type="text/css" href="../osclass/oc-content/themes/friend/css/slick/slick-theme.css">
  <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 65%;
        margin: 0px auto;
        margin-left:  155px;
    }

    .slick-slide {
      margin: 10px 0px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .1;
    }

    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
  </style>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->