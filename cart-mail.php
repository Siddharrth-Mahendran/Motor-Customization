<?php
	use user\PHPMailer\PHPMailer\PHPMailer;
    session_start();

	$message="";
    $msg="";
    if(isset($GET['submit'])){
        $name=$GET['name'];
	    $mail=$GET['mail'];
        $phone=$GET['phone'];
	    if(isset($_SESSION["cart"])){
			$nam = "DMW";
			$mail_body = "
			<p>Hi ".$name.",</p>
			<p>Thanks for sending Enquiry. Your Have quoted for Standard motor <br> Enquiry List is below.</p>
            <p>Customer Details</p>
            <p>Name:".$name."<br /> E-mail:".$mail."<br /> Phone Number:".$phone."</p>
            <p>Total no. of Motors:".$cart_count."</p>
            ";
            foreach ($_SESSION["cart"] as $product){
                $list="
			    <p>Motor model and specs :".$product["product_name"]."<br /> quantity:".$product["quantity"]."<br /> </P>
            ";
            }
            $foot = "
			<p>We Will contact you soon,<br />DMW CNC Solution India Private Limited</p>
			";
            $body = "$mail_body .'<br>'. $list . '<br>' . $foot";
			require_once "user/PHPMailer/PHPMailer.php";
			require_once "user/PHPMailer/SMTP.php";
			require_once "user/PHPMailer/Exception.php";
			$mail = new PHPMailer;
			$mail->IsSMTP();								//Sets Mailer to send message using SMTP
			$mail->Host = 'smtp.gmail.com';					//Sets the SMTP hosts of your Email hosting, this for Godaddy
			$mail->Port = '465';							//Sets the default SMTP server port
			$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
			$mail->Username = 'siddharrth01@gmail.com';		//Sets SMTP username
			$mail->Password = 'siddhumahi';					//Sets SMTP password
			$mail->SMTPSecure = 'ssl';						//Sets connection prefix. Options are "", "ssl" or "tls"
			$mail->setFrom($name, $mail);			    	//Sets the From email address for the message//Sets the From name of the message
			$mail->setFrom($mail, $nam);
        	$mail->addAddress("$mail");					    //Adds a "To" address			
			$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
			$mail->IsHTML(true);							//Sets message type to HTML				
			$mail->Subject = 'Custom Motor enquiry';		//Sets the Subject of the message
			$mail->Body = $body;	
			
			//An HTML or plain text message body
			if($mail->Send())								//Send an Email. Return true on success or false on error
			{
				$message = '<label class="text-success">Register Done, Please check your mail.</label>';
			}
			else{
				$message = 'failed';
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
            window.location='index.php'
        }, 1000);
    </script>

</body>
</html>
