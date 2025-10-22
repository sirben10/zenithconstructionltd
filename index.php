<?php

// echo $rows['sitetitle']; exit;
include 'includes/header.php';
?>
<title><?php echo 'Home | ' . $rows['sitetitle'] ?> </title>

<style>
  /* testimonial Section */
  .testimonial-section {
    position: relative;
    background: url('assets/img/1024px-Road_construction_in_progress.jpeg') no-repeat center center/cover;
    /* transform: skewY(-1deg); */
    height: auto;
    /* margin-top: 50px; */
    overflow: hidden;
  }

  /* Overlay */
  .testimonial-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 54, 0, 0.9);
    /* adjust opacity */
    z-index: 1;
  }

  /* Content inside section */
  .testimonial-content {
    position: relative;
    z-index: 2;
    text-align: center;
    color: #fff;
  }

  .testimonial-content h1 {
    font-size: 2.5em;
    margin-bottom: 10px;
  }

  .testimonial-content p {
    font-size: 16px;
    line-height: inherit;
    opacity: 0.9;
  }

  @media (max-width: 768px) {
    .testimonial-section {

      height: 100%;
    }

    .testimonial-content h1 {
      font-size: 1.8rem;
    }

    .testimonial-content p {
      font-size: 1.3rem;
      text-align: left !important;
    }
  }

 
</style>

<body
  class="header-fixed page no-sidebar header-style-2 topbar-style-2 menu-has-search custom-cursor">
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
                          <h2 class="heading">WHY CHOOSE US?</h2>
                          <div class="sep has-icon width-125 clearfix">
                            <div class="sep-icon">
                              <span
                                class="sep-icon-before sep-center sep-solid"></span>
                              <span class="icon-wrap"><i class="zenith-icon-build"></i></span>
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
                              <i class="zenith-icon-quality"></i>
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
                              <i class="zenith-icon-time"></i>
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
                              <i class="zenith-icon-author"></i>
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
                <?php include_once 'includes/about.php'; ?>
                <!-- ABOUT -->
               
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
                                <span class="icon-wrap"><i class="zenith-icon-build"></i></span>
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


                          <div class="zenith-project style-2 isotope-project has-margin mg15 data-effect clearfix">
                            <?php
                           
                            // echo  $service; exit;
                            if (isset($services) && is_array($services)) {
                              foreach ($services as $service) {
                            ?>
                                <div class="project-item green villa">
                                  <div class="inner">
                                    <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49" style="height: 250px;">
                                      <img class="img-responsive" width="100%" height="auto" src="servicePhotos/<?php echo $service['servicePhoto']; ?>" alt="<?php echo $service['serviceName']; ?>">

                                      <div class="overlay-effect bg-color-3"></div>
                                    </div>
                                    <div class="text-wrap">
                                      <h5 class="heading text-uppercase"><a href="services/<?php echo $service['slug'];?>?p=services&<?php echo $serv.'='.$service['slug']; ?>"><?php echo $service['serviceName']; ?></a></h5>
                                    </div>
                                  </div>
                                </div><!-- /.product-item -->
                            <?php
                              }
                            }
                            ?>
                          </div>
                          <!-- /.zenith-Services-box -->
                          <div
                            class="zenith-spacer clearfix"
                            data-desktop="50"
                            data-mobile="35"
                            data-smobile="35"></div>

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
                                <span class="icon-wrap"><i class="zenith-icon-build"></i></span>
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
                              <!-- /.zenith-project -->
                              <?php foreach ($projects as $project): ?>
                                <div
                                  class="zenith-project style-1 data-effect clearfix">
                                  <div class="project-item">
                                    <div class="inner">
                                      <div
                                        class="thumb data-effect-item has-effect-icon w40 offset-v-43 offset-h-46" style="height: 155px !important; width: 100%;">
                                        <img
                                          src="projectphotos/<?php echo $project['previewPhoto']; ?>"
                                          alt="Image" height="auto" max-width="100px" />
                                        <div class="text-wrap text-center">
                                          <h6 class="heading-alt">
                                            <a href="projects?project=<?php echo $project['projectID']; ?>&p=<?php echo str_replace(' ', '-', $project['projectTitle']); ?>"><?php echo strtoupper($project['projectTitle']); ?></a>
                                          </h6>
                                          <!-- <div class="elm-meta">
                                        <span><a href="#"><?php echo $project['category']; ?></a></span>
                                        <span><a href="#"><?php echo $project['type']; ?></a></span>
                                      </div> -->
                                        </div>
                                        <div class="elm-link">
                                          <a
                                            href="#"
                                            class="icon-1 icon-search"></a>
                                          <a href="projects?project=<?php echo $project['projectID']; ?>&p=<?php echo str_replace(' ', '-', $project['projectTitle']); ?>" class="icon-1"></a>
                                        </div>
                                        <div
                                          class="overlay-effect bg-color-3"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              <?php endforeach; ?>
                              <!-- /.zenith-project -->

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
                            <a href="projects" class="zenith-button bg-accent">ALL PROJECTS
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


                  <!-- TESTIMONIALS -->

                  <div class="row-testimonials testimonial-section parallax-2">
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
                              <!-- /.zenith-testimonials -->
                              <?php foreach ($testimonials as $testimonial): ?>
                                <div
                                  class="zenith-testimonials style-1 max-width-70 align-center has-width w100 circle border-solid clearfix testimonial-content">
                                  <div class="testimonial-item">
                                    <div class="inner">
                                      <div class="icon-wrap">
                                        <i class="fa fa-quote-left"></i>
                                      </div>
                                      <blockquote class="text">
                                        <p>
                                          “
                                          <?php echo $testimonial['testimony']; ?>
                                          ”
                                        </p>
                                        <div
                                          class="sep has-width w80 accent-bg clearfix"></div>
                                        <h3 class="name"><?php echo $testimonial['clientName']; ?></h3>
                                        <div
                                          class="sep has-width w80 accent-bg clearfix"></div>
                                        <h6 class="text-white mt-3"><?php echo $testimonial['position'] . ' - ' . $testimonial['companyName']; ?></h6>
                                      </blockquote>
                                    </div>
                                  </div>
                                </div>
                              <?php endforeach; ?>
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
                                  <a href="tel:<?php echo $rows['ContactNo']; ?>" class="zenith-button bg-alt small"><span><?php echo $rows['ContactNo']; ?>
                                      <span class="icon"><i
                                          class="zenith-icon-phone-contact"></i></span></span></a>
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

                  <!-- CLIENTS -->
                  <?php
                  include 'includes/clients.php';
                  ?>
                  <!-- END CLIENTS -->
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
        include 'includes/footscript.php'; ?>
</body>

</html>