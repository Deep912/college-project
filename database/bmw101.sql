-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 04:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmw101`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(13) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 1111111111, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `color` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL,
  `price` varchar(20) NOT NULL,
  `engine` varchar(200) NOT NULL,
  `capacity` varchar(200) NOT NULL,
  `output` varchar(300) NOT NULL,
  `transmission` varchar(200) NOT NULL,
  `speed` int(10) NOT NULL,
  `fuel` varchar(20) NOT NULL,
  `mileage` int(20) NOT NULL,
  `drivetrain` varchar(30) NOT NULL,
  `detailscar` varchar(1000) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `category`, `model`, `color`, `year`, `price`, `engine`, `capacity`, `output`, `transmission`, `speed`, `fuel`, `mileage`, `drivetrain`, `detailscar`, `image1`, `image2`, `image3`, `image4`) VALUES
(8, 'suv', 'x5', 'white', '2022', '2.22 crore', 'Six-cylinder in-line with M TwinPower turbo technology, four valves per cylinder.', '4395 cc, 8 Cylinders In V Shape, 4 Valves/Cylinder, DOHC', 'Up to 405 kW (550 hp) and 650 Nm torque (depending on regulations)', '7-speed automatic gearbox by ZF with motorsport software, DREXLER limited slip differential with separate temperature controlled auxiliary cooling, motorsport optimised driveshafts', 350, 'patrol', 9, '4 wheel drive (4WD)', '       fuck you jadu       ', 'images/cars/imgbmw.jpg', 'images/cars/banner.jpg', 'images/cars/slider.jpg', 'images/cars/engine.jpg'),
(9, 'sedan', 'm4 cs', 'blue', '2022', '1.2 Million', 'v8 turbo', '3999 cc', '456 hp', 'Automatic (TC) - 8 Gears, Manual Override & Paddle Shift, Sport Mode', 350, 'petrol', 8, '4wd', '              Muscles made of steel, aluminium and carbon-fibre (CFRP). With the consistent use of lightweight construction materials, the vehicle weight and the centre of gravity of the BMW M4 CS sink – while the dynamics and agility rise.', 'images/cars/card.webp', 'images/cars/banner.jpg', 'images/cars/slider.jpg', 'images/cars/engine.jpg'),
(10, 'sports', 'M6 GT', 'metalic', '2020', '1 Million', 'v12 turbo charged', '2900 cc', '780 HP', 'Automatic (TC) - 8 Gears, Manual Override & Paddle Shift, Sport Mode', 400, 'petrol', 6, 'Rear Wheel Drive ', '      Sophisticated in every respect: The BMW 6 Series stands for elegant and unique design, luxurious comfort and self-assured driving dynamics. The interior reveals a luxurious sense of spaciousness, refined with high-quality materials and innovative features.\r\n        ', 'images/cars/card.png', 'images/cars/banner.jpg', 'images/cars/slider.jpg', 'images/cars/image.1617801995398.jpg'),
(11, 'suv', 'x7', 'white', '2023', '85,00,000', '3.0 L B57 twin-turbo I6', '2993 to 2998 cc', '335 to 375 bhp & 520 to 700 Nm', 'Automatic (TC)', 210, 'Hybrid', 8, ' AWD', 'Sure, the X7 is a well-engineered product like most BMWs, but the similarity to the X1, albeit in a more bloated/luxury iteration, can be a put-off to most.              ', 'images/cars/cardcarx7.webp', 'images/cars/bannerx7.webp', 'images/cars/sliderx7img.webp', 'images/cars/bmw-x7-6.webp');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `usermail` varchar(30) NOT NULL,
  `carid` int(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `carmodel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `userid`, `usermail`, `carid`, `status`, `carmodel`) VALUES
(7, 5, 'demo@gmail.com', 7, 'approved', 'BMW X5 xDrive30d'),
(8, 5, 'demo@gmail.com', 4, 'approved', 'BMW M4 GT4.'),
(9, 7, 'jay@gmail.com', 10, 'pending', 'M6 GT'),
(10, 7, 'jay@gmail.com', 9, 'pending', 'm4 cs'),
(11, 8, 'mehul12@gmail.com', 8, 'pending', 'x5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(13) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(7, 'jay', 'jay@gmail.com', 1234567890, 'baba327d241746ee0829e7e88117d4d5'),
(8, 'mehul1', 'mehul12@gmail.com', 454545454, 'f626f4ab367c4cf89ea50330054f2056');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
