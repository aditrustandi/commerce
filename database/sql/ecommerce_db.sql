-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 03:07 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoes_mart`
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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_07_03_073207_tbl_master_products', 1),
(4, '2020_07_03_113234_tbl_detail_products', 1),
(5, '2020_07_03_123330_tbl_color', 1),
(6, '2020_07_03_123753_tbl_brand', 1),
(7, '2020_07_04_103306_cart', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`id`, `brand`, `created_at`, `updated_at`) VALUES
(1, 'Brand Z', NULL, NULL),
(2, 'Brand X', NULL, NULL),
(3, 'Brand Y', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_detail_product` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `invoice`, `id_detail_product`, `qty`, `price`, `total_price`, `status`, `created_at`, `updated_at`) VALUES
(2, 'INV-1593954156', 2, 3, 1575712, 4727136, 'CONFIRM', '2020-07-04 12:18:18', '2020-07-05 06:02:36'),
(3, 'INV-1593954156', 3, 3, 1575712, 4727136, 'CONFIRM', '2020-07-04 13:31:05', '2020-07-05 06:02:36'),
(4, 'INV-1593954156', 2, 2, 1575712, 3151424, 'CONFIRM', '2020-07-04 13:31:23', '2020-07-05 06:02:36'),
(5, 'INV-1593954156', 3, 5, 1575712, 7878560, 'CONFIRM', '2020-07-04 13:56:09', '2020-07-05 06:02:36'),
(6, 'INV-1593954156', 2, 2, 1575712, 3151424, 'CONFIRM', '2020-07-04 13:56:36', '2020-07-05 06:02:36'),
(7, 'INV-1593954156', 3, 2, 1575712, 3151424, 'CONFIRM', '2020-07-04 13:57:49', '2020-07-05 06:02:36'),
(8, 'INV-1593954156', 1, 3, 610376, 1831128, 'CONFIRM', '2020-07-05 05:44:06', '2020-07-05 06:02:36'),
(9, 'INV-1593954240', 1, 1, 610376, 610376, 'CONFIRM', '2020-07-05 06:03:50', '2020-07-05 06:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_color`
--

CREATE TABLE `tbl_color` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hexa_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_color`
--

INSERT INTO `tbl_color` (`id`, `color`, `hexa_color`, `created_at`, `updated_at`) VALUES
(1, 'Merah', '#EF2E2E', NULL, NULL),
(2, 'Biru', '#0B86D1', NULL, NULL),
(3, 'Kuning', '#E2F713', NULL, NULL),
(4, 'Hijau', '#3EE339', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_products`
--

CREATE TABLE `tbl_detail_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_master_product` int(11) NOT NULL,
  `id_color` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_detail_products`
--

INSERT INTO `tbl_detail_products` (`id`, `id_master_product`, `id_color`, `stock`, `size`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 6, 'L', NULL, '2020-07-05 06:03:50'),
(2, 2, 1, 17, 'M', NULL, NULL),
(3, 2, 4, 11, 'S', NULL, NULL),
(4, 3, 3, 2, 'S', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_products`
--

CREATE TABLE `tbl_master_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_brand` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `total_sold` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_master_products`
--

INSERT INTO `tbl_master_products` (`id`, `id_brand`, `name`, `main_image`, `price`, `total_sold`, `created_at`, `updated_at`) VALUES
(1, 1, 'Product - oRug', 'assets/images/products/default.jpg', 610376, 64, NULL, NULL),
(2, 1, 'Product - eHda', 'assets/images/products/default.jpg', 1575712, 933, NULL, NULL),
(3, 2, 'Product - yLjj', 'assets/images/products/default.jpg', 1964693, 61, NULL, NULL),
(4, 3, 'Product - sAr3', 'assets/images/products/default.jpg', 1393652, 674, NULL, NULL),
(5, 3, 'Product - gBt1', 'assets/images/products/default.jpg', 1914804, 870, NULL, NULL),
(6, 3, 'Product - nNjW', 'assets/images/products/default.jpg', 1955458, 535, NULL, NULL),
(7, 3, 'Product - GGZh', 'assets/images/products/default.jpg', 1294676, 197, NULL, NULL),
(8, 3, 'Product - iokX', 'assets/images/products/default.jpg', 1697849, 767, NULL, NULL),
(9, 3, 'Product - 7CLp', 'assets/images/products/default.jpg', 676186, 981, NULL, NULL),
(10, 3, 'Product - Y0KV', 'assets/images/products/default.jpg', 872699, 855, NULL, NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_color`
--
ALTER TABLE `tbl_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_detail_products`
--
ALTER TABLE `tbl_detail_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_master_products`
--
ALTER TABLE `tbl_master_products`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_color`
--
ALTER TABLE `tbl_color`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_detail_products`
--
ALTER TABLE `tbl_detail_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_master_products`
--
ALTER TABLE `tbl_master_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
