-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 01:22 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `doctor`, `date`, `message`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Karkon Mary', 'karkonmary20@gmail.com', '45', 'physician', '2022-02-09', 'bone checkup', 'cancelled', NULL, '2022-02-09 06:18:48', '2022-02-10 05:17:03'),
(2, 'James Kuot', 'jameskuot@gmail.com', '78', 'physician', '2022-02-09', 'my eyes keep paining at night', 'cancelled', NULL, '2022-02-09 08:15:31', '2022-02-10 05:19:34'),
(4, 'User Two', 'usertwo@gmail.com', '0899877655', 'psychiatrist', '2022-02-09', 'mental stress from my sturborn wife', 'approved', '3', '2022-02-09 10:06:33', '2022-02-10 05:20:11'),
(6, 'Userone', 'userone@gmail.com', '0899877655', 'Naome', '2022-02-10', 'bj dfdss', 'In progress', '1', '2022-02-10 03:30:27', '2022-02-10 03:30:27'),
(7, 'Abuk', 'abukvicky48@gmail.com', '0788776654', 'Kato', '2022-02-10', 'cgddfdf vv', 'cancelled', '5', '2022-02-10 06:32:00', '2022-02-10 06:34:28'),
(8, 'Kuol Lual', 'kuolmarko47@gmail.com', '0788776654', 'Melina Jose', '2022-02-10', 'i have a patient that needs a knee surgery', 'approved', '7', '2022-02-10 13:26:26', '2022-02-10 13:27:15'),
(9, 'HIoo', 'studentone@gmail.com', '0788776654', 'Melina Jose', '2022-02-12', 'bni jjj', 'cancelled', NULL, '2022-02-12 06:56:03', '2022-02-12 08:05:39');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `phone`, `room`, `specialty`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Kato', '0789987654', '43', 'physician', '1644352413.jpeg', '2022-02-08 17:33:33', '2022-02-08 17:33:33'),
(4, 'Melina Jose', '0750433265', '35', 'Surgeon', '1644498088.jpeg', '2022-02-08 17:49:07', '2022-02-10 10:01:28');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_02_08_090059_create_sessions_table', 1),
(7, '2022_02_08_191146_create_doctors_table', 1),
(8, '2022_02_08_201855_create_doctors_table', 2),
(9, '2022_02_09_073439_create_appointments_table', 3),
(10, '2022_02_10_150520_create_notifications_table', 4);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('SP3JhiOQ4nJafpPBsrbqnNl6Vkz4fwDkjEnEcpAa', 22, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUnQ4eWtJZ3BlMjBmcU02UnBlWWZwSk9ZTzdOb2Q1VU41RXd4MFRMaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9teWFwcG9pbnRtZW50Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRLclFFa3QvMmN1MTFzRXV4Vy9nMGVPUmdockZkcHlaaVdJWEFrZ1pPZ0hoalpoNmFaQjcxUyI7czozOiJ1cmwiO2E6MDp7fX0=', 1644754927);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Userone', 'userone@gmail.com', '0775893609', 'Nsambya', '0', '2022-02-09 21:00:00', '$2y$10$KGeSvr5mRX61ENepA.srxO67Zpy/afp0QATAg/5MKYhMAv7b3RG7y', NULL, NULL, NULL, NULL, NULL, '2022-02-08 16:22:13', '2022-02-08 16:22:13'),
(2, 'Admin', 'admin@gmail.com', '0775893600', 'Entebbe', '1', '2022-02-07 21:00:00', '$2y$10$b1sLVLaBvYL927nOSD3fZ.PVW/hHv0XnYS1ea8/HhgVnP87LTCcTS', NULL, NULL, NULL, NULL, NULL, '2022-02-08 16:23:16', '2022-02-08 16:23:16'),
(3, 'Usertwo', 'usertwo@gmail.com', '0788998876', 'Masaka', '0', '2022-02-09 21:00:00', '$2y$10$FxvHrFA7sWzUnVFunTqejuXhLxh438TLlSmCkGyIR58qd5GWI0ury', NULL, NULL, NULL, NULL, NULL, '2022-02-09 09:53:07', '2022-02-09 09:53:07'),
(4, 'User3', 'userthree@gmail.com', '0766665564', 'Munyonyo', '0', NULL, '$2y$10$HsUHR.4Ssl/bPjKeJ3kVyOIIXmJ3VfSCtAvz.G5/czegc/2D56n3K', NULL, NULL, NULL, NULL, NULL, '2022-02-09 09:54:42', '2022-02-09 09:54:42'),
(5, 'ABUK DENG ATHUAI', 'abukvicky48@gmail.com', '0775893609', 'marko@gmail.com', '0', NULL, '$2y$10$Y8lBNh4IQY.dDGU7L6xSTuOE5ZarQEMuY3G/ViBAtH9KdqxwLyAGi', NULL, NULL, NULL, NULL, NULL, '2022-02-10 06:30:59', '2022-02-10 06:30:59'),
(7, 'Kuol Lual', 'kuolmarko47@gmail.com', '0774609978', 'Kampala', '1', '2022-02-10 11:44:52', '$2y$10$pwyTfCV382UpZ0L5MIJ9uep3IyGQgBf9X1kJbO1iTy.k8xT8M2kTK', NULL, NULL, '3oYdfj3KmaiuOX8JhHcQj9WdYPzYFo7oGOV1dx1Ahq0A7X76c6rMzKWjaxj6', NULL, NULL, '2022-02-10 11:43:48', '2022-02-10 11:46:29'),
(8, 'user6', 'usersix@gmail.com', '0700654334', 'Busiga', '0', NULL, '$2y$10$w4RQewB8F3o.muKVUVX27eEcrSfteUwyMfQnYc7wm7/hCRDXEwAIa', NULL, NULL, NULL, NULL, NULL, '2022-02-12 07:41:31', '2022-02-12 07:41:31'),
(9, 'bio', 'biotech@gmail.com', '0775893609', 'Kampala', '0', NULL, '$2y$10$XHFlRNegQyYXtXx09pPoZeT8sSN.vBi3p9X8lI8yuQ6fbNBZWmBSO', NULL, NULL, NULL, NULL, NULL, '2022-02-12 07:57:08', '2022-02-12 07:57:08'),
(10, 'bnbb', 'bbb@gmail.com', '0777656434', 'Entebbe', '0', NULL, '$2y$10$xGY6FhznE2mbRrCVaYwJA.2KHi9PypCXCUblpeZSHUuxlZmBCAYc2', NULL, NULL, NULL, NULL, NULL, '2022-02-12 08:07:15', '2022-02-12 08:07:15'),
(11, 'nkjj', 'maiol@gmail.com', '0775893600', 'Entebbe', '0', NULL, '$2y$10$7XbHmcdOk9PqeFNgV4JqG.YDkhktuViOa1Ka5Ed0nvU9Y5dFCoilW', NULL, NULL, NULL, NULL, NULL, '2022-02-12 08:13:14', '2022-02-12 08:13:14'),
(12, 'nail', 'nail20@gmail.com', '0705697975', 'Nsambya', '0', NULL, '$2y$10$BcxQMAzu8jWPiIYmD69VWOfTQebKcDU2/wuMgib8iwZnMypXtXtya', NULL, NULL, NULL, NULL, NULL, '2022-02-12 08:15:19', '2022-02-12 08:15:19'),
(13, 'deng', 'deng@gmail.com', '0700654334', 'Ntinda', '0', NULL, '$2y$10$Q5mq0AIcV98HnPHIyAV88O3Nq7lvRjMHmy6ROLs/Nfh5sodsfQAQO', NULL, NULL, NULL, NULL, NULL, '2022-02-12 08:25:47', '2022-02-12 08:25:47'),
(14, 'Anjelo Garang', 'anjelogarang@gmail.com', '0775893600', 'Kawempe', '0', NULL, '$2y$10$z9E5q7dSjY91plChkbzKX.W7mK.p4lMQBdVwf4YMwsALr6FHAH99a', NULL, NULL, NULL, NULL, NULL, '2022-02-12 08:33:06', '2022-02-12 08:33:06'),
(15, 'Loice', 'loice@gmail.com', '0775893600', 'Entebbe', '0', NULL, '$2y$10$bidv9jmcsn08OPDh8c1iZe2R6H4SmCZPqwkHhJyLjmK2HBLiZvsqa', NULL, NULL, NULL, NULL, NULL, '2022-02-12 17:27:27', '2022-02-12 17:27:27'),
(16, 'loice alur', 'loicealur@gmail.com', '0705697975', 'Nsambya', '0', NULL, '$2y$10$J29dyErrrbup3uCiDUfxh.cPI/GlLXcsFZ2pjY/v067W0O0BEx2km', NULL, NULL, NULL, NULL, NULL, '2022-02-12 17:30:56', '2022-02-12 17:30:56'),
(17, 'Sarah', 'sarah@gmail.com', '0924433256', 'Ntinda', '0', NULL, '$2y$10$N/jLww3ivr9Pnq8kTObfsufocVX3T0Atte0Ws2zeU30vSjPINqXfC', NULL, NULL, NULL, NULL, NULL, '2022-02-13 05:41:49', '2022-02-13 05:41:49'),
(18, 'bad habits', 'badhabits@gmail.com', '0775893600', 'Nsambya', '0', NULL, '$2y$10$atW7t2gtglJ7C9Gkj1WS..vwnIj1FwPQjbgMWRLDug9XeN0rflEeW', NULL, NULL, NULL, NULL, NULL, '2022-02-13 09:04:44', '2022-02-13 09:04:44'),
(19, 'bad habits2', 'badhabits2@gmail.com', '0775893600', 'Nsambya', '0', NULL, '$2y$10$ZZPrh1kVrmcYwH/11keWjeCnyrNvkBUbos75BuLvwqFUmBLhugHhy', NULL, NULL, NULL, NULL, NULL, '2022-02-13 09:05:42', '2022-02-13 09:05:42'),
(20, 'Magid', 'kuolmarko100@gmail.com', '0775893606', 'Nsambya', '0', NULL, '$2y$10$iMBqosmK5h09Z7ViL12rKu.r7BUcgw7vM7vtltFBBMiGKGXcDxWT.', NULL, NULL, NULL, NULL, NULL, '2022-02-13 09:07:34', '2022-02-13 09:07:34'),
(21, 'Brian', 'jordan23@gmail.com', '0700654334', 'Entebbe', '0', NULL, '$2y$10$cE4aG3df.Dm6XVSNnpWpFuPkEdvXgaGwjQ51cAyueO3XBkEH2SLPu', NULL, NULL, NULL, NULL, NULL, '2022-02-13 09:15:54', '2022-02-13 09:15:54'),
(22, 'Mary', 'mary20@gmail.com', '0700654334', 'Amarat', '0', '2022-02-01 21:00:00', '$2y$10$KrQEkt/2cu11sEuxW/g0eORghrFdpyZiWIXAkgZOgHhjZh6aZB71S', NULL, NULL, NULL, NULL, NULL, '2022-02-13 09:20:27', '2022-02-13 09:20:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
