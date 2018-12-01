-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2018 at 09:06 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.2.12-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudang_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `gudang_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `gudang_id`, `nama`, `berat`, `created_at`, `updated_at`) VALUES
(1, 1, 'Firman', 123, '2018-11-30 06:20:58', '2018-11-30 06:20:58'),
(2, 2, 'Virman', 2, '2018-11-30 08:18:47', '2018-11-30 08:18:47'),
(3, 3, 'Xirman', 3, '2018-11-30 08:18:57', '2018-11-30 08:18:57'),
(4, 4, 'Qirman', 4, '2018-11-30 08:19:05', '2018-11-30 08:19:05'),
(5, 5, 'Girman', 5, '2018-11-30 08:19:15', '2018-11-30 08:19:15'),
(6, 1, 'Kirman', 6, '2018-11-30 08:19:24', '2018-11-30 08:19:24'),
(7, 2, 'Mirman', 7, '2018-11-30 08:19:32', '2018-11-30 08:19:32'),
(8, 3, 'Lirman', 8, '2018-11-30 08:19:39', '2018-11-30 08:19:39'),
(9, 4, 'Pirman', 9, '2018-11-30 08:19:50', '2018-11-30 08:19:50'),
(10, 5, 'Cirman', 10, '2018-11-30 08:19:59', '2018-11-30 08:19:59'),
(11, 1, 'Jirman', 11, '2018-11-30 08:20:15', '2018-11-30 08:20:15'),
(12, 2, 'Yirman', 12, '2018-11-30 08:20:23', '2018-11-30 08:20:23'),
(13, 2, 'Zirman', 13, '2018-11-30 08:20:31', '2018-11-30 08:20:31'),
(14, 4, 'Rirman', 14, '2018-11-30 08:20:42', '2018-11-30 08:20:42'),
(15, 4, 'Wirman', 15, '2018-11-30 08:20:50', '2018-11-30 08:20:50'),
(16, 1, 'Tirman', 16, '2018-11-30 08:20:56', '2018-11-30 08:20:56'),
(17, 2, 'Hirman', 17, '2018-11-30 08:21:06', '2018-11-30 08:21:06'),
(18, 3, 'Dirman', 18, '2018-11-30 08:21:13', '2018-11-30 08:21:13'),
(19, 4, 'Airman', 19, '2018-11-30 08:21:27', '2018-11-30 08:21:27'),
(20, 1, 'Firman', 1311, '2018-12-01 06:45:17', '2018-12-01 06:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `gudangs`
--

CREATE TABLE `gudangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `pict` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gudangs`
--

INSERT INTO `gudangs` (`id`, `alamat`, `kapasitas`, `pict`, `created_at`, `updated_at`) VALUES
(1, 'Jalan Kebon OK 1', 2121, 'Mr-Roz3R.png', '2018-11-30 06:13:26', '2018-12-01 05:47:09'),
(2, 'Jalan Kebon 1', 2, 'Mr-Roz3R.png', '2018-11-30 08:16:35', '2018-11-30 08:16:35'),
(3, 'Jalan Kebon 2', 3, 'Mr-Roz3R.png', '2018-11-30 08:17:17', '2018-11-30 08:17:17'),
(4, 'Jalan Kebon 3', 4, 'Mr-Roz3R.png', '2018-11-30 08:17:37', '2018-11-30 08:17:37'),
(5, 'Jalan Kebon 4', 5, 'Mr-Roz3R-ASLI.jpg', '2018-11-30 08:17:58', '2018-11-30 08:17:58');

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
(3, '2018_11_30_063811_create_gudangs', 1),
(4, '2018_11_30_131249_create_barangs', 2);

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
(1, 'Firman', 'kurniawan.firman94@gmail.com', NULL, '$2y$10$jOJN/WS7yB7PtARn8y9dp.avlc.Vp9VLHBy.YerIoif7JB/CYZmZu', NULL, '2018-11-30 06:13:14', '2018-11-30 06:13:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangs_gudang_id_foreign` (`gudang_id`);

--
-- Indexes for table `gudangs`
--
ALTER TABLE `gudangs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `gudangs`
--
ALTER TABLE `gudangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangs`
--
ALTER TABLE `barangs`
  ADD CONSTRAINT `barangs_gudang_id_foreign` FOREIGN KEY (`gudang_id`) REFERENCES `gudangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
