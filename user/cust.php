<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
$connection= mysqli_connect('localhost','root','','connect');

// $user_email= $_SESSION['user_email'];


$query= "SELECT * FROM `register_user` WHERE user_email='$user_email'";
$result= mysqli_query($connection,$query);

$row= mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DMW-MOTOR|Custom</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/DMW Logo_New.png" rel="icon">
    <link href="../assets/img/DMW Logo_New.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/eq.css" rel="stylesheet">
</head>
<body class="animsition">
		
    <br />

    <?php
        include('../navv.php');
    ?>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
            <li><a href="../index.php">Home</a></li>
            <li>Inner Page</li>
            </ol>
            <h2>Selector</h2>
        </div>
        <div class="container">
            <a href="logout.php">Logout</a>
        </div>
        </section>
    <div class="container">
    <br>
    <!-- Nav pills -->
    <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#home">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#menu1">Menu 1</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
    <form class="animated bounce" action="bookingaction.php" method="post" style="margin-left:450px;">
        <div id="home" class="container tab-pane active"><br>
        <h3>HOME</h3>
        <section class="inner-page" style="margin-right:20px;">
                
                    
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" class="form-control" name="name" require>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                                <div class="name">Company</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="company" require>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Email ID</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="email" name="user_email" require>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row m-b-55">
                                <div class="name">Phone</div>
                                <div class="value">
                                    <div class="row row-refine">
                                        <div class="col-3">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="text" size="4" disabled name="area_code" value="+91">
                                                <label class="label--desc">Area Code</label>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="input-group-desc">
                                                <input class="input--style-5" type="number" name="phone" require>
                                                <label class="label--desc">Phone Number</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        
                        <div class="input-group">
                            <a data-toggle="pill" href="#menu1" class="btn btn-success">Contiue</a>
                        </div>
                </section>
        </div>
        <div id="menu1" class="container tab-pane fade"><br>
        <h3>Menu 1</h3>
        <section class="inner-page" style="margin-right:20px;">
                <div class="row">
                    <div class="col-sm-4" style="margin-left:300px;">
                    <div class="form-row">
                    <div class="name">IE Rating</div>
                        <div class="value">
                            <div class="select">
                                <select name="ie" class="subject" required="true">
                                    <option disabled="disabled" selected="selected">IE</option>
                                    <option value="IE 2" >IE 2</option>
                                    <option value="IE 3" >IE 3</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">phase</div>
                        <div class="value"	>
                            <div class="select2">
                                <select name="phase" class="subject" required="true">
                                    <option disabled="disabled" selected="selected">Phase</option>
                                    <option value="1 Phase csr" >1 Phase csr</option>
                                    <option value="1 Phase cscr" >1 Phase cscr</option>
                                    <option value="3 Phase" >3 Phase</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Power Rating</div>
                        <div class="value">
                            <div class="select">
                                <select name="output" class="subject" required="true">
                                    <option disabled="disabled" selected="selected">Output Power</option>
                                    <option value="0.12kw/0.16hp" >0.12kw/0.16hp</option>
                                    <option value="0.18kw/0.25hp" >0.18kw/0.25hp</option>
                                    <option value="0.25kw/0.33hp" >0.25kw/0.33hp</option>
                                    <option value="0.37kw/0.5hp" >0.37kw/0.5hp</option>
                                    <option value="0.55kw/0.75hp" >0.55kw/0.75hp</option>
                                    <option value="0.75kw/1hp" >0.75kw/1hp</option>
                                    <option value="1.10kw/1.5hp" >1.10kw/1.5hp</option>
                                    <option value="1.50kw/2hp" >1.50kw/2hp</option>
                                    <option value="2.20kw/3hp" >2.20kw/3hp</option>
                                    <option value="3.7kw/5hp" >3.7kw/5hp</option>
                                    <option value="5.50kw/7.5hp" >5.50kw/7.5hp</option>
                                    <option value="7.5kw/10hp" >7.5kw/10hp</option>
                                    <option value="11kw/15hp" >11kw/15hp</option>
                                    <option value="15kw/20hp" >15kw/20hp</option>
                                    <option value="18.5kw/25hp" >18.5kw/25hp</option>
                                    <option value="22kw/30hp" >22kw/30hp</option>
                                    <option value="30kw/40hp" >30kw/40hp</option>
                                    <option value="37kw/50hp" >37kw/50hp</option>
                                    <option value="45kw/60hp" >45kw/60hp</option>
                                    <option value="55kw/75hp" >55kw/75hp</option>
                                    <option value="75kw/100hp" >75kw/100hp</option>
                                </select>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row m-b-55">
                        <div class="name">Poles</div>
                        <div class="value">
                                <select name="poles" class="subject" required="true">
                                    <option disabled="disabled" selected="selected">Poles</option>
                                    <option value="2 Poles" >2 Poles</option>
                                    <option value="4 Poles" >4 Poles</option>
                                    <option value="6 Poles" >6 Poles</option>
                                    <option value="8 Poles" >8 Poles</option>
                                </select>
                                <div class="select-dropdown"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">RPM</div>
                        <div class="value">
                            <select name="rpm" class="subject" required="true">
                                <option disabled="disabled" selected="selected">RPM</option>
                                <option value="3600 RPM" >3600 RPM</option>
                                <option value="3000 RPM" >3000 RPM</option>
                                <option value="1800 RPM" >1800 RPM</option>
                                <option value="1500 RPM" >1500 RPM</option>
                                <option value="1200 RPM" >1200 RPM</option>
                                <option value="1000 RPM" >1000 RPM</option>
                                <option value="900 RPM" >900 RPM</option>
                                <option value="750 RPM" >750 RPM</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">End Cover</div>
                        <div class="value">
                                <select name="mount" class="subject" required="true">
                                    <option disabled="disabled" selected="selected">Mounts</option>
                                    <option value="Foot Mount" >Foot Mount</option>
                                    <option value="Flange Mount" >Flange Mount</option>
                                    <option value="Face Mount" >Face Mount</option>
                                    <option value="Foot + Flange Mount" >Foot + Flange Mount</option>
                                    <option value="Foot + Face Mount" >Foot + Face Mount</option>
                                </select>
                                <div class="select-dropdown"></div>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-4" style="margin-left:50px">
                    <div class="form-row">
                        <div class="name">Body Material</div>
                            <div class="value">
                                <select name="body_material" class="subject" required="true">
                                    <option disabled="disabled" selected="selected">Material</option>
                                    <option value="Cast Iron" >Cast Iron</option>
                                    <option value="Aluminum" >Aluminum</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Frame Size</div>
                        <div class="value">
                            <select name="frame_size" class="subject" required="true">
                                <option disabled="disabled" selected="selected">Frame Size</option>
                                <option value="56" >56</option>
                                <option value="63" >63</option>
                                <option value="71" >71</option>
                                <option value="80" >80</option>
                                <option value="90" >90</option>
                                <option value="100" >100</option>
                                <option value="112" >112</option>
                                <option value="132" >132</option>
                                <option value="160" >160</option>
                                <option value="180" >180</option>
                                <option value="200" >200</option>
                                <option value="225" >225</option>
                                <option value="250" >250</option>
                                <option value="280" >280</option>
                                <option value="315" >315</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="name">Voltage</div>
                        <div class="value">
                            <select name="volts" class="subject" required="true">
                                <option disabled="disabled" selected="selected">VOLTS</option>
                                <option value="380 Volts" >380 Volts</option>
                                <option value="415 Volts" >415 Volts</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Frequency</div>
                            <div class="value">
                            <select name="frequency" class="subject" required="true">
                                <option disabled="disabled" selected="selected">Hz</option>
                                <option value="50 Hz" >50 Hz</option>
                                <option value="60 Hz" >60 Hz</option>
                            </select>
                            <div class="select-dropdown"></div>
                            </div>
                        </div>          
                        <div class="form-row">
                            <div class="name">IP Rating</div>
                            <div class="value">
                                <select name="ip" class="subject" required="true">
                                    <option disabled="disabled" selected="selected">IP Protection</option>
                                    <option value="IP 44" >IP 44</option>
                                    <option value="IP 55" >IP 55</option>
                                    <option value="IP 65" >IP 65</option>
                                    <option value="IP 66" >IP 66</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Insulation</div>
                            <div class="value">
                                <select name="insulation" class="subject" required="true">
                                    <option value="F">F</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                <center><div class="name"><strong>Message</strong></div> </center>
                    <div class="value">
                        <center><textarea name="message" id="message" cols="60" rows="8" placeholder="Enter your Message here" required="true"></textarea></center>
                    </div>
                </div>
                <div>
                <br>
                <div>
                        <center>  <button class="btn btn--radius-2 btn--red" name="submit" type="submit">send a Query</button> </center>
                </div>
               
                </section>

        </div>
    </div>
    </div>
    </form>
    <?php
        include('../footer.php')
    ?>
    <div id="preloader"></div>
    <a href="https://wa.me/919994242696" target="_blank" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a>
	<!-- <script>
			function phonenumber(inputtxt)
			{
			var phoneno = /^\d{10}$/;
			if((inputtxt.value.match(phone))
					{
				return true;
					}
				else
					{
					alert("message");
					return false;
					}
			}
	</script> -->
    <!-- Vendor JS Files -->
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
</body>
</html>
