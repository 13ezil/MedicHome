-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 01:08 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `review` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `quantity`, `price`, `review`, `created_at`, `updated_at`) VALUES
(1, 'adfadsf', 122, 123, NULL, '2020-09-15 09:07:40', '2020-09-15 23:53:51'),
(3, 'adfadsfasdfa', 131, 12, 'better scam than the above scam', '2020-09-15 09:08:18', '2020-09-15 23:54:01'),
(4, 'asfdasdfasdf', 13, 654, 'better scam than the above scam', '2020-09-15 09:08:32', '2020-09-15 09:08:32');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_15_080214_create_medicines_table', 1),
(5, '2020_08_18_023238_create_orders_table', 1),
(6, '2020_08_18_072045_create_notifications_table', 1),
(7, '2020_09_13_120056_add_latlong_column_to_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('1324c6d4-174e-4959-8c39-88cf67211088', 'App\\Notifications\\OrderNotify', 'App\\User', 1, '{\"order\":{\"name\":\"adfadsf\",\"user_id\":2,\"quantity\":\"1\",\"location\":\"asdfa\",\"latlong\":\"26.664554799999998, 87.6988054\",\"phonenumber\":\"12345678\",\"price\":123,\"doctor_prescription\":null,\"medicine_photo\":null,\"updated_at\":\"2020-09-16T05:38:51.000000Z\",\"created_at\":\"2020-09-16T05:38:51.000000Z\",\"id\":1}}', '2020-09-15 23:56:15', '2020-09-15 23:53:53', '2020-09-15 23:56:15'),
('1ce0dc0f-c9de-44c8-8db9-f63f0173e1c6', 'App\\Notifications\\ApproveNotification', 'App\\User', 2, '{\"info\":\"Your adfadsfasdfa order has been approved.\"}', NULL, '2020-09-15 23:56:42', '2020-09-15 23:56:42'),
('7a23feb1-7253-466c-a4db-5e45395f355b', 'App\\Notifications\\ApproveNotification', 'App\\User', 2, '{\"info\":\"Your adfadsfasdfa order has been approved.\"}', NULL, '2020-09-15 23:57:15', '2020-09-15 23:57:15'),
('b6c5bc06-880a-4998-89ab-1593a4647165', 'App\\Notifications\\DeclineNotification', 'App\\User', 2, '{\"info\":\"Your adfadsf order has been declined.\"}', NULL, '2020-09-15 23:56:15', '2020-09-15 23:56:15'),
('d55ba161-67c1-4b05-961d-e3a9731f0bcb', 'App\\Notifications\\ApproveNotification', 'App\\User', 2, '{\"info\":\"Your adfadsfasdfa order has been approved.\"}', NULL, '2020-09-15 23:56:02', '2020-09-15 23:56:02'),
('d67f6f39-7b2e-4595-9b94-e456dd7c01cd', 'App\\Notifications\\OrderNotify', 'App\\User', 1, '{\"order\":{\"name\":\"adfadsfasdfa\",\"user_id\":2,\"quantity\":\"1\",\"location\":\"afad\",\"latlong\":\"26.664554799999998, 87.6988054\",\"phonenumber\":\"12345678\",\"price\":12,\"doctor_prescription\":null,\"medicine_photo\":null,\"updated_at\":\"2020-09-16T05:39:01.000000Z\",\"created_at\":\"2020-09-16T05:39:01.000000Z\",\"id\":2}}', NULL, '2020-09-15 23:54:01', '2020-09-15 23:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_prescription` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `latlong` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `quantity`, `user_id`, `doctor_prescription`, `phonenumber`, `medicine_photo`, `location`, `price`, `created_at`, `updated_at`, `latlong`) VALUES
(1, 'adfadsf', 1, 2, NULL, '12345678', NULL, 'asdfa', 123, '2020-09-15 23:53:51', '2020-09-15 23:53:51', '26.664554799999998, 87.6988054'),
(2, 'adfadsfasdfa', 1, 2, NULL, '12345678', NULL, 'afad', 12, '2020-09-15 23:54:01', '2020-09-15 23:54:01', '26.664554799999998, 87.6988054');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail_preference` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phonenumber`, `type`, `email_verified_at`, `password`, `mail_preference`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '12345678', 'admin', NULL, '$2y$10$XM6g3St5R4XJ6TVCBLq/hu54EphNwdLdv1hyi.e9ztIx2Q8NUmLEu', 0, NULL, '2020-09-15 09:02:57', '2020-09-15 09:02:57'),
(2, 'User', 'user@user.com', '12345678', 'user', NULL, '$2y$10$bGn/zDnrP8i1UlyO5SI5M.x6MQxCgD1A3ibqEwVGoTYyH7IHtGOnu', 1, NULL, '2020-09-15 09:02:57', '2020-09-15 09:04:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `medicines_name_unique` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
