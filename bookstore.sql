-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 05:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--
CREATE DATABASE IF NOT EXISTS `bookstore` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bookstore`;

-- --------------------------------------------------------

--
-- Table structure for table `bookid`
--

DROP TABLE IF EXISTS `bookid`;
CREATE TABLE `bookid` (
  `BOOKID` varchar(5) COLLATE utf8_bin NOT NULL,
  `BookName` varchar(50) COLLATE utf8_bin NOT NULL,
  `TypeID` char(3) COLLATE utf8_bin NOT NULL,
  `StatusID` char(2) COLLATE utf8_bin NOT NULL,
  `Publish` char(2) COLLATE utf8_bin NOT NULL,
  `UnitPrice` varchar(20) COLLATE utf8_bin NOT NULL,
  `UnitRent` int(4) NOT NULL,
  `DayAmount` int(2) NOT NULL,
  `Picture` mediumblob NOT NULL,
  `BookDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
