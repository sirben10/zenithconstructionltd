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
$projectTitle = preg_replace('/\s+/', ' ', $projectTitle);
$projectTT = str_replace([',','"', ':',';'], '', $projectTitle);
$projectSlug = strtolower(str_replace([' ', ','], '-', $projectTT));
$titleForImage = preg_replace('/\s+/', '_', $projectTitle);
$previewPhoto = $_FILES['previewPhoto']["name"] ?? '';
$previewPhotosize = $_FILES['previewPhoto']["size"] ?? 0;
$projectLocation = strtolower(strip_tags($_POST['projectLocation']));
$dateAwarded = strip_tags($_POST['dateAwarded']);
$dateCompleted = strip_tags($_POST['dateCompleted']);
$partnerID = strip_tags($_POST['partnerID']);
$ProjectManager = strip_tags($_POST['ProjectManager']);
$projectStatus = $_POST['projectStatus'];

$projectReport = $_FILES['projectReport']["name"] ?? '';
$projectReportsize = $_FILES['projectReport']["size"] ?? 0;
$projectGallery = $_FILES['projectGallery']["name"] ?? [];
$projectGallerysize = $_FILES['projectGallery']["size"] ?? [];

// ✅ Resize image while preserving aspect ratio
function resizeImage($sourcePath, $targetPath, $maxWidth, $maxHeight, $extension) {
    list($origWidth, $origHeight) = getimagesize($sourcePath);

    // Maintain aspect ratio
    $ratio = min($maxWidth / $origWidth, $maxHeight / $origHeight);
    $newWidth = (int)($origWidth * $ratio);
    $newHeight = (int)($origHeight * $ratio);

    $image_p = imagecreatetruecolor($newWidth, $newHeight);

    switch ($extension) {
        case 'jpg':
        case 'jpeg':
            $image = imagecreatefromjpeg($sourcePath);
            break;
        case 'png':
            $image = imagecreatefrompng($sourcePath);
            imagealphablending($image_p, false);
            imagesavealpha($image_p, true);
            break;
        case 'gif':
            $image = imagecreatefromgif($sourcePath);
            break;
        default:
            return false;
    }

    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $newWidth, $newHeight, $origWidth, $origHeight);

    switch ($extension) {
        case 'jpg':
        case 'jpeg':
            imagejpeg($image_p, $targetPath, 90);
            break;
        case 'png':
            imagepng($image_p, $targetPath);
            break;
        case 'gif':
            imagegif($image_p, $targetPath);
            break;
    }

    imagedestroy($image_p);
    imagedestroy($image);
    return true;
}

// Allowed formats
$allowed_extensions = ["jpg", "jpeg", "png", "gif"];

// === ADD NEW PROJECT ===
if (isset($_POST['submit'])) {
    if ($previewPhotosize > 1000000) {
        $error = "Image size should be less than 1MB";
    } else {
        $sql = "SELECT * FROM tblprojects WHERE projectTitle=:projectTitle AND projectLocation=:projectLocation";
        $query = $dbh->prepare($sql);
        $query->bindParam(':projectTitle', $projectTitle, PDO::PARAM_STR);
        $query->bindParam(':projectLocation', $projectLocation, PDO::PARAM_STR);
        $query->execute();

        if ($query->rowCount() > 0) {
            $error = "Project already exists. Try updating instead.";
        } else {
            if ($_FILES['previewPhoto']['error'] === UPLOAD_ERR_OK) {
                $extension = strtolower(pathinfo($_FILES["previewPhoto"]["name"], PATHINFO_EXTENSION));

                if (!in_array($extension, $allowed_extensions)) {
                    $error = "Invalid image format. Only JPG, JPEG, PNG, GIF allowed.";
                } else {
                    $newfilename = uniqid("preview_" . $titleForImage) . '.' . $extension;
                    $upload_path = "../projectphotos/" . $newfilename;

                    if (resizeImage($_FILES["previewPhoto"]["tmp_name"], $upload_path, 800, 450, $extension)) {

                        // Upload project report
                        $newreportfilename = "";
                        if (!empty($_FILES['projectReport']['name']) && $_FILES['projectReport']['error'] === UPLOAD_ERR_OK) {
                            $reportExtension = strtolower(pathinfo($_FILES["projectReport"]["name"], PATHINFO_EXTENSION));
                            if ($reportExtension === "pdf") {
                                $newreportfilename = uniqid("report_" . $titleForImage) . '.' . $reportExtension;
                                $report_upload_path = "../projectreports/" . $newreportfilename;
                                move_uploaded_file($_FILES["projectReport"]["tmp_name"], $report_upload_path);
                            }
                        }

                        // Insert into tblprojects
                        $sql = "INSERT INTO tblprojects 
                            (projectTitle, projectSlug, previewPhoto, projectLocation, dateAwarded, dateCompleted, client, ProjectManager, projectStatus, projectReport, dateUpdated) 
                            VALUES 
                            (:projectTitle, :projectSlug, :previewPhoto, :projectLocation, :dateAwarded, :dateCompleted, :partnerID, :ProjectManager, :projectStatus, :projectReport, NOW())";
                        $query = $dbh->prepare($sql);
                        $query->bindParam(':projectTitle', $projectTitle);
                        $query->bindParam(':projectSlug', $projectSlug);
                        $query->bindParam(':previewPhoto', $newfilename);
                        $query->bindParam(':projectLocation', $projectLocation);
                        $query->bindParam(':dateAwarded', $dateAwarded);
                        $query->bindParam(':dateCompleted', $dateCompleted);
                        $query->bindParam(':partnerID', $partnerID);
                        $query->bindParam(':ProjectManager', $ProjectManager);
                        $query->bindParam(':projectStatus', $projectStatus);
                        $query->bindParam(':projectReport', $newreportfilename);
                        $query->execute();

                        $projectID = $dbh->lastInsertId();

                        // Upload gallery images
                        if (!empty($_FILES['projectGallery']['name'][0])) {
                            foreach ($_FILES['projectGallery']['name'] as $index => $galleryImage) {
                                if ($_FILES['projectGallery']['error'][$index] === UPLOAD_ERR_OK) {
                                    $galleryExtension = strtolower(pathinfo($galleryImage, PATHINFO_EXTENSION));
                                    if (in_array($galleryExtension, $allowed_extensions)) {
                                        $newgalleryfilename = uniqid("gallery_" . $titleForImage) . '.' . $galleryExtension;
                                        $gallery_upload_path = "../projectphotos/" . $newgalleryfilename;
                                        $tmp_gallery_path = $_FILES['projectGallery']['tmp_name'][$index];

                                        if (resizeImage($tmp_gallery_path, $gallery_upload_path, 800, 450, $galleryExtension)) {
                                            $stmt = $dbh->prepare("INSERT INTO tblprojectgallery (projectID, photo) VALUES (:projectID, :photo)");
                                            $stmt->bindParam(':projectID', $projectID);
                                            $stmt->bindParam(':photo', $newgalleryfilename);
                                            $stmt->execute();
                                        }
                                    }
                                }
                            }
                        }

                        // Insert services
                        if (!empty($_POST['serviceID'])) {
                            foreach ($_POST['serviceID'] as $serviceID) {
                                $insertQuery = $dbh->prepare("INSERT INTO tblprojectservices (projectID, serviceID) VALUES (:projectID, :serviceID)");
                                $insertQuery->bindParam(':projectID', $projectID);
                                $insertQuery->bindParam(':serviceID', $serviceID);
                                $insertQuery->execute();
                            }
                        }

                        $msg = "Project added successfully.";
                    } else {
                        $error = "Failed to resize preview image.";
                    }
                }
            } else {
                $error = "Preview image is required.";
            }
        }
    }
}

// === UPDATE EXISTING PROJECT ===
if (isset($_POST['update'])) {
    $projectID = intval($_POST['projectID']);

    // Optional: handle new preview image
    $previewFilename = $_POST['existingPreviewPhoto'] ?? '';

    if (!empty($_FILES['previewPhoto']['name'])) {
        $extension = strtolower(pathinfo($_FILES["previewPhoto"]["name"], PATHINFO_EXTENSION));
        if (in_array($extension, $allowed_extensions)) {
            $newfilename = uniqid("preview_" . $titleForImage) . '.' . $extension;
            $upload_path = "../projectphotos/" . $newfilename;
            if (resizeImage($_FILES["previewPhoto"]["tmp_name"], $upload_path, 800, 450, $extension)) {
                $previewFilename = $newfilename;
            }
        }
    }

    $newreportfilename = $_POST['existingReport'] ?? '';
    if (!empty($_FILES['projectReport']['name']) && $_FILES['projectReport']['error'] === UPLOAD_ERR_OK) {
        $reportExtension = strtolower(pathinfo($_FILES["projectReport"]["name"], PATHINFO_EXTENSION));
        if ($reportExtension === "pdf") {
            $newreportfilename = uniqid("report_" . $titleForImage) . '.' . $reportExtension;
            $report_upload_path = "../projectreports/" . $newreportfilename;
            move_uploaded_file($_FILES["projectReport"]["tmp_name"], $report_upload_path);
        }
    }

    $sql = "UPDATE tblprojects 
            SET projectTitle=:projectTitle, projectSlug=:projectSlug, previewPhoto=:previewPhoto, projectLocation=:projectLocation, 
                dateAwarded=:dateAwarded, dateCompleted=:dateCompleted, client=:partnerID, ProjectManager=:ProjectManager, 
                projectStatus=:projectStatus, projectReport=:projectReport, dateUpdated=NOW() 
            WHERE id=:projectID";
    $query = $dbh->prepare($sql);
    $query->bindParam(':projectTitle', $projectTitle);
    $query->bindParam(':projectSlug', $projectSlug);
    $query->bindParam(':previewPhoto', $previewFilename);
    $query->bindParam(':projectLocation', $projectLocation);
    $query->bindParam(':dateAwarded', $dateAwarded);
    $query->bindParam(':dateCompleted', $dateCompleted);
    $query->bindParam(':partnerID', $partnerID);
    $query->bindParam(':ProjectManager', $ProjectManager);
    $query->bindParam(':projectStatus', $projectStatus);
    $query->bindParam(':projectReport', $newreportfilename);
    $query->bindParam(':projectID', $projectID);
    $query->execute();

    // Add new gallery images (optional)
    if (!empty($_FILES['projectGallery']['name'][0])) {
        foreach ($_FILES['projectGallery']['name'] as $index => $galleryImage) {
            if ($_FILES['projectGallery']['error'][$index] === UPLOAD_ERR_OK) {
                $galleryExtension = strtolower(pathinfo($galleryImage, PATHINFO_EXTENSION));
                if (in_array($galleryExtension, $allowed_extensions)) {
                    $newgalleryfilename = uniqid("gallery_" . $titleForImage) . '.' . $galleryExtension;
                    $gallery_upload_path = "../projectphotos/" . $newgalleryfilename;
                    $tmp_gallery_path = $_FILES['projectGallery']['tmp_name'][$index];

                    if (resizeImage($tmp_gallery_path, $gallery_upload_path, 800, 450, $galleryExtension)) {
                        $stmt = $dbh->prepare("INSERT INTO tblprojectgallery (projectID, photo) VALUES (:projectID, :photo)");
                        $stmt->bindParam(':projectID', $projectID);
                        $stmt->bindParam(':photo', $newgalleryfilename);
                        $stmt->execute();
                    }
                }
            }
        }
    }

	 // --- Update Services ---
    if (!empty($_POST['serviceID'])) {
        // Remove old ones if updating
        if ($isUpdate) {
            $dbh->prepare("DELETE FROM tblprojectservices WHERE projectID = :projectID")
                ->execute([':projectID' => $projectID]);
        }
        foreach ($_POST['serviceID'] as $serviceID) {
            $insertQuery = $dbh->prepare("INSERT INTO tblprojectservices (projectID, serviceID) VALUES (:projectID, :serviceID)");
            $insertQuery->bindParam(':projectID', $projectID);
            $insertQuery->bindParam(':serviceID', $serviceID);
            $insertQuery->execute();
        }
    }


    $msg = "Project updated successfully.";
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


											<div class="form-group">
												<label class="col-sm-4 control-label">Service <em style="color:red"> *</em></label>
												<div class="col-sm-8">
													<div class="form-group">
														<?php
														$services = fetchAllServices($dbh);
														// var_dump($services); exit;
														foreach ($services as $service) { ?>
															<div class="col-sm-4">
																<div class="checkbox checkbox-inline">
																	<input type="checkbox" id="<?php echo $service['serviceID'] ?>" name="serviceID[]" value="<?php echo $service['serviceID'] ?>">
																	<label for="<?php echo $service['serviceID'] ?>"> <?php echo $service['serviceName'] ?> </label>
																</div>
															</div>
														<?php } ?>
													</div>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-4 control-label">Project Title <em style="color:red"> *</em></label>
												<div class="col-sm-8">
													<input class="form-control" name="projectTitle" id="projectTitle" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-4 control-label">Project Location <em style="color:red"> *</em></label>
												<div class="col-sm-8">
													<input class="form-control" name="projectLocation" id="projectLocation" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-4 control-label">Client <em style="color:red"> *</em></label>
												<div class="col-sm-8">
													<select class="form-control" name="partnerID" id="partnerID" required>
														<option value="">Select Partner</option>
														<?php
														$partners = fetchAllPartners($dbh);
														// var_dump($partners); exit;
														foreach ($partners as $partner) {

															echo "<option value='" . htmlentities($partner['partnerID']) . "'>" . htmlentities($partner['companyName']) . "</option>";
														}
														?>
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-4 control-label">Project Manager </label>
												<div class="col-sm-8">
													<input class="form-control" name="ProjectManager" id="ProjectManager" required>
												</div>
											</div>




											<div class="form-group">
												<label class="col-sm-4 control-label">Date Awarded <em style="color:red"> *</em></label>
												<div class="col-sm-8">
													<input type="date" class="form-control" name="dateAwarded" id="dateAwarded" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-4 control-label">Project Status</label>
												<div class="col-sm-8">
													<select class="form-control" name="projectStatus" id="projectStatus" onClick="onShowProjectStatus(this.value)" required>
														<option value="">Select Status</option>
														<option value="Ongoing">Ongoing</option>
														<option value="Completed">Completed</option>
														<option value="Pending">Pending</option>
													</select>
												</div>
											</div>

											<div class="form-group" style="display: none;" id="dateCompletedGroup">
												<label class="col-sm-4 control-label">Date Completed</label>
												<div class="col-sm-8">
													<input type="date" class="form-control" name="dateCompleted" id="dateCompleted">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-4 control-label">Project Report Document</label>
												<div class="col-sm-8">
													<input type="file" class="form-control" name="projectReport" id="projectReport" accept="application/pdf">

												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-4 control-label">Preview Image</label>
												<div class="col-sm-8">
													<input type="file" class="form-control" name="previewPhoto" id="previewPhoto" accept="image/*">

												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-4 control-label">Project Gallery</label>
												<div class="col-sm-8">
													<input type="file" class="form-control" name="projectGallery[]" id="projectGallery" accept="image/*" multiple>

												</div>
											</div>
									</div>
								</div>
								<div class="hr-dashed"></div>

								<div class="form-group">
									<div class="col-sm-8 col-sm-offset-4">
										<button class="btn btn-primary" name="submit" type="submit">Submit</button>
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