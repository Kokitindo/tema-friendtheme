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
<?php osc_show_widgets('footer') ; ?>
        <?php if(osc_get_preference('footer_ads', 'classic_theme')!='' ) { ?>
        <div class="container">
		<div class="row">
			<div class="col-md-12 centeres marginedmini">
            <?php echo osc_get_preference('footer_ads', 'classic_theme'); ?> 
            </div>
	    </div>
        </div>
        <?php } ?> 

<!-- footer -->   
<?php if(osc_get_preference('show_statistic', 'classic_theme') == "show") { ?>
<div class="footer_stats">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-3">
				<span class="fact">
					<?php echo osc_total_active_items(); ?></span>
				<div class="fact-name"><?php _e("Active ads", 'classic'); ?></div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<span class="fact">
				    <?php osc_get_premiums($max=100); { ?> 
					<?php echo osc_count_premiums(); ?>
					<?php } ?>
					</span>
				<div class="fact-name"><?php _e("Premium ads", 'classic'); ?><br><?php if( search_title() != '' ) { ?><?php _e("in", 'classic'); ?> <?php echo search_title(); ?><?php } ?></div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<span class="fact">
				 <?php echo osc_total_users(); ?></span>
				<div class="fact-name"><?php _e("Total user", 'classic'); ?></div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<span class="fact">
					<?php echo osc_count_cities($region = '%%%%'); ?></span>
				<div class="fact-name">
					<?php _e("Total City", 'classic'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<div class="footers">
          <div class="footers-body">
            <div class="footer">
              <div class="container">
                <div class="clearfix">
                  <div class="footer-nav col-md-33 col-xs-12">
                    <div class="nav-title"><?php if(osc_get_preference('title_one', 'classic_theme')!='' ) { ?><?php echo osc_get_preference('title_one', 'classic_theme'); ?><?php } ?></div>
                    <div class="widget-body"><?php if(osc_get_preference('widget_one', 'classic_theme')!='' ) { ?><?php echo osc_get_preference('widget_one', 'classic_theme'); ?><?php } ?></div>
                  </div>
                  <div class="footer-nav col-md-33 col-xs-12">
                    <div class="nav-title"><?php if(osc_get_preference('title_two', 'classic_theme')!='' ) { ?><?php echo osc_get_preference('title_two', 'classic_theme'); ?><?php } ?></div>
                    <div class="widget-body"><?php if(osc_get_preference('widget_two', 'classic_theme')!='' ) { ?><?php echo osc_get_preference('widget_two', 'classic_theme'); ?><?php } ?></div>
                  </div>
                  <div class="footer-nav col-md-2 col-sm-6 col-xs-12">
                    <div class="nav-title"><?php _e("Pages", 'classic'); ?></div>
                    <div class="nav-item"><a href="<?php echo osc_contact_url(); ?>"><?php _e("Contact", 'classic'); ?> </a></div>
                    <?php osc_reset_static_pages(); ?>
                    <?php while( osc_has_static_pages() ) { ?>
                    <div class="nav-item"><a href="<?php echo osc_static_page_url(); ?>"><?php echo osc_static_page_title(); ?></a></div>
                    <?php } ?>
                  </div>
                  <div class="footer-nav col-md-3 col-sm-6 col-xs-12">
                  <div class="nav-title"><?php _e("Follow us", 'classic'); ?></div>
                       <div class="social-icone">
							<div class="col_cell">
								<ul><?php if(osc_get_preference('facebook_link', 'classic_theme')!='' ) { ?>
									<li><a href="<?php echo osc_get_preference('facebook_link', 'classic_theme'); ?>" target="_blank"><span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i></span></a></li>
									<?php } ?>
									<?php if(osc_get_preference('gplus_link', 'classic_theme')!='' ) { ?>
									<li><a href="<?php echo osc_get_preference('gplus_link', 'classic_theme'); ?>" target="_blank"><span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x"></i></span></a></li>
									<?php } ?>
									<?php if(osc_get_preference('twitter_link', 'classic_theme')!='' ) { ?>
									<li><a href="<?php echo osc_get_preference('twitter_link', 'classic_theme'); ?>" target="_blank"><span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x"></i></span></a></li>
									<?php } ?>
									<?php if(osc_get_preference('pin_link', 'classic_theme')!='' ) { ?>
									<li><a href="<?php echo osc_get_preference('pin_link', 'classic_theme'); ?>" target="_blank"><span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-pinterest fa-stack-1x"></i></span></a></li>
									<?php } ?>
									<?php if(osc_get_preference('instagram_link', 'classic_theme')!='' ) { ?>
									<li><a href="<?php echo osc_get_preference('instagram_link', 'classic_theme'); ?>" target="_blank"><span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x"></i></span></a></li>
									<?php } ?>
									<?php if(osc_get_preference('youtube_link', 'classic_theme')!='' ) { ?>
									<li><a href="<?php echo osc_get_preference('youtube_link', 'classic_theme'); ?>" target="_blank"><span class="fa-stack fa-lg"><i class="fa fa-circle-thin fa-stack-2x"></i><i class="fa fa-youtube fa-stack-1x"></i></span></a></li>
								    <?php } ?>
								</ul>
							</div>
						</div>
                  </div>
                </div>
              </div>
            </div>
          </div><div class="footer-copyright text-center"><?php echo osc_get_preference('footer_copyright', 'classic_theme'); ?></div>
      </div>
      
<a href="#0" class="back-top" title="<?php echo osc_esc_html(__('Back to top','classic')); ?>"><?php _e("Top", 'classic');?> </a>
<!-- version <?php _e('1.0.0',  'classic') ?> -->
<script src="<?php echo osc_current_web_theme_js_url('top.js') ; ?>"></script>
<script>
$(document).ready(function(){
$(function(){
$('#go-show').on('click', function(){
        $('#myTab1 li').removeClass('active');
        $('#myTab1 li:last-child').addClass('active');
        $('#myTabContent div.tab-pane').removeClass('active in');
        $('#myTabContent div.tab-pane:last-child').addClass('active in');
    });
    $('.show-sub').on('click', function(){
        $('.midle-area ul').removeClass('hides');
    });
   
});
$('.user-sort div').click(function() {
						if($(this).hasClass('all')) {
							$('input#sCompany').val('');
						}
						
						if($(this).hasClass('personal')) {
							$('input#sCompany').val(0);
						}
						
						if($(this).hasClass('company')) {
							$('input#sCompany').val(1);
						}
						
						$('.btn-company').click();
					});
});
</script>
<?php osc_current_web_theme_path('includes/js/codejsbawah.php'); ?>
<?php osc_run_hook('footer'); ?>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="../osclass/oc-content/themes/friend/css/slick/slick.min.js" type="text/javascript"></script>
  

  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4
      });
    });
</script>
</body>
</html>