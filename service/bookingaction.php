<?php
	use PHPMailer\PHPMailer\PHPMailer;
    $connect= mysqli_connect('localhost','root','','connect');
    session_start();

    $message="";
	$msg="";
    
    if(isset($_POST['submit'])){
        $first_name=$_POST['firstname'];
        $last_name=$_POST['lastname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $date=$_POST['date'];
        $message=$_POST['message'];
	    
        $insert_query="INSERT INTO `service` (`service_id`, `first_name`, `last_name` , `email`, `phone`, `message`, `date`) 
        VALUES ('','$first_name','$last_name','$email','$phone','$message','$date')";
        
        $statement = $connect->prepare($insert_query);
		if(isset($statement))
		{
			$nam = "DMW";
			$mail_body = "
			<p>Hi ".$first_name.",</p>
			<p>Thanks for Booking appointment. Your Details.</p>
			<p>Name:".$first_name." ".$last_name."<br /> Email: ".$email."<br /> Phone:".$phone."<br /> Date:".$date."<br /> Message:".$message."</P>
			<p><br />DMW CNC Solution India Private Limited</p>
			";
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
			$mail->setFrom($first_name, $email);				//Sets the From email address for the message//Sets the From name of the message
			$mail->setFrom($email, $nam);
        	$mail->addAddress("$email");					//Adds a "To" address			
			$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
			$mail->IsHTML(true);							//Sets message type to HTML				
			$mail->Subject = 'Service Booking';		//Sets the Subject of the message
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

         if($statement==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
            
        }
        else{
            die('unsuccessful' .mysqli_error($connect));
        }
        
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
   
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
</head>
<body>
    <?php echo $msg;
    ?>
    
    <script>
    
        var timer = setTimeout(function() {
            window.location='../index.php'
        }, 1000);
    </script>

</body>
</html>
