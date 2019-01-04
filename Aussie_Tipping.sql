-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 06:33 AM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Aussie_Tipping`
--

-- --------------------------------------------------------

--
-- Table structure for table `Sports`
--

CREATE TABLE IF NOT EXISTS `Sports` (
  `sport_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `season` varchar(4) NOT NULL,
  `number of rounds` int(3) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `team_logo` varchar(1000) NOT NULL,
  PRIMARY KEY (`sport_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Sport_Round`
--

CREATE TABLE IF NOT EXISTS `Sport_Round` (
  `sport_round_id` int(11) NOT NULL AUTO_INCREMENT,
  `sport_id` int(11) NOT NULL,
  `round_number` int(3) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`sport_round_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Tipping Competition`
--

CREATE TABLE IF NOT EXISTS `Tipping Competition` (
  `tipping_competition_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `competition_name` varchar(100) NOT NULL,
  PRIMARY KEY (`tipping_competition_id`),
  UNIQUE KEY `competition_name` (`competition_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Tipping_Competition_Member`
--

CREATE TABLE IF NOT EXISTS `Tipping_Competition_Member` (
  `tipping_comp_member_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tipping_competition_id` int(11) NOT NULL,
  PRIMARY KEY (`tipping_comp_member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `password` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `name`, `password`, `username`, `email_address`) VALUES
(1, 'Michael', 'password', 'number one tipper', 'email@email.com'),
(2, 'Graham', 'password', 'number two tipper', 'email@email.com'),
(4, 'Fred', 'Password', 'Freedy', 'email@email.com'),
(5, 'Michael Davidson', 'Password', 'Tipster', 'michaeld177@gmail.com'),
(6, 'Michael Davidson 2', 'password', 'Tipster', 'email@email.com'),
(7, 'Gary Webster', 'password', 'The Lone Tipster', 'email@email.com'),
(8, 'Fred Flinstone', 'rocks', 'Freddy', 'freddyF@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `User_Tip`
--

CREATE TABLE IF NOT EXISTS `User_Tip` (
  `user_tip_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `sport_round_id` int(11) NOT NULL,
  `selection` varchar(50) NOT NULL,
  `result` varchar(10) NOT NULL,
  PRIMARY KEY (`user_tip_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
