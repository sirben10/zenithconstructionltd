<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
?>
	<!doctype html>
	<html lang="en" class="no-js">
	<?php

	include 'includes/topassets.php';
	include('includes/header.php'); ?>
	<title>Admin Dashboard | <?php echo $results['sitetitle'] ?> </title>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php'); ?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Dashboard</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
													<?php
													$sql = "SELECT * from tblslider ";
													$query = $dbh->prepare($sql);
													$query->execute();
													$results = $query->fetchAll(PDO::FETCH_OBJ);
													$slides = $query->rowCount();
													?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($slides); ?></div>
													<div class="stat-panel-title text-uppercase">Sliders</div>
												</div>
											</div>
											<a href="sliders" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
													<?php
													$sql1 = "SELECT * from tblservices ";
													$query1 = $dbh->prepare($sql1);	
													$query1->execute();
													$results1 = $query1->fetchAll(PDO::FETCH_OBJ);
													$totalservices = $query1->rowCount();
													?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($totalservices); ?></div>
													<div class="stat-panel-title text-uppercase">Services</div>
												</div>
											</div>
											<a href="services" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
													<?php
													$sql2 = "SELECT * from tblprojects ";
													$query2 = $dbh->prepare($sql2);
													$query2->execute();
													$results2 = $query2->fetchAll(PDO::FETCH_OBJ);
													$projects = $query2->rowCount();
													?>

													<div class="stat-panel-number h1 "><?php echo htmlentities($projects); ?></div>
													<div class="stat-panel-title text-uppercase">Projects</div>
												</div>
											</div>
											<a href="projects" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
													<?php
													$sql3 = "SELECT * from tblpartners ";
													$query3 = $dbh->prepare($sql3);
													$query3->execute();
													$results3 = $query3->fetchAll(PDO::FETCH_OBJ);
													$clients = $query3->rowCount();
													?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($clients); ?></div>
													<div class="stat-panel-title text-uppercase">Clients</div>
												</div>
											</div>
											<a href="partners" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



				<div class="row">
					<div class="col-md-12">


						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-default text-light">
												<div class="stat-panel text-center">
													<?php
													$sql4 = "SELECT id from tblsubscribers ";
													$query4 = $dbh->prepare($sql4);
													$query4->execute();
													$results4 = $query4->fetchAll(PDO::FETCH_OBJ);
													$subscribers = $query4->rowCount();
													?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($subscribers); ?></div>
													<div class="stat-panel-title text-uppercase">Subscribers</div>
												</div>
											</div>
											<a href="manage-subscribers.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-dark text-light">
												<div class="stat-panel text-center">
													<?php
													$sql6 = "SELECT id from tblcontactusquery ";
													$query6 = $dbh->prepare($sql6);;
													$query6->execute();
													$results6 = $query6->fetchAll(PDO::FETCH_OBJ);
													$query = $query6->rowCount();
													?>
													<div class="stat-panel-number h1 "><?php echo htmlentities($query); ?></div>
													<div class="stat-panel-title text-uppercase">Queries</div>
												</div>
											</div>
											<a href="manage-conactusquery.php" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-blue text-light">
												<div class="stat-panel text-center">
													<?php
													$sql5 = "SELECT * from tbltestimonials";
													$query5 = $dbh->prepare($sql5);
													$query5->execute();
													$results5 = $query5->fetchAll(PDO::FETCH_OBJ);
													$testimonials = $query5->rowCount();
													?>

													<div class="stat-panel-number h1 "><?php echo htmlentities($testimonials); ?></div>
													<div class="stat-panel-title text-uppercase">Testimonials</div>
												</div>
											</div>
											<a href="testimonials" class="block-anchor panel-footer text-center">Full Detail &nbsp; <i class="fa fa-arrow-right"></i></a>
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
	</div>

<?php include('includes/footscripts.php'); ?>
	<script>
		window.onload = function() {

			// Line chart from swirlData for dashReport
			var ctx = document.getElementById("dashReport").getContext("2d");
			window.myLine = new Chart(ctx).Line(swirlData, {
				responsive: true,
				scaleShowVerticalLines: false,
				scaleBeginAtZero: true,
				multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
			});

			// Pie Chart from doughutData
			var doctx = document.getElementById("chart-area3").getContext("2d");
			window.myDoughnut = new Chart(doctx).Pie(doughnutData, {
				responsive: true
			});

			// Dougnut Chart from doughnutData
			var doctx = document.getElementById("chart-area4").getContext("2d");
			window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {
				responsive: true
			});

		}
	</script>
	</body>

	</html>
<?php } ?>