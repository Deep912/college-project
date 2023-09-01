<?php
include("connection.php");

//with extract
extract($_POST);
$pass = md5($_POST["pass"]);


//checking user
$check=mysqli_query($conn,"SELECT * FROM `login` WHERE Gmail = '$email' AND Password = '$pass'");
if(isset($_POST["submit"])){
    if(mysqli_num_rows($check)==1){
        header("Location: /profile.php"); 
        session_start();
        //get username and gmail
        $get = "SELECT * FROM login WHERE Gmail='$email'";
        $result = $conn->query($get);
        if ($result->num_rows > 0) {

                $row = $result->fetch_assoc();
                $_SESSION["user"]=$row['Name'];
                $_SESSION["email"]=$row['Gmail'];
            }

        exit;
        
    }
    else
        header("Location:/login.html");  
        exit;
}

?>