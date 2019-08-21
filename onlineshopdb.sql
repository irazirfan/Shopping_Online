-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 10:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `username`, `category`, `price`, `updated_at`, `created_at`) VALUES
(8, 'faisal', 'Salwar', 633, '2019-08-21 07:27:58', '2019-08-21 07:27:58'),
(9, 'faisal', 'Jeans', 1099, '2019-08-21 07:28:14', '2019-08-21 07:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `preference` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `quantity`, `price`, `preference`, `category`, `created_at`, `updated_at`) VALUES
(4, 'Blue Jeans 27\"', 6, 1199, 'female', 'Jeans', '2019-07-31 15:11:46', '2019-08-21 08:00:09'),
(5, 'Red T-Shirt L', 10, 300, 'male', 'T-shirt', '2019-07-31 15:14:37', '2019-07-31 15:14:37'),
(6, 'Red Salwar', 2, 633, 'female', 'Salwar', '2019-08-21 00:00:00', '2019-08-21 00:00:00'),
(7, 'Jeans Full Pant', 7, 900, 'male', 'Jeans', '2019-08-21 00:00:00', '2019-08-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `username`, `password`, `user_type`, `created_at`, `updated_at`) VALUES
(4, 'Iraz Irfan', '01521318232', 'irazirfan', '1234', 'admin', '2019-08-21 10:26:54', '2019-08-21 08:24:43'),
(5, 'Faisal Hasan', '0177654255', 'faisal', '1234', 'customer', '2019-08-21 10:26:54', '2019-08-21 10:26:54'),
(9, 'Badhon', '0136542224', 'badhon', '1234', 'customer', '2019-08-21 10:26:54', '2019-08-21 10:26:54'),
(11, 'Afiqur Rahman', '0168554125', 'afiqur', '1234', 'customer', '2019-08-21 10:26:54', '2019-08-21 10:26:54'),
(17, 'Saif Ali', '0165822455', 'saif', '1234', 'customer', '2019-08-21 10:26:54', '2019-08-21 10:26:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
