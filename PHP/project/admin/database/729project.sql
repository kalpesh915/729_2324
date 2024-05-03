-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2024 at 05:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `729project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `userid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`userid`, `fname`, `lname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'User', 'admin@project.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2024-05-02 02:13:15', '2024-05-03 02:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logid` int(11) NOT NULL,
  `logtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(128) NOT NULL,
  `logmessage` varchar(1024) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`logid`, `logtime`, `email`, `logmessage`, `status`) VALUES
(1, '2024-05-02 02:30:50', 'admin@project.com', 'Login Successfully', 1),
(2, '2024-05-02 02:31:05', 'info@vishaluniform.com', 'Invalid Login Attempt', 1),
(3, '2024-05-02 02:31:23', 'admin@project.com', 'Invalid Login Attempt', 1),
(4, '2024-05-02 02:31:42', 'admin@project.com', 'Login Successfully', 1),
(5, '2024-05-02 02:39:21', 'admin@project.com', 'Logout Successfully', 1),
(6, '2024-05-02 02:39:41', 'admin@project.com', 'Login Successfully', 1),
(7, '2024-05-02 02:39:47', 'admin@project.com', 'Logout Successfully', 1),
(8, '2024-05-02 02:40:06', 'admin@project.com', 'Login Successfully', 1),
(9, '2024-05-02 03:12:03', 'admin@project.com', 'Logout Successfully', 1),
(10, '2024-05-03 02:14:22', 'admin@project.com', 'Login Successfully', 1),
(11, '2024-05-03 02:39:01', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(12, '2024-05-03 02:39:14', 'admin@project.com', 'Password Changes', 1),
(13, '2024-05-03 02:39:32', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(14, '2024-05-03 02:39:43', 'admin@project.com', 'Invalid Attempt of Change Password', 1),
(15, '2024-05-03 02:39:59', 'admin@project.com', 'Password Changes', 1),
(16, '2024-05-03 03:20:04', 'admin@project.com', 'Logout Successfully', 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `senderemail` varchar(128) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `city` varchar(50) NOT NULL,
  `subject` varchar(512) NOT NULL,
  `message` varchar(2048) NOT NULL,
  `messagetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageid`, `fname`, `lname`, `senderemail`, `phone`, `city`, `subject`, `message`, `messagetime`, `status`) VALUES
(1, 'Demo', 'Text', 'demo@gmail.com', '9966332211', 'rajkot', 'Testing', 'Welcome to testing', '2024-05-03 02:48:20', 1),
(2, 'another text', 'testing', 'demo@gmail.com', '9966554411', 'rajkot', 'Testing ', 'Sample Message', '2024-05-03 02:48:20', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
