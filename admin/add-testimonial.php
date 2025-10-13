<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:index.php');
} else {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $testimonalID = intval($_GET['id']);
        // echo $testimonalID; exit;
    }
    // echo 'skbjkckb'; exit;
    $clientName = $_POST['clientName'];
    $companyName = $_POST['companyName'];
    $position = $_POST['position'];
    $testimony = $_POST['testimony'];

    $sql = "SELECT * from  tbltestimonials WHERE clientName=:clientName AND companyName=:companyName AND position=:position";
    $query = $dbh->prepare($sql);
    $query->bindParam(':clientName', $clientName, PDO::PARAM_STR);
    $query->bindParam(':companyName', $companyName, PDO::PARAM_STR);
    $query->bindParam(':position', $position, PDO::PARAM_STR);
    $query->execute();
    // Code for Insert	
    if (isset($_POST['submit'])) {
        if ($query->rowCount() > 0) {
            $error = "Testimony already added. You can update it.";
        } else {
            $sql = "INSERT INTO tbltestimonials (clientName, companyName, position, testimony, dateUpdated) VALUES(:clientName, :companyName, :position, :testimony, now())";
            $query = $dbh->prepare($sql);
            $query->bindParam(':clientName', $clientName, PDO::PARAM_STR);
            $query->bindParam(':companyName', $companyName, PDO::PARAM_STR);
            $query->bindParam(':position', $position, PDO::PARAM_STR);
            $query->bindParam(':testimony', $testimony, PDO::PARAM_STR);
            if ($query->execute()) {
                $msg = "Testimony added successfully";
            } else {
                $error = "Failed to add testimony. Please try again.";
            }
        }
    }
    // $sql = "update tblpartnerr set partnerBigCaption=:partnerBigCaption,companyName=:companyName, partnerLogo=:partnerLogo,dateUpdated=now()";



    // Code for Update

    if (isset($_POST['update'])) {
        if ($query->rowCount() > 0) {
            $error = "No changes made, records are the same.";
        } else {

            $sql = "UPDATE tbltestimonials SET clientName=:clientName, companyName=:companyName, position=:position, testimony=:testimony WHERE testimonalID=:testimonalID";
            $query = $dbh->prepare($sql);
            $query->bindParam(':clientName', $clientName, PDO::PARAM_STR);
            $query->bindParam(':companyName', $companyName, PDO::PARAM_STR);
            $query->bindParam(':position', $position, PDO::PARAM_STR);
            $query->bindParam(':testimony', $testimony, PDO::PARAM_STR);
            $query->bindParam(':testimonalID', $testimonalID, PDO::PARAM_STR);
            if ($query->execute()) {
                $msg = "Testimonial Updated successfully";
            } else {
                $error = "Failed to update Testimonial. Please try again.";
            }
        }
    }

?>

    <!doctype html>
    <html lang="en" class="no-js">


    <?php

    include 'includes/topassets.php';
    include('includes/header.php'); ?>
    <title><?php echo $results['sitetitle'] ?> | Update Testimonal</title>
    <div class="ts-main-content">
        <?php include('includes/leftbar.php'); ?>
        <div class="content-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <h2 class="page-title">Update Testimonal</h2>

                        <div class="row">
                            <div class="col-md-10">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Update Testimonal</div>
                                    <div class="panel-body">
                                        <form method="post" name="partner" class="form-horizontal" onSubmit="return valid();"
                                            enctype="multipart/form-data">


                                            <?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
                                            <?php
                                            if (isset($testimonalID) && !empty($testimonalID)) {
                                                $sql = "SELECT * from  tbltestimonials WHERE testimonalID=:testimonalID";
                                                $query = $dbh->prepare($sql);
                                                $query->bindParam(':testimonalID', $testimonalID, PDO::PARAM_STR);
                                                $query->execute();
                                                $results = $query->fetch(PDO::FETCH_OBJ);
                                            }
                                            ?>

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Client Name</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" value="<?php if (!empty($results)) {
                                                                                            echo htmlentities($results->clientName);
                                                                                        } ?>" name="clientName" id="clientName" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Company Name</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" value="<?php if (!empty($results)) {
                                                                                            echo htmlentities($results->companyName);
                                                                                        } ?>" name="companyName" id="companyName" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Position</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" value="<?php if (!empty($results)) {
                                                                                            echo htmlentities($results->position);
                                                                                        } ?>" name="position" id="position" required>
                                                </div>
                                            </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Testimony </label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="testimony" id="testimony" required><?php if (!empty($results)) {
                                                echo htmlentities($results->testimony);
                                            } ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="hr-dashed mb-5"></div>

                                <div class="form-group">
                                    <div class="col-sm-8 col-sm-offset-4">

                                        <button class="btn btn-primary" <?php if (isset($testimonalID) && !empty($results)) {
                                                                            echo 'name="update"';
                                                                        } else {
                                                                            echo 'name="submit"';
                                                                        } ?> type="submit">Submit</button>
                                    </div>
                                </div>

                                </form>

                            </div>
                        </div>
                    </div>

                </div>



                <?php require 'includes/copyright.php'; ?>
                <?php require 'includes/footscripts.php'; ?>
            </div>
        </div>


    </div>

    </div>
    </div>
    <div>

    </div>

    </body>

    </html>
<?php } ?>