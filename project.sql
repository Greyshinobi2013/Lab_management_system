-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 10:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `name`, `date`, `action`) VALUES
(6, 'selam m', '2022-12-21 05:33:11', 'add device name keboard '),
(7, 'selam m', '2022-12-21 05:38:10', 'add device name pc '),
(8, 'jeri', '2022-12-22 08:43:32', ' lab Asistant delete device name 3 '),
(9, 'jeri', '2022-12-22 08:43:44', ' lab Asistant delete device name 4 '),
(10, 'jeri', '2022-12-22 08:46:32', ' lab Asistant delete device name  '),
(11, 'jeri', '2022-12-22 08:52:28', ' lab Asistant delete device name 12 '),
(12, 'jeri', '2022-12-22 13:55:55', ' lab Asistant delete device name 11 '),
(13, 'jeri', '2022-12-24 03:50:05', 'update device name keboard  '),
(14, 'jeri', '2022-12-24 03:54:27', 'update device name keboard  '),
(15, 'jeri', '2022-12-24 03:57:41', 'update device name pc  '),
(16, 'jeri', '2022-12-24 04:01:02', 'update device name keboard  '),
(17, 'jeri', '2022-12-24 04:01:27', 'update device name keboard  '),
(18, 'jeri', '2022-12-24 04:05:06', 'update device name keboard  '),
(19, 'jeri', '2022-12-24 04:09:28', 'update device name keboard  '),
(20, 'jeri', '2022-12-24 04:11:24', 'update device name keboard  '),
(21, 'jeri', '2022-12-24 04:13:13', 'update device name keboard  '),
(22, 'jeri', '2022-12-24 04:15:01', 'update device name keboard '),
(23, 'jeri', '2022-12-24 04:18:10', 'update device name keboard '),
(24, 'jeri', '2022-12-24 04:18:34', 'update device name keboard '),
(25, 'jeri', '2022-12-24 04:21:25', 'update device name keboard '),
(26, 'jeri', '2022-12-24 04:22:31', 'update device name keboard  '),
(27, 'jeri', '2022-12-24 04:23:35', 'update device name keboard  '),
(28, 'jeri', '2022-12-24 04:24:10', 'update device name keboard  '),
(29, 'jeri', '2022-12-24 04:25:13', 'update device name keboard   '),
(30, 'jeri', '2022-12-24 04:31:20', 'update device name keboard    '),
(31, 'jeri', '2022-12-24 04:32:20', 'update device name keboard     '),
(32, 'jeri', '2022-12-24 04:44:22', 'update device name keboard      '),
(33, 'jeri', '2022-12-24 04:52:38', 'update device name keboard       '),
(34, 'jeri', '2022-12-24 04:58:12', 'update device name keboard        '),
(35, 'jeri', '2022-12-24 05:03:17', 'update device name keboard         '),
(36, 'jeri', '2022-12-24 05:05:02', 'update device name keboard          '),
(37, 'jeri', '2022-12-24 05:07:30', 'update device name keboard           '),
(38, 'jeri', '2022-12-24 05:08:42', 'update device name keboard            '),
(39, 'jeri', '2022-12-24 05:09:16', 'update device name keboard             '),
(40, 'jeri', '2022-12-24 05:16:54', 'update device name keboard              '),
(41, 'jeri', '2022-12-24 05:17:19', 'update device name keboard              '),
(42, 'jeri', '2022-12-24 05:18:23', 'update device name keboard              '),
(43, 'jeri', '2022-12-24 05:19:04', 'update device name keboard              '),
(44, 'jeri', '2022-12-24 05:21:57', 'update device name keboard              '),
(45, 'jeri', '2022-12-24 05:22:46', 'update device name keboard              '),
(46, 'jeri', '2022-12-24 05:23:02', ' lab Asistant delete device id 5 '),
(47, 'jeri', '2022-12-24 05:23:46', 'update device name keboard              '),
(48, 'jeri', '2022-12-24 05:24:12', 'update device name keboard               '),
(49, 'mani', '2022-12-24 11:21:22', 'admin delete user id 9 '),
(50, 'mani', '2022-12-24 11:25:04', 'admin delete user id '),
(51, 'sola', '2022-12-24 15:19:16', 'submit assignment title homwork tow'),
(52, 'admin', '2022-12-30 05:06:32', 'add course name programing'),
(53, 'admin', '2022-12-30 05:08:41', 'admin delete user id 1 '),
(54, 'admin', '2022-12-30 05:37:28', 'add course name introduction to programming'),
(55, 'admin', '2022-12-30 06:01:00', 'add course name programing'),
(56, 'admin', '2022-12-30 06:02:31', 'add course name programing'),
(57, 'admin', '2022-12-30 06:12:17', 'add course name programing'),
(58, 'admin', '2022-12-30 06:12:28', 'add course name programing'),
(59, 'admin', '2022-12-30 06:14:30', 'add course name programing'),
(60, 'admin', '2022-12-30 06:40:25', 'admin delete user id 21 '),
(61, 'temi', '2022-12-30 06:43:54', 'submit assignment title individual assignment'),
(62, 'solam    ', '2022-12-30 08:51:50', 'give assignment  result 45 '),
(63, 'solam    ', '2022-12-30 08:58:04', 'give assignment  result 3 '),
(64, 'solam    ', '2022-12-30 10:04:32', 'give assignment  result 3 '),
(65, 'solam    ', '2022-12-30 10:17:04', 'give assignment  result 10 '),
(66, 'solam    ', '2022-12-30 10:20:30', 'give assignment  result 10 '),
(67, 'solam    ', '2022-12-30 10:21:38', 'give assignment  result 10 '),
(68, 'solam    ', '2022-12-30 10:21:47', 'give assignment  result 3 '),
(69, 'solam    ', '2022-12-30 10:21:58', 'give assignment  result 45 '),
(70, 'solam    ', '2022-12-30 10:23:10', 'give assignment  result 3 '),
(71, 'solam    ', '2022-12-30 10:24:16', 'give assignment  result 15 '),
(72, 'solam    ', '2022-12-30 11:07:21', 'give assignment  result  programing'),
(73, 'solam    ', '2022-12-30 11:08:18', 'give assignment  result  programing'),
(74, 'solam    ', '2022-12-30 11:10:34', 'give assignment  result  programing'),
(75, 'admin', '2022-12-30 11:13:49', 'add course name AI'),
(76, 'solam    ', '2022-12-30 11:14:28', 'give assignment  result  AI'),
(77, 'solam    ', '2022-12-30 11:41:27', 'give assignment  result  AI'),
(78, 'solam    ', '2022-12-30 11:42:53', 'give assignment  result  programing'),
(79, 'solam    ', '2022-12-30 11:43:55', 'give assignment  result  programing'),
(80, 'solam    ', '2022-12-30 11:44:24', 'give assignment  result  programing'),
(81, 'solam    ', '2022-12-30 11:45:11', 'give assignment  result  AI'),
(82, 'solam    ', '2022-12-30 11:55:46', 'give assignment  result  programing'),
(83, 'solam    ', '2022-12-30 11:58:10', 'give assignment  result  programing'),
(84, 'solam    ', '2022-12-30 12:09:50', 'give assignment  result  programing'),
(85, 'mekedi', '2023-01-09 08:37:58', 'update device name keboard               '),
(86, 'mekedi', '2023-01-09 08:38:43', ' lab Asistant delete device id 10 '),
(87, 'admin', '2023-01-10 03:20:23', 'admin delete user id 8 '),
(88, 'solam    ', '2023-01-10 03:46:03', 'give assignment  result  programing'),
(89, 'Tsolomon', '2023-01-10 06:15:09', 'give marks 10 '),
(90, 'Tsolomon', '2023-01-10 06:15:58', 'give marks 15 '),
(91, 'Tsolomon', '2023-01-10 06:18:45', 'give marks 15  '),
(92, 'Tsolomon', '2023-01-10 06:20:09', 'give marks 15   '),
(93, 'Tsolomon', '2023-01-10 06:21:21', 'give marks 17 '),
(94, 'edelawit', '2023-01-10 06:39:42', 'update device name keboard                '),
(95, 'Tsolomon', '2023-01-10 06:46:00', 'give marks 17  '),
(96, 'edelawit', '2023-01-10 08:38:50', 'add device name mouse '),
(97, 'admin', '2023-01-10 08:51:58', 'add course name networking'),
(98, 'temi', '2023-01-10 09:47:18', 'submit assignment title yes'),
(99, 'Tsolomon', '2023-01-10 09:48:08', 'give marks  20 '),
(100, 'ayalew', '2023-01-10 09:50:18', 'submit assignment title yi'),
(101, 'Tsolomon', '2023-01-10 09:52:54', 'give marks 17   '),
(102, 'Tsolomon', '2023-01-10 09:53:12', 'give marks 17    '),
(103, 'Tsolomon', '2023-01-10 09:53:40', 'give marks  56 '),
(104, 'Tsolomon', '2023-01-10 09:53:44', 'give marks  56  '),
(105, 'berhanesh', '2023-01-10 11:07:19', 'submit assignment title yes'),
(106, 'Tsolomon', '2023-01-10 11:08:56', 'give marks  56 '),
(107, 'Tsolomon', '2023-01-10 11:09:04', 'give marks 35 '),
(108, 'berhanesh', '2023-01-10 11:15:12', 'submit assignment title tyyyy'),
(109, 'mekedi', '2023-01-10 12:35:56', 'change password by this 271226cb355bdda491d38bfaf40f675d '),
(110, 'temi', '2023-01-11 04:34:13', 'submit assignment title ghg'),
(111, 'solam    ', '2023-01-11 04:34:53', 'give marks  23 '),
(112, 'solam    ', '2023-01-11 04:34:59', 'give marks  46 '),
(113, 'edelawit', '2023-01-11 10:45:37', 'update device name mouse  '),
(114, 'edelawit', '2023-01-11 10:46:15', 'update device name mouse   '),
(115, 'solam    ', '2023-01-12 10:51:30', 'give marks  25 '),
(116, 'solam    ', '2023-01-12 10:52:35', 'give marks  25  '),
(117, 'solam    ', '2023-01-12 10:53:09', 'give marks  25   '),
(118, '', '2023-01-12 12:05:12', 'return device id 14'),
(119, 'mekedi', '2023-01-12 12:09:02', 'return device id 14'),
(120, 'mekedi', '2023-01-12 12:09:12', 'return device id 9'),
(121, 'mekedi', '2023-01-12 12:16:15', 'bowrow device id 7'),
(122, 'mekedi', '2023-01-13 10:57:25', 'bowrow device id 6'),
(123, 'mekedi', '2023-01-13 10:59:46', 'return device id 7'),
(124, 'mekedi', '2023-01-13 10:59:56', 'return device id 6'),
(125, 'mekedi', '2023-01-13 11:07:42', 'bowrow device id 6'),
(126, 'admin', '2023-01-14 05:13:28', 'add course name wirless communication'),
(127, 'admin', '2023-01-14 05:15:59', 'add course name wirless communication'),
(128, 'admin', '2023-01-14 05:17:58', 'add course name wirless communication'),
(129, 'admin', '2023-01-14 05:18:03', 'add course name wirless communication'),
(130, 'admin', '2023-01-14 05:18:22', 'add course name wirless communication'),
(131, 'admin', '2023-01-14 05:20:48', 'add course name wirless communication'),
(132, 'admin', '2023-01-14 05:20:52', 'add course name wirless communication'),
(133, 'admin', '2023-01-14 05:22:01', 'add course name wirless communication'),
(134, 'admin', '2023-01-14 05:23:11', 'add course name java'),
(135, 'temi', '2023-01-14 06:14:30', 'submit assignment title hhhhh'),
(136, 'solam    ', '2023-01-14 06:15:32', 'give marks  67 '),
(137, 'admin', '2023-01-14 08:33:27', 'add course name networking2'),
(138, 'edelawit', '2023-01-14 08:37:32', 'bowrow device id 9'),
(139, 'edelawit', '2023-01-14 08:39:49', 'return device id 6'),
(140, 'edelawit', '2023-01-14 08:39:57', 'return device id 9'),
(141, 'edelawit', '2023-01-14 08:40:06', 'return device id 9'),
(142, 'edelawit', '2023-01-14 08:40:29', ' lab Asistant delete device id 7 '),
(143, 'edelawit', '2023-01-14 08:41:35', 'add device name laptop '),
(144, 'edelawit', '2023-01-14 08:43:30', 'bowrow device id 6'),
(145, 'edelawit', '2023-01-14 08:44:25', 'return device id 6'),
(146, 'edelawit', '2023-01-14 08:45:10', 'bowrow device id 6'),
(147, 'edelawit', '2023-01-14 08:53:42', 'bowrow device id 6'),
(148, 'edelawit', '2023-01-14 08:55:26', 'bowrow device id 6'),
(149, 'edelawit', '2023-01-14 08:56:04', 'bowrow device id 6'),
(150, 'mekedi', '2023-01-14 10:27:30', 'add device name pc '),
(151, 'mekedi', '2023-01-14 11:09:51', ' lab Asistant delete device id 15 '),
(152, 'mekedi', '2023-01-14 11:09:54', ' lab Asistant delete device id 6 '),
(153, 'mekedi', '2023-01-14 11:09:57', ' lab Asistant delete device id 8 '),
(154, 'mekedi', '2023-01-14 11:09:59', ' lab Asistant delete device id 9 '),
(155, 'mekedi', '2023-01-14 11:10:03', ' lab Asistant delete device id 14 '),
(156, 'mekedi', '2023-01-14 11:10:05', ' lab Asistant delete device id 16 '),
(157, 'edelswit', '2023-01-14 11:12:54', 'add device name pc '),
(158, 'mekedi', '2023-01-14 11:15:09', 'bowrow device id 17'),
(159, 'admin', '2023-01-14 12:37:09', 'admin delete user id 29 '),
(160, 'admin', '2023-01-14 12:37:18', 'admin delete user id 27 '),
(161, 'mekedi', '2023-01-14 12:57:36', 'return device id 17'),
(162, 'mekedi', '2023-01-14 13:04:22', 'add device name pc '),
(163, 'mekedi', '2023-01-14 13:09:57', 'add device name pc '),
(164, 'edelswit', '2023-01-14 13:33:18', 'add device name desktop '),
(165, 'edelswit', '2023-01-14 13:34:41', ' lab Asistant delete device id 19 '),
(166, 'edelswit', '2023-01-14 13:34:45', ' lab Asistant delete device id 18 '),
(167, 'edelswit', '2023-01-14 13:34:50', ' lab Asistant delete device id 17 '),
(168, 'admin', '2023-01-15 00:59:28', 'admin delete user id 25 '),
(169, 'admin', '2023-01-15 01:02:30', 'admin delete user id 28 '),
(170, 'admin', '2023-01-15 01:02:33', 'admin delete user id 23 '),
(171, 'admin', '2023-01-15 01:02:36', 'admin delete user id 24 '),
(172, 'admin', '2023-01-15 01:02:42', 'admin delete user id 26 '),
(173, 'admin', '2023-01-15 06:31:52', 'admin delete user id 29 '),
(174, 'admin', '2023-01-15 06:32:21', 'admin delete user id 36 '),
(175, 'admin', '2023-01-15 06:33:21', 'admin delete user id 44 '),
(176, 'admin', '2023-01-15 06:33:29', 'admin delete user id 41 '),
(177, 'admin', '2023-01-15 06:37:42', 'admin delete user id 50 '),
(178, 'admin', '2023-01-15 06:38:11', 'admin delete user id 51 '),
(179, 'edelswit', '2023-01-15 10:10:03', 'bowrow device id 20'),
(180, 'edelswit', '2023-01-15 10:12:07', 'return device id 20'),
(181, 'admin', '2023-01-15 10:34:45', 'admin delete user id 7 '),
(182, 'admin', '2023-01-15 10:46:15', 'admin delete user id 31 '),
(183, 'edelswit', '2023-01-15 11:03:57', 'update device name desktop  '),
(184, 'edelswit', '2023-01-15 11:04:52', 'update device name desktop   '),
(185, 'edelswit', '2023-01-15 11:29:28', 'update device name desktop    '),
(186, 'esku', '2023-01-16 14:26:42', 'submit assignment title this is our individual assignment'),
(187, 'solam    ', '2023-01-17 02:53:51', 'give marks  34 '),
(188, 'edelawit', '2023-01-17 03:03:24', 'bowrow device id 20'),
(189, 'edelawit', '2023-01-17 03:08:42', 'add device name desktop '),
(190, 'edelawit', '2023-01-17 03:10:43', 'add device name managerial cheer '),
(191, 'edelawit', '2023-01-17 03:12:12', 'bowrow device id 21'),
(192, 'edelawit', '2023-01-17 03:13:46', 'bowrow device id 22'),
(193, 'edelawit', '2023-01-17 03:15:49', 'return device id 22'),
(194, 'edelawit', '2023-01-17 03:15:58', 'return device id 22'),
(195, 'edelawit', '2023-01-17 06:00:06', 'return device id 21'),
(196, 'edelawit', '2023-01-17 06:06:45', 'bowrow device id 21'),
(197, 'edelawit', '2023-01-17 06:07:30', 'return device id 21'),
(198, 'edelawit', '2023-01-17 10:26:37', 'bowrow device id 21'),
(199, 'solam    ', '2023-01-18 05:33:34', 'update assessment due Dates 2023-01-14  '),
(200, 'solam    ', '2023-01-18 05:35:03', 'update assessment due Dates 2023-01-21  '),
(201, 'solam    ', '2023-01-18 05:37:18', 'update assessment due Dates 2023-01-20  '),
(202, 'solam    ', '2023-01-18 05:44:29', 'update assessment due Dates 2023-01-25 '),
(203, 'edelawit', '2023-01-18 06:08:06', 'bowrow device id 21'),
(204, 'edelawit', '2023-01-18 08:05:33', 'bowrow device id 22'),
(205, 'edelawit', '2023-01-18 08:06:41', 'return device id 21'),
(206, 'edelawit', '2023-01-18 08:06:52', 'return device id 22'),
(207, 'edelawit', '2023-01-18 08:07:06', 'return device id 20'),
(208, 'edelawit', '2023-01-18 08:09:45', 'bowrow device id 21'),
(209, 'edelawit', '2023-01-18 08:25:26', 'return device id 21'),
(210, 'edelawit', '2023-01-18 08:26:42', 'bowrow device id 22'),
(211, 'edelawit', '2023-01-18 08:50:27', 'bowrow device id 20'),
(212, 'edelawit', '2023-01-18 08:53:23', 'bowrow device id 21'),
(213, 'edelawit', '2023-01-18 09:02:39', 'return device id 22'),
(214, 'edelawit', '2023-01-18 09:03:16', 'bowrow device id 20'),
(215, 'edelawit', '2023-01-18 09:07:37', 'return device id 21'),
(216, 'edelawit', '2023-01-18 09:11:54', 'return device id 20'),
(217, 'edelawit', '2023-01-18 09:12:14', 'return device id 20'),
(218, 'edelawit', '2023-01-18 09:13:41', 'bowrow device id 21'),
(219, 'edelawit', '2023-01-18 09:19:39', 'bowrow device id 22'),
(220, 'edelawit', '2023-01-18 09:23:59', 'bowrow device id 20'),
(221, 'edelawit', '2023-01-18 09:25:13', 'bowrow device id 20'),
(222, 'edelawit', '2023-01-18 09:25:56', 'bowrow device id 20'),
(223, 'edelawit', '2023-01-18 09:27:43', 'bowrow device id 22'),
(224, 'esku', '2023-01-18 10:03:04', 'submit assignment title 2nd assignmen'),
(225, 'esku', '2023-01-18 10:07:13', 'submit assignment title networking'),
(226, 'edelawit', '2023-01-18 10:59:05', 'return device id 21'),
(227, 'edelawit', '2023-01-18 12:18:22', ' lab Asistant delete device id 20 '),
(228, 'edelawit', '2023-01-18 12:42:16', 'return device id 22'),
(229, 'edelawit', '2023-01-18 12:42:29', 'return device id 22'),
(230, 'edelawit', '2023-01-18 12:43:25', 'return device id 22'),
(231, 'edelawit', '2023-01-19 00:24:41', 'bowrow device id 22'),
(232, 'edelawit', '2023-01-19 00:30:48', 'return device id 22'),
(233, 'edelawit', '2023-01-19 00:34:54', 'bowrow device id 21'),
(234, 'edelawit', '2023-01-19 00:37:50', 'bowrow device id 22'),
(235, 'edelawit', '2023-01-19 00:39:06', 'return device id 22'),
(236, 'edelawit', '2023-01-19 00:41:10', 'bowrow device id 22'),
(237, 'edelawit', '2023-01-19 00:43:43', 'bowrow device id 22'),
(238, 'edelawit', '2023-01-19 00:44:07', 'return device id 22'),
(239, 'edelawit', '2023-01-19 01:34:32', 'bowrow device id 22'),
(240, 'edelawit', '2023-01-19 01:35:19', 'bowrow device id 22'),
(241, 'edelawit', '2023-01-19 01:36:29', 'return device id 22'),
(242, 'edelawit', '2023-01-19 01:37:30', 'return device id 21'),
(243, 'edelawit', '2023-01-19 01:47:07', 'bowrow device id 21'),
(244, 'edelawit', '2023-01-19 01:47:44', 'return device id 21'),
(245, 'edelawit', '2023-01-19 01:48:33', 'return device id 21'),
(246, 'edelawit', '2023-01-19 01:49:08', 'return device id 21'),
(247, 'edelawit', '2023-01-19 01:49:39', 'bowrow device id 22'),
(248, 'edelawit', '2023-01-19 01:50:21', 'bowrow device id 22'),
(249, 'edelawit', '2023-01-19 01:51:15', 'bowrow device id 22'),
(250, 'edelawit', '2023-01-19 01:54:23', 'bowrow device id 21'),
(251, 'edelawit', '2023-01-19 01:56:18', 'bowrow device id 21'),
(252, 'edelawit', '2023-01-19 01:58:24', 'return device id 22'),
(253, 'edelawit', '2023-01-19 01:58:41', 'return device id 22'),
(254, 'edelawit', '2023-01-19 01:58:57', 'return device id 21'),
(255, 'edelawit', '2023-01-19 02:00:36', 'return device id 22'),
(256, 'edelawit', '2023-01-19 02:05:01', 'return device id 21'),
(257, 'edelawit', '2023-01-19 02:08:00', 'bowrow device id 21'),
(258, 'edelawit', '2023-01-19 02:12:06', 'bowrow device id 22'),
(259, 'edelawit', '2023-01-19 02:12:40', 'return device id 22'),
(260, 'edelawit', '2023-01-19 02:12:52', 'return device id 21'),
(261, 'edelawit', '2023-01-19 02:32:56', 'bowrow device id 22'),
(262, 'edelawit', '2023-01-19 02:35:18', 'bowrow device id 21'),
(263, 'edelawit', '2023-01-19 02:40:14', 'bowrow device id 22'),
(264, 'edelawit', '2023-01-19 03:05:59', 'return device id 22'),
(265, 'edelawit', '2023-01-19 03:06:22', 'return device id 21'),
(266, 'edelawit', '2023-01-19 03:08:20', 'return device id 21'),
(267, 'edelawit', '2023-01-19 03:10:40', 'bowrow device id 21'),
(268, 'edelawit', '2023-01-19 03:17:43', 'bowrow device id 22'),
(269, 'edelawit', '2023-01-19 03:18:26', 'bowrow device id 22'),
(270, 'edelawit', '2023-01-19 03:20:34', 'bowrow device id 21'),
(271, 'edelawit', '2023-01-19 03:21:45', 'bowrow device id 21'),
(272, 'edelawit', '2023-01-19 03:22:57', 'bowrow device id 21'),
(273, 'edelawit', '2023-01-19 03:32:16', 'return device id 21'),
(274, 'edelawit', '2023-01-19 03:32:30', 'return device id 21'),
(275, 'edelawit', '2023-01-19 05:16:49', 'bowrow device id 21'),
(276, 'edelawit', '2023-01-19 05:18:01', 'bowrow device id 21'),
(277, 'admin', '2023-01-21 20:10:08', 'admin delete user id 34 '),
(278, 'admin', '2023-01-21 20:43:06', 'admin delete user id 35 '),
(279, 'solam', '2023-01-22 02:39:14', 'give marks  67 '),
(280, 'admin', '2023-01-22 02:39:58', 'admin delete user id 69 '),
(281, 'admin', '2023-01-22 02:43:28', 'admin delete user id 64 '),
(282, 'admin', '2023-01-22 02:46:16', 'admin delete user id 39 '),
(283, 'admin', '2023-01-22 02:49:29', 'admin delete user id 70 '),
(284, 'temi', '2023-01-22 02:54:49', 'submit assignment title individual assignment4'),
(285, 'admin', '2023-01-22 03:50:13', 'admin delete user id 32 '),
(286, 'admin', '2023-01-22 03:50:34', 'admin delete user id 66 '),
(287, 'admin', '2023-01-22 03:50:49', 'admin delete user id 33 '),
(288, 'admin', '2023-01-22 03:53:03', 'admin delete user id 67 '),
(289, 'edelawit', '2023-01-22 08:47:00', 'update device name desktop  '),
(290, 'edelawit', '2023-01-22 08:47:21', 'update device name managerial cheer  '),
(291, 'solam', '2023-01-22 11:30:22', 'update assessment due Dates 2023-02-05 '),
(292, 'esku', '2023-01-22 11:43:45', 'submit assignment title this is my individual assignment'),
(293, 'solam', '2023-01-22 11:48:58', 'give marks  15 ');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `rol_as` enum('0','1','2','3','4') NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `rol_as`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '0', '34e6d02a30a3e1b14359f83581bf16f9'),
(13, 'solam', 'as@gmail.com     ', '1', '34e6d02a30a3e1b14359f83581bf16f9'),
(47, 'belte', 'belet@gmail.com', '2', '34e6d02a30a3e1b14359f83581bf16f9'),
(48, 'belhu', 'bel@gmail.com', '1', '34e6d02a30a3e1b14359f83581bf16f9'),
(55, 'gtaneh', 'getan@gmail.com', '1', '34e6d02a30a3e1b14359f83581bf16f9'),
(62, 'edelawit', 'edl@gmail.com', '2', '34e6d02a30a3e1b14359f83581bf16f9'),
(63, 'esku', 'esku@gmail.com', '3', '34e6d02a30a3e1b14359f83581bf16f9'),
(68, 'fki', 'fki4@gmail.com', '3', 'b2a46f859db9fe3b30e88bafdccb1c77'),
(71, 'sol', 'solomon@gmail.com', '3', '34e6d02a30a3e1b14359f83581bf16f9');

-- --------------------------------------------------------

--
-- Table structure for table `assesment`
--

CREATE TABLE `assesment` (
  `AS_id` int(100) NOT NULL,
  `course_name` varchar(300) NOT NULL,
  `specialization` varchar(20) NOT NULL,
  `sgroup` varchar(100) NOT NULL,
  `B_year` varchar(100) DEFAULT NULL,
  `B_session` varchar(100) NOT NULL,
  `assesment_name` varchar(1000) DEFAULT NULL,
  `teacher_name` varchar(100) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `duDate` date DEFAULT NULL,
  `lastSubDate` date DEFAULT NULL,
  `document` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assesment`
--

INSERT INTO `assesment` (`AS_id`, `course_name`, `specialization`, `sgroup`, `B_year`, `B_session`, `assesment_name`, `teacher_name`, `dates`, `duDate`, `lastSubDate`, `document`) VALUES
(33, 'programing', 'CS&SE', '6', '5th', '2010', 'this is it', 'solomon', '2022-12-30', '2023-01-03', '2023-01-07', 'problem/IRJET-V7I2283.pdf'),
(34, 'AI', 'CS&SE', '7', '5th', '2010', 'okay', 'solomon', '2023-01-10', '2023-01-04', '2023-01-09', 'problem/Screenshot 2022-12-31 040455.png'),
(35, 'programing', 'CS&SE', '6', '5th', '2010', 'test ', 'solomon', '2023-01-10', '2023-02-05', '2023-02-05', 'problem/Screenshot 2022-12-24 150418.png'),
(51, 'networking2', 'CS&SE', '6', '5th', '2010', 'this is it', 'solomon', '2023-01-22', '2023-01-26', '2023-02-03', 'problem/SADprojectsl.docx'),
(52, 'programing', 'CS&SE', '6', '5th', '2010', 'this is it', 'solomon', '2023-01-22', '2023-01-27', '2023-02-02', 'problem/solomon mekonnen 11910.docx');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `ass_id` int(20) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `upload_document` text NOT NULL,
  `upload_document2` text NOT NULL,
  `upload_date` varchar(100) NOT NULL,
  `assessment_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `marks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`ass_id`, `title`, `description`, `upload_document`, `upload_document2`, `upload_date`, `assessment_id`, `email`, `marks`) VALUES
(26, 'this is my individual assignment', ' yes', 'Assignment_doc/Screenshot 2023-01-17 033832.png', '', '2023/01/22', '51', 'esku@gmail.com', ' 15');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `co_id` int(15) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `credit` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`co_id`, `course_code`, `course_name`, `type`, `year`, `credit`) VALUES
(7, 'CT-1213     ', 'programing', 'Theory and lab', '1-1     ', 3),
(8, 'CT-3123    ', 'AI', 'Theory and lab', '2-1  ', 4),
(9, 'CT-1234', 'networking', 'Theory and lab', '3-2', 3),
(17, 'EL-123', 'wirless communication', 'Theory and lab', '5-2', 4),
(18, 'CT-1132', 'java', 'Theory and lab', '2-1', 4),
(19, 'CT-8742 ', 'networking2', 'Theory and lab', '2-2 ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `issue_device`
--

CREATE TABLE `issue_device` (
  `rol_as` enum('0','1','2','3') NOT NULL,
  `name` varchar(100) NOT NULL,
  `Did` int(100) NOT NULL,
  `approve` varchar(300) NOT NULL,
  `issue` date NOT NULL,
  `dev_return` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laba`
--

CREATE TABLE `laba` (
  `tid` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `troll` varchar(100) NOT NULL,
  `labn` varchar(100) NOT NULL,
  `user` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laba`
--

INSERT INTO `laba` (`tid`, `fname`, `lname`, `gender`, `troll`, `labn`, `user`) VALUES
(19, 'edelwit', 'father', 'F', 'CSE_642425_19', 'lab5', 62);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `nid` int(20) NOT NULL,
  `title` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`nid`, `title`, `message`, `time`) VALUES
(1, 'What is a notice?', '\r\nA notice is a written or printed announcement (Example – a notice for sale). It is written in order to inform a large number of people about something that has happened or is about to happen.\r\n\r\nIt could be an upcoming event, competition, Lost, and found notice or just a piece of information to be delivered to the targeted audience. It is generally written in a formal tone.\r\n\r\nNotices are factual and to-the-point. The language used is simple and formal, not flowery. They are put up on display boards in schools or in public places.\r\n\r\nLet us discuss Notice Writing, how to write a notice in English. As a question on notice writing is a part of English writing skills for Class 12. The CBSE has prescribed a format of notice writing to be followed by students.', '2023-01-13 03:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `stdevice`
--

CREATE TABLE `stdevice` (
  `Did` int(11) NOT NULL,
  `dev_name` varchar(100) NOT NULL,
  `dev_brand` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `dev_type` varchar(100) NOT NULL,
  `dev_modal` varchar(100) NOT NULL,
  `serail_number` varchar(100) NOT NULL,
  `dev_desc` varchar(1000) NOT NULL,
  `time` date NOT NULL,
  `labn` varchar(100) NOT NULL,
  `Lab_asis_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stdevice`
--

INSERT INTO `stdevice` (`Did`, `dev_name`, `dev_brand`, `quantity`, `status`, `dev_type`, `dev_modal`, `serail_number`, `dev_desc`, `time`, `labn`, `Lab_asis_name`) VALUES
(21, 'desktop ', 'Hp', 1, 'avalible', 'new', '780', '7801', 'good status ', '2023-01-16', 'lab1 ', 'edelwit '),
(22, 'managerial cheer ', 'other', 1, 'avalible', 'new', 'SN123', '123', 'repairable but working ', '2023-01-22', 'lb2 ', 'edelwit ');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `tid` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `Troll` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `user` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`tid`, `fname`, `lname`, `Troll`, `type`, `qualification`, `status`, `user`) VALUES
(9, 'solomon', 'S', 'CSE_754207_9', 'Lecturer', 'ms', 'Present', 13),
(13, 'getanh', 'gech', 'CSE_187505_13', 'Lecturer', 'Ms', 'Present', 55);

-- --------------------------------------------------------

--
-- Table structure for table `usera`
--

CREATE TABLE `usera` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `roll` varchar(300) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `B_session` varchar(100) NOT NULL,
  `B_year` varchar(100) NOT NULL,
  `sgroup` varchar(100) NOT NULL,
  `specialization` varchar(20) NOT NULL,
  `user` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usera`
--

INSERT INTO `usera` (`id`, `fname`, `lname`, `roll`, `gender`, `type`, `B_session`, `B_year`, `sgroup`, `specialization`, `user`) VALUES
(30, 'eskedar', 'sisay', 'CSE_780614_30', 'F', 'civilian', '2010', '5th     ', '6', 'CS&SE    ', 63),
(37, 'solomon', 'mekonnen', 'CSE_590836_37', 'M', 'military', '2010', ' 1st', '7', 'CS&SE', 71);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `rol_as` (`rol_as`);

--
-- Indexes for table `assesment`
--
ALTER TABLE `assesment`
  ADD PRIMARY KEY (`AS_id`),
  ADD KEY `course_name` (`course_name`),
  ADD KEY `teacher_name` (`teacher_name`),
  ADD KEY `assesment_name` (`assesment_name`(768));

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`ass_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`co_id`),
  ADD KEY `course_name` (`course_name`);

--
-- Indexes for table `issue_device`
--
ALTER TABLE `issue_device`
  ADD KEY `Did` (`Did`),
  ADD KEY `rol_as` (`rol_as`);

--
-- Indexes for table `laba`
--
ALTER TABLE `laba`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `user` (`user`),
  ADD KEY `fname` (`fname`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `stdevice`
--
ALTER TABLE `stdevice`
  ADD PRIMARY KEY (`Did`),
  ADD KEY `Lab_asis_name` (`Lab_asis_name`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `user` (`user`),
  ADD KEY `fname` (`fname`);

--
-- Indexes for table `usera`
--
ALTER TABLE `usera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=294;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `assesment`
--
ALTER TABLE `assesment`
  MODIFY `AS_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `ass_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `co_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `laba`
--
ALTER TABLE `laba`
  MODIFY `tid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `nid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stdevice`
--
ALTER TABLE `stdevice`
  MODIFY `Did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `tid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usera`
--
ALTER TABLE `usera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assesment`
--
ALTER TABLE `assesment`
  ADD CONSTRAINT `assesment_ibfk_1` FOREIGN KEY (`course_name`) REFERENCES `course` (`course_name`),
  ADD CONSTRAINT `assesment_ibfk_2` FOREIGN KEY (`teacher_name`) REFERENCES `teachers` (`fname`);

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `assignment_ibfk_1` FOREIGN KEY (`email`) REFERENCES `admin` (`email`);

--
-- Constraints for table `issue_device`
--
ALTER TABLE `issue_device`
  ADD CONSTRAINT `issue_device_ibfk_1` FOREIGN KEY (`Did`) REFERENCES `stdevice` (`Did`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laba`
--
ALTER TABLE `laba`
  ADD CONSTRAINT `laba_ibfk_1` FOREIGN KEY (`user`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stdevice`
--
ALTER TABLE `stdevice`
  ADD CONSTRAINT `stdevice_ibfk_1` FOREIGN KEY (`Lab_asis_name`) REFERENCES `laba` (`fname`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`user`) REFERENCES `admin` (`id`);

--
-- Constraints for table `usera`
--
ALTER TABLE `usera`
  ADD CONSTRAINT `usera_ibfk_1` FOREIGN KEY (`user`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
