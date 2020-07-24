-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2020 at 08:40 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `specon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `email`, `img`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Estrella Wehner V', 'admin', 'adams.dawn@example.net', '', '2020-07-22 17:50:17', '$2y$10$ZLrKWczoYbHGGa6.jVleLOVcWPzSgnFae/E04pspqPC2WWUcy0EQS', '5AADC7AFnDaAcx57HXCDip0ROJ7A3p3B84CB9aELkfA5lKknxOK3NFh03n8a', '2020-07-22 17:50:18', '2020-07-22 17:50:18'),
(2, 'Kamryn Kilback', 'hagenes.lee', 'chance.dach@example.com', '', '2020-07-22 17:50:17', '$2y$10$WjYuVEA5q5YPyXDrSoG2BeOOSxlXlXRNeTSzfOsyroTYyc1koWoTO', 'WXwROb7bF1', '2020-07-22 17:50:18', '2020-07-22 17:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `img`, `details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'JavaScript The Hard Way', '20200723_234129-download.jpeg', '<h6><font face=\"courier new\">sdkf ks fs ks&nbsp;</font></h6><h6><ul><li><font face=\"courier new\">lunch</font></li><li><font face=\"courier new\">dinner</font></li><li><font face=\"courier new\">notebook</font></li></ul></h6>', '2020-07-23 23:41:29', '2020-07-23 23:49:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking_tickets`
--

CREATE TABLE `booking_tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vouchar_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat_numbers` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(11,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_tickets`
--

INSERT INTO `booking_tickets` (`id`, `name`, `phone`, `email`, `quantity`, `vouchar_id`, `ticket_category_id`, `seat_numbers`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'evan', '1686169922', 'test@test.com', '5', 'xofg0rNUNNIY', '1', ' 1,2,3,4,5,', '25000.000', '2020-07-24 16:08:46', '2020-07-24 16:08:46', NULL),
(3, 'evan', '23084923', 'evan@evan.com', '5', '5IlfLp5nmInl', '3', ' 11,12,13,14,15,', '2500.000', '2020-07-24 16:09:52', '2020-07-24 16:09:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day_of_week` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `day_of_week`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, '3rd Day', '2020-07-28', '2020-07-23 20:05:20', '2020-07-23 20:10:05', NULL),
(4, '2nd Day', '2020-07-25', '2020-07-23 22:20:57', '2020-07-23 22:20:57', NULL);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_icons` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(4, '2020_07_22_144733_create_admins_table', 1),
(5, '2020_07_22_144759_create_admin_password_resets_table', 1),
(6, '2020_07_22_161231_create_speakers_table', 1),
(7, '2020_07_22_161248_create_topics_table', 1),
(8, '2020_07_22_161318_create_slots_table', 1),
(9, '2020_07_22_161328_create_days_table', 1),
(10, '2020_07_22_161427_create_blogs_table', 1),
(11, '2020_07_22_161448_create_ticket_categories_table', 1),
(12, '2020_07_22_161554_create_general_settings_table', 1),
(13, '2020_07_22_161628_create_sections_table', 1),
(14, '2020_07_22_161635_create_sponsors_table', 1),
(15, '2020_07_22_161647_create_sponsor_applications_table', 1),
(16, '2020_07_22_161700_create_sponsor_categories_table', 1),
(17, '2020_07_22_161716_create_testimonials_table', 1),
(18, '2020_07_22_161748_create_booking_tickets_table', 1),
(19, '2020_07_22_162720_create_tickets_table', 1);

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
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'banner', NULL, NULL, NULL),
(2, 'about', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `speaker_id` int(11) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `day_id` int(11) DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `speaker_id`, `topic_id`, `day_id`, `start_time`, `end_time`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 4, '08:00:00', '09:00:00', '0', '2020-07-23 21:02:06', '2020-07-23 22:26:00', NULL),
(2, 1, 1, 3, '08:00:00', '09:00:00', '0', '2020-07-23 21:16:44', '2020-07-23 22:11:18', NULL),
(3, 1, 1, 3, '00:00:00', '13:00:00', '0', '2020-07-23 21:48:57', '2020-07-23 22:11:06', '2020-07-23 22:11:06'),
(4, 2, 1, 3, '10:00:00', '11:00:00', '0', '2020-07-23 22:23:10', '2020-07-24 07:49:59', NULL),
(5, NULL, NULL, NULL, '08:30:00', '09:30:00', '1', '2020-07-24 07:45:46', '2020-07-24 07:45:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

CREATE TABLE `speakers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `speakers`
--

INSERT INTO `speakers` (`id`, `name`, `designation`, `bio`, `img`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'evan', 'sdfsdf', 'bla bla bla', '20200723_155447-2.jpg', '2020-07-23 15:54:47', '2020-07-23 23:38:20', '2020-07-23 23:38:20'),
(2, 'dfsdf', 'dfsf', 'dfsf', '20200723_160029-download.jpeg', '2020-07-23 16:00:29', '2020-07-23 16:00:29', NULL),
(3, 'fsdf', 'fsdfsd', 'dsfsdf', '20200723_161245-2.jpg', '2020-07-23 16:12:45', '2020-07-23 16:12:45', NULL),
(5, 'Hello', 'sdfsd', 'sdfsdf', '20200723_174148-2.jpg', '2020-07-23 17:41:48', '2020-07-23 17:41:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sponsor_category_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `sponsor_category_id`, `name`, `logo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, 'COMPANY 2', '20200724_172145-2.jpg', '2020-07-24 17:21:45', '2020-07-24 17:29:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_applications`
--

CREATE TABLE `sponsor_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_categories`
--

CREATE TABLE `sponsor_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsor_categories`
--

INSERT INTO `sponsor_categories` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'DIAMOND', '2020-07-24 16:41:36', '2020-07-24 16:41:36', NULL),
(2, 'PLATINUM', '2020-07-24 16:41:43', '2020-07-24 16:41:43', NULL),
(3, 'SILVER', '2020-07-24 16:41:48', '2020-07-24 16:51:37', '2020-07-24 16:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quote` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ticket_category_id` int(11) NOT NULL,
  `seat_number` int(11) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `ticket_category_id`, `seat_number`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '0', '2020-07-24 16:07:56', '2020-07-24 16:08:46', NULL),
(2, 1, 2, '0', '2020-07-24 16:07:56', '2020-07-24 16:08:46', NULL),
(3, 1, 3, '0', '2020-07-24 16:07:56', '2020-07-24 16:08:46', NULL),
(4, 1, 4, '0', '2020-07-24 16:07:56', '2020-07-24 16:08:46', NULL),
(5, 1, 5, '0', '2020-07-24 16:07:56', '2020-07-24 16:08:46', NULL),
(6, 1, 6, '1', '2020-07-24 16:07:56', '2020-07-24 16:07:56', NULL),
(7, 1, 7, '1', '2020-07-24 16:07:56', '2020-07-24 16:07:56', NULL),
(8, 1, 8, '1', '2020-07-24 16:07:56', '2020-07-24 16:07:56', NULL),
(9, 1, 9, '1', '2020-07-24 16:07:56', '2020-07-24 16:07:56', NULL),
(10, 1, 10, '1', '2020-07-24 16:07:56', '2020-07-24 16:07:56', NULL),
(11, 3, 11, '0', '2020-07-24 16:08:02', '2020-07-24 16:09:52', NULL),
(12, 3, 12, '0', '2020-07-24 16:08:02', '2020-07-24 16:09:52', NULL),
(13, 3, 13, '0', '2020-07-24 16:08:02', '2020-07-24 16:09:52', NULL),
(14, 3, 14, '0', '2020-07-24 16:08:02', '2020-07-24 16:09:52', NULL),
(15, 3, 15, '0', '2020-07-24 16:08:02', '2020-07-24 16:09:52', NULL),
(16, 3, 16, '1', '2020-07-24 16:08:02', '2020-07-24 16:08:02', NULL),
(17, 3, 17, '1', '2020-07-24 16:08:02', '2020-07-24 16:08:02', NULL),
(18, 3, 18, '1', '2020-07-24 16:08:02', '2020-07-24 16:08:02', NULL),
(19, 3, 19, '1', '2020-07-24 16:08:02', '2020-07-24 16:08:02', NULL),
(20, 3, 20, '1', '2020-07-24 16:08:02', '2020-07-24 16:08:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_categories`
--

CREATE TABLE `ticket_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL DEFAULT '0',
  `limit` int(11) NOT NULL DEFAULT '5',
  `details` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `features` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket_categories`
--

INSERT INTO `ticket_categories` (`id`, `title`, `img`, `price`, `limit`, `details`, `features`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PLATINUM', '20200724_110212-bloodshot-indian-movie-poster-md.jpg', 5000, 5, '<h1>PLATINUM&nbsp;</h1><h6>BLA BLA BLA</h6>', '\"{\\\"0\\\":\\\"Lunch\\\",\\\"1\\\":\\\"Breakfast\\\",\\\"2\\\":\\\"Dinner\\\",\\\"3\\\":\\\"Gift Hamper\\\"}\"', '2020-07-24 09:58:48', '2020-07-24 11:02:12', NULL),
(3, 'GOLD', '20200724_122422-download.jpeg', 500, 10, '<h1>GOLD</h1>', '\"{\\\"0\\\":\\\"Breakfast\\\",\\\"1\\\":\\\"Lunch\\\"}\"', '2020-07-24 12:24:22', '2020-07-24 12:24:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'sdfsdf sd fsadf asd', 'sdf s dfsda fsadf ds f', '2020-07-23 19:10:43', '2020-07-23 19:19:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_tickets`
--
ALTER TABLE `booking_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
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
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slots_speaker_id_index` (`speaker_id`),
  ADD KEY `slots_topic_id_index` (`topic_id`),
  ADD KEY `slots_day_id_index` (`day_id`);

--
-- Indexes for table `speakers`
--
ALTER TABLE `speakers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor_applications`
--
ALTER TABLE `sponsor_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor_categories`
--
ALTER TABLE `sponsor_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_ticket_category_id_index` (`ticket_category_id`);

--
-- Indexes for table `ticket_categories`
--
ALTER TABLE `ticket_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking_tickets`
--
ALTER TABLE `booking_tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sponsor_applications`
--
ALTER TABLE `sponsor_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sponsor_categories`
--
ALTER TABLE `sponsor_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ticket_categories`
--
ALTER TABLE `ticket_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
