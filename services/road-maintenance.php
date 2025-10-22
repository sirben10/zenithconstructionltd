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
                                            <div class="sup-heading">Safe. Durable. Cost-effective.</div>
                                            <h2 class="heading font-size-28 line-height-39"><?php echo htmlentities(strtoupper($service['serviceName'])); ?></h2>
                                            <div class="sep has-width w80 accent-bg margin-top-20 clearfix"></div>
                                            <p class="sub-heading margin-top-33 line-height-24 text-justify px-lg-1">
                                                We specialise in pothole repairs, full-depth resurfacing, asphalt patching,
                                                preventative maintenance, and pavement management plans for towns, contractors and
                                                private clients. Minimise downtime, extend pavement life.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="zenith-spacer clearfix" data-desktop="56" data-mobile="56" data-smobile="56"></div>
                                </div>
                                <div class="span_1_of_6 half-background style-2"><img src="../servicephotos/<?php echo htmlentities($service['servicePhoto']) ?>" alt="" width="100%" height="100%">
                                </div>
                            </div><!-- /.zenith-row -->
                            <div class="zenith-spacer clearfix" data-desktop="39" data-mobile="39" data-smobile="39"></div>
                            <div class="flat-content-wrap style-2 clearfix">
                                <h5 class="title">Our Design Philosophy</h5>
                                <p>Zenith has provided road repair, resurfacing and pavement management services for over 25 Years.
                                    We combine civil engineering best practices with
                                    modern materials and data-led pavement management to deliver long-lasting,
                                    safe roads with predictable maintenance budgets.
                                </p>
                            </div>
                            <div class="zenith-spacer clearfix" data-desktop="37" data-mobile="35" data-smobile="35"></div>

                            <div class="zenith-spacer clearfix" data-desktop="37" data-mobile="35" data-smobile="35"></div>
                            <div class="flat-content-wrap style-2 clearfix">
                                <div class="zenith-headings style-2 clearfix">
                                    <h2 class="heading">OUR ROAD MAINTENANCE SERVICES</h2>
                                    <div class="sep has-width w80 accent-bg clearfix"></div>
                                </div>
                                <!-- <h5 class="title no-letter-spacing">OUR ENGINEERING DESIGN SERVICES</h5> -->
                                <div class="zenith-spacer clearfix" data-desktop="27" data-mobile="27" data-smobile="27"></div>

                                <div class="zenith-tabs style-1 w168 clearfix">
                                    <ul class="tab-title clearfix">
                                        <li class="item-title active">
                                            <span class="inner">Pothole Repairs</span>
                                        </li>
                                        <li class="item-title">
                                            <span class="inner">Resurfacing & Reprofiling</span>
                                        </li>
                                        <li class="item-title">
                                            <span class="inner">Preventive Maintenance</span>
                                        </li>
                                    </ul>

                                    <div class="tab-content-wrap clearfix">
                                        <div class="tab-content">
                                            <div class="item-content">
                                                <p>
                                                    Cold and hot patching, full-depth repair, and structural reinstatement for immediate safety and long-term durability.
                                                <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                    <div class="inner">
                                                        <span class="item">
                                                            <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                            <span class="text">24-hour emergency patching teams</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                    <div class="inner">
                                                        <span class="item">
                                                            <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                            <span class="text">Patch planning to prevent recurrence</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                    <div class="inner">
                                                        <span class="item">
                                                            <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                            <span class="text">Photographic reporting for each repair</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div><!-- /.tab-content -->
                                        <div class="tab-content">
                                            <div class="item-content">
                                               <p>
                                                    Surface milling, full-width resurfacing, and wearing course installation to restore smoothness and skid resistance.
                                                <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                    <div class="inner">
                                                        <span class="item">
                                                            <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                            <span class="text">Material selection (SMA, dense graded asphalt)</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                    <div class="inner">
                                                        <span class="item">
                                                            <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                            <span class="text">Machinery and compaction control</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                    <div class="inner">
                                                        <span class="item">
                                                            <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                            <span class="text">Traffic management and night works</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div><!-- /.tab-content -->
                                        <div class="tab-content">
                                            <div class="item-content">
                                                <p>
                                                    Crack sealing, slurry sealing, micro-surfacing and seal coats to extend pavement life and reduce whole-life costs.
                                                <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                    <div class="inner">
                                                        <span class="item">
                                                            <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                            <span class="text">Data-driven maintenance schedules</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                    <div class="inner">
                                                        <span class="item">
                                                            <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                            <span class="text">Condition surveys and lifecycle modelling</span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="zenith-list has-icon style-1 icon-left size-16 clearfix">
                                                    <div class="inner">
                                                        <span class="item">
                                                            <span class="icon"><i class="fa fa-check-circle"></i></span>
                                                            <span class="text">Cost-benefit reporting</span>
                                                        </span>
                                                    </div>
                                                </div>
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