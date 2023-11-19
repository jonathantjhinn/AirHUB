-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 09:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `airlist`
--

CREATE TABLE `airlist` (
  `listid` int(11) NOT NULL,
  `planecode` varchar(255) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `arrival` varchar(255) NOT NULL,
  `datedepart` datetime NOT NULL DEFAULT current_timestamp(),
  `datearrival` datetime NOT NULL DEFAULT current_timestamp(),
  `gate` varchar(5) NOT NULL,
  `price` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airlist`
--

INSERT INTO `airlist` (`listid`, `planecode`, `depart`, `arrival`, `datedepart`, `datearrival`, `gate`, `price`, `created_at`) VALUES
(1, 'KC221', 'Bali', 'Jakarta', '2023-11-18 12:00:00', '2023-11-18 14:00:00', 'A1', '900,000', '2023-11-19 01:32:11'),
(2, 'AL221', 'Denpasar', 'Jakarta', '2023-11-18 08:00:00', '2023-11-18 09:00:00', 'A3', '700,000', '2023-11-19 01:32:11'),
(3, 'GG231', 'Jakarta', 'Malaysia', '2023-11-18 10:00:00', '2023-11-18 11:00:00', 'B2', '1,500,000', '2023-11-19 01:32:11'),
(4, 'AS231', 'Malaysia', 'Jakarta', '2023-11-18 20:00:00', '2023-11-18 22:00:00', 'A2', '1,750,000', '2023-11-19 01:32:11'),
(5, 'LS002', 'Jakarta', 'HongKong', '2023-11-17 18:00:00', '2023-11-17 22:00:00', 'C2', '2,300,000', '2023-11-19 01:32:11'),
(6, 'LS002', 'HongKong', 'Jakarta', '2023-11-18 01:00:00', '2023-11-18 05:00:00', 'D1', '2,400,000', '2023-11-19 01:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `msuser`
--

CREATE TABLE `msuser` (
  `userid` int(5) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `msuser`
--

INSERT INTO `msuser` (`userid`, `fullname`, `email`, `password`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(12, '123', '123', '$2y$10$590lAZsoZJShM8b9XFu0q.x95qGlH8JUvP4hGdeho1N8l6II8vSMi', NULL, NULL, '2023-11-18', '2023-11-18'),
(13, 'admin', 'admin@gmail.com', '$2y$10$dg4HZmTjrew6fRHbs.pqoO5kO8lOdpuYG48oZebXkq5/b8uw4cRci', NULL, NULL, '2023-11-18', '2023-11-18'),
(14, 'jonathan', 'jonathan@gmail.com', '$2y$10$O/J7lTYLXXT0AIUjWgZ5DOYr2L08XuWNVfpS14iR.hbLPGIPw354e', NULL, NULL, '2023-11-19', '2023-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchasedlist`
--

CREATE TABLE `purchasedlist` (
  `purchaseid` int(11) NOT NULL,
  `listid` int(11) NOT NULL,
  `depart` varchar(255) DEFAULT NULL,
  `arrival` varchar(255) DEFAULT NULL,
  `datedepart` datetime NOT NULL DEFAULT current_timestamp(),
  `datearrival` datetime NOT NULL DEFAULT current_timestamp(),
  `gate` varchar(255) DEFAULT NULL,
  `planecode` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cardnumber` varchar(255) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `optionalfood` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchasedlist`
--

INSERT INTO `purchasedlist` (`purchaseid`, `listid`, `depart`, `arrival`, `datedepart`, `datearrival`, `gate`, `planecode`, `fullname`, `phone`, `email`, `cardnumber`, `cardname`, `optionalfood`, `updated_at`, `created_at`) VALUES
(2, 4, 'Malaysia', 'Jakarta', '2023-11-19 13:09:33', '2023-11-19 13:09:33', 'A2', 'AS231', 'jonathan', '087782925168', 'jonathan049@binus.ac.id', '12345678910', 'JONATHAN', 'no alergic', '2023-11-18 22:11:59', '2023-11-18 22:11:59'),
(4, 5, 'Jakarta', 'HongKong', '2023-11-19 13:09:33', '2023-11-19 13:09:33', 'C2', 'LS002', 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin', 'admin', '2023-11-19 05:05:27', '2023-11-19 05:05:27'),
(5, 3, 'Jakarta', 'Malaysia', '2023-11-19 13:09:33', '2023-11-19 13:09:33', 'B2', 'GG231', 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin', 'admin', '2023-11-19 05:05:49', '2023-11-19 05:05:49'),
(8, 5, 'Jakarta', 'HongKong', '2023-11-19 13:09:33', '2023-11-19 13:09:33', 'C2', 'LS002', '1', '1', 'davidtimo@gmail.com', '1', '1', '1', '2023-11-19 06:04:53', '2023-11-19 06:04:53'),
(9, 1, 'Bali', 'Jakarta', '2023-11-19 13:09:33', '2023-11-19 13:09:33', 'A1', 'KC221', '1', '1', 'davidtimo@gmail.com', '1', '1', 'ga ada', '2023-11-19 06:05:18', '2023-11-19 06:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$xX5xlPXb5RNOen0n5uNn7.olL3NAcWVjbCwBEC8F6duVN4eYI88v2', 'admin', 'admin', NULL, '2023-11-18 20:31:55', '2023-11-18 21:51:14'),
(2, 'david', 'david@gmail.com', NULL, '$2y$10$.bt5XkLk6UZG/GnN/6tZsucN8.Ij6gHEEhVuVWuBbZJ6gTpLtx4hS', NULL, NULL, NULL, '2023-11-18 21:51:39', '2023-11-18 21:51:39'),
(3, 'davidtimothiy', 'davidtimo@gmail.com', NULL, '$2y$10$FXI4imKRWwm5x/Yqb0o8Q.jUpyUaiAM48cq9A5Thi9rP4iw02KxNu', 'gajaidi', 'jln aku suka kamu', NULL, '2023-11-18 22:50:58', '2023-11-18 22:52:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airlist`
--
ALTER TABLE `airlist`
  ADD PRIMARY KEY (`listid`);

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
-- Indexes for table `msuser`
--
ALTER TABLE `msuser`
  ADD PRIMARY KEY (`userid`);

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
-- Indexes for table `purchasedlist`
--
ALTER TABLE `purchasedlist`
  ADD PRIMARY KEY (`purchaseid`);

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
-- AUTO_INCREMENT for table `airlist`
--
ALTER TABLE `airlist`
  MODIFY `listid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `msuser`
--
ALTER TABLE `msuser`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchasedlist`
--
ALTER TABLE `purchasedlist`
  MODIFY `purchaseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
