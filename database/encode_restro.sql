-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 11:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `encode_restro`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_phone` bigint(15) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `nearby_location` varchar(100) NOT NULL,
  `total_payment` int(11) NOT NULL,
  `ip_add` varchar(100) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `customer_name`, `customer_phone`, `customer_address`, `nearby_location`, `total_payment`, `ip_add`, `order_date`) VALUES
(126, 'jhg jyryt', 6876515165, 'slg', 'nts more', 160, '::1', '2021-12-07 18:06:52'),
(127, 'K Kumar', 9465436546, 'sliguri', 'City Center', 240, '::1', '2021-12-07 18:13:49'),
(128, 'arnab kar', 6734201016, 'Mallaguri', 'SBI ATM', 990, '::1', '2021-12-07 18:40:23'),
(129, 'Manab Roy', 3464187943, 'Jalpaiguri', 'Jalpaiguru Post Office', 1050, '::1', '2021-12-07 18:56:50'),
(130, 'navin', 9649816515, 'slg', 'Clg Para', 100, '::1', '2021-12-07 20:51:10'),
(131, 'K Mangalam', 8735403216, 'Jalpaiguri', 'Jalpaiguru Post Office', 60, '::1', '2021-12-10 15:35:04'),
(132, 'Dipak Shah', 6968721350, 'Siliguri', 'Clg Para', 300, '::1', '2021-12-10 18:14:22'),
(133, 'Shakti Pandey', 9584871210, 'hakim Para', 'Clg Para', 560, '::1', '2021-12-10 18:16:53'),
(134, 'P K reddy', 1654065056, 'Bagdogra', 'opposite airport', 240, '::1', '2021-12-10 18:23:42'),
(135, 'S Chhetri', 165795454, 'Shiv Mandir', 'near BDO office', 675, '::1', '2021-12-10 18:36:22'),
(136, 'G K Puri', 2498784651, 'Siliguri', 'SBI ATM', 200, '::1', '2021-12-10 18:55:36'),
(137, 'G K Puri', 2498784651, 'Siliguri', 'SBI ATM', 200, '::1', '2021-12-10 18:56:35'),
(138, 'kjgf jydttfcg', 4671316357, 'jktyhgd fghfc', 'DGV ', 1340, '::1', '2021-12-10 19:01:20'),
(139, 'RK Ray', 8759321560, 'Matigara', 'near panchnai bridge', 825, '::1', '2021-12-10 19:08:01'),
(140, 'Rakesh Saha', 2164956429, 'Siliguri', 'Clg Para', 300, '::1', '2021-12-11 15:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_cart`
--

CREATE TABLE `delivery_cart` (
  `deliveryCart_id` int(11) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `food_id` int(11) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `food_price` int(11) NOT NULL,
  `food_qty` int(11) NOT NULL,
  `foodtotal_price` int(11) NOT NULL,
  `ip_add` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_order`
--

CREATE TABLE `delivery_order` (
  `order_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  `total_payment` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `customer_ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_order`
--

INSERT INTO `delivery_order` (`order_id`, `order_date`, `customer_phone`, `total_payment`, `payment_status`, `order_type`, `order_status`, `customer_ip`) VALUES
(13, '2021-12-07 18:57:31', '3464187943', '1050', 'paid', 'pickup', 'Delivered', '::1'),
(14, '2021-12-10 19:08:47', '8759321560', '825', 'paid', 'pickup', 'Delivered', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_orderlist`
--

CREATE TABLE `delivery_orderlist` (
  `serial_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `food_price` int(11) NOT NULL,
  `food_qty` int(11) NOT NULL,
  `order_subtotal` int(11) NOT NULL,
  `order_type` varchar(50) DEFAULT NULL,
  `order_date` datetime NOT NULL,
  `customer_phone` bigint(15) NOT NULL,
  `customer_ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_orderlist`
--

INSERT INTO `delivery_orderlist` (`serial_id`, `food_id`, `food_name`, `food_price`, `food_qty`, `order_subtotal`, `order_type`, `order_date`, `customer_phone`, `customer_ip`) VALUES
(30, 7, 'Chicken Biryani', 150, 5, 750, 'pickup', '2021-12-07 18:56:50', 3464187943, '::1'),
(31, 14, 'Vanila Icecream', 75, 4, 300, 'pickup', '2021-12-07 18:56:50', 3464187943, '::1'),
(32, 7, 'Chicken Biryani', 150, 5, 750, 'pickup', '2021-12-10 19:08:01', 8759321560, '::1'),
(33, 11, 'masala tea', 15, 5, 75, 'pickup', '2021-12-10 19:08:01', 8759321560, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `dinein_cart`
--

CREATE TABLE `dinein_cart` (
  `dineIn_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `food_price` int(11) NOT NULL,
  `food_qty` int(11) NOT NULL,
  `foodtotal_price` int(11) NOT NULL,
  `ip_add` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dinein_order`
--

CREATE TABLE `dinein_order` (
  `order_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  `total_payment` int(11) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `order_date` datetime NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dinein_order`
--

INSERT INTO `dinein_order` (`order_id`, `table_id`, `customer_phone`, `total_payment`, `payment_status`, `order_date`, `customer_ip`) VALUES
(26, 3, '9465436546', 240, 'paid', '2021-12-07 18:14:29', '::1'),
(27, 4, '6734201016', 990, 'paid', '2021-12-07 18:41:04', '::1'),
(28, 2, '9649816515', 100, 'paid', '2021-12-07 20:51:34', '::1'),
(29, 4, '8735403216', 60, 'paid', '2021-12-10 15:35:28', '::1'),
(30, 4, '8735403216', 60, 'paid', '2021-12-10 15:38:01', '::1'),
(31, 4, '8735403216', 60, 'paid', '2021-12-10 15:38:18', '::1'),
(32, 4, '8735403216', 60, 'paid', '2021-12-10 15:39:14', '::1'),
(33, 4, '8735403216', 60, 'paid', '2021-12-10 15:39:21', '::1'),
(34, 3, '6968721350', 300, 'paid', '2021-12-10 18:14:44', '::1'),
(35, 2, '9584871210', 560, 'paid', '2021-12-10 18:17:59', '::1'),
(36, 2, '9584871210', 560, 'paid', '2021-12-10 18:18:25', '::1'),
(37, 2, '9584871210', 560, 'paid', '2021-12-10 18:18:39', '::1'),
(38, 2, '9584871210', 560, 'paid', '2021-12-10 18:19:06', '::1'),
(39, 2, '9584871210', 560, 'paid', '2021-12-10 18:20:52', '::1'),
(40, 2, '9584871210', 560, 'paid', '2021-12-10 18:21:11', '::1'),
(41, 2, '9584871210', 560, 'paid', '2021-12-10 18:21:12', '::1'),
(42, 2, '9584871210', 560, 'paid', '2021-12-10 18:22:03', '::1'),
(43, 4, '1654065056', 240, 'paid', '2021-12-10 18:24:01', '::1'),
(44, 4, '1654065056', 240, 'paid', '2021-12-10 18:28:08', '::1'),
(45, 4, '1654065056', 240, 'paid', '2021-12-10 18:29:33', '::1'),
(46, 4, '1654065056', 240, 'paid', '2021-12-10 18:30:21', '::1'),
(47, 5, '0165795454', 675, 'paid', '2021-12-10 18:36:59', '::1'),
(48, 5, '0165795454', 675, 'paid', '2021-12-10 18:37:17', '::1'),
(49, 5, '0165795454', 675, 'paid', '2021-12-10 18:37:37', '::1'),
(50, 5, '0165795454', 675, 'paid', '2021-12-10 18:37:49', '::1'),
(51, 5, '0165795454', 675, 'paid', '2021-12-10 18:39:17', '::1'),
(52, 5, '0165795454', 675, 'paid', '2021-12-10 18:39:24', '::1'),
(53, 5, '0165795454', 675, 'paid', '2021-12-10 18:40:36', '::1'),
(54, 5, '0165795454', 675, 'paid', '2021-12-10 18:40:49', '::1'),
(55, 2, '2498784651', 200, 'paid', '2021-12-10 18:56:51', '::1'),
(56, 2, '2498784651', 200, 'paid', '2021-12-10 18:57:46', '::1'),
(57, 6, '4671316357', 1340, 'paid', '2021-12-10 19:01:47', '::1'),
(58, 3, '2164956429', 300, 'paid', '2021-12-11 15:31:06', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `food_item`
--

CREATE TABLE `food_item` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `food_price` int(11) NOT NULL,
  `food_unit` varchar(50) NOT NULL,
  `food_qty` int(11) NOT NULL,
  `food_stock` int(11) NOT NULL,
  `food_category` varchar(50) NOT NULL,
  `food_img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_item`
--

INSERT INTO `food_item` (`food_id`, `food_name`, `food_price`, `food_unit`, `food_qty`, `food_stock`, `food_category`, `food_img`) VALUES
(1, 'Veg Momo (8pc)', 30, 'Plate', 20, 50, 'fast-food', 'momo.png'),
(2, 'Fry Momo(8pc)', 50, 'plate', 18, 30, 'fast-food', 'fried-momo.png'),
(3, 'Veg Roll', 30, 'piece', 70, 100, 'fast-food', 'plane-roll.png'),
(4, 'Chicken Roll', 80, 'piece', 117, 200, 'fast-food', 'chicken-roll.png'),
(5, 'Egg Roll', 50, 'piece', 25, 50, 'fast-food', 'egg-roll.png'),
(6, 'Motton Roll', 100, 'piece', 98, 100, 'fast-food', 'motton-roll.png'),
(7, 'Chicken Biryani', 150, 'plate', 5, 20, 'non-veg', 'panir-chowmin.png'),
(8, 'red tea', 10, 'cup', 20, 20, 'beverage', 'lemon-tea.jfif'),
(9, 'lemon tea', 10, 'cup', 10, 20, 'beverage', 'lemon-tea.jfif'),
(10, 'milk tea', 10, 'cup', 30, 50, 'beverage', 'milk-tea.png'),
(11, 'masala tea', 15, 'cup', 15, 20, 'beverage', 'milk-tea.png'),
(12, 'Ice Cream', 50, 'glass', 10, 10, 'desert', 'ice-cream.png'),
(13, 'Chocolate Icecream', 80, 'glass', 15, 20, 'desert', 'ice-cream.png'),
(14, 'Vanila Icecream', 75, 'glass', 20, 20, 'desert', 'ice-cream.png'),
(15, 'Masala Chat', 50, 'plate', 50, 50, 'fast-food', 'masala-chat.jfif'),
(16, 'Samosa Chat', 60, 'plate', 5, 50, 'fast-food', 'samosa-chat.jfif'),
(17, 'Chiken Tikka', 180, 'plate', 30, 30, 'non-veg', 'chicken-tikka.png'),
(18, 'Chiken Curry', 150, 'plate', 15, 20, 'non-veg', 'chicken-curry.png'),
(19, 'Chicken Tangadi', 200, 'plate', 40, 50, 'non-veg', 'chicken-tangdi.png');

-- --------------------------------------------------------

--
-- Table structure for table `kitchen_orderlist`
--

CREATE TABLE `kitchen_orderlist` (
  `kot_id` int(11) NOT NULL,
  `kot_status` varchar(10) NOT NULL DEFAULT '0',
  `cust_phone` varchar(15) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kitchen_orderlist`
--

INSERT INTO `kitchen_orderlist` (`kot_id`, `kot_status`, `cust_phone`, `order_id`, `order_date`, `order_type`) VALUES
(29, '0', '9465436546', 26, '2021-12-07 18:14:29', 'dine_in'),
(30, '1', '6734201016', 27, '2021-12-07 18:41:04', 'dine_in'),
(31, '0', '3464187943', 13, '2021-12-07 18:57:31', 'pickup'),
(32, '0', '9649816515', 28, '2021-12-07 20:51:34', 'dine_in'),
(33, '0', '8735403216', 29, '2021-12-10 15:35:28', 'dine_in'),
(34, '0', '8735403216', 30, '2021-12-10 15:38:01', 'dine_in'),
(35, '0', '8735403216', 31, '2021-12-10 15:38:18', 'dine_in'),
(36, '0', '8735403216', 32, '2021-12-10 15:39:14', 'dine_in'),
(37, '0', '8735403216', 33, '2021-12-10 15:39:21', 'dine_in'),
(38, '0', '6968721350', 34, '2021-12-10 18:14:44', 'dine_in'),
(39, '0', '9584871210', 35, '2021-12-10 18:17:59', 'dine_in'),
(40, '0', '9584871210', 36, '2021-12-10 18:18:25', 'dine_in'),
(41, '0', '9584871210', 37, '2021-12-10 18:18:39', 'dine_in'),
(42, '0', '9584871210', 38, '2021-12-10 18:19:06', 'dine_in'),
(43, '0', '9584871210', 39, '2021-12-10 18:20:52', 'dine_in'),
(44, '0', '9584871210', 40, '2021-12-10 18:21:11', 'dine_in'),
(45, '0', '9584871210', 41, '2021-12-10 18:21:12', 'dine_in'),
(46, '0', '9584871210', 42, '2021-12-10 18:22:03', 'dine_in'),
(47, '0', '1654065056', 43, '2021-12-10 18:24:01', 'dine_in'),
(48, '0', '1654065056', 44, '2021-12-10 18:28:08', 'dine_in'),
(49, '0', '1654065056', 45, '2021-12-10 18:29:33', 'dine_in'),
(50, '0', '1654065056', 46, '2021-12-10 18:30:21', 'dine_in'),
(51, '0', '0165795454', 47, '2021-12-10 18:36:59', 'dine_in'),
(52, '0', '0165795454', 48, '2021-12-10 18:37:17', 'dine_in'),
(53, '0', '0165795454', 49, '2021-12-10 18:37:37', 'dine_in'),
(54, '0', '0165795454', 50, '2021-12-10 18:37:49', 'dine_in'),
(55, '0', '0165795454', 51, '2021-12-10 18:39:17', 'dine_in'),
(56, '0', '0165795454', 52, '2021-12-10 18:39:24', 'dine_in'),
(57, '0', '0165795454', 53, '2021-12-10 18:40:36', 'dine_in'),
(58, '0', '0165795454', 54, '2021-12-10 18:40:49', 'dine_in'),
(59, '0', '2498784651', 55, '2021-12-10 18:56:51', 'dine_in'),
(60, '0', '2498784651', 56, '2021-12-10 18:57:46', 'dine_in'),
(61, '0', '4671316357', 57, '2021-12-10 19:01:47', 'dine_in'),
(62, '0', '8759321560', 14, '2021-12-10 19:08:47', 'pickup'),
(63, '0', '2164956429', 58, '2021-12-11 15:31:06', 'dine_in');

-- --------------------------------------------------------

--
-- Table structure for table `pay_orders`
--

CREATE TABLE `pay_orders` (
  `p_id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `razorpay_payment_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `order_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pay_orders`
--

INSERT INTO `pay_orders` (`p_id`, `order_id`, `razorpay_payment_id`, `status`, `phone`, `name`, `price`, `order_date`) VALUES
(20, 'order_IUE3BmwaqwK5Vk', 'pay_IUE3Jm2yZYX0Zh', 'success', 8787878787, 'kali singh', 100, '2021-12-06  12:00:00:am'),
(21, 'order_IUECV897VxFiQE', 'pay_IUECf46ZLKfzit', 'success', 9595959595, 'hmgfyg', 190, ''),
(22, 'order_IUVZ1vUqCHNheZ', 'pay_IUVZAoGT2CA9FB', 'success', 9898982013, 'R prasad', 85, ''),
(23, 'order_IUVoSmJBF7NNob', 'pay_IUVpIqpRrsJvTp', 'success', 8984750750, 'B. Sarkar', 1450, ''),
(24, 'order_IUW9KspaT4YugF', 'pay_IUW9ZBlRH9RXX9', 'success', 7897891010, 'C Shekhar', 495, ''),
(25, 'order_IUWETXq21gw4f8', 'pay_IUWEbmH9tAfCXK', 'success', 6731311331, 'M. Shami', 60, ''),
(26, 'order_IUWTGePo1hQTR8', 'pay_IUWTkAGAmHeuwW', 'success', 9879842136, 'K. Ray', 460, ''),
(27, 'order_IUWfyBnctAtmao', 'pay_IUWgWT7NEXPJan', 'success', 6403031771, 'C. Kumar', 1195, ''),
(28, 'order_IUWnjgY1ddz39U', 'pay_IUWnsU5y4Atwnq', 'success', 8973102658, 'B Gupta', 120, ''),
(29, 'order_IUXmssRMDraVIy', 'pay_IUXvGgJiOBKX5S', 'success', 7986686320, 'P Raja', 150, ''),
(30, 'order_IUYuYNGgLAbSDO', 'pay_IUYumNjBDk3dTz', 'success', 6846546316, 'P Parker', 360, ''),
(31, 'order_IUZ8DdpoKWklf1', 'pay_IUZ8LOPyb8aF6A', 'success', 9825825811, 'Kali Singh', 75, ''),
(32, 'order_IUaMvWj25QtAqS', 'pay_IUaN31LkuTKdof', 'success', 8264796130, 'dhiraj Adhikari', 195, ''),
(33, 'order_IUaSwzoiwSRuXT', 'pay_IUaT3T1Ghoulht', 'success', 6876515165, 'jhg jyryt', 160, ''),
(34, 'order_IUaZZQYpk5m36k', 'pay_IUaZg51sy1z9dk', 'success', 9465436546, 'K Kumar', 240, ''),
(35, 'order_IUaZZQYpk5m36k', 'pay_IUaZg51sy1z9dk', 'success', 9465436546, 'K Kumar', 240, ''),
(36, 'order_IUb1tc7L0pGUdV', 'pay_IUb29wiqZXJdWd', 'success', 6734201016, 'arnab kar', 990, ''),
(37, 'order_IUbJQtMdc3Kv3C', 'pay_IUbJXisVjQLSVU', 'success', 3464187943, 'Manab Roy', 1050, ''),
(38, 'order_IUdFsUSZSyQWcw', 'pay_IUdG1Q1EO2ZiuZ', 'success', 9649816515, 'navin', 100, ''),
(39, 'order_IVjTIcKCaFA0au', 'pay_IVjTRDNtT7ij1Z', 'success', 8735403216, 'K Mangalam', 60, ''),
(40, 'order_IVmBYDpVyaNkxH', 'pay_IVmBgClnprsbmC', 'success', 6968721350, 'Dipak Shah', 300, ''),
(41, 'order_IVmF0VCZpLGyBs', 'pay_IVmF6yPFPjMKQL', 'success', 9584871210, 'Shakti Pandey', 560, ''),
(42, 'order_IVmLLN1EClkUmZ', 'pay_IVmLTkKGc0mtj8', 'success', 1654065056, 'P K reddy', 240, ''),
(43, 'order_IVmZ47ZpVWRSEn', 'pay_IVmZBEzU2GmNKz', 'success', 165795454, 'S Chhetri', 675, ''),
(44, 'order_IVmu38ebET8lNH', 'pay_IVmuAPZL5jUxzm', 'success', 2498784651, 'G K Puri', 200, ''),
(45, 'order_IVmzGLgBN54sSM', 'pay_IVmzN8V5gyGI1X', 'success', 4671316357, 'kjgf jydttfcg', 1340, ''),
(46, 'order_IVn6WR6Gzy3wiA', 'pay_IVn6mKMi6NgcGu', 'success', 8759321560, 'RK Ray', 825, ''),
(47, 'order_IW7vgS2V6l0i5k', 'pay_IW7vw4xcRL9X9n', 'success', 2164956429, 'Rakesh Saha', 300, '');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_dealer`
--

CREATE TABLE `purchase_dealer` (
  `dealer_id` int(11) NOT NULL,
  `dealer_name` varchar(100) NOT NULL,
  `dealer_phone` bigint(20) NOT NULL,
  `dealer_email` varchar(100) NOT NULL,
  `store_name` varchar(50) NOT NULL,
  `store_phone` bigint(20) NOT NULL,
  `store_address` varchar(250) NOT NULL,
  `purchase_date` datetime NOT NULL,
  `total_price` int(11) NOT NULL,
  `paid_price` int(11) NOT NULL,
  `due_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_dealer`
--

INSERT INTO `purchase_dealer` (`dealer_id`, `dealer_name`, `dealer_phone`, `dealer_email`, `store_name`, `store_phone`, `store_address`, `purchase_date`, `total_price`, `paid_price`, `due_price`) VALUES
(13, 'Roshan Shah', 6574001238, 'rroshan@g.in', 'Roshani Groceries', 9874561230, 'Tumbajote', '2021-07-29 18:32:00', 200, 200, 0),
(14, 'Sujit Sharma', 8547123690, 'sujit@gmail.in', 'Sujit Store', 5487120369, 'Beldangi', '2021-08-06 19:06:00', 2800, 2500, 300);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_items`
--

CREATE TABLE `purchase_items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_rate` int(11) NOT NULL,
  `item_qty` varchar(50) NOT NULL,
  `purchase_stock` varchar(50) NOT NULL,
  `item_total` int(11) NOT NULL,
  `dealer_id` int(11) NOT NULL,
  `purchase_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_items`
--

INSERT INTO `purchase_items` (`item_id`, `item_name`, `item_rate`, `item_qty`, `purchase_stock`, `item_total`, `dealer_id`, `purchase_date`) VALUES
(29, 'ring pasta', 50, '500', '5000', 25, 13, '2021-07-29 18:32:00'),
(30, 'meggie Masala', 10, '2', '10', 100, 13, '2021-07-29 18:32:00'),
(31, 'Kishan Tomato Catchup', 65, '0', '10', 325, 13, '2021-07-29 18:32:00'),
(32, 'Sprite', 90, '7', '10', 450, 13, '2021-07-29 18:32:00'),
(33, 'coffee Podwder', 450, '2', '5', 900, 14, '2021-08-03 17:25:00'),
(34, 'paneer', 280, '5', '30', 1500, 14, '2021-08-03 17:25:00'),
(35, 'milk powder', 400, '20', '20', 400, 14, '2021-08-03 17:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_category`
--

CREATE TABLE `recipe_category` (
  `recipe_category_id` int(11) NOT NULL,
  `recipe_category_name` varchar(100) NOT NULL,
  `recipe_category_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe_category`
--

INSERT INTO `recipe_category` (`recipe_category_id`, `recipe_category_name`, `recipe_category_img`) VALUES
(1, 'fast-food', 'fast-food.png'),
(2, 'beverage', 'beverage.png'),
(3, 'desert', 'desert.png'),
(4, 'non-veg', 'non-veg.png'),
(5, 'veg', 'veg.png'),
(6, 'mains', 'dish.png'),
(7, 'starter', 'salad.png'),
(8, 'breakfast', 'breakfast.png');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_items`
--

CREATE TABLE `recipe_items` (
  `recipe_id` int(11) NOT NULL,
  `recipe_name` text NOT NULL,
  `ingradient_name` text NOT NULL,
  `ingradient_qty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe_items`
--

INSERT INTO `recipe_items` (`recipe_id`, `recipe_name`, `ingradient_name`, `ingradient_qty`) VALUES
(1, 'Chicken Pakora 1Plate(8pc)', 'Chicken Meat', '150g'),
(2, 'Chicken Pakora 1Plate(8pc)', 'Besan', '100g'),
(3, 'Chicken Pakora 1Plate(8pc)', 'Salt', '10g'),
(4, 'Chicken Pakora 1Plate(8pc)', 'Onion', '1pc'),
(5, 'Chicken Pakora 1Plate(8pc)', 'chille', '2pc'),
(6, 'Chicken Pakora 1Plate(8pc)', 'masala', '10g'),
(7, 'Chicken Pakora 1Plate(8pc)', 'oil', '100'),
(8, 'Typoo', 'Maida', '50g'),
(9, 'Typoo', 'Onion', '2pc'),
(10, 'Typoo', 'cabbage', '200g'),
(11, 'Typoo', 'salt', '5g'),
(12, 'Typoo', 'chinese masala', '5g'),
(13, 'Typoo', 'chile', '2pc');

-- --------------------------------------------------------

--
-- Table structure for table `restro_member`
--

CREATE TABLE `restro_member` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `member_phone` bigint(15) NOT NULL,
  `member_pass` varchar(20) NOT NULL,
  `member_type` varchar(50) NOT NULL,
  `member_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restro_member`
--

INSERT INTO `restro_member` (`member_id`, `member_name`, `member_phone`, `member_pass`, `member_type`, `member_status`) VALUES
(1, 'Admin', 9876541230, 'a@123', 'admin', 'active'),
(2, 'manager', 9871230456, 'm@123', 'manager', 'active'),
(3, 'staff', 7093156196, 's@123', 'staff', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `restro_staff`
--

CREATE TABLE `restro_staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `staff_phone` bigint(15) NOT NULL,
  `staff_phone2` bigint(15) NOT NULL,
  `staff_email` varchar(100) NOT NULL,
  `staff_dob` date NOT NULL,
  `staff_city` varchar(100) NOT NULL,
  `staff_address` varchar(100) NOT NULL,
  `staff_role` varchar(50) NOT NULL,
  `staff_joining` date NOT NULL,
  `staff_salary` int(11) NOT NULL,
  `staff_img` varchar(100) NOT NULL,
  `staff_doc` varchar(100) NOT NULL,
  `restro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restro_staff`
--

INSERT INTO `restro_staff` (`staff_id`, `staff_name`, `staff_phone`, `staff_phone2`, `staff_email`, `staff_dob`, `staff_city`, `staff_address`, `staff_role`, `staff_joining`, `staff_salary`, `staff_img`, `staff_doc`, `restro_id`) VALUES
(1, 'P. Pandey', 98766543210, 0, 'ppandey123@g.in', '1987-01-24', 'Siliguri', 'Champasari Anchal, Champasari', 'waiter', '2021-01-14', 8000, '8.jpg', 'high-school-diploma-certificate.jpg', 1),
(2, 'Kumar Ranjit', 987650505, 0, 'kranjit123@gmail.com', '1991-10-04', 'Falakata', 'Falakata, Cooch Behar', 'manager', '2020-12-10', 12000, '1.jpg', 'sonu-10th-doc.jpg', 1),
(3, 'Sonu Singh', 6745120334, 8448915632, 'ssingh257@gmail.com', '1998-05-01', 'Jaisalmer', 'Rajasthan', 'chef', '2020-06-24', 15000, 'person2.jpg', 'gsm6-marksheet.txt', 1);

-- --------------------------------------------------------

--
-- Table structure for table `restro_tables`
--

CREATE TABLE `restro_tables` (
  `table_id` int(11) NOT NULL,
  `table_number` varchar(10) NOT NULL,
  `table_seat` int(11) NOT NULL,
  `table_type` varchar(50) NOT NULL,
  `table_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restro_tables`
--

INSERT INTO `restro_tables` (`table_id`, `table_number`, `table_seat`, `table_type`, `table_status`) VALUES
(1, 'table 1', 4, 'ac', 0),
(2, 'table 2', 4, 'ac', 0),
(3, 'table 3', 4, 'ac', 0),
(4, 'table 4', 4, 'ac', 0),
(5, 'table 5', 4, 'ac', 0),
(6, 'table 6', 4, 'ac', 0),
(7, 'table 7', 10, 'ac', 0),
(8, 'table 8', 10, 'ac', 0),
(9, 'table 9', 4, 'non_ac', 0),
(10, 'table 10', 4, 'non_ac', 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_orderlist`
--

CREATE TABLE `table_orderlist` (
  `serial_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `food_price` int(11) NOT NULL,
  `food_qty` int(11) NOT NULL,
  `order_subtotal` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `customer_phone` bigint(15) NOT NULL,
  `customer_ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_orderlist`
--

INSERT INTO `table_orderlist` (`serial_id`, `table_id`, `food_id`, `food_name`, `food_price`, `food_qty`, `order_subtotal`, `order_date`, `customer_phone`, `customer_ip`) VALUES
(255, 2, 1, 'Veg Momo (8pc)', 30, 2, 60, '2021-12-07 18:06:52', 6876515165, '::1'),
(256, 2, 2, 'Fry Momo(8pc)', 50, 2, 100, '2021-12-07 18:06:52', 6876515165, '::1'),
(257, 3, 4, 'Chicken Roll', 80, 3, 240, '2021-12-07 18:13:49', 9465436546, '::1'),
(258, 4, 7, 'Chicken Biryani', 150, 6, 900, '2021-12-07 18:40:23', 6734201016, '::1'),
(259, 4, 11, 'masala tea', 15, 6, 90, '2021-12-07 18:40:23', 6734201016, '::1'),
(260, 2, 5, 'Egg Roll', 50, 2, 100, '2021-12-07 20:51:10', 9649816515, '::1'),
(261, 4, 1, 'Veg Momo (8pc)', 30, 2, 60, '2021-12-10 15:35:04', 8735403216, '::1'),
(262, 3, 6, 'Motton Roll', 100, 3, 300, '2021-12-10 18:14:22', 6968721350, '::1'),
(263, 2, 4, 'Chicken Roll', 80, 7, 560, '2021-12-10 18:16:53', 9584871210, '::1'),
(264, 4, 4, 'Chicken Roll', 80, 3, 240, '2021-12-10 18:23:42', 1654065056, '::1'),
(265, 5, 14, 'Vanila Icecream', 75, 3, 225, '2021-12-10 18:36:22', 165795454, '::1'),
(266, 5, 7, 'Chicken Biryani', 150, 3, 450, '2021-12-10 18:36:22', 165795454, '::1'),
(267, 2, 5, 'Egg Roll', 50, 3, 150, '2021-12-10 18:55:36', 2498784651, '::1'),
(268, 2, 5, 'Egg Roll', 50, 4, 200, '2021-12-10 18:56:35', 2498784651, '::1'),
(269, 6, 4, 'Chicken Roll', 80, 13, 1040, '2021-12-10 19:01:20', 4671316357, '::1'),
(270, 6, 16, 'Samosa Chat', 60, 5, 300, '2021-12-10 19:01:20', 4671316357, '::1'),
(271, 3, 6, 'Motton Roll', 100, 2, 200, '2021-12-11 15:30:29', 2164956429, '::1'),
(272, 3, 2, 'Fry Momo(8pc)', 50, 2, 100, '2021-12-11 15:30:29', 2164956429, '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `delivery_cart`
--
ALTER TABLE `delivery_cart`
  ADD PRIMARY KEY (`deliveryCart_id`);

--
-- Indexes for table `delivery_order`
--
ALTER TABLE `delivery_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `delivery_orderlist`
--
ALTER TABLE `delivery_orderlist`
  ADD PRIMARY KEY (`serial_id`);

--
-- Indexes for table `dinein_cart`
--
ALTER TABLE `dinein_cart`
  ADD PRIMARY KEY (`dineIn_id`);

--
-- Indexes for table `dinein_order`
--
ALTER TABLE `dinein_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `food_item`
--
ALTER TABLE `food_item`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `kitchen_orderlist`
--
ALTER TABLE `kitchen_orderlist`
  ADD PRIMARY KEY (`kot_id`);

--
-- Indexes for table `pay_orders`
--
ALTER TABLE `pay_orders`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `purchase_dealer`
--
ALTER TABLE `purchase_dealer`
  ADD PRIMARY KEY (`dealer_id`);

--
-- Indexes for table `purchase_items`
--
ALTER TABLE `purchase_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `recipe_category`
--
ALTER TABLE `recipe_category`
  ADD PRIMARY KEY (`recipe_category_id`);

--
-- Indexes for table `recipe_items`
--
ALTER TABLE `recipe_items`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `restro_member`
--
ALTER TABLE `restro_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `restro_staff`
--
ALTER TABLE `restro_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `restro_tables`
--
ALTER TABLE `restro_tables`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `table_orderlist`
--
ALTER TABLE `table_orderlist`
  ADD PRIMARY KEY (`serial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `delivery_cart`
--
ALTER TABLE `delivery_cart`
  MODIFY `deliveryCart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `delivery_order`
--
ALTER TABLE `delivery_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `delivery_orderlist`
--
ALTER TABLE `delivery_orderlist`
  MODIFY `serial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `dinein_cart`
--
ALTER TABLE `dinein_cart`
  MODIFY `dineIn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `dinein_order`
--
ALTER TABLE `dinein_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `food_item`
--
ALTER TABLE `food_item`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kitchen_orderlist`
--
ALTER TABLE `kitchen_orderlist`
  MODIFY `kot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `pay_orders`
--
ALTER TABLE `pay_orders`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `purchase_dealer`
--
ALTER TABLE `purchase_dealer`
  MODIFY `dealer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `purchase_items`
--
ALTER TABLE `purchase_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `recipe_category`
--
ALTER TABLE `recipe_category`
  MODIFY `recipe_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `recipe_items`
--
ALTER TABLE `recipe_items`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `restro_member`
--
ALTER TABLE `restro_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `restro_staff`
--
ALTER TABLE `restro_staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `restro_tables`
--
ALTER TABLE `restro_tables`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `table_orderlist`
--
ALTER TABLE `table_orderlist`
  MODIFY `serial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
