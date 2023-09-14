<?php
include ("connection.php");
$id = $_GET['id'];
$sql = "UPDATE reservations SET status='approved' WHERE id=".$id;
if ($conn->query($sql) === TRUE) {
    header ("Location: pending.php");
} else {
    echo "Error: " . $sql;
}
?>
