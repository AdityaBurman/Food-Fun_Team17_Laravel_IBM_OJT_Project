-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 05, 2022 at 09:46 AM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u856373178_adityaburman`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(22, 'Appetizers', 'appetizers', '2022-02-06 05:34:51', '2022-02-06 05:34:51'),
(23, 'Flat Breads', 'flat-breads', '2022-02-06 05:35:20', '2022-02-06 05:35:20'),
(24, 'Meals', 'meals', '2022-02-06 05:35:35', '2022-02-06 05:35:35'),
(25, 'Drinks', 'drinks', '2022-02-06 05:36:36', '2022-02-06 05:36:36'),
(26, 'Desserts', 'desserts', '2022-02-06 05:36:55', '2022-02-06 05:36:55'),
(27, 'Break Fast', 'break-fast', '2022-02-06 05:45:23', '2022-02-06 05:45:23'),
(28, 'Pizza', 'pizza', '2022-02-06 05:46:10', '2022-02-06 05:46:10'),
(29, 'Fruits', 'fruits', '2022-02-06 05:51:53', '2022-02-06 05:51:53'),
(30, 'Snaks', 'snaks', '2022-02-06 05:52:12', '2022-02-06 05:52:12'),
(31, 'Veggies', 'veggies', '2022-02-06 05:52:48', '2022-02-06 05:52:48'),
(32, 'Sweets', 'sweets', '2022-02-06 05:53:17', '2022-02-06 05:53:17'),
(33, 'Main Course', 'main-course', '2022-02-06 06:01:39', '2022-02-06 06:01:39'),
(34, 'Salads', 'salads', '2022-02-06 06:02:32', '2022-02-06 06:02:32'),
(37, 'salad', 'salad', '2022-02-13 14:40:49', '2022-02-13 14:40:49'),
(38, 'sweats', 'sweats', '2022-02-13 14:42:39', '2022-02-13 14:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Anshu Jangid', 'jangidanshu2000@gmail.com', '7878787878', 'hi', '2022-01-27 02:52:57', '2022-01-27 02:52:57'),
(4, 'Aditya Burman', 'adityaburman969@gmail.com', '8989898989', 'g', '2022-02-03 01:20:22', '2022-02-03 01:20:22'),
(5, 'Demo', 'demo@gmail.com', '7878787878', 'hi', '2022-02-03 04:09:17', '2022-02-03 04:09:17'),
(10, 'Diya', 'durga788sahu@gmail.com', '9351872292', 'i want to order', '2022-02-13 07:40:30', '2022-02-13 07:40:30'),
(15, 'Durga', 'durga788sahu@gmail.com', '9351872292', 'Hii', '2022-03-01 08:40:05', '2022-03-01 08:40:05'),
(16, 'Nirmal', 'demo788sahu@gmail.com', '1234567891', 'hii', '2022-03-03 02:35:54', '2022-03-03 02:35:54'),
(17, 'Aditya', 'aditya@gmail.com', '8787878787', 'hi food & fun', '2022-03-03 11:22:49', '2022-03-03 11:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_11_024235_create_sessions_table', 1),
(7, '2022_01_11_104859_create_categories_table', 1),
(8, '2022_01_11_113653_create_products_table', 1),
(9, '2022_01_16_101202_create_orders_table', 1),
(10, '2022_01_16_101400_create_order_items_table', 1),
(11, '2022_01_16_101427_create_shippings_table', 1),
(12, '2022_01_16_101604_create_transactions_table', 1),
(13, '2022_01_17_131921_add_delivered_cancelled_date_to_orders_table', 1),
(14, '2022_01_17_184410_create_reviews_table', 1),
(15, '2022_01_18_080346_add_rstatus_to_order_items_table', 1),
(16, '2022_01_19_082153_create_contacts_table', 1),
(17, '2022_01_19_173057_create_shoppingcart_table', 1),
(18, '2022_01_20_084250_create_profiles_table', 1),
(19, '2022_02_01_071110_create_tables_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `tax` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ordered','delivered','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ordered',
  `is_shipping_different` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delivered_date` date DEFAULT NULL,
  `cancelled_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `subtotal`, `discount`, `tax`, `total`, `firstname`, `lastname`, `mobile`, `email`, `line1`, `line2`, `city`, `province`, `zipcode`, `status`, `is_shipping_different`, `created_at`, `updated_at`, `delivered_date`, `cancelled_date`) VALUES
(14, 4, '50.00', '0.00', '0.00', '50.00', 'Durga ', 'Sahu', '9898989898', 'durga788sahu@gmail.com', 'Demo', 'Demo', 'Indore', 'MP', '495009', 'delivered', 0, '2022-02-06 07:31:59', '2022-02-13 20:02:15', '2022-02-13', NULL),
(15, 4, '50.00', '0.00', '0.00', '50.00', 'Durga', 'Sahu', '8989898989', 'durga788sahu@gmail.com', 'demo', 'demo', 'Indore', 'MP', '495009', 'delivered', 0, '2022-02-06 07:34:27', '2022-02-20 11:57:52', '2022-02-20', NULL),
(16, 4, '50.00', '0.00', '0.00', '50.00', 'Durga', 'Sahu', '8989898989', 'durga788sahu@gmail.com', 'demo', 'demo', 'Indore', 'MP', '495009', 'delivered', 0, '2022-02-06 07:37:38', '2022-02-20 11:57:52', '2022-02-20', NULL),
(17, 4, '75.00', '0.00', '0.00', '75.00', 'Durga', 'Sahu', '8989898989', 'durga788sahu@gmail.com', 'demo', 'demo', 'Indore', 'MP', '495009', 'delivered', 0, '2022-02-07 01:10:06', '2022-02-20 11:57:51', '2022-02-20', '2022-02-07'),
(18, 4, '125.00', '0.00', '0.00', '125.00', 'Durga', 'Sahu', '8989898989', 'durga788sahu@gmail.com', 'demo', 'demo', 'Indore', 'MP', '495**9', 'delivered', 0, '2022-02-07 01:24:11', '2022-02-20 11:57:50', '2022-02-20', NULL),
(19, 4, '670.00', '0.00', '0.00', '670.00', 'Aditya', 'Burman', '08989898989', 'adityaburman969@gmail.com', 'demo address', '3qt4', 'rgg', 'MP', '495001', 'delivered', 0, '2022-02-10 01:36:12', '2022-02-20 11:57:50', '2022-02-20', NULL),
(20, 4, '980.00', '0.00', '0.00', '980.00', 'Aditya ', 'Burman', '08989898989', 'adityaburman969@gmail.com', 'demo address', '3qt4', 'Bilaspur', 'CG', '486001', 'delivered', 0, '2022-02-10 06:43:42', '2022-02-20 11:57:49', '2022-02-20', NULL),
(21, 4, '50.00', '0.00', '0.00', '50.00', 'Durga', 'Sahu', '8989898989', 'durga788sahu@gmail.com', 'demo', 'demo', 'Indore', 'cc', '495009', 'delivered', 0, '2022-02-10 06:45:16', '2022-02-20 11:57:48', '2022-02-20', '2022-02-10'),
(22, 5, '300.00', '0.00', '0.00', '300.00', 'Amit', 'Gupta', '9128433147', 'sonamkapoor.0101.kr@gmail.com', 'Vss nagar', 'Vss nagar', 'Bhubaneswar', 'Bhubaneswar', '751010', 'delivered', 0, '2022-02-13 16:36:50', '2022-02-20 11:57:45', '2022-02-20', NULL),
(23, 11, '210.00', '0.00', '0.00', '210.00', 'Anshu ', '1', '8989898989', 'durga788sahu@gmail.com', 'demo', 'demo', 'Indore', 'MP', '495009', 'delivered', 0, '2022-02-14 08:33:33', '2022-02-14 08:41:34', '2022-02-14', NULL),
(24, 5, '400.00', '0.00', '0.00', '400.00', 'Amit', 'Kumar', '7254941179', 'amitkumar291199@gmail.com', 'Patna', 'Patna', 'Patna', 'Bihar', '800001', 'delivered', 0, '2022-02-15 07:03:23', '2022-02-20 11:57:41', '2022-02-20', NULL),
(25, 8, '50.00', '0.00', '0.00', '50.00', 'Aditya ', 'Burman', '7070707070', 'adityaburman969@gmail.com', 'Hidden', 'Hidden', 'Hidden', 'Hidden', '49***1', 'ordered', 0, '2022-02-21 18:01:02', '2022-02-21 18:01:02', NULL, NULL),
(26, 5, '100.00', '0.00', '0.00', '100.00', 'Amit', 'Kumar', '7000005544', 'amitkumar4@gmail.com', 'Bhubaneswar', 'Bhubaneswae', 'Bhubaneswae', 'Odisha', '751010', 'delivered', 0, '2022-02-22 08:43:14', '2022-02-28 01:52:09', '2022-02-28', '2022-02-28'),
(27, 8, '230.00', '0.00', '0.00', '230.00', 'Aditya ', 'Burman', '7878787878', 'adityaburman969@gmail.com', 'demo', 'demo', 'demo', 'demo', '49***1', 'ordered', 0, '2022-02-28 10:12:39', '2022-02-28 10:12:39', NULL, NULL),
(28, 8, '50.00', '0.00', '0.00', '50.00', 'Aditya ', 'Burman', '08989898989', 'adityaburman969@gmail.com', 'demo', 'demo', 'demo', 'demo', '567890', 'delivered', 0, '2022-02-28 10:18:37', '2022-02-28 13:44:16', '2022-03-01', '2022-03-01'),
(29, 8, '50.00', '0.00', '0.00', '50.00', 'Aditya ', 'Burman', '7878787878', 'jangidanshu2000@gmail.com', 'Hidden', 'Hidden', 'Hidden', 'Hidden', '49***1', 'cancelled', 0, '2022-03-01 08:40:23', '2022-03-01 08:53:13', NULL, '2022-03-01'),
(30, 8, '150.00', '0.00', '0.00', '150.00', 'Durga', 'Sahu', '7878787878', 'durga788sahu@gmail.com', 'Hidden', 'Hidden', 'Hidden', 'Hidden', '567892', 'delivered', 0, '2022-03-01 10:18:57', '2022-03-03 10:02:58', '2022-03-03', NULL),
(31, 15, '240.00', '0.00', '0.00', '240.00', 'Amit ', 'Kumar', '6767676767', 'amitkumar291199@gmail.com', 'Demo', 'Demo', 'Demo', 'Demo', '49***1', 'delivered', 0, '2022-03-03 11:32:45', '2022-03-03 11:34:21', '2022-03-03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rstatus` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `price`, `quantity`, `created_at`, `updated_at`, `rstatus`) VALUES
(21, 37, 14, '50.00', 1, '2022-02-06 07:31:59', '2022-02-06 07:31:59', 0),
(22, 37, 15, '50.00', 1, '2022-02-06 07:34:27', '2022-02-06 07:34:27', 0),
(23, 37, 16, '50.00', 1, '2022-02-06 07:37:38', '2022-02-06 07:37:38', 0),
(24, 45, 17, '75.00', 1, '2022-02-07 01:10:06', '2022-02-07 01:10:06', 0),
(25, 45, 18, '75.00', 1, '2022-02-07 01:24:11', '2022-02-07 01:24:11', 0),
(26, 40, 18, '50.00', 1, '2022-02-07 01:24:11', '2022-02-07 01:24:11', 0),
(27, 38, 19, '60.00', 2, '2022-02-10 01:36:12', '2022-02-10 01:36:12', 0),
(28, 37, 19, '50.00', 3, '2022-02-10 01:36:12', '2022-02-10 01:36:12', 0),
(29, 50, 19, '100.00', 4, '2022-02-10 01:36:12', '2022-02-10 01:36:12', 0),
(30, 41, 20, '30.00', 2, '2022-02-10 06:43:42', '2022-02-10 06:43:42', 0),
(31, 57, 20, '100.00', 4, '2022-02-10 06:43:42', '2022-02-10 06:43:42', 0),
(32, 38, 20, '60.00', 2, '2022-02-10 06:43:42', '2022-02-10 06:43:42', 0),
(33, 50, 20, '100.00', 4, '2022-02-10 06:43:42', '2022-02-10 06:43:42', 0),
(34, 37, 21, '50.00', 1, '2022-02-10 06:45:16', '2022-02-10 06:45:16', 0),
(35, 38, 22, '60.00', 2, '2022-02-13 16:36:50', '2022-02-13 16:36:50', 0),
(36, 39, 22, '60.00', 3, '2022-02-13 16:36:50', '2022-02-13 16:36:50', 0),
(37, 38, 23, '60.00', 1, '2022-02-14 08:33:33', '2022-02-14 08:33:33', 0),
(38, 37, 23, '50.00', 3, '2022-02-14 08:33:33', '2022-02-14 08:33:33', 0),
(39, 38, 24, '60.00', 2, '2022-02-15 07:03:23', '2022-02-15 07:03:23', 0),
(40, 39, 24, '60.00', 3, '2022-02-15 07:03:23', '2022-02-15 07:03:23', 0),
(41, 37, 24, '50.00', 2, '2022-02-15 07:03:23', '2022-02-15 07:03:23', 0),
(42, 37, 25, '50.00', 1, '2022-02-21 18:01:02', '2022-02-21 18:01:02', 0),
(43, 40, 26, '50.00', 1, '2022-02-22 08:43:14', '2022-02-22 08:43:14', 0),
(44, 37, 26, '50.00', 1, '2022-02-22 08:43:14', '2022-02-22 08:43:14', 0),
(45, 37, 27, '50.00', 1, '2022-02-28 10:12:39', '2022-02-28 10:12:39', 0),
(46, 38, 27, '60.00', 2, '2022-02-28 10:12:39', '2022-02-28 10:12:39', 0),
(47, 39, 27, '60.00', 1, '2022-02-28 10:12:39', '2022-02-28 10:12:39', 0),
(48, 37, 28, '50.00', 1, '2022-02-28 10:18:37', '2022-02-28 10:18:37', 0),
(49, 37, 29, '50.00', 1, '2022-03-01 08:40:23', '2022-03-01 08:40:23', 0),
(50, 37, 30, '50.00', 1, '2022-03-01 10:18:57', '2022-03-01 10:18:57', 0),
(51, 40, 30, '50.00', 2, '2022-03-01 10:18:57', '2022-03-01 10:18:57', 0),
(52, 39, 31, '60.00', 3, '2022-03-03 11:32:45', '2022-03-03 11:32:45', 0),
(53, 38, 31, '60.00', 1, '2022-03-03 11:32:45', '2022-03-03 11:32:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('adityaburman969@gmail.com', '$2y$10$swi4OnURgiMSTGHqvSxQ.e32a/W0N7c8pu3okPx.ww8v/ZvAPkoey', '2022-03-01 10:01:15'),
('durga788sahu@gmail.com', '$2y$10$4JYV6NEnoNE6lImBL0GA3O2eGdRtEmz2RUfSwHyqjXTUgpo4.mOpO', '2022-03-04 14:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` decimal(8,2) NOT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `SKU` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_status` enum('instock','outofstock') COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `quantity` int(10) UNSIGNED NOT NULL DEFAULT 10,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `description`, `regular_price`, `sale_price`, `SKU`, `stock_status`, `featured`, `quantity`, `image`, `images`, `category_id`, `created_at`, `updated_at`) VALUES
(37, 'Tomato Salad', 'tomato-salad', 'Tomato mustard powder, Onions, Celery, Cucumber Pickle, Pickle Relish, Salt', 'Tomato is the best vegetable that exists on this planet. And salads that you make from this vegetable are the best. In this salad, bowl with onions, cucumber and mint leaf with seasonings. It tastes even better if the skin of the potatoes is still on.', '50.00', '0.00', 'Food1', 'instock', 1, 100, '1644154969.jpg', NULL, 34, '2022-02-06 06:26:47', '2022-02-06 08:12:49'),
(38, 'Broccoli Salad', 'broccoli-salad', 'Mixed broccoli with finely chopped bacon, rice vinegar onion, olive oil and peas ', 'Broccoli is a branched, green vegetable with either purple or more commonly green flower buds. It belongs to the brassica family, along with cauliflower, cabbage and kale, and can be eaten raw or cooked.', '60.00', '0.00', 'Food2', 'instock', 1, 100, '1644154297.jpg', NULL, 34, '2022-02-06 08:01:37', '2022-02-06 08:01:37'),
(39, 'Pasta Salad', 'pasta-salad', 'Try sliced fennel, grated carrots, radish, and even cauliflower or broccoli.', '400 calories; protein 7.9g; carbohydrates 39g; fat 24.8g; cholesterol 2.7mg; sodium 1904.2mg. ', '60.00', '0.00', 'Food3', 'instock', 1, 100, '1644154866.jpg', NULL, 34, '2022-02-06 08:11:06', '2022-02-06 08:11:06'),
(40, 'Potato Salad', 'potato-salad', 'Potatoes, white vinegar, onion, mustard, celery seed, salt and fresh ground pepper', '  Potatoes, white vinegar, onion, mustard, celery seed, salt and fresh ground pepper', '50.00', '0.00', 'Food4', 'instock', 1, 50, '1644155551.jpg', NULL, 34, '2022-02-06 08:22:31', '2022-02-06 08:22:31'),
(41, 'Samosa', 'samosa', 'flour, cumin seeds, crushed ginger, potato, coriander, cumin, red chili ,kasoori methi leaves.', '  flour, cumin seeds, crushed ginger, potato, coriander, cumin, red chili ,kasoori methi leaves.', '30.00', '0.00', 'Food5', 'instock', 1, 100, '1644156427.jpg', NULL, 22, '2022-02-06 08:37:07', '2022-02-06 08:37:07'),
(42, 'Pakora', 'pakora', 'chickpea flour, onion, ground coriander, salt, ground turmeric, chili powder', 'chickpea flour, onion, ground coriander, salt, ground turmeric, chili powder', '50.00', '0.00', 'Food6', 'instock', 0, 100, '1644157214.jpg', NULL, 22, '2022-02-06 08:49:32', '2022-02-06 08:50:14'),
(43, 'Dahi Vada', 'dahi-vada', 'Black gram lentils without skin, Crushed Ginger-Green Chilli, Curd, Red Chilli, Roasted Cumin Powder, chopped Coriander, Black Pepper Powder.', 'Black gram lentils without skin, Crushed Ginger-Green Chilli, Curd, Red Chilli, Roasted Cumin Powder, chopped Coriander, Black Pepper Powder.', '50.00', '0.00', 'Food7', 'instock', 1, 100, '1644158365.jpg', NULL, 22, '2022-02-06 09:09:25', '2022-02-06 09:09:25'),
(44, 'Papad', 'papad', 'Black gram flour,  chilli powder,  turmeric, thymol seeds.', 'Black gram flour,  chilli powder,  turmeric, thymol seeds.', '20.00', '0.00', 'Food8', 'instock', 1, 100, '1644165391.jpg', NULL, 22, '2022-02-06 11:06:31', '2022-02-06 11:06:31'),
(45, 'Paneer Tikka', 'paneer-tikka', 'Paneer tikka is an indian cuisine dish with grilled paneer cheese with vegetables and spices.', 'Paneer tikka is an indian cuisine dish with grilled paneer cheese with vegetables and spices.', '75.00', '0.00', 'Food9', 'instock', 1, 100, '1644165909.jpg', NULL, 22, '2022-02-06 11:15:09', '2022-02-06 11:15:09'),
(46, 'Veg Momos', 'veg-momos', ' Veg momos has savory veggie filling has a balanced taste and is lightly spiced', ' Veg momos has savory veggie filling has a balanced taste and is lightly spiced', '50.00', '0.00', 'Food 10', 'instock', 0, 100, '1644166709.jpg', NULL, 22, '2022-02-06 11:28:29', '2022-02-06 11:28:29'),
(47, 'Dhokla', 'dhokla', ' Wonderfully soft and fluffy, lightly sweet and savory cake that’s perfect to enjoy anytime of the day.', ' Wonderfully soft and fluffy, lightly sweet and savory cake that’s perfect to enjoy anytime of the day.', '50.00', '0.00', 'Food 11', 'instock', 0, 100, '1644167655.jpg', NULL, 22, '2022-02-06 11:44:15', '2022-02-06 11:44:15'),
(48, 'Pani Puri', 'pani-puri', 'small puri balls filled with spiced and mashed aloo and a specially made spiced water.', 'small puri balls filled with spiced and mashed aloo and a specially made spiced water.', '50.00', '0.00', 'Food 12', 'instock', 1, 100, '1644168348.jpg', NULL, 22, '2022-02-06 11:55:48', '2022-02-06 11:55:48'),
(49, 'Idli', 'idli', ' Idli is a soft & fluffy steamed cake made of fermented rice & lentil batter.', ' Idli is a soft & fluffy steamed cake made of fermented rice & lentil batter.', '80.00', '0.00', 'Food 13', 'instock', 1, 100, '1644169225.jpg', NULL, 22, '2022-02-06 12:10:25', '2022-02-06 12:10:25'),
(50, 'Masala Dosa', 'masala-dosa', 'Masala dosa is one that is crisp, aromatic, flavorful and has a potato and spiced seasoned potatoes stuffed.', 'Masala dosa is one that is crisp, aromatic, flavorful and has a potato and spiced seasoned potatoes stuffed.', '100.00', '0.00', 'Food 14', 'instock', 1, 100, '1644170025.jpg', NULL, 22, '2022-02-06 12:23:45', '2022-02-06 12:23:45'),
(51, 'Still Water', 'still-water', ' Drinking water', ' Drinking water', '10.00', '0.00', 'Food 15', 'instock', 1, 100, '1644171798.jpg', NULL, 25, '2022-02-06 12:53:18', '2022-02-06 12:53:18'),
(52, 'Sparkling Water', 'sparkling-water', ' Drinking water', ' Drinking water', '20.00', '0.00', 'Food 16', 'instock', 1, 100, '1644172214.jpg', NULL, 25, '2022-02-06 13:00:14', '2022-02-06 13:00:14'),
(53, 'Apple Juice', 'apple-juice', 'Apple juice is a moderate source of potassium, a mineral that acts as an electrolyte and is important for nerve signaling and heart health.', 'Apple juice is a moderate source of potassium, a mineral that acts as an electrolyte and is important for nerve signaling and heart health.', '20.00', '0.00', 'Food 17', 'instock', 1, 100, '1644172658.jpg', NULL, 25, '2022-02-06 13:07:38', '2022-02-06 13:07:38'),
(54, 'Orange Juice', 'orange-juice', 'Orange juice is a significant source of vitamin C, an antioxidant that is essential for skin health and iron absorption.', 'Orange juice is a significant source of vitamin C, an antioxidant that is essential for skin health and iron absorption.', '50.00', '0.00', 'Food 18', 'instock', 0, 100, '1644173011.jpg', NULL, 25, '2022-02-06 13:13:31', '2022-02-06 13:13:31'),
(55, 'Tomato Juice', 'tomato-juice', 'Tomato juice is particularly high in vitamin C, a potent antioxidant that supports iron absorption and promotes skin and immune health.', 'Tomato juice is particularly high in vitamin C, a potent antioxidant that supports iron absorption and promotes skin and immune health.', '50.00', '0.00', 'Food 18', 'instock', 1, 100, '1644173337.jpg', NULL, 25, '2022-02-06 13:18:57', '2022-02-06 13:18:57'),
(56, 'Rasmalai', 'rasmalai', 'Rasmalai  features soft and spongy rasgulla swimming in a silky smooth cream perfumed with almonds, pistachios, saffron and cardamom.', 'Rasmalai Recipe features soft and spongy rasgulla swimming in a silky smooth cream perfumed with almonds, pistachios, saffron and cardamom.', '100.00', '0.00', 'Food 20', 'instock', 1, 100, '1644174491.jpg', NULL, 26, '2022-02-06 13:38:11', '2022-02-06 13:38:11'),
(57, 'Kheer', 'kheer', 'Grab your spoons for this Indian pudding. Served warm or cold, creamy rice kheer is a staple in many Indian homes.', 'Grab your spoons for this Indian pudding. Served warm or cold, creamy rice kheer is a staple in many Indian homes.', '100.00', '0.00', 'Food 23', 'instock', 1, 100, '1644174722.jpg', NULL, 26, '2022-02-06 13:42:02', '2022-02-06 13:42:02'),
(58, 'Jalebi', 'jalebi', 'fried, crispy and sugar-coated. ', 'fried, crispy and sugar-coated. ', '100.00', '0.00', 'Food 22', 'instock', 1, 100, '1644175061.jpg', NULL, 26, '2022-02-06 13:47:41', '2022-02-06 13:47:41'),
(59, 'Rasgulla', 'rasgulla', 'Bite-sized cheese balls soaked in floral sugar syrup. ', 'Bite-sized cheese balls soaked in floral sugar syrup. ', '100.00', '0.00', 'Food 24', 'instock', 1, 100, '1644175234.jpg', NULL, 26, '2022-02-06 13:50:34', '2022-02-06 13:50:34'),
(60, 'Modak', 'modak', 'Filled with jaggery, cardamom and poppy seeds, modak is a small, sweet dumpling typically served at Ganesh Chaturthi.', 'Filled with jaggery, cardamom and poppy seeds, modak is a small, sweet dumpling typically served at Ganesh Chaturthi.', '50.00', '0.00', 'Food 25', 'instock', 1, 100, '1644175620.jpg', NULL, 26, '2022-02-06 13:57:00', '2022-02-06 13:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `image`, `mobile`, `line1`, `line2`, `city`, `province`, `zipcode`, `created_at`, `updated_at`) VALUES
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-26 22:09:19', '2022-01-26 22:09:19'),
(4, 4, '1644476864.jpg', NULL, 'Hidden1', 'Hidden2', 'Hidden2', 'Hidden2', '495**1', '2022-02-07 01:17:00', '2022-02-10 01:37:44'),
(5, 5, '1645519608.jpg', NULL, 'Bhubaneswar', 'Bhubaneswar', 'Bhubaneswar', 'Odisha', '751010', '2022-02-13 05:52:54', '2022-02-22 08:46:48'),
(6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-13 08:20:30', '2022-02-13 08:20:30'),
(7, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-13 19:14:57', '2022-02-13 19:14:57'),
(8, 8, '1646130243.jpg', NULL, 'Hidden', 'Hidden', 'Hidden', 'Hidden', '49***1', '2022-02-13 19:53:06', '2022-03-01 10:24:03'),
(9, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-14 08:29:57', '2022-02-14 08:29:57'),
(10, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-03 11:32:49', '2022-03-03 11:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_item_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3PeKMUpdF4bhKMhavTDFpwifX8GfGq9NN5bZAHxj', NULL, '2401:4900:3bf8:a8c7:9aee:f3b6:4618:de99', 'Mozilla/5.0 (Linux; Android 11; SAMSUNG SM-M215F) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/15.0 Chrome/90.0.4430.210 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUFRkNUdZRTNGT1lJYVVCejVCRklGSmNhTkkxQll4T2dTcmx0Q2RUVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmZvb2RmdW4ub25saW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1646467831),
('4rBrbX81A6TRxS57CdVmEEdzYm0iV8Ptmmo3VWQy', NULL, '2409:4052:200d:6144::3cc:38ac', 'Mozilla/5.0 (Linux; Android 11; vivo 1901) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.87 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGVnS2NSOE5zNXdnbjh2U2NSMW5aSG83ckFMd2k2VzlYWElwWDJEdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vZm9vZGZ1bi5vbmxpbmUvcHJvZHVjdC92ZWctbW9tb3MiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1646396923),
('5ZknC3dmFsCoL9q4EaW1ovjx2FLn4rWJW0QiKpIL', NULL, '34.215.95.147', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXZvUG15MGRjb3J3SWdrUFA0UWQ3YlJaNDVWMnlZVThEZFBjZDFJSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZm9vZGZ1bi5vbmxpbmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1646458156),
('AF0srK2DVFDNf4KqzkgAXa1pUIBPfbrmf26fatr8', NULL, '54.245.17.133', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibENKMTM2T2QzT2dnZ1B0QVVCc0tzMGpXSmNvcEpHb1NZSEtJSVpoaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZm9vZGZ1bi5vbmxpbmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1646458139),
('BoMQM4nMqnYKEqraVjrPF1XD1LdOCdShTDwrlrq7', NULL, '106.212.162.118', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36 Edg/98.0.1108.62', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ0pGV1FXZjRHOHBhS2o2UFNuY3lIMzBhbXVkQzlLR0JWcm55OE9qcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZm9vZGZ1bi5vbmxpbmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1646473583),
('cr2I4ahblCGWZ3GyezICa8sewHg9S248GQQQzf2g', NULL, '2401:4900:544d:6c3c::c2a:1560', 'Mozilla/5.0 (Linux; Android 10; M2004J19C) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMWRYcGRqcEZwY2FFa1pVOGdvZTZDOXpocTh1U09QbVZzVGVNVUphMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmZvb2RmdW4ub25saW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1646397014),
('dIvt6z3v3ZELgTAhjO2rQFIiwFPz67Jkm5Qc3ixn', NULL, '54.149.49.114', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNlpUdXJUVGFGN1hSOGpBa0Z0OGFkNUhhUGtjbHl2bTNNa05lcUEwWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZm9vZGZ1bi5vbmxpbmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1646458139),
('Ej0rUWY3YPBDNN5OlgKQRXxybpFeDgWNQPqvRDOF', NULL, '213.226.124.108', 'python-requests/2.27.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaXg5azJydHN5bVNvSVFxR2NuZTRLS2hmOHFWb2h5cllDbnZRak1EUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZm9vZGZ1bi5vbmxpbmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1646430945),
('fVSCz55CcZEuyoQdGCyLacV1aD0JbKaglPYfnaID', NULL, '49.44.78.106', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.99 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaGdCSlBzaHI3cmxFS092Zk1ibjZvaTRtMVNPS0d5MTZlM1N0NmNyayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZm9vZGZ1bi5vbmxpbmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1646472314),
('gQfsITUPTLQIguH0xJUkJ8kPd4WL11KyLRZS7G1s', NULL, '2405:205:1080:8444:4828:d52e:523:3d25', 'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMkNyVEgwRlNoeWVudVhXdFE3NlNkWE01Z2swS1ZEVjYzWnRoYTl3SyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHBzOi8vd3d3LmZvb2RmdW4ub25saW5lL2ZvcmdvdC1wYXNzd29yZCI7fXM6NDoiY2FydCI7YToyOntzOjg6Indpc2hsaXN0IjtPOjI5OiJJbGx1bWluYXRlXFN1cHBvcnRcQ29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YToyOntzOjMyOiI2Yjc3MGQwMDk4ZWI1YmM3ZjZlMGE3NGUzMzE0ZDRkMCI7TzozMjoiR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0iOjk6e3M6NToicm93SWQiO3M6MzI6IjZiNzcwZDAwOThlYjViYzdmNmUwYTc0ZTMzMTRkNGQwIjtzOjI6ImlkIjtpOjM4O3M6MzoicXR5IjtpOjE7czo0OiJuYW1lIjtzOjE0OiJCcm9jY29saSBTYWxhZCI7czo1OiJwcmljZSI7ZDo2MDtzOjc6Im9wdGlvbnMiO086Mzk6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtT3B0aW9ucyI6Mjp7czo4OiIAKgBpdGVtcyI7YTowOnt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO31zOjQ5OiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AYXNzb2NpYXRlZE1vZGVsIjtzOjE4OiJBcHBcTW9kZWxzXFByb2R1Y3QiO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQB0YXhSYXRlIjtpOjA7czo0MToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGlzU2F2ZWQiO2I6MDt9czozMjoiMTNhYjZlMDk4ZGNiZDViOWNjMjNhYWE4MDY5NTJiMDIiO086MzI6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtIjo5OntzOjU6InJvd0lkIjtzOjMyOiIxM2FiNmUwOThkY2JkNWI5Y2MyM2FhYTgwNjk1MmIwMiI7czoyOiJpZCI7aTozOTtzOjM6InF0eSI7aToxO3M6NDoibmFtZSI7czoxMToiUGFzdGEgU2FsYWQiO3M6NToicHJpY2UiO2Q6NjA7czo3OiJvcHRpb25zIjtPOjM5OiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbU9wdGlvbnMiOjI6e3M6ODoiACoAaXRlbXMiO2E6MDp7fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9czo0OToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGFzc29jaWF0ZWRNb2RlbCI7czoxODoiQXBwXE1vZGVsc1xQcm9kdWN0IjtzOjQxOiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AdGF4UmF0ZSI7aTowO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBpc1NhdmVkIjtiOjA7fX1zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fXM6NDoiY2FydCI7TzoyOToiSWxsdW1pbmF0ZVxTdXBwb3J0XENvbGxlY3Rpb24iOjI6e3M6ODoiACoAaXRlbXMiO2E6MTp7czozMjoiNmI3NzBkMDA5OGViNWJjN2Y2ZTBhNzRlMzMxNGQ0ZDAiO086MzI6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtIjo5OntzOjU6InJvd0lkIjtzOjMyOiI2Yjc3MGQwMDk4ZWI1YmM3ZjZlMGE3NGUzMzE0ZDRkMCI7czoyOiJpZCI7aTozODtzOjM6InF0eSI7aToyO3M6NDoibmFtZSI7czoxNDoiQnJvY2NvbGkgU2FsYWQiO3M6NToicHJpY2UiO2Q6NjA7czo3OiJvcHRpb25zIjtPOjM5OiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbU9wdGlvbnMiOjI6e3M6ODoiACoAaXRlbXMiO2E6MDp7fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9czo0OToiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGFzc29jaWF0ZWRNb2RlbCI7czoxODoiQXBwXE1vZGVsc1xQcm9kdWN0IjtzOjQxOiIAR2xvdWRlbWFuc1xTaG9wcGluZ2NhcnRcQ2FydEl0ZW0AdGF4UmF0ZSI7aTowO3M6NDE6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBpc1NhdmVkIjtiOjA7fX1zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fX19', 1646403964),
('huG3u4cVvkBDI852ma2MFvRCQQ3aAfKxsD2zVTjm', NULL, '18.236.162.144', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic09rNDZ1bHNGcWQ1M0NDa0s0RlJKZVFvQnRTT3hIcFd6N0MxelNvYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHBzOi8vZm9vZGZ1bi5vbmxpbmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1646458210),
('LMiFhIkbGBIqWFnVtU1GhdGg9rU5V8VMTs2Wpf1D', NULL, '2401:4900:546d:6ca4::c36:b55c', 'Mozilla/5.0 (Linux; Android 10; M2004J19C) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQzhWMUxJN1c1TDFUR211dk9IYXhTNE94NmhLTjY1bnF6Y1hMOGxFOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmZvb2RmdW4ub25saW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1646470211),
('oCf6jouR0ec7KUbtIjEK10OxUOaWoZ2iZzXLg0z4', NULL, '2405:201:9003:9f07:ec:12f7:3acc:6d5e', 'Mozilla/5.0 (Linux; Android 11; SM-A707F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.101 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ1gyZkN3OG5HdUFhYVVKUmVxak1ZQXdsSDdUaTM2SFd6V0ZRcDZ3cCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHBzOi8vZm9vZGZ1bi5vbmxpbmUvdGFibGUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1646394283),
('oKtsfawDXvmMqT3SkGHGrTvzdKiRtCBgjkBuB43V', NULL, '106.212.162.118', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.102 Safari/537.36 Edg/98.0.1108.62', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoieVJGWXhEOG9tOWpuaGZVR250NmJOdHNTMEFrRnhVV0FJWUFlbTFETiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1646473159),
('PPaJLZ26nlOkBoC98AY9fWR6SMvWpJa1fI1B0RQ3', NULL, '2402:8100:2354:6a86:517:4e45:4616:8666', 'Mozilla/5.0 (Linux; Android 11; M2007J20CI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.48 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTG1VbTRoQUhJaTdCTUtBRGhQaENJc0tuYTVYRE1qMTFQQXZ1MVZadyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmZvb2RmdW4ub25saW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1646375687),
('TLpJ8ixdccPZPmjNVEc8NQJWK7hhBSxEdzEUXKJk', NULL, '2402:3a80:d4a:a339:6dc7:87cd:7a09:3096', 'Mozilla/5.0 (Linux; Android 11; V2109) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.101 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV25meG1HQlA4ejJmTjdHemEwRXdZb0FDWXNneHpqMXRhWVhteFkzdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmZvb2RmdW4ub25saW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1646411938),
('W55fiPdd4uguwDVfq94EN6tEECgoy8irf1husmyZ', NULL, '2409:4052:4d86:f32e::3588:4b0a', 'Mozilla/5.0 (Linux; Android 11; SM-M127G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.101 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSFNjeTlTcWZsamxEalJXYmZrN3NPUXZOemJ1ZDIxclR1SDJxQUR5ciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmZvb2RmdW4ub25saW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1646404438),
('zYpBpBbKJcQbqxKmhqliF4Emj21SZPO5codXKIeU', NULL, '2402:8100:2357:c16b:7e23:f285:95c6:e725', 'Mozilla/5.0 (Linux; Android 11; M2007J20CI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.48 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ3ppVU1xbmJtMjVVbVlMS0pzTmVyMmpEVmw4RUFaV0ZlWUNUaVpISCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vd3d3LmZvb2RmdW4ub25saW5lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1646396988);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`identifier`, `instance`, `content`, `created_at`, `updated_at`) VALUES
('adityaburman24@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:1:{s:32:\"e0322ffbdacaa3555e30000247a852cf\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"e0322ffbdacaa3555e30000247a852cf\";s:2:\"id\";i:37;s:3:\"qty\";i:1;s:4:\"name\";s:12:\"Tomato Salad\";s:5:\"price\";d:50;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-02-13 19:38:36', NULL),
('adityaburman24@gmail.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-02-13 19:31:21', NULL),
('adityaburman969@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:2:{s:32:\"e0322ffbdacaa3555e30000247a852cf\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"e0322ffbdacaa3555e30000247a852cf\";s:2:\"id\";i:37;s:3:\"qty\";i:1;s:4:\"name\";s:12:\"Tomato Salad\";s:5:\"price\";d:50;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}s:32:\"0f6c1798aa972a19d9ae90e50c3d9c99\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"0f6c1798aa972a19d9ae90e50c3d9c99\";s:2:\"id\";i:40;s:3:\"qty\";i:2;s:4:\"name\";s:12:\"Potato Salad\";s:5:\"price\";d:50;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-03-01 10:16:03', NULL),
('adityaburman969@gmail.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:2:{s:32:\"e0322ffbdacaa3555e30000247a852cf\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"e0322ffbdacaa3555e30000247a852cf\";s:2:\"id\";i:37;s:3:\"qty\";i:1;s:4:\"name\";s:12:\"Tomato Salad\";s:5:\"price\";d:50;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}s:32:\"0f6c1798aa972a19d9ae90e50c3d9c99\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"0f6c1798aa972a19d9ae90e50c3d9c99\";s:2:\"id\";i:40;s:3:\"qty\";i:1;s:4:\"name\";s:12:\"Potato Salad\";s:5:\"price\";d:50;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-03-01 10:09:21', NULL),
('adityaburman9i6@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:2:{s:32:\"13ab6e098dcbd5b9cc23aaa806952b02\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"13ab6e098dcbd5b9cc23aaa806952b02\";s:2:\"id\";i:39;s:3:\"qty\";i:3;s:4:\"name\";s:11:\"Pasta Salad\";s:5:\"price\";d:60;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}s:32:\"6b770d0098eb5bc7f6e0a74e3314d4d0\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"6b770d0098eb5bc7f6e0a74e3314d4d0\";s:2:\"id\";i:38;s:3:\"qty\";i:1;s:4:\"name\";s:14:\"Broccoli Salad\";s:5:\"price\";d:60;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-03-03 11:31:50', NULL),
('adityaburman9i6@gmail.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:1:{s:32:\"e0322ffbdacaa3555e30000247a852cf\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"e0322ffbdacaa3555e30000247a852cf\";s:2:\"id\";i:37;s:3:\"qty\";i:1;s:4:\"name\";s:12:\"Tomato Salad\";s:5:\"price\";d:50;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-03-03 11:24:56', NULL),
('br.krishnabss@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-03-03 11:38:57', NULL),
('br.krishnabss@gmail.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-03-03 11:38:57', NULL),
('durga788sahu@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:5:{s:32:\"e0322ffbdacaa3555e30000247a852cf\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"e0322ffbdacaa3555e30000247a852cf\";s:2:\"id\";i:37;s:3:\"qty\";i:5;s:4:\"name\";s:12:\"Tomato Salad\";s:5:\"price\";d:50;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}s:32:\"6b770d0098eb5bc7f6e0a74e3314d4d0\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"6b770d0098eb5bc7f6e0a74e3314d4d0\";s:2:\"id\";i:38;s:3:\"qty\";i:2;s:4:\"name\";s:14:\"Broccoli Salad\";s:5:\"price\";d:60;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}s:32:\"0f6c1798aa972a19d9ae90e50c3d9c99\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"0f6c1798aa972a19d9ae90e50c3d9c99\";s:2:\"id\";i:40;s:3:\"qty\";i:1;s:4:\"name\";s:12:\"Potato Salad\";s:5:\"price\";d:50;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}s:32:\"2b54b668aa007d4026d89e5c8801f995\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"2b54b668aa007d4026d89e5c8801f995\";s:2:\"id\";i:41;s:3:\"qty\";i:1;s:4:\"name\";s:6:\"Samosa\";s:5:\"price\";d:30;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}s:32:\"136831a2175dd50e0ae7b5c9571a2cc7\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"136831a2175dd50e0ae7b5c9571a2cc7\";s:2:\"id\";i:45;s:3:\"qty\";i:4;s:4:\"name\";s:12:\"Paneer Tikka\";s:5:\"price\";d:75;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-03-01 08:46:01', NULL),
('durga788sahu@gmail.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:4:{s:32:\"e0322ffbdacaa3555e30000247a852cf\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"e0322ffbdacaa3555e30000247a852cf\";s:2:\"id\";i:37;s:3:\"qty\";i:1;s:4:\"name\";s:12:\"Tomato Salad\";s:5:\"price\";d:50;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}s:32:\"6b770d0098eb5bc7f6e0a74e3314d4d0\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"6b770d0098eb5bc7f6e0a74e3314d4d0\";s:2:\"id\";i:38;s:3:\"qty\";i:1;s:4:\"name\";s:14:\"Broccoli Salad\";s:5:\"price\";d:60;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}s:32:\"2b54b668aa007d4026d89e5c8801f995\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"2b54b668aa007d4026d89e5c8801f995\";s:2:\"id\";i:41;s:3:\"qty\";i:1;s:4:\"name\";s:6:\"Samosa\";s:5:\"price\";d:30;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}s:32:\"8c9a90e4053cd74dcb83515e745419ae\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"8c9a90e4053cd74dcb83515e745419ae\";s:2:\"id\";i:42;s:3:\"qty\";i:1;s:4:\"name\";s:6:\"Pakora\";s:5:\"price\";d:50;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-03-01 08:46:01', NULL),
('jangidanshu2000@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:2:{s:32:\"6b770d0098eb5bc7f6e0a74e3314d4d0\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"6b770d0098eb5bc7f6e0a74e3314d4d0\";s:2:\"id\";i:38;s:3:\"qty\";i:1;s:4:\"name\";s:14:\"Broccoli Salad\";s:5:\"price\";d:60;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}s:32:\"e0322ffbdacaa3555e30000247a852cf\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"e0322ffbdacaa3555e30000247a852cf\";s:2:\"id\";i:37;s:3:\"qty\";i:3;s:4:\"name\";s:12:\"Tomato Salad\";s:5:\"price\";d:50;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-03-01 08:45:13', NULL),
('jangidanshu2000@gmail.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:1:{s:32:\"6b770d0098eb5bc7f6e0a74e3314d4d0\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"6b770d0098eb5bc7f6e0a74e3314d4d0\";s:2:\"id\";i:38;s:3:\"qty\";i:1;s:4:\"name\";s:14:\"Broccoli Salad\";s:5:\"price\";d:60;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-03-01 08:45:13', NULL),
('sonamkapoor.0101.kr@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-03-03 09:54:59', NULL),
('sonamkapoor.0101.kr@gmail.com', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:1:{s:32:\"1ca30d70ab09187def0f79120f1607ee\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"1ca30d70ab09187def0f79120f1607ee\";s:2:\"id\";i:43;s:3:\"qty\";i:1;s:4:\"name\";s:9:\"Dahi Vada\";s:5:\"price\";d:50;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-03-01 04:57:07', NULL),
('souravmohanty99@gmail.com', 'cart', 'O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:1:{s:32:\"e0322ffbdacaa3555e30000247a852cf\";O:32:\"Gloudemans\\Shoppingcart\\CartItem\":9:{s:5:\"rowId\";s:32:\"e0322ffbdacaa3555e30000247a852cf\";s:2:\"id\";i:37;s:3:\"qty\";i:1;s:4:\"name\";s:12:\"Tomato Salad\";s:5:\"price\";d:50;s:7:\"options\";O:39:\"Gloudemans\\Shoppingcart\\CartItemOptions\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:49:\"\0Gloudemans\\Shoppingcart\\CartItem\0associatedModel\";s:18:\"App\\Models\\Product\";s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0taxRate\";i:0;s:41:\"\0Gloudemans\\Shoppingcart\\CartItem\0isSaved\";b:0;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', '2022-02-15 06:54:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table` enum('circle','square','rectangle') COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `name`, `email`, `phone`, `table`, `guest`, `date`, `time`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Demo', 'demo@gmail.com', '8989898989', 'square', '4', '2022-02-10', '20:54', 'Testing', '2022-02-01 03:53:33', '2022-02-01 03:53:33'),
(2, 'Demo 2', 'demo2@gmail.com', '7878787878', 'rectangle', '6', '2022-02-24', '21:00', 'hi', '2022-02-01 10:02:54', '2022-02-01 10:02:54'),
(3, 'User1 ', 'user1@gmail.com', '6767676767', 'circle', '4', '2022-02-03', '14:17', 'demo', '2022-02-03 01:17:34', '2022-02-03 01:17:34'),
(4, 'demo 5', 'demo@gmail.com', '567567567', 'rectangle', '6', '2022-02-16', '20:00', 'hi food & fun', '2022-02-05 23:50:28', '2022-02-05 23:50:28'),
(6, 'Amit Kumar', 'amitkumar291199@gmail.com', '6767676767', 'rectangle', '6', '2022-02-12', '21:00', 'Hello', '2022-02-07 01:29:41', '2022-02-07 01:29:41'),
(7, 'DURGA TELI', 'durga788sahu@gmail.com', '07726820488', 'rectangle', '4', '2022-02-14', '18:50', 'Hi', '2022-02-12 11:21:02', '2022-02-12 11:21:02'),
(8, 'DURGA TELI', 'durga788sahu@gmail.com', '07726820488', 'square', '4', '2022-02-14', '22:15', 'Please conform  msg', '2022-02-13 14:13:44', '2022-02-13 14:13:44'),
(9, 'DURGA TELI', 'durga788sahu@gmail.com', '07726820488', 'square', '4', '2022-02-14', '22:15', 'Please conform  msg', '2022-02-13 14:13:47', '2022-02-13 14:13:47'),
(11, 'demo', 'demo@gmail.com', '7676767676', 'square', '4', '2022-02-16', '17:00', 'hi', '2022-02-14 08:37:21', '2022-02-14 08:37:21'),
(12, 'Aditya ', 'hey.aditya.burman@gmail.com', '08989898989', 'square', '6', '2022-03-16', '15:54', 'hi', '2022-02-28 13:54:09', '2022-02-28 13:54:09'),
(13, 'DURGA TELI', 'durga788sahu@gmail.com', '9351872292', 'square', '4', '2022-03-03', '14:16', 'Thanks ', '2022-03-01 08:46:52', '2022-03-01 08:46:52'),
(14, 'pari', 'pari788sahu@gmail.com', '1234567891', 'square', '5', '2022-03-06', '21:50', 'ugeffefue', '2022-03-04 14:20:49', '2022-03-04 14:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `mode` enum('cod','card','paypal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','approved','declined','refunded') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `order_id`, `mode`, `status`, `created_at`, `updated_at`) VALUES
(14, 4, 14, 'cod', 'pending', '2022-02-06 07:31:59', '2022-02-06 07:31:59'),
(15, 4, 15, 'cod', 'pending', '2022-02-06 07:34:27', '2022-02-06 07:34:27'),
(16, 4, 16, 'cod', 'pending', '2022-02-06 07:37:38', '2022-02-06 07:37:38'),
(17, 4, 17, 'cod', 'pending', '2022-02-07 01:10:06', '2022-02-07 01:10:06'),
(18, 4, 18, 'cod', 'pending', '2022-02-07 01:24:11', '2022-02-07 01:24:11'),
(19, 4, 19, 'cod', 'pending', '2022-02-10 01:36:12', '2022-02-10 01:36:12'),
(20, 4, 20, 'cod', 'pending', '2022-02-10 06:43:42', '2022-02-10 06:43:42'),
(21, 4, 21, 'cod', 'pending', '2022-02-10 06:45:16', '2022-02-10 06:45:16'),
(22, 5, 22, 'cod', 'pending', '2022-02-13 16:36:50', '2022-02-13 16:36:50'),
(23, 11, 23, 'cod', 'pending', '2022-02-14 08:33:33', '2022-02-14 08:33:33'),
(24, 5, 24, 'cod', 'pending', '2022-02-15 07:03:23', '2022-02-15 07:03:23'),
(25, 8, 25, 'cod', 'pending', '2022-02-21 18:01:02', '2022-02-21 18:01:02'),
(26, 5, 26, 'cod', 'pending', '2022-02-22 08:43:14', '2022-02-22 08:43:14'),
(27, 8, 27, 'cod', 'pending', '2022-02-28 10:12:39', '2022-02-28 10:12:39'),
(28, 8, 28, 'cod', 'pending', '2022-02-28 10:18:37', '2022-02-28 10:18:37'),
(29, 8, 29, 'cod', 'pending', '2022-03-01 08:40:23', '2022-03-01 08:40:23'),
(30, 8, 30, 'cod', 'pending', '2022-03-01 10:18:57', '2022-03-01 10:18:57'),
(31, 15, 31, 'cod', 'pending', '2022-03-03 11:32:45', '2022-03-03 11:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'ADM for Admin and USR for User or Customer',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `utype`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'hey.aditya.burman@gmail.com', NULL, '$2y$10$BTQf4ridm.wtG6/liHt0EujDFd6N7vBS0JVjD8Y9s17bwFqzdPg5i', NULL, NULL, 'TYXv0zPMO1h2KJIykleYfZs7JfsAvASDa0zNZqWqrmfCgqEnF1ztchp7uABx', NULL, NULL, 'ADM', '2022-01-26 20:33:56', '2022-01-26 20:33:56'),
(4, 'Durga Sahu', 'durga788sahu@gmail.com', NULL, '$2y$10$uzkMSZSuorEOArXtUcw72u9ia25n5Y/FVFfuNOGMfnBelpmd6NNgG', NULL, NULL, NULL, NULL, NULL, 'USR', '2022-02-06 07:22:33', '2022-02-06 07:22:33'),
(5, 'Amit Gupta', 'sonamkapoor.0101.kr@gmail.com', NULL, '$2y$10$.bSozDzFGzWOBgYnmxYIi.fdYasQse5ADG0LdlsfkwMxRRlt/jKpy', NULL, NULL, NULL, NULL, NULL, 'USR', '2022-02-13 05:45:29', '2022-02-13 05:45:29'),
(6, 'Alauddin Mallick', 'alauddinmallick705@gmail.com', NULL, '$2y$10$mQRBVI3xvI/3EgPglolCiuMcJQmf.WJxKfebotwx3HLspsP/cpQiC', NULL, NULL, NULL, NULL, NULL, 'USR', '2022-02-13 08:20:09', '2022-02-13 08:20:09'),
(7, 'Aditya Burman', 'adityaburman24@gmail.com', NULL, '$2y$10$vxTcGVBzixXkGVk/Rghjfe1.SDv6PnWH1ZvDLhIvyVjVV6R/ELR1S', NULL, NULL, NULL, NULL, NULL, 'USR', '2022-02-13 19:12:49', '2022-02-13 19:12:49'),
(8, 'Aditya Burman', 'adityaburman969@gmail.com', NULL, '$2y$10$8M6Vkiye/pThZ0.bLs512u1PD4ij3AFuI9laoCvG.uKGLw1cOIOiW', NULL, NULL, 'QVOd1DQgXhuUw5Bg3Aug1sGU6lKpp7lPwPSvpWUD2dg5Pfuh7yRlVscIF42k', NULL, NULL, 'USR', '2022-02-13 19:51:38', '2022-03-01 08:13:00'),
(11, 'IBM & Eduent', 'jangidanshu2000@gmail.com', NULL, '$2y$10$PeNMeSBQVaLRJEzMA3p.i.PRZ3452Sac/uwZaedDySEo55rg5XuJG', NULL, NULL, 'TzHPXOCV6REgH5RfSkgfmE2BSI6hGn4JIQqCDjruG2qXROm19KNryBopp6HM', NULL, NULL, 'USR', '2022-02-14 08:29:46', '2022-03-01 08:41:25'),
(12, 'Admin', 'foodandfunteam17@gmail.com', NULL, '$2y$10$hkgF3S/EygbL3cE6Xp2GvOkY64tsY.sekvqTF74jXhMz3/HrQd6gy', NULL, NULL, NULL, NULL, NULL, 'ADM', '2022-02-14 12:06:17', '2022-02-14 12:06:17'),
(13, 'Saurav Mohanty', 'souravmohanty99@gmail.com', NULL, '$2y$10$.UiJsikRAMQ.hMWjArIgbO4c75X9b3NsALev4iXBwQP1VIczfeuay', NULL, NULL, NULL, NULL, NULL, 'USR', '2022-02-15 06:54:39', '2022-02-15 06:54:39'),
(14, 'John', 'johndemo@gmail.com', NULL, '$2y$10$o0maBdqEfLsqFlzpdScha.UfRGa5bmZFZb4eJYw0Y.6DpsqsPkmSW', NULL, NULL, NULL, NULL, NULL, 'USR', '2022-02-28 12:37:44', '2022-02-28 12:37:44'),
(15, 'IBM & Edunet', 'adityaburman9i6@gmail.com', NULL, '$2y$10$tos2QIshuZQCPdK8Uud.du4KDp4ovS61RBQvX9qMtI5W0a.kmBnZ.', NULL, NULL, NULL, NULL, NULL, 'USR', '2022-03-03 11:23:43', '2022-03-03 11:40:52'),
(16, 'Krishna', 'br.krishnabss@gmail.com', NULL, '$2y$10$zRoCLgWDLrHShBzPrw0ng.Q7UXNvJFjdvBtxhiQaB5invKsy//F8e', NULL, NULL, NULL, NULL, NULL, 'USR', '2022-03-03 11:29:28', '2022-03-03 11:29:28'),
(17, 'Alauddin Mallick', 'alaumallick465@gmail.com', NULL, '$2y$10$1navdNPv03jWZJlayfLbcOtJTfUhVvLpNXCYjhoWet.CdiJq1ftJm', NULL, NULL, NULL, NULL, NULL, 'USR', '2022-03-03 11:37:02', '2022-03-03 11:37:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_order_item_id_foreign` (`order_item_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shippings_order_id_foreign` (`order_id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_order_id_foreign` (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_order_item_id_foreign` FOREIGN KEY (`order_item_id`) REFERENCES `order_items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shippings`
--
ALTER TABLE `shippings`
  ADD CONSTRAINT `shippings_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
