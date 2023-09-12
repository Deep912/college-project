<?php 
include("connection.php");
$userId = $_GET['id'];

$sql = "DELETE FROM users WHERE id = $userId";
if ($conn->query($sql) === TRUE) {
    header("Location: allusers.php");
} else {
    echo "Error: " . $sql;
}
?>