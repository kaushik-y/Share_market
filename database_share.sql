-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2019 at 06:59 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

--
-- practice
--
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database_share`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`email`, `pwd`) VALUES
('tom@.com', '123'),
('jerry@.com', '456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fback`
--

CREATE TABLE IF NOT EXISTS `tbl_fback` (
  `fid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ftext` varchar(50) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_fback`
--

INSERT INTO `tbl_fback` (`fid`, `name`, `mobile`, `email`, `ftext`) VALUES
(1, 'kaushik', '9638527410', 'kaushik@gmail.com', 'kjhgfdsdfghjkmjhgfd ghgregtrhfdgrt grf.\r\n'),
(3, 'fevikol', '741852963', 'fevikol@gmail.cm', 'drdtfghj');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parchage`
--

CREATE TABLE IF NOT EXISTS `tbl_parchage` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `qty` varchar(50) NOT NULL,
  `price` varchar(50) DEFAULT NULL,
  `description` varchar(50) NOT NULL,
  `sid` int(10) NOT NULL,
  KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_parchage`
--

INSERT INTO `tbl_parchage` (`pid`, `uid`, `qty`, `price`, `description`, `sid`) VALUES
(9, 1, '3', '150.00', 'ert', 1),
(10, 2, '1', '250.00', 'zsdf', 5),
(11, 2, '1', '89.00', 'testing', 7),
(12, 2, '1', '89.00', 'kl', 7),
(13, 2, '1', '115', 'sdf', 2),
(14, 2, '1', '115', 'testing', 2),
(15, 2, '1', '115', 'fghj', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_price`
--

CREATE TABLE IF NOT EXISTS `tbl_price` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `scode` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `isactive` varchar(30) NOT NULL,
  `qty` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_price`
--

INSERT INTO `tbl_price` (`sid`, `scode`, `sname`, `description`, `company`, `type`, `isactive`, `qty`, `price`) VALUES
(1, '111', 'Biocon', 'Testing', 'Biocon.Ltd.', 'Preference share', 'no', '50', '150.00'),
(2, '112', 'kk', 'testing', 'fghjklgvbhjn', 'Ordinary share', 'yes', '85', '115'),
(3, '113', 'JSW steel', 'Testing', 'JSW steel.Ltd', 'Redeemable Share', 'no', '70', '250.00'),
(4, '114', 'United', 'Testing', 'United Spirits Ltd.', 'Non-Voting Ordinary share', 'yes', '90', '200.00'),
(5, '115', 'Power Fainance', 'Testing', 'Power Fainance Corporation Ltd', 'Cumuletive Preference Share', 'Yes', '80', '250.00'),
(6, '116', 'Hindustan unilever', 'Testing', 'Hindustan unilever Ltd.', 'Ordinary Share', 'Yes', '85', '150.00'),
(7, '117', 'Asian Paint', 'Testing', 'Asian Paints Ltd.', 'Redeemable Share', 'yes', '75', '89.00'),
(8, '118', 'Balaji Wefers', 'Testing', 'Balaji Wefers Ltd.', 'Non-Voting Ordinary share', 'Yes', '90', '520.00'),
(9, '119', 'TATA Motors', 'Testing', 'TATA Motors Ltd.', 'Ordinary  Share', 'Yes', '55', '150.00'),
(10, '120', 'Reliance', 'Testing', 'Reliance Industries Ltd.', 'Cumuletive Preference Share', 'Yes', '90', '800.00'),
(12, '121', 'fghj', 'gyhjk', 'tfghbjn', 'Non-Voting Ordinary share', 'yes', '5', '800');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `userid` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `regidatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userid`, `name`, `email`, `mobile`, `password`, `regidatetime`) VALUES
(1, 'kaushik', 'kaushik@gmail.com', '7418529630', '111', '2019-09-26 03:08:39'),
(2, 'zeel', 'zeel@gmail.com', '8569632255', '222', '2019-09-26 03:08:05'),
(3, 'darshita', 'darshita@gmail.com', '9632587410', '000 ', '2019-09-30 02:06:48'),
(4, 'riddhi', 'riddhi@gmail.com', '9638527410', '333', '2019-09-30 04:00:55'),
(5, 'riddhi', 'riddhi@gmail.com', '9638527410', '333', '2019-09-30 04:04:22'),
(6, 'jinal', 'jinal@gmail.com', '7418529630', '444', '2019-09-30 04:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wallet`
--

CREATE TABLE IF NOT EXISTS `tbl_wallet` (
  `wid` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `amt` varchar(50) NOT NULL,
  `remark` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_wallet`
--

INSERT INTO `tbl_wallet` (`wid`, `uid`, `amt`, `remark`, `date`) VALUES
(8, 2, '300', 'test', '2019-09-30 00:59:27'),
(9, 1, '300', 'test', '2019-09-30 00:59:27'),
(10, 2, '500', 'From credit', '2019-09-30 02:34:28'),
(11, 2, '10000', 'From Paytm', '2019-09-30 03:58:49');
