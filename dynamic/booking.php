<?php
include("connection.php");

if (isset($_SESSION['user'])) {
    $email = $_SESSION['email'];
    $carid = $_GET['carid'];
    $status = "pending";
    $sql = "SELECT id FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $userid = $row['id'];
    $email = $_SESSION['email'];
    $sql = "INSERT INTO reservations (carid, userid, status,usermail) VALUES ('$carid', '$userid','$status','$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../profile.php");
    } else {
        echo "Error: " . $sql;
    }
}

?>