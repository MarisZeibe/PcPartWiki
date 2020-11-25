-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2020 at 07:18 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcpartwiki`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `post_date` datetime DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `c_a_idx` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ID`, `title`, `post_date`, `category`) VALUES
(1, 'CPU', '2020-11-20 00:00:00', 1),
(2, 'GPU', NULL, 2),
(3, 'RAM', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `name`) VALUES
(1, 'home'),
(2, 'gallery');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `user` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `u_f_idx` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `text`, `user`) VALUES
(1, 'ok', 2),
(2, 'feedback', 2),
(3, 'test', 3);

-- --------------------------------------------------------

--
-- Table structure for table `liked`
--

DROP TABLE IF EXISTS `liked`;
CREATE TABLE IF NOT EXISTS `liked` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `article` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `a_l` (`article`),
  KEY `u_l` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `liked`
--

INSERT INTO `liked` (`ID`, `user`, `article`) VALUES
(16, 1, 1),
(17, 1, 2),
(18, 2, 2),
(19, 3, 1),
(20, 3, 3),
(21, 1, 1),
(22, 1, 2),
(23, 2, 3),
(24, 3, 1),
(25, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `birthday` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `surname`, `email`, `birthday`) VALUES
(1, 'Edie', 'Cooke', 'ecooke@mail.com', '2000-03-21'),
(2, 'Albi', 'Kirby', 'albi_kirby@gmail.com', '1998-10-16'),
(3, 'Gino', 'Ellison', 'ge@email.org', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `c_a` FOREIGN KEY (`category`) REFERENCES `categories` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `u_f` FOREIGN KEY (`user`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `liked`
--
ALTER TABLE `liked`
  ADD CONSTRAINT `a_l` FOREIGN KEY (`article`) REFERENCES `articles` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `u_l` FOREIGN KEY (`user`) REFERENCES `users` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
