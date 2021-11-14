<?php 
session_start();
error_reporting(1);
require('../conection.php');
extract($_REQUEST);
if(isset($login))
{
	if($eid=="" || $pass=="")
	{
	$error= "<h3 style='color:red'>fill all details</h3>";	
	}		
	else
	{
	$sql=mysqli_query($conn,"select * from admin where username='$eid' && password='$pass' ");
		if(mysqli_num_rows($sql))
		{
		$_SESSION['admin_logged_in']=$eid;	
		header('location:dashboard.php');	
		}
		else
		{
		$error= "<h3 style='color:red'>Invalid login details</h3>";	
		}	
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DMW-Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Akronim|Libre+Baskerville" rel="stylesheet">
</head>
<body id="primary">
<div class="container"> 
<img src="logo/logo.png"style="margin-top:50px; margin-left:470px;">
</div>
<div class="container" >
  <h1></h1>
</div>
<div class="container-fluid"> <!-- Primary Id-->
  <div class="container">
    <div class="row"><br>
      <div class="col-sm-4"> </div>
      
		<div class="col-sm-4 text-center"style="box-shadow:2px 2px 2px;background-color:#848482;">
			
			<h1 align="center"><b><font style="font-family: 'Libre Baskerville', serif;">Admin Login </font></b></h1>

			<?php echo @$error;?>
          <form action="#" method="post"><br>
              <div class="form-group">
                <input type="text" class="form-control"name="eid" placeholder="user name"required>
              </div>
            <div class="form-group">
                <input type="Password" class="form-control"name="pass" placeholder="Password"required>
            </div>
          <input type="submit" value="Login" name="login" class="btn btn-primary btn-group btn-group-justified"required>
      	</form><br>  
        </div>
    </div><br>
  </div>
</div>

</body>
</html>
