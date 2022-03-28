-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 07:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pnc_facebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentid` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentid`, `content`, `postid`, `userid`) VALUES
(55, 'present simple', 51, 5),
(56, 'present simplefff', 49, 5),
(57, 'bro chhaiya kh 168', 48, 5);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postid` int(11) NOT NULL COMMENT 'auto_increment',
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `description`, `image`, `userid`) VALUES
(41, 'good night all friends', 'dynamic-wang-imzzCOaxrMc-unsplash.jpg', 2),
(42, 'I\'m sad', 'ezechiel-kouassi-cJZvhZ1CXgE-unsplash.jpg', 2),
(43, 'Good fresh air cool', 'eric-muhr-I-VfAZLv22o-unsplash.jpg', 2),
(44, 'Hello guy', 'sarah-dorweiler-QeVmJxZOv3k-unsplash.jpg', 2),
(45, 'good morning boy', 'andrea-de-santis-rWSKS_GN1HM-unsplash.jpg', 2),
(46, 'look so cool', 'lala-azizli-9XCKhBNgD9g-unsplash.jpg', 2),
(47, 'Hey boy!', 'ithiel-papatua-rTprhV0q2vg-unsplash.jpg', 2),
(48, 'Hello friends', 'derek-owens-WRLaQAABNrg-unsplash.jpg', 2),
(49, 'good bye', 'dynamic-wang-imzzCOaxrMc-unsplash.jpg', 2),
(51, 'Be inlove', 'angelina-and-antonis-antoniou-tVZZPPa_jKI-unsplash.jpg', 2),
(52, 'hello', 'andrew-lakersnoi-hq6EG8GdnZw-unsplash.jpg', 2),
(53, 'good boyffff', 'lala-azizli-9XCKhBNgD9g-unsplash.jpg', 2),
(55, 'eh good night', 'sour-moha-fFEX3kFoe00-unsplash.jpg', 2),
(56, 'ddd', 'windows-eCkpDZi-vQ4-unsplash.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL COMMENT 'auto_increment',
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(15) NOT NULL,
  `country` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `gender`, `email`, `password`, `country`) VALUES
(1, 'soklim', 'hin', 'Male', 'soklim.hin@student.passerellesnumeriques.org', '11', 'Cambodia'),
(2, 'Bro Chhaiya', 'KH', 'Male', 'Chhaiya@gmail.com', 'tt', 'Cambodia'),
(3, 'meta', 'lim', 'Femal', 'meta@gmail.com', '11', 'Cambodia'),
(4, 'goo', 'lo', 'Male', 'goo@gmail.com', '11lim2244', 'Thailand'),
(5, 'pig', 'mey', 'Male', 'mey@gmail.com', '11', 'Cambodia'),
(7, 'chan', 'sok', 'Male', 'sok@gmail.com', '22', 'Cambodia'),
(8, 'dd', 'ddd', 'Femal', 'd@gmail.com', '11', 'Cambodia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentid`),
  ADD KEY `comments_ibfk_1` (`postid`),
  ADD KEY `comments_ibfk_2` (`userid`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD KEY `userid` (`userid`),
  ADD KEY `postid` (`postid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `posts_ibfk_1` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto_increment', AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto_increment', AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`postid`) REFERENCES `posts` (`postid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`postid`) REFERENCES `posts` (`postid`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
