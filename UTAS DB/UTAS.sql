-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 01:42 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paidtaskcommputersale`
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
(1, 'Hp', '2022-05-20 09:03:17', '2022-05-20 09:03:17'),
(2, 'Desktop', '2022-05-22 10:12:34', '2022-05-22 10:12:34');

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
-- Table structure for table `insurances`
--

CREATE TABLE `insurances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insurances`
--

INSERT INTO `insurances` (`id`, `user_id`, `amount`, `created_at`, `updated_at`) VALUES
(2, '4', '100', '2022-05-22 00:41:21', '2022-05-23 15:23:34'),
(3, '5', '50', '2022-05-22 13:37:03', '2022-05-23 16:22:40'),
(4, '6', '0', '2022-05-24 16:01:52', '2022-05-24 16:01:52'),
(5, '7', '0', '2022-05-24 16:03:20', '2022-05-24 16:03:20'),
(6, '8', '0', '2022-05-24 16:04:11', '2022-05-24 16:04:11'),
(7, '9', '0', '2022-05-24 16:06:24', '2022-05-24 16:06:24'),
(8, '10', '0', '2022-05-24 16:31:31', '2022-05-24 16:31:31');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_18_130533_create_categories_table', 1),
(6, '2022_05_18_130836_create_products_table', 1),
(7, '2022_05_18_150622_create_mycccounts_table', 1),
(8, '2022_05_18_151823_create_rented_items_table', 1),
(9, '2022_05_21_153052_create_insurances_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mycccounts`
--

CREATE TABLE `mycccounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mycccounts`
--

INSERT INTO `mycccounts` (`id`, `user_id`, `amount`, `created_at`, `updated_at`) VALUES
(4, '4', '180', '2022-05-22 00:41:21', '2022-05-23 15:23:34'),
(5, '5', '113', '2022-05-22 13:37:03', '2022-05-23 16:22:40'),
(6, '6', '0', '2022-05-24 16:01:52', '2022-05-24 16:01:52'),
(7, '7', '0', '2022-05-24 16:03:20', '2022-05-24 16:03:20'),
(8, '8', '0', '2022-05-24 16:04:11', '2022-05-24 16:04:11'),
(9, '9', '0', '2022-05-24 16:06:24', '2022-05-24 16:06:24'),
(10, '10', '0', '2022-05-24 16:31:31', '2022-05-24 16:31:31');

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
  `cart_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `computer_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `computer_ram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operating_system` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `port_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hdmi_port` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cart_id`, `product_name`, `computer_size`, `computer_ram`, `operating_system`, `display_size`, `port_number`, `hdmi_port`, `price`, `keywords`, `description`, `status`, `image`, `created_at`, `updated_at`) VALUES
(3, '1', 'Hp laptop', '14', '8 GB', 'windows 10', '14 inch', '4', '6', '100', 'laptop', 'quality laptop', '1', '1653130217.png', '2022-05-21 10:50:17', '2022-05-23 15:23:34'),
(4, '1', 'Desktop new', '14', '18', 'windows 10', '14 inch', '4', '8', '70', 'Desktop,laptop', 'Quality to use all day', 'on lease', '1653211063.jpg', '2022-05-22 09:17:43', '2022-05-23 16:22:39'),
(5, '1', 'laptop home used edited', '14', '14', 'windows 10', '15', '18', '5', '199', 'laptop,sales,new', 'good for all nations', '0', '1653211205.jpg', '2022-05-22 09:20:05', '2022-05-22 13:45:42'),
(6, '1', 'new laptop good', '14', '16', 'windows 8', '15', '18', '1', '199', 'good,g,f', 'good and affordable', '0', '1653211822.png', '2022-05-22 09:30:22', '2022-05-22 09:30:22'),
(7, '1', 'laptop desktop', '19', '14', 'windows 10', '14', '4', '2', '300', 'good', 'good', '0', '1653211936.png', '2022-05-22 09:32:16', '2022-05-22 09:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `rented_items`
--

CREATE TABLE `rented_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_rented` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hours_rented` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `returning_time` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_paid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_recieved` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rented_items`
--

INSERT INTO `rented_items` (`id`, `user_id`, `product_id`, `time_rented`, `hours_rented`, `returning_time`, `price_paid`, `status`, `admin_recieved`, `admin_id`, `created_at`, `updated_at`) VALUES
(52, '4', '4', '2022-05-23 14:14:41', '2', '2022-05-23 16:14:41', '140', 'completed', 'Received', '4', '2022-05-23 14:14:41', '2022-05-23 15:19:22'),
(53, '4', '3', '2022-05-23 14:15:02', '1', '2022-05-23 15:15:02', '100', 'completed', 'Received', '4', '2022-05-23 14:15:02', '2022-05-23 15:23:34'),
(54, '4', '4', '2022-05-23 14:53:46', '1', '2022-05-23 15:53:46', '70', NULL, NULL, NULL, '2022-05-23 14:53:46', '2022-05-23 14:53:46'),
(55, '5', '4', '2022-05-23 16:22:39', '1', '2022-05-23 17:22:39', '7', NULL, NULL, NULL, '2022-05-23 16:22:39', '2022-05-23 16:22:39');

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
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_role` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone_number`, `status`, `user_role`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Chika Nwazuo', 'Chikanwazuo@gmail.com', NULL, '$2y$10$MBNY3PUlGRhoS/hsJvDvSOpkRQMawGfDD1yE/2xrIAW2w.DoEDp6m', '0543461813', '0', '2', NULL, '2022-05-22 00:41:21', '2022-05-24 16:42:33'),
(5, 'Bright', 'bright@gmail.com', NULL, '$2y$10$78bo33DI5FoT/.L2s6i8XeufmVhIkaI2Pa6bPVBbLc1qYz.h0B0aC', '0543461811', '0', '3', NULL, '2022-05-22 13:37:02', '2022-05-23 16:16:43'),
(6, 'Brajesh', 'brajesh@gmail.com', NULL, '$2y$10$9EEHqkSMeDQlsSW6Ei5QpublnhJ1Yh2I8.GDD.898FaeipztXdPSK', '098393', '0', '2', NULL, '2022-05-24 16:01:52', '2022-05-24 16:06:56'),
(7, 'Palkin', 'palkin@gmail.com', NULL, '$2y$10$N8U8A3aNwo/TNoRWe5fuVeDDUYw5a8Y.kh92HWmLlR4JBoJSXQZ.2', '97765', '0', '2', NULL, '2022-05-24 16:03:20', '2022-05-24 16:07:12'),
(8, 'Ramandeep', 'ramandeep@gmail.com', NULL, '$2y$10$4zlOyjEgfZZuk6wg9OWtXuDKZfQi//tzOy.Z6ZDnNqeG1/9EuFEje', '76567', '0', '2', NULL, '2022-05-24 16:04:11', '2022-05-24 16:07:26'),
(10, 'Admin', 'admin@gmail.com', NULL, '$2y$10$t3tmbhN60zq6mFep1zuoyuClMVzhupc/5E0Zs3P5x/rdFTned4AkO', '8876789', '0', '1', NULL, '2022-05-24 16:31:31', '2022-05-24 16:31:53');

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
-- Indexes for table `insurances`
--
ALTER TABLE `insurances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mycccounts`
--
ALTER TABLE `mycccounts`
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
-- Indexes for table `rented_items`
--
ALTER TABLE `rented_items`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurances`
--
ALTER TABLE `insurances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mycccounts`
--
ALTER TABLE `mycccounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rented_items`
--
ALTER TABLE `rented_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
