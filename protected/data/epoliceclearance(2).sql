-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2016 at 07:58 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epoliceclearance`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `dateofbirth` int(11) NOT NULL,
  `placeofbirth` varchar(200) NOT NULL,
  `civilstatus` int(11) NOT NULL,
  `address` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `firstname`, `middlename`, `lastname`, `dateofbirth`, `placeofbirth`, `civilstatus`, `address`) VALUES
(1, 'bergel', 'tachado', 'cutara', 1454194800, 'zcmc', 1, 'mampang zambo city'),
(2, 'fsfdfsg', 'sgdfgdfg', 'dgdfgdfg', 1454194800, 'zcmc', 1, 'mampang zambo city');

-- --------------------------------------------------------

--
-- Table structure for table `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Admin', '1', NULL, 'N;'),
('System Admin', '2', NULL, 'N;'),
('System Admin', '3', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Admin', 2, NULL, NULL, 'N;'),
('System Admin', 2, 'System Admin', NULL, 'N;'),
('System User', 2, 'System User', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE IF NOT EXISTS `certificate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `station_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `certificate_no` varchar(200) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `or_number` varchar(200) NOT NULL,
  `investigator_id` int(11) NOT NULL,
  `officer_id` int(11) NOT NULL,
  `findings` varchar(200) NOT NULL,
  `residentcertnumber` varchar(200) NOT NULL,
  `residentcertdateissued` int(20) NOT NULL,
  `amount` decimal(20,2) NOT NULL,
  `datefiled` int(11) NOT NULL,
  `daterelease` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `station_id`, `applicant_id`, `certificate_no`, `purpose`, `or_number`, `investigator_id`, `officer_id`, `findings`, `residentcertnumber`, `residentcertdateissued`, `amount`, `datefiled`, `daterelease`) VALUES
(1, 0, 1, '', 'NBI clearance', '123', 1, 1, 'asdh', '12sdfmin', -3600, '23.00', 2016, 0),
(2, 0, 2, '', 'NBI clearance', '123', 1, 1, 'asdh', '12sdfmin', -3600, '23.00', 2016, 0);

-- --------------------------------------------------------

--
-- Table structure for table `official`
--

CREATE TABLE IF NOT EXISTS `official` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `rank_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `accesslist` varchar(25) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`user_id`, `lastname`, `firstname`, `accesslist`) VALUES
(1, 'Admin', 'Administrator', ''),
(2, 'Moratalla', 'Aris', ''),
(3, 'Kutara', 'Berujiru', '');

-- --------------------------------------------------------

--
-- Table structure for table `profiles_fields`
--

CREATE TABLE IF NOT EXISTS `profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` varchar(15) NOT NULL DEFAULT '0',
  `field_size_min` varchar(15) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `profiles_fields`
--

INSERT INTO `profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', '50', '3', 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'firstname', 'First Name', 'VARCHAR', '50', '3', 1, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3),
(3, 'accesslist', 'Access List', 'VARCHAR', '25', '1', 1, '', '', '', '', '', '', '', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE IF NOT EXISTS `rank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `longName` varchar(100) NOT NULL,
  `shortName` varchar(25) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `longName`, `shortName`, `active`) VALUES
(1, 'Director General', 'DGen.', 1),
(2, 'Deputy Director General', 'DDG', 1),
(3, 'Director', 'Dir.', 1),
(4, 'Chief Superintendent', 'C/Supt.', 1),
(5, 'Senior Superintendent', 'S/Supt.', 1),
(6, 'Superintendent', 'Supt.', 1),
(7, 'Chief Inspector', 'C/Insp.', 1),
(8, 'Senior Inspector', 'S/Insp.', 1),
(9, 'Inspector', 'Insp.', 1),
(10, 'Senior Police Officer IV', 'SPO4', 1),
(11, 'Senior Police Officer III', 'SPO3', 1),
(12, 'Senior Police Officer II', 'SPO2', 1),
(13, 'Senior Police Officer I', 'SPO1', 1),
(14, 'Police Officer III', 'PO3', 1),
(15, 'Police Officer II', 'PO2', 1),
(16, 'Police Officer I', 'PO1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rights`
--

CREATE TABLE IF NOT EXISTS `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE IF NOT EXISTS `station` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activkey`, `create_at`, `lastvisit_at`, `superuser`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', '2015-11-15 03:50:53', '2016-01-02 14:33:39', 1, 1),
(2, 'adm0808', '101a6ec9f938885df0a44f20458d2eb4', 'adm0808@yahoo.com', '557802afbc7a42c997e95fac537740d1', '2016-01-10 18:11:06', '0000-00-00 00:00:00', 0, 1),
(3, 'bergel', '22c0b2da0e801535f3e92b678f35281c', 'b.cutara@gmail.com', 'dc631c34489b9bee24cc0d55fb3394b3', '2016-01-16 18:33:41', '0000-00-00 00:00:00', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
