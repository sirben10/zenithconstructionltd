<?php 
require_once 'includes/functions.php';
$rows = fetchAllSiteSettings($dbh);

if (!empty($_GET['p'])) {
  $page = $_GET['p'];
}

// echo $rows['siteicon']; exit;
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
    <link rel="stylesheet" type="text/css" href="style.css" />

    <!-- Colors -->
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/css/colors/color1.css"
      id="colors"
    />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="sitelogo/<?php echo $rows['siteicon'] ?>" />
    <link
      rel="apple-touch-icon-precomposed"
      href="../assets/icon/zenith_favicon.jpg"
    />

    <!--[if lt IE 9]>
      <script src="javascript/html5shiv.js"></script>
      <script src="javascript/respond.min.js"></script>
    <![endif]-->

   
  </head>