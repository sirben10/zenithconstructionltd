<?php
include 'includes/header.php';
$projectsCompleted = $companyStats['projectsCompleted'];
$workers = $companyStats['workers'];
$experienceYears = $companyStats['experienceYears'];
$satisfiedClients = $companyStats['satisfiedClients'];
// echo $projectsCompleted.' '.$workers.' '.$experienceYears.' '.$satisfiedClients; exit;
?>
<style>
    /* Skewed Section */
    .section-skewed {
        position: relative;
        height: 350px;
        background: url('assets/img/1024px-Road_construction_in_progress.jpeg') no-repeat center center/cover;
        transform: skewY(-4deg);
        overflow: hidden;
    }

    /* Dark Overlay */
    .section-skewed::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.75);
        z-index: 1;
    }

    /* Text content (straightened) */
    .content-skewed {
        position: relative;
        z-index: 2;
        color: white;
        text-align: center;
        transform: skewY(4deg);
        margin: auto;
        justify-content: center;
        align-items: center;
    }

    .content-skewed h1 {
        font-size: 2.5em;
        margin-bottom: 10px;
        margin-top: 20px;
        letter-spacing: 1px;
    }

    .content-skewed p {
        font-size: 15px;
        line-height: normal;
        opacity: 0.9;
    }

    .in-font-size {
        font-size: inherit;
        font-family: inherit;
        line-height: inherit;
    }

    @media (max-width: 768px) {
        .content-skewed h1 {
            font-size: 1.8rem;
        }

        .content-skewed p {
            font-size: 15px;
            line-height: inherit;
            text-align: left !important;
        }

        .in-font-size {
            font-size: inherit;
            text-align: left;
        }

    }

    /* scroll */
    .scroll {
        max-height: 600px;
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

    /* Skewed Section */
    .skewed-section {
        position: relative;
        background: url('assets/img/1024px-Road_construction_in_progress.jpeg') no-repeat center center/cover;
        /* transform: skewY(-1deg); */
        height: 400px;
        margin-top: 50px;
        overflow: hidden;
    }

    /* Overlay */
    .skewed-section::before {
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
    .skewed-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: #fff;
    }

    .skewed-content h1 {
        font-size: 2.5em;
        margin-bottom: 10px;
    }

    .skewed-content p {
        font-size: 16px;
        line-height: inherit;
        opacity: 0.9;
    }

    @media (max-width: 768px) {
        .skewed-section {

            height: 100%;
        }

        .skewed-content h1 {
            font-size: 1.8rem;
        }

        .skewed-content p {
            font-size: 1.3rem;
            text-align: left !important;
        }


    }
</style>

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
                                    <a href="/" class="trail-begin">Home</a>
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
                                            <div class="col-md-12 ">
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
                                        <div class="row equalize sm-equalize-auto justify-content-center bg-light-grey">
                                            <div class="col-lg-10 col-md-12 m-auto p-5">
                                                <div class="in-font-size">

                                                    <p>
                                                        <?php echo $mandate['backgroundInfo']; ?>
                                                    </p>
                                                </div>
                                                <!-- /.zenith-content-box -->

                                            </div>
                                            <!-- /.col-md-6 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.container-fluid -->
                                </div>
                                <!-- END ABOUT -->
                                <div class="row-about">
                                    <div class="container-fluid">
                                        <div class="row equalize sm-equalize-auto">
                                            <div class="col-md-6">
                                                <!-- COUNTER -->
                                                <div class="row-counter parallax parallax-4 parallax-overlay">
                                                    <div class="container">
                                                        <div class="row clearfix">
                                                            <div class="col-md-12">
                                                                <div class="zenith-spacer clearfix" data-desktop="75" data-mobile="60" data-smobile="60"></div>
                                                            </div><!-- /.col-md-12 -->
                                                        </div><!-- /.row -->
                                                        <div class="zenith-row separator light">
                                                            <div class="col span_1_of_12">
                                                                <div class="zenith-content-box" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                                                                    <div class="zenith-counter style-1 align-center">
                                                                        <div class="counter-item">
                                                                            <div class="inner">
                                                                                <div class="text-wrap">
                                                                                    <div class="number-wrap">
                                                                                        <span class="number" data-speed="2000" data-to="<?php echo htmlentities($projectsCompleted); ?>" data-inviewport="yes"><?php echo htmlentities($projectsCompleted); ?></span><span class="suffix">+</span>
                                                                                    </div>
                                                                                    <h3 class="heading margin-right-18">PROJECT COMPLETED</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- /.zenith-counter -->
                                                                </div>
                                                                <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                                                            </div><!-- /.col-md-12 -->
                                                            <div
                                                                class="zenith-spacer clearfix"
                                                                data-desktop="64"
                                                                data-mobile="60"
                                                                data-smobile="60"></div>
                                                            <div class="col span_1_of_12">
                                                                <div class="zenith-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                                                                    <div class="zenith-counter style-1 align-center clearfix">
                                                                        <div class="counter-item">
                                                                            <div class="inner">
                                                                                <div class="text-wrap">
                                                                                    <div class="number-wrap">
                                                                                        <span class="number" data-speed="2000" data-to="<?php echo htmlentities($workers); ?>" data-inviewport="yes"><?php echo htmlentities($workers); ?></span><span class="suffix">+</span>
                                                                                    </div>
                                                                                    <h3 class="heading margin-right-6">EXPERIENCED WORKERS</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- /.zenith-counter -->
                                                                </div>
                                                                <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="35" data-smobile="35"></div>
                                                            </div><!-- /.col-md-12 -->
                                                            <div
                                                                class="zenith-spacer clearfix"
                                                                data-desktop="64"
                                                                data-mobile="60"
                                                                data-smobile="60"></div>
                                                            <div class="col span_1_of_12">
                                                                <div class="zenith-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                                                                    <div class="zenith-counter style-1 align-center clearfix">
                                                                        <div class="counter-item">
                                                                            <div class="inner">
                                                                                <div class="text-wrap">
                                                                                    <div class="number-wrap">
                                                                                        <span class="number" data-speed="2000" data-to="<?php echo htmlentities($experienceYears); ?>" data-inviewport="yes"><?php echo htmlentities($experienceYears); ?></span><span class="suffix">+</span>
                                                                                    </div>
                                                                                    <h3 class="heading margin-right-8">YEARS ACTIVE</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- /.zenith-counter -->
                                                                </div>
                                                                <div class="zenith-spacer clearfix" data-desktop="0" data-mobile="0" data-smobile="35"></div>
                                                            </div><!-- /.col-md-12 -->
                                                            <div
                                                                class="zenith-spacer clearfix"
                                                                data-desktop="64"
                                                                data-mobile="60"
                                                                data-smobile="60"></div>
                                                            <div class="col span_1_of_12">
                                                                <div class="zenith-content-box clearfix" data-margin="0 0 0 0" data-mobilemargin="0 0 0 0">
                                                                    <div class="zenith-counter style-1 align-center clearfix">
                                                                        <div class="counter-item">
                                                                            <div class="inner">
                                                                                <div class="text-wrap">
                                                                                    <div class="number-wrap">
                                                                                        <span class="number" data-speed="2000" data-to="<?php echo htmlentities($satisfiedClients); ?>" data-inviewport="yes"><?php echo htmlentities($satisfiedClients); ?></span><span class="suffix">+</span>
                                                                                    </div>
                                                                                    <h3 class="heading margin-right-10">SATISFIED CLIENTS</h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- /.zenith-counter -->
                                                                </div>
                                                            </div><!-- /.col-md-12 -->
                                                            <div
                                                                class="zenith-spacer clearfix"
                                                                data-desktop="64"
                                                                data-mobile="60"
                                                                data-smobile="60"></div>
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
                                            </div>
                                            <div class="col-md-6">
                                                <div class="zenith-content-box clearfix" data-margin="0 18px 0 0" data-mobilemargin="0 0 0 0">
                                                    <div class="zenith-spacer clearfix" data-desktop="28" data-mobile="35" data-smobile="35"></div>
                                                    <div class="zenith-headings style-1 clearfix">
                                                        <h2 class="heading" style="color: #0c4a0c;">OUR CORE VALUES</h2>
                                                        <div class="sep has-width w80 accent-bg margin-top-11 clearfix"></div>
                                                        <p>
                                                            <?php echo $mandate['coreValues']; ?>
                                                        </p>
                                                    </div>
                                                    <div class="zenith-spacer clearfix" data-desktop="38" data-mobile="35" data-smobile="35"></div>

                                                </div><!-- /.zenith-content-box -->
                                            </div>
                                            <!-- /.col-md-6 -->

                                        </div>
                                    </div>
                                </div>
                                <div class="scroll">
   <section class="skewed-section">
                        <div class="row equalize sm-equalize-auto">
                            <div class="col-xl-10 m-auto col-sm-12 p-5">

                                <div class="skewed-content">
                                    <h1 style="color: #fff;">Our Strategy</h1>
                                    <p><?php echo $mandate['ourStrategy']; ?></p>
                                </div>

                    </section>
                                    <div
                                        class="zenith-spacer clearfix"
                                        data-desktop="64"
                                        data-mobile="60"
                                        data-smobile="60">
                                    </div>

                                    <div class="row equalize sm-equalize-auto">
                                        <div class="col-xl-6 m-auto col-sm-12 p-5">
                                            <h2 class="heading text-center" style="color: #0c4a0c;">Our Vision</h2>
                                            <div class="in-font-size">

                                                <p>
                                                    <?php echo $mandate['visionStatement']; ?>
                                                </p>
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


                                    <section class="section-skewed">
                                        <div class="row equalize sm-equalize-auto">
                                            <div class="col-xl-10 m-auto col-sm-12 p-5">

                                                <div class="content-skewed">
                                                    <h1 style="color: #fff;">Our Mission</h1>

                                                    <p><?php echo $mandate['missionStatement']; ?></p>
                                                </div>

                                    </section>
                                    <div
                                        class="zenith-spacer clearfix"
                                        data-desktop="64"
                                        data-mobile="60"
                                        data-smobile="60">
                                    </div>
                                    <div class="row equalize sm-equalize-auto">
                                        <div class="col-xl-6 m-auto col-sm-12 p-5">
                                            <h2 class="heading text-center" style="color: #0c4a0c;">Our Objectives</h2>
                                            <div class="in-font-size">

                                                <p>
                                                    <?php echo $mandate['aimsAndObjectives']; ?>
                                                </p>
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
                                </div>
                            </div>
                        </div>


                    </div>


                    <section class="skewed-section">
                        <div class="row equalize sm-equalize-auto">
                            <div class="col-xl-10 m-auto col-sm-12 p-5">

                                <div class="skewed-content">
                                    <h1 style="color: #fff;">OUR SAFETY POLICY</h1>
                                    <p><?php echo $mandate['safetyPolicy']; ?></p>
                                </div>

                    </section>


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
                                                    <a href="tel:<?php echo $rows['ContactNo']; ?>" class="zenith-button bg-alt small"><span><?php echo $rows['ContactNo']; ?>
                                                            <span class="icon"><i
                                                                    class="zenith-icon-phone-contact"></i></span></span></a>
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

                    <!-- CLIENTS -->
                    <?php
                    include 'includes/clients.php';
                    ?>
                    <!-- END CLIENTS -->
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