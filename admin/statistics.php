<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
	// Code for change password	
	if (isset($_POST['submit'])) {
		$workers = $_POST['workers'];
		$projectsCompleted = $_POST['projectsCompleted'];
		$satisfiedClients = $_POST['satisfiedClients'];
		$experienceYears = $_POST['experienceYears'];

		// Select All Records
		// if empty insert else update
		$select = "SELECT * FROM tblstatistic";
		$query = $dbh->prepare($select);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		// If no record exists, insert a new one
		if (!$result || empty($result)) {
			$sql = "INSERT INTO tblstatistic (experienceYears, workers, projectsCompleted, satisfiedClients, dateUpdated) VALUES (:experienceYears, :workers, :projectsCompleted, :satisfiedClients, now())";
		} else {
			$sql = "update  tblstatistic set experienceYears=:experienceYears, workers=:workers,projectsCompleted=:projectsCompleted,satisfiedClients=:satisfiedClients, dateUpdated=now()";
		}
		// echo $sql; exit;
		$query = $dbh->prepare($sql);
		$query->bindParam(':experienceYears', $experienceYears, PDO::PARAM_STR);
		$query->bindParam(':workers', $workers, PDO::PARAM_STR);
		$query->bindParam(':projectsCompleted', $projectsCompleted, PDO::PARAM_STR);
		$query->bindParam(':satisfiedClients', $satisfiedClients, PDO::PARAM_STR);
		$query->execute();
		if ($query) {
			$msg = "Statistics Updated Successfully";
		} else {
			$error = "Something went wrong. Please try again";
		}
	}

?>

	<!doctype html>
	<html lang="en" class="no-js">


	<?php

	include 'includes/topassets.php';
	include('includes/header.php'); ?>
	<title><?php echo $results['sitetitle'] ?> | Update Statistics</title>
	<div class="ts-main-content">
		<?php include('includes/leftbar.php'); ?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Update Statistics</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
									<div class="panel-heading">Company Statistics</div>
									<div class="panel-body">
										<form method="post" name="chngpwd" class="form-horizontal" onSubmit="return valid();"
											enctype="multipart/form-data">


											<?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
											<?php $sql = "SELECT * from   tblstatistic";
											$query = $dbh->prepare($sql);
											$query->execute();
											$result = $query->fetch(PDO::FETCH_OBJ); ?>


											<div class="form-group">
												<label class="col-sm-4 control-label"> Years of Experience</label>
												<div class="col-sm-8">
													<input type="number" class="form-control" name="experienceYears" id="experienceYears" placeholder="Numbers Only" required value="<?php echo htmlentities($result->experienceYears); ?>">
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-4 control-label"> Workers Employed</label>
												<div class="col-sm-8">
													<input type="number" class="form-control" name="workers" id="workers" placeholder="Numbers Only" required value="<?php echo htmlentities($result->workers); ?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label"> Projects Completed</label>
												<div class="col-sm-8">
													<input type="number" class="form-control" name="projectsCompleted" id="projectsCompleted" value="<?php echo htmlentities($result->projectsCompleted); ?>" placeholder="Numbers Only" required>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 control-label"> Satisfied Clients </label>
												<div class="col-sm-8">
													<input type="number" class="form-control" value="<?php echo htmlentities($result->satisfiedClients); ?>" name="satisfiedClients" id="satisfiedClients" placeholder="Numbers Only" required>
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
			<?php include('includes/copyright.html'); ?>
		</div>
	</div>
	<?php include('includes/foot-scripts.html'); ?>
	</body>

	</html>
<?php } ?>