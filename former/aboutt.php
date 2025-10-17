<?php

// echo $rows['sitetitle']; exit;
include 'includes/header.php';
?>

<body
  class="header-fixed page no-sidebar header-style-2 topbar-style-2 menu-has-search">
  <div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
      <!-- Header Wrap -->
      <div id="site-header-wrap">
        <!-- Top Bar -->
        <?php
        include 'includes/top-bar.php';
        ?>
        <!-- /#top-bar -->

        <!-- Header -->
        <header id="site-header">
          <div id="site-header-inner" class="container">
            <div class="wrap-inner clearfix">
              <?php
              include 'includes/site-logo.php';
              ?>
              <!-- /#site-logo -->

              <div class="mobile-button">
                <span></span>
              </div>
              <!-- /.mobile-button -->

              <?php
              include 'includes/navbar.php';
              ?>
              <!-- /#main-nav -->

                        <div id="header-search">
                            <a href="#" class="header-search-icon">
                                <span class="search-icon fa fa-search">
                                </span>
                            </a>

                            <form role="search" method="get" class="header-search-form" action="#">
                                <label class="screen-reader-text">Search for:</label>
                                <input type="text" value="" name="s" class="header-search-field" placeholder="Search...">
                                <button type="submit" class="header-search-submit" title="Search"><i class="fa fa-search"></i></button>
                            </form>
                        </div><!-- /#header-search -->
                    </div><!-- /.wrap-inner -->                    
                </div><!-- /#site-header-inner -->
            </header><!-- /#site-header -->
        </div><!-- #site-header-wrap -->

     <!-- Featured Title -->
        <div id="featured-title" class="featured-title clearfix">
            <div id="featured-title-inner" class="container clearfix">
                <div class="featured-title-inner-wrap">                    
                    <div id="breadcrumbs">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumb-trail">
                                <a href="index.html" class="trail-begin">Home</a>
                                <span class="sep">|</span>
                                <a href="page-about.html" class="trail-begin">About us </a>
                                <span class="sep">|</span>
                                <span class="trail-end">About us detail</span>
                            </div>
                        </div>
                    </div>
                    <div class="featured-title-heading-wrap">
                        <h1 class="feautured-title-heading">
                            Who we are?
                        </h1>
                    </div>
                </div><!-- /.featured-title-inner-wrap -->
            </div><!-- /#featured-title-inner -->            
        </div>
        <!-- End Featured Title -->

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap" class="container">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                        <div class="zenith-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                        <div class="zenith-headings style-2 clearfix">
                            <h2 class="heading">OUR COMPANIES</h2>
                            <div class="sep has-width w80 accent-bg clearfix"></div>                                           
                            <p class="sub-heading line-height-24 text-777 margin-top-28 margin-right-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <div class="zenith-spacer clearfix" data-desktop="28" data-mobile="35" data-smobile="35"></div>
                        <div class="zenith-row gutter-15 clearfix">
                            <div class="col span_1_of_4">
                                <div class="zenith-content-box clearfix" data-margin="0 0px 0 0px" data-mobilemargin="0 0 0 0">
                                    <div class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color border-light padding-inner pd33 style-1 clearfix">
                                        <div class="icon-wrap">
                                            <i class="zenith-icon-quality"></i>
                                        </div>
                                        <div class="text-wrap">
                                            <h5 class="heading"><a href="#">BEST QUALITY</a></h5>
                                            <div class="sep clearfix"></div>
                                            <p class="sub-heading">zenith Construction Services are committed to meeting the highest quality standards without compromising our safety culture.</p>
                                        </div>
                                    </div><!-- /.zenith-icon-box -->
                                </div><!-- /.zenith-content-box -->
                            </div><!-- /.col -->
                            <div class="col span_1_of_4">
                                <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                <div class="zenith-content-box clearfix" data-margin="0 0px 0 0px" data-mobilemargin="0 0 0 0">
                                    <div class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color border-light padding-inner pd33 style-1 clearfix">
                                        <div class="icon-wrap">
                                            <i class="zenith-icon-time"></i>
                                        </div>
                                        <div class="text-wrap">
                                            <h5 class="heading"><a href="#">ON TIME</a></h5>
                                            <div class="sep clearfix"></div>
                                            <p class="sub-heading">At our company, we respect the customer’s time and schedule and always complete the projects on timely fashion way.</p>
                                        </div>
                                    </div><!-- /.zenith-icon-box -->
                                </div><!-- /.zenith-content-box -->
                            </div><!-- /.col -->
                            <div class="col span_1_of_4">
                                <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                <div class="zenith-content-box clearfix" data-margin="0 0px 0 0px" data-mobilemargin="0 0 0 0">
                                    <div class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color border-light padding-inner pd33 style-1 clearfix">
                                        <div class="icon-wrap">
                                            <i class="zenith-icon-author"></i>
                                        </div>
                                        <div class="text-wrap">
                                            <h5 class="heading"><a href="#">EXPERIENCED</a></h5>
                                            <div class="sep clearfix"></div>
                                            <p class="sub-heading">As the saying goes practice makes perfect. With our years of experience you can bet on us to get the job done exactly.</p>
                                        </div>
                                    </div><!-- /.zenith-icon-box -->
                                </div><!-- /.zenith-content-box -->
                            </div><!-- /.col -->
                        </div><!-- /.zenith-row -->
                        <div class="zenith-spacer clearfix" data-desktop="45" data-mobile="35" data-smobile="35"></div>
                        <div class="zenith-headings style-2 clearfix">
                            <h2 class="heading">OUR HISTORY</h2>
                            <div class="sep has-width w80 accent-bg clearfix"></div>
                        </div>
                        <div class="zenith-spacer clearfix" data-desktop="24" data-mobile="35" data-smobile="35"></div>
                        <div class="zenith-row separator drank clearfix">                            
                            <div class="span_1_of_6 separator-solid">
                                <div class="flat-content-wrap">
                                    <div class="title">2000</div>
                                    <p>Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo Text seit 1500</p>
                                </div>
                                <div class="flat-content-wrap">
                                    <div class="title">2010</div>
                                    <p>Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo Text seit 1500</p>
                                </div>
                            </div><!-- /.col -->
                            <div class="span_1_of_6 separator-solid">
                                <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                <div class="flat-content-wrap pd26">
                                    <div class="title">2005</div>
                                    <p>Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo Text seit 1500</p>
                                </div>
                                <div class="flat-content-wrap pd26">
                                    <div class="title">2018</div>
                                    <p>Lorem Ipsum ist ein einfacher Demo-Text für die Print- und Schriftindustrie. Lorem Ipsum ist in der Industrie bereits der Standard Demo Text seit 1500</p>
                                </div>
                            </div><!-- /.col -->
                        </div><!-- /.zenith-row -->
                        <div class="zenith-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>
                        <div class="zenith-headings style-2 clearfix">
                            <h2 class="heading">OUR CORE VALUES</h2>
                            <div class="sep has-width w80 accent-bg clearfix"></div>
                        </div>
                        <div class="zenith-spacer clearfix" data-desktop="35" data-mobile="35" data-smobile="35"></div>
                        <div class="zenith-content-box" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                            <div class="zenith-accordions style-3 has-icon icon-left iconstyle-2 our-background clearfix">
                                <div class="accordion-item active">
                                    <h3 class="accordion-heading"><span class="inner">our mission</span></h3>
                                    <div class="accordion-content">
                                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
                                    </div>
                                </div><!-- /.accordion-item -->
                                <div class="accordion-item">
                                    <h3 class="accordion-heading"><span class="inner">our vision</span></h3>
                                    <div class="accordion-content">
                                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
                                    </div>
                                </div><!-- /.accordion-item -->
                                <div class="accordion-item ">
                                    <h3 class="accordion-heading"><span class="inner">our technology</span></h3>
                                    <div class="accordion-content">
                                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </div>
                                    </div>
                                </div><!-- /.accordion-item -->
                            </div><!-- /.zenith-accordion -->
                        </div><!-- /.zenith-content-box -->
                        <div class="zenith-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
                <div id="sidebar">
                    <div class="zenith-spacer clearfix" data-desktop="80" data-mobile="0" data-smobile="0"></div>
                    <div id="inner-sidebar" class="inner-content-wrap">
                        <div class="widget widget_list">
                            <div class="inner">
                                <ul class="list-wrap">
                                    <li class="list-item">
                                        <a href="#"><span class="text">Who we are?</span></a>
                                    </li>
                                    <li class="list-item">
                                        <a href="#"><span class="text">Leadership Team</span></a>
                                    </li>
                                    <li class="list-item">
                                        <a href="#"><span class="text">Careers</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.widget_list -->

                        <div class="widget widget_instagram margin-top-51">
                            <h2 class="widget-title margin-bottom-30"><span>OUR GALLERY</span></h2>
                            <div class="instagram-wrap data-effect clearfix col3 g10">
                                <div class="instagram_badge_image has-effect-icon">
                                    <a href="#" target="_blank" class="data-effect-item">
                                        <span class="item"><img src="assets/img/instagram/instagram-1-83x83.jpg" alt="Image" ></span>
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link">
                                            <span class="icon-3"></span>
                                        </div>
                                    </a>                                    
                                </div>

                                <div class="instagram_badge_image has-effect-icon">
                                    <a href="#" target="_blank" class="data-effect-item">
                                        <span class="item"><img src="assets/img/instagram/instagram-2-83x83.jpg" alt="Image" ></span>
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link">
                                            <span class="icon-3"></span>
                                        </div>
                                    </a>
                                    
                                </div>

                                <div class="instagram_badge_image has-effect-icon">
                                    <a href="#" target="_blank" class="data-effect-item">
                                        <span class="item"><img src="assets/img/instagram/instagram-3-83x83.jpg" alt="Image"></span>
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link">
                                            <span class="icon-3"></span>
                                        </div>
                                    </a>                                    
                                </div>

                                <div class="instagram_badge_image has-effect-icon">
                                    <a href="#" target="_blank" class="data-effect-item">
                                        <span class="item"><img src="assets/img/instagram/instagram-4-83x83.jpg" alt="Image"></span>
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link">
                                            <span class="icon-3"></span>
                                        </div>
                                    </a>
                                </div>

                                <div class="instagram_badge_image has-effect-icon">
                                    <a href="#" target="_blank" class="data-effect-item">
                                        <span class="item"><img src="assets/img/instagram/instagram-5-83x83.jpg" alt="Image"></span>
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link">
                                            <span class="icon-3"></span>
                                        </div>
                                    </a>                                    
                                </div>

                                <div class="instagram_badge_image has-effect-icon">
                                    <a href="#" target="_blank" class="data-effect-item">
                                        <span class="item"><img src="assets/img/instagram/instagram-6-83x83.jpg" alt="Image"></span>
                                        <div class="overlay-effect bg-color-2"></div>
                                        <div class="elm-link">
                                            <span class="icon-3"></span>
                                        </div>
                                    </a>                                    
                                </div>
                            </div>
                        </div><!-- /.widget_instagram -->

                        <div class="widget widget_lastest_twitter margin-top-40">
                            <h2 class="widget-title"><span>LATEST TWITTER</span></h2>
                            <ul class="lastest-posts clearfix">
                                <li class="clearfix">
                                    <div class="icon-wrap has-width w30">
                                        <i class="ion-social-twitter"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">@Niche_Theme</a> Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="icon-wrap has-width w30">
                                        <i class="ion-social-twitter"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">@Niche_Theme</a> Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="icon-wrap has-width w30">
                                        <i class="ion-social-twitter"></i>
                                    </div>
                                    <div class="text">
                                        <p><a href="#">@Niche_Theme</a> Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                    </div>
                                </li>                                
                            </ul>
                        </div><!-- /.widget_lastest -->
                    </div>
                    <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="60" data-smobile="60"></div>
                </div><!-- /#sidebar -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->

        <!-- Footer -->
        <?php
      include 'includes/footer.php';
      include 'includes/footscript.html'; ?>
</body>

</html>

