<?php
include 'connection.php';


// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $pass =($_POST["password"]);
    $password = md5($pass);
    // SQL query to insert user data
    $sql = "INSERT INTO users (name, email, phone, password) VALUES ('$name', '$email', '$phone', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location:../login.html"); 
    } else {
        echo "Error: " . $sql;
    }
}

// Close the database connection
$conn->close();