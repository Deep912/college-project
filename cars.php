<!-- /*
* Template Name: Strategy
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<?php include ("./dynamic/connection.php") ; ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

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
  <title>BMW &mdash; Free Bootstrap Template by Untree.co</title>
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

    <header class="site-navbar py-4 js-sticky-header site-navbar-target " role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-11 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="mb-0">Strategy<span class="text-primary">.</span> </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block ">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <!-- <li><a href="#home-section" class="nav-link">Home</a></li> -->
                <li><a href="index.php" class="nav-link colorful-underline">Home</a></li>
                <li><a href="cars.php" class="nav-link static-underline">Cars</a></li>
                <li>
                  <a href="#services-section " class="nav-link colorful-underline">Services</a>
                </li>
                <li><a href="#blog-section" class="nav-link colorful-underline">About</a></li>
                <li><a href="#contact-section" class="nav-link colorful-underline">Contact</a></li>
                <?php if (isset($_SESSION['user'])) {?>
                <li><a href="profile.php" class="nav-link colorful-underline">My BMW</a></li>

                  <?php } else {?>
                <li><a href="signup.html" class="nav-link colorful-underline">Join us</a></li>
                <?php } ?>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

      <div class="header_slider1">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner pics">
    <div class="carousel-item active header_slider1" >
      <img class="d-flex w-100 " src="./images/bmwpicforcars.jpg" alt="First slide">  
    </div>
    
    <div class="carousel-item header_slider1">
      <img class="d-block w-100" src="./images/bmwcarsfolder/bmwsec.jpg" alt="Second slide">
    </div>

    <div class="carousel-item header_slider1">
      <img class="d-block w-100" src="./images/bmwcarsfolder/bmwth.jpg" alt="Third slide">
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>
      </div>
      
      <!-- three latest cars in card -->

      <section class="site-section">
      <h2 class="site-section-heading text-center">Our Perfomanse Cars</h2>
        <div class="container">
          <div class="row car-rows">
          <?php  
           $sql = "SELECT * FROM cars where category = 'M series'";
           $resultforindex = $conn->query($sql); 
           if(mysqli_num_rows($resultforindex)>0){
            $data = mysqli_fetch_all($resultforindex, MYSQLI_ASSOC);
                for($i=0; $i<count($data); $i++){
?>
<div class="card " style="width: 22rem;">
  <img class="card-img-top" src="./images/bmwforcars.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data[$i]["Model"];?></h5>
    <p class="card-text"><?php echo $data[$i]["Model"];?></p>
    <a href="#" class="btn btn-primary">Explore</a>
  </div>
</div>
          <?php 
         }} else {
           ?>

            <div class="card" style="width: 25rem;">
  <img class="card-img-top" src="./images/bmwforcars.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            <?php 
           }
           ?> 
        </div>
        
      </div>
      </div>
      
      </section>

      <section class="site-section">
      <h2 class="site-section-heading text-center">Our SUVs</h2>
        <div class="container">
          <div class="row car-rows">
          <?php  
           $sql = "SELECT * FROM cars where category = 'SUV'";
           $resultforindex = $conn->query($sql); 
           if(mysqli_num_rows($resultforindex)>0){
            $data = mysqli_fetch_all($resultforindex, MYSQLI_ASSOC);
                for($i=0; $i<count($data); $i++){
?>
<div class="card " style="width: 22rem;">
  <img class="card-img-top" src="./images/bmwforcars.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data[$i]["Model"];?></h5>
    <p class="card-text"><?php echo $data[$i]["Model"];?></p>
    <a href="#" class="btn btn-primary">Explore</a>
  </div>
</div>
          <?php 
         }} else {
           ?>

            <div class="card" style="width: 25rem;">
  <img class="card-img-top" src="./images/bmwforcars.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            <?php 
           }
           ?> 
        </div>
        
      </div>
      </div>
      
      </section>

      <section class="site-section">
      <h2 class="site-section-heading text-center">sedans</h2>
        <div class="container">
          <div class="row car-rows">
          <?php  
           $sql = "SELECT * FROM cars where category = 'sedan'";
           $resultforindex = $conn->query($sql); 
           if(mysqli_num_rows($resultforindex)>0){
            $data = mysqli_fetch_all($resultforindex, MYSQLI_ASSOC);
                for($i=0; $i<count($data); $i++){
?>
<div class="card " style="width: 22rem;">
  <img class="card-img-top" src="./images/bmwforcars.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data[$i]["Model"];?></h5>
    <p class="card-text"><?php echo $data[$i]["Model"];?></p>
    <a href="#" class="btn btn-primary">Explore</a>
  </div>
</div>
          <?php 
         }} else {
           ?>

            <div class="card" style="width: 25rem;">
  <img class="card-img-top" src="./images/bmwforcars.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
            <?php 
           }
           ?> 
        </div>
        
      </div>
      </div>
      
      </section>

      
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
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a>  Distributed By <a href="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
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
