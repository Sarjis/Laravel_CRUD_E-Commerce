-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 07:55 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'Samsung', 'Samsung Description', 0, '2019-02-03 05:54:58', '2019-02-09 00:49:17'),
(3, 'Huawei', 'Huawei Description', 1, '2019-02-05 04:53:09', '2019-02-05 04:53:09'),
(4, 'Java programming', 'Java programming Description', 1, '2019-02-05 04:53:36', '2019-02-05 04:53:36'),
(5, 'Cats Eye', 'Cats Eye Description', 1, '2019-02-05 04:57:05', '2019-02-05 04:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Sports', 'Bat, Ball, Tap are all should be included into sports list Description', 0, '2019-01-26 07:38:45', '2019-05-02 06:12:14'),
(2, 'Telecom', 'Telecom services is also good in bd Description', 0, '2019-01-26 07:42:41', '2019-02-09 04:06:25'),
(3, 'Cloth', 'Cloth is need of course', 1, '2019-02-02 11:58:43', '2019-04-21 12:33:01'),
(6, 'Book', 'Book is now in pdf', 0, '2019-02-02 12:12:03', '2019-02-03 03:12:05'),
(7, 'Electronics', 'Electronics is description', 0, '2019-02-02 12:13:00', '2019-02-03 03:12:06'),
(8, 'Health', 'Health Description', 0, '2019-02-02 12:15:18', '2019-02-03 03:12:19'),
(9, 'Watch', 'Watch Description', 0, '2019-02-02 12:17:50', '2019-02-03 03:12:18'),
(10, 'Men', 'Men Description', 0, '2019-02-03 02:56:51', '2019-02-03 02:56:51'),
(11, 'Book', 'Book Description', 0, '2019-02-05 04:52:01', '2019-02-09 04:06:28'),
(12, 'Electronics', 'Electronics Description', 0, '2019-02-05 04:52:18', '2019-04-21 12:32:36'),
(13, 'Sports2', 'Sports2  Category Description', 1, '2019-03-21 13:02:29', '2019-03-21 13:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `address`, `password`, `created_at`, `updated_at`) VALUES
(26, 'sarjis', 'abdullah', 'sarjis.mas@gmail.com', '12', 'Roomghata', '121212', '2019-02-17 04:30:57', '2019-02-17 04:30:57');

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
(3, '2019_01_26_132751_create_categories_table', 2),
(4, '2019_02_03_112813_create_brands_table', 3),
(5, '2019_02_04_071217_create_products_table', 4),
(6, '2019_02_13_091528_create_customers_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_price`, `product_quantity`, `short_description`, `long_description`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'Note 7', 27500.00, 1, 'Samsung Short Description', '<p><strong>Samsung Long&nbsp;Description</strong></p>', 'product_images/Grand.png', 0, '2019-02-04 04:13:26', '2019-05-02 06:12:46'),
(3, 2, 2, 'S6', 50000.00, 1, 'Samsung Short Description', '<p><strong><em>Samsung Long Description</em></strong></p>', 'product_images/S6.jpg', 1, '2019-02-05 02:44:09', '2019-02-08 03:21:49'),
(4, 11, 4, 'Java Book', 1111.00, 1, 'Java Short Description', '<p>Java LongDescription</p>', 'product_images/Java Book.jpg', 1, '2019-02-05 04:56:30', '2019-02-05 04:56:30'),
(5, 3, 5, 'T-shirt', 1200.00, 2, 'T-shirt Short Description', '<p>T-shirt Long&nbsp; Description</p>', 'product_images/T-shirt.jpeg', 1, '2019-02-05 04:58:36', '2019-02-05 04:58:36'),
(6, 1, 2, 'S9', 30000.00, 1, 'Samsung Short Description', '<p>Samsung Long Description</p>', 'product_images/S9.png', 1, '2019-02-08 03:03:03', '2019-02-08 03:03:03'),
(7, 12, 2, 'Mouse', 250.00, 1, 'Samsung Mouse Short Description', '<p>Samsung Mouse Long Description</p>', 'product_images/Mouse.jpg', 1, '2019-02-08 03:21:28', '2019-02-08 03:21:28'),
(8, 12, 2, 'Keyboard', 2.00, 2, 'Samsung Keyboard Short Description', '<p>Samsung Keyboard Long Description</p>', 'product_images/Keyboard.jpg', 0, '2019-02-08 03:27:37', '2019-05-02 06:12:44'),
(9, 3, 5, 'Gamcha', 2.00, 20, 'Gamcha Short Description', '<p>Gamcha Short Description</p>', 'product_images/Gamcha.jpg', 1, '2019-02-08 03:40:34', '2019-02-08 03:40:34'),
(10, 2, 4, 'Demo Name', 3333.00, 3, 'Demo Name', '<p>Demo Name</p>', 'product_images/Demo Name.jpg', 1, '2019-02-08 04:10:32', '2019-02-08 04:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sarjis Abdullah', 'psarjis@gmail.com', NULL, '$2y$10$UPTP9B67wlCRckcSTGE.re8iglJ/TDF.si7olahdoA7dWma74BUXK', 'qmlxhuzSmT2I48eVxjAcMsfRCcHCYVR3zbmHF2U54MoeftId4AHBpV6xTU0b', '2019-01-25 13:27:47', '2019-01-25 13:27:47'),
(2, 'Leo Jewel', 'leo@gmail.com', NULL, '$2y$10$qsyT09V25IVUmPESgjG1me/kkYo8QswKvIHxPksAMVmX2vuPNS5by', '8yWv9ulqOgJuCZkHQv5hptweN8F9wB13sjm40jvhQAQSzeZ2tpWOM7KJJvJ2', '2019-02-02 04:35:29', '2019-02-02 04:35:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
