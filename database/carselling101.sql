-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 09:24 AM
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
-- Database: `carselling101`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` int(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `password`) VALUES
(1, 'admin', 2147483647, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `Model` varchar(20) NOT NULL,
  `Year` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Mileage` int(11) NOT NULL,
  `Color` varchar(11) NOT NULL,
  `Transmission` varchar(11) NOT NULL,
  `Fuel` varchar(11) NOT NULL,
  `Engine` varchar(20) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Body` varchar(11) NOT NULL,
  `Features` varchar(500) NOT NULL,
  `File1` varchar(200) NOT NULL,
  `File2` varchar(200) NOT NULL,
  `File3` varchar(200) NOT NULL,
  `Textarea` varchar(11) NOT NULL,
  `category` varchar(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`Model`, `Year`, `Price`, `Mileage`, `Color`, `Transmission`, `Fuel`, `Engine`, `Description`, `Body`, `Features`, `File1`, `File2`, `File3`, `Textarea`, `category`, `id`) VALUES
('x5', 2023, 12, 12, 'red', 'manual', '0', '', 'test', 'm5', 'test', 'img/BMW M5 Front Right View.jpg', 'img/BMW M5 DashBoard.jpg', 'img/BMW M5 Rear View.jpg', 'demo', 'SUV', 16),
('x5', 2023, 12, 12, 'red', 'manual', '0', '', 'test', 'm5', 'test', 'img/BMW M5 Front Right View.jpg', 'img/BMW M5 DashBoard.jpg', 'img/BMW M5 Rear View.jpg', 'demo', 'SUV', 17),
('x5', 2023, 12, 12, 'red', 'manual', '0', '', 'test', 'm5', 'test', 'img/BMW M5 Front Right View.jpg', 'img/BMW M5 DashBoard.jpg', 'img/BMW M5 Rear View.jpg', 'demo', 'SUV', 18),
('m8', 2023, 2000000, 13, 'red', 'auto', 'petrol', 'v12', 'hehe', 'sedan', 'wee', '../../imgphoto_2023-08-21_12-59-50.jpg', '../../imgpeakpx.jpg', '../../imgblack-bmw-m4-f82-3rpu8blajaabnstc.jpg', '', 'M series', 19),
('m8', 2023, 2000000, 13, 'red', 'auto', 'petrol', 'v12', 'hehe', 'sedan', 'wee', '', '', '', '', 'M series', 20),
('m8', 2023, 2000000, 13, 'red', 'auto', 'petrol', 'v12', 'hehe', 'sedan', 'wee', '', '', '', '', 'M series', 21),
('m8', 2023, 2000000, 13, 'red', 'auto', 'petrol', 'v12', 'hehe', 'sedan', 'wee', '', '', '', '', 'M series', 22),
('m8', 2023, 2000000, 13, 'red', 'auto', 'petrol', 'v12', 'hehe', 'sedan', 'wee', '', '', '', '', 'M series', 23),
('m8', 2023, 2000000, 13, 'red', 'auto', 'petrol', 'v12', 'hehe', 'sedan', 'wee', '', '', '', '', 'M series', 24),
('m8', 2023, 2000000, 13, 'red', 'auto', 'petrol', 'v12', 'hehe', 'sedan', 'wee', '/imgphoto_2023-08-21_12-59-50.jpg', '/imgpeakpx.jpg', '/imgblack-bmw-m4-f82-3rpu8blajaabnstc.jpg', '', 'M series', 25),
('demo', 2023, 200, 20, 'red', 'auto', 'petrol', '5l v8', 'hh', 'hhh', 'hhh', 'img/wallpaperflare.com_wallpaper.jpg', 'img/wallpaperflare.com_wallpaper(1).jpg', 'img/wallpaperflare.com_wallpaper(2).jpg', 'hhhh', 'SUV', 26);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(224) NOT NULL,
  `name` varchar(10) NOT NULL,
  `phone` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`) VALUES
(4, 'deep', 1234567890, 'deep@gmail.com', '$2y$10$W4gRCFbuqnZzHTgx6ev/XOlF98ReiWuQdDlPcfwvNBVKD1jnQVVPe'),
(5, 'deep', 2147483647, 'deep1@gmail.com', 'abc'),
(6, 'aman', 2147483647, 'aman@gmail.com', 'aman'),
(7, '123', 123, '123@gmail.com', '1234'),
(8, 'deep', 2147483647, 'deep2@gmail.com', 'abc'),
(9, 'weee', 2147483647, 'wee@gmail.com', 'wee'),
(10, 'weee', 2147483647, 'wee@gmail.com', 'wee'),
(11, 'tate', 2147483647, 'tate@gmail.com', 'tate');

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(224) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
