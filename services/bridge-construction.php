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
                                            <div class="sup-heading">Engineering Strength, Connecting Horizons</div>
                                            <h2 class="heading font-size-28 line-height-39"><?php echo htmlentities(strtoupper($service['serviceName'])); ?></h2>
                                            <div class="sep has-width w80 accent-bg margin-top-20 clearfix"></div>
                                            <p class="sub-heading margin-top-33 line-height-24 text-justify px-lg-1">
                                               At Zenith Construction Ltd, we don’t just build bridges, we create pathways that unite communities, boost economies, 
                                               and redefine landscapes. Our bridges combine innovation, artistry, and engineering 
                                               excellence to stand tall for generations.
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
                                <h5 class="title">Our Bridge Construction Expertise</h5>
                                <p>We deliver safe and sustainable bridge projects that enhance connectivity and 
                                    support infrastructure growth in urban and rural regions alike.
                                </p>
                                <p>Our bridge construction division is backed by decades of combined experience in civil,
                                     structural, and geotechnical engineering. We employ modern design tools and methods to
                                      ensure every structure meets safety, functionality, and aesthetic standards.
                                </p>
                                <p>Because our bridges embody the perfect balance of form, function, and strength. 
                                    Every project we execute tells a story of precision, partnership, and purpose.
                                </p>
                            </div>
                            <div class="zenith-spacer clearfix" data-desktop="37" data-mobile="35" data-smobile="35"></div>
                            <div class=" m-auto style-2 clearfix">
                                <div class="item">
                                    <div class="zenith-accordions clearfix mx-3">
                                        <div class="accordion-item active">
                                            <h3 class="accordion-heading"><span class="inner">Our Core Principles</span></h3>
                                            <div class="accordion-content clearfix">
                                                <div class="zenith-row clearfix">
                                                    <div class="zenith-content-box clearfix" data-margin="0 22px 0 0px" data-mobilemargin="0 22px 0 0px">
                                                        <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                                    <span class="text">Zero-compromise on structural integrity</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                                    <span class="text">Timely delivery and budget adherence</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                                    <span class="text">Environmentally conscious construction</span>
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
                                                                    <span class="text">Cutting-edge design and simulation tools</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                                    <span class="text">Innovative materials for durability and aesthetics</span>
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
                                <div class="zenith-headings style-2 clearfix" >
                                    <h2 class="heading" style="margin: 0 10px 0 20px !important">OUR BRIDGE CONSTRUCTION SERVICES</h2>
                                    <!-- <div class="sep has-width w80 accent-bg clearfix ms-5"></div> -->
                                </div>
                                <div class="col span_1_of_4 mb-xl-1">
                                    <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                    <div class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 bg-white-column padding-inner clearfix">

                                        <div class="text-wrap">
                                            <h5 class="heading"><a>Bridge Design & Engineering</a></h5>
                                            <div class="sep clearfix"></div>
                                            <p class="sub-heading">
                                                From concept sketches to final structural analysis, 
                                                we design bridges that are not just strong, but smart, blending engineering science 
                                                with visual grace.
                                            </p>
                                        </div>
                                    </div><!-- /.zenith-icon-box -->
                                    <!-- <div class="divider h35"></div> -->
                                </div>

                                <div class="col span_1_of_4 mb-xl-1">
                                    <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                    <div class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 bg-white-column padding-inner clearfix">

                                        <div class="text-wrap">
                                            <h5 class="heading"><a>Steel & Concrete Bridge Construction</a></h5>
                                            <div class="sep clearfix"></div>
                                            <p class="sub-heading">
                                                We specialize in modern steel and reinforced concrete bridges that guarantee safety, 
                                                durability, and cost efficiency, even in the toughest terrains.
                                            </p>
                                        </div>
                                    </div><!-- /.zenith-icon-box -->

                                </div>
                                <div class="col span_1_of_4 mb-xl-1">
                                    <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                                    <div class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 bg-white-column padding-inner clearfix">

                                        <div class="text-wrap">
                                            <h5 class="heading"><a>Bridge Rehabilitation & Strengthening</a></h5>
                                            <div class="sep clearfix"></div>
                                            <p class="sub-heading">
                                              We use extensive structural improvements, comprehensive retrofitting solutions, and modern strengthening methods to extend the life of bridges and assure their stability and safety.
                                            </p>
                                        </div>
                                    </div><!-- /.zenith-icon-box -->
                                </div>
                                <div class="col span_1_of_4 mb-xl-1">
                                    <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                                    <div class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 bg-white-column padding-inner clearfix">

                                        <div class="text-wrap">
                                            <h5 class="heading"><a>Flyovers & Interchanges</a></h5>
                                            <div class="sep clearfix"></div>
                                            <p class="sub-heading">
                                                We craft efficient flyover and interchange systems that ease traffic 
                                                congestion and improve urban mobility with aesthetic and technical precision.
                                            </p>
                                        </div>
                                    </div><!-- /.zenith-icon-box -->
                                </div>
                                <div class="col span_1_of_4 mb-xl-1">
                                    <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                                    <div class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 bg-white-column padding-inner clearfix">

                                        <div class="text-wrap">
                                            <h5 class="heading"><a>Pedestrian & Footbridges</a></h5>
                                            <div class="sep clearfix"></div>
                                            <p class="sub-heading">
                                                Functional, elegant, and community-centered designs.
                                                  Our pedestrian bridges are built for safety, accessibility, and architectural appeal.
                                            </p>
                                        </div>
                                    </div><!-- /.zenith-icon-box -->
                                </div>
                                <div class="col span_1_of_4 mb-xl-1">
                                    <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                                    <div class="zenith-icon-box icon-top align-center has-width w95 circle light-bg accent-color style-1 bg-white-column padding-inner clearfix">

                                        <div class="text-wrap">
                                            <h5 class="heading"><a>Project Management & Quality Control</a></h5>
                                            <div class="sep clearfix"></div>
                                            <p class="sub-heading">
                                                Our dedicated supervision ensures compliance with global standards, 
                                                from design validation to material testing and on-site execution.
                                            </p>
                                        </div>
                                    </div><!-- /.zenith-icon-box -->
                                </div>
                            </div>

                            <div class="zenith-spacer clearfix" data-desktop="80" data-mobile="60" data-smobile="60"></div>
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
                </div><!-- /#content-wrap -->
            </div><!-- /#main-content -->

            <!-- Footer -->
            <?php include '../includes/footer.php';
            include '../includes/footscript.php';
            ?>


</body>

</html>