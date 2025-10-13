<?php
session_start();
require_once 'includes/functions.php';
include_once('includes/config.php');
$rows = fetchAllSiteSettings($dbh);
if (isset($_POST['login'])) {
	$email = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT UserName,Password FROM admin WHERE UserName=:email and Password=:password";
	$query = $dbh->prepare($sql);
	$query->bindParam(':email', $email, PDO::PARAM_STR);
	$query->bindParam(':password', $password, PDO::PARAM_STR);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_OBJ);
	if ($query->rowCount() > 0) {
		$_SESSION['alogin'] = $_POST['username'];
		echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
	} else {

		echo "<script>alert('Invalid Details');</script>";
	}
}

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin Login | <?php echo $rows['sitetitle'] ?></title>
	<link rel="stylesheet" href="login.css">
	<!-- MDB -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
</head>

<body>

	<section class="vh-100 ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 text-black mt-5">

					<div class="px-5 ms-xl-4">
						<i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
						<span class="h1 fw-bold mb-0"><img src="../sitelogo/<?php echo $rows['sitelogo'] ?>" alt="" height="80" width="80"></span>
					</div>

					<div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

						<form style="width: 23rem;" method="post">

							<h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

							<div data-mdb-input-init class="form-outline mb-4">
								<input type="text" name="username"  class="form-control form-control-lg" />
								<label class="form-label" for="">Username</label>
							</div>

							<div data-mdb-input-init class="form-outline mb-4">
								<input type="password" name="password" class="form-control form-control-lg" />
								<label class="form-label" for="">Password</label>
							</div>

							<div class="pt-1 mb-4">
								<button class="btn btn-success btn-lg btn-block" type="submit" name="login">Login</button>
							</div>


						</form>

					</div>

				</div>
				<div class="col-sm-6 px-0 d-none d-sm-block">
					<img src="../login.jpg"
						alt="Login image" class="w-100 vh-100" height="100%" style="object-fit: cover; object-position: left;">
				</div>
			</div>
		</div>
	</section>

	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script> -->
</body>

</html>