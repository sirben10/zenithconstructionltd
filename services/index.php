<?php
include '../includes/header.php';
//  $serv = md5('service');
?>
<title><?php echo 'Services | ' . $rows['sitetitle'] ?> </title>


<body class="header-fixed page no-sidebar header-style-2 topbar-style-1 menu-has-search">

    <div id="wrapper" class="animsition">
        <div id="page" class="clearfix">
            <!-- Header Wrap -->
            <div id="site-header-wrap">
                <!-- Top Bar -->
                <?php
                include '../includes/top-bar.php';
                ?>
                <!-- /#top-bar -->

                <!-- Header -->
                <header id="site-header">
                    <div id="site-header-inner" class="container">
                        <div class="wrap-inner clearfix">
                            <?php
                            include '../includes/site-logo.php';
                            ?>
                            <!-- /#site-logo -->

                            <div class="mobile-button">
                                <span></span>
                            </div><!-- /.mobile-button -->

                            <?php
                            include '../includes/navbar.php';
                            ?>
                            <!-- /#main-nav -->

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
                                    <span class="trail-end">Services</span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-title-heading-wrap">
                            <h1 class="feautured-title-heading">
                                All Services
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
                          if(isset($services) && is_array($services)) {
                            foreach($services as $service) {
                          ?>
                          <div class="project-item green villa">
                            <div class="inner">
                              <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49" style="height: 250px;">
                                <img class="img-responsive" width="100%" height="auto" src="../servicePhotos/<?php echo $service['servicePhoto']; ?>" alt="<?php echo $service['serviceName']; ?>">
                               
                                <div class="overlay-effect bg-color-3"></div>
                              </div>
                              <div class="text-wrap">
                                <h5 class="heading text-uppercase"><a href="<?php echo $service['slug']; ?>?p=services&<?php echo $serv.'='.$service['slug']; ?>"><?php echo $service['serviceName']; ?></a></h5>
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
                            </div><!-- /.page-content -->
                        </div><!-- /#inner-content -->
                    </div><!-- /#site-content -->
                </div><!-- /#content-wrap -->
            </div><!-- /#main-content -->

            <!-- Footer -->
             <?php
    include '../includes/footer.php';
    include '../includes/footscript.php'; ?>
        </div><!-- /#page -->
    </div><!-- /#wrapper -->

    

</body>


</html>