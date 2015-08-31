-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2015 at 07:50 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_category_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Publish` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category_id`, `title`, `description`, `user_id`, `Publish`) VALUES
(1, 1, 'Apple a day keeps doctor aways', 'Apple a day keeps doctor aways.Fruits are good for health....', 1, 1),
(2, 1, 'Eat healthy food', 'Eat healthy food daily.', 2, 1),
(3, 2, 'Music is life', 'Music is a moral law. It gives soul to the universe, wings to the mind, flight to the imagination, and charm and gaiety to life and to everything....', 1, 1),
(4, 3, 'Beautiful Nature', 'Nature, in the broadest sense, is the natural, physical, or material world or universe. "Nature" can refer to the phenomena of the physical world, and also to life in general. The study of nature is a large part of science. Although humans are part of nature, human activity is often understood as a separate category from other natural phenomena.', 1, 1),
(5, 4, 'Technology', 'This article is about the use and knowledge of techniques and processes for producing goods and services.', 2, 1),
(6, 2, 'Music makes life beautiful', 'Music makes life beautiful', 1, 0),
(7, 3, 'Nature is beautiful', 'Nature is beautiful', 1, 0),
(8, 5, 'London', 'London is very awesome.', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `description`, `image_name`) VALUES
(1, 'Food', 'blogs on foods', 'food1.png'),
(2, 'Music', 'blogs on Music', 'music.jpg'),
(3, 'Nature', 'blogs on Nature', 'nature.jpg'),
(4, 'Technology', 'blogs on Technologies', 'technology.jpg'),
(5, 'Travel', 'blogs on Travel', 'travel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `author` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `comment`, `author`) VALUES
(1, 1, 'Nice information on Apple.\r\nThanks', 'Guest user'),
(2, 1, 'Nice blog', 'Guest2'),
(3, 1, 'gerfgherh', 'heeh'),
(4, 6, 'nice blog', 'Guest'),
(5, 1, 'gsgsg', 'sgsg'),
(6, 1, 'nice blog ', 'User guest');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type_id` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `user_type_id`) VALUES
(1, 'Ashwini', 'Gadakh', 'AshwiniG', '@shwini123', 1),
(2, 'Priya', 'Bang', 'PriyaB', 'Priya123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `User_types`
--

CREATE TABLE IF NOT EXISTS `User_types` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `User_types`
--

INSERT INTO `User_types` (`id`, `user_type`) VALUES
(1, 'Admin'),
(2, 'Editor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
