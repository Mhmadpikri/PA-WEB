-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 03:58 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `boking`
--

CREATE TABLE `boking` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `umur` varchar(25) NOT NULL,
  `tglboking` date NOT NULL,
  `jk` varchar(25) NOT NULL,
  `metode` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boking`
--

INSERT INTO `boking` (`id`, `nama`, `umur`, `tglboking`, `jk`, `metode`) VALUES
(4, 'tita', '18', '2022-10-18', 'pria', 'Cash'),
(5, 'irfan', '28', '2022-10-04', 'wanita', 'Cash'),
(6, 'bayu', '22', '2022-10-29', 'pria', 'Cash'),
(7, 'fikri', '19', '2022-09-28', 'Pria', 'Cash'),
(8, 'bobo', '20', '2022-10-26', 'Pria', 'Transfer'),
(10, 'tita', '18', '2022-10-24', 'Wanita', 'Cash'),
(14, 'firman', '21', '2022-10-27', 'Pria', 'Cash'),
(16, 'dini', '19', '2022-10-25', 'Pria', 'Cash'),
(18, 'rahmat', '20', '2022-10-28', 'Pria', 'Cash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boking`
--
ALTER TABLE `boking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boking`
--
ALTER TABLE `boking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
