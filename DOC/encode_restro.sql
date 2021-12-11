-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2021 at 10:18 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
  `customer_phone` int(15) NOT NULL,
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
(28, ' Dinesh Ray', 2147483647, 'Siliguri', 'Old Matigara Chowk', 230, '::1', '2021-09-13 12:00:00'),
(29, ' Dinesh Ray', 2147483647, 'Siliguri', 'Old Matigara Chowk', 230, '::1', '2021-09-13 12:00:00'),
(30, ' Dinesh Ray', 2147483647, 'Siliguri', 'Old Matigara Chowk', 230, '::1', '2021-09-13 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customer_dinein_order`
--

CREATE TABLE `customer_dinein_order` (
  `order_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `costomer_phone` varchar(15) NOT NULL,
  `total_payment` int(11) NOT NULL,
  `paid_payment` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `ip_add` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_cart`
--

INSERT INTO `delivery_cart` (`deliveryCart_id`, `order_type`, `food_id`, `food_name`, `food_price`, `food_qty`, `ip_add`) VALUES
(26, 'pickup', 3, 'Veg Roll', 30, 1, '::1'),
(27, 'pickup', 5, 'Egg Roll', 50, 1, '::1'),
(28, 'pickup', 11, 'masala tea', 15, 1, '::1'),
(29, 'delivery', 3, 'Veg Roll', 30, 1, '::1'),
(30, 'delivery', 2, 'Fry Momo(8pc)', 50, 1, '::1'),
(31, 'delivery', 4, 'Chicken Roll', 80, 1, '::1'),
(32, 'delivery', 6, 'Motton Roll', 100, 1, '::1'),
(33, 'delivery', 5, 'Egg Roll', 50, 1, '::1'),
(34, 'pickup', 6, 'Motton Roll', 100, 1, '::1'),
(35, 'pickup', 16, 'Samosa Chat', 60, 1, '::1'),
(36, 'pickup', 15, 'Masala Chat', 50, 1, '::1'),
(37, 'pickup', 2, 'Fry Momo(8pc)', 50, 1, '::1'),
(38, '', 4, 'Chicken Roll', 80, 1, '::1'),
(39, '', 6, 'Motton Roll', 100, 1, '::1');

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

--
-- Dumping data for table `dinein_cart`
--

INSERT INTO `dinein_cart` (`dineIn_id`, `table_id`, `food_id`, `food_name`, `food_price`, `food_qty`, `foodtotal_price`, `ip_add`) VALUES
(63, 1, 1, 'Veg Momo (8pc)', 30, 1, 30, '::1'),
(64, 1, 2, 'Fry Momo(8pc)', 50, 1, 0, '::1'),
(65, 1, 3, 'Veg Roll', 30, 1, 0, '::1');

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
(2, 'Fry Momo(8pc)', 50, 'plate', 20, 30, 'fast-food', 'fried-momo.png'),
(3, 'Veg Roll', 30, 'piece', 70, 100, 'fast-food', 'plane-roll.png'),
(4, 'Chicken Roll', 80, 'piece', 130, 200, 'fast-food', 'chicken-roll.png'),
(5, 'Egg Roll', 50, 'piece', 5, 50, 'fast-food', 'egg-roll.png'),
(6, 'Motton Roll', 100, 'piece', 0, 100, 'fast-food', 'motton-roll.png'),
(7, 'Chicken Biryani', 150, 'plate', 10, 20, 'non-veg', 'panir-chowmin.png'),
(8, 'red tea', 10, 'cup', 20, 20, 'beverage', 'lemon-tea.jfif'),
(9, 'lemon tea', 10, 'cup', 10, 20, 'beverage', 'lemon-tea.jfif'),
(10, 'milk tea', 10, 'cup', 30, 50, 'beverage', 'milk-tea.png'),
(11, 'masala tea', 15, 'cup', 5, 20, 'beverage', 'milk-tea.png'),
(12, 'Ice Cream', 50, 'glass', 10, 10, 'desert', 'ice-cream.png'),
(13, 'Chocolate Icecream', 80, 'glass', 15, 20, 'desert', 'ice-cream.png'),
(14, 'Vanila Icecream', 75, 'glass', 0, 10, 'desert', 'ice-cream.png'),
(15, 'Masala Chat', 50, 'plate', 50, 50, 'fast-food', 'masala-chat.jfif'),
(16, 'Samosa Chat', 60, 'plate', 10, 50, 'fast-food', 'samosa-chat.jfif');

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
  `recipe_category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe_category`
--

INSERT INTO `recipe_category` (`recipe_category_id`, `recipe_category_name`) VALUES
(1, 'fast-food'),
(2, 'beverage'),
(3, 'desert'),
(4, 'non-veg'),
(5, 'veg'),
(6, 'mains'),
(7, 'starter'),
(8, 'breakfast');

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
(3, 'table 3', 4, 'ac', 1),
(4, 'table 4', 4, 'ac', 0),
(5, 'table 5', 4, 'ac', 0),
(6, 'table 6', 4, 'ac', 0),
(7, 'table 7', 10, 'ac', 0),
(8, 'table 8', 10, 'ac', 0);

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
  `customer_phone` int(15) NOT NULL,
  `customer_ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_orderlist`
--

INSERT INTO `table_orderlist` (`serial_id`, `table_id`, `food_id`, `food_name`, `food_price`, `food_qty`, `order_subtotal`, `order_date`, `customer_phone`, `customer_ip`) VALUES
(105, 1, 7, 'Chicken Biryani', 150, 1, 0, '2021-09-13 12:00:00', 2147483647, '::1'),
(106, 1, 14, 'Vanila Icecream', 75, 1, 0, '2021-09-13 12:00:00', 2147483647, '::1'),
(107, 1, 12, 'Ice Cream', 50, 1, 0, '2021-09-13 12:00:00', 2147483647, '::1'),
(108, 1, 15, 'Masala Chat', 50, 1, 0, '2021-09-13 12:00:00', 2147483647, '::1'),
(109, 1, 16, 'Samosa Chat', 60, 1, 0, '2021-09-13 12:00:00', 2147483647, '::1');

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
-- Indexes for table `dinein_cart`
--
ALTER TABLE `dinein_cart`
  ADD PRIMARY KEY (`dineIn_id`);

--
-- Indexes for table `food_item`
--
ALTER TABLE `food_item`
  ADD PRIMARY KEY (`food_id`);

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
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `delivery_cart`
--
ALTER TABLE `delivery_cart`
  MODIFY `deliveryCart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `dinein_cart`
--
ALTER TABLE `dinein_cart`
  MODIFY `dineIn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `food_item`
--
ALTER TABLE `food_item`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- AUTO_INCREMENT for table `restro_tables`
--
ALTER TABLE `restro_tables`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `table_orderlist`
--
ALTER TABLE `table_orderlist`
  MODIFY `serial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
