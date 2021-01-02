-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 12:25 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pass`, `name`, `username`, `phone`, `email`, `address`, `city`, `country`, `dob`, `image`) VALUES
(1, '1234', 'nafisur rahman', 'nafis', '01969536098', 'nafisur@gmail.com', '', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `post_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shown` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `text`, `time`, `post_id`, `user_id`, `shown`) VALUES
(1, 'This is a test comment for post 1.', '2020-12-31 02:58:11', 1, 1, 1),
(2, 'This is a test comment for post 2.', '2020-12-31 02:58:11', 2, 1, 1),
(3, 'This is an another test comment for post 1.', '2020-12-31 03:03:46', 1, 2, 1),
(4, 'This is an another test comment for post 1.', '2020-12-31 03:03:46', 1, 2, 0),
(5, 'Happy New Year', '2020-12-31 18:21:21', 3, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `editor`
--

CREATE TABLE `editor` (
  `id` int(11) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `editor`
--

INSERT INTO `editor` (`id`, `pass`, `name`, `phone`, `email`, `address`, `city`, `country`, `dob`, `username`, `gender`, `image`) VALUES
(1, '1234', 'Mridul Hossain', '01234567891', 'mridulhossain522@gmail.com', '58/5 Chand Mohammad road, Thanapara', 'Kushtia', 'Bangladesh', '1998-10-21', 'mridul', 'Male', 'Beard.jpg'),
(4, '1234', 'Mr. Browny Cat', 'XXX-XXXXXXXX', 'mr.cat@catmail.com', NULL, 'Cat City', 'Cat State', '2018-03-06', 'kitty.cat', 'Male', NULL),
(5, '1234', 'Mridul', 'xxxxxxxxxxxx', 'asdas@gmail.com', NULL, 'kst', 'bd', '2020-10-21', 'cat', 'Male', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `shown` tinyint(1) NOT NULL,
  `visibility` tinyint(1) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `text` longtext DEFAULT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `time`, `shown`, `visibility`, `content`, `text`, `user_id`) VALUES
(1, 'test', '2020-12-31 00:50:22', 1, 1, NULL, 'Hello, World! This a test.', 1),
(2, 'test', '2020-12-31 00:51:11', 0, 0, 'show', 'Hello, World! This a test.', 1),
(3, 'Myself', '2020-12-31 18:19:47', 0, 0, '', 'My name is Mridul and I\'m celebrating my new year now.', 2),
(6, 'Today\'s Invention', '2021-01-02 10:07:42', 1, 1, NULL, 'Today we\'ve learnt how we can use CSS in PHP.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `pass`, `name`, `username`, `phone`, `email`, `address`, `city`, `country`, `dob`, `image`) VALUES
(1, '4321', 'Alvy', 'alvy', '01456536098', 'alvy@gmail.com', '123,ss street,Chittagong', 'Dhaka', 'Bangladesh', '2000-11-09', 'trump.png'),
(2, '4444', 'murad', 'murad', '12345678909', 'fgd@gmail.com', 'asgwr', 'Dhaka', 'Bangladesh', '2000-11-23', 'heart.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_category`
--

CREATE TABLE `user_category` (
  `id` int(20) NOT NULL,
  `type` varchar(30) NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `u_id` (`user_id`);

--
-- Indexes for table `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_category`
--
ALTER TABLE `user_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `editor`
--
ALTER TABLE `editor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_category`
--
ALTER TABLE `user_category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `post_id` FOREIGN KEY (`post_id`) REFERENCES `post` (`id`),
  ADD CONSTRAINT `u_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
