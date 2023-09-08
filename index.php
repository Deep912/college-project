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
  <link rel="stylesheet" href="css/cardsstyle.css">

  <title>Strategy &mdash; Free Bootstrap Template by Untree.co</title>
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
            <h1 class="mb-0 site-logo"><a href="index.html" class="mb-0">Strategy<span class="text-primary">.</span> </a></h1>
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
        <img src="./images/required/sliderimg.jpg" class="d-block w-100" alt="...">
        <div class="col-md-12 centered" data-aos="fade-up" data-aos-delay="400">

<div class="row justify-content-center mb-4 ">
  <div class="col-md-10 text-center">
    <h1>Let's <span class="typed-words"></span></h1>
    <p class="lead mb-5 font-weight-bold"> <a href="#">We Are BMW</a></p>
  </div>
</div>

</div>
      </div>
      
      <!-- three latest cars in card -->

      <section class="site-section">
      <h2 class="site-section-heading text-center">featured cars</h2>
        <div class="container">
          <div class="row">
          <?php  
           $sql = "SELECT * FROM cars ORDER BY id DESC LIMIT 3";
           $resultforindex = $conn->query($sql); 
           if(mysqli_num_rows($resultforindex)>0){
            $data = mysqli_fetch_all($resultforindex, MYSQLI_ASSOC);
                for($i=0; $i<count($data); $i++){
?>

          
          <div class="col-lg-4 mb-4">
            
          <section class="articles">
  <article>
    <div class="article-wrapper">
      <figure>
        <img src="/stra/Admin/dynamic/<?php echo $data[$i]["image3"];?>" alt="" />
      </figure>
      <div class="article-body">
        <h2><?php echo $data[$i]["model"];?></h2>
        <h2><?php echo $data[$i]["speed"];?></h2>
        <p>
        <?php echo $data[$i]["details"];?>
      </p>
      <p>
        <?php echo $data[$i]["engine"];?>
      </p>
        <a href="#" class="read-more">
          Read more <span class="sr-only">about this is some title</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </article>
          </section>
          </div>
          
          <?php }} ?>
        </div>
        
      </div>

      
      </section>


      <section class="site-section">
        <div class="container">
          <div class="row justify-content-around">
            <div class="col-lg-6" data-jarallax-element="-50">
              <h1 class="text-primary">CURRENT COMPETITIONS</h1>

              <h5 class="mb-6 font-weight-bold">IMSA WeatherTech SportsCar Championship</h5>
              <p class="font-weight-bold">explore event</p>
              <h5 class="mb-6 font-weight-bold">IMSA Michelin Pilot Challenge</h5>
              <p class="font-weight-bold">explore event</p>
              <h5 class="mb-6 font-weight-bold">SRO Fanatec GT World Challenge America</h5>
              <p class="font-weight-bold">explore event</p>
              <h5 class="mb-6 font-weight-bold">SRO GT America</h5>
              <p class="font-weight-bold">explore event</p>
              <h5 class="mb-6 font-weight-bold">SRO Pirelli GT4 America</h5>
              <p class="font-weight-bold">explore event</p>
              <h5 class="mb-6 font-weight-bold">SRO TC America</h5>
              <p class="font-weight-bold">explore event</p>
              <!-- <ul class="list-unstyled ul-check primary">
                <li>Social Media</li>
                <li>Paid Campaigns</li>
                <li>Marketing &amp; SEO</li>
              </ul> -->
            </div>

            <div class="col-lg-6" data-jarallax-element="50">
              <img src="images/required/sidebar-second.jpg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </section>

      <section class="site-section" id="work-section">
        <div class="container">
        <h2 class="site-section-heading ">Latest News</h2>
        <p class="lead">hehe</p>
          <div class="row mb-5 justify-content-center">
            <div class="col-md-8 text-center">
              <!-- <h2 class="site-section-heading text-center">Latest News</h2> -->
              <!-- <p class="lead">hehe</p> -->
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 col-lg-6">
              <a href="images/img_1.jpg" class="media-1" data-fancybox="gallery">
                <img src="./images/required/BMW-MY24-X5-HP-Secondary-FMA-Desktop.avif" alt="Image" class="img-fluid">
                <div class="media-1-content">
                  <h2>THE 2024 BMW iX</h2>
                  
                  <span class="category"><h2>  AN ELECTRIC FUTURE</h2></span>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-6">
              <a href="images/img_2.jpg" class="media-1" data-fancybox="gallery">
                <img src="images/required/BMW-MY23-X7-Secondary-FMA-Desktop.avif" alt="Image" class="img-fluid">
                <div class="media-1-content">
                  <h2>THE NEW 2024 BMW X5</h2>

                  <span class="category"><h2>LEAD WITH CONFIDENCE</h2></span>
                </div>
              </a>
            </div>
            

            
            <div class="col-md-6 col-lg-6">
              <a href="images/img_5.jpg" class="media-1" data-fancybox="gallery">
                <img src="images/required/BMW-Secondary-FMA-Homepage-Cookied-Tile-01-Desktop.avif" alt="Image" class="img-fluid">
                <div class="media-1-content">
                  <h2>THE 2024 BMW X7</h2>
                    
                  <span class="category"><h2>NEXT-LEVEL LUXURY</h2></span>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-6">
              <a href="images/img_6.jpg" class="media-1" data-fancybox="gallery">
                <img src="images/required/BMW-Secondary-FMA-Homepage-Tile-04-Desktop.avif" alt="Image" class="img-fluid">
                <div class="media-1-content">
                  <h2>THE 2024 BMW 8 SERIES</h2>

                  <span class="category"><h2>POWER AND PRESTIGE</h2></span>
                </div>
              </a>
            </div>
          </div>
        </div>
      

      <section class="section ft-feature-1">
        <div class="container">
        <h2 class="site-section-heading text-center">THE BMW M MOTORSPORT LINEUP</h2>
        
        <p class="lead text-center font-weight-bold"> RACE-READY MODELS</p>

          <img src="./images/required/m8.jpg" alt="Image" class="img-fluid mb-5">
          
        
        <h3 class="lead"><img src="./images/required/Mlogo.jpg" class="logo-msports text-center"></h3>
        <h3 class="lead">The BMW M2 CS Racing.</h3>
        </div>
      </section>
        <div class="container mb-5">
          <div class="row justify-content-center">
          </div>
        </div>
        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>An ideal race car for ambitious drivers and teams looking to break into the world of motorsport,
                   add more wins, or perfect their craft.
                   The BMW M2 CS Racing boasts impressive performance and technology in a vehicle suitable for all racing formats.</p>
              </blockquote>

              <figure class="mb-4 d-block align-items-center justify-content-center">
              </figure>
            </div>
          </div>
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>The BMW M2 CS Racing combines the high-performance engineering of BMW M with the purpose-built 
                  expertise of BMW M Motorsport. This popular race car, a favorite with new and experienced drivers,
                   is building a legacy to rival its immensely successful predecessor.</p>
              </blockquote>
              
            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>UP TO</p>
                   <h2>   365 </h2>
                <h3>  HORSEPOWER</h3>
              </blockquote>
              


            </div>
          </div>

          

        </div>
        <section class="section ft-feature-1">
        <div class="">

          <img src="./images/required/banner.jpg" alt="Image" class="img-fluid mb-14 d-block w-auto">

        </div>
      </section>
      <section>
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center" data-aos="fade-up">
              <h2 class="site-section-heading text-center">Ownership starts here.</h2>
            </div>
          </div>
          <div class="row align-items-stretch">
            <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up">
              <div class="unit-4 d-flex">
                <div class="unit-4-icon mr-4"><span class="text-primary"></span><img src="./images/svgs/arrow-repeat.svg">  </div>
                <div>
                  <h3>Trade-In Value</h3>
                  <p>Get the latest information on your vehicle’s trade-in value today. </p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up" data-aos-delay="100">
              <div class="unit-4 d-flex">
                <div class="unit-4-icon mr-4"><span class="text-primary"><img src="./images/svgs/speedometer2.svg" ></span></div>
                <div>
                  
                  <h3>Check Your Credit Score</h3>
                  <p>See where you stand on your journey to owning a BMW.<p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up" data-aos-delay="200">
              <div class="unit-4 d-flex">
                <div class="unit-4-icon mr-4"><span class="text-primary"></span><img src="./images/svgs/currency-dollar.svg" ></div>
                <div>
                  <h3>Apply for Financing</h3>
                  <p>Own the BMW of your dreams with BMW Financial Services.</p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>


            <div class="col-md-6 col-lg-3 mb-3 mb-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="unit-4 d-flex">
                <div class="unit-4-icon mr-4"><span class="text-primary"></span><img src="./images/svgs/envelope.svg" ></div>
                <div>
                  <h3>Stay Connected</h3>
                  <p>
                  Receive the latest offers, releases, and news from BMW.</p>
                  <p><a href="#">Learn More</a></p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </section>

      <div class="site-section" id="about-section">
        <div class="container">
          <div class="row mb-5">

            <div class="col-md-5 ml-auto mb-5 order-md-2"  data-jarallax-element="50">
              <img src="images/img_13.jpg" alt="Image" class="img-fluid rounded">
            </div>
            <div class="col-md-6 order-md-1"  data-jarallax-element="-50">

              <div class="row">

                <div class="col-12">
                  <div class="text-left pb-1">
                    <h2 class="site-section-heading">About Us</h2>
                  </div>
                </div>
                <div class="col-12 mb-4">
                  <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet incidunt magnam corrupti, odit eos harum quaerat nostrum voluptatibus aspernatur eligendi accusantium cum, impedit blanditiis voluptate commodi doloribus, nemo dignissimos recusandae.</p>
                </div>
                <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                  <div class="unit-4">
                    <div class="unit-4-icon mr-4 mb-3"><span class="text-primary icon-phonelink"></span></div>
                    <div>
                      <h3>Web &amp; Mobile Specialties</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis consect.</p>
                      <p class="mb-0"><a href="#">Learn More</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mb-md-5 mb-0 col-lg-6">
                  <div class="unit-4">
                    <div class="unit-4-icon mr-4 mb-3"><span class="text-primary icon-extension"></span></div>
                    <div>
                      <h3>Intuitive Thinkers</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis.</p>
                      <p class="mb-0"><a href="#">Learn More</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>


      <div class="site-section border-bottom" id="team-section">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
              <h2 class="site-section-heading">Our Team</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
              <div class="person text-center bg-white p-4">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                <h3>John Rooster</h3>
                <p class="position text-muted">Co-Founder, President</p>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                <ul class="ul-social-circle">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
              <div class="person text-center bg-white p-4">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                <h3>Tom Sharp</h3>
                <p class="position text-muted">Co-Founder, COO</p>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                <ul class="ul-social-circle">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
              <div class="person text-center bg-white p-4">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                <h3>Winston Hodson</h3>
                <p class="position text-muted">Marketing</p>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
                <ul class="ul-social-circle">
                  <li><a href="#"><span class="icon-facebook"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-linkedin"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      




      <section class="site-section" id="contact-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="site-section-heading">Contact Us</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 mb-5">



              <form action="#" class="p-5 bg-white">

                <h2 class="h4 mb-5">Contact Form</h2> 

                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="text-black" for="fname">First Name</label>
                    <input type="text" id="fname" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label class="text-black" for="lname">Last Name</label>
                    <input type="text" id="lname" class="form-control">
                  </div>
                </div>

                <div class="row form-group">

                  <div class="col-md-12">
                    <label class="text-black" for="email">Email</label> 
                    <input type="email" id="email" class="form-control">
                  </div>
                </div>

                <div class="row form-group">

                  <div class="col-md-12">
                    <label class="text-black" for="subject">Subject</label> 
                    <input type="subject" id="subject" class="form-control">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">Message</label> 
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                  </div>
                </div>


              </form>
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
