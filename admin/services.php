<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
	if (isset($_GET['del'])) {
		$id = $_GET['del'];

		//Delete already existing image
		$sql = "SELECT * FROM tblservices WHERE serviceID=:id";
		$query = $dbh->prepare($sql);
		$query->bindParam(':id', $id, PDO::PARAM_STR);
		$query->execute();
		$service = $query->fetch(PDO::FETCH_OBJ);
		if ($service) {
			unlink("../servicephotos/" . $service->servicePhoto);
		}

		//Delete from database
		$sql = "delete from tblservices  WHERE serviceID=:id";
		$query = $dbh->prepare($sql);
		$query->bindParam(':id', $id, PDO::PARAM_STR);
		$query->execute();
		$msg = "Page data updated  successfully";
		// redirect to avoid resubmission
		header("Location: services.php");
		exit;
	}



?>

	<!doctype html>
	<html lang="en" class="no-js">
	<?php
	// echo $results['sitetitle']; exit;
	include 'includes/topassets.php';
	include('includes/header.php'); ?>
	<title><?php echo $results['sitetitle'] ?> | Manage Services</title>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php'); ?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 style="margin-top: 30px !important;" class="page-title">Manage Services</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Services <a href="add-service"><i style="margin-left: 30px;" class="fa fa-plus"></i></a></div>
							<div class="panel-body">

								<?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Service Title</th>
											<th>Service Photo</th>
											<!-- <th>Service Title</th> -->
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>#</th>
											<!-- <th>Service Title</th> -->
											<th>Service Title</th>
											<th>Service Photo</th>
											<th>Action</th>
										</tr>
										</tr>
									</tfoot>
									<tbody>

										<?php $sql = "SELECT * from  tblservices";
										// echo $sql; exit;
										$query = $dbh->prepare($sql);
										$query->execute();
										$results = $query->fetchAll(PDO::FETCH_OBJ);
										$cnt = 1;
										if ($query->rowCount() > 0) {
											foreach ($results as $result) {				?>
												<tr>
													<td><?php echo htmlentities($cnt); ?></td>
													<td><?php echo htmlentities($result->serviceName); ?></td>
													<td><a href="../servicephotos/<?php echo htmlentities($result->servicePhoto); ?>"><img src="../servicephotos/<?php echo htmlentities($result->servicePhoto); ?>" width="100" height="100"></a></td>
													<td><a href="add-service?id=<?php echo $result->serviceID; ?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
														<a href="services?del=<?php echo $result->serviceID; ?>" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i></a>
													</td>
												</tr>
										<?php $cnt = $cnt + 1;
											}
										} ?>

									</tbody>
								</table>



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
</body>

	</html>
<?php } ?>