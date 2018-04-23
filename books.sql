-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 22, 2018 at 05:24 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezhalha`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(175) COLLATE utf8_unicode_ci NOT NULL,
  `pdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rate` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `pdate`, `rate`, `price`, `image`) VALUES
(1, 'Warcross', 'Marie Lu ', '2018-04-21 15:25:13', '4.20', '25.50', 'https://images.gr-assets.com/books/1489081682l/29385546.jpg'),
(2, 'Windwitch', ' Susan Dennard', '2018-04-21 15:53:22', '4.00', '20.25', 'https://images.gr-assets.com/books/1462296317l/29939390.jpg'),
(3, 'Hunted', 'Meagan Spooner', '2018-04-21 15:57:12', '3.93', '15.99', 'https://images.gr-assets.com/books/1467052649l/24485589.jpg'),
(4, 'Eliza and Her Monsters', 'Francesca Zappia', '2018-04-21 15:57:12', '4.29', '30.99', 'https://images.gr-assets.com/books/1476994065l/31931941.jpg'),
(5, 'Flame in the Mist', 'Renee Ahdieh ', '2018-04-21 15:58:23', '3.95', '14.25', 'https://images.gr-assets.com/books/1476724612l/23308087.jpg'),
(6, 'Waking Gods', 'Sylvain Neuvel ', '2018-04-21 16:00:01', '4.10', '18.25', 'https://images.gr-assets.com/books/1462736382l/30134847.jpg'),
(7, 'Into the Water', 'Paula Hawkins ', '2018-04-21 16:01:01', '3.53', '12.50', 'https://images.gr-assets.com/books/1494055413l/33151805.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
