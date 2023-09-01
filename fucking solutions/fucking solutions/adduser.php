<?php      
session_start();
include("connection.php");

$username = $_POST["user"];
$pass = md5($_POST["pass"]);
$email = $_POST["email"];

$insert = "INSERT INTO `login`(`Name`, `Gmail`, `Password`) VALUES ('$username','$email','$pass')";

if(isset($_POST['submit'])){
    if(mysqli_query($conn, $insert)){
        header("Location: /login.html");
        die();
    }
    else{
    echo "failed".mysqli_error($conn);
    }
}
    
mysqli_close($conn);  
?>


