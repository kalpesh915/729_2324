-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 07:50 AM
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
-- Database: `carrentalsystem1121`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingid` int(11) NOT NULL,
  `bookingate` date NOT NULL,
  `carid` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `userid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `deposit` int(11) NOT NULL,
  `driverid` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingid`, `bookingate`, `carid`, `startdate`, `enddate`, `userid`, `amount`, `deposit`, `driverid`, `status`) VALUES
(1, '2024-03-19', 1, '2024-03-28', '2024-03-31', 2, 8500, 3000, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `carid` int(11) NOT NULL,
  `carnumber` varchar(25) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `modal` varchar(20) NOT NULL,
  `makeyear` int(11) NOT NULL,
  `color` varchar(20) NOT NULL,
  `seating` int(11) NOT NULL,
  `fuel` varchar(20) NOT NULL,
  `ac` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carid`, `carnumber`, `brand`, `modal`, `makeyear`, `color`, `seating`, `fuel`, `ac`, `status`) VALUES
(1, 'GJ 03 AB 1122', 'Toyota', 'Innova', 2020, 'white', 7, 'Diesel', 'Yes', 1),
(2, 'GJ 03 AE 1234', 'Maruti', 'Ecco', 2022, 'white', 10, 'CNG', 'No', 1);

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driverid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `address` varchar(512) NOT NULL,
  `dateofbirth` date NOT NULL,
  `photo` varchar(256) NOT NULL,
  `drivinglicance` varchar(20) NOT NULL,
  `dlexpirydate` date NOT NULL,
  `adharcard` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driverid`, `fname`, `lname`, `email`, `phone`, `whatsapp`, `address`, `dateofbirth`, `photo`, `drivinglicance`, `dlexpirydate`, `adharcard`, `status`) VALUES
(1, 'Meet', 'sinojiya', 'meet@gmail.com', '8787678678', '9988998878', 'raiya road rajkot', '2004-03-11', 'drivers/meet.jpg', '12736827637', '2028-03-19', '234847987', 1),
(2, 'Alan', 'Thomas', 'alan@gmail.com', '8787678698', '9988998988', 'raiya road rajkot', '2004-03-11', 'drivers/alan.jpg', '12736827637', '2030-03-19', '234847887', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fueling`
--

CREATE TABLE `fueling` (
  `fuelid` int(11) NOT NULL,
  `fueldate` date NOT NULL,
  `carid` int(11) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `driverid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `insuranceid` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `insurancecompanyname` varchar(128) NOT NULL,
  `insurancetype` varchar(20) NOT NULL,
  `purchasedate` timestamp NOT NULL DEFAULT current_timestamp(),
  `startdate` date NOT NULL,
  `enddate` int(11) NOT NULL,
  `renewdate` date NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

CREATE TABLE `repair` (
  `repairid` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `repairstartdate` date NOT NULL,
  `repairenddate` date NOT NULL,
  `repaircost` decimal(10,2) NOT NULL,
  `vendor` int(11) NOT NULL,
  `driverid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewid` int(11) NOT NULL,
  `reviewdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `userid` int(11) NOT NULL,
  `bookingid` int(11) NOT NULL,
  `message` varchar(256) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `whatsapp` varchar(20) NOT NULL,
  `address` varchar(512) NOT NULL,
  `dateofbirth` date NOT NULL,
  `photo` varchar(256) NOT NULL,
  `drivinglicance` varchar(20) NOT NULL,
  `adharcard` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `email`, `phone`, `whatsapp`, `address`, `dateofbirth`, `photo`, `drivinglicance`, `adharcard`, `status`) VALUES
(1, 'brijesh', 'miatra', 'brijesh@gmail.com', '998899889900', '9988998878', 'kalawad road rajkot', '2007-03-19', 'users/brijesh.jpg', '3127489378', '38947893798', 1),
(2, 'Ansh', 'Amrutiya', 'ansh@gmail.com', '99889988800', '9988994478', 'kalawad road rajkot', '2007-03-19', 'users/ansh.jpg', '3127489998', '38947893448', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendorid` int(11) NOT NULL,
  `vendername` varchar(50) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingid`),
  ADD KEY `carid2booking` (`carid`),
  ADD KEY `userid2booking` (`userid`),
  ADD KEY `driverid2booking` (`driverid`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`carid`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driverid`);

--
-- Indexes for table `fueling`
--
ALTER TABLE `fueling`
  ADD PRIMARY KEY (`fuelid`),
  ADD KEY `carid2fuel` (`carid`),
  ADD KEY `driverid2fuel` (`driverid`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`insuranceid`),
  ADD KEY `carid2insurance` (`carid`);

--
-- Indexes for table `repair`
--
ALTER TABLE `repair`
  ADD PRIMARY KEY (`repairid`),
  ADD KEY `carid2repair` (`carid`),
  ADD KEY `driverid2repair` (`driverid`),
  ADD KEY `vendorid2repair` (`vendor`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewid`),
  ADD KEY `userid2review` (`userid`),
  ADD KEY `bookingid2review` (`bookingid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendorid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `carid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `driverid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fueling`
--
ALTER TABLE `fueling`
  MODIFY `fuelid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `insuranceid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `repair`
--
ALTER TABLE `repair`
  MODIFY `repairid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendorid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `carid2booking` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`),
  ADD CONSTRAINT `driverid2booking` FOREIGN KEY (`driverid`) REFERENCES `drivers` (`driverid`),
  ADD CONSTRAINT `userid2booking` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `fueling`
--
ALTER TABLE `fueling`
  ADD CONSTRAINT `carid2fuel` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`),
  ADD CONSTRAINT `driverid2fuel` FOREIGN KEY (`driverid`) REFERENCES `drivers` (`driverid`);

--
-- Constraints for table `insurance`
--
ALTER TABLE `insurance`
  ADD CONSTRAINT `carid2insurance` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`);

--
-- Constraints for table `repair`
--
ALTER TABLE `repair`
  ADD CONSTRAINT `carid2repair` FOREIGN KEY (`carid`) REFERENCES `cars` (`carid`),
  ADD CONSTRAINT `driverid2repair` FOREIGN KEY (`driverid`) REFERENCES `drivers` (`driverid`),
  ADD CONSTRAINT `vendorid2repair` FOREIGN KEY (`vendor`) REFERENCES `vendor` (`vendorid`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `bookingid2review` FOREIGN KEY (`bookingid`) REFERENCES `bookings` (`bookingid`),
  ADD CONSTRAINT `userid2review` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
