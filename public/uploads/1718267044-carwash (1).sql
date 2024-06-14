-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 09:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carwash`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('mehakamir187@gmail.com|127.0.0.1', 'i:1;', 1717474334),
('mehakamir187@gmail.com|127.0.0.1:timer', 'i:1717474334;', 1717474334),
('use@gmail.com|127.0.0.1', 'i:1;', 1717487231),
('use@gmail.com|127.0.0.1:timer', 'i:1717487231;', 1717487231);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_information`
--

CREATE TABLE `car_information` (
  `id` int(10) UNSIGNED NOT NULL,
  `uid` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `insuranceId` varchar(255) NOT NULL,
  `insuranceCompany` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `sign` text NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `Unfallort` varchar(255) DEFAULT NULL,
  `doc1` text NOT NULL,
  `doc2` text DEFAULT NULL,
  `doc3` text DEFAULT NULL,
  `doc4` text DEFAULT NULL,
  `license` text NOT NULL,
  `licenseNmbr` text NOT NULL,
  `email` text NOT NULL,
  `fault-box` text NOT NULL DEFAULT 'off',
  `info-box` text NOT NULL DEFAULT 'off',
  `car_model` text NOT NULL,
  `fault` text NOT NULL,
  `schadensArt` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_information`
--

INSERT INTO `car_information` (`id`, `uid`, `date`, `time`, `name`, `surname`, `company`, `phone`, `insuranceId`, `insuranceCompany`, `info`, `sign`, `status`, `Unfallort`, `doc1`, `doc2`, `doc3`, `doc4`, `license`, `licenseNmbr`, `email`, `fault-box`, `info-box`, `car_model`, `fault`, `schadensArt`, `created_at`, `updated_at`) VALUES
(72, 2, '1986-01-05', '09:12', 'Bell Huff', 'Hogan', 'Robbins and Cannon Traders', '+1 (641) 576-4766', 'Libero ipsum veniam', 'Gould Vang Plc', 'Ea ratione libero vo', '1718103277-signature.png', 'AUSGEZAHLT', 'Vorwaschhalle', '1718103277-Logo_Ireti-ok .jpg', NULL, NULL, NULL, '1718103277-_2557f0db-3f8b-4d18-8e0a-cd61096e1b8c.jpeg', '431', 'nebezu@mailinator.com', 'on', 'off', 'Nobis quaerat vel su', 'Dolor officia quidem', 'Dolore facilis numqus', '2024-06-11 05:54:37', '2024-06-11 05:54:37'),
(73, 2, '1994-06-14', '17:15', 'Nathan Mooney', 'Spears', 'Nguyen Gutierrez Trading', '+1 (243) 794-4522', 'Quidem pariatur Est', 'Mills Chen Plc', 'Beatae ad minus sed', '1718103343-signature.png', 'AUSZAHLUNG', 'Hauptwaschhalle', '1718103343-Logo_Ireti-ok .jpg', NULL, NULL, NULL, '1718103343-Logo_Ireti-ok .jpg', '281', 'zelyned@mailinator.com', 'on', 'off', 'Distinctio Quas sap', 'Illum reprehenderit', 'Est id qui odit ad', '2024-06-11 05:55:43', '2024-06-11 05:55:43'),
(74, 2, '2021-04-30', '11:05', 'Dana Stone', 'Fletcher', 'Wells and Wynn Trading', '+1 (633) 524-9696', 'Fugiat dolores ea i', 'Schroeder and Kirby Co', 'Nesciunt modi sed f', '1718103413-signature.png', 'AUSGEZAHLT', 'Hauptwaschhalle', '1718103413-Logo_Ireti-ok .jpg', NULL, NULL, NULL, '1718103413-Logo_Ireti-ok .jpg', '292', 'buzigino@mailinator.com', 'off', 'off', 'Molestiae vel totam', 'Omnis consequuntur q', 'Recusandae Voluptat', '2024-06-11 05:56:53', '2024-06-11 05:56:53'),
(75, 2, '1972-12-14', '19:17', 'Kibo Blake', 'Reyes', 'Wynn Francis Associates', '+1 (113) 262-3507', 'Quia dolore eveniet', 'Nieves and Gay Inc', 'Fugiat non provident', '1718104319-signature.png', 'Ut deserunt voluptat', 'Vorwaschhalle', '1718104319-Untitled design.png', NULL, NULL, NULL, '1718104319-download (2).jpeg', '670', 'vykolajipe@mailinator.com', 'off', 'off', 'Ea ea culpa molesti', 'Consequat Animi ve', 'Culpa architecto mo', '2024-06-11 06:11:59', '2024-06-11 06:11:59'),
(76, 2, '1999-07-02', '04:07', 'Troy Roberson', 'Mann', 'Madden Peck Plc', '+1 (634) 433-6559', 'Eiusmod ea ut est q', 'Macdonald and Rasmussen Trading', 'Dolor quo ad eligend', '1718104431-signature.png', 'AUSZAHLUNG', 'Aliqua Rerum volupt', '1718104431-Logo_Ireti-ok .jpg', NULL, NULL, NULL, '1718104431-Untitled design.png', '10', 'gesoto@mailinator.com', 'on', 'off', 'Quis omnis voluptas', 'Obcaecati proident', 'Apersiam quae id iust', '2024-06-11 06:13:51', '2024-06-11 06:13:51'),
(77, 2, '1995-05-06', '06:09', 'Aretha Franco', 'Shepard', 'Gilliam and Taylor LLC', '+1 (784) 861-9916', 'Nulla quia rem deser', 'Poole Stewart Traders', 'Nisi voluptas magna', '1718108741-signature.png', 'AUSZAHLUNG', 'Hauptwaschhalle', '1718108741-download (2).jpeg', NULL, NULL, NULL, '1718108741-download.jpeg', '782', 'tinazuguk@mailinator.com', 'off', 'off', 'Excepturi ullam est', 'Enim architecto mole', 'Tenetur vel tempora', '2024-06-11 07:25:41', '2024-06-11 07:25:41');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(7, '0001_01_01_000000_create_users_table', 1),
(8, '0001_01_01_000001_create_cache_table', 1),
(9, '0001_01_01_000002_create_jobs_table', 1),
(11, '2024_06_01_103304_create_car_information_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('gHSLqmjRh0MYuxqv4sHLvew55VQDXd1wfDy25Vdz', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36 OPR/110.0.0.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiSVlyNGdzQUsyUHk0TjVhdG1zcDh4NU1oaEZTOGZVREdJeEVGMTlUOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9FbXBsb3llZS9DYXJFbnRyeTEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTcxODA5MTc2Mjt9czoxOToiY2FyX2luZm9ybWF0aW9uX2lkcyI7YToxOntpOjA7aTo3Nzt9czoxNDoiY3VzdG9tZXJfY291bnQiO2k6Mjt9', 1718108742),
('UOfYzD9gUI8uvxHE02goquKV6R3ox0rKhMbdi1dV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36 OPR/110.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidU9tdVhUMnJqOWZzb2FGM0Fva0tmUjM5VlJmVUUzd1NwbXFOUzExdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1718177228);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` text NOT NULL,
  `position` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `email_verified_at`, `phone`, `position`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'Admin', 'admin@gmail.com', NULL, '03000000000', 'Admin', 0, '$2y$12$PmLe455L6jtg6ndVfPJ6Q.Am7zHa/M00S8yHxKmw2IFijBmiqf7RC', NULL, '2024-06-01 01:06:22', '2024-06-01 01:06:22'),
(2, 'Colin', 'Goodman', 'user@gmail.com', NULL, '+1 (845) 708-6266', 'Manager', 1, '$2y$12$Q.bkyyqv.2uJGbvB2sEsgO4l3u8eMyBAq5L7rE9qw29FMzjtTONK2', NULL, '2024-06-01 01:07:22', '2024-06-01 01:07:22'),
(3, 'Oleg', 'Pugh', 'member@gmail.com', NULL, '+1 (731) 368-4269', 'CarWasher', 1, '$2y$12$xj85ROb.F9dQKqhSU8mKMurMm141ivz2fetmg1AS5b9e3VMoN599q', NULL, '2024-06-07 02:32:31', '2024-06-07 02:32:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `car_information`
--
ALTER TABLE `car_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_information`
--
ALTER TABLE `car_information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
