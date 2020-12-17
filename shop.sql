-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2020 at 08:55 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `message` text COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`message`, `name`, `email`) VALUES
('', '', 'masoomeh16@iutlook.com'),
('', '', 'masoomeh16@iutlook.com'),
('', '', 'masoomeh16@outlook.com'),
('', '', 'masoomeh16@iutlook.com'),
('', '', 'masoomeh16@iutlook.com'),
('  Ø³Ù„Ø§Ù… Ø¬Ø·ÙˆØ±ÛŒØ¯ØŸ	 			\r\n   	 		', 'Ù…Ø¹ØµÙˆÙ…Ù‡', 'masoomeh16@outlook.com'),
('  Ø³Ù„Ø§Ù… Ø¬Ø·ÙˆØ±ÛŒØ¯ØŸ	 			\r\n   	 		', 'Ù…Ø¹ØµÙˆÙ…Ù‡', 'masoomeh16@outlook.com'),
('  Ø³Ù„Ø§Ù… Ø¬Ø·ÙˆØ±ÛŒØ¯ØŸ	 			\r\n   	 		', 'Ù…Ø¹ØµÙˆÙ…Ù‡', 'masoomeh16@outlook.com'),
('  Ø³Ù„Ø§Ù… Ø¬Ø·ÙˆØ±ÛŒØ¯ØŸ	 			\r\n   	 		', 'Ù…Ø¹ØµÙˆÙ…Ù‡', 'masoomeh16@outlook.com'),
('  Ø³Ù„Ø§Ù… Ø³Ø§ÛŒØª Ø²ÛŒØ¨Ø§ÛŒÛŒ Ø¯Ø§Ø±ÛŒØ¯  	 			\r\n   	 		', 'Ø²Ù‡Ø±Ø§', 'masoomeh16@outlook.com'),
('   Ø³Ù„Ø§Ù… Ø³Ø§ÛŒØª Ø²ÛŒØ¨Ø§ÛŒÛŒ Ø¯Ø§Ø±ÛŒØ¯ Ù…ÙˆÙÙ‚ Ø¨Ø§Ø´ÛŒØ¯	 			\r\n   	 		', 'Ù…Ø¹ØµÙˆÙ…Ù‡ ', 'masoomeh16@outlook.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `orderdate` date NOT NULL,
  `pro_code` int(10) NOT NULL,
  `pro_req` int(10) NOT NULL,
  `pro_price` float NOT NULL,
  `mobile` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `address` varchar(400) COLLATE utf8_persian_ci NOT NULL,
  `trackcode` varchar(24) COLLATE utf8_persian_ci NOT NULL,
  `state` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `orderdate`, `pro_code`, `pro_req`, `pro_price`, `mobile`, `address`, `trackcode`, `state`) VALUES
(40, 'd', '2020-05-07', 105, 1, 36022200, '09131883602', 'dgfghghghghghgh', '000000000000000000000000', 0),
(39, 'd', '2020-05-07', 105, 2, 36022200, '09367293878', 'Ø® Ø´Ù‡ÛŒØ¯Ø§Ù† ØºØ±Ø¨ÛŒ Ú©ÙˆÚ†Ù‡ Ø§Ù„Ù‡ÛŒØ§Ø±ÛŒ', '000000000000000000000000', 0),
(38, 'Ø¨Ø²', '2020-05-05', 103, 1, 3450000, '09302488561', 'Ø®ÛŒØ§Ø¨Ø§Ù† Ø®Ø±Ùˆ Ø®ÛŒØ§Ø¨Ø§Ù† Ú¯Ø§Ùˆ', '000000000000000000000000', 0),
(37, 'd', '2020-05-01', 101, 2, 2220000, '09367293878', 'dfddfgfgggggggg', '000000000000000000000000', 0),
(36, 'd', '2020-05-01', 101, 2, 2220000, '09367293878', 'dfddfgfgggggggg', '000000000000000000000000', 0),
(35, 'd', '2020-05-01', 101, 2, 2220000, '09367293878', 'dfddfgfgggggggg', '000000000000000000000000', 0),
(34, 'd', '2020-05-01', 102, 2, 2310000, '09131883602', 'bbbbbbbbbbbbbgggggggggggggggggg', '000000000000000000000000', 0),
(33, 'd', '2020-05-01', 102, 2, 2310000, '09131883602', 'bbbbbbbbbbbbbgggggggggggggggggg', '000000000000000000000000', 0),
(32, 'd', '2020-05-01', 102, 2, 2310000, '09131883602', 'bbbbbbbbbbbbbgggggggggggggggggg', '000000000000000000000000', 0),
(31, 'd', '2020-05-01', 102, 2, 2310000, '09131883602', 'bbbbbbbbbbbbbgggggggggggggggggg', '000000000000000000000000', 0),
(30, 'd', '2020-05-01', 102, 2, 2310000, '09131883602', 'bbbbbbbbbbbbbgggggggggggggggggg', '000000000000000000000000', 0),
(29, 'd', '2020-05-01', 102, 2, 2310000, '09131883602', 'bbbbbbbbbbbbbgggggggggggggggggg', '000000000000000000000000', 0),
(28, 'd', '2020-05-01', 102, 2, 2310000, '09131883602', 'bbbbbbbbbbbbbgggggggggggggggggg', '000000000000000000000000', 0),
(27, 'd', '2020-05-01', 102, 2, 2310000, '09131883602', 'bbbbbbbbbbbbbgggggggggggggggggg', '000000000000000000000000', 0),
(26, 'd', '2020-05-01', 102, 2, 2310000, '09131883602', 'bbbbbbbbbbbbbgggggggggggggggggg', '000000000000000000000000', 0),
(25, 'd', '2020-05-01', 102, 2, 2310000, '09131883602', 'bbbbbbbbbbbbbgggggggggggggggggg', '000000000000000000000000', 0),
(41, 'd', '2020-05-07', 105, 1, 36022200, '09131883602', 'dgfghghghghghgh', '000000000000000000000000', 0),
(42, 'd', '2020-05-07', 105, 1, 36022200, '09131883602', 'dgfghghghghghgh', '000000000000000000000000', 0),
(43, 'd', '2020-05-07', 105, 1, 36022200, '09131883602', 'dgfghghghghghgh', '000000000000000000000000', 0),
(44, 'd', '2020-05-07', 105, 1, 36022200, '09131883602', 'dgfghghghghghgh', '000000000000000000000000', 0),
(45, 'd', '2020-05-07', 103, 2, 3450000, '09367293878', 'Ø® Ø´Ù‡ÛŒØ¯Ø§Ù† ØºØ±Ø¨ÛŒ Ú©ÙˆÚ†Ù‡ 46', '000000000000000000000000', 0),
(46, 'Ù…Ø¹ØµÙˆÙ…Ù‡', '2020-05-07', 103, 1, 3450000, '09367293878', 'Ø® Ø´Ù‡ÛŒØ¯Ø§Ù† ØºØ±Ø¨ÛŒ Ú©ÙˆÚ†Ù‡ 46', '000000000000000000000000', 0),
(47, 'Ù…Ø¹ØµÙˆÙ…Ù‡', '2020-05-07', 103, 1, 3450000, '09367293878', 'Ø® Ø´Ù‡ÛŒØ¯Ø§Ù† ØºØ±Ø¨ÛŒ Ú©ÙˆÚ†Ù‡ 46', '000000000000000000000000', 0),
(48, 'Ù…Ø¹ØµÙˆÙ…Ù‡', '2020-05-07', 103, 1, 3450000, '09367293878', 'Ø® Ø´Ù‡ÛŒØ¯Ø§Ù† ØºØ±Ø¨ÛŒ Ú©ÙˆÚ†Ù‡ 46', '000000000000000000000000', 0),
(49, 'Ù…Ø¹ØµÙˆÙ…Ù‡', '2020-05-07', 103, 1, 3450000, '09367293878', ' Ø® Ø´Ù‡ÛŒØ¯Ø§Ù† ØºØ±Ø¨ÛŒ Ú©ÙˆÚ†Ù‡ 46', '000000000000000000000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pro_code` int(10) NOT NULL,
  `pro_name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `pro_qty` int(10) NOT NULL,
  `pro_price` float NOT NULL,
  `pro_image` varchar(80) COLLATE utf8_persian_ci NOT NULL,
  `pro_detail` text COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`pro_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_code`, `pro_name`, `pro_qty`, `pro_price`, `pro_image`, `pro_detail`) VALUES
(101, 'Ù„Ø¨Ø§Ø³ Ø¹Ø±ÙˆØ³ Ø§Ø±ÙˆÙ¾Ø§ÛŒÛŒ Ù…Ø¯Ù„ Ø¯Ù†Ø¨Ø§Ù„Ù‡ Ø¯Ø§Ø±', 4, 2220000, 'Ø¯.jpg', 'Ù„Ø¨Ø§Ø³ Ø¹Ø±ÙˆØ³ Ø²ÛŒØ¨Ø§ Ù…Ø¯Ù„ Ø¯Ù†Ø¨Ø§Ù„Ù‡ Ø¯Ø§Ø± Ùˆ Ú¯ÛŒÙ¾ÙˆØ±ÛŒ \r\nØ¨Ø§ Ø³Ø§ÛŒØ² Ù‡Ø§ÛŒ 38 Ùˆ 40 Ùˆ42 Ùˆ44'),
(102, 'Ù„Ø¨Ø§Ø³ Ø¹Ø±ÙˆØ³ Ø§Ø±ÙˆÙ¾Ø§ÛŒÛŒ Ù…Ø¯Ù„ Ø¢Ø³ØªÛŒÙ† Ø¯Ø§Ø±', 3, 2310000, 'Ø§.jpg', 'Ù„Ø¨Ø§Ø³ Ø¹Ø±ÙˆØ³ Ø²ÛŒØ¨Ø§ Ùˆ Ú¯ÛŒÙ¾ÙˆØ±ÛŒ Ø¨Ù‡ Ù‡Ù…Ø±Ø§Ù‡ ØªÙˆØ± Ø¬Ø¯Ø§'),
(103, 'Ù„Ø¨Ø§Ø³ Ø¹Ø±ÙˆØ³ Ø§Ø±ÙˆÙ¾Ø§ÛŒÛŒ Ù…Ø¯Ù„ Ú¯ÛŒÙ¾ÙˆØ±', 11, 3450000, 'ØªØ¯.jpg', 'Ù„Ø¨Ø§Ø³ Ø¹Ø±ÙˆØ³ Ø²ÛŒØ¨Ø§ Ùˆ Ø¨Ø§ Ù…Ø¯Ù„ Ù‡Ø§ÛŒ Ù…ØªÙ†ÙˆØ¹ Ùˆ Ù…Ø¯Ù„ Ù…Ø§Ù‡ÛŒ Ø¨Ù‡ Ù‡Ù…Ø±Ø§Ù‡ ØªÙˆØ± Ø¬Ø¯Ø§'),
(104, 'Ù„Ø¨Ø§Ø³ Ø¹Ø±ÙˆØ³ Ø§Ø±ÙˆÙ¾Ø§ÛŒÛŒ Ø³Ø§Ø¯Ù‡', 20, 2520000, 'Ù„Ø¨Ø§Ø³-Ø¹Ø±ÙˆØ³-Ø¢Ø³ØªÛŒÙ†-Ø¯Ø§Ø±.jpg', 'Ù„Ø¨Ø§Ø³ Ø¹Ø±ÙˆØ³ Ø¢Ø³ØªÛŒÙ† Ø¯Ø§Ø± Ø¨Ø§ Ø³Ø§ÛŒØ² Ù‡Ø§ÛŒ 40 Ùˆ 42 Ùˆ 44 '),
(105, 'Ù„Ø¨Ø§Ø³ Ø¹Ø±ÙˆØ³ Ø§Ø±ÙˆÙ¾Ø§ÛŒÛŒ', 13, 36022200, 'Iranian-bride-dress-model-58.jpg', 'Ù„Ø¨Ø§Ø³ Ø¹Ø±ÙˆØ³ '),
(106, 'Ù„Ø¨Ø§Ø³ Ø¹Ø±ÙˆØ³ Ø§Ø±ÙˆÙ¾Ø§ÛŒÛŒ Ù…Ø¯Ù„ Ù…Ø§Ù‡ÛŒ', 20, 2200000, 'Ù„Ø¨Ø§Ø³-Ø¹Ø±ÙˆØ³-Ø¬Ø¯ÛŒØ¯-8.jpg', 'Ù„Ø¨Ø§Ø³ Ø¹Ø±ÙˆØ³ Ù…Ø¯Ù„ Ù…Ø§Ù‡ÛŒ Ø¨Ø§ ØªÙˆØ± Ø¬Ø¯Ø§ Ùˆ Ø¯Ø± Ø§Ù†Ø¯Ø§Ø²Ù‡ Ù‡Ø§ÛŒ Ù…Ø®ØªÙ„Ù');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `realname` varchar(80) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_persian_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`realname`, `username`, `password`, `email`, `type`) VALUES
('masoomeh', 'd', '1', 'masoomeh16@iutlook.com', 0),
('Ù…Ø¹ØµÙˆÙ…Ù‡ ', 'Ù…Ø¹ØµÙˆÙ…Ù‡', '1381', 'masoomeh16@outlook.com', 0),
('masoomeh.e', 'me1381', '1381', 'masoomehc60@gmail.com', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
