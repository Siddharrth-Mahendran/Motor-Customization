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
	$query = "SELECT * FROM register_user WHERE user_email = :user_email";
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
		$user_password = $_POST['password'];
		$user_encrypted_password = password_hash($user_password, PASSWORD_DEFAULT);
		$user_activation_code = md5(rand());
		$insert_query = "INSERT INTO register_user (first_name, last_name, user_name, user_email, user_password, user_activation_code, user_email_status) 
		VALUES (:first_name, :last_name, :user_name, :user_email, :user_password, :user_activation_code, :user_email_status)";
		$statement = $connect->prepare($insert_query);
		$statement->execute(
			array(
				':first_name'			=> 	$_POST['first_name'],
				':last_name'			=>	$_POST['last_name'],
				':user_name'			=>	$_POST['user_name'],
				':user_email'			=>	$_POST['user_email'],
				':user_password'		=>	$user_encrypted_password,
				':user_activation_code'	=>	$user_activation_code,
				':user_email_status'	=>	'not verified'
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
			$base_url = "http://localhost/cart/motor/desktop/user/"; //change this baseurl value as per your file path
			$mail_body = "
			<p>Hi ".$_POST['user_name'].",</p>
			<p>Thanks for Registration. Your Account will work only after your email verification.</p>
			<p>Please click this link to verified your email address - ".$base_url."email_verification.php?activation_code=".$user_activation_code."
			<p>Best Regards,<br />Webslesson</p>
			";
			$name = $_POST['user_name'];
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
							<label>First Name</label>
							<input type="text" id="name" name="first_name" class="form-control" minlength="3" maxlength="15" onblur="removenameErr()" onkeypress="return validatename(this.event)" pattern="[a-zA-Z ]+" placeholder="First Name" required />
							<label>Last Name</label>
							<input type="text" id ="name" name="last_name" class="form-control" minlength="3" maxlength="15" onblur="removenameErr()" onkeypress="return validatename(this.event)" pattern="[a-zA-Z ]+" placeholder="Last Name" required />
							<div class="error" id="nameErr"></div>
						</div>
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
		                	<label >Phone</label>
                  			<input id="phone" name="phone" type="tel" onkeypress="return validatephone()" minlength="10" maxlength="10"	onblur="removephoneErr()" placeholder="Enter the number" class="form-control validate"/>
				     		<div class="error" id="phoneErr"></div>
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