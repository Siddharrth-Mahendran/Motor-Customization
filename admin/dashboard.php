<?php 
session_start();
extract($_REQUEST);
include('../conection.php');
$admin=$_SESSION['admin_logged_in'];	
if($admin=="")
{
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <title>DMW Admin</title>
  <link href="image/logo.png" rel="icon">
  <link href="image/logo.png" >
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="css/dashboard.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
  </style>
  </head>
  <body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome <?php echo $admin; ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../index.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="dashboard.php?option=update_password">Update Password</a></li>
            <li><a href="dashboard.php?option=enquiry">Enquiry</a></li>
            <li><a href="dashboard.php?option=product">Products</a></li>
			<li><a href="dashboard.php?option=testimonials">Testimonials</a></li>
      <li><a href="dashboard.php?option=faq">F.A.Q</a></li>
	 </ul>
          </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php 
@$opt=$_GET['option'];
if($opt=="")
{
include('reports.php');	
}
else
{
	if($opt=="enquiry")
	{
	include('enquiry.php');	
	}
	else if($opt=="update_password")
	{
	include('update_password.php');	
	}
	else if($opt=="product")
	{
    include('product.php');	
  }
	else if($opt=="add_product")
	{
	include('add_product.php');	
	}
	else if($opt=="delete_product")
	{
	include('delete_product.php');	
	}
  else if($opt=="update_product")
  {
    include('update_product.php');
  }
  else if($opt=="testimonials")
  {
    include('testimonials.php');
  }
  else if($opt=="add_testi")
	{
	include('add_testi.php');	
	}
	else if($opt=="delete_testi")
	{
	include('delete_testi.php');	
	}
  else if($opt=="update_testi")
  {
    include('update_testi.php');
  }
  else if($opt=="faq")
  {
    include('faq.php');
  }
}
?>
          
        </div>
      </div>
    </div>
  </body>
</html>
