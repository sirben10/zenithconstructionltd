<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
	if (isset($_GET['id']) && !empty($_GET['id'])) {
		$serviceID = intval($_GET['id']);
	}
	// Code for change password	
	$serviceName = $_POST['serviceName'];
	$serviceImage = $_FILES['serviceImage']['name'];
	$sql = "SELECT * from  tblservices WHERE serviceName=:serviceName";
	$query = $dbh->prepare($sql);
	$query->bindParam(':serviceName', $serviceName, PDO::PARAM_STR);
	$query->execute();

	// $serviceImagesize = $_FILES['serviceImage']['size'];
	if (isset($_POST['submit'])) {
		if ($sitelogosize > 1000000 && $slideImagesize > 1000000) {
			$error = "Image size should be less than 100kb";
		} else {
			if ($query->rowCount() > 0) {
				$error = "Service already added. You can update it.";
			} else {
				switch ($_FILES['serviceImage']['error']) {
					case UPLOAD_ERR_OK:
						$imgfile = $_FILES["serviceImage"]["name"];
						$extension = strtolower(pathinfo($imgfile, PATHINFO_EXTENSION));
						$allowed_extensions = array("jpg", "jpeg", "png", "gif");
						if (!in_array($extension, $allowed_extensions)) {
							$error = "Invalid file format. Only JPG, JPEG, PNG & GIF are allowed.";
						} else {
							$newfilename = uniqid("service_") . '.' . $extension;
							$upload_path = "../servicephotos/" . $newfilename;
							if (move_uploaded_file($_FILES["serviceImage"]["tmp_name"], $upload_path)) {
								// File uploaded successfully
								$sql = "INSERT INTO tblservices (serviceName, servicePhoto, dateUpdated) VALUES (:serviceName, :servicePhoto, NOW())";
								$query = $dbh->prepare($sql);
								$query->bindParam(':serviceName', $serviceName, PDO::PARAM_STR);
								$query->bindParam(':servicePhoto', $newfilename, PDO::PARAM_STR);
								if ($query->execute()) {
									$msg = "Service added successfully";
								} else {
									$error = "Failed to add service. Please try again.";
								}
							} else {
								$error = "Failed to upload image.";
							}
						}
						break;
					case UPLOAD_ERR_NO_FILE:
						// No file uploaded, proceed without updating the image
						break;
					default:
						$error = "An error occurred during file upload.";
						break;
				}
			}
		}
	}
	// Code for Update Service

	if (isset($_POST['update'])) {
		$serviceImage = $_FILES['serviceImage']['name'];
		if (!empty($serviceImage)) {
			$imgfile = $_FILES["serviceImage"]["name"];
			$extension = strtolower(pathinfo($imgfile, PATHINFO_EXTENSION));
			$allowed_extensions = ["jpg", "jpeg", "png", "gif"];
			if (!in_array($extension, $allowed_extensions)) {
				$error = "Invalid file format. Only JPG, JPEG, PNG & GIF are allowed.";
			} else {
				// Get previous image filename
				$sql = "SELECT servicePhoto FROM tblservices WHERE serviceID=:serviceID";
				$query = $dbh->prepare($sql);
				$query->bindParam(':serviceID', $serviceID, PDO::PARAM_STR);
				$query->execute();
				$prev = $query->fetch(PDO::FETCH_OBJ);
				if ($prev && !empty($prev->servicePhoto)) {
					$prevPath = "../servicephotos/{$prev->servicePhoto}";
					if (file_exists($prevPath)) {
						unlink($prevPath);
					}
				}

				$newfilename = uniqid("service_") . '.' . $extension;
				$upload_path = "../servicephotos/{$newfilename}";
				if (move_uploaded_file($_FILES["serviceImage"]["tmp_name"], $upload_path)) {
					$sql = "UPDATE tblservices SET servicePhoto=:servicePhoto WHERE serviceID=:serviceID";
					$query = $dbh->prepare($sql);
					$query->bindParam(':servicePhoto', $newfilename, PDO::PARAM_STR);
					$query->bindParam(':serviceID', $serviceID, PDO::PARAM_STR);
					if ($query->execute()) {
						$msg = "Service Image Updated successfully";
					} else {
						$error = "Failed to update service image. Please try again.";
					}
				} else {
					$error = "Failed to upload image.";
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
	<title><?php echo $results['sitetitle'] ?> | Update Service</title>
	<div class="ts-main-content">
		<?php include('includes/leftbar.php'); ?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Update Service</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Update Service</div>
									<div class="panel-body">
										<form method="post" name="service" class="form-horizontal" onSubmit="return valid();"
											enctype="multipart/form-data">


											<?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
											<?php
											$sql = "SELECT * from  tblservices WHERE serviceID=:serviceID";
											$query = $dbh->prepare($sql);
											$query->bindParam(':serviceID', $serviceID, PDO::PARAM_STR);
											$query->execute();
											$results = $query->fetch(PDO::FETCH_OBJ);
											$cnt = 1;
											?>

											<div class="form-group">
												<label class="col-sm-4 control-label"> Service Name</label>
												<div class="col-sm-8">
													<input class="form-control" value="<?php if (!empty($results)) {
																							echo htmlentities($results->serviceName);
																						} ?>" name="serviceName" id="serviceName" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-4 control-label">Service Image </label>
												<div class="col-sm-8">
													<input type="file" class="form-control" name="serviceImage" id="serviceImage">
													<img src="../servicephotos/<?php if (!empty($results)) {
																					echo htmlentities($results->servicePhoto);
																				} ?>" width="200">
												</div>
											</div>

											<div class="hr-dashed"></div>




											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">

													<button class="btn btn-primary" <?php if (!empty($results)) { ?>name="update" <?php } else { ?>name="submit" <?php } ?> type="submit">Submit</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>

						</div>

						<div>
						<?php require 'includes/copyright.php'; ?>
						<?php require 'includes/footscripts.php'; ?>
				
					</div>

					</div>
				</div>


			</div>
		
		</div>
	</div>
	

	</body>

	</html>
<?php } ?>