-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 06:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engagehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Password`) VALUES
(1, 'rahul', 'rahul');

-- --------------------------------------------------------

--
-- Table structure for table `askquestion`
--

CREATE TABLE `askquestion` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `askquestion`
--

INSERT INTO `askquestion` (`id`, `userid`, `title`, `description`, `category`) VALUES
(6, 11, 'title', '0', 'sports'),
(7, 11, '', '0', 'sports'),
(8, 11, 'health ', '0', 'healthcare'),
(9, 11, 'where is virat kohli', 'will virat kohli come back', 'sports'),
(10, 11, 'covid', 'will covid be prevented', 'healthcare'),
(11, 11, 'title', 'description', 'Politics');

-- --------------------------------------------------------

--
-- Table structure for table `communityhall`
--

CREATE TABLE `communityhall` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(50) NOT NULL,
  `contactPersonName` varchar(50) NOT NULL,
  `contactPersonNo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `communityhall`
--

INSERT INTO `communityhall` (`Id`, `name`, `address`, `state`, `city`, `pincode`, `contactPersonName`, `contactPersonNo`) VALUES
(2, 'Geetanjali Hall', 'Near, Jalaram Chowk, Geeta Nagar Society, Bhakti Nagar', 'Guajarat', 'Rajkot', 360001, 'Piyush Parmar', '9974659531'),
(6, 'padam banquet halls', 'near airport road', 'gujarat', 'jamnagar', 361001, 'Chirag Mandavia', '1234567890'),
(21, 'citypoint', 'near airportroad', 'gujrat', 'ahamadabad', 36010, 'rahul', '498645313554'),
(22, 'shreeji hall', 'near amusement park', 'gujarat', 'jamnagar', 36001, 'Mukund Kanzariya', '59896453135'),
(23, 'vipul greens', 'near airportroad', 'Gujarat', 'ahmedabaad', 361001, 'Chirag Mandavia', '498645313554'),
(24, 'Padam Banquet Halls', '', 'Gujarat', 'Jamnagar', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `conferencehall`
--

CREATE TABLE `conferencehall` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `pincode` varchar(250) NOT NULL,
  `contactPersonName` varchar(250) NOT NULL,
  `contactPersonNo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conferencehall`
--

INSERT INTO `conferencehall` (`id`, `name`, `address`, `city`, `state`, `pincode`, `contactPersonName`, `contactPersonNo`) VALUES
(1, 'kadam conference hall', 'near aiport road opp. tea post', 'jamnagar', 'gujarat', '361001', 'Rahul Mehta', '9409479818');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `number` int(11) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `number`, `message`) VALUES
(1, 'Rahul Mehta', 'rahul123@gmail.com', 2147483647, 'heyy my name is rahul mehta');

-- --------------------------------------------------------

--
-- Table structure for table `kitchenarea`
--

CREATE TABLE `kitchenarea` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `contactPersonName` varchar(250) NOT NULL,
  `contactPersonNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kitchenarea`
--

INSERT INTO `kitchenarea` (`id`, `name`, `address`, `city`, `state`, `pincode`, `contactPersonName`, `contactPersonNo`) VALUES
(1, 'kitchen heaven', 'near jail road', 'goa', 'maharashtra', '361001', 'Chirag Mandavia', 2147483647),
(3, 'kalpana hall', 'near teen batti', 'jamnagar', 'gujarat', '361001', 'Rahul Mehta', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profilephoto` varchar(255) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `name`, `gender`, `age`, `email`, `password`, `profilephoto`, `location`) VALUES
(5, 'mukund', '', 0, 'kumund@gmail.com', '12356', '', ''),
(8, 'chirag', '', 19, '123@gmail.com', '123456', '', ''),
(9, 'piyush', '', 19, '234@gmail.com', '123', '', ''),
(10, 'rahul', 'Male', 20, 'rahul123@gmail.com', 'rahul', '', 'india'),
(11, 'mukund kanzariya', 'male', 20, 'mukund@gmail.com', 'mukund', '1707537009-2.jpg', 'India'),
(13, 'test1', 'Male', 12, 'test1@gmail.com', '123456', '1707558961-author-1.jpg', 'Russia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `askquestion`
--
ALTER TABLE `askquestion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK` (`userid`);

--
-- Indexes for table `communityhall`
--
ALTER TABLE `communityhall`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `conferencehall`
--
ALTER TABLE `conferencehall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchenarea`
--
ALTER TABLE `kitchenarea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `askquestion`
--
ALTER TABLE `askquestion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `communityhall`
--
ALTER TABLE `communityhall`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `conferencehall`
--
ALTER TABLE `conferencehall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kitchenarea`
--
ALTER TABLE `kitchenarea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `askquestion`
--
ALTER TABLE `askquestion`
  ADD CONSTRAINT `FK` FOREIGN KEY (`userid`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
