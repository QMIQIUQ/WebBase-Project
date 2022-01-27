-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 03:12 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbaseproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Apple', '2022-01-26 17:10:18', '2022-01-26 17:10:18'),
(2, 'Huawei', '2022-01-26 17:10:33', '2022-01-26 17:10:33'),
(3, 'ViVo', '2022-01-26 17:10:43', '2022-01-26 17:10:43'),
(4, 'Oppo', '2022-01-26 17:10:49', '2022-01-26 17:10:49');

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

-- --------------------------------------------------------

--
-- Table structure for table `my_carts`
--

CREATE TABLE `my_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `my_orders`
--

CREATE TABLE `my_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paymentStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `CategoryID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `quantity`, `CategoryID`, `created_at`, `updated_at`) VALUES
(1, 'Iphone 13', '256GB', 4399.00, 'apple-iphone-13.jpg', 23, '1', '2022-01-26 17:15:14', '2022-01-26 17:15:14'),
(2, 'iPhone 13 Pro Max', '256GB', 5799.00, 'apple-iphone-13-pro-max.jpg', 10, '1', '2022-01-26 17:16:53', '2022-01-26 17:16:53'),
(3, 'iPhone 13 Pro', '256GB', 5399.00, 'apple-iphone-13-pro.jpg', 30, '1', '2022-01-26 17:18:18', '2022-01-26 17:18:18'),
(4, 'iPhone 13 mini', '256GB', 3899.00, 'apple-iphone-13-mini.jpg', 15, '1', '2022-01-26 17:19:44', '2022-01-26 17:19:44'),
(5, 'iPad mini (2021)', '256GB(Wifi)', 2949.00, 'apple-ipad-mini-2021.jpg', 5, '1', '2022-01-26 17:21:08', '2022-01-26 17:21:08'),
(6, 'iPad 10.2 (2021)', '256GB(WiFi)', 2149.00, 'apple-ipad-102-2021-.jpg', 23, '1', '2022-01-26 17:22:58', '2022-01-26 17:22:58'),
(7, 'iPad Pro 12.9 (2021)', '512GB(WiFi)', 6149.00, 'apple-ipad-pro-129-2021.jpg', 8, '1', '2022-01-26 17:25:36', '2022-01-26 17:26:25'),
(8, 'iPad Pro 11 (2021)', '512GB(WiFi)', 4849.00, 'apple-ipad-pro-11-2021.jpg', 19, '1', '2022-01-26 17:28:06', '2022-01-26 17:28:06'),
(9, 'iPhone SE (2020)', '128GB', 2199.00, 'apple-iphone-se-2020.jpg', 30, '1', '2022-01-26 17:29:30', '2022-01-26 17:29:30'),
(10, 'iPhone 12 Pro Max', '512GB', 7389.00, 'apple-iphone-12-pro-max-.jpg', 2, '1', '2022-01-26 17:31:37', '2022-01-26 17:31:37'),
(11, 'iPhone 12 Pro', '256GB', 5399.00, 'apple-iphone-12-pro--.jpg', 4, '1', '2022-01-26 17:33:01', '2022-01-26 17:33:01'),
(12, 'iPhone 12', '256GB', 4099.00, 'apple-iphone-12.jpg', 21, '1', '2022-01-26 17:34:13', '2022-01-26 17:34:13'),
(13, 'iPhone 12 mini', '256GB', 3599.00, 'apple-iphone-12-mini.jpg', 13, '1', '2022-01-26 17:35:00', '2022-01-26 17:35:00'),
(14, 'iPad Air (2020)', '256GB(WiFi)', 3249.00, 'apple-ipad-air4-2020.jpg', 20, '1', '2022-01-26 17:35:59', '2022-01-26 17:35:59'),
(15, 'P50 Pocket', '256GB', 7299.00, 'huawei-p50-pocket.jpg', 5, '2', '2022-01-26 17:38:50', '2022-01-26 17:38:50'),
(16, 'P50 Pro', '256GB', 4199.00, 'huawei-p50-pro.jpg', 4, '2', '2022-01-26 17:40:45', '2022-01-26 17:40:45'),
(17, 'P50', '256GB', 3318.00, 'huawei-p50-pro.jpg', 5, '2', '2022-01-26 17:42:48', '2022-01-26 17:42:48'),
(18, 'Mate 40 Pro+', '256GB', 4299.00, 'huawei-mate40-pro-plus.jpg', 7, '2', '2022-01-26 17:44:34', '2022-01-26 17:44:34'),
(19, 'Mate 40 Pro 4G', '256GB', 4299.00, 'huawei-mate40-pro.jpg', 6, '2', '2022-01-26 17:45:35', '2022-01-26 17:45:35'),
(20, 'nova 9 Pro', '256GB', 2100.00, 'huawei-nova-9-pro-5g-.jpg', 6, '2', '2022-01-26 17:47:12', '2022-01-26 17:47:12'),
(21, 'nova 9', '256GB', 1999.00, 'huawei-nova-9-5g.jpg', 6, '1', '2022-01-26 17:48:07', '2022-01-26 17:48:07'),
(22, 'Huawei nova 8', '128GB', 1899.00, 'huawei-nova-8.jpg', 3, '2', '2022-01-26 17:48:56', '2022-01-26 17:48:56'),
(23, 'Mate X2 4G', '256GB', 15999.00, 'huawei-mate-x2-new.jpg', 3, '2', '2022-01-26 17:50:14', '2022-01-26 17:50:14'),
(24, 'A96', '256GB', 1159.00, 'oppo-a96.jpg', 4, '4', '2022-01-26 17:52:45', '2022-01-26 17:52:45'),
(25, 'A11s', '64GB', 655.00, 'oppo-a11s.jpg', 5, '4', '2022-01-26 17:53:52', '2022-01-26 17:53:52'),
(26, 'Find N', '128GB', 5005.00, 'oppo-find-n.jpg', 2, '4', '2022-01-26 17:55:26', '2022-01-26 17:55:26'),
(27, 'Reno7 Pro 5G', '256GB', 2356.00, 'oppo-reno7-pro-r.jpg', 6, '4', '2022-01-26 17:57:25', '2022-01-26 17:57:25'),
(28, 'Reno7 5G', '256GB', 1926.00, 'oppo-reno7-r.jpg', 7, '4', '2022-01-26 17:57:57', '2022-01-26 17:57:57'),
(29, 'Reno7 SE', '256GB', 1599.00, 'oppo-reno7-se-r.jpg', 2, '4', '2022-01-26 17:58:45', '2022-01-26 17:58:45'),
(30, 'A95', '256GB', 1099.00, 'oppo-a95.jpg', 5, '4', '2022-01-26 17:59:34', '2022-01-26 17:59:34'),
(31, 'A16K', '32GB', 549.00, 'oppo-a16k.jpg', 5, '4', '2022-01-26 18:00:31', '2022-01-26 18:00:31'),
(32, 'A54s', '128GB', 1085.00, 'oppo-a16.jpg', 4, '4', '2022-01-26 18:01:59', '2022-01-26 18:01:59'),
(33, 'Reno6 Z', '128GB', 1699.00, 'oppo-reno-6z-.jpg', 7, '4', '2022-01-26 18:03:05', '2022-01-26 18:03:05'),
(34, 'iQOO 9 Pro', '256GB', 2880.00, 'vivo-iqoo-9-pro-5g.jpg', 4, '3', '2022-01-26 18:05:55', '2022-01-26 18:05:55'),
(35, 'IQOO 9', '256GB', 2487.00, 'vivo-iqoo-9-5g.jpg', 7, '3', '2022-01-26 18:06:29', '2022-01-26 18:06:29'),
(36, 'V23 Pro', '256GB', 1964.00, 'vivo-v23-pro-5g.jpg', 4, '3', '2022-01-26 18:06:56', '2022-01-26 18:06:56'),
(37, 'Y21', '128GB', 999.00, 'vivo-y21.jpg', 6, '3', '2022-01-26 18:07:26', '2022-01-26 18:07:26'),
(38, 'Y53s 4G', '64GB', 898.00, 'vivo-y53s-4g.jpg', 4, '3', '2022-01-26 18:07:54', '2022-01-26 18:07:54'),
(39, 'X60T Pro Plus', '256GB', 2917.00, 'vivo-x60-pro-plus.jpg', 8, '3', '2022-01-26 18:08:23', '2022-01-26 18:08:23'),
(40, 'V21e 5G', '128GB', 1253.00, 'vivo-y72.jpg', 7, '3', '2022-01-26 18:08:56', '2022-01-26 18:08:56'),
(41, 'iQOO Neo 5 Lite', '128GB', 1399.00, 'vivo-neo-5-lite.jpg', 3, '3', '2022-01-26 18:09:27', '2022-01-26 18:09:27'),
(42, 'Y12s 2021', '64GB', 580.00, 'vivo-y12s-2021-.jpg', 7, '3', '2022-01-26 18:10:11', '2022-01-26 18:10:11'),
(43, 'V21 5G', '128GB', 1499.00, 'vivo-v21-5g.jpg', 4, '3', '2022-01-26 18:10:35', '2022-01-26 18:10:35'),
(44, 'X60', '256GB', 1999.00, 'vivo-x60-g.jpg', 5, '3', '2022-01-26 18:11:25', '2022-01-26 18:11:25');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_as` tinyint(2) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role_as`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$c11JKby69EbMWj1diPkwkOxR8hpG2X.1itGYEEG68iV7B7IvbHEgO', NULL, 1, '2022-01-26 17:07:38', '2022-01-26 17:07:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `my_carts`
--
ALTER TABLE `my_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_orders`
--
ALTER TABLE `my_orders`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `my_carts`
--
ALTER TABLE `my_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `my_orders`
--
ALTER TABLE `my_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
