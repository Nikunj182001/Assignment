-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 06:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Nikunj', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `cate_id` int(50) NOT NULL,
  `cate_name` varchar(50) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `quantity`, `product_id`, `cate_id`, `cate_name`, `user_id`) VALUES
(3, '2', 6, 2, 'Women', 1),
(7, '1', 21, 9, 'Smart Phone', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cate_id`, `cate_name`) VALUES
(1, 'Men'),
(2, 'Women'),
(3, 'Kids'),
(9, 'Smart Phone'),
(10, 'TV');

-- --------------------------------------------------------

--
-- Table structure for table `forgot_p`
--

CREATE TABLE `forgot_p` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `otp` varchar(50) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forgot_p`
--

INSERT INTO `forgot_p` (`id`, `email`, `otp`, `dateTime`) VALUES
(2, 'nikunjgagliya5@gmail.com', '126816', '0000-00-00 00:00:00'),
(3, 'nikunjgagliya5@gmail.com', '252880', '0000-00-00 00:00:00'),
(4, 'nikunjgagliya5@gmail.com', '702564', '0000-00-00 00:00:00'),
(5, 'nikunjgagliya5@gmail.com', '947669', '0000-00-00 00:00:00'),
(6, 'nikunjgagliya5@gmail.com', '731300', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `pay_id` varchar(50) NOT NULL,
  `pay_status` varchar(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `amount`, `pay_id`, `pay_status`, `date_added`) VALUES
(1, 'Nikunj Gagliya ', 152400, 'pay_Oc3gFItLmfg0bc', 'success', '2024-07-23 11:32:57'),
(2, 'Nikunj Gagliya ', 149800, 'pay_Oc4DoDhqriFb6Q', 'success', '2024-07-23 12:04:42'),
(3, 'kaushik', 149800, 'pay_Oc4NY4vgxBqOJS', 'success', '2024-07-23 12:13:55'),
(4, 'Nikunj Gagliya ', 22500, 'pay_OcisSgoMwCGPbc', 'success', '2024-07-25 03:51:13'),
(5, 'Nikunj Gagliya ', 39900, 'pay_OcjF5VGJs5jL1P', 'success', '2024-07-25 04:12:19'),
(6, 'Nikunj Gagliya ', 18000, 'pay_OgH6vE1h4dg121', 'success', '2024-08-03 03:17:09'),
(7, 'Nikunj Gagliya ', 24000, 'pay_Ogt44GCjUnABco', 'success', '2024-08-04 16:24:50'),
(8, 'dharam', 117800, 'pay_OjwnyK3KVqdocB', 'success', '2024-08-12 10:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `cate_id` int(50) NOT NULL,
  `cate_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `cate_id`, `cate_name`) VALUES
(1, 'Classic Spring', 'men-01.jpg', '120.00', 1, 'Men'),
(2, 'Air Force 1 X', 'men-02.jpg', '90.00', 1, 'Men'),
(3, 'Love Nana ‘20', 'men-03.jpg', '150.00', 1, 'Men'),
(4, 'Classic Devin ', 'men-04.jpg', '80.00', 1, 'Men'),
(5, 'New Green Jacket', 'women-01.jpg', '75.00', 2, 'Women'),
(6, 'Classic Dress', 'women-02.jpg', '45.00', 2, 'Women'),
(7, 'Spring Collection', 'women-03.jpg', '130.00', 2, 'Women'),
(8, 'Classic Devin', 'women-04.jpg', '150.00', 2, 'Women'),
(9, 'School Collection', 'kid-01.jpg', '75.00', 3, 'Kids'),
(10, 'Summer Cap ', 'kid-02.jpg', '12.00', 3, 'Kids'),
(11, 'Classic Kid ', 'kid-03.jpg', '30.00', 3, 'Kids'),
(12, 'Classic Devin', 'kid-01.jpg', '45.00', 3, 'Kids'),
(20, 'Lava', 'Lava Storm.jpg', '499', 9, 'Smart Phone'),
(21, 'Nokia', 'Nokia.jpg', '399', 9, 'Smart Phone'),
(22, 'Intex', 'intex.jpg', '999', 10, 'TV'),
(23, 'Sony', 'sony.jpg', '1299', 10, 'TV'),
(40, 'iPhone 15 pro max', 'iphone.jpg', '999', 9, 'Smart Phone');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `r_name` varchar(50) NOT NULL,
  `r_email` varchar(50) NOT NULL,
  `r_password` varchar(50) NOT NULL,
  `r_phone` bigint(50) NOT NULL,
  `r_address` varchar(50) NOT NULL,
  `r_gender` varchar(50) NOT NULL,
  `r_language` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `r_name`, `r_email`, `r_password`, `r_phone`, `r_address`, `r_gender`, `r_language`, `image`) VALUES
(1, 'Nikunj Gagliya ', 'nikunjgagliya5@gmail.com', 'nikunj', 6355869666, 'At- Sanosari', 'male', 'gujrati,Hindi,English', 'IMG20230429124710.jpg'),
(2, 'kaushik', 'kaushik@gmail.com', 'kaushik', 9510595071, 'At- Sanosari', 'male', 'gujrati,Hindi,English', 'IMG20230906170858.jpg'),
(4, 'Dharmesh', 'djgagliya@gmail.com', 'djg', 645645, 'At- Sanosari', 'male', 'gujrati,English', '2150040420.jpg'),
(5, 'dharam', 'dj@gmail.com', 'dharam', 89723657, 'jkhdgjik', 'male', 'GUJRATI', 'kid-03.jpg'),
(6, 'Dishant', 'dg@gmail.com', 'dishant', 9558204584, 'sanosari', 'male', 'gujrati', 'kid-01.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `forgot_p`
--
ALTER TABLE `forgot_p`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `forgot_p`
--
ALTER TABLE `forgot_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `category` (`cate_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
