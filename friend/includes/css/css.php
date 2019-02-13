<style>
body{
        background: <?php echo osc_get_preference('background_color', 'classic_theme'); ?>;
}
a, .category-name{
    color: <?php echo osc_get_preference('a_color', 'classic_theme'); ?>;
}
a:hover, .category-name:hover{
    color: <?php echo osc_get_preference('a_hover', 'classic_theme'); ?>;
}
.cat-title a,h1,h2,h3,h4,.pricess, .title-public, .title-all{
    color: <?php echo osc_get_preference('hone_color', 'classic_theme'); ?>;
}
#search-head{
    background-color: <?php echo osc_get_preference('theme_color', 'classic_theme'); ?>;
}
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus, .navbar-default, .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    background-color: <?php echo osc_get_preference('theme_color', 'classic_theme'); ?>;
    border-color: <?php echo osc_get_preference('theme_color', 'classic_theme'); ?>;
}
.midle-area h1,.main-top .page-title, .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-text, .navbar-default .navbar-nav > li > a, .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: <?php echo osc_get_preference('menu_color', 'classic_theme'); ?>;
}
.dropdown-menu, .dropdown-menu li a {
    background-color: <?php echo osc_get_preference('theme_color', 'classic_theme'); ?>;
    color: <?php echo osc_get_preference('menu_color', 'classic_theme'); ?>;
}
.dropdown-menu li a:hover, .dropdown-menu li a:focus, .dropdown-menu .active a, .dropdown-menu .active a:hover, .dropdown-menu .active a:focus {
    color: <?php echo osc_get_preference('menus_color', 'classic_theme'); ?>;
    background-color: <?php echo osc_get_preference('menu_back', 'classic_theme'); ?>;
    outline: none;
}
ul.subcategory li a{
    color: <?php echo osc_get_preference('menu_color', 'classic_theme'); ?>;
}
.seller-background, ul.subcategory li,.main-top, .second-area{
    background-color: <?php echo osc_get_preference('theme_color', 'classic_theme'); ?>;
}
.price-product, .nav-tabs.nav-justified > li.active > a {
    color: <?php echo osc_get_preference('price_color', 'classic_theme'); ?>;
}
#myTab1 li.active {
    border-top: <?php echo osc_get_preference('price_color', 'classic_theme'); ?> 2px solid;
}
.footers, .footer {
    color: <?php echo osc_get_preference('footer_color', 'classic_theme'); ?>;
    background-color: <?php echo osc_get_preference('footer_back', 'classic_theme'); ?>;
}
.footer-nav .nav-title,.footer-nav .nav-item > a:hover, .footer-nav .nav-item > a:active,.footer-nav .nav-item > a,.social-icone ul li a{
    color: <?php echo osc_get_preference('footer_color', 'classic_theme'); ?>;
}
.footer-copyright{
    background: rgba(12, 12, 12, 0.3);
}
.photo-count{
     background: <?php echo osc_get_preference('ribbon_color', 'classic_theme'); ?>;
}
.thumbnail.product-thumb:hover {
    border: <?php echo osc_get_preference('ribbon_color', 'classic_theme'); ?> 1px solid;
}
.ribbonz span {
    background: <?php echo osc_get_preference('ribbon_color', 'classic_theme'); ?>;
    background: linear-gradient(<?php echo osc_get_preference('ribbon_color', 'classic_theme'); ?> 0%, <?php echo osc_get_preference('ribbon_color', 'classic_theme'); ?> 100%);
}
.ribbonz span::before {
    border-left: 3px solid <?php echo osc_get_preference('ribbon_color', 'classic_theme'); ?>;
    border-top: 3px solid <?php echo osc_get_preference('ribbon_color', 'classic_theme'); ?>;
}
.ribbonz span::after {
    border-right: 3px solid <?php echo osc_get_preference('ribbon_color', 'classic_theme'); ?>;
    border-top: 3px solid <?php echo osc_get_preference('ribbon_color', 'classic_theme'); ?>;
}
.ads-title, .title-maps {
    color: <?php echo osc_get_preference('a_color', 'classic_theme'); ?>;
    border-bottom: <?php echo osc_get_preference('a_color', 'classic_theme'); ?> 1px dotted;
}
.footer-copyright {
    color: #e6e6e6;
}
@media (max-width: 767px){
.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
    color: <?php echo osc_get_preference('menus_color', 'classic_theme'); ?>;
    background-color: <?php echo osc_get_preference('menu_back', 'classic_theme'); ?>;
}
.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus, .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: <?php echo osc_get_preference('menus_color', 'classic_theme'); ?>;
    background-color: <?php echo osc_get_preference('menu_back', 'classic_theme'); ?>;
}
}
<?php echo osc_get_preference('css_text', 'classic_theme'); ?>
</style>