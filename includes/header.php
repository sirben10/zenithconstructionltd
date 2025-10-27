<?php 

require_once 'functions.php';
$rows = fetchAllSiteSettings($dbh);
$services = fetchAllServicesUsers($dbh);
$servicesqsl = fetchAllServicesSql($dbh);
$slides = fetchAllSlides($dbh);
$projects = fetchAllProjects($dbh);
$testimonials = fetchAllTestimonials($dbh);
$mandate = fetchOurMandate($dbh);
$companyStats = fetchCompanyStatistics($dbh);

if (!empty($_GET['p'])) {
  $page = $_GET['p'];
}
 $serv = md5('service');
?>

<!DOCTYPE html>
<!--[if IE 8]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html
  xmlns="http://www.w3.org/1999/xhtml"
  xml:lang="en-US"
  lang="en-US"
><!--<![endif]-->
  <head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8" />
    <!--[if IE
      ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"
    /><![endif]-->
    
    <meta name="author" content="zenithconstructionltd.com" />
    
    <!-- Mobile Specific Metas -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?php if (!empty($_GET['p']) && ($_GET['p'] == 'services' || $_GET['p'] == 'projects')) {?>../style.css
      <?php }else {?>style.css<?php } ?>" />

    <!-- Colors -->
    <link
      rel="stylesheet"
      type="text/css"
      href="<?php if (!empty($_GET['p']) && ($_GET['p'] == 'services' || $_GET['p'] == 'projects')) {?>../assets/css/colors/color1.css
        <?php }else {?>../assets/css/colors/color1.css<?php } ?>"
      id="colors"
    />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="<?php if (!empty($_GET['p']) && ($_GET['p'] == 'services' || $_GET['p'] == 'projects')) {?>../sitelogo/<?php echo $rows['siteicon'] ?>
      <?php } else{?>sitelogo/<?php echo $rows['siteicon'] ?><?php } ?>" />
    <link
      rel="apple-touch-icon-precomposed"
      href="<?php if (!empty($_GET['p']) && ($_GET['p'] == 'services' || $_GET['p'] == 'projects')) {?>../assets/icon/zenith_favicon.jpg
        <?php }else {?>../assets/icon/zenith_favicon.jpg<?php } ?>"

    />

    <!--[if lt IE 9]>
      <script src="javascript/html5shiv.js"></script>
      <script src="javascript/respond.min.js"></script>
    <![endif]-->

   <style>
   :root{
    --cursor-size: 30px;
    --cursor-color: rgba(77, 107, 71, 0.5);
    --cursor-border: 2px;
    --cursor-border-color: none;
    --cursor-scale-hover: 2.8;
    --cursor-smoothness: 0.28;
  }


  .mouse-indicator {
    position: fixed;
    left: 0;
    top: 0;
    width: var(--cursor-size);
    height: var(--cursor-size);
    border-radius: 50%;
    background: var(--cursor-color);
    border: var(--cursor-border) solid var(--cursor-border-color);
    transform: translate(-50%, -50%) scale(1);
    pointer-events: none;
    z-index: 9999;
    transition: opacity 0.2s ease, transform 0.15s ease-out;
  }

  .mouse-indicator.hover {
    transform: translate(-50%, -50%) scale(var(--cursor-scale-hover));
  }

  .mouse-indicator.hidden {
    opacity: 0;
  }
  
  </style>
  </head>


  