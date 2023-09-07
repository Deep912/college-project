<?php
include("connection.php");

//with extract
extract($_POST);
$pass =($_POST["pass"]);
$email =($_POST["email"]);


//checking user
$check=mysqli_query($conn,"SELECT * FROM users WHERE email = '$email' AND password = '$pass'");

echo $pass;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(mysqli_num_rows($check)==1){
        header("Location: ../profile.php"); 
        session_start();
        // get username and gmail
        $get = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($get);
        if ($result->num_rows > 0) {

                $row = $result->fetch_assoc();
                $_SESSION["user"]=$row['name'];
                $_SESSION["email"]=$row['email'];
            }

        exit;
        
    }
    else
        header("Location: ../login.html");  
        echo "query issue";
        exit;
}

?>