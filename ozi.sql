-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 03:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ozi`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `campaignname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaignbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaignnumbers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '+2348159011732',
  `campaigncsv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaigndate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaigntime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/images/avatars/progress.gif',
  `progress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '9',
  `actions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Sending',
  `actionsclass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'badge-warning',
  `recieved` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `user_id`, `campaignname`, `campaignbody`, `campaignnumbers`, `campaigncsv`, `campaigndate`, `campaigntime`, `status`, `progress`, `actions`, `actionsclass`, `recieved`, `sent`, `total`, `created_at`, `updated_at`) VALUES
(1, 9, 'Web Blash', 'Hello World People of God', '08110', '', '2021-01-28', '12:56', '/images/avatars/progress.gif', '9', 'Sending', 'badge-warning', '0', '0', '', '2021-01-27 22:57:06', '2021-01-27 22:57:06'),
(2, 9, 'Web Blash 2', 'Hello World People of God 2', '081101', '', '2021-01-28', '12:56', '/images/avatars/progress.gif', '5', 'Sending', 'badge-warning', '0', '0', '', '2021-01-27 22:57:06', '2021-01-27 22:57:06'),
(3, 9, 'Erzblinks', 'Rccg Meeting', '', '', '2021-01-29', '01:52', '/images/avatars/progress.gif', '6', 'Verifying Payment', 'badge-warning', '0', '6', '', '2021-01-27 23:53:03', '2021-01-27 23:53:03'),
(4, 9, 'New Bulk Send', 'Hello From Today or the other side', '08110', '', '2021-01-28', '18:37', '/images/avatars/done.gif', '0', 'Sent', 'badge-success', '0', '0', '', '2021-01-28 16:37:20', '2021-01-28 16:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_26_144832_add_username_to_users_table', 2),
(5, '2021_01_26_145123_add_number_to_users_table', 2),
(11, '2021_01_27_110819_create_campaigns_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`, `number`) VALUES
(8, 'Erons Austine Gberaese', 'gberaeseerons@gmail.com', NULL, '$2y$10$E2jJ2Ekw5UjU2ZZfCFatvO11TX6.A8eWcuKAGWwPE4MTJH9kiQFIe', 'd9u4kL2JNyByZG8dplvJS3wpTd26UZ865OEKMC9zVPUaT9IDH5Pf24lhc3DW', '2021-01-27 02:16:53', '2021-01-27 02:16:53', 'erzblinks', '08159011743'),
(9, 'Azeez Adejumo', 'generalazeez@gmail.com', NULL, '$2y$10$EqbNqnm/zRvxrKem8JhKjuoMZ2pfAVBnukp3EGY1snfoW28u/ToMq', NULL, '2021-01-27 16:15:27', '2021-01-27 16:15:27', 'Chinko', '08163657143');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campaigns_user_id_foreign` (`user_id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD CONSTRAINT `campaigns_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
