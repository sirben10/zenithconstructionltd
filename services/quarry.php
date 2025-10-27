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
<title><?php echo $activeService . ' | ' . $rows['sitetitle'] ?> </title>

<style>
    .scroll {
        width: 100%;
        max-height: 400px;
        overflow-y: auto;
        overflow-x: hidden;
    }

    ::-webkit-scrollbar {
        display: none;
    }

    * {
        scrollbar-width: none;
        -ms-overflow-style: none;
    }
    
    @media only screen and (min-width: 991px) {    
        .zcl-m-c{
            width:  100% !important;
            justify-content: center;
            position: relative;
            margin: 0 33.3% auto !important;
        }
        .qs-img{
        height: auto !important;
        width: auto
    }
    }
    @media only screen and (max-width: 990.5px) {    
      
        .qs-img{
        height: auto !important;
        width: auto
    }
    }
</style>

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
                                            <div class="sup-heading"></div>
                                            <h2 class="heading font-size-28 line-height-39"><?php echo htmlentities(strtoupper($service['serviceName'])); ?></h2>
                                            <div class="sep has-width w80 accent-bg margin-top-20 clearfix"></div>
                                            <p class="sub-heading margin-top-33 line-height-24 text-justify px-lg-1">
                                                Delivering quality aggregates and raw materials that power sustainable infrastructure development.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="zenith-spacer clearfix" data-desktop="56" data-mobile="56" data-smobile="56"></div>
                                </div>
                                <div class="span_1_of_6 style-2"><img src="../servicephotos/<?php echo htmlentities($service['servicePhoto']) ?>" alt="" width="100%" height="100%">
                                </div>
                            </div><!-- /.zenith-row -->
                            <div class="zenith-spacer clearfix" data-desktop="39" data-mobile="39" data-smobile="39"></div>
                            <div class="flat-content-wrap style-2 clearfix">
                                <h2 class="heading font-size-28 line-height-39">We are Committed to Best Practices and Environmental Standards</h2>
                                <p>At Zenith Construction Ltd, our quarry operations form the foundation of reliable construction
                                    materials across diverse sectors. We focus on quality extraction, environmental
                                    responsibility, and operational efficiency, ensuring that every ton we produce meets
                                    the highest standards of strength and durability..
                                    <br />Our goal is simple; <em>to safeguard infrastructure while working in harmony with nature.</em>
                                </p>
                                <p>Our Company complies with international and Nigerian standards and has a complete license to engage
                                    in mining and related activities. We guarantee the best blasting techniques and operational
                                    excellence under the competent direction of our seasoned quarry manager.

                                </p>
                            </div>
                            <div class="zenith-spacer clearfix" data-desktop="37" data-mobile="35" data-smobile="35"></div>

                        </div><!-- /#inner-content -->
                    </div><!-- /#site-content -->
                    <div id="sidebar">
                        <div
                            class="zenith-spacer clearfix"
                            data-desktop="80"
                            data-mobile="0"
                            data-smobile="0"></div>
                        <?php include 'service-side-bar.php' ?>
                        <div
                            class="zenith-spacer clearfix"
                            data-desktop="0"
                            data-mobile="60"
                            data-smobile="60"></div>
                    </div>
                    <!-- /#sidebar -->
                    <div class="scroll">
                        <div class="zenith-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>

                        <div class="style-2 clearfix zcl-m-c">
                            <div class="item align-center">
                                <div class="zenith-accordions clearfix">
                                    <div class="accordion-item active align-center">
                                        <h3 class="accordion-heading"><span class="inner">Why Choose Us</span></h3>
                                        <div class="accordion-content clearfix" >
                                            <div class="zenith-row clearfix">
                                                <div class="zenith-content-box clearfix" data-margin="0 22px 0 0px" data-mobilemargin="0 22px 0 0px">
                                                    <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                        <div class="inner">
                                                            <span class="item">
                                                                <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                                <span class="text">Proven track record in flood control and terrain stabilization.</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                        <div class="inner">
                                                            <span class="item">
                                                                <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                                <span class="text">Use of eco-friendly, high-performance materials.</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                        <div class="inner">
                                                            <span class="item">
                                                                <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                                <span class="text">Expert team of civil and environmental engineers.</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                        <div class="inner">
                                                            <span class="item">
                                                                <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                                <span class="text">Safety-first construction</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                        <div class="inner">
                                                            <span class="item">
                                                                <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                                <span class="text">Custom designs for every terrain and community need.</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                        <div class="inner">
                                                            <span class="item">
                                                                <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                                <span class="text">Long-term maintenance and monitoring solutions.</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="zenith-spacer clearfix" data-desktop="10" data-mobile="10" data-smobile="10"></div>
                                                    <div class="zenith-list  style-2 icon-left clearfix">

                                                    </div>
                                                </div><!-- /.zenith-content-box -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.item -->
                        </div>
                        <div class="zenith-spacer clearfix" data-desktop="37" data-mobile="35" data-smobile="35"></div>

                        <div class="zenith-row gutter-30 gutter-mobile clearfix">
                            <div class="zenith-headings style-2 clearfix">
                                <h2 class="heading text-center">OUR QUARRY SERVICES</h2>
                                <!-- <div class="sep has-width w80 accent-bg clearfix ms-5"></div> -->
                            </div>
                            <div class="col span_1_of_6 mb-xl-4">
                                <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                <div class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 bg-white-column padding-inner clearfix">
                                   <div class="m-auto qs-img">
                                       <img src="../servicephotos/DSC00391.JPG" class="image-responsive" height="auto" width="100%">
                                   </div>
                                    <div class="text-wrap">
                                        <h5 class="heading"><a>Aggregate Production</a></h5>
                                        <div class="sep clearfix"></div>
                                        <p class="sub-heading">
                                           We produce high-grade aggregates including crushed stone, gravel, 
                                           and sand, used for road bases, concrete, and asphalt applications.
                                           </p>
                                    </div>
                                </div><!-- /.zenith-icon-box -->
                                <!-- <div class="divider h35"></div> -->
                            </div>

                             <div class="col span_1_of_6 mb-xl-4">
                                <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                                <div class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 bg-white-column padding-inner clearfix">
                                    <div class="m-auto qs-img">
                                       <img src="../servicephotos/quary-dev.jpg" class="image-responsive" height="auto" width="100%">
                                   </div>
                                    <div class="text-wrap">
                                        <h5 class="heading"><a>Quarry Site Development</a></h5>
                                        <div class="sep clearfix"></div>
                                        <p class="sub-heading">
                                           From initial geological surveys to access road construction, 
                                           we develop and maintain efficient, safe, and environmentally compliant quarry sites.
                                        </p>
                                    </div>
                                </div><!-- /.zenith-icon-box -->
                            </div>

                            <div class="col span_1_of_6 mb-xl-4">
                                <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                <div class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 bg-white-column padding-inner clearfix">
                                      <div class="m-auto qs-img">
                                       <img src="../servicephotos/DSC00373.JPG" class="image-responsive" height="auto" width="100%">
                                   </div>
                                    <div class="text-wrap">
                                        <h5 class="heading"><a>Rock Blasting & Crushing</a></h5>
                                        <div class="sep clearfix"></div>
                                        <p class="sub-heading">
                                           Our experienced team utilizes controlled blasting and 
                                           precision crushing techniques to optimize yield and particle consistency.
                                        </p>
                                    </div>
                                </div><!-- /.zenith-icon-box -->

                            </div>
                           
                            <div class="col span_1_of_6 mb-xl-4">
                                <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                                <div class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 bg-white-column padding-inner clearfix">
                                      <div class="m-auto qs-img">
                                       <img src="../servicephotos/haulage.jpeg" class="image-responsive" height="auto" width="100%">
                                   </div>
                                    <div class="text-wrap">
                                        <h5 class="heading"><a>Haulage & Delivery</a></h5>
                                        <div class="sep clearfix"></div>
                                        <p class="sub-heading">
                                            We provide reliable, on-time delivery of materials using a modern
                                             fleet of tippers and haulage trucks, ensuring minimal downtime on your projects.
                                        </p>
                                    </div>
                                </div><!-- /.zenith-icon-box -->
                            </div>
                        </div>
                    </div>

                    <div class="zenith-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
                </div><!-- /#content-wrap -->
            </div><!-- /#main-content -->

            <!-- Footer -->
            <?php include '../includes/footer.php';
            include '../includes/footscript.php';
            ?>


</body>

</html>