<?php
session_start(); 

if(!isset($_SESSION["user_id"]))
{
	header("location:user/login.php");
}
$user_id = $_SESSION["user_id"];
$connection= mysqli_connect('localhost','root','','connect');

// $user_email= $_SESSION[':user_email'];

// $query= "SELECT * FROM `register_user` WHERE register_user_id = '$user_id'";

// $query="SELECT wishlist.wishlist_id, productlist.product_name
// FROM wishlist
// INNER JOIN productlist
// ON wishlist.product_id=productlist.product_id";

$query="SELECT A.wishlist_id AS wishlist_id, B.product_name AS product_name2, A.City
FROM wishlist A, productlist B
WHERE A.product_id = B.product_id";
// AND A.City = B.City 
// ORDER BY A.City";
$result= mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result);

?>
<script>
	function delproduct(id)
	{
		if(confirm("You want to delete this product ?"))
		{
		window.location.href='delete_product.php?id='+id;	
		}
	}
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Wishlist - DMW INDIA</title>
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
            <table class="table table-bordered table-striped table-hover">
              <h1>Product Details</h1><hr>
              <tr>
              <td colspan="8"><a href="dashboard.php?option=add_product" class="btn btn-primary">Add New Product</a></td>
              </tr>
              <tr style="height:40">
                <th>Sr No</th>
                <th>Image</th>
                <th>product Name</th>
                <th>Details</th>
                <th>Update</th>
                <th>Delete</th>
              </tr>
              <?php
              while($row)
              {

              ?>
              <tr>
                  <td><?php echo $i;$i++; ?></td>
                  <td><img src="<?php echo $path;?>" width="50" height="50"/></td>
                  <td><?php echo $res['user_name']; ?></td>
                  <td><?php echo $res['details']; ?></td>

                  <td><a href="productdetails.php?product_id=<?php echo $row['product_id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>

                  
                  <td><a href="#" onclick="delproduct('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
                </tr>	
              <?php 	
              }
              ?>	
                
              </table>
                <div class="counter">
                    <div class="row">
                        <div class="col-6 col-lg-4">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                                <p class="m-0px font-w-600"><a href="wishlist.php">Wishlist</a></p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                                <p class="m-0px font-w-600"><a href="cart.php">Cart</a></p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                                <p class="m-0px font-w-600"><a href="orders.php">Total no. order</a></p>
                            </div>
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


</style>

<script type="text/javascript">

</script>
<?php
  include('footer.php');
?>
</body>
</html>