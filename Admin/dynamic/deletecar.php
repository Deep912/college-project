<?php 
include("connection.php");
$carId = $_GET['id'];

$sql = "DELETE FROM cars WHERE id = $carId";
if ($conn->query($sql) === TRUE) {
    header("Location: allcars.php");
} else {
    echo "Error: " . $sql;
}
?>