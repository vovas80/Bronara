-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Сер 28 2023 р., 09:55
-- Версія сервера: 10.3.20-MariaDB
-- Версія PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `digiants_bronara`
--

-- --------------------------------------------------------

--
-- Структура таблиці `accommodation`
--

DROP TABLE IF EXISTS `accommodation`;
CREATE TABLE `accommodation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `accommodation`
--

INSERT INTO `accommodation` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Standard Room', '2022-10-12 14:01:06', '2022-10-12 14:01:06'),
(2, 'Comfort Room', '2022-10-12 14:01:18', '2022-10-12 14:01:18');

-- --------------------------------------------------------

--
-- Структура таблиці `applications`
--

DROP TABLE IF EXISTS `applications`;
CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `id_tourists` int(11) NOT NULL,
  `id_cities` int(11) NOT NULL,
  `id_countries` int(11) NOT NULL,
  `data_from` date NOT NULL,
  `data_to` date NOT NULL,
  `check_data` int(11) NOT NULL,
  `id_nigth` int(11) NOT NULL,
  `check_nigth` int(11) NOT NULL,
  `id_stars` int(11) NOT NULL,
  `check_hotel` int(11) NOT NULL,
  `id_food` int(11) NOT NULL,
  `check_food` int(11) NOT NULL,
  `price_from` decimal(15,2) NOT NULL,
  `price_to` decimal(15,2) NOT NULL,
  `check_price` int(11) NOT NULL,
  `id_packages` int(11) NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete` int(11) NOT NULL,
  `show` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cities_all` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `applications`
--

INSERT INTO `applications` (`id`, `date`, `id_tourists`, `id_cities`, `id_countries`, `data_from`, `data_to`, `check_data`, `id_nigth`, `check_nigth`, `id_stars`, `check_hotel`, `id_food`, `check_food`, `price_from`, `price_to`, `check_price`, `id_packages`, `info`, `delete`, `show`, `created_at`, `updated_at`, `cities_all`) VALUES
(51, '2022-10-13 13:03:47', 1, 1, 1, '2022-10-13', '2022-10-25', 1, 2, 0, 2, 1, 2, 0, '100.00', '36990.00', 0, 2, 'Спортзал', 0, 0, '2022-10-13 10:03:47', '2022-10-13 11:55:01', 0),
(52, '2022-10-13 23:25:00', 2, 1, 1, '2023-01-04', '2023-01-12', 1, 1, 0, 2, 1, 0, 0, '0.00', '15000.00', 0, 1, 'text', 0, 0, '2022-10-13 11:20:37', '2022-10-28 15:12:28', 1),
(53, '2022-10-13 14:21:45', 3, 3, 1, '2022-10-27', '2022-10-31', 0, 2, 0, 0, 0, 0, 0, '0.00', '0.00', 0, 0, '0', 1, 0, '2022-10-13 11:21:45', '2022-10-14 09:10:04', 0),
(54, '2022-10-13 23:41:37', 2, 6, 1, '2022-12-15', '2022-12-21', 0, 1, 0, 0, 0, 0, 0, '0.00', '20000.00', 0, 1, '', 0, 0, '2022-10-13 20:41:37', '2022-10-28 15:12:08', 0),
(55, '2022-10-13 23:43:00', 3, 2, 1, '2022-11-17', '2022-11-23', 1, 3, 0, 0, 0, 0, 0, '0.00', '4000.00', 0, 0, '', 0, 0, '2022-10-13 20:43:50', '2022-10-28 14:23:37', 0),
(56, '2022-10-13 21:00:00', 2, 4, 1, '2023-02-02', '2023-02-08', 0, 2, 0, 0, 0, 0, 0, '0.00', '0.00', 0, 0, '0', 0, 0, '2022-10-13 20:43:59', '2022-10-28 15:11:54', 0),
(57, '2022-10-13 23:47:00', 3, 1, 1, '2022-10-28', '2022-11-10', 1, 2, 0, 2, 1, 2, 0, '100.00', '56990.00', 0, 2, 'Спортзал', 1, 1, '2022-10-13 20:44:34', '2022-10-13 21:13:33', 0),
(58, '2022-10-14 00:13:00', 3, 3, 1, '2022-10-15', '2022-10-26', 0, 1, 0, 0, 0, 0, 0, '0.00', '0.00', 0, 0, '', 0, 1, '2022-10-13 21:13:47', '2022-10-14 08:55:35', 0),
(59, '2022-10-14 12:10:30', 3, 1, 1, '2022-11-26', '2022-11-30', 0, 1, 0, 0, 0, 0, 0, '0.00', '140000.00', 0, 0, '', 0, 0, '2022-10-14 09:10:30', '2022-10-28 12:49:39', 0),
(60, '2022-10-17 23:17:29', 1, 3, 1, '2022-11-25', '2022-11-30', 0, 1, 1, 4, 1, 1, 0, '0.00', '3000.00', 1, 2, '', 1, 0, '2022-10-17 20:17:29', '2022-10-28 12:44:28', 0),
(61, '2022-10-17 23:22:06', 1, 3, 1, '2022-11-16', '2022-11-23', 0, 3, 1, 0, 0, 1, 1, '0.00', '1200.00', 1, 2, '', 0, 0, '2022-10-17 20:22:06', '2022-10-28 12:44:17', 0),
(62, '2022-11-15 12:44:00', 7, 10, 2, '2022-11-15', '2022-11-16', 0, 2, 0, 0, 0, 0, 0, '0.00', '0.00', 0, 0, '', 0, 0, '2022-11-15 12:44:00', '2022-11-15 12:44:00', 0),
(63, '2022-11-15 12:44:27', 7, 10, 2, '2022-11-17', '2022-11-23', 0, 1, 0, 0, 0, 0, 0, '0.00', '0.00', 0, 0, '', 1, 0, '2022-11-15 12:44:27', '2022-11-15 12:53:31', 0);

-- --------------------------------------------------------

--
-- Структура таблиці `applications_cities`
--

DROP TABLE IF EXISTS `applications_cities`;
CREATE TABLE `applications_cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_applications` int(11) NOT NULL,
  `id_cities` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `applications_cities`
--

INSERT INTO `applications_cities` (`id`, `id_applications`, `id_cities`) VALUES
(24, 53, 3),
(25, 53, 4),
(26, 53, 5),
(27, 53, 6),
(32, 51, 3),
(33, 51, 4),
(59, 57, 4),
(78, 60, 1),
(79, 60, 3),
(80, 60, 5),
(81, 61, 3),
(82, 61, 4),
(83, 59, 1),
(84, 55, 3),
(87, 56, 3),
(88, 56, 6),
(89, 54, 3),
(90, 54, 7),
(91, 52, 2),
(92, 52, 4);

-- --------------------------------------------------------

--
-- Структура таблиці `applications_tours`
--

DROP TABLE IF EXISTS `applications_tours`;
CREATE TABLE `applications_tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_applications` int(11) NOT NULL,
  `id_tours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `applications_tours`
--

INSERT INTO `applications_tours` (`id`, `id_applications`, `id_tours`) VALUES
(9, 53, 1),
(10, 53, 2),
(14, 51, 2),
(33, 57, 2),
(34, 58, 2),
(53, 60, 11),
(54, 60, 13),
(55, 61, 11),
(56, 61, 13),
(57, 59, 12),
(58, 59, 13),
(59, 55, 2),
(62, 56, 11),
(63, 56, 13),
(64, 54, 2),
(65, 52, 1),
(66, 52, 2);

-- --------------------------------------------------------

--
-- Структура таблиці `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tours` int(11) NOT NULL,
  `id_tourists` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date` datetime NOT NULL,
  `id_booking_status` int(11) NOT NULL,
  `ticket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `voucher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insurance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `treaty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_visa` int(11) NOT NULL,
  `innings` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `remainder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `booking`
--

INSERT INTO `booking` (`id`, `id_tours`, `id_tourists`, `created_at`, `updated_at`, `date`, `id_booking_status`, `ticket`, `voucher`, `insurance`, `memo`, `treaty`, `id_visa`, `innings`, `payment`, `remainder`) VALUES
(9, 14, 1, '2022-11-11 13:36:09', '2022-11-12 05:07:57', '2022-11-11 15:36:09', 1, '/files/1/touragent/1668189561_Волос Д.pdf', '/files/1/touragent/1668189802_novogodnij-tur-v-egipet-luchshaya-cena-na-otel-copy-1 (15).pdf', '/files/1/touragent/1668189211_novogodnij-tur-v-egipet-luchshaya-cena-na-otel-copy-1 (15).pdf', '/files/1/touragent/1668189761_1668189339_Волос Д.pdf', '/files/1/touragent/1668186286_1653843503-landing2.png', 2, '14.12.2022', '19.08.2022', 'test'),
(10, 13, 1, '2022-11-11 13:36:53', '2022-11-12 05:07:47', '2022-11-11 15:36:53', 1, '', '/files/1/touragent/1668189854_1668188834_1668186839_novogodnij-tur-v-egipet-luchshaya-cena-na-otel-copy-1 (15).pdf', '', '', '', 2, NULL, '10.12.2022', ''),
(11, 13, 2, '2022-11-12 21:20:30', '2022-11-12 21:25:20', '2022-11-11 15:36:00', 1, '', '/files/1/touragent/1668189854_1668188834_1668186839_novogodnij-tur-v-egipet-luchshaya-cena-na-otel-copy-1 (15).pdf', '', '', '', 2, '', '10.12.2022', ''),
(12, 14, 3, '2022-11-12 21:24:03', '2022-11-12 21:29:53', '2022-11-11 15:36:09', 0, '', '/files/1/touragent/1668189802_novogodnij-tur-v-egipet-luchshaya-cena-na-otel-copy-1 (15).pdf', '', '/files/1/touragent/1668189761_1668189339_Волос Д.pdf', '/files/1/touragent/1668186286_1653843503-landing2.png', 3, '14.12.2022', '19.08.2022', 'test'),
(13, 16, 1, '2022-11-12 21:32:01', '2022-11-12 21:32:27', '2022-11-11 15:36:09', 0, '', '', '', '', '', 2, '', '', '');

-- --------------------------------------------------------

--
-- Структура таблиці `booking_status_ru`
--

DROP TABLE IF EXISTS `booking_status_ru`;
CREATE TABLE `booking_status_ru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `booking_status_ru`
--

INSERT INTO `booking_status_ru` (`id`, `title`, `created_at`, `updated_at`, `color`) VALUES
(1, 'Бронирование подтверждено', '2022-11-02 18:44:06', '2022-11-03 23:00:30', '#5FCE8C'),
(2, 'Получен отказ по бронированию', '2022-11-02 18:44:19', '2022-11-03 23:00:09', '#DA3732'),
(3, 'Запрос на бронирование', '2022-11-02 18:44:56', '2022-11-03 23:00:23', '#FFAB00');

-- --------------------------------------------------------

--
-- Структура таблиці `booking_status_uk`
--

DROP TABLE IF EXISTS `booking_status_uk`;
CREATE TABLE `booking_status_uk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `booking_status_uk`
--

INSERT INTO `booking_status_uk` (`id`, `title`, `created_at`, `updated_at`, `color`) VALUES
(1, 'Бронирование подтверждено', '2022-11-02 18:44:06', '2022-11-02 18:44:06', ''),
(2, 'Отказ по бронированию', '2022-11-02 18:44:19', '2022-11-02 18:44:19', ''),
(3, 'Отправлен запрос на бронирование', '2022-11-02 18:44:56', '2022-11-02 18:44:56', '');

-- --------------------------------------------------------

--
-- Структура таблиці `booking_tourist`
--

DROP TABLE IF EXISTS `booking_tourist`;
CREATE TABLE `booking_tourist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `second_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authority` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_citizenship` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `booking_tourist`
--

INSERT INTO `booking_tourist` (`id`, `second_name`, `first_name`, `third_name`, `date_of_birth`, `passport`, `valid`, `authority`, `created_at`, `updated_at`, `id_citizenship`, `id_booking`) VALUES
(12, 'Golovach', 'Marina', 'Ivanivna', '09.12.1994', 'ЕВ 12345678', '10.09.2030', '5676', '2022-11-11 13:36:09', '2022-11-11 13:36:09', 1, 9),
(13, 'Golovach', 'Olena', 'Ivanivna', '09.12.1994', 'ЕВ 12345673', '11.09.2030', '2343', '2022-11-11 13:36:09', '2022-11-11 13:36:09', 1, 9),
(14, 'Golovach', 'Marina', 'test', '12.09.2000', 'test', '12.09.2030', '2343', '2022-11-11 13:36:53', '2022-11-11 13:36:53', 2, 10),
(15, 'Golovach', 'Marina', 'test', '12.09.2000', 'test', '12.09.2030', '2343', '2022-11-12 21:20:30', '2022-11-12 21:20:30', 2, 11),
(16, 'Golovach', 'Marina', 'Ivanivna', '09.12.1994', 'ЕВ 12345678', '10.09.2030', '5676', '2022-11-12 21:24:03', '2022-11-12 21:24:03', 1, 12),
(17, 'Golovach', 'Olena', 'Ivanivna', '09.12.1994', 'ЕВ 12345673', '11.09.2030', '2343', '2022-11-12 21:24:03', '2022-11-12 21:24:03', 1, 12),
(18, 'Golovach', 'Marina', 'Ivanivna', '09.12.1994', 'ЕВ 12345678', '10.09.2030', '5676', '2022-11-12 21:32:01', '2022-11-12 21:32:01', 1, 13);

-- --------------------------------------------------------

--
-- Структура таблиці `characteristics_ru`
--

DROP TABLE IF EXISTS `characteristics_ru`;
CREATE TABLE `characteristics_ru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tours` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `characteristics_ru`
--

INSERT INTO `characteristics_ru` (`id`, `title`, `icon`, `id_tours`, `created_at`, `updated_at`) VALUES
(34, 'клубный отель', '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 11, '2022-10-26 17:08:22', '2022-10-26 17:08:22'),
(35, '1-я линия от моря', '/photos/1/toursinfo/sea-svgrepo-com1.svg', 11, '2022-10-26 17:08:22', '2022-10-26 17:08:22'),
(36, 'пляжный', '/photos/1/toursinfo/sunbed-beach-svgrepo-com 1.svg', 11, '2022-10-26 17:08:22', '2022-10-26 17:08:22'),
(37, 'клубный отель', '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 12, '2022-10-26 17:08:26', '2022-10-26 17:09:40'),
(38, '1-я линия от моря', '/photos/1/toursinfo/sea-svgrepo-com1.svg', 12, '2022-10-26 17:08:26', '2022-10-26 17:09:40'),
(39, 'пляжный', '/photos/1/toursinfo/sunbed-beach-svgrepo-com 1.svg', 12, '2022-10-26 17:08:26', '2022-10-26 17:09:40'),
(40, '1 линия', '/photos/1/toursinfo/sea-svgrepo-com1.svg', 13, '2022-10-26 17:12:31', '2022-10-26 17:12:31'),
(41, 'песок', '/photos/1/toursinfo/sunbed-beach-svgrepo-com 1.svg', 13, '2022-10-26 17:12:31', '2022-10-26 17:12:31'),
(42, '95 км', '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 13, '2022-10-26 17:12:31', '2022-10-26 17:12:31'),
(43, '1 линия copy', '/photos/1/toursinfo/sea-svgrepo-com1.svg', 14, '2022-10-28 15:32:28', '2022-10-28 15:32:28'),
(44, 'песок copy', '/photos/1/toursinfo/sunbed-beach-svgrepo-com 1.svg', 14, '2022-10-28 15:32:28', '2022-10-28 15:32:28'),
(45, '95 км copy', '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 14, '2022-10-28 15:32:28', '2022-10-28 15:32:28'),
(46, 'бассейн', '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 15, '2022-11-02 12:28:49', '2022-11-02 12:28:49'),
(47, 'трансфер', '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 15, '2022-11-02 12:28:49', '2022-11-02 12:28:49'),
(48, '1 линия', '/photos/1/toursinfo/sea-svgrepo-com1.svg', 16, '2022-11-12 21:30:24', '2022-11-12 21:31:11'),
(49, 'песок ', '/photos/1/toursinfo/sunbed-beach-svgrepo-com 1.svg', 16, '2022-11-12 21:30:24', '2022-11-12 21:31:11');

-- --------------------------------------------------------

--
-- Структура таблиці `characteristics_uk`
--

DROP TABLE IF EXISTS `characteristics_uk`;
CREATE TABLE `characteristics_uk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tours` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `characteristics_uk`
--

INSERT INTO `characteristics_uk` (`id`, `title`, `icon`, `id_tours`, `created_at`, `updated_at`) VALUES
(34, 'клубный отель', '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 11, '2022-10-26 17:08:22', '2022-10-26 17:08:22'),
(35, '1-я линия от моря', '/photos/1/toursinfo/sea-svgrepo-com1.svg', 11, '2022-10-26 17:08:22', '2022-10-26 17:08:22'),
(36, 'пляжный', '/photos/1/toursinfo/sunbed-beach-svgrepo-com 1.svg', 11, '2022-10-26 17:08:22', '2022-10-26 17:08:22'),
(40, '1 линия', '/photos/1/toursinfo/sea-svgrepo-com1.svg', 13, '2022-10-26 17:12:31', '2022-10-26 17:12:31'),
(41, 'песок', '/photos/1/toursinfo/sunbed-beach-svgrepo-com 1.svg', 13, '2022-10-26 17:12:31', '2022-10-26 17:12:31'),
(42, '95 км', '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 13, '2022-10-26 17:12:31', '2022-10-26 17:12:31'),
(46, 'бассейн', '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 15, '2022-11-02 12:28:49', '2022-11-02 12:28:49'),
(47, 'трансфер', '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 15, '2022-11-02 12:28:49', '2022-11-02 12:28:49'),
(88, 'клубный отель copy', '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 12, '2022-10-26 17:08:26', '2022-10-26 17:08:26'),
(89, '1-я линия от моря copy', '/photos/1/toursinfo/sea-svgrepo-com1.svg', 12, '2022-10-26 17:08:26', '2022-10-26 17:08:26'),
(90, 'пляжный copy', '/photos/1/toursinfo/sunbed-beach-svgrepo-com 1.svg', 12, '2022-10-26 17:08:26', '2022-10-26 17:08:26'),
(91, '1 линия copy', '/photos/1/toursinfo/sea-svgrepo-com1.svg', 14, '2022-10-28 15:32:28', '2022-10-28 15:32:28'),
(92, 'песок copy', '/photos/1/toursinfo/sunbed-beach-svgrepo-com 1.svg', 14, '2022-10-28 15:32:28', '2022-10-28 15:32:28'),
(93, '95 км copy', '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 14, '2022-10-28 15:32:28', '2022-10-28 15:32:28'),
(94, '1 линия copy copy', '/photos/1/toursinfo/sea-svgrepo-com1.svg', 16, '2022-11-12 21:30:24', '2022-11-12 21:30:24'),
(95, 'песок copy copy', '/photos/1/toursinfo/sunbed-beach-svgrepo-com 1.svg', 16, '2022-11-12 21:30:24', '2022-11-12 21:30:24'),
(96, '95 км copy copy', '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 16, '2022-11-12 21:30:24', '2022-11-12 21:30:24');

-- --------------------------------------------------------

--
-- Структура таблиці `child`
--

DROP TABLE IF EXISTS `child`;
CREATE TABLE `child` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `child`
--

INSERT INTO `child` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 0, '2022-10-12 13:55:23', '2022-10-12 13:55:23'),
(2, 1, '2022-10-12 13:55:27', '2022-10-12 13:55:27'),
(3, 2, '2022-10-12 13:55:30', '2022-10-12 13:55:30'),
(4, 3, '2022-10-12 13:55:33', '2022-10-12 13:55:33'),
(5, 4, '2022-10-12 13:55:36', '2022-10-12 13:55:36');

-- --------------------------------------------------------

--
-- Структура таблиці `cities_ru`
--

DROP TABLE IF EXISTS `cities_ru`;
CREATE TABLE `cities_ru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_countries` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `cities_ru`
--

INSERT INTO `cities_ru` (`id`, `title`, `id_countries`, `created_at`, `updated_at`) VALUES
(1, 'Анатолия', 1, '2022-10-12 13:13:15', '2022-10-12 13:13:15'),
(2, 'Белек', 1, '2022-10-12 13:13:15', '2022-10-12 13:13:15'),
(3, 'Бодрум', 1, '2022-10-12 13:13:15', '2022-10-12 13:13:15'),
(4, 'Гечек', 1, '2022-10-12 13:13:15', '2022-10-12 13:13:15'),
(5, 'Инжекум - Алания', 1, '2022-10-12 13:13:15', '2022-10-12 13:13:15'),
(6, 'Каппадокия', 1, '2022-10-12 13:13:15', '2022-10-12 13:13:15'),
(7, 'Кемер', 1, '2022-10-12 13:13:15', '2022-10-12 13:13:15'),
(9, 'Львов', 2, '2022-10-25 10:48:59', '2022-10-25 10:48:59'),
(10, 'Киев', 2, '2022-10-25 10:48:59', '2022-10-25 10:48:59'),
(11, 'Санторини', 3, '2022-11-02 12:20:42', '2022-11-02 12:20:42'),
(12, 'Афины', 3, '2022-11-02 12:20:42', '2022-11-02 12:20:42');

-- --------------------------------------------------------

--
-- Структура таблиці `cities_uk`
--

DROP TABLE IF EXISTS `cities_uk`;
CREATE TABLE `cities_uk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_countries` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `cities_uk`
--

INSERT INTO `cities_uk` (`id`, `title`, `id_countries`, `created_at`, `updated_at`) VALUES
(1, 'Анатолия', 1, '2022-10-12 13:13:15', '2022-10-12 13:13:15'),
(2, 'Белек', 1, '2022-10-12 13:13:15', '2022-10-12 13:13:15'),
(3, 'Бодрум', 1, '2022-10-12 13:13:15', '2022-10-12 13:13:15'),
(4, 'Гечек', 1, '2022-10-12 13:13:15', '2022-10-12 13:13:15'),
(5, 'Инжекум - Алания', 1, '2022-10-12 13:13:15', '2022-10-12 13:13:15'),
(6, 'Каппадокия', 1, '2022-10-12 13:13:15', '2022-10-12 13:13:15'),
(7, 'Кемер', 1, '2022-10-12 13:13:15', '2022-10-12 13:13:15'),
(8, 'Все курорти', 0, '2022-10-12 20:10:32', '2022-10-12 20:10:32'),
(9, 'Львов', 2, '2022-10-25 10:48:59', '2022-10-25 10:48:59'),
(10, 'Киев', 2, '2022-10-25 10:48:59', '2022-10-25 10:48:59'),
(11, 'Санторини', 3, '2022-11-02 12:20:42', '2022-11-02 12:20:42'),
(12, 'Афины', 3, '2022-11-02 12:20:42', '2022-11-02 12:20:42');

-- --------------------------------------------------------

--
-- Структура таблиці `citizenship_ru`
--

DROP TABLE IF EXISTS `citizenship_ru`;
CREATE TABLE `citizenship_ru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `citizenship_ru`
--

INSERT INTO `citizenship_ru` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Украина', '2022-11-02 23:58:20', '2022-11-02 23:58:20'),
(2, 'Польша', '2022-11-02 23:58:36', '2022-11-02 23:58:36');

-- --------------------------------------------------------

--
-- Структура таблиці `citizenship_uk`
--

DROP TABLE IF EXISTS `citizenship_uk`;
CREATE TABLE `citizenship_uk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `citizenship_uk`
--

INSERT INTO `citizenship_uk` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Украина', '2022-11-02 23:58:20', '2022-11-02 23:58:20'),
(2, 'Польша', '2022-11-02 23:58:36', '2022-11-02 23:58:36');

-- --------------------------------------------------------

--
-- Структура таблиці `countries_ru`
--

DROP TABLE IF EXISTS `countries_ru`;
CREATE TABLE `countries_ru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `countries_ru`
--

INSERT INTO `countries_ru` (`id`, `title`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Турция', '2022-10-12 13:13:15', '2022-11-02 14:41:51', 'turkey'),
(2, 'Украина', '2022-10-25 10:48:59', '2022-11-02 14:41:56', 'ukraine'),
(3, 'Греция', '2022-11-02 12:20:42', '2022-11-02 14:42:09', 'greece');

-- --------------------------------------------------------

--
-- Структура таблиці `countries_uk`
--

DROP TABLE IF EXISTS `countries_uk`;
CREATE TABLE `countries_uk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `countries_uk`
--

INSERT INTO `countries_uk` (`id`, `title`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Турция', '2022-10-12 13:13:15', '2022-10-12 13:13:15', ''),
(2, 'Украина', '2022-10-25 10:48:59', '2022-10-25 10:48:59', ''),
(3, 'Греция', '2022-11-02 12:20:42', '2022-11-02 12:20:42', '');

-- --------------------------------------------------------

--
-- Структура таблиці `dropdown`
--

DROP TABLE IF EXISTS `dropdown`;
CREATE TABLE `dropdown` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT 0,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `dropdown`
--

INSERT INTO `dropdown` (`id`, `title`, `sort`, `icon`) VALUES
(1, 'Страницы', 0, '/vendor/fastadminpanel/icons/1/6.svg'),
(2, 'Общая информация', 0, '/vendor/fastadminpanel/icons/1/7.svg'),
(3, 'Модальные формы', 0, '/vendor/fastadminpanel/icons/1/2.svg'),
(4, 'Настройки тура', 0, '/vendor/fastadminpanel/icons/1/4.svg');

-- --------------------------------------------------------

--
-- Структура таблиці `food_ru`
--

DROP TABLE IF EXISTS `food_ru`;
CREATE TABLE `food_ru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `food_ru`
--

INSERT INTO `food_ru` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'RO (Без питания)', '2022-10-12 14:00:33', '2022-10-12 14:00:33'),
(2, 'Завтрак включен', '2022-10-12 14:00:57', '2022-10-12 14:00:57');

-- --------------------------------------------------------

--
-- Структура таблиці `food_uk`
--

DROP TABLE IF EXISTS `food_uk`;
CREATE TABLE `food_uk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `food_uk`
--

INSERT INTO `food_uk` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'RO (Без питания)', '2022-10-12 14:00:33', '2022-10-12 14:00:33'),
(2, 'Завтрак включен', '2022-10-12 14:00:57', '2022-10-12 14:00:57');

-- --------------------------------------------------------

--
-- Структура таблиці `informations_ru`
--

DROP TABLE IF EXISTS `informations_ru`;
CREATE TABLE `informations_ru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tours` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `informations_ru`
--

INSERT INTO `informations_ru` (`id`, `icon`, `title`, `description`, `id_tours`, `created_at`, `updated_at`) VALUES
(21, '/photos/1/toursinfo/sunbed-beach-svgrepo-com 1.svg', 'Интернет:', 'Wi-Fi\nWi-Fi в номере\nWi-Fi в лобби', 11, '2022-10-26 17:08:22', '2022-10-26 17:08:22'),
(22, '/photos/1/toursinfo/sea-svgrepo-com1.svg', 'Удобства в номерах:', 'Кондиционер\nФен\nТелевизор\nТелефон\nДуш', 11, '2022-10-26 17:08:22', '2022-10-26 17:08:22'),
(23, '/photos/1/toursinfo/sunbed-beach-svgrepo-com 1.svg', 'Интернет:', 'Wi-Fi\nWi-Fi в номере\nWi-Fi в лобби', 12, '2022-10-26 17:08:26', '2022-10-26 17:09:40'),
(24, '/photos/1/toursinfo/sea-svgrepo-com1.svg', 'Удобства в номерах:', 'Кондиционер\nФен\nТелевизор\nТелефон\nДуш', 12, '2022-10-26 17:08:26', '2022-10-26 17:09:40'),
(25, '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 'Услуги для детей:', 'Детский бассейн', 13, '2022-10-26 17:12:31', '2022-10-26 17:12:31'),
(26, '/photos/1/toursinfo/sea-svgrepo-com1.svg', 'Здоровье и красота:', 'Вызов доктора\nВодные виды спорта', 13, '2022-10-26 17:12:31', '2022-10-26 17:12:31'),
(27, '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 'Услуги для детей: copy', 'Детский бассейн', 14, '2022-10-28 15:32:28', '2022-10-28 15:32:28'),
(28, '/photos/1/toursinfo/sea-svgrepo-com1.svg', 'Здоровье и красота: copy', 'Вызов доктора\nВодные виды спорта', 14, '2022-10-28 15:32:28', '2022-10-28 15:32:28'),
(29, '/photos/1/toursinfo/sea-svgrepo-com1.svg', 'Удобства', 'Бесплатный Wi-Fi\nТрансфер от/до аэропорта', 15, '2022-11-02 12:28:49', '2022-11-02 12:28:49'),
(30, '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 'Услуги для детей: copy copy', 'Детский бассейн', 16, '2022-11-12 21:30:24', '2022-11-12 21:30:24'),
(31, '/photos/1/toursinfo/sea-svgrepo-com1.svg', 'Здоровье и красота: copy copy', 'Вызов доктора\nВодные виды спорта', 16, '2022-11-12 21:30:24', '2022-11-12 21:30:24');

-- --------------------------------------------------------

--
-- Структура таблиці `informations_uk`
--

DROP TABLE IF EXISTS `informations_uk`;
CREATE TABLE `informations_uk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tours` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `informations_uk`
--

INSERT INTO `informations_uk` (`id`, `icon`, `title`, `description`, `id_tours`, `created_at`, `updated_at`) VALUES
(21, '/photos/1/toursinfo/sunbed-beach-svgrepo-com 1.svg', 'Интернет:', 'Wi-Fi\nWi-Fi в номере\nWi-Fi в лобби', 11, '2022-10-26 17:08:22', '2022-10-26 17:08:22'),
(22, '/photos/1/toursinfo/sea-svgrepo-com1.svg', 'Удобства в номерах:', 'Кондиционер\nФен\nТелевизор\nТелефон\nДуш', 11, '2022-10-26 17:08:22', '2022-10-26 17:08:22'),
(23, '/photos/1/toursinfo/sunbed-beach-svgrepo-com 1.svg', 'Интернет: copy', 'Wi-Fi\nWi-Fi в номере\nWi-Fi в лобби', 12, '2022-10-26 17:08:26', '2022-10-26 17:08:26'),
(24, '/photos/1/toursinfo/sea-svgrepo-com1.svg', 'Удобства в номерах: copy', 'Кондиционер\nФен\nТелевизор\nТелефон\nДуш', 12, '2022-10-26 17:08:26', '2022-10-26 17:08:26'),
(25, '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 'Услуги для детей:', 'Детский бассейн', 13, '2022-10-26 17:12:31', '2022-10-26 17:12:31'),
(26, '/photos/1/toursinfo/sea-svgrepo-com1.svg', 'Здоровье и красота:', 'Вызов доктора\nВодные виды спорта', 13, '2022-10-26 17:12:31', '2022-10-26 17:12:31'),
(27, '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 'Услуги для детей: copy', 'Детский бассейн', 14, '2022-10-28 15:32:28', '2022-10-28 15:32:28'),
(28, '/photos/1/toursinfo/sea-svgrepo-com1.svg', 'Здоровье и красота: copy', 'Вызов доктора\nВодные виды спорта', 14, '2022-10-28 15:32:28', '2022-10-28 15:32:28'),
(29, '/photos/1/toursinfo/sea-svgrepo-com1.svg', 'Удобства', 'Бесплатный Wi-Fi\nТрансфер от/до аэропорта', 15, '2022-11-02 12:28:49', '2022-11-02 12:28:49'),
(30, '/photos/1/toursinfo/flight-plane-svgrepo-com 2.svg', 'Услуги для детей: copy copy', 'Детский бассейн', 16, '2022-11-12 21:30:24', '2022-11-12 21:30:24'),
(31, '/photos/1/toursinfo/sea-svgrepo-com1.svg', 'Здоровье и красота: copy copy', 'Вызов доктора\nВодные виды спорта', 16, '2022-11-12 21:30:24', '2022-11-12 21:30:24');

-- --------------------------------------------------------

--
-- Структура таблиці `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_lang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `languages`
--

INSERT INTO `languages` (`id`, `tag`, `main_lang`) VALUES
(1, 'ru', 1),
(2, 'uk', 0);

-- --------------------------------------------------------

--
-- Структура таблиці `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fields` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_dev` int(11) NOT NULL,
  `multilanguage` int(11) NOT NULL,
  `is_soft_delete` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `menu`
--

INSERT INTO `menu` (`id`, `title`, `table_name`, `fields`, `is_dev`, `multilanguage`, `is_soft_delete`, `sort`, `parent`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Menu', 'menu', '[]', 1, 0, 0, 0, 0, '', '2022-04-21 15:37:01', '2022-04-21 15:37:01'),
(2, 'Roles', 'roles', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"title\",\"title\":\"Title\"}]', 1, 0, 0, 1, 0, '', '2022-04-21 15:37:01', '2022-04-21 15:37:01'),
(3, 'Users', 'users', '[{\"id\":0,\"lang\":0,\"required\":\"optional\",\"is_visible\":true,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"name\",\"title\":\"Name\"},{\"id\":1,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"roles\",\"title\":\"Role\",\"relationship_view_field\":\"title\"},{\"id\":2,\"lang\":0,\"required\":\"optional\",\"is_visible\":true,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"email\",\"title\":\"Email\"},{\"id\":3,\"lang\":0,\"required\":\"optional\",\"is_visible\":true,\"show_in_list\":\"no\",\"type\":\"password\",\"db_title\":\"password\",\"title\":\"Password\"}]', 1, 0, 0, 2, 0, NULL, '2022-04-21 15:37:01', '2022-10-14 07:50:40'),
(4, 'Стандартные страницы', 'standart', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"title\",\"title\":\"Заголовок\"},{\"id\":1,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"slug\",\"title\":\"Ссылка\"},{\"id\":2,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"no\",\"type\":\"ckeditor\",\"db_title\":\"content\",\"title\":\"Контент\"},{\"id\":3,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"no\",\"type\":\"text\",\"db_title\":\"meta_title\",\"title\":\"Meta Title\"},{\"id\":4,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"no\",\"db_title\":\"meta_desc\",\"type\":\"textarea\",\"title\":\"Meta Description\"},{\"id\":5,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"no\",\"db_title\":\"meta_key\",\"type\":\"text\",\"title\":\"Meta Keywords\"}]', 0, 1, 0, 10, 1, NULL, '2022-08-15 09:10:43', '2022-08-15 09:17:13'),
(5, 'Pегионы', 'regions', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"title\",\"title\":\"Название\"},{\"id\":1,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"code\",\"title\":\"Код\"},{\"id\":2,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"currency\",\"title\":\"Валюта\"},{\"id\":3,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"currency_icon\",\"title\":\"Валюта значок\"}]', 0, 1, 0, 10, 0, NULL, '2022-08-29 08:26:58', '2022-08-29 12:36:45'),
(6, 'Туристы', 'tourists', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"name\",\"title\":\"Имя\"},{\"id\":1,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"email\",\"title\":\"Почта\"},{\"id\":2,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"password\",\"db_title\":\"password\",\"title\":\"Пароль\"},{\"id\":3,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"phone\",\"title\":\"Телефон\"},{\"id\":4,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"number\",\"db_title\":\"mark\",\"title\":\"Оценка \"},{\"id\":5,\"required\":\"optional\",\"is_visible\":false,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"text\",\"db_title\":\"code\",\"title\":\"Код\"},{\"id\":6,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"text\",\"db_title\":\"facebook_id\",\"title\":\"facebook_id\"}]', 0, 0, 0, 10, 0, NULL, '2022-09-13 09:28:18', '2022-11-14 19:49:04'),
(7, 'Турагенты', 'touragents', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"id_touragent\",\"title\":\"ID\"},{\"id\":1,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"no\",\"title\":\"Название Турагентства\",\"type\":\"textarea\",\"db_title\":\"company\"},{\"id\":2,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"title\":\"Имя и фамилия менеджера\",\"type\":\"text\",\"db_title\":\"name\"},{\"id\":10,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"title\":\"Фото\",\"db_title\":\"photo\",\"type\":\"photo\"},{\"id\":3,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"title\":\"E-mail\",\"type\":\"text\",\"db_title\":\"email\"},{\"id\":4,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"title\":\"Номер телефона\",\"type\":\"text\",\"db_title\":\"phone\"},{\"id\":14,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"text\",\"db_title\":\"license\",\"title\":\"Лицензия\"},{\"id\":7,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"no\",\"title\":\"Адрес\",\"type\":\"textarea\",\"db_title\":\"address\"},{\"id\":8,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"no\",\"title\":\"График работы\",\"db_title\":\"work\",\"type\":\"textarea\"},{\"id\":9,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"title\":\"Рейтинг\",\"db_title\":\"mark\",\"type\":\"number\"},{\"id\":11,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"title\":\"Документы\",\"db_title\":\"documents\",\"type\":\"gallery\"},{\"id\":6,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"title\":\"Регион\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"regions\",\"relationship_view_field\":\"title\"},{\"id\":5,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"title\":\"Пароль\",\"type\":\"password\",\"db_title\":\"password\"},{\"id\":12,\"required\":\"optional\",\"is_visible\":false,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"datetime\",\"db_title\":\"date_update\",\"title\":\"Дата обновлений туров\"},{\"id\":13,\"required\":\"optional\",\"is_visible\":false,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"text\",\"db_title\":\"code\",\"title\":\"Код\"},{\"id\":15,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"many\",\"relationship_table_name\":\"applications\",\"relationship_view_field\":\"date\",\"title\":\"Заявки в работе\"}]', 0, 0, 0, 10, 0, NULL, '2022-10-04 10:25:16', '2022-10-28 12:55:06'),
(8, 'Служба поддержки', 'supports', '[{\"id\":2,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"datetime\",\"db_title\":\"date\",\"title\":\"Дата\"},{\"id\":1,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"touragents\",\"relationship_view_field\":\"email\",\"title\":\"Турагент\"},{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"ckeditor\",\"db_title\":\"message\",\"title\":\"Сообщение\"},{\"id\":3,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"editable\",\"type\":\"checkbox\",\"title\":\"Просмотрено?\",\"db_title\":\"show\"}]', 0, 0, 0, 10, 0, NULL, '2022-10-09 16:29:26', '2022-10-14 07:55:42'),
(9, 'Туры', 'tours', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"number\",\"db_title\":\"number\",\"title\":\"ID тура\"},{\"id\":23,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"1\",\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"title\",\"title\":\"Название тура\"},{\"id\":1,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"title_hotel\",\"title\":\"Отель\"},{\"id\":8,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"text\",\"db_title\":\"slug\",\"title\":\"Ссылка\"},{\"id\":2,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"photo\",\"db_title\":\"photo\",\"title\":\"Картинка\"},{\"id\":3,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"gallery\",\"db_title\":\"gallery\",\"title\":\"Галерея\"},{\"id\":4,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"money\",\"db_title\":\"price\",\"title\":\"Цена\"},{\"id\":5,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"datetime\",\"db_title\":\"data_departure\",\"title\":\"Дата вылета туда\"},{\"id\":26,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"datetime\",\"db_title\":\"data_departure_to\",\"title\":\"Дата прилета туда\"},{\"id\":27,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"datetime\",\"db_title\":\"data_arrival_from\",\"title\":\"Дата вылета назад\"},{\"id\":6,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"datetime\",\"db_title\":\"data_arrival\",\"title\":\"Дата прилета назад\"},{\"id\":21,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"nigth\",\"relationship_view_field\":\"title\",\"title\":\"К-ство ночей\"},{\"id\":18,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"editable\",\"relationship_table_name\":\"characteristics\",\"title\":\"Характеристики\"},{\"id\":19,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"number\",\"db_title\":\"rating\",\"title\":\"Рейтинг отеля\"},{\"id\":7,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"no\",\"type\":\"ckeditor\",\"db_title\":\"information\",\"title\":\"Информация\"},{\"id\":10,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"editable\",\"relationship_table_name\":\"informations\",\"title\":\"Информация об отеле\"},{\"id\":11,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"stars\",\"relationship_view_field\":\"number\",\"title\":\"К-ство звезд\"},{\"id\":12,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"cities\",\"relationship_view_field\":\"title\",\"title\":\"Город вылета\"},{\"id\":13,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"cities\",\"relationship_view_field\":\"title\",\"title\":\"Город прилета\"},{\"id\":14,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"people\",\"relationship_view_field\":\"title\",\"title\":\"К-ство взрослых\"},{\"id\":15,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"child\",\"relationship_view_field\":\"title\",\"title\":\"К-ство детей\"},{\"id\":16,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"food\",\"relationship_view_field\":\"title\",\"title\":\"Питание\"},{\"id\":17,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"accommodation\",\"relationship_view_field\":\"title\",\"title\":\"Размещение\"},{\"id\":20,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"visa\",\"relationship_view_field\":\"title\",\"title\":\"Виза\"},{\"id\":22,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"packages\",\"relationship_view_field\":\"title\",\"title\":\"Состав тура\"},{\"id\":24,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"editable\",\"type\":\"checkbox\",\"db_title\":\"show_mainpage\",\"title\":\"Показывать на главной?\"},{\"id\":25,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"touragents\",\"relationship_view_field\":\"email\",\"title\":\"Турагент\"},{\"id\":28,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"editable\",\"relationship_table_name\":\"reviews\",\"title\":\"Отзывы\"},{\"id\":29,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"text\",\"db_title\":\"lat\",\"title\":\"Карта Latitude\"},{\"id\":30,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"text\",\"db_title\":\"lng\",\"title\":\"Карта Longitude\"}]', 0, 1, 0, 10, 0, NULL, '2022-10-12 12:35:19', '2022-11-02 15:34:12'),
(10, 'Информация об отеле', 'informations', '[{\"id\":1,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"title\",\"title\":\"Название\"},{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"photo\",\"db_title\":\"icon\",\"title\":\"Іконка\"},{\"id\":2,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"no\",\"type\":\"textarea\",\"db_title\":\"description\",\"title\":\"Описание\"},{\"id\":3,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"tours\",\"relationship_view_field\":\"number\",\"title\":\"Тур\"}]', 0, 1, 0, 10, 4, NULL, '2022-10-12 12:39:28', '2022-10-26 17:21:47'),
(11, 'Звезди', 'stars', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"number\",\"db_title\":\"number\",\"title\":\"К-ство звезд\"}]', 0, 0, 0, 10, 4, NULL, '2022-10-12 12:58:05', '2022-10-12 14:19:46'),
(12, 'Страны', 'countries', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"title\",\"title\":\"Страна\"},{\"id\":1,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"editable\",\"relationship_table_name\":\"cities\",\"title\":\"Города\"},{\"id\":2,\"required\":\"optional\",\"is_visible\":false,\"lang\":1,\"show_in_list\":\"no\",\"type\":\"text\",\"db_title\":\"slug\",\"title\":\"\"}]', 0, 1, 0, 10, 4, NULL, '2022-10-12 13:10:20', '2022-11-02 14:41:23'),
(13, 'Города', 'cities', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"title\",\"title\":\"Город\"},{\"id\":1,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"countries\",\"relationship_view_field\":\"title\",\"title\":\"Страна\"}]', 0, 1, 0, 10, 4, NULL, '2022-10-12 13:11:32', '2022-10-12 16:05:30'),
(14, 'Дети', 'child', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"number\",\"db_title\":\"title\",\"title\":\"К-ство детей\"}]', 0, 0, 0, 10, 4, NULL, '2022-10-12 13:53:54', '2022-10-25 12:16:05'),
(15, 'Взрослые', 'people', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"number\",\"db_title\":\"title\",\"title\":\"К-ство взрослых\"}]', 0, 0, 0, 10, 4, NULL, '2022-10-12 13:54:52', '2022-10-25 12:16:12'),
(16, 'Питание', 'food', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"title\",\"title\":\"Вариант питания\"}]', 0, 1, 0, 10, 4, NULL, '2022-10-12 13:58:19', '2022-10-12 18:07:53'),
(17, 'Размещение', 'accommodation', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"text\",\"title\":\"Варианты номеров\",\"db_title\":\"title\"}]', 0, 0, 0, 10, 4, NULL, '2022-10-12 13:59:36', '2022-10-25 11:31:18'),
(18, 'Характеристики', 'characteristics', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"title\",\"title\":\"Название\"},{\"id\":1,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"title\":\"Иконка\",\"type\":\"photo\",\"db_title\":\"icon\"},{\"id\":2,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"tours\",\"relationship_view_field\":\"number\",\"title\":\"Тур\"}]', 0, 1, 0, 10, 4, NULL, '2022-10-12 14:03:43', '2022-10-26 17:22:00'),
(19, 'Виза', 'visa', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"title\",\"title\":\"Название\"},{\"id\":1,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"desc\",\"title\":\"Описание\"},{\"id\":2,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"text\",\"db_title\":\"color\",\"title\":\"Цвет\"}]', 0, 1, 0, 10, 4, NULL, '2022-10-12 14:15:48', '2022-11-12 02:42:15'),
(20, 'Ночи', 'nigth', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"1\",\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"title\",\"title\":\"К-ство ночей\"}]', 0, 1, 0, 10, 4, NULL, '2022-10-12 16:14:23', '2022-10-25 11:28:21'),
(21, 'Пакет тура', 'packages', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"title\",\"title\":\"Состав тура\"}]', 0, 1, 0, 10, 4, NULL, '2022-10-12 18:11:10', '2022-10-12 18:11:10'),
(22, 'Возраст ребенка', 'years', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"title\",\"title\":\"Возраст\"}]', 0, 1, 0, 10, 4, NULL, '2022-10-12 19:47:38', '2022-10-12 19:47:38'),
(23, 'Заявки на туры', 'applications', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"datetime\",\"db_title\":\"date\",\"title\":\"Дата создания\"},{\"id\":1,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"tourists\",\"relationship_view_field\":\"email\",\"title\":\"Турист\"},{\"id\":2,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"title\":\"Вылет из\",\"relationship_table_name\":\"cities\",\"relationship_view_field\":\"title\"},{\"id\":3,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"countries\",\"relationship_view_field\":\"title\",\"title\":\"Куда\"},{\"id\":4,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"title\":\"Дата начала тура\",\"type\":\"date\",\"db_title\":\"data_from\"},{\"id\":5,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"db_title\":\"data_to\",\"type\":\"date\",\"title\":\"Дата окончания тура\"},{\"id\":8,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"checkbox\",\"db_title\":\"check_data\",\"title\":\"+- 2 дня\"},{\"id\":6,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"title\":\"К-во ночей\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"nigth\",\"relationship_view_field\":\"title\"},{\"id\":9,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"checkbox\",\"db_title\":\"check_nigth\",\"title\":\"+- 2 ночи\"},{\"id\":22,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"many\",\"relationship_table_name\":\"cities\",\"relationship_view_field\":\"title\",\"title\":\"Курорти\"},{\"id\":23,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"checkbox\",\"db_title\":\"cities_all\",\"title\":\"Все курорты?\"},{\"id\":10,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"many\",\"relationship_table_name\":\"tours\",\"relationship_view_field\":\"title_hotel\",\"title\":\"Отели\"},{\"id\":11,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"stars\",\"relationship_view_field\":\"number\",\"title\":\"К-ство звезд\"},{\"id\":12,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"checkbox\",\"db_title\":\"check_hotel\",\"title\":\"и лучше\"},{\"id\":14,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"food\",\"relationship_view_field\":\"title\",\"title\":\"Питание\"},{\"id\":13,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"checkbox\",\"db_title\":\"check_food\",\"title\":\"и лучше\"},{\"id\":15,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"money\",\"db_title\":\"price_from\",\"title\":\"Бюджет от\"},{\"id\":16,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"db_title\":\"price_to\",\"type\":\"money\",\"title\":\"Бюджет до\"},{\"id\":17,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"db_title\":\"check_price\",\"type\":\"checkbox\",\"title\":\"+- 100₴\"},{\"id\":19,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"packages\",\"relationship_view_field\":\"title\",\"title\":\"Состав тура\"},{\"id\":18,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"no\",\"db_title\":\"info\",\"type\":\"textarea\",\"title\":\"Дополнительные пожелания\"},{\"id\":20,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"editable\",\"type\":\"checkbox\",\"db_title\":\"delete\",\"title\":\"Удалена?\"},{\"id\":21,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"editable\",\"type\":\"checkbox\",\"db_title\":\"show\",\"title\":\"Приостановлена?\"}]', 0, 0, 0, 10, 0, '/vendor/fastadminpanel/icons/1/11.svg', '2022-10-12 20:54:20', '2022-10-17 20:21:31'),
(24, 'Отзывы', 'reviews', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"name\",\"title\":\"Имя\"},{\"id\":1,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"no\",\"type\":\"ckeditor\",\"db_title\":\"description\",\"title\":\"Отзыв\"},{\"id\":2,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"date\",\"db_title\":\"date\",\"title\":\"Дата добавления\"},{\"id\":3,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"mark\",\"title\":\"Оценка\"},{\"id\":4,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"editable\",\"type\":\"checkbox\",\"db_title\":\"show\",\"title\":\"Показывать на сайте?\"},{\"id\":5,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"tours\",\"relationship_view_field\":\"title\",\"title\":\"Тур\"},{\"id\":6,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"text\",\"db_title\":\"parser\",\"title\":\"Откуда отзыв\"}]', 0, 1, 0, 10, 0, NULL, '2022-10-28 15:58:59', '2022-10-28 16:02:49'),
(25, 'Данные туристов для бронирования тура', 'booking_tourist', '[{\"id\":2,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"text\",\"title\":\"Фамилия\",\"db_title\":\"second_name\"},{\"id\":3,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"text\",\"title\":\"Имя\",\"db_title\":\"first_name\"},{\"id\":4,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"title\":\"Отчество\",\"type\":\"text\",\"db_title\":\"third_name\"},{\"id\":5,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"title\":\"Дата рождения\",\"type\":\"text\",\"db_title\":\"date_of_birth\"},{\"id\":6,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"title\":\"Серия и номер паспорта\",\"type\":\"text\",\"db_title\":\"passport\"},{\"id\":7,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"title\":\"Действует до\",\"type\":\"text\",\"db_title\":\"valid\"},{\"id\":8,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"title\":\"Кем выдан паспорт\",\"type\":\"text\",\"db_title\":\"authority\"},{\"id\":9,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"title\":\"Гражданство\",\"type\":\"relationship\",\"db_title\":\"сitizenship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"citizenship\",\"relationship_view_field\":\"title\"},{\"id\":10,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"booking\",\"title\":\"Тур\",\"relationship_view_field\":\"date\"}]', 1, 0, 0, 10, 0, NULL, '2022-11-02 18:29:25', '2022-11-03 17:41:28'),
(26, 'Забронированные туры', 'booking', '[{\"id\":3,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"datetime\",\"db_title\":\"date\",\"title\":\"Дата\"},{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"tours\",\"relationship_view_field\":\"number\",\"title\":\"Тур\"},{\"id\":1,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"tourists\",\"relationship_view_field\":\"name\",\"title\":\"Турист\"},{\"id\":2,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"editable\",\"relationship_table_name\":\"booking_tourist\",\"relationship_view_field\":\"first_name\",\"title\":\"Данные туристов\"},{\"id\":4,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"yes\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"booking_status\",\"relationship_view_field\":\"title\",\"title\":\"Статус бронирования\"},{\"id\":5,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"file\",\"db_title\":\"ticket\",\"title\":\"Билеты\"},{\"id\":6,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"file\",\"db_title\":\"voucher\",\"title\":\"Ваучер\"},{\"id\":7,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"file\",\"db_title\":\"insurance\",\"title\":\"Страховка\"},{\"id\":8,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"file\",\"db_title\":\"memo\",\"title\":\"Памятка\"},{\"id\":9,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"file\",\"db_title\":\"treaty\",\"title\":\"Договор\"},{\"id\":10,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"relationship\",\"relationship_count\":\"single\",\"relationship_table_name\":\"visa\",\"relationship_view_field\":\"title\",\"title\":\"Виза\"},{\"id\":11,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"title\":\"Подача\",\"db_title\":\"innings\",\"type\":\"text\"},{\"id\":12,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"text\",\"title\":\"Оплата\",\"db_title\":\"payment\"},{\"id\":13,\"required\":\"optional\",\"is_visible\":true,\"lang\":\"0\",\"show_in_list\":\"no\",\"type\":\"text\",\"db_title\":\"remainder\",\"title\":\"Остаток\"}]', 0, 0, 0, 10, 0, NULL, '2022-11-02 18:38:07', '2022-11-12 01:48:00'),
(27, 'Статус бронирования', 'booking_status', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"title\",\"title\":\"Статус\"},{\"id\":1,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"no\",\"type\":\"text\",\"db_title\":\"color\",\"title\":\"Цвет\"}]', 0, 1, 0, 10, 0, NULL, '2022-11-02 18:42:27', '2022-11-03 22:59:45'),
(28, 'Гражданство', 'citizenship', '[{\"id\":0,\"required\":\"optional\",\"is_visible\":true,\"lang\":1,\"show_in_list\":\"yes\",\"type\":\"text\",\"db_title\":\"title\",\"title\":\"Гражданство\"}]', 0, 1, 0, 10, 4, NULL, '2022-11-02 23:57:55', '2022-11-02 23:57:55');

-- --------------------------------------------------------

--
-- Структура таблиці `nigth_ru`
--

DROP TABLE IF EXISTS `nigth_ru`;
CREATE TABLE `nigth_ru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `nigth_ru`
--

INSERT INTO `nigth_ru` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, '6 ночей', '2022-10-12 16:15:18', '2022-10-25 10:59:50'),
(2, '7 ночей', '2022-10-12 16:15:22', '2022-10-25 10:59:46'),
(3, '10 ночей', '2022-10-12 16:15:38', '2022-10-25 10:59:52');

-- --------------------------------------------------------

--
-- Структура таблиці `nigth_uk`
--

DROP TABLE IF EXISTS `nigth_uk`;
CREATE TABLE `nigth_uk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `nigth_uk`
--

INSERT INTO `nigth_uk` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, '6 ночей', '2022-10-12 16:15:18', '2022-10-25 10:59:50'),
(2, '7 ночей', '2022-10-12 16:15:22', '2022-10-25 10:59:46'),
(3, '10 ночей', '2022-10-12 16:15:38', '2022-10-25 10:59:52');

-- --------------------------------------------------------

--
-- Структура таблиці `packages_ru`
--

DROP TABLE IF EXISTS `packages_ru`;
CREATE TABLE `packages_ru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `packages_ru`
--

INSERT INTO `packages_ru` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Полный пакет', '2022-10-12 18:12:13', '2022-10-12 18:12:13'),
(2, 'Неполный пакет', '2022-10-13 08:40:59', '2022-10-13 08:40:59');

-- --------------------------------------------------------

--
-- Структура таблиці `packages_uk`
--

DROP TABLE IF EXISTS `packages_uk`;
CREATE TABLE `packages_uk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `packages_uk`
--

INSERT INTO `packages_uk` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Полный пакет', '2022-10-12 18:12:13', '2022-10-12 18:12:13'),
(2, 'Неполный пакет', '2022-10-13 08:40:59', '2022-10-13 08:40:59');

-- --------------------------------------------------------

--
-- Структура таблиці `people`
--

DROP TABLE IF EXISTS `people`;
CREATE TABLE `people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `people`
--

INSERT INTO `people` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-10-12 13:55:00', '2022-10-12 13:55:00'),
(2, 2, '2022-10-12 13:55:05', '2022-10-12 13:55:05'),
(3, 3, '2022-10-12 13:55:09', '2022-10-12 13:55:09'),
(4, 4, '2022-10-12 13:55:14', '2022-10-12 13:55:14'),
(5, 5, '2022-10-12 13:55:17', '2022-10-12 13:55:17');

-- --------------------------------------------------------

--
-- Структура таблиці `regions_ru`
--

DROP TABLE IF EXISTS `regions_ru`;
CREATE TABLE `regions_ru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `regions_ru`
--

INSERT INTO `regions_ru` (`id`, `title`, `created_at`, `updated_at`, `code`, `currency`, `currency_icon`) VALUES
(1, 'Украина', '2022-08-29 08:27:10', '2022-08-29 12:37:09', 'UA', 'грн', '₴'),
(2, 'рашка', '2022-08-29 08:27:21', '2022-08-29 12:37:23', 'RU', 'руб', '₽'),
(3, 'Беларусь', '2022-08-29 08:28:11', '2022-08-29 12:38:02', 'BY', 'бел руб', 'Br');

-- --------------------------------------------------------

--
-- Структура таблиці `regions_uk`
--

DROP TABLE IF EXISTS `regions_uk`;
CREATE TABLE `regions_uk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `regions_uk`
--

INSERT INTO `regions_uk` (`id`, `title`, `created_at`, `updated_at`, `code`, `currency`, `currency_icon`) VALUES
(1, 'Украина', '2022-08-29 08:27:10', '2022-08-29 08:27:10', '', '', ''),
(2, 'рашка', '2022-08-29 08:27:21', '2022-08-29 08:27:21', '', '', ''),
(3, 'Беларусь', '2022-08-29 08:28:11', '2022-08-29 08:28:11', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблиці `reviews_ru`
--

DROP TABLE IF EXISTS `reviews_ru`;
CREATE TABLE `reviews_ru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `mark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_tours` int(11) NOT NULL,
  `parser` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `reviews_ru`
--

INSERT INTO `reviews_ru` (`id`, `name`, `description`, `date`, `mark`, `show`, `created_at`, `updated_at`, `id_tours`, `parser`) VALUES
(1, 'Екатерина', '<p><strong>JUSTINIANO CLUB PARK CONTI топ за свои!</strong></p><p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.</p>', '2022-10-28', '4.3', 1, '2022-10-28 16:03:41', '2022-10-28 16:03:41', 11, 'TripAdvisor'),
(2, 'Екатерина', '<p><strong>JUSTINIANO CLUB PARK CONTI топ за свои!</strong></p><p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.&nbsp;</p><p>Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.</p>', '2022-10-13', '5.0', 1, '2022-10-28 16:03:47', '2022-10-28 16:34:23', 11, 'TripAdvisor'),
(3, 'Марго', '<p><strong>JUSTINIANO CLUB PARK CONTI топ за свои!</strong></p><p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.&nbsp;</p><p>Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.</p>', '2022-10-13', '3.9', 1, '2022-10-28 16:04:13', '2022-10-28 16:04:28', 12, 'TripAdvisor'),
(4, 'Марго', '<p><strong>JUSTINIANO CLUB PARK CONTI топ за свои!</strong></p><p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.&nbsp;</p><p>Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.</p>', '2022-10-13', '3.9', 1, '2022-10-28 16:04:31', '2022-10-28 16:05:10', 12, 'TopHotels'),
(5, 'Екатерина', '<p><strong>JUSTINIANO CLUB PARK CONTI топ за свои!</strong></p><p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.&nbsp;</p><p>Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.</p>', '2022-10-08', '4.7', 1, '2022-10-28 16:05:13', '2022-10-28 16:05:28', 11, 'TopHotels'),
(6, 'Надежда', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(38,38,38);\">Самый лучший отель в Тире! Прекрасный персонал, отношение сотрудников отеля к постояльцам как к членам семьи. Ощущения, что ты приехал на каникулы к бабушке, настолько окружён заботой и вниманием. Местоположение самое выгодное из всех отелей</span></p>', '2022-10-03', '5', 1, '2022-11-02 12:28:49', '2022-11-02 12:32:24', 15, 'TopHotels'),
(7, 'Cергей', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(38,38,38);\">Собственность была хорошо расположена для прогулки Фира-Ия вдоль кальдеры. Кроме того, в нескольких минутах ходьбы от магазинов и ресторанов Фиры. Пространство вокруг бассейна было прекрасным, с достаточным количеством сидячих мест. Мы также воспользовались трансфером из аэропорта, который был по разумной цене и надежным.</span></p><p><span style=\"background-color:rgb(255,255,255);color:rgb(38,38,38);\">Бассейн был холодный, но это не вина руководства :)</span></p>', '2022-10-03', '4.2', 1, '2022-11-02 12:37:47', '2022-11-02 12:39:05', 15, 'TripAdvisor');

-- --------------------------------------------------------

--
-- Структура таблиці `reviews_uk`
--

DROP TABLE IF EXISTS `reviews_uk`;
CREATE TABLE `reviews_uk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `mark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_tours` int(11) NOT NULL,
  `parser` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `reviews_uk`
--

INSERT INTO `reviews_uk` (`id`, `name`, `description`, `date`, `mark`, `show`, `created_at`, `updated_at`, `id_tours`, `parser`) VALUES
(1, 'Екатерина', '<p><strong>JUSTINIANO CLUB PARK CONTI топ за свои!</strong></p><p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.</p>', '2022-10-28', '4.3', 1, '2022-10-28 16:03:41', '2022-10-28 16:03:41', 11, 'TripAdvisor'),
(2, 'Екатерина', '<p><strong>JUSTINIANO CLUB PARK CONTI топ за свои!</strong></p><p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.</p>', '2022-10-13', '5.0', 1, '2022-10-28 16:03:47', '2022-10-28 16:34:23', 11, 'TripAdvisor'),
(3, 'Екатерина', '<p><strong>JUSTINIANO CLUB PARK CONTI топ за свои!</strong></p><p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.</p>', '2022-10-13', '3.9', 1, '2022-10-28 16:04:13', '2022-10-28 16:04:28', 12, 'TripAdvisor'),
(4, 'Екатерина', '<p><strong>JUSTINIANO CLUB PARK CONTI топ за свои!</strong></p><p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.</p>', '2022-10-13', '3.9', 1, '2022-10-28 16:04:31', '2022-10-28 16:05:10', 12, 'TopHotels'),
(5, 'Екатерина', '<p><strong>JUSTINIANO CLUB PARK CONTI топ за свои!</strong></p><p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.</p>', '2022-10-08', '4.7', 1, '2022-10-28 16:05:13', '2022-10-28 16:05:28', 11, 'TopHotels'),
(6, 'Надежда', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(38,38,38);\">Самый лучший отель в Тире! Прекрасный персонал, отношение сотрудников отеля к постояльцам как к членам семьи. Ощущения, что ты приехал на каникулы к бабушке, настолько окружён заботой и вниманием. Местоположение самое выгодное из всех отелей</span></p>', '2022-10-03', '5', 1, '2022-11-02 12:28:49', '2022-11-02 12:32:24', 15, 'TopHotels'),
(7, 'Надежда', '<p><span style=\"background-color:rgb(255,255,255);color:rgb(38,38,38);\">Самый лучший отель в Тире! Прекрасный персонал, отношение сотрудников отеля к постояльцам как к членам семьи. Ощущения, что ты приехал на каникулы к бабушке, настолько окружён заботой и вниманием. Местоположение самое выгодное из всех отелей</span></p>', '2022-10-03', '4.2', 1, '2022-11-02 12:37:47', '2022-11-02 12:39:05', 15, 'TripAdvisor');

-- --------------------------------------------------------

--
-- Структура таблиці `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '2022-04-21 15:36:15', '2022-04-21 15:36:15'),
(2, 'User', '2022-04-21 15:36:15', '2022-04-21 15:36:15');

-- --------------------------------------------------------

--
-- Структура таблиці `saved`
--

DROP TABLE IF EXISTS `saved`;
CREATE TABLE `saved` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_tourists` int(10) UNSIGNED NOT NULL,
  `id_tours` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `saved`
--

INSERT INTO `saved` (`id`, `id_tourists`, `id_tours`) VALUES
(12, 1, 13),
(14, 1, 12),
(15, 1, 15),
(16, 3, 11),
(17, 1, 14);

-- --------------------------------------------------------

--
-- Структура таблиці `single_date`
--

DROP TABLE IF EXISTS `single_date`;
CREATE TABLE `single_date` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `single_datetime`
--

DROP TABLE IF EXISTS `single_datetime`;
CREATE TABLE `single_datetime` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `single_datetime_ru`
--

DROP TABLE IF EXISTS `single_datetime_ru`;
CREATE TABLE `single_datetime_ru` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `single_datetime_uk`
--

DROP TABLE IF EXISTS `single_datetime_uk`;
CREATE TABLE `single_datetime_uk` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `single_date_ru`
--

DROP TABLE IF EXISTS `single_date_ru`;
CREATE TABLE `single_date_ru` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `single_date_uk`
--

DROP TABLE IF EXISTS `single_date_uk`;
CREATE TABLE `single_date_uk` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `single_field`
--

DROP TABLE IF EXISTS `single_field`;
CREATE TABLE `single_field` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_multilanguage` tinyint(4) NOT NULL DEFAULT 0,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `single_page_id` int(11) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `single_field`
--

INSERT INTO `single_field` (`id`, `is_multilanguage`, `type`, `title`, `block_title`, `single_page_id`, `sort`) VALUES
(1, 1, 'text', 'Заголовок', 'Хлебные крошки', 1, 1),
(2, 1, 'text', 'Заголовок', 'Телефоны', 2, 1),
(3, 1, 'repeat', 'Телефоны', 'Телефоны', 2, 1),
(4, 1, 'text', 'Заголовок', 'Адрес', 2, 1),
(5, 1, 'text', 'Адрес', 'Адрес', 2, 1),
(6, 1, 'text', 'Заголовок', 'Почта и соцсети', 2, 1),
(7, 1, 'text', 'Почта', 'Почта и соцсети', 2, 2),
(9, 1, 'textarea', 'Meta Title', 'Meta', 1, 1),
(10, 1, 'textarea', 'Meta Description', 'Meta', 1, 2),
(11, 1, 'textarea', 'Meta Keywords', 'Meta', 1, 3),
(13, 1, 'repeat', 'Соц сети', 'Соц сети', 2, 1),
(14, 1, 'text', 'Заголовок', 'Хлебные крошки', 3, 1),
(15, 1, 'textarea', 'Meta Title', 'Meta', 3, 1),
(16, 1, 'textarea', 'Meta Description', 'Meta', 3, 2),
(17, 1, 'textarea', 'Meta Keywords', 'Meta', 3, 3),
(18, 1, 'text', 'Заголовок', 'FAQ', 3, 1),
(19, 1, 'text', 'Туристу', 'FAQ', 3, 2),
(20, 1, 'text', 'Турагенту', 'FAQ', 3, 3),
(21, 1, 'repeat', 'Вопрос', 'Вопросы туристу', 3, 1),
(22, 1, 'repeat', 'Вопрос', 'Вопросы турагенту', 3, 1),
(23, 1, 'text', 'Заголовок', 'Как это работает', 4, 1),
(25, 1, 'repeat', 'Шаг', 'Шаги', 4, 1),
(26, 1, 'text', 'Заголовок', 'Контент', 5, 1),
(27, 1, 'text', 'Текст', 'Контент', 5, 2),
(28, 1, 'text', 'Кнопка ссылка', 'Контент', 5, 3),
(29, 1, 'text', 'Кнопка текст', 'Контент', 5, 4),
(30, 1, 'textarea', 'Meta Title', 'Meta', 5, 1),
(31, 1, 'textarea', 'Meta Description', 'Meta', 5, 2),
(32, 1, 'textarea', 'Meta Keywords', 'Meta', 5, 3),
(33, 1, 'textarea', 'Заголовок', 'Главный баннер', 6, 1),
(34, 1, 'textarea', 'Текст', 'Главный баннер', 6, 2),
(35, 1, 'text', 'Важная информация ссылка', 'Главный баннер', 6, 3),
(36, 1, 'text', 'Важная информация', 'Главный баннер', 6, 4),
(37, 1, 'text', 'Турагентов в системе', 'Главный баннер', 6, 5),
(38, 1, 'text', 'Заголовок', 'Преимущества', 6, 1),
(39, 1, 'repeat', 'Преимуществo', 'Преимущества', 6, 2),
(40, 1, 'text', 'Заголовок', 'Популярные варианты на Бирже туров', 6, 1),
(41, 1, 'textarea', 'Meta Title', 'Meta', 6, 1),
(42, 1, 'textarea', 'Meta Description', 'Meta', 6, 2),
(43, 1, 'textarea', 'Meta Keywords', 'Meta', 6, 3),
(44, 1, 'photo', 'Лого', 'Хедер', 7, 1),
(45, 1, 'text', 'Биржа туров ссылка', 'Хедер', 7, 2),
(46, 1, 'text', 'Биржа туров', 'Хедер', 7, 3),
(47, 1, 'text', 'Контакты ссылка', 'Хедер', 7, 4),
(48, 1, 'text', 'Контакты', 'Хедер', 7, 5),
(49, 1, 'text', 'Войти', 'Хедер', 7, 7),
(50, 1, 'text', 'Выйти', 'Хедер', 7, 2),
(51, 1, 'text', 'Связаться со службой поддержки', 'Хедер', 7, 2),
(53, 1, 'photo', 'Лого', 'Футер', 8, 1),
(54, 1, 'text', 'Контакты', 'Футер', 8, 2),
(55, 1, 'text', '© 2001-2021 Bronara. Все права защищены', 'Футер', 8, 3),
(56, 1, 'text', 'Условия использования', 'Футер', 8, 5),
(57, 1, 'text', 'Конфиденциальность', 'Футер', 8, 7),
(58, 1, 'text', 'Политика возврата', 'Футер', 8, 9),
(59, 1, 'text', 'FAQ', 'Футер', 8, 11),
(60, 1, 'text', 'Язык сайта', 'Футер', 8, 12),
(61, 1, 'text', 'Условия использования ссылка', 'Футер', 8, 4),
(62, 1, 'text', 'Конфиденциальность ссылка', 'Футер', 8, 6),
(63, 1, 'text', 'Политика возврата ссылка', 'Футер', 8, 8),
(64, 1, 'text', 'FAQ ссылка', 'Футер', 8, 10),
(65, 1, 'text', 'Подобрать тур', 'Хедер', 7, 6),
(66, 1, 'text', 'Заголовок', 'Регистрация', 9, 1),
(67, 1, 'text', 'Турист кнопка', 'Регистрация', 9, 2),
(68, 1, 'text', 'Турагент кнопка', 'Регистрация', 9, 3),
(69, 1, 'text', 'Заголовок турагент', 'Регистрация турагент', 9, 1),
(70, 1, 'text', 'Название Турагентства:', 'Регистрация турагент', 9, 2),
(71, 1, 'text', 'Введите название', 'Регистрация турагент', 9, 3),
(72, 1, 'text', 'Запомнить', 'Регистрация', 9, 4),
(73, 1, 'text', 'Зарегистрироваться как турагент', 'Регистрация', 9, 5),
(74, 1, 'text', 'Зарегистрироваться как турист', 'Регистрация', 9, 6),
(75, 1, 'text', 'Вы регистрируетесь как турист!', 'Регистрация', 9, 7),
(76, 1, 'text', 'Войти как турагент', 'Регистрация', 9, 8),
(77, 1, 'text', 'Войти как турист', 'Регистрация', 9, 9),
(78, 1, 'text', 'Имя и фамилия менеджера:', 'Регистрация турагент', 9, 4),
(79, 1, 'text', 'Введите имя и фамилию', 'Регистрация турагент', 9, 5),
(80, 1, 'text', 'E-mail:', 'Регистрация турагент', 9, 6),
(81, 1, 'text', 'Введите e-mail', 'Регистрация турагент', 9, 7),
(82, 1, 'text', 'Номер телефона:', 'Регистрация турагент', 9, 8),
(83, 1, 'text', '+38 (0ХХ) ХХХ - ХХ - ХХ', 'Регистрация турагент', 9, 9),
(84, 1, 'text', 'Пароль', 'Регистрация турагент', 9, 10),
(85, 1, 'text', 'Введите ваш пароль', 'Регистрация турагент', 9, 11),
(86, 1, 'text', 'Ваше имя:', 'Регистрация турист', 9, 1),
(87, 1, 'text', 'Введите имя', 'Регистрация турист', 9, 2),
(88, 1, 'text', 'E-mail:', 'Регистрация турист', 9, 3),
(89, 1, 'text', 'Введите e-mail', 'Регистрация турист', 9, 4),
(90, 1, 'text', 'Номер телефона:', 'Регистрация турист', 9, 5),
(91, 1, 'text', '+38 (0ХХ) ХХХ - ХХ - ХХ', 'Регистрация турист', 9, 6),
(92, 1, 'text', 'Пароль', 'Регистрация турист', 9, 7),
(93, 1, 'text', 'Введите ваш пароль', 'Регистрация турист', 9, 8),
(94, 1, 'text', 'Ошибка', 'Регистрация', 9, 10),
(95, 1, 'text', 'Ссылка', 'Правила посещения стран', 10, 1),
(96, 1, 'text', 'Название', 'Правила посещения стран', 10, 2),
(97, 1, 'textarea', 'Meta Title', 'Meta', 10, 1),
(98, 1, 'textarea', 'Meta Description', 'Meta', 10, 2),
(99, 1, 'textarea', 'Meta Keywords', 'Meta', 10, 3),
(100, 1, 'text', 'Ваше имя:', 'Информация', 10, 1),
(101, 1, 'text', 'Номер телефона:', 'Информация', 10, 2),
(102, 1, 'text', 'Ваш e-mail:', 'Информация', 10, 3),
(103, 1, 'text', 'Ваш рейтинг:', 'Информация', 10, 4),
(104, 1, 'text', 'Сохранить изминения', 'Информация', 10, 5),
(105, 1, 'text', 'Успешно', 'Информация', 10, 6),
(106, 1, 'text', 'Ошибка', 'Информация', 10, 7),
(107, 1, 'text', 'Заголовок', 'Войти', 11, 1),
(108, 1, 'text', 'Войти как', 'Войти', 11, 2),
(109, 1, 'text', 'Турист кнопка', 'Войти', 11, 3),
(110, 1, 'text', 'Турагент кнопка', 'Войти', 11, 4),
(111, 1, 'text', 'Запомнить', 'Войти', 11, 5),
(112, 1, 'text', 'Забыли пароль?', 'Войти', 11, 6),
(113, 1, 'text', 'Ошибка! Проверьте правильность введенных данных', 'Войти', 11, 7),
(114, 1, 'text', 'Зарегистрироваться как турагент', 'Войти', 11, 8),
(115, 1, 'text', 'Зарегистрироваться как турист', 'Войти', 11, 9),
(116, 1, 'text', 'Или авторизироваться с помощью', 'Войти', 11, 10),
(117, 1, 'text', 'Ваш e-mail:', 'Войти турист', 11, 1),
(118, 1, 'text', 'Введите ваш e-mail', 'Войти турист', 11, 2),
(119, 1, 'text', 'Пароль', 'Войти турист', 11, 3),
(120, 1, 'text', 'Введите ваш пароль', 'Войти турист', 11, 4),
(121, 1, 'text', 'Ваш ID:', 'Войти турагент', 11, 1),
(122, 1, 'text', 'Введите ваш id', 'Войти турагент', 11, 2),
(123, 1, 'text', 'Пароль', 'Войти турагент', 11, 3),
(124, 1, 'text', 'Введите ваш пароль', 'Войти турагент', 11, 4),
(125, 1, 'text', 'Ваше имя:', 'Информация', 12, 1),
(126, 1, 'text', 'Номер телефона:', 'Информация', 12, 2),
(127, 1, 'text', 'Ваш e-mail:', 'Информация', 12, 3),
(128, 1, 'text', 'Ваш рейтинг:', 'Информация', 12, 4),
(129, 1, 'text', 'Название турагенства:', 'Информация', 12, 5),
(130, 1, 'text', 'Ваш адрес:', 'Информация', 12, 6),
(131, 1, 'text', 'График работы:', 'Информация', 12, 7),
(132, 1, 'text', 'Сохранить изминения', 'Информация', 12, 9),
(133, 1, 'text', 'Успешно', 'Информация', 12, 10),
(134, 1, 'text', 'Ошибка', 'Информация', 12, 11),
(135, 1, 'text', 'ID-номер:', 'Информация', 12, 12),
(136, 1, 'text', 'Загрузить фото', 'Информация', 12, 13),
(137, 1, 'text', 'Подписка на доступ', 'Подписка', 12, 1),
(138, 1, 'textarea', 'Купите доступ', 'Подписка', 12, 2),
(139, 1, 'text', 'До истичения осталось:', 'Подписка', 12, 3),
(140, 1, 'text', 'Кнопка', 'Подписка', 12, 4),
(141, 1, 'text', 'Подберите свой идеальный тур', 'Заявки на туры', 10, 1),
(142, 1, 'text', 'Созданные заявки', 'Заявки на туры', 10, 2),
(143, 1, 'text', 'Город вылета:', 'Форма', 13, 1),
(144, 1, 'text', 'Документы', 'Документы', 12, 1),
(145, 1, 'text', 'Добавить фото', 'Документы', 12, 2),
(146, 1, 'textarea', 'Загрузите фото следующих документов: сертификат-лицензия турагентства', 'Документы', 12, 3),
(147, 1, 'text', 'Заголовок', 'Забыли пароль', 14, 1),
(148, 1, 'text', 'Пожалуйста, введите свой e-mail', 'Забыли пароль', 14, 2),
(149, 1, 'text', 'E-mail', 'Забыли пароль', 14, 3),
(150, 1, 'text', 'Введите e-mail', 'Забыли пароль', 14, 4),
(151, 1, 'text', 'Текст кнопки #1', 'Забыли пароль', 14, 5),
(152, 1, 'text', 'E-mail не существует', 'Забыли пароль', 14, 6),
(153, 1, 'textarea', 'Введите код из полученного смс', 'Забыли пароль', 14, 7),
(154, 1, 'text', 'Код', 'Забыли пароль', 14, 10),
(155, 1, 'text', 'Введите код', 'Забыли пароль', 14, 11),
(156, 1, 'text', 'Текст кнопки #2', 'Забыли пароль', 14, 12),
(157, 1, 'text', 'Неправильный код', 'Забыли пароль', 14, 13),
(158, 1, 'text', 'Введите новый пароль', 'Забыли пароль', 14, 14),
(159, 1, 'text', 'Пароль', 'Забыли пароль', 14, 15),
(160, 1, 'text', 'Повторите пароль', 'Забыли пароль', 14, 16),
(161, 1, 'text', 'Текст кнопки #3', 'Забыли пароль', 14, 17),
(162, 1, 'text', 'Пароли не совадают', 'Забыли пароль', 14, 18),
(163, 1, 'text', 'Вернуться назад', 'Забыли пароль', 14, 19),
(164, 1, 'text', 'Вы можете выбрать максимум 3 отеля', 'Сообщение', 15, 1),
(165, 1, 'text', 'Понятно', 'Сообщение', 15, 2),
(166, 1, 'text', 'Какой вопрос вас интересует', 'Поддержка', 16, 1),
(167, 1, 'text', 'Отправить', 'Поддержка', 16, 2),
(168, 1, 'textarea', 'Спасибо, ваш запрос отправлен! Ожидайте ответа на почте', 'Поддержка', 16, 3),
(169, 1, 'textarea', 'Ошибка', 'Поддержка', 16, 4),
(170, 1, 'textarea', 'Ваш комментарий', 'Поддержка', 16, 5),
(171, 1, 'text', 'Опишите свою проблему или предложения, замечания:', 'Поддержка', 16, 6),
(172, 1, 'text', 'Успешно', 'Форма', 13, 2),
(173, 1, 'text', 'Ошибка', 'Форма', 13, 3),
(175, 1, 'text', 'Понятно', 'Сообщение для заявок', 15, 2),
(176, 1, 'text', 'Вы не можете создать больше 3 заявок', 'Сообщение для заявок', 15, 1),
(177, 1, 'text', 'Зайдите или зарегистрируйтесь как турист', 'Сообщение для подбора тура', 15, 1),
(178, 1, 'text', 'Понятно', 'Сообщение для подбора тура', 15, 2),
(179, 1, 'textarea', 'Ваш код', 'Забыли пароль', 14, 8),
(180, 1, 'textarea', 'Сброс пароля', 'Забыли пароль', 14, 9),
(181, 1, 'text', 'Заголовок', 'Информация', 17, 1),
(182, 1, 'text', 'Вам могут подойти:', 'Информация', 17, 2),
(183, 1, 'text', 'Обновить список', 'Информация', 17, 3),
(184, 1, 'textarea', 'Meta Title', 'Meta', 17, 1),
(185, 1, 'textarea', 'Meta Description', 'Meta', 17, 2),
(186, 1, 'textarea', 'Meta Keywords', 'Meta', 17, 3),
(187, 1, 'text', 'Рейтинг:', 'Общие данные', 18, 1),
(188, 1, 'text', 'Подробнее о туре', 'Общие данные', 18, 1),
(189, 1, 'text', 'Запросить актуальность', 'Общие данные', 18, 2),
(190, 1, 'textarea', 'Для запроса подтверждения актуальности тура сохраните его в избранное', 'Общие данные', 18, 3),
(191, 1, 'text', 'Добавить тур в избранное:', 'Общие данные', 18, 1),
(192, 1, 'text', 'Тур добавлен в избранное', 'Общие данные', 18, 2),
(193, 1, 'text', 'Рейтинг отеля', 'Информация', 17, 1),
(194, 1, 'text', 'Купить за', 'Кнопки', 17, 1),
(195, 1, 'text', 'Чат по туру', 'Кнопки', 17, 2),
(196, 1, 'text', 'Подробнее о туре', 'Кнопки', 17, 3),
(197, 1, 'text', 'Запросить актуальность', 'Кнопки', 17, 4),
(198, 1, 'text', 'Забронировать тур', 'Кнопки', 17, 5),
(199, 1, 'text', 'Показать ещё туры', 'Кнопки', 17, 6),
(200, 1, 'text', 'Взрослые', 'Aббревиатура', 17, 1),
(201, 1, 'text', 'Дети', 'Aббревиатура', 17, 2),
(202, 1, 'text', 'Кнопка \"Показать больше\" (текст)', 'Кнопки', 17, 1),
(203, 1, 'text', 'Взрослые', 'Общая информация', 19, 11),
(204, 1, 'text', 'Дети', 'Общая информация', 19, 12),
(205, 1, 'text', 'Виза', 'Общая информация', 19, 10),
(206, 1, 'text', 'Маршрут', 'Общая информация', 19, 5),
(207, 1, 'text', 'Даты', 'Общая информация', 19, 6),
(208, 1, 'text', 'Туристы', 'Общая информация', 19, 7),
(209, 1, 'text', 'Номер и питание', 'Общая информация', 19, 7),
(210, 1, 'text', 'Туда', 'Общая информация', 19, 16),
(211, 1, 'text', 'Назад', 'Общая информация', 19, 17),
(212, 1, 'text', 'Номер лицензии:', 'Информация', 12, 8),
(213, 1, 'text', 'Отзывы', 'Отзывы', 19, 1),
(214, 1, 'text', 'TripAdvisor', 'Отзывы', 19, 2),
(215, 1, 'text', 'TopHotels', 'Отзывы', 19, 3),
(216, 1, 'text', 'Звездночный отель', 'Звезды', 20, 1),
(217, 1, 'text', 'ID тура:', 'Общая информация', 19, 1),
(218, 1, 'text', 'Колличество звезд:', 'Общая информация', 19, 2),
(219, 1, 'text', 'Рейтинг:', 'Общие данные', 19, 1),
(220, 1, 'text', 'Страна, город:', 'Общая информация', 19, 3),
(221, 1, 'text', 'Цена:', 'Общая информация', 19, 4),
(222, 1, 'text', 'Номер', 'Общая информация', 19, 8),
(223, 1, 'text', 'Питание', 'Общая информация', 19, 9),
(224, 1, 'text', 'Информация по вылету и прилету:', 'Общая информация', 19, 13),
(225, 1, 'text', 'Вылет', 'Общая информация', 19, 14),
(226, 1, 'text', 'Прилет', 'Общая информация', 19, 15),
(227, 1, 'text', 'Заголовок', 'Информация о турагенте', 19, 1),
(228, 1, 'text', 'Имя:', 'Информация о турагенте', 19, 1),
(229, 1, 'text', 'Название турагенства:', 'Информация о турагенте', 19, 2),
(230, 1, 'text', 'Рейтинг:', 'Информация о турагенте', 19, 3),
(231, 1, 'text', 'Номер лицензии:', 'Информация о турагенте', 19, 4),
(232, 1, 'text', 'Номер телефона:', 'Информация о турагенте', 19, 5),
(233, 1, 'text', 'Адрес офиса:', 'Информация о турагенте', 19, 6),
(234, 1, 'text', 'Часы работы:', 'Информация о турагенте', 19, 7),
(235, 1, 'text', 'Информация об отеле', 'Общая информация', 19, 18),
(236, 1, 'text', 'Тур успешно забронирован', 'Сообщение', 15, 1),
(237, 1, 'text', 'В мои туры', 'Сообщение', 15, 2),
(238, 1, 'text', 'Статус бронирования:', 'Общая информация', 19, 5),
(239, 1, 'text', 'Заголовок', 'Информация о туристах', 19, 1),
(240, 1, 'text', 'ФИО:', 'Информация о туристах', 19, 4),
(241, 1, 'text', 'Дата рождения:', 'Информация о туристах', 19, 5),
(242, 1, 'text', 'Серия и номер паспорта:', 'Информация о туристах', 19, 6),
(243, 1, 'text', 'Действует до:', 'Информация о туристах', 19, 7),
(244, 1, 'text', 'Кем выдан паспорт:', 'Информация о туристах', 19, 8),
(245, 1, 'text', 'Гражданство:', 'Информация о туристах', 19, 9),
(246, 1, 'text', 'Заголовок 2', 'Информация о туристах', 19, 1),
(247, 1, 'text', 'Номер телефона:', 'Информация о туристах', 19, 2),
(248, 1, 'text', 'Почта:', 'Информация о туристах', 19, 3);

-- --------------------------------------------------------

--
-- Структура таблиці `single_int`
--

DROP TABLE IF EXISTS `single_int`;
CREATE TABLE `single_int` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `single_int_ru`
--

DROP TABLE IF EXISTS `single_int_ru`;
CREATE TABLE `single_int_ru` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `single_int_uk`
--

DROP TABLE IF EXISTS `single_int_uk`;
CREATE TABLE `single_int_uk` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `single_money`
--

DROP TABLE IF EXISTS `single_money`;
CREATE TABLE `single_money` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` decimal(15,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `single_money_ru`
--

DROP TABLE IF EXISTS `single_money_ru`;
CREATE TABLE `single_money_ru` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` decimal(15,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `single_money_uk`
--

DROP TABLE IF EXISTS `single_money_uk`;
CREATE TABLE `single_money_uk` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` decimal(15,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `single_page`
--

DROP TABLE IF EXISTS `single_page`;
CREATE TABLE `single_page` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sort` int(11) NOT NULL DEFAULT 0,
  `parent` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `single_page`
--

INSERT INTO `single_page` (`id`, `title`, `sort`, `parent`) VALUES
(1, 'Контакты', 10, 1),
(2, 'Контактные данные', 10, 2),
(3, 'FAQ', 9, 1),
(4, 'Как это работает', 9, 2),
(5, '404', 1, 1),
(6, 'Главная', 11, 1),
(7, 'Хедер', 11, 2),
(8, 'Футер', 11, 2),
(9, 'Модальные окна (региcтрация)', 10, 3),
(10, 'ЛК турист', 10, 1),
(11, 'Модальные окна (логин)', 10, 3),
(12, 'ЛК турагент', 9, 1),
(13, 'Форма подобрать тур', 7, 3),
(14, 'Модальные окна (забыли пароль)', 10, 3),
(15, 'Сообщение', 10, 3),
(16, 'Поддержка', 10, 3),
(17, 'Биржа туров', 10, 1),
(18, 'Тур', 7, 1),
(19, 'Страница тура', 10, 1),
(20, 'Переводы', 1, 2);

-- --------------------------------------------------------

--
-- Структура таблиці `single_text`
--

DROP TABLE IF EXISTS `single_text`;
CREATE TABLE `single_text` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `single_text_ru`
--

DROP TABLE IF EXISTS `single_text_ru`;
CREATE TABLE `single_text_ru` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `single_text_ru`
--

INSERT INTO `single_text_ru` (`field_id`, `value`) VALUES
(3, '[{\"title\":\"Телефон\",\"type\":\"text\",\"default\":null,\"values\":[\"+38 (093) 170-27-40\",\"+38 (093) 170-27-41\"]}]'),
(9, 'Bronara | Contact'),
(10, 'Bronara | Contact'),
(11, 'Bronara | Contact'),
(13, '[{\"title\":\"Ссылка\",\"type\":\"text\",\"default\":null,\"values\":[\"https:\\/\\/www.instagram.com\\/\",\"https:\\/\\/www.facebook.com\\/\",\"https:\\/\\/telegram.org\\/\",\"https:\\/\\/www.viber.com\\/\"]},{\"title\":\"Картинка\",\"type\":\"photo\",\"default\":null,\"values\":[\"\\/photos\\/1\\/social\\/inst.svg\",\"\\/photos\\/1\\/social\\/fb.svg\",\"\\/photos\\/1\\/social\\/telegram.svg\",\"\\/photos\\/1\\/social\\/vb.svg\"]},{\"title\":\"Название\",\"type\":\"text\",\"default\":null,\"values\":[\"instagram\",\"facebook\",\"telegram\",\"viber\"]}]'),
(15, 'Bronara | FAQ'),
(16, 'Bronara | FAQ'),
(17, 'Bronara | FAQ'),
(21, '[{\"title\":\"Вопрос\",\"type\":\"textarea\",\"default\":null,\"values\":[\"Какими способами я могу оплатить тур?\",\"Я могу купить тур для третьего лица?\",\"Какими карточками я могу расчитаться?\"]},{\"title\":\"Ответ\",\"type\":\"ckeditor\",\"default\":null,\"values\":[\"<p>На нашем сайте есть несколько способов оплаты за тур:<br><br>Онлайн банковской картой через надежные платежные системы (liqpay, fondy, 4bill) - без комиссии за платеж.<br>В Приват 24 - без комиссии за платеж!<br>Наличными на любом отделении Новой почты, выбрав при бронировании способ оплаты Nova pay - без комиссии за платеж!<br>Оформить рассрочку от OTP банке (условия расписаны при выборе оплаты через OTP).<br>По счету в любом банке (Приват банк без комиссии за платеж).<br>Наличными в одном из наших офисов.<br><br>Рекомендуем оплачивать тур онлайн, так как предложения на сайте меняются в режиме реального времени. Это самый быстрый и удобный вариант оплаты, который позволяет в считанные минуты забронировать и приобрести тур, пока его не купил кто-то другой.<\\/p>\",\"<ol><li>Онлайн банковской картой через надежные платежные системы (liqpay, fondy, 4bill) - без комиссии за платеж.<\\/li><li>В Приват 24 - без комиссии за платеж!<\\/li><\\/ol>\",\"<p>На нашем сайте есть несколько способов оплаты за тур:<br><br>Онлайн банковской картой через надежные платежные системы (liqpay, fondy, 4bill) - без комиссии за платеж.<br>В Приват 24 - без комиссии за платеж!<br>Наличными на любом отделении Новой почты, выбрав при бронировании способ оплаты Nova pay - без комиссии за платеж!<br>Оформить рассрочку от OTP банке (условия расписаны при выборе оплаты через OTP).<br>По счету в любом банке (Приват банк без комиссии за платеж).<br>Наличными в одном из наших офисов.<\\/p>\"]}]'),
(22, '[{\"title\":\"Вопрос\",\"type\":\"textarea\",\"default\":null,\"values\":[\"Кокое время указывается в билете?\"]},{\"title\":\"Ответ\",\"type\":\"ckeditor\",\"default\":null,\"values\":[\"<p>На нашем сайте есть несколько способов оплаты за тур:<br><br>Онлайн банковской картой через надежные платежные системы (liqpay, fondy, 4bill) - без комиссии за платеж.<br>В Приват 24 - без комиссии за платеж!<br>Наличными на любом отделении Новой почты, выбрав при бронировании способ оплаты Nova pay - без комиссии за платеж!<br>Оформить рассрочку от OTP банке (условия расписаны при выборе оплаты через OTP).<br>По счету в любом банке (Приват банк без комиссии за платеж).<br>Наличными в одном из наших офисов.<\\/p>\"]}]'),
(25, '[{\"title\":\"Шаг №\",\"type\":\"text\",\"default\":null,\"values\":[\"Шаг 1\",\"Шаг 2\",\"Шаг 3\",\"Шаг 4\",\"Шаг 5\",\"Шаг 6\"]},{\"title\":\"Картинка\",\"type\":\"photo\",\"default\":null,\"values\":[\"\\/photos\\/1\\/work\\/profile1.png\",\"\\/photos\\/1\\/work\\/profile2.png\",\"\\/photos\\/1\\/work\\/profile3.png\",\"\\/photos\\/1\\/work\\/profile4.png\",\"\\/photos\\/1\\/work\\/profile5.png\",\"\\/photos\\/1\\/work\\/profile6.png\"]},{\"title\":\"Текст\",\"type\":\"text\",\"default\":null,\"values\":[\"Заполняете форму и отправляете заявку\",\"Вашу заявку обрабатывают менеджеры турагентств страны\",\"Получаете лучшие варианты вашего отдыха\",\"Запрашиваете подтверждение актуальности тура\",\"Бронируете он-лайн или в офисе турагента\",\"Получаете документы и наслаждаетесь отдыхом!\"]}]'),
(30, 'Bronara | 404'),
(31, 'Bronara | 404'),
(32, 'Bronara | 404'),
(33, '[BRONARA] - Все туры в одном месте.'),
(34, 'Оставь заявку и получи ОНЛАЙН подбор от всех ведущих турагентств'),
(39, '[{\"title\":\"Картинка\",\"type\":\"photo\",\"default\":null,\"values\":[\"\\/photos\\/1\\/advanteges\\/smartphone1.png\",\"\\/photos\\/1\\/advanteges\\/plane.png\",\"\\/photos\\/1\\/advanteges\\/payment-method 1.png\",\"\\/photos\\/1\\/advanteges\\/baggage 1.png\"]},{\"title\":\"Название\",\"type\":\"text\",\"default\":null,\"values\":[\"Просто создай заявку на отдых\",\"Выбирай лучшие варианты отдыха на Бирже туров\",\"Оплачивай туры онлайн не выходя из дома или в офисе\",\"Планируй отдых,сравнивай цены,бронируй туры\"]},{\"title\":\"Описание\",\"type\":\"text\",\"default\":null,\"values\":[\"Ведущие турагентства онлайн подберут варианты. Система сама отсортирует  лучшие туры с самой выгодной стоимостью.\",\"Только самые последние и актуальные туры подобранные турагентствами онлайн.\",\"Персональная поддержка во время путешествия 24\\/7. Получи все документы на отдых в личном кабинете BRONARA.\",\"Теперь все это стало проще делать в одном месте с сервисом BRONARA.\"]}]'),
(41, 'Bronara | Mainpage'),
(42, 'Bronara | Mainpage'),
(43, 'Bronara | Mainpage'),
(44, '/photos/1/logo.svg'),
(53, '/photos/1/logo.svg'),
(97, 'Bronara | Личный кабинет туриста'),
(98, 'Bronara | Личный кабинет туриста'),
(99, 'Bronara | Личный кабинет туриста'),
(138, 'Купите доступ, чтобы иметь возможность отвечать на заявки туристов'),
(146, 'Загрузите фото следующих документов: сертификат-лицензия турагентства'),
(153, 'Введите код из полученного смс'),
(168, 'Спасибо, ваш запрос отправлен! Ожидайте ответа на почте'),
(169, 'Ошибка'),
(170, 'Ваш комментарий'),
(179, 'Ваш код'),
(180, 'Сброс пароля'),
(184, 'Bronara | Биржа туров'),
(185, 'Bronara | Биржа туров'),
(186, 'Bronara | Биржа туров'),
(190, 'Для запроса подтверждения актуальности тура сохраните его в избранное');

-- --------------------------------------------------------

--
-- Структура таблиці `single_text_uk`
--

DROP TABLE IF EXISTS `single_text_uk`;
CREATE TABLE `single_text_uk` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `single_text_uk`
--

INSERT INTO `single_text_uk` (`field_id`, `value`) VALUES
(3, '[{\"title\":\"Телефон\",\"type\":\"text\",\"default\":\"\",\"values\":[]}]'),
(9, 'Bronara | Contact'),
(10, 'Bronara | Contact'),
(11, 'Bronara | Contact'),
(13, '[{\"title\":\"Ссылка\",\"type\":\"text\",\"default\":\"\",\"values\":[]},{\"title\":\"Картинка\",\"type\":\"photo\",\"default\":\"\",\"values\":[]},{\"title\":\"Название\",\"type\":\"text\",\"default\":\"\",\"values\":[]}]'),
(15, 'Bronara | FAQ'),
(16, 'Bronara | FAQ'),
(17, 'Bronara | FAQ'),
(21, '[{\"title\":\"Вопрос\",\"type\":\"textarea\",\"default\":\"\",\"values\":[]},{\"title\":\"Ответ\",\"type\":\"ckeditor\",\"default\":\"\",\"values\":[]}]'),
(22, '[{\"title\":\"Вопрос\",\"type\":\"textarea\",\"default\":\"\",\"values\":[]},{\"title\":\"Ответ\",\"type\":\"ckeditor\",\"default\":\"\",\"values\":[]}]'),
(25, '[{\"title\":\"Шаг №\",\"type\":\"text\",\"default\":\"\",\"values\":[]},{\"title\":\"Картинка\",\"type\":\"photo\",\"default\":\"\",\"values\":[]},{\"title\":\"Текст\",\"type\":\"text\",\"default\":\"\",\"values\":[]}]'),
(30, 'Bronara | 404'),
(31, 'Bronara | 404'),
(32, 'Bronara | 404'),
(33, '<span>BRONARA</span> - Все туры в одном месте.'),
(34, 'Оставь заявку и получи ОНЛАЙН подбор от всех ведущих турагентств'),
(39, '[{\"title\":\"Картинка\",\"type\":\"photo\",\"default\":\"\",\"values\":[]},{\"title\":\"Название\",\"type\":\"text\",\"default\":\"\",\"values\":[]},{\"title\":\"Описание\",\"type\":\"text\",\"default\":\"\",\"values\":[]}]'),
(41, 'Bronara | Mainpage'),
(42, 'Bronara | Mainpage'),
(43, 'Bronara | Mainpage'),
(44, '/photos/1/logo.svg'),
(53, '/photos/1/logo.svg'),
(97, 'Bronara | Personal tourist account'),
(98, 'Bronara | Personal tourist account'),
(99, 'Bronara | Personal tourist account'),
(138, 'Купите доступ, чтобы иметь возможность отвечать на заявки туристов'),
(146, 'Загрузите фото следующих документов: сертификат-лицензия турагентства'),
(153, 'Введите код из полученного смс'),
(168, 'Спасибо, ваш запрос отправлен! Ожидайте ответа на почте'),
(169, 'Ошибка'),
(170, 'Ваш комментарий'),
(179, 'Ваш код'),
(180, 'Сброс пароля'),
(184, 'Bronara | Биржа туров'),
(185, 'Bronara | Биржа туров'),
(186, 'Bronara | Биржа туров'),
(190, 'Для запроса подтверждения актуальности тура сохраните его в избранное');

-- --------------------------------------------------------

--
-- Структура таблиці `single_tinyint`
--

DROP TABLE IF EXISTS `single_tinyint`;
CREATE TABLE `single_tinyint` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `single_tinyint_ru`
--

DROP TABLE IF EXISTS `single_tinyint_ru`;
CREATE TABLE `single_tinyint_ru` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `single_tinyint_uk`
--

DROP TABLE IF EXISTS `single_tinyint_uk`;
CREATE TABLE `single_tinyint_uk` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `single_varchar`
--

DROP TABLE IF EXISTS `single_varchar`;
CREATE TABLE `single_varchar` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `single_varchar_ru`
--

DROP TABLE IF EXISTS `single_varchar_ru`;
CREATE TABLE `single_varchar_ru` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `single_varchar_ru`
--

INSERT INTO `single_varchar_ru` (`field_id`, `value`) VALUES
(1, 'Контакты'),
(2, 'Телефоны'),
(4, 'Адрес'),
(5, '117105, Москва, Варшавское шоссе, д.1, стр.6'),
(6, 'Почта и соцсети'),
(7, 'bronara@info.com'),
(14, 'FAQ'),
(18, 'Часто задаваемые вопросы'),
(19, 'Туристу'),
(20, 'Турагенту'),
(23, 'Как это работает'),
(26, 'Нам не удалось найти страницу:('),
(27, 'Но мы с легкостью найдем Вам подходящий тур!'),
(28, '/'),
(29, 'Подобрать тур'),
(35, '/policy'),
(36, 'Важная информация'),
(37, 'Турагентов в системе'),
(38, 'Выбрать лучший отдых стало проще'),
(40, 'Популярные варианты на Бирже туров'),
(45, '/exchange'),
(46, 'Биржа туров'),
(47, '/contacts'),
(48, 'Контакты'),
(49, 'Войти'),
(50, 'Выйти'),
(51, 'Связаться со службой поддержки'),
(54, 'Контакты'),
(55, '© 2001-2021 Bronara. Все права защищены'),
(56, 'Условия использования'),
(57, 'Конфиденциальность'),
(58, 'Политика возврата'),
(59, 'FAQ'),
(60, 'Язык сайта'),
(61, '/policy'),
(62, '/policy'),
(63, '/policy'),
(64, '/faq'),
(65, 'Подобрать тур'),
(66, 'Регистрация'),
(67, 'Турист'),
(68, 'Турагент'),
(69, 'Вы регистрируетесь как турагент!'),
(70, 'Название Турагентства:'),
(71, 'Введите название'),
(72, 'Запомнить'),
(73, 'Зарегистрироваться как турагент'),
(74, 'Зарегистрироваться как турист'),
(75, 'Вы регистрируетесь как турист!'),
(76, 'Войти как турагент'),
(77, 'Войти как турист'),
(78, 'Имя и фамилия менеджера:'),
(79, 'Введите имя и фамилию'),
(80, 'E-mail:'),
(81, 'Введите e-mail'),
(82, 'Номер телефона:'),
(83, '+38 (0ХХ) ХХХ - ХХ - ХХ'),
(84, 'Пароль'),
(85, 'Введите ваш пароль'),
(86, 'Ваше имя:'),
(87, 'Введите имя'),
(88, 'E-mail:'),
(89, 'Введите e-mail'),
(90, 'Номер телефона:'),
(91, '+38 (0ХХ) ХХХ - ХХ - ХХ'),
(92, 'Пароль'),
(93, 'Введите ваш пароль'),
(94, 'Ошибка'),
(95, '/policy'),
(96, 'Правила посещения стран'),
(100, 'Ваше имя:'),
(101, 'Номер телефона:'),
(102, 'Ваш e-mail:'),
(103, 'Ваш рейтинг:'),
(104, 'Сохранить изминения'),
(105, 'Изменения сохранены!'),
(106, 'Ошибка! Проверьте введенные данные!'),
(107, 'Вход в личный кабинет'),
(108, 'Войти как'),
(109, 'Турист'),
(110, 'Турагент'),
(111, 'Запомнить'),
(112, 'Забыли пароль?'),
(113, 'Ошибка! Проверьте правильность введенных данных'),
(114, 'Зарегистрироваться как турагент'),
(115, 'Зарегистрироваться как турист'),
(116, 'Или авторизироваться с помощью'),
(117, 'Ваш e-mail:'),
(118, 'Введите ваш e-mail'),
(119, 'Пароль'),
(120, 'Введите ваш пароль'),
(121, 'Ваш ID:'),
(122, 'Введите ваш id'),
(123, 'Пароль'),
(124, 'Введите ваш пароль'),
(125, 'Ваше имя:'),
(126, 'Номер телефона:'),
(127, 'Ваш e-mail:'),
(128, 'Ваш рейтинг:'),
(129, 'Название турагенства:'),
(130, 'Ваш адрес:'),
(131, 'График работы:'),
(132, 'Сохранить изминения'),
(133, 'Изменения сохранены!'),
(134, 'Ошибка! Проверьте введенные данные!'),
(135, 'ID-номер:'),
(136, 'Загрузить фото'),
(137, 'Подписка на доступ'),
(139, 'До истичения подписки осталось:'),
(140, 'Оплатить доступ'),
(141, 'Подберите свой идеальный тур'),
(142, 'Созданные заявки'),
(143, 'Город вылета:'),
(144, 'Документы'),
(145, 'Добавить фото'),
(147, 'Забыли пароль?'),
(148, 'Пожалуйста, введите свой e-mail'),
(149, 'E-mail'),
(150, 'Введите e-mail'),
(151, 'Отправить'),
(152, 'E-mail не существует, зарегестрируйтесь'),
(154, 'Код'),
(155, 'Введите код'),
(156, 'Отправить'),
(157, 'Неправильный код'),
(158, 'Введите новый пароль'),
(159, 'Пароль'),
(160, 'Повторите пароль'),
(161, 'Отправить'),
(162, 'Пароли не совадают'),
(163, 'Вернуться назад'),
(164, 'Вы можете выбрать максимум 3 отеля'),
(165, 'Понятно'),
(166, 'Какой вопрос вас интересует'),
(167, 'Отправить'),
(171, 'Опишите свою проблему или предложения, замечания:'),
(172, 'Спасибо за заявку! Ожидайте предложений от турагентов!'),
(173, 'Ошибка! Проверьте введенные данные!'),
(175, 'Понятно'),
(176, 'Вы не можете создать больше 3 заявок'),
(177, 'Зайдите или зарегистрируйтесь как турист'),
(178, 'Понятно'),
(181, 'Найдите самый выгодный тур!'),
(182, 'Вам могут подойти:'),
(183, 'Обновить список'),
(187, 'Рейтинг:'),
(188, 'Подробнее о туре'),
(189, 'Запросить актуальность'),
(191, 'Добавить тур в избранное:'),
(192, 'Тур добавлен в избранное'),
(193, 'Рейтинг отеля'),
(194, 'Купить за'),
(195, 'Чат по туру'),
(196, 'Подробнее о туре'),
(197, 'Запросить актуальность'),
(198, 'Забронировать тур'),
(199, 'Показать ещё туры'),
(200, 'взр.'),
(201, 'дет.'),
(202, 'Показать больше'),
(203, 'взр.'),
(204, 'реб.'),
(205, 'Виза'),
(206, 'Маршрут'),
(207, 'Даты'),
(208, 'Туристы'),
(209, 'Номер и питание'),
(210, 'Туда'),
(211, 'Назад'),
(212, 'Номер лицензии:'),
(213, 'Отзывы'),
(214, 'TripAdvisor'),
(215, 'TopHotels'),
(216, '- звездночный отель'),
(217, 'ID тура:'),
(218, 'Колличество звезд:'),
(219, 'Рейтинг:'),
(220, 'Страна, город:'),
(221, 'Цена:'),
(222, 'Номер'),
(223, 'Питание'),
(224, 'Информация по вылету и прилету:'),
(225, 'Вылет'),
(226, 'Прилет'),
(227, 'Информация о турагенте'),
(228, 'Имя:'),
(229, 'Название турагенства:'),
(230, 'Рейтинг:'),
(231, 'Номер лицензии:'),
(232, 'Номер телефона:'),
(233, 'Адрес офиса:'),
(234, 'Часы работы:'),
(235, 'Информация об отеле'),
(236, 'Тур успешно забронирован'),
(237, 'В мои туры'),
(238, 'Статус бронирования:'),
(239, 'Информация о туристах'),
(240, 'ФИО:'),
(241, 'Дата рождения:'),
(242, 'Серия и номер паспорта:'),
(243, 'Действует до:'),
(244, 'Кем выдан паспорт:'),
(245, 'Гражданство:'),
(246, 'Информация о туристe'),
(247, 'Номер телефона:'),
(248, 'Почта:');

-- --------------------------------------------------------

--
-- Структура таблиці `single_varchar_uk`
--

DROP TABLE IF EXISTS `single_varchar_uk`;
CREATE TABLE `single_varchar_uk` (
  `field_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `single_varchar_uk`
--

INSERT INTO `single_varchar_uk` (`field_id`, `value`) VALUES
(1, 'Контакты'),
(2, 'Телефоны'),
(4, 'Адрес'),
(5, '117105, Москва, Варшавское шоссе, д.1, стр.6'),
(6, 'Почта и соцсети'),
(7, 'bronara@info.com'),
(14, 'FAQ'),
(18, 'Часто задаваемые вопросы'),
(19, 'Туристу'),
(20, 'Турагенту'),
(23, 'Как это работает'),
(26, 'Нам не удалось найти страницу:('),
(27, 'Но мы с легкостью найдем Вам подходящий тур!'),
(28, '/'),
(29, 'Подобрать тур'),
(35, '/policy'),
(36, 'Важная информация'),
(37, 'Турагентов в системе'),
(38, 'Выбрать лучший отдых стало проще'),
(40, 'Популярные варианты на Бирже туров'),
(45, '/exchange'),
(46, 'Биржа туров'),
(47, '/contacts'),
(48, 'Контакты'),
(49, 'Войти'),
(50, 'Выйти'),
(51, 'Связаться со службой поддержки'),
(54, 'Контакты'),
(55, '© 2001-2021 Bronara. Все права защищены'),
(56, '/policy'),
(57, '/policy'),
(58, '/policy'),
(59, '/faq'),
(60, 'Язык сайта'),
(61, '/policy'),
(62, '/policy'),
(63, '/policy'),
(64, '/faq'),
(65, 'Подобрать тур'),
(66, 'Регистрация'),
(67, 'Турист'),
(68, 'Турагент'),
(69, 'Вы регистрируетесь как турагент!'),
(70, 'Название Турагентства:'),
(71, 'Введите название'),
(72, 'Запомнить'),
(73, 'Зарегистрироваться как турагент'),
(74, 'Зарегистрироваться как турист'),
(75, 'Вы регистрируетесь как турист!'),
(76, 'Войти как турагент'),
(77, 'Войти как турист'),
(78, 'Имя и фамилия менеджера:'),
(79, 'Введите имя и фамилию'),
(80, 'E-mail:'),
(81, 'Введите e-mail'),
(82, 'Номер телефона:'),
(83, '+38 (0ХХ) ХХХ - ХХ - ХХ'),
(84, 'Пароль'),
(85, 'Введите ваш пароль'),
(86, 'Ваше имя:'),
(87, 'Введите имя'),
(88, 'E-mail:'),
(89, 'Введите e-mail'),
(90, 'Номер телефона:'),
(91, '+38 (0ХХ) ХХХ - ХХ - ХХ'),
(92, 'Пароль'),
(93, 'Введите ваш пароль'),
(94, 'Ошибка'),
(95, '/policy'),
(96, 'Правила посещения стран'),
(100, 'Ваше имя:'),
(101, 'Номер телефона:'),
(102, 'Ваш e-mail:'),
(103, 'Ваш рейтинг:'),
(104, 'Сохранить изминения'),
(105, 'Изменения сохранены!'),
(106, 'Ошибка! Проверьте введенные данные!'),
(107, 'Вход в личный кабинет'),
(108, 'Войти как'),
(109, 'Турист'),
(110, 'Турагент'),
(111, 'Запомнить'),
(112, 'Забыли пароль?'),
(113, 'Ошибка! Проверьте правильность введенных данных'),
(114, 'Зарегистрироваться как турагент'),
(115, 'Зарегистрироваться как турист'),
(116, 'Или авторизироваться с помощью'),
(117, 'Ваш e-mail:'),
(118, 'Введите ваш e-mail'),
(119, 'Пароль'),
(120, 'Введите ваш пароль'),
(121, 'Ваш ID:'),
(122, 'Введите ваш id'),
(123, 'Пароль'),
(124, 'Введите ваш пароль'),
(125, 'Ваше имя:'),
(126, 'Номер телефона:'),
(127, 'Ваш e-mail:'),
(128, 'Ваш рейтинг:'),
(129, 'Название турагенства:'),
(130, 'Ваш адрес:'),
(131, 'График работы:'),
(132, 'Сохранить изминения'),
(133, 'Изменения сохранены!'),
(134, 'Ошибка! Проверьте введенные данные!'),
(135, 'ID-номер:'),
(136, 'Загрузить фото'),
(137, 'Подписка на доступ'),
(139, 'До истичения подписки осталось:'),
(140, 'Оплатить доступ'),
(141, 'Подберите свой идеальный тур'),
(142, 'Созданные заявки'),
(143, 'Город вылета:'),
(144, 'Документы'),
(145, 'Добавить фото'),
(147, 'Забыли пароль?'),
(148, 'Пожалуйста, введите свой e-mail'),
(149, 'E-mail'),
(150, 'Введите e-mail'),
(151, 'Отправить'),
(152, 'E-mail не существует, зарегестрируйтесь'),
(154, 'Код'),
(155, 'Введите код'),
(156, 'Отправить'),
(157, 'Неправильный код'),
(158, 'Введите новый пароль'),
(159, 'Пароль'),
(160, 'Повторите пароль'),
(161, 'Отправить'),
(162, 'Пароли не совадают'),
(163, 'Вернуться назад'),
(164, 'Вы можете выбрать максимум 3 отеля'),
(165, 'Понятно'),
(166, 'Какой вопрос вас интересует'),
(167, 'Отправить'),
(171, 'Опишите свою проблему или предложения, замечания:'),
(172, 'Спасибо за заявку! Ожидайте предложений от турагентов!'),
(173, 'Ошибка! Проверьте введенные данные!'),
(175, 'Понятно'),
(176, 'Вы не можете создать больше 3 заявок'),
(177, 'Зайдите или зарегистрируйтесь как турист'),
(178, 'Понятно'),
(181, 'Найдите самый выгодный тур!'),
(182, 'Вам могут подойти:'),
(183, 'Обновить список'),
(187, 'Рейтинг:'),
(188, 'Подробнее о туре'),
(189, 'Запросить актуальность'),
(191, 'Добавить тур в избранное:'),
(192, 'Тур добавлен в избранное'),
(193, 'Рейтинг отеля'),
(194, 'Купить за'),
(195, 'Чат по туру'),
(196, 'Подробнее о туре'),
(197, 'Запросить актуальность'),
(198, 'Забронировать тур'),
(199, 'Показать ещё туры'),
(200, 'взр.'),
(201, 'дет.'),
(202, 'Показать больше'),
(203, 'взр.'),
(204, 'реб.'),
(205, 'Виза'),
(206, 'Маршрут'),
(207, 'Даты'),
(208, 'Туристы'),
(209, 'Номер и питание'),
(210, 'Туда'),
(211, 'Назад'),
(212, 'Номер лицензии:'),
(213, 'Отзывы'),
(214, 'TripAdvisor'),
(215, 'TopHotels'),
(216, '- звездночный отель'),
(217, 'ID тура:'),
(218, 'Колличество звезд:'),
(219, 'Рейтинг:'),
(220, 'Страна, город:'),
(221, 'Цена:'),
(222, 'Номер'),
(223, 'Питание'),
(224, 'Информация по вылету и прилету:'),
(225, 'Вылет'),
(226, 'Прилет'),
(227, 'Информация о турагенте'),
(228, 'Имя:'),
(229, 'Название турагенства:'),
(230, 'Рейтинг:'),
(231, 'Номер лицензии:'),
(232, 'Номер телефона:'),
(233, 'Адрес офиса:'),
(234, 'Часы работы:'),
(235, 'Информация об отеле'),
(236, 'Тур успешно забронирован'),
(237, 'В мои туры'),
(238, 'Статус бронирования:'),
(239, 'Информация о туристах'),
(240, 'ФИО:'),
(241, 'Дата рождения:'),
(242, 'Серия и номер паспорта:'),
(243, 'Действует до:'),
(244, 'Кем выдан паспорт:'),
(245, 'Гражданство:'),
(246, 'Информация о туристe'),
(247, 'Номер телефона:'),
(248, 'Почта:');

-- --------------------------------------------------------

--
-- Структура таблиці `standart_ru`
--

DROP TABLE IF EXISTS `standart_ru`;
CREATE TABLE `standart_ru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `standart_ru`
--

INSERT INTO `standart_ru` (`id`, `title`, `slug`, `content`, `meta_title`, `meta_desc`, `meta_key`, `created_at`, `updated_at`) VALUES
(1, 'Правила оплаты и рассрочка', 'pravila-oplaty-i-rassrochka', '<h2>Полная оплата банковской картой</h2><p>Оплата туров онлайн без комиссии!<br>В момент бронирования тура оплата производится с помощью банковских карт с применением технологии двухстадийной авторизации. Это означает, что деньги замораживаются (блокируются) на Вашей карте до получения подтверждения всех услуг в заявке. Как только все услуги в заявке подтверждены, деньги списываются с карты автоматически. В случае получения отказа, например, из отеля, деньги автоматически вернутся на карту держателя.<br><br>Мы не берем комиссию с клиентов при оплате туров банковской картой.<br><br>Мы принимаем к оплате банковские карты следующих платежных систем: VISA, Mastercard</p><p>&nbsp;</p><p><strong>1. Бронирование без предоплаты на 48 часов.</strong></p><p>Для туров на чартерных рейсах в Турцию, Египет, Грецию, Италию если до даты заезда более 30 дней Вы можете забронировать тур без предоплаты, в таком случае за вами будет сохранена стоимость и зарезервированы билеты, отель находится в статусе ожидания. В течении 48 часов с момента бронирования вам необходимо оплатить заявку, после этого отель перейдет в стадию бронирования.</p><p><strong>2. Внимание! В последний день раннего бронирования оплата должна поступить не позднее 18:00.</strong></p><p>Для туров на чартерных рейсах в Турцию, Египет, Грецию, Италию если до даты заезда более 30 дней Вы можете забронировать тур без предоплаты, в таком случае за вами будет сохранена стоимость и зарезервированы билеты, отель находится в статусе ожидания. В течении 48 часов с момента бронирования вам необходимо оплатить заявку, после этого отель перейдет в стадию бронирования.</p><p><strong>3. Частичная оплата банковской картой</strong></p><p>Для туров на чартерных рейсах в Турцию, Египет, Грецию, Италию если до даты заезда более 30 дней Вы можете забронировать тур без предоплаты, в таком случае за вами будет сохранена стоимость и зарезервированы билеты, отель находится в статусе ожидания. В течении 48 часов с момента бронирования вам необходимо оплатить заявку, после этого отель перейдет в стадию бронирования.</p><p>&nbsp;</p><h3>Для юридических лиц необходимо предоставить:</h3><ul><li>КОПИЯ банковской гарантии (кроме банков, которые находятся в состоянии вывода с рынка (источник 1, источник 2) и любых финансовых гарантий);</li><li>КОПИЯ лицензии (для туроператоров);</li><li>КОПИЯ свидетельства о регистрации плательщика НДС либо копия извлечения из Реестра плательщиков НДС (если плательщик НДС);</li><li>КОПИЯ извлечения (на укр. - «Витяг») из Реестра плательщиков единого налога (если плательщик единого налога);</li></ul><p>&nbsp;</p><h3>Для физических лиц - предпринимателей необходимо предоставить:</h3><ul><li>КОПИЯ банковской гарантии (кроме банков, которые находятся в состоянии вывода с рынка (источник 1, источник 2) и любых финансовых гарантий);</li><li>КОПИЯ лицензии (для туроператоров);</li><li>КОПИЯ свидетельства о регистрации плательщика НДС либо копия извлечения из Реестра плательщиков НДС (если плательщик НДС);</li><li>КОПИЯ извлечения (на укр. - «Витяг») из Реестра плательщиков единого налога (если плательщик единого налога);</li></ul>', 'Правила оплаты и рассрочка', 'Правила оплаты и рассрочка', 'Правила оплаты и рассрочка', '2022-08-15 09:13:04', '2022-08-15 09:31:36'),
(2, 'Политика', 'policy', '<h2>Политика</h2><p>Оплата туров онлайн без комиссии!<br>В момент бронирования тура оплата производится с помощью банковских карт с применением технологии двухстадийной авторизации. Это означает, что деньги замораживаются (блокируются) на Вашей карте до получения подтверждения всех услуг в заявке. Как только все услуги в заявке подтверждены, деньги списываются с карты автоматически. В случае получения отказа, например, из отеля, деньги автоматически вернутся на карту держателя.<br><br>Мы не берем комиссию с клиентов при оплате туров банковской картой.<br><br>Мы принимаем к оплате банковские карты следующих платежных систем: VISA, Mastercard</p><p>&nbsp;</p><p><strong>1. Бронирование без предоплаты на 48 часов.</strong></p><p>Для туров на чартерных рейсах в Турцию, Египет, Грецию, Италию если до даты заезда более 30 дней Вы можете забронировать тур без предоплаты, в таком случае за вами будет сохранена стоимость и зарезервированы билеты, отель находится в статусе ожидания. В течении 48 часов с момента бронирования вам необходимо оплатить заявку, после этого отель перейдет в стадию бронирования.</p><p><strong>2. Внимание! В последний день раннего бронирования оплата должна поступить не позднее 18:00.</strong></p><p>Для туров на чартерных рейсах в Турцию, Египет, Грецию, Италию если до даты заезда более 30 дней Вы можете забронировать тур без предоплаты, в таком случае за вами будет сохранена стоимость и зарезервированы билеты, отель находится в статусе ожидания. В течении 48 часов с момента бронирования вам необходимо оплатить заявку, после этого отель перейдет в стадию бронирования.</p><p><strong>3. Частичная оплата банковской картой</strong></p><p>Для туров на чартерных рейсах в Турцию, Египет, Грецию, Италию если до даты заезда более 30 дней Вы можете забронировать тур без предоплаты, в таком случае за вами будет сохранена стоимость и зарезервированы билеты, отель находится в статусе ожидания. В течении 48 часов с момента бронирования вам необходимо оплатить заявку, после этого отель перейдет в стадию бронирования.</p><p>&nbsp;</p><h3>Для юридических лиц необходимо предоставить:</h3><ul><li>КОПИЯ банковской гарантии (кроме банков, которые находятся в состоянии вывода с рынка (источник 1, источник 2) и любых финансовых гарантий);</li><li>КОПИЯ лицензии (для туроператоров);</li><li>КОПИЯ свидетельства о регистрации плательщика НДС либо копия извлечения из Реестра плательщиков НДС (если плательщик НДС);</li><li>КОПИЯ извлечения (на укр. - «Витяг») из Реестра плательщиков единого налога (если плательщик единого налога);</li></ul><p>&nbsp;</p><h3>Для физических лиц - предпринимателей необходимо предоставить:</h3><ul><li>КОПИЯ банковской гарантии (кроме банков, которые находятся в состоянии вывода с рынка (источник 1, источник 2) и любых финансовых гарантий);</li><li>КОПИЯ лицензии (для туроператоров);</li><li>КОПИЯ свидетельства о регистрации плательщика НДС либо копия извлечения из Реестра плательщиков НДС (если плательщик НДС);</li><li>КОПИЯ извлечения (на укр. - «Витяг») из Реестра плательщиков единого налога (если плательщик единого налога);</li></ul>', 'Политика', 'Политика', 'Политика', '2022-08-23 08:04:15', '2022-08-23 08:04:51');

-- --------------------------------------------------------

--
-- Структура таблиці `standart_uk`
--

DROP TABLE IF EXISTS `standart_uk`;
CREATE TABLE `standart_uk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `standart_uk`
--

INSERT INTO `standart_uk` (`id`, `title`, `slug`, `content`, `meta_title`, `meta_desc`, `meta_key`, `created_at`, `updated_at`) VALUES
(1, 'Правила оплаты и рассрочка', 'pravila-oplaty-i-rassrochka', '<h3>Полная оплата банковской картой</h3><p>Оплата туров онлайн без комиссии!<br>В момент бронирования тура оплата производится с помощью банковских карт с применением технологии двухстадийной авторизации. Это означает, что деньги замораживаются (блокируются) на Вашей карте до получения подтверждения всех услуг в заявке. Как только все услуги в заявке подтверждены, деньги списываются с карты автоматически. В случае получения отказа, например, из отеля, деньги автоматически вернутся на карту держателя.<br><br>Мы не берем комиссию с клиентов при оплате туров банковской картой.<br><br>Мы принимаем к оплате банковские карты следующих платежных систем: VISA, Mastercard</p><p>1. Бронирование без предоплаты на 48 часов.</p><p>Для туров на чартерных рейсах в Турцию, Египет, Грецию, Италию если до даты заезда более 30 дней Вы можете забронировать тур без предоплаты, в таком случае за вами будет сохранена стоимость и зарезервированы билеты, отель находится в статусе ожидания. В течении 48 часов с момента бронирования вам необходимо оплатить заявку, после этого отель перейдет в стадию бронирования.</p><p>2. Внимание! В последний день раннего бронирования оплата должна поступить не позднее 18:00.</p><p>Для туров на чартерных рейсах в Турцию, Египет, Грецию, Италию если до даты заезда более 30 дней Вы можете забронировать тур без предоплаты, в таком случае за вами будет сохранена стоимость и зарезервированы билеты, отель находится в статусе ожидания. В течении 48 часов с момента бронирования вам необходимо оплатить заявку, после этого отель перейдет в стадию бронирования.</p><p>3. Частичная оплата банковской картой</p><p>Для туров на чартерных рейсах в Турцию, Египет, Грецию, Италию если до даты заезда более 30 дней Вы можете забронировать тур без предоплаты, в таком случае за вами будет сохранена стоимость и зарезервированы билеты, отель находится в статусе ожидания. В течении 48 часов с момента бронирования вам необходимо оплатить заявку, после этого отель перейдет в стадию бронирования.</p><h3>Для юридических лиц необходимо предоставить:</h3><ul><li>КОПИЯ банковской гарантии (кроме банков, которые находятся в состоянии вывода с рынка (источник 1, источник 2) и любых финансовых гарантий);</li><li>КОПИЯ лицензии (для туроператоров);</li><li>КОПИЯ свидетельства о регистрации плательщика НДС либо копия извлечения из Реестра плательщиков НДС (если плательщик НДС);</li><li>КОПИЯ извлечения (на укр. - «Витяг») из Реестра плательщиков единого налога (если плательщик единого налога);</li></ul><h3>Для физических лиц - предпринимателей необходимо предоставить:</h3><ul><li>КОПИЯ банковской гарантии (кроме банков, которые находятся в состоянии вывода с рынка (источник 1, источник 2) и любых финансовых гарантий);</li><li>КОПИЯ лицензии (для туроператоров);</li><li>КОПИЯ свидетельства о регистрации плательщика НДС либо копия извлечения из Реестра плательщиков НДС (если плательщик НДС);</li><li>КОПИЯ извлечения (на укр. - «Витяг») из Реестра плательщиков единого налога (если плательщик единого налога);</li></ul>', 'Правила оплаты и рассрочка', 'Правила оплаты и рассрочка', 'Правила оплаты и рассрочка', '2022-08-15 09:13:04', '2022-08-15 09:13:04'),
(2, 'Правила оплаты и рассрочка copy', 'policy', '<h3>Полная оплата банковской картой</h3><p>Оплата туров онлайн без комиссии!<br>В момент бронирования тура оплата производится с помощью банковских карт с применением технологии двухстадийной авторизации. Это означает, что деньги замораживаются (блокируются) на Вашей карте до получения подтверждения всех услуг в заявке. Как только все услуги в заявке подтверждены, деньги списываются с карты автоматически. В случае получения отказа, например, из отеля, деньги автоматически вернутся на карту держателя.<br><br>Мы не берем комиссию с клиентов при оплате туров банковской картой.<br><br>Мы принимаем к оплате банковские карты следующих платежных систем: VISA, Mastercard</p><p>1. Бронирование без предоплаты на 48 часов.</p><p>Для туров на чартерных рейсах в Турцию, Египет, Грецию, Италию если до даты заезда более 30 дней Вы можете забронировать тур без предоплаты, в таком случае за вами будет сохранена стоимость и зарезервированы билеты, отель находится в статусе ожидания. В течении 48 часов с момента бронирования вам необходимо оплатить заявку, после этого отель перейдет в стадию бронирования.</p><p>2. Внимание! В последний день раннего бронирования оплата должна поступить не позднее 18:00.</p><p>Для туров на чартерных рейсах в Турцию, Египет, Грецию, Италию если до даты заезда более 30 дней Вы можете забронировать тур без предоплаты, в таком случае за вами будет сохранена стоимость и зарезервированы билеты, отель находится в статусе ожидания. В течении 48 часов с момента бронирования вам необходимо оплатить заявку, после этого отель перейдет в стадию бронирования.</p><p>3. Частичная оплата банковской картой</p><p>Для туров на чартерных рейсах в Турцию, Египет, Грецию, Италию если до даты заезда более 30 дней Вы можете забронировать тур без предоплаты, в таком случае за вами будет сохранена стоимость и зарезервированы билеты, отель находится в статусе ожидания. В течении 48 часов с момента бронирования вам необходимо оплатить заявку, после этого отель перейдет в стадию бронирования.</p><h3>Для юридических лиц необходимо предоставить:</h3><ul><li>КОПИЯ банковской гарантии (кроме банков, которые находятся в состоянии вывода с рынка (источник 1, источник 2) и любых финансовых гарантий);</li><li>КОПИЯ лицензии (для туроператоров);</li><li>КОПИЯ свидетельства о регистрации плательщика НДС либо копия извлечения из Реестра плательщиков НДС (если плательщик НДС);</li><li>КОПИЯ извлечения (на укр. - «Витяг») из Реестра плательщиков единого налога (если плательщик единого налога);</li></ul><h3>Для физических лиц - предпринимателей необходимо предоставить:</h3><ul><li>КОПИЯ банковской гарантии (кроме банков, которые находятся в состоянии вывода с рынка (источник 1, источник 2) и любых финансовых гарантий);</li><li>КОПИЯ лицензии (для туроператоров);</li><li>КОПИЯ свидетельства о регистрации плательщика НДС либо копия извлечения из Реестра плательщиков НДС (если плательщик НДС);</li><li>КОПИЯ извлечения (на укр. - «Витяг») из Реестра плательщиков единого налога (если плательщик единого налога);</li></ul>', 'Правила оплаты и рассрочка', 'Правила оплаты и рассрочка', 'Правила оплаты и рассрочка', '2022-08-23 08:04:15', '2022-08-23 08:04:51');

-- --------------------------------------------------------

--
-- Структура таблиці `stars`
--

DROP TABLE IF EXISTS `stars`;
CREATE TABLE `stars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `stars`
--

INSERT INTO `stars` (`id`, `number`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-10-12 13:43:39', '2022-10-12 13:43:39'),
(2, 2, '2022-10-12 13:43:42', '2022-10-12 13:43:42'),
(3, 3, '2022-10-12 13:43:45', '2022-10-12 13:43:45'),
(4, 4, '2022-10-12 13:43:48', '2022-10-12 13:43:48'),
(5, 5, '2022-10-12 13:43:51', '2022-10-12 13:43:51');

-- --------------------------------------------------------

--
-- Структура таблиці `supports`
--

DROP TABLE IF EXISTS `supports`;
CREATE TABLE `supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `id_touragents` int(11) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `supports`
--

INSERT INTO `supports` (`id`, `date`, `id_touragents`, `message`, `show`, `created_at`, `updated_at`) VALUES
(1, '2022-10-09 19:56:33', 11, 'dfg', 0, '2022-10-09 16:56:33', '2022-10-14 07:57:56'),
(2, '2022-10-14 11:54:51', 12, 'fgjhkl;', 0, '2022-10-14 08:54:51', '2022-10-14 08:54:51');

-- --------------------------------------------------------

--
-- Структура таблиці `touragents`
--

DROP TABLE IF EXISTS `touragents`;
CREATE TABLE `touragents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_touragent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_regions` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `work` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark` int(11) NOT NULL,
  `documents` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_update` datetime NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `touragents`
--

INSERT INTO `touragents` (`id`, `id_touragent`, `company`, `name`, `email`, `phone`, `password`, `id_regions`, `created_at`, `updated_at`, `photo`, `address`, `work`, `mark`, `documents`, `date_update`, `code`, `license`, `remember_token`) VALUES
(11, '100011', 'Поехали с нами', 'User 12', 'touragent007@info.com', '+380667778899', '$2y$10$f/Tywfa2wWnlxsZZ/MKpCOu1K2f8DSgRdriXG/RYqWmbdeaLgsk5u', 1, '2022-10-13 20:19:05', '2022-10-14 09:29:01', '/photos/1/agent/16656924021.jpg', 'Киев, Крещатик 7', 'Пн-Пт: 09:00 - 20:00\r\nСб-Нд: 10:00 - 18:00', 0, '[\"\\/photos\\/1\\/documents\\/166569245944611.jpg\",\"\\/photos\\/1\\/documents\\/166569245981041.png\"]', '2022-10-14 12:29:01', '', '', NULL),
(12, '100012', 'Поехали с нами', 'User 13', 'touragent047@info.com', '+380665433344', '$2y$10$epPKyhpEy39YzD.q/xwwYegnFPAnv6pS9b50tqXGfML3U9vYxswXG', 1, '2022-10-13 20:40:44', '2022-10-26 19:06:22', '', 'г. Киев, ул. Бульварно-Кудрявская (Воровского), 24, БЦ', 'Пн-Пт: 09:00 - 20:00 \r\nСб-Нд: 10:00 - 18:00', 0, '[\"\\/photos\\/1\\/documents\\/166681118246891.jpg\"]', '2022-10-14 11:42:00', '', '09843983847', NULL),
(13, '100013', 'Digiants', 'Anton', 'dv@digiants.com.ua', '+380998765432', '$2y$10$oVX/wRC.wqJrw/DZ0HQ7weD5tMXz4IDfTcTilMA5QDq0JzYkdkKOe', 1, '2022-10-17 13:52:03', '2022-11-14 19:29:58', '/photos/1/agent/16675666141.jpg', 'г. Киев, ул. Бульварно-Кудрявская (Воровского), 24, БЦ', 'Пн-Пт: 09:00 - 20:00 \r\nСб: 10:00 - 18:00', 0, '', '2022-10-17 16:52:03', '', '98765677892', 'CAwrEYiHVjr02DHfnppjJaM7EL3vciVf3SY2C1sgrlVFisgtsKsnDg3zGV6S'),
(14, '100014', 'Летим вместе', 'Наталья', 'nat@gmail.com', '+380998765656', '$2y$10$xzvTPCf1TBifabmkiP2ZK.Na20OoMa2k.TxiPBQALS4XqAoFDEaKq', 1, '2022-10-26 19:07:05', '2022-10-28 12:44:02', '', '', '', 0, '', '2022-10-28 15:44:02', '', '', NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `touragents_applications`
--

DROP TABLE IF EXISTS `touragents_applications`;
CREATE TABLE `touragents_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_touragents` int(11) NOT NULL,
  `id_applications` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `touragents_applications`
--

INSERT INTO `touragents_applications` (`id`, `id_touragents`, `id_applications`) VALUES
(1, 14, 61),
(3, 14, 59),
(4, 14, 55),
(5, 12, 56),
(6, 12, 54),
(7, 13, 59);

-- --------------------------------------------------------

--
-- Структура таблиці `tourists`
--

DROP TABLE IF EXISTS `tourists`;
CREATE TABLE `tourists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mark` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `tourists`
--

INSERT INTO `tourists` (`id`, `name`, `email`, `password`, `phone`, `mark`, `created_at`, `updated_at`, `code`, `remember_token`, `facebook_id`) VALUES
(1, 'Марина', 'tvolos196@gmail.com', '$2y$10$Jo8V5n61GPeDkDN5.sJh7.dclQLzJo3MVNeXVvMHWj1TA7t3OWJCu', '+380991000000', 0, '2022-10-03 07:56:08', '2022-11-15 10:20:45', '', 'wxze7bJUtEDClmk8c0nD6elERHkHdOz3wY9DIeOApssTGBwV27YjqhiKpAba', '3486862451551606'),
(2, 'Dasha', 'test@test.com', '$2y$10$jxFwTq8IG5sD5pCi17fFeeekyUHghepLdwe.g6lw/BmUMoZMNf9uO', '+38099999100', 0, '2022-10-03 08:05:09', '2022-10-03 13:02:56', '', NULL, ''),
(3, 'Алексей', 'alex@gmail.com', '$2y$10$PoeCsVKz2StzElQQ3ipKlOzPGpGIKrb42CK6JLpPZDgtSoZSp.Dxy', '+380991234564', 0, '2022-10-12 14:24:57', '2022-10-14 08:55:12', '', NULL, ''),
(7, 'Анатолій Проботюк', 'tosik443405@mail.ru', NULL, NULL, NULL, '2022-11-15 12:41:51', '2022-11-15 12:41:51', NULL, NULL, '2082990228554303');

-- --------------------------------------------------------

--
-- Структура таблиці `tours_ru`
--

DROP TABLE IF EXISTS `tours_ru`;
CREATE TABLE `tours_ru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `title_hotel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `data_departure` datetime NOT NULL,
  `data_arrival` datetime NOT NULL,
  `information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_stars` int(11) NOT NULL,
  `id_cities_from` int(11) NOT NULL,
  `id_cities_to` int(11) NOT NULL,
  `id_people` int(11) NOT NULL,
  `id_child` int(11) NOT NULL,
  `id_food` int(11) NOT NULL,
  `id_accommodation` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `id_visa` int(11) NOT NULL,
  `id_nigth` int(11) NOT NULL,
  `id_packages` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_mainpage` int(11) NOT NULL,
  `id_touragents` int(11) NOT NULL,
  `data_departure_to` datetime NOT NULL,
  `data_arrival_from` datetime NOT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `tours_ru`
--

INSERT INTO `tours_ru` (`id`, `number`, `title_hotel`, `slug`, `photo`, `gallery`, `price`, `data_departure`, `data_arrival`, `information`, `created_at`, `updated_at`, `id_stars`, `id_cities_from`, `id_cities_to`, `id_people`, `id_child`, `id_food`, `id_accommodation`, `rating`, `id_visa`, `id_nigth`, `id_packages`, `title`, `show_mainpage`, `id_touragents`, `data_departure_to`, `data_arrival_from`, `lat`, `lng`) VALUES
(11, 987542, 'Antalya Hotel Resort & Spa 5*', 'novogodnij-tur-v-egipet-luchshaya-cena-na-otel-tui-blue-gardens-adults-only-savoy-signature', '/photos/1/tours/1.jpg', '[\"\\/photos\\/1\\/tours\\/slider1.jpg\",\"\\/photos\\/1\\/tours\\/slider2.jpg\",\"\\/photos\\/1\\/tours\\/1.jpg\",\"\\/photos\\/1\\/tours\\/slider1.jpg\"]', '30983.00', '2022-11-30 02:00:00', '2022-12-07 00:00:00', '<p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.<br><br>Открытие отеля произошло в 1998 году с последующими ежегодными реновациями и усовершенствованиями. Последние из них проводились в 2018 году. В 2013 году открылся новый корпус Moonlight. Justiniano Club Park Conti представляет собой зеленый городок со своей инфраструктурой, способный разместить около 1380 гостей. Обширная уютная территория, утопающая в зелени, с огромными цветущими садами общей площадью 90 000 кв.м. Здесь расположены: 5 - этажный основной корпус, 7 домиков - бунгало и корпус Бегония, которые соседствуют с 7-этажным корпусом Moonlight, расположенным немного в стороне от основной территории.</p>', '2022-10-26 17:08:22', '2022-10-31 11:59:03', 5, 9, 1, 2, 2, 1, 1, 8, 1, 1, 1, 'Новогодний тур в Египет! Лучшая цена на отель TUI Blue Gardens - Adults-only - Savoy Signature', 1, 11, '2022-12-01 18:00:00', '2022-12-07 21:00:00', '', ''),
(12, 987545, 'Antalya Hotel Resort & Spa 5*', 'novogodnij-tur-v-egipet-luchshaya-cena-na-otel-tui-blue-gardens-adults-only-savoy-signature-copy-1', '/photos/1/tours/slider2.jpg', '[\"\\/photos\\/1\\/tours\\/slider1.jpg\",\"\\/photos\\/1\\/tours\\/slider2.jpg\",\"\\/photos\\/1\\/tours\\/1.jpg\",\"\\/photos\\/1\\/tours\\/slider1.jpg\"]', '30983.00', '2022-11-12 00:00:00', '2022-12-16 00:00:00', '<p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.<br>&nbsp;</p>', '2022-10-26 17:08:26', '2022-10-28 12:52:16', 5, 9, 1, 2, 3, 2, 1, 8, 1, 2, 1, 'Новогодний тур в Египет! Лучшая цена на отель TUI Blue Gardens', 0, 11, '2022-11-12 18:45:00', '2022-12-15 21:00:00', '', ''),
(13, 986456, 'Coral Level at Iberostar Selection Bavaro', 'novogodnij-tur-v-egipet-luchshaya-cena-na-otel', '/photos/1/tours/slider1.jpg', '[\"\\/photos\\/1\\/tours\\/slider1.jpg\"]', '59975.00', '2022-11-11 02:10:00', '2022-12-01 01:05:00', '<p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.</p>', '2022-10-26 17:12:31', '2022-11-12 20:59:37', 4, 10, 2, 1, 2, 1, 2, 10, 1, 2, 2, 'Новогодний тур в Турицию! Лучшая цена на отель', 1, 13, '2022-11-23 22:34:00', '2022-11-30 20:09:00', '', ''),
(14, 986578, 'Coral Level at Iberostar', 'novogodnij-tur-v-egipet-luchshaya-cena-na-otel-copy-1', '/photos/1/tours/slider1.jpg', '[\"\\/photos\\/1\\/tours\\/slider1.jpg\"]', '40975.00', '2022-11-25 08:00:00', '2022-12-01 01:05:00', '<p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.</p>', '2022-10-28 15:32:28', '2022-11-12 21:24:37', 4, 10, 2, 1, 2, 1, 2, 10, 1, 2, 2, 'Новогодний тур в Египет! Лучшая цена на отель copy', 1, 13, '2022-11-25 22:34:00', '2022-11-30 20:09:00', '36.65244319609939', '31.66554012775727'),
(15, 86379301, 'Loizos Stylish Residences', 'luchshij-tur-v-greciyu', '/photos/1/tours/40379072.jpeg', '[\"\\/photos\\/1\\/tours\\/40379072.jpeg\"]', '50083.00', '2023-01-18 16:00:00', '2023-01-25 22:42:00', '<p>Апарт-готель Loizos розташований поряд із центром містечка Фіра, лише за 20 метрів від знаменитої оглядової площадки з видом на кальдеру, вулкан та захід сонця. До послуг гостей номери-студіо та басейн.</p><p>У всіх комфортабельних відремонтованих номерах-студіо є власна ванна кімната з туалетно-косметичними засобами. У деяких із них можна відпочити на балконі, а з інших вийти у внутрішній дворик. З певних номерів-студіо відкривається краєвид на море. Кожен номер-студіо оснащений кондиціонером, холодильником, супутниковим телебаченням та безкоштовним Wi-Fi.</p><p>Гостям пропонують незабутній завтрак біля залу для сніданків з великим балконом із панорамним видом на горизонт. Кам\'яні доріжки, що прокладені навколо апарт-готелю, ведуть до басейну з мебльованою сонячною террасою.</p><p>Мальовниче місто Фіра з його чарівними кафе та різноманітними ресторанами, художніми галереями та місцевими магазинами розміщено за кілька хвилин ходьби від апарт-готелю. Поряд працюють місцевий супермаркет, автовокзал та термінал таксі, банки та музеї, місцевий книжковий магазин та пошта.</p>', '2022-11-02 12:28:49', '2022-11-02 12:30:20', 5, 9, 11, 2, 1, 2, 2, 9, 2, 2, 1, 'Лучший тур в Грецию', 1, 12, '2023-01-18 22:00:00', '2023-01-25 14:20:00', '36.41537602363428', '25.43224484150594'),
(16, 986544, 'Coral Level at Iberostar', 'novogodnij-tur-v-egipet-luchshaya-cena-na-otel-copy-2', '/photos/1/tours/1.jpg', '[\"\\/photos\\/1\\/tours\\/slider1.jpg\"]', '45975.00', '2022-11-29 08:00:00', '2022-12-01 01:05:00', '<p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.</p>', '2022-11-12 21:30:24', '2022-11-12 21:31:11', 4, 10, 2, 1, 2, 1, 2, 10, 1, 2, 2, 'Новогодний тур', 1, 13, '2022-11-29 22:34:00', '2022-11-30 20:09:00', '36.65244319609939', '31.66554012775727');

-- --------------------------------------------------------

--
-- Структура таблиці `tours_uk`
--

DROP TABLE IF EXISTS `tours_uk`;
CREATE TABLE `tours_uk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `title_hotel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `data_departure` date NOT NULL,
  `data_arrival` date NOT NULL,
  `information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_stars` int(11) NOT NULL,
  `id_cities_from` int(11) NOT NULL,
  `id_cities_to` int(11) NOT NULL,
  `id_people` int(11) NOT NULL,
  `id_child` int(11) NOT NULL,
  `id_food` int(11) NOT NULL,
  `id_accommodation` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `id_visa` int(11) NOT NULL,
  `id_nigth` int(11) NOT NULL,
  `id_packages` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_mainpage` int(11) NOT NULL,
  `id_touragents` int(11) NOT NULL,
  `data_departure_to` datetime NOT NULL,
  `data_arrival_from` datetime NOT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lng` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `tours_uk`
--

INSERT INTO `tours_uk` (`id`, `number`, `title_hotel`, `slug`, `photo`, `gallery`, `price`, `data_departure`, `data_arrival`, `information`, `created_at`, `updated_at`, `id_stars`, `id_cities_from`, `id_cities_to`, `id_people`, `id_child`, `id_food`, `id_accommodation`, `rating`, `id_visa`, `id_nigth`, `id_packages`, `title`, `show_mainpage`, `id_touragents`, `data_departure_to`, `data_arrival_from`, `lat`, `lng`) VALUES
(11, 987542, 'JUSTINIANO CLUB PARK CONTI 5*', 'novogodnij-tur-v-egipet-luchshaya-cena-na-otel-tui-blue-gardens-adults-only-savoy-signature', '/photos/1/tours/1.jpg', '[\"\\/photos\\/1\\/tours\\/slider1.jpg\",\"\\/photos\\/1\\/tours\\/slider2.jpg\",\"\\/photos\\/1\\/tours\\/1.jpg\",\"\\/photos\\/1\\/tours\\/slider1.jpg\"]', '30983.00', '2022-11-30', '2022-12-07', '<p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.<br><br>Открытие отеля произошло в 1998 году с последующими ежегодными реновациями и усовершенствованиями. Последние из них проводились в 2018 году. В 2013 году открылся новый корпус Moonlight. Justiniano Club Park Conti представляет собой зеленый городок со своей инфраструктурой, способный разместить около 1380 гостей. Обширная уютная территория, утопающая в зелени, с огромными цветущими садами общей площадью 90 000 кв.м. Здесь расположены: 5 - этажный основной корпус, 7 домиков - бунгало и корпус Бегония, которые соседствуют с 7-этажным корпусом Moonlight, расположенным немного в стороне от основной территории.</p>', '2022-10-26 17:08:22', '2022-10-31 11:59:03', 5, 9, 1, 2, 2, 1, 1, 8, 1, 1, 1, 'Новогодний тур в Египет! Лучшая цена на отель TUI Blue Gardens - Adults-only - Savoy Signature', 1, 11, '2022-12-01 18:00:00', '2022-12-07 21:00:00', '', ''),
(12, 987545, 'JUSTINIANO CLUB PARK CONTI 5*', 'novogodnij-tur-v-egipet-luchshaya-cena-na-otel-tui-blue-gardens-adults-only-savoy-signature-copy-1', '/photos/1/tours/slider2.jpg', '[\"\\/photos\\/1\\/tours\\/slider1.jpg\",\"\\/photos\\/1\\/tours\\/slider2.jpg\",\"\\/photos\\/1\\/tours\\/1.jpg\",\"\\/photos\\/1\\/tours\\/slider1.jpg\"]', '30983.00', '2022-11-12', '2022-12-16', '<p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.<br><br>Открытие отеля произошло в 1998 году с последующими ежегодными реновациями и усовершенствованиями. Последние из них проводились в 2018 году. В 2013 году открылся новый корпус Moonlight. Justiniano Club Park Conti представляет собой зеленый городок со своей инфраструктурой, способный разместить около 1380 гостей. Обширная уютная территория, утопающая в зелени, с огромными цветущими садами общей площадью 90 000 кв.м. Здесь расположены: 5 - этажный основной корпус, 7 домиков - бунгало и корпус Бегония, которые соседствуют с 7-этажным корпусом Moonlight, расположенным немного в стороне от основной территории.</p>', '2022-10-26 17:08:26', '2022-10-26 17:35:00', 5, 9, 1, 2, 3, 2, 1, 8, 1, 2, 1, 'Новогодний тур в Египет! Лучшая цена на отель TUI Blue Gardens - Adults-only - Savoy Signature copy', 0, 11, '2022-11-12 18:45:00', '2022-12-15 21:00:00', '', ''),
(13, 986456, 'JUSTINIANO CLUB PARK CONTI 4*', 'novogodnij-tur-v-egipet-luchshaya-cena-na-otel', '/photos/1/tours/slider1.jpg', '[\"\\/photos\\/1\\/tours\\/slider1.jpg\"]', '59975.00', '2022-11-11', '2022-12-01', '<p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.</p>', '2022-10-26 17:12:31', '2022-11-12 20:59:37', 4, 10, 2, 1, 2, 1, 2, 10, 1, 2, 2, 'Новогодний тур в Египет! Лучшая цена на отель', 1, 13, '2022-11-23 22:34:00', '2022-11-30 20:09:00', '', ''),
(14, 986578, 'JUSTINIANO CLUB PARK CONTI 4*', 'novogodnij-tur-v-egipet-luchshaya-cena-na-otel-copy-1', '/photos/1/tours/slider1.jpg', '[\"\\/photos\\/1\\/tours\\/slider1.jpg\"]', '40975.00', '2022-11-25', '2022-12-01', '<p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.</p>', '2022-10-28 15:32:28', '2022-11-12 21:24:37', 4, 10, 2, 1, 2, 1, 2, 10, 1, 2, 2, 'Новогодний тур в Египет! Лучшая цена на отель copy', 1, 13, '2022-11-25 22:34:00', '2022-11-30 20:09:00', '36.65244319609939', '31.66554012775727'),
(15, 86379301, 'Loizos Stylish Residences', 'luchshij-tur-v-greciyu', '/photos/1/tours/40379072.jpeg', '[\"\\/photos\\/1\\/tours\\/40379072.jpeg\"]', '50083.00', '2023-01-18', '2023-01-25', '<p>Апарт-готель Loizos розташований поряд із центром містечка Фіра, лише за 20 метрів від знаменитої оглядової площадки з видом на кальдеру, вулкан та захід сонця. До послуг гостей номери-студіо та басейн.</p><p>У всіх комфортабельних відремонтованих номерах-студіо є власна ванна кімната з туалетно-косметичними засобами. У деяких із них можна відпочити на балконі, а з інших вийти у внутрішній дворик. З певних номерів-студіо відкривається краєвид на море. Кожен номер-студіо оснащений кондиціонером, холодильником, супутниковим телебаченням та безкоштовним Wi-Fi.</p><p>Гостям пропонують незабутній завтрак біля залу для сніданків з великим балконом із панорамним видом на горизонт. Кам\'яні доріжки, що прокладені навколо апарт-готелю, ведуть до басейну з мебльованою сонячною террасою.</p><p>Мальовниче місто Фіра з його чарівними кафе та різноманітними ресторанами, художніми галереями та місцевими магазинами розміщено за кілька хвилин ходьби від апарт-готелю. Поряд працюють місцевий супермаркет, автовокзал та термінал таксі, банки та музеї, місцевий книжковий магазин та пошта.</p>', '2022-11-02 12:28:49', '2022-11-02 12:30:20', 5, 9, 11, 2, 1, 2, 2, 9, 2, 2, 1, 'Лучший тур в Грецию', 1, 12, '2023-01-18 22:00:00', '2023-01-25 14:20:00', '36.41537602363428', '25.43224484150594'),
(16, 986544, 'JUSTINIANO CLUB PARK CONTI 4*', 'novogodnij-tur-v-egipet-luchshaya-cena-na-otel-copy-2', '/photos/1/tours/1.jpg', '[\"\\/photos\\/1\\/tours\\/slider1.jpg\"]', '45975.00', '2022-11-29', '2022-12-01', '<p>Клубный отель на самом берегу моря, где современная архитектура переплетается с местным колоритом. Жаркие лучи Средиземноморского солнца, золотая полоска пляжа, магический воздух, заряженный солоноватым дыханием моря, великолепные условия размещения, насыщенная анимационно - развлекательная программа и целый спектр вариантов времяпрепровождения делают этот отель привлекательным для большинства туристов, особенно для отдыха родителей с детьми. Признан лучшим семейным отелем 2011 года.</p>', '2022-11-12 21:30:24', '2022-11-12 21:31:11', 4, 10, 2, 1, 2, 1, 2, 10, 1, 2, 2, 'Новогодний тур в Египет! Лучшая цена на отель copy copy', 1, 13, '2022-11-29 22:34:00', '2022-11-30 20:09:00', '36.65244319609939', '31.66554012775727');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_roles` int(11) NOT NULL DEFAULT 1,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `name`, `id_roles`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 1, 'dv@digiants.com.ua', NULL, '$2y$10$s35kxoBVWc5rJxNa9.ZX7.fYS6UtvrBUtGc14sJeHGyG1XnJHPPz2', 'YWwwWA91t277lm7EEwUFvy3FDrn2YRnEI6HBETKR5mvUKIQRRrsnFDduJjm5', '2022-04-21 12:37:01', '2022-10-03 11:21:59', NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `visa_ru`
--

DROP TABLE IF EXISTS `visa_ru`;
CREATE TABLE `visa_ru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `visa_ru`
--

INSERT INTO `visa_ru` (`id`, `title`, `desc`, `created_at`, `updated_at`, `color`) VALUES
(1, 'По прилету', 'В аеропорту', '2022-10-12 14:16:52', '2022-11-12 02:43:20', '#FFAB00'),
(2, 'Не нужно', '', '2022-11-02 12:30:00', '2022-11-12 02:43:38', '#0274CA'),
(3, 'Нужна', '', '2022-11-12 00:59:40', '2022-11-12 02:44:01', '#DA3732');

-- --------------------------------------------------------

--
-- Структура таблиці `visa_uk`
--

DROP TABLE IF EXISTS `visa_uk`;
CREATE TABLE `visa_uk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `visa_uk`
--

INSERT INTO `visa_uk` (`id`, `title`, `desc`, `created_at`, `updated_at`, `color`) VALUES
(1, 'По прилету', 'В аеропорту', '2022-10-12 14:16:52', '2022-11-12 02:43:20', '#FFAB00'),
(2, 'Не нужно', '', '2022-11-02 12:30:00', '2022-11-12 02:43:38', '#0274CA'),
(3, 'Нужна', '', '2022-11-12 00:59:40', '2022-11-12 02:44:01', '#DA3732');

-- --------------------------------------------------------

--
-- Структура таблиці `years_ru`
--

DROP TABLE IF EXISTS `years_ru`;
CREATE TABLE `years_ru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `years_ru`
--

INSERT INTO `years_ru` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, '1 год', '2022-10-12 19:47:49', '2022-10-12 19:47:49'),
(2, '2 года', '2022-10-12 19:47:53', '2022-10-12 19:47:53'),
(3, '3 года', '2022-10-12 19:47:57', '2022-10-12 19:47:57'),
(4, '5 лет', '2022-10-12 19:48:02', '2022-10-12 19:48:02');

-- --------------------------------------------------------

--
-- Структура таблиці `years_uk`
--

DROP TABLE IF EXISTS `years_uk`;
CREATE TABLE `years_uk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `years_uk`
--

INSERT INTO `years_uk` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, '1 год', '2022-10-12 19:47:49', '2022-10-12 19:47:49'),
(2, '2 года', '2022-10-12 19:47:53', '2022-10-12 19:47:53'),
(3, '3 года', '2022-10-12 19:47:57', '2022-10-12 19:47:57'),
(4, '5 лет', '2022-10-12 19:48:02', '2022-10-12 19:48:02');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `accommodation`
--
ALTER TABLE `accommodation`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `applications_cities`
--
ALTER TABLE `applications_cities`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `applications_tours`
--
ALTER TABLE `applications_tours`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `booking_status_ru`
--
ALTER TABLE `booking_status_ru`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `booking_status_uk`
--
ALTER TABLE `booking_status_uk`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `booking_tourist`
--
ALTER TABLE `booking_tourist`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `characteristics_ru`
--
ALTER TABLE `characteristics_ru`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `characteristics_uk`
--
ALTER TABLE `characteristics_uk`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `cities_ru`
--
ALTER TABLE `cities_ru`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `cities_uk`
--
ALTER TABLE `cities_uk`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `citizenship_ru`
--
ALTER TABLE `citizenship_ru`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `citizenship_uk`
--
ALTER TABLE `citizenship_uk`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `countries_ru`
--
ALTER TABLE `countries_ru`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `countries_uk`
--
ALTER TABLE `countries_uk`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `dropdown`
--
ALTER TABLE `dropdown`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `food_ru`
--
ALTER TABLE `food_ru`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `food_uk`
--
ALTER TABLE `food_uk`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `informations_ru`
--
ALTER TABLE `informations_ru`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `informations_uk`
--
ALTER TABLE `informations_uk`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `nigth_ru`
--
ALTER TABLE `nigth_ru`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `nigth_uk`
--
ALTER TABLE `nigth_uk`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `packages_ru`
--
ALTER TABLE `packages_ru`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `packages_uk`
--
ALTER TABLE `packages_uk`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `regions_ru`
--
ALTER TABLE `regions_ru`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `regions_uk`
--
ALTER TABLE `regions_uk`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `reviews_ru`
--
ALTER TABLE `reviews_ru`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `reviews_uk`
--
ALTER TABLE `reviews_uk`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `saved`
--
ALTER TABLE `saved`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `single_date`
--
ALTER TABLE `single_date`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_datetime`
--
ALTER TABLE `single_datetime`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_datetime_ru`
--
ALTER TABLE `single_datetime_ru`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_datetime_uk`
--
ALTER TABLE `single_datetime_uk`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_date_ru`
--
ALTER TABLE `single_date_ru`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_date_uk`
--
ALTER TABLE `single_date_uk`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_field`
--
ALTER TABLE `single_field`
  ADD PRIMARY KEY (`id`),
  ADD KEY `single_field_single_page_id_index` (`single_page_id`);

--
-- Індекси таблиці `single_int`
--
ALTER TABLE `single_int`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_int_ru`
--
ALTER TABLE `single_int_ru`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_int_uk`
--
ALTER TABLE `single_int_uk`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_money`
--
ALTER TABLE `single_money`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_money_ru`
--
ALTER TABLE `single_money_ru`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_money_uk`
--
ALTER TABLE `single_money_uk`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_page`
--
ALTER TABLE `single_page`
  ADD PRIMARY KEY (`id`),
  ADD KEY `single_page_title_index` (`title`);

--
-- Індекси таблиці `single_text`
--
ALTER TABLE `single_text`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_text_ru`
--
ALTER TABLE `single_text_ru`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_text_uk`
--
ALTER TABLE `single_text_uk`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_tinyint`
--
ALTER TABLE `single_tinyint`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_tinyint_ru`
--
ALTER TABLE `single_tinyint_ru`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_tinyint_uk`
--
ALTER TABLE `single_tinyint_uk`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_varchar`
--
ALTER TABLE `single_varchar`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_varchar_ru`
--
ALTER TABLE `single_varchar_ru`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `single_varchar_uk`
--
ALTER TABLE `single_varchar_uk`
  ADD PRIMARY KEY (`field_id`);

--
-- Індекси таблиці `standart_ru`
--
ALTER TABLE `standart_ru`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `standart_uk`
--
ALTER TABLE `standart_uk`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `stars`
--
ALTER TABLE `stars`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `supports`
--
ALTER TABLE `supports`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `touragents`
--
ALTER TABLE `touragents`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `touragents_applications`
--
ALTER TABLE `touragents_applications`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `tourists`
--
ALTER TABLE `tourists`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `tours_ru`
--
ALTER TABLE `tours_ru`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `tours_uk`
--
ALTER TABLE `tours_uk`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Індекси таблиці `visa_ru`
--
ALTER TABLE `visa_ru`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `visa_uk`
--
ALTER TABLE `visa_uk`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `years_ru`
--
ALTER TABLE `years_ru`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `years_uk`
--
ALTER TABLE `years_uk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `accommodation`
--
ALTER TABLE `accommodation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT для таблиці `applications_cities`
--
ALTER TABLE `applications_cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT для таблиці `applications_tours`
--
ALTER TABLE `applications_tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT для таблиці `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблиці `booking_status_ru`
--
ALTER TABLE `booking_status_ru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `booking_status_uk`
--
ALTER TABLE `booking_status_uk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `booking_tourist`
--
ALTER TABLE `booking_tourist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблиці `characteristics_ru`
--
ALTER TABLE `characteristics_ru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблиці `characteristics_uk`
--
ALTER TABLE `characteristics_uk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT для таблиці `child`
--
ALTER TABLE `child`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблиці `cities_ru`
--
ALTER TABLE `cities_ru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблиці `cities_uk`
--
ALTER TABLE `cities_uk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблиці `citizenship_ru`
--
ALTER TABLE `citizenship_ru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `citizenship_uk`
--
ALTER TABLE `citizenship_uk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `countries_ru`
--
ALTER TABLE `countries_ru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `countries_uk`
--
ALTER TABLE `countries_uk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `dropdown`
--
ALTER TABLE `dropdown`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `food_ru`
--
ALTER TABLE `food_ru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `food_uk`
--
ALTER TABLE `food_uk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `informations_ru`
--
ALTER TABLE `informations_ru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблиці `informations_uk`
--
ALTER TABLE `informations_uk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблиці `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблиці `nigth_ru`
--
ALTER TABLE `nigth_ru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `nigth_uk`
--
ALTER TABLE `nigth_uk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `packages_ru`
--
ALTER TABLE `packages_ru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `packages_uk`
--
ALTER TABLE `packages_uk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблиці `regions_ru`
--
ALTER TABLE `regions_ru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `regions_uk`
--
ALTER TABLE `regions_uk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `reviews_ru`
--
ALTER TABLE `reviews_ru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблиці `reviews_uk`
--
ALTER TABLE `reviews_uk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблиці `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `saved`
--
ALTER TABLE `saved`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблиці `single_date`
--
ALTER TABLE `single_date`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `single_datetime`
--
ALTER TABLE `single_datetime`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `single_datetime_ru`
--
ALTER TABLE `single_datetime_ru`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `single_datetime_uk`
--
ALTER TABLE `single_datetime_uk`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `single_date_ru`
--
ALTER TABLE `single_date_ru`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `single_date_uk`
--
ALTER TABLE `single_date_uk`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `single_field`
--
ALTER TABLE `single_field`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT для таблиці `single_int`
--
ALTER TABLE `single_int`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `single_int_ru`
--
ALTER TABLE `single_int_ru`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `single_int_uk`
--
ALTER TABLE `single_int_uk`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `single_money`
--
ALTER TABLE `single_money`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `single_money_ru`
--
ALTER TABLE `single_money_ru`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `single_money_uk`
--
ALTER TABLE `single_money_uk`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `single_page`
--
ALTER TABLE `single_page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблиці `single_text`
--
ALTER TABLE `single_text`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `single_text_ru`
--
ALTER TABLE `single_text_ru`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT для таблиці `single_text_uk`
--
ALTER TABLE `single_text_uk`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT для таблиці `single_tinyint`
--
ALTER TABLE `single_tinyint`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `single_tinyint_ru`
--
ALTER TABLE `single_tinyint_ru`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `single_tinyint_uk`
--
ALTER TABLE `single_tinyint_uk`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `single_varchar`
--
ALTER TABLE `single_varchar`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `single_varchar_ru`
--
ALTER TABLE `single_varchar_ru`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT для таблиці `single_varchar_uk`
--
ALTER TABLE `single_varchar_uk`
  MODIFY `field_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT для таблиці `standart_ru`
--
ALTER TABLE `standart_ru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `standart_uk`
--
ALTER TABLE `standart_uk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `stars`
--
ALTER TABLE `stars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблиці `supports`
--
ALTER TABLE `supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `touragents`
--
ALTER TABLE `touragents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблиці `touragents_applications`
--
ALTER TABLE `touragents_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблиці `tourists`
--
ALTER TABLE `tourists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблиці `tours_ru`
--
ALTER TABLE `tours_ru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблиці `tours_uk`
--
ALTER TABLE `tours_uk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `visa_ru`
--
ALTER TABLE `visa_ru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `visa_uk`
--
ALTER TABLE `visa_uk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `years_ru`
--
ALTER TABLE `years_ru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `years_uk`
--
ALTER TABLE `years_uk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
