<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DMW-MOTOR Products</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="cs/css/util.css">
	<link rel="stylesheet" type="text/css" href="cs/css/main.css">
  <link rel="stylesheet" type="text/css" href="cs/fonts/iconic/css/material-design-iconic-font.min.css">

</head>

<body class="animsition">

<?php
  include('nav.php')
?>
  <main class="bg0 m-t-23 p-b-140">

    <!-- ======= Breadcrumbs ======= -->
   <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li><a href="productslist.php"><i class="bi bi-chevron-double-left"></i>Products</a></li>
          <li>Product List</li>
        </ol>
        <div class="wrap-icon-header flex-w flex-r-m">
          <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
            <i class="zmdi zmdi-search"></i>
          </div>
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
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search... " id="keywords" onkeyup="searchFilter();"/>
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
            ?>
            <?php
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

  <!-- Section: Filters -->
    <section>
      <div class="grid-container">
        <aside class="main-sidebar" style="margin-left:5px;">
          

          <div class="item1" >
              <h5>Filters</h5>

              <!-- Section: IE Rating -->
              <section style="margin-top:10px" algin="left">
                <button type="button" class="collapsible font-weight-bold">IE Rating</button>
                <div class="content">
                  <div class="form-check pl-0 mb-3" style="margin-top:10px">
                    <input type="checkbox" class="form-check-input filled-in" id="IE2">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="IE2">IE2</label>
                  </div>
                  <div class="form-check pl-0 mb-3">
                    <input type="checkbox" class="form-check-input filled-in" id="IE3">
                    <label class="form-check-label small text-uppercase card-link-secondary" for="IE3">IE3</label>
                  </div>
                </div>
              </section>
              <!-- Section: IE Rating -->

              <!-- Section: Phase -->
              <section>

              <button type="button" class="collapsible font-weight-bold">Phase</button>
              <div class="content">
                <div class="form-check pl-0 mb-3"  style="margin-top:10px">
                  <input type="checkbox" class="form-check-input filled-in" id="1csr">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="1csr">1 Phase csr</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="1cscr">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="1cscr">1 Phase cscr</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="3pahse">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="3phase">3 Phase</label>
                </div>
                </div>
              </section>
              <!-- Section: Phase -->

              <!-- Section: Power Rating -->
              <section>

              <button type="button" class="collapsible font-weight-bold">Power Rating</button>
              <div class="content">
              <div style="height: 220px; overflow-y: auto; overflow-x: hidden;">
                <div class="form-check pl-0 mb-3" style="margin-top:10px">
                  <input type="checkbox" class="form-check-input filled-in" id="0.12/0.16">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="0.12/0.16">0.12kw/0.16hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="0.18/0.25">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="0.18/0.25">0.18kw/0.25hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="0.25/0.33">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="0.25/0.33">0.25kw/0.33hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="0.37/0.5">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="0.37/0.5">0.37kw/0.5hp</label>            
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="0.55/0.75">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="0.55/0.75">0.55kw/0.75hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="0.75/1">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="0.75/1">0.75kw/1hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="1.10/1.5">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="1.10/1.5">1.10kw/1.5hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="1.50/2">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="1.50/2">1.50kw/2hp</label>            
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="2.20/3">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="2.20/3">2.20kw/3hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="3.7/5">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="3.7/5">3.7kw/5hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="5.5/7.5">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="5.5/7.5">5.50kw/7.5hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="7.5/10">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="7.5/10">7.5kw/10hp</label>            
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="11/15">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="11/15">11kw/15hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="15/20">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="15/20">15kw/20hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="18.5/25">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="18.5/25">18.5kw/25hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="22/30">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="22/30">22kw/30hp</label>            
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="30/40">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="30/40">30kw/40hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="37/50">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="37/50">37kw/50hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="45/60">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="45/60">45kw/60hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="55/75">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="55/75">55kw/75hp</label>            
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="75/100">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="75/100">75kw/100hp</label>            
                </div>
              </div>
              </div>
              </section>
              <!-- Section: Power Rating -->

              <!-- Section: Poles -->
              <section>

              <button type="button" class="collapsible font-weight-bold">Poles</button>
              <div class="content">
                <div class="form-check pl-0 mb-3" style="margin-top:10px">
                  <input type="checkbox" class="form-check-input filled-in" id="2pole">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="2pole">2 Poles</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="4pole">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="4pole">4 Poles</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="6pole">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="6pole">6 Poles</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="8pole">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="8pole">8 poles</label>
                </div>
              </div>
              </section>
              <!-- Section: Poles -->

              <!-- Section: RPM -->
              <section>

              <button type="button" class="collapsible font-weight-bold">RPM</button>
              <div class="content">
                <div class="form-check pl-0 mb-3" style="margin-top:10px">
                  <input type="checkbox" class="form-check-input filled-in" id="3600rpm">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="3600rpm">3600 RPM</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="3000rpm">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="3000rpm">3000 RPM</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="1800rpm">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="1800rpm">1800 RPM</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="1500rpm">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="1500rpm">1500 RPM</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="1200rpm">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="1200rpm">1200 RPM</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="1000rpm">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="1000rpm">1000 RPM</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="900rpm">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="900rpm">900 RPM</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="750rpm">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="750rpm">750 RPM</label>
                </div>
              <div>
              </section>
              <!-- Section: RPM -->

              <!-- Section: End Cover -->
              <section>

              <button type="button" class="collapsible font-weight-bold">End Cover</button>
              <div class="content">

                <div class="form-check pl-0 mb-3" style="margin-top:10px">
                  <input type="checkbox" class="form-check-input filled-in" id="b3">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="b3">Foot Mount</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="b5">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="b5">Flange Mount</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="b14">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="b14">Face Mount</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="b35">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="b35">Foot + Flange Mount</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="b314">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="b314">Foot + Face Mount</label>
                </div>
              </div>
              </section>
              <!-- Section: End Cover -->

              <!-- Section: Body Material -->
              <section>

              <button type="button" class="collapsible font-weight-bold">Body Material</button>
              <div class="content">
                <div class="form-check pl-0 mb-3" style="margin-top:10px">
                  <input type="checkbox" class="form-check-input filled-in" id="cast">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="cast">Cast Iron</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="al">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="al">Aluminum</label>
                </div>
              </div>
              </section>
              <!-- Section: Body Material -->

              <!-- Section: Frame Size -->
              <section>

              <button type="button" class="collapsible font-weight-bold">Frame Size</button>
              <div class="content">
              <div style="height: 200px; overflow-y: auto; overflow-x: hidden;">
                <div class="form-check pl-0 mb-3" style="margin-top:10px">
                  <input type="checkbox" class="form-check-input filled-in" id="56">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="56">56</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="63">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="63">63</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="71">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="71">71</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="80">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="80">80</label>            
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="90">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="90">90</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="100">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="100">100</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="112">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="112">112</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="132">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="132">132</label>            
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="160">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="160">160</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="180">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="180">180</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="200">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="200">200</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="225">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="225">225</label>            
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="250">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="250">250</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="280">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="280">280</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="315">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="315">315</label>
                </div>
              </div>
              </dvi>
              </section>
              <!-- Section: Frame Size -->

              <!-- Section: Voltage -->
              <section>

              <button type="button" class="collapsible font-weight-bold">Voltage</button>
              <div class="content">
                <div class="form-check pl-0 mb-3" style="margin-top:10px">
                  <input type="checkbox" class="form-check-input filled-in" id="380">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="380">380 Volts</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="415">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="415">415 Volts</label>
                </div>
              </div>
              </section>
              <!-- Section: Voltage -->

              <!-- Section: Frequency -->
              <section>

              <button type="button" class="collapsible font-weight-bold">Frequency</button>
              <div class="content">
                <div class="form-check pl-0 mb-3" style="margin-top:10px">
                  <input type="checkbox" class="form-check-input filled-in" id="50">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="50">50 Hz</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="60">
                  <label class="form-check-label small text-uppercase card-link-secondary" for="60">60 Hz</label>
                </div>
              </div>
            </section>
              <!-- Section: Frequency -->
          </div>
          <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
              coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight){
                  content.style.maxHeight = null;
                } else {
                  content.style.maxHeight = content.scrollHeight + "px";
                } 
              });
            }
          </script>
        </aside>
        <main>
          <div class="item2" style="margin-left:30px;">
            <div class="col-md-3 col-lg-12 container">
              <div>
                <div class="row isotope-grid">
                  <?php
                    include_once("conection.php");
                    $showRecordPerPage =32;
                    if(isset($_GET['page']) && !empty($_GET['page'])){
                      $currentPage = $_GET['page'];
                    }else{
                      $currentPage = 1;
                    }
                    $startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
                    $totalEmpSQL = "SELECT * FROM productlist";
                    $allEmpResult = mysqli_query($conn, $totalEmpSQL);
                    $totalEmployee = mysqli_num_rows($allEmpResult);
                    $lastPage = ceil($totalEmployee/$showRecordPerPage);
                    $firstPage = 1;
                    $nextPage = $currentPage + 1;
                    $previousPage = $currentPage - 1;
                    $empSQL = "SELECT * FROM `productlist` LIMIT $startFrom, $showRecordPerPage";
                    $empResult = mysqli_query($conn, $empSQL);		
                    while($row = mysqli_fetch_assoc($empResult)){
                  ?>
                    <div>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item"><a href="productdetails.php?product_id=<?php echo $row['product_id']; ?> ">
                          <div class="block2">
                            <div class="block2-pic hov-img0">
                              <img src="assets/img/product/b3.jpg"class="block2-pic hov-img0"alt="Image"id="img1">
                              <a href="productdetails.php?product_id=<?php echo $row['product_id']; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">Quick View</a><br><br>
                            </div>
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                  <h4 class="stext-104" class="cl4 hov-cl1 trans-04 js-name-b2 p-b-6"><a><?php echo $row['product_name']; ?></a></h4>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
              
              <ul class="pagination">
                <?php if($currentPage != $firstPage) { ?>
                <li class="page-item">
                  <a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
                  <span aria-hidden="true">First</span>			
                  </a>
                </li>
                <?php } ?>
                <?php if($currentPage >= 2) { ?>
                  <li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
                <?php } ?>
                <li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
                <?php if($currentPage != $lastPage) { ?>
                  <li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
                  <li class="page-item"><a class="page-link" href="?page=<?php echo ($nextPage)+1 ?>"><?php echo ($nextPage)+1 ?></a></li>
                  <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
                    <span aria-hidden="true">Last</span>
                    </a>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </main>
      </div>
    </section>
  

  </main><!-- End #main -->
  <?php
      include('footer.php')
  ?>
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
	<script src="cs/vendor/daterangepicker/moment.min.js"></script>
	<script src="cs/vendor/daterangepicker/daterangepicker.js"></script>
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
	<script src="cs/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="cs/js/main.js"></script>
</body>

</html>