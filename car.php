
<?php 
include ("./dynamic/connection.php"); 
$carId = $_GET['id'];
$sql = "SELECT * FROM cars WHERE id = $carId";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>
<!doctype html>
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
  <link rel="stylesheet" href="css/cardsstyle.css">
  <link rel="stylesheet" href="css/styles.css">

  <title>BMW | Models</title>
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
            <h1 class="mb-0 site-logo"><a href="index.html" class="mb-0">BMW<span class="text-primary">.</span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <!-- <li><a href="#home-section" class="nav-link">Home</a></li> -->
                <li><a href="cars.php" class="nav-link">Cars</a></li>
                <li>
                  <a href="#services-section" class="nav-link">Services</a>
                </li>
                <li><a href="#blog-section" class="nav-link">About</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                <?php if (isset($_SESSION['user'])) {?>
                <li><a href="profile.php" class="nav-link">My BMW</a></li>

                  <?php } else {?>
                <li><a href="signup.html" class="nav-link">Join us</a></li>
                <?php } ?>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

    <div class="header_slider">
        <img src="./Admin/dynamic/<?php echo $row["image3"];?>" class="d-block w-100" alt="...">
        <div class="col-md-12 centered" data-aos="fade-up" data-aos-delay="400">

</div>
      </div>
  </div>
  <div class="row justify-content-center mb-2 mt-5">
            <div class="col-md-8 text-center aos-init aos-animate" data-aos="fade-up">
              <h2 class="site-section-heading text-center"><?php echo $row['model']; ?> </h2>
            </div>
          </div>
  <div class="container-card">
        <div class="item">
            <div class="image">
                <img src="./Admin/dynamic/<?php echo $row["image2"];?>" alt="Car 1">
            </div>
        </div>
        <div class="item">
            <div class="details">
                <h3>TECHNICAL DATA OF <b><?php echo $row['model']; ?> </b></h3>
                <p><b>Engine:<br></b><?php echo $row['engine']; ?></p>
                <p><b>Transmission:<br></b><?php echo $row['transmission']; ?></p>
                <p><b>Top <em>speed:</em><br></b><?php echo $row['speed']; ?> KMPH</p>
            </div>
        </div>
        <div class="item">
            <div class="details">
                
                <p><b>DriveTrain:<br></b><?php echo $row['drivetrain']; ?> </p>
                <p><b>Fuel:<br></b><?php echo $row['fuel']; ?> </p>
                <p><b>Color:<br></b><?php echo $row['color']; ?> </p>
                <p><b><br></b><?php echo $row['details']; ?> </p>
                <h3 class="text-center"><b>Price<br></b><?php echo $row['price']; ?> </h3>
                
            </div>
        </div>
        <div class="item">
            <div class="image">
                <img src="./Admin/dynamic/<?php echo $row["image1"];?>" alt="Car 2">
            </div>
        </div>
       
</div>
    <!-- banner part  -->


          

          <section class="section ft-feature-1">
        <div class="">

          <img src="./Admin/dynamic/<?php echo $row["image2"];?>" alt="Image" class="img-fluid mb-14 d-block w-auto">

        </div>
      </section>
<!-- footer section start -->


<footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-6">
                  <h2 class="footer-heading mb-4">CONTACTS.</h2>
                  <p>If you are unable to find the information you are looking for on the BMW Group website, please do not hesitate to contact our Customer Service:</p>
                </div>
               
                <div class="col-md-4">
                  <h2 class="footer-heading mb-4">Follow Us</h2>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <h2 class="footer-heading mb-4">Subscribe For Latest News</h2>
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
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by Deep Chhegaliya <!-- License information: https://untree.co/license/ -->
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

    <script src="js/typed.js"></script>
    <script>
      var typed = new Typed('.typed-words', {
        strings: ["Go Places"," Feel The Power","Feel Bmw"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true
      });
    </script>


<!-- script for car category -->


    <script src="js/main.js"></script>

  

  </body>
  </html>
