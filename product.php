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

  <link rel="stylesheet" type="text/css" href="cs/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cs/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cs/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cs/fonts/linearicons-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cs/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="cs/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cs/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="cs/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cs/vendor/slick/slick.css">
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="cs/vendor/MagnificPopup/magnific-popup.css"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cs/vendor/perfect-scrollbar/perfect-scrollbar.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="cs/css/util.css">
	<link rel="stylesheet" type="text/css" href="cs/css/main.css">
 
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
        
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="container">
      <div class="grid-container"  style="margin-top: -22px;">
        <aside class="main-sidebar"  style="margin-left: -170px">
          <!-- Section: Filters -->
          <div>
            <div class="item1" id="myBtnContainer"> 
              <h5>Filters</h5>
              <button type="button" class="collapsible font-weight-bold" onclick="filterSelection('all')">Default</button>
              <!-- Section: IE Rating -->
              <section style="margin-top:10px">
                <button type="button" class="collapsible font-weight-bold">IE Rating</button>
                <div class="content">
                  <div class="form-check pl-0 mb-3" style="margin-top:10px">
                    <input type="checkbox" class="form-check-input filled-in" id="IE2">
                    <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('ie2')" for="IE2">IE2</label>
                  </div>
                  <div class="form-check pl-0 mb-3">
                    <input type="checkbox" class="form-check-input filled-in" id="IE3">
                    <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('ie3')" for="IE3">IE3</label>
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
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('1csr')" for="1csr">1 Phase csr</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="1cscr">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('1cscr')" for="1cscr">1 Phase cscr</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="3pahse">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('3phase')" for="3phase">3 Phase</label>
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
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('0.12/0.16')" for="0.12/0.16">0.12kw/0.16hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="0.18/0.25">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('0.18/0.25')" for="0.18/0.25">0.18kw/0.25hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="0.25/0.33">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('0.25/0.33')" for="0.25/0.33">0.25kw/0.33hp</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="0.37/0.5">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('0.37/0.5')" for="0.37/0.5">0.37kw/0.5hp</label>            
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="0.55/0.75">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('0.55/0.75')" for="0.55/0.75">0.55kw/0.75hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="0.75/1">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('0.75/1')" for="0.75/1">0.75kw/1hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="1.10/1.5">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('1.10/1.5')" for="1.10/1.5">1.10kw/1.5hp</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="1.50/2">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('1.50/2')" for="1.50/2">1.50kw/2hp</label>            
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="2.20/3">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('2.20/3')" for="2.20/3">2.20kw/3hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="3.7/5">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('3.7/5')" for="3.7/5">3.7kw/5hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="5.5/7.5">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('5.5/7.5')" for="5.5/7.5">5.50kw/7.5hp</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="7.5/10">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('7.5/10')" for="7.5/10">7.5kw/10hp</label>            
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="11/15">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('11/15')" for="11/15">11kw/15hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="15/20">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('15/20')" for="15/20">15kw/20hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="18.5/25">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('18.5/25')" for="18.5/25">18.5kw/25hp</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="22/30">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('22/30')" for="22/30">22kw/30hp</label>            
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="30/40">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('30/40')" for="30/40">30kw/40hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="37/50">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('37/50')" for="37/50">37kw/50hp</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="45/60">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('45/60')" for="45/60">45kw/60hp</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="55/75">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('55/75')" for="55/75">55kw/75hp</label>            
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="75/100">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('75/100')" for="75/100">75kw/100hp</label>            
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
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('2pole')" for="2pole">2 Poles</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="4pole">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('4pole')" for="4pole">4 Poles</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="6pole">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('6pole')" for="6pole">6 Poles</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="8pole">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('8pole')" for="8pole">8 poles</label>
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
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('3600rpm')" for="3600rpm">3600 RPM</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="3000rpm">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('3000rpm')" for="3000rpm">3000 RPM</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="1800rpm">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('1800rpm')" for="1800rpm">1800 RPM</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="1500rpm">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('1500rpm')" for="1500rpm">1500 RPM</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="1200rpm">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('1200rpm')" for="1200rpm">1200 RPM</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="1000rpm">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('1000rpm')" for="1000rpm">1000 RPM</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="900rpm">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('900rpm')" for="900rpm">900 RPM</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="750rpm">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('750rpm')" for="750rpm">750 RPM</label>
                </div>
              <div>
              </section>
              <!-- Section: RPM -->

              <!-- Section: End Cover -->
              <section>

              <button type="button" class="collapsible font-weight-bold">End Cover</button>
              <div class="content">

                <div class="form-check pl-0 mb-3" style="margin-top:10px">
                  <input type="checkbox" class="form-check-input filled-in" id="B3">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('B3')" for="B3">Foot Mount</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="B5">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('B5')" for="B5">Flange Mount</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="B14">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('B14')" for="B14">Face Mount</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="B35">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('B35')" for="B35">Foot + Flange Mount</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="B314">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('B314')" for="B314">Foot + Face Mount</label>
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
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('iron')" for="iron">Cast Iron</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="al">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('al')" for="al">Aluminum</label>
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
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('56')" for="56">56</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="63">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('63')" for="63">63</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="71">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('71')" for="71">71</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="80">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('80')" for="80">80</label>            
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="90">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('90')" for="90">90</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="100">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('100')" for="100">100</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="112">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('112')" for="112">112</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="132">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('132')" for="132">132</label>            
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="160">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('160')" for="160">160</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="180">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('180')" for="180">180</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="200">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('200')" for="200">200</label>
                </div>
                <div class="form-check pl-0 mb-3 pb-1">
                  <input type="checkbox" class="form-check-input filled-in" id="225">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('225')" for="225">225</label>            
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="250">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('250')" for="250">250</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="280">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('280')" for="280">280</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="315">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('315')" for="315">315</label>
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
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('380')" for="380">380 Volts</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="415">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('415')" for="415">415 Volts</label>
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
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('50')" for="50">50 Hz</label>
                </div>
                <div class="form-check pl-0 mb-3">
                  <input type="checkbox" class="form-check-input filled-in" id="60">
                  <label class="form-check-label small text-uppercase card-link-secondary bt" onclick="filterSelection('60')" for="60">60 Hz</label>
                </div>
              </div>
              </section>
              <!-- Section: Frequency -->
            </div>
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
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3" >
        <div class="item2" >
          <div class="col-md-3 col-lg-12">
            <div class="container">
              <div class="row isotope-grid">
                
                  <!-- Block2 -->
                <?php 
                  $con = mysqli_connect("localhost","root","","connection");
                  $limit = 32;

                  if(isset($_GET['page'])){
                      $page = $_GET['page'];
                  }else{
                      $page = 1;
                  }

                  $offset = ($page - 1) * $limit;
                  $sql = "SELECT * from productlist LIMIT $offset, $limit";
                  $res = mysqli_query($con, $sql);
                  while($row = mysqli_fetch_assoc($res)){
                ?>
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item  filterDiv <?php echo $row['poles']; ?> <?php echo $row['output']; ?> <?php echo $row['ie']; ?> <?php echo $row['phase']; ?> <?php echo $row['rpm']; ?> <?php echo $row['volts']; ?> <?php echo $row['body_material']; ?> <?php echo $row['mount']; ?> <?php echo $row['frame_size']; ?> <?php echo $row['frequency']; ?> "><a href="productdetails.php?product_id=<?php echo $row['product_id']; ?> ">
                  <div class="block2">
                    <div class="block2-pic hov-img0">
                      <img src="assets/img/product/b3.jpg"class="block2-pic hov-img0"alt="Image"id="img1">
                      <a href="productdetails.php?product_id=<?php echo $row['product_id']; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">Quick View</a><br><br>
                    </div>
                    <div class="block2-txt flex-w flex-t p-t-14">
                      <div class="block2-txt-child1 flex-col-l ">
                        <h4 class="stext-104" class="cl4 hov-cl1 trans-04 js-name-b2 p-b-6"><?php echo $row['product_name']; ?></a></h4>
                        <p class="text-justify stext-105 cl3"><?php echo substr($row['details'],0,100); ?></p><br>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
                <?php    
                  $sql = "SELECT COUNT(*) from productlist";
                  $res = mysqli_query($con, $sql);
                  $total_rows = mysqli_fetch_array($res)[0];
                  $total_page = ceil($total_rows / $limit);
                ?>

              <ul class="pagination">
                  <a class="nav-link-left nav-link" href="?page=1"><i class="fas fa-angle-double-left"></i></a>
                  <a class="nav-link" href="<?php if($page <= 1){echo '#';}else{echo "?page=".$page -1;} ?>"><i class="fas fa-caret-left"></i></a>
                  <?php 
                      for($i = 1; $i <= $total_page; $i++){
                          if($page == $i){
                              echo "<a class='active links' href='?page=$i'>".$i."</a>";
                          }else{
                              echo "<a class='links' href='?page=$i'>".$i."</a>";
                          }
                      }
                  ?>
                  <a class="nav-link" href="<?php if($page == $total_page ){echo '#';}else{echo "?page=".$page + 1;} ?>"><i class="fas fa-caret-right"></i></a>
                  <a class="nav-link-right nav-link" href="?page=<?php echo $total_page;?>"><i class="fas fa-angle-double-right"></i></a>
              </ul>
            </div>  
	        </div>
        </div>

      </main>
    </div>
  </section>
  <script>
    filterSelection("all")
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("filterDiv");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
      }
    }

    function AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
      }
    }

    function RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);     
        }
      }
      element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("bt");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script>
  <script src="cs/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="cs/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="cs/vendor/bootstrap/js/popper.js"></script>
	<script src="cs/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="cs/vendor/slick/slick.min.js"></script>
	<script src="cs/js/slick-custom.js"></script>
  <script src="cs/vendor/parallax100/parallax100.js"></script>
  <script src="cs/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="cs/js/main.js"></script>
  </main><!-- End #main -->
  <?php
      include('footer.php')
  ?>
  <a href="https://wa.me/919994242696" target="_blank" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
	
</body>

</html>