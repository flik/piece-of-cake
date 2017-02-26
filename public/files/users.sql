-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2013 at 04:51 PM
-- Server version: 5.5.34
-- PHP Version: 5.3.10-1ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hrzp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(20) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `birthplace` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `marital` varchar(15) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `exact_password` char(10) NOT NULL,
  `register_date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `is_admin` char(1) NOT NULL,
  `interview_date` datetime NOT NULL,
  `applied_position` varchar(255) NOT NULL,
  `reached_status` varchar(25) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `updated_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uuid`, `name`, `dob`, `birthplace`, `address`, `city`, `country`, `phone`, `email`, `gender`, `marital`, `religion`, `password`, `exact_password`, `register_date`, `status`, `is_admin`, `interview_date`, `applied_position`, `reached_status`, `group_id`, `created`, `updated`, `created_user_id`, `updated_user_id`) VALUES
(3, NULL, 'Administrator', '0000-00-00', '', '', '', '', '', 'admin@zeropoint.it', '', '', '', '21232f297a57a5a743894a0e4a801fc3', '', '0000-00-00', '1', '1', '0000-00-00 00:00:00', '', '', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(130, NULL, 'Bart Van Loon', '0000-00-00', '', '', '', 'Belgium', '03458562223', 'bart@zeropoint.it', '', '', '', '5c0ec821aafcd775d9b0efb275c95ee0', '88ff4b6e', '2013-06-21', 'Interview Scheduled', '0', '0000-00-00 00:00:00', '', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(131, NULL, 'Rizwan', '0000-00-00', '', '', '', 'Pakistan', '03336002079', 'rizwanaabbas@gmail.com', '', '', '', '043a568b23df32e54e137cd6efe8cc4f', '18a6edf3', '2013-06-27', 'Interview Scheduled', '0', '0000-00-00 00:00:00', '', '', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(132, '51d69ecd-7974-4e33-8', 'aaa', '0000-00-00', '', '', '', 'Pakistan', '23432432432', 'axdmin@zeropoint.it', '', '', '', '1d20193863e181fdc3a2befa01c71ed8', 'ae2b12aa', '2013-07-05', 'Interview Scheduled', '0', '0000-00-00 00:00:00', '', '', 2, '2013-07-05 15:24:13', '2013-07-05 15:24:13', 3, 3),
(133, '51d6a090-c4e0-457a-9', 'Learningx', '0000-00-00', '', '', '', 'Pakistan', '32432434', 'asxdmin@zeropoint.it', '', '', '', 'ea95f13549998c4fcbfbc924027ab972', '8232731d', '2013-07-05', 'Interview Scheduled', '0', '0000-00-00 00:00:00', '', '', 2, '2013-07-05 15:31:44', '2013-07-05 15:31:44', 3, 3),
(134, '51d6a1c2-cc0c-4b42-a', 'Learningxx', '0000-00-00', '', '', '', 'Pakistan', '23432432432', 'adminxx@zeropoint.it', '', '', '', 'cc02328baca6cfc62fc7fe2471df0850', 'a3f6dad4', '2013-07-05', 'Interview Scheduled', '0', '0000-00-00 00:00:00', '', '', 2, '2013-07-05 15:36:50', '2013-07-05 15:36:50', 3, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
