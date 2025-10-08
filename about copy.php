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
                                <span class="trail-end">About Us</span>
                            </div>
                        </div>
                    </div>
                    <div class="featured-title-heading-wrap">
                        <h1 class="feautured-title-heading">
                            About Us
                        </h1>
                    </div>
                </div><!-- /.featured-title-inner-wrap -->
            </div><!-- /#featured-title-inner -->            
        </div>
        <!-- End Featured Title -->

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                       <div class="page-content">
                            <!-- ICONBOX -->
                            <div class="row-iconbox">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="zenith-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                            <div class="zenith-headings style-1 text-center clearfix">
                                                <h2 class="heading">YOUR BEST CHOOSE</h2>
                                                <div class="sep has-icon width-125 clearfix">
                                                    <div class="sep-icon">
                                                        <span class="sep-icon-before sep-center sep-solid"></span>
                                                        <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                        <span class="sep-icon-after sep-center sep-solid"></span>
                                                    </div>
                                                </div>
                                                <p class="sub-heading">More than 500 projects completed in Autora - With over 25 years of combined experience, we have the knowledge to serve you.</p>
                                            </div>
                                            <div class="zenith-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="zenith-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                                <div class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                    <div class="icon-wrap">
                                                        <i class="autora-icon-quality"></i>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="#">BEST QUALITY</a></h5>
                                                        <div class="sep clearfix"></div>
                                                        <p class="sub-heading">Autora Construction Services are committed to meeting the highest quality standards without compromising our safety culture.</p>
                                                    </div>
                                                </div><!-- /.zenith-icon-box -->
                                            </div><!-- /.zenith-content-box -->                                         
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-4">
                                            <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                            <div class="zenith-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                                <div class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                    <div class="icon-wrap">
                                                        <i class="autora-icon-time"></i>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="#">ON TIME</a></h5>
                                                        <div class="sep clearfix"></div>
                                                        <p class="sub-heading">At our company, we respect the customer’s time and schedule and always complete the projects on timely fashion way.</p>
                                                    </div>
                                                </div><!-- /.zenith-icon-box -->
                                            </div><!-- /.zenith-content-box -->
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-4">
                                            <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                            <div class="zenith-content-box clearfix" data-margin="0 5px 0 5px" data-mobilemargin="0 0 0 0">
                                                <div class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                                                    <div class="icon-wrap">
                                                        <i class="autora-icon-author"></i>
                                                    </div>
                                                    <div class="text-wrap">
                                                        <h5 class="heading"><a href="#">EXPERIENCED</a></h5>
                                                        <div class="sep clearfix"></div>
                                                        <p class="sub-heading">As the saying goes practice makes perfect. With our years of experience you can bet on us to get the job done exactly to .</p>
                                                    </div>
                                                </div><!-- /.zenith-icon-box -->
                                            </div><!-- /.zenith-content-box -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="zenith-spacer clearfix" data-desktop="41" data-mobile="35" data-smobile="35"></div>
                                            <div class="elm-button text-center">
                                                <a href="#" class="zenith-button bg-accent">ABOUT US</a>
                                            </div>
                                            <div class="zenith-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END ICONBOX -->

                            <!-- ABOUT -->
                            <div class="row-about">
                                <div class="container-fluid">
                                    <div class="row equalize sm-equalize-auto">
                                        <div class="col-md-6 half-background style-1">
                                            
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6 bg-light-grey">
                                            <div class="zenith-spacer clearfix" data-desktop="64" data-mobile="35" data-smobile="35"></div>
                                            <div class="zenith-content-box clearfix" data-margin="0 25% 0 4.5%" data-mobilemargin="0 0 0 4.5%">
                                                <div class="zenith-headings style-1 clearfix">
                                                    <h2 class="heading">WELCOME TO AUTORA</h2>
                                                    <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>                                               
                                                    <p class="sub-heading margin-top-30">We have successfully completed projects in numerous states across the continental United States. Autora Construction Services has a proven track record of:</p>
                                                </div>
                                                <div class="zenith-spacer clearfix" data-desktop="26" data-mobile="35" data-smobile="35"></div>
                                                <div class="content-list">
                                                    <div class="zenith-list has-icon style-1 icon-left clearfix">
                                                        <div class="inner">
                                                            <span class="item">
                                                                <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                <span class="text">Completing projects on time & Following budget guidelines</span>
                                                            </span>
                                                        </div>
                                                    </div><!-- /.themeslat-list -->
                                                    <div class="zenith-list has-icon style-1 icon-left clearfix">
                                                        <div class="inner">
                                                            <span class="item">
                                                                <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                <span class="text">Elevated quality of workmanship</span>
                                                            </span>
                                                        </div>
                                                    </div><!-- /.themeslat-list -->
                                                    <div class="zenith-list has-icon style-1 icon-left clearfix">
                                                        <div class="inner">
                                                            <span class="item">
                                                                <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                <span class="text">Meeting diverse supplier requirements</span>
                                                            </span>
                                                        </div>
                                                    </div><!-- /.themeslat-list -->
                                                    <div class="zenith-list has-icon style-1 icon-left clearfix">
                                                        <div class="inner">
                                                            <span class="item">
                                                                <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                <span class="text">Implementing appropriate safety precautions and procedures</span>
                                                            </span>
                                                        </div>
                                                    </div><!-- /.themeslat-list -->
                                                </div><!-- /.content-list -->
                                                <div class="zenith-spacer clearfix" data-desktop="42" data-mobile="35" data-smobile="35"></div>
                                                <div class="elm-button">
                                                    <a href="#"  class="zenith-button bg-white">GET IN TOUCH</a>
                                                </div>
                                            </div><!-- /.zenith-content-box --> 
                                            <div class="zenith-spacer clearfix" data-desktop="76" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container-fluid -->
                            </div>
                            <!-- END ABOUT -->

                            <!-- COUNTER -->
                            <div class="row-counter parallax parallax-4 parallax-overlay">
                                <div class="container">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="zenith-spacer clearfix" data-desktop="92" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->                                    
                                    <div class="zenith-row gutter-30 separator light clearfix">
                                        <div class="col span_1_of_3">
                                            <div class="zenith-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                                                <div class="zenith-counter style-1 align-center clearfix">
                                                    <div class="counter-item">
                                                        <div class="inner">
                                                            <div class="text-wrap">
                                                                <div class="number-wrap">
                                                                    <span class="number" data-speed="2000" data-to="9240" data-inviewport="yes">9240</span><span class="suffix">+</span>
                                                                </div>
                                                                <h3 class="heading margin-right-18">PROJECT COMPLETED</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.zenith-counter -->
                                            </div> 
                                            <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>                                                                                  
                                        </div><!-- /.col-md-3 -->
                                        <div class="col span_1_of_3">                                            
                                            <div class="zenith-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                                                <div class="zenith-counter style-1 align-center clearfix">
                                                    <div class="counter-item">
                                                        <div class="inner">
                                                            <div class="text-wrap">
                                                                <div class="number-wrap">
                                                                    <span class="number" data-speed="2000" data-to="336" data-inviewport="yes">336</span><span class="suffix">+</span>
                                                                </div>
                                                                <h3 class="heading margin-right-6">AWARDS WON</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.zenith-counter -->
                                            </div> 
                                            <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>                                      
                                        </div><!-- /.col-md-3 -->
                                        <div class="col span_1_of_3">
                                            <div class="zenith-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                                                <div class="zenith-counter style-1 align-center clearfix">
                                                    <div class="counter-item">
                                                        <div class="inner">
                                                            <div class="text-wrap">
                                                                <div class="number-wrap">
                                                                    <span class="number" data-speed="2000" data-to="725" data-inviewport="yes">725</span><span class="suffix">+</span>
                                                                </div>
                                                                <h3 class="heading margin-right-8">SATISFIED CLIENTS</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.zenith-counter -->
                                            </div>  
                                            <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>                                     
                                        </div><!-- /.col-md-3 -->
                                        <div class="col span_1_of_3">
                                            <div class="zenith-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                                                <div class="zenith-counter style-1 align-center clearfix">
                                                    <div class="counter-item">
                                                        <div class="inner">
                                                            <div class="text-wrap">
                                                                <div class="number-wrap">
                                                                    <span class="number" data-speed="2000" data-to="2984" data-inviewport="yes">2984</span><span class="suffix">+</span>
                                                                </div>
                                                                <h3 class="heading margin-right-10">WORKERS EMPLOYED</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.zenith-counter -->
                                            </div>                                        
                                        </div><!-- /.col-md-3 -->
                                    </div><!-- /.row -->
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="zenith-spacer clearfix" data-desktop="72" data-mobile="60" data-smobile="60"></div>                                        
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                                <div class="bg-parallax-overlay overlay-black style2"></div>
                            </div>
                            <!-- END COUNTER -->

                            <!-- TABS -->
                            <div class="row-tabs">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="zenith-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="zenith-content-box clearfix" data-margin="0 18px 0 0" data-mobilemargin="0 0 0 0">
                                                <div class="zenith-headings style-1 clearfix">
                                                    <h2 class="heading">OVERVIEW</h2>
                                                    <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>                                          
                                                </div>
                                                <div class="zenith-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>
                                                <div class="zenith-tabs style-1 clearfix">
                                                    <ul class="tab-title clearfix">
                                                        <li class="item-title active">
                                                            <span class="inner">Our focus</span>
                                                        </li>
                                                        <li class="item-title">
                                                            <span class="inner">Dedicated</span>
                                                        </li>
                                                        <li class="item-title">
                                                            <span class="inner">Committed</span>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content-wrap clearfix">
                                                        <div class="tab-content">
                                                            <div class="item-content">                                                            
                                                                <p>Our focus is to exceed your goals, meet your timelines and successfully manage your budget. We provide our clients with top-notch general contracting, construction management, site surveys and design build services.</p>
                                                                <div class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We have successfully completed projects in numerous states.</span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->
                                                                <div class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We is licensed to perform general contracting work in most states. </span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->
                                                                <div class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We will be open to obtaining new licensing if an opportunity arises</span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->                                                        
                                                            </div>
                                                        </div><!-- /.tab-content -->
                                                        <div class="tab-content">
                                                            <div class="item-content">                                                            
                                                                <p>Our focus is to exceed your goals, meet your timelines and successfully manage your budget. We provide our clients with top-notch general contracting, construction management, site surveys and design build services.</p>
                                                                <div class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We have successfully completed projects in numerous states.</span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->
                                                                <div class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We is licensed to perform general contracting work in most states. </span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->
                                                                <div class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We will be open to obtaining new licensing if an opportunity arises</span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->                                                        
                                                            </div>
                                                        </div><!-- /.tab-content -->
                                                        <div class="tab-content">
                                                            <div class="item-content">                                                            
                                                                <p>Our focus is to exceed your goals, meet your timelines and successfully manage your budget. We provide our clients with top-notch general contracting, construction management, site surveys and design build services.</p>
                                                                <div class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We have successfully completed projects in numerous states.</span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->
                                                                <div class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We is licensed to perform general contracting work in most states. </span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->
                                                                <div class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                                                    <div class="inner">
                                                                        <span class="item">
                                                                            <span class="icon"><i class="fa fa-check-square"></i></span>
                                                                            <span class="text">We will be open to obtaining new licensing if an opportunity arises</span>
                                                                        </span>
                                                                    </div>
                                                                </div><!-- /.themeslat-list -->                                                        
                                                            </div>
                                                        </div><!-- /.tab-content -->
                                                    </div><!-- /.tab-content-wrap -->
                                                </div><!-- /.zenith-tabs -->
                                            </div><!-- /.zenith-content-box -->                                                
                                        </div><!-- /.col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                            <div class="zenith-content-box" data-margin="0 0 0 18px" data-mobilemargin="0 0 0 0">
                                                <div class="zenith-headings style-1 clearfix">
                                                    <h2 class="heading">FAQs</h2>
                                                    <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>                                          
                                                </div>
                                                <div class="zenith-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>
                                                <div class="zenith-accordions style-1 has-icon icon-left iconstyle-1 clearfix">
                                                    <div class="accordion-item active">
                                                        <h3 class="accordion-heading"><span class="inner">Are there any hosting companies you recommend?</span></h3>
                                                        <div class="accordion-content">
                                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</div>
                                                        </div>
                                                    </div><!-- /.accordion-item -->
                                                    <div class="accordion-item">
                                                        <h3 class="accordion-heading"><span class="inner">We use technology to do the job more quickly</span></h3>
                                                        <div class="accordion-content">
                                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</div>
                                                        </div>
                                                    </div><!-- /.accordion-item -->
                                                    <div class="accordion-item ">
                                                        <h3 class="accordion-heading"><span class="inner">Employees are continually trained on safety issues</span></h3>
                                                        <div class="accordion-content">
                                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</div>
                                                        </div>
                                                    </div><!-- /.accordion-item -->
                                                </div><!-- /.zenith-accordion -->
                                            </div><!-- /.zenith-content-box -->                                                
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="0"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END TABS -->

                            <!-- PARTNER -->
                            <div class="row-partner">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="zenith-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                                            <div class="zenith-carousel-box clearfix" data-gap="5" data-column="5" data-column2="3" data-column3="2" data-auto="true">
                                                <div class="owl-carousel owl-theme">
                                                    <div class="zenith-partner style-1 align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-1.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-1-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /zenith-partner -->
                                                    <div class="zenith-partner style-1 align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-2.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-2-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /zenith-partner -->
                                                    <div class="zenith-partner style-1  align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-3.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-3-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /zenith-partner -->
                                                    <div class="zenith-partner style-1 align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-4.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-4-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /zenith-partner -->
                                                    <div class="zenith-partner style-1 align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-5.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-5-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /zenith-partner -->
                                                    <div class="zenith-partner style-1 align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-1.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-1-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /zenith-partner -->
                                                    <div class="zenith-partner style-1 align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-2.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-2-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /zenith-partner -->
                                                    <div class="zenith-partner style-1  align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-3.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-3-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /zenith-partner -->
                                                    <div class="zenith-partner style-1 align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-4.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-4-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /zenith-partner -->
                                                    <div class="zenith-partner style-1 align-center clearfix">
                                                        <div class="partner-item">
                                                            <div class="inner">
                                                                <div class="thumb">
                                                                    <img src="assets/img/partners/partner-5.png" alt="Image" class="partner-default">
                                                                    <img src="assets/img/partners/partner-5-color.png" alt="Image" class="partner-color">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /zenith-partner -->                                                      
                                                </div>
                                            </div><!-- /.zenith-carousel-box -->
                                            <div class="zenith-spacer clearfix" data-desktop="66" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END PARTNER -->

                            <!-- QUOTE -->
                            <div class="row-quote bg-row-1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="zenith-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>
                                            <div class="zenith-quote style-1 clearfix">
                                                <div class="quote-item">
                                                    <div class="inner">
                                                        <div class="heading-wrap">
                                                            <h3 class="heading">START EXECUTING YOUR PROJECT</h3>
                                                        </div>
                                                        <div class="button-wrap has-icon icon-left">
                                                            <a href="#" class="zenith-button bg-white small"><span>(+613) 8376 6284 <span class="icon"><i class="autora-icon-phone-contact"></i></span></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="zenith-spacer clearfix" data-desktop="33" data-mobile="35" data-smobile="35"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END QUOTE -->

                            <!-- TEAM -->
                            <div class="row-team">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="zenith-spacer clearfix" data-desktop="61" data-mobile="60" data-smobile="60"></div>
                                            <div class="zenith-headings style-1 text-center clearfix">
                                                <h2 class="heading">LEADERSHIP TEAM</h2>
                                                <div class="sep has-icon width-125 clearfix">
                                                    <div class="sep-icon">
                                                        <span class="sep-icon-before sep-center sep-solid"></span>
                                                        <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                                                        <span class="sep-icon-after sep-center sep-solid"></span>
                                                    </div>
                                                </div>
                                                <p class="sub-heading font-weight-400 text-808 max-width-680">With us you will have the peace of mind knowing that your dream home project is in the hands of a licensed fully insured building company.</p>
                                            </div>
                                            <div class="zenith-spacer clearfix" data-desktop="39" data-mobile="35" data-smobile="35"></div>
                                            <div class="zenith-carousel-box data-effect has-bullets bullet-circle bullet24 clearfix" data-gap="30" data-column="3" data-column2="2" data-column3="1" data-auto="true">
                                                <div class="owl-carousel owl-theme">
                                                    <div class="zenith-team style-1 align-center clearfix">
                                                        <div class="team-item">
                                                            <div class="inner">
                                                                <div class="thumb data-effect-item">
                                                                    <img src="assets/img/team/member-1-370x359.jpg" alt="Image">
                                                                    <ul class="socials clearfix">
                                                                        <li class="facebook"><a href="#"><i class="autora-icon-facebook"></i></a></li>
                                                                        <li class="twitter"><a href="#"><i class="autora-icon-twitter"></i></a></li>
                                                                        <li class="camera"><a href="#"><i class="autora-icon-camera-outline"></i></a></li>
                                                                    </ul>
                                                                    <div class="overlay-effect bg-color-4"></div>
                                                                </div>
                                                                <div class="text-wrap">
                                                                    <h6 class="name">Aaron Stanley</h6>
                                                                    <div class="position">Project Manager</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.zenith-team -->
                                                    <div class="zenith-team style-1 align-center clearfix">
                                                        <div class="team-item">
                                                            <div class="inner">
                                                                <div class="thumb data-effect-item">
                                                                    <img src="assets/img/team/member-2-370x359.jpg" alt="Image">
                                                                    <ul class="socials clearfix">
                                                                        <li class="facebook"><a href="#"><i class="autora-icon-facebook"></i></a></li>
                                                                        <li class="twitter"><a href="#"><i class="autora-icon-twitter"></i></a></li>
                                                                        <li class="camera"><a href="#"><i class="autora-icon-camera-outline"></i></a></li>
                                                                    </ul>
                                                                    <div class="overlay-effect bg-color-4"></div>
                                                                </div>
                                                                <div class="text-wrap">
                                                                    <h6 class="name">David Gunsul</h6>
                                                                    <div class="position">President</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.zenith-team -->
                                                    <div class="zenith-team style-1 align-center clearfix">
                                                        <div class="team-item">
                                                            <div class="inner">
                                                                <div class="thumb data-effect-item">
                                                                    <img src="assets/img/team/member-3-370x359.jpg" alt="Image">
                                                                    <ul class="socials clearfix">
                                                                        <li class="facebook"><a href="#"><i class="autora-icon-facebook"></i></a></li>
                                                                        <li class="twitter"><a href="#"><i class="autora-icon-twitter"></i></a></li>
                                                                        <li class="camera"><a href="#"><i class="autora-icon-camera-outline"></i></a></li>
                                                                    </ul>
                                                                    <div class="overlay-effect bg-color-4"></div>
                                                                </div>
                                                                <div class="text-wrap">
                                                                    <h6 class="name">Richard Johnson</h6>
                                                                    <div class="position">Safety Director</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.zenith-team -->
                                                     <div class="zenith-team style-1 align-center clearfix">
                                                        <div class="team-item">
                                                            <div class="inner">
                                                                <div class="thumb data-effect-item">
                                                                    <img src="assets/img/team/member-1-370x359.jpg" alt="Image">
                                                                    <ul class="socials clearfix">
                                                                        <li class="facebook"><a href="#"><i class="autora-icon-facebook"></i></a></li>
                                                                        <li class="twitter"><a href="#"><i class="autora-icon-twitter"></i></a></li>
                                                                        <li class="camera"><a href="#"><i class="autora-icon-camera-outline"></i></a></li>
                                                                    </ul>
                                                                    <div class="overlay-effect bg-color-4"></div>
                                                                </div>
                                                                <div class="text-wrap">
                                                                    <h6 class="name">Aaron Stanley</h6>
                                                                    <div class="position">Project Manager</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.zenith-team -->
                                                    <div class="zenith-team style-1 align-center clearfix">
                                                        <div class="team-item">
                                                            <div class="inner">
                                                                <div class="thumb data-effect-item">
                                                                    <img src="assets/img/team/member-2-370x359.jpg" alt="Image">
                                                                    <ul class="socials clearfix">
                                                                        <li class="facebook"><a href="#"><i class="autora-icon-facebook"></i></a></li>
                                                                        <li class="twitter"><a href="#"><i class="autora-icon-twitter"></i></a></li>
                                                                        <li class="camera"><a href="#"><i class="autora-icon-camera-outline"></i></a></li>
                                                                    </ul>
                                                                    <div class="overlay-effect bg-color-4"></div>
                                                                </div>
                                                                <div class="text-wrap">
                                                                    <h6 class="name">David Gunsul</h6>
                                                                    <div class="position">President</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.zenith-team -->
                                                    <div class="zenith-team style-1 align-center clearfix">
                                                        <div class="team-item">
                                                            <div class="inner">
                                                                <div class="thumb data-effect-item">
                                                                    <img src="assets/img/team/member-3-370x359.jpg" alt="Image">
                                                                    <ul class="socials clearfix">
                                                                        <li class="facebook"><a href="#"><i class="autora-icon-facebook"></i></a></li>
                                                                        <li class="twitter"><a href="#"><i class="autora-icon-twitter"></i></a></li>
                                                                        <li class="camera"><a href="#"><i class="autora-icon-camera-outline"></i></a></li>
                                                                    </ul>
                                                                    <div class="overlay-effect bg-color-4"></div>
                                                                </div>
                                                                <div class="text-wrap">
                                                                    <h6 class="name">Richard Johnson</h6>
                                                                    <div class="position">Safety Director</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.zenith-team -->
                                                     <div class="zenith-team style-1 align-center clearfix">
                                                        <div class="team-item">
                                                            <div class="inner">
                                                                <div class="thumb data-effect-item">
                                                                    <img src="assets/img/team/member-1-370x359.jpg" alt="Image">
                                                                    <ul class="socials clearfix">
                                                                        <li class="facebook"><a href="#"><i class="autora-icon-facebook"></i></a></li>
                                                                        <li class="twitter"><a href="#"><i class="autora-icon-twitter"></i></a></li>
                                                                        <li class="camera"><a href="#"><i class="autora-icon-camera-outline"></i></a></li>
                                                                    </ul>
                                                                    <div class="overlay-effect bg-color-4"></div>
                                                                </div>
                                                                <div class="text-wrap">
                                                                    <h6 class="name">Aaron Stanley</h6>
                                                                    <div class="position">Project Manager</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.zenith-team -->
                                                    <div class="zenith-team style-1 align-center clearfix">
                                                        <div class="team-item">
                                                            <div class="inner">
                                                                <div class="thumb data-effect-item">
                                                                    <img src="assets/img/team/member-2-370x359.jpg" alt="Image">
                                                                    <ul class="socials clearfix">
                                                                        <li class="facebook"><a href="#"><i class="autora-icon-facebook"></i></a></li>
                                                                        <li class="twitter"><a href="#"><i class="autora-icon-twitter"></i></a></li>
                                                                        <li class="camera"><a href="#"><i class="autora-icon-camera-outline"></i></a></li>
                                                                    </ul>
                                                                    <div class="overlay-effect bg-color-4"></div>
                                                                </div>
                                                                <div class="text-wrap">
                                                                    <h6 class="name">David Gunsul</h6>
                                                                    <div class="position">President</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.zenith-team -->
                                                    <div class="zenith-team style-1 align-center clearfix">
                                                        <div class="team-item">
                                                            <div class="inner">
                                                                <div class="thumb data-effect-item">
                                                                    <img src="assets/img/team/member-3-370x359.jpg" alt="Image">
                                                                    <ul class="socials clearfix">
                                                                        <li class="facebook"><a href="#"><i class="autora-icon-facebook"></i></a></li>
                                                                        <li class="twitter"><a href="#"><i class="autora-icon-twitter"></i></a></li>
                                                                        <li class="camera"><a href="#"><i class="autora-icon-camera-outline"></i></a></li>
                                                                    </ul>
                                                                    <div class="overlay-effect bg-color-4"></div>
                                                                </div>
                                                                <div class="text-wrap">
                                                                    <h6 class="name">Richard Johnson</h6>
                                                                    <div class="position">Safety Director</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.zenith-team -->
                                                </div><!-- /.owl-carousel -->
                                            </div><!-- /.zenith-carousel -->
                                            <div class="zenith-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END TEAM -->
                       </div><!-- /.page-content -->
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->

        <!-- Footer -->
        <?php
      include 'includes/footer.php';
      include 'includes/footscript.html'; ?>
</body>

</html>

