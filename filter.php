<?php

    session_start();
    require 'conection.php';
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
  <!---============================================================================================--->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
          <li><a href="productslist.php">Products</a></li>
          <li>Product List</li>
        </ol>
        <div class="wrap-icon-header flex-w flex-r-m">
          <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
            <i class="zmdi zmdi-search"></i>
          </div>

          <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
            <i class="zmdi zmdi-shopping-cart"></i>
          </div>
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
						<div class="header-cart-item-img">
							<img src="images/item-cart-01.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								White Shirt Pleat
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    <section class="container">
        <div class="grid-container">
            <aside class="main-sidebar" style="margin-left:-90px">
                <!-- Section: Filters -->        
                <div class="item1" style="margin-left:-110px; margin-top:-22px;">
                    <h5>Filters</h5>
                    <!-- Section: IE Rating -->
                    <section>
                        <button type="button" class="collapsible font-weight-bold">IE Rating</button>
                        <div class="content">
                            <ul class="list-group">
                                <?php
                                    $sql="SELECT DISTINCT ie from `productlist` ORDER BY ie";
                                    $result=$conn->query($sql);
                                    while($row=$result->fetch_assoc()){
                                ?>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <label>
                                            <div>
                                                <input type="checkbox" class="form-check-input filled-in product_check" value="<?php echo $row['ie']; ?>" id="ie">
                                                <label class="form-check-label small text-uppercase card-link-secondary"><?php echo $row['ie'];?></label>
                                            </div>
                                        </label>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </section>
                    
                    <section>
                        <button type="button" class="collapsible font-weight-bold">phase</button>
                        <div class="content">
                            <ul class="list-group">
                                <?php
                                    $sql="SELECT DISTINCT phase from `productlist` ORDER BY phase";
                                    $result=$conn->query($sql);
                                    while($row=$result->fetch_assoc()){
                                ?>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <label>
                                            <div>
                                                <input type="checkbox" class="form-check-input filled-in product_check" value="<?php echo $row['phase']; ?>" id="phase">
                                                <label class="form-check-label small text-uppercase card-link-secondary"><?php echo $row['phase'];?></label>
                                            </div>
                                        </label>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </section>

                    <section>
                        <button type="button" class="collapsible font-weight-bold">Output</button>
                        <div class="content">
                            <div style="height: 220px; overflow-y: auto; overflow-x: hidden;">
                                <ul class="list-group">
                                    <?php
                                        $sql="SELECT DISTINCT output from `productlist` ORDER BY output";
                                        $result=$conn->query($sql);
                                        while($row=$result->fetch_assoc()){
                                    ?>
                                    <li class="list-group-item">
                                        <div class="form-check">
                                            <label>
                                                <div>
                                                    <input type="checkbox" class="form-check-input filled-in product_check" value="<?php echo $row['output']; ?>" id="output">
                                                    <label class="form-check-label small text-uppercase card-link-secondary"><?php echo $row['output'];?></label>
                                                </div>
                                            </label>
                                        </div>
                                    </li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            <div>
                        </div>
                    </section>

                    <section style="margin-top:10px">
                        <button type="button" class="collapsible font-weight-bold">poles</button>
                        <div class="content">
                            <ul class="list-group">
                                <?php
                                    $sql="SELECT DISTINCT poles from `productlist` ORDER BY poles";
                                    $result=$conn->query($sql);
                                    while($row=$result->fetch_assoc()){
                                ?>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <div class="form-check pl-0 mb-3" style="margin-top:10px">
                                                <input type="checkbox" class="form-check-input filled-in product_check" value="<?php echo $row['poles']; ?>" id="poles">
                                                <label class="form-check-label small text-uppercase card-link-secondary"><?php echo $row['poles'];?></label>
                                            </div>
                                        </label>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </section>

                    <section style="margin-top:10px">
                        <button type="button" class="collapsible font-weight-bold">RPM</button>
                        <div class="content">
                            <ul class="list-group">
                                <?php
                                    $sql="SELECT DISTINCT rpm from `productlist` ORDER BY rpm";
                                    $result=$conn->query($sql);
                                    while($row=$result->fetch_assoc()){
                                ?>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <div class="form-check pl-0 mb-3" style="margin-top:10px">
                                                <input type="checkbox" class="form-check-input filled-in product_check" value="<?php echo $row['rpm']; ?>" id="rpm">
                                                <label class="form-check-label small text-uppercase card-link-secondary"><?php echo $row['rpm'];?></label>
                                            </div>
                                        </label>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </section>

                    <section style="margin-top:10px">
                        <button type="button" class="collapsible font-weight-bold">Mount</button>
                        <div class="content">
                            <ul class="list-group">
                                <?php
                                    $sql="SELECT DISTINCT mount from `productlist` ORDER BY mount";
                                    $result=$conn->query($sql);
                                    while($row=$result->fetch_assoc()){
                                ?>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <div class="form-check pl-0 mb-3" style="margin-top:10px">
                                                <input type="checkbox" class="form-check-input filled-in product_check" value="<?php echo $row['mount']; ?>" id="mount">
                                                <label class="form-check-label small text-uppercase card-link-secondary"><?php echo $row['mount'];?></label>
                                            </div>
                                        </label>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </section>

                    <section style="margin-top:10px">
                        <button type="button" class="collapsible font-weight-bold">Body Material</button>
                        <div class="content">
                            <ul class="list-group">
                                <?php
                                    $sql="SELECT DISTINCT body_material from `productlist` ORDER BY body_material";
                                    $result=$conn->query($sql);
                                    while($row=$result->fetch_assoc()){
                                ?>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <div class="form-check pl-0 mb-3" style="margin-top:10px">
                                                <input type="checkbox" class="form-check-input filled-in product_check" value="<?php echo $row['body_material']; ?>" id="body_material">
                                                <label class="form-check-label small text-uppercase card-link-secondary"><?php echo $row['body_material'];?></label>
                                            </div>
                                        </label>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </section>

                    <section style="margin-top:10px">
                        <button type="button" class="collapsible font-weight-bold">Frame Size</button>
                        <div class="content">
                            <ul class="list-group">
                                <?php
                                    $sql="SELECT DISTINCT frame_size from `productlist` ORDER BY frame_size";
                                    $result=$conn->query($sql);
                                    while($row=$result->fetch_assoc()){
                                ?>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <div class="form-check pl-0 mb-3" style="margin-top:10px">
                                                <input type="checkbox" class="form-check-input filled-in product_check" value="<?php echo $row['frame_size']; ?>" id="frame_size">
                                                <label class="form-check-label small text-uppercase card-link-secondary"><?php echo $row['frame_size'];?></label>
                                            </div>
                                        </label>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </section>

                    <section style="margin-top:10px">
                        <button type="button" class="collapsible font-weight-bold">Volts</button>
                        <div class="content">
                            <ul class="list-group">
                                <?php
                                    $sql="SELECT DISTINCT volts from `productlist` ORDER BY volts";
                                    $result=$conn->query($sql);
                                    while($row=$result->fetch_assoc()){
                                ?>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <div class="form-check pl-0 mb-3" style="margin-top:10px">
                                                <input type="checkbox" class="form-check-input filled-in product_check" value="<?php echo $row['volts']; ?>" id="volts">
                                                <label class="form-check-label small text-uppercase card-link-secondary"><?php echo $row['volts'];?></label>
                                            </div>
                                        </label>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </section>

                    <section style="margin-top:10px">
                        <button type="button" class="collapsible font-weight-bold">Frequency</button>
                        <div class="content">
                            <ul class="list-group">
                                <?php
                                    $sql="SELECT DISTINCT frequency from `productlist` ORDER BY frequency";
                                    $result=$conn->query($sql);
                                    while($row=$result->fetch_assoc()){
                                ?>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <div class="form-check pl-0 mb-3" style="margin-top:10px">
                                                <input type="checkbox" class="form-check-input filled-in product_check" value="<?php echo $row['frequency']; ?>" id="frequency">
                                                <label class="form-check-label small text-uppercase card-link-secondary"><?php echo $row['frequency'];?></label>
                                            </div>
                                        </label>
                                    </div>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </section>
                
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
            <main style="margin-top: -22px; margin-left: 30px;" >
                <div class="item2">
                    <div class="col-md-3 col-lg-12">
                        <div class="container">
                            <div class="row isotope-grid" id="result">
                                <?php
                                    $sql = "SELECT * FROM `productlist` LIMIT $startFrom, $showRecordPerPage";
                                    $result=$conn->query($sql);
                                    while($row=$result->fetch_assoc()){
                                ?>
                                <div class="list-item">
                                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item"><a href="productdetails.php?product_id=<?php echo $row['product_id']; ?> "></a>
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
                                <?php
                                    }
                                ?>

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
    <script type="text/javascript">
    $(document).ready(function(){

        $(".product_check").click(function(){
            var action='data';
            var ie = get_filter_text('ie');
            var phase = get_filter_text('phase');
            var output = get_filter_text('output');
            var poles = get_filter_text('poles');
            var rpm = get_filter_text('rpm');
            var mount = get_filter_text('mount');
            var body_material = get_filter_text('body_material');
            var frame_size = get_filter_text('frame_size');
            var volts = get_filter_text('volts');
            var frequency = get_filter_text('frequency');

            $.ajax({
                url:'action.php',
                method:'POST',
                data:{action:action,ie:ie,phase:phase,poles:poles,output:output,rpm:rpm,mount:mount,body_material:body_material,frame_size:frame_size,volts:volts,frequency:frequency},
                    success:function(response){
                        $("#result").html(response);
                        $("#textchange").text("Filtered Product");
                    }
            });

        });

        function get_filter_text(text_id){
            var filterData=[];
            $('#'+text_id+':checked').each(function(){
                filterData.push($(this).val());
            });
            return filterData;
        }
    });
    </script>
 </main><!-- End #main -->
   <?php
       include('footer.php')
   ?>
   <!-- <div id="preloader"></div> -->
   <a href="https://wa.me/919994242696" target="_blank" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
   
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