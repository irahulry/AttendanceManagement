-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2020 at 02:24 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10914483_school`
--
CREATE DATABASE IF NOT EXISTS `id10914483_school` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id10914483_school`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `sno` text NOT NULL,
  `date` text NOT NULL,
  `lecture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `sno`, `date`, `lecture`) VALUES
(200, '1', '2019-09-01', '0'),
(201, '1', '2019-09-02', '0'),
(202, '1', '2019-09-03', '0'),
(203, '1', '2019-09-04', '0'),
(204, '2', '2019-09-01', '3'),
(205, '2', '2019-09-02', '7'),
(206, '2', '2019-09-03', '7'),
(207, '2', '2019-09-04', '7'),
(208, '3', '2019-09-01', '7'),
(209, '3', '2019-09-02', '7'),
(210, '3', '2019-09-03', '7'),
(211, '3', '2019-09-04', '7'),
(212, '4', '2019-09-01', '7'),
(213, '4', '2019-09-02', '7'),
(214, '4', '2019-09-03', '7'),
(215, '4', '2019-09-04', '7'),
(216, '5', '2019-09-01', '7'),
(217, '5', '2019-09-02', '7'),
(218, '5', '2019-09-03', '7'),
(219, '5', '2019-09-04', '7'),
(220, '6', '2019-09-01', '7'),
(221, '6', '2019-09-02', '7'),
(222, '6', '2019-09-03', '7'),
(223, '6', '2019-09-04', '7'),
(224, '7', '2019-09-01', '7'),
(225, '7', '2019-09-02', '7'),
(226, '7', '2019-09-03', '7'),
(227, '7', '2019-09-04', '7'),
(228, '8', '2019-09-01', '3'),
(229, '8', '2019-09-02', '7'),
(230, '8', '2019-09-03', '7'),
(231, '8', '2019-09-04', '7'),
(232, '9', '2019-09-01', '3'),
(233, '9', '2019-09-02', '3'),
(234, '9', '2019-09-03', '7'),
(235, '9', '2019-09-04', '7'),
(236, '10', '2019-09-01', '3'),
(237, '10', '2019-09-02', '3'),
(238, '10', '2019-09-03', '7'),
(239, '10', '2019-09-04', '7'),
(240, '11', '2019-09-01', '3'),
(241, '11', '2019-09-02', '3'),
(242, '11', '2019-09-03', '7'),
(243, '11', '2019-09-04', '7');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `rollno` text NOT NULL,
  `name` text NOT NULL,
  `subject` text NOT NULL,
  `complaint` text NOT NULL,
  `seen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `rollno`, `name`, `subject`, `complaint`, `seen`) VALUES
(1, '180070800011', 'Anuj saini', 'sdf', 'sdf', 'unseen'),
(2, '180070800011', 'Anuj saini', 'sdfsd', 'sdf', 'unseen'),
(3, '180070800011', 'Anuj saini', 'sdfsdf', 'sdf', 'unseen'),
(4, '180070800011', 'Anuj saini', '', '', 'unseen'),
(5, '180070800011', 'Anuj saini', 'dsf', '', 'unseen');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `receiver_id` text NOT NULL,
  `sender_id` text NOT NULL,
  `msg` text NOT NULL,
  `seen` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `receiver_id`, `sender_id`, `msg`, `seen`, `created`) VALUES
(61, '1', '100', 'hiii', 'unseen', '2019-09-17 20:15:43'),
(62, '2', '100', 'hiii', 'unseen', '2019-09-17 20:15:49'),
(63, '3', '100', 'hii', 'unseen', '2019-09-17 20:15:55'),
(64, '1', '100', 'hii', 'unseen', '2019-09-17 20:16:01'),
(65, '2', '100', 'hii', 'unseen', '2019-09-17 20:16:07'),
(66, '8', '100', 'hiii', 'unseen', '2019-09-23 19:18:00'),
(67, 'admin', '8', 'hiii', 'unseen', '2019-09-23 07:00:00'),
(68, 'admin', '8', '', 'unseen', '2019-09-23 07:00:00'),
(69, 'admin', '8', '', 'unseen', '2019-09-23 07:00:00'),
(70, 'admin', '8', '', 'unseen', '2019-09-23 07:00:00'),
(71, 'admin', '8', '', 'unseen', '2019-09-23 07:00:00'),
(72, 'admin', '8', '', 'unseen', '2019-09-23 07:00:00'),
(73, 'admin', '8', 'sdfsfsdf', 'unseen', '2019-09-23 07:00:00'),
(74, 'admin', '8', 'sdfsdfsdf', 'unseen', '2019-09-23 07:00:00'),
(75, 'admin', '8', 'sdfsdf', 'unseen', '2019-09-23 07:00:00'),
(76, 'admin', '8', 'dfgdfg', 'unseen', '2019-09-23 07:00:00'),
(77, 'admin', '8', 'dfgdfg', 'unseen', '2019-09-23 07:00:00'),
(78, 'admin', '8', 'dfgdfg', 'unseen', '2019-09-23 07:00:00'),
(79, '8', 'admin', 'hiii', 'unseen', '2019-09-23 20:10:00'),
(80, 'admin', '8', 'dsf', 'unseen', '2019-09-23 07:00:00'),
(81, 'admin', '8', 'sdf', 'unseen', '2019-09-23 07:00:00'),
(82, 'admin', '8', 'sdf', 'unseen', '2019-09-23 07:00:00'),
(83, 'admin', '8', 'sdfsdf', 'unseen', '2019-09-23 07:00:00'),
(84, 'admin', '8', 'sdf', 'unseen', '2019-09-23 07:00:00'),
(85, 'admin', '8', 'hiii', 'unseen', '2019-09-23 07:00:00'),
(86, 'admin', '2', 'Hii', 'unseen', '2019-09-23 00:00:00'),
(87, 'admin', '2', 'Hii', 'unseen', '2019-09-24 00:00:00'),
(88, 'admin', '2', 'Hello', 'unseen', '2019-09-24 00:00:00'),
(89, 'admin', '2', 'Bihari', 'unseen', '2019-09-24 00:00:00'),
(90, 'admin', '2', 'Gggggggggg', 'unseen', '2019-09-25 00:00:00'),
(91, 'admin', '2', 'To ab', 'unseen', '2019-10-28 00:00:00'),
(92, 'admin', '2', 'Harami', 'unseen', '2019-11-10 00:00:00'),
(93, 'admin', '2', 'Bass harami', 'unseen', '2019-11-10 00:00:00'),
(94, 'admin', '2', 'Jai ho', 'unseen', '2020-01-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `subject`, `message`, `date`) VALUES
(1, 'asdjasdjasdhiaosdhasudaoisdhasudadihadhasduiasdasdasdasd', 'fsjdhaskjdasdasdasdashdgasdasuidysdyasdyasudasidasdui', '9-01-1902'),
(2, 'rahul', 'fsjdhaskjdasdasd', '9-01-1902'),
(3, 'rahul', 'dsfsdfsdf', '2019-09-19'),
(4, 'sdfsdf', 'asd', '2019-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `S_No` text NOT NULL,
  `Roll_No` text NOT NULL,
  `Student_name` text NOT NULL,
  `profileimg` text NOT NULL,
  `Address` text NOT NULL,
  `fatherno` text NOT NULL,
  `phoneno` text NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `S_No`, `Roll_No`, `Student_name`, `profileimg`, `Address`, `fatherno`, `phoneno`, `fname`, `mname`) VALUES
(16, '1', '180070800001', 'Abhay singh gautam', 'user.png', '', '', '', '', ''),
(17, '2', '180070800003', 'Abhishek', 'user.png', 'Barrli', '000000000', 'Pppppppppp', '?????????', '?????????'),
(18, '3', '180070800004', 'Akash Raghav', 'user.png', 'f', '', '', '', ''),
(19, '4', '180070800005', 'Aman', 'user.png', '', '', '', '', ''),
(20, '5', '180070800006', 'Amisha', 'user.png', '', '', '', '', ''),
(21, '6', '180070800008', 'Amit', 'user.png', '', '', '', '', ''),
(22, '7', '180070800009', 'Amresh Yadav', 'user.png', '', '', '', '', ''),
(23, '8', '180070800011', 'Anuj saini', 'user.png', '', '', '', '', ''),
(24, '9', '180070800013', 'Bhawook', 'user.png', '', '', '', '', ''),
(25, '10', '180070800014', 'Deepak', 'user.png', '', '', '', '', ''),
(26, '11', '180070800015', 'Gouarav', 'user.png', '', '', '', '', ''),
(28, 'fghghf', '1800708000', 'fghfghfghfgh', 'user.png', '', '', '', '', ''),
(29, 'sdfsdf', '1800708000', 'sdfsfsdf', 'user.png', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available'),
(30, 'sadasdas', '1800708000', 'asdasdasd', 'user.png', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available'),
(31, 'asd', '1800708000', 'molo', 'user.png', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available'),
(32, 'dsfdsf', '1800708000', 'sdfsdfsdf', 'user.png', 'Not available', 'Not available', 'Not available', 'Not available', 'Not available');

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE `total` (
  `total` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`total`) VALUES
('28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `rollno` text NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `rollno`, `password`, `status`, `code`) VALUES
(1, '180070800003', '60b732f0ff1de83856f92be9875aff2d', 'verified', '601010'),
(2, 'sdf', 'sdfsdf', 'pending', 'r456456'),
(3, '180070800001', 'asdasdasdasd', 'pending', '357519'),
(4, 'sdfasd', 'a8f5f167f44f4964e6c998dee827110c', 'pending', '771374'),
(5, '180070800005', '60b732f0ff1de83856f92be9875aff2d', 'pending', '747698'),
(6, '18007080002', '60b732f0ff1de83856f92be9875aff2d', 'verified', '850915'),
(7, '18007080008', '60b732f0ff1de83856f92be9875aff2d', 'verified', '511630'),
(8, '180070800011', '439ed537979d8e831561964dbbbd7413', 'verified', '958554'),
(9, 'Eyeyeyegeg', 'eed434b498c2a7fa0155eebd75e7d09c', 'pending', '193229'),
(10, 'Rahul', '288871e30b037520bdb4e67599f5060c', 'pending', '210698'),
(11, '180070800031', 'c4f4b2eb6d63dd4dd8afed001c61c956', 'pending', '372807');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
