-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: 729project
-- ------------------------------------------------------
-- Server version 	10.4.27-MariaDB
-- Date: Fri, 24 May 2024 08:42:57 +0530

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `adminusers`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adminusers` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminusers`
--

LOCK TABLES `adminusers` WRITE;
/*!40000 ALTER TABLE `adminusers` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `adminusers` VALUES (1,'Udit','Ghetiya','admin@project.com','d033e22ae348aeb5660fc2140aec35850c4da997','2024-05-02 02:13:15','2024-05-21 01:59:24');
/*!40000 ALTER TABLE `adminusers` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `adminusers` with 1 row(s)
--

--
-- Table structure for table `career`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `career` (
  `applicationid` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`applicationid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `career`
--

LOCK TABLES `career` WRITE;
/*!40000 ALTER TABLE `career` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `career` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `career` with 0 row(s)
--

--
-- Table structure for table `categorys`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorys` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(128) NOT NULL,
  `categoryclassname` varchar(128) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorys`
--

LOCK TABLES `categorys` WRITE;
/*!40000 ALTER TABLE `categorys` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `categorys` VALUES (1,'Demo','Demo',1),(2,'Demo 1','Demo-1',1),(3,'Example','Example',1),(4,'Chargers','Chargers',1),(5,'Data Cable','Data-Cable',1);
/*!40000 ALTER TABLE `categorys` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `categorys` with 5 row(s)
--

--
-- Table structure for table `contactus`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactus` (
  `contactid` int(11) NOT NULL AUTO_INCREMENT,
  `contactperson` varchar(64) NOT NULL,
  `phone1` varchar(20) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `email1` varchar(128) NOT NULL,
  `email2` varchar(128) NOT NULL,
  `address` varchar(1024) NOT NULL,
  `googlemap` varchar(2048) NOT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactus`
--

LOCK TABLES `contactus` WRITE;
/*!40000 ALTER TABLE `contactus` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `contactus` VALUES (1,'Yadav Yagnik','9966332211','9632147850','yagnik@gmail.com','yagnik@yahoo.com','Aum Nagar','https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6003878368315!2d70.7786052746219!3d22.293122443156776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca246c0ccfc7%3A0x7ac4068b39bb6418!2sBAPS%20Swaminarayan%20mandir%20Sant%20Ashram!5e0!3m2!1sen!2sin!4v1715998907220!5m2!1sen!2sin');
/*!40000 ALTER TABLE `contactus` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `contactus` with 1 row(s)
--

--
-- Table structure for table `faq`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `faqid` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(512) NOT NULL,
  `answer` varchar(2048) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `faqtime` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`faqid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `faq` VALUES (3,'New Question 2','New Answer 2',1,'2024-05-09 02:44:07');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `faq` with 1 row(s)
--

--
-- Table structure for table `images`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `imageid` int(11) NOT NULL AUTO_INCREMENT,
  `imagetitle` varchar(128) NOT NULL,
  `imagedescription` varchar(512) NOT NULL,
  `imagepath` varchar(512) NOT NULL,
  `imagetype` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`imageid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `images` with 0 row(s)
--

--
-- Table structure for table `logs`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logs` (
  `logid` int(11) NOT NULL AUTO_INCREMENT,
  `logtime` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(128) NOT NULL,
  `logmessage` varchar(1024) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logs`
--

LOCK TABLES `logs` WRITE;
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `logs` VALUES (112,'2024-05-24 02:59:05','admin@project.com','Log Messages Deleted',1),(113,'2024-05-24 03:00:18','admin@project.com','Chargers Category Added',1),(114,'2024-05-24 03:00:24','admin@project.com','Data Cable Category Added',1),(115,'2024-05-24 03:03:02','admin@project.com','SMTP Configuration Updated to smtp.prajapatispirit.org, help@prajapatispirit.org, 123@iantRajkot, ssl, 465, 15',1),(116,'2024-05-24 03:03:59','admin@project.com','Logout Successfully',0),(117,'2024-05-24 03:12:48','admin@project.com','Login Successfully',0);
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `logs` with 6 row(s)
--

--
-- Table structure for table `messages`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `messageid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `senderemail` varchar(128) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `city` varchar(50) NOT NULL,
  `subject` varchar(512) NOT NULL,
  `message` varchar(2048) NOT NULL,
  `messagetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0,
  PRIMARY KEY (`messageid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `messages` VALUES (1,'Demo','Text','demo@gmail.com','9966332211','rajkot','Testing','Welcome to testing','2024-05-03 02:48:20',1),(2,'another text','testing','demo@gmail.com','9966554411','rajkot','Testing ','Sample Message','2024-05-03 02:48:20',1);
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `messages` with 2 row(s)
--

--
-- Table structure for table `metatags`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metatags` (
  `metaid` int(11) NOT NULL AUTO_INCREMENT,
  `metakeywords` varchar(512) NOT NULL,
  `metadescription` varchar(2048) NOT NULL,
  `googletagid` varchar(30) NOT NULL,
  PRIMARY KEY (`metaid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metatags`
--

LOCK TABLES `metatags` WRITE;
/*!40000 ALTER TABLE `metatags` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `metatags` VALUES (1,'demo, text, for, meta, keywords, of, website, for meta tags, with php','this is basic example of meta tags','G-YS3ZLEG4S6');
/*!40000 ALTER TABLE `metatags` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `metatags` with 1 row(s)
--

--
-- Table structure for table `productimages`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productimages` (
  `productimageid` int(11) NOT NULL AUTO_INCREMENT,
  `productid` int(11) NOT NULL,
  `mediapath` varchar(512) NOT NULL,
  `mediatype` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`productimageid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productimages`
--

LOCK TABLES `productimages` WRITE;
/*!40000 ALTER TABLE `productimages` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `productimages` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `productimages` with 0 row(s)
--

--
-- Table structure for table `products`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `products` with 0 row(s)
--

--
-- Table structure for table `resetpaswordotp`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resetpaswordotp` (
  `requestid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `otptext` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `expire_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`requestid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resetpaswordotp`
--

LOCK TABLES `resetpaswordotp` WRITE;
/*!40000 ALTER TABLE `resetpaswordotp` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `resetpaswordotp` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `resetpaswordotp` with 0 row(s)
--

--
-- Table structure for table `services`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `serviceid` int(11) NOT NULL AUTO_INCREMENT,
  `servicetitle` varchar(128) NOT NULL,
  `servicedescription` varchar(512) NOT NULL,
  `serviceicon` varchar(64) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`serviceid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `services` VALUES (2,'Car','We Provide car on rent','fa fa-car',0,'2024-05-14 02:35:52','2024-05-20 06:06:37'),(4,'Global','we provide global precence of our products','fa fa-globe',1,'2024-05-14 02:36:43','2024-05-14 02:39:00');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `services` with 2 row(s)
--

--
-- Table structure for table `settings`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `settingid` int(11) NOT NULL AUTO_INCREMENT,
  `googletranslate` tinyint(4) NOT NULL DEFAULT 1,
  `careeroption` tinyint(4) NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`settingid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `settings` VALUES (1,1,0,'2024-05-13 02:56:11');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `settings` with 1 row(s)
--

--
-- Table structure for table `smtpconfig`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `smtpconfig` (
  `configid` int(11) NOT NULL AUTO_INCREMENT,
  `smtphostname` varchar(128) NOT NULL,
  `smtpusername` varchar(128) NOT NULL,
  `smtppassword` varchar(128) NOT NULL,
  `smtpsecure` varchar(20) NOT NULL,
  `smtpport` varchar(10) NOT NULL,
  `otptimelimit` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`configid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smtpconfig`
--

LOCK TABLES `smtpconfig` WRITE;
/*!40000 ALTER TABLE `smtpconfig` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `smtpconfig` VALUES (1,'smtp.prajapatispirit.org','help@prajapatispirit.org','123@iantRajkot','ssl','465',15,'2024-05-21 02:23:06','2024-05-24 03:03:02');
/*!40000 ALTER TABLE `smtpconfig` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `smtpconfig` with 1 row(s)
--

--
-- Table structure for table `socialmedia`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `socialmedia` (
  `socialid` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(256) NOT NULL,
  `twitter` varchar(256) NOT NULL,
  `instagram` varchar(256) NOT NULL,
  `whatsapp` varchar(256) NOT NULL,
  `telegram` varchar(256) NOT NULL,
  `snapchat` varchar(256) NOT NULL,
  `youtube` varchar(256) NOT NULL,
  `linkedin` varchar(256) NOT NULL,
  PRIMARY KEY (`socialid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socialmedia`
--

LOCK TABLES `socialmedia` WRITE;
/*!40000 ALTER TABLE `socialmedia` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `socialmedia` VALUES (1,'https://www.facebook.com','https://www.twitter.com','https://www.instagram.com','https://www.whatsapp.com','https://www.telegram.com','https://www.snapchat.com','https://www.youtube.com','https://www.linkedin.com');
/*!40000 ALTER TABLE `socialmedia` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `socialmedia` with 1 row(s)
--

--
-- Table structure for table `subscribers`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscribers` (
  `subscriberid` int(11) NOT NULL AUTO_INCREMENT,
  `subscribetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `subscriberemail` varchar(128) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`subscriberid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribers`
--

LOCK TABLES `subscribers` WRITE;
/*!40000 ALTER TABLE `subscribers` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `subscribers` VALUES (1,'2024-05-13 02:23:52','udit@gmail.com',0),(2,'2024-05-13 02:23:52','bhavdeep@gmail.com',1),(3,'2024-05-13 02:24:18','yash@gmail.com',1),(4,'2024-05-13 02:24:18','tushar@gmail.com',0),(5,'2024-05-13 02:24:39','gaurav@gmail.com',1),(6,'2024-05-13 02:24:39','adarsh@gmail.com',0);
/*!40000 ALTER TABLE `subscribers` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `subscribers` with 6 row(s)
--

--
-- Table structure for table `team`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `teamid` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`teamid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `team` with 0 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Fri, 24 May 2024 08:42:58 +0530
