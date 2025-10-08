<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
	// Code for change password	
	if (isset($_POST['submit'])) {
		$address = $_POST['address'];
		$email = $_POST['email'];
		$contactno = $_POST['contactno'];
		$otherno = $_POST['otherno'];
		$sitetitle = $_POST['sitetitle'];
		$sitelogo = $_FILES['sitelogo']["name"];
		$adminlogo = $_FILES['adminlogo']["name"];
		$siteicon = $_FILES['siteicon']["name"];
		$sitelogosize = $_FILES['sitelogo']["size"];
		$adminlogosize = $_FILES['adminlogo']["size"];
		if ($sitelogosize > 100000 && $adminlogosize > 100000) {
			$error = "Image size should be less than 100kb";
		} else {
			$sql = "update tblsitesettings set Address=:address,EmailId=:email,ContactNo=:contactno, OtherNo=:otherno, sitetitle=:sitetitle, sitelogo=:sitelogo, siteicon=:siteicon, adminlogo=:adminlogo,dateUpdated=now()";
			// echo $sql; exit;
			$query = $dbh->prepare($sql);
			$query->bindParam(':address', $address, PDO::PARAM_STR);
			$query->bindParam(':email', $email, PDO::PARAM_STR);
			$query->bindParam(':contactno', $contactno, PDO::PARAM_STR);
			$query->bindParam(':otherno', $otherno, PDO::PARAM_STR);
			$query->bindParam(':sitetitle', $sitetitle, PDO::PARAM_STR);
			$query->bindParam(':sitelogo', $sitelogo, PDO::PARAM_STR);
			$query->bindParam(':siteicon', $siteicon, PDO::PARAM_STR);
			$query->bindParam(':adminlogo', $adminlogo, PDO::PARAM_STR);
			$query->execute();
			if ($query) {
				move_uploaded_file($_FILES["sitelogo"]["tmp_name"], "../sitelogo/" . $_FILES["sitelogo"]["name"]);
				move_uploaded_file($_FILES["siteicon"]["tmp_name"], "../sitelogo/" . $_FILES["siteicon"]["name"]);
				move_uploaded_file($_FILES["adminlogo"]["tmp_name"], "../sitelogo/" . $_FILES["adminlogo"]["name"]);
				$msg = "Settings Updated Successfully";
			} else {
				$error = "Something went wrong. Please try again";
			}
		}
	}
?>

	<!doctype html>
	<html lang="en" class="no-js">


	<?php

	include 'includes/topassets.php';
	include('includes/header.php'); ?>
	<title><?php echo $results['sitetitle'] ?> | Update Site Info</title>
	<div class="ts-main-content">
		<?php include('includes/leftbar.php'); ?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Update Site Info</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Site Settings</div>
									<div class="panel-body">
										<form method="post" name="chngpwd" class="form-horizontal" onSubmit="return valid();"
											enctype="multipart/form-data">


											<?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
											<?php $sql = "SELECT * from  tblsitesettings ";
											$query = $dbh->prepare($sql);
											$query->execute();
											$results = $query->fetchAll(PDO::FETCH_OBJ);
											$cnt = 1;
											if ($query->rowCount() > 0) {
												foreach ($results as $result) {				?>

													<div class="form-group">
														<label class="col-sm-4 control-label"> Site Title</label>
														<div class="col-sm-8">
															<textarea class="form-control" name="sitetitle" id="sitetitle" required><?php echo htmlentities($result->sitetitle); ?></textarea>
														</div>
													</div>

													<div class="form-group">
														<label class="col-sm-4 control-label"> Address</label>
														<div class="col-sm-8">
															<textarea class="form-control" name="address" id="address" required><?php echo htmlentities($result->Address); ?></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label"> Email id</label>
														<div class="col-sm-8">
															<input type="email" class="form-control" name="email" id="email" value="<?php echo htmlentities($result->EmailId); ?>" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label"> Contact Number </label>
														<div class="col-sm-8">
															<input type="text" class="form-control" value="<?php echo htmlentities($result->ContactNo); ?>" name="contactno" id="contactno" required>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label"> Other Number </label>
														<div class="col-sm-8">
															<input type="text" class="form-control" value="<?php echo htmlentities($result->OtherNo); ?>" name="otherno" id="otherno">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label">Site Logo </label>
														<div class="col-sm-8">
															<input type="file" class="form-control" name="sitelogo" id="sitelogo">
															<span style="color:red">Max 100kb</span>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label">Site Icon </label>
														<div class="col-sm-8">
															<input type="file" class="form-control" name="siteicon" id="siteicon">

														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 control-label">Admin Logo </label>
														<div class="col-sm-8">
															<input type="file" class="form-control" name="adminlogo" id="adminlogo">
															<span style="color:red">Max 100kb</span>
														</div>
													</div>
											<?php }
											} ?>
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
		<<?php include('includes/copyright.html'); ?>
		</div>
	</div>
	<?php include('includes/foot-scripts.html'); ?>
	</body>

	</html>
<?php } ?>