<?php
    include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the uploaded image
    $target_dir = "images/cars/";
    $category = $_POST["category"];
    $model = $_POST["model"];
    $color = $_POST["color"];
    $year = $_POST["year"];
    $price = $_POST["price"];
    $engine = $_POST["engine"];
    $transmission = $_POST["transmission"];
    $speed = $_POST["speed"];
    $fuel = $_POST["fuel"];
    $mileage = $_POST["mileage"];
    $drivetrain = $_POST["drivetrain"];
    $details = $_POST["details"];

    $target_file1 = $target_dir . basename($_FILES["car_image1"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["car_image2"]["name"]);
    $target_file3 = $target_dir . basename($_FILES["car_image3"]["name"]);

    move_uploaded_file($_FILES["car_image1"]["tmp_name"], $target_file1);
    move_uploaded_file($_FILES["car_image2"]["tmp_name"], $target_file2);
    move_uploaded_file($_FILES["car_image3"]["tmp_name"], $target_file3);

        $sql = "INSERT INTO cars (image1,image2,image3,category,model,color,year,price,engine,transmission,speed,fuel,mileage,drivetrain,details) VALUES ('$target_file1','$target_file2','$target_file3','$category','$model','$color','$year','$price','$engine','$transmission','$speed','$fuel','$mileage','$drivetrain','$details' )";
        if ($conn->query($sql) === TRUE) {
            echo "Car added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

?>


