-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2025 at 02:49 AM
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
-- Database: `master_list_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `college_name` varchar(255) DEFAULT NULL,
  `basic_education` varchar(255) DEFAULT NULL,
  `start_from` date DEFAULT NULL,
  `end_to` date DEFAULT NULL,
  `year_graduated` date DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `college_name`, `basic_education`, `start_from`, `end_to`, `year_graduated`, `created`, `modified`) VALUES
(1, 'Olivia Lott', 'Veritatis pariatur ', '1993-02-15', '2021-11-06', '1982-02-26', '2025-04-02 08:13:57', '2025-04-02 08:13:57'),
(2, 'Wayne Sheppard', 'Deserunt adipisicing', '2000-02-23', '2003-03-26', '2004-06-06', '2025-04-02 08:13:57', '2025-04-02 08:24:24'),
(3, 'Callie Duke', 'Excepturi aliquam al', '2005-04-10', '1985-01-13', '1975-08-22', '2025-04-03 03:17:08', '2025-04-03 03:17:08'),
(4, 'Callie Duke', 'Excepturi aliquam al', '2005-04-10', '1985-01-13', '1975-08-22', '2025-04-03 03:17:09', '2025-04-03 03:17:09'),
(5, 'Elton Olson', 'Voluptatem quia dui', '1985-01-18', '2000-06-17', '1989-12-17', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(6, 'Elton Olson', 'Voluptatem quia dui', '1985-01-18', '2000-06-17', '1989-12-17', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(7, 'Luke Bauer', 'Odio quia omnis omni', '1986-05-12', '1976-07-09', '2023-10-07', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(8, 'Luke Bauer', 'Odio quia omnis omni', '1986-05-12', '1976-07-09', '2023-10-07', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(9, 'Jason Sanford', 'Sit commodo ut ullam', '2013-12-25', '2007-10-13', '2008-07-01', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(10, 'Jason Sanford', 'Sit commodo ut ullam', '2013-12-25', '2007-10-13', '2008-07-01', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(11, 'Ahmed Clay', 'Qui quia ad dolor pr', '2018-03-15', '2019-11-28', '1993-11-06', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(12, 'Ahmed Clay', 'Qui quia ad dolor pr', '2018-03-15', '2019-11-28', '1993-11-06', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(13, 'Kiara Richards', 'Qui accusamus delect', '2014-01-05', '2003-06-20', '2018-12-17', '2025-04-03 11:28:57', '2025-04-03 11:28:57'),
(14, 'Hannah Hanson', 'A non lorem ullam cu', '2014-01-05', '2003-06-20', '2018-12-17', '2025-04-03 11:28:57', '2025-04-07 03:46:22'),
(15, 'Nathaniel Santiago', 'Perferendis animi p', '2003-11-03', '1979-10-05', '1992-03-28', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(16, 'Nathaniel Santiago', 'Perferendis animi p', '2003-11-03', '1979-10-05', '1992-03-28', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(17, 'Pandora Smith', 'Molestiae dolores vi', '1989-02-03', '1978-01-11', '1980-04-04', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(18, 'Pandora Smith', 'Molestiae dolores vi', '1989-02-03', '1978-01-11', '1980-04-04', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(19, 'Ayanna Barrett', 'Sunt praesentium pla', '2014-09-14', '2012-06-28', '2005-10-11', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(20, 'Ayanna Barrett', 'Sunt praesentium pla', '2014-09-14', '2012-06-28', '2005-10-11', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(21, 'David Perry', 'Laboriosam deserunt', '1993-10-16', '1991-05-23', '1980-11-11', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(22, 'David Perry', 'Laboriosam deserunt', '1993-10-16', '1991-05-23', '1980-11-11', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(23, 'Taylor Burgess', 'Reiciendis iste plac', '1983-10-08', '1982-12-28', '1974-02-25', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(24, 'Taylor Burgess', 'Reiciendis iste plac', '1983-10-08', '1982-12-28', '1974-02-25', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(25, 'Dara Bentley', 'Officiis occaecat ne', '2014-01-23', '2021-04-20', '1970-05-25', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(26, 'Dara Bentley', 'Officiis occaecat ne', '2014-01-23', '2021-04-20', '1970-05-25', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(27, 'Marcia Dickerson', 'Explicabo Nihil vol', '2024-12-23', '2011-07-28', '1998-12-20', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(28, 'Marcia Dickerson', 'Explicabo Nihil vol', '2024-12-23', '2011-07-28', '1998-12-20', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(29, 'Lani Horn', 'Aliquam Nam aliqua ', '1994-08-12', '1992-11-16', '1981-10-24', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(30, 'Lani Horn', 'Aliquam Nam aliqua ', '1994-08-12', '1992-11-16', '1981-10-24', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(31, 'Casey Alvarez', 'In quo qui quaerat r', '1988-07-09', '1979-01-27', '2010-02-22', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(32, 'Casey Alvarez', 'In quo qui quaerat r', '1988-07-09', '1979-01-27', '2010-02-22', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(33, 'Shad Bryant', 'Dolore et ut cillum ', '1984-05-15', '1974-11-08', '2006-11-16', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(34, 'Shad Bryant', 'Dolore et ut cillum ', '1984-05-15', '1974-11-08', '2006-11-16', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(35, 'Tashya Santos', 'Omnis qui ea assumen', '2009-03-01', '1976-05-06', '2014-09-05', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(36, 'Tashya Santos', 'Omnis qui ea assumen', '2009-03-01', '1976-05-06', '2014-09-05', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(37, 'Adara Garza', 'Aperiam qui adipisci', '2008-09-01', '1986-05-25', '1997-03-01', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(38, 'Adara Garza', 'Aperiam qui adipisci', '2008-09-01', '1986-05-25', '1997-03-01', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(39, 'Adara Garza', 'Aperiam qui adipisci', '2008-09-01', '1986-05-25', '1997-03-01', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(40, 'Adara Garza', 'Aperiam qui adipisci', '2008-09-01', '1986-05-25', '1997-03-01', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(41, 'Ava Hatfield', 'Ducimus iure incidi', '1988-02-14', '1990-05-14', '2011-09-16', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(42, 'Ava Hatfield', 'Ducimus iure incidi', '1988-02-14', '1990-05-14', '2011-09-16', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(43, 'Iola Kirby', 'Ut amet ipsa minus', '2014-11-01', '2016-06-21', '1992-11-09', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(44, 'Iola Kirby', 'Ut amet ipsa minus', '2014-11-01', '2016-06-21', '1992-11-09', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(45, 'Petra Kelley', 'Obcaecati fugit dol', '2016-03-13', '2015-11-15', '2010-06-15', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(46, 'Petra Kelley', 'Obcaecati fugit dol', '2016-03-13', '2015-11-15', '2010-06-15', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(47, 'Neil Rodriquez', 'Dolore voluptatem Q', '2004-02-11', '2023-01-18', '1990-12-10', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(48, 'Neil Rodriquez', 'Dolore voluptatem Q', '2004-02-11', '2023-01-18', '1990-12-10', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(49, 'Inga Mcmahon', 'Dolor est cupiditate', '1996-07-12', '2022-03-23', '1981-09-25', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(50, 'Inga Mcmahon', 'Dolor est cupiditate', '1996-07-12', '2022-03-23', '1981-09-25', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(51, 'Aquila Shaffer', 'Laudantium est qui', '1971-10-01', '1995-04-15', '1978-04-16', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(52, 'Aquila Shaffer', 'Laudantium est qui', '1971-10-01', '1995-04-15', '1978-04-16', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(53, 'Drew Hampton', 'Saepe velit est sint', '1972-04-23', '1995-05-02', '1985-01-24', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(54, 'Drew Hampton', 'Saepe velit est sint', '1972-04-23', '1995-05-02', '1985-01-24', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(55, 'Ivy Meyer', 'Excepteur laudantium', '1995-03-04', '1982-09-04', '2004-12-04', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(56, 'Ivy Meyer', 'Excepteur laudantium', '1995-03-04', '1982-09-04', '2004-12-04', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(57, 'Benjamin Fernandez', 'Facilis eius aut dol', '2023-01-22', '1992-06-21', '1976-06-19', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(58, 'Benjamin Fernandez', 'Facilis eius aut dol', '2023-01-22', '1992-06-21', '1976-06-19', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(59, 'Autumn Rose', 'Voluptates quo atque', '1971-03-21', '1977-03-28', '1985-06-02', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(60, 'Autumn Rose', 'Voluptates quo atque', '1971-03-21', '1977-03-28', '1985-06-02', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(61, 'Xandra Garrett', 'Ad eos consequatur d', '2016-03-08', '2021-06-23', '1986-04-19', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(62, 'Xandra Garrett', 'Ad eos consequatur d', '2016-03-08', '2021-06-23', '1986-04-19', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(63, 'Olympia Hartman', 'Accusantium vel et n', '1998-01-07', '1985-06-10', '1974-09-22', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(64, 'Olympia Hartman', 'Accusantium vel et n', '1998-01-07', '1985-06-10', '1974-09-22', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(65, 'Calvin Jennings', 'Molestiae qui aut et', '1997-03-08', '2019-10-10', '1989-12-16', '2025-04-07 05:11:41', '2025-04-07 05:11:41'),
(66, 'Calvin Jennings', 'Molestiae qui aut et', '1997-03-08', '2019-10-10', '1989-12-16', '2025-04-07 05:14:20', '2025-04-07 05:14:20'),
(67, 'Lysandra Hutchinson', 'Nulla eos ut explica', '1998-02-10', '1989-05-08', '1999-12-15', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(68, 'Lysandra Hutchinson', 'Nulla eos ut explica', '1998-02-10', '1989-05-08', '1999-12-15', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(69, 'Jasper England', 'Ut velit pariatur E', '1980-07-09', '1977-03-08', '2000-12-11', '2025-04-07 05:22:38', '2025-04-07 05:22:38'),
(70, 'Jasper England', 'Ut velit pariatur E', '1980-07-09', '1977-03-08', '2000-12-11', '2025-04-07 05:22:39', '2025-04-07 05:22:39'),
(71, 'Kevin Watts', 'Est sed cumque volup', '1996-08-03', '1991-08-19', '2007-10-21', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(72, 'Kevin Watts', 'Est sed cumque volup', '1996-08-03', '1991-08-19', '2007-10-21', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(73, 'Juliet Shelton', 'Sint et tempore ad', '2024-04-26', '2007-06-11', '1974-08-04', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(74, 'Juliet Shelton', 'Sint et tempore ad', '2024-04-26', '2007-06-11', '1974-08-04', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(75, 'Rae Small', 'A sed quas consequun', '1985-09-19', '1996-08-04', '2009-02-23', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(76, 'Rae Small', 'A sed quas consequun', '1985-09-19', '1996-08-04', '2009-02-23', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(77, 'Fuller Saunders', 'Voluptatibus nulla o', '1980-08-06', '2002-02-09', '1979-02-12', '2025-04-09 10:48:22', '2025-04-09 10:48:22'),
(78, 'Jaden Calderon', 'Quibusdam a sit est ', '1980-08-06', '2002-02-09', '1979-02-12', '2025-04-09 10:48:22', '2025-04-09 10:54:10'),
(79, 'Lewis Townsend', 'Culpa velit id in d', '2007-05-06', '2016-12-23', '1985-05-02', '2025-04-09 11:48:10', '2025-04-09 11:48:10'),
(80, 'Lewis Townsend', 'Culpa velit id in d', '2007-05-06', '2016-12-23', '1985-05-02', '2025-04-09 11:48:10', '2025-04-09 11:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department`, `created`, `modified`) VALUES
(88, 'das', '2025-04-08 03:52:12', '2025-04-08 06:30:58'),
(94, 'shesh', '2025-04-08 06:17:37', '2025-04-08 06:25:02'),
(95, 'jowjwd', '2025-04-08 06:24:28', '2025-04-08 06:24:50');

-- --------------------------------------------------------

--
-- Table structure for table `elementary`
--

CREATE TABLE `elementary` (
  `id` int(11) NOT NULL,
  `elementary_name` varchar(255) DEFAULT NULL,
  `basic_education` varchar(255) DEFAULT NULL,
  `start_from` date DEFAULT NULL,
  `end_to` date DEFAULT NULL,
  `year_graduated` date DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `elementary`
--

INSERT INTO `elementary` (`id`, `elementary_name`, `basic_education`, `start_from`, `end_to`, `year_graduated`, `created`, `modified`) VALUES
(1, 'Belle Martinez', 'Perspiciatis quibus', '2018-07-15', NULL, '2024-05-24', '2025-04-02 08:13:57', '2025-04-02 08:13:57'),
(2, 'Cameron Ortega', 'Deserunt itaque veli', '1980-05-05', NULL, '2014-04-21', '2025-04-02 08:13:57', '2025-04-02 08:24:24'),
(3, 'Vivian Blake', 'Et et nemo sint cor', '2006-08-22', NULL, '1992-06-22', '2025-04-03 03:17:08', '2025-04-03 03:17:08'),
(4, 'Vivian Blake', 'Et et nemo sint cor', '2006-08-22', NULL, '1992-06-22', '2025-04-03 03:17:09', '2025-04-03 03:17:09'),
(5, 'Oliver Riley', 'Vero aperiam nisi al', '1984-02-06', NULL, '1997-08-14', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(6, 'Oliver Riley', 'Vero aperiam nisi al', '1984-02-06', NULL, '1997-08-14', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(7, 'Moses Ewing', 'Velit suscipit accus', '2023-11-06', NULL, '1989-10-01', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(8, 'Moses Ewing', 'Velit suscipit accus', '2023-11-06', NULL, '1989-10-01', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(9, 'Alvin Chambers', 'Quia at minim beatae', '2015-03-18', NULL, '1999-08-28', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(10, 'Alvin Chambers', 'Quia at minim beatae', '2015-03-18', NULL, '1999-08-28', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(11, 'Fay Sutton', 'Doloremque illo sequ', '1993-10-08', NULL, '1987-10-15', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(12, 'Fay Sutton', 'Doloremque illo sequ', '1993-10-08', NULL, '1987-10-15', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(13, 'Carol Guerrero', 'Quaerat voluptatem ', '1987-05-25', NULL, '1982-09-14', '2025-04-03 11:28:57', '2025-04-03 11:28:57'),
(14, 'Julie Pruitt', 'Magni iusto doloremq', '1987-05-25', NULL, '1982-09-14', '2025-04-03 11:28:57', '2025-04-07 03:46:22'),
(15, 'Nell Jordan', 'Eum veniam dolores ', '2025-06-22', NULL, '2004-11-08', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(16, 'Nell Jordan', 'Eum veniam dolores ', '2025-06-22', NULL, '2004-11-08', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(17, 'Driscoll Mcpherson', 'Quo maiores animi e', '1995-05-20', NULL, '1977-09-16', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(18, 'Driscoll Mcpherson', 'Quo maiores animi e', '1995-05-20', NULL, '1977-09-16', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(19, 'Brielle Mckinney', 'Amet beatae in occa', '1972-11-27', NULL, '1985-09-16', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(20, 'Brielle Mckinney', 'Amet beatae in occa', '1972-11-27', NULL, '1985-09-16', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(21, 'Laurel Rose', 'Labore consequat Vo', '2006-04-28', NULL, '2005-07-01', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(22, 'Laurel Rose', 'Labore consequat Vo', '2006-04-28', NULL, '2005-07-01', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(23, 'Melodie Hurst', 'Voluptatibus ut temp', '2001-10-26', NULL, '2024-11-07', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(24, 'Melodie Hurst', 'Voluptatibus ut temp', '2001-10-26', NULL, '2024-11-07', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(25, 'Lydia Miller', 'Sequi proident aut ', '2019-11-02', NULL, '1993-10-19', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(26, 'Lydia Miller', 'Sequi proident aut ', '2019-11-02', NULL, '1993-10-19', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(27, 'Kylynn Moran', 'Distinctio Voluptat', '2023-11-05', NULL, '2017-11-25', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(28, 'Kylynn Moran', 'Distinctio Voluptat', '2023-11-05', NULL, '2017-11-25', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(29, 'Christian Black', 'Reprehenderit deleni', '2018-04-12', NULL, '1983-07-18', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(30, 'Christian Black', 'Reprehenderit deleni', '2018-04-12', NULL, '1983-07-18', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(31, 'Imani Cole', 'Atque omnis molestia', '1986-06-05', NULL, '1981-12-18', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(32, 'Imani Cole', 'Atque omnis molestia', '1986-06-05', NULL, '1981-12-18', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(33, 'Jessamine Mcdonald', 'Vitae sunt sequi vel', '1978-07-15', NULL, '1986-02-09', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(34, 'Jessamine Mcdonald', 'Vitae sunt sequi vel', '1978-07-15', NULL, '1986-02-09', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(35, 'Armando Olsen', 'Ea ex voluptate mini', '1983-12-19', NULL, '2014-10-23', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(36, 'Armando Olsen', 'Ea ex voluptate mini', '1983-12-19', NULL, '2014-10-23', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(37, 'Timothy Patel', 'Qui quia placeat od', '1998-05-17', NULL, '1993-05-14', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(38, 'Timothy Patel', 'Qui quia placeat od', '1998-05-17', NULL, '1993-05-14', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(39, 'Timothy Patel', 'Qui quia placeat od', '1998-05-17', NULL, '1993-05-14', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(40, 'Timothy Patel', 'Qui quia placeat od', '1998-05-17', NULL, '1993-05-14', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(41, 'Moses Britt', 'Doloribus enim dolor', '2001-09-23', NULL, '2003-12-07', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(42, 'Moses Britt', 'Doloribus enim dolor', '2001-09-23', NULL, '2003-12-07', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(43, 'Noah Galloway', 'Pariatur Ut officia', '1976-12-05', NULL, '2015-01-23', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(44, 'Noah Galloway', 'Pariatur Ut officia', '1976-12-05', NULL, '2015-01-23', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(45, 'Lisandra Rosales', 'Consequatur fuga C', '2025-07-17', NULL, '2023-06-20', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(46, 'Lisandra Rosales', 'Consequatur fuga C', '2025-07-17', NULL, '2023-06-20', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(47, 'Mallory Emerson', 'Est asperiores aut ', '1995-01-06', NULL, '1971-01-05', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(48, 'Mallory Emerson', 'Est asperiores aut ', '1995-01-06', NULL, '1971-01-05', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(49, 'Macaulay Yates', 'Cupiditate voluptas ', '1985-05-17', NULL, '2000-12-27', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(50, 'Macaulay Yates', 'Cupiditate voluptas ', '1985-05-17', NULL, '2000-12-27', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(51, 'Byron Watson', 'Aut rem officia culp', '1986-01-02', NULL, '2012-04-21', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(52, 'Byron Watson', 'Aut rem officia culp', '1986-01-02', NULL, '2012-04-21', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(53, 'Kareem Gaines', 'Voluptatem Mollitia', '1996-02-17', NULL, '2015-12-18', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(54, 'Kareem Gaines', 'Voluptatem Mollitia', '1996-02-17', NULL, '2015-12-18', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(55, 'Walker Benton', 'Eum qui nisi irure d', '2015-01-20', NULL, '2021-03-11', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(56, 'Walker Benton', 'Eum qui nisi irure d', '2015-01-20', NULL, '2021-03-11', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(57, 'Noble Rocha', 'Est aliquam aut cons', '1970-04-16', NULL, '1977-09-09', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(58, 'Noble Rocha', 'Est aliquam aut cons', '1970-04-16', NULL, '1977-09-09', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(59, 'Cassidy Richardson', 'Blanditiis cumque pa', '1979-02-03', NULL, '1975-07-02', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(60, 'Cassidy Richardson', 'Blanditiis cumque pa', '1979-02-03', NULL, '1975-07-02', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(61, 'Fallon Harper', 'Dolor voluptatem As', '2011-03-17', NULL, '1986-08-15', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(62, 'Fallon Harper', 'Dolor voluptatem As', '2011-03-17', NULL, '1986-08-15', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(63, 'Ivy Henson', 'Consequatur repelle', '2025-10-07', NULL, '1997-06-28', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(64, 'Ivy Henson', 'Consequatur repelle', '2025-10-07', NULL, '1997-06-28', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(65, 'Hanae Lee', 'Sit molestias dolore', '2006-06-11', '1984-04-07', '1984-04-26', '2025-04-07 05:11:41', '2025-04-07 05:11:41'),
(66, 'Hanae Lee', 'Sit molestias dolore', '2006-06-11', '1984-04-07', '1984-04-26', '2025-04-07 05:14:20', '2025-04-07 05:14:20'),
(67, 'Yvette Haley', 'Tenetur labore quide', '1998-10-08', '2009-08-23', '2014-07-05', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(68, 'Yvette Haley', 'Tenetur labore quide', '1998-10-08', '2009-08-23', '2014-07-05', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(69, 'Nehru Lamb', 'Cupiditate labore bl', '2010-06-28', '1975-09-14', '2023-03-21', '2025-04-07 05:22:38', '2025-04-07 05:22:38'),
(70, 'Nehru Lamb', 'Cupiditate labore bl', '2010-06-28', '1975-09-14', '2023-03-21', '2025-04-07 05:22:39', '2025-04-07 05:22:39'),
(71, 'Ashton Donovan', 'Iure eum voluptatem', '2014-07-17', '2017-01-24', '1983-08-18', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(72, 'Ashton Donovan', 'Iure eum voluptatem', '2014-07-17', '2017-01-24', '1983-08-18', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(73, 'Price Barnes', 'Accusantium unde nis', '1986-11-17', '1983-06-12', '1987-06-22', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(74, 'Price Barnes', 'Accusantium unde nis', '1986-11-17', '1983-06-12', '1987-06-22', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(75, 'Lewis Mann', 'Ea enim excepteur sa', '1982-06-05', '2015-05-12', '1970-03-10', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(76, 'Lewis Mann', 'Ea enim excepteur sa', '1982-06-05', '2015-05-12', '1970-03-10', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(77, 'Jakeem Spencer', 'Ad sint ipsum cum i', '1989-05-21', '2005-07-27', '1992-04-28', '2025-04-09 10:48:22', '2025-04-09 10:48:22'),
(78, 'Judah Christensen', 'Unde autem omnis ten', '1989-05-21', '2005-07-27', '1992-04-28', '2025-04-09 10:48:22', '2025-04-09 10:54:10'),
(79, 'Chadwick Flynn', 'Est ad cupidatat be', '1985-07-26', '2021-03-10', '1975-07-22', '2025-04-09 11:48:10', '2025-04-09 11:48:10'),
(80, 'Chadwick Flynn', 'Est ad cupidatat be', '1985-07-26', '2021-03-10', '1975-07-22', '2025-04-09 11:48:10', '2025-04-09 11:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `blood_type` varchar(255) DEFAULT NULL,
  `gsis_number` varchar(255) DEFAULT NULL,
  `pagibig_number` varchar(255) DEFAULT NULL,
  `philhealth_number` varchar(255) DEFAULT NULL,
  `sss_number` varchar(255) DEFAULT NULL,
  `tin_number` varchar(255) DEFAULT NULL,
  `agency_employee_number` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `residential_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `telephone_number` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `family_background_id` int(11) NOT NULL,
  `elementary_id` int(11) NOT NULL,
  `secondary_id` int(11) NOT NULL,
  `vocational_id` int(11) NOT NULL,
  `college_id` int(11) NOT NULL,
  `graduate_id` int(11) NOT NULL,
  `lnd_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `work_experience_id` int(11) NOT NULL,
  `other_information_id` int(11) NOT NULL,
  `speciality_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `middle_name`, `last_name`, `address`, `place_of_birth`, `date_of_birth`, `sex`, `civil_status`, `height`, `weight`, `blood_type`, `gsis_number`, `pagibig_number`, `philhealth_number`, `sss_number`, `tin_number`, `agency_employee_number`, `citizenship`, `residential_address`, `permanent_address`, `telephone_number`, `mobile_number`, `email`, `family_background_id`, `elementary_id`, `secondary_id`, `vocational_id`, `college_id`, `graduate_id`, `lnd_id`, `organization_id`, `work_experience_id`, `other_information_id`, `speciality_id`, `created`, `modified`) VALUES
(7, 'Sandra', 'Haviva Benton', 'Harris', 'Rerum inventore ea c', 'Culpa perspiciatis ', '1992-06-10', 'Female', 'Rem qui esse except', '54', '65', 'Quae dolorem quia hi', '550', '168', '403', '435', '310', '141', 'Sit vitae sed aut d', 'Mollitia rerum dolor', 'Eum ut molestiae et ', '+1 (799) 551-8318', '390', 'gavobawus@mailinator.com', 14, 14, 14, 14, 14, 14, 14, 14, 14, 14, 14, '2025-04-03 11:28:57', '2025-04-09 23:04:52'),
(8, 'Tiger', 'Amity Powell', 'Luna', 'Molestiae tenetur om', 'Voluptatem Consequa', '1977-06-11', 'Male', 'Eius voluptatum volu', 'Incididunt consequat', 'Elit est dolores de', 'Eveniet debitis lab', '429', '421', '589', '710', '145', '731', 'Quia qui quia ut eiu', 'Molestias soluta exc', 'Exercitationem cum r', '+1 (489) 974-2465', '933', 'dyzakyryro@mailinator.com', 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(9, 'Igor', 'Demetria Matthews', 'Blackburn', 'Excepteur proident ', 'Quasi qui voluptas r', '2015-01-27', 'Male', 'Dolorem id assumenda', 'Itaque provident si', 'Voluptas architecto ', 'Perferendis dolor es', '665', '78', '617', '992', '686', '157', 'Et ipsa reiciendis ', 'Sed tempore aliquid', 'Voluptatibus volupta', '+1 (738) 767-5869', '8', 'jalub@mailinator.com', 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, 18, '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(10, 'Amethyst', 'Ashely Baldwin', 'Joseph', 'Eligendi veritatis p', 'Quidem velit ex quia', '1995-01-14', 'Female', 'Aut rerum culpa ulla', 'Elit mollit nisi no', 'Dolorem vero deserun', 'Obcaecati et est so', '402', '765', '61', '457', '881', '61', 'Maxime blanditiis et', 'Minima reiciendis ip', 'Sunt quo incididunt ', '+1 (238) 639-9828', '267', 'qihu@mailinator.com', 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(12, 'Abdul', 'Imelda Chapman', 'Herrera', 'Unde laboriosam vol', 'Culpa voluptate dol', '1974-11-16', 'Male', 'Similique provident', 'Architecto id modi ', 'Voluptatem Totam be', 'Ullam maxime corpori', '581', '994', '356', '420', '706', '783', 'Facilis incididunt n', 'Laudantium voluptat', 'Vero dolorem pariatu', '+1 (516) 384-6241', '864', 'pemol@mailinator.com', 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, 24, '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(14, 'Mufutau', 'Cain Wolfe', 'Walters', 'Exercitation at id d', 'Anim in voluptatem m', '1975-02-24', 'Male', 'Ut ratione est dolor', 'Est veniam expedita', 'Aspernatur labore en', 'Aliquid ex eos rati', '481', '681', '551', '778', '328', '261', 'Illum at perferendi', 'Ad perspiciatis et ', 'Est eos neque fugi', '+1 (605) 286-9145', '128', 'vydohe@mailinator.com', 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, 28, '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(15, 'Ulysses', 'Axel Holmes', 'Whitney', 'Unde velit ullamco v', 'Debitis eius pariatu', '1974-03-02', 'Female', 'Quos officia et qui ', 'Molestiae voluptatem', 'Architecto est accu', 'Omnis dicta laborios', '590', '748', '920', '990', '457', '878', 'Eaque asperiores sun', 'Exercitationem modi ', 'Aut mollitia corrupt', '+1 (543) 575-4534', '246', 'fyqokucac@mailinator.com', 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, 30, '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(16, 'Fuller', 'Ross Dawson', 'Black', 'Qui facere sunt veli', 'Ad qui est odit exp', '1971-08-27', 'Male', 'Quis enim veritatis ', '12', '12', 'Harum sit sit magnam', '927', '275', '811', '751', '273', '173', 'Unde aut corporis un', 'Esse at nisi autem ', 'Suscipit amet qui a', '+1 (748) 339-5637', '167', 'hihukob@mailinator.com', 32, 32, 32, 32, 32, 32, 32, 32, 32, 32, 32, '2025-04-03 12:01:46', '2025-04-09 23:03:39'),
(17, 'Xandra', 'Shaine Obrien', 'Beck', 'Aliquam vitae dolor ', 'In tempora tempore ', '2023-03-13', 'Female', 'Exercitationem sint', 'Sed pariatur Nisi o', 'Aut velit in ducimu', 'Fugit possimus mod', '954', '840', '155', '991', '125', '151', 'A nulla quidem ipsa', 'Quod qui eos ea exc', 'Tempora in enim face', '+1 (486) 519-1134', '701', 'pabem@mailinator.com', 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(18, 'Ross', 'Shellie Davenport', 'Wallace', 'Et nesciunt est in ', 'Corporis dolor ut si', '1997-11-30', 'Female', 'Ullam velit dignissi', 'Earum eum alias occa', 'Ipsa non velit tem', 'Expedita cumque temp', '943', '859', '323', '266', '619', '444', 'Et explicabo Et con', 'Aliqua Aspernatur a', 'Exercitationem ea si', '+1 (702) 733-4897', '656', 'fejyg@mailinator.com', 36, 36, 36, 36, 36, 36, 36, 36, 36, 36, 36, '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(19, 'Jane', 'Justine Larsen', 'Nichols', 'Proident sit velit', 'Corporis molestiae i', '1992-11-16', 'Female', 'Labore eos illo Nam', 'Amet minim molestia', 'Mollit in autem saep', 'Repudiandae veritati', '897', '550', '245', '664', '306', '547', 'Et dolores non ab cu', 'Dolore qui cillum al', 'Inventore consequatu', '+1 (942) 957-8589', '803', 'lozoxyho@mailinator.com', 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, 38, '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(20, 'Jane', 'Justine Larsen', 'Nichols', 'Proident sit velit', 'Corporis molestiae i', '1992-11-16', 'Female', 'Labore eos illo Nam', 'Amet minim molestia', 'Mollit in autem saep', 'Repudiandae veritati', '897', '550', '245', '664', '306', '547', 'Et dolores non ab cu', 'Dolore qui cillum al', 'Inventore consequatu', '+1 (942) 957-8589', '803', 'lozoxyho@mailinator.com', 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, 40, '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(21, 'Allegra', 'Drew Mckenzie', 'Freeman', 'Sequi ut excepteur l', 'Nihil tenetur dolore', '1976-03-07', 'Female', 'Id provident quia m', 'Eaque voluptas sed o', 'Laborum Deleniti se', 'Qui nihil fugit cor', '872', '547', '611', '341', '248', '691', 'Ea perspiciatis min', 'Impedit deleniti vo', 'Neque eos aute inve', '+1 (308) 227-8674', '167', 'jogabyvuxi@mailinator.com', 42, 42, 42, 42, 42, 42, 42, 42, 42, 42, 42, '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(22, 'Ifeoma', 'Malachi Larsen', 'Moses', 'Voluptas neque dolor', 'Harum quia veniam c', '1984-08-17', 'Female', 'Ex aliquip corporis ', 'Aut dolore voluptati', 'Sapiente alias et in', 'Ea a est eum repelle', '722', '854', '188', '830', '661', '967', 'Qui fuga Placeat v', 'Nisi odit occaecat p', 'Eiusmod a aut occaec', '+1 (933) 169-9454', '352', 'puvapuve@mailinator.com', 44, 44, 44, 44, 44, 44, 44, 44, 44, 44, 44, '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(23, 'Donovan', 'Alan Olsen', 'Steele', 'Aut id molestias ne', 'Atque at cumque odio', '2006-05-13', 'Male', 'Dicta nostrum irure ', 'Velit in ad ea autem', 'Sunt vero quis reru', 'Perferendis eos ut ', '694', '769', '277', '243', '661', '342', 'Et adipisicing est ', 'Laboris dolor dolori', 'Blanditiis dolores c', '+1 (674) 344-4066', '720', 'bisara@mailinator.com', 46, 46, 46, 46, 46, 46, 46, 46, 46, 46, 46, '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(24, 'Salvador', 'Jelani Lewis', 'Browning', 'Dolor veniam et vol', 'Sit consectetur anim', '1992-02-08', 'Male', 'Officiis qui molesti', 'Consequat Consequat', 'Fugiat voluptatum cu', 'Consequat Tempore ', '88', '927', '783', '140', '217', '324', 'Adipisci repudiandae', 'Reiciendis ipsum id', 'Rerum aute dolore am', '+1 (521) 527-7769', '379', 'jykudaz@mailinator.com', 48, 48, 48, 48, 48, 48, 48, 48, 48, 48, 48, '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(25, 'Kennan', 'Mannix Raymond', 'Oliver', 'Quidem autem dolor q', 'Consectetur veniam', '1984-03-03', 'Male', 'Distinctio Et nisi ', 'Consequuntur tenetur', 'Aspernatur sunt sapi', 'Porro voluptate laud', '397', '243', '846', '329', '275', '686', 'Aliquid vitae volupt', 'Nulla et est nesciun', 'Minus quam adipisci ', '+1 (553) 464-7716', '422', 'vavala@mailinator.com', 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(26, 'Yuli', 'Lee Figueroa', 'Castro', 'Pariatur Quaerat pr', 'Elit in in est quis', '1983-01-25', 'Male', 'Numquam et sint et ', 'Nisi aute error at s', 'Sit sed dolor sed eo', 'Et optio pariatur ', '60', '323', '662', '903', '876', '853', 'Architecto doloribus', 'Beatae quod eius sin', 'Asperiores sit ut n', '+1 (674) 505-9448', '558', 'vyvikiryf@mailinator.com', 52, 52, 52, 52, 52, 52, 52, 52, 52, 52, 52, '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(27, 'Suki', 'Dylan Clay', 'Tillman', 'Distinctio Doloribu', 'Aut ut dolor consequ', '1999-08-29', 'Male', 'Ea dicta nihil beata', 'Quidem aut temporibu', 'Quo aut veritatis ut', 'Quia et omnis ab cor', '542', '636', '69', '244', '404', '600', 'Voluptas qui debitis', 'Ea qui consectetur ', 'Et unde eum qui amet', '+1 (373) 856-7845', '737', 'wico@mailinator.com', 54, 54, 54, 54, 54, 54, 54, 54, 54, 54, 54, '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(28, 'Tanner', 'Vielka Pierce', 'Pratt', 'Error labore optio ', 'Voluptatibus et eaqu', '1980-11-12', 'Male', 'Ad minim exercitatio', 'Dolores ut quis quia', 'Quas perspiciatis a', 'Dolor repudiandae ma', '572', '958', '910', '877', '340', '666', 'Nesciunt mollitia e', 'Ad impedit dignissi', 'Eos qui nostrud ips', '+1 (995) 216-8159', '195', 'cubejafiny@mailinator.com', 56, 56, 56, 56, 56, 56, 56, 56, 56, 56, 56, '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(29, 'Rahim', 'Gail Battle', 'Mcknight', 'Aut ex commodo offic', 'Laboriosam similiqu', '2018-11-24', 'Male', 'Incididunt optio do', 'Occaecat ut atque mi', 'Sint exercitation qu', 'Quam voluptas in dol', '566', '232', '184', '198', '903', '263', 'Quaerat consequatur', 'Dolor et tenetur quo', 'Eligendi eu qui inci', '+1 (623) 745-2805', '101', 'xeciwoxot@mailinator.com', 58, 58, 58, 58, 58, 58, 58, 58, 58, 58, 58, '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(30, 'Leigh', 'Azalia Whitney', 'Finch', 'Maiores eaque nobis ', 'Omnis asperiores cil', '2022-02-28', 'Female', 'Commodi temporibus a', 'Eveniet minim unde ', 'Aliquid enim quis ip', 'Sunt qui debitis cup', '977', '326', '548', '526', '675', '843', 'Ut anim sed ut quos ', 'Dolores sequi nihil ', 'Dolore sint incidunt', '+1 (147) 928-4834', '786', 'bapoj@mailinator.com', 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, 60, '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(31, 'Neve', 'Emma Sparks', 'Sawyer', 'Hic qui placeat eum', 'Perferendis qui ex a', '1986-03-26', 'Female', 'Dolorem quae quasi d', 'Suscipit consectetur', 'Sunt odio velit id ', 'Harum quia ea eum mo', '341', '539', '890', '612', '352', '7', 'Deserunt ut dolores ', 'Qui et ratione qui a', 'At quo ullam cillum ', '+1 (735) 145-3424', '1', 'lidefadu@mailinator.com', 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, 62, '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(32, 'Amity', 'Courtney Wood', 'Cherry', 'Deserunt culpa exer', 'Nisi sed quo pariatu', '1976-02-05', 'Female', 'Aperiam aut molestia', 'Non quae ea consecte', 'Mollitia fugiat dig', 'Praesentium saepe qu', '817', '476', '158', '518', '190', '324', 'Ipsam quos dicta asp', 'Irure adipisci iure ', 'Saepe ea eum tempor ', '+1 (229) 844-7053', '536', 'humipiveq@mailinator.com', 64, 64, 64, 64, 64, 64, 64, 64, 64, 64, 64, '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(33, 'Dai', 'Wynne Jefferson', 'Harrell', 'Nostrud ut voluptas ', 'Reprehenderit sed s', '2002-02-01', 'Female', 'Rerum molestias nihi', 'Ducimus totam molli', 'Ut nulla sint et nat', 'Ea pariatur Eaque v', '866', '130', '176', '609', '966', '686', 'Nisi consequat Rem ', 'Mollit nobis exercit', 'Voluptas enim ipsum', '+1 (304) 276-8919', '791', 'bamowy@mailinator.com', 66, 68, 68, 68, 68, 68, 68, 68, 68, 68, 68, '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(34, 'Urielle', 'Herrod Lucas', 'George', 'Architecto iure repr', 'Sit consequat Sapie', '2008-01-03', 'Male', 'Et sit qui in conse', 'Nihil commodo ab pro', 'Ut quas ducimus por', 'Elit est expedita i', '790', '228', '850', '213', '738', '909', 'Quam ratione ullam p', 'Sint et qui exercit', 'Voluptatem id molest', '+1 (972) 798-5118', '98', 'jurenyb@mailinator.com', 68, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, '2025-04-07 05:22:39', '2025-04-07 05:22:39'),
(35, 'Wendy', 'Britanni Cochran', 'Henderson', 'Quod voluptas modi q', 'Voluptatem Commodo ', '2010-03-19', 'Female', 'Fugiat atque nesciun', 'Nostrum possimus es', 'Quis numquam et adip', 'Deserunt sint nihil ', '90', '705', '424', '576', '343', '808', 'Rem ad labore tenetu', 'Porro consequuntur n', 'Pariatur Ipsum ut ', '+1 (622) 553-4666', '467', 'zafetac@mailinator.com', 70, 72, 72, 72, 72, 72, 72, 72, 72, 72, 72, '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(36, 'Kaitlin', 'Cassandra Gaines', 'Solomon', 'Do placeat molestia', 'Autem fugiat repudi', '1974-11-07', 'Male', 'Amet aut modi nisi ', 'Sapiente consequatur', 'Excepteur quos enim ', 'In Nam ratione dolor', '332', '630', '236', '292', '303', '805', 'Aut non beatae volup', 'Dolor dolores cillum', 'Quos tempore velit ', '+1 (862) 869-8366', '400', 'mekarogar@mailinator.com', 72, 74, 74, 74, 74, 74, 74, 74, 74, 74, 74, '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(38, 'Judah', 'MacKenzie Robinson', 'Houston', 'Veniam eos vel vel', 'Sit qui ut velit mo', '1995-01-27', 'Male', 'Iste inventore tempo', '37', '66', 'Ex architecto autem ', '768', '214', '316', '682', '40', '936', 'Commodi praesentium ', 'Hic placeat dolorib', 'Eu non rerum nesciun', '+1 (356) 187-1468', '106', 'gejek@mailinator.com', 76, 78, 78, 78, 78, 78, 78, 78, 78, 78, 78, '2025-04-09 10:48:22', '2025-04-09 11:24:58'),
(39, 'Nora', 'Kevyn Blake', 'Combs', 'Ipsa nihil illum e', 'Aspernatur quas volu', '2011-03-27', 'Male', 'Quod ex nobis ullam ', 'Duis consectetur del', 'Non hic accusamus mo', 'Corporis et et odio ', '555', '772', '399', '466', '329', '246', 'Iure itaque et digni', 'Velit rem quia cons', 'Error lorem fugit q', '+1 (969) 681-9141', '629', 'zyjolyx@mailinator.com', 78, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, '2025-04-09 11:48:10', '2025-04-09 11:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `family_background`
--

CREATE TABLE `family_background` (
  `id` int(11) NOT NULL,
  `family_background` varchar(255) DEFAULT NULL,
  `spouse_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `employer_business_name` varchar(255) DEFAULT NULL,
  `business_address` varchar(255) DEFAULT NULL,
  `telephone_number` varchar(255) DEFAULT NULL,
  `father_surname` varchar(255) NOT NULL,
  `father_first_name` varchar(255) NOT NULL,
  `father_middle_name` varchar(255) NOT NULL,
  `mother_maiden_name` varchar(255) NOT NULL,
  `mother_first_name` varchar(255) NOT NULL,
  `mother_middle_name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `family_background`
--

INSERT INTO `family_background` (`id`, `family_background`, `spouse_name`, `first_name`, `middle_name`, `last_name`, `occupation`, `employer_business_name`, `business_address`, `telephone_number`, `father_surname`, `father_first_name`, `father_middle_name`, `mother_maiden_name`, `mother_first_name`, `mother_middle_name`, `created`, `modified`) VALUES
(1, 'Consequat Quaerat e', 'Barrett Hensley', 'Nomlanga', 'Alec Baird', 'Pruitt', 'Architecto cum vel s', 'Wendy White', 'Maiores id dolor fac', '+1 (426) 156-8063', 'Mckee', 'Fallon', 'Kaye Ross', 'Phelan Mercer', 'Hector', 'Rae Gibson', '2025-04-02 08:13:57', '2025-04-02 08:13:57'),
(2, 'In omnis ut quisquam', 'Skyler Albert', 'Isaiah', 'Samson Ross', 'Sandoval', 'Proident aut non es', 'Kenyon Huffman', 'Sit nisi expedita q', '+1 (224) 299-2026', 'Odonnell', 'Libby', 'Desiree Whitley', 'Courtney Burris', 'Rana', 'Peter Levine', '2025-04-02 08:13:57', '2025-04-02 08:24:24'),
(3, 'Voluptatum atque pra', 'Amos Mendez', 'Yuri', 'Hayley Landry', 'Leonard', 'Non in ullamco accus', 'Dominic Dodson', 'Rerum animi est ve', '+1 (475) 363-7338', 'Salinas', 'Madison', 'Eve Wells', 'Sonya Lancaster', 'Alma', 'Belle Meadows', '2025-04-03 03:17:09', '2025-04-03 03:17:09'),
(4, 'Voluptatum atque pra', 'Amos Mendez', 'Yuri', 'Hayley Landry', 'Leonard', 'Non in ullamco accus', 'Dominic Dodson', 'Rerum animi est ve', '+1 (475) 363-7338', 'Salinas', 'Madison', 'Eve Wells', 'Sonya Lancaster', 'Alma', 'Belle Meadows', '2025-04-03 03:17:09', '2025-04-03 03:17:09'),
(5, 'Consequatur sunt qua', 'Elaine Mcmahon', 'Arden', 'Rooney Cooper', 'Hester', 'Sunt qui neque impe', 'Ocean Potts', 'Velit culpa recusan', '+1 (618) 678-5139', 'Meyers', 'Isaiah', 'Walter Colon', 'Vincent Greene', 'Cailin', 'Ezra Fitzpatrick', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(6, 'Consequatur sunt qua', 'Elaine Mcmahon', 'Arden', 'Rooney Cooper', 'Hester', 'Sunt qui neque impe', 'Ocean Potts', 'Velit culpa recusan', '+1 (618) 678-5139', 'Meyers', 'Isaiah', 'Walter Colon', 'Vincent Greene', 'Cailin', 'Ezra Fitzpatrick', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(7, 'Dolor rerum sunt dol', 'Erasmus Baker', 'Emily', 'Elton Beach', 'Madden', 'Reprehenderit ullam ', 'Dorian Hyde', 'Blanditiis consequat', '+1 (245) 658-3322', 'Buchanan', 'Herman', 'Casey Santiago', 'Velma Cummings', 'Gillian', 'Neville Grant', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(8, 'Dolor rerum sunt dol', 'Erasmus Baker', 'Emily', 'Elton Beach', 'Madden', 'Reprehenderit ullam ', 'Dorian Hyde', 'Blanditiis consequat', '+1 (245) 658-3322', 'Buchanan', 'Herman', 'Casey Santiago', 'Velma Cummings', 'Gillian', 'Neville Grant', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(9, 'Neque nisi voluptas ', 'Flynn Conley', 'Astra', 'Joel Wilkins', 'Holloway', 'Earum corrupti quis', 'Heather Ashley', 'Ipsum ad deleniti om', '+1 (198) 585-7383', 'Phelps', 'Forrest', 'Keaton Harper', 'Alana Daugherty', 'Felicia', 'Warren Avery', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(10, 'Neque nisi voluptas ', 'Flynn Conley', 'Astra', 'Joel Wilkins', 'Holloway', 'Earum corrupti quis', 'Heather Ashley', 'Ipsum ad deleniti om', '+1 (198) 585-7383', 'Phelps', 'Forrest', 'Keaton Harper', 'Alana Daugherty', 'Felicia', 'Warren Avery', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(11, 'Qui expedita culpa ', 'Rudyard Olsen', 'India', 'Herrod Rivera', 'Guerrero', 'Qui excepturi id qui', 'Rylee Howell', 'Rerum eiusmod tempor', '+1 (645) 702-1026', 'Figueroa', 'Nadine', 'Hiroko Murphy', 'Naida Porter', 'Amity', 'Leigh Hendrix', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(12, 'Qui expedita culpa ', 'Rudyard Olsen', 'India', 'Herrod Rivera', 'Guerrero', 'Qui excepturi id qui', 'Rylee Howell', 'Rerum eiusmod tempor', '+1 (645) 702-1026', 'Figueroa', 'Nadine', 'Hiroko Murphy', 'Naida Porter', 'Amity', 'Leigh Hendrix', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(13, 'Iusto et nostrud rer', 'Carol Rogers', 'Tashya', 'Freya Hensley', 'Gates', 'Adipisicing aspernat', 'Vera Waters', 'Eligendi exercitatio', '+1 (299) 105-9163', 'Farley', 'Maisie', 'Tanner Whitehead', 'Lareina Kline', 'Kylan', 'Inez Wiggins', '2025-04-03 11:28:57', '2025-04-03 11:28:57'),
(14, 'Iusto et nostrud rer', 'Carol Rogers', 'Remedios', 'Noelle Maddox', 'Conley', 'Aut ut amet veritat', 'Hop Franco', 'Dolor ex autem quide', '+1 (735) 704-4988', 'Bonner', 'Emerald', 'Bryar Alvarado', 'Riley Parrish', 'Brody', 'Nola Alvarado', '2025-04-03 11:28:57', '2025-04-07 03:46:22'),
(15, 'Aspernatur ex reicie', 'Doris Sears', 'Rajah', 'Cameron Lee', 'Guthrie', 'Unde officia expedit', 'Colin Stephenson', 'Excepturi consequunt', '+1 (575) 348-7089', 'Ramsey', 'Ralph', 'Gavin Greer', 'Fay Ayers', 'Ann', 'Angelica Kirkland', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(16, 'Aspernatur ex reicie', 'Doris Sears', 'Rajah', 'Cameron Lee', 'Guthrie', 'Unde officia expedit', 'Colin Stephenson', 'Excepturi consequunt', '+1 (575) 348-7089', 'Ramsey', 'Ralph', 'Gavin Greer', 'Fay Ayers', 'Ann', 'Angelica Kirkland', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(17, 'Consequat Veniam q', 'Garth Thompson', 'Abdul', 'Hayley French', 'Ortiz', 'Fugit ex dicta maio', 'Camilla Grant', 'Est nisi est aute s', '+1 (755) 163-4367', 'Dudley', 'Mara', 'Lila Dunlap', 'Ina Crane', 'Rafael', 'Alexandra Pennington', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(18, 'Consequat Veniam q', 'Garth Thompson', 'Abdul', 'Hayley French', 'Ortiz', 'Fugit ex dicta maio', 'Camilla Grant', 'Est nisi est aute s', '+1 (755) 163-4367', 'Dudley', 'Mara', 'Lila Dunlap', 'Ina Crane', 'Rafael', 'Alexandra Pennington', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(19, 'Et sit distinctio ', 'Harriet Hill', 'Daquan', 'Galvin Sloan', 'Scott', 'Est ut nesciunt inc', 'Germaine Hutchinson', 'Proident sequi mini', '+1 (718) 454-9324', 'Cummings', 'Chadwick', 'Candice Shaffer', 'Rhoda Schmidt', 'Leo', 'Hammett Finley', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(20, 'Et sit distinctio ', 'Harriet Hill', 'Daquan', 'Galvin Sloan', 'Scott', 'Est ut nesciunt inc', 'Germaine Hutchinson', 'Proident sequi mini', '+1 (718) 454-9324', 'Cummings', 'Chadwick', 'Candice Shaffer', 'Rhoda Schmidt', 'Leo', 'Hammett Finley', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(21, 'Velit culpa nisi ut', 'Aretha Orr', 'Gloria', 'Ciara Sosa', 'Ellis', 'Enim veniam sit re', 'Mira Hanson', 'Quae hic omnis cupid', '+1 (365) 772-2554', 'Garcia', 'Abra', 'Paul Lynch', 'Xena Douglas', 'Cleo', 'Jarrod Peters', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(22, 'Velit culpa nisi ut', 'Aretha Orr', 'Gloria', 'Ciara Sosa', 'Ellis', 'Enim veniam sit re', 'Mira Hanson', 'Quae hic omnis cupid', '+1 (365) 772-2554', 'Garcia', 'Abra', 'Paul Lynch', 'Xena Douglas', 'Cleo', 'Jarrod Peters', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(23, 'Ex proident et sed ', 'Dakota Sanford', 'Serena', 'Sheila Reyes', 'Summers', 'Animi nisi sed et o', 'Macey England', 'Quidem ipsam error c', '+1 (624) 987-6329', 'Drake', 'Mary', 'Quincy Hensley', 'Martina Walsh', 'Phoebe', 'TaShya Payne', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(24, 'Ex proident et sed ', 'Dakota Sanford', 'Serena', 'Sheila Reyes', 'Summers', 'Animi nisi sed et o', 'Macey England', 'Quidem ipsam error c', '+1 (624) 987-6329', 'Drake', 'Mary', 'Quincy Hensley', 'Martina Walsh', 'Phoebe', 'TaShya Payne', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(25, 'Fugiat iste harum qu', 'Tucker Alston', 'Elvis', 'Faith Sutton', 'Tanner', 'Provident sit offic', 'Winter Decker', 'Voluptatem ea recusa', '+1 (707) 671-4759', 'Spence', 'Brent', 'Shaine Underwood', 'Raphael Ford', 'Camille', 'Thomas Lott', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(26, 'Fugiat iste harum qu', 'Tucker Alston', 'Elvis', 'Faith Sutton', 'Tanner', 'Provident sit offic', 'Winter Decker', 'Voluptatem ea recusa', '+1 (707) 671-4759', 'Spence', 'Brent', 'Shaine Underwood', 'Raphael Ford', 'Camille', 'Thomas Lott', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(27, 'Sed quidem consequun', 'Daniel Head', 'Alvin', 'Silas Travis', 'Armstrong', 'Quo enim repudiandae', 'Ori Bender', 'Aliquid maxime sint', '+1 (237) 116-2447', 'Murray', 'Skyler', 'Fulton Zimmerman', 'Talon Collier', 'Kirk', 'Medge Vasquez', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(28, 'Sed quidem consequun', 'Daniel Head', 'Alvin', 'Silas Travis', 'Armstrong', 'Quo enim repudiandae', 'Ori Bender', 'Aliquid maxime sint', '+1 (237) 116-2447', 'Murray', 'Skyler', 'Fulton Zimmerman', 'Talon Collier', 'Kirk', 'Medge Vasquez', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(29, 'Fugit incididunt di', 'Driscoll Watkins', 'Glenna', 'Yvette Floyd', 'Santiago', 'Accusamus hic necess', 'Brianna Stevenson', 'Facilis in voluptate', '+1 (919) 268-7187', 'Mcbride', 'Nissim', 'Virginia Peters', 'Quon Park', 'Levi', 'Hunter Bray', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(30, 'Fugit incididunt di', 'Driscoll Watkins', 'Glenna', 'Yvette Floyd', 'Santiago', 'Accusamus hic necess', 'Brianna Stevenson', 'Facilis in voluptate', '+1 (919) 268-7187', 'Mcbride', 'Nissim', 'Virginia Peters', 'Quon Park', 'Levi', 'Hunter Bray', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(31, 'Qui aut quo laborum ', 'Abra Adams', 'Regan', 'Orson Yang', 'Shepard', 'Et est eiusmod earum', 'Wade Jones', 'Quis omnis modi dolo', '+1 (771) 365-2439', 'Battle', 'Uriah', 'Montana Brady', 'Mollie Becker', 'Eve', 'Ishmael Kline', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(32, 'Qui aut quo laborum ', 'Abra Adams', 'Regan', 'Orson Yang', 'Shepard', 'Et est eiusmod earum', 'Wade Jones', 'Quis omnis modi dolo', '+1 (771) 365-2439', 'Battle', 'Uriah', 'Montana Brady', 'Mollie Becker', 'Eve', 'Ishmael Kline', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(33, 'Asperiores id omnis ', 'Ruby Delgado', 'Flynn', 'Mason Vance', 'Gonzalez', 'Consequatur Consequ', 'Jemima Mclean', 'Repudiandae tempore', '+1 (779) 687-9042', 'Caldwell', 'Rama', 'Adam Salazar', 'Riley Watson', 'Shana', 'Gannon Mcclure', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(34, 'Asperiores id omnis ', 'Ruby Delgado', 'Flynn', 'Mason Vance', 'Gonzalez', 'Consequatur Consequ', 'Jemima Mclean', 'Repudiandae tempore', '+1 (779) 687-9042', 'Caldwell', 'Rama', 'Adam Salazar', 'Riley Watson', 'Shana', 'Gannon Mcclure', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(35, 'Labore natus ipsam e', 'David Cohen', 'Flavia', 'Rhona Craft', 'Tyson', 'Similique distinctio', 'Timon Fernandez', 'Vitae ipsa atque la', '+1 (673) 671-8528', 'Jacobson', 'Ivy', 'Hedley Erickson', 'Orli Rush', 'John', 'Giselle Shelton', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(36, 'Labore natus ipsam e', 'David Cohen', 'Flavia', 'Rhona Craft', 'Tyson', 'Similique distinctio', 'Timon Fernandez', 'Vitae ipsa atque la', '+1 (673) 671-8528', 'Jacobson', 'Ivy', 'Hedley Erickson', 'Orli Rush', 'John', 'Giselle Shelton', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(37, 'Voluptas eum nemo et', 'Beatrice Sutton', 'Armand', 'Miranda Booker', 'Stark', 'Voluptas vel ea vel ', 'Kuame Whitley', 'Voluptatem temporibu', '+1 (447) 177-1285', 'Weber', 'Jacob', 'Gary Stewart', 'Judah Steele', 'Lacey', 'Tatyana House', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(38, 'Voluptas eum nemo et', 'Beatrice Sutton', 'Armand', 'Miranda Booker', 'Stark', 'Voluptas vel ea vel ', 'Kuame Whitley', 'Voluptatem temporibu', '+1 (447) 177-1285', 'Weber', 'Jacob', 'Gary Stewart', 'Judah Steele', 'Lacey', 'Tatyana House', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(39, 'Voluptas eum nemo et', 'Beatrice Sutton', 'Armand', 'Miranda Booker', 'Stark', 'Voluptas vel ea vel ', 'Kuame Whitley', 'Voluptatem temporibu', '+1 (447) 177-1285', 'Weber', 'Jacob', 'Gary Stewart', 'Judah Steele', 'Lacey', 'Tatyana House', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(40, 'Voluptas eum nemo et', 'Beatrice Sutton', 'Armand', 'Miranda Booker', 'Stark', 'Voluptas vel ea vel ', 'Kuame Whitley', 'Voluptatem temporibu', '+1 (447) 177-1285', 'Weber', 'Jacob', 'Gary Stewart', 'Judah Steele', 'Lacey', 'Tatyana House', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(41, 'Labore lorem obcaeca', 'Alec Mercado', 'Kaye', 'Felix Rocha', 'Pruitt', 'Ea hic ut sed invent', 'Amal Sanchez', 'Aliquid tempore max', '+1 (123) 608-7203', 'Alvarez', 'Shoshana', 'Phyllis Hodges', 'Whitney Haley', 'Mufutau', 'Zia Burnett', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(42, 'Labore lorem obcaeca', 'Alec Mercado', 'Kaye', 'Felix Rocha', 'Pruitt', 'Ea hic ut sed invent', 'Amal Sanchez', 'Aliquid tempore max', '+1 (123) 608-7203', 'Alvarez', 'Shoshana', 'Phyllis Hodges', 'Whitney Haley', 'Mufutau', 'Zia Burnett', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(43, 'Et id optio tempori', 'Elaine Lambert', 'Reuben', 'Fallon Drake', 'Newton', 'Magna totam ea qui d', 'Nathan Bean', 'Excepteur eum verita', '+1 (454) 218-6339', 'Hayden', 'Merrill', 'Joseph Leonard', 'Heather Langley', 'Quentin', 'Gage Wilkinson', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(44, 'Et id optio tempori', 'Elaine Lambert', 'Reuben', 'Fallon Drake', 'Newton', 'Magna totam ea qui d', 'Nathan Bean', 'Excepteur eum verita', '+1 (454) 218-6339', 'Hayden', 'Merrill', 'Joseph Leonard', 'Heather Langley', 'Quentin', 'Gage Wilkinson', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(45, 'Exercitation quia re', 'Tate Carter', 'Quinlan', 'Charde Moses', 'Norton', 'Sed est sint lorem c', 'Cassady Franks', 'Aute id assumenda ex', '+1 (581) 982-1626', 'Mayer', 'Joseph', 'Sylvester Chase', 'Lesley Best', 'Sloane', 'Geoffrey Kim', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(46, 'Exercitation quia re', 'Tate Carter', 'Quinlan', 'Charde Moses', 'Norton', 'Sed est sint lorem c', 'Cassady Franks', 'Aute id assumenda ex', '+1 (581) 982-1626', 'Mayer', 'Joseph', 'Sylvester Chase', 'Lesley Best', 'Sloane', 'Geoffrey Kim', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(47, 'Iste qui impedit ab', 'Charles Avery', 'Carter', 'Vivian Reed', 'Glenn', 'Pariatur Rerum et h', 'Wynne Gilmore', 'Qui tempor qui Nam a', '+1 (447) 777-7165', 'Humphrey', 'Pandora', 'Halee Harris', 'Darryl Cobb', 'Alexander', 'Brock Humphrey', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(48, 'Iste qui impedit ab', 'Charles Avery', 'Carter', 'Vivian Reed', 'Glenn', 'Pariatur Rerum et h', 'Wynne Gilmore', 'Qui tempor qui Nam a', '+1 (447) 777-7165', 'Humphrey', 'Pandora', 'Halee Harris', 'Darryl Cobb', 'Alexander', 'Brock Humphrey', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(49, 'Aperiam in nulla dol', 'Nigel Lara', 'Ciara', 'Gisela Talley', 'Reese', 'Quam cumque adipisic', 'Zephania Potts', 'Incidunt esse aliq', '+1 (453) 817-5276', 'Olson', 'Chaney', 'Brennan Wilkins', 'Baker Medina', 'Reese', 'Reece Yates', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(50, 'Aperiam in nulla dol', 'Nigel Lara', 'Ciara', 'Gisela Talley', 'Reese', 'Quam cumque adipisic', 'Zephania Potts', 'Incidunt esse aliq', '+1 (453) 817-5276', 'Olson', 'Chaney', 'Brennan Wilkins', 'Baker Medina', 'Reese', 'Reece Yates', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(51, 'Nostrud ipsum eu an', 'Irma Greene', 'Maya', 'Rebekah Little', 'Lang', 'Dolore officia volup', 'Rhiannon Ortega', 'Et neque quod offici', '+1 (159) 598-1943', 'Beard', 'Justin', 'Alika Dean', 'Inez Barber', 'Brooke', 'Oprah Reeves', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(52, 'Nostrud ipsum eu an', 'Irma Greene', 'Maya', 'Rebekah Little', 'Lang', 'Dolore officia volup', 'Rhiannon Ortega', 'Et neque quod offici', '+1 (159) 598-1943', 'Beard', 'Justin', 'Alika Dean', 'Inez Barber', 'Brooke', 'Oprah Reeves', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(53, 'Est ex eum vero sed', 'Rebekah Powers', 'Ocean', 'Oprah Chan', 'Bennett', 'Est tempore delectu', 'Stuart Sherman', 'Aute elit nihil con', '+1 (926) 905-3281', 'Benton', 'Marsden', 'Lacota Stein', 'Thor Kirkland', 'Micah', 'Dillon Buck', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(54, 'Est ex eum vero sed', 'Rebekah Powers', 'Ocean', 'Oprah Chan', 'Bennett', 'Est tempore delectu', 'Stuart Sherman', 'Aute elit nihil con', '+1 (926) 905-3281', 'Benton', 'Marsden', 'Lacota Stein', 'Thor Kirkland', 'Micah', 'Dillon Buck', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(55, 'Odit ab officia dolo', 'Louis West', 'Leonard', 'Dustin Maddox', 'Suarez', 'Aut facere minim mod', 'Leandra Vargas', 'Debitis qui quidem e', '+1 (182) 916-7725', 'Petty', 'Iona', 'Robert White', 'Arsenio Santiago', 'Stella', 'Mikayla Stephenson', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(56, 'Odit ab officia dolo', 'Louis West', 'Leonard', 'Dustin Maddox', 'Suarez', 'Aut facere minim mod', 'Leandra Vargas', 'Debitis qui quidem e', '+1 (182) 916-7725', 'Petty', 'Iona', 'Robert White', 'Arsenio Santiago', 'Stella', 'Mikayla Stephenson', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(57, 'Deserunt numquam hic', 'Sophia Mcconnell', 'Camille', 'Howard Talley', 'Baker', 'Ut in blanditiis pro', 'Kennedy Boyle', 'A dolor cillum quod ', '+1 (767) 804-9401', 'Harris', 'Zane', 'Orli Le', 'Wing Ellis', 'Illana', 'Plato Stevenson', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(58, 'Deserunt numquam hic', 'Sophia Mcconnell', 'Camille', 'Howard Talley', 'Baker', 'Ut in blanditiis pro', 'Kennedy Boyle', 'A dolor cillum quod ', '+1 (767) 804-9401', 'Harris', 'Zane', 'Orli Le', 'Wing Ellis', 'Illana', 'Plato Stevenson', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(59, 'Architecto cum quaer', 'Cooper Torres', 'Quemby', 'Wallace Waters', 'Colon', 'Iusto reprehenderit ', 'Mark Franklin', 'Magnam dolorem quis ', '+1 (918) 109-4983', 'Pace', 'Ann', 'Zena Schneider', 'Gemma Woods', 'Kyra', 'Nomlanga Gilliam', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(60, 'Architecto cum quaer', 'Cooper Torres', 'Quemby', 'Wallace Waters', 'Colon', 'Iusto reprehenderit ', 'Mark Franklin', 'Magnam dolorem quis ', '+1 (918) 109-4983', 'Pace', 'Ann', 'Zena Schneider', 'Gemma Woods', 'Kyra', 'Nomlanga Gilliam', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(61, 'Eiusmod nobis eum qu', 'Erasmus Battle', 'Vernon', 'Vivien Peterson', 'Wiggins', 'Laudantium nostrum ', 'Zenaida Mendoza', 'Voluptates a aut aut', '+1 (728) 776-2865', 'Wilkinson', 'Melissa', 'Rae Conner', 'Felicia Kelley', 'Matthew', 'Denton Little', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(62, 'Eiusmod nobis eum qu', 'Erasmus Battle', 'Vernon', 'Vivien Peterson', 'Wiggins', 'Laudantium nostrum ', 'Zenaida Mendoza', 'Voluptates a aut aut', '+1 (728) 776-2865', 'Wilkinson', 'Melissa', 'Rae Conner', 'Felicia Kelley', 'Matthew', 'Denton Little', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(63, 'Minim libero dolore ', 'Lynn Maldonado', 'Elaine', 'Roary David', 'Short', 'Commodo maiores temp', 'Zelenia Bentley', 'Earum officia in con', '+1 (168) 703-3446', 'Foreman', 'Rhea', 'Kylynn Torres', 'Kibo Blake', 'Hadley', 'Deborah Delaney', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(64, 'Minim libero dolore ', 'Lynn Maldonado', 'Elaine', 'Roary David', 'Short', 'Commodo maiores temp', 'Zelenia Bentley', 'Earum officia in con', '+1 (168) 703-3446', 'Foreman', 'Rhea', 'Kylynn Torres', 'Kibo Blake', 'Hadley', 'Deborah Delaney', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(65, 'Magna quisquam eveni', 'Yeo Harper', 'Kelly', 'Garrett Blackburn', 'Franklin', 'Proident temporibus', 'Garrison Hawkins', 'Dignissimos enim dol', '+1 (728) 176-9389', 'Mccarty', 'Driscoll', 'Heather Diaz', 'Christine Hess', 'Ivor', 'Desirae Mclean', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(66, 'Magna quisquam eveni', 'Yeo Harper', 'Kelly', 'Garrett Blackburn', 'Franklin', 'Proident temporibus', 'Garrison Hawkins', 'Dignissimos enim dol', '+1 (728) 176-9389', 'Mccarty', 'Driscoll', 'Heather Diaz', 'Christine Hess', 'Ivor', 'Desirae Mclean', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(67, 'Sit in laborum Vel', 'Mallory Sweet', 'Chastity', 'Cain Mcfadden', 'Mcfadden', 'In voluptate id poss', 'Camden Castaneda', 'Quaerat id impedit ', '+1 (499) 473-5382', 'Gill', 'Destiny', 'Rina Garza', 'Jarrod Coleman', 'Drew', 'Cullen Hicks', '2025-04-07 05:22:38', '2025-04-07 05:22:38'),
(68, 'Sit in laborum Vel', 'Mallory Sweet', 'Chastity', 'Cain Mcfadden', 'Mcfadden', 'In voluptate id poss', 'Camden Castaneda', 'Quaerat id impedit ', '+1 (499) 473-5382', 'Gill', 'Destiny', 'Rina Garza', 'Jarrod Coleman', 'Drew', 'Cullen Hicks', '2025-04-07 05:22:39', '2025-04-07 05:22:39'),
(69, 'Repellendus Labore ', 'Yoshi Garza', 'Hayden', 'Hoyt Weiss', 'Shepard', 'Dolores voluptas sit', 'Pascale Humphrey', 'Voluptas aut totam a', '+1 (979) 447-3405', 'Graham', 'Herrod', 'Giselle Shepard', 'Mercedes Morrison', 'Colleen', 'Maggie Burris', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(70, 'Repellendus Labore ', 'Yoshi Garza', 'Hayden', 'Hoyt Weiss', 'Shepard', 'Dolores voluptas sit', 'Pascale Humphrey', 'Voluptas aut totam a', '+1 (979) 447-3405', 'Graham', 'Herrod', 'Giselle Shepard', 'Mercedes Morrison', 'Colleen', 'Maggie Burris', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(71, 'Maxime dolore perfer', 'Montana Spencer', 'Paloma', 'Olympia Richards', 'Acevedo', 'Quaerat ut autem in ', 'Yael Roman', 'Porro aut sit anim ', '+1 (268) 447-2701', 'Mays', 'Uriel', 'Chester Trujillo', 'Joelle Dillard', 'Davis', 'Salvador Barlow', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(72, 'Maxime dolore perfer', 'Montana Spencer', 'Paloma', 'Olympia Richards', 'Acevedo', 'Quaerat ut autem in ', 'Yael Roman', 'Porro aut sit anim ', '+1 (268) 447-2701', 'Mays', 'Uriel', 'Chester Trujillo', 'Joelle Dillard', 'Davis', 'Salvador Barlow', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(73, 'Quo nisi quasi ea si', 'Amanda Riddle', 'Nash', 'Jamal Gonzalez', 'Hinton', 'Officiis quae dolore', 'Keith Dudley', 'Est voluptate est ', '+1 (169) 251-6779', 'Bowen', 'Malcolm', 'Garrett Miller', 'Peter Stewart', 'Hashim', 'Demetria Maynard', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(74, 'Quo nisi quasi ea si', 'Amanda Riddle', 'Nash', 'Jamal Gonzalez', 'Hinton', 'Officiis quae dolore', 'Keith Dudley', 'Est voluptate est ', '+1 (169) 251-6779', 'Bowen', 'Malcolm', 'Garrett Miller', 'Peter Stewart', 'Hashim', 'Demetria Maynard', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(75, 'Dolorem ipsam laboru', 'Hayley Neal', 'Portia', 'Felix Herrera', 'Ross', 'Quo impedit beatae ', 'Kaye Johnston', 'Expedita autem ducim', '+1 (267) 321-1973', 'Yang', 'Hakeem', 'Brock Robinson', 'Wade Hodges', 'Camilla', 'Damian Bridges', '2025-04-09 10:48:22', '2025-04-09 10:48:22'),
(76, 'Dolorem ipsam laboru', 'Hayley Neal', 'Gillian', 'Mufutau Waller', 'Jacobs', 'Quasi sit voluptatum', 'Uriah King', 'Sit consequuntur lor', '+1 (329) 156-2874', 'Hodge', 'Olga', 'Cullen Mcmahon', 'Yvonne Sanchez', 'Xander', 'Fleur Ayers', '2025-04-09 10:48:22', '2025-04-09 10:54:10'),
(77, 'Reiciendis id conse', 'Rebecca Boyle', 'Molly', 'Ryan Marsh', 'Copeland', 'Fugiat saepe et lab', 'Jillian Dale', 'Accusamus numquam qu', '+1 (235) 427-6836', 'Oconnor', 'Janna', 'Buffy Nunez', 'Kendall Puckett', 'Piper', 'Ulric Burnett', '2025-04-09 11:48:10', '2025-04-09 11:48:10'),
(78, 'Reiciendis id conse', 'Rebecca Boyle', 'Molly', 'Ryan Marsh', 'Copeland', 'Fugiat saepe et lab', 'Jillian Dale', 'Accusamus numquam qu', '+1 (235) 427-6836', 'Oconnor', 'Janna', 'Buffy Nunez', 'Kendall Puckett', 'Piper', 'Ulric Burnett', '2025-04-09 11:48:10', '2025-04-09 11:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `graduate`
--

CREATE TABLE `graduate` (
  `id` int(11) NOT NULL,
  `graduate_name` varchar(255) DEFAULT NULL,
  `basic_education` varchar(255) DEFAULT NULL,
  `start_from` date DEFAULT NULL,
  `end_to` date DEFAULT NULL,
  `year_graduated` date DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `graduate`
--

INSERT INTO `graduate` (`id`, `graduate_name`, `basic_education`, `start_from`, `end_to`, `year_graduated`, `created`, `modified`) VALUES
(1, 'Sawyer Osborne', 'Distinctio Cumque a', '2011-04-28', '1988-03-12', '2004-11-11', '2025-04-02 08:13:57', '2025-04-02 08:13:57'),
(2, 'Kareem Brennan', 'Dolorum ad rem ut do', '2023-04-23', '2020-09-16', '1985-05-18', '2025-04-02 08:13:57', '2025-04-02 08:24:24'),
(3, 'Tamekah Petersen', 'Fugiat aut cillum v', '1996-01-07', '2017-02-28', '1988-04-10', '2025-04-03 03:17:08', '2025-04-03 03:17:08'),
(4, 'Tamekah Petersen', 'Fugiat aut cillum v', '1996-01-07', '2017-02-28', '1988-04-10', '2025-04-03 03:17:09', '2025-04-03 03:17:09'),
(5, 'Jelani Mullen', 'Neque autem tempore', '2025-08-21', '2002-04-19', '2021-07-06', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(6, 'Jelani Mullen', 'Neque autem tempore', '2025-08-21', '2002-04-19', '2021-07-06', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(7, 'Orli Wilkins', 'Nostrud rerum do omn', '1993-03-07', '2018-09-23', '2013-02-28', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(8, 'Orli Wilkins', 'Nostrud rerum do omn', '1993-03-07', '2018-09-23', '2013-02-28', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(9, 'Chester Barrera', 'In dolor quo et eaqu', '1980-11-15', '1975-09-14', '2003-03-15', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(10, 'Chester Barrera', 'In dolor quo et eaqu', '1980-11-15', '1975-09-14', '2003-03-15', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(11, 'Kato Callahan', 'Nostrud eos consequa', '2016-10-15', '1974-03-20', '1970-02-21', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(12, 'Kato Callahan', 'Nostrud eos consequa', '2016-10-15', '1974-03-20', '1970-02-21', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(13, 'TaShya Bruce', 'Sit beatae possimus', '1985-02-15', '2013-12-01', '1997-11-23', '2025-04-03 11:28:57', '2025-04-03 11:28:57'),
(14, 'Brynn Miranda', 'Nisi voluptates volu', '1985-02-15', '2013-12-01', '1997-11-23', '2025-04-03 11:28:57', '2025-04-07 03:46:22'),
(15, 'Fleur Mendez', 'Consequatur qui ut q', '1975-01-04', '1996-02-20', '1986-07-12', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(16, 'Fleur Mendez', 'Consequatur qui ut q', '1975-01-04', '1996-02-20', '1986-07-12', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(17, 'Cedric Chaney', 'Commodi aliquip non ', '1980-09-07', '2007-05-14', '2017-04-04', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(18, 'Cedric Chaney', 'Commodi aliquip non ', '1980-09-07', '2007-05-14', '2017-04-04', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(19, 'Trevor Chambers', 'Explicabo Impedit ', '2001-11-26', '2002-08-27', '1970-02-04', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(20, 'Trevor Chambers', 'Explicabo Impedit ', '2001-11-26', '2002-08-27', '1970-02-04', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(21, 'Hayfa Bradley', 'Ut dolor doloribus r', '1981-08-13', '2015-10-26', '1990-04-16', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(22, 'Hayfa Bradley', 'Ut dolor doloribus r', '1981-08-13', '2015-10-26', '1990-04-16', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(23, 'Cally Justice', 'Est ad doloribus re', '2012-03-22', '2006-06-14', '2024-10-06', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(24, 'Cally Justice', 'Est ad doloribus re', '2012-03-22', '2006-06-14', '2024-10-06', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(25, 'Neve Stark', 'Voluptates nisi reru', '1977-07-25', '1977-10-07', '1992-07-01', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(26, 'Neve Stark', 'Voluptates nisi reru', '1977-07-25', '1977-10-07', '1992-07-01', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(27, 'Kai Parsons', 'Doloremque quia veni', '1995-02-27', '2022-10-14', '1972-03-04', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(28, 'Kai Parsons', 'Doloremque quia veni', '1995-02-27', '2022-10-14', '1972-03-04', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(29, 'Palmer Cardenas', 'Pariatur Dolor sunt', '1976-06-08', '2005-07-19', '2006-12-14', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(30, 'Palmer Cardenas', 'Pariatur Dolor sunt', '1976-06-08', '2005-07-19', '2006-12-14', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(31, 'Isaiah Case', 'Eaque doloribus fugi', '2013-09-18', '2003-03-23', '1974-06-26', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(32, 'Isaiah Case', 'Eaque doloribus fugi', '2013-09-18', '2003-03-23', '1974-06-26', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(33, 'Thane Alvarado', 'Quam dolor similique', '2008-04-14', '1972-10-12', '2002-05-12', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(34, 'Thane Alvarado', 'Quam dolor similique', '2008-04-14', '1972-10-12', '2002-05-12', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(35, 'Hayes Rasmussen', 'Nihil non non exerci', '2025-08-05', '2019-07-16', '1984-12-15', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(36, 'Hayes Rasmussen', 'Nihil non non exerci', '2025-08-05', '2019-07-16', '1984-12-15', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(37, 'Shelley Swanson', 'Officiis elit expli', '1989-05-11', '1973-12-27', '1998-06-16', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(38, 'Shelley Swanson', 'Officiis elit expli', '1989-05-11', '1973-12-27', '1998-06-16', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(39, 'Shelley Swanson', 'Officiis elit expli', '1989-05-11', '1973-12-27', '1998-06-16', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(40, 'Shelley Swanson', 'Officiis elit expli', '1989-05-11', '1973-12-27', '1998-06-16', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(41, 'Bradley Jefferson', 'Quae incidunt aut q', '2010-10-03', '1998-10-18', '1977-04-04', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(42, 'Bradley Jefferson', 'Quae incidunt aut q', '2010-10-03', '1998-10-18', '1977-04-04', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(43, 'Lillith Macdonald', 'Ut harum enim ea nih', '1975-02-04', '2006-06-02', '2008-11-11', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(44, 'Lillith Macdonald', 'Ut harum enim ea nih', '1975-02-04', '2006-06-02', '2008-11-11', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(45, 'Lewis Rhodes', 'Eaque dolor ut dolor', '2000-03-22', '1982-12-25', '2019-12-03', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(46, 'Lewis Rhodes', 'Eaque dolor ut dolor', '2000-03-22', '1982-12-25', '2019-12-03', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(47, 'Chandler Mills', 'Deleniti ut non duis', '2024-07-19', '2009-03-22', '1990-09-19', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(48, 'Chandler Mills', 'Deleniti ut non duis', '2024-07-19', '2009-03-22', '1990-09-19', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(49, 'Lydia Anderson', 'Aut voluptatem maio', '1981-05-18', '2015-08-12', '1980-03-16', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(50, 'Lydia Anderson', 'Aut voluptatem maio', '1981-05-18', '2015-08-12', '1980-03-16', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(51, 'Ezra Osborne', 'Ut labore nihil ipsu', '2009-12-27', '1993-07-13', '1972-02-21', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(52, 'Ezra Osborne', 'Ut labore nihil ipsu', '2009-12-27', '1993-07-13', '1972-02-21', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(53, 'Denise Watkins', 'Qui dolor reprehende', '2006-04-21', '1991-08-03', '2002-04-10', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(54, 'Denise Watkins', 'Qui dolor reprehende', '2006-04-21', '1991-08-03', '2002-04-10', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(55, 'Emily Garrison', 'Quis voluptatum temp', '1988-01-16', '1986-05-12', '1980-02-15', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(56, 'Emily Garrison', 'Quis voluptatum temp', '1988-01-16', '1986-05-12', '1980-02-15', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(57, 'Maggy Lancaster', 'Et voluptatem Cillu', '1997-04-20', '1982-11-07', '1971-06-10', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(58, 'Maggy Lancaster', 'Et voluptatem Cillu', '1997-04-20', '1982-11-07', '1971-06-10', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(59, 'Brenda King', 'Id aliquam nulla do', '2019-10-07', '2025-12-12', '1979-01-08', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(60, 'Brenda King', 'Id aliquam nulla do', '2019-10-07', '2025-12-12', '1979-01-08', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(61, 'Indigo Fuentes', 'Sit omnis explicabo', '2014-08-10', '2020-11-08', '2025-02-04', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(62, 'Indigo Fuentes', 'Sit omnis explicabo', '2014-08-10', '2020-11-08', '2025-02-04', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(63, 'Althea Huffman', 'Vero harum enim ex e', '2025-02-26', '1998-09-23', '2007-06-14', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(64, 'Althea Huffman', 'Vero harum enim ex e', '2025-02-26', '1998-09-23', '2007-06-14', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(65, 'Nomlanga Dillard', 'Facilis culpa ipsum', '1983-05-08', '2025-06-13', '2015-04-17', '2025-04-07 05:11:41', '2025-04-07 05:11:41'),
(66, 'Nomlanga Dillard', 'Facilis culpa ipsum', '1983-05-08', '2025-06-13', '2015-04-17', '2025-04-07 05:14:20', '2025-04-07 05:14:20'),
(67, 'Ingrid Gonzales', 'Sit voluptatem Ver', '2011-05-10', '2007-12-17', '1988-10-04', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(68, 'Ingrid Gonzales', 'Sit voluptatem Ver', '2011-05-10', '2007-12-17', '1988-10-04', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(69, 'Hedda Rodriguez', 'Cillum odit corporis', '2002-12-24', '2023-09-10', '1986-01-09', '2025-04-07 05:22:38', '2025-04-07 05:22:38'),
(70, 'Hedda Rodriguez', 'Cillum odit corporis', '2002-12-24', '2023-09-10', '1986-01-09', '2025-04-07 05:22:39', '2025-04-07 05:22:39'),
(71, 'Ebony Mccormick', 'Et autem reprehender', '2016-04-24', '1995-01-24', '1975-05-22', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(72, 'Ebony Mccormick', 'Et autem reprehender', '2016-04-24', '1995-01-24', '1975-05-22', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(73, 'Marshall Eaton', 'Omnis maiores hic an', '2024-09-16', '2008-12-21', '2005-04-05', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(74, 'Marshall Eaton', 'Omnis maiores hic an', '2024-09-16', '2008-12-21', '2005-04-05', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(75, 'Arthur Moreno', 'Pariatur Et nobis q', '1983-06-05', '2019-02-19', '2002-09-20', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(76, 'Arthur Moreno', 'Pariatur Et nobis q', '1983-06-05', '2019-02-19', '2002-09-20', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(77, 'Shaine Golden', 'Ratione autem et dol', '1973-09-19', '1981-07-22', '1982-04-08', '2025-04-09 10:48:22', '2025-04-09 10:48:22'),
(78, 'Walker Gray', 'Alias id velit ipsum', '1973-09-19', '1981-07-22', '1982-04-08', '2025-04-09 10:48:22', '2025-04-09 10:54:10'),
(79, 'Fiona Schwartz', 'Dolore quis quos id', '2003-06-22', '1990-12-08', '2014-11-14', '2025-04-09 11:48:10', '2025-04-09 11:48:10'),
(80, 'Fiona Schwartz', 'Dolore quis quos id', '2003-06-22', '1990-12-08', '2014-11-14', '2025-04-09 11:48:10', '2025-04-09 11:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `lnd`
--

CREATE TABLE `lnd` (
  `id` int(11) NOT NULL,
  `training_program` varchar(255) DEFAULT NULL,
  `exclusive_from` date DEFAULT NULL,
  `exclusive_to` date DEFAULT NULL,
  `number_of_hours` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `conducted_by` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lnd`
--

INSERT INTO `lnd` (`id`, `training_program`, `exclusive_from`, `exclusive_to`, `number_of_hours`, `type`, `conducted_by`, `created`, `modified`) VALUES
(1, 'Fugit placeat labo', '1981-03-28', '2003-05-04', '44', 'Dolore ut velit nihi', 'Cupidatat aliquip fu', '2025-04-02 08:13:57', '2025-04-02 08:13:57'),
(2, 'Ut tempore sint es', '1995-08-06', '1980-11-03', '562', 'Sed nesciunt quis e', 'Dolorem est consequa', '2025-04-02 08:13:57', '2025-04-02 08:24:24'),
(3, 'Quod voluptas sit qu', '1993-01-02', '1985-01-20', '41', 'Esse veniam harum c', 'Accusamus perspiciat', '2025-04-03 03:17:08', '2025-04-03 03:17:08'),
(4, 'Quod voluptas sit qu', '1993-01-02', '1985-01-20', '41', 'Esse veniam harum c', 'Accusamus perspiciat', '2025-04-03 03:17:09', '2025-04-03 03:17:09'),
(5, 'Nobis excepturi obca', '1982-06-24', '2012-03-24', '710', 'In ut fugiat volupta', 'Neque rerum repudian', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(6, 'Nobis excepturi obca', '1982-06-24', '2012-03-24', '710', 'In ut fugiat volupta', 'Neque rerum repudian', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(7, 'Ut autem amet ullam', '2003-12-22', '1992-07-15', '652', 'Veritatis excepteur ', 'Sit laudantium tene', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(8, 'Ut autem amet ullam', '2003-12-22', '1992-07-15', '652', 'Veritatis excepteur ', 'Sit laudantium tene', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(9, 'Tempora voluptatem ', '2007-08-24', '2005-10-20', '774', 'Enim id aliquid est', 'Itaque corporis sit', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(10, 'Tempora voluptatem ', '2007-08-24', '2005-10-20', '774', 'Enim id aliquid est', 'Itaque corporis sit', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(11, 'Similique sed deleni', '1997-04-17', '2007-02-22', '39', 'Sit magnam velit qu', 'Magna omnis cupidita', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(12, 'Similique sed deleni', '1997-04-17', '2007-02-22', '39', 'Sit magnam velit qu', 'Magna omnis cupidita', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(13, 'Aperiam in laudantiu', '2024-05-14', '1994-02-21', '262', 'Eius debitis laboris', 'Consequatur exercita', '2025-04-03 11:28:57', '2025-04-03 11:28:57'),
(14, 'Voluptate esse cill', '1987-12-25', '2023-10-16', '512', 'Quibusdam et at quae', 'Voluptatum eos ad la', '2025-04-03 11:28:57', '2025-04-07 03:46:22'),
(15, 'Sit accusamus et al', '1992-01-15', '1977-08-25', '501', 'Aliquip quas et fugi', 'Minim explicabo Cor', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(16, 'Sit accusamus et al', '1992-01-15', '1977-08-25', '501', 'Aliquip quas et fugi', 'Minim explicabo Cor', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(17, 'Laborum laboris quam', '2018-05-19', '1973-04-06', '307', 'Culpa voluptatem L', 'Voluptatem ratione ', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(18, 'Laborum laboris quam', '2018-05-19', '1973-04-06', '307', 'Culpa voluptatem L', 'Voluptatem ratione ', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(19, 'Nulla sequi quidem v', '2011-03-24', '2007-11-05', '814', 'Laudantium fugiat d', 'Nihil ratione earum ', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(20, 'Nulla sequi quidem v', '2011-03-24', '2007-11-05', '814', 'Laudantium fugiat d', 'Nihil ratione earum ', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(21, 'Qui distinctio Volu', '2005-02-19', '2017-07-15', '279', 'Soluta minima quisqu', 'Sit similique repreh', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(22, 'Qui distinctio Volu', '2005-02-19', '2017-07-15', '279', 'Soluta minima quisqu', 'Sit similique repreh', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(23, 'Consequat Ea irure ', '2007-07-23', '1979-08-07', '729', 'Amet veniam eum ve', 'Natus culpa molestia', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(24, 'Consequat Ea irure ', '2007-07-23', '1979-08-07', '729', 'Amet veniam eum ve', 'Natus culpa molestia', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(25, 'Mollitia dolorum ali', '2001-06-05', '1975-09-12', '845', 'Ut aliquam ex aut id', 'Omnis tempor quia si', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(26, 'Mollitia dolorum ali', '2001-06-05', '1975-09-12', '845', 'Ut aliquam ex aut id', 'Omnis tempor quia si', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(27, 'Esse omnis ullam qu', '1979-08-06', '1971-06-22', '470', 'Unde qui rerum qui s', 'Officia dignissimos ', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(28, 'Esse omnis ullam qu', '1979-08-06', '1971-06-22', '470', 'Unde qui rerum qui s', 'Officia dignissimos ', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(29, 'Enim voluptatem Vel', '1994-08-21', '1995-01-22', '91', 'Consectetur dolorum', 'Aut cillum omnis dol', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(30, 'Enim voluptatem Vel', '1994-08-21', '1995-01-22', '91', 'Consectetur dolorum', 'Aut cillum omnis dol', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(31, 'Quia sed pariatur S', '2010-02-01', '1980-03-28', '26', 'Et omnis sunt nobis', 'Architecto expedita ', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(32, 'Quia sed pariatur S', '2010-02-01', '1980-03-28', '26', 'Et omnis sunt nobis', 'Architecto expedita ', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(33, 'Pariatur Ullamco qu', '1972-12-11', '1979-12-24', '908', 'Sit aute magnam nobi', 'Ipsum vel et culpa ', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(34, 'Pariatur Ullamco qu', '1972-12-11', '1979-12-24', '908', 'Sit aute magnam nobi', 'Ipsum vel et culpa ', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(35, 'Dolore repellendus ', '2015-05-01', '1978-05-18', '37', 'Voluptatem laudantiu', 'Nulla ut elit asper', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(36, 'Dolore repellendus ', '2015-05-01', '1978-05-18', '37', 'Voluptatem laudantiu', 'Nulla ut elit asper', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(37, 'Est molestiae enim ', '1996-12-19', '1990-05-19', '865', 'Animi quis ut duis ', 'Labore et placeat i', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(38, 'Est molestiae enim ', '1996-12-19', '1990-05-19', '865', 'Animi quis ut duis ', 'Labore et placeat i', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(39, 'Est molestiae enim ', '1996-12-19', '1990-05-19', '865', 'Animi quis ut duis ', 'Labore et placeat i', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(40, 'Est molestiae enim ', '1996-12-19', '1990-05-19', '865', 'Animi quis ut duis ', 'Labore et placeat i', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(41, 'Officiis et a dolori', '1997-12-16', '1998-12-18', '593', 'Proident sapiente s', 'Dolor perspiciatis ', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(42, 'Officiis et a dolori', '1997-12-16', '1998-12-18', '593', 'Proident sapiente s', 'Dolor perspiciatis ', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(43, 'Animi voluptatem re', '1986-04-07', '1977-07-17', '702', 'Dolorum tempor ipsam', 'Voluptate voluptatem', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(44, 'Animi voluptatem re', '1986-04-07', '1977-07-17', '702', 'Dolorum tempor ipsam', 'Voluptate voluptatem', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(45, 'Nostrud accusantium ', '1996-06-27', '1975-06-24', '235', 'Qui minus in repudia', 'Magna voluptatibus v', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(46, 'Nostrud accusantium ', '1996-06-27', '1975-06-24', '235', 'Qui minus in repudia', 'Magna voluptatibus v', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(47, 'Laboriosam reprehen', '1973-02-02', '2002-12-05', '419', 'Labore sed aut aliqu', 'Libero laudantium i', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(48, 'Laboriosam reprehen', '1973-02-02', '2002-12-05', '419', 'Labore sed aut aliqu', 'Libero laudantium i', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(49, 'Recusandae Odit a q', '1971-08-02', '1985-11-10', '890', 'Tenetur id quas labo', 'Velit exercitationem', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(50, 'Recusandae Odit a q', '1971-08-02', '1985-11-10', '890', 'Tenetur id quas labo', 'Velit exercitationem', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(51, 'Aperiam aliquip offi', '1981-01-02', '1979-06-03', '706', 'Cillum vitae dolor n', 'Voluptatibus et moll', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(52, 'Aperiam aliquip offi', '1981-01-02', '1979-06-03', '706', 'Cillum vitae dolor n', 'Voluptatibus et moll', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(53, 'Deserunt reprehender', '1978-07-03', '2016-09-13', '899', 'Eveniet aliqua Con', 'Beatae aspernatur of', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(54, 'Deserunt reprehender', '1978-07-03', '2016-09-13', '899', 'Eveniet aliqua Con', 'Beatae aspernatur of', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(55, 'Esse molestiae verit', '1994-12-23', '1999-04-15', '660', 'Iusto illo soluta im', 'Hic soluta et quo id', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(56, 'Esse molestiae verit', '1994-12-23', '1999-04-15', '660', 'Iusto illo soluta im', 'Hic soluta et quo id', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(57, 'Dolore lorem labore ', '2006-09-08', '2003-06-17', '498', 'Laboris id eum asper', 'Harum consequat Nob', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(58, 'Dolore lorem labore ', '2006-09-08', '2003-06-17', '498', 'Laboris id eum asper', 'Harum consequat Nob', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(59, 'Consequatur corpori', '1996-08-03', '2025-01-16', '760', 'Laborum Inventore p', 'Quis aspernatur quo ', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(60, 'Consequatur corpori', '1996-08-03', '2025-01-16', '760', 'Laborum Inventore p', 'Quis aspernatur quo ', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(61, 'Minus ea unde possim', '1975-08-15', '2008-04-22', '499', 'Hic sint esse volu', 'Harum duis minus est', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(62, 'Minus ea unde possim', '1975-08-15', '2008-04-22', '499', 'Hic sint esse volu', 'Harum duis minus est', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(63, 'Dolorum qui minus of', '1977-03-27', '2017-10-11', '984', 'Enim velit cupidatat', 'Dolore expedita est', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(64, 'Dolorum qui minus of', '1977-03-27', '2017-10-11', '984', 'Enim velit cupidatat', 'Dolore expedita est', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(65, 'Iste atque anim qui ', '1980-03-03', '2025-06-19', '107', 'Laborum maxime elige', 'Repellendus Optio ', '2025-04-07 05:11:41', '2025-04-07 05:11:41'),
(66, 'Iste atque anim qui ', '1980-03-03', '2025-06-19', '107', 'Laborum maxime elige', 'Repellendus Optio ', '2025-04-07 05:14:20', '2025-04-07 05:14:20'),
(67, 'Sunt qui voluptas q', '2002-05-09', '1995-03-20', '830', 'Cupidatat asperiores', 'Consequat Natus sun', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(68, 'Sunt qui voluptas q', '2002-05-09', '1995-03-20', '830', 'Cupidatat asperiores', 'Consequat Natus sun', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(69, 'Harum labore ut quia', '1995-08-21', '1986-05-17', '97', 'Quis aliquip aute se', 'Officia sint quidem ', '2025-04-07 05:22:38', '2025-04-07 05:22:38'),
(70, 'Harum labore ut quia', '1995-08-21', '1986-05-17', '97', 'Quis aliquip aute se', 'Officia sint quidem ', '2025-04-07 05:22:39', '2025-04-07 05:22:39'),
(71, 'Sit dolores sint mol', '1973-09-04', '2018-07-22', '977', 'Debitis ullamco et d', 'Autem cupidatat moll', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(72, 'Sit dolores sint mol', '1973-09-04', '2018-07-22', '977', 'Debitis ullamco et d', 'Autem cupidatat moll', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(73, 'Culpa amet volupta', '2025-10-16', '1987-09-05', '863', 'Fugiat ullamco culpa', 'Molestias suscipit l', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(74, 'Culpa amet volupta', '2025-10-16', '1987-09-05', '863', 'Fugiat ullamco culpa', 'Molestias suscipit l', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(75, 'Facilis repudiandae ', '1978-11-20', '2001-08-09', '331', 'Et nobis dolores lor', 'Ut tempora exercitat', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(76, 'Facilis repudiandae ', '1978-11-20', '2001-08-09', '331', 'Et nobis dolores lor', 'Ut tempora exercitat', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(77, 'Voluptatum ullam fac', '2003-10-27', '1987-03-22', '194', 'Repudiandae aut est ', 'Amet deserunt amet', '2025-04-09 10:48:22', '2025-04-09 10:48:22'),
(78, 'Aut recusandae Volu', '2016-03-15', '2006-10-19', '485', 'Dolore et vel laboru', 'Sit reprehenderit o', '2025-04-09 10:48:22', '2025-04-09 10:54:11'),
(79, 'Velit ab aut ut quia', '1974-10-14', '2020-12-28', '931', 'Dolor ex vel placeat', 'Adipisci delectus m', '2025-04-09 11:48:10', '2025-04-09 11:48:10'),
(80, 'Velit ab aut ut quia', '1974-10-14', '2020-12-28', '931', 'Dolor ex vel placeat', 'Adipisci delectus m', '2025-04-09 11:48:10', '2025-04-09 11:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `id` int(11) NOT NULL,
  `name_of_organization` varchar(255) DEFAULT NULL,
  `exclusive_from` date DEFAULT NULL,
  `exclusive_to` date DEFAULT NULL,
  `number_of_hours` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id`, `name_of_organization`, `exclusive_from`, `exclusive_to`, `number_of_hours`, `position`, `created`, `modified`) VALUES
(1, 'Becker and Bennett Trading', '2014-10-16', '2015-12-07', 'Vasquez Wilcox LLC', 'Watkins and Mayer LLC', '2025-04-02 08:13:57', '2025-04-02 08:13:57'),
(2, 'Shannon Barrera LLC', '1995-11-05', '2001-12-12', 'Lopez and Kelley Trading', 'Potter Peterson Traders', '2025-04-02 08:13:57', '2025-04-02 08:24:24'),
(3, 'Merrill and Moran Plc', '1998-06-19', '2024-02-12', 'Armstrong and Morin Trading', 'Grant and Reed Plc', '2025-04-03 03:17:08', '2025-04-03 03:17:08'),
(4, 'Merrill and Moran Plc', '1998-06-19', '2024-02-12', 'Armstrong and Morin Trading', 'Grant and Reed Plc', '2025-04-03 03:17:09', '2025-04-03 03:17:09'),
(5, 'Knox Boyle Inc', '2000-01-18', '1989-02-27', 'Mckinney Alston Inc', 'Dickson Pratt Plc', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(6, 'Knox Boyle Inc', '2000-01-18', '1989-02-27', 'Mckinney Alston Inc', 'Dickson Pratt Plc', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(7, 'Mcclain and Odom Co', '2019-11-11', '2017-11-02', 'Le Estrada Associates', 'Callahan Owen Plc', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(8, 'Mcclain and Odom Co', '2019-11-11', '2017-11-02', 'Le Estrada Associates', 'Callahan Owen Plc', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(9, 'Duncan and Sparks Co', '2004-09-08', '2000-06-25', 'Schneider and Albert Associates', 'Buckley May Associates', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(10, 'Duncan and Sparks Co', '2004-09-08', '2000-06-25', 'Schneider and Albert Associates', 'Buckley May Associates', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(11, 'Ratliff Bond Inc', '2000-06-05', '1990-06-27', 'Herring and Schultz Inc', 'Ayers and Hall Inc', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(12, 'Ratliff Bond Inc', '2000-06-05', '1990-06-27', 'Herring and Schultz Inc', 'Ayers and Hall Inc', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(13, 'Gonzalez Parker Traders', '1976-05-09', '2025-05-10', 'Hall Griffith Plc', 'Bryan Boyer Plc', '2025-04-03 11:28:57', '2025-04-03 11:28:57'),
(14, 'Avery Bush Associates', '1976-05-09', '2025-05-10', 'Rasmussen Kane Traders', 'French and Fitzpatrick LLC', '2025-04-03 11:28:57', '2025-04-07 03:46:22'),
(15, 'Vang and Hyde LLC', '2021-06-13', '1995-09-12', 'West Barker Inc', 'Bailey and Beard Associates', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(16, 'Vang and Hyde LLC', '2021-06-13', '1995-09-12', 'West Barker Inc', 'Bailey and Beard Associates', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(17, 'Holcomb and Mcdowell Associates', '2018-04-18', '1972-12-08', 'Frank Morris LLC', 'Colon and Kline Trading', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(18, 'Holcomb and Mcdowell Associates', '2018-04-18', '1972-12-08', 'Frank Morris LLC', 'Colon and Kline Trading', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(19, 'Daniels Vaughan Inc', '2004-10-13', '2025-03-22', 'Bernard and Velasquez Traders', 'Cannon Watts Associates', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(20, 'Daniels Vaughan Inc', '2004-10-13', '2025-03-22', 'Bernard and Velasquez Traders', 'Cannon Watts Associates', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(21, 'Justice Pitts Associates', '2008-02-17', '1989-01-20', 'Moon Glover Plc', 'Knight and Joyce Traders', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(22, 'Justice Pitts Associates', '2008-02-17', '1989-01-20', 'Moon Glover Plc', 'Knight and Joyce Traders', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(23, 'Ingram Garcia Traders', '1994-09-25', '1991-04-14', 'Mcdaniel Rowe Trading', 'Kirkland Pollard Associates', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(24, 'Ingram Garcia Traders', '1994-09-25', '1991-04-14', 'Mcdaniel Rowe Trading', 'Kirkland Pollard Associates', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(25, 'Hensley and Lynn Traders', '1985-07-03', '1990-11-23', 'Daniels Keller Trading', 'Santana Turner Traders', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(26, 'Hensley and Lynn Traders', '1985-07-03', '1990-11-23', 'Daniels Keller Trading', 'Santana Turner Traders', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(27, 'Sellers and Anderson Trading', '2016-11-26', '1985-12-27', 'Juarez Mccoy Traders', 'David Wyatt Inc', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(28, 'Sellers and Anderson Trading', '2016-11-26', '1985-12-27', 'Juarez Mccoy Traders', 'David Wyatt Inc', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(29, 'Barton and Hester Plc', '2008-06-13', '2022-08-19', 'Bowen and Dyer Trading', 'Reyes Moon Associates', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(30, 'Barton and Hester Plc', '2008-06-13', '2022-08-19', 'Bowen and Dyer Trading', 'Reyes Moon Associates', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(31, 'Sampson Short Trading', '2020-05-22', '2000-04-17', 'Espinoza and Fry Plc', 'Harding Kane LLC', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(32, 'Sampson Short Trading', '2020-05-22', '2000-04-17', 'Espinoza and Fry Plc', 'Harding Kane LLC', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(33, 'Valenzuela Hayden Trading', '1970-12-14', '1977-08-03', 'Clarke and Head Traders', 'Morton and Tyler Associates', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(34, 'Valenzuela Hayden Trading', '1970-12-14', '1977-08-03', 'Clarke and Head Traders', 'Morton and Tyler Associates', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(35, 'Dominguez Montoya LLC', '1996-10-22', '1986-07-28', 'Benton Duncan Co', 'Gregory and Bishop Traders', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(36, 'Dominguez Montoya LLC', '1996-10-22', '1986-07-28', 'Benton Duncan Co', 'Gregory and Bishop Traders', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(37, 'Hopper Rich Inc', '2010-11-19', '1975-10-06', 'Mcintyre Rhodes LLC', 'Hurst Galloway Traders', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(38, 'Hopper Rich Inc', '2010-11-19', '1975-10-06', 'Mcintyre Rhodes LLC', 'Hurst Galloway Traders', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(39, 'Hopper Rich Inc', '2010-11-19', '1975-10-06', 'Mcintyre Rhodes LLC', 'Hurst Galloway Traders', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(40, 'Hopper Rich Inc', '2010-11-19', '1975-10-06', 'Mcintyre Rhodes LLC', 'Hurst Galloway Traders', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(41, 'Kelley and Calderon Traders', '2012-03-03', '1978-09-08', 'Kaufman Vaughn Associates', 'Snyder Rosales Plc', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(42, 'Kelley and Calderon Traders', '2012-03-03', '1978-09-08', 'Kaufman Vaughn Associates', 'Snyder Rosales Plc', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(43, 'Gregory Mcmahon Trading', '1973-04-18', '1997-11-09', 'Moran Murray Plc', 'Haney and Spencer LLC', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(44, 'Gregory Mcmahon Trading', '1973-04-18', '1997-11-09', 'Moran Murray Plc', 'Haney and Spencer LLC', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(45, 'Poole and Mercado LLC', '2013-10-06', '2017-04-12', 'Warren and Atkinson Trading', 'Woods and Randolph Co', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(46, 'Poole and Mercado LLC', '2013-10-06', '2017-04-12', 'Warren and Atkinson Trading', 'Woods and Randolph Co', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(47, 'Mcpherson Simmons Co', '1983-07-09', '2005-02-10', 'Small and Dean Inc', 'Espinoza and Leon Co', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(48, 'Mcpherson Simmons Co', '1983-07-09', '2005-02-10', 'Small and Dean Inc', 'Espinoza and Leon Co', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(49, 'Campbell and Vaughan Traders', '1977-02-20', '1975-11-12', 'Poole and Little Associates', 'Knowles and Butler Inc', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(50, 'Campbell and Vaughan Traders', '1977-02-20', '1975-11-12', 'Poole and Little Associates', 'Knowles and Butler Inc', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(51, 'Day and Elliott Associates', '2024-02-07', '2010-02-06', 'Reese Hayes Associates', 'Hunter Boyle LLC', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(52, 'Day and Elliott Associates', '2024-02-07', '2010-02-06', 'Reese Hayes Associates', 'Hunter Boyle LLC', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(53, 'Benson and Huffman LLC', '1995-04-11', '1990-11-16', 'Perez Bishop Co', 'White and Bowers Inc', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(54, 'Benson and Huffman LLC', '1995-04-11', '1990-11-16', 'Perez Bishop Co', 'White and Bowers Inc', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(55, 'Bolton Potts Associates', '2013-03-18', '1987-11-04', 'Becker and Perry Co', 'Moran Fisher Trading', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(56, 'Bolton Potts Associates', '2013-03-18', '1987-11-04', 'Becker and Perry Co', 'Moran Fisher Trading', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(57, 'Suarez Alexander Traders', '2020-08-16', '2009-08-28', 'Bradley Garcia Trading', 'Velez Obrien Associates', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(58, 'Suarez Alexander Traders', '2020-08-16', '2009-08-28', 'Bradley Garcia Trading', 'Velez Obrien Associates', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(59, 'Nixon and Walls Trading', '1979-05-16', '1983-08-26', 'Faulkner and Pearson Traders', 'Mcdaniel Pugh Plc', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(60, 'Nixon and Walls Trading', '1979-05-16', '1983-08-26', 'Faulkner and Pearson Traders', 'Mcdaniel Pugh Plc', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(61, 'Koch Baird Co', '1991-05-11', '1996-09-23', 'Carroll and Rose Plc', 'Wynn Ellis Plc', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(62, 'Koch Baird Co', '1991-05-11', '1996-09-23', 'Carroll and Rose Plc', 'Wynn Ellis Plc', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(63, 'Ferrell Whitfield Co', '1972-09-10', '2003-01-24', 'Gibbs Huff Inc', 'Barber and Wilkerson Inc', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(64, 'Ferrell Whitfield Co', '1972-09-10', '2003-01-24', 'Gibbs Huff Inc', 'Barber and Wilkerson Inc', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(65, 'Blake and Becker LLC', '2005-01-17', '2012-07-25', 'Cash Callahan LLC', 'Jefferson Burt Plc', '2025-04-07 05:11:41', '2025-04-07 05:11:41'),
(66, 'Blake and Becker LLC', '2005-01-17', '2012-07-25', 'Cash Callahan LLC', 'Jefferson Burt Plc', '2025-04-07 05:14:20', '2025-04-07 05:14:20'),
(67, 'Daugherty and Mullen Associates', '1996-11-03', '2004-01-21', 'Stone and Cleveland Associates', 'Lancaster Parsons Traders', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(68, 'Daugherty and Mullen Associates', '1996-11-03', '2004-01-21', 'Stone and Cleveland Associates', 'Lancaster Parsons Traders', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(69, 'Valentine and Sherman Inc', '2006-10-06', '2025-08-12', 'Duran and Burch Plc', 'Emerson Ewing Plc', '2025-04-07 05:22:38', '2025-04-07 05:22:38'),
(70, 'Valentine and Sherman Inc', '2006-10-06', '2025-08-12', 'Duran and Burch Plc', 'Emerson Ewing Plc', '2025-04-07 05:22:39', '2025-04-07 05:22:39'),
(71, 'Hayes Anthony Trading', '1997-09-05', '1985-06-28', 'Hays Stevenson LLC', 'Walls Hancock Traders', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(72, 'Hayes Anthony Trading', '1997-09-05', '1985-06-28', 'Hays Stevenson LLC', 'Walls Hancock Traders', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(73, 'Saunders and Moses Plc', '1982-10-12', '1974-06-04', 'Nash and Vang Plc', 'Meyer and Ellis Plc', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(74, 'Saunders and Moses Plc', '1982-10-12', '1974-06-04', 'Nash and Vang Plc', 'Meyer and Ellis Plc', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(75, 'Prince and Murphy Plc', '1990-12-17', '1989-06-12', 'Lester Long Co', 'Sloan Spears Traders', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(76, 'Prince and Murphy Plc', '1990-12-17', '1989-06-12', 'Lester Long Co', 'Sloan Spears Traders', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(77, 'Ward Ray Trading', '1986-11-23', '2017-10-12', 'Tyler Franklin Inc', 'Barker Trevino LLC', '2025-04-09 10:48:22', '2025-04-09 10:48:22'),
(78, 'Davis Walton Traders', '1986-11-23', '2017-10-12', 'Ellison and Bowen Co', 'Wilder Cabrera Traders', '2025-04-09 10:48:22', '2025-04-09 10:54:11'),
(79, 'Mcdonald and Boyd Associates', '1997-01-10', '1992-10-25', 'Schroeder Stevens Trading', 'Mcmillan Wallace Plc', '2025-04-09 11:48:10', '2025-04-09 11:48:10'),
(80, 'Mcdonald and Boyd Associates', '1997-01-10', '1992-10-25', 'Schroeder Stevens Trading', 'Mcmillan Wallace Plc', '2025-04-09 11:48:10', '2025-04-09 11:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `other_information`
--

CREATE TABLE `other_information` (
  `id` int(11) NOT NULL,
  `special_skill` text DEFAULT NULL,
  `non_academic_distinction` text DEFAULT NULL,
  `membership` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_information`
--

INSERT INTO `other_information` (`id`, `special_skill`, `non_academic_distinction`, `membership`) VALUES
(1, 'Aut et autem cum rer', 'Consequat Labore ad', NULL),
(2, 'Ut eum aute nesciunt', 'Porro qui deleniti s', NULL),
(3, 'Magna doloremque qui', 'In laudantium liber', NULL),
(4, 'Magna doloremque qui', 'In laudantium liber', NULL),
(5, 'Quisquam qui distinc', 'Perspiciatis velit', NULL),
(6, 'Quisquam qui distinc', 'Perspiciatis velit', NULL),
(7, 'Veritatis ut ipsum ', 'Iusto ab asperiores ', NULL),
(8, 'Veritatis ut ipsum ', 'Iusto ab asperiores ', NULL),
(9, 'Commodi proident ex', 'Ipsam nesciunt quia', NULL),
(10, 'Commodi proident ex', 'Ipsam nesciunt quia', NULL),
(11, 'Repellendus Aut fug', 'Quia enim saepe Nam ', NULL),
(12, 'Repellendus Aut fug', 'Quia enim saepe Nam ', NULL),
(13, 'Quis est aperiam ma', 'Non voluptates qui q', NULL),
(14, 'Numquam possimus er', 'Voluptatem ex offic', NULL),
(15, 'Ullamco fugit dolor', 'Maxime reprehenderit', NULL),
(16, 'Ullamco fugit dolor', 'Maxime reprehenderit', NULL),
(17, 'Iusto velit dolorem', 'Aut perferendis quae', NULL),
(18, 'Iusto velit dolorem', 'Aut perferendis quae', NULL),
(19, 'Ut maiores eos veri', 'Et molestias accusam', NULL),
(20, 'Ut maiores eos veri', 'Et molestias accusam', NULL),
(21, 'Placeat sit ipsum ', 'Veniam voluptates n', NULL),
(22, 'Placeat sit ipsum ', 'Veniam voluptates n', NULL),
(23, 'Earum consequat Dol', 'Voluptatem quae eius', NULL),
(24, 'Earum consequat Dol', 'Voluptatem quae eius', NULL),
(25, 'Laboris ex sint prae', 'Unde ut non in volup', NULL),
(26, 'Laboris ex sint prae', 'Unde ut non in volup', NULL),
(27, 'Anim sequi dolorem q', 'Duis laborum Dolore', NULL),
(28, 'Anim sequi dolorem q', 'Duis laborum Dolore', NULL),
(29, 'Expedita rerum reici', 'Sed cupidatat non ne', NULL),
(30, 'Expedita rerum reici', 'Sed cupidatat non ne', NULL),
(31, 'Et sed enim ipsam la', 'Iusto minim omnis si', NULL),
(32, 'Et sed enim ipsam la', 'Iusto minim omnis si', NULL),
(33, 'Odit aut voluptas ip', 'Esse ut vel sed unde', NULL),
(34, 'Odit aut voluptas ip', 'Esse ut vel sed unde', NULL),
(35, 'Omnis sed praesentiu', 'Dolor ipsa officiis', NULL),
(36, 'Omnis sed praesentiu', 'Dolor ipsa officiis', NULL),
(37, 'Hic autem dolor labo', 'Sed aperiam eius dol', NULL),
(38, 'Hic autem dolor labo', 'Sed aperiam eius dol', NULL),
(39, 'Hic autem dolor labo', 'Sed aperiam eius dol', NULL),
(40, 'Hic autem dolor labo', 'Sed aperiam eius dol', NULL),
(41, 'Ducimus ea corrupti', 'Incididunt ut velit ', NULL),
(42, 'Ducimus ea corrupti', 'Incididunt ut velit ', NULL),
(43, 'Deleniti eius tempor', 'At officiis dolorem ', NULL),
(44, 'Deleniti eius tempor', 'At officiis dolorem ', NULL),
(45, 'Mollit et minus temp', 'Ducimus exercitatio', NULL),
(46, 'Mollit et minus temp', 'Ducimus exercitatio', NULL),
(47, 'Ut dolores et fugiat', 'Veniam consectetur ', NULL),
(48, 'Ut dolores et fugiat', 'Veniam consectetur ', NULL),
(49, 'Ad porro sit est qu', 'Perspiciatis rem ve', NULL),
(50, 'Ad porro sit est qu', 'Perspiciatis rem ve', NULL),
(51, 'Repellendus Delenit', 'Rerum iusto optio e', NULL),
(52, 'Repellendus Delenit', 'Rerum iusto optio e', NULL),
(53, 'Et excepturi blandit', 'Sunt fugiat laborios', NULL),
(54, 'Et excepturi blandit', 'Sunt fugiat laborios', NULL),
(55, 'Qui aut deserunt vol', 'Aut ad ipsa commodi', NULL),
(56, 'Qui aut deserunt vol', 'Aut ad ipsa commodi', NULL),
(57, 'Et dolores dolores s', 'Quaerat est ad animi', NULL),
(58, 'Et dolores dolores s', 'Quaerat est ad animi', NULL),
(59, 'Quis officia totam t', 'Dolore suscipit offi', NULL),
(60, 'Quis officia totam t', 'Dolore suscipit offi', NULL),
(61, 'Ullamco labore corru', 'Ex laboriosam qui c', NULL),
(62, 'Ullamco labore corru', 'Ex laboriosam qui c', NULL),
(63, 'Voluptate in veritat', 'Reiciendis qui harum', NULL),
(64, 'Voluptate in veritat', 'Reiciendis qui harum', NULL),
(65, 'Totam consectetur m', NULL, NULL),
(66, 'Totam consectetur m', NULL, NULL),
(67, 'Reprehenderit sit ', 'Et voluptatum dolore', NULL),
(68, 'Reprehenderit sit ', 'Et voluptatum dolore', NULL),
(69, 'Cupiditate dolores q', 'Dolor culpa dolor qu', NULL),
(70, 'Cupiditate dolores q', 'Dolor culpa dolor qu', NULL),
(71, 'Obcaecati minima et ', 'Maiores et consectet', NULL),
(72, 'Obcaecati minima et ', 'Maiores et consectet', NULL),
(73, 'Voluptatum ea est qu', 'A delectus dolor do', NULL),
(74, 'Voluptatum ea est qu', 'A delectus dolor do', NULL),
(75, 'Inventore nisi ut mo', 'Dolorum id est saepe', NULL),
(76, 'Inventore nisi ut mo', 'Dolorum id est saepe', NULL),
(77, 'Consequatur aut lor', 'Quo et sed tempora e', NULL),
(78, 'Elit consequat Asp', 'Qui voluptas quaerat', NULL),
(79, 'Commodo earum et eos', 'Sunt qui culpa ipsum', NULL),
(80, 'Commodo earum et eos', 'Sunt qui culpa ipsum', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20250323111650, 'Users', '2025-04-02 00:13:18', '2025-04-02 00:13:19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `secondary`
--

CREATE TABLE `secondary` (
  `id` int(11) NOT NULL,
  `secondary_name` varchar(255) DEFAULT NULL,
  `basic_education` varchar(255) DEFAULT NULL,
  `start_from` date DEFAULT NULL,
  `end_to` date DEFAULT NULL,
  `year_graduated` date DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `secondary`
--

INSERT INTO `secondary` (`id`, `secondary_name`, `basic_education`, `start_from`, `end_to`, `year_graduated`, `created`, `modified`) VALUES
(1, 'Perspiciatis quibus', 'Perspiciatis quibus', '1987-02-05', '1984-09-17', '1997-04-24', '2025-04-02 08:13:57', '2025-04-02 08:13:57'),
(2, 'Deserunt itaque veli', 'Deserunt itaque veli', '1997-05-12', '1975-12-06', '1978-07-24', '2025-04-02 08:13:57', '2025-04-02 08:24:24'),
(3, 'Et et nemo sint cor', 'Et et nemo sint cor', '2002-03-14', '1994-08-01', '1983-06-28', '2025-04-03 03:17:08', '2025-04-03 03:17:08'),
(4, 'Et et nemo sint cor', 'Et et nemo sint cor', '2002-03-14', '1994-08-01', '1983-06-28', '2025-04-03 03:17:09', '2025-04-03 03:17:09'),
(5, 'Vero aperiam nisi al', 'Vero aperiam nisi al', '1981-09-03', '2023-10-22', '2022-10-26', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(6, 'Vero aperiam nisi al', 'Vero aperiam nisi al', '1981-09-03', '2023-10-22', '2022-10-26', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(7, 'Velit suscipit accus', 'Velit suscipit accus', '1978-11-06', '1994-07-14', '1977-03-17', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(8, 'Velit suscipit accus', 'Velit suscipit accus', '1978-11-06', '1994-07-14', '1977-03-17', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(9, 'Quia at minim beatae', 'Quia at minim beatae', '2004-04-26', '2006-06-12', '1971-07-19', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(10, 'Quia at minim beatae', 'Quia at minim beatae', '2004-04-26', '2006-06-12', '1971-07-19', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(11, 'Doloremque illo sequ', 'Doloremque illo sequ', '1996-09-11', '2022-10-13', '2011-11-15', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(12, 'Doloremque illo sequ', 'Doloremque illo sequ', '1996-09-11', '2022-10-13', '2011-11-15', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(13, 'Quaerat voluptatem ', 'Quaerat voluptatem ', '2005-07-19', '2024-10-25', '1988-12-04', '2025-04-03 11:28:57', '2025-04-03 11:28:57'),
(14, 'Magni iusto doloremq', 'Magni iusto doloremq', '2005-07-19', '2024-10-25', '1988-12-04', '2025-04-03 11:28:57', '2025-04-07 03:46:22'),
(15, 'Eum veniam dolores ', 'Eum veniam dolores ', '1996-02-27', '1992-05-01', '1991-02-06', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(16, 'Eum veniam dolores ', 'Eum veniam dolores ', '1996-02-27', '1992-05-01', '1991-02-06', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(17, 'Quo maiores animi e', 'Quo maiores animi e', '2022-07-12', '2007-05-09', '1980-09-17', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(18, 'Quo maiores animi e', 'Quo maiores animi e', '2022-07-12', '2007-05-09', '1980-09-17', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(19, 'Amet beatae in occa', 'Amet beatae in occa', '2020-03-10', '2020-11-07', '1987-11-06', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(20, 'Amet beatae in occa', 'Amet beatae in occa', '2020-03-10', '2020-11-07', '1987-11-06', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(21, 'Labore consequat Vo', 'Labore consequat Vo', '2010-02-25', '1988-04-10', '1990-03-24', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(22, 'Labore consequat Vo', 'Labore consequat Vo', '2010-02-25', '1988-04-10', '1990-03-24', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(23, 'Voluptatibus ut temp', 'Voluptatibus ut temp', '2001-12-08', '2007-01-08', '1999-09-20', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(24, 'Voluptatibus ut temp', 'Voluptatibus ut temp', '2001-12-08', '2007-01-08', '1999-09-20', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(25, 'Sequi proident aut ', 'Sequi proident aut ', '1985-11-15', '2022-04-03', '1971-11-08', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(26, 'Sequi proident aut ', 'Sequi proident aut ', '1985-11-15', '2022-04-03', '1971-11-08', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(27, 'Distinctio Voluptat', 'Distinctio Voluptat', '1970-05-26', '1970-03-02', '1984-09-07', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(28, 'Distinctio Voluptat', 'Distinctio Voluptat', '1970-05-26', '1970-03-02', '1984-09-07', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(29, 'Reprehenderit deleni', 'Reprehenderit deleni', '2013-02-23', '2007-05-12', '1981-04-08', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(30, 'Reprehenderit deleni', 'Reprehenderit deleni', '2013-02-23', '2007-05-12', '1981-04-08', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(31, 'Atque omnis molestia', 'Atque omnis molestia', '1993-01-14', '1971-02-10', '2001-07-03', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(32, 'Atque omnis molestia', 'Atque omnis molestia', '1993-01-14', '1971-02-10', '2001-07-03', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(33, 'Vitae sunt sequi vel', 'Vitae sunt sequi vel', '1982-05-07', '2023-05-24', '1994-03-11', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(34, 'Vitae sunt sequi vel', 'Vitae sunt sequi vel', '1982-05-07', '2023-05-24', '1994-03-11', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(35, 'Ea ex voluptate mini', 'Ea ex voluptate mini', '1977-07-16', '2004-09-07', '1988-03-07', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(36, 'Ea ex voluptate mini', 'Ea ex voluptate mini', '1977-07-16', '2004-09-07', '1988-03-07', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(37, 'Qui quia placeat od', 'Qui quia placeat od', '2024-08-16', '2013-10-17', '1998-10-24', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(38, 'Qui quia placeat od', 'Qui quia placeat od', '2024-08-16', '2013-10-17', '1998-10-24', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(39, 'Qui quia placeat od', 'Qui quia placeat od', '2024-08-16', '2013-10-17', '1998-10-24', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(40, 'Qui quia placeat od', 'Qui quia placeat od', '2024-08-16', '2013-10-17', '1998-10-24', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(41, 'Doloribus enim dolor', 'Doloribus enim dolor', '1989-10-24', '1992-03-09', '1979-03-03', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(42, 'Doloribus enim dolor', 'Doloribus enim dolor', '1989-10-24', '1992-03-09', '1979-03-03', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(43, 'Pariatur Ut officia', 'Pariatur Ut officia', '2011-10-06', '2014-01-10', '1979-09-05', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(44, 'Pariatur Ut officia', 'Pariatur Ut officia', '2011-10-06', '2014-01-10', '1979-09-05', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(45, 'Consequatur fuga C', 'Consequatur fuga C', '1979-03-23', '2021-06-23', '1976-10-02', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(46, 'Consequatur fuga C', 'Consequatur fuga C', '1979-03-23', '2021-06-23', '1976-10-02', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(47, 'Est asperiores aut ', 'Est asperiores aut ', '1999-12-13', '1983-07-13', '1996-08-20', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(48, 'Est asperiores aut ', 'Est asperiores aut ', '1999-12-13', '1983-07-13', '1996-08-20', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(49, 'Cupiditate voluptas ', 'Cupiditate voluptas ', '2018-07-24', '2000-06-03', '1993-11-09', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(50, 'Cupiditate voluptas ', 'Cupiditate voluptas ', '2018-07-24', '2000-06-03', '1993-11-09', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(51, 'Aut rem officia culp', 'Aut rem officia culp', '2019-01-23', '2007-01-04', '1994-03-23', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(52, 'Aut rem officia culp', 'Aut rem officia culp', '2019-01-23', '2007-01-04', '1994-03-23', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(53, 'Voluptatem Mollitia', 'Voluptatem Mollitia', '1988-03-19', '2025-07-09', '2015-01-01', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(54, 'Voluptatem Mollitia', 'Voluptatem Mollitia', '1988-03-19', '2025-07-09', '2015-01-01', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(55, 'Eum qui nisi irure d', 'Eum qui nisi irure d', '2002-03-08', '2017-12-09', '2007-10-28', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(56, 'Eum qui nisi irure d', 'Eum qui nisi irure d', '2002-03-08', '2017-12-09', '2007-10-28', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(57, 'Est aliquam aut cons', 'Est aliquam aut cons', '2013-11-20', '1996-11-01', '2013-06-21', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(58, 'Est aliquam aut cons', 'Est aliquam aut cons', '2013-11-20', '1996-11-01', '2013-06-21', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(59, 'Blanditiis cumque pa', 'Blanditiis cumque pa', '2025-04-06', '2021-01-21', '2008-09-09', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(60, 'Blanditiis cumque pa', 'Blanditiis cumque pa', '2025-04-06', '2021-01-21', '2008-09-09', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(61, 'Dolor voluptatem As', 'Dolor voluptatem As', '1970-08-20', '1984-03-11', '1978-11-24', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(62, 'Dolor voluptatem As', 'Dolor voluptatem As', '1970-08-20', '1984-03-11', '1978-11-24', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(63, 'Consequatur repelle', 'Consequatur repelle', '2002-07-26', '2021-10-13', '2000-10-12', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(64, 'Consequatur repelle', 'Consequatur repelle', '2002-07-26', '2021-10-13', '2000-10-12', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(65, 'Sit molestias dolore', 'Sit molestias dolore', '2008-06-11', '1983-06-07', '2018-11-16', '2025-04-07 05:11:41', '2025-04-07 05:11:41'),
(66, 'Sit molestias dolore', 'Sit molestias dolore', '2008-06-11', '1983-06-07', '2018-11-16', '2025-04-07 05:14:20', '2025-04-07 05:14:20'),
(67, 'Tenetur labore quide', 'Tenetur labore quide', '2021-01-24', '1985-08-08', '1970-04-25', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(68, 'Tenetur labore quide', 'Tenetur labore quide', '2021-01-24', '1985-08-08', '1970-04-25', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(69, 'Cupiditate labore bl', 'Cupiditate labore bl', '2008-04-12', '2004-06-04', '2005-09-05', '2025-04-07 05:22:38', '2025-04-07 05:22:38'),
(70, 'Cupiditate labore bl', 'Cupiditate labore bl', '2008-04-12', '2004-06-04', '2005-09-05', '2025-04-07 05:22:39', '2025-04-07 05:22:39'),
(71, 'Iure eum voluptatem', 'Iure eum voluptatem', '2012-12-04', '2023-10-02', '2006-01-25', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(72, 'Iure eum voluptatem', 'Iure eum voluptatem', '2012-12-04', '2023-10-02', '2006-01-25', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(73, 'Accusantium unde nis', 'Accusantium unde nis', '1979-09-13', '1979-01-08', '1993-11-20', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(74, 'Accusantium unde nis', 'Accusantium unde nis', '1979-09-13', '1979-01-08', '1993-11-20', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(75, 'Ea enim excepteur sa', 'Ea enim excepteur sa', '1991-04-11', '1988-02-12', '1974-07-16', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(76, 'Ea enim excepteur sa', 'Ea enim excepteur sa', '1991-04-11', '1988-02-12', '1974-07-16', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(77, 'Ad sint ipsum cum i', 'Ad sint ipsum cum i', '1989-09-05', '1972-03-24', '2013-08-25', '2025-04-09 10:48:22', '2025-04-09 10:48:22'),
(78, 'Unde autem omnis ten', 'Unde autem omnis ten', '1989-09-05', '1972-03-24', '2013-08-25', '2025-04-09 10:48:22', '2025-04-09 10:54:10'),
(79, 'Est ad cupidatat be', 'Est ad cupidatat be', '2005-07-10', '2006-03-23', '2005-05-19', '2025-04-09 11:48:10', '2025-04-09 11:48:10'),
(80, 'Est ad cupidatat be', 'Est ad cupidatat be', '2005-07-10', '2006-03-23', '2005-05-19', '2025-04-09 11:48:10', '2025-04-09 11:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `speciality`
--

CREATE TABLE `speciality` (
  `id` int(11) NOT NULL,
  `speciality_laws` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `date_of_examination` date DEFAULT NULL,
  `place_of_examination` varchar(255) DEFAULT NULL,
  `license_number` varchar(255) DEFAULT NULL,
  `date_of_validity` date DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `speciality`
--

INSERT INTO `speciality` (`id`, `speciality_laws`, `rating`, `date_of_examination`, `place_of_examination`, `license_number`, `date_of_validity`, `created`, `modified`) VALUES
(1, 'Nisi voluptate nemo ', 'Ipsa velit illum l', '1990-10-22', 'Voluptatibus omnis r', '869', '1985-02-20', '2025-04-02 08:13:57', '2025-04-02 08:13:57'),
(2, 'Nostrum doloremque u', 'Reprehenderit facili', '2013-08-01', 'Eu incididunt enim e', '230', '1978-05-14', '2025-04-02 08:13:57', '2025-04-02 08:24:24'),
(3, 'Est nemo quis in ali', 'Quas sunt tempore q', '1988-12-30', 'Dolor fugiat laborum', '795', '2001-06-06', '2025-04-03 03:17:08', '2025-04-03 03:17:08'),
(4, 'Est nemo quis in ali', 'Quas sunt tempore q', '1988-12-30', 'Dolor fugiat laborum', '795', '2001-06-06', '2025-04-03 03:17:09', '2025-04-03 03:17:09'),
(5, 'Cupidatat ut rem tem', 'Unde dolor labore do', '2014-09-27', 'Et qui dolor necessi', '237', '2011-07-28', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(6, 'Cupidatat ut rem tem', 'Unde dolor labore do', '2014-09-27', 'Et qui dolor necessi', '237', '2011-07-28', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(7, 'Ut dolore ipsa vel ', 'Enim et nobis exerci', '2004-12-28', 'Tenetur vero ex dolo', '742', '1985-01-02', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(8, 'Ut dolore ipsa vel ', 'Enim et nobis exerci', '2004-12-28', 'Tenetur vero ex dolo', '742', '1985-01-02', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(9, 'Ut reiciendis ut ips', 'Maiores laboris erro', '2013-09-12', 'Nihil impedit fugia', '780', '1975-12-27', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(10, 'Ut reiciendis ut ips', 'Maiores laboris erro', '2013-09-12', 'Nihil impedit fugia', '780', '1975-12-27', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(11, 'Voluptatibus impedit', 'Rem ut consequatur ', '1977-05-25', 'Ipsum in libero qui ', '743', '2020-01-23', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(12, 'Voluptatibus impedit', 'Rem ut consequatur ', '1977-05-25', 'Ipsum in libero qui ', '743', '2020-01-23', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(13, 'Laboriosam aliquip ', 'Quo ratione praesent', '2021-10-06', 'Mollit mollit rerum ', '318', '2013-09-29', '2025-04-03 11:28:57', '2025-04-03 11:28:57'),
(14, 'Tempor culpa quae e', 'Praesentium et qui e', '2021-10-06', 'Ut quia harum commod', '931', '2013-09-29', '2025-04-03 11:28:57', '2025-04-07 03:46:22'),
(15, 'In maiores eum et cu', 'Enim incidunt nihil', '1991-08-05', 'Obcaecati ad dolorum', '564', '2004-09-13', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(16, 'In maiores eum et cu', 'Enim incidunt nihil', '1991-08-05', 'Obcaecati ad dolorum', '564', '2004-09-13', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(17, 'Inventore accusantiu', 'Quidem velit saepe e', '1985-03-18', 'Nemo beatae et quam ', '713', '1991-05-17', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(18, 'Inventore accusantiu', 'Quidem velit saepe e', '1985-03-18', 'Nemo beatae et quam ', '713', '1991-05-17', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(19, 'Illo libero id sit e', 'Eu esse omnis incidu', '2006-04-25', 'Cumque consectetur ', '298', '2013-04-15', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(20, 'Illo libero id sit e', 'Eu esse omnis incidu', '2006-04-25', 'Cumque consectetur ', '298', '2013-04-15', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(21, 'Et hic ea enim ad co', 'Voluptates est sed u', '1986-04-20', 'Eos saepe nesciunt ', '554', '1980-04-29', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(22, 'Et hic ea enim ad co', 'Voluptates est sed u', '1986-04-20', 'Eos saepe nesciunt ', '554', '1980-04-29', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(23, 'Ducimus eaque numqu', 'Dolorem rerum quis m', '1985-01-22', 'Doloremque animi cu', '65', '1997-08-22', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(24, 'Ducimus eaque numqu', 'Dolorem rerum quis m', '1985-01-22', 'Doloremque animi cu', '65', '1997-08-22', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(25, 'Et veniam consequat', 'Velit excepturi ame', '2000-06-10', 'Dolore aliqua Repel', '879', '2008-03-02', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(26, 'Et veniam consequat', 'Velit excepturi ame', '2000-06-10', 'Dolore aliqua Repel', '879', '2008-03-02', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(27, 'Temporibus ea iusto ', 'Et dolorem qui molli', '1980-01-14', 'Id dolorum est incid', '533', '2020-11-28', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(28, 'Temporibus ea iusto ', 'Et dolorem qui molli', '1980-01-14', 'Id dolorum est incid', '533', '2020-11-28', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(29, 'Iste aliquid minima ', 'Nostrud modi ut reic', '2015-10-22', 'Omnis omnis dolorem ', '587', '2002-08-04', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(30, 'Iste aliquid minima ', 'Nostrud modi ut reic', '2015-10-22', 'Omnis omnis dolorem ', '587', '2002-08-04', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(31, 'Eveniet minima iust', 'Veniam nostrud a cu', '2003-05-26', 'Ea beatae occaecat u', '645', '2017-06-09', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(32, 'Eveniet minima iust', 'Veniam nostrud a cu', '2003-05-26', 'Ea beatae occaecat u', '645', '2017-06-09', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(33, 'Accusamus tempor lab', 'In ipsam vel veniam', '1983-03-22', 'Et in est cumque dol', '954', '1971-09-14', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(34, 'Accusamus tempor lab', 'In ipsam vel veniam', '1983-03-22', 'Et in est cumque dol', '954', '1971-09-14', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(35, 'Reprehenderit ipsum ', 'Deserunt veniam tem', '2020-11-21', 'Aut eos esse id do', '878', '1984-12-17', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(36, 'Reprehenderit ipsum ', 'Deserunt veniam tem', '2020-11-21', 'Aut eos esse id do', '878', '1984-12-17', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(37, 'Veniam earum aut Na', 'Sit ut eaque asperna', '2000-05-01', 'Aliquid id dolor mo', '503', '1975-07-09', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(38, 'Veniam earum aut Na', 'Sit ut eaque asperna', '2000-05-01', 'Aliquid id dolor mo', '503', '1975-07-09', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(39, 'Veniam earum aut Na', 'Sit ut eaque asperna', '2000-05-01', 'Aliquid id dolor mo', '503', '1975-07-09', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(40, 'Veniam earum aut Na', 'Sit ut eaque asperna', '2000-05-01', 'Aliquid id dolor mo', '503', '1975-07-09', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(41, 'Dolore non ratione o', 'Nulla tempora atque ', '2004-10-24', 'Sed pariatur Tenetu', '332', '2012-08-17', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(42, 'Dolore non ratione o', 'Nulla tempora atque ', '2004-10-24', 'Sed pariatur Tenetu', '332', '2012-08-17', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(43, 'Quia optio non dele', 'Eveniet quo est ut ', '2001-05-04', 'Natus et sit sed eu', '13', '1975-07-13', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(44, 'Quia optio non dele', 'Eveniet quo est ut ', '2001-05-04', 'Natus et sit sed eu', '13', '1975-07-13', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(45, 'Sint deserunt volupt', 'Tenetur modi aut iru', '1982-10-30', 'Labore possimus ame', '953', '1994-11-02', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(46, 'Sint deserunt volupt', 'Tenetur modi aut iru', '1982-10-30', 'Labore possimus ame', '953', '1994-11-02', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(47, 'Officiis laborum do ', 'In veniam error seq', '1993-12-12', 'Veniam iure id proi', '393', '2023-02-15', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(48, 'Officiis laborum do ', 'In veniam error seq', '1993-12-12', 'Veniam iure id proi', '393', '2023-02-15', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(49, 'Amet rem perferendi', 'Quaerat cillum culpa', '1996-04-01', 'Est dicta quis ea et', '538', '2001-02-20', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(50, 'Amet rem perferendi', 'Quaerat cillum culpa', '1996-04-01', 'Est dicta quis ea et', '538', '2001-02-20', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(51, 'Voluptas id ipsum i', 'Sunt voluptatibus et', '1981-11-20', 'Qui et adipisci cill', '738', '1976-05-22', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(52, 'Voluptas id ipsum i', 'Sunt voluptatibus et', '1981-11-20', 'Qui et adipisci cill', '738', '1976-05-22', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(53, 'Placeat fugit ut a', 'Quae distinctio Aut', '1985-12-01', 'Beatae exercitatione', '518', '2024-01-29', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(54, 'Placeat fugit ut a', 'Quae distinctio Aut', '1985-12-01', 'Beatae exercitatione', '518', '2024-01-29', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(55, 'Incidunt perspiciat', 'Non omnis accusamus ', '2011-05-04', 'Non nostrum consequa', '703', '1987-08-01', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(56, 'Incidunt perspiciat', 'Non omnis accusamus ', '2011-05-04', 'Non nostrum consequa', '703', '1987-08-01', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(57, 'Iure animi necessit', 'Et voluptas debitis ', '2005-03-03', 'Culpa autem unde am', '370', '2006-04-08', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(58, 'Iure animi necessit', 'Et voluptas debitis ', '2005-03-03', 'Culpa autem unde am', '370', '2006-04-08', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(59, 'Nihil ut exercitatio', 'Provident cum sint', '2020-09-03', 'Est ex exercitation ', '130', '1977-08-03', '2025-04-05 14:52:02', '2025-04-05 14:52:02'),
(60, 'Nihil ut exercitatio', 'Provident cum sint', '2020-09-03', 'Est ex exercitation ', '130', '1977-08-03', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(61, 'Beatae Nam sunt deb', 'Aliqua Ratione maio', '1996-01-08', 'Ut sapiente cupidita', '675', '2010-07-12', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(62, 'Beatae Nam sunt deb', 'Aliqua Ratione maio', '1996-01-08', 'Ut sapiente cupidita', '675', '2010-07-12', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(63, 'Adipisci facilis har', 'Non maxime elit non', '2011-10-04', 'Adipisicing nobis do', '709', '1971-12-01', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(64, 'Adipisci facilis har', 'Non maxime elit non', '2011-10-04', 'Adipisicing nobis do', '709', '1971-12-01', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(65, 'Provident nisi in a', 'Quae dolore consecte', '1979-07-01', 'Velit suscipit nisi', '726', '1996-04-13', '2025-04-07 05:11:41', '2025-04-07 05:11:41'),
(66, 'Provident nisi in a', 'Quae dolore consecte', '1979-07-01', 'Velit suscipit nisi', '726', '1996-04-13', '2025-04-07 05:14:20', '2025-04-07 05:14:20'),
(67, 'Perspiciatis atque ', 'Voluptates ab dolor ', '1992-02-20', 'Inventore iste rerum', '714', '1973-08-15', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(68, 'Perspiciatis atque ', 'Voluptates ab dolor ', '1992-02-20', 'Inventore iste rerum', '714', '1973-08-15', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(69, 'Praesentium laboris ', 'Dolor doloribus ulla', '2015-03-22', 'Ullam dolore id vol', '292', '2016-01-28', '2025-04-07 05:22:38', '2025-04-07 05:22:38'),
(70, 'Praesentium laboris ', 'Dolor doloribus ulla', '2015-03-22', 'Ullam dolore id vol', '292', '2016-01-28', '2025-04-07 05:22:39', '2025-04-07 05:22:39'),
(71, 'Dolorem consequatur ', 'Deleniti commodo sed', '2024-02-21', 'Sunt eum ad provide', '197', '2018-04-26', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(72, 'Dolorem consequatur ', 'Deleniti commodo sed', '2024-02-21', 'Sunt eum ad provide', '197', '2018-04-26', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(73, 'Qui aute odit facere', 'Vero quo dolore saep', '2003-04-18', 'Irure nulla et vel e', '853', '1986-12-20', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(74, 'Qui aute odit facere', 'Vero quo dolore saep', '2003-04-18', 'Irure nulla et vel e', '853', '1986-12-20', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(75, 'Asperiores voluptate', 'Accusamus voluptatem', '1996-07-15', 'Ea ea labore sunt od', '538', '2006-03-10', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(76, 'Asperiores voluptate', 'Accusamus voluptatem', '1996-07-15', 'Ea ea labore sunt od', '538', '2006-03-10', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(77, 'Explicabo Ut tempor', 'Ex quos qui et et do', '1981-11-27', 'Quo voluptatem adip', '394', '1991-04-24', '2025-04-09 10:48:22', '2025-04-09 10:48:22'),
(78, 'Id alias quia quaer', 'Officiis fugiat obca', '1981-11-27', 'Consequatur Elit n', '891', '1991-04-24', '2025-04-09 10:48:22', '2025-04-09 10:54:11'),
(79, 'Odio obcaecati nulla', 'Voluptas ratione fac', '1996-05-06', 'Minim lorem maiores ', '295', '1998-05-31', '2025-04-09 11:48:10', '2025-04-09 11:48:10'),
(80, 'Odio obcaecati nulla', 'Voluptas ratione fac', '1996-05-06', 'Minim lorem maiores ', '295', '1998-05-31', '2025-04-09 11:48:10', '2025-04-09 11:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created`, `modified`) VALUES
(1, 'Nikks', 'admin@nikks.com', '$2y$10$sshCVvfx9hF/JnUR3U6Efee5BZPMMzabpMirOCchuW9l4XXmsPzv2', '2025-04-03 02:16:26', '2025-04-09 11:49:18'),
(2, 'zagip', 'kuqafary@mailinator.com', '$2y$10$U6aceDVIe5PsrmY0BO4P4eP1o1cvEFfIv0G0.2.lO4AMdLNhH7/QO', '2025-04-07 08:58:02', '2025-04-07 08:58:02'),
(3, 'nako ', 'nako@po.com', '$2y$10$wiScVB67Lzidnuhwu/VlsuZ01uuwx18G81CkgRA3lUxxX/eTU00Ra', '2025-04-07 10:54:10', '2025-04-07 10:54:10'),
(4, 'witecebys', 'kawebe@mailinator.com', '$2y$10$7l1ogy1SKbMFuHbehl.JLe3FP/rFIxeOGjTuezG59R47j2iQpYPsa', '2025-04-07 11:11:40', '2025-04-07 11:11:40'),
(5, 'nelohigi', 'hyxazygug@mailinator.com', '$2y$10$AN3BJeSM4UXnjS7FpgboAuFfB0CM/2ypJEkty8s6RVgl0rAS9GLna', '2025-04-07 11:11:49', '2025-04-07 11:11:49'),
(6, 'jipugole', 'lisitiqov@mailinator.com', '$2y$10$0otTkUfyaFDHbcW5UHCWF.plnVxHcWK04gut9Qbs08rYMtb33IMWm', '2025-04-08 02:54:23', '2025-04-08 02:54:23'),
(7, 'raxene', 'vynatazob@mailinator.com', '$2y$10$LoyXLoPuGMASKcobLYl/feBpR2dMokXM8p6epUHEgjVlCcRbznfUm', '2025-04-08 03:10:03', '2025-04-08 03:10:03'),
(8, 'socakurok', 'johafyvelo@mailinator.com', '$2y$10$9uC5CVXHYguadUghwzoXB.W4G6V0eSUWnc.RrXqMY4Jf/6.h0.sia', '2025-04-08 03:10:10', '2025-04-08 03:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `vocational`
--

CREATE TABLE `vocational` (
  `id` int(11) NOT NULL,
  `vocational_name` varchar(255) DEFAULT NULL,
  `basic_education` varchar(255) DEFAULT NULL,
  `start_from` date DEFAULT NULL,
  `end_to` date DEFAULT NULL,
  `year_graduated` date DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vocational`
--

INSERT INTO `vocational` (`id`, `vocational_name`, `basic_education`, `start_from`, `end_to`, `year_graduated`, `created`, `modified`) VALUES
(1, 'Mercedes Klein', 'Exercitation vitae d', '1985-08-23', '1993-05-15', '2011-06-11', '2025-04-02 08:13:57', '2025-04-02 08:13:57'),
(2, 'Abbot Mitchell', 'Ipsam dolor libero v', '2005-07-11', '2014-10-04', '2013-01-10', '2025-04-02 08:13:57', '2025-04-02 08:24:24'),
(3, 'Wendy Baldwin', 'Nisi quibusdam ut au', '2012-09-10', '1986-08-17', '1970-04-21', '2025-04-03 03:17:08', '2025-04-03 03:17:08'),
(4, 'Wendy Baldwin', 'Nisi quibusdam ut au', '2012-09-10', '1986-08-17', '1970-04-21', '2025-04-03 03:17:09', '2025-04-03 03:17:09'),
(5, 'Shaine Morris', 'Voluptatem Labore e', '1980-06-05', '1989-11-10', '2023-10-15', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(6, 'Shaine Morris', 'Voluptatem Labore e', '1980-06-05', '1989-11-10', '2023-10-15', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(7, 'Illana Howell', 'Facilis non magnam e', '2007-04-27', '2000-07-01', '2004-12-23', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(8, 'Illana Howell', 'Facilis non magnam e', '2007-04-27', '2000-07-01', '2004-12-23', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(9, 'Colin Mack', 'Deserunt accusantium', '1990-12-21', '2017-02-05', '2008-09-28', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(10, 'Colin Mack', 'Deserunt accusantium', '1990-12-21', '2017-02-05', '2008-09-28', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(11, 'Sloane Hickman', 'Fugiat odit eum irur', '2011-03-11', '1990-08-08', '2010-05-13', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(12, 'Sloane Hickman', 'Fugiat odit eum irur', '2011-03-11', '1990-08-08', '2010-05-13', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(13, 'Alana Rosales', 'Commodi numquam dolo', '2023-07-27', '1998-03-12', '1973-07-11', '2025-04-03 11:28:57', '2025-04-03 11:28:57'),
(14, 'Randall Herring', 'Labore saepe lorem n', '2023-07-27', '1998-03-12', '1973-07-11', '2025-04-03 11:28:57', '2025-04-07 03:46:22'),
(15, 'Drew Franks', 'Vel cumque exercitat', '1997-08-23', '2022-09-06', '1993-06-03', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(16, 'Drew Franks', 'Vel cumque exercitat', '1997-08-23', '2022-09-06', '1993-06-03', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(17, 'Baker Navarro', 'Nemo at aperiam volu', '2000-04-16', '2021-06-19', '1985-09-07', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(18, 'Baker Navarro', 'Nemo at aperiam volu', '2000-04-16', '2021-06-19', '1985-09-07', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(19, 'Xaviera Lynn', 'Commodo nostrud non ', '2012-04-13', '2021-02-20', '2010-10-16', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(20, 'Xaviera Lynn', 'Commodo nostrud non ', '2012-04-13', '2021-02-20', '2010-10-16', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(21, 'Carson Hoffman', 'Odit non et magna er', '2009-02-08', '2010-07-09', '1979-07-08', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(22, 'Carson Hoffman', 'Odit non et magna er', '2009-02-08', '2010-07-09', '1979-07-08', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(23, 'Cameron Bond', 'Ut tempore voluptas', '2003-07-22', '1975-06-01', '2021-10-02', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(24, 'Cameron Bond', 'Ut tempore voluptas', '2003-07-22', '1975-06-01', '2021-10-02', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(25, 'Kathleen Holder', 'Voluptatem ullam rep', '1973-05-02', '2003-07-04', '2016-06-28', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(26, 'Kathleen Holder', 'Voluptatem ullam rep', '1973-05-02', '2003-07-04', '2016-06-28', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(27, 'Harriet Drake', 'Sed aspernatur ad re', '1982-10-06', '2005-03-11', '2007-02-15', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(28, 'Harriet Drake', 'Sed aspernatur ad re', '1982-10-06', '2005-03-11', '2007-02-15', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(29, 'Chloe Hull', 'Explicabo Pariatur', '2015-07-17', '1977-11-08', '1979-04-23', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(30, 'Chloe Hull', 'Explicabo Pariatur', '2015-07-17', '1977-11-08', '1979-04-23', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(31, 'Abbot Acevedo', 'Id vero ea qui verit', '1974-05-09', '2025-04-08', '2006-03-12', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(32, 'Abbot Acevedo', 'Id vero ea qui verit', '1974-05-09', '2025-04-08', '2006-03-12', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(33, 'Christine Russell', 'Voluptatem velit qui', '2017-10-02', '1974-06-22', '1986-10-13', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(34, 'Christine Russell', 'Voluptatem velit qui', '2017-10-02', '1974-06-22', '1986-10-13', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(35, 'Edward Daniel', 'Sit aute unde ipsa ', '2013-08-14', '1995-02-01', '2012-02-20', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(36, 'Edward Daniel', 'Sit aute unde ipsa ', '2013-08-14', '1995-02-01', '2012-02-20', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(37, 'Asher Cotton', 'Qui cum dolore possi', '2012-02-04', '1977-07-12', '2012-02-07', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(38, 'Asher Cotton', 'Qui cum dolore possi', '2012-02-04', '1977-07-12', '2012-02-07', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(39, 'Asher Cotton', 'Qui cum dolore possi', '2012-02-04', '1977-07-12', '2012-02-07', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(40, 'Asher Cotton', 'Qui cum dolore possi', '2012-02-04', '1977-07-12', '2012-02-07', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(41, 'Fiona Duffy', 'Eu praesentium quis ', '2007-05-21', '2017-12-26', '2024-02-07', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(42, 'Fiona Duffy', 'Eu praesentium quis ', '2007-05-21', '2017-12-26', '2024-02-07', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(43, 'Karleigh Burke', 'Ut cum cupidatat ips', '1979-09-13', '2010-01-04', '2018-03-16', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(44, 'Karleigh Burke', 'Ut cum cupidatat ips', '1979-09-13', '2010-01-04', '2018-03-16', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(45, 'Selma Manning', 'Aut obcaecati aut is', '2016-12-19', '1971-12-23', '1989-06-27', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(46, 'Selma Manning', 'Aut obcaecati aut is', '2016-12-19', '1971-12-23', '1989-06-27', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(47, 'Jermaine Campos', 'Aute quis lorem illu', '2002-03-12', '2009-06-18', '2007-08-20', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(48, 'Jermaine Campos', 'Aute quis lorem illu', '2002-03-12', '2009-06-18', '2007-08-20', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(49, 'Regan Compton', 'Blanditiis numquam q', '1999-01-23', '2003-07-10', '2009-02-11', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(50, 'Regan Compton', 'Blanditiis numquam q', '1999-01-23', '2003-07-10', '2009-02-11', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(51, 'Perry Downs', 'Facere voluptates vo', '2016-08-09', '1993-10-25', '1990-04-06', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(52, 'Perry Downs', 'Facere voluptates vo', '2016-08-09', '1993-10-25', '1990-04-06', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(53, 'Hiram Sullivan', 'Maiores rerum provid', '2012-03-10', '2000-07-26', '1998-05-16', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(54, 'Hiram Sullivan', 'Maiores rerum provid', '2012-03-10', '2000-07-26', '1998-05-16', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(55, 'Jason Mckenzie', 'Molestiae ut quia pl', '1981-05-06', '2014-08-27', '2010-12-15', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(56, 'Jason Mckenzie', 'Molestiae ut quia pl', '1981-05-06', '2014-08-27', '2010-12-15', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(57, 'Hamilton Gilbert', 'Possimus provident', '1999-04-16', '2020-04-11', '1994-10-14', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(58, 'Hamilton Gilbert', 'Possimus provident', '1999-04-16', '2020-04-11', '1994-10-14', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(59, 'Edward Cabrera', 'Perferendis earum vo', '2023-06-16', '2002-11-08', '2011-04-12', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(60, 'Edward Cabrera', 'Perferendis earum vo', '2023-06-16', '2002-11-08', '2011-04-12', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(61, 'Stacey Hahn', 'Quas incididunt offi', '1974-09-16', '2024-08-22', '1986-07-13', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(62, 'Stacey Hahn', 'Quas incididunt offi', '1974-09-16', '2024-08-22', '1986-07-13', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(63, 'Hashim Coleman', 'Autem qui nihil unde', '2013-07-26', '2018-11-04', '1997-03-21', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(64, 'Hashim Coleman', 'Autem qui nihil unde', '2013-07-26', '2018-11-04', '1997-03-21', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(65, 'Evelyn Gaines', 'Neque et dolor illo ', '2019-11-14', '1994-12-20', '1983-01-04', '2025-04-07 05:11:41', '2025-04-07 05:11:41'),
(66, 'Evelyn Gaines', 'Neque et dolor illo ', '2019-11-14', '1994-12-20', '1983-01-04', '2025-04-07 05:14:20', '2025-04-07 05:14:20'),
(67, 'Gay Compton', 'Quae magni voluptatu', '1998-03-16', '2014-09-07', '2007-02-09', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(68, 'Gay Compton', 'Quae magni voluptatu', '1998-03-16', '2014-09-07', '2007-02-09', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(69, 'Amelia Norris', 'Sed harum est cumque', '2002-02-15', '2007-01-20', '1977-09-18', '2025-04-07 05:22:38', '2025-04-07 05:22:38'),
(70, 'Amelia Norris', 'Sed harum est cumque', '2002-02-15', '2007-01-20', '1977-09-18', '2025-04-07 05:22:39', '2025-04-07 05:22:39'),
(71, 'Xantha Pollard', 'Animi eaque ab proi', '2022-02-26', '1979-01-09', '2012-09-17', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(72, 'Xantha Pollard', 'Animi eaque ab proi', '2022-02-26', '1979-01-09', '2012-09-17', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(73, 'Samuel Byers', 'Impedit temporibus ', '2011-01-15', '1999-07-26', '1974-07-03', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(74, 'Samuel Byers', 'Impedit temporibus ', '2011-01-15', '1999-07-26', '1974-07-03', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(75, 'Carson Terry', 'Eveniet quidem dict', '2000-01-26', '1979-06-03', '1999-06-20', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(76, 'Carson Terry', 'Eveniet quidem dict', '2000-01-26', '1979-06-03', '1999-06-20', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(77, 'Chandler Gonzales', 'Et corrupti proiden', '2015-07-28', '1990-11-17', '1980-12-19', '2025-04-09 10:48:22', '2025-04-09 10:48:22'),
(78, 'Hedy Duke', 'Sit alias rerum ut ', '2015-07-28', '1990-11-17', '1980-12-19', '2025-04-09 10:48:22', '2025-04-09 10:54:10'),
(79, 'Caesar Rivas', 'Iure quia ut molesti', '1996-09-25', '1976-05-03', '1994-11-07', '2025-04-09 11:48:10', '2025-04-09 11:48:10'),
(80, 'Caesar Rivas', 'Iure quia ut molesti', '1996-09-25', '1976-05-03', '1994-11-07', '2025-04-09 11:48:10', '2025-04-09 11:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `work_experience` (
  `id` int(11) NOT NULL,
  `start_from` date DEFAULT NULL,
  `upto` date DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `monthly_salary` varchar(255) DEFAULT NULL,
  `salary_grade` varchar(255) DEFAULT NULL,
  `status_of_appointment` varchar(255) DEFAULT NULL,
  `government_service` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`id`, `start_from`, `upto`, `position`, `department_id`, `monthly_salary`, `salary_grade`, `status_of_appointment`, `government_service`, `created`, `modified`) VALUES
(1, '0000-00-00', '0000-00-00', 'Qui porro officia al', NULL, '7', 'Irure animi incidun', 'Ut sed rerum volupta', 'Dolore velit ut vol', '2025-04-02 08:13:57', '2025-04-02 08:13:57'),
(2, '0000-00-00', '0000-00-00', 'Dolorem dolore volup', NULL, '3', 'Officia nobis sed co', 'Tenetur in quas aute', 'Beatae doloremque vo', '2025-04-02 08:13:57', '2025-04-02 08:24:24'),
(3, '0000-00-00', '0000-00-00', 'Pariatur Quae archi', NULL, '7', 'In eum blanditiis la', 'Ea similique esse e', 'Voluptatum enim tota', '2025-04-03 03:17:08', '2025-04-03 03:17:08'),
(4, '0000-00-00', '0000-00-00', 'Pariatur Quae archi', NULL, '7', 'In eum blanditiis la', 'Ea similique esse e', 'Voluptatum enim tota', '2025-04-03 03:17:09', '2025-04-03 03:17:09'),
(5, '0000-00-00', '0000-00-00', 'Soluta atque eos qu', NULL, '4', 'Consequat Laudantiu', 'Est sunt est quasi ', 'Deserunt non asperna', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(6, '0000-00-00', '0000-00-00', 'Soluta atque eos qu', NULL, '4', 'Consequat Laudantiu', 'Est sunt est quasi ', 'Deserunt non asperna', '2025-04-03 03:17:18', '2025-04-03 03:17:18'),
(7, '0000-00-00', '0000-00-00', 'Delectus modi eiusm', NULL, '2', 'Corporis illum comm', 'Veritatis porro cons', 'Sint quidem et ratio', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(8, '0000-00-00', '0000-00-00', 'Delectus modi eiusm', NULL, '2', 'Corporis illum comm', 'Veritatis porro cons', 'Sint quidem et ratio', '2025-04-03 03:17:26', '2025-04-03 03:17:26'),
(9, '0000-00-00', '0000-00-00', 'Aliquid labore volup', NULL, '11', 'Amet quis eum aut p', 'Omnis aliquid nesciu', 'Quasi eius dolor ut ', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(10, '0000-00-00', '0000-00-00', 'Aliquid labore volup', NULL, '11', 'Amet quis eum aut p', 'Omnis aliquid nesciu', 'Quasi eius dolor ut ', '2025-04-03 03:17:40', '2025-04-03 03:17:40'),
(11, '0000-00-00', '0000-00-00', 'Tenetur autem fugit', NULL, '2', 'Quis excepteur solut', 'Soluta vitae Nam et ', 'Occaecat Nam sit om', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(12, '0000-00-00', '0000-00-00', 'Tenetur autem fugit', NULL, '2', 'Quis excepteur solut', 'Soluta vitae Nam et ', 'Occaecat Nam sit om', '2025-04-03 10:26:44', '2025-04-03 10:26:44'),
(13, '0000-00-00', '0000-00-00', 'Voluptatem ipsam mag', NULL, '10', 'Accusantium ut obcae', 'Iure fuga Ducimus ', 'Inventore delectus ', '2025-04-03 11:28:57', '2025-04-03 11:28:57'),
(14, '2007-01-05', '1984-10-14', 'Enim veniam eligend', NULL, '3', 'Ad eum rerum quasi l', 'Anim beatae possimus', 'Est esse explicabo', '2025-04-03 11:28:57', '2025-04-07 03:46:22'),
(15, '0000-00-00', '0000-00-00', 'Eum fugiat neque nu', NULL, '5', 'Quis autem facere no', 'Corrupti laboris eo', 'Commodo ullam volupt', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(16, '0000-00-00', '0000-00-00', 'Eum fugiat neque nu', NULL, '5', 'Quis autem facere no', 'Corrupti laboris eo', 'Commodo ullam volupt', '2025-04-03 11:29:34', '2025-04-03 11:29:34'),
(17, '0000-00-00', '0000-00-00', 'Quasi impedit corpo', NULL, '1', 'Omnis maiores eligen', 'Sed incididunt asper', 'Officia ipsum corrup', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(18, '0000-00-00', '0000-00-00', 'Quasi impedit corpo', NULL, '1', 'Omnis maiores eligen', 'Sed incididunt asper', 'Officia ipsum corrup', '2025-04-03 11:32:46', '2025-04-03 11:32:46'),
(19, '0000-00-00', '0000-00-00', 'Omnis doloremque tem', NULL, '11', 'Voluptas quia quisqu', 'Nostrum consectetur ', 'Est officia est com', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(20, '0000-00-00', '0000-00-00', 'Omnis doloremque tem', NULL, '11', 'Voluptas quia quisqu', 'Nostrum consectetur ', 'Est officia est com', '2025-04-03 11:33:33', '2025-04-03 11:33:33'),
(21, '0000-00-00', '0000-00-00', 'Dolorum aliquam sint', NULL, '11', 'Laborum ex cillum no', 'Voluptatem Hic mini', 'Non veniam rerum pr', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(22, '0000-00-00', '0000-00-00', 'Dolorum aliquam sint', NULL, '11', 'Laborum ex cillum no', 'Voluptatem Hic mini', 'Non veniam rerum pr', '2025-04-03 11:34:01', '2025-04-03 11:34:01'),
(23, '0000-00-00', '0000-00-00', 'Ea sunt soluta nihil', NULL, '4', 'Omnis reprehenderit ', 'Non ipsa officiis c', 'Pariatur Nihil volu', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(24, '0000-00-00', '0000-00-00', 'Ea sunt soluta nihil', NULL, '4', 'Omnis reprehenderit ', 'Non ipsa officiis c', 'Pariatur Nihil volu', '2025-04-03 11:39:56', '2025-04-03 11:39:56'),
(25, '0000-00-00', '0000-00-00', 'Tempora accusamus pe', NULL, '1', 'Ea a elit rerum ut ', 'Praesentium eos bea', 'Maiores cum sed sunt', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(26, '0000-00-00', '0000-00-00', 'Tempora accusamus pe', NULL, '1', 'Ea a elit rerum ut ', 'Praesentium eos bea', 'Maiores cum sed sunt', '2025-04-03 11:53:50', '2025-04-03 11:53:50'),
(27, '0000-00-00', '0000-00-00', 'Labore sed occaecat ', NULL, '10', 'Provident ipsum ob', 'Eum consectetur quo ', 'Sunt nostrum dolores', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(28, '0000-00-00', '0000-00-00', 'Labore sed occaecat ', NULL, '10', 'Provident ipsum ob', 'Eum consectetur quo ', 'Sunt nostrum dolores', '2025-04-03 11:55:50', '2025-04-03 11:55:50'),
(29, '0000-00-00', '0000-00-00', 'Tenetur amet ipsam ', NULL, '11', 'Consequatur sunt d', 'Quo odio atque porro', 'Est excepturi consec', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(30, '0000-00-00', '0000-00-00', 'Tenetur amet ipsam ', NULL, '11', 'Consequatur sunt d', 'Quo odio atque porro', 'Est excepturi consec', '2025-04-03 11:59:43', '2025-04-03 11:59:43'),
(31, '0000-00-00', '0000-00-00', 'Adipisci adipisicing', NULL, '5', 'Irure iure repellend', 'Eum eligendi sed mai', 'Voluptatem amet per', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(32, '0000-00-00', '0000-00-00', 'Adipisci adipisicing', NULL, '5', 'Irure iure repellend', 'Eum eligendi sed mai', 'Voluptatem amet per', '2025-04-03 12:01:46', '2025-04-03 12:01:46'),
(33, '0000-00-00', '0000-00-00', 'Omnis sit minima sit', NULL, '2', 'Voluptatibus quisqua', 'Eligendi qui in et u', 'Et et soluta commodi', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(34, '0000-00-00', '0000-00-00', 'Omnis sit minima sit', NULL, '2', 'Voluptatibus quisqua', 'Eligendi qui in et u', 'Et et soluta commodi', '2025-04-03 12:04:59', '2025-04-03 12:04:59'),
(35, '0000-00-00', '0000-00-00', 'Dolores ad recusanda', NULL, '6', 'Doloribus sint quas', 'Nostrum dolores repr', 'In odio minim do non', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(36, '0000-00-00', '0000-00-00', 'Dolores ad recusanda', NULL, '6', 'Doloribus sint quas', 'Nostrum dolores repr', 'In odio minim do non', '2025-04-03 12:06:13', '2025-04-03 12:06:13'),
(37, '0000-00-00', '0000-00-00', 'Eos soluta laborios', NULL, '5', 'Non corporis fugiat ', 'Temporibus reprehend', 'Sunt nisi dolorem vi', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(38, '0000-00-00', '0000-00-00', 'Eos soluta laborios', NULL, '5', 'Non corporis fugiat ', 'Temporibus reprehend', 'Sunt nisi dolorem vi', '2025-04-04 00:43:58', '2025-04-04 00:43:58'),
(39, '0000-00-00', '0000-00-00', 'Eos soluta laborios', NULL, '5', 'Non corporis fugiat ', 'Temporibus reprehend', 'Sunt nisi dolorem vi', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(40, '0000-00-00', '0000-00-00', 'Eos soluta laborios', NULL, '5', 'Non corporis fugiat ', 'Temporibus reprehend', 'Sunt nisi dolorem vi', '2025-04-04 00:45:32', '2025-04-04 00:45:32'),
(41, '0000-00-00', '0000-00-00', 'Est eius enim ab pla', NULL, '6', 'Velit optio ratione', 'Maxime nihil nostrum', 'Earum consectetur ex', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(42, '0000-00-00', '0000-00-00', 'Est eius enim ab pla', NULL, '6', 'Velit optio ratione', 'Maxime nihil nostrum', 'Earum consectetur ex', '2025-04-04 00:45:41', '2025-04-04 00:45:41'),
(43, '0000-00-00', '0000-00-00', 'Quos iste deleniti o', NULL, '3', 'Aperiam mollitia ips', 'Sed consequuntur con', 'Dolores dignissimos ', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(44, '0000-00-00', '0000-00-00', 'Quos iste deleniti o', NULL, '3', 'Aperiam mollitia ips', 'Sed consequuntur con', 'Dolores dignissimos ', '2025-04-04 03:06:38', '2025-04-04 03:06:38'),
(45, '0000-00-00', '0000-00-00', 'Sed occaecat fugiat', NULL, '11', 'Adipisci ratione non', 'Eaque quis qui simil', 'Accusantium ex et vo', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(46, '0000-00-00', '0000-00-00', 'Sed occaecat fugiat', NULL, '11', 'Adipisci ratione non', 'Eaque quis qui simil', 'Accusantium ex et vo', '2025-04-04 03:41:11', '2025-04-04 03:41:11'),
(47, '0000-00-00', '0000-00-00', 'Aut qui et deserunt ', NULL, '1', 'Enim nostrud dolor q', 'Quos eos ab enim ut ', 'Et illum aute ut co', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(48, '0000-00-00', '0000-00-00', 'Aut qui et deserunt ', NULL, '1', 'Enim nostrud dolor q', 'Quos eos ab enim ut ', 'Et illum aute ut co', '2025-04-04 03:41:31', '2025-04-04 03:41:31'),
(49, '0000-00-00', '0000-00-00', 'Eum reprehenderit ve', NULL, '12', 'Quibusdam minus ab i', 'Ipsa aute modi quo ', 'Beatae et enim moles', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(50, '0000-00-00', '0000-00-00', 'Eum reprehenderit ve', NULL, '12', 'Quibusdam minus ab i', 'Ipsa aute modi quo ', 'Beatae et enim moles', '2025-04-04 03:42:33', '2025-04-04 03:42:33'),
(51, '0000-00-00', '0000-00-00', 'Numquam aut tempora ', NULL, '12', 'Odit quo Nam et sequ', 'Iure do qui excepteu', 'Vitae neque veniam ', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(52, '0000-00-00', '0000-00-00', 'Numquam aut tempora ', NULL, '12', 'Odit quo Nam et sequ', 'Iure do qui excepteu', 'Vitae neque veniam ', '2025-04-04 03:42:59', '2025-04-04 03:42:59'),
(53, '0000-00-00', '0000-00-00', 'Fuga Delectus magn', NULL, '6', 'Animi autem dolore ', 'Ipsa ratione distin', 'Impedit provident ', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(54, '0000-00-00', '0000-00-00', 'Fuga Delectus magn', NULL, '6', 'Animi autem dolore ', 'Ipsa ratione distin', 'Impedit provident ', '2025-04-05 14:51:37', '2025-04-05 14:51:37'),
(55, '0000-00-00', '0000-00-00', 'Eveniet aut praesen', NULL, '2', 'Ut ea Nam exercitati', 'Possimus officiis m', 'A fugiat in suscipit', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(56, '0000-00-00', '0000-00-00', 'Eveniet aut praesen', NULL, '2', 'Ut ea Nam exercitati', 'Possimus officiis m', 'A fugiat in suscipit', '2025-04-05 14:51:46', '2025-04-05 14:51:46'),
(57, '0000-00-00', '0000-00-00', 'Nemo dignissimos id ', NULL, '5', 'Elit sint veniam m', 'Ea quo ex sit beata', 'Libero fuga Impedit', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(58, '0000-00-00', '0000-00-00', 'Nemo dignissimos id ', NULL, '5', 'Elit sint veniam m', 'Ea quo ex sit beata', 'Libero fuga Impedit', '2025-04-05 14:51:54', '2025-04-05 14:51:54'),
(59, '0000-00-00', '0000-00-00', 'Corrupti ut invento', NULL, '10', 'Eum aut obcaecati re', 'Excepteur unde excep', 'Do qui dignissimos i', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(60, '0000-00-00', '0000-00-00', 'Corrupti ut invento', NULL, '10', 'Eum aut obcaecati re', 'Excepteur unde excep', 'Do qui dignissimos i', '2025-04-05 14:52:03', '2025-04-05 14:52:03'),
(61, '0000-00-00', '0000-00-00', 'Architecto ipsum ape', NULL, '12', 'Autem expedita enim ', 'Exercitationem cillu', 'Ab ut eveniet a ven', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(62, '0000-00-00', '0000-00-00', 'Architecto ipsum ape', NULL, '12', 'Autem expedita enim ', 'Exercitationem cillu', 'Ab ut eveniet a ven', '2025-04-05 14:52:23', '2025-04-05 14:52:23'),
(63, '0000-00-00', '0000-00-00', 'Voluptatibus accusan', NULL, '7', 'Dignissimos non eius', 'Sint excepturi eius ', 'Sapiente doloremque ', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(64, '0000-00-00', '0000-00-00', 'Voluptatibus accusan', NULL, '7', 'Dignissimos non eius', 'Sint excepturi eius ', 'Sapiente doloremque ', '2025-04-05 15:08:37', '2025-04-05 15:08:37'),
(65, '2023-11-03', '2004-02-22', 'Qui minus aliquam re', NULL, '2', 'Ea elit consequatur', 'Culpa velit similiqu', 'Omnis doloribus veli', '2025-04-07 05:11:41', '2025-04-07 05:11:41'),
(66, '2023-11-03', '2004-02-22', 'Qui minus aliquam re', NULL, '2', 'Ea elit consequatur', 'Culpa velit similiqu', 'Omnis doloribus veli', '2025-04-07 05:14:20', '2025-04-07 05:14:20'),
(67, NULL, NULL, 'Quasi veniam assume', NULL, '12', 'Voluptas cumque aute', 'Officiis eum dolorem', 'Ea dolorum adipisci ', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(68, NULL, NULL, 'Quasi veniam assume', NULL, '12', 'Voluptas cumque aute', 'Officiis eum dolorem', 'Ea dolorum adipisci ', '2025-04-07 05:14:34', '2025-04-07 05:14:34'),
(69, NULL, NULL, 'Nostrud eum similiqu', NULL, '7', 'Aperiam voluptatibus', 'Obcaecati ex ut aliq', 'Dolores enim totam m', '2025-04-07 05:22:38', '2025-04-07 05:22:38'),
(70, NULL, NULL, 'Nostrud eum similiqu', NULL, '7', 'Aperiam voluptatibus', 'Obcaecati ex ut aliq', 'Dolores enim totam m', '2025-04-07 05:22:39', '2025-04-07 05:22:39'),
(71, NULL, NULL, 'Itaque amet fuga E', NULL, '8', 'Et est veniam labor', 'Occaecat consequat ', 'Dolor ut est quam n', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(72, NULL, NULL, 'Itaque amet fuga E', NULL, '8', 'Et est veniam labor', 'Occaecat consequat ', 'Dolor ut est quam n', '2025-04-07 05:23:59', '2025-04-07 05:23:59'),
(73, NULL, NULL, 'Anim accusamus beata', NULL, '4', 'Vel irure eiusmod eo', 'Odit et ad minim in ', 'Consectetur dolore v', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(74, NULL, NULL, 'Anim accusamus beata', NULL, '4', 'Vel irure eiusmod eo', 'Odit et ad minim in ', 'Consectetur dolore v', '2025-04-07 05:26:35', '2025-04-07 05:26:35'),
(75, NULL, NULL, 'Aliquip voluptatem ', NULL, '4', 'Quos eum atque eos e', 'Veritatis culpa eni', 'Mollit voluptatum eu', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(76, NULL, NULL, 'Aliquip voluptatem ', NULL, '4', 'Quos eum atque eos e', 'Veritatis culpa eni', 'Mollit voluptatum eu', '2025-04-07 05:27:44', '2025-04-07 05:27:44'),
(77, NULL, NULL, 'Enim aliquid velit m', NULL, '7', 'Velit perferendis ob', 'Occaecat adipisci ne', 'Do doloribus volupta', '2025-04-09 10:48:22', '2025-04-09 10:48:22'),
(78, '1970-10-01', '1996-03-20', 'Id perferendis accus', NULL, '12', 'Iure animi dolore q', 'Tempore minima dele', 'Tempore eu et dolor', '2025-04-09 10:48:22', '2025-04-09 10:54:11'),
(79, NULL, NULL, 'Qui doloribus et ips', NULL, '11', 'Iure odio enim delec', 'Commodo praesentium ', 'Nulla laboris volupt', '2025-04-09 11:48:10', '2025-04-09 11:48:10'),
(80, NULL, NULL, 'Qui doloribus et ips', NULL, '11', 'Iure odio enim delec', 'Commodo praesentium ', 'Nulla laboris volupt', '2025-04-09 11:48:10', '2025-04-09 11:48:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elementary`
--
ALTER TABLE `elementary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `family_background_id` (`family_background_id`),
  ADD KEY `elementary_id` (`elementary_id`),
  ADD KEY `secondary_id` (`secondary_id`),
  ADD KEY `vocational_id` (`vocational_id`),
  ADD KEY `college_id` (`college_id`),
  ADD KEY `graduate_id` (`graduate_id`),
  ADD KEY `lnd_id` (`lnd_id`),
  ADD KEY `organization_id` (`organization_id`),
  ADD KEY `work_experience_id` (`work_experience_id`),
  ADD KEY `other_information_id` (`other_information_id`),
  ADD KEY `speciality_id` (`speciality_id`);

--
-- Indexes for table `family_background`
--
ALTER TABLE `family_background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graduate`
--
ALTER TABLE `graduate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lnd`
--
ALTER TABLE `lnd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_information`
--
ALTER TABLE `other_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `secondary`
--
ALTER TABLE `secondary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vocational`
--
ALTER TABLE `vocational`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `elementary`
--
ALTER TABLE `elementary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `family_background`
--
ALTER TABLE `family_background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `graduate`
--
ALTER TABLE `graduate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `lnd`
--
ALTER TABLE `lnd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `other_information`
--
ALTER TABLE `other_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `secondary`
--
ALTER TABLE `secondary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `speciality`
--
ALTER TABLE `speciality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vocational`
--
ALTER TABLE `vocational`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `work_experience`
--
ALTER TABLE `work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`family_background_id`) REFERENCES `family_background` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_10` FOREIGN KEY (`other_information_id`) REFERENCES `other_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_11` FOREIGN KEY (`speciality_id`) REFERENCES `speciality` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`elementary_id`) REFERENCES `elementary` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_3` FOREIGN KEY (`secondary_id`) REFERENCES `secondary` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_4` FOREIGN KEY (`vocational_id`) REFERENCES `vocational` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_5` FOREIGN KEY (`college_id`) REFERENCES `college` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_6` FOREIGN KEY (`graduate_id`) REFERENCES `graduate` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_7` FOREIGN KEY (`lnd_id`) REFERENCES `lnd` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_8` FOREIGN KEY (`organization_id`) REFERENCES `organization` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employees_ibfk_9` FOREIGN KEY (`work_experience_id`) REFERENCES `work_experience` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD CONSTRAINT `work_experience_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
