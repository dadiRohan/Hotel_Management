-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2017 at 08:47 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_ci_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login_master`
--

CREATE TABLE IF NOT EXISTS `tbl_login_master` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login_master`
--

INSERT INTO `tbl_login_master` (`id`, `username`, `password`) VALUES
(1, 'preparer', 'Test_123'),
(2, 'editor', 'Test_123'),
(3, 'reviewer', 'Test_123'),
(4, 'administrator', 'Test_123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visiter_details`
--

CREATE TABLE IF NOT EXISTS `tbl_visiter_details` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `room_no` int(100) NOT NULL,
  `members` int(50) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_out_date` date NOT NULL,
  `total_amount` int(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_visiter_details`
--

INSERT INTO `tbl_visiter_details` (`id`, `name`, `room_no`, `members`, `check_in_date`, `check_out_date`, `total_amount`, `status`) VALUES
(1, 'ABC', 544, 2, '2017-11-30', '2017-12-04', 3000, 'active'),
(2, 'PQR', 566, 45, '2017-11-30', '2017-12-04', 9000, 'active'),
(3, 'RRR', 78, 2, '2017-11-30', '2017-12-04', 3000, 'inactive'),
(4, 'MMM', 502, 4, '2017-12-04', '2017-12-04', 4500, 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login_master`
--
ALTER TABLE `tbl_login_master`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_visiter_details`
--
ALTER TABLE `tbl_visiter_details`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login_master`
--
ALTER TABLE `tbl_login_master`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_visiter_details`
--
ALTER TABLE `tbl_visiter_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
