-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 01:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `code` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `quality` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `id` int(20) NOT NULL,
  `version` int(11) NOT NULL,
  `cost` int(20) NOT NULL,
  `withdrawn` int(20) NOT NULL,
  `info` varchar(255) NOT NULL,
  `dop` date NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lend`
--

CREATE TABLE `lend` (
  `memberID` int(11) DEFAULT NULL,
  `bookCode` int(11) DEFAULT NULL,
  `borrowDate` date NOT NULL,
  `dueDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lend`
--

INSERT INTO `lend` (`memberID`, `bookCode`, `borrowDate`, `dueDate`) VALUES
(1, 912837465, '2023-03-29', '2023-04-08'),
(21, 912837465, '2023-07-29', '2023-08-06'),
(21, 912837465, '2023-07-29', '2023-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `occupation` varchar(50) NOT NULL,
  `dor` date NOT NULL,
  `dob` date NOT NULL,
  `gender` char(6) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `fullName`, `address`, `city`, `phone`, `email`, `state`, `u_id`, `occupation`, `dor`, `dob`, `gender`, `image`) VALUES
(1, 'joy kim', 'p.o.box 32', 'dar es salaam', 987654321, 'joy@gmail.com', 'Tanzania', 1, 'student', '2023-03-29', '2001-05-02', 'female', 'Snapchat-855824830.jpg'),
(2, 'fred', 'p.o.box 30', 'arusha', 123456789, 'fred@gmail.com', 'Tanzania', 2, 'student', '2023-03-29', '1997-01-01', 'male', 'scv20201114_212800.jpeg'),
(3, 'james', 'p.o.box 45', 'moshi', 987654321, 'jay@gmail.com', 'Tanzania', 3, 'student', '2023-03-30', '2000-10-26', 'male', 'scv20210311_192742.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`name`, `email`, `contact`, `comment`) VALUES
('joy kim', 'joy@gmail.com', 987654321, 'very nice.'),
('joy kim', 'joykim', 0, ''),
('JEYC KIM', 'kimjeyc04@gmail.com', 765530928, 'i do like your work');

-- --------------------------------------------------------

--
-- Table structure for table `returnbook`
--

CREATE TABLE `returnbook` (
  `memberId` int(11) DEFAULT NULL,
  `bookCode` int(11) DEFAULT NULL,
  `returnDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(8) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userName`, `email`, `password`, `phone`) VALUES
(1, 'joy', 'joy@gmail.com', 123, 987654321),
(2, 'fred', 'fred@gmail.com', 234, 987654321),
(3, 'james', 'jay@gmail.com', 567, 987654321);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
