<?php
	use PHPMailer\PHPMailer\PHPMailer;
    $connect= mysqli_connect('localhost','root','','connect');
    session_start();

    $message="";
	$msg="";
    
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
	    $company=$_POST['company'];
        $user_email=$_POST['user_email'];
        $ie=$_POST['ie'];
	    $phase=$_POST['phase'];
        $output=$_POST['output'];
        $poles=$_POST['poles'];
        $rpm=$_POST['rpm'];
        $mount=$_POST['mount'];
        $body_material=$_POST['body_material'];
        $frame_size=$_POST['frame_size'];
        $volts=$_POST['volts'];
        $frequency=$_POST['frequency'];
        $ip=$_POST['ip'];
        $insulation=$_POST['insulation'];
        $phone=$_POST['phone'];
        $number= $phone;

        $insert_query="INSERT INTO `enquiry` (`orderid`, `name`, `company` , `user_email`, `number`, `ie`, `phase` , `output`, `poles`, `rpm`, `mount`, `body_material`, `frame_size`, `volts`, `frequency` , `ip`, `insulation`) 
        VALUES ('','$name','$company','$user_email','$number','$ie','$phase','$output','$poles','$rpm','$mount','$body_material','$frame_size','$volts','$frequency','$ip','$insulation')";
        
        $statement = $connect->prepare($insert_query);
		if(isset($statement))
		{
			$nam = "DMW";
			$mail_body = "
			<p>Hi ".$name.",</p>
			<p>Thanks for sending Enquiry. Your Have quoted for Custom motor specification below.</p>
			<p>Ie:".$ie."<br /> Phase:".$phase."<br /> output:".$output."<br /> poles:".$poles."<br /> rpm:".$rpm."<br /> mount:".$mount."<br /> body_material:".$body_material."<br /> frame_size:".$frame_size."<br /> volts:".$volts."<br /> frequency:".$frequency."<br /> ip:".$ip."<br /> insulation:".$insulation."</P>
			<p>We Will contact you soon,<br />DMW CNC Solution India Private Limited</p>
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
			$mail->setFrom($name, $user_email);				//Sets the From email address for the message//Sets the From name of the message
			$mail->setFrom($user_email, $nam);
        	$mail->addAddress("$user_email");					//Adds a "To" address			
			$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
			$mail->IsHTML(true);							//Sets message type to HTML				
			$mail->Subject = 'Custom Motor enquiry';		//Sets the Subject of the message
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
            window.location='logout.php'
        }, 1000);
    </script>

</body>
</html>
