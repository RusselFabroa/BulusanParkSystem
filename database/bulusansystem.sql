-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 07:45 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bulusansystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `verification_code`, `is_verified`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jayvee', 'jayveeolla2000@gmail.com', '2022-06-14 12:02:37', '$2y$10$zzaTgpuBNBy571yPTT6gJeXZqq5./NRYlj15aFpPxeunE/zUclZXu', NULL, 0, NULL, NULL, NULL),
(2, 'Russel F', 'fabroa.russel246@gmail.com', NULL, '$2y$10$nPcIsi10rHn21CUHftIoCOtPRU8AfkeYI5KPWgQEcSoApb9/F2WBe', NULL, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `animals_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `name`, `description`, `animals_image`, `created_at`, `updated_at`) VALUES
(1, 'monkey', ',mhkjhjbhjb', '1655830963.jpg', NULL, '2022-06-21 09:02:43'),
(2, 'Dingo', 'The dingo, like the domestic dog, is a subspecies of gray wolf (although some consider it to be a species in its own right). Dingoes live in Australia, where they are the largest land predators.', '1655815989.jpg', NULL, NULL),
(3, 'Elephant', 'There are three species of elephant. From largest to smallest they are the African bush elephant, the Asian elephant, and the African forest elephant.', '1655816087.jpg', NULL, NULL),
(4, 'Philippine Eagle', 'The Philippine eagle (Pithecophaga jefferyi), also known as the monkey-eating eagle or great Philippine eagle, is a critically endangered species of eagle of the family Accipitridae which is endemic to forests in the Philippines. It has brown and white-colored plumage, a shaggy crest, and generally measures 86 to 102 cm (2.82 to 3.35 ft) in length and weighs 4.04 to 8.0 kg (8.9 to 17.6 lb)', '1655816327.jpg', NULL, NULL),
(5, 'Parrots', 'Parrots, also known as psittacines, are birds of the roughly 398 species in 92 genera comprising the order Psittaciformes, found mostly in tropical and subtropical regions. The order is subdivided into three superfamilies: the Psittacoidea, the Cacatuoidea, and the Strigopoidea.', '1655831071.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cottages`
--

CREATE TABLE `cottages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `availability` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `cottage_image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cottages`
--

INSERT INTO `cottages` (`id`, `name`, `description`, `availability`, `price`, `cottage_image`, `created_at`, `updated_at`) VALUES
(1, 'Cottages 1', 'Good for 5 person. Food allowed', 'available', 300, '1655270958.jpg', NULL, '2022-06-14 21:29:18'),
(3, 'Cottages 2', 'sfsdsadsadasdsadasdasdasd', 'available', 250, '1655271095.jpg', NULL, '2022-06-14 21:31:35'),
(4, 'Cottages 3', 'lsakdl;skda;skdals;jdkuasljgfashb jkashfasgd kjsdhfashf asjkdnjkasd', 'available', 200, '1655271128.jpg', NULL, '2022-06-14 21:32:08'),
(5, 'Cottage 4', 'dsfhbdsf sdmfbh djsfhusidyfie dsfhhjdfs', 'available', 400, '1655271165.jpg', NULL, '2022-06-14 21:32:45'),
(7, 'ahhsa', '2121', 'available', 1, '1654439808.jpg', NULL, NULL),
(8, 'name', '1', 'available', 1, '1654439819.jpg', NULL, NULL),
(9, 'name', '1', 'available', 1, '1654439830.jpg', NULL, NULL),
(11, 'sfdsfsdf', 'dfgdfgdf', 'notavailable', 345, '1655271602.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'ffsfs', '2022-06-02 00:00:00', '2022-06-03 00:00:00', '2022-06-14 07:16:12', '2022-06-14 07:16:12'),
(2, 'sadasd', '2022-06-08 00:00:00', '2022-06-11 00:00:00', '2022-06-15 00:13:58', '2022-06-15 00:13:58'),
(3, 'Chay Birthday', '2022-06-15 00:00:00', '2022-06-18 00:00:00', '2022-06-15 00:14:48', '2022-06-15 00:14:48');

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
-- Table structure for table `functionhalls`
--

CREATE TABLE `functionhalls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `functionhall_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `functionhalls`
--

INSERT INTO `functionhalls` (`id`, `name`, `description`, `status`, `price`, `functionhall_image`, `created_at`, `updated_at`) VALUES
(1, 'Function Hall 1', 'Good for whole day event', 'available', 2000, '1655272849.jpg', NULL, '2022-06-14 22:00:49'),
(2, 'FHall 6', 'sdasdasd', 'available', 4353, '1655273137.jpg', NULL, '2022-06-14 22:05:37'),
(4, 'Function Hall 4', '12 hours event', 'available', 1500, '1655272819.jpg', NULL, '2022-06-14 22:00:19');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2022_04_25_072722_create_cottages_table', 2),
(9, '2022_05_24_044708_create_treehouse_table', 2),
(10, '2022_06_05_021540_create_reserves_table', 3),
(11, '2022_06_06_114904_create_reservetreehouses_table', 4),
(12, '2022_06_07_114322_add_column_table_reserves', 5),
(13, '2022_06_07_115824_add_column_table_reservetreehouse', 6),
(14, '2022_06_05_132234_create_functionhalls_table', 7),
(15, '2022_06_05_155459_create_pavillionhalls_table', 7),
(16, '2022_06_06_075327_create_animals_table', 7),
(17, '2022_06_11_101445_add_new_another_column_at_table_reserves', 8),
(18, '2022_06_11_102606_add_new_another_column_at_table_reservetreehouses', 9),
(19, '2022_06_11_103431_create_reservefunctionhall_table', 10),
(20, '2022_06_11_104828_create_reservepavillion_table', 11),
(21, '2022_06_09_071128_create_events_table', 12),
(22, '2022_06_10_051247_create_sliders_table', 12),
(23, '2022_06_11_142735_create_admins_table', 12),
(24, '2022_06_13_044718_add_role_to_users_table', 12),
(25, '2022_06_23_172309_create_books_table', 13),
(26, '2022_06_24_111351_create_problems_table', 13);

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
-- Table structure for table `pavillionhalls`
--

CREATE TABLE `pavillionhalls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `pavillionhall_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pavillionhalls`
--

INSERT INTO `pavillionhalls` (`id`, `name`, `description`, `status`, `price`, `pavillionhall_image`, `created_at`, `updated_at`) VALUES
(1, 'Pavillion Hall 1', 'Sample Description', 'available', 3000, '1655272900.jpg', NULL, '2022-06-14 22:01:40'),
(2, 'Pavillion Hall 2', 'Sample Description Pavillion', 'available', 3000, '1655272950.jpg', NULL, '2022-06-14 22:02:30'),
(3, 'Pavillion3', 'PavillionPavillion1', 'available', 2134, '1655273037.jpg', NULL, '2022-06-14 22:03:57'),
(4, 'Pavillion3', 'Pavillion', 'available', 4564, '1655898534.jpg', NULL, '2022-06-22 03:48:54');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `problem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`id`, `created_at`, `updated_at`, `users_id`, `users_number`, `users_name`, `problem`, `status`, `note`) VALUES
(7, '2022-06-24 05:51:17', '2022-06-24 05:51:17', '3', '09309695287', 'Chay', 'Lost Item', 'unresolved', 'Lost Umbrella color red'),
(9, '2022-06-24 10:29:03', '2022-06-24 10:29:03', '3', '09309695287', 'Chay', 'Lost Item', 'unresolved', 'Ewan bagagaaaa'),
(11, '2022-06-24 10:33:05', '2022-06-24 10:33:39', '3', '09309695287', 'Chay', 'Lost Item', 'resolved', 'I lost my wallet, color blue'),
(12, '2022-06-25 06:31:27', '2022-06-25 06:31:27', '3', '09309695287', 'Chay', 'Lost Item', 'unresolved', 'Bag na malaki');

-- --------------------------------------------------------

--
-- Table structure for table `reservefunctionhall`
--

CREATE TABLE `reservefunctionhall` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `functionhalls_id` bigint(20) UNSIGNED NOT NULL,
  `reserve_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobilenumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservefunctionhall`
--

INSERT INTO `reservefunctionhall` (`id`, `user_id`, `functionhalls_id`, `reserve_date`, `end_date`, `status`, `amount`, `mobilenumber`, `address`, `note`, `created_at`, `updated_at`) VALUES
(2, 3, 4, '2022-06-24', NULL, 'Accept', '1500', '09776576567', 'Carmine St 12', 'asdasdsadasdasdas', '2022-06-22 03:40:38', '2022-06-22 03:40:38'),
(3, 3, 4, '2022-06-27', '2022-06-29', 'New', '1500', '09309695287', 'Carmine St 12', 'tryyyyy', '2022-06-25 09:26:25', '2022-06-25 09:26:25'),
(4, 3, 1, '2022-06-27', '2022-06-28', 'New', '2000', '09309695287', 'Pola, Oriental Mindoro', 'eyyyy', '2022-06-25 09:30:18', '2022-06-25 09:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `reservepavillion`
--

CREATE TABLE `reservepavillion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pavillionhalls_id` bigint(20) UNSIGNED NOT NULL,
  `reserve_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobilenumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservepavillion`
--

INSERT INTO `reservepavillion` (`id`, `user_id`, `pavillionhalls_id`, `reserve_date`, `end_date`, `status`, `amount`, `mobilenumber`, `address`, `note`, `created_at`, `updated_at`) VALUES
(3, 3, 3, '2022-06-24', NULL, 'Accept', '2134', '876543345', 'Carmine St 12', 'dfsgdfgdfgdf', '2022-06-22 03:49:46', '2022-06-22 03:49:46'),
(4, 3, 3, '2022-06-30', NULL, 'New', '2134', '09309695287', 'Carmine St 12', 'Try lang', '2022-06-24 10:58:28', '2022-06-24 10:58:28'),
(5, 3, 2, '2022-06-28', NULL, 'New', '3000', '09309695287', 'Carmine St 12', 'eyyyyyy', '2022-06-25 09:38:17', '2022-06-25 09:38:17');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cottage_id` bigint(20) UNSIGNED DEFAULT NULL,
  `reserve_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobilenumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`id`, `user_id`, `cottage_id`, `reserve_date`, `end_date`, `status`, `note`, `address`, `mobilenumber`, `amount`, `created_at`, `updated_at`) VALUES
(29, 1, 3, '2022-06-28', NULL, 'Accept', NULL, NULL, NULL, '3', '2022-07-07 03:55:41', '2022-06-07 03:55:41'),
(30, 1, 4, '2022-06-09', NULL, 'Accept', NULL, NULL, NULL, '2', '2022-06-07 03:56:04', '2022-06-07 03:56:04'),
(31, 1, 3, '2022-06-29', NULL, 'New', NULL, NULL, NULL, '3', '2022-06-07 04:43:12', '2022-06-07 04:43:12'),
(32, 1, 3, '2022-06-24', NULL, 'New', NULL, NULL, NULL, '3', '2022-06-07 04:43:18', '2022-06-07 04:43:18'),
(33, 1, 3, '2022-06-30', NULL, 'New', NULL, NULL, NULL, '3', '2022-06-11 02:08:11', '2022-06-11 02:08:11'),
(34, 1, 3, '2022-06-07', NULL, 'New', NULL, NULL, NULL, '3', '2022-06-11 02:09:21', '2022-06-11 02:09:21'),
(35, 1, 3, '2022-06-18', NULL, 'New', NULL, NULL, NULL, '3', '2022-06-11 02:09:58', '2022-06-11 02:09:58'),
(39, 3, 3, '2022-06-16', NULL, 'New', 'We\'re 5 person', 'masipit', '121312423', '250', '2022-06-14 22:20:37', '2022-06-14 22:20:37'),
(40, 3, 5, '2022-06-20', NULL, 'Accept', 'kjhiugyuyuft', 'Masipit', '09308766576', '400', '2022-06-14 23:44:21', '2022-06-14 23:44:21'),
(41, 3, 4, '2022-06-17', NULL, 'Accept', 'sadsad', 'masipit', '98123332', '200', '2022-06-14 23:59:29', '2022-06-14 23:59:29'),
(42, 3, 1, '2022-06-22', NULL, 'New', 'fsadsadsadasdsad', 'masipit', '4653534', '300', '2022-06-15 21:45:48', '2022-06-15 21:45:48'),
(43, 3, 1, '2022-06-24', NULL, 'New', 'Ewan try lang po', 'Pola, Oriental Mindoro', '2134567543', '300', '2022-06-15 23:01:22', '2022-06-15 23:01:22'),
(44, 3, 3, '2022-06-23', NULL, 'Accept', 'Adsadasdasd', 'Pola, Oriental Mindoro', '0912131233', '250', '2022-06-21 23:59:29', '2022-06-21 23:59:29'),
(45, 3, 1, '2022-06-30', NULL, 'New', 'Good 5 sadasdasds asdasdasd', 'Carmine St 12', '0954654234', '300', '2022-06-22 03:34:03', '2022-06-22 03:34:03'),
(46, 3, 3, '2022-06-25', NULL, 'New', 'asdasdasd', 'Pola, Oriental Mindoro', '09309695287', '250', '2022-06-23 04:33:33', '2022-06-23 04:33:33'),
(47, 3, 5, '2022-06-24', '2022-06-28', 'New', 'asfghfbngfb', 'Pola, Oriental Mindoro', '09309695287', '400', '2022-06-23 07:35:07', '2022-06-23 07:35:07'),
(48, 3, 4, '2022-06-27', '2022-06-28', 'New', 'try lang itooooooooo', 'Pola', '09309695287', '200', '2022-06-25 08:54:30', '2022-06-25 08:54:30'),
(49, 3, 4, '2022-06-28', '2022-06-29', 'New', 'adasdasd', 'Masipit', '09309695287', '200', '2022-06-25 08:56:06', '2022-06-25 08:56:06');

-- --------------------------------------------------------

--
-- Table structure for table `reservetreehouses`
--

CREATE TABLE `reservetreehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `treehouse_id` bigint(20) UNSIGNED NOT NULL,
  `reserve_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobilenumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservetreehouses`
--

INSERT INTO `reservetreehouses` (`id`, `user_id`, `treehouse_id`, `reserve_date`, `end_date`, `status`, `note`, `address`, `mobilenumber`, `amount`, `created_at`, `updated_at`) VALUES
(5, 3, 2, '2022-06-21', NULL, 'Cancelled', 'We are 4 persons', 'Masipit', '09309695287', '600', '2022-06-14 22:07:31', '2022-06-14 22:07:31'),
(6, 3, 2, '2022-06-21', '2022-06-30', 'New', 'sadasdasd', 'masipit', '09309695287', '600', '2022-06-25 09:34:54', '2022-06-25 09:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `heading`, `description`, `link`, `link_name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Calapan Nature Park', 'jhjasd hbhassad hgasgdhsad', 'jyujyj', 'tyjtjtrjtr', '1655862736.jpg', 0, '2022-06-14 07:17:39', '2022-06-21 17:52:16'),
(3, 'Bird\'s Viewing', 'Sample Description  sada asfrfsefdsf', '#', 'asdsad', '1655275696.jpg', 0, '2022-06-14 22:48:16', '2022-06-14 22:48:16'),
(4, 'Beautiful Cottages', 'Sample Description das  sdafsadgfsdfsfsa', '#', 'Reserve', '1655275720.jpg', 0, '2022-06-14 22:48:40', '2022-06-14 22:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `treehouse`
--

CREATE TABLE `treehouse` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `treehouse_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `treehouse`
--

INSERT INTO `treehouse` (`id`, `name`, `description`, `status`, `price`, `treehouse_image`, `created_at`, `updated_at`) VALUES
(1, 'Tree House 1', 'lkjasdasjd kjsahdjgasdh', 'available', 500, '1655272574.jpg', NULL, '2022-06-14 21:56:14'),
(2, 'Tree House 2', 'asddasd kjhuky ghdrdd', 'available', 600, '1655272621.png', NULL, '2022-06-14 21:57:01'),
(3, 'Tree House 3', 'sample', 'available', 300, '1655272650.jpg', NULL, '2022-06-14 21:57:30'),
(4, 'treehouse 4', 'asdasdasdasd', 'available', 500, '1655272767.jpg', NULL, '2022-06-14 21:59:27');

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
  `verification_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `verification_code`, `is_verified`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Russel Fabroa', 'fabroa.russel246@gmail.com', NULL, 'russelfabroa', '3242', 0, NULL, NULL, NULL),
(2, 'OLLA, JAYVEE A.', 'jayveeolla2000@gmail.com', NULL, '$2y$10$zzaTgpuBNBy571yPTT6gJeXZqq5./NRYlj15aFpPxeunE/zUclZXu', '00a2d8af6115d5c74970754b38fa241151eaa374', 1, NULL, '2022-05-31 06:05:56', '2022-05-31 06:06:54'),
(3, 'Chay', 'dapitochiarramae16@gmail.com', NULL, '$2y$10$UZlnkrsQ2M5zQE6uCJjJ6.YSopp04fNKdxg2YaAgxySgk94cbNWoC', '497e48679a2eb03a031e6ba2c2ebce095ea7df41', 1, NULL, '2022-06-14 06:43:11', '2022-06-14 06:46:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cottages`
--
ALTER TABLE `cottages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `functionhalls`
--
ALTER TABLE `functionhalls`
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
-- Indexes for table `pavillionhalls`
--
ALTER TABLE `pavillionhalls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservefunctionhall`
--
ALTER TABLE `reservefunctionhall`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservefunctionhall_user_id_foreign` (`user_id`),
  ADD KEY `reservefunctionhall_functionhalls_id_foreign` (`functionhalls_id`);

--
-- Indexes for table `reservepavillion`
--
ALTER TABLE `reservepavillion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservepavillion_user_id_foreign` (`user_id`),
  ADD KEY `reservepavillion_pavillionhalls_id_foreign` (`pavillionhalls_id`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reserves_user_id_foreign` (`user_id`),
  ADD KEY `reserves_cottage_id_foreign` (`cottage_id`);

--
-- Indexes for table `reservetreehouses`
--
ALTER TABLE `reservetreehouses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservetreehouses_user_id_foreign` (`user_id`),
  ADD KEY `reservetreehouses_treehouse_id_foreign` (`treehouse_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treehouse`
--
ALTER TABLE `treehouse`
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
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cottages`
--
ALTER TABLE `cottages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `functionhalls`
--
ALTER TABLE `functionhalls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pavillionhalls`
--
ALTER TABLE `pavillionhalls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reservefunctionhall`
--
ALTER TABLE `reservefunctionhall`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservepavillion`
--
ALTER TABLE `reservepavillion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reserves`
--
ALTER TABLE `reserves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `reservetreehouses`
--
ALTER TABLE `reservetreehouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `treehouse`
--
ALTER TABLE `treehouse`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservefunctionhall`
--
ALTER TABLE `reservefunctionhall`
  ADD CONSTRAINT `reservefunctionhall_functionhalls_id_foreign` FOREIGN KEY (`functionhalls_id`) REFERENCES `functionhalls` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservefunctionhall_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservepavillion`
--
ALTER TABLE `reservepavillion`
  ADD CONSTRAINT `reservepavillion_pavillionhalls_id_foreign` FOREIGN KEY (`pavillionhalls_id`) REFERENCES `pavillionhalls` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservepavillion_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `reserves_cottage_id_foreign` FOREIGN KEY (`cottage_id`) REFERENCES `cottages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reserves_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservetreehouses`
--
ALTER TABLE `reservetreehouses`
  ADD CONSTRAINT `reservetreehouses_treehouse_id_foreign` FOREIGN KEY (`treehouse_id`) REFERENCES `treehouse` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservetreehouses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
