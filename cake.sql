-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2015 at 03:40 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `sl_no` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=Inactive, 1=Active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `sl_no`, `status`) VALUES
(1, 'chinu', 'chinmay235@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 1),
(2, 'sanjib', 'psanjib.tutu@gmail.com', '7e7d12ba9c4949ebf1013c0804df76b0', 1, 1),
(3, 'aruna_tripathy', 'arunatripathy@gmail.com', 'd3a28ff91cb58754c40f63161ae5e028', 4, 1),
(4, 'sradhanjali', 'sradhanjali_behera@gmail.com', '574d0b56aa277b06a435f66a351fa281', 5, 1),
(5, 'Debasish', 'dasdeba00@gmail.com', '65ffadfd467d72791a977d6e63c7d099', 3, 1);
