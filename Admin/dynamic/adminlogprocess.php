<?php 
include 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

// Query to check admin credentials
$query = "SELECT * FROM admin WHERE name='$username' AND password='$password'";
$result = $conn->query($query);

// Check if a matching admin is found
if ($result->num_rows == 1) {
    // Admin is authenticated
    $_SESSION['admin_logged_in'] = true;
    header('Location: ../index.php'); // Redirect to admin dashboard
} else {
    // Admin authentication failed
    $_SESSION['admin_login_error'] = "Invalid username or password.";
    header('Location: ../index.php'); // Redirect back to the login page
}

$db->close();
?>