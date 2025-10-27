<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_GET['del']))
{
$id=$_GET['del'];
// Select alredy existining image and delete
$sql = "SELECT * FROM tblprojects WHERE projectID=:id";
$query = $dbh->prepare($sql);
$query->bindParam(':id', $id, PDO::PARAM_STR);
$query->execute();
$result = $query->fetch(PDO::FETCH_OBJ);
if ($result) {
    $previewPhoto = $result->previewPhoto;
    $projectReport = $result->projectReport;

    // Delete project files
    if ($previewPhoto) {
        $previewPhotoPath = "../projectphotos/" . $previewPhoto;
        if (file_exists($previewPhotoPath)) {
            unlink($previewPhotoPath);
        }
    }
    if ($projectReport) {
        $projectReportPath = "../projectreports/" . $projectReport;
        if (file_exists($projectReportPath)) {
            unlink($projectReportPath);
        }
    }
}
// Delete Project Gallery images
$sql = "SELECT * FROM tblprojectgallery WHERE projectID=:id";
$query = $dbh->prepare($sql);
$query->bindParam(':id', $id, PDO::PARAM_STR);
$query->execute();
$galleryImages = $query->fetchAll(PDO::FETCH_OBJ);
foreach ($galleryImages as $image) {
    $imagePath = "../projectphotos/" . $image->photo;
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }
}

// Delete record from database
$sql = "delete from tblprojects  WHERE projectID=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
$msg="Page data updated  successfully";

}



 ?>

<!doctype html>
<html lang="en" class="no-js">
	<?php
	// echo $results['sitetitle']; exit;
	include 'includes/topassets.php';
	include('includes/header.php'); ?>
	<title><?php echo $results['sitetitle'] ?> | Manage Projects</title>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 style="margin-top: 30px !important;" class="page-title">Manage Projects</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-heading">Projects  <a href="add-project"><i style="margin-left: 30px;" class="fa fa-plus"></i></a></div>
							<div class="panel-body">

							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
												<th>Project Title</th>
												<th>Preview Photo </th>
											<th>Project Location</th>
											<th>Date Awarded</th>
											<th>Client</th>
											<th>Project Manager</th>
											<th>Project Status</th>
										
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>#</th>
												<th>Project Title</th>
											<th>Preview Photo </th>
											<th>Project Location</th>
											<th>Date Awarded</th>
											<th>Client</th>
											<th>Project Manager</th>
											<th>Project Status</th>
										
											<th>Action</th>
										</tr>
										</tr>
									</tfoot>
									<tbody>

									<?php $sql = "SELECT * from  tblprojects p join tblpartners c on p.client=c.partnerID";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->projectTitle);?></td>
											<td><img src="/projectphotos/<?php echo htmlentities($result->previewPhoto);?>" width="60" height="60" style="border:solid 1px #000"></td>
											<td><?php echo htmlentities($result->projectLocation);?></td>
											<td><?php echo htmlentities($result->dateAwarded);?></td>
											<td><?php echo htmlentities($result->companyName);?></td>
											<td><?php echo htmlentities($result->ProjectManager);?></td>
											<td><?php echo htmlentities($result->projectStatus);?></td>
											<td>
												<a href="projects?del=<?php echo $result->projectID;?>" onclick="return confirm('Do you want to delete');"><i class="fa fa-close"></i></a></td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
								</table>

						

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
