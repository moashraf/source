-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 25 سبتمبر 2018 الساعة 12:08
-- إصدار الخادم: 10.1.35-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sourceeg_source`
--

-- --------------------------------------------------------

--
-- بنية الجدول `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `criteria` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `banner`
--

INSERT INTO `banner` (`id`, `criteria`, `location`, `route`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(40, '0', '0', '3', 'banners/1530026382.png', '2018-06-26 13:19:42', '2018-06-26 13:19:42', NULL),
(46, '0', '0', '3', 'banners/1537701498.png', '2018-09-23 09:18:18', '2018-09-23 09:18:18', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `icon` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `category`
--

INSERT INTO `category` (`id`, `icon`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'categories/1528340153.png', '2018-06-07 00:55:53', '2018-06-07 00:55:53', NULL),
(6, 'categories/1528340165.png', '2018-06-07 00:56:05', '2018-06-07 00:56:05', NULL),
(7, 'categories/1531126193.png', '2018-07-09 06:49:53', '2018-07-09 06:49:53', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `code` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `product`
--

INSERT INTO `product` (`id`, `category_id`, `image`, `price`, `code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 5, 'image/1528385946.jpg', 0, '981', '2018-06-07 13:39:06', '2018-06-07 13:47:46', NULL),
(10, 5, 'image/1528386168.jpg', 0, 'D144', '2018-06-07 13:42:48', '2018-06-07 13:49:12', NULL),
(11, 5, 'image/1528386336.png', 0, 'd37', '2018-06-07 13:45:36', '2018-06-07 13:45:36', NULL),
(12, 5, 'image/1528386598.png', 0, '981', '2018-06-07 13:49:58', '2018-06-07 13:49:58', NULL),
(13, 5, 'image/1528386769.png', 0, 'D144', '2018-06-07 13:52:49', '2018-06-07 13:52:49', NULL),
(14, 7, 'image/1533545217.png', 175, '924', '2018-08-06 06:46:57', '2018-08-06 06:46:57', NULL),
(15, 7, 'image/1533545474.png', 150, '930', '2018-08-06 06:51:14', '2018-08-06 06:51:14', NULL),
(16, 7, 'image/1533545549.png', 150, '1010', '2018-08-06 06:52:29', '2018-08-06 06:52:29', NULL),
(17, 7, 'image/1533545671.png', 150, '942', '2018-08-06 06:54:31', '2018-08-06 06:54:31', NULL),
(18, 7, 'image/1533545798.png', 175, '981', '2018-08-06 06:56:38', '2018-08-06 06:56:38', NULL),
(19, 7, 'image/1533545849.png', 175, '940', '2018-08-06 06:57:29', '2018-08-06 06:57:29', NULL),
(20, 7, 'image/1533545916.png', 175, '945', '2018-08-06 06:58:36', '2018-08-06 06:58:36', NULL),
(21, 7, 'image/1533546029.png', 150, '1002', '2018-08-06 07:00:29', '2018-08-06 07:00:29', NULL),
(22, 7, 'image/1533546139.png', 175, '937', '2018-08-06 07:02:19', '2018-08-06 07:02:19', NULL),
(23, 7, 'image/1533546198.png', 150, '1011', '2018-08-06 07:03:18', '2018-08-06 07:03:18', NULL),
(24, 7, 'image/1533546302.png', 125, '965', '2018-08-06 07:05:02', '2018-08-06 07:05:02', NULL),
(25, 7, 'image/1533546438.png', 175, '719', '2018-08-06 07:07:18', '2018-08-06 07:07:18', NULL),
(26, 7, 'image/1533546543.png', 175, '982', '2018-08-06 07:09:03', '2018-08-06 07:09:03', NULL),
(27, 7, 'image/1533546682.png', 175, '938', '2018-08-06 07:11:22', '2018-08-06 07:11:22', NULL),
(28, 7, 'image/1533546744.png', 150, '963', '2018-08-06 07:12:24', '2018-08-06 07:12:24', NULL),
(29, 7, 'image/1533546789.png', 150, '939', '2018-08-06 07:13:09', '2018-08-06 07:13:09', NULL),
(30, 7, 'image/1533546967.png', 150, '969', '2018-08-06 07:16:07', '2018-08-06 07:16:07', NULL),
(31, 7, 'image/1533547034.png', 175, '1005', '2018-08-06 07:17:14', '2018-08-06 07:17:14', NULL),
(32, 7, 'image/1533547108.png', 175, '925', '2018-08-06 07:18:28', '2018-08-06 07:18:28', NULL),
(33, 7, 'image/1533547206.png', 175, '947', '2018-08-06 07:20:06', '2018-08-06 07:20:06', NULL),
(34, 7, 'image/1533547247.png', 175, '900', '2018-08-06 07:20:47', '2018-08-06 07:20:47', NULL),
(35, 7, 'image/1533547307.png', 150, '933', '2018-08-06 07:21:47', '2018-08-06 07:21:47', NULL),
(36, 7, 'image/1533547375.png', 175, '964', '2018-08-06 07:22:55', '2018-08-06 07:22:55', NULL),
(37, 7, 'image/1533547435.png', 175, '979', '2018-08-06 07:23:55', '2018-08-06 07:23:55', NULL),
(38, 7, 'image/1533547477.png', 175, '718', '2018-08-06 07:24:37', '2018-08-06 07:24:37', NULL),
(39, 7, 'image/1533547526.png', 175, '722', '2018-08-06 07:25:26', '2018-08-06 07:25:26', NULL),
(40, 7, 'image/1533547608.png', 200, '991', '2018-08-06 07:26:48', '2018-08-06 07:26:48', NULL),
(41, 7, 'image/1533547669.png', 150, '952', '2018-08-06 07:27:49', '2018-08-06 07:27:49', NULL),
(42, 7, 'image/1533547725.png', 175, '970', '2018-08-06 07:28:45', '2018-08-06 07:28:45', NULL),
(43, 7, 'image/1533547924.png', 175, '958', '2018-08-06 07:32:04', '2018-08-06 07:32:04', NULL),
(44, 7, 'image/1533547991.png', 150, '932', '2018-08-06 07:33:11', '2018-08-06 07:33:11', NULL),
(45, 7, 'image/1533548038.png', 175, '980', '2018-08-06 07:33:58', '2018-08-06 07:33:58', NULL),
(46, 7, 'image/1533548165.png', 125, '983', '2018-08-06 07:36:05', '2018-08-06 07:36:05', NULL),
(47, 7, 'image/1533548223.png', 175, '905', '2018-08-06 07:37:03', '2018-08-06 07:37:03', NULL),
(48, 7, 'image/1533548274.png', 150, '960', '2018-08-06 07:37:54', '2018-08-06 07:37:54', NULL),
(49, 7, 'image/1533548310.png', 150, '1009', '2018-08-06 07:38:30', '2018-08-06 07:38:30', NULL),
(50, 7, 'image/1533548442.png', 150, '934', '2018-08-06 07:40:42', '2018-08-06 07:40:42', NULL),
(52, 7, 'image/1533548517.png', 175, '724', '2018-08-06 07:41:57', '2018-08-06 07:41:57', NULL),
(53, 7, 'image/1533548561.png', 150, '1008', '2018-08-06 07:42:41', '2018-08-06 07:42:41', NULL),
(54, 7, 'image/1533548681.png', 150, '962', '2018-08-06 07:44:41', '2018-08-06 07:44:41', NULL),
(55, 7, 'image/1533548733.png', 175, '935', '2018-08-06 07:45:33', '2018-08-06 07:45:33', NULL),
(56, 7, 'image/1533548816.png', 175, '1007', '2018-08-06 07:46:56', '2018-08-06 07:46:56', NULL),
(57, 7, 'image/1533548919.png', 175, '956', '2018-08-06 07:48:39', '2018-08-06 07:48:39', NULL),
(58, 7, 'image/1533548954.png', 175, '720', '2018-08-06 07:49:14', '2018-08-06 07:49:14', NULL),
(59, 7, 'image/1533549002.png', 175, '990', '2018-08-06 07:50:02', '2018-08-06 07:50:02', NULL),
(60, 7, 'image/1533549055.png', 150, '984', '2018-08-06 07:50:55', '2018-08-06 07:50:55', NULL),
(61, 7, 'image/1533549102.png', 175, '955', '2018-08-06 07:51:42', '2018-08-06 07:51:42', NULL),
(62, 7, 'image/1533549176.png', 150, '931', '2018-08-06 07:52:56', '2018-08-06 07:52:56', NULL),
(63, 7, 'image/1533549349.png', 150, '930', '2018-08-06 07:55:49', '2018-08-06 07:55:49', NULL),
(64, 5, 'image/1537114643.png', 0, NULL, '2018-09-16 14:17:23', '2018-09-16 14:17:23', NULL),
(65, 5, 'image/1537114686.png', 0, 'd-106', '2018-09-16 14:18:06', '2018-09-16 14:18:06', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'source@admin.com', '$2y$10$hvjyscjKNa319IMKqNK0Aedu3vIzkZrn4jnjGhf8hltGJibRld7pK', 'kAfDIH05D48KP1EH9tjk45BPJ6GshIDkY3FWXVupE6oimoXgtvazsWSaVvPL', '2018-06-06 07:47:37', '2018-06-06 07:47:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
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
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
