-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 14, 2024 at 06:18 PM
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
-- Database: `cabin_prod`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amenities` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `amenities`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Breakfast', 20000, '2024-06-14 08:49:04', '2024-06-14 08:49:04'),
(2, 'Extra Bed', 100000, '2024-06-14 08:49:04', '2024-06-14 08:49:04'),
(3, 'Extra Person', 50000, '2024-06-14 08:49:04', '2024-06-14 08:49:04');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_branch_id` int(11) NOT NULL,
  `customer_title` enum('Mr','Mrs') NOT NULL,
  `customer_identity_type` enum('KTP','SIM','Lainnya') NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_photo_url` varchar(255) NOT NULL,
  `customer_identity_photo_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `hotel_branch_id`, `customer_title`, `customer_identity_type`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `customer_photo_url`, `customer_identity_photo_url`, `created_at`, `updated_at`) VALUES
(1, 2, 'Mr', 'KTP', 'Wisnu Febri Ramadhan', 'wisnufebriramadhan@gmail.com', '085742960911', 'KTP', 'img/customer/customer_photos/666c6c59d11d0.jpg', 'img/customer/identity_photos/666c6c59d9c66.png', '2024-06-14 09:17:04', '2024-06-14 09:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `customers_tmp`
--

CREATE TABLE `customers_tmp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_identity_type` enum('KTP','SIM','Lainnya') DEFAULT NULL,
  `customer_title` enum('Mr','Mrs') DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_phone` varchar(255) DEFAULT NULL,
  `customer_address` varchar(255) DEFAULT NULL,
  `customer_photo_url` varchar(255) DEFAULT NULL,
  `customer_identity_photo_url` varchar(255) DEFAULT NULL,
  `hotel_branch_id` int(11) DEFAULT NULL,
  `customer_tmp_id` int(11) DEFAULT NULL,
  `reservation_method_id` int(11) DEFAULT NULL,
  `booking_number` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers_tmp`
--

INSERT INTO `customers_tmp` (`id`, `customer_identity_type`, `customer_title`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `customer_photo_url`, `customer_identity_photo_url`, `hotel_branch_id`, `customer_tmp_id`, `reservation_method_id`, `booking_number`, `created_at`, `updated_at`) VALUES
(1, 'KTP', 'Mr', 'Wisnu Febri Ramadhan', 'wisnufebriramadhan@gmail.com', '085742960911', 'Jakarta', 'img/customer/customer_photos/666c68337c487.jpg', 'img/customer/identity_photos/666c683384b89.png', 1, NULL, 1, NULL, '2024-06-14 08:56:35', '2024-06-14 08:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `down_payments`
--

CREATE TABLE `down_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `hotel_branch_id` bigint(20) UNSIGNED NOT NULL,
  `down_payment` int(11) NOT NULL,
  `status` enum('New','Claimed') NOT NULL,
  `claim_date` timestamp NULL DEFAULT NULL,
  `payment_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `hotel_branches`
--

CREATE TABLE `hotel_branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_name` varchar(255) NOT NULL,
  `hotel_code` varchar(255) NOT NULL,
  `hotel_address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_branches`
--

INSERT INTO `hotel_branches` (`id`, `hotel_name`, `hotel_code`, `hotel_address`, `created_at`, `updated_at`) VALUES
(1, 'The Cabin Tugu', 'TGU', 'Jl. Margo Utomo No.9, Gowongan, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55232', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(2, 'The Cabin Sutomo', 'STM', 'Jl. Doktor Sutomo No.2, Baciro, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55211', '2024-06-14 08:49:08', '2024-06-14 08:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_rooms`
--

CREATE TABLE `hotel_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_rooms`
--

INSERT INTO `hotel_rooms` (`id`, `room_type`, `created_at`, `updated_at`) VALUES
(1, 'Small Shared', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(2, 'Small Private', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(3, 'Big Shared', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(4, 'Big Private', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(5, 'Family Shared', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(6, 'Family Private', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(7, 'Family Shared Bathroom', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(8, 'Family Private Bathroom', '2024-06-14 08:49:08', '2024-06-14 08:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_rooms_reserved`
--

CREATE TABLE `hotel_rooms_reserved` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reservation_id` bigint(20) UNSIGNED NOT NULL,
  `hotel_room_number_id` bigint(20) UNSIGNED NOT NULL,
  `total_guest` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_rooms_reserved`
--

INSERT INTO `hotel_rooms_reserved` (`id`, `reservation_id`, `hotel_room_number_id`, `total_guest`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 55, 2, 420000, '2024-06-14 09:17:04', '2024-06-14 09:17:04'),
(2, 1, 25, 2, 200000, '2024-06-14 09:17:04', '2024-06-14 09:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_rooms_reserved_tmp`
--

CREATE TABLE `hotel_rooms_reserved_tmp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reservation_tmp_id` bigint(20) UNSIGNED NOT NULL,
  `hotel_room_number_id` bigint(20) UNSIGNED NOT NULL,
  `total_guest` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_room_numbers`
--

CREATE TABLE `hotel_room_numbers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_branch_id` bigint(20) UNSIGNED NOT NULL,
  `hotel_room_id` bigint(20) UNSIGNED NOT NULL,
  `room_number` varchar(255) NOT NULL,
  `room_status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_room_numbers`
--

INSERT INTO `hotel_room_numbers` (`id`, `hotel_branch_id`, `hotel_room_id`, `room_number`, `room_status_id`, `created_at`, `updated_at`) VALUES
(13, 1, 3, '0205', 3, NULL, NULL),
(14, 1, 3, '0202', 3, NULL, NULL),
(15, 1, 3, '0206', 3, NULL, NULL),
(16, 1, 3, '0207', 3, NULL, NULL),
(17, 1, 3, '0209', 3, NULL, NULL),
(18, 1, 3, '0208', 3, NULL, NULL),
(19, 1, 4, '0102', 3, NULL, NULL),
(20, 1, 4, '0103', 3, NULL, NULL),
(21, 1, 4, '0105', 3, NULL, NULL),
(22, 1, 4, '0203', 3, NULL, NULL),
(23, 1, 7, '0201', 3, NULL, NULL),
(24, 1, 8, '0101', 3, NULL, NULL),
(25, 2, 1, '0302', 3, NULL, NULL),
(26, 2, 2, '0102', 3, NULL, NULL),
(27, 2, 2, '0212', 3, NULL, NULL),
(28, 2, 2, '0213', 3, NULL, NULL),
(29, 2, 2, '0215', 3, NULL, NULL),
(30, 2, 2, '0217', 3, NULL, NULL),
(31, 2, 2, '0218', 3, NULL, NULL),
(32, 2, 3, '0201', 3, NULL, NULL),
(33, 2, 3, '0203', 3, NULL, NULL),
(34, 2, 3, '0304', 3, NULL, NULL),
(35, 2, 4, '0101', 3, NULL, NULL),
(36, 2, 4, '0112', 3, NULL, NULL),
(37, 2, 4, '0123', 3, NULL, NULL),
(38, 2, 4, '0205', 3, NULL, NULL),
(39, 2, 4, '0207', 3, NULL, NULL),
(40, 2, 4, '0211', 3, NULL, NULL),
(41, 2, 4, '0216', 3, NULL, NULL),
(42, 2, 4, '0221', 3, NULL, NULL),
(43, 2, 4, '0222', 3, NULL, NULL),
(44, 2, 4, '0305', 3, NULL, NULL),
(45, 2, 4, '0307', 3, NULL, NULL),
(46, 2, 4, '0308', 3, NULL, NULL),
(47, 2, 5, '0204', 3, NULL, NULL),
(48, 2, 5, '0303', 3, NULL, NULL),
(49, 2, 5, '0309', 3, NULL, NULL),
(50, 2, 5, '0310', 3, NULL, NULL),
(51, 2, 6, '0202', 3, NULL, NULL),
(52, 2, 6, '0206', 3, NULL, NULL),
(53, 2, 6, '0208', 3, NULL, NULL),
(54, 2, 6, '0223', 3, NULL, NULL),
(55, 2, 6, '0306', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_room_rates`
--

CREATE TABLE `hotel_room_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_branch_id` bigint(20) UNSIGNED NOT NULL,
  `hotel_room_id` bigint(20) UNSIGNED NOT NULL,
  `room_rates` int(11) NOT NULL,
  `room_duration` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_room_rates`
--

INSERT INTO `hotel_room_rates` (`id`, `hotel_branch_id`, `hotel_room_id`, `room_rates`, `room_duration`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 135000, 8, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(2, 1, 3, 143000, 9, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(3, 1, 3, 150000, 10, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(4, 1, 3, 158000, 11, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(5, 1, 3, 165000, 12, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(6, 1, 3, 173000, 13, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(7, 1, 3, 182000, 14, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(8, 1, 3, 190000, 15, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(9, 1, 3, 198000, 16, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(10, 1, 3, 206000, 17, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(11, 1, 3, 215000, 18, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(12, 1, 3, 225000, 19, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(13, 1, 3, 230000, 20, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(14, 1, 3, 238000, 21, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(15, 1, 3, 245000, 22, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(16, 1, 3, 253000, 23, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(17, 1, 3, 260000, 24, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(18, 1, 4, 185000, 8, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(19, 1, 4, 193000, 9, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(20, 1, 4, 200000, 10, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(21, 1, 4, 208000, 11, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(22, 1, 4, 216000, 12, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(23, 1, 4, 224000, 13, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(24, 1, 4, 232000, 14, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(25, 1, 4, 240000, 15, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(26, 1, 4, 248000, 16, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(27, 1, 4, 256000, 17, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(28, 1, 4, 264000, 18, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(29, 1, 4, 272000, 19, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(30, 1, 4, 280000, 20, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(31, 1, 4, 288000, 21, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(32, 1, 4, 296000, 22, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(33, 1, 4, 305000, 23, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(34, 1, 4, 310000, 24, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(35, 1, 7, 240000, 8, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(36, 1, 7, 248000, 9, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(37, 1, 7, 256000, 10, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(38, 1, 7, 264000, 11, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(39, 1, 7, 272000, 12, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(40, 1, 7, 280000, 13, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(41, 1, 7, 288000, 14, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(42, 1, 7, 296000, 15, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(43, 1, 7, 304000, 16, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(44, 1, 7, 312000, 17, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(45, 1, 7, 320000, 18, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(46, 1, 7, 328000, 19, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(47, 1, 7, 336000, 20, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(48, 1, 7, 345000, 21, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(49, 1, 7, 353000, 22, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(50, 1, 7, 362000, 23, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(51, 1, 7, 370000, 24, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(52, 1, 8, 255000, 8, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(53, 1, 8, 263000, 9, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(54, 1, 8, 270000, 10, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(55, 1, 8, 278000, 11, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(56, 1, 8, 285000, 12, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(57, 1, 8, 295000, 13, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(58, 1, 8, 303000, 14, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(59, 1, 8, 310000, 15, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(60, 1, 8, 318000, 16, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(61, 1, 8, 325000, 17, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(62, 1, 8, 333000, 18, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(63, 1, 8, 340000, 19, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(64, 1, 8, 348000, 20, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(65, 1, 8, 356000, 21, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(66, 1, 8, 364000, 22, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(67, 1, 8, 372000, 23, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(68, 1, 8, 380000, 24, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(69, 2, 1, 130000, 8, NULL, NULL),
(70, 2, 1, 133000, 9, NULL, NULL),
(71, 2, 1, 136000, 10, NULL, NULL),
(72, 2, 1, 139000, 11, NULL, NULL),
(73, 2, 1, 142000, 12, NULL, NULL),
(74, 2, 1, 145000, 13, NULL, NULL),
(75, 2, 1, 148000, 14, NULL, NULL),
(76, 2, 1, 151000, 15, NULL, NULL),
(77, 2, 1, 154000, 16, NULL, NULL),
(78, 2, 1, 157000, 17, NULL, NULL),
(79, 2, 1, 160000, 18, NULL, NULL),
(80, 2, 1, 163000, 19, NULL, NULL),
(81, 2, 1, 167000, 20, NULL, NULL),
(82, 2, 1, 171000, 21, NULL, NULL),
(83, 2, 1, 175000, 22, NULL, NULL),
(84, 2, 1, 179000, 23, NULL, NULL),
(85, 2, 1, 200000, 24, NULL, NULL),
(86, 2, 2, 160000, 8, NULL, NULL),
(87, 2, 2, 165000, 9, NULL, NULL),
(88, 2, 2, 168000, 10, NULL, NULL),
(89, 2, 2, 173000, 11, NULL, NULL),
(90, 2, 2, 178000, 12, NULL, NULL),
(91, 2, 2, 183000, 13, NULL, NULL),
(92, 2, 2, 188000, 14, NULL, NULL),
(93, 2, 2, 195000, 15, NULL, NULL),
(94, 2, 2, 200000, 16, NULL, NULL),
(95, 2, 2, 210000, 17, NULL, NULL),
(96, 2, 2, 220000, 18, NULL, NULL),
(97, 2, 2, 230000, 19, NULL, NULL),
(98, 2, 2, 240000, 20, NULL, NULL),
(99, 2, 2, 250000, 21, NULL, NULL),
(100, 2, 2, 260000, 22, NULL, NULL),
(101, 2, 2, 270000, 23, NULL, NULL),
(102, 2, 2, 280000, 24, NULL, NULL),
(103, 2, 3, 170000, 8, NULL, NULL),
(104, 2, 3, 175000, 9, NULL, NULL),
(105, 2, 3, 180000, 10, NULL, NULL),
(106, 2, 3, 187000, 11, NULL, NULL),
(107, 2, 3, 195000, 12, NULL, NULL),
(108, 2, 3, 203000, 13, NULL, NULL),
(109, 2, 3, 210000, 14, NULL, NULL),
(110, 2, 3, 218000, 15, NULL, NULL),
(111, 2, 3, 225000, 16, NULL, NULL),
(112, 2, 3, 233000, 17, NULL, NULL),
(113, 2, 3, 240000, 18, NULL, NULL),
(114, 2, 3, 254000, 19, NULL, NULL),
(115, 2, 3, 260000, 20, NULL, NULL),
(116, 2, 3, 268000, 21, NULL, NULL),
(117, 2, 3, 270000, 22, NULL, NULL),
(118, 2, 3, 280000, 23, NULL, NULL),
(119, 2, 3, 290000, 24, NULL, NULL),
(120, 2, 4, 195000, 8, NULL, NULL),
(121, 2, 4, 205000, 9, NULL, NULL),
(122, 2, 4, 212000, 10, NULL, NULL),
(123, 2, 4, 219000, 11, NULL, NULL),
(124, 2, 4, 226000, 12, NULL, NULL),
(125, 2, 4, 233000, 13, NULL, NULL),
(126, 2, 4, 240000, 14, NULL, NULL),
(127, 2, 4, 247000, 15, NULL, NULL),
(128, 2, 4, 254000, 16, NULL, NULL),
(129, 2, 4, 268000, 17, NULL, NULL),
(130, 2, 4, 275000, 18, NULL, NULL),
(131, 2, 4, 285000, 19, NULL, NULL),
(132, 2, 4, 290000, 20, NULL, NULL),
(133, 2, 4, 300000, 21, NULL, NULL),
(134, 2, 4, 310000, 22, NULL, NULL),
(135, 2, 4, 320000, 23, NULL, NULL),
(136, 2, 4, 330000, 24, NULL, NULL),
(137, 2, 5, 210000, 8, NULL, NULL),
(138, 2, 5, 219000, 9, NULL, NULL),
(139, 2, 5, 228000, 10, NULL, NULL),
(140, 2, 5, 237000, 11, NULL, NULL),
(141, 2, 5, 246000, 12, NULL, NULL),
(142, 2, 5, 255000, 13, NULL, NULL),
(143, 2, 5, 264000, 14, NULL, NULL),
(144, 2, 5, 273000, 15, NULL, NULL),
(145, 2, 5, 280000, 16, NULL, NULL),
(146, 2, 5, 290000, 17, NULL, NULL),
(147, 2, 5, 300000, 18, NULL, NULL),
(148, 2, 5, 310000, 19, NULL, NULL),
(149, 2, 5, 320000, 20, NULL, NULL),
(150, 2, 5, 330000, 21, NULL, NULL),
(151, 2, 5, 340000, 22, NULL, NULL),
(152, 2, 5, 350000, 23, NULL, NULL),
(153, 2, 5, 360000, 24, NULL, NULL),
(154, 2, 6, 235000, 8, NULL, NULL),
(155, 2, 6, 245000, 9, NULL, NULL),
(156, 2, 6, 255000, 10, NULL, NULL),
(157, 2, 6, 265000, 11, NULL, NULL),
(158, 2, 6, 280000, 12, NULL, NULL),
(159, 2, 6, 290000, 13, NULL, NULL),
(160, 2, 6, 300000, 14, NULL, NULL),
(161, 2, 6, 310000, 15, NULL, NULL),
(162, 2, 6, 320000, 16, NULL, NULL),
(163, 2, 6, 330000, 17, NULL, NULL),
(164, 2, 6, 342000, 18, NULL, NULL),
(165, 2, 6, 354000, 19, NULL, NULL),
(166, 2, 6, 366000, 20, NULL, NULL),
(167, 2, 6, 378000, 21, NULL, NULL),
(168, 2, 6, 400000, 22, NULL, NULL),
(169, 2, 6, 410000, 23, NULL, NULL),
(170, 2, 6, 420000, 24, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_room_status`
--

CREATE TABLE `hotel_room_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotel_room_status`
--

INSERT INTO `hotel_room_status` (`id`, `room_status`, `created_at`, `updated_at`) VALUES
(1, 'PMR (Sedang dibersihkan sesuai request tamu)', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(2, 'Vacant Dirty', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(3, 'Vacant Clean', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(4, 'Occupied Clean', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(5, 'Occupied By Guest', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(6, 'Out Of Order', '2024-06-14 08:49:08', '2024-06-14 08:49:08');

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
(1, '2014_09_12_000000_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_28_070748_create_payments_table', 1),
(7, '2023_08_28_070849_create_amenities_table', 1),
(8, '2023_08_28_152243_create_reservation_methods_table', 1),
(9, '2023_08_29_060043_create_hotel_branches_table', 1),
(10, '2023_08_29_060114_create_pic_hotel_branches_table', 1),
(11, '2023_08_29_060150_create_hotel_room_status_table', 1),
(12, '2023_08_29_060153_create_hotel_rooms_table', 1),
(13, '2023_08_29_060160_create_hotel_room_numbers', 1),
(14, '2023_08_29_060411_create_payment_methods_table', 1),
(15, '2023_08_29_060539_create_customers_table', 1),
(16, '2023_08_29_061126_create_reservations_table', 1),
(17, '2023_08_29_070728_create_hotel_rooms_reserved_table', 1),
(18, '2023_08_29_070758_create_payment_amenities', 1),
(19, '2023_08_29_070758_create_payment_details_table', 1),
(20, '2023_09_05_215314_create_costumers_tmp_table', 1),
(21, '2023_09_05_215348_create_reservations_tmp_table', 1),
(22, '2023_09_05_215608_create_hotel_rooms_reserved_tmp_table', 1),
(23, '2023_09_05_215736_create_payment_amenities_tmp_table', 1),
(24, '2023_09_13_102838_create_hotel_room_rates_table', 1),
(25, '2023_09_18_133803_create_down_payments_table', 1),
(26, '2024_04_05_065028_create_payment_paids_table', 1);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_code` varchar(255) NOT NULL,
  `discount` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `total_price_amenities` int(11) DEFAULT NULL,
  `total_payment` int(11) DEFAULT NULL,
  `change` int(11) DEFAULT NULL,
  `payment_image` varchar(255) DEFAULT NULL,
  `payment_check` enum('Valid','Invalid','Oncheck') DEFAULT NULL,
  `payment_status` enum('Lunas','DP Langsung Lunas','DP','DP 2','Lunas + DP 1','Lunas + DP 2','DP Tidak Dilunasi','DP Tidak Dilunasi + Refund','DP Tidak Dilunasi + Reschedule') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_code`, `discount`, `total_price`, `total_price_amenities`, `total_payment`, `change`, `payment_image`, `payment_check`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 'INV-STM-20240614-0001', 0, 620000, 0, 620000, 0, NULL, 'Oncheck', 'Lunas', '2024-06-14 09:17:04', '2024-06-14 09:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `payment_amenities`
--

CREATE TABLE `payment_amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_branch_id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `amenities_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_amenities_tmp`
--

CREATE TABLE `payment_amenities_tmp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_branch_id` bigint(20) UNSIGNED NOT NULL,
  `customer_tmp_id` bigint(20) UNSIGNED NOT NULL,
  `amenities_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `breakfast_status` enum('None','Include','Exclude') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method_id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `payment_detail_value` int(11) NOT NULL,
  `payment_detail_status` enum('Lunas','DP Langsung Lunas','DP','DP 2','Lunas + DP 1','Lunas + DP 2','DP Tidak Dilunasi','DP Tidak Dilunasi + Refund','DP Tidak Dilunasi + Reschedule') DEFAULT NULL,
  `change` int(11) DEFAULT NULL,
  `card_number` varchar(255) DEFAULT NULL,
  `reference_number` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `payment_id`, `payment_method_id`, `bank_name`, `payment_detail_value`, `payment_detail_status`, `change`, `card_number`, `reference_number`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 620000, 'Lunas', 0, NULL, NULL, '2024-06-14 09:17:04', '2024-06-14 09:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `payment_method`, `created_at`, `updated_at`) VALUES
(1, 'Cash', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(2, 'Credit Card BCA', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(3, 'Credit Card BRI', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(4, 'Credit Card BNI', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(5, 'Credit Card Mandiri', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(6, 'Credit Card CIMB', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(7, 'Debit Card BCA', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(8, 'Debit Card BRI', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(9, 'Debit Card BNI', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(10, 'Debit Card Mandiri', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(11, 'Debit Card CIMB', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(12, 'Transfer BCA', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(13, 'Transfer BRI', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(14, 'Transfer BNI', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(15, 'Transfer Mandiri', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(16, 'Transfer CIMB', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(17, 'QRIS BCA', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(18, 'QRIS BRI', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(19, 'QRIS BNI', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(20, 'QRIS Mandiri', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(21, 'QRIS CIMB', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(22, 'OTA Traveloka', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(23, 'OTA PegiPegi', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(24, 'OTA Booking.com', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(25, 'OTA Agoda', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(26, 'OTA Tiket.com', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(27, 'OTA MG Holiday', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(28, 'OTA Air BNB', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(29, 'OTA Lainnya', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(30, 'VA BCA', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(31, 'VA BRI', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(32, 'VA BNI', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(33, 'VA Mandiri', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(34, 'VA CIMB', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(35, 'VA BSI', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(36, 'VA Danamon', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(37, 'VA Permata', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(38, 'VA by Doku', '2024-06-14 08:49:08', '2024-06-14 08:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `payment_paids`
--

CREATE TABLE `payment_paids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method_id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `payment_paid_value` int(11) NOT NULL,
  `change` int(11) DEFAULT NULL,
  `card_number` varchar(255) DEFAULT NULL,
  `reference_number` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `pic_hotel_branches`
--

CREATE TABLE `pic_hotel_branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_branch_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pic_hotel_branches`
--

INSERT INTO `pic_hotel_branches` (`id`, `hotel_branch_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(2, 1, 3, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(3, 1, 4, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(4, 1, 5, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(5, 1, 6, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(6, 1, 7, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(7, 1, 8, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(8, 2, 9, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(9, 2, 10, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(10, 2, 11, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(11, 2, 12, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(12, 2, 13, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(13, 2, 14, '2024-06-14 08:49:08', '2024-06-14 08:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_branch_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `reservation_method_id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `reservation_code` varchar(255) NOT NULL,
  `booking_number` varchar(255) DEFAULT NULL,
  `reservation_start_date` datetime NOT NULL,
  `reservation_end_date` datetime NOT NULL,
  `reservation_day_category` enum('Weekday','Weekend','High Season','Middle Day') NOT NULL,
  `status` enum('Booking','Checkin','Checkout','Canceled') NOT NULL,
  `breakfast_status` enum('None','Include','Exclude') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `hotel_branch_id`, `user_id`, `customer_id`, `reservation_method_id`, `payment_id`, `reservation_code`, `booking_number`, `reservation_start_date`, `reservation_end_date`, `reservation_day_category`, `status`, `breakfast_status`, `created_at`, `updated_at`) VALUES
(1, 2, 14, 1, 1, 1, 'RSV-STM-20240614-0001', NULL, '2024-06-15 23:14:00', '2024-06-16 23:14:00', 'Weekday', 'Booking', 'None', '2024-06-14 09:17:04', '2024-06-14 09:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `reservations_tmp`
--

CREATE TABLE `reservations_tmp` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_branch_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `customer_tmp_id` bigint(20) UNSIGNED NOT NULL,
  `reservation_start_date` datetime NOT NULL,
  `reservation_end_date` datetime NOT NULL,
  `reservation_day_category` enum('Weekday','Weekend','High Season') NOT NULL,
  `status` enum('Booking','Checkin','Checkout','Canceled') NOT NULL,
  `breakfast_status` enum('None','Include','Exclude') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_methods`
--

CREATE TABLE `reservation_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reservation_method` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation_methods`
--

INSERT INTO `reservation_methods` (`id`, `reservation_method`, `created_at`, `updated_at`) VALUES
(1, 'Walk In', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(2, 'Reservation', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(3, 'Agoda', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(4, 'Traveloka', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(5, 'Booking.com', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(6, 'Tiket.com', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(7, 'PegiPegi', '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(8, 'OTA Lainnya', '2024-06-14 08:49:08', '2024-06-14 08:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '2024-06-14 08:49:04', '2024-06-14 08:49:04'),
(2, 'admin', '2024-06-14 08:49:04', '2024-06-14 08:49:04'),
(3, 'financeHO', '2024-06-14 08:49:04', '2024-06-14 08:49:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'superadmin', 'superadmin@gmail.com', NULL, '$2y$12$jjEaFPXiiWdNIo2SphJ.Z.YkMO/9LTGiev35Qzm93qGGyx37ZFfbi', NULL, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(2, 2, 'admin', 'admin@gmail.com', NULL, '$2y$12$VG2nLeBiGSz3pDOaLfLSPOOozlshk/3J3Wy/Csim4.Y7KO2nhj926', NULL, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(3, 2, 'Front Office an Duta', 'duta.tugu@cabin.com', NULL, '$2y$12$yStzapaoAXhy/JIP4Qc2zucqzsxjZTItt.jhj241IFTgXJ8tkW8ym', NULL, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(4, 2, 'Front Office an Indra K', 'indrak.tugu@cabin.com', NULL, '$2y$12$DTIYaLWGRxMzRyx2aI497.R7vsApd3FZUUZfweuBm7v82qzvMidkK', NULL, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(5, 2, 'Front Office an Indra H', 'indrah.tugu@cabin.com', NULL, '$2y$12$o0Ha1reJMJIQMvSRwf5XcefezyrqqSF80WoVMo3w9QXjoUAUtzgFq', NULL, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(6, 2, 'Front Office an Nada', 'nada.tugu@cabin.com', NULL, '$2y$12$HhAGewHwf84TjTBce4E6ue8Txra1JTzxRU2wwxEawdEX3plbNJm1K', NULL, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(7, 2, 'Front Office an Wahyu', 'wahyu.tugu@cabin.com', NULL, '$2y$12$CzlJbyUIbmPB.OzHXTjv3u6jS6V5Fp1mpGMGcw22ms2OqXbZjlCPy', NULL, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(8, 2, 'Front Office an Rangga', 'rangga.tugu@cabin.com', NULL, '$2y$12$ARXY4C2t968B8DviCsZfj.jQOLXrv4XH9jjg1ql7SN/GcIL4IaNW.', NULL, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(9, 2, 'admin.sutomo', 'admin.sutomo@cabin.com', NULL, '$2y$12$tW4xYIghKWyJIqUKwUAEseyBjSnLK65mX0amImAoa.XX4QGYBegeu', NULL, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(10, 2, 'Front Office an Delvira', 'delvira.sutomo@cabin.com', NULL, '$2y$12$fP7Gpx200ofjNAdLP.6Af.TN5cJpCXLqoXPf7Au1FvjTyYGnqjUc2', NULL, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(11, 2, 'Front Office an Fatika', 'fatika.sutomo@cabin.com', NULL, '$2y$12$3kHE151c9e7wikDkXHnmS.tPKoiIF2ceapYpgsl30/8sUsGy6JSXq', NULL, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(12, 2, 'Front Office an Praptono', 'praptono.sutomo@cabin.com', NULL, '$2y$12$C4LM2cQEegE2exa7f/z7Se7m8cFC03vUm35iKkrNOzyhOOt3PwVl6', NULL, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(13, 2, 'Front Office an Dusin', 'dusin.sutomo@cabin.com', NULL, '$2y$12$40Ak5GkGRQ/izi/uTV3nEuL62cdYQOOxSh/UT/p0BNd0A3OvINvy2', NULL, '2024-06-14 08:49:08', '2024-06-14 08:49:08'),
(14, 2, 'Front Office an Cantika', 'cantika.sutomo@cabin.com', NULL, '$2y$12$GxZw8N/d4F7bhKblXPnNwu3MKeca0vjzSsSN8vKk0CbsfXvX6vdXq', NULL, '2024-06-14 08:49:08', '2024-06-14 08:49:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_tmp`
--
ALTER TABLE `customers_tmp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `down_payments`
--
ALTER TABLE `down_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `down_payments_payment_id_foreign` (`payment_id`),
  ADD KEY `down_payments_customer_id_foreign` (`customer_id`),
  ADD KEY `down_payments_hotel_branch_id_foreign` (`hotel_branch_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hotel_branches`
--
ALTER TABLE `hotel_branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_rooms_reserved`
--
ALTER TABLE `hotel_rooms_reserved`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_rooms_reserved_reservation_id_foreign` (`reservation_id`),
  ADD KEY `hotel_rooms_reserved_hotel_room_number_id_foreign` (`hotel_room_number_id`);

--
-- Indexes for table `hotel_rooms_reserved_tmp`
--
ALTER TABLE `hotel_rooms_reserved_tmp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_rooms_reserved_tmp_reservation_tmp_id_foreign` (`reservation_tmp_id`),
  ADD KEY `hotel_rooms_reserved_tmp_hotel_room_number_id_foreign` (`hotel_room_number_id`);

--
-- Indexes for table `hotel_room_numbers`
--
ALTER TABLE `hotel_room_numbers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_room_numbers_hotel_branch_id_foreign` (`hotel_branch_id`),
  ADD KEY `hotel_room_numbers_hotel_room_id_foreign` (`hotel_room_id`),
  ADD KEY `hotel_room_numbers_room_status_id_foreign` (`room_status_id`);

--
-- Indexes for table `hotel_room_rates`
--
ALTER TABLE `hotel_room_rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_room_rates_hotel_branch_id_foreign` (`hotel_branch_id`),
  ADD KEY `hotel_room_rates_hotel_room_id_foreign` (`hotel_room_id`);

--
-- Indexes for table `hotel_room_status`
--
ALTER TABLE `hotel_room_status`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_amenities`
--
ALTER TABLE `payment_amenities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_amenities_hotel_branch_id_foreign` (`hotel_branch_id`),
  ADD KEY `payment_amenities_payment_id_foreign` (`payment_id`),
  ADD KEY `payment_amenities_amenities_id_foreign` (`amenities_id`);

--
-- Indexes for table `payment_amenities_tmp`
--
ALTER TABLE `payment_amenities_tmp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_amenities_tmp_hotel_branch_id_foreign` (`hotel_branch_id`),
  ADD KEY `payment_amenities_tmp_customer_tmp_id_foreign` (`customer_tmp_id`),
  ADD KEY `payment_amenities_tmp_amenities_id_foreign` (`amenities_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_details_payment_id_foreign` (`payment_id`),
  ADD KEY `payment_details_payment_method_id_foreign` (`payment_method_id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_paids`
--
ALTER TABLE `payment_paids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_paids_payment_id_foreign` (`payment_id`),
  ADD KEY `payment_paids_payment_method_id_foreign` (`payment_method_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pic_hotel_branches`
--
ALTER TABLE `pic_hotel_branches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pic_hotel_branches_hotel_branch_id_foreign` (`hotel_branch_id`),
  ADD KEY `pic_hotel_branches_user_id_foreign` (`user_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_hotel_branch_id_foreign` (`hotel_branch_id`),
  ADD KEY `reservations_user_id_foreign` (`user_id`),
  ADD KEY `reservations_customer_id_foreign` (`customer_id`),
  ADD KEY `reservations_reservation_method_id_foreign` (`reservation_method_id`),
  ADD KEY `reservations_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `reservations_tmp`
--
ALTER TABLE `reservations_tmp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_tmp_hotel_branch_id_foreign` (`hotel_branch_id`),
  ADD KEY `reservations_tmp_user_id_foreign` (`user_id`),
  ADD KEY `reservations_tmp_customer_tmp_id_foreign` (`customer_tmp_id`);

--
-- Indexes for table `reservation_methods`
--
ALTER TABLE `reservation_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers_tmp`
--
ALTER TABLE `customers_tmp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `down_payments`
--
ALTER TABLE `down_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_branches`
--
ALTER TABLE `hotel_branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hotel_rooms_reserved`
--
ALTER TABLE `hotel_rooms_reserved`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel_rooms_reserved_tmp`
--
ALTER TABLE `hotel_rooms_reserved_tmp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel_room_numbers`
--
ALTER TABLE `hotel_room_numbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `hotel_room_rates`
--
ALTER TABLE `hotel_room_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `hotel_room_status`
--
ALTER TABLE `hotel_room_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_amenities`
--
ALTER TABLE `payment_amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_amenities_tmp`
--
ALTER TABLE `payment_amenities_tmp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `payment_paids`
--
ALTER TABLE `payment_paids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pic_hotel_branches`
--
ALTER TABLE `pic_hotel_branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservations_tmp`
--
ALTER TABLE `reservations_tmp`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation_methods`
--
ALTER TABLE `reservation_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `down_payments`
--
ALTER TABLE `down_payments`
  ADD CONSTRAINT `down_payments_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `down_payments_hotel_branch_id_foreign` FOREIGN KEY (`hotel_branch_id`) REFERENCES `hotel_branches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `down_payments_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`);

--
-- Constraints for table `hotel_rooms_reserved`
--
ALTER TABLE `hotel_rooms_reserved`
  ADD CONSTRAINT `hotel_rooms_reserved_hotel_room_number_id_foreign` FOREIGN KEY (`hotel_room_number_id`) REFERENCES `hotel_room_numbers` (`id`),
  ADD CONSTRAINT `hotel_rooms_reserved_reservation_id_foreign` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotel_rooms_reserved_tmp`
--
ALTER TABLE `hotel_rooms_reserved_tmp`
  ADD CONSTRAINT `hotel_rooms_reserved_tmp_hotel_room_number_id_foreign` FOREIGN KEY (`hotel_room_number_id`) REFERENCES `hotel_room_numbers` (`id`),
  ADD CONSTRAINT `hotel_rooms_reserved_tmp_reservation_tmp_id_foreign` FOREIGN KEY (`reservation_tmp_id`) REFERENCES `reservations_tmp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hotel_room_numbers`
--
ALTER TABLE `hotel_room_numbers`
  ADD CONSTRAINT `hotel_room_numbers_hotel_branch_id_foreign` FOREIGN KEY (`hotel_branch_id`) REFERENCES `hotel_branches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hotel_room_numbers_hotel_room_id_foreign` FOREIGN KEY (`hotel_room_id`) REFERENCES `hotel_rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hotel_room_numbers_room_status_id_foreign` FOREIGN KEY (`room_status_id`) REFERENCES `hotel_room_status` (`id`);

--
-- Constraints for table `hotel_room_rates`
--
ALTER TABLE `hotel_room_rates`
  ADD CONSTRAINT `hotel_room_rates_hotel_branch_id_foreign` FOREIGN KEY (`hotel_branch_id`) REFERENCES `hotel_branches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hotel_room_rates_hotel_room_id_foreign` FOREIGN KEY (`hotel_room_id`) REFERENCES `hotel_rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_amenities`
--
ALTER TABLE `payment_amenities`
  ADD CONSTRAINT `payment_amenities_amenities_id_foreign` FOREIGN KEY (`amenities_id`) REFERENCES `amenities` (`id`),
  ADD CONSTRAINT `payment_amenities_hotel_branch_id_foreign` FOREIGN KEY (`hotel_branch_id`) REFERENCES `hotel_branches` (`id`),
  ADD CONSTRAINT `payment_amenities_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`);

--
-- Constraints for table `payment_amenities_tmp`
--
ALTER TABLE `payment_amenities_tmp`
  ADD CONSTRAINT `payment_amenities_tmp_amenities_id_foreign` FOREIGN KEY (`amenities_id`) REFERENCES `amenities` (`id`),
  ADD CONSTRAINT `payment_amenities_tmp_customer_tmp_id_foreign` FOREIGN KEY (`customer_tmp_id`) REFERENCES `customers_tmp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_amenities_tmp_hotel_branch_id_foreign` FOREIGN KEY (`hotel_branch_id`) REFERENCES `hotel_branches` (`id`);

--
-- Constraints for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD CONSTRAINT `payment_details_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`),
  ADD CONSTRAINT `payment_details_payment_method_id_foreign` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods` (`id`);

--
-- Constraints for table `payment_paids`
--
ALTER TABLE `payment_paids`
  ADD CONSTRAINT `payment_paids_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`),
  ADD CONSTRAINT `payment_paids_payment_method_id_foreign` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods` (`id`);

--
-- Constraints for table `pic_hotel_branches`
--
ALTER TABLE `pic_hotel_branches`
  ADD CONSTRAINT `pic_hotel_branches_hotel_branch_id_foreign` FOREIGN KEY (`hotel_branch_id`) REFERENCES `hotel_branches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pic_hotel_branches_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_hotel_branch_id_foreign` FOREIGN KEY (`hotel_branch_id`) REFERENCES `hotel_branches` (`id`),
  ADD CONSTRAINT `reservations_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_reservation_method_id_foreign` FOREIGN KEY (`reservation_method_id`) REFERENCES `reservation_methods` (`id`),
  ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reservations_tmp`
--
ALTER TABLE `reservations_tmp`
  ADD CONSTRAINT `reservations_tmp_customer_tmp_id_foreign` FOREIGN KEY (`customer_tmp_id`) REFERENCES `customers_tmp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_tmp_hotel_branch_id_foreign` FOREIGN KEY (`hotel_branch_id`) REFERENCES `hotel_branches` (`id`),
  ADD CONSTRAINT `reservations_tmp_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
