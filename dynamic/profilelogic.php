<!doctype html>
<?php include("./dynamic/connection.php");

// Check if the user is logged in (session exists)
if (isset($_SESSION['user'])) {
  $email = $_SESSION['email'];
  $sql = "SELECT id FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $userid = $row['id'];
  $sql1   = "SELECT carid FROM reservations WHERE userid = '$userid'";

  $result1 = mysqli_query($conn, $sql1);
  $row1 = mysqli_fetch_assoc($result1);


  $carid = $row1['carid'];
  if (isset($row1)) {
    $sql2 = "SELECT * FROM cars WHERE id = '$carid'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($result2);
    $carname = $row2['model'];
  }
}

?>