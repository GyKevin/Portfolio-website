-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 04, 2024 at 07:57 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--
CREATE DATABASE IF NOT EXISTS `portfolio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `portfolio`;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `Title` varchar(45) NOT NULL,
  `Txt` text NOT NULL,
  `Github` text NOT NULL,
  `Image` text NOT NULL,
  PRIMARY KEY (`Title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`Title`, `Txt`, `Github`, `Image`) VALUES
('Snek Game', 'This project is a classic snake game created as an assignment for Bit Academy. While it\'s not heavily optimized, it performs reliably, providing an enjoyable experience with a clean, straightforward design. Unfortunately, the original version of the game is currently offline and may remain that way indefinitely, so the live version is no longer accessible. However, you can still find the source code available in the old branch of the repository.\r\n\r\nThe game logic is primarily crafted using JavaScript and PHP, which handle core functionalities like movement, collision detection, and scoring. Originally, the project featured several additional components, including a login system that allowed users to create accounts and saved highscores, making it possible for players to track and compare their best scores over time.', 'https://github.com/MrPotato-04/snek-game', 'https://raw.githubusercontent.com/MrPotato-04/snek-game/Live/snake-game.jpg'),
('URL-Shortener', 'This project is an open source URL-Shortener originally made as a fullstack project for school. I have since remade it from scratch to make it more accessible. This url-shortener runs purely on PHP and MYSQL.\r\nWhat is a URL-Shortener?\r\nURL shortening is a technique on the World Wide Web in which a Uniform Resource Locator may be made substantially shorter and still direct to the required page. This is achieved by using a redirect which links to the web page that has a long URL.', 'https://github.com/GyKevin/Open-Source-URL-Shortener', 'https://raw.githubusercontent.com/GyKevin/Open-Source-URL-Shortener/main/img/preview.JPG'),
('Antonator', 'Antonator is an extension that changes all google images to a picture of Anton. It is something that i made for fun at school when i had nothing to do because i thought it was funny. The whole thing is written in javascript and it uses very little code to do it\'s job.', 'https://github.com/GyKevin/Antonator', 'https://lh3.googleusercontent.com/F5oij6BFRcyHxvlxIZsZPiu7DqV73wHdhZmidIAlV95HicrdVt5dTJMpE78cI9rHD-jewoZerhx32DBQRJRmP4Lu=s1280-w1280-h800'),
('Nerdy Gadgets', 'This project is an online webstore that my classmates and I created as a group assignment for school. Designed specifically for a fictional company called Nerdy Gadgets this webstore is a fully functional e-commerce platform, featuring a range of essential components typical of modern online stores.\r\n\r\nThe backend of the webstore is primarily built with PHP, which drives the core functionalities, including managing product data, handling user sessions, and processing orders.', 'https://github.com/GyKevin/NerdyGadgets', 'https://raw.githubusercontent.com/GyKevin/NerdyGadgets/main/image/website.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
