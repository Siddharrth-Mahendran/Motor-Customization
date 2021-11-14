<?php
//login.php

session_start();

include('database_connection.php');

if(isset($_SESSION['user_id']))
{
	header("location:index.php");
}

$message = '';

if(isset($_POST["login"]))
{
	$query = "SELECT * FROM register_user 
		WHERE user_email = :user_email
	";
	$statement = $connect->prepare($query);
	$statement->execute(
		array(
				'user_email'	=>	$_POST["user_email"]
			)
	);

	$count = $statement->rowCount();
	if($count > 0)
	{
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			if($row['user_email_status'] == 'verified')
			{
				if(password_verify($_POST["user_password"], $row["user_password"]))
				//if($row["user_password"] == $_POST["user_password"])
				{
					$_SESSION['user_id'] = $row['register_user_id'];
					header("location:../index.php");
				}
				else
				{
					$message = "<label>Wrong Password</label>";
				}
			}
			else
			{
				$message = "<label class='text-danger'>Please First Verify, your email address</label>";
			}
		}
	}
	else
	{
		$message = "<label class='text-danger'>Wrong Email Address/Password</label>";
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>DMW-Login</title>		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		<link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
		<link href="../assets/vendor/aos/aos.css" rel="stylesheet">
		<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
		<link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
		<link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">


		<!-- Template Main CSS File -->
		<link href="../assets/css/style.css" rel="stylesheet">

		<link href="style.css" rel="stylesheet">
	</head>
	<body>
		<?php
			include('nav.php');
		?>

		<div class="container" style="width:100%; max-width:600px;">
			<div class="row">
			<h2 align="center">User Login</h2>
			<br />
			<div class="col-md-12 form panel">
				<div class="panel-heading"><h4>Login</h4></div>
				<div class="panel-body">
					<form action="" method="post">
						<?php echo $message; ?>
						<div class="form-group">
							<label>User Email</label>
							<input type="email" name="user_email" class="form-control" placeholder="User Name" required />
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="user_password" class="form-control" placeholder="Password" required />
						</div>
						<div class="form-group">
							<input type="submit" name="login" value="Login" class="btn btn-info" />
						</div>
					</form>
					<p align="right"><a href="register.php">Register</a></p>
				</div>
			</div>
			</div>
		</div>
	
    	<div id="preloader"></div>
    	<a href="https://wa.me/919994242696" target="_blank" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
		  
    	<script src="../assets/vendor/aos/aos.js"></script>
    	<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    	<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    	<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    	<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
		  
    	<script src="../assets/js/main.js"></script>
    	<script src="accounts.js"></script>
	</body>
</html>