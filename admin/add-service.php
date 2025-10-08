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
	$sql = "SELECT * from  tblservices WHERE serviceName=:serviceName";
	$query = $dbh->prepare($sql);
	$query->bindParam(':serviceName', $serviceName, PDO::PARAM_STR);
	$query->execute();
	if (isset($_POST['submit'])) {
		if ($query->rowCount() > 0) {
			$error = "Service already added. You can update it.";
		} else {
			$sql = "INSERT INTO tblservices (serviceName, dateUpdated) VALUES (:serviceName, NOW())";
			$query = $dbh->prepare($sql);
			$query->bindParam(':serviceName', $serviceName, PDO::PARAM_STR);
			if ($query->execute()) {
				$msg = "Service added successfully";
			} else {
				$error = "Failed to add service. Please try again.";
			}
		}

	}
	// Code for Updte Service
						
	if (isset($_POST['update'])) {
		if ($query->rowCount() > 0) {
			$error = "No changes made, name is the same.";
		} else {
			// echo $serviceName; exit;
			$sql = "UPDATE tblservices SET serviceName=:serviceName,dateUpdated=NOW() WHERE serviceID=:serviceID";
			$query = $dbh->prepare($sql);
			$query->bindParam(':serviceName', $serviceName, PDO::PARAM_STR);
			$query->bindParam(':serviceID', $serviceID, PDO::PARAM_STR);
			$query->execute();
			if ($query) {
				$msg = "Service Updated successfully";
			} else {
				$error = "Failed to add service. Please try again.";
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

											<div class="hr-dashed"></div>




											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-4">

													<button class="btn btn-primary" <?php if (!empty($results)) {?>name="update"<?php }else{?>name="submit"<?php }?> type="submit">Submit</button>
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