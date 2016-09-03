-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2015 at 10:27 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

CREATE TABLE IF NOT EXISTS `blog_tbl` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descrip` varchar(1000) NOT NULL,
  `datee` varchar(50) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `blog_tbl`
--

INSERT INTO `blog_tbl` (`post_id`, `name`, `email`, `title`, `descrip`, `datee`) VALUES
(1, 'londa', 'londa@gmail.com', '47', 'orem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc dui ante, venenatis eleifend, condimentum vel, tincidunt eu, nisl. Nulla eu augue. Vivamus scelerisque sagittis lore', '12_12_2015'),
(2, 'Suspend', 'Suspend@gmail.com', 'Nul', 'as ante, in luctus est risus ac mi. Mauris in libero eget leo laoreet rhoncus. Nam porta nisi id turpis. Ut ac justo at urna consequat mollis. Ut interdum sem ac justo. Curabitur vestibulum nulla ac nibh. Praesent imperdiet. Morbi lorem sem, pulvinar condimentum, porttitor ultricies, dignissim a, leo. Proin ligula libero, elementum eget, aliquam a, dictum eget, lectus. Etiam diam leo, ullamcorper vel, eleifend sodales, fringilla ac, arcu. Pellentesque', ''),
(3, 'augue', 'augue@gmail.com', 'Mau', 'aesent imperdiet. Morbi lorem sem, pulvinar condimentum, porttitor ultricies, dignissim a, leo. Proin ligula libero, elementum eget, aliquam a, dictum eget, lectus. Etia', '12-12-2015'),
(5, 'terwt', '', 'Mauris in libero eget', 'honcus. Nam porta nisi id turpis. Ut ac justo at urna consequat mollis. Ut interdum sem ac justo. Curabitur vestibulum nulla ac nibh. Praesent imperdiet. Morbi lorem sem, pulvinar condimentum, porttitor ultricies, dignissim a, leo. Proin ligula libero, elementum eget, aliquam a, dictum eget, lectus. Etiam diam leo, ullamcorper vel, eleifend sodales, fringilla ac, arcu. Pellentesque enim elit, lobortis ut, egestas sit amet, imperdiet sed, ant', '12-12-2015'),
(6, '', '', 'Ut interdum se', 'bulum nulla ac nibh. Praesent imperdiet. Morbi lorem sem, pulvinar condimentum, porttitor ultricies, dignissim a, leo. Proin ligula libero, elementum eget, aliquam a, dictum ', '12-12-2015'),
(7, 'author', 'email', 'nterdum se', 'ulum nulla ac nibh. Praesent imperdiet. Morbi lorem sem, pulvinar condimentum, porttitor ultricies, dignissim a, leo. Proin ligula libero, elementum eget, aliquam a, dictum eget, lectus. Etiam diam leo, ullamcorper ', '12-12-2015');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(30) NOT NULL,
  `per_id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `bdate` date NOT NULL,
  `country` varchar(30) NOT NULL,
  `gender` int(3) NOT NULL,
  `terms` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `per_id`, `email`, `phone`, `password`, `bdate`, `country`, `gender`, `terms`) VALUES
(1, 'Mazda', '2147', 'java@gmail.com', '02154', '123', '2015-11-11', 'Bangladesh', 0, 0),
(2, 'Yalanda', '123', 'yalanda@yahoo.com', '21540', '12345', '2015-12-12', 'Cambodia', 0, 0),
(3, 'amet', '45784', 'amet@hotmail.com', '0215485', '12345', '2015-12-06', 'Fiji', 0, 0),
(4, 'Loyal', '787', 'loyal@rocketmail.com', '56487874', '12345', '2015-12-07', 'Denmark', 0, 0),
(5, 'variable', '548', 'variable@gmail.com', '48785', '12345', '2015-12-06', 'Fiji', 0, 0),
(6, 'New one', '1545', 'nw@gmail.com', '0457', '12345', '0000-00-00', 'Bangladesh', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`uid`, `id`, `name`, `age`) VALUES
(1, '13135375', 'Nazmus Shakib', 22),
(7, '435', 'Roy', 55),
(6, '89', 'Fahim12', 77),
(4, '1199', 'Saju', 13),
(5, '3444', 'tamgid', 23);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
