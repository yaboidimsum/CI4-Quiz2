-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 07:25 AM
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
-- Database: `db_quiz2`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `f_id` int(11) NOT NULL,
  `f_nama` varchar(100) NOT NULL,
  `f_sinopsis` longtext NOT NULL,
  `f_bioskop` varchar(100) NOT NULL,
  `f_jadwaltayang` date NOT NULL,
  `f_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`f_id`, `f_nama`, `f_sinopsis`, `f_bioskop`, `f_jadwaltayang`, `f_gambar`) VALUES
(1, 'Dawn of The Seven', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed faucibus turpis in eu mi bibendum neque egestas. Malesuada fames ac turpis egestas sed tempus urna et. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Sed sed risus pretium quam.', 'Plaza Surabaya', '2023-12-10', 'https://imagetolink.com/ib/pyefk0dufT.png'),
(2, 'Black Noir: Insurrection', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed faucibus turpis in eu mi bibendum neque egestas. Malesuada fames ac turpis egestas sed tempus urna et. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Sed sed risus pretium quam.', 'Pakuwon Mall Surabaya', '2023-12-15', 'https://imagetolink.com/ib/WhcG01fw5J.png'),
(3, 'Translucent: Invisible Force 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed faucibus turpis in eu mi bibendum neque egestas. Malesuada fames ac turpis egestas sed tempus urna et. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Sed sed risus pretium quam.', 'Marvell City', '2023-12-20', 'https://imagetolink.com/ib/VVQkB7RQ6z.png'),
(4, 'Black Noir: Crossover', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed faucibus turpis in eu mi bibendum neque egestas. Malesuada fames ac turpis egestas sed tempus urna et. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Sed sed risus pretium quam.', 'Galaxy Mall 3', '2023-12-25', 'https://imagetolink.com/ib/LhvOezi10Q.png'),
(5, 'Spider-Man: Into The Spiderverse', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed faucibus turpis in eu mi bibendum neque egestas. Malesuada fames ac turpis egestas sed tempus urna et. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Sed sed risus pretium quam.', 'Plaza Cibubur', '2023-12-16', 'https://imagetolink.com/ib/VNkplIpYFN.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `myticket`
--

CREATE TABLE `myticket` (
  `m_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myticket`
--

INSERT INTO `myticket` (`m_id`, `f_id`, `t_id`) VALUES
(1, 4, 1),
(2, 3, 2),
(3, 1, 3),
(4, 4, 5),
(8, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `t_id` int(11) NOT NULL,
  `t_jamtayang` char(5) NOT NULL,
  `t_jumlahtiket` int(11) NOT NULL,
  `t_tempatduduk` varchar(100) NOT NULL,
  `t_metodepembayaran` varchar(100) NOT NULL,
  `t_promo` varchar(10) NOT NULL,
  `t_timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`t_id`, `t_jamtayang`, `t_jumlahtiket`, `t_tempatduduk`, `t_metodepembayaran`, `t_promo`, `t_timestamp`) VALUES
(1, '09:00', 2, 'A3,A4', 'Cash', 'CINEMA21', NULL),
(2, '07:00', 4, 'B2,B3,B4.B5', 'Debit Card', 'BIOSKOP1', NULL),
(3, '07:00', 1, 'C5', 'Debit Card', 'DRAMA555', NULL),
(5, '13:00', 3, 'D2,D3,C2,C3,C4', 'Debit Card', 'SPECIALZ', '2023-11-28 16:09:57'),
(6, '13:00', 3, 'D2,D3,C2,C3,C4', 'Debit Card', 'SPECIALZ', '2023-11-28 16:11:59'),
(7, '11:00', 3, 'D2,D3,C2,C3,C4', 'Debit Card', 'SPECIAL2', '2023-11-28 16:18:23'),
(8, '11:00', 3, 'D2,D3,C2,C3,C4', 'Debit Card', 'SPECIAL1', '2023-11-28 16:20:14'),
(9, '13:00', 3, 'D2,D3,C2,C3,C4', 'Debit Card', 'SPECIAL9', '2023-11-28 23:31:40'),
(10, '11:00', 3, 'D2,D3,C2,C3,C4', 'Debit Card', 'SPECIAL0', '2023-11-28 23:31:50'),
(11, '13:00', 5, 'A1,A2,A3,B4,B5', 'QRIS', 'DAOTS', '2023-11-29 09:10:11'),
(12, '07:00', 5, 'A1,A2,A3,B4,B5', 'Cash', 'DAOTS', '2023-11-29 09:11:16'),
(13, '07:00', 5, 'A1,A2,A3,B4,B5', 'Cash', '', '2023-11-29 09:15:41'),
(14, '07:00', 0, '', 'Debit Card', '', '2023-11-29 09:16:13'),
(15, '07:00', 0, '', 'Debit Card', '', '2023-11-29 09:16:31'),
(16, '07:00', 0, '', 'Debit Card', '', '2023-11-29 10:19:02'),
(17, '07:00', 0, '', 'Debit Card', '', '2023-11-29 10:19:03'),
(18, '07:00', 0, '', 'Debit Card', '', '2023-11-29 10:19:05'),
(19, '07:00', 0, '', 'Debit Card', '', '2023-11-29 10:19:24'),
(20, '07:00', 0, '', 'Debit Card', '', '2023-11-29 10:19:30'),
(21, '07:00', 0, '', 'Debit Card', '', '2023-11-29 10:20:48'),
(22, '11:00', 5, 'A1,A2,A3,B4,B5', 'Cash', 'APAYA', '2023-11-29 10:26:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `myticket`
--
ALTER TABLE `myticket`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `f_id` (`f_id`),
  ADD KEY `t_id` (`t_id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `myticket`
--
ALTER TABLE `myticket`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `myticket`
--
ALTER TABLE `myticket`
  ADD CONSTRAINT `myticket_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `film` (`f_id`),
  ADD CONSTRAINT `myticket_ibfk_2` FOREIGN KEY (`t_id`) REFERENCES `tiket` (`t_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
