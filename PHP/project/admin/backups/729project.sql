-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 02:05 PM
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
(1, 'Udit', 'Ghetiya', 'ghetiyaudit@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2024-05-02 02:13:15', '2024-05-25 03:30:16');

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

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`applicationid`, `fname`, `lname`, `gender`, `dateofbirth`, `jobposition`, `education`, `experience`, `phone`, `emailaddress`, `address`, `coverlatter`, `resumepath`, `status`, `created_at`, `updated_at`) VALUES
(2, 'bhavdeep', 'sorathiya', 'male', '2002-07-22', 'Manager', 'post graduation', '1', '8855664422', 'bhavdeep@gmail.com', 'Demo Text', 'This is Sample email example', 'resumes/25373 30052024_044713am bhavdeep@gmail.com Dummy PDF file for Resume.pdf', 1, '2024-05-30 02:47:13', '2024-05-30 02:47:43'),
(3, 'bhavdeep', 'sorathiya', 'male', '2002-07-22', 'Manager', 'post graduation', '1', '8855664422', 'bhavdeep@gmail.com', 'Demo Text', 'This is Sample email example', 'resumes/79654 30052024_044841am bhavdeep@gmail.com Dummy PDF file for Resume.pdf', 1, '2024-05-30 02:48:41', '2024-05-30 02:49:12'),
(4, 'bhavdeep', 'sorathiya', 'male', '2002-07-22', 'Manager', 'post graduation', '1', '8855664422', 'bhavdeep@gmail.com', 'Demo Text', 'This is Sample email example', 'resumes/31631 30052024_044900am bhavdeep@gmail.com Dummy PDF file for Resume.pdf', 1, '2024-05-30 02:49:00', '2024-05-30 02:49:14'),
(5, 'bhavdeep', 'sorathiya', 'male', '2002-07-22', 'Manager', 'post graduation', '1', '8855664422', 'bhavdeep@gmail.com', 'Demo Text', 'This is Sample email example', 'resumes/92922 30052024_045026am bhavdeep@gmail.com Dummy PDF file for Resume.pdf', 0, '2024-05-30 02:50:26', '2024-05-30 02:50:26'),
(6, 'bhavdeep', 'sorathiya', 'male', '2002-07-22', 'Manager', 'post graduation', '1', '8855664422', 'bhavdeep@gmail.com', 'Demo Text', 'This is Sample email example', 'resumes/72959 30052024_045357am bhavdeep@gmail.com Dummy PDF file for Resume.pdf', 0, '2024-05-30 02:53:57', '2024-05-30 02:53:57'),
(7, 'bhavdeep', 'sorathiya', 'male', '2002-07-22', 'Manager', 'post graduation', '1', '8855664422', 'bhavdeep@gmail.com', 'Demo Text', 'This is Sample email example', 'resumes/71178 30052024_045427am bhavdeep@gmail.com Dummy PDF file for Resume.pdf', 0, '2024-05-30 02:54:27', '2024-05-30 02:54:27'),
(8, 'bhavdeep', 'sorathiya', 'male', '2002-07-22', 'Manager', 'post graduation', '1', '8855664422', 'bhavdeep@gmail.com', 'Demo Text', 'This is Sample email example', 'resumes/91070 30052024_045432am bhavdeep@gmail.com Dummy PDF file for Resume.pdf', 0, '2024-05-30 02:54:32', '2024-05-30 02:54:32'),
(9, 'bhavdeep', 'sorathiya', 'male', '2002-07-22', 'Manager', 'post graduation', '1', '8855664422', 'bhavdeep@gmail.com', 'Demo Text', 'This is Sample email example', 'resumes/86973 30052024_045746am bhavdeep@gmail.com Dummy PDF file for Resume.pdf', 0, '2024-05-30 02:57:46', '2024-05-30 02:57:46'),
(10, 'bhavdeep', 'sorathiya', 'male', '2002-07-22', 'Manager', 'post graduation', '1', '8855664422', 'bhavdeep@gmail.com', 'Demo Text', 'This is Sample email example', 'resumes/64812 30052024_045750am bhavdeep@gmail.com Dummy PDF file for Resume.pdf', 0, '2024-05-30 02:57:50', '2024-05-30 02:57:50'),
(11, 'bhavdeep', 'sorathiya', 'male', '2002-07-22', 'Manager', 'post graduation', '1', '8855664422', 'bhavdeep@gmail.com', 'Demo Text', 'This is Sample email example', 'resumes/67651 30052024_050916am bhavdeep@gmail.com Dummy PDF file for Resume.pdf', 0, '2024-05-30 03:09:16', '2024-05-30 03:09:16'),
(12, 'bhavdeep', 'sorathiya', 'male', '2002-07-22', 'Manager', 'post graduation', '1', '8855664422', 'bhavdeep@gmail.com', 'Demo Text', 'This is Sample email example', 'resumes/26568 30052024_051009am bhavdeep@gmail.com Dummy PDF file for Resume.pdf', 0, '2024-05-30 03:10:09', '2024-05-30 03:10:09'),
(13, 'bhavdeep', 'sorathiya', 'male', '2002-07-22', 'Manager', 'post graduation', '1', '8855664422', 'bhavdeep@gmail.com', 'Demo Text', 'This is Sample email example', 'resumes/12879 30052024_051015am bhavdeep@gmail.com Dummy PDF file for Resume.pdf', 0, '2024-05-30 03:10:15', '2024-05-30 03:10:15'),
(14, 'bhavdeep', 'sorathiya', 'male', '2002-07-22', 'Manager', 'post graduation', '1', '8855664422', 'bhavdeep@gmail.com', 'Demo Text', 'This is Sample email example', 'resumes/36668 30052024_051114am bhavdeep@gmail.com Dummy PDF file for Resume.pdf', 0, '2024-05-30 03:11:14', '2024-05-30 03:11:14');

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

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`categoryid`, `categoryname`, `categoryclassname`, `status`) VALUES
(1, 'Demo', 'Demo', 1),
(2, 'Demo 1', 'Demo-1', 1),
(3, 'Example', 'Example', 1),
(4, 'Chargers', 'Chargers', 1),
(5, 'Data Cable', 'Data-Cable', 1);

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
(1, 'Aryan Thakrar', '9966332211', '9874563210', 'yagnik@gmail.com', 'yagnik@yahoo.com', 'Kalawad Road Rajkot', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6003878368315!2d70.7786052746219!3d22.293122443156776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca246c0ccfc7%3A0x7ac4068b39bb6418!2sBAPS%20Swaminarayan%20mandir%20Sant%20Ashram!5e0!3m2!1sen!2sin!4v1715998907220!5m2!1sen!2sin');

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
(3, 'New Question 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-05-09 02:44:07'),
(4, 'Another Question 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-05-27 03:01:15'),
(5, 'Another Question 3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2024-05-27 03:01:29');

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

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imageid`, `imagetitle`, `imagedescription`, `imagepath`, `imagetype`, `status`, `created_at`) VALUES
(4, 'Slider 2', 'Sample Slider Image', 'img/Slider 91132 img2.jpg', 1, 1, '2024-05-28 02:56:18'),
(5, 'Slider 3', 'Sample Slider Image', 'img/Slider 67159 img12.jpg', 1, 1, '2024-05-28 02:56:30'),
(6, 'Slider 4', 'Sample Slider Image', 'img/Slider 57685 img11.jpg', 1, 1, '2024-05-29 02:15:21'),
(7, 'Gallery 1', 'Sample Image', 'img/Gallery 90487 img12.jpg', 2, 1, '2024-05-31 02:15:24'),
(8, 'Gallery 2', 'Sample Image', 'img/Gallery 46966 img2.jpg', 2, 0, '2024-05-31 02:15:34'),
(9, 'Gallery 3', 'Sample Image', 'img/Gallery 77121 img3.jpg', 2, 1, '2024-05-31 02:15:43');

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
(112, '2024-05-24 02:59:05', 'admin@project.com', 'Log Messages Deleted', 1),
(113, '2024-05-24 03:00:18', 'admin@project.com', 'Chargers Category Added', 1),
(114, '2024-05-24 03:00:24', 'admin@project.com', 'Data Cable Category Added', 1),
(115, '2024-05-24 03:03:02', 'admin@project.com', 'SMTP Configuration Updated to smtp.prajapatispirit.org, help@prajapatispirit.org, 123@iantRajkot, ssl, 465, 15', 1),
(116, '2024-05-24 03:03:59', 'admin@project.com', 'Logout Successfully', 1),
(117, '2024-05-24 03:12:48', 'admin@project.com', 'Login Successfully', 1),
(118, '2024-05-24 03:13:04', 'admin@project.com', 'Logout Successfully', 1),
(119, '2024-05-24 06:16:58', 'admin@project.com', 'Login Successfully', 1),
(120, '2024-05-24 06:17:44', 'admin@project.com', 'Logout Successfully', 1),
(121, '2024-05-25 02:04:54', 'ghetiyaudit@gmail.com', 'Login Successfully', 1),
(122, '2024-05-25 02:05:17', 'ghetiyaudit@gmail.com', 'Logout Successfully', 1),
(123, '2024-05-25 02:36:16', 'ghetiyaudit@gmail.com', 'Login Successfully', 1),
(124, '2024-05-25 02:37:00', 'ghetiyaudit@gmail.com', 'SMTP Configuration Updated to mail.prajapatispirit.org, help@prajapatispirit.org, 123@iantRajkot, ssl, 465, 15', 1),
(125, '2024-05-25 02:37:11', 'ghetiyaudit@gmail.com', 'Logout Successfully', 1),
(126, '2024-05-25 02:56:07', 'ghetiyaudit@gmail.com', 'Password Reset OTP  Generated ', 1),
(127, '2024-05-25 02:57:21', 'ghetiyaudit@gmail.com', 'Password Reset OTP  Generated ', 1),
(128, '2024-05-25 02:59:38', 'ghetiyaudit@gmail.com', 'Password Reset OTP  Generated ', 1),
(129, '2024-05-25 03:00:38', 'ghetiyaudit@gmail.com', 'Password Reset OTP 946058 Generated ', 1),
(130, '2024-05-25 03:01:00', 'ghetiyaudit@gmail.com', 'Password Reset OTP 620930 Generated ', 1),
(131, '2024-05-25 03:28:57', 'ghetiyaudit@gmail.com', 'Password Reset Successfully', 1),
(132, '2024-05-25 03:29:32', 'ghetiyaudit@gmail.com', 'Logout Successfully', 1),
(133, '2024-05-25 03:29:46', 'ghetiyaudit@gmail.com', 'Password Reset OTP 972640 Generated ', 1),
(134, '2024-05-25 03:30:16', 'ghetiyaudit@gmail.com', 'Password Reset Successfully', 1),
(135, '2024-05-25 03:30:25', 'ghetiyaudit@gmail.com', 'Logout Successfully', 1),
(136, '2024-05-25 03:30:39', 'ghetiyaudit@gmail.com', 'Login Successfully', 1),
(137, '2024-05-25 03:30:51', 'ghetiyaudit@gmail.com', 'Logout Successfully', 1),
(138, '2024-05-25 03:31:46', 'ghetiyaudit@gmail.com', 'Login Successfully', 1),
(139, '2024-05-25 03:32:02', 'ghetiyaudit@gmail.com', 'Logout Successfully', 1),
(140, '2024-05-27 02:37:02', 'ghetiyaudit@gmail.com', 'Login Successfully', 1),
(141, '2024-05-27 02:44:12', 'ghetiyaudit@gmail.com', 'User Friendly Service Added in Database', 1),
(142, '2024-05-27 02:52:12', 'yagnik@gmail.com', 'Contact us Details are Updated With : Yadav Yagnik, 9966332211, 9632147850, yagnik@gmail.com, , Aum Nagar, https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6003878368315!2d70.7786052746219!3d22.293122443156776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca246c0ccfc7%3A0x7ac4068b39bb6418!2sBAPS%20Swaminarayan%20mandir%20Sant%20Ashram!5e0!3m2!1sen!2sin!4v1715998907220!5m2!1sen!2sin', 1),
(143, '2024-05-27 02:52:23', 'yagnik@gmail.com', 'Contact us Details are Updated With : Yadav Yagnik, 9966332211, 9632147850, yagnik@gmail.com, yagnik@yahoo.com, Aum Nagar, https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6003878368315!2d70.7786052746219!3d22.293122443156776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca246c0ccfc7%3A0x7ac4068b39bb6418!2sBAPS%20Swaminarayan%20mandir%20Sant%20Ashram!5e0!3m2!1sen!2sin!4v1715998907220!5m2!1sen!2sin', 1),
(144, '2024-05-27 03:01:04', 'ghetiyaudit@gmail.com', 'New Question 2 FAQ Updated', 1),
(145, '2024-05-27 03:01:15', 'ghetiyaudit@gmail.com', 'New FAQ Another Question 1 Added', 1),
(146, '2024-05-27 03:01:29', 'ghetiyaudit@gmail.com', 'New FAQ Another Question 3 Added', 1),
(147, '2024-05-27 03:10:05', 'ghetiyaudit@gmail.com', 'Socail Media Links Updated to :  https://www.facebook.com/jayrajsinh, https://www.twitter.com, https://www.instagram.com, https://www.whatsapp.com, https://www.telegram.com, https://www.snapchat.com, https://www.youtube.com, https://www.linkedin.com', 1),
(148, '2024-05-27 03:14:17', 'ghetiyaudit@gmail.com', 'Socail Media Links Updated to :  https://www.facebook.com/jayrajsinh, https://www.twitter.com, https://www.instagram.com, https://www.whatsapp.com, , , , ', 1),
(149, '2024-05-27 03:14:33', 'ghetiyaudit@gmail.com', 'Socail Media Links Updated to :  https://www.facebook.com/jayrajsinh, https://www.twitter.com, https://www.instagram.com, https://www.whatsapp.com, https://www.telegram.com, https://www.snapchat.com, https://www.youtube.com, https://www.linkedin.com', 1),
(150, '2024-05-27 14:02:24', 'info@vishaluniform.com', 'Invalid Login Attempt', 1),
(151, '2024-05-27 14:02:40', 'ghetiyaudit@gmail.com', 'Login Successfully', 1),
(152, '2024-05-27 14:02:56', 'ghetiyaudit@gmail.com', 'Chargers1 Updated in Database', 1),
(153, '2024-05-27 14:03:01', 'ghetiyaudit@gmail.com', 'Chargers Updated in Database', 1),
(154, '2024-05-27 14:04:27', 'ghetiyaudit@gmail.com', 'Sample Service Service Added in Database', 1),
(155, '2024-05-27 14:06:49', 'yagnik@gmail.com', 'Contact us Details are Updated With : Yadav Yagnik, 9966332211, 9632147850, yagnik@gmail.com, yagnik@yahoo.com, Kalawad Road Rajkot, https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6003878368315!2d70.7786052746219!3d22.293122443156776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca246c0ccfc7%3A0x7ac4068b39bb6418!2sBAPS%20Swaminarayan%20mandir%20Sant%20Ashram!5e0!3m2!1sen!2sin!4v1715998907220!5m2!1sen!2sin', 1),
(156, '2024-05-27 14:08:33', 'yagnik@gmail.com', 'Contact us Details are Updated With : Yadav Yagnik, 9966332211, 9874563210, yagnik@gmail.com, yagnik@yahoo.com, Kalawad Road Rajkot, https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6003878368315!2d70.7786052746219!3d22.293122443156776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca246c0ccfc7%3A0x7ac4068b39bb6418!2sBAPS%20Swaminarayan%20mandir%20Sant%20Ashram!5e0!3m2!1sen!2sin!4v1715998907220!5m2!1sen!2sin', 1),
(157, '2024-05-27 14:09:45', 'ghetiyaudit@gmail.com', 'Logout Successfully', 1),
(158, '2024-05-28 02:03:29', 'ghetiyaudit@gmail.com', 'Login Successfully', 1),
(159, '2024-05-28 02:07:39', 'ghetiyaudit@gmail.com', 'Udit Ghetiya Team Member Added in Database', 1),
(160, '2024-05-28 02:08:01', 'ghetiyaudit@gmail.com', 'Bhavdeep Sorathiya Team Member Added in Database', 1),
(161, '2024-05-28 02:08:30', 'ghetiyaudit@gmail.com', 'Bhalabhai Bavaliya Team Member Added in Database', 1),
(162, '2024-05-28 02:27:41', 'ghetiyaudit@gmail.com', 'Udit Ghetiya Team Member Updated in Database', 1),
(163, '2024-05-28 02:56:07', 'ghetiyaudit@gmail.com', 'img/Slider 19148 img1.jpg Image Uploaded on Server', 1),
(164, '2024-05-28 02:56:18', 'ghetiyaudit@gmail.com', 'img/Slider 91132 img2.jpg Image Uploaded on Server', 1),
(165, '2024-05-28 02:56:31', 'ghetiyaudit@gmail.com', 'img/Slider 67159 img12.jpg Image Uploaded on Server', 1),
(166, '2024-05-28 03:14:11', 'ghetiyaudit@gmail.com', 'Logout Successfully', 1),
(167, '2024-05-29 02:08:50', 'ghetiyaudit@gmail.com', 'Login Successfully', 1),
(168, '2024-05-29 02:15:21', 'ghetiyaudit@gmail.com', 'img/Slider 57685 img11.jpg Image Uploaded on Server', 0),
(169, '2024-05-29 02:18:28', 'ghetiyaudit@gmail.com', 'Sample1 Product Added ', 0),
(170, '2024-05-29 02:19:13', 'ghetiyaudit@gmail.com', 'Sample2 Product Added ', 0),
(171, '2024-05-29 02:19:57', 'ghetiyaudit@gmail.com', 'Sample3 Product Added ', 0),
(172, '2024-05-29 03:15:19', 'ghetiyaudit@gmail.com', 'Logout Successfully', 0),
(173, '2024-05-30 02:05:50', 'ghetiyaudit@gmail.com', 'Login Successfully', 0),
(174, '2024-05-31 02:05:27', 'ghetiyaudit@gmail.com', 'Login Successfully', 0),
(175, '2024-05-31 02:15:24', 'ghetiyaudit@gmail.com', 'img/Gallery 90487 img12.jpg Image Uploaded on Server', 0),
(176, '2024-05-31 02:15:34', 'ghetiyaudit@gmail.com', 'img/Gallery 46966 img2.jpg Image Uploaded on Server', 0),
(177, '2024-05-31 02:15:43', 'ghetiyaudit@gmail.com', 'img/Gallery 77121 img3.jpg Image Uploaded on Server', 0),
(178, '2024-05-31 02:29:44', 'ghetiyaudit@gmail.com', 'Setting Changed to Google Translate to 1 and Career option to 1', 0),
(179, '2024-05-31 02:30:41', 'ghetiyaudit@gmail.com', 'Setting Changed to Google Translate to 0 and Career option to 1', 0),
(180, '2024-05-31 02:30:54', 'ghetiyaudit@gmail.com', 'Setting Changed to Google Translate to 1 and Career option to 1', 0),
(181, '2024-05-31 02:32:19', 'ghetiyaudit@gmail.com', 'Setting Changed to Google Translate to 1 and Career option to 0', 0),
(182, '2024-05-31 02:35:54', 'ghetiyaudit@gmail.com', 'Setting Changed to Google Translate to 1 and Career option to 1', 0),
(183, '2024-05-31 02:39:12', 'ghetiyaudit@gmail.com', 'Setting Changed to Google Translate to 1 and Career option to 1', 0),
(184, '2024-05-31 02:47:48', 'uditghetiya@gmail.com', 'Invalid Login Attempt', 0),
(185, '2024-05-31 02:47:59', 'ghetiyaudit@gmail.com', 'Logout Successfully', 0),
(186, '2024-05-31 02:49:35', 'ghetiyaundit@gmail.com', 'Invalid Login Attempt', 0),
(187, '2024-05-31 03:14:22', 'ghetiyaudit@gmail.com', 'Invalid Login Attempt', 0),
(188, '2024-05-31 03:14:28', 'ghetiyaudit@gmail.com', 'Invalid Login Attempt', 0),
(189, '2024-05-31 03:14:40', 'ghetiyaudit@gmail.com', 'Login Successfully', 0),
(190, '2024-06-06 11:19:54', 'ghetiyaudit@gmail.com', 'Login Successfully', 0),
(191, '2024-06-06 11:21:22', 'yagnik@gmail.com', 'Contact us Details are Updated With : Aryan Thakrar, 9966332211, 9874563210, yagnik@gmail.com, yagnik@yahoo.com, Kalawad Road Rajkot, https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6003878368315!2d70.7786052746219!3d22.293122443156776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca246c0ccfc7%3A0x7ac4068b39bb6418!2sBAPS%20Swaminarayan%20mandir%20Sant%20Ashram!5e0!3m2!1sen!2sin!4v1715998907220!5m2!1sen!2sin', 0),
(192, '2024-06-06 11:21:59', 'ghetiyaudit@gmail.com', 'Setting Changed to Google Translate to 1 and Career option to 0', 0),
(193, '2024-06-06 11:22:25', 'ghetiyaudit@gmail.com', 'Setting Changed to Google Translate to 1 and Career option to 1', 0),
(194, '2024-06-06 11:24:38', 'ghetiyaudit@gmail.com', 'Socail Media Links Updated to :  https://www.facebook.com/jayrajsinh, , , , , https://www.snapchat.com, https://www.youtube.com, https://www.linkedin.com', 0),
(195, '2024-06-06 11:29:00', 'ghetiyaudit@gmail.com', 'Logout Successfully', 0),
(196, '2024-06-07 11:35:08', 'ghetiyaudit@gmail.com', 'Login Successfully', 0),
(197, '2024-06-07 11:35:25', 'ghetiyaudit@gmail.com', 'Setting Changed to Google Translate to 1 and Career option to 0', 0),
(198, '2024-06-07 11:37:58', 'ghetiyaudit@gmail.com', 'Setting Changed to Google Translate to 1 and Career option to 1', 0),
(199, '2024-06-07 11:38:26', 'ghetiyaudit@gmail.com', 'Logout Successfully', 0);

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
(2, 'another text', 'testing', 'demo@gmail.com', '9966554411', 'rajkot', 'Testing ', 'Sample Message', '2024-05-03 02:48:20', 1),
(3, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'Demo Testing', '2024-05-28 02:43:10', 0),
(4, 'bhavdeep', 'sorathiya', 'bhavdeep@gmail.com', '8855664422', 'rajkot', 'demo', 'Testing', '2024-05-28 02:45:04', 1),
(5, 'pandya', 'gaurav', 'gaurav@gmail.com', '9874123650', 'rajkot', 'demo', 'Demoi', '2024-05-28 02:45:40', 0),
(6, 'pandya', 'gaurav', 'gaurav@gmail.com', '9874123650', 'rajkot', 'demo', 'Demoi', '2024-05-28 02:53:40', 1),
(7, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'demo', '2024-05-29 02:17:08', 0),
(8, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'demo', '2024-05-29 02:27:07', 0),
(9, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'demo', '2024-05-29 02:27:17', 0),
(10, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'demo', '2024-05-29 02:28:27', 0),
(11, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'demo', '2024-05-29 02:30:00', 0),
(12, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'demo', '2024-05-29 02:30:34', 0),
(13, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'demo', '2024-05-29 02:30:46', 0),
(14, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'demo', '2024-05-29 02:30:55', 0),
(15, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'demo', '2024-05-29 02:31:05', 0),
(16, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'demo', '2024-05-29 02:31:40', 0),
(17, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'demo', '2024-05-29 02:32:06', 0),
(18, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'demo', '2024-05-29 02:32:40', 0),
(19, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'demo', '2024-05-29 02:33:55', 0),
(20, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'demo', '2024-05-29 02:34:39', 0),
(21, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'demo', '2024-05-29 02:37:27', 0),
(22, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'demo', '2024-05-29 02:40:53', 0),
(23, 'udit', 'ghetiya', 'bhalabhai@gmail.com', '8855664422', 'rajkot', 'demo', 'demo', '2024-05-29 02:41:11', 0),
(24, 'Dhrvusha', 'Bhatt', 'dhruvisha@gmail.com', '8855664422', 'rajkot', 'demo', 'testing', '2024-06-06 11:23:07', 1),
(25, 'Dhrvusha', 'Bhatt', 'dhruvisha@gmail.com', '8855664422', 'rajkot', 'demo', 'testing', '2024-06-06 11:24:43', 0),
(26, 'Dhrvusha', 'Bhatt', 'dhruvisha@gmail.com', '8855664422', 'rajkot', 'demo', 'testing', '2024-06-06 11:25:46', 0),
(27, 'Dhrvusha', 'Bhatt', 'dhruvisha@gmail.com', '8855664422', 'rajkot', 'demo', 'testing', '2024-06-06 11:26:08', 0),
(28, 'Dhrvusha', 'Bhatt', 'dhruvisha@gmail.com', '8855664422', 'rajkot', 'demo', 'testing', '2024-06-06 11:26:39', 0),
(29, 'Dhrvusha', 'Bhatt', 'dhruvisha@gmail.com', '8855664422', 'rajkot', 'demo', 'testing', '2024-06-06 11:26:53', 0);

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
(1, 'demo, text, for, meta, keywords, of, website, for meta tags, with php', 'this is basic example of meta tags', 'G-DJ5S0FRTGT');

-- --------------------------------------------------------

--
-- Table structure for table `productimages`
--

CREATE TABLE `productimages` (
  `productimageid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `mediapath` varchar(512) NOT NULL,
  `mediatype` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productimages`
--

INSERT INTO `productimages` (`productimageid`, `productid`, `mediapath`, `mediatype`, `status`) VALUES
(8, 2, 'productmedia/image 29052024_074828am 42909 img1.jpg', 2, 1),
(9, 2, 'productmedia/image 29052024_074828am 38613 img2.jpg', 2, 1),
(10, 2, 'productmedia/image 29052024_074828am 71829 img3.jpg', 2, 1),
(11, 2, 'productmedia/image 29052024_074828am 99780 img12.jpg', 2, 1),
(12, 3, 'productmedia/image 29052024_074913am 40781 img11.jpg', 2, 1),
(13, 3, 'productmedia/image 29052024_074913am 58719 img12.jpg', 2, 1),
(14, 3, 'productmedia/video 29052024_074913am 70622 mov_bbb.mp4', 1, 1),
(15, 4, 'productmedia/image 29052024_074957am 17197 img1.jpg', 2, 1),
(16, 4, 'productmedia/image 29052024_074957am 92143 img8.jpg', 2, 1),
(17, 4, 'productmedia/image 29052024_074957am 78984 img11.jpg', 2, 1),
(18, 4, 'productmedia/image 29052024_074957am 72367 img12.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productid` int(11) NOT NULL,
  `productname` varchar(256) NOT NULL,
  `productbrandname` varchar(128) NOT NULL,
  `productcategory` int(11) NOT NULL,
  `productdescription` varchar(2048) NOT NULL,
  `manufacturedate` date NOT NULL,
  `productcolor` varchar(64) NOT NULL,
  `productweight` varchar(32) NOT NULL,
  `productsize` varchar(64) NOT NULL,
  `productpackaging` varchar(128) NOT NULL,
  `productmaterial` varchar(256) NOT NULL,
  `productshape` varchar(32) NOT NULL,
  `productcountry` varchar(64) NOT NULL,
  `productmrp` decimal(10,2) NOT NULL,
  `productdiscount` decimal(10,2) NOT NULL,
  `returnpolicy` varchar(2048) NOT NULL,
  `productwarranty` varchar(128) NOT NULL,
  `minimumorder` varchar(128) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productid`, `productname`, `productbrandname`, `productcategory`, `productdescription`, `manufacturedate`, `productcolor`, `productweight`, `productsize`, `productpackaging`, `productmaterial`, `productshape`, `productcountry`, `productmrp`, `productdiscount`, `returnpolicy`, `productwarranty`, `minimumorder`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Sample1', 'HP', 1, 'Demo Product', '2025-05-22', 'white', '250hms', '15 x 25 x 35', 'Box Bubble wrap', 'Plastic', 'rectangle', 'india', 850.00, 15.00, 'Demo', '6months', '1', 1, '2024-05-29 02:18:28', '2024-05-29 02:31:01'),
(3, 'Sample2', 'HP', 3, 'Demo', '7085-08-27', 'white', '250hms', '15 x 25 x 35', 'Box Bubble wrap', 'Plastic', 'rectangle', 'india', 850.00, 15.00, 'Demo', '6months', '2', 1, '2024-05-29 02:19:13', '2024-05-29 02:31:02'),
(4, 'Sample3', 'DELL', 4, 'Demo', '2028-08-28', 'white', '250hms', '15 x 25 x 35', 'Box Bubble wrap', 'Plastic', 'rectangle', 'india', 850.00, 15.00, 'Demo', '6months', '1', 1, '2024-05-29 02:19:57', '2024-05-29 02:19:57');

-- --------------------------------------------------------

--
-- Table structure for table `resetpaswordotp`
--

CREATE TABLE `resetpaswordotp` (
  `requestid` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `otptext` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `expire_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resetpaswordotp`
--

INSERT INTO `resetpaswordotp` (`requestid`, `email`, `otptext`, `created_at`, `expire_at`, `status`) VALUES
(6, 'ghetiyaudit@gmail.com', 972640, '2024-05-25 03:29:46', '2024-05-25 03:44:46', 1);

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
(2, 'Car', 'We Provide car on rent', 'fa fa-car', 1, '2024-05-14 02:35:52', '2024-05-27 14:04:47'),
(4, 'Global', 'we provide global precence of our products', 'fa fa-globe', 1, '2024-05-14 02:36:43', '2024-06-06 11:26:47'),
(5, 'User Friendly', 'We provide user friendly interace for all users', 'fa fa-users', 1, '2024-05-27 02:44:12', '2024-06-06 11:26:48'),
(6, 'Sample Service', 'We provide user friendly interace for all users', 'fa fa-bus', 1, '2024-05-27 14:04:27', '2024-05-27 14:04:27');

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
(1, 1, 1, '2024-06-07 11:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `smtpconfig`
--

CREATE TABLE `smtpconfig` (
  `configid` int(11) NOT NULL,
  `smtphostname` varchar(128) NOT NULL,
  `smtpusername` varchar(128) NOT NULL,
  `smtppassword` varchar(128) NOT NULL,
  `smtpsecure` varchar(20) NOT NULL,
  `smtpport` varchar(10) NOT NULL,
  `otptimelimit` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `smtpconfig`
--

INSERT INTO `smtpconfig` (`configid`, `smtphostname`, `smtpusername`, `smtppassword`, `smtpsecure`, `smtpport`, `otptimelimit`, `created_at`, `updated_at`) VALUES
(1, 'mail.prajapatispirit.org', 'help@prajapatispirit.org', '123@iantRajkot', 'ssl', '465', 15, '2024-05-21 02:23:06', '2024-05-25 02:37:00');

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
(1, 'https://www.facebook.com/jayrajsinh', '', '', '', '', 'https://www.snapchat.com', 'https://www.youtube.com', 'https://www.linkedin.com');

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
(1, '2024-05-28 02:53:51', 'bhavdeep@gmail.com', 1),
(2, '2024-06-06 11:28:22', 'demo@gmail.com', 1);

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
-- Dumping data for table `team`
--

INSERT INTO `team` (`teamid`, `membername`, `memberdesignation`, `memberdescription`, `memberfacebook`, `memberinstagram`, `membertwitter`, `memberlinkedin`, `memberyoutube`, `membersnapchat`, `membertelegram`, `memberphoto`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Udit Ghetiya', 'Manager', '10+ year Developing Exprience', 'https://www.dummyurl.com', 'https://www.dummyurl.com', 'https://www.dummyurl.com', '', '', '', 'https://www.dummyurl.com', 'img/team/Udit Ghetiya 64687 img1.jpg', 1, '2024-05-28 02:07:39', '2024-05-28 02:27:41'),
(3, 'Bhavdeep Sorathiya', 'Junior Manager', '5+ year Developing Exprience', 'https://www.dummyurl.com', 'https://www.dummyurl.com', 'https://www.dummyurl.com', 'https://www.dummyurl.com', '', '', '', 'img/team/Bhavdeep Sorathiya 67245 img2.jpg', 1, '2024-05-28 02:08:01', '2024-05-28 02:08:01'),
(4, 'Bhalabhai Bavaliya', 'General Manager', '5+ year Developing Exprience', 'https://www.dummyurl.com', 'https://www.dummyurl.com', '', '', '', '', '', 'img/team/Bhalabhai Bavaliya 36568 img11.jpg', 1, '2024-05-28 02:08:30', '2024-05-28 02:08:30');

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
-- Indexes for table `productimages`
--
ALTER TABLE `productimages`
  ADD PRIMARY KEY (`productimageid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `resetpaswordotp`
--
ALTER TABLE `resetpaswordotp`
  ADD PRIMARY KEY (`requestid`);

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
-- Indexes for table `smtpconfig`
--
ALTER TABLE `smtpconfig`
  ADD PRIMARY KEY (`configid`);

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
  MODIFY `applicationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `metatags`
--
ALTER TABLE `metatags`
  MODIFY `metaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `productimages`
--
ALTER TABLE `productimages`
  MODIFY `productimageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `resetpaswordotp`
--
ALTER TABLE `resetpaswordotp`
  MODIFY `requestid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `smtpconfig`
--
ALTER TABLE `smtpconfig`
  MODIFY `configid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `socialid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscriberid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `teamid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
