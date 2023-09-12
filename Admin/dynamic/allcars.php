<!DOCTYPE html>
<html lang="en">
<?php include 'connection.php';?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/feather/feather.css">
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="../js/select.dataTables.min.css">
  <!-- css for table -->
  <link rel="stylesheet" href="../css/allcarsstyle.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>
<body>
  
    <!-- partial:partials/_navbar.html -->

  <!-- container-scroller -->
  <div class="container">
<a href="../index.php">back to admin</a>

  <h2>ALL CARS<small></small></h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">Id</div>
      <div class="col col-2">Model</div>
      <div class="col col-3">category</div>
            <div class="col col-4">Action</div>
    </li>
    <?php 
    $sql = "SELECT * FROM cars";
    $resultforindex = $conn->query($sql); 
    if(mysqli_num_rows($resultforindex)>0){
     $data = mysqli_fetch_all($resultforindex, MYSQLI_ASSOC);
         for($i=0; $i<count($data); $i++){
    
    ?>
    <li class="table-row">
      <div class="col col-1" data-label="Id"><?php echo $data[$i]["id"];?></div>
      <div class="col col-2" data-label="Model"><?php echo $data[$i]["model"];?></div>
      <div class="col col-3" data-label="category"><?php echo $data[$i]["category"];?></div>
      <div class="col col-4" data-label="category"><a href="deletecar.php?id=<?php echo $data[$i]['id'];?>">Delete</a></div>
    </li>
    <?php 
         }} else {
           ?>
<h2>there was an error</h2>
            <?php 
           }
           ?> 
  </ul>
</div>
<!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->



  
</body>

</html>

