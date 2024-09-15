-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2024 at 05:44 PM
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
-- Database: `lplmtwr`
--

-- --------------------------------------------------------

--
-- Table structure for table `budgets`
--

CREATE TABLE `budgets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `budget_amount` decimal(10,2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `budget_allocations`
--

CREATE TABLE `budget_allocations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `budget_id` bigint(20) UNSIGNED NOT NULL,
  `expense_id` bigint(20) UNSIGNED NOT NULL,
  `amount_allocated` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('middelphort@gmail.com|127.0.0.1', 'i:1;', 1725467094),
('middelphort@gmail.com|127.0.0.1:timer', 'i:1725467094;', 1725467094);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(191) NOT NULL,
  `owner` varchar(191) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expense_categories`
--

CREATE TABLE `expense_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) NOT NULL,
  `middlename` varchar(191) DEFAULT NULL,
  `lastname` varchar(191) NOT NULL,
  `booking_type` enum('online','manual') NOT NULL,
  `country` varchar(191) NOT NULL,
  `address` varchar(191) NOT NULL,
  `tribe` varchar(191) NOT NULL,
  `occupation` varchar(191) NOT NULL,
  `arriving_from` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone_number` varchar(191) DEFAULT NULL,
  `purpose_of_visit` varchar(191) DEFAULT NULL,
  `id_type` varchar(191) DEFAULT NULL,
  `id_number` varchar(191) DEFAULT NULL,
  `id_issuing_authority` varchar(191) DEFAULT NULL,
  `id_expiration_date` varchar(191) DEFAULT NULL,
  `next_of_kin_name` varchar(191) DEFAULT NULL,
  `next_of_kin_phone_number` varchar(191) DEFAULT NULL,
  `gender` enum('male','female') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) NOT NULL,
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
  `id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
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
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(5, '2024_08_17_214657_create_sample_table', 1),
(10, '2024_08_21_081237_create_room_management_table', 6),
(12, '2024_08_26_064209_create_room_type_table', 8),
(16, '2024_08_25_125152_create_reservation_table', 10),
(17, '2024_08_29_053722_create_tax_table', 11),
(18, '2024_08_29_102518_create_expense_categories_table', 12),
(19, '2024_08_29_102652_create_expenses', 12),
(20, '2024_08_29_103322_create_budgets_table', 12),
(21, '2024_08_29_103535_create_budget_allocations_table', 12),
(23, '2019_12_14_000001_create_personal_access_tokens_table', 13),
(27, '2024_09_03_163652_create_online_booking_table', 15),
(29, '2024_08_20_161754_create_guest_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `online_booking`
--

CREATE TABLE `online_booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `checkin_date` varchar(255) NOT NULL,
  `checkout_date` varchar(255) NOT NULL,
  `number_of_days` varchar(255) NOT NULL,
  `number_of_guest` varchar(255) NOT NULL,
  `room_number` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `booking_id` varchar(255) NOT NULL,
  `is_marked` varchar(255) NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `guest_id` varchar(191) NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `number_of_guests` int(11) NOT NULL,
  `total_price` varchar(191) NOT NULL,
  `period_to_stay` int(11) NOT NULL,
  `room_price` int(11) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_number` varchar(191) NOT NULL,
  `room_type` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `status` enum('available','occupied','maintainance') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cost` varchar(121) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_number`, `room_type`, `description`, `status`, `created_at`, `updated_at`, `cost`) VALUES
(8, 'standard 1', 'standard', NULL, 'available', '2024-09-15 09:39:19', '2024-09-15 09:39:19', '60000'),
(9, 'deluxe 1', 'standard', NULL, 'available', '2024-09-15 09:39:30', '2024-09-15 09:39:30', '60000'),
(10, 'executive 1', 'executive', NULL, 'available', '2024-09-15 09:39:43', '2024-09-15 09:39:43', '1200000');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `cost` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`id`, `name`, `cost`, `created_at`, `updated_at`) VALUES
(3, 'standard', '60000', '2024-08-31 04:23:22', '2024-08-31 04:23:22'),
(4, 'deluxe', '80000', '2024-09-14 04:30:41', '2024-09-14 04:30:41'),
(5, 'executive', '1200000', '2024-09-14 04:30:58', '2024-09-14 04:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) NOT NULL,
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
('TdZuHqUXMAqVYuZPZ19thDX3CeWjeCQvgmmtEIPW', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiV0s4WUdCbWFCN1k3WklDSTlpQW5RdmdNaFBSVjVGdHRlbzRUZnhJRSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MzoiaHR0cDovLzEyNy4wLjAuMTo4MDgwL2Rhc2gvZ3Vlc3RfbWFuYWdlbWVudCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1726301272),
('Xlt74LAAWt8IsaCC9OpzmuW1Ursepk4je1g70UwQ', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVFVDUWdvd1N2b01JTFk2T0RWc3BGeE1uZzRFR0RKNnBkS01SM0twciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjE6e2k6MDtPOjM1OiJGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxFbnZlbG9wZSI6Mjp7czo0MzoiAEZsYXNoZXJcUHJpbWVcTm90aWZpY2F0aW9uXEVudmVsb3BlAHN0YW1wcyI7YTo2OntzOjMxOiJGbGFzaGVyXFByaW1lXFN0YW1wXFBsdWdpblN0YW1wIjtPOjMxOiJGbGFzaGVyXFByaW1lXFN0YW1wXFBsdWdpblN0YW1wIjoxOntzOjM5OiIARmxhc2hlclxQcmltZVxTdGFtcFxQbHVnaW5TdGFtcABwbHVnaW4iO3M6NzoiZmxhc2hlciI7fXM6MzQ6IkZsYXNoZXJcUHJpbWVcU3RhbXBcQ3JlYXRlZEF0U3RhbXAiO086MzQ6IkZsYXNoZXJcUHJpbWVcU3RhbXBcQ3JlYXRlZEF0U3RhbXAiOjI6e3M6NDU6IgBGbGFzaGVyXFByaW1lXFN0YW1wXENyZWF0ZWRBdFN0YW1wAGNyZWF0ZWRBdCI7TzoxNzoiRGF0ZVRpbWVJbW11dGFibGUiOjM6e3M6NDoiZGF0ZSI7czoyNjoiMjAyNC0wOS0xNSAxNTo0NDowNi41NjI0NzQiO3M6MTM6InRpbWV6b25lX3R5cGUiO2k6MztzOjg6InRpbWV6b25lIjtzOjM6IlVUQyI7fXM6NDI6IgBGbGFzaGVyXFByaW1lXFN0YW1wXENyZWF0ZWRBdFN0YW1wAGZvcm1hdCI7czoxMToiWS1tLWQgSDppOnMiO31zOjI3OiJGbGFzaGVyXFByaW1lXFN0YW1wXElkU3RhbXAiO086Mjc6IkZsYXNoZXJcUHJpbWVcU3RhbXBcSWRTdGFtcCI6MTp7czozMToiAEZsYXNoZXJcUHJpbWVcU3RhbXBcSWRTdGFtcABpZCI7czozMjoiNzI3OTBiZWNmY2Y5M2FiNWU4YjY5MjQ1ZGY2YTE5OTIiO31zOjMwOiJGbGFzaGVyXFByaW1lXFN0YW1wXERlbGF5U3RhbXAiO086MzA6IkZsYXNoZXJcUHJpbWVcU3RhbXBcRGVsYXlTdGFtcCI6MTp7czozNzoiAEZsYXNoZXJcUHJpbWVcU3RhbXBcRGVsYXlTdGFtcABkZWxheSI7aTowO31zOjI5OiJGbGFzaGVyXFByaW1lXFN0YW1wXEhvcHNTdGFtcCI7TzoyOToiRmxhc2hlclxQcmltZVxTdGFtcFxIb3BzU3RhbXAiOjE6e3M6Mzc6IgBGbGFzaGVyXFByaW1lXFN0YW1wXEhvcHNTdGFtcABhbW91bnQiO2k6MTt9czozMzoiRmxhc2hlclxQcmltZVxTdGFtcFxQcmlvcml0eVN0YW1wIjtPOjMzOiJGbGFzaGVyXFByaW1lXFN0YW1wXFByaW9yaXR5U3RhbXAiOjE6e3M6NDM6IgBGbGFzaGVyXFByaW1lXFN0YW1wXFByaW9yaXR5U3RhbXAAcHJpb3JpdHkiO2k6MDt9fXM6NDk6IgBGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxFbnZlbG9wZQBub3RpZmljYXRpb24iO086Mzk6IkZsYXNoZXJcUHJpbWVcTm90aWZpY2F0aW9uXE5vdGlmaWNhdGlvbiI6NDp7czo0NjoiAEZsYXNoZXJcUHJpbWVcTm90aWZpY2F0aW9uXE5vdGlmaWNhdGlvbgB0aXRsZSI7czowOiIiO3M6NDg6IgBGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxOb3RpZmljYXRpb24AbWVzc2FnZSI7czoxMzoiR3Vlc3QgRGVsZXRlZCI7czo0NToiAEZsYXNoZXJcUHJpbWVcTm90aWZpY2F0aW9uXE5vdGlmaWNhdGlvbgB0eXBlIjtzOjc6InN1Y2Nlc3MiO3M6NDg6IgBGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxOb3RpZmljYXRpb24Ab3B0aW9ucyI7YTowOnt9fX19czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoL2d1ZXN0X21hbmFnZW1lbnQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1726415046);

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_name` varchar(191) NOT NULL,
  `rate` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) NOT NULL,
  `middlename` varchar(191) DEFAULT NULL,
  `lastname` varchar(191) NOT NULL,
  `phone_number` varchar(191) NOT NULL,
  `profile_image` varchar(191) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('Admin','Accountant','Manager','Staff') NOT NULL,
  `password` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `phone_number`, `profile_image`, `email`, `gender`, `email_verified_at`, `role`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Phort', NULL, 'Chrispin', '0787753939', '1724088548.jpeg', 'middlephort@gmail.com', 'Male', NULL, 'Admin', '$2y$12$3rZSnBj0XwKuWAAUz1S/OOdNOzztTUBGVrPeivJSqWAPuZzc1gs12', 'active', 'qgRPDBxmmUNI1vQ26wpBYaAODZr4NoWj05fu2zbBrgeQAYihgbWHMDBVT2l4', '2024-08-19 10:26:43', '2024-09-14 04:22:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budgets`
--
ALTER TABLE `budgets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `budgets_category_id_foreign` (`category_id`);

--
-- Indexes for table `budget_allocations`
--
ALTER TABLE `budget_allocations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `budget_allocations_budget_id_foreign` (`budget_id`),
  ADD KEY `budget_allocations_expense_id_foreign` (`expense_id`);

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
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_category_id_foreign` (`category_id`);

--
-- Indexes for table `expense_categories`
--
ALTER TABLE `expense_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `online_booking`
--
ALTER TABLE `online_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_room_id_foreign` (`room_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `room_room_number_unique` (`room_number`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
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
-- AUTO_INCREMENT for table `budgets`
--
ALTER TABLE `budgets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `budget_allocations`
--
ALTER TABLE `budget_allocations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expense_categories`
--
ALTER TABLE `expense_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `online_booking`
--
ALTER TABLE `online_booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `budgets`
--
ALTER TABLE `budgets`
  ADD CONSTRAINT `budgets_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `expense_categories` (`id`);

--
-- Constraints for table `budget_allocations`
--
ALTER TABLE `budget_allocations`
  ADD CONSTRAINT `budget_allocations_budget_id_foreign` FOREIGN KEY (`budget_id`) REFERENCES `budgets` (`id`),
  ADD CONSTRAINT `budget_allocations_expense_id_foreign` FOREIGN KEY (`expense_id`) REFERENCES `expenses` (`id`);

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `expense_categories` (`id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
