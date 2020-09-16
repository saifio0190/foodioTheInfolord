-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 09:41 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privledge` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`id`, `name`, `email`, `password`, `privledge`, `created_at`, `updated_at`) VALUES
(16, 'saif', 'saif@yahoo.com', '$2y$10$AgeFaD34yMK.SofNEy8TWuaQlZDKh.oaNWOpbz/4/Uu.NlQ1fgSNK', 1, '2019-02-07 09:53:12', '2019-02-07 09:53:12'),
(17, 'isso', 'isso@gmail.com', '$2y$10$dXGt90l6hSE6fxevg3N1COMATcyS7gYTNQ7Xa5vrV.r7jdpY3wjN2', 1, '2019-02-07 10:03:15', '2019-02-07 10:03:15'),
(18, 'saif', 'saif@gmail.com', '$2y$10$n/YJ8n5DNL68Pl/Y6G2RqOtTRfgiQEvGNONL81r9zgo8UXh53Cw8i', 1, '2019-02-07 11:35:52', '2019-02-07 11:35:52'),
(19, 'bachchanN', 'bachcha@nikesh.com', '$2y$10$slqHaZl5vONx38FrOM3F7.od/XL7Yi3GYkFtJxJCmzr1PdNVov3GK', 1, '2019-02-07 11:38:50', '2019-02-07 11:38:50'),
(20, 'tatatta', 'rrta@co.om', '$2y$10$hjI6QHosBysmNOs3XbmoJ.OpODeBttPHsjyjdkuzxuh9N0Q8qgJQ2', 1, '2019-02-07 11:41:30', '2019-02-07 11:41:30'),
(21, 'abdul', 'abdul@gmail.com', '$2y$10$7BsmZ7lIyQC67iPUGKb1huV7UgTj0FGf3rzzCTKgQYRGNRk69oAtC', 1, '2019-06-03 05:50:51', '2019-06-03 05:50:51'),
(22, 'shahid', 'shahid@gmail.com', '$2y$10$rY0kinHygbCcnEfuKR.5/OlkN0WdwOj3be0P/pqXkfnZFNMOrI/sq', 1, '2019-10-13 14:48:21', '2019-10-13 14:48:21'),
(23, 'Huzaifa', 'huzaif@gmail.com', '$2y$10$MGd.FyQQu.LBu9V.FVvJAO1MN8GUBPeg9aNNm.vH86pAU5WXpuL1y', 1, '2020-06-06 07:58:19', '2020-06-06 07:58:19'),
(24, 'shayan', 'shayan@gmail.com', '$2y$10$cGVXaDk3iCm1mLR6xbetPuKAlFRBoOZu6lvi/Cz6TN3KmgR2kaBBy', 1, '2020-06-09 10:23:22', '2020-06-09 10:23:22'),
(25, 'Saifio', 'saif@reddif.com', '$2y$10$RSFbmOOfhBv2.wH8.sXudeAe5eBm0V/P/hbKrj3auhMSzpCPgyZne', 1, '2020-07-20 10:08:02', '2020-07-20 10:08:02'),
(26, 'Raja', 'raja@gmail.com', '$2y$10$MwpAQyuDsQiPmlyRNO8nWujXzMOcH3GufAnkmvDDuxIeuixPWi12e', 1, '2020-08-29 09:44:36', '2020-08-29 09:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `added` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `added`, `created_at`) VALUES
(3, 'Starters', 'admin.resto@gmail.com', '2019-01-30 10:38:20'),
(4, 'Main Course', 'admin.resto@gmail.com', '2019-01-30 10:38:24'),
(5, 'Desserts', 'admin.resto@gmail.com', '2019-01-30 10:40:18'),
(6, 'Salad', 'admin.resto@gmail.com', '2019-01-30 10:40:18'),
(11, 'Chinese & Fast food', 'admin.resto@gmail.com', '2019-01-30 10:43:16'),
(12, 'Beaf_Arabian', 'rrta@co.om', '2019-02-07 13:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city` varchar(80) DEFAULT NULL,
  `country` varchar(80) DEFAULT NULL,
  `population` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city`, `country`, `population`) VALUES
('New York', 'United States', 8175133),
('Los Angeles', 'United States', 3792621),
('Chicago', 'United States', 2695598),
('Paris', 'France', 2181000),
('Marseille', 'France', 808000),
('Lyon', 'France', 422000),
('London', 'United Kingdom', 7825300),
('Birmingham', 'United Kingdom', 1016800),
('Leeds', 'United Kingdom', 770800);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `person` varchar(255) DEFAULT NULL,
  `grup` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `person`, `grup`, `age`, `createdAt`, `updatedAt`) VALUES
(1, 'Bob', 1, 32, '2020-08-14 14:16:13', '2020-08-14 14:16:13'),
(2, 'Jill', 1, 34, '2020-08-14 14:16:31', '2020-08-14 14:16:31'),
(3, 'Shawn', 1, 42, '2020-08-14 14:16:48', '2020-08-14 14:16:48'),
(4, 'Jake', 2, 29, '2020-08-14 14:17:05', '2020-08-14 14:17:05'),
(5, 'Paul', 2, 36, '2020-08-14 14:17:14', '2020-08-14 14:17:14'),
(6, 'Laura', 2, 39, '2020-08-14 14:17:32', '2020-08-14 14:17:32'),
(9, 'Saif', 3, 44, '2020-09-08 19:17:54', '2020-09-08 19:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `added` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isSpecial` tinyint(1) NOT NULL,
  `isActive` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `added`, `name`, `price`, `img`, `category`, `isSpecial`, `isActive`, `created_at`, `updated_at`) VALUES
(2, 'isso@gmail.com', 'Chiken Angara1', '200', 'checken_grill_1544609740_1555156343.png', '3', 0, 1, '2019-04-13 11:52:23', '2019-05-12 05:48:29'),
(5, 'isso@gmail.com', 'Cheese p Paratha', '90', 'cuisine1_1547971444_1555156801.jpg', '4', 0, 1, '2019-04-13 12:00:01', '2019-04-22 04:14:55'),
(8, 'isso@gmail.com', 'Haryali Salad', '99', 'cuisine8_1555850087.jpg', '6', 0, 1, '2019-04-21 12:34:47', '2019-04-22 04:15:19'),
(9, 'isso@gmail.com', 'Chicken sixty five', '180', 'chicken_65_1544609892_1555891363.png', '4', 1, 1, '2019-04-22 00:02:43', '2019-04-23 00:39:19'),
(10, 'isso@gmail.com', 'berry cake', '190', 'berry cake_1555893311.jpg', '5', 1, 1, '2019-04-22 00:35:11', '2019-04-26 23:42:35'),
(11, 'isso@gmail.com', 'cheery ice cream', '125', 'cherry and chocklate_1555898819.jpg', '5', 0, 1, '2019-04-22 02:06:59', '2019-04-28 04:34:23'),
(12, 'isso@gmail.com', 'Tiramiso cake', '300', 'Tiramiso cake_1555898846.jpg', '5', 0, 1, '2019-04-22 02:07:26', '2019-04-22 02:07:26'),
(13, 'isso@gmail.com', 'Chinese Chawmin', '330', 'Chicken chawmien_1555899049.jpg', '11', 1, 1, '2019-04-22 02:10:49', '2019-04-22 02:10:49'),
(14, 'isso@gmail.com', 'Chinese mangolian', '400', 'chinese mangolian_1555899328.jpg', '11', 0, 1, '2019-04-22 02:15:28', '2019-04-29 00:37:57'),
(15, 'isso@gmail.com', 'Beaf Kabab', '415', 'Beaf kabsa_1555899359.jpg', '12', 1, 1, '2019-04-22 02:15:59', '2019-05-12 05:48:19'),
(16, 'isso@gmail.com', 'Lamba Kabsa', '500', 'Lamba kabsa_1555899394.jpg', '12', 0, 1, '2019-04-22 02:16:34', '2019-04-28 04:35:37'),
(17, 'isso@gmail.com', 'Corn salad', '90', 'corn sald_1555899426.jpg', '6', 0, 1, '2019-04-22 02:17:06', '2019-04-27 00:38:38'),
(18, 'shahid@gmail.com', 'frechie boy', '455', 'csTeam_1570979252.jpg', '3', 1, 1, '2019-10-13 15:07:32', '2019-10-13 15:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `kitchenusers`
--

CREATE TABLE `kitchenusers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `privledge` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kitchenusers`
--

INSERT INTO `kitchenusers` (`id`, `name`, `email`, `password`, `privledge`, `created_at`, `updated_at`) VALUES
(26, 'saif', 'saif@hotmail.com', '$2y$10$q3ca2hsxyTtl1AOx6.fFz.wWB.b5UctSLk/Xd4saEnheuQ3FdSOly', 1, '2019-02-07 09:54:26', '2019-02-07 09:54:26'),
(27, 'isso', 'isso@yahoo.com', '$2y$10$7S9SrgPeh/TIGRhbS2VbJOLYOPoSNmS.ODfhMox//d.O9FP8H23hu', 1, '2019-02-07 10:04:54', '2019-02-07 10:04:54'),
(28, 'Amir', 'amir@gmail.com', '$2y$10$s0YNYRhGPRPsH12.qO.so.IKWbLoKLtVK5HQKAlnbG.XsPWAdwq0q', 1, '2020-06-07 08:13:45', '2020-06-07 08:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_09_105639_create_registers_table', 1),
(5, '2018_10_20_101313_create_upload_models_table', 2),
(6, '2013_12_09_071145_create_items_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tableId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `itemId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deliveryStatus` tinyint(1) DEFAULT NULL,
  `paymentStatus` tinyint(1) DEFAULT NULL,
  `deliverBy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentRecived` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `email`, `tableId`, `name`, `itemId`, `qty`, `amount`, `deliveryStatus`, `paymentStatus`, `deliverBy`, `paymentRecived`, `created_at`, `updated_at`) VALUES
(1, '1554991207-1383', 'akshay@gmail.com', '3', 'heese garlic', '43', '1', '232', 0, 0, '', '', '2019-04-11 14:00:07', NULL),
(2, '1554991207-1383', 'akshay@gmail.com', '3', 'chirdl', '48', '3', '102', 0, 0, '', '', '2019-04-11 14:00:07', NULL),
(3, '1554991235-3988', 'akshay@gmail.com', '7', 'heese garlic', '43', '2', '464', 0, 0, '', '', '2019-04-11 14:00:35', NULL),
(4, '1554991235-3988', 'akshay@gmail.com', '7', 'curry', '52', '2', '476', 0, 0, '', '', '2019-04-11 14:00:35', NULL),
(5, '1554993124-5888', 'akshay@gmail.com', '10', 'curry', '52', '1', '238', 0, 0, '', '', '2019-04-11 14:32:04', NULL),
(6, '1554993124-5888', 'akshay@gmail.com', '10', 'sfgdt', '45', '2', '86', 0, 0, '', '', '2019-04-11 14:32:04', NULL),
(7, '1555138956-7568', 'naziya@gmail.com', '7', 'curry', '52', '1', '238', 0, 0, '', '', '2019-04-13 07:02:36', NULL),
(8, '1555138956-7568', 'naziya@gmail.com', '7', 'sfgdt', '45', '2', '86', 0, 0, '', '', '2019-04-13 07:02:36', NULL),
(9, '1555138956-7568', 'naziya@gmail.com', '7', 'Italian salad', '35', '1', '120', 0, 0, '', '', '2019-04-13 07:02:36', NULL),
(10, '1555150617-10674', 'naziya@gmail.com', '8', 'Italian salad', '35', '2', '240', 0, 0, '', '', '2019-04-13 10:16:57', NULL),
(11, '1555150617-10674', 'naziya@gmail.com', '8', 'onion crispy2', '39', '1', '321', 0, 0, '', '', '2019-04-13 10:16:57', NULL),
(12, '1555150617-10674', 'naziya@gmail.com', '8', 'curry', '52', '2', '476', 0, 0, '', '', '2019-04-13 10:16:57', NULL),
(13, '1555150658-13524', 'naziya@gmail.com', '3', 'onion crispy2', '39', '2', '642', 0, 0, '', '', '2019-04-13 10:17:38', NULL),
(14, '1555150658-13524', 'naziya@gmail.com', '3', 'curry', '52', '3', '714', 0, 0, '', '', '2019-04-13 10:17:38', NULL),
(15, '1555758277-15938', 'akshay@gmail.com', '6', 'Chiken Angara', '2', '2', '400', 0, 0, '', '', '2019-04-20 11:04:37', NULL),
(16, '1555758277-15938', 'akshay@gmail.com', '6', 'Banjara Fries', '1', '1', '150', 0, 0, '', '', '2019-04-20 11:04:37', NULL),
(17, '1555758277-15938', 'akshay@gmail.com', '6', 'Tandoori', '4', '3', '600', 0, 0, '', '', '2019-04-20 11:04:37', NULL),
(18, '1555758448-18778', 'akshay@gmail.com', '10', 'Banjara Fries', '1', '2', '300', 0, 0, '', '', '2019-04-20 11:07:28', NULL),
(19, '1555758448-18778', 'akshay@gmail.com', '10', 'Chiken Angara', '2', '2', '400', 0, 0, '', '', '2019-04-20 11:07:28', NULL),
(20, '1555761872-20587', 'akshay@gmail.com', '3', 'Chiken Angara', '2', '2', '400', 0, 0, '', '', '2019-04-20 12:04:32', NULL),
(21, '1555852658-21788', 'akshay@gmail.com', '2', 'Chiken Angara1', '2', '1', '200', 0, 0, '', '', '2019-04-21 13:17:38', NULL),
(22, '1555861546-22773', 'naziya@gmail.com', '3', 'Chiken Angara1', '2', '1', '200', 0, 0, '', '', '2019-04-21 15:45:46', NULL),
(23, '1555861650-23875', 'naziya@gmail.com', '2', 'Cheese p Paratha', '5', '1', '90', 0, 0, '', '', '2019-04-21 15:47:30', NULL),
(24, '1555861715-24838', 'naziya@gmail.com', '2', 'Haryali Salad', '8', '1', '99', 0, 0, '', '', '2019-04-21 15:48:35', NULL),
(25, '1555862220-25574', 'naziya@gmail.com', '2', 'Cheese p Paratha', '5', '1', '90', 0, 0, '', '', '2019-04-21 15:57:00', NULL),
(26, '1555862220-25574', 'naziya@gmail.com', '2', 'Chiken Angara1', '2', '1', '200', 0, 0, '', '', '2019-04-21 15:57:00', NULL),
(27, '1555869489-27265', 'akshay@gmail.com', '3', 'Chiken Angara1', '2', '1', '200', 0, 0, '', '', '2019-04-21 17:58:09', NULL),
(28, '1555869702-28996', 'akshay@gmail.com', '2', 'Chiken Angara1', '2', '1', '200', 0, 0, '', '', '2019-04-21 18:01:42', NULL),
(29, '1555871738-29394', 'naziya@gmail.com', '4', 'Chiken Angara1', '2', '1', '200', 0, 0, '', '', '2019-04-21 18:35:38', NULL),
(30, '1555898633-30697', 'naziya@gmail.com', '4', 'Cheese p Paratha', '5', '1', '90', 0, 0, '', '', '2019-04-22 02:03:53', NULL),
(31, '1555898633-30697', 'naziya@gmail.com', '4', 'Haryali Salad', '8', '2', '198', 0, 0, '', '', '2019-04-22 02:03:53', NULL),
(32, '1555898648-32995', 'naziya@gmail.com', '2', 'Chicken sixty five', '9', '1', '180', 0, 0, '', '', '2019-04-22 02:04:08', NULL),
(33, '1555899871-33449', 'tahoora@gmail.com', '4', 'Chicken sixty five', '9', '1', '180', 0, 0, '', '', '2019-04-22 02:24:31', NULL),
(34, '1555899871-33449', 'tahoora@gmail.com', '4', 'Beaf Kabab', '15', '2', '830', 0, 0, '', '', '2019-04-22 02:24:31', NULL),
(35, '1555907648-35767', 'naziya@gmail.com', '5', 'Haryali Salad', '8', '1', '99', 0, 0, '', '', '2019-04-22 04:34:08', NULL),
(36, '1555907648-35767', 'naziya@gmail.com', '5', 'Cheese p Paratha', '5', '1', '90', 0, 0, '', '', '2019-04-22 04:34:08', NULL),
(37, '1555907648-35767', 'naziya@gmail.com', '5', 'Chiken Angara1', '2', '1', '200', 0, 0, '', '', '2019-04-22 04:34:08', NULL),
(38, '1556344090-38964', 'akshay@gmail.com', '10', 'Chiken Angara1', '2', '1', '200', 0, 0, '', '', '2019-04-27 05:48:10', NULL),
(39, '1556344090-38964', 'akshay@gmail.com', '10', 'Tandoori', '4', '1', '200', 0, 0, '', '', '2019-04-27 05:48:10', NULL),
(40, '1556344090-38964', 'akshay@gmail.com', '10', 'Chicken sixty five', '9', '2', '360', 0, 0, '', '', '2019-04-27 05:48:10', NULL),
(41, '1556344090-38964', 'akshay@gmail.com', '10', 'berry cake', '10', '1', '190', 0, 0, '', '', '2019-04-27 05:48:10', NULL),
(42, '1556344090-38964', 'akshay@gmail.com', '10', 'Beaf Kabab', '15', '1', '415', 0, 0, '', '', '2019-04-27 05:48:10', NULL),
(43, '1556344090-38964', 'akshay@gmail.com', '10', 'Cheese p Paratha', '5', '1', '90', 0, 0, '', '', '2019-04-27 05:48:10', NULL),
(44, '1556344090-38964', 'akshay@gmail.com', '10', 'Chinese mangolian', '14', '1', '400', 0, 0, '', '', '2019-04-27 05:48:10', NULL),
(45, '1556344090-38964', 'akshay@gmail.com', '10', 'Tiramiso cake', '12', '1', '300', 0, 0, '', '', '2019-04-27 05:48:10', NULL),
(46, '1556344090-38964', 'akshay@gmail.com', '10', 'Corn salad', '17', '1', '90', 0, 0, '', '', '2019-04-27 05:48:10', NULL),
(47, '1556776810-47532', 'akshay@gmail.com', '1', 'Chicken sixty five', '9', '1', '180', 0, 0, '', '', '2019-05-02 06:00:11', NULL),
(48, '1556777076-48368', 'akshay@gmail.com', '2', 'Tandoori', '4', '1', '200', 0, 0, '', '', '2019-05-02 06:04:36', NULL),
(49, '1557659342-49643', 'akshay@gmail.com', '8', 'Tandoori', '4', '1', '200', 0, 0, '', '', '2019-05-12 11:09:02', NULL),
(50, '1557659342-49643', 'akshay@gmail.com', '8', 'Chicken sixty five', '9', '2', '360', 0, 0, '', '', '2019-05-12 11:09:02', NULL),
(51, '1557659342-49643', 'akshay@gmail.com', '8', 'berry cake', '10', '1', '190', 0, 0, '', '', '2019-05-12 11:09:02', NULL),
(52, '1558868451-52839', 'akshay@gmail.com', '2', 'Chicken sixty five', '9', '1', '180', 0, 0, '', '', '2019-05-26 11:00:51', NULL),
(53, '1558868451-52839', 'akshay@gmail.com', '2', 'berry cake', '10', '2', '380', 0, 0, '', '', '2019-05-26 11:00:51', NULL),
(54, '1572765925-54272', 'akshay@gmail.com', '3', 'Chiken Angara1', '2', '2', '400', 0, 0, '', '', '2019-11-03 07:25:25', NULL),
(55, '1572767664-55896', 'akshay@gmail.com', '3', 'berry cake', '10', '2', '380', 0, 0, '', '', '2019-11-03 07:54:24', NULL),
(56, '1572767664-55896', 'akshay@gmail.com', '3', 'Chinese Chawmin', '13', '2', '660', 0, 0, '', '', '2019-11-03 07:54:24', NULL),
(57, '1591386929-57924', 'akshay@gmail.com', '2', 'Tiramiso cake', '12', '1', '300', 0, 0, '', '', '2020-06-05 19:55:29', NULL),
(58, '1591386929-57924', 'akshay@gmail.com', '2', 'berry cake', '10', '2', '380', 0, 0, '', '', '2020-06-05 19:55:29', NULL),
(59, '1591391965-59735', 'akshay@gmail.com', '4', 'berry cake', '10', '3', '570', 0, 0, '', '', '2020-06-05 21:19:25', NULL),
(60, '1591391965-59735', 'akshay@gmail.com', '4', 'Chicken sixty five', '9', '3', '540', 0, 0, '', '', '2020-06-05 21:19:25', NULL),
(61, '1591392422-61368', 'akshay@gmail.com', '4', 'Cheese p Paratha', '5', '1', '90', 0, 0, '', '', '2020-06-05 21:27:03', NULL),
(62, '1591392422-61368', 'akshay@gmail.com', '4', 'Haryali Salad', '8', '2', '198', 0, 0, '', '', '2020-06-05 21:27:03', NULL),
(66, '2509967745-1594542211282', 'test@admin.com', '9', 'Chicken sixty five', '9', '1', '180', 0, 0, '', '0', '2020-07-12 08:23:31', NULL),
(67, '2509967745-1594542211282', 'test@admin.com', '9', 'berry cake', '10', '2', '380', 0, 0, '', '0', '2020-07-12 08:23:31', NULL),
(68, '2509967745-1594542211282', 'test@admin.com', '9', 'Chinese Chawmin', '13', '2', '630', 0, 0, '', '0', '2020-07-12 08:23:31', NULL),
(69, '3287680313-1594558736024', 'test@admin.com', '5', 'Chicken sixty five', '9', '1', '180', 0, 0, '', '0', '2020-07-12 12:58:56', NULL),
(70, '3287680313-1594558736024', 'test@admin.com', '5', 'berry cake', '10', '2', '380', 0, 0, '', '0', '2020-07-12 12:58:56', NULL),
(71, '3287680313-1594558736024', 'test@admin.com', '5', 'Chinese Chawmin', '13', '2', '660', 0, 0, '', '0', '2020-07-12 12:58:56', NULL),
(72, '1028514-1594558840750', 'test@admin.com', '8', 'Chicken sixty five', '9', '1', '180', 0, 0, '', '0', '2020-07-12 13:00:40', NULL),
(73, '1028514-1594558840750', 'test@admin.com', '8', 'berry cake', '10', '2', '380', 0, 0, '', '0', '2020-07-12 13:00:40', NULL),
(74, '1028514-1594558840750', 'test@admin.com', '8', 'Chinese Chawmin', '13', '2', '660', 0, 0, '', '0', '2020-07-12 13:00:40', NULL),
(75, '2704904601-1594558954094', 'test@admin.com', '4', 'Chicken sixty five', '9', '1', '180', 0, 0, '', '0', '2020-07-12 13:02:34', NULL),
(76, '2704904601-1594558954094', 'test@admin.com', '4', 'berry cake', '10', '2', '380', 0, 0, '', '0', '2020-07-12 13:02:34', NULL),
(77, '2704904601-1594558954094', 'test@admin.com', '4', 'Chinese Chawmin', '13', '2', '660', 0, 0, '', '0', '2020-07-12 13:02:34', NULL),
(78, '2418284410-1594559259287', 'test@admin.com', '6', 'Chicken sixty five', '9', '1', '180', 0, 0, '', '0', '2020-07-12 13:07:39', NULL),
(79, '2418284410-1594559259287', 'test@admin.com', '6', 'berry cake', '10', '2', '380', 0, 0, '', '0', '2020-07-12 13:07:39', NULL),
(80, '2418284410-1594559259287', 'test@admin.com', '6', 'Chinese Chawmin', '13', '2', '660', 0, 0, '', '0', '2020-07-12 13:07:39', NULL),
(81, '1424958981-1594560290842', 'test@admin.com', '2', 'Chicken sixty five', '9', '2', '360', 0, 0, '', '0', '2020-07-12 13:24:50', NULL),
(82, '400342890-1594560547837', 'test@admin.com', '2', 'Chicken sixty five', '9', '2', '360', 0, 0, '', '0', '2020-07-12 13:29:07', NULL),
(83, '57403729-1594560576057', 'test@admin.com', '2', 'Chicken sixty five', '9', '2', '360', 0, 0, '', '0', '2020-07-12 13:29:36', NULL),
(84, '272175174-1594560633193', 'test@admin.com', '7', 'berry cake', '10', '3', '570', 0, 0, '', '0', '2020-07-12 13:30:33', NULL),
(85, '1076527284-1594560664330', 'test@admin.com', '2', 'berry cake', '10', '3', '570', 0, 0, '', '0', '2020-07-12 13:31:04', NULL),
(86, '961784548-1594560811316', 'test@admin.com', '6', 'berry cake', '10', '3', '570', 0, 0, '', '0', '2020-07-12 13:33:31', NULL),
(87, '1222871381-1594561197374', 'test@admin.com', '6', 'berry cake', '10', '3', '570', 0, 0, '', '0', '2020-07-12 13:39:57', NULL),
(88, '536699541-1594561225261', 'test@admin.com', '7', 'frechie boy', '18', '1', '455', 0, 0, '', '0', '2020-07-12 13:40:25', NULL),
(89, '2872447569-1594561297795', 'test@admin.com', '7', 'frechie boy', '18', '1', '455', 0, 0, '', '0', '2020-07-12 13:41:37', NULL),
(90, '1515008367-1594561373823', 'test@admin.com', '7', 'frechie boy', '18', '1', '455', 0, 0, '', '0', '2020-07-12 13:42:53', NULL),
(91, '2206952259-1594629451277', 'test@admin.com', '3', 'Chinese Chawmin', '13', '1', '330', 0, 0, '', '0', '2020-07-13 08:37:31', NULL),
(92, '1243168903-1594630914254', 'test@admin.com', '4', 'Chinese Chawmin', '13', '2', '660', 0, 0, '', '0', '2020-07-13 09:01:54', NULL),
(93, '1243168903-1594630914254', 'test@admin.com', '4', 'Beaf Kabab', '15', '2', '830', 0, 0, '', '0', '2020-07-13 09:01:54', NULL),
(96, '2607670692-1594633674977', 'test@admin.com', '1', 'Chinese Chawmin', '13', '2', '660', 0, 0, '', '0', '2020-07-13 09:47:55', NULL),
(97, '2607670692-1594633674977', 'test@admin.com', '1', 'Beaf Kabab', '15', '1', '415', 0, 0, '', '0', '2020-07-13 09:47:55', NULL),
(100, '1473086241-1594634029277', 'test@admin.com', '2', 'Chiken Angara1', '2', '1', '200', 0, 0, '', '0', '2020-07-13 09:53:49', NULL),
(101, '1473086241-1594634029277', 'test@admin.com', '2', 'Beaf Kabab', '15', '2', '830', 0, 0, '', '0', '2020-07-13 09:53:49', NULL),
(102, '2272998476-1598527045675', 'test@admin.com', '4', 'Chiken Angara1', '2', '1', '200', 0, 0, '', '0', '2020-08-27 11:17:25', NULL),
(103, '2272998476-1598527045675', 'test@admin.com', '4', 'Beaf Kabab', '15', '2', '830', 0, 0, '', '0', '2020-08-27 11:17:25', NULL),
(104, '1949536456-1598626813909', 'test@admin.com', '4', 'Chicken sixty five', '9', '3', '540', 0, 0, '', '0', '2020-08-28 15:00:13', NULL),
(105, '1949536456-1598626813909', 'test@admin.com', '4', 'berry cake', '10', '2', '380', 0, 0, '', '0', '2020-08-28 15:00:13', NULL),
(106, '1598693901-106689', 'akshay@gmail.com', '4', 'Chiken Angara1', '2', '2', '400', 0, 0, '', '', '2020-08-29 09:38:21', NULL),
(107, '1598693901-106689', 'akshay@gmail.com', '4', 'Chicken sixty five', '9', '1', '180', 0, 0, '', '', '2020-08-29 09:38:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specialties`
--

CREATE TABLE `specialties` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `itemId` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `valueImg` varchar(255) NOT NULL,
  `dateAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialties`
--

INSERT INTO `specialties` (`id`, `category`, `itemId`, `name`, `valueImg`, `dateAt`) VALUES
(1, 'paistani', 'ABsts', 'fvfav', '79_server_issue_1540193491_79_server_issue.PNG', '2018-10-22 07:31:31'),
(2, 'sfvcf', 'f', 'ffd', 'download_1540202477_download.jpg', '2018-10-22 10:01:17'),
(3, 'sfg', 'wfeeg', 'sf', 'upload1_1540202640_upload1.PNG', '2018-10-22 10:04:00'),
(4, 'tghg', 'frf', 'fdv', '79_server_issue_1540202725_79_server_issue.PNG', '2018-10-22 10:05:25'),
(5, 'sdrfgdtfh', 'ejhdsfh', 'jjkd', '79_server_issue_1540202890_79_server_issue.PNG', '2018-10-22 10:08:10'),
(6, 'dfgdgv', 'nasdnda', 'nsd', '79_server_issue_1540203087_79_server_issue.PNG', '2018-10-22 10:11:27'),
(7, 'wecf', 'fdsf', 'sfsfvsff', 'download_1540289868_download.jpg', '2018-10-23 10:17:48'),
(8, 'fcda', 'sf', 'zbnXbns', 'Capture_1541684817_Capture.PNG', '2018-11-08 13:46:58'),
(9, '233', '456', 'aszd', 'cap_1544594770_cap.PNG', '2018-12-12 06:06:10'),
(10, '243', '2345', '2344', 'don2_1544594854_don2.PNG', '2018-12-12 06:07:34'),
(11, 'para', '2', 'kingp', 'berry cake_1555893311_1558953822_berry cake_1555893311.jpg', '2019-05-27 10:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `added` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `deadline` datetime DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `published` tinyint(1) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`id`, `title`, `description`, `published`, `createdAt`, `updatedAt`) VALUES
(1, NULL, NULL, 0, '2020-08-13 11:41:10', '2020-08-13 11:41:10'),
(2, NULL, NULL, 0, '2020-08-13 11:44:05', '2020-08-13 11:44:05'),
(3, NULL, NULL, 0, '2020-08-13 11:47:00', '2020-08-13 11:47:00'),
(4, NULL, NULL, 0, '2020-08-13 11:48:27', '2020-08-13 11:48:27'),
(5, NULL, NULL, 0, '2020-08-13 11:49:17', '2020-08-13 11:49:17'),
(6, NULL, NULL, 0, '2020-08-13 11:49:21', '2020-08-13 11:49:21'),
(7, NULL, NULL, 0, '2020-08-13 11:50:11', '2020-08-13 11:50:11'),
(8, 'get you best buddy', 'working with node', 0, '2020-08-13 12:09:41', '2020-08-13 12:19:49'),
(9, 'get you soon', 'working with node', 0, '2020-08-13 12:10:44', '2020-08-13 12:10:44'),
(11, NULL, NULL, NULL, '2020-09-08 20:00:52', '2020-09-08 20:00:52'),
(90, 'i am king of disco', 'one life baby', NULL, '2020-09-10 09:12:37', '2020-09-10 09:12:37'),
(91, 'i am king ', 'one life baby', NULL, '2020-09-10 09:31:27', '2020-09-10 09:31:27'),
(92, 'i am king ', 'one life baby', NULL, '2020-09-10 10:14:14', '2020-09-10 10:14:14'),
(93, 'i am king ', 'one life baby', NULL, '2020-09-10 10:18:27', '2020-09-10 10:18:27'),
(94, 'i am king ', 'one life baby', NULL, '2020-09-10 10:19:06', '2020-09-10 10:19:06');

-- --------------------------------------------------------

--
-- Table structure for table `upload_models`
--

CREATE TABLE `upload_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'akshay', 'akshay.12@gmail.com', '0000-00-00 00:00:00', '$2y$10$ujbRM5zmYqJnsws2DaTN/uJcfjIu9/RbfWIRTxb0.uJzXelVFKt.6', '7Zb4nD1uj9fGrtPKHFkVcM8IjllKwyjHWd77GIvJaBJTsenKLzY7wK7YWOZd', '2018-10-12 00:35:37', '2018-10-12 00:35:37'),
(2, 'hero', 'hero@saif.com', NULL, '$2y$10$40t0s6a9itDnLFUzXFI3c.z..iaQxl4k48XWne/shP95BokWhe0KC', NULL, '2018-10-14 02:23:42', '2018-10-14 02:23:42'),
(3, 'naziya', 'naziya@gmail.com', NULL, '$2y$10$X.g.sTUpepHPSBHpvXFPs.1.780OySFSOtzVDhq1c7rjc/9Mo8KBa', 'VepewG8XLLzaZDcSpuZy7yArrkscmYuwddvlxGukAvvw8Km5vcCTKdwNaD1f', '2018-10-18 11:51:55', '2018-10-18 11:51:55'),
(4, 'Shama', 'shama12@gmail.com', NULL, '$2y$10$N2a5N0kLexbghflZgTljFOM9vgRQF.mzTsFHG/AU7UHwvvVfy/k6O', 'YgCWu82zz9wJmAMJTrYNggALO4z7L9jMCyIgZ9lM43p6o2iIVL0PvdnX1gxo', '2018-10-20 04:22:01', '2018-10-20 04:22:01'),
(5, 'Mohammad saif', 'saifio@google.com', NULL, '$2y$10$LEWM2T9m8UR9QuWda1OCc.FGV.l7DDagHpLdmZ/.XDUpz4RSuNFoq', NULL, '2018-12-09 01:25:02', '2018-12-09 01:25:02'),
(6, 'Akshay', 'akshay@gmail.com', NULL, '$2y$10$.xxcbToT6Awy3TgvfhDMbOZhpCP6.M4sB0NM0eGmqPu/7PQ8caJhm', 'ZVN3tRSfBl6LgH9TYj88HEskrnFIam2BJkrxiS8T14z5TyNmswwKURP1SyPu', '2018-12-14 04:41:13', '2018-12-14 04:41:13'),
(7, 'Naziya', 'naz4rerssaaa@yahoo.com', NULL, '$2y$10$LUFODwuN1cCV2I9CHKCZJOTLlDmwrI0CEM3M9USwljg2kR/4H0OaK', 'LNPcSsiGHSMPL3cSmUoVY8kf6vM6jivlt9rzLRzBnMtzbND8ckAJohS8k93a', '2018-12-22 01:59:36', '2018-12-22 01:59:36'),
(8, 'Tahoora', 'tahoora@gmail.com', NULL, '$2y$10$xWJQaXFEZqFnl1ZeS1orX.tXTkPLNx8w6r.7Ncb8.LKOga/DsHn.K', NULL, '2019-04-21 20:54:05', '2019-04-21 20:54:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tableId` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `items` int(11) NOT NULL,
  `deliveryStatus` tinyint(4) NOT NULL,
  `paymentStatus` tinyint(1) NOT NULL,
  `isCancel` tinyint(4) NOT NULL,
  `deliverBy` varchar(255) DEFAULT NULL,
  `paymentRecived` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`id`, `order_id`, `email`, `tableId`, `amount`, `u_id`, `items`, `deliveryStatus`, `paymentStatus`, `isCancel`, `deliverBy`, `paymentRecived`, `created_at`, `updated_at`) VALUES
(2, '1554991235-3988', 'akshay@gmail.com', 7, 940, 52, 2, 0, 1, 1, '', 'isso@gmail.com', '2019-04-11 14:00:35', '2019-04-21 10:06:16'),
(4, '1555138956-7568', 'naziya@gmail.com', 7, 444, 35, 3, 1, 0, 0, 'isso@yahoo.com', '', '2019-04-13 07:02:36', '2019-04-13 01:45:38'),
(6, '1555150658-13524', 'naziya@gmail.com', 3, 1356, 52, 2, 0, 1, 1, '', 'isso@gmail.com', '2019-04-13 10:17:38', '2019-04-21 10:16:37'),
(8, '1555758448-18778', 'akshay@gmail.com', 10, 700, 2, 2, 1, 1, 0, 'isso@yahoo.com', 'isso@gmail.com', '2019-04-20 11:07:28', '2019-04-20 05:41:33'),
(9, '1555761872-20587', 'akshay@gmail.com', 3, 400, 2, 1, 1, 1, 0, 'isso@yahoo.com', 'isso@gmail.com', '2019-04-20 12:04:32', '2019-04-20 06:36:05'),
(10, '1555852658-21788', 'akshay@gmail.com', 2, 200, 2, 1, 1, 1, 0, 'isso@yahoo.com', 'isso@gmail.com', '2019-04-21 13:17:39', '2019-04-21 07:50:06'),
(11, '1555861546-22773', 'naziya@gmail.com', 3, 200, 2, 1, 0, 1, 1, '', '', '2019-04-21 15:45:46', '2019-04-21 10:20:06'),
(12, '1555861650-23875', 'naziya@gmail.com', 2, 90, 5, 1, 0, 1, 1, '', '', '2019-04-21 15:47:31', '2019-04-21 10:17:45'),
(13, '1555861715-24838', 'naziya@gmail.com', 2, 99, 8, 1, 0, 1, 1, '', '', '2019-04-21 15:48:35', '2019-04-21 10:18:53'),
(14, '1555862220-25574', 'naziya@gmail.com', 2, 290, 2, 2, 0, 1, 1, '', 'isso@gmail.com', '2019-04-21 15:57:00', '2019-04-21 20:49:53'),
(15, '1555869489-27265', 'akshay@gmail.com', 3, 200, 2, 1, 0, 1, 0, '', 'isso@gmail.com', '2019-04-21 17:58:09', '2019-04-21 20:33:08'),
(18, '1555898633-30697', 'naziya@gmail.com', 4, 288, 8, 2, 0, 0, 0, '', '', '2019-04-22 02:03:53', NULL),
(19, '1555898648-32995', 'naziya@gmail.com', 2, 180, 9, 1, 0, 0, 0, '', '', '2019-04-22 02:04:08', NULL),
(20, '1555899871-33449', 'tahoora@gmail.com', 4, 1010, 15, 2, 1, 1, 0, 'isso@yahoo.com', 'isso@gmail.com', '2019-04-22 02:24:31', '2019-04-21 20:56:25'),
(21, '1555907648-35767', 'naziya@gmail.com', 5, 389, 2, 3, 0, 0, 0, '', '', '2019-04-22 04:34:08', NULL),
(22, '1556344090-38964', 'akshay@gmail.com', 10, 2245, 17, 9, 0, 0, 0, '', '', '2019-04-27 05:48:10', NULL),
(23, '1556776810-47532', 'akshay@gmail.com', 1, 180, 9, 1, 0, 0, 0, '', '', '2019-05-02 06:00:11', NULL),
(24, '1556777076-48368', 'akshay@gmail.com', 2, 200, 4, 1, 0, 0, 0, '', '', '2019-05-02 06:04:36', NULL),
(25, '1557659342-49643', 'akshay@gmail.com', 8, 750, 10, 3, 0, 1, 0, '', 'shahid@gmail.com', '2019-05-12 11:09:02', '2019-10-13 09:22:36'),
(26, '1558868451-52839', 'akshay@gmail.com', 2, 560, 10, 2, 0, 1, 0, '', 'shahid@gmail.com', '2019-05-26 11:00:51', '2019-10-13 09:22:22'),
(27, '1572765925-54272', 'akshay@gmail.com', 3, 400, 2, 1, 0, 0, 0, '', '', '2019-11-03 07:25:25', NULL),
(28, '1572767664-55896', 'akshay@gmail.com', 3, 1040, 13, 2, 0, 0, 0, '', '', '2019-11-03 07:54:24', NULL),
(29, '1591386929-57924', 'akshay@gmail.com', 2, 680, 10, 2, 0, 0, 0, '', '', '2020-06-05 19:55:29', NULL),
(30, '1591391965-59735', 'akshay@gmail.com', 4, 1110, 9, 2, 0, 0, 0, '', '', '2020-06-05 21:19:25', NULL),
(31, '1591392422-61368', 'akshay@gmail.com', 4, 288, 8, 2, 0, 0, 0, '', '', '2020-06-05 21:27:03', NULL),
(32, '2309487060-1594465297887', 'Exmouth', 455, 0, 3, 0, 0, 0, 0, '', '0', '2020-07-11 11:01:37', NULL),
(33, '1530698709-1594465376328', 'Exmouth', 455, 0, 3, 0, 0, 0, 0, '', '0', '2020-07-11 11:02:56', NULL),
(34, '2462591882-1594468299536', 'Exmouth', 455, 0, 3, 0, 0, 0, 0, '', '0', '2020-07-11 11:51:39', NULL),
(35, '2569862377-1594468341915', 'Exmouth', 455, 0, 3, 0, 0, 0, 0, '', '0', '2020-07-11 11:52:21', NULL),
(36, '1544092744-1594486997464', 'Exmouth', 455, 0, 3, 0, 0, 0, 0, '', '0', '2020-07-11 17:03:17', NULL),
(37, '2335708578-1594487148420', 'Exmouth', 455, 0, 3, 0, 0, 0, 0, '', '0', '2020-07-11 17:05:48', NULL),
(38, '2418284410-1594559259287', 'test@admin.com', 455, 1220, 2147483647, 4, 0, 0, 0, '', '0', '2020-07-12 13:07:39', NULL),
(39, '1424958981-1594560290842', 'test@admin.com', 2, 360, 1424958981, 1, 0, 0, 0, '', '0', '2020-07-12 13:24:51', NULL),
(40, '400342890-1594560547837', 'test@admin.com', 2, 360, 400342890, 1, 0, 0, 0, '', '0', '2020-07-12 13:29:08', NULL),
(41, '57403729-1594560576057', 'test@admin.com', 2, 360, 57403729, 1, 0, 0, 0, '', '0', '2020-07-12 13:29:36', NULL),
(42, '272175174-1594560633193', 'test@admin.com', 7, 570, 272175174, 1, 0, 0, 0, '', '0', '2020-07-12 13:30:33', NULL),
(43, '1076527284-1594560664330', 'test@admin.com', 2, 570, 1076527284, 1, 0, 0, 0, '', '0', '2020-07-12 13:31:04', NULL),
(44, '961784548-1594560811316', 'test@admin.com', 6, 570, 961784548, 1, 0, 0, 0, '', '0', '2020-07-12 13:33:32', NULL),
(45, '1222871381-1594561197374', 'test@admin.com', 6, 570, 1222871381, 1, 0, 0, 0, '', '0', '2020-07-12 13:39:57', NULL),
(46, '536699541-1594561225261', 'test@admin.com', 7, 455, 536699541, 1, 0, 0, 0, '', '0', '2020-07-12 13:40:25', NULL),
(47, '2872447569-1594561297795', 'test@admin.com', 7, 455, 2147483647, 1, 0, 0, 0, '', '0', '2020-07-12 13:41:37', NULL),
(48, '1515008367-1594561373823', 'test@admin.com', 7, 455, 1515008367, 1, 0, 0, 0, '', '0', '2020-07-12 13:42:53', NULL),
(49, '2206952259-1594629451277', 'test@admin.com', 3, 330, 2147483647, 1, 0, 0, 0, '', '0', '2020-07-13 08:37:31', NULL),
(50, '1243168903-1594630914254', 'test@admin.com', 4, 1490, 1243168903, 2, 0, 0, 0, '', '0', '2020-07-13 09:01:54', NULL),
(55, '2272998476-1598527045675', 'test@admin.com', 4, 1030, 2147483647, 2, 0, 1, 0, '', 'Huzaifa', '2020-08-27 11:17:25', '2020-08-27 05:54:49'),
(56, '1949536456-1598626813909', 'test@admin.com', 4, 920, 1949536456, 2, 0, 0, 0, '', '0', '2020-08-28 15:00:13', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchenusers`
--
ALTER TABLE `kitchenusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_email_index` (`email`),
  ADD KEY `order_id` (`order_id`(191));

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registers_email_unique` (`email`);

--
-- Indexes for table `specialties`
--
ALTER TABLE `specialties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorials`
--
ALTER TABLE `tutorials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_models`
--
ALTER TABLE `upload_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`id`,`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kitchenusers`
--
ALTER TABLE `kitchenusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialties`
--
ALTER TABLE `specialties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `upload_models`
--
ALTER TABLE `upload_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
