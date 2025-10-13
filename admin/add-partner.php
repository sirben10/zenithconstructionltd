<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
	if (isset($_GET['id']) && !empty($_GET['id'])) {
		$partnerID = intval($_GET['id']);
		// echo $partnerID; exit;
	}
	$sql = "SELECT * from  tblpartners WHERE companyName=:companyName";
	$query = $dbh->prepare($sql);
	$query->bindParam(':companyName', $companyName, PDO::PARAM_STR);
	$query->execute();
	// Code for Insert	
	if (isset($_POST['submit'])) {
		$companyName = $_POST['companyName'];
		$partnerLogo = $_FILES['partnerLogo']["name"];
		$partnerLogosize = $_FILES['partnerLogo']["size"];
		// echo $partnerLogosize; exit;
		if ($partnerLogosize > 1000000) {
			$error = "Image size should be less than 100kb";
		} else {
			if ($query->rowCount() > 0) {
				$error = "partner already added. You can update it.";
			} else {
				switch ($_FILES['partnerLogo']['error']) {
					case UPLOAD_ERR_OK:
						$imgfile = $_FILES["partnerLogo"]["name"];
						$extension = strtolower(pathinfo($imgfile, PATHINFO_EXTENSION));
						$allowed_extensions = array("jpg", "jpeg", "png", "gif");
						if (!in_array($extension, $allowed_extensions)) {
							$error = "Invalid file format. Only JPG, JPEG, PNG & GIF are allowed.";
						} else {
							$newfilename = uniqid("partner_") . '.' . $extension;
							$upload_path = "../partnersphotos/" . $newfilename;
							// echo $upload_path; exit;
							if (move_uploaded_file($_FILES["partnerLogo"]["tmp_name"], $upload_path)) {
								$sql = "INSERT INTO tblpartners (companyName, partnerLogo, dateUpdated) VALUES (:companyName, :partnerLogo, NOW())";
								$query = $dbh->prepare($sql);
								$query->bindParam(':companyName', $companyName, PDO::PARAM_STR);
								$query->bindParam(':partnerLogo', $newfilename, PDO::PARAM_STR);
								if ($query->execute()) {
									$msg = "partner added successfully";
								} else {
									$error = "Failed to add partner. Please try again.";
								}
							} else {
								$error = "Failed to upload image.";
							}
						}
						break;
					case UPLOAD_ERR_NO_FILE:
						$error = "No file uploaded.";
						break;
					default:
						$error = "An error occurred during file upload.";
						break;
				}
			}
		}
		// $sql = "update tblpartnerr set partnerBigCaption=:partnerBigCaption,companyName=:companyName, partnerLogo=:partnerLogo,dateUpdated=now()";

	}

	// Code for Updte Service

	if (isset($_POST['update'])) {
		if ($query->rowCount() > 0) {
			$error = "No changes made, name is the same.";
		} else {
			// Handle logo update
			$newLogo = $partnerLogo;
			if (!empty($_FILES['partnerLogo']['name'])) {
				// Get old logo filename
				$sql = "SELECT partnerLogo FROM tblpartners WHERE PartnerID=:PartnerID";
				$query = $dbh->prepare($sql);
				$query->bindParam(':PartnerID', $partnerID, PDO::PARAM_STR);
				$query->execute();
				$oldLogo = $query->fetchColumn();

				// Unlink old logo if exists
				if ($oldLogo && file_exists("../partnersphotos/" . $oldLogo)) {
					unlink("../partnersphotos/" . $oldLogo);
				}

				// Upload new logo
				$imgfile = $_FILES["partnerLogo"]["name"];
				$extension = strtolower(pathinfo($imgfile, PATHINFO_EXTENSION));
				$allowed_extensions = array("jpg", "jpeg", "png", "gif");
				if (!in_array($extension, $allowed_extensions)) {
					$error = "Invalid file format. Only JPG, JPEG, PNG & GIF are allowed.";
				} else {
					$newLogo = uniqid("partner_") . '.' . $extension;
					$upload_path = "../partnersphotos/" . $newLogo;
					if (!move_uploaded_file($_FILES["partnerLogo"]["tmp_name"], $upload_path)) {
						$error = "Failed to upload new image.";
					}
				}
			}

			if (empty($error)) {
				$sql = "UPDATE tblpartners SET companyName=:companyName, partnerLogo=:partnerLogo, dateUpdated=NOW() WHERE PartnerID=:PartnerID";
				$query = $dbh->prepare($sql);
				$query->bindParam(':companyName', $companyName, PDO::PARAM_STR);
				$query->bindParam(':partnerLogo', $newLogo, PDO::PARAM_STR);
				$query->bindParam(':PartnerID', $partnerID, PDO::PARAM_STR);
				if ($query->execute()) {
					$msg = "Partner Updated successfully";
				} else {
					$error = "Failed to update Partner. Please try again.";
				}
			}
		}
	}
?>

	<!doctype html>
	<html lang="en" class="no-js">


	<?php

	include 'includes/topassets.php';
	include('includes/header.php'); ?>
	<title><?php echo $results['sitetitle'] ?> | Update Client</title>
	<div class="ts-main-content">
		<?php include('includes/leftbar.php'); ?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Update Client</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Update Client</div>
									<div class="panel-body">
										<form method="post" name="partner" class="form-horizontal" onSubmit="return valid();"
											enctype="multipart/form-data">


											<?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
											<?php
											if (isset($partnerID) && !empty($partnerID)) {
												$sql = "SELECT * from  tblpartners WHERE partnerID=:partnerID";
												$query = $dbh->prepare($sql);
												$query->bindParam(':partnerID', $partnerID, PDO::PARAM_STR);
												$query->execute();
												$results = $query->fetch(PDO::FETCH_OBJ);
											}
											?>

											<div class="form-group">
												<label class="col-sm-4 control-label"> Client Name</label>
												<div class="col-sm-8">
													<input class="form-control" value="<?php if (!empty($results)) {
																							echo htmlentities($results->companyName);
																						} ?>" name="companyName" id="companyName" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label">Client Logo </label>
												<div class="col-sm-8">
													<input type="file" class="form-control" name="partnerLogo" id="partnerLogo">
													<img src="../partnersphotos/<?php if (!empty($results)) {
																					echo htmlentities($results->partnerLogo);
																				} ?>" width="200">
												</div>
											</div>
											<div class="hr-dashed"></div>




											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">

													<button class="btn btn-primary" <?php if (isset($partnerID) && !empty($results)) {
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