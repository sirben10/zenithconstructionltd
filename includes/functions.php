<?php
include 'admin/includes/config.php';
global $dbh;
function fetchAllSiteSettings($dbh) {
  try {
    $stmt = $dbh->prepare("SELECT * FROM tblsitesettings");
    // var_dump($stmt); exit;
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
    
  } catch (Exception $e) {
    return [];
  }
}

// FUNCTION TO FETCH ALL SERVICES
function fetchAllServices($dbh) {
  try {
    $stmt = $dbh->prepare("SELECT * FROM tblservices");
    // var_dump($stmt); exit;
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
  } catch (Exception $e) {
    return [];
  }
}

// FUNCTION TO FETCH SLIDES
function fetchAllSlides($dbh) {
  try {
    $stmt = $dbh->prepare("SELECT * FROM tblslider");
    // var_dump($stmt); exit;
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
  } catch (Exception $e) {
    return [];
  }
}

// FUNCTION TO FETCH ALL PARTNERS
function fetchAllPartners($dbh) {
  try {
    $stmt = $dbh->prepare("SELECT * FROM tblpartners");
    // var_dump($stmt); exit;
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
  } catch (Exception $e) {
    return [];
  }
}

// FUNCTION TO FETCH ALL PROJECTS
function fetchAllProjects($dbh) {
  try {
    $stmt = $dbh->prepare("SELECT * FROM tblprojects");
    // var_dump($stmt); exit;
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
  } catch (Exception $e) {
    return [];
  }
}

// FUNCTION TO FETCH ALL TESTIMONIALS
function fetchAllTestimonials($dbh) {
  try {
    $stmt = $dbh->prepare("SELECT * FROM tbltestimonials");
    // var_dump($stmt); exit;
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
  } catch (Exception $e) {
    return [];
  }
}


?>
