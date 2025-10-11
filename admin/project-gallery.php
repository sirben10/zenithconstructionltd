<?php
session_start();
error_reporting(0);
include_once('includes/functions.php');
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "SELECT * FROM tblprojectgallery WHERE pgid=:id";
$query = $dbh->prepare($sql);
$query->bindParam(':id', $id, PDO::PARAM_STR);
$query->execute();
$result = $query->fetch(PDO::FETCH_OBJ);
if ($result) {
	$image = $result->photo;

	// Delete image file
	if ($image) {
		$imagePath = "../projectphotos/" . $image;
		if (file_exists($imagePath)) {
			unlink($imagePath);
		}
	}
}
$sql = "delete from tblprojectgallery  WHERE pgid=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
$msg="Photo deleted  successfully";

}



 ?>

<!doctype html>
<html lang="en" class="no-js">
	<?php
	// echo $results['sitetitle']; exit;
	include 'includes/topassets.php';
	include('includes/header.php'); ?>
	<title><?php echo $results['sitetitle'] ?> | Project Gallery</title>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 style="margin-top: 30px !important;" class="page-title"></h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Project Gallery  <a href="add-partner"><i style="margin-left: 30px;" class="fa fa-plus"></i></a></div>
							<div class="panel-body">

							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
												<th>Photo</th>
										
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>#</th>
											<th>Photo</th>

											<th>Action</th>
										</tr>
										</tr>
									</tfoot>
									<tbody>

									<?php
$results = fetchAllProjectGallery($dbh);
$cnt=1;
foreach($results as $result)
{				?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><a href="../projectphotos/<?php echo htmlentities($result['photo']);?>"><img src="../projectphotos/<?php echo htmlentities($result['photo']);?>" width="100" height="100"></a></td>
<td><a href="project-gallery?del=<?php echo $result['pgid'];?>" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i></a></td>
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
									</tbody>
								</table>

						

							</div>
						</div>

					

					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php } ?>
