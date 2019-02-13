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
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
<head>
    <?php osc_current_web_theme_path('includes/head.php'); ?>
</head>
<body>
   <!-- header one -->

   <div class="bb-top-bar hidden-xs hidden-sm">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 p-l-0 p-r-0">
          <ul class="bb-top-list">
            <li>
              <a href="<?php echo osc_base_url() ; ?>"><?php echo osc_get_preference('welcome_text', 'classic_theme'); ?></a>
            </li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-6">
          <ul class="bb-top-list bb-top-list-right">
            <li>
              <a href="https://www.belanjabekas.com/page/lelang">Lelang</a>
            </li>
            <li>
              <a href="https://www.belanjabekas.com/page/aboutus">Tentang Kami</a>
            </li>
            <li>
              <a href="https://www.belanjabekas.com/page/contact-us">Hubungi Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- header two <--></-->
  <div class="bb-bottom-bar">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 p-l-0 p-r-0">

          <!-- NavBar For Mobile -->
          <nav id="menu" class="panel bb-panel navbar-default" role="navigation">
          </nav>

          <nav class="navbar">
            <div class="container-fluid">

              <div class="col-sm-4 col-xs-7 col-md-1 super-xs-left" id="navbar-collapse-mobile">
                <div class="navbar-header">
                  <button type="button"  class="navbar-toggle navbar-danger collapsed menu-link" style="color: red;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="https://www.belanjabekas.com">
                    <!-- <img src="localhost/katabuku/assets/image/katabuku.png'; ?>"> -->
                  </a>
                </div>
              </div>

              <!-- kategori barang tooltive -->              
              <div class="navigation-collapse">
              <!-- <div class="bb-overlay" style="z-index: 3;"></div> -->

                <div class="col-sm-1 col-md-1 col-lg-1  hidden-xs hidden-sm" id="bb-list-category">
                  <div class="bb-list-category">
                    <ul class="bb-list">
                      <li class="bb-list-category-mobile"><i class="fa fa-list"></i></li>
                      <li class="bb-list-category-dekstop"> <i class="fa fa-angle-down" aria-hidden="true"></i></li>
                      <li class="bb-list-category-dekstop">Kategori</li>
                    </ul>

                    <div class="bb-category" style="z-index: 3;">
                      <div class="container">
                        <div class="row">
                          <div class="col-xs-11 col-md-12 col-lg-10">
                            <div class="bb-category-box">
                              <div class="row">
                                <div class="col-xs-3">
                                  <ul class="bb-list">
                                    
                                    <li>
                                      
                                      <div class="bb-category-img">
                                        <img src="https://www.belanjabekas.com/content/official/20171011093940iconbaru-01.jpg">
                                      </div>
                                      <a href="https://www.belanjabekas.com/p/elektronik">Elektronik</a>
                                      
                                    </li>
                                    
                                  </ul>
                                </div>
                                <div class="col-xs-3">
                                  <ul class="bb-list">
                                    
                                    <li>
                                      
                                      <div class="bb-category-img">
                                        <img src="https://www.belanjabekas.com/content/official/20171011094308iconbaru-03.jpg">
                                      </div>
                                      <a href="https://www.belanjabekas.com/p/fashion-anak">Fashion Anak</a>
                                      
                                    </li>
                                    
                                  </ul>
                                </div>
                                <div class="col-xs-3">
                                  <ul class="bb-list">
                                    
                                    <li>
                                      
                                      <div class="bb-category-img">
                                        <img src="https://www.belanjabekas.com/content/official/20171011094209iconbaru-08.jpg">
                                      </div>
                                      <a href="https://www.belanjabekas.com/p/fashion-pria">Fashion Pria</a>
                                      
                                    </li>
                                    
                                  </ul>
                                </div>
                                <div class="col-xs-3">
                                  <ul class="bb-list">
                                    
                                    <li>
                                      
                                      <div class="bb-category-img">
                                        <img src="https://www.belanjabekas.com/content/official/20171011094234iconbaru-07.jpg">
                                      </div>
                                      <a href="https://www.belanjabekas.com/p/fashion-wanita">Fashion Wanita</a>
                                      
                                    </li>
                                    
                                  </ul>
                                </div>
                              </div><div class="row">                                                                               <div class="col-xs-3">
                                <ul class="bb-list">
                                  
                                  <li>
                                    
                                    <div class="bb-category-img">
                                      <img src="https://www.belanjabekas.com/content/official/20171011094731iconbaru-02.jpg">
                                    </div>
                                    <a href="https://www.belanjabekas.com/p/fotografi">Fotografi</a>
                                    
                                  </li>
                                  
                                </ul>
                              </div>
                              <div class="col-xs-3">
                                <ul class="bb-list">
                                  
                                  <li>
                                    
                                    <div class="bb-category-img">
                                      <img src="https://www.belanjabekas.com/content/official/20171011094042iconbaru-06.jpg">
                                    </div>
                                    <a href="https://www.belanjabekas.com/p/hobi-dan-hiburan">Hobi & Hiburan</a>
                                    
                                  </li>
                                  
                                </ul>
                              </div>
                              <div class="col-xs-3">
                                <ul class="bb-list">
                                  
                                  <li>
                                    
                                    <div class="bb-category-img">
                                      <img src="https://www.belanjabekas.com/content/official/20171102184605icon-recovered-13.jpg">
                                    </div>
                                    <a href="https://www.belanjabekas.com/p/ibu-dan-bayi">Ibu dan Bayi</a>
                                    
                                  </li>
                                  
                                </ul>
                              </div>
                              <div class="col-xs-3">
                                <ul class="bb-list">
                                  
                                  <li>
                                    
                                    <div class="bb-category-img">
                                      <img src="https://www.belanjabekas.com/content/official/20171011094822iconbaru-05.jpg">
                                    </div>
                                    <a href="https://www.belanjabekas.com/p/jam-tangan-perhiasan">Jam Tangan & Perhiasan</a>
                                    
                                  </li>
                                  
                                </ul>
                              </div>
                            </div><div class="row">                                                                               <div class="col-xs-3">
                              <ul class="bb-list">
                                
                                <li>
                                  
                                  <div class="bb-category-img">
                                    <img src="https://www.belanjabekas.com/content/official/20171011094334iconbaru-10.jpg">
                                  </div>
                                  <a href="https://www.belanjabekas.com/p/kesehatan-kecantikan">Kesehatan & Kecantikan</a>
                                  
                                </li>
                                
                              </ul>
                            </div>
                            <div class="col-xs-3">
                              <ul class="bb-list">
                                
                                <li>
                                  
                                  <div class="bb-category-img">
                                    <img src="https://www.belanjabekas.com/content/official/20171129114502icon-recovered-08.jpg">
                                  </div>
                                  <a href="https://www.belanjabekas.com/p/muslim">Muslim</a>
                                  
                                </li>
                                
                              </ul>
                            </div>
                            <div class="col-xs-3">
                              <ul class="bb-list">
                                
                                <li>
                                  
                                  <div class="bb-category-img">
                                    <img src="https://www.belanjabekas.com/content/official/20171011094847iconbaru-04.jpg">
                                  </div>
                                  <a href="https://www.belanjabekas.com/p/olahraga">Olahraga</a>
                                  
                                </li>
                                
                              </ul>
                            </div>
                            <div class="col-xs-3">
                              <ul class="bb-list">
                                
                                <li>
                                  
                                  <div class="bb-category-img">
                                    <img src="https://www.belanjabekas.com/content/official/20171011094134iconbaru-13.jpg">
                                  </div>
                                  <a href="https://www.belanjabekas.com/p/otomotif">Otomotif</a>
                                  
                                </li>
                                
                              </ul>
                            </div>
                          </div><div class="row">                                                                               <div class="col-xs-3">
                            <ul class="bb-list">
                              
                              <li>
                                
                                <div class="bb-category-img">
                                  <img src="https://www.belanjabekas.com/content/official/20171011094754bangkuuuuu-12.jpg">
                                </div>
                                <a href="https://www.belanjabekas.com/p/peralatan-rumah-tangga">Peralatan Rumah Tangga</a>
                                
                              </li>
                              
                            </ul>
                          </div>
                          <div class="col-xs-3">
                            <ul class="bb-list">
                              
                              <li>
                                
                                <div class="bb-category-img">
                                  <img src="https://www.belanjabekas.com/content/official/20171227154308electroniccigarette-512.png">
                                </div>
                                <a href="https://www.belanjabekas.com/p/vape">Vape</a>
                                
                              </li>
                              
                            </ul>
                          </div>
                          <div class="col-xs-3">
                            <ul class="bb-list">
                              
                              <li>
                                
                                <div class="bb-category-img">
                                  <img src="https://www.belanjabekas.com/content/official/20171011094702iconbaru-09.jpg">
                                </div>
                                <a href="https://www.belanjabekas.com/p/vintage">Vintage</a>
                                
                              </li>
                              
                            </ul>
                          </div>
                        </div>

                        <a href="/category" class="btn btn-primary btn-block btn-all-category">Semua Kategori</a>
                        <div class="clearfix"></div>

                      </div>
                      </div>
                      </div>
                      </div>
                    </div>

                  

                  </div>
                </div>
              </div><!-- end class="navigation-collapse" -->



              <!-- no coding -->
              <div class="col-sm-4 col-md-4 col-lg-1 hidden-xs hidden-sm p-l-0 p-r-0"></div>

              <div class="col-sm-4 col-md-4 col-lg-5 hidden-xs hidden-sm p-l-0 p-r-0">

            
                <form action="<?php echo osc_base_url(true); ?>" method="get" role="search" class="nocsrf">
                  <input type="hidden" name="page" value="search" />
                  <fieldset>
                    <div class="form-group" style="padding: 10px">
                      <input type="text" name="sPattern" id="search-bar" class="form-control search-bar pull-left" placeholder="<?php echo osc_esc_html(__(osc_get_preference('keyword_placeholder', 'classic_theme'), 'classic')); ?>">
                      <button type="submit" value="<?php echo osc_esc_html(__('Search','classic')); ?>" id="btn-search-bar" class="btn btn-default btn-register pull-right">
                        <i class="fa fa-search" aria-hidden="true"></i>
                      </button>
                    </div>
                  </fieldset>
                </form>
              </div>

              <div class="col-sm-8 col-md-5 col-lg-4 p-r-0 super-xs-right">


                  <ul class="nav navbar-nav pull-right hidden-on-super-xs">
                    

                    <li id="bb-new-product" title="Jual Barang">
                      <a href="<?php echo osc_item_post_url_in_category(); ?>" class="nav-icon-right">
                        <img src="https://www.belanjabekas.com/bima-themes/sitampan/assets/img/icons/add.png" class="img-responsive">
                        <?php _e("Post new ads", 'classic');?>
                      </a>
                    </li>

                    <!-- button header -->
                    <li class="hidden-xs hidden-sm">
                      <a href="<?php echo osc_user_login_url(); ?>"><button href="#" class="btn btn-danger btn-register" style="border-color: white!important"><?php _e("Login", 'classic'); ?></button></a>
                    </li>
                    <li class="hidden-xs hidden-sm">
                      <a class="nav-link" href="<?php echo osc_register_account_url(); ?>"><button class="btn btn-default btn-register thebtnlogin"><?php _e("Register", 'classic'); ?></button>
                      </a>
                    </li>
                    <!-- end button -->

                  </ul>
              </div><!-- end class="col-sm-8 col-md-5 col-lg-4 p-r-0 super-xs-right" -->
            </div>
          </nav>
          <!-- tombol close navbar mobile -->
          <div class="bb-panel-overlay">
            <div class="bb-panel-overlay-close">
              <i class="fa fa-times"></i>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
