<?php 

session_start();
include('conection.php');
if($eid=="")
{
header('location:login.php');
}
$sql= mysqli_query($conn,"select * from enquiry where email='$eid' "); 
$result=mysqli_fetch_assoc($sql);
//print_r($result);
extract($_REQUEST);
error_reporting(1);
if(isset($savedata))
{
  $sql="insert into enquiry(orderid,phase,ie,output,poles,rpm,mount,body_material,frame_size,volts,frequency,ip,insulation,message,email) 
  values('','$phase','$ie','$output','$poles','$rpm','$mount','$body_material','$frame_size','$volts','$frequency','$ip','$insulation','$message','$eid')";
   if(mysqli_query($conn,$sql))
   {
   $msg= "<h1 style='color:platinum'>You have Successfully booked this event</h1>"; 
   }
   else
    {
     $msg= "<h1 style='color:red'>not booked</h1>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inner Page - Multi Bootstrap Template</title>
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/eq.css" rel="stylesheet">

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
          <li>Inner Page</li>
        </ol>
        <h2>Selector</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <form action="query_form.php" method="POST">
      <div class="row">
        <div class="col-sm-4" style="margin-left:350px">
          <div class="form-row">
           <div class="name">IE Rating</div>
              <div class="value">
                <div class="select">
                    <select name="ie" class="subject">
                        <option disabled="disabled" selected="selected">IE</option>
                        <option>IE 2</option>
                        <option>IE 3</option>
                    </select>
                    <div class="select-dropdown"></div>
                </div>
              </div>
          </div>
          <div class="form-row">
              <div class="name">phase</div>
              <div class="value">
              <div class="select2">
                    <select name="phase" class="subject">
                        <option disabled="disabled" selected="selected">Phase</option>
                        <option>1 Phase csr</option>
                        <option>1 Phase cscr</option>
                        <option>3 Phase</option>
                    </select>
                    <div class="select-dropdown"></div>
                </div>
              </div>
          </div>
          <div class="form-row">
              <div class="name">Power Rating</div>
              <div class="value">
                <div class="select">
                    <select name="output" class="subject">
                        <option disabled="disabled" selected="selected">Output Power</option>
                        <option>0.12kw/0.16hp</option>
                        <option>0.18kw/0.25hp</option>
                        <option>0.25kw/0.33hp</option>
                        <option>0.37kw/0.5hp</option>
                        <option>0.55kw/0.75hp</option>
                        <option>0.75kw/1hp</option>
                        <option>1.10kw/1.5hp</option>
                        <option>1.50kw/2hp</option>
                        <option>2.20kw/3hp</option>
                        <option>3.7kw/5hp</option>
                        <option>5.50kw/7.5hp</option>
                        <option>7.5kw/10hp</option>
                        <option>11kw/15hp</option>
                        <option>15kw/20hp</option>
                        <option>18.5kw/25hp</option>
                        <option>22kw/30hp</option>
                        <option>30kw/40hp</option>
                        <option>37kw/50hp</option>
                        <option>45kw/60hp</option>
                        <option>55kw/75hp</option>
                        <option>75kw/100hp</option>
                    </select>
                    </select>
                    <div class="select-dropdown"></div>
                </div>
              </div>
          </div>
          <div class="form-row m-b-55">
              <div class="name">Poles</div>
              <div class="value">
                    <select name="poles" class="subject">
                        <option disabled="disabled" selected="selected">Poles</option>
                        <option>2 Poles</option>
                        <option>4 Poles</option>
                        <option>6 Poles</option>
                        <option>8 Poles</option>
                    </select>
                    <div class="select-dropdown"></div>
              </div>
          </div>
          <div class="form-row">
              <div class="name">RPM</div>
              <div class="value">
                <select name="rpm" class="subject">
                    <option disabled="disabled" selected="selected">RPM</option>
                    <option>3600 RPM</option>
                    <option>3000 RPM</option>
                    <option>1800 RPM</option>
                    <option>1500 RPM</option>
                    <option>1200 RPM</option>
                    <option>1000 RPM</option>
                    <option>900 RPM</option>
                    <option>750 RPM</option>
                </select>
                <div class="select-dropdown"></div>
              </div>
          </div>
          <div class="form-row">
              <div class="name">End Cover</div>
              <div class="value">
                    <select name="mount" class="subject">
                        <option disabled="disabled" selected="selected">Mounts</option>
                        <option>Foot Mount</option>
                        <option>Flange Mount</option>
                        <option>Face Mount</option>
                        <option>Foot + Flange Mount</option>
                        <option>Foot + Face Mount</option>
                    </select>
                    <div class="select-dropdown"></div>
              </div>
          </div>
        </div>
        <div class="col-sm-4" style="margin-left:50px">
          <div class="form-row">
              <div class="name">Body Material</div>
                <div class="value">
                    <select name="body_material" class="subject">
                        <option disabled="disabled" selected="selected">Material</option>
                        <option>Cast Iron</option>
                        <option>Aluminum</option>
                    </select>
                    <div class="select-dropdown"></div>
                </div>
          </div>
          <div class="form-row">
            <div class="name">Frame Size</div>
              <div class="value">
                <select name="frame_size" class="subject">
                    <option disabled="disabled" selected="selected">Frame Size</option>
                    <option>56</option>
                    <option>63</option>
                    <option>71</option>
                    <option>80</option>
                    <option>90</option>
                    <option>100</option>
                    <option>112</option>
                    <option>132</option>
                    <option>160</option>
                    <option>180</option>
                    <option>200</option>
                    <option>225</option>
                    <option>250</option>
                    <option>280</option>
                    <option>315</option>
                </select>
                <div class="select-dropdown"></div>
              </div>
          </div>
          <div class="form-row">
          <div class="name">Voltage</div>
              <div class="value">
                <select name="volts" class="subject">
                    <option disabled="disabled" selected="selected">VOLTS</option>
                    <option>380 Volts</option>
                    <option>415 Volts</option>
                </select>
                <div class="select-dropdown"></div>
              </div>
          </div>
          <div class="form-row">
            <div class="name">Frequency</div>
                <div class="value">
                  <select name="frequency" class="subject">
                      <option disabled="disabled" selected="selected">Hz</option>
                      <option>50 Hz</option>
                      <option>60 Hz</option>
                  </select>
                  <div class="select-dropdown"></div>
                </div>
            </div>          
            <div class="form-row">
                <div class="name">IP Rating</div>
                <div class="value">
                    <select name="ip" class="subject">
                        <option disabled="disabled" selected="selected">IP Protection</option>
                        <option>IP 44</option>
                        <option>IP 55</option>
                        <option>IP 65</option>
                        <option>IP 66</option>
                    </select>
                    <div class="select-dropdown"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="name">Insulation</div>
                <div class="value">
                    <select name="insulation" class="subject">
                        <option disabled="disabled" selected="selected">F</option>
                    </select>
                    <div class="select-dropdown"></div>
                </div>
            </div>
        </div>
      </div>
      <div>
      <center><div class="name"><strong>Message</strong></div> </center>
        <div class="value">
            <center><textarea name="message" id="message" cols="60" rows="8" placeholder="Enter your Message here"></textarea></center>
        </div>
      </div>
      <div>
      <center><div class="name"><strong>Message</strong></div> </center>
        <div class="value">
            <center><input type="email" name="eid" placeholder="email"></center>
        </div>
      </div>
      
      <div>
            <center>  <button class="btn btn--radius-2 btn--red" type="submit">send a Query</button> </center>
      </div>
      </form>
    </section>

  </main><!-- End #main -->

  <?php
    include('footer.php')
  ?>
  <div id="preloader"></div>
  <a href="https://wa.me/919994242696" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
      output.innerHTML = this.value;
    }
  </script>
</body>

</html>