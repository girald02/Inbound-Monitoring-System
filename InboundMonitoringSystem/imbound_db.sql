-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 12:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imbound_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbound`
--

CREATE TABLE `tbl_inbound` (
  `id` int(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `rrNo` int(11) NOT NULL,
  `suppName` varchar(50) NOT NULL,
  `drNo` varchar(50) NOT NULL,
  `linePerItems` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `totalNoOfSupp` int(11) NOT NULL,
  `totalLinePerItem` int(11) NOT NULL,
  `totalQty` int(11) NOT NULL,
  `8106` varchar(50) NOT NULL,
  `rrAvail` varchar(50) NOT NULL,
  `rrDispatch` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inbound`
--

INSERT INTO `tbl_inbound` (`id`, `date`, `rrNo`, `suppName`, `drNo`, `linePerItems`, `qty`, `totalNoOfSupp`, `totalLinePerItem`, `totalQty`, `8106`, `rrAvail`, `rrDispatch`, `remarks`, `year`) VALUES
(1, '15-Feb', 2, 'DENSO', 'D1067705645', 20, 14, 0, 0, 0, '', '', '', '', '2020'),
(2, '21-Feb', 5, 'DENSO TEN', 'D1582472690', 13, 12, 0, 0, 0, '', '', '', '', '2020'),
(3, '17-Feb', 4, 'DENSO', 'D819980059', 16, 6, 0, 0, 0, '', '', '', '', '2020'),
(4, '15-Feb', 10, 'MARIROKU', 'D378630020', 5, 1, 0, 0, 0, '', '', '', '', '2020'),
(5, '28-Feb', 13, 'ROBER AUTO & IND L. PARTS', 'D600744899', 3, 9, 0, 0, 0, '', '', '', '', '2020'),
(6, '14-Feb', 6, 'TOKAI RICA', 'D156359317', 8, 10, 0, 0, 0, '', '', '', '', '2020'),
(7, '16-Feb', 19, 'F-TECH', 'D1782402263', 10, 10, 0, 0, 0, '', '', '', '', '2020'),
(8, '11-Feb', 4, 'MARIROKU', 'D1644228225', 10, 3, 0, 0, 0, '', '', '', '', '2020'),
(9, '13-Feb', 12, 'MARIROKU', 'D570145348', 4, 15, 0, 0, 0, '', '', '', '', '2020'),
(10, '10-Feb', 6, 'MARIROKU PHILIPPINES', 'D157473637', 14, 6, 0, 0, 0, '', '', '', '', '2020'),
(11, '13-Feb', 11, 'MARIROKU', 'D1875453164', 11, 9, 0, 0, 0, '', '', '', '', '2020'),
(12, '15-Feb', 12, 'MARIROKU', 'D1824159247', 1, 2, 0, 0, 0, '', '', '', '', '2020'),
(13, '12-Feb', 1, 'TOKAI RICA', 'D1878118143', 13, 20, 0, 0, 0, '', '', '', '', '2020'),
(14, '27-Feb', 7, 'TOKAI RICA', 'D810810346', 15, 4, 0, 0, 0, '', '', '', '', '2020'),
(15, '11-Feb', 9, 'TOKAI RICA', 'D252511786', 12, 5, 0, 0, 0, '', '', '', '', '2020'),
(16, '28-Feb', 12, 'TOKAI RICA', 'D709312210', 16, 12, 0, 0, 0, '', '', '', '', '2020'),
(17, '12-Feb', 6, 'TOKAI RICA', 'D540618999', 3, 11, 0, 0, 0, '', '', '', '', '2020'),
(18, '17-Feb', 12, 'TOKAI RICA', 'D976428516', 20, 20, 0, 0, 0, '', '', '', '', '2020'),
(19, '20-Feb', 4, 'TOKAI RICA', 'D1745059103', 11, 7, 0, 0, 0, '', '', '', '', '2020'),
(20, '14-Feb', 9, 'TOKAI RICA', 'D1967096663', 1, 1, 0, 0, 0, '', '', '', '', '2020'),
(21, '20-Feb', 6, 'TOKAI RICA', 'D371894461', 18, 10, 0, 0, 0, '', '', '', '', '2020'),
(22, '26-Feb', 18, 'TOKAI RICA', 'D1013296728', 6, 2, 0, 0, 0, '', '', '', '', '2020'),
(23, '11-Feb', 9, 'TOKAI RICA', 'D2046294001', 8, 6, 0, 0, 0, '', '', '', '', '2020'),
(24, '16-Feb', 18, 'ROBER AUTO & IND L. PARTS', 'D683773297', 17, 4, 0, 0, 0, '', '', '', '', '2020'),
(25, '22-Feb', 1, 'ROBER AUTO & IND L. PARTS', 'D48872508', 19, 8, 0, 0, 0, '', '', '', '', '2020'),
(26, '17-Feb', 16, 'DENSO', 'D1165564709', 5, 1, 0, 0, 0, '', '', '', '', '2020'),
(27, '18-Feb', 9, 'DENSO', 'D835842467', 19, 15, 0, 0, 0, '', '', '', '', '2020'),
(28, '25-Feb', 6, 'DENSO', 'D1196688643', 11, 13, 0, 0, 0, '', '', '', '', '2020'),
(29, '26-Feb', 10, 'DENSO', 'D1377263677', 9, 6, 0, 0, 0, '', '', '', '', '2020'),
(30, '11-Feb', 18, 'F-TECH', 'D1869551394', 1, 15, 0, 0, 0, '', '', '', '', '2020'),
(31, '22-Jan', 19, 'DENSO', 'D38355479', 15, 4, 0, 0, 0, '', '', '', '', '2020'),
(32, '25-Jan', 2, 'DENSO TEN', 'D237726283', 19, 3, 0, 0, 0, '', '', '', '', '2020'),
(33, '24-Jan', 6, 'DENSO', 'D1680721783', 13, 1, 0, 0, 0, '', '', '', '', '2020'),
(34, '23-Jan', 10, 'DENSO', 'D574821903', 13, 4, 0, 0, 0, '', '', '', '', '2020'),
(35, '26-Jan', 14, 'DENSO TEN', 'D535188553', 7, 7, 0, 0, 0, '', '', '', '', '2020'),
(36, '24-Jan', 12, 'F-TECH', 'D5066453', 1, 14, 0, 0, 0, '', '', '', '', '2020'),
(37, '28-Jan', 17, 'F-TECH', 'D785843086', 1, 7, 0, 0, 0, '', '', '', '', '2020'),
(38, '17-Jan', 9, 'F-TECH', 'D1808019406', 3, 3, 0, 0, 0, '', '', '', '', '2020'),
(39, '16-Jan', 19, 'F-TECH', 'D1490283957', 11, 6, 0, 0, 0, '', '', '', '', '2020'),
(40, '16-Jan', 7, 'F-TECH', 'D227354228', 4, 19, 0, 0, 0, '', '', '', '', '2020'),
(41, '16-Jan', 3, 'F-TECH', 'D108839168', 19, 8, 0, 0, 0, '', '', '', '', '2020'),
(42, '19-Jan', 5, 'F-TECH', 'D1175993130', 14, 9, 0, 0, 0, '', '', '', '', '2020'),
(43, '10-Jan', 16, 'F-TECH', 'D1907665081', 10, 15, 0, 0, 0, '', '', '', '', '2020'),
(44, '23-Jan', 4, 'F-TECH', 'D556354625', 9, 13, 0, 0, 0, '', '', '', '', '2020'),
(45, '28-Jan', 4, 'F-TECH', 'D1182552075', 7, 12, 0, 0, 0, '', '', '', '', '2020'),
(46, '22-Jan', 19, 'F-TECH', 'D243508856', 12, 18, 0, 0, 0, '', '', '', '', '2020'),
(47, '17-Jan', 8, 'DENSO TEN', 'D654098083', 3, 13, 0, 0, 0, '', '', '', '', '2020'),
(48, '18-Jan', 18, 'F-TECH', 'D1041448501', 17, 8, 0, 0, 0, '', '', '', '', '2020'),
(49, '13-Jan', 7, 'F-TECH', 'D11074786', 2, 20, 0, 0, 0, '', '', '', '', '2020'),
(50, '13-Jan', 14, 'F-TECH', 'D2027345919', 6, 9, 0, 0, 0, '', '', '', '', '2020'),
(51, '10-Jan', 5, 'F-TECH', 'D844661193', 18, 10, 0, 0, 0, '', '', '', '', '2020'),
(52, '21-Jan', 18, 'MARIROKU PHILIPPINES', 'D1012315139', 17, 18, 0, 0, 0, '', '', '', '', '2020'),
(53, '15-Jan', 4, 'MARIROKU', 'D752725113', 19, 15, 0, 0, 0, '', '', '', '', '2020'),
(54, '18-Jan', 11, 'MARIROKU', 'D1137964483', 11, 19, 0, 0, 0, '', '', '', '', '2020'),
(55, '28-Jan', 11, 'MARIROKU', 'D1442772163', 11, 10, 0, 0, 0, '', '', '', '', '2020'),
(56, '26-Jan', 11, 'MARIROKU', 'D551290397', 2, 4, 0, 0, 0, '', '', '', '', '2020'),
(57, '11-Jan', 8, 'MARIROKU', 'D2082297456', 17, 6, 0, 0, 0, '', '', '', '', '2020'),
(58, '16-Jan', 19, 'MARIROKU', 'D1573109320', 19, 9, 0, 0, 0, '', '', '', '', '2020'),
(59, '23-Jan', 10, 'MARIROKU', 'D1552380030', 11, 16, 0, 0, 0, '', '', '', '', '2020'),
(60, '22-Jan', 19, 'MARIROKU', 'D696664210', 3, 18, 0, 0, 0, '', '', '', '', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@sunlogistics.com.ph');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signature`
--

CREATE TABLE `tbl_signature` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_signature`
--

INSERT INTO `tbl_signature` (`id`, `name`, `position`) VALUES
(1, 'B.ENCINARES', 'Automobile'),
(2, 'J.TANALEON', 'Engineer'),
(6, 'Mr. Remo Custodio', 'PCD Asst. Manager'),
(7, 'Ms. Lerma Eti', 'Asst. General Manager - Mnfg.'),
(8, 'Mr. K. Iwashita', 'Exec. Gen. Manager'),
(9, 'Mr. Daisuke Yamada', 'Director'),
(10, 'Mr. M. Kurita', 'President'),
(11, 'Larry Tejano', 'Service Parts');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id` int(11) NOT NULL,
  `suppName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id`, `suppName`) VALUES
(1, 'DENSO'),
(2, 'DENSO TEN'),
(3, 'TOKAI RICA'),
(7, 'F-TECH'),
(8, 'DENSO PHILIPPINES CORPORATION'),
(9, 'MARIROKU PHILIPPINES');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_inbound`
--
ALTER TABLE `tbl_inbound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_signature`
--
ALTER TABLE `tbl_signature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_inbound`
--
ALTER TABLE `tbl_inbound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_signature`
--
ALTER TABLE `tbl_signature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
