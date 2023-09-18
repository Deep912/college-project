<!doctype html>
<?php include("./dynamic/connection.php");

// Check if the user is logged in (session exists)
if (isset($_SESSION['user'])) {
  $email = $_SESSION['email'];
  $sql = "SELECT * FROM reservations WHERE usermail = '$email'";
  $result = mysqli_query($conn, $sql);
  

?>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="./Admin/dynamic/images/required/BMWlogo.png">

    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/customstyle.css">
    <link rel="stylesheet" href="css/profilestyle.css">
    <title>BMW</title>`
  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center">

            <div class="col-11 col-xl-2">
              <h1 class="mb-0 site-logo"><a href="index.php" class="mb-0">BMW<span class="text-primary"></span> </a></h1>
            </div>
            <div class="col-12 col-md-10 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right" role="navigation">

                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                  <!-- <li><a href="#home-section" class="nav-link">Home</a></li> -->
                  <li><a href="index.php" class="nav-link">Home</a></li>
                  <li><a href="cars.php" class="nav-link">Cars</a></li>
                  <li>
                    <a href="#services-section" class="nav-link">Services</a>
                  </li>
                  <li><a href="#blog-section" class="nav-link">About</a></li>
                  <li><a href="#contact-section" class="nav-link">Contact</a></li>
                  <li><a href="./dynamic/signout.php" class="nav-link">Sign Out</a></li>
                </ul>
              </nav>
            </div>


            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>


      </header>
    </div>


    <div class="profile">
      <div class="profile mt-5">

        <div class="row d-flex justify-content-center">

          <div class="col-md-7">

            <div class="card p-3 py-4">

              <div class="text-center mt-3">
                
                <h5 class="mt-2 mb-4">Welcome <?php echo $_SESSION['user']; ?></h5>
                <span class="bg-secondary p-1 px-4 rounded text-white">Your Cars</span>

                <div class="px-4 mt-1"> <?php
                $sql = "SELECT carmodel FROM reservations WHERE usermail = '$email'";
          $resultforindex = $conn->query($sql);
          if (mysqli_num_rows($resultforindex) > 0) {
            $data = mysqli_fetch_all($resultforindex, MYSQLI_ASSOC);
            for ($i = 0; $i < count($data); $i++) { ?>
                    <h4 class="fonts"> <?php echo $data[$i]['carmodel']; ?> </h4>
                    <h6 class="fonts"> <a href="car.php?id=<?php echo $carid; ?>">more info</a></h6>
                  <?php } ?>
                </div>

                <ul class="social-list">
                  <li><i class="fa fa-facebook"></i></li>
                  <li><i class="fa fa-dribbble"></i></li>
                  <li><i class="fa fa-instagram"></i></li>
                  <li><i class="fa fa-linkedin"></i></li>
                  <li><i class="fa fa-google"></i></li>
                </ul>

                <div class="buttons">

                  <button class="btn btn-outline-primary px-4">Message</button>
                  <button class="btn btn-primary px-4 ms-3">Contact</button>
                </div>


              </div>




            </div>

          </div>

        </div>

      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="subcription-form">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>Copyright &copy;<script>
                  document.write(new Date().getFullYear());
                </script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div> <!-- .site-wrap -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jarallax.min.js"></script>
    <script src="js/jarallax-element.min.js"></script>
    <script src="js/lozad.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/three.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/OBJLoader.js"></script>
    <!-- <script src="js/ParticleHead.js"></script> -->

    <script src="js/jquery.sticky.js"></script>


    <!-- script for car category -->


    <script src="js/main.js"></script>



  </body>

  </html>
<?php
} else {
  // User is not logged in, show content for non-logged-in users
  echo "Please log in to access this content.";
?>
  <h2>
    you can not access profile with out log in so please log in first
  </h2>
  <a href="login.html">Log in</a>
<?php
  // You can add a login form or other content for non-logged-in users here
} }
?>