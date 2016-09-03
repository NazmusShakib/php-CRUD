-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 04, 2016 at 04:51 AM
-- Server version: 5.7.13-0ubuntu0.16.04.2
-- PHP Version: 7.0.10-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_tbl`
--

CREATE TABLE `blog_tbl` (
  `post_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `descrip` varchar(1000) NOT NULL,
  `datee` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_tbl`
--

INSERT INTO `blog_tbl` (`post_id`, `name`, `email`, `title`, `descrip`, `datee`) VALUES
(1, 'londa', 'londa@gmail.com', '47', 'orem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc dui ante, venenatis eleifend, condimentum vel, tincidunt eu, nisl. Nulla eu augue. Vivamus scelerisque sagittis lore', '12_12_2015'),
(2, 'Suspend', 'Suspend@gmail.com', 'Nul', 'as ante, in luctus est risus ac mi. Mauris in libero eget leo laoreet rhoncus. Nam porta nisi id turpis. Ut ac justo at urna consequat mollis. Ut interdum sem ac justo. Curabitur vestibulum nulla ac nibh. Praesent imperdiet. Morbi lorem sem, pulvinar condimentum, porttitor ultricies, dignissim a, leo. Proin ligula libero, elementum eget, aliquam a, dictum eget, lectus. Etiam diam leo, ullamcorper vel, eleifend sodales, fringilla ac, arcu. Pellentesque', ''),
(3, 'augue', 'augue@gmail.com', 'Mau', 'aesent imperdiet. Morbi lorem sem, pulvinar condimentum, porttitor ultricies, dignissim a, leo. Proin ligula libero, elementum eget, aliquam a, dictum eget, lectus. Etia', '12-12-2015'),
(5, 'terwt', '', 'Mauris in libero eget', 'honcus. Nam porta nisi id turpis. Ut ac justo at urna consequat mollis. Ut interdum sem ac justo. Curabitur vestibulum nulla ac nibh. Praesent imperdiet. Morbi lorem sem, pulvinar condimentum, porttitor ultricies, dignissim a, leo. Proin ligula libero, elementum eget, aliquam a, dictum eget, lectus. Etiam diam leo, ullamcorper vel, eleifend sodales, fringilla ac, arcu. Pellentesque enim elit, lobortis ut, egestas sit amet, imperdiet sed, ant', '12-12-2015'),
(6, '', '', 'Ut interdum se', 'bulum nulla ac nibh. Praesent imperdiet. Morbi lorem sem, pulvinar condimentum, porttitor ultricies, dignissim a, leo. Proin ligula libero, elementum eget, aliquam a, dictum ', '12-12-2015'),
(7, 'author', 'email', 'nterdum se', 'ulum nulla ac nibh. Praesent imperdiet. Morbi lorem sem, pulvinar condimentum, porttitor ultricies, dignissim a, leo. Proin ligula libero, elementum eget, aliquam a, dictum eget, lectus. Etiam diam leo, ullamcorper ', '12-12-2015'),
(8, 'my name', 'nshakib.se@gmil.com', 'condimentum vel, ', '1Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc dui ante, venenatis eleifend, condimentum vel, tincidunt eu, nisl. Nulla eu augue.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc dui ante, venenatis eleifend, condimentum vel, tincidunt eu, nisl. Nulla eu augue.', '-2011'),
(9, 'my name', 'nshakib.se@gmil.com', 'condimentum vel, ', '1Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc dui ante, venenatis eleifend, condimentum vel, tincidunt eu, nisl. Nulla eu augue.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc dui ante, venenatis eleifend, condimentum vel, tincidunt eu, nisl. Nulla eu augue.', '-2011'),
(10, 'my name2', 'nshk@gmail.comaa', '22condimentum vel, 22', '22 ipsum dolor sit amet, consectetuer adipiscing elit. Nunc dui ante, venenatis eleifend, condimentum vel, tincidunt eu, nisl. Nulla eu augue.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc dui ante, venenatis eleifend, condimentum vel, tincidunt eu, nisl. Nulla eu augue. ipsum dolor sit amet, consectetuer adipiscing elit. Nunc dui ante, venenatis eleifend, condimentum vel, tincidunt eu, nisl. Nulla eu augue.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc dui ante, venenatis eleifend, condimentum vel, tincidunt eu, nisl. Nulla eu augue.', '-2011'),
(11, '33my name2', '3nshakib.se@gmil.com', '33condimentum vel, 22', '33 ipsum dolor sit amet, consectetuer adipiscing elit. Nunc dui ante, venenatis eleifend, condimentum vel, tincidunt eu, nisl. Nulla eu augue.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc dui ante, venenatis eleifend, condimentum vel, tincidunt eu, nisl. Nulla eu augue. ipsum dolor sit amet, consectetuer adipiscing elit. Nunc dui ante, venenatis eleifend, condimentum vel, tincidunt eu, nisl. Nulla eu augue.Lorem ipsum ', '-2011'),
(12, '55my name', 'nshk@gmail.comaa9', '99condimentum vel, ', ' 99ipsum dolor sit amet, consectetuer adipiscing elit. Nunc dui ante, venenatis eleifend, condimentum vel, tincidunt eu, nisl. Nulla eu augue.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc dui ante, venenatis eleifend, condimentum vel, tincidunt eu, nisl. Nulla eu augue. ipsum dolor sit amet, consectetuer adipiscing elit. Nunc dui ante, venenatis eleifend, condimentum vel, tincidunt eu, nisl. Nulla eu augue.Lorem ipsum ', '-2011');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `per_id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `bdate` date NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `per_id`, `email`, `gender`, `phone`, `password`, `bdate`, `country`) VALUES
(1, 'Mazda', '2147', 'java@gmail.com', '', '02154', '123', '2015-11-11', 'Bangladesh'),
(2, 'Yalanda', '123', 'yalanda@yahoo.com', '', '21540', '12345', '2015-12-12', 'Cambodia'),
(3, 'amet', '45784', 'amet@hotmail.com', '', '0215485', '12345', '2015-12-06', 'Fiji'),
(4, 'Loyal', '787', 'loyal@rocketmail.com', '', '56487874', '12345', '2015-12-07', 'Denmark'),
(5, 'variable', '548', 'variable@gmail.com', '', '48785', '12345', '2015-12-06', 'Fiji'),
(6, 'New one', '1545', 'nw@gmail.com', '', '0457', '12345', '0000-00-00', 'Bangladesh'),
(7, 'New teow', '1212', 'nshakib.se@gmil.com', 'Male', '1234567899', '1123455', '2016-09-06', 'Fiji');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `uid` int(11) NOT NULL,
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`uid`, `id`, `name`, `age`) VALUES
(7, '435', 'Roy', 55),
(6, '89', 'Fahim12', 77),
(4, '1199', 'Saju', 13),
(5, '3444', 'tamgid', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_tbl`
--
ALTER TABLE `blog_tbl`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
