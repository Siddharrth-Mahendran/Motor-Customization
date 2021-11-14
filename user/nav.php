  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="../index.php" class="logo"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="../index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="../index.php">About Us</a></li>
          <li class="dropdown"><a href="../productslist.php"><span>Products</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="../motor.php"><span>Motor</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="../ie.php">IE Rating</a></li>
                  <li><a href="../sm.php">Special Motor</a></li>
                  <li><a href="../bm.php">Body Material</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="../gb.php"><span>Gear Box</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                    <li><a href="../gb.php">Helical Motor</a></li>
                    <li><a href="../gb.php">Worn Motor</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#facilities">facilities</a></li>
          <li><a class="nav-link scrollto" href="../index.php">Contact</a></li>
          <li><a class="nav-link scrollto" href="../chat/login.php">Support</a></li>
          <li><a class="nav-link scrollto" href="../admin/index.php">Admin</a></li>
          <li><a href="user/index.php" class="btn-learn-more">Get a Quote</a></li>
          <?php if(!isset($_SESSION["user_id"]))
            {
          ?>
          <li class="dropdown"><a href="../index.php" class="bi bi-person-plus-fill"></a>
            <ul>
              <li class="dropdown"><a href="login.php"><span>Sign in</span></a>
              <li class="dropdown"><a href="register.php"><span>Sign up</span></a>
            </ul>
          </li>
          <?php 
            }else{
          ?>
          <li class="dropdown"><a href="../about_me.php" class="bi bi-person-circle"></a>
            <ul>
              <li class="dropdown"><a href="../about_me.php"><span>View Profile</span></a>
              <li class="dropdown"><a href="logout.php"><span>logout</span></a>
            </ul>
          </li>
          <?php   
            }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->