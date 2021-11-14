<?php 

session_start();
if(isset($update))
{
$sql=mysqli_query($connection,"select * from register_user where register_user_id = '$user_id' and user_password='$op' ");
	if(mysqli_num_rows($sql))
	{
		if($np==$cp)
		{
		mysqli_query($con,"update register_user set user_password='$np' where register_user_id = '$user_id' ");	
		echo "<h3 style='color:blue'>Password updated successfully</h3>";
		}
		else
		{
			echo "<h3 style='color:red'>New and confirm doesn't match</h3>";
		}
	}
	else
	{
	echo "<h3 style='color:red'>Old Password doesn't match</h3>";	
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>about me - DMW INDIA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
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
</head>
<body>
  <?php
    include('nav.php');
  ?>
    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <form method="post" enctype="multipart/form-data">
                    <table class="table table-bordered table-striped table-hover">
                        <h1>Update Password</h1><hr>
                        <tr style="height:40">
                            <th>Enter Your old Password</th>
                            <td><input type="password" name="op" class="form-control"required/></td>
                        </tr>
                        
                        <tr>	
                            <th>Enter Your New Password</th>
                            <td><input type="password" name="np" class="form-control"required/>
                            </td>
                        </tr>
                        
                        <tr>	
                            <th>Enter Your Confirm Password</th>
                            <td><input type="password" name="cp" class="form-control"required/>
                            </td>
                        </tr>
                        
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" class="btn btn-primary" value="Update Password" name="update"required/>
                            </td>
                        </tr>
                    </table> 
                    </form>
                </div>
            </div>
        </div>
    </secton>
</body>
</html>