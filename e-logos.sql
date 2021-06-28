-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2021 at 12:11 PM
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
-- Database: `e-logos`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_therapy` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diagnosis` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `therapists_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `lastname`, `date_of_birth`, `email`, `telephone`, `in_therapy`, `diagnosis`, `comments`, `therapists_id`, `created_at`, `updated_at`) VALUES
(1, 'Marko', 'Markić', '2016-05-04', 'roditelj1@roditelj1.com', '09599595', 'DA', 'Mucanje.', 'Treba potvrdu logopeda za upis u školu.', 4, '2021-06-15 08:05:26', '2021-06-15 08:05:26'),
(2, 'Iva', 'Ivić', '2018-02-04', 'roditelj2@roditelj2.com', '099454545', 'NE', 'Klijent još nije testiran.', 'Potrebna procjena za dijganozu', 3, '2021-06-15 08:10:37', '2021-06-15 08:11:31'),
(3, 'Mario', 'Marković', '2019-12-04', 'roditelj3@roditelj3.com', '0924959393', 'DA', 'Nepravilan izgovor slova R', 'Klijent dolazi samo jednom tjedno. Potreban dolazak bar dva puta.', 2, '2021-06-15 08:14:08', '2021-06-15 08:14:08'),
(4, 'Mateja', 'Matejić', '2016-05-04', 'roditelj4@roditelj4.com', '091555555', 'DA', 'Disleksija', NULL, 3, '2021-06-15 08:15:27', '2021-06-15 08:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`, `created_at`, `updated_at`) VALUES
(10, '15:30 Marko Markić', '2021-06-18 00:00:00', '2021-06-19 00:00:00', '2021-06-18 10:48:56', '2021-06-18 10:48:56'),
(11, '16:15 Ivan Ivić', '2021-06-18 00:00:00', '2021-06-19 00:00:00', '2021-06-18 10:50:59', '2021-06-18 10:50:59'),
(12, '08:00 Ivan Ivić', '2021-06-24 00:00:00', '2021-06-25 00:00:00', '2021-06-18 10:51:17', '2021-06-18 10:54:25'),
(14, '08:45 Marija Marijić', '2021-06-24 00:00:00', '2021-06-25 00:00:00', '2021-06-18 10:52:06', '2021-06-18 10:54:29'),
(15, '08:00 Mirko Mirkić', '2021-06-25 00:00:00', '2021-06-26 00:00:00', '2021-06-18 10:52:25', '2021-06-18 10:54:33'),
(16, '08:45 Dario Darijić', '2021-06-25 00:00:00', '2021-06-26 00:00:00', '2021-06-18 10:52:37', '2021-06-18 10:54:36'),
(17, '15:00 Ivana Ivanić', '2021-06-21 00:00:00', '2021-06-22 00:00:00', '2021-06-18 10:52:53', '2021-06-18 10:52:53'),
(18, '15:45 Vlatko Vlatkić', '2021-06-21 00:00:00', '2021-06-22 00:00:00', '2021-06-18 10:53:04', '2021-06-18 10:53:04'),
(19, '10:30 Mirko Mirkić', '2021-06-22 00:00:00', '2021-06-23 00:00:00', '2021-06-18 10:53:16', '2021-06-18 10:53:16'),
(20, '11:15 Ivan Ivić', '2021-06-22 00:00:00', '2021-06-23 00:00:00', '2021-06-18 10:53:34', '2021-06-18 10:53:34'),
(21, '15:00 Stjepan Stjepkić', '2021-06-23 00:00:00', '2021-06-24 00:00:00', '2021-06-18 10:53:57', '2021-06-18 10:53:57'),
(22, '18:Vlatko Vlatkić', '2021-06-23 00:00:00', '2021-06-24 00:00:00', '2021-06-18 10:54:12', '2021-06-18 10:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, '2021_05_05_125122_create_clients_table', 1),
(5, '2021_05_20_071449_add_username_to_users_table', 2),
(6, '2021_05_20_072921_add_type_of_user_to_users_table', 3),
(7, '2021_05_25_072319_add_user_id_to_clients', 4),
(8, '2021_05_25_075204_create_therapists_table', 5),
(9, '2021_05_25_080236_add_therapists_id_to_clients', 6),
(10, '2021_05_25_114109_add_lastname_to_clients', 7),
(11, '2021_05_26_081714_create_events_table', 8),
(12, '2021_05_26_093801_create_bookings_table', 9),
(13, '2021_05_26_094705_create_events_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ibutorac@hgi-cgs.hr', '$2y$10$6x4romAIs22utfNKM1dMOeaYdJ2W9GZOo.1bK1HwVjigL4ZxL.0qa', '2021-06-11 07:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_user` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `username`, `password`, `type_of_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Korisnik Korisnikić', 'ibutorac@hgi-cgs.hr', NULL, 'mpilatus', '$2y$10$PsQKPTk1CUUqpe6P31YzR.gnVI65.UqcrJMcTzJHiKSOhZey.Mmn.', 2, NULL, '2021-06-01 10:52:18', '2021-06-01 10:52:18'),
(2, 'Admin Adminić', 'admin@admin.com', NULL, 'admin', '$2y$10$eYIxJrgCJQ3iUNHZf4oTAu38sqYIuYcQlpY/v39OIwkU40uquD2oq', 1, NULL, '2021-06-11 10:31:42', '2021-06-11 10:31:42'),
(3, 'Lucija Janjić', 'ljanjic@logoped.hr', NULL, 'ljanjic', '$2y$10$cFl6LOF.4NV6IP1yu2Ol.Oh4pZyoD9QPovbxM5DXiiNpESW5kMKpi', 2, NULL, '2021-06-15 07:59:26', '2021-06-15 07:59:26'),
(4, 'Marija Marijić', 'mmarijic@logoped.hr', NULL, 'mmarijic', '$2y$10$u/lcrtb.XK9NCsWDXbuce.YBmMSN8EdaL3kfUZFC0q8Vq8mwFcBF.', 2, NULL, '2021-06-15 08:04:23', '2021-06-15 08:04:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`),
  ADD UNIQUE KEY `clients_telephone_unique` (`telephone`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
