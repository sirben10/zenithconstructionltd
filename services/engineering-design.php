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
                                            <div class="sup-heading">Trusted by Industry Leaders</div>
                                            <h2 class="heading font-size-28 line-height-39"><?php echo htmlentities(strtoupper($service['serviceName'])); ?></h2>
                                            <div class="sep has-width w80 accent-bg margin-top-20 clearfix"></div>
                                            <p class="sub-heading margin-top-33 line-height-24 text-justify px-lg-1">
                                                Zenith Construction Ltd delivers innovative, cost-effective, and sustainable engineering design solutions across civil, structural, and infrastructure projects.
                                                We combine technical precision with creativity to transform ideas into reliable designs.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="zenith-spacer clearfix" data-desktop="56" data-mobile="56" data-smobile="56"></div>
                                </div>
                                <div class="span_1_of_6 half-background style-2"><img src="../servicephotos/<?php echo htmlentities($service['servicePhoto']) ?>" alt="" srcset="">
                                </div>
                            </div><!-- /.zenith-row -->
                            <div class="zenith-spacer clearfix" data-desktop="39" data-mobile="39" data-smobile="39"></div>
                            <div class="flat-content-wrap style-2 clearfix">
                                <h5 class="title">Our Design Philosophy</h5>
                                <p>Through our Design-Build service, we provides a single source of responsibility to the client.
                                    We work to develop and understand project expectations and then manage those needs with a customized, qualified design team.
                                    Innovation should happen throughout a project. To do that, we focus our efforts on each step of every phase to make the entire process smooth and straightforward.
                                    Our proactive, collaborative approach is what uncovers unique ideas and opportunities for improvement before the next phase begins.
                                    We emphasize design integrity, sustainability, and constructability in every project.
                                </p>
                            </div>
                            <div class="zenith-spacer clearfix" data-desktop="37" data-mobile="35" data-smobile="35"></div>
                            <div class="flat-content-wrap style-2 clearfix">
                                <div class="item">
                                    <div class="zenith-accordions style-4 clearfix mx-3">
                                        <div class="accordion-item active">
                                            <h3 class="accordion-heading"><span class="inner">Our Core Strengths</span></h3>
                                            <div class="accordion-content clearfix">
                                                <div class="zenith-row clearfix">
                                                    <div class="zenith-content-box clearfix" data-margin="0 22px 0 0px" data-mobilemargin="0 22px 0 0px">
                                                        <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                                    <span class="text">Multi-disciplinary coordination</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                                    <span class="text">Advanced CAD and BIM modeling</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                                    <span class="text">Compliance with international standards</span>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="zenith-spacer clearfix" data-desktop="10" data-mobile="10" data-smobile="10"></div>
                                                        <div class="zenith-list  style-2 icon-left  clearfix">

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
                                <div class="item">
                                    <div class="zenith-accordions style-4 clearfix mx-3">
                                        <div class="accordion-item active">
                                            <h3 class="accordion-heading"><span class="inner">Our Approach
                                                </span></h3>
                                            <div class="accordion-content clearfix">
                                                <div class="zenith-row clearfix">
                                                    <div class="zenith-content-box clearfix" data-margin="0 22px 0 0px" data-mobilemargin="0 22px 0 0px">
                                                        <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                                    <span class="text">Innovative yet practical design solutions</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                                    <span class="text">Thorough feasibility and safety analysis</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                            <div class="inner">
                                                                <span class="item">
                                                                    <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                                    <span class="text">Client collaboration and transparent reporting</span>
                                                                </span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- /.zenith-content-box -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.item -->
                        </div>
                        <div class="zenith-spacer clearfix" data-desktop="37" data-mobile="35" data-smobile="35"></div>
                        <div class="flat-content-wrap style-2 clearfix">
                            <div class="zenith-headings style-2 clearfix">
                                <h2 class="heading">OUR ENGINEERING DESIGN SERVICES</h2>
                                <div class="sep has-width w80 accent-bg clearfix"></div>
                            </div>
                            <!-- <h5 class="title no-letter-spacing">OUR ENGINEERING DESIGN SERVICES</h5> -->
                            <div class="zenith-spacer clearfix" data-desktop="27" data-mobile="27" data-smobile="27"></div>

                            <div class="zenith-tabs style-1 w168 clearfix">
                                <ul class="tab-title clearfix">
                                    <li class="item-title active">
                                        <span class="inner">Civil Engineering Design</span>
                                    </li>
                                    <li class="item-title">
                                        <span class="inner">Structural Design</span>
                                    </li>
                                    <li class="item-title">
                                        <span class="inner">Infrastructure Planning</span>
                                    </li>
                                </ul>

                                <div class="tab-content-wrap clearfix">
                                    <div class="tab-content">
                                        <div class="item-content">
                                            <p>
                                                Roads, Brisges, drainage, water supply, and site infrastructure design,
                                                integrating functionality, cost efficiency, and resilience.
                                            </p>
                                        </div>
                                    </div><!-- /.tab-content -->
                                    <div class="tab-content">
                                        <div class="item-content">
                                            <p>
                                                Design of Roads, bridges, and industrial
                                                structures using advanced modeling and analysis tools to ensure safety and economy.
                                            </p>
                                        </div>
                                    </div><!-- /.tab-content -->
                                    <div class="tab-content">
                                        <div class="item-content">
                                            <p>
                                                Comprehensive design and master planning for urban and rural
                                                infrastructure, tailored to future growth and environmental needs.
                                            </p>
                                        </div>
                                    </div><!-- /.tab-content -->
                                </div>
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