-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2018 at 12:50 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `prod_num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`user_id`, `product_id`, `prod_num`) VALUES
(16, 30, 1),
(16, 34, 1);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `user_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_price` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`user_id`, `order_id`, `order_date`, `total_price`) VALUES
(16, 39, '2018-04-17 12:02:40', 799),
(16, 40, '2018-04-17 12:02:54', 799),
(16, 41, '2018-04-17 19:35:07', 34756);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `order_id` int(10) NOT NULL,
  `prod_id` int(10) NOT NULL,
  `prod_num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`order_id`, `prod_id`, `prod_num`) VALUES
(39, 22, 1),
(40, 22, 1),
(41, 20, 11),
(41, 22, 13),
(41, 23, 20);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_manufacturer` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` double NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_capacity` int(10) NOT NULL,
  `inventory` int(11) NOT NULL,
  `product_description` varchar(1000) DEFAULT NULL,
  `product_hidden` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_manufacturer`, `product_title`, `product_image`, `product_price`, `product_color`, `product_capacity`, `inventory`, `product_description`, `product_hidden`) VALUES
(20, 'Apple', ' iPhone X ', 'bduhtopl.jpg', 999, 'Space Gray', 64, 88, 'iPhone X features an all-screen design with a 5.8-inch Super Retina HD display with HDR and True Tone.¹ Designed with the most durable glass ever in a smartphone and a surgical grade stainless steel band. Charges wirelessly.² Resists water and dust.³ 12MP', 0),
(21, 'Apple', 'iPhone X ', 'pzruishy.jpg', 1149, 'Space Gray', 256, 0, 'iPhone X features an all-screen design with a 5.8-inch Super Retina HD display with HDR and True Tone.¹ Designed with the most durable glass ever in a smartphone and a surgical grade stainless steel band. Charges wirelessly.² Resists water and dust.³ 12MP', 0),
(22, 'Apple', 'iPhone 8 plus', 'pppvgchu.jpg', 799, 'Red', 64, 85, 'iPhone 8 is a new generation of iPhone. Designed with most durable glass and a stronger aerospace-grade aluminum band. Charges wirelessly.¹ Resists water and dust.² 5.5-inch Retina HD display with True Tone.³ 12MP dual cameras offer improved Portrait mode', 0),
(23, 'Apple', 'iPhone 7 plus', 'ibgkcrjd.jpg', 669, 'Black', 32, 80, 'iPhone 7 Plus features dual 12MP cameras for high-resolution zoom and an ƒ/1.8 aperture for great low-light photos and 4K video. Optical image stabilization. A 5.5-inch Retina HD display with wide color and 3D Touch. An A10 Fusion chip for up to 2x faster', 0),
(25, 'apple', 'iPhone 8 Plus', 'rbvoyrop.jpg', 949, 'Gold', 256, 100, 'iPhone 8 is a new generation of iPhone. Designed with the most durable glass ever in a smartphone and a stronger aerospace grade aluminum band. Charges wirelessly.¹ Resists water and dust.² 5.5-inch Retina HD display with True Tone.³ 12 MP dual cameras of', 0),
(26, 'apple', 'iPhone 7 Plus', 'ilawfxee.jpg', 769, 'Sliver', 128, 100, 'iPhone 7 Plus features Dual 12MP cameras for high-resolution zoom and an ƒ/1.8 aperture for great low-light photos and 4K video. Optical image stabilization. A 5.5-inch Retina HD display with wide color and 3D Touch. An A10 Fusion chip for up to 2x faster', 0),
(27, 'Apple', 'iPhone SE', 'lqtcjnjs.jpg', 449, 'Sliver', 128, 100, 'iPhone SE features a 4-inch Retina display, an A9 chip with 64-bit desktop-class architecture, the Touch ID fingerprint sensor, a 12MP iSight camera, a FaceTime HD camera with Retina Flash, Live Photos, LTE and fast Wi-Fi, iOS 10, and iCloud.', 0),
(28, 'Apple', 'iPhone SE', 'ioylyzwd.jpg', 349, 'Black', 32, 100, 'iPhone SE features a 4-inch Retina display, an A9 chip with 64-bit desktop-class architecture, the Touch ID fingerprint sensor, a 12MP iSight camera, a FaceTime HD camera with Retina Flash, Live Photos, LTE and fast Wi-Fi, iOS 10, and iCloud.', 0),
(29, 'Samsung', 'Galaxy S9+', 'dxtkangy.jpg', 829, 'Midnight Black', 64, 100, 'Take on adventure and stay connected with this unlocked Samsung Galaxy S9+ in black, which lets you choose your provider. Featuring a Quad HD+ Super AMOLED display for immersive viewing on the 6.22-inch Infinity Display, this phone blends stunning streami', 0),
(30, 'Samsung', 'Galaxy S9', 'okhakzrp.jpg', 829, 'Black', 64, 100, 'Take on adventure and stay connected with this unlocked Samsung Galaxy S9+ in black, which lets you choose your provider. Featuring a Quad HD+ Super AMOLED display for immersive viewing on the 6.22-inch Infinity Display, this phone blends stunning streami', 0),
(31, 'Samsung', 'Galaxy Note8', 'nbvotmgg.jpg', 950, 'Midnight Black', 64, 100, 'Photos are clear with less blur on the world\'s first Dual Camera with Optical Image Stabilization on both lenses of the Samsung Galaxy Note8. With the powerful built-in S Pen, take notes without unlocking your screen, handwrite messages and make GIFs. This Samsung Galaxy Note8 comes with a long-lasting 3300mAh battery.', 0),
(32, 'Samsung', 'Galaxy S8', 'zijxwxil.jpg', 600, 'Midnight Black', 64, 100, 'Call, text and capture your world with this Samsung Galaxy S8 smartphone. Keep personal data secure with the phone\'s security features, which include facial recognition and a fingerprint sensor on the rear panel. Equipped with a Super AMOLED screen and Corning Gorilla Glass 5, this Samsung Galaxy S8 smartphone wraps elegance and durability into one chic electronic package.', 0),
(33, 'Google', 'Pixel 2', 'plzlatti.jpg', 649, 'Just Black ', 64, 100, 'Discover a better way to capture, store, and see the world. Pixel 2 features a smart camera that takes beautiful photos in any light, a fast-charging battery and the Google Assistant built-in.', 0),
(34, 'Google', 'Pixel 2 XL', 'dveowkdg.jpg', 849, 'Just Black ', 128, 100, 'Enjoy a large 5.99-inch touch screen with this black Google Pixel XL 2 smartphone. Its 1440p OLED panel delivers superior color reproduction, and the Snapdragon 835 processor and 4GB of RAM let you run multiple apps smoothly. This 128GB Google Pixel XL 2 smartphone has a dual LED flash on the camera for capturing memories in low-light environments.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) DEFAULT NULL,
  `user_lastname` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_randSalt` varchar(255) DEFAULT '$2y$10$iusersomecrazystrings22',
  `token` text,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_randSalt`, `token`, `admin`) VALUES
(1, 'jim', '123', 'Jim', 'Brady', 'jimbrady@gmail.com', '$2y$10$iusersomecrazystrings22', '', 1),
(15, '123456', '$2y$10$fUx8avqKXCjTjzlIwIUv5OWE2CGvzFX8846NMpxfy1YuEO6cKltni', NULL, NULL, '123@123', '$2y$10$iusersomecrazystrings22', NULL, 0),
(16, 'admin', '$2y$10$662mbv4dsuVbBd1DJdHw7.zt497iW7HP8cyACPlhA2kFxiiVfA9aC', NULL, NULL, 'admin@123.com', '$2y$10$iusersomecrazystrings22', NULL, 1),
(17, 'test1', '$2y$10$iYgENVlQR4NO2Jqr5QVn4eepH5jTocx0TBZN5HRf6o3CfK6CV7rES', NULL, NULL, '23452345@1241241', '$2y$10$iusersomecrazystrings22', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`user_id`,`product_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`order_id`,`prod_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
