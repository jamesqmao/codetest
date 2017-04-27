-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 10:29 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `code_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL,
  `type` varchar(30) NOT NULL DEFAULT 'hot',
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `type`, `title`, `content`, `create_date`) VALUES
(1, 'hot', 'I invited Ann Coulter to speak at UC Berkeley.', 'The administration, student groups including ours, external resistance groups and the media all made mistakes that need to be corrected. Fundamentally, though, the system of political dialogue and debate is broken, not just on this campus, but across the nation.', '2017-04-26 15:08:15'),
(2, 'new', 'The administration, student groups i', 'The administration, student groups including ours, external resistance groups and the media all made mistakes that need to be corrected. Fundamentally, though, the system of political dialogue and debate is broken, not just on this campus, but across the nation.', '2017-04-26 15:08:15'),
(3, 'hot', 'not just on this campus, but across the nation.', 'The administration, student groups including ours, external resistance groups and the media all made mistakes that need to be corrected. Fundamentally, though, the system of political dialogue and debate is broken, not just on this campus, but across the nation.', '2017-04-26 16:27:37'),
(4, 'new', 'New Fundamentally, though, the system of political ', 'The administration, student groups including ours, external resistance groups and the media all made mistakes that need to be corrected. Fundamentally, though, the system of political dialogue and debate is broken, not just on this campus, but across the nation.', '2017-04-26 16:27:37'),
(5, 'new', 'not just on this campus, but across the nation.', 'The administration, student groups including ours, external resistance groups and the media all made mistakes that need to be corrected. Fundamentally, though, the system of political dialogue and debate is broken, not just on this campus, but across the nation.', '2017-04-27 11:36:18'),
(6, 'new', 'Fundamentally, though, the system of political ', 'The administration, student groups including ours, external resistance groups and the media all made mistakes that need to be corrected. Fundamentally, though, the system of political dialogue and debate is broken, not just on this campus, but across the nation.', '2017-04-27 11:36:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);
