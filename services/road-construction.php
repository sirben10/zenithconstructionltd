<?php
$slug = '';
if (!empty($_GET[md5('service')])) {
    $slug = $_GET[md5('service')];
    // echo $slug; exit;
}
$activeService = '';
// echo $slug; exit;
include '../includes/header.php';
// include_once 'admin/includes/config.php';
$sql = "SELECT * FROM tblservices WHERE slug = '$slug'";
// echo $sql; exit;
$query = $dbh->prepare($sql);
$query->execute();
$service = $query->fetch(PDO::FETCH_ASSOC);
$activeService = $service['serviceName'];
?>
<title><?php echo $activeService.' | ' . $rows['sitetitle'] ?> </title>



<body class="header-fixed page sidebar-left header-style-2 topbar-style-1 menu-has-search">

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
                                    <span class="trail-end">Services</span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-title-heading-wrap">
                            <h1 class="feautured-title-heading">
                                <?php echo $activeService ?>
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
                            <div class="zenith-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                            <div class="zenith-row equalize sm-equalize-auto clearfix">
                                <div class="span_1_of_6 bg-f7f">
                                    <div class="zenith-spacer clearfix" data-desktop="60" data-mobile="60" data-smobile="60"></div>
                                    <div class="zenith-content-box clearfix" data-margin="0 10px 0 43px" data-mobilemargin="0 15px 0 15px">
                                        <div class="zenith-headings style-2 clearfix">
                                            <div class="sup-heading">SPECIAL SERVICES</div>
                                            <h2 class="heading font-size-28 line-height-39">DESIGN & BUILD</h2>
                                            <div class="sep has-width w80 accent-bg margin-top-20 clearfix"></div>
                                            <p class="sub-heading margin-top-33 line-height-24">We work to develop and understand project expectations and then manage those needs with a customized, qualified design team. Innovation should happen throughout a project</p>
                                        </div>
                                    </div>
                                    <div class="zenith-spacer clearfix" data-desktop="56" data-mobile="56" data-smobile="56"></div>
                                </div>
                                <div class="span_1_of_6 half-background style-2">
                                </div>
                            </div><!-- /.zenith-row -->
                            <div class="zenith-spacer clearfix" data-desktop="39" data-mobile="39" data-smobile="39"></div>
                            <div class="flat-content-wrap style-2 clearfix">
                                <h5 class="title">SERVICE CONSULTANT</h5>
                                <p>Through our Design-Build service, we provides a single source of responsibility to the client. We work to develop and understand project expectations and then manage those needs with a customized, qualified design team. Innovation should happen throughout a project. To do that, we focus our efforts on each step of every phase to make the entire process smooth and straightforward. Our proactive, collaborative approach is what uncovers unique ideas and opportunities for improvement before the next phase begins.</p>
                            </div>
                            <div class="zenith-spacer clearfix" data-desktop="37" data-mobile="35" data-smobile="35"></div>
                            <div class="flat-content-wrap style-2 clearfix">
                                <div class="item">
                                    <div class="inner">
                                        <div class="zenith-spacer clearfix" data-desktop="10" data-mobile="10" data-smobile="10"></div>
                                        <h5 class="title">OUR SERVICES INCLUDE:</h5>
                                        <p>We have successfully completed projects in numerous states across the continental United States. zenith Construction Services has a proven track record of:</p>
                                        <div class="zenith-spacer clearfix" data-desktop="8" data-mobile="8" data-smobile="8"></div>
                                        <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                            <div class="inner">
                                                <span class="item">
                                                    <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                    <span class="text">Interior Design Planning</span>
                                                </span>
                                            </div>
                                        </div><!-- /.themeslat-list -->
                                        <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                            <div class="inner">
                                                <span class="item">
                                                    <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                    <span class="text">Colour & Finish Consultations</span>
                                                </span>
                                            </div>
                                        </div><!-- /.themeslat-list -->
                                        <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                            <div class="inner">
                                                <span class="item">
                                                    <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                    <span class="text">Architectural & Custom Lighting</span>
                                                </span>
                                            </div>
                                        </div><!-- /.themeslat-list -->
                                        <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                            <div class="inner">
                                                <span class="item">
                                                    <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                    <span class="text">Glass & Acrylic Specifications</span>
                                                </span>
                                            </div>
                                        </div><!-- /.themeslat-list -->
                                    </div>
                                </div><!-- /.item -->
                                <div class="item">
                                    <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                    <div class="zenith-content-box clearfix" data-margin="0 0 0 11px" data-mobilemargin="0 0 0 0">
                                        <div class="inner pd35 bg-ffc">
                                            <h5 class="title text-white line-height-24 padding-left-7">THIS AWESOME SERVICE BRINGS FULL INTEREST INFORMATION FOR YOUR PURPOSE</h5>
                                            <div class="zenith-spacer clearfix" data-desktop="16" data-mobile="16" data-smobile="16"></div>
                                            <div class="button-wrap has-icon icon-right size-14">
                                                <a href="#" class="zenith-button bg-white color-333 w100 font-weight-400 no-letter-spacing pd26"><span>Download .PDF <span class="icon"><i class="fa fa-file-pdf-o"></i></span></span></a>
                                            </div><!-- /.button-wrap -->
                                            <div class="zenith-spacer clearfix" data-desktop="6" data-mobile="6" data-smobile="6"></div>
                                            <div class="button-wrap has-icon icon-right size-14">
                                                <a href="#" class="zenith-button bg-white color-333 w100 font-weight-400 no-letter-spacing pd26 "><span> Download .DOC <span class="icon"><i class="fa fa-file-word-o"></i></span></span></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="zenith-spacer clearfix" data-desktop="37" data-mobile="35" data-smobile="35"></div>
                            <div class="flat-content-wrap style-2 clearfix">
                                <h5 class="title no-letter-spacing">CONTACT US FOR DESIGN-BUILD SERVICES TODAY</h5>
                                <div class="zenith-spacer clearfix" data-desktop="27" data-mobile="27" data-smobile="27"></div>
                                <div class="zenith-tabs style-2 title-w170 clearfix">
                                    <ul class="tab-title clearfix ">
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                                            </div>
                                        </div><!-- /.tab-content -->
                                        <div class="tab-content">
                                            <div class="item-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                                            </div>
                                        </div><!-- /.tab-content -->
                                        <div class="tab-content">
                                            <div class="item-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                                            </div>
                                        </div><!-- /.tab-content -->
                                    </div><!-- /.tab-content-wrap -->
                                </div><!-- /.zenith-tabs -->
                            </div>
                            <div class="zenith-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                        </div><!-- /#inner-content -->
                    </div><!-- /#site-content -->
                  <div id="sidebar">
  <div
    class="zenith-spacer clearfix"
    data-desktop="80"
    data-mobile="0"
    data-smobile="0"
  ></div>
  <div id="inner-sidebar" class="inner-content-wrap">
    <div class="widget widget_list">
      <div class="inner">
        <ul class="list-wrap">
          <?php foreach ($services as $service) {?>
          <li class="list-item">
            <a href="<?php echo $serv.'='.$service['slug']; ?>??p=services&<?php echo $serv.'='.$service['slug']; ?>"><span class="text"><?php echo htmlentities($service['serviceName']); ?></span></a>
          </li>
        <?php } ?>
        </ul>
      </div>
    </div>
    <!-- /.widget_list -->

    <div
      class="widget widget_help align-center has-shadow no-sep has-border border-solid"
    >
      <div class="inner">
        <h2 class="widget-title margin-bottom-14">
          <span>HOW CAN WE HELP ?</span>
        </h2>
        <p class="text line-height-26 margin-bottom-23">
          Are you interested in finding out how we can make your project. Please
          email us.
        </p>
        <div class="elm-button">
          <a href="#" class="zenith-button bg-accent pd30">GET IN TOUCH</a>
        </div>
      </div>
    </div>
  </div>
  <div
    class="zenith-spacer clearfix"
    data-desktop="0"
    data-mobile="60"
    data-smobile="60"
  ></div>
</div>
                    <!-- /#sidebar -->
                </div><!-- /#content-wrap -->
            </div><!-- /#main-content -->

            <!-- Footer -->
        <?php include '../includes/footer.php'; 
        include '../includes/footscript.php';
        ?>

  
</body>

</html>