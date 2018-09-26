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
-- Database: `sourceeg_source_en`
--

-- --------------------------------------------------------

--
-- بنية الجدول `banner_description`
--

CREATE TABLE `banner_description` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `banner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `banner_description`
--

INSERT INTO `banner_description` (`id`, `title`, `banner_id`) VALUES
(22, 'Great Offers', 40);

-- --------------------------------------------------------

--
-- بنية الجدول `category_description`
--

CREATE TABLE `category_description` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `category_description`
--

INSERT INTO `category_description` (`id`, `category_id`, `name`) VALUES
(3, 5, 'Shoes'),
(4, 6, 'Bags'),
(5, 7, 'Discounts');

-- --------------------------------------------------------

--
-- بنية الجدول `page_description`
--

CREATE TABLE `page_description` (
  `id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `product_description`
--

CREATE TABLE `product_description` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `product_description`
--

INSERT INTO `product_description` (`id`, `product_id`, `title`, `description`) VALUES
(7, 8, 'shoes', 'shoes'),
(9, 10, 'shoes', 'shoes'),
(10, 11, 'shoes', 'shoes'),
(11, 12, 'shoes', 'shoes'),
(12, 13, 'shoes', 'shoes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_description`
--
ALTER TABLE `banner_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banner_id` (`banner_id`);

--
-- Indexes for table `category_description`
--
ALTER TABLE `category_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `page_description`
--
ALTER TABLE `page_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_id` (`page_id`);

--
-- Indexes for table `product_description`
--
ALTER TABLE `product_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_description`
--
ALTER TABLE `banner_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `category_description`
--
ALTER TABLE `category_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `page_description`
--
ALTER TABLE `page_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_description`
--
ALTER TABLE `product_description`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `banner_description`
--
ALTER TABLE `banner_description`
  ADD CONSTRAINT `banner_description_ibfk_1` FOREIGN KEY (`banner_id`) REFERENCES `sourceeg_source`.`banner` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `category_description`
--
ALTER TABLE `category_description`
  ADD CONSTRAINT `category_description_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `sourceeg_source`.`category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- القيود للجدول `product_description`
--
ALTER TABLE `product_description`
  ADD CONSTRAINT `product_description_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `sourceeg_source`.`product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
