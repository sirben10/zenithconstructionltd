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