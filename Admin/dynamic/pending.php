<?php
include ("connection.php");
// query for display all pending orders
?>

<!DOCTYPE html>
<html>

<head>
    <title>All reservations</title>
    <link rel="stylesheet" href="../css/allcarsstyle.css">

</head>

<body>




    <div class="container">
        <a href="../index.php">back to admin</a>

        <h2>Pending orders<small></small></h2>
        <ul class="responsive-table">
            <li class="table-header">
                <div class="col col-1">Id</div>
                <div class="col col-2">carid</div>
                <div class="col col-3">userid</div>
                <div class="col col-3">user email</div>
                <div class="col col-3">status</div>
                <div class="col col-4">Action</div>
            </li>
            <?php 
    $sql = "SELECT * FROM reservations";
    $resultforindex = $conn->query($sql); 
    if(mysqli_num_rows($resultforindex)>0){
     $row = mysqli_fetch_all($resultforindex, MYSQLI_ASSOC);
         for($i=0; $i<count($row); $i++){
    
    ?>
            <li class="table-row">
                <div class="col col-1" data-label="Id"><?php echo $row[$i]["id"];?></div>
                <div class="col col-2" data-label="Model"><?php echo $row[$i]["carid"];?></div>
                <div class="col col-3" data-label="category"><?php echo $row[$i]["userid"];?></div>
                <div class="col col-3" data-label="category"><?php echo $row[$i]["usermail"];?></div>
                <div class="col col-3" data-label="category"><?php echo $row[$i]["status"];?></div>
                <div class="col col-5" data-label="Action"><a
                        href="approve.php?id=<?php echo $row[$i]['id'];?>">Approve</a></div>

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
</body>