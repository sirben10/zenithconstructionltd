<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
	// Code to update Our Mandate	
	if (isset($_POST['submit'])) {

		$backgroundInfo = $_POST['backgroundInfo'];
		$missionStatement = $_POST['missionStatement'];
		$visionStatement = $_POST['visionStatement'];
		$coreValues = $_POST['coreValues'];
		$ourStrategy = $_POST['ourStrategy'];
		$aimsAndObjectives = $_POST['aimsAndObjectives'];
		$safetyPolicy = $_POST['safetyPolicy'];
		$companyOrgnogram = $_FILES["companyOrgnogram"]["name"];
		$companyOrgnogramsize = $_FILES["companyOrgnogram"]["size"];
		// echo $aimsAndObjectives; exit;

		// Delete old image if new image is uploaded
		if (!empty($companyOrgnogram)) {
			$sql = "SELECT companyOrgnogram FROM tblmandate";
			$query = $dbh->prepare($sql);
			$query->execute();
			$result = $query->fetch(PDO::FETCH_OBJ);
			$oldImage = $result->companyOrgnogram;
			if (file_exists("organogram/" . $oldImage)) {
				unlink("organogram/" . $oldImage);
			}
		}

		if ($companyOrgnogramsize > 1000000) {
			$error = "Image size should be less than 1mb";
		} else {
			// Select All Records
			// if empty insert else update
			$select = "SELECT * FROM tblmandate";
			// echo $select; exit;
			$query = $dbh->prepare($select);
			$query->execute();
			$result = $query->fetch(PDO::FETCH_OBJ);
			// var_dump($result); exit;
			// If no record exists, insert a new one
			if (!$result || empty($result)) {
				$sql = "INSERT INTO tblmandate (backgroundInfo, missionStatement, visionStatement, coreValues, ourStrategy, aimsAndObjectives, safetyPolicy, companyOrgnogram, dateUpdated) VALUES (:backgroundInfo, :missionStatement, :visionStatement, :coreValues, :ourStrategy, :aimsAndObjectives, :safetyPolicy, :companyOrgnogram, now())";
			} else {
				$sql = "update tblmandate set backgroundInfo=:backgroundInfo, missionStatement=:missionStatement, visionStatement=:visionStatement, coreValues=:coreValues, ourStrategy=:ourStrategy, aimsAndObjectives=:aimsAndObjectives, safetyPolicy=:safetyPolicy, companyOrgnogram=:companyOrgnogram, dateUpdated=now()";
			}
			// echo $sql; exit;
			$query = $dbh->prepare($sql);
			$query->bindParam(':backgroundInfo', $backgroundInfo, PDO::PARAM_STR);
			$query->bindParam(':missionStatement', $missionStatement, PDO::PARAM_STR);
			$query->bindParam(':visionStatement', $visionStatement, PDO::PARAM_STR);
			$query->bindParam(':coreValues', $coreValues, PDO::PARAM_STR);
			$query->bindParam(':ourStrategy', $ourStrategy, PDO::PARAM_STR);
			$query->bindParam(':aimsAndObjectives', $aimsAndObjectives, PDO::PARAM_STR);
			$query->bindParam(':safetyPolicy', $safetyPolicy, PDO::PARAM_STR);
			$query->bindParam(':companyOrgnogram', $companyOrgnogram, PDO::PARAM_STR);
			$query->execute();
			if ($query) {
				move_uploaded_file($_FILES["companyOrgnogram"]["tmp_name"], "../organogram/" . $_FILES["companyOrgnogram"]["name"]);
				$msg = "Mandate Updated Successfully";
			} else {
				$error = "Something went wrong. Please try again";
			}
		}
	}
?>

	<!doctype html>
	<html lang="en" class="no-js">
		<!-- Summernote css -->
<!-- Summernote CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">

	<?php

	include 'includes/topassets.php';
	include('includes/header.php'); ?>
	<title><?php echo $results['sitetitle'] ?> | Update Our Mandate</title>
	<div class="ts-main-content">
		<?php include('includes/leftbar.php'); ?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Update Our Mandate</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Our Mandate</div>
									<div class="panel-body">
										<form method="post" name="chngpwd" class="form-horizontal" onSubmit="return valid();"
											enctype="multipart/form-data">


											<?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
											<?php $sql = "SELECT * from  tblmandate";
											// echo $sql; exit;
											$query = $dbh->prepare($sql);
											$query->execute();
											$result = $query->fetch(PDO::FETCH_OBJ);
											?>

													<div class="form-group">
														<label class="col-sm-4 control-label"> Background Info</label>
														<div class="col-sm-8">
															<textarea class="form-control summernote" name="backgroundInfo" ><?php if ($result || !empty($result)) echo htmlentities($result->backgroundInfo); ?></textarea>
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-4 control-label"> Mission Statement</label>
														<div class="col-sm-8">
															<textarea class="form-control summernote" name="missionStatement" ><?php if ($result || !empty($result)) echo htmlentities($result->missionStatement); ?></textarea>
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-4 control-label"> Vision Statement</label>
														<div class="col-sm-8">
															<textarea class="form-control summernote" name="visionStatement" ><?php if ($result || !empty($result)) echo htmlentities($result->visionStatement); ?></textarea>
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-4 control-label"> Core Values</label>
														<div class="col-sm-8">
															<textarea class="form-control summernote" name="coreValues" ><?php if ($result || !empty($result)) echo htmlentities($result->coreValues); ?></textarea>
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-4 control-label"> Our Strategy</label>
														<div class="col-sm-8">
															<textarea class="form-control summernote" name="ourStrategy" ><?php if ($result || !empty($result)) echo htmlentities($result->ourStrategy); ?></textarea>
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-4 control-label"> Aims and Objectives</label>
														<div class="col-sm-8">
															<textarea class="form-control summernote" name="aimsAndObjectives" ><?php if ($result || !empty($result)) echo htmlentities($result->aimsAndObjectives); ?></textarea>
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-4 control-label"> Safety Policy</label>
														<div class="col-sm-8">
															<textarea class="form-control summernote" name="safetyPolicy" ><?php if ($result || !empty($result)) echo htmlentities($result->safetyPolicy); ?></textarea>
														</div>
													</div>
												
													<div class="form-group">
														<label class="col-sm-4 control-label">Company Orgnogram</label>
														<div class="col-sm-8">
															<input type="file" class="form-control" name="companyOrgnogram" id="companyOrgnogram">
															<?php if ($result || !empty($result)) { ?>
																<img src="../organogram/<?php echo htmlentities($result->companyOrgnogram); ?>" width="200">
															<?php } ?>
														</div>
													</div>
											<div class="hr-dashed"></div>




											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">

													<button class="btn btn-primary" name="submit" type="submit">Update</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>

						</div>



					</div>
				</div>
			</div>
		<?php include('includes/copyright.php'); ?>
		</div>
	</div>
	<?php include('includes/footscripts.php'); ?>
	<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>	
	<!-- Summernote js -->
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
	
<script>
  // Initialize all textareas with .summernote class
  $(document).ready(function() {
    $('.summernote').summernote({
      placeholder: 'Type Here...',
      height: 250,
      tabsize: 2
    });
  });
</script>
	</body>

	</html>
<?php } ?>