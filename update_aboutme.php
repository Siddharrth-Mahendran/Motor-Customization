<?php
session_start(); 

if(!isset($_SESSION["user_id"]))
{
	header("location:user/login.php");
}
$user_id = $_SESSION["user_id"];
$connection= mysqli_connect('localhost','root','','connect');

// $user_email= $_SESSION[':user_email'];

$query= "SELECT * FROM `register_user` WHERE register_user_id = '$user_id'";
  
$result= mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result);

extract($_REQUEST);

if(isset($update))
{
$oldimg=$_REQUEST['oldimg'];
$pro_pic=$_FILES['pro_pic']['name'];
$user_tmp_name=$_FILES['pro_pic']['tmp_name'];
$imgurl="profile_image/";
unlink($imgurl.$oldimg);
	
move_uploaded_file($user_tmp_name,"profile_image/$user_img");

mysqli_query($connection,"update register_user set first_name='$fname',last_name='$lname',phone='$phone',dob='$dob',address='$address' ,pro_pic='$pro_pic' where register_user_id = '$user_id' ");

echo ("<script>alert('Profile Updated Successfully');</script>");
echo "<script>location.href='about_me.php';</script>";

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
  <link href="profile.scss" rel="stylesheet">


</head>
<body>
  <?php
    include('nav.php');
  ?>
<section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color">About Me</h3>
                            <!-- <h6 class="theme-color lead">A Lead UX &amp; UI designer based in Canada</h6> -->
                            <!-- <p>I <mark>design and develop</mark> services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface and meaningful interactions.</p> -->
                            <div class="row about-list">
                              <form method="post" enctype="multipart/form-data">
                                <div class="col-md-6">
                                   <div class="media">
                                        <label>First Name</label>
                                        <p><input type="text"  name="fname" minlength="3"
                                          maxlength="15"
                                          onblur="removenameErr()"
                                          onkeypress="return validatename(this.event)"
                                          class="form-control validate" value="<?php echo $row['first_name']; ?>"  class="form-control"/></p>
                                          <div class="error" id="nameErr"></div>
                                    </div>
                                    <div class="media">
                                        <label>Last Name</label>
                                        <p><input type="text"  name="lname" minlength="3"
                                          maxlength="15"
                                          onblur="removenameErr()"
                                          onkeypress="return validatename(this.event)"
                                          class="form-control validate" value="<?php echo $row['last_name']; ?>"  class="form-control"/></p>
                                          <div class="error" id="nameErr"></div>
                                    </div>
                                    <div class="media">
                                        <label>User Name</label>
                                        <p><input type="text" value="<?php echo $row['user_name']; ?>"  class="form-control" readonly/></p>
                                    </div>
                                    <div class="media">
                                        <label>E-mail</label>
                                        <p><input type="email" value="<?php echo $row['user_email']; ?>" class="form-control" readonly/></p>
                                    </div>
                                    <div class="media">
                                        <label>Phone</label>
                                        <p><input type="tel" name="phone" value="<?php echo $row['phone']; ?>" onkeypress="return validatephone()"
					                                  minlength="10"
					                                  maxlength="10"
					                                  value='<?php echo $phone; ?>'
					                                  onblur="removephoneErr()" class="form-control"/></p>
                                            <div class="error" id="phoneErr"></div>
                                    </div>
                                    <div class="media">
                                        <label>Birthday</label>
                                        <p><input type="date" name="dob" value="<?php echo $row['dob']; ?>" class="form-control" /></p>
                                    </div>
                                    <div class="media">
                                        <label>Address</label>
                                        <p><textarea name="address" value="<?php echo $row['address']; ?>" class="form-control"></textarea></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-primary" value="Update Profile" name="update"/>
                                </div>
                                <br><br><br>
                              </form>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-5">
                <div class="tm-product-img-dummy mx-auto">
				 
                  <i
                    class="ti-export"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-5 mb-5">
                  <input id="fileInput" name="user_img" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="Upload User Image"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
				
              </div>-->
                    <div class="col-lg-6">
                        <div class="about-avatar">
                        <?php
                        if($row['pro_pic']=="")
                        {
                        ?>
                        <img class="thumnail" id="mob_photo"  src="assets/images/preview.jpg" style="width:250px;height:230px;">
                        <?php
                        }
                        else
                        {
                        ?>
                        <img class="thumnail" id="mob_photo"  src="profile_image/<?php echo $row['pro_pic'];?>" style="width:250px;height:230px;">
                        <?php
                        }
                        ?>
                          
                          
                        <input type="hidden" name="oldimg" value="<?php echo $row['pro_pic'];?>">
                        <input type="file" name="pro_pic" id="attachment_file1" style="height:auto; border:none;"
                        onchange="preview_image_mob(this)">
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>

<style type="text/css">
body{
    color: #6F8BA4;
    margin-top:20px;
}
.section {
    padding: 100px 0;
    position: relative;
}
.gray-bg {
    background-color: #f5f5f5;
}
img {
    max-width: 100%;
}
img {
    vertical-align: middle;
    border-style: none;
}
/* About Me 
---------------------*/
.about-text h3 {
  font-size: 45px;
  font-weight: 700;
  margin: 0 0 6px;
}
@media (max-width: 767px) {
  .about-text h3 {
    font-size: 35px;
  }
}
.about-text h6 {
  font-weight: 600;
  margin-bottom: 15px;
}
@media (max-width: 767px) {
  .about-text h6 {
    font-size: 18px;
  }
}
.about-text p {
  font-size: 18px;
  max-width: 450px;
}
.about-text p mark {
  font-weight: 600;
  color: #20247b;
}

.about-list {
  padding-top: 10px;
}
.about-list .media {
  padding: 5px 0;
}
.about-list label {
  color: #20247b;
  font-weight: 600;
  width: 88px;
  margin: 0;
  position: relative;
}
.about-list label:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  right: 11px;
  width: 1px;
  height: 12px;
  background: #20247b;
  -moz-transform: rotate(15deg);
  -o-transform: rotate(15deg);
  -ms-transform: rotate(15deg);
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
  margin: auto;
  opacity: 0.5;
}
.about-list p {
  margin: 0;
  font-size: 15px;
}

@media (max-width: 991px) {
  .about-avatar {
    margin-top: 30px;
  }
}

.about-section .counter {
  padding: 22px 20px;
  background: #ffffff;
  border-radius: 10px;
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
}
.about-section .counter .count-data {
  margin-top: 10px;
  margin-bottom: 10px;
}
.about-section .counter .count {
  font-weight: 700;
  color: #20247b;
  margin: 0 0 5px;
}
.about-section .counter p {
  font-weight: 600;
  margin: 0;
}
mark {
    background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
    background-size: 100% 3px;
    background-repeat: no-repeat;
    background-position: 0 bottom;
    background-color: transparent;
    padding: 0;
    color: currentColor;
}
.theme-color {
    color: #fc5356;
}
.dark-color {
    color: #20247b;
}


.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.container:hover .overlay {
  opacity: 1;
}

</style>

<script type="text/javascript">

</script>
<script>
		function preview_image_mob(input){
			if(input.files && input.files[0]){
				var reader = new FileReader();
				
				reader.onload = function (e){
					$('#mob_photo').attr('src', e.target.result)
				};
				
				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>
  <script src="assets/js/accounts.js"></script>
<?php
  include('footer.php');
?>
</body>
</html>