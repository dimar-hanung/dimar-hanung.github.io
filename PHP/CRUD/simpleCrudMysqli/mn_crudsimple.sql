-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 12:15 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mn_crudsimple`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `absen` varchar(100) NOT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama`, `kelas`, `absen`, `date`) VALUES
(1, 'sql inject', 'XII ssTKJ 1', '35', NULL),
(2, 'sql inject', 'XII ssTKJ 1', '35', NULL),
(3, 'sql inject', 'XII ssTKJ 1', '0', NULL),
(5, 'sql inject', 'XII ssTKJ 1', '35', NULL),
(6, 'sql inject', 'XII TKJ 1', '0', NULL),
(7, 'sql inject', 'XII ssTKJ 1', '0', NULL),
(23, 'chntevrl_', 'ss@xx', 'ssSqZKAhx6JSpB8', NULL),
(24, 'chntevrl_', 'ss@xx', 'ssSqZKAhx6JSpB8', NULL),
(25, 'chntevrl_', 'asdasd@aaxx', '123', NULL),
(26, 'chntevrl_', 'asdasda@x', 'ssSqZKAhx6JSpB8', NULL),
(27, 'chntevrl_', 'asdasd@aaxx', 'ssSqZKAhx6JSpB8', NULL),
(28, 'chntevrl_', 'asdasd@aaxx', 'ssSqZKAhx6JSpB8', NULL),
(29, 'chntevrl_', 'asdasda@sa', 'ssSqZKAhx6JSpB8', NULL),
(30, 'chntevrl_', 'asdasd@aaxx', 'ssSqZKAhx6JSpB8', NULL),
(31, 'chntevrl_', 'asdasd@aaxx', 'ssSqZKAhx6JSpB8', NULL),
(32, 'chntevrl_', 'asdasd@aaxx', 'ssSqZKAhx6JSpB8', NULL),
(33, 'chntevrl_', 'asdasd@aaxx', 'ssSqZKAhx6JSpB8', NULL),
(34, 'chntevrl_', 'asdasd@aaxx', 'ssSqZKAhx6JSpB8', NULL),
(36, 'chntevrl_', 'asdasd@aaxx', 'ssSqZKAhx6JSpB8', NULL),
(37, 'chntevrl_', 'asdasd@asdasd', 'ssSqZKAhx6JSpB8', NULL),
(38, 'chntevrl_', 'asdasd@asdasd', 'ssSqZKAhx6JSpB8', NULL),
(39, 'chntevrl_', 'asdasd@asdasd', 'ssSqZKAhx6JSpB8', NULL),
(40, 'chntevrl_', 'asdasd@asdasd', 'ssSqZKAhx6JSpB8', NULL),
(41, 'chntevrl_', 'asdasd@asdasd', 'ssSqZKAhx6JSpB8', NULL),
(42, 'chntevrl_', 'asdasd@asdasd', 'ssSqZKAhx6JSpB8', NULL),
(43, 'chntevrl_', 'asdasd@asdasd', 'ssSqZKAhx6JSpB8', NULL),
(45, 'chntevrl_', 'asd@sadasd', 'ssSqZKAhx6JSpB8', NULL),
(46, 'chntevrl_', 'dff@gsg', 'xhsh', NULL),
(47, 'chntevrl_', '123@awd', 'ssSqZKAhx6JSpB8', NULL),
(48, 'chntevrl_', 'asdasd@aaxx', 'ssSqZKAhx6JSpB8', NULL),
(49, 'chntevrl_', 'asdasd@aaxx', 'ssSqZKAhx6JSpB8', NULL),
(50, 'chntevrl_', 'asdasd@aaxx', 'asdas', NULL),
(51, 'chntevrl_', 'asdasd@aaxx', 'ssSqZKAhx6JSpB8', NULL),
(52, 'chntevrl_', 'asdasd@asdasd', 'ssSqZKAhx6JSpB8', NULL),
(54, 'Chntevrl_', 'Ddd', 'ddx', NULL),
(57, '', '', '', 'login pada tanggal :01/05/2020 05:51:58 pm'),
(58, '', '', '', 'login pada tanggal :01/05/2020 05:52:01 pm'),
(59, '', '', '', 'login pada tanggal :01/07/2020 09:57:34 pm'),
(60, '', '', '', 'login pada tanggal :01/07/2020 09:57:46 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
