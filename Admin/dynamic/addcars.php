<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the uploaded image
    $target_dir = "../../images/cars/";
    $category = $_POST["category"];
    $model = $_POST["model"];
    $color = $_POST["color"];
    $year = $_POST["year"];
    $price = $_POST["price"];
    $engine = $_POST["engine"];
    $capacity = $_POST["capacity"];
    $output = $_POST["output"];
    $transmission = $_POST["transmission"];
    $speed = $_POST["speed"];
    $fuel = $_POST["fuel"];
    $mileage = $_POST["mileage"];
    $drivetrain = $_POST["drivetrain"];
    $details = $_POST["details"];

    $path = "images/cars/";

    $target_file1 = $target_dir . basename($_FILES["car_image1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["car_image2"]["name"]);
    $target_file3 = $target_dir . basename($_FILES["car_image3"]["name"]);
    $target_file4 = $target_dir . basename($_FILES["car_image4"]["name"]);

    move_uploaded_file($_FILES["car_image1"]["tmp_name"], $target_file1);
    move_uploaded_file($_FILES["car_image2"]["tmp_name"], $target_file2);
    move_uploaded_file($_FILES["car_image3"]["tmp_name"], $target_file3);
    move_uploaded_file($_FILES["car_image4"]["tmp_name"], $target_file4);

    
    $target_img1 = $path . basename($_FILES["car_image1"]["name"]);
    $target_img2 = $path . basename($_FILES["car_image2"]["name"]);
    $target_img3 = $path . basename($_FILES["car_image3"]["name"]);
    $target_img4 = $path . basename($_FILES["car_image4"]["name"]);

    $sql = "INSERT INTO cars (image1,image2,image3,image4,category,model,color,year,price,engine,capacity,output,transmission,speed,fuel,mileage,drivetrain,details) VALUES ('$target_img1','$target_img2','$target_img3','$target_img4','$category','$model','$color','$year','$price','$engine','$capacity','$output','$transmission','$speed','$fuel','$mileage','$drivetrain','$details' )";
    if ($conn->query($sql) === TRUE) {
        echo "Car added successfully!";
    } else {
        echo "Error: " . $sql;
    }

    $conn->close();
} else {
    echo "Sorry, there was an error uploading your file.";
}

?>


