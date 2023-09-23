-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 02:39 AM
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
-- Database: `gymnsb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`) VALUES
(6, 'fred', '$2y$10$KPrwDmkN3V16Lp5H0SSQ/eufvSujvM3PnGlVLtoXt9f.IkUL4EJ9e', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `message`, `date`) VALUES
(9, 'Renovation Going On...', '2020-04-04'),
(11, 'dsdasd', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `curr_date` text NOT NULL,
  `curr_time` text NOT NULL,
  `present` tinyint(4) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `user_id`, `curr_date`, `curr_time`, `present`, `time_in`, `time_out`) VALUES
(52, '33', '2022-10-16', '', 1, '12:25:36', '12:26:14'),
(53, '33', '2022-10-24', '', 1, '11:14:52', '11:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `id` int(11) NOT NULL,
  `Exercises` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`id`, `Exercises`) VALUES
(1, 'Chest'),
(2, 'Triceps'),
(3, 'Biceps'),
(4, 'Legs'),
(5, 'Back');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `services` varchar(50) NOT NULL,
  `amount` int(100) NOT NULL,
  `paid_date` date NOT NULL,
  `p_year` int(11) NOT NULL,
  `plan` varchar(100) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `attendance_count` int(100) NOT NULL,
  `ini_weight` int(100) NOT NULL DEFAULT 0,
  `curr_weight` int(100) NOT NULL DEFAULT 0,
  `ini_bodytype` varchar(50) NOT NULL,
  `curr_bodytype` varchar(50) NOT NULL,
  `progress_date` date NOT NULL,
  `reminder` int(11) NOT NULL DEFAULT 0,
  `trainer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`user_id`, `fname`, `mname`, `lname`, `email`, `password`, `gender`, `date`, `services`, `amount`, `paid_date`, `p_year`, `plan`, `address`, `contact`, `status`, `attendance_count`, `ini_weight`, `curr_weight`, `ini_bodytype`, `curr_bodytype`, `progress_date`, `reminder`, `trainer_id`) VALUES
(33, 'Mark Rod ', 'P', 'Cadayong', 'markrod@gmail.com', '$2y$10$tN/cgT.12X9IMevZPMq2N.IkvcD9.pq6dZyKZhWmzId7Ex05EAXc6', 'Male', '2022-10-15', 'Select Service', 55, '2022-10-26', 2022, '1', 'markrod', '0980890', 'Active', 8, 50, 60, '', '', '0000-00-00', 0, 10),
(36, 'Frederick ', 'S', 'Calaunan', 'Frederick', '$2y$10$yCbZfOD6R8jSilAwfJuI7eiEypc3Dl.GWkVtv7UOf8n.hKFmUbdgC', 'Male', '2022-10-24', 'Cardio', 200, '2022-10-24', 2022, '1', 'Calasiao,Pangasinan', '0930733695', 'Active', 0, 0, 0, '', '', '0000-00-00', 0, 10),
(37, 'Bryan ', 'A', 'Abulencia', 'bryan@gmail.com', '$2y$10$bMqWbuapV8mS1.T2HU8KFe90Rb/Re7fxq1kNXK93GVrFZAbpn2Kyu', 'Male', '2022-10-26', 'Cardio', 40, '2022-10-26', 2022, '1', 'Calasiao', '090909090', 'Active', 0, 0, 0, '', '', '0000-00-00', 0, 10),
(38, 'Kristelle Irish', 'K', 'De Guzman', 'kristelle@gmail.com', '$2y$10$qiTjYilj6gOjPwhAYkRC.uO8NoTygSp5Ui3qVFl3KO2nNFjd6N5K6', 'Male', '2022-10-31', 'Cardio', 60, '2022-10-31', 2022, '3', 'SC', '09897865', 'Active', 0, 0, 0, '', '', '0000-00-00', 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `status` text NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `user_id` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` int(10) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`user_id`, `password`, `email`, `fname`, `mname`, `lname`, `address`, `designation`, `gender`, `contact`, `status`) VALUES
(10, '$2y$10$Zzgihqq6OXLNlyhRGBGsueU9e96gxEWoSCn2iwYiLY1O21uNK5gR2', 'pangetmo@gmail.com', 'joel', 'L', 'De Guzman', 'Coliling natural', 'Trainer', 'Male', 2147483647, 'Active'),
(11, '$2y$10$PCqRcUFLuPr6Wu/4uh.e1e9NmiKTeltAPLSGlvKBkTecwUY5.An8a', 'frederick@gmail.com', 'frederick', 'k', 'Calaunan', 'Calasiao', 'Trainer', 'Male', 9098098, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `task_status` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(30) NOT NULL,
  `start_datetime` date NOT NULL,
  `end_datetime` date NOT NULL,
  `user_id` int(7) NOT NULL,
  `workout_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `task_status`, `title`, `description`, `start_datetime`, `end_datetime`, `user_id`, `workout_id`, `date`) VALUES
(67, 'On Going', 'Day 1', 'push bic100,', '2022-11-15', '2022-11-17', 33, 1, '2022-11-07'),
(68, 'On Going', 'Day 1', 'push up 100,', '2022-11-09', '2022-11-08', 36, 1, '2022-11-07'),
(69, 'On Going', 'Day 1', 'push up 100,', '2022-11-23', '2022-11-23', 33, 1, '2022-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

CREATE TABLE `workout` (
  `id` int(11) NOT NULL,
  `task` varchar(50) NOT NULL,
  `exercises` varchar(50) NOT NULL,
  `workout_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`id`, `task`, `exercises`, `workout_id`) VALUES
(15, 'push bic100', 'Basic', 1),
(16, 'push up 100', 'Intermidiate', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `reminder`
--
ALTER TABLE `reminder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workout`
--
ALTER TABLE `workout`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `reminder`
--
ALTER TABLE `reminder`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `workout`
--
ALTER TABLE `workout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
