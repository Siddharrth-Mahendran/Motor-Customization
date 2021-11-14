<?php 
session_start();
error_reporting(1);
if($_SESSION['logged_in']!="")
{
header('location:custom.php');
}
error_reporting(1);
require('conection.php');
extract($_REQUEST);
if(isset($login))
{
  if($eid=="" || $pass=="")
  {
  $error= "<h4 style='color:red'>fill all details</h4>";  
  }   
  else
  {
  $sql=mysqli_query($conn,"select * from user where email='$eid' && password='$pass' ");
    if(mysqli_num_rows($sql))
    {
    $_SESSION['logged_in']=$eid;  
    header('location:custom.php');
    }
    else
    {
    $error= "<h4 style='color:red'>Invalid login details</h4>"; 
    } 
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>DMW-MOTOR Home</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/img/DMW Logo_New.png" rel="icon">
<link href="assets/img/DMW Logo_New.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Akronim|Libre+Baskerville" rel="stylesheet">
</head>
<body>
<?php
include('navv.php')
?>
<br><br><br><br><br><br><br>
<div class="container-fluid"><!-- Primary Id-->
  <div class="container">
    <div class="row"><br>
      <div class="col-sm-3"></div>
      <div class="col-sm-6 text-center"style="box-shadow:2px 2px 2px; background-color:#D1D0CE; border-radius:50px; padding:30px;"><br>
        	<h1 align="center"><b><font style="font-family: 'Libre Baskerville', serif;text-shadow:2px 2px #000;">User Login ?</font></b></h1>
          <?php echo @$error; ?>
        <form method="post"><br>
          <div class="form-group">
            <input type="Email" class="form-control" name="eid" placeholder="Email Id" autocomplete="off" required >
          </div>
          <div class="form-group">
            <input type="Password" class="form-control" name="pass" placeholder="Password" autocomplete="off" required>
          </div>
          <input type="submit" value="Login" name="login" class="btn btn-primary btn-group btn-group-justified" required>
          <div class="form-group forget">
            <a href="signup.php">Create an Account</a>
          </div>
      	</form><br>
        </div>
    </div><br>
  </div>
</div>
<?php
    include('Footer.php')
?>
  <div id="preloader"></div>
  <a href="https://wa.me/919994242696" target="_blank" class="back-to-top d-flex align-items-center justify-content-center" ><i class="bi bi-whatsapp"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>
