<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
  
    <!-- ***** Preloader End ***** -->

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Cars</h1>
            <span>Lorem ipsum dolor sit amet.</span>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <form action="cars.php"  method="POST" id="contact">
          <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Used/New:</label>
           
                       <select class="form-control" name="year">
                            <option value="2023">2023</option>
                            <option value="new">New vehicle</option>
                            <option value="used">Used vehicle</option>
                       </select>
                  </div>
              </div>
      
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <label>Vehicle Type:</label>
           
                       <select class="form-control" name="type">
                            <option value="suv">suv</option>
                            <option value="">--All --</option>
                            <option value="">--All --</option>
                            <option value="">--All --</option>
                            <option value="">--All --</option>
                       </select>
                  </div>
              </div>
    
      
             
          <div class="col-sm-4 offset-sm-4">
            <div class="main-button text-center">
                <input type="submit"  name="submit" >
            </div>
          </div>
          <br>
          <br>
        </form>

        <div class="row">

<?php
        if(isset($_POST["submit"])){
          include("connection.php");
          $type =  $_POST["type"];
          $year = $_POST["year"];
            $getData = mysqli_query($conn, "SELECT * FROM `cars` WHERE `category` = '$type' AND `year` = '$year' ");
                if(mysqli_num_rows($getData)>0){
                    $data = mysqli_fetch_all($getData, MYSQLI_ASSOC);
                        for($i=0; $i<count($data); $i++){
                            ?>
     
          <div class="col-md-4">
            <div class="service-item">
              <img src="<?php echo $data[$i]["File1"];?> " alt="">
              <div class="down-content">
                <h4><?php echo $data[$i]["Model"];?></h4>
                <div style="margin-bottom:10px;">
                  <span>
                    <sup>$</sup><?php echo $data[$i]["Price"];?>
                  </span>
                </div>

                <p>
                  <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                </p>
                <a href="car-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>
        <?php }}}
        
      
          else{
        ?>
          <h4>loda latest Featured carzz</h4><br>
            <div class="col-md-4">
            <div class="service-item">
              <img src="img/BMW M5 Front Right View.jpg" alt="">
              <div class="down-content">
                <h4>model</h4>
                <div style="margin-bottom:10px;">
                  <span>
                    <sup>$</sup>price
                  </span>
                </div>

                <p>
                  <i class="fa fa-dashboard"></i> 130 000km &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cube"></i> 1800 cc &nbsp;&nbsp;&nbsp;
                  <i class="fa fa-cog"></i> Manual &nbsp;&nbsp;&nbsp;
                </p>
                <a href="car-details.html" class="filled-button">View More</a>
              </div>
            </div>

            <br>
          </div>
        <?php }?>

         

        <br>
        <br>
        <br>
        <br>
      </div>
    </div>


  </body>
</html>