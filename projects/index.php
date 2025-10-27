<?php
 if (!empty($_GET['p'])) {
// echo $rows['sitetitle']; exit;
include '../includes/header.php';
// $sql = "SELECT p.projectTitle,p.previewPhoto, GROUP_CONCAT(s.serviceName SEPARATOR ', ') AS services
// FROM tblprojects p
// LEFT JOIN tblprojectservices ps ON p.projectID = ps.projectID
// LEFT JOIN tblservices s ON ps.serviceID = s.serviceID
// GROUP BY p.projectID";
// echo $sql; exit;
//  if (!empty($_GET['s'])) {
//      $projectSlug = $_GET['s'];
//     $sql = "SELECT * from tblprojectgallery pg JOIN tblprojects p ON p. projectID = pg.projectID
//     where projectSlug = $projectSlug";
//     echo $sql; exit;
//     $query = $dbh->prepare($sql);
//     $query->execute();
//     $singleresult = $query->fetch(PDO::FETCH_ASSOC);
//  }
     
?>
 <?php
            if (empty($_GET['s'])) {?>
<title><?php echo 'Our Projects | ' . $rows['sitetitle'] ?> </title>
<?php } ?>


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
  <?php
            if (empty($_GET['s'])) {?>
            <!-- Featured Title -->
            <div id="featured-title" class="featured-title clearfix">
                <div id="featured-title-inner" class="container clearfix">
                    <div class="featured-title-inner-wrap">
                        <div id="breadcrumbs">
                            <div class="breadcrumbs-inner">
                                <div class="breadcrumb-trail">
                                    <a href="index.html" class="trail-begin">Home</a>
                                    <span class="sep">|</span>
                                    <span class="trail-end">Projects</span>
                                </div>
                            </div>
                        </div>
                        <div class="featured-title-heading-wrap">
                            <h1 class="feautured-title-heading">
                                Our Projects
                            </h1>
                        </div>
                    </div><!-- /.featured-title-inner-wrap -->
                </div><!-- /#featured-title-inner -->
            </div>
            <!-- End Featured Title -->
            <?php
          
                $sql = "SELECT p.projectTitle,p.previewPhoto, p.projectSlug, GROUP_CONCAT(s.serviceName SEPARATOR ' | ') AS services
FROM tblprojects p
LEFT JOIN tblprojectservices ps ON p.projectID = ps.projectID
LEFT JOIN tblservices s ON ps.serviceID = s.serviceID
GROUP BY p.projectID";
                // echo $sql; exit;
                $query = $dbh->prepare($sql);
                $query->execute();
                $Allresults = $query->fetchAll(PDO::FETCH_ASSOC);
            ?>
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
                                                    <div class="zenith-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>
                                                    <h3 class="text-center">Shaping Communities, Transforming Spaces, and Leading
                                                        Construction Project Management: Our portfolio demonstrates our dedication
                                                    </h3>
                                                    <div class="zenith-spacer clearfix" data-desktop="73" data-mobile="60" data-smobile="60"></div>

                                                    <div class="zenith-project style-2 isotope-project has-margin mg15 data-effect clearfix">
                                                        <?php foreach ($Allresults as $singleresult) { ?>
                                                            <div class="project-item">
                                                                <div class="inner">
                                                                    <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                                        <div style="height: 200px;">
                                                                            <img class="img-fluid" src="../projectphotos/<?php echo $singleresult['previewPhoto']; ?>" alt="<?php echo $singleresult['projectTitle']; ?>" height="auto">
                                                                        </div>
                                                                        <!-- <div class="elm-link">
                                                                <a href="#" class="icon-1 icon-search"></a>
                                                                <a href="#" class="icon-1"></a>
                                                            </div> -->
                                                                        <div class="overlay-effect bg-color-3"></div>
                                                                    </div>
                                                                    <div class="text-wrap">
                                                                        <h5 class="heading"><a href="?p=projects&s=<?php echo $singleresult['projectSlug']; ?>"><?php echo htmlentities(strtoupper($singleresult['projectTitle'])); ?></a></h5>
                                                                        <div class="elm-meta">
                                                                            <span><a><?php echo $singleresult['services']; ?></a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- /.product-item -->
                                                        <?php } ?>
                                                    </div><!-- /.zenith-project -->

                                                    <div class="zenith-spacer clearfix" data-desktop="72" data-mobile="60" data-smobile="60"></div>
                                                </div><!-- /.col-md-12 -->
                                            </div><!-- /.row -->
                                        </div><!-- /.container -->
                                    </div>
                                    <!-- END SERVICES -->
                                </div><!-- /.page-content -->
                            </div><!-- /#inner-content -->
                        </div><!-- /#site-content -->
                    </div><!-- /#content-wrap -->
                </div><!-- /#main-content -->
                <!-- TESTIMONIALS -->
                <?php include '../includes/testimonial.php';
                //  CLIENTS 
                include '../includes/clients.php'; ?>
                <!-- <div class="zenith-spacer clearfix" data-desktop="72" data-mobile="60" data-smobile="60"></div> -->


                <!-- Footer -->
            <?php } else { 
                include 'insight.php';
             }
            include '../includes/footer.php'; ?>

            <a id="scroll-top"></a>

            <!-- Javascript -->
            <script src="../assets/js/jquery.min.js"></script>
            <script src="../assets/js/plugins.js"></script>
            <script src="../assets/js/tether.min.js"></script>
            <script src="../assets/js/bootstrap.min.js"></script>
            <script src="../assets/js/animsition.js"></script>
            <script src="../assets/js/owl.carousel.min.js"></script>
            <script src="../assets/js/countto.js"></script>
            <script src="../assets/js/equalize.min.js"></script>
            <script src="../assets/js/jquery.isotope.min.js"></script>
            <script src="../assets/js/owl.carousel2.thumbs.js"></script>

            <script src="../assets/js/jquery.cookie.js"></script>
            <script src="../assets/js/gmap3.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&amp;region=GB"></script>
            <script src="../assets/js/shortcodes.js"></script>
            <script src="../assets/js/main.js"></script>

            <!-- Revolution Slider -->
            <script src="../includes/rev-slider/js/jquery.themepunch.tools.min.js"></script>
            <script src="../includes/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
            <script src="../assets/js/rev-slider.js"></script>
            <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
            <script src="../includes/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
            <script src="../includes/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
            <script src="../includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
            <script src="../includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
            <script src="../includes/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
            <script src="../includes/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
            <script src="../includes/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
            <script src="../includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
            <script src="../includes/rev-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>


</html>
<?php } else {
    header('location: ?p=projects');
}
?>