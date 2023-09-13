<?php
include ("connection.php");

if (isset($_SESSION['user'])) { 
$email = $_SESSION['email'];
$carid = $_GET['carid'];
    $sql = "SELECT id FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $userid = $row['id'];
    echo $userid;

    $email = $_SESSION['email'];
    $sql = "INSERT INTO reservations (carid, userid) VALUES ('$carid', '$userid')";

    if ($conn->query($sql) === TRUE) {
        header ("Location: ../profile.php");
    } else {
        echo "Error: " . $sql;
    }
}

?>

<html>
<head>  
    <title>Booking</title>
</head>
    <body>
        
    </body>
</html>