-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 09:28 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supermarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`) VALUES
(2, 'Women'),
(4, 'Electronics'),
(7, 'Kids& Baby Products'),
(9, 'Men'),
(10, 'Watches Sunglasses Jewellery');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_ids` varchar(255) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT '1',
  `amount` varchar(255) NOT NULL,
  `shipping_address` text NOT NULL,
  `bkash_number` varchar(255) DEFAULT NULL,
  `bkash_transection_id` varchar(255) DEFAULT NULL,
  `token_no` varchar(25) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `user_id`, `product_ids`, `order_status`, `amount`, `shipping_address`, `bkash_number`, `bkash_transection_id`, `token_no`, `date`) VALUES
(5, 1, '8', 2, '8000', 'Raj', '01740483311', '1122334455', '825', '2017-11-25 16:32:00'),
(6, 2, '6,8', 2, '29000', 'raj', '01740483311', '11111111111111111', '508', '2017-11-25 16:55:06'),
(7, 2, '1', 1, '4000', 'Dhaka', '01777777777', '11111111111', '274', '2017-11-26 10:51:39'),
(8, 1, '8', 1, '24000', 'aaaaaaaaaa', '01740483311', '11111111111111111', '801', '2018-05-10 11:19:29'),
(9, 6, '8', 1, '8000', 'sdljpsdijcklxccnklxcfcvjipdfvlcvm ,lfgvjgh', '01722706409', ';sldmckl;sdjfkpdfkfl[', '123', '2018-12-01 12:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_cat_id` int(11) NOT NULL,
  `product_details` text NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `product_price`, `product_cat_id`, `product_details`, `product_image`) VALUES
(14, 'Dark green Japanese Silk Saree for Women', 500, 2, 'Saree is very common dress in this subcontinental area like Bangladesh. Silk is considered to be one of the most luxurious fabrics and is also extremely versatile as it can be successfully incorporated into any look. Women look very gorgeous in colorful sarees, and so they love to wear and have luxurious and colorful sarees for different social and cultural functions. The young lady to the elderly person - every woman is fascinated about sarees just because of our culture.', '032db77fd777693a9c23b73a4f11ee4d.jpg'),
(15, 'HUdi Jacket for Men', 1000, 9, 'This is perfect for the young and smart person which can be worn for any occasion. Made from Cotton which gives it a distinct identity. Soft material fabrics are used for making as it is supposed to be a comfortable loose fitting dress. It has become more common to find with embroidery, colored embellishments, and tailored cuts. The colorful will definitely make you look smart and fashionable.', '214139e27cfd908613f47d6833edd690.jpg'),
(16, 'Digital Electronic Blood Pressure Monitor - White', 1500, 4, 'This tool is used to determine heart rate and blood pressure of man. Used with how to install this tool on the arm sphygmomanometer and the device will read blood pressure slowly, wait a while to know the final outcome.\r\n\r\n    Name: Arm automatic electronic sphygmomanometer\r\n    Display: LCD liquid crystal display\r\n    Measurement method: oscillographic detection method\r\n    Normal working environment: temperature 5 ~ 40 ? humidity = 80% RH\r\n    Transport and storage environment: humidity -20 ~ 55 ? humidity 10% ~ 90% RH\r\n    Measurable arm circumference: about 22cm ~ 32cm\r\n    Weight: about 5.35 kg\r\n    Power Supply:DC 6V (4 x AA Battery)\r\n    Dimension: 9.8 x 12.6 x 6.0 cm\r\n    Safety Category: Internal Power Supply Type B\r\n    Press the way: vibration plate type pump pressure adjustment mode\r\n    Quick Exhaust Mode: Extreme Exhaust Valve Open\r\n    Pressure detection: Semiconductor pressure sensor\r\n    Pulse detection: Semiconductor pressure sensor', 'f31065f187c5b36434164f2204ef3073.jpg'),
(17, 'Navy Acryalic and Viscose Party Dress For Girls', 2500, 7, 'A party dress is a dress worn especially for a party. Different types of party such as children''s party, cocktail party, garden party and costume party would tend to require different styles of dress. Make your baby become more fashionable, attractive, beautiful, your kids will like it as a Princess gift.', '24738c0b50e95116bc3c0b8520b211ea.jpg'),
(18, 'Retro Design Quartz Wrist Watch', 390, 10, 'Adjustable pin buckle fastening\r\nAs a perfect gift for yourself or your friends\r\nFashion and Comfortable design', '3cbbf0af8034685b1f8c5aa20dd9c759.jpg'),
(19, 'Olive Twill Gabardine Pant for Men', 750, 9, 'Big Bang Fashion is one of the popular brands for all type of products at reasonable price. They provide us with a different type of products very frequently. Shop your choice from this seller!', '2306e6938e98abc9b5adc8795390ae6c.jpg'),
(20, 'Maroon Twill Gabardine Pant for Men', 800, 9, '', '99617a4b5ec946c8d7d5a9215879408e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '2',
  `image` text NOT NULL,
  `DOB` date NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `fullname`, `password`, `role`, `image`, `DOB`, `address`) VALUES
(1, 'admin@gmail.com', 'Nowshin', '123456', 1, '5160741b1916d5f723d2269c6712e7ca.jpg', '1994-10-02', 'Raj'),
(2, 'user@gmail.com', 'Mr.User', '12345', 2, '9b65da277374d5fbfdcd6aeef0a5b8f2.png', '1992-02-22', 'Rajshahi'),
(3, 'rk@gmail.com', 'rk', '12345', 2, '', '0000-00-00', ''),
(4, 'rkreza24@gmail.com', 'RK Reza', '12345', 2, '', '0000-00-00', ''),
(5, 'azadaowal@gmail.com', 'Abdul Aowal', '12345', 2, '', '0000-00-00', ''),
(6, 'ak@g.com', 'akib', '123', 2, '67a9a06e626d009710af5232a5f935cf.jpg', '0000-00-00', ''),
(7, 'Priyanka@gmail.com', 'Priyanka', '123', 2, 'a0bb42fc3d5391a927887ccb8dcb4af7uploads36412413_2087424858138482_4328100194139766784_n.jpg', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
