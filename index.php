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
                  <span class="search-icon fa fa-search"> </span>
                </a>

                <form
                  role="search"
                  method="get"
                  class="header-search-form"
                  action="#">
                  <label class="screen-reader-text">Search for:</label>
                  <input
                    type="text"
                    value=""
                    name="s"
                    class="header-search-field"
                    placeholder="Search..." />
                  <button
                    type="submit"
                    class="header-search-submit"
                    title="Search">
                    <i class="fa fa-search"></i>
                  </button>
                </form>
              </div>
              <!-- /#header-search -->
            </div>
            <!-- /.wrap-inner -->
          </div>
          <!-- /#site-header-inner -->
        </header>
        <!-- /#site-header -->
      </div>
      <!-- #site-header-wrap -->

      <!-- Main Content -->
      <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
          <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
              <div class="page-content">
                <!-- SLIDER -->
                <?php
                include 'includes/slider.php';
                ?>
                <!-- END SLIDER -->

                <!-- ICONBOX -->
                <div class="row-iconbox">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="60"
                          data-mobile="60"
                          data-smobile="60"></div>
                        <div
                          class="zenith-headings style-1 text-center clearfix">
                          <!-- <h2 class="heading">YOUR BEST CHOOSE</h2> -->
                          <div class="sep has-icon width-125 clearfix">
                            <div class="sep-icon">
                              <span
                                class="sep-icon-before sep-center sep-solid"></span>
                              <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                              <span
                                class="sep-icon-after sep-center sep-solid"></span>
                            </div>
                          </div>
                          <p class="sub-heading">
                            Zenith Construction Limited has completed more than 500 projects. 
                            Our experience of more than 25 years gives us the expertise to serve you better.
                          </p>
                        </div>
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="42"
                          data-mobile="35"
                          data-smobile="35"></div>
                      </div>
                      <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                      <div class="col-md-4">
                        <div
                          class="zenith-content-box clearfix"
                          data-margin="0 5px 0 5px"
                          data-mobilemargin="0 0 0 0">
                          <div
                            class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                            <div class="icon-wrap">
                              <i class="autora-icon-quality"></i>
                            </div>
                            <div class="text-wrap">
                              <h5 class="heading">
                                <a href="#">BEST STANDARD QUALITY</a>
                              </h5>
                              <div class="sep clearfix"></div>
                              <p class="sub-heading">
                                Our Services at Zenith Construction Limited are committed to
                                meeting the highest quality standards without
                                compromising our safety culture.
                              </p>
                            </div>
                          </div>
                          <!-- /.zenith-icon-box -->
                        </div>
                        <!-- /.zenith-content-box -->
                      </div>
                      <!-- /.col-md-4 -->
                      <div class="col-md-4">
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="0"
                          data-mobile="0"
                          data-smobile="35"></div>
                        <div
                          class="zenith-content-box clearfix"
                          data-margin="0 5px 0 5px"
                          data-mobilemargin="0 0 0 0">
                          <div
                            class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                            <div class="icon-wrap">
                              <i class="autora-icon-time"></i>
                            </div>
                            <div class="text-wrap">
                              <h5 class="heading"><a href="#">ON TIME DELIVERY</a></h5>
                              <div class="sep clearfix"></div>
                              <p class="sub-heading">
                                At our company, we value our customers' time and schedules, 
                                ensuring every project is completed promptly and delivered on time.
                              </p>
                            </div>
                          </div>
                          <!-- /.zenith-icon-box -->
                        </div>
                        <!-- /.zenith-content-box -->
                      </div>
                      <!-- /.col-md-4 -->
                      <div class="col-md-4">
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="0"
                          data-mobile="0"
                          data-smobile="35"></div>
                        <div
                          class="zenith-content-box clearfix"
                          data-margin="0 5px 0 5px"
                          data-mobilemargin="0 0 0 0">
                          <div
                            class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 clearfix">
                            <div class="icon-wrap">
                              <i class="autora-icon-author"></i>
                            </div>
                            <div class="text-wrap">
                              <h5 class="heading">
                                <a href="#">EXPERTS WITH EXPERIENCE</a>
                              </h5>
                              <div class="sep clearfix"></div>
                              <p class="sub-heading">
                                With more than 25 years of hands-on experience, our team delivers results that meet 
                                your exact specifications. You can rely on us to get the job done right.
                              </p>
                            </div>
                          </div>
                          <!-- /.zenith-icon-box -->
                        </div>
                        <!-- /.zenith-content-box -->
                      </div>
                      <!-- /.col-md-4 -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                      <div class="col-md-12">
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="41"
                          data-mobile="35"
                          data-smobile="35"></div>
                        <!-- <div class="elm-button text-center">
                          <a href="#" class="zenith-button bg-accent">ABOUT US</a>
                        </div> -->
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="73"
                          data-mobile="60"
                          data-smobile="60"></div>
                      </div>
                      <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.container -->
                </div>
                <!-- END ICONBOX -->

                <!-- ABOUT -->
                <div class="row-about">
                  <div class="container-fluid">
                    <div class="row equalize sm-equalize-auto">
                      <div class="col-md-6 half-background style-1"></div>
                      <!-- /.col-md-6 -->
                      <div class="col-md-6 bg-light-grey">
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="64"
                          data-mobile="60"
                          data-smobile="60"></div>
                        <div
                          class="zenith-content-box clearfix"
                          data-margin="0 25% 0 4.5%"
                          data-mobilemargin="0 0 0 4.5%">
                          <div class="zenith-headings style-1 clearfix">
                            <h2 class="heading">WELCOME TO ZENITH CONSTRUCTION LIMITED</h2>
                            <div
                              class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                            <p class="sub-heading margin-top-30">
                                With a legacy of excellence, Zenith Construction Limited has delivered 
                                outstanding projects throughout Nigeria. Our reputation is built on:
                            </p>
                          </div>
                          <div
                            class="zenith-spacer clearfix"
                            data-desktop="26"
                            data-mobile="35"
                            data-smobile="35"></div>
                          <div class="content-list">
                            <div
                              class="zenith-list has-icon style-1 icon-left clearfix">
                              <div class="inner">
                                <span class="item">
                                  <span class="icon"><i class="fa fa-check-square"></i></span>
                                  <span class="text">Delivering projects promptly and staying within your budget</span>
                              </div>
                            </div>
                            <!-- /.themeslat-list -->
                            <div
                              class="zenith-list has-icon style-1 icon-left clearfix">
                              <div class="inner">
                                <span class="item">
                                  <span class="icon"><i class="fa fa-check-square"></i></span>
                                  <span class="text">Exceptional craftsmanship that stands out</span>
                                </span>
                              </div>
                            </div>
                            <!-- /.themeslat-list -->
                            <div
                              class="zenith-list has-icon style-1 icon-left clearfix">
                              <div class="inner">
                                <span class="item">
                                  <span class="icon"><i class="fa fa-check-square"></i></span>
                                  <span class="text">Collaborating with trusted suppliers to bring you creative and cutting-edge results</span>
                                  </span>
                              </div>
                            </div>
                            <!-- /.themeslat-list -->
                            <div
                              class="zenith-list has-icon style-1 icon-left clearfix">
                              <div class="inner">
                                <span class="item">
                                  <span class="icon"><i class="fa fa-check-square"></i></span>
                                  <span class="text">Prioritizing safety with proactive measures and best practices every step of the way</span>
                                  </span>
                              </div>
                            </div>
                            <!-- /.themeslat-list -->
                          </div>
                          <!-- /.content-list -->
                          <div
                            class="zenith-spacer clearfix"
                            data-desktop="42"
                            data-mobile="35"
                            data-smobile="35"></div>
                          <div class="elm-button">
                            <a href="about" class="zenith-button bg-white">About us</a>
                          </div>
                        </div>
                        <!-- /.zenith-content-box -->
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="75"
                          data-mobile="60"
                          data-smobile="60"></div>
                      </div>
                      <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.container-fluid -->
                </div>
                <!-- END ABOUT -->

                <!-- SERVICES -->
                <div class="row-services">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="60"
                          data-mobile="60"
                          data-smobile="60"></div>
                        <div
                          class="zenith-headings style-1 text-center clearfix">
                          <h2 class="heading">Exceptional Services That Set Us Apart</h2>
                          <div class="sep has-icon width-125 clearfix">
                            <div class="sep-icon">
                              <span
                                class="sep-icon-before sep-center sep-solid"></span>
                              <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                              <span
                                class="sep-icon-after sep-center sep-solid"></span>
                            </div>
                          </div>
                          <p class="sub-heading">
                            From concept to completion, Zenith Construction Limited delivers 
                            comprehensive construction solutions tailored to your needs.
                          </p>
                        </div>
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="39"
                          data-mobile="35"
                          data-smobile="35"></div>
                        <div
                          class="zenith-carousel-box data-effect clearfix"
                          data-gap="30"
                          data-column="3"
                          data-column2="2"
                          data-column3="1"
                          data-auto="false">
                          <div class="owl-carousel owl-theme">
                            <div
                              class="zenith-image-box style-1 has-icon icon-right w65 clearfix">
                              <div class="image-box-item">
                                <div class="inner">
                                  <div class="thumb data-effect-item">
                                    <img
                                      src="assets/img/imagebox/image-box-1-370x250.jpg"
                                      alt="Image" />
                                    <div
                                      class="overlay-effect bg-color-accent"></div>
                                  </div>
                                  <div class="text-wrap">
                                    <h5 class="heading">
                                      <a href="#">DESIGN & BUILD</a>
                                    </h5>
                                    <span class="icon-wrap">
                                      <i class="fa fa-angle-right"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.zenith-image-box -->

                            <div
                              class="zenith-image-box style-1 has-icon icon-right w65 clearfix">
                              <div class="image-box-item">
                                <div class="inner">
                                  <div class="thumb data-effect-item">
                                    <img
                                      src="assets/img/imagebox/image-box-2-370x250.jpg"
                                      alt="Image" />
                                    <div
                                      class="overlay-effect bg-color-accent"></div>
                                  </div>
                                  <div class="text-wrap">
                                    <h5 class="heading">
                                      <a href="#">BUILDING ENVELOPES</a>
                                    </h5>
                                    <span class="icon-wrap">
                                      <i class="fa fa-angle-right"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.zenith-image-box -->

                            <div
                              class="zenith-image-box style-1 has-icon icon-right w65 clearfix">
                              <div class="image-box-item">
                                <div class="inner">
                                  <div class="thumb data-effect-item">
                                    <img
                                      src="assets/img/imagebox/image-box-3-370x250.jpg"
                                      alt="Image" />
                                    <div
                                      class="overlay-effect bg-color-accent"></div>
                                  </div>
                                  <div class="text-wrap">
                                    <h5 class="heading">
                                      <a href="#">CONSTRUCTION</a>
                                    </h5>
                                    <span class="icon-wrap">
                                      <i class="fa fa-angle-right"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.zenith-image-box -->

                            <div
                              class="zenith-image-box style-1 has-icon icon-right w65 clearfix">
                              <div class="image-box-item">
                                <div class="inner">
                                  <div class="thumb data-effect-item">
                                    <img
                                      src="assets/img/imagebox/image-box-1-370x250.jpg"
                                      alt="Image" />
                                    <div
                                      class="overlay-effect bg-color-accent"></div>
                                  </div>
                                  <div class="text-wrap">
                                    <h5 class="heading">
                                      <a href="#">DESIGN & BUILD</a>
                                    </h5>
                                    <span class="icon-wrap">
                                      <i class="fa fa-angle-right"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.zenith-image-box -->

                            <div
                              class="zenith-image-box style-1 has-icon icon-right w65 clearfix">
                              <div class="image-box-item">
                                <div class="inner">
                                  <div class="thumb data-effect-item">
                                    <img
                                      src="assets/img/imagebox/image-box-2-370x250.jpg"
                                      alt="Image" />
                                    <div
                                      class="overlay-effect bg-color-accent"></div>
                                  </div>
                                  <div class="text-wrap">
                                    <h5 class="heading">
                                      <a href="#">BUILDING ENVELOPES</a>
                                    </h5>
                                    <span class="icon-wrap">
                                      <i class="fa fa-angle-right"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.zenith-image-box -->

                            <div
                              class="zenith-image-box style-1 has-icon icon-right w65 clearfix">
                              <div class="image-box-item">
                                <div class="inner">
                                  <div class="thumb data-effect-item">
                                    <img
                                      src="assets/img/imagebox/image-box-3-370x250.jpg"
                                      alt="Image" />
                                    <div
                                      class="overlay-effect bg-color-accent"></div>
                                  </div>
                                  <div class="text-wrap">
                                    <h5 class="heading">
                                      <a href="#">CONSTRUCTION MANAGEMENT</a>
                                    </h5>
                                    <span class="icon-wrap">
                                      <i class="fa fa-angle-right"></i>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.zenith-image-box -->
                          </div>
                        </div>
                        <!-- /.zenith-carousel-box -->
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="50"
                          data-mobile="35"
                          data-smobile="35"></div>
                        <div class="elm-button text-center">
                          <a href="#" class="zenith-button bg-accent">ALL SERVICES</a>
                        </div>
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="73"
                          data-mobile="60"
                          data-smobile="60"></div>
                      </div>
                      <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.container -->
                </div>
                <!-- END SERVICES -->

                <!-- PROJECT -->
                <div class="row-project parallax parallax-1 parallax-overlay">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="60"
                          data-mobile="60"
                          data-smobile="60"></div>
                        <div
                          class="zenith-headings style-1 text-center clearfix">
                          <h2 class="heading text-white">FEATURED PROJECT</h2>
                          <div
                            class="sep has-icon width-125 border-color-light clearfix">
                            <div class="sep-icon">
                              <span
                                class="sep-icon-before sep-center sep-solid"></span>
                              <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                              <span
                                class="sep-icon-after sep-center sep-solid"></span>
                            </div>
                          </div>
                        </div>
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="30"
                          data-mobile="35"
                          data-smobile="35"></div>
                        <div
                          class="zenith-carousel-box clearfix"
                          data-gap="30"
                          data-column="4"
                          data-column2="2"
                          data-column3="1"
                          data-auto="false">
                          <div class="owl-carousel owl-theme">
                            <div
                              class="zenith-project style-1 data-effect clearfix">
                              <div class="project-item">
                                <div class="inner">
                                  <div
                                    class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                    <img
                                      src="assets/img/project/project-1-440x280.jpg"
                                      alt="Image" />
                                    <div class="text-wrap text-center">
                                      <h5 class="heading">
                                        <a href="#">LAKE MEADOWS APARTMENTS</a>
                                      </h5>
                                      <div class="elm-meta">
                                        <span><a href="#">Architecture</a></span>
                                        <span><a href="#">Building</a></span>
                                      </div>
                                    </div>
                                    <div class="elm-link">
                                      <a
                                        href="#"
                                        class="icon-1 icon-search"></a>
                                      <a href="#" class="icon-1"></a>
                                    </div>
                                    <div
                                      class="overlay-effect bg-color-3"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.zenith-project -->
                            <div
                              class="zenith-project style-1 data-effect clearfix">
                              <div class="project-item">
                                <div class="inner">
                                  <div
                                    class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                    <img
                                      src="assets/img/project/project-2-440x280.jpg"
                                      alt="Image" />
                                    <div class="text-wrap text-center">
                                      <h5 class="heading">
                                        <a href="#">LAKE MEADOWS APARTMENTS</a>
                                      </h5>
                                      <div class="elm-meta">
                                        <span><a href="#">Architecture</a></span>
                                        <span><a href="#">Building</a></span>
                                      </div>
                                    </div>
                                    <div class="elm-link">
                                      <a
                                        href="#"
                                        class="icon-1 icon-search"></a>
                                      <a href="#" class="icon-1"></a>
                                    </div>
                                    <div
                                      class="overlay-effect bg-color-3"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.zenith-project -->
                            <div
                              class="zenith-project style-1 data-effect clearfix">
                              <div class="project-item">
                                <div class="inner">
                                  <div
                                    class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                    <img
                                      src="assets/img/project/project-3-440x280.jpg"
                                      alt="Image" />
                                    <div class="text-wrap text-center">
                                      <h5 class="heading">
                                        <a href="#">LAKE MEADOWS APARTMENTS</a>
                                      </h5>
                                      <div class="elm-meta">
                                        <span><a href="#">Architecture</a></span>
                                        <span><a href="#">Building</a></span>
                                      </div>
                                    </div>
                                    <div class="elm-link">
                                      <a
                                        href="#"
                                        class="icon-1 icon-search"></a>
                                      <a href="#" class="icon-1"></a>
                                    </div>
                                    <div
                                      class="overlay-effect bg-color-3"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.zenith-project -->
                            <div
                              class="zenith-project style-1 data-effect clearfix">
                              <div class="project-item">
                                <div class="inner">
                                  <div
                                    class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                    <img
                                      src="assets/img/project/project-4-440x280.jpg"
                                      alt="Image" />
                                    <div class="text-wrap text-center">
                                      <h5 class="heading">
                                        <a href="#">LAKE MEADOWS APARTMENTS</a>
                                      </h5>
                                      <div class="elm-meta">
                                        <span><a href="#">Architecture</a></span>
                                        <span><a href="#">Building</a></span>
                                      </div>
                                    </div>
                                    <div class="elm-link">
                                      <a
                                        href="#"
                                        class="icon-1 icon-search"></a>
                                      <a href="#" class="icon-1"></a>
                                    </div>
                                    <div
                                      class="overlay-effect bg-color-3"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.zenith-project -->
                            <div
                              class="zenith-project style-1 data-effect clearfix">
                              <div class="project-item">
                                <div class="inner">
                                  <div
                                    class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                    <img
                                      src="assets/img/project/project-1-440x280.jpg"
                                      alt="Image" />
                                    <div class="text-wrap text-center">
                                      <h5 class="heading">
                                        <a href="#">LAKE MEADOWS APARTMENTS</a>
                                      </h5>
                                      <div class="elm-meta">
                                        <span><a href="#">Architecture</a></span>
                                        <span><a href="#">Building</a></span>
                                      </div>
                                    </div>
                                    <div class="elm-link">
                                      <a
                                        href="#"
                                        class="icon-1 icon-search"></a>
                                      <a href="#" class="icon-1"></a>
                                    </div>
                                    <div
                                      class="overlay-effect bg-color-3"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.zenith-project -->
                            <div
                              class="zenith-project style-1 data-effect clearfix">
                              <div class="project-item">
                                <div class="inner">
                                  <div
                                    class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                    <img
                                      src="assets/img/project/project-2-440x280.jpg"
                                      alt="Image" />
                                    <div class="text-wrap text-center">
                                      <h5 class="heading">
                                        <a href="#">LAKE MEADOWS APARTMENTS</a>
                                      </h5>
                                      <div class="elm-meta">
                                        <span><a href="#">Architecture</a></span>
                                        <span><a href="#">Building</a></span>
                                      </div>
                                    </div>
                                    <div class="elm-link">
                                      <a
                                        href="#"
                                        class="icon-1 icon-search"></a>
                                      <a href="#" class="icon-1"></a>
                                    </div>
                                    <div
                                      class="overlay-effect bg-color-3"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.zenith-project -->
                            <div
                              class="zenith-project style-1 data-effect clearfix">
                              <div class="project-item">
                                <div class="inner">
                                  <div
                                    class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                    <img
                                      src="assets/img/project/project-3-440x280.jpg"
                                      alt="Image" />
                                    <div class="text-wrap text-center">
                                      <h5 class="heading">
                                        <a href="#">LAKE MEADOWS APARTMENTS</a>
                                      </h5>
                                      <div class="elm-meta">
                                        <span><a href="#">Architecture</a></span>
                                        <span><a href="#">Building</a></span>
                                      </div>
                                    </div>
                                    <div class="elm-link">
                                      <a
                                        href="#"
                                        class="icon-1 icon-search"></a>
                                      <a href="#" class="icon-1"></a>
                                    </div>
                                    <div
                                      class="overlay-effect bg-color-3"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.zenith-project -->
                            <div
                              class="zenith-project style-1 data-effect clearfix">
                              <div class="project-item">
                                <div class="inner">
                                  <div
                                    class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46">
                                    <img
                                      src="assets/img/project/project-4-440x280.jpg"
                                      alt="Image" />
                                    <div class="text-wrap text-center">
                                      <h5 class="heading">
                                        <a href="#">LAKE MEADOWS APARTMENTS</a>
                                      </h5>
                                      <div class="elm-meta">
                                        <span><a href="#">Architecture</a></span>
                                        <span><a href="#">Building</a></span>
                                      </div>
                                    </div>
                                    <div class="elm-link">
                                      <a
                                        href="#"
                                        class="icon-1 icon-search"></a>
                                      <a href="#" class="icon-1"></a>
                                    </div>
                                    <div
                                      class="overlay-effect bg-color-3"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- /.zenith-project -->
                          </div>
                        </div>
                        <!-- /.zenith-carousel-box -->
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="41"
                          data-mobile="35"
                          data-smobile="35"></div>
                        <div class="elm-button text-center">
                          <a href="#" class="zenith-button bg-accent">ALL PROJECTS
                          </a>
                        </div>
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="73"
                          data-mobile="60"
                          data-smobile="60"></div>
                      </div>
                      <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.container-fluid -->
                  <div class="bg-parallax-overlay overlay-black"></div>
                </div>
                <!-- END PROJECT -->

                <!-- ICONBOX -->
                <div class="row-iconbox">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="61"
                          data-mobile="60"
                          data-smobile="60"></div>
                        <div
                          class="zenith-headings style-1 text-center clearfix">
                          <h2 class="heading font-size-30">ALL SERVICES</h2>
                          <div class="sep has-icon width-125 clearfix">
                            <div class="sep-icon">
                              <span
                                class="sep-icon-before sep-center sep-solid"></span>
                              <span class="icon-wrap"><i class="autora-icon-build"></i></span>
                              <span
                                class="sep-icon-after sep-center sep-solid"></span>
                            </div>
                          </div>
                          <p class="sub-heading font-weight-400">
                            Are you interested in finding out how we can make
                            your project <br />
                            a success? Please constact us.
                          </p>
                        </div>
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="57"
                          data-mobile="35"
                          data-smobile="35"></div>
                      </div>
                      <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->

                    <div class="zenith-row gutter-30 clearfix">
                      <div class="col span_1_of_4">
                        <div
                          class="zenith-icon-box icon-left accent-color style-2 clearfix">
                          <div class="icon-wrap">
                            <i class="autora-icon-build"></i>
                          </div>
                          <div class="text-wrap">
                            <h5 class="heading">
                              <a href="#">DESIGN-BUILD</a>
                            </h5>
                            <p class="sub-heading">
                              We develop and understand project expectations
                              and then manage those needs with a design team.
                              Innovation should happen throughout a project.
                            </p>
                          </div>
                        </div>
                        <!-- /.zenith-icon-box -->
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="62"
                          data-mobile="35"
                          data-smobile="35"></div>
                        <div
                          class="zenith-icon-box icon-left accent-color style-2 clearfix">
                          <div class="icon-wrap font-size-35 line-height-50">
                            <i class="autora-icon-hat-outline"></i>
                          </div>
                          <div class="text-wrap">
                            <h5 class="heading">
                              <a href="#">PRECONSTRUCTION SERVICES</a>
                            </h5>
                            <p class="sub-heading margin-top-18">
                              Autora Construction Services provides the right
                              resources and expertise to evaluate concepts
                              through our industry leading Preconstruction
                              Services team.
                            </p>
                          </div>
                        </div>
                        <!-- /.zenith-icon-box -->
                      </div>
                      <!-- /.col-md-4 -->

                      <div class="col span_1_of_4">
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="0"
                          data-mobile="35"
                          data-smobile="35"></div>
                        <div
                          class="zenith-icon-box icon-left accent-color style-2 clearfix">
                          <div class="icon-wrap">
                            <i class="autora-icon-author-outline"></i>
                          </div>
                          <div class="text-wrap">
                            <h5 class="heading">
                              <a href="#">CONSTRUCTION MANAGEMENT</a>
                            </h5>
                            <p class="sub-heading">
                              We work closely with architects and designers to
                              understand the project, and ultimately develop a
                              targeted solution that optimizes every stage of
                              the build.
                            </p>
                          </div>
                        </div>
                        <!-- /.zenith-icon-box -->
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="62"
                          data-mobile="35"
                          data-smobile="35"></div>
                        <div
                          class="zenith-icon-box icon-left accent-color style-2 clearfix">
                          <div class="icon-wrap">
                            <i class="autora-icon-build-home"></i>
                          </div>
                          <div class="text-wrap">
                            <h5 class="heading">
                              <a href="#">BUILDING ENVELOPES</a>
                            </h5>
                            <p class="sub-heading margin-top-18">
                              Our in-house cladding teams supply and install a
                              diverse range of solutions to new building and
                              building envelope upgrade projects.
                            </p>
                          </div>
                        </div>
                        <!-- /.zenith-icon-box -->
                      </div>
                      <!-- /.col-md-4 -->

                      <div class="col span_1_of_4">
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="0"
                          data-mobile="35"
                          data-smobile="35"></div>
                        <div
                          class="zenith-icon-box icon-left accent-color style-2 clearfix">
                          <div class="icon-wrap">
                            <i class="autora-icon-building-outline"></i>
                          </div>
                          <div class="text-wrap">
                            <h5 class="heading">
                              <a href="#">METAL BUILDING SERVICES</a>
                            </h5>
                            <p class="sub-heading">
                              In the past decade alone, we have completed more
                              than 5 million square feet of metal building
                              systems in Western Canada and US
                            </p>
                          </div>
                        </div>
                        <!-- /.zenith-icon-box -->
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="62"
                          data-mobile="35"
                          data-smobile="35"></div>
                        <div
                          class="zenith-icon-box icon-left accent-color style-2 clearfix">
                          <div class="icon-wrap font-size-35 line-height-50">
                            <i class="autora-icon-concrete"></i>
                          </div>
                          <div class="text-wrap">
                            <h5 class="heading">
                              <a href="#">CONCRETE STRUCTURES</a>
                            </h5>
                            <p class="sub-heading margin-top-18">
                              We employs a talented team of industry leading
                              professionals capable of self-performing complex
                              concrete work, considered on a project specific
                              basis
                            </p>
                          </div>
                        </div>
                        <!-- /.zenith-icon-box -->
                      </div>
                      <!-- /.col-md-4 -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                      <div class="col-md-12">
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="72"
                          data-mobile="60"
                          data-smobile="60"></div>
                      </div>
                      <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.container -->
                </div>
                <!-- END ICONBOX -->

                <!-- TESTIMONIALS -->
                <div class="row-testimonials parallax-2">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="80"
                          data-mobile="60"
                          data-smobile="60"></div>
                        <div
                          class="zenith-carousel-box has-arrows arrow-center arrow-circle offset-v-24 clearfix"
                          data-gap="30"
                          data-column="1"
                          data-column2="1"
                          data-column3="1"
                          data-auto="true">
                          <div class="owl-carousel owl-theme">
                            <div
                              class="zenith-testimonials style-1 max-width-70 align-center has-width w100 circle border-solid clearfix">
                              <div class="testimonial-item">
                                <div class="inner">
                                  <div class="icon-wrap">
                                    <i class="fa fa-quote-left"></i>
                                  </div>
                                  <blockquote class="text">
                                    <p>
                                      “ I have worked with Autora Construction
                                      Services for over 10 years, they have
                                      consistently delivered fair pricing,
                                      quality workmanship and complete
                                      projects on schedule. I appreciate the
                                      level of customer service they deliver
                                      by going above and beyond expectations.
                                      ”
                                    </p>
                                    <div
                                      class="sep has-width w80 accent-bg clearfix"></div>
                                    <h6 class="name">PAUL PIGNATARO</h6>
                                  </blockquote>
                                </div>
                              </div>
                            </div>
                            <!-- /.zenith-testimonials -->
                            <div
                              class="zenith-testimonials style-1 max-width-70 align-center has-width w100 circle border-solid clearfix">
                              <div class="testimonial-item">
                                <div class="inner">
                                  <div class="icon-wrap">
                                    <i class="fa fa-quote-left"></i>
                                  </div>
                                  <blockquote class="text">
                                    <p>
                                      “ I have worked with Autora Construction
                                      Services for over 10 years, they have
                                      consistently delivered fair pricing,
                                      quality workmanship and complete
                                      projects on schedule. I appreciate the
                                      level of customer service they deliver
                                      by going above and beyond expectations.
                                      ”
                                    </p>
                                    <div
                                      class="sep has-width w80 accent-bg clearfix"></div>
                                    <h6 class="name">PAUL PIGNATARO</h6>
                                  </blockquote>
                                </div>
                              </div>
                            </div>
                            <!-- /.zenith-testimonials -->
                            <div
                              class="zenith-testimonials style-1 max-width-70 align-center has-width w100 circle border-solid clearfix">
                              <div class="testimonial-item">
                                <div class="inner">
                                  <div class="icon-wrap">
                                    <i class="fa fa-quote-left"></i>
                                  </div>
                                  <blockquote class="text">
                                    <p>
                                      “ I have worked with Autora Construction
                                      Services for over 10 years, they have
                                      consistently delivered fair pricing,
                                      quality workmanship and complete
                                      projects on schedule. I appreciate the
                                      level of customer service they deliver
                                      by going above and beyond expectations.
                                      ”
                                    </p>
                                    <div
                                      class="sep has-width w80 accent-bg clearfix"></div>
                                    <h6 class="name">PAUL PIGNATARO</h6>
                                  </blockquote>
                                </div>
                              </div>
                            </div>
                            <!-- /.zenith-testimonials -->
                          </div>
                        </div>
                        <!-- /.zenith-carousel-box -->
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="68"
                          data-mobile="60"
                          data-smobile="60"></div>
                      </div>
                      <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.container -->
                </div>
                <!-- END TESTIMONIALS -->

                <!-- QUOTE -->
                <div class="row-quote bg-row-1">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="40"
                          data-mobile="60"
                          data-smobile="60"></div>
                        <div class="zenith-quote style-1 clearfix">
                          <div class="quote-item">
                            <div class="inner">
                              <div class="heading-wrap">
                                <h3 class="heading">
                                  START EXECUTING YOUR PROJECT
                                </h3>
                              </div>
                              <div class="button-wrap has-icon icon-left">
                                <a href="#" class="zenith-button bg-alt small"><span>(+613) 8376 6284
                                    <span class="icon"><i
                                        class="autora-icon-phone-contact"></i></span></span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="31"
                          data-mobile="60"
                          data-smobile="60"></div>
                      </div>
                      <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.container -->
                </div>
                <!-- END QUOTE -->

                <!-- TABS -->
                <div class="row-tabs">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="61"
                          data-mobile="60"
                          data-smobile="60"></div>
                      </div>
                      <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                      <div class="col-md-6">
                        <div
                          class="zenith-content-box clearfix"
                          data-margin="0 18px 0 0"
                          data-mobilemargin="0 0 0 0">
                          <div class="zenith-headings style-1 clearfix">
                            <h2 class="heading">OVERVIEW</h2>
                            <div
                              class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                          </div>
                          <div
                            class="zenith-spacer clearfix"
                            data-desktop="38"
                            data-mobile="35"
                            data-smobile="35"></div>
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
                                  <p>
                                    Our focus is to exceed your goals, meet
                                    your timelines and successfully manage
                                    your budget. We provide our clients with
                                    top-notch general contracting,
                                    construction management, site surveys and
                                    design build services.
                                  </p>
                                  <div
                                    class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                    <div class="inner">
                                      <span class="item">
                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                        <span class="text">We have successfully completed
                                          projects in numerous states.</span>
                                      </span>
                                    </div>
                                  </div>
                                  <!-- /.themeslat-list -->
                                  <div
                                    class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                    <div class="inner">
                                      <span class="item">
                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                        <span class="text">We is licensed to perform general
                                          contracting work in most states.
                                        </span>
                                      </span>
                                    </div>
                                  </div>
                                  <!-- /.themeslat-list -->
                                  <div
                                    class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                    <div class="inner">
                                      <span class="item">
                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                        <span class="text">We will be open to obtaining new
                                          licensing if an opportunity
                                          arises</span>
                                      </span>
                                    </div>
                                  </div>
                                  <!-- /.themeslat-list -->
                                </div>
                              </div>
                              <!-- /.tab-content -->
                              <div class="tab-content">
                                <div class="item-content">
                                  <p>
                                    Our focus is to exceed your goals, meet
                                    your timelines and successfully manage
                                    your budget. We provide our clients with
                                    top-notch general contracting,
                                    construction management, site surveys and
                                    design build services.
                                  </p>
                                  <div
                                    class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                    <div class="inner">
                                      <span class="item">
                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                        <span class="text">We have successfully completed
                                          projects in numerous states.</span>
                                      </span>
                                    </div>
                                  </div>
                                  <!-- /.themeslat-list -->
                                  <div
                                    class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                    <div class="inner">
                                      <span class="item">
                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                        <span class="text">We is licensed to perform general
                                          contracting work in most states.
                                        </span>
                                      </span>
                                    </div>
                                  </div>
                                  <!-- /.themeslat-list -->
                                  <div
                                    class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                    <div class="inner">
                                      <span class="item">
                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                        <span class="text">We will be open to obtaining new
                                          licensing if an opportunity
                                          arises</span>
                                      </span>
                                    </div>
                                  </div>
                                  <!-- /.themeslat-list -->
                                </div>
                              </div>
                              <!-- /.tab-content -->
                              <div class="tab-content">
                                <div class="item-content">
                                  <p>
                                    Our focus is to exceed your goals, meet
                                    your timelines and successfully manage
                                    your budget. We provide our clients with
                                    top-notch general contracting,
                                    construction management, site surveys and
                                    design build services.
                                  </p>
                                  <div
                                    class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                    <div class="inner">
                                      <span class="item">
                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                        <span class="text">We have successfully completed
                                          projects in numerous states.</span>
                                      </span>
                                    </div>
                                  </div>
                                  <!-- /.themeslat-list -->
                                  <div
                                    class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                    <div class="inner">
                                      <span class="item">
                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                        <span class="text">We is licensed to perform general
                                          contracting work in most states.
                                        </span>
                                      </span>
                                    </div>
                                  </div>
                                  <!-- /.themeslat-list -->
                                  <div
                                    class="zenith-list has-icon style-1 icon-left ofset-padding-32 clearfix">
                                    <div class="inner">
                                      <span class="item">
                                        <span class="icon"><i class="fa fa-check-square"></i></span>
                                        <span class="text">We will be open to obtaining new
                                          licensing if an opportunity
                                          arises</span>
                                      </span>
                                    </div>
                                  </div>
                                  <!-- /.themeslat-list -->
                                </div>
                              </div>
                              <!-- /.tab-content -->
                            </div>
                            <!-- /.tab-content-wrap -->
                          </div>
                          <!-- /.zenith-tabs -->
                        </div>
                        <!-- /.zenith-content-box -->
                      </div>
                      <!-- /.col-md-6 -->

                      <div class="col-md-6">
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="0"
                          data-mobile="0"
                          data-smobile="35"></div>
                        <div
                          class="zenith-content-box"
                          data-margin="0 0 0 18px"
                          data-mobilemargin="0 0 0 0">
                          <div class="zenith-headings style-1 clearfix">
                            <h2 class="heading">FAQs</h2>
                            <div
                              class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                          </div>
                          <div
                            class="zenith-spacer clearfix"
                            data-desktop="38"
                            data-mobile="35"
                            data-smobile="35"></div>
                          <div
                            class="zenith-accordions style-1 has-icon icon-left iconstyle-1 clearfix">
                            <div class="accordion-item active">
                              <h3 class="accordion-heading">
                                <span class="inner">Are there any hosting companies you
                                  recommend?</span>
                              </h3>
                              <div class="accordion-content">
                                <div>
                                  Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit, sed do eiusmod tempor
                                  incididunt ut labore et dolore magna aliqua.
                                  Ut enim ad minim veniam, quis nostrud
                                  exercitation ullamco laboris.
                                </div>
                              </div>
                            </div>
                            <!-- /.accordion-item -->
                            <div class="accordion-item">
                              <h3 class="accordion-heading">
                                <span class="inner">We use technology to do the job more
                                  quickly</span>
                              </h3>
                              <div class="accordion-content">
                                <div>
                                  Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit, sed do eiusmod tempor
                                  incididunt ut labore et dolore magna aliqua.
                                  Ut enim ad minim veniam, quis nostrud
                                  exercitation ullamco laboris.
                                </div>
                              </div>
                            </div>
                            <!-- /.accordion-item -->
                            <div class="accordion-item">
                              <h3 class="accordion-heading">
                                <span class="inner">Employees are continually trained on safety
                                  issues</span>
                              </h3>
                              <div class="accordion-content">
                                <div>
                                  Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit, sed do eiusmod tempor
                                  incididunt ut labore et dolore magna aliqua.
                                  Ut enim ad minim veniam, quis nostrud
                                  exercitation ullamco laboris.
                                </div>
                              </div>
                            </div>
                            <!-- /.accordion-item -->
                          </div>
                          <!-- /.zenith-accordion -->
                        </div>
                        <!-- /.zenith-content-box -->
                      </div>
                      <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.container -->
                </div>
                <!-- END TABS -->

                <!-- PARTNER -->
                <div class="row-partner">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="83"
                          data-mobile="60"
                          data-smobile="60"></div>
                        <div
                          class="zenith-carousel-box clearfix"
                          data-gap="5"
                          data-column="5"
                          data-column2="3"
                          data-column3="2"
                          data-auto="true">
                          <div class="owl-carousel owl-theme">
                            <!-- /zenith-partner -->
                            <div
                              class="zenith-partner style-1 align-center clearfix">
                              <div class="partner-item">
                                <div class="inner">
                                  <div class="thumb">
                                    <img
                                      src="assets/img/partners/partner-1.png"
                                      alt="Image"
                                      class="partner-default" />
                                    <img
                                      src="assets/img/partners/partner-1-color.png"
                                      alt="Image"
                                      class="partner-color" />
                                  </div>
                                </div>
                              </div>
                            </div>                            
                            <!-- /zenith-partner -->
                          </div>
                        </div>
                        <!-- /.zenith-carousel-box -->
                        <div
                          class="zenith-spacer clearfix"
                          data-desktop="66"
                          data-mobile="60"
                          data-smobile="60"></div>
                      </div>
                      <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.container -->
                </div>
                <!-- END PARTNER -->
              </div>
              <!-- /.page-content -->
            </div>
            <!-- /#inner-content -->
          </div>
          <!-- /#site-content -->
        </div>
        <!-- /#content-wrap -->
      </div>
      <!-- /#main-content -->

      <!-- Footer -->

      <?php
      include 'includes/footer.php';
      include 'includes/footscript.html'; ?>
</body>

</html>