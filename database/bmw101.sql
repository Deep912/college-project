-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 05:41 AM
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
  `price` int(10) NOT NULL,
  `engine` varchar(200) NOT NULL,
  `capacity` varchar(10) NOT NULL,
  `output` varchar(300) NOT NULL,
  `transmission` varchar(200) NOT NULL,
  `speed` int(5) NOT NULL,
  `fuel` varchar(10) NOT NULL,
  `mileage` int(5) NOT NULL,
  `drivetrain` varchar(30) NOT NULL,
  `details` varchar(400) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `category`, `model`, `color`, `year`, `price`, `engine`, `capacity`, `output`, `transmission`, `speed`, `fuel`, `mileage`, `drivetrain`, `details`, `image1`, `image2`, `image3`, `image4`) VALUES
(1, '', 'm8', '', '2023', 1200000, 'v12', '', '', '', 0, '', 0, '', '', '../../images/cars/_content_dam_bmw_marketBMW_M_common_topics_magazine-article-pool_2022_wallpaper-up', '../../images/cars/_content_dam_bmw_marketBMW_M_common_topics_magazine-article-pool_2022_wallpaper-up', '../../images/cars/BMW M5 Rear View.jpg', ''),
(2, '', '', '', '', 0, '', '', '', '', 0, '', 0, '', '', 'images/cars/', 'images/cars/', 'images/cars/bmwsec.jpg', ''),
(3, 'suv', 'x5', '', '2022', 0, '', '', '', '', 0, '', 0, '', '', 'images/cars/third.jpg', 'images/cars/', 'images/cars/', 'images/cars/'),
(4, 'sports', 'BMW M4 GT4.', 'white', '2022', 12000, 'Six-cylinder in-line', '2,993 cc', 'Up to 405 kW (550 hp) and 650 Nm torque (depending on regulations)', '7-speed automatic gearbox by ZF with motorsport software, DREXLER limited slip differential with separate temperature controlled auxiliary cooling, motorsport optimised driveshafts', 350, 'patrol', 0, '4 wheel drive (4WD)', 'From 2023, private teams and drivers around the world will line up with the new BMW M4 GT4. This car was developed to win races and titles.', 'images/cars/forth.jpg', 'images/cars/first.jpg', 'images/cars/third.jpg', 'images/cars/secondimg.jpg');

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
(1, 'deep', 'deep@gmail.com', 2147483647, '900150983cd24fb0d6963f7d28e17f72');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
