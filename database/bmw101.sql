-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2023 at 02:02 PM
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
(8, 'suv', 'x5', 'white', '2022', '2.22 crore', 'Six-cylinder in-line with M TwinPower turbo technology, four valves per cylinder, direct injection, Valvetronic, lubricants from RAVENOL', '4395 cc, 8 Cylinders In V Shape, 4 Valves/Cylinder, DOHC', 'Up to 405 kW (550 hp) and 650 Nm torque (depending on regulations)', '7-speed automatic gearbox by ZF with motorsport software, DREXLER limited slip differential with separate temperature controlled auxiliary cooling, motorsport optimised driveshafts', 350, 'patrol', 9, '4 wheel drive (4WD)', '       fuck you jadu       ', 'images/cars/imgbmw.jpg', 'images/cars/banner.jpg', 'images/cars/slider.jpg', 'images/cars/engine.jpg');

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
(7, 5, 'demo@gmail.com', 7, 'pending', 'BMW X5 xDrive30d'),
(8, 5, 'demo@gmail.com', 4, 'pending', 'BMW M4 GT4.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
