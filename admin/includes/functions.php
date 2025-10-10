<?php 
include 'config.php';
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

// Select all Services
function fetchAllServices($dbh): mixed {
  try {
    $stmt = $dbh->prepare("SELECT * FROM tblservices");
    // var_dump($stmt); exit;
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

  } catch (Exception $e) {
    return [];
  }
}

// Select all Partners
function fetchAllPartners($dbh): mixed {
  try {
    $stmt = $dbh->prepare("SELECT * FROM tblpartners");
    // var_dump($stmt); exit;
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

  } catch (Exception $e) {
    return [];
  }
}
