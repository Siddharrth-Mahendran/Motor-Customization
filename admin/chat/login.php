<?php
session_start();
include('database_connection.php');
$message = '';
if(isset($_SESSION['user_id']))
{
	header('location:index.php');
}

if(isset($_POST['login']))
{
	$query = "
		SELECT * FROM login 
  		WHERE user_email = :user_email
	";
	$statement = $connect->prepare($query);
	$statement->execute(
		array(
			':user_email' => $_POST["user_email"]
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
				if(password_verify($_POST["_password"], $row["_password"]))
				//if($row["_password"] == $_POST["_password"])
				{
					$_SESSION['user_id'] = $row['user_id'];
					header("location:../index.php");
				}
				if(password_verify($_POST["_password"], $row["_password"]))
				{
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['user_email'] = $row['user_email'];
					$sub_query = "
					INSERT INTO login_details 
	     			(user_id) 
	     			VALUES ('".$row['user_id']."')
					";
					$statement = $connect->prepare($sub_query);
					$statement->execute();
					$_SESSION['login_details_id'] = $connect->lastInsertId();
					header('location:index.php');
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
		$message = '<label>Wrong User_email</labe>';
	}
}


?>

<html>  
    <head>  
        <title>Tech support - DMW</title>  
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
			<br />
			
			<h3 align="center"></a></h3><br />
			<br />
			<div class="panel panel-default">
  				<div class="panel-heading">Support Login</div>
				<div class="panel-body">
					<p class="text-danger"><?php echo $message; ?></p>
					<form method="post">
						
						<div class="form-group">
							<label>Enter User Email</label>
							<input type="text" name="user_email" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Enter Password</label>
							<input type="password" name="_password" class="form-control" required />
						</div>
						<div class="form-group">
							<input type="submit" name="login" class="btn btn-info" value="Login" />
						</div>
					</form>
					<p align="right"><a href="register.php">Register</a></p>
				
					<br />
					
				</div>
			</div>
		</div>
		<a href="https://wa.me/919994242696" target="_blank" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
    </body>  
</html>