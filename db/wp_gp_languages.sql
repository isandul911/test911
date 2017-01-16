-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE `wp_gp_languages` (
  `id` int(11) NOT NULL,
  `language` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `wp_gp_languages` (`id`, `language`) VALUES
(1, 'United States'),
(2, 'Afghanistan'),
(3, 'Algeria'),
(4, 'Andorra'),
(5, 'Argentina'),
(6, 'Australia'),
(7, 'Bahamas'),
(8, 'Bahrain');

ALTER TABLE `wp_gp_languages`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `wp_gp_languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
