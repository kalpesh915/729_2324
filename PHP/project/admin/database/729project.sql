-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 05:19 AM
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
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `applicationid` int(11) NOT NULL,
  `fname` varchar(64) NOT NULL,
  `lname` varchar(64) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dateofbirth` date NOT NULL,
  `jobposition` varchar(128) NOT NULL,
  `education` varchar(512) NOT NULL,
  `experience` varchar(512) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `emailaddress` varchar(128) NOT NULL,
  `address` varchar(512) NOT NULL,
  `coverlatter` varchar(2048) NOT NULL,
  `resumepath` varchar(512) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(128) NOT NULL,
  `categoryclassname` varchar(128) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(11) NOT NULL,
  `contactperson` varchar(64) NOT NULL,
  `phone1` varchar(20) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `email1` varchar(128) NOT NULL,
  `email2` varchar(128) NOT NULL,
  `address` varchar(1024) NOT NULL,
  `googlemap` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `contactperson`, `phone1`, `phone2`, `email1`, `email2`, `address`, `googlemap`) VALUES
(1, 'Yadav Yagnik', '9966332211', '9632147850', 'yagnik@gmail.com', 'yagnik@yahoo.com', 'Aum Nagar', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6003878368315!2d70.7786052746219!3d22.293122443156776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca246c0ccfc7%3A0x7ac4068b39bb6418!2sBAPS%20Swaminarayan%20mandir%20Sant%20Ashram!5e0!3m2!1sen!2sin!4v1715998907220!5m2!1sen!2sin');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faqid` int(11) NOT NULL,
  `question` varchar(512) NOT NULL,
  `answer` varchar(2048) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `faqtime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faqid`, `question`, `answer`, `status`, `faqtime`) VALUES
(3, 'New Question 2', 'New Answer 2', 1, '2024-05-09 02:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageid` int(11) NOT NULL,
  `imagetitle` varchar(128) NOT NULL,
  `imagedescription` varchar(512) NOT NULL,
  `imagepath` varchar(512) NOT NULL,
  `imagetype` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(16, '2024-05-03 03:20:04', 'admin@project.com', 'Logout Successfully', 1),
(17, '2024-05-03 11:11:28', 'admin@project.com', 'Login Successfully', 1),
(18, '2024-05-03 11:13:35', 'admin@project.com', 'Logout Successfully', 1),
(19, '2024-05-06 02:17:10', 'admin@project.com', 'Login Successfully', 1),
(20, '2024-05-06 02:39:04', 'admin@project.com', 'Meta Details Updated to : demo, text, for, meta, keywords, of, website, for meta tags, with php, this is basic example of meta tags, G-YS3ZLEG4S6', 1),
(21, '2024-05-06 03:00:29', 'admin@project.com', 'Socail Media Links Updated to :  https://www.facebook.com, https://www.twitter.com, https://www.instagram.com, https://www.whatsapp.com, https://www.telegram.com, https://www.snapchat.com, https://www.youtube.com, https://www.linkedin.com', 1),
(22, '2024-05-06 03:22:23', 'yagnik@gmail.com', 'Contact us Details are Updated With : Yadav Yagnik, 9966332211, 9632147850, yagnik@gmail.com, yagnik@yahoo.com, Aum Nagar, https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59122.84500601378!2d70.75069810724004!3d22.157302570469092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3958359f6684fe6b%3A0xf590914470ce3372!2sShapar%2C%20Gujarat%20360024!5e0!3m2!1sen!2sin!4v1714964853402!5m2!1sen!2sin', 1),
(23, '2024-05-06 03:26:21', 'admin@project.com', 'Logout Successfully', 1),
(24, '2024-05-09 02:11:13', 'admin@project.com', 'Login Successfully', 1),
(25, '2024-05-09 02:42:06', 'admin@project.com', 'New FAQ Demo 1 Added', 1),
(26, '2024-05-09 02:43:56', 'admin@project.com', 'New FAQ New Question 1 Added', 1),
(27, '2024-05-09 02:44:07', 'admin@project.com', 'New FAQ New Question 2 Added', 1),
(28, '2024-05-09 02:58:32', 'admin@project.com', 'Demo 11 FAQ Updated', 1),
(29, '2024-05-09 02:58:59', 'admin@project.com', 'New Question 112233 FAQ Updated', 1),
(30, '2024-05-09 03:15:15', 'admin@project.com', 'Logout Successfully', 1),
(31, '2024-05-10 02:17:46', 'admin@project.com', 'Login Successfully', 1),
(32, '2024-05-10 02:37:05', 'admin@project.com', 'laptop Category Added', 1),
(33, '2024-05-10 02:37:17', 'admin@project.com', 'mobile phone Category Added', 1),
(34, '2024-05-10 02:45:49', 'admin@project.com', 'laptop Updated in Database', 1),
(35, '2024-05-10 02:47:20', 'admin@project.com', 'Laptop 1 Updated in Database', 1),
(36, '2024-05-10 02:47:57', 'admin@project.com', 'Laptop 1 Updated in Database', 1),
(37, '2024-05-10 02:48:06', 'admin@project.com', 'Laptop Updated in Database', 1),
(38, '2024-05-10 02:48:15', 'admin@project.com', 'Tablet Category Added', 1),
(39, '2024-05-10 02:48:21', 'admin@project.com', 'Smart Phone Category Added', 1),
(40, '2024-05-10 02:48:30', 'admin@project.com', 'Smart Watch Category Added', 1),
(41, '2024-05-10 02:53:24', 'admin@project.com', 'Logout Successfully', 1),
(42, '2024-05-13 02:13:45', 'admin@project.com', 'Login Successfully', 1),
(43, '2024-05-13 02:56:01', 'admin@project.com', 'Setting Changed to Google Translate to 0 and Career option to 0', 1),
(44, '2024-05-13 02:56:11', 'admin@project.com', 'Setting Changed to Google Translate to 1 and Career option to 0', 1),
(45, '2024-05-13 02:57:52', 'admin@project.com', 'Logout Successfully', 1),
(46, '2024-05-14 02:06:40', 'admin@project.com', 'Login Successfully', 1),
(47, '2024-05-14 02:33:13', 'admin@project.com', 'Large Team Service Added in Database', 1),
(48, '2024-05-14 02:35:52', 'admin@project.com', 'Car Service Added in Database', 1),
(49, '2024-05-14 02:36:11', 'admin@project.com', 'User Service Added in Database', 1),
(50, '2024-05-14 02:36:43', 'admin@project.com', 'Global Service Added in Database', 1),
(51, '2024-05-14 02:44:45', 'admin@project.com', 'User Service Updated in Database', 1),
(52, '2024-05-14 02:45:04', 'admin@project.com', 'User Service Updated in Database', 1),
(53, '2024-05-14 02:45:27', 'admin@project.com', 'Bus Service Updated in Database', 1),
(54, '2024-05-14 03:12:18', 'admin@project.com', 'Logout Successfully', 1),
(55, '2024-05-14 03:38:21', 'admin@project.com', 'Login Successfully', 1),
(56, '2024-05-14 03:46:30', 'admin@project.com', 'Logout Successfully', 1),
(57, '2024-05-15 01:54:32', 'admin@project.com', 'Login Successfully', 1),
(58, '2024-05-15 02:42:15', 'admin@project.com', 'img/Slider 16267 img1.jpg Image Uploaded on Server', 1),
(59, '2024-05-15 02:43:31', 'admin@project.com', 'img/Slider 77861 img2.jpg Image Uploaded on Server', 1),
(60, '2024-05-15 03:23:49', 'admin@project.com', 'Logout Successfully', 1),
(61, '2024-05-16 02:08:04', 'admin@project.com', 'Login Successfully', 1),
(62, '2024-05-17 02:08:36', 'admin@project.com', 'Login Successfully', 1),
(63, '2024-05-17 02:32:43', 'admin@project.com', 'Udit Ghetiya Team Member Added in Database', 1),
(64, '2024-05-17 02:33:39', 'admin@project.com', 'Yadav Yagnik Team Member Added in Database', 1),
(65, '2024-05-17 02:39:54', 'admin@project.com', 'Udit Ghetiya Team Member Added in Database', 1),
(66, '2024-05-17 03:02:48', 'admin@project.com', 'Udit Patel Team Member Updated in Database', 1),
(67, '2024-05-17 03:03:20', 'admin@project.com', 'Udit Ghetiya Team Member Updated in Database', 1),
(68, '2024-05-17 03:03:27', 'admin@project.com', 'Udit Ghetiya Team Member Updated in Database', 1),
(69, '2024-05-17 03:03:42', 'admin@project.com', 'Udit Patel Team Member Updated in Database', 1),
(70, '2024-05-17 03:04:03', 'admin@project.com', 'Udit Ghetiya Team Member Updated in Database', 1),
(71, '2024-05-17 03:05:49', 'admin@project.com', 'Udit Patel Team Member Updated in Database', 1),
(72, '2024-05-17 03:06:20', 'admin@project.com', 'Udit Patel Team Member Updated in Database', 1),
(73, '2024-05-17 03:06:31', 'admin@project.com', 'Udit Patel Team Member Updated in Database', 1),
(74, '2024-05-17 03:13:58', 'admin@project.com', 'Udit Patel team member Deleted', 1),
(75, '2024-05-17 03:17:00', 'admin@project.com', 'Logout Successfully', 1),
(76, '2024-05-18 02:08:40', 'admin@project.com', 'Login Successfully', 1),
(77, '2024-05-18 02:21:13', 'yagnik@gmail.com', 'Contact us Details are Updated With : Yadav Yagnik, 9966332211, 9632147850, yagnik@gmail.com, yagnik@yahoo.com, Aum Nagar, https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6003878368315!2d70.7786052746219!3d22.293122443156776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca240d3709dd%3A0xf6a56b3436613e93!2sSahakar%20Nagar%20Main%20Rd%2C%20Vaishali%20Nagar%2C%20Rajkot%2C%20Gujarat%20360007!5e0!3m2!1sen!2sin!4v1715998819913!5m2!1sen!2sin', 1),
(78, '2024-05-18 02:22:08', 'yagnik@gmail.com', 'Contact us Details are Updated With : Yadav Yagnik, 9966332211, 9632147850, yagnik@gmail.com, yagnik@yahoo.com, Aum Nagar, https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6003878368315!2d70.7786052746219!3d22.293122443156776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca246c0ccfc7%3A0x7ac4068b39bb6418!2sBAPS%20Swaminarayan%20mandir%20Sant%20Ashram!5e0!3m2!1sen!2sin!4v1715998907220!5m2!1sen!2sin', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `metatags`
--

CREATE TABLE `metatags` (
  `metaid` int(11) NOT NULL,
  `metakeywords` varchar(512) NOT NULL,
  `metadescription` varchar(2048) NOT NULL,
  `googletagid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metatags`
--

INSERT INTO `metatags` (`metaid`, `metakeywords`, `metadescription`, `googletagid`) VALUES
(1, 'demo, text, for, meta, keywords, of, website, for meta tags, with php', 'this is basic example of meta tags', 'G-YS3ZLEG4S6');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceid` int(11) NOT NULL,
  `servicetitle` varchar(128) NOT NULL,
  `servicedescription` varchar(512) NOT NULL,
  `serviceicon` varchar(64) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceid`, `servicetitle`, `servicedescription`, `serviceicon`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Car', 'We Provide car on rent', 'fa fa-car', 1, '2024-05-14 02:35:52', '2024-05-14 02:38:59'),
(4, 'Global', 'we provide global precence of our products', 'fa fa-globe', 1, '2024-05-14 02:36:43', '2024-05-14 02:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settingid` int(11) NOT NULL,
  `googletranslate` tinyint(4) NOT NULL DEFAULT 1,
  `careeroption` tinyint(4) NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settingid`, `googletranslate`, `careeroption`, `updated_at`) VALUES
(1, 1, 0, '2024-05-13 02:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `socialid` int(11) NOT NULL,
  `facebook` varchar(256) NOT NULL,
  `twitter` varchar(256) NOT NULL,
  `instagram` varchar(256) NOT NULL,
  `whatsapp` varchar(256) NOT NULL,
  `telegram` varchar(256) NOT NULL,
  `snapchat` varchar(256) NOT NULL,
  `youtube` varchar(256) NOT NULL,
  `linkedin` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`socialid`, `facebook`, `twitter`, `instagram`, `whatsapp`, `telegram`, `snapchat`, `youtube`, `linkedin`) VALUES
(1, 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com', 'https://www.whatsapp.com', 'https://www.telegram.com', 'https://www.snapchat.com', 'https://www.youtube.com', 'https://www.linkedin.com');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `subscriberid` int(11) NOT NULL,
  `subscribetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `subscriberemail` varchar(128) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`subscriberid`, `subscribetime`, `subscriberemail`, `status`) VALUES
(1, '2024-05-13 02:23:52', 'udit@gmail.com', 0),
(2, '2024-05-13 02:23:52', 'bhavdeep@gmail.com', 1),
(3, '2024-05-13 02:24:18', 'yash@gmail.com', 1),
(4, '2024-05-13 02:24:18', 'tushar@gmail.com', 0),
(5, '2024-05-13 02:24:39', 'gaurav@gmail.com', 1),
(6, '2024-05-13 02:24:39', 'adarsh@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `teamid` int(11) NOT NULL,
  `membername` varchar(64) NOT NULL,
  `memberdesignation` varchar(128) NOT NULL,
  `memberdescription` varchar(128) NOT NULL,
  `memberfacebook` varchar(256) NOT NULL,
  `memberinstagram` varchar(256) NOT NULL,
  `membertwitter` varchar(256) NOT NULL,
  `memberlinkedin` varchar(256) NOT NULL,
  `memberyoutube` varchar(256) NOT NULL,
  `membersnapchat` varchar(256) NOT NULL,
  `membertelegram` varchar(256) NOT NULL,
  `memberphoto` varchar(256) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`applicationid`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faqid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageid`);

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
-- Indexes for table `metatags`
--
ALTER TABLE `metatags`
  ADD PRIMARY KEY (`metaid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceid`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settingid`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`socialid`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subscriberid`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `applicationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `metatags`
--
ALTER TABLE `metatags`
  MODIFY `metaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `socialid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscriberid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `teamid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
