-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 11, 2023 at 11:46 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

DROP TABLE IF EXISTS `group`;
CREATE TABLE IF NOT EXISTS `group` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=172 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `user_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(171, 5, 'Inglourious Basterds', 0, '2022-12-28 07:38:14', '2022-12-28 07:38:14'),
(170, 5, 'Inglourious Basterds', 0, '2022-12-28 06:54:24', '2022-12-28 06:54:24'),
(169, 5, 'Inglourious Basterds', 0, '2022-12-28 06:53:21', '2022-12-28 06:53:21'),
(166, 5, 'qwetr', 0, '2022-12-28 06:48:07', '2022-12-28 06:48:07'),
(167, 5, 'qwetr', 0, '2022-12-28 06:50:14', '2022-12-28 06:50:14'),
(168, 5, 'Inglourious Basterds', 0, '2022-12-28 06:51:31', '2022-12-28 06:51:31'),
(165, 5, 'qwetr', 0, '2022-12-28 06:46:30', '2022-12-28 06:46:30'),
(164, 4, 'popop', 0, '2022-12-28 06:45:30', '2022-12-28 06:45:30'),
(163, 4, 'ioioio', 0, '2022-12-28 06:28:05', '2022-12-28 06:28:05'),
(162, 5, 'dsfgfs', 0, '2022-12-28 06:27:37', '2022-12-28 06:27:37'),
(161, 5, 'asds', 0, '2022-12-28 06:21:15', '2022-12-28 06:21:15'),
(160, 5, 'asds', 0, '2022-12-28 06:20:50', '2022-12-28 06:20:50'),
(159, 5, 'asds', 0, '2022-12-28 06:19:07', '2022-12-28 06:19:07'),
(158, 5, 'asds', 0, '2022-12-28 06:15:56', '2022-12-28 06:15:56'),
(157, 5, 'asds', 0, '2022-12-28 06:15:43', '2022-12-28 06:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `groupmember`
--

DROP TABLE IF EXISTS `groupmember`;
CREATE TABLE IF NOT EXISTS `groupmember` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `groupid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groupmember`
--

INSERT INTO `groupmember` (`id`, `groupid`, `userid`, `created_at`, `updated_at`) VALUES
(28, 171, 5, '2022-12-28 07:38:42', '2022-12-28 07:38:42'),
(27, 171, 5, '2022-12-28 07:38:21', '2022-12-28 07:38:21'),
(26, 170, 4, '2022-12-28 06:54:28', '2022-12-28 06:54:28'),
(25, 166, 4, '2022-12-28 06:53:14', '2022-12-28 06:53:14'),
(24, 168, 2, '2022-12-28 06:52:06', '2022-12-28 06:52:06'),
(23, 163, 5, '2022-12-28 06:44:33', '2022-12-28 06:44:33'),
(22, 151, 4, '2022-12-28 05:44:25', '2022-12-28 05:44:25'),
(21, 564, 2, '2022-12-23 07:08:25', '2022-12-23 07:08:25'),
(29, 166, 4, '2022-12-28 07:47:45', '2022-12-28 07:47:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_30_100240_add_column_users', 1),
(6, '2022_12_09_083836_create_groupname_table', 2),
(7, '2022_12_09_085543_create_groupuser_table', 3),
(8, '2022_12_09_090233_create_group_table', 4),
(9, '2022_12_09_090247_create_groupmember_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `surname` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `roll` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_number_unique` (`number`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `surname`, `number`, `roll`) VALUES
(3, 'admin', 'admin@admin', NULL, '$2y$10$LRw8Z9gbGqUcv8VyOJK9netPSoc.GFn/xmmVOWJGIznFXhcDT65gy', NULL, '2022-12-02 07:23:14', '2022-12-02 07:23:14', 'admin', 123456, '0'),
(2, 'as', 'hr.videphoto@mail.ru', NULL, '$2y$10$mfZjlu7miduYoXQvsj0tgu4j8.lrH69/hNs42/RN8.ycFhxgjo5Vq', NULL, '2022-12-02 07:15:01', '2022-12-02 07:15:01', 'asas', 21121, '1'),
(4, 'Inglourious Basterds', 'asd@asd', NULL, '$2y$10$IwU38BeH3dSgQK.4p7fYCOJwbmJvPgxQDOpxctneObHULjUf/qRZu', NULL, '2022-12-05 05:28:57', '2022-12-05 05:28:57', 'asd', 12, '1'),
(5, 'heyyy', 'hello@hey', NULL, '$2y$10$bZ.eYDFcgZmIyMDuJObXjuKCBN4ylo9hWhNckw72omTlVeyoihdf2', NULL, '2022-12-28 05:53:41', '2022-12-28 05:53:41', 'hello', 123, 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
