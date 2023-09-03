<?php
include "./dynamic/connection.php";
// Get the category value from the URL parameter
$category = $_GET["category"];

echo $category;
// // Perform a database query based on the selected category (replace with your own query)
// $query = "SELECT * FROM cars WHERE category = $category";
// $result = $conn->query($query);

// if ($result->num_rows > 0) {
//     // Output data as you like (e.g., in a list)
//     echo "<ul>";
//     while ($row = $result->fetch_assoc()) {
//         echo "<li>" . $row["category"] . "</li>";
//     }
//     echo "</ul>";
// } else {
//     echo "No data found for this category.";
// }

// // Close the database connection
// $conn->close();
?>
