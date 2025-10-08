<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
	if (isset($_GET['id']) && !empty($_GET['id'])) {
		$slideID = intval($_GET['id']);
		} 
	// Code for change password	
	if (isset($_POST['submit'])) {
		$slideBigCaption = $_POST['slideBigCaption'];
		$slideTitle = $_POST['slideTitle'];
		$slideImage = $_FILES['slideImage']["name"];
		$slideImagesize = $_FILES['slideImage']["size"];
		if ($sitelogosize > 1000000 && $slideImagesize > 1000000) {
			$error = "Image size should be less than 100kb";
		} else {
			$sql = "SELECT * from  tblslider WHERE slideTitle=:slideTitle AND slideBigCaption=:slideBigCaption";
			$query = $dbh->prepare($sql);
			$query->bindParam(':slideTitle', $slideTitle, PDO::PARAM_STR);
			$query->bindParam(':slideBigCaption', $slideBigCaption, PDO::PARAM_STR);
			$query->execute();
			if ($query->rowCount() > 0) {
				$error = "Slide already added. You can update it.";
			} else {
				switch ($_FILES['slideImage']['error']) {
					case UPLOAD_ERR_OK:
						$imgfile = $_FILES["slideImage"]["name"];
						$extension = strtolower(pathinfo($imgfile, PATHINFO_EXTENSION));
						$allowed_extensions = array("jpg", "jpeg", "png", "gif");
						if (!in_array($extension, $allowed_extensions)) {
							$error = "Invalid file format. Only JPG, JPEG, PNG & GIF are allowed.";
						} else {
							$newfilename = uniqid("slide_") . '.' . $extension;
							$upload_path = "../slidephotos/" . $newfilename;
							if (move_uploaded_file($_FILES["slideImage"]["tmp_name"], $upload_path)) {
								$sql = "INSERT INTO tblslider (slideBigCaption, slideTitle, slideImage, dateUpdated) VALUES (:slideBigCaption, :slideTitle, :slideImage, NOW())";
								$query = $dbh->prepare($sql);
								$query->bindParam(':slideBigCaption', $slideBigCaption, PDO::PARAM_STR);
								$query->bindParam(':slideTitle', $slideTitle, PDO::PARAM_STR);
								$query->bindParam(':slideImage', $newfilename, PDO::PARAM_STR);
								if ($query->execute()) {
									$msg = "Slide added successfully";
								} else {
									$error = "Failed to add slide. Please try again.";
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
		// $sql = "update tblslider set slideBigCaption=:slideBigCaption,slideTitle=:slideTitle, slideImage=:slideImage,dateUpdated=now()";

	}
?>

	<!doctype html>
	<html lang="en" class="no-js">


	<?php

	include 'includes/topassets.php';
	include('includes/header.php'); ?>
	<title><?php echo $results['sitetitle'] ?> | Update Slide</title>
	<div class="ts-main-content">
		<?php include('includes/leftbar.php'); ?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Update Slide</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Update Slider</div>
									<div class="panel-body">
										<form method="post" name="slider" class="form-horizontal" onSubmit="return valid();"
											enctype="multipart/form-data">


											<?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
											<?php 
											$sql = "SELECT * from  tblslider WHERE slideID=:slideID";
											$query = $dbh->prepare($sql);
											$query->bindParam(':slideID', $slideID, PDO::PARAM_STR);
											$query->execute();
											$results = $query->fetch(PDO::FETCH_OBJ);
											$cnt = 1;
											?>

											<div class="form-group">
												<label class="col-sm-4 control-label"> Slide Title</label>
												<div class="col-sm-8">
													<input class="form-control" value="<?php if(!empty($results)){ echo htmlentities($results->slideTitle); } ?>" name="slideTitle" id="slideTitle" required>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-4 control-label"> Caption</label>
												<div class="col-sm-8">
													<input class="form-control" value="<?php if(!empty($results)){ echo htmlentities($results->slideBigCaption); }?>" name="slideBigCaption" id="slideBigCaption" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label">Slide Image </label>
												<div class="col-sm-8">
													<input type="file" class="form-control" name="slideImage" id="slideImage">
													<img src="../slidephotos/<?php if(!empty($results)){ echo htmlentities($results->slideImage); }?>" width="200">
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



					</div>
				</div>


			</div>
		<?php include('includes/copyright.html'); ?>
		</div>
	</div>
	<?php include('includes/foot-scripts.html'); ?>

	</body>

	</html>
<?php } ?>