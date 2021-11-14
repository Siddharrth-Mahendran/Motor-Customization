<?php
    session_start();
    $connection= mysqli_connect("localhost","root","","connection");
    $product_id= $_GET['product_id']; 

	$sql= "SELECT * FROM `productlist` WHERE product_id='$product_id'"; 
    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

	$status="";
	if (isset($_POST['product_id']) && $_POST['product_id']!=""){
	$product_id = $_POST['product_id'];
	$res = mysqli_query($connection,"SELECT * FROM `productlist` WHERE `product_id`='$product_id'");
	$row = mysqli_fetch_assoc($res);
	
	$product_name = $row['product_name'];
	$product_id = $row['product_id'];

	$cartArray = array(
		$product_id=>array(
		'product_name'=>$product_name,
		'product_id'=>$product_id,
		'quantity'=>3)
	);

	if(empty($_SESSION["cart"])) {
		$_SESSION["cart"] = $cartArray;
		$status = "<div class='box'>Product is added to your cart!</div>";
	}else{
		$array_keys = array_keys($_SESSION["cart"]);
		if(in_array($product_id,$array_keys)) {
			$status = "<div class='box' style='color:red;'>
			Product is already added to your cart!</div>";	
		} else {
			$_SESSION["cart"] = array_merge($_SESSION["cart"],$cartArray);
			$status = "<div class='box'>Product is added to your cart!</div>";
		}

		}
	}
	if(isset($_POST["submit"]))
	{
	$query = "SELECT * FROM register_user WHERE user_email = :user_email";
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DMW MOTOR LIST</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/DMW Logo_New.png" rel="icon">
  <link href="assets/img/DMW Logo_New.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cs/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cs/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cs/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="cs/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cs/vendor/MagnificPopup/magnific-popup.css">
<!--===============================================================================================-->

  <!-- Template Main CSS File -->
  	<link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="cs/css/util.css">
	<link rel="stylesheet" type="text/css" href="cs/css/main.css">
	<link rel='stylesheet' href='cs/css/style.css' type='text/css' media='all' />
	<style>

		th{
			width: 60%;
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		table {
			line-height: 2.8;
			border-collapse: collapse;
			width:100%;
			text-align:justify;
			padding: 30px;
		}
		table td.shrink {
   			 white-space:nowrap
		}
		table td.expand {
			width: 99%
		}

	</style>

</head>

<body class="animsition">

<?php
  include('nav.php')
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      	<div class="container">
			<ol>
				<li><a href="index.php">Home</a></li>
				<li><a href="productslist.php"><i class="bi bi-chevron-double-left"></i>Products</a></li> 
				<li><a href="products.php"><i class="bi bi-chevron-double-left"></i>Product list</a></li>
				<li>Product Details</li>
			</ol>
			<div class="wrap-icon-header flex-w flex-r-m">
				<?php
					if(!empty($_SESSION["cart"])) {
					$cart_count = count(array_keys($_SESSION["cart"]));
				?>
				<div class="cart_div">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?php echo $cart_count; ?>">
						<i class="zmdi zmdi-shopping-cart"></i>
					</div>
				</div>
				<?php
					}
				?>
			</div>
      	</div>
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<i class="bi bi-x-lg"></i>
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
    </section><!-- End Breadcrumbs -->

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
					<?php
						if(isset($_SESSION["cart"])){

						foreach ($_SESSION["cart"] as $product){
					?>
						<div class="header-cart-item-img">
							<img src="assets/img/product/b3.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="productdetails.php?product_id=<?php echo $product['product_id']; ?>" class="header-cart-item-name m-b-18 trans-04">
                				<?php echo $product["product_name"]; ?>
							</a>

							<span class="header-cart-item-info">
                				<?php echo $product["quantity"]; ?>
							</span>
						</div>
						<?php
							}
						}else{
							echo "<h3>Your cart is empty!</h3>";
							}
						?>
				</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--container-->
    <section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">			
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<form method="post" action="add_wish.php">

							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							
								<?php echo $row['product_name'];?>

							</h4>
							<input type='hidden' readonly name='product_name' value="<?php echo $row['product_name'];?>" />
								<input type='hidden' readonly name='product_id' value="<?php echo $row['product_id'];?>" />
							<div class="flex-w flex-m p-l-50 p-t-20 respon7">
								<p class="stext-102 cl3 p-t-40" >
								You can also buy at 
								</p>
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="https://www.moglix.com/" target="_blank" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Moglix">
										<img src="assets/img/moglix.png" style="height:28px; width:60px; margin-left:10px; margin-right:-5px">
									</a>
								</div>

								<a href="https://www.amazon.in/" target="_blank" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Amazon">
									<img src="assets/img/amazon.png"  style="height:27px; width:80px; margin-left:-7px">
								</a>
							</div>
							<br><br><br>
							<div class="flex-w flex-m p-l-50 respon7" style="margin-left:-20px">
									<p class="stext-102 cl3" style="margin-right:40px;">
										For Bulk order (min. 3 Qty)
									</p>
									<div class="flex-m p-r-10 m-r-11">

											<div class="wrap-num-product flex-w" >
												<input type="tel" id="quantity" class="txt-center" size="5" name="quantity" min="3" max="1000" value="3">
											</div>

											<button type="submit" name="submit" id="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail buy" style="margin-left:10px">
												Add to cart
											</button>
											<button type="submit" name="wish" id="wish" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail buy" style="margin-left:10px">
												Add to wishlist
											</button>
									</div>
							</div>
							<p class="stext-102 cl3 p-t-23">
							</p>
							<p class="stext-102 cl3 p-t-23">
								Need More Customize <a href="user/index.php">click Here </a>
							</p>
							<!--  -->
						</form>
					</div>
					<div class="message_box" style="margin:10px 0px;">
				<?php echo $status; ?>
			</div>
				</div>
			
			
				
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w" style="margin-left:-100px">
							<div class="wrap-slick3"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								<div class="item-slick3">
									<div class="wrap-pic-w pos-relative" >
										<img src="assets/img/product/b3.jpg" alt="IMG-PRODUCT" href="assets/img/product/b3.jpg">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn2 trans-04" href="assets/img/product/b3.jpg">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
								<div class="item-slick3">
									<div class="wrap-pic-w pos-relative">
										<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="clear:both;"></div>


			<div class="bor10 p-t-23 p-b-20" style="text-align:center;">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<p class="nav-link active" data-toggle="tab" href="#information" role="tab">Additional information</p>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-23">
						<!-- - -->
						
						<div class="tab-pane fade show active" id="information" role="tabpanel">
							<div class="row">
							<div class="col-sm-8 col-md-6 col-lg-16 m-lr-auto">
									<table>
										<tr>
											<td>
												Motor poles
											</td>

											<td>
												<?php echo $row['poles'];?>
											</td>
										</tr>

										<tr>
											<td>
												Output Power kW/ HP
											</td>

											<td>
												<?php echo $row['output'];?>kW/HP
											</td>
										</tr>

										<tr>
											<td>
												Efficiency Class
											</td>

											<td>
												<?php echo $row['ie'];?>
											</td>
										</tr>

										<tr>
											<td>
												Type
											</td>

											<td>
												<?php echo $row['type'];?>
											</td>
										</tr>

										<tr>
											<td>
												Synchronous speed (rpm)
											</td>

											<td>
												<?php echo $row['rpm'];?> RPM
											</td>
										</tr>
										<tr>
											<td>
											Rated Voltage (Volts)
											</td>

											<td>
												<?php echo $row['volts'];?> V
											</td>
										</tr>

										<tr>
											<td>
												Winding
											</td>

											<td>
												<?php echo $row['winding'];?>
											</td>
										</tr>

										<tr>
											<td>
												Body Material/ Housing/ Casing
											</td>

											<td>
												<?php echo $row['body_material'];?>
											</td>
										</tr>
										<tr>
											<td>
												Standards
											</td>

											<td>
												<?php echo $row['standards'];?>
											</td>
										</tr>

										<tr>
											<td>
												Insulation Class
											</td>

											<td>
												<?php echo $row['insulation'];?>
											</td>
										</tr>

										<tr>
											<td>
												Mounting
											</td>

											<td>
												<?php echo $row['mount'];?> Mount
											</td>
										</tr>

										<tr>
											<td>
												Frame Size (mm)
											</td>

											<td>
												<?php echo $row['frame_size'];?> mm	
											</td>
										</tr>
										<tr>
											<td>
												Operating Frequency
											</td>

											<td>
												<?php echo $row['frequency'];?> Hz
											</td>
										</tr>

										<tr>
											<td>
												Package Width
											</td>

											<td>
												<?php echo $row['package_width'];?>
											</td>
										</tr>

										<tr>
											<td>
												Package Length
											</td>

											<td>
												<?php echo $row['package_length'];?>
											</td>
										</tr>

										<tr>
											<td>
												Package Height
											</td>

											<td>
												<?php echo $row['package_height'];?>
											</td>
										</tr>
										<tr>
											<td>
												Invoice Description
											</td>

											<td>
												<?php echo $row['description'];?>
											</td>
										</tr>

										<tr>
											<td>
												Product Range
											</td>

											<td>
												<?php echo $row['product_range'];?>
											</td>
										</tr>
										<tr>
											<td>
												Package Gross Weight
											</td>

											<td>
												<?php echo $row['gross_weight'];?>
											</td>
										</tr>

										<tr>
											<td>
												Total GST Percentage
											</td>

											<td>
												<?php echo $row['gst_percentage'];?>
											</td>
										</tr>
										<tr>
											<td>
												HSN Number
											</td>

											<td>
												<?php echo $row['hsn_number'];?>
											</td>
										</tr>

										<tr>
											<td>
											Country of origin
											</td>

											<td>
												India
											</td>
										</tr>
									</ul>
									</table>
								</div>
							</div>
						</div>
						<!-- - -->
					</div>
				</div>
			</div>
		</div>
	</section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php
  include('footer.php')
?>
<!-- End Footer -->

  <div id="preloader"></div>
  <a href="https://wa.me/919994242696" target="_blank" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>	

  <!--===============================================================================================-->	
	<script src="cs/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="cs/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="cs/vendor/bootstrap/js/popper.js"></script>
	<script src="cs/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="cs/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="cs/vendor/slick/slick.min.js"></script>
	<script src="cs/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="cs/vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script src="cs/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
<!--===============================================================================================-->
	<script src="cs/vendor/isotope/isotope.pkgd.min.js"></script>
	<script src="cs/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="cs/vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		
		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	
	</script>

<!--===============================================================================================-->
	<script src="cs/js/main.js"></script>

</body>

</html>