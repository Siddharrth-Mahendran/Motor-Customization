<?php
//register.php
use PHPMailer\PHPMailer\PHPMailer;
include('database_connection.php');

if(isset($_SESSION['user_id']))
{
	header("location:index.php");
}

$message = '';

if(isset($_POST["register"]))
{
	$query = "SELECT * FROM login WHERE user_email = :user_email";
	$statement = $connect->prepare($query);
	$statement->execute(
		array(
			':user_email'	=>	$_POST['user_email']
		)
	);
	$no_of_row = $statement->rowCount();
	if($no_of_row > 0)
	{
		$message = '<label class="text-danger">Email Already Exits</label>';
	}
	else
	{
		$_password = $_POST['_password'];
		$user_encrypted_password = password_hash($_password, PASSWORD_DEFAULT);
		$user_activation_code = md5(rand());
		$insert_query = "INSERT INTO login (user_email, username, _password, user_activation_code, user_email_status) 
		VALUES (:user_email, :user_email, :_password, :user_activation_code, :user_email_status)";
		$statement = $connect->prepare($insert_query);
		$statement->execute(
			array(
				':user_email'			=>	$_POST['user_email'],
				':username'				=>	$_POST['username'],
				':_password'			=>	$user_encrypted_password,
				':user_activation_code'	=>	$user_activation_code,
				':user_email_status'	=>	'not verified'
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
			$base_url = "http://localhost/cart/desktop/chat/"; //change this baseurl value as per your file path
			$mail_body = "
			<p>Hi ".$_POST['user_name'].",</p>
			<p>Thanks for Registration. Your Account will work only after your email verification.</p>
			<p>Please click this link to verified your email address - ".$base_url."email_verification.php?activation_code=".$user_activation_code."
			<p>Best Regards,<br />Webslesson</p>
			";
			$name = $_POST['username'];
			$email = $_POST['user_email'];
			require_once "PHPMailer/PHPMailer.php";
			require_once "PHPMailer/SMTP.php";
			require_once "PHPMailer/Exception.php";
			$mail = new PHPMailer;
			$mail->IsSMTP();								//Sets Mailer to send message using SMTP
			$mail->Host = 'smtp.gmail.com';					//Sets the SMTP hosts of your Email hosting, this for Godaddy
			$mail->Port = '465';							//Sets the default SMTP server port
			$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
			$mail->Username = 'siddharrth01@gmail.com';		//Sets SMTP username
			$mail->Password = 'siddhumahi';					//Sets SMTP password
			$mail->SMTPSecure = 'ssl';						//Sets connection prefix. Options are "", "ssl" or "tls"
			$mail->setFrom($_POST['user_name'], $_POST['user_email']);					//Sets the From email address for the message//Sets the From name of the message
			$mail->setFrom($email, $name);
        	$mail->addAddress("$email");		//Adds a "To" address			
			$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
			$mail->IsHTML(true);							//Sets message type to HTML				
			$mail->Subject = 'Email Verification';			//Sets the Subject of the message
			$mail->Body = $mail_body;	
			
			//An HTML or plain text message body
			if($mail->Send())								//Send an Email. Return true on success or false on error
			{
				$message = '<label class="text-success">Register Done, Please check your mail.</label>';
			}
			else{
				$message = 'failed';
			}
		}
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>DMW-motor|Login</title>		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<br />
		<div class="container" style="width:100%; max-width:600px; margin-top:20px;">
			<div class="row">
			<h2 align="center">Sign Up</h2>
			<br />
			<div class="col-md-12 form panel">
				<div class="panel-heading"><h4>Register</h4></div>
				<div class="panel-body">
					<form method="post" id="register_form">
						<?php echo $message; ?>
						<div class="form-group">
							<label>User Name</label>
							<input type="text" name="user_name" pattern="[a-zA-Z ]+" placeholder="User Name" class="form-control" required />
						</div>
						<div class="form-group">
							<label>User Email</label>
							<input id="email" type="email" name="user_email" onblur="removeemailErr()" placeholder="Email ID" class="form-control" required />
							<div class="error" id="emailErr"></div>
						</div>
						<div class="form-group">
							<label>Password</label>
                        	<input id="pwd" name="password" type="password" onkeyup="return validatepwd();" onblur="removepwdErr()" data-placement="bottom" data-toggle="popover" placeholder="Password" class="form-control validate" required>
							<div class="error" id="passwordErr"></div>
						</div>
						<div class="form-group">
							<input type="submit" name="register" id="register" value="Register"	onClick="return validateForm()" class="btn btn-info" />
						</div>
					</form>
					<p align="right"><a href="login.php">Login</a></p>
				</div>
			</div>
			</div>
		</div>

		<script src="accounts.js"></script>

	</body>
</html>