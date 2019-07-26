-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 03:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `buat_donasi`
--

CREATE TABLE `buat_donasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `norek` int(11) NOT NULL,
  `jumlah_terkumpul` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buat_donasi`
--

INSERT INTO `buat_donasi` (`id`, `users_id`, `judul`, `keterangan`, `gambar`, `jumlah`, `norek`, `jumlah_terkumpul`) VALUES
(1, 1, 'Bantu audy Melawan kanker', 'ooooooooooooooooo', 'MyCreated (6).png', 100000, 1, 10000),
(2, 1, 'Bantu Salma Beli Sendal swalow', 'iiiiiiiiiiiiiii', 'MyCreated (4).png', 2000000, 12, 3000),
(3, 1, 'Ayo Audy Kamu Bisa', 'qqqqqqqqqqqqq3', 'MyCreated (1).jpg', 300000, 231, 0);

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_buat_donasi` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_donasi` int(11) DEFAULT NULL,
  `buktitf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konfirmasi` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`id`, `id_buat_donasi`, `nama`, `email`, `komentar`, `jumlah_donasi`, `buktitf`, `konfirmasi`, `created_at`) VALUES
(1, 1, 'rizky', 'admin@rizky.sch', 'wwwwwwww', 10000, 'MyCreated (6).jpg', 1, NULL),
(2, 2, 'sdadsad', 'rizky@rbs.com', 'oke', 3000, 'MyCreated (4).png', 1, NULL),
(3, 9, 'arman', '129@gmail.com', 'sdhsahbjdsak', 120, 'charity-donation.png', 0, NULL),
(4, 9, 'arman', '129@gmail.com', 'sdhsahbjdsak', 120, 'charity-donation.png', 0, NULL),
(5, 1, 'aaaa', 'aaa@aa.c', 'aaa', 123, 'Screenshot_2019-07-24-14-20-04.png', 0, NULL),
(6, 1, 'aaaa', 'qqqq@ww.m', 'aaa', 123, 'Screenshot_2019-07-23-18-19-26.png', 0, NULL),
(7, 1, 'aaaa', 'aaa@w.v', 'aaa', 11111, 'Screenshot_2019-07-23-18-19-26.png', 0, NULL),
(8, 1, 'panjul', 'psadjas@gmnil.com', 'kokoo', 1000, 'Screenshot_2019-07-24-14-20-04.png', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `list_donasi`
--

CREATE TABLE `list_donasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_buat_donasi` int(11) NOT NULL,
  `id_donatur` int(11) NOT NULL,
  `donasi_terkumpul` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_donasi`
--

INSERT INTO `list_donasi` (`id`, `id_buat_donasi`, `id_donatur`, `donasi_terkumpul`) VALUES
(1, 1, 1, NULL),
(2, 2, 2, NULL);

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
(3, '2019_07_11_031812_buat_donasi', 1),
(4, '2019_07_11_032118_donatur', 1),
(5, '2019_07_11_032227_list_donasi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Smk Komputer Sarkom', 'oke@gmail.com', NULL, '$2y$10$.koQjqPaXtG7VKSAjAOj7.UrjJH8tdYOX1BYJKHE7voKJxJgXrZ2e', NULL, '2019-07-24 23:28:19', '2019-07-24 23:28:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buat_donasi`
--
ALTER TABLE `buat_donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_donasi`
--
ALTER TABLE `list_donasi`
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
-- AUTO_INCREMENT for table `buat_donasi`
--
ALTER TABLE `buat_donasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `list_donasi`
--
ALTER TABLE `list_donasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
