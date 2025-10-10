<?php
session_start();
error_reporting(0);
include_once('includes/functions.php');
include('includes/config.php');

// var_dump($services); exit;
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
	if (isset($_GET['id']) && !empty($_GET['id'])) {
		$projectID  = intval($_GET['id']);
	}
	// $serviceID = strip_tags($_POST['serviceID']);
	$projectTitle = strtolower(strip_tags($_POST['projectTitle']));
	$protjectTitle = preg_replace('/\s+/', ' ', $projectTitle);
	$titleForImage = preg_replace('/\s+/', '_', $projectTitle);
	$projectDescription = strtolower(strip_tags($_POST['projectDescription']));
	$previewPhoto = $_FILES['previewPhoto']["name"];
	$previewPhotosize = $_FILES['previewPhoto']["size"];
	$projectLocation = strtolower(strip_tags($_POST['projectLocation']));
	$dateAwarded = strip_tags($_POST['dateAwarded']);
	$dateCompleted = strip_tags($_POST['dateCompleted']);
	$partnerID = strip_tags($_POST['partnerID']);
	// echo $titleForImage; exit;
	$ProjectManager = strip_tags($_POST['ProjectManager']);
	$principalConsultant = strip_tags($_POST['principalConsultant']);
	$projectStatus = $_POST['projectStatus'];


	$projectReport = $_FILES['projectReport']["name"];
	$projectReportsize = $_FILES['projectReport']["size"];

	$projectGallery = $_FILES['projectGallery']["name"];
	$projectGallerysize = $_FILES['projectGallery']["size"];
	$projectGalleryError = $_FILES['projectGallery']['error'];


	// Code for Insert Project
	if (isset($_POST['submit'])) {
		// echo $partnerID; exit;
    // size check only for preview image
    if ($previewPhotosize > 1000000) {
        $error = "Image size should be less than 1MB";
    } else {
        $sql = "SELECT * FROM tblprojects WHERE projectTitle=:projectTitle AND projectLocation=:projectLocation";
        $query = $dbh->prepare($sql);
        $query->bindParam(':projectTitle', $projectTitle, PDO::PARAM_STR);
        $query->bindParam(':projectLocation', $projectLocation, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() > 0) {
            $error = "Project already added. You can update it.";
        } else {
            // Validate Preview Image
            if ($_FILES['previewPhoto']['error'] === UPLOAD_ERR_OK) {
                $extension = strtolower(pathinfo($_FILES["previewPhoto"]["name"], PATHINFO_EXTENSION));
                $allowed_extensions = ["jpg", "jpeg", "png", "gif"];

                if (!in_array($extension, $allowed_extensions)) {
                    $error = "Invalid preview image format. Only JPG, JPEG, PNG & GIF are allowed.";
                } else {
                    $newfilename = uniqid("preview_" . $titleForImage) . '.' . $extension;
                    $upload_path = "../projectphotos/" . $newfilename;

                    if (move_uploaded_file($_FILES["previewPhoto"]["tmp_name"], $upload_path)) {
                        // Validate Project Report (PDF)
                        if ($_FILES['projectReport']['error'] === UPLOAD_ERR_OK) {
                            $reportExtension = strtolower(pathinfo($_FILES["projectReport"]["name"], PATHINFO_EXTENSION));
                            if ($reportExtension !== "pdf") {
                                $error = "Invalid project report format. Only PDF is allowed.";
                            } else {
                                $newreportfilename = uniqid("report_" . $titleForImage) . '.' . $reportExtension;
                                $report_upload_path = "../projectreports/" . $newreportfilename;

                                if (move_uploaded_file($_FILES["projectReport"]["tmp_name"], $report_upload_path)) {
                                    // Insert into projects table
									// echo $titleForImage; exit;
                                    $sql = "INSERT INTO tblprojects 
                                        (projectTitle, previewPhoto, projectLocation, dateAwarded, dateCompleted, client, ProjectManager, principalConsultant, projectStatus, projectReport, dateUpdated) 
                                        VALUES 
                                        (:projectTitle, :previewPhoto, :projectLocation, :dateAwarded, :dateCompleted, :partnerID, :ProjectManager, :principalConsultant, :projectStatus, :projectReport, NOW())";
                                    $query = $dbh->prepare($sql);
                                    $query->bindParam(':projectTitle', $projectTitle, PDO::PARAM_STR);
                                    $query->bindParam(':previewPhoto', $newfilename, PDO::PARAM_STR);
                                    $query->bindParam(':projectLocation', $projectLocation, PDO::PARAM_STR);
                                    $query->bindParam(':dateAwarded', $dateAwarded, PDO::PARAM_STR);
                                    $query->bindParam(':dateCompleted', $dateCompleted, PDO::PARAM_STR);
                                    $query->bindParam(':partnerID', $partnerID, PDO::PARAM_INT);
                                    $query->bindParam(':ProjectManager', $ProjectManager, PDO::PARAM_STR);
                                    $query->bindParam(':principalConsultant', $principalConsultant, PDO::PARAM_STR);
                                    $query->bindParam(':projectStatus', $projectStatus, PDO::PARAM_STR);
                                    $query->bindParam(':projectReport', $newreportfilename, PDO::PARAM_STR);

                                    $query->execute();

                                    $projectID = $dbh->lastInsertId();

                                    // Handle Gallery Uploads
                                    if (!empty($_FILES['projectGallery']['name'][0])) {
                                        foreach ($_FILES['projectGallery']['name'] as $index => $galleryImage) {
                                            if ($_FILES['projectGallery']['error'][$index] === UPLOAD_ERR_OK) {
                                                $galleryExtension = strtolower(pathinfo($galleryImage, PATHINFO_EXTENSION));
                                                if (in_array($galleryExtension, $allowed_extensions)) {
                                                    $newgalleryfilename = uniqid("gallery_" . $titleForImage) . '.' . $galleryExtension;
                                                    $gallery_upload_path = "../projectphotos/" . $newgalleryfilename;

                                                    if (move_uploaded_file($_FILES['projectGallery']['tmp_name'][$index], $gallery_upload_path)) {
                                                        $sql = "INSERT INTO tblprojectgallery (projectID, photo) VALUES (:projectID, :photo)";
                                                        $stmt = $dbh->prepare($sql);
                                                        $stmt->bindParam(':projectID', $projectID, PDO::PARAM_INT);
                                                        $stmt->bindParam(':photo', $newgalleryfilename, PDO::PARAM_STR);
                                                        $stmt->execute();
                                                    }
                                                }
                                            }
                                        }
                                    }

                                    $msg = "Project added successfully";
                                } else {
                                    $error = "Failed to upload project report.";
                                }
                            }
                        } else {
                            $error = "Please upload a project report (PDF).";
                        }
                    } else {
                        $error = "Failed to upload preview image.";
                    }
                }
            } else {
                $error = "Preview image is required.";
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
	<title><?php echo $results['sitetitle'] ?> | Update Project</title>
	<div class="ts-main-content">
		<?php include('includes/leftbar.php'); ?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Update Project</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Update Project</div>
									<div class="panel-body">
										<form method="post" name="projectr" class="form-horizontal" onSubmit="return valid();"
											enctype="multipart/form-data">

											<?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
											<?php
											if (isset($projectID) && !empty($projectID)) {
												// Get current project info
												$sql = "SELECT * from  tblprojects WHERE projectID =:projectID ";
												$query = $dbh->prepare($sql);
												$query->bindParam(':projectID ', $projectID, PDO::PARAM_STR);
												$query->execute();
												$results = $query->fetch(PDO::FETCH_OBJ);

												// Get project gallery images
												$sql = "SELECT * from  tblprojectgallery WHERE projectID =:projectID ";
												$query = $dbh->prepare($sql);
												$query->bindParam(':projectID ', $projectID, PDO::PARAM_STR);
												$query->execute();
												$galleryResults = $query->fetchAll(PDO::FETCH_OBJ);
											}
											?>
											<!-- <div class="form-group">
												<label class="col-sm-4 control-label">Select Service <em style="color:red"> *</em></label>
												<div class="col-sm-8">
													<select class="form-control" name="serviceID" id="serviceID" required>
														<option value="">Select Service</option>
														<?php
														$services = fetchAllServices($dbh);
														// var_dump($services); exit;
														foreach ($services as $service) {
															$selected = (!empty($results) && $results->serviceID == $service['serviceID']) ? 'selected' : '';
															echo "<option value='" . htmlentities($service['serviceID']) . "' $selected>" . htmlentities($service['serviceName']) . "</option>";
														}
														?>
													</select>
												</div>
											</div> -->


											<div class="form-group">
												<label class="col-sm-4 control-label">Project Title <em style="color:red"> *</em></label>
												<div class="col-sm-8">
													<input class="form-control" value="<?php if (!empty($results)) {
																							echo htmlentities($results->projectTitle);
																						} ?>" name="projectTitle" id="projectTitle" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-4 control-label">Project Location <em style="color:red"> *</em></label>
												<div class="col-sm-8">
													<input class="form-control" value="<?php if (!empty($results)) {
																							echo htmlentities($results->projectLocation);
																						} ?>" name="projectLocation" id="projectLocation" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-4 control-label">Select Partner <em style="color:red"> *</em></label>
												<div class="col-sm-8">
													<select class="form-control" name="partnerID" id="partnerID" required>
														<option value="">Select Partner</option>
														<?php
														$partners = fetchAllPartners($dbh);
														// var_dump($partners); exit;
														foreach ($partners as $partner) {
															$selected = (!empty($results) && $results->partnerID == $partner['partnerID']) ? 'selected' : '';
															echo "<option value='" . htmlentities($partner['partnerID']) . "' $selected>" . htmlentities($partner['companyName']) . "</option>";
														}
														?>
													</select>
												</div>
											</div>
											
											<div class="form-group">
												<label class="col-sm-4 control-label">Project Manager </label>
												<div class="col-sm-8">
													<input class="form-control" value="<?php if (!empty($results)) {
																							echo htmlentities($results->ProjectManager);
																						} ?>" name="ProjectManager" id="ProjectManager" required>
												</div>
											</div>




											<div class="form-group">
												<label class="col-sm-4 control-label">Date Awarded <em style="color:red"> *</em></label>
												<div class="col-sm-8">
													<input type="date" class="form-control" value="<?php if (!empty($results)) {
																										echo htmlentities($results->dateAwarded);
																									} ?>" name="dateAwarded" id="dateAwarded" required>
												</div>
											</div>


											<div class="form-group">
												<label class="col-sm-4 control-label">Principal Consultant </label>
												<div class="col-sm-8">
													<input type="text" class="form-control" value="<?php if (!empty($results)) {
																										echo htmlentities($results->principalConsultant);
																									} ?>" name="principalConsultant" id="principalConsultant" required>
												</div>
											</div>



											<div class="form-group">
												<label class="col-sm-4 control-label">Project Status</label>
												<div class="col-sm-8">
													<select class="form-control" name="projectStatus" id="projectStatus" onClick="onShowProjectStatus(this.value)" required>
														<option value="">Select Status</option>
														<option value="Ongoing" <?php if (!empty($results) && $results->projectStatus == "Ongoing") {
																					echo "selected";
																				} ?>>Ongoing</option>
														<option value="Completed" <?php if (!empty($results) && $results->projectStatus == "Completed") {
																						echo "selected";
																					} ?>>Completed</option>
														<option value="Pending" <?php if (!empty($results) && $results->projectStatus == "Pending") {
																					echo "selected";
																				} ?>>Pending</option>
													</select>
												</div>
											</div>

											<div class="form-group" style="display: none;" id="dateCompletedGroup">
												<label class="col-sm-4 control-label">Date Completed</label>
												<div class="col-sm-8">
													<input type="date" class="form-control" value="<?php if (!empty($results)) {
																										echo htmlentities($results->endDate);
																									} ?>" name="dateCompleted" id="dateCompleted">
												</div>
											</div>
											<!-- 
											<div class="form-group">
												<label class="col-sm-4 control-label">Project Description</label>
												<div class="col-sm-8">
													<textarea class="form-control" name="projectDescription" id="projectDescription" rows="4" ><?php if (!empty($results)) {
																																					echo htmlentities($results->projectDescription);
																																				} ?></textarea>
												</div>
											</div> -->

											<div class="form-group">
												<label class="col-sm-4 control-label">Project Report Document</label>
												<div class="col-sm-8">
													<input type="file" class="form-control" name="projectReport" id="projectReport" accept="application/pdf">
													<img src="../projectphotos/<?php if (!empty($results)) {
																					echo htmlentities($results->projectReport);
																				} ?>" width="200">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-4 control-label">Preview Image</label>
												<div class="col-sm-8">
													<input type="file" class="form-control" name="previewPhoto" id="previewPhoto" accept="image/*">
													<img src="../projectphotos/<?php if (!empty($results)) {
																					echo htmlentities($results->previewPhoto);
																				} ?>" width="200">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-4 control-label">Project Gallery</label>
												<div class="col-sm-8">
													<input type="file" class="form-control" name="projectGallery[]" id="projectGallery" accept="image/*" multiple>
													<?php if (!empty($galleryResults)) {
														foreach ($galleryResults as $photo) {
															echo '<img src="../projectphotos/' . htmlentities($photo->photo) . '" width="200">';
														}
													} ?>
												</div>
											</div>
									</div>
								</div>
								<div class="hr-dashed"></div>

								<div class="form-group">
									<div class="col-sm-8 col-sm-offset-4">
										<button class="btn btn-primary" <?php if (isset($projectID) && !empty($results)) {
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



			</div>
		</div>


	</div>
	<?php include('includes/copyright.html'); ?>
	</div>
	</div>
	<?php include('includes/foot-scripts.html'); ?>

	<script>
		function onShowProjectStatus() {
			var status = document.getElementById('projectStatus').value;
			// console.log(status);
			var dateCompletedGroup = document.getElementById('dateCompletedGroup');
			if (status === 'Completed') {
				dateCompletedGroup.style.display = 'block';
			} else {
				dateCompletedGroup.style.display = 'none';
			}
		}
	</script>
	</body>

	</html>
<?php } ?>