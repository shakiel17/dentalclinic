-- MySQL dump 10.13  Distrib 8.0.42, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dental_clinic
-- ------------------------------------------------------
-- Server version	8.0.42

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','1234','Administrator');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admission`
--

DROP TABLE IF EXISTS `admission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admission` (
  `id` int NOT NULL AUTO_INCREMENT,
  `caseno` varchar(100) DEFAULT NULL,
  `customer_id` varchar(100) DEFAULT NULL,
  `dateadmit` date DEFAULT NULL,
  `timeadmit` time DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admission`
--

LOCK TABLES `admission` WRITE;
/*!40000 ALTER TABLE `admission` DISABLE KEYS */;
INSERT INTO `admission` VALUES (7,'20250826103404','20250718084109','2025-08-26','10:34:04','discharged'),(8,'20250826103621','20250718084109','2025-08-26','10:36:21','discharged'),(16,'20250830155939','20250718084109','2025-08-30','15:59:39','Active');
/*!40000 ALTER TABLE `admission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collection`
--

DROP TABLE IF EXISTS `collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `collection` (
  `id` int NOT NULL AUTO_INCREMENT,
  `refno` varchar(45) DEFAULT NULL,
  `caseno` varchar(100) DEFAULT NULL,
  `orno` varchar(45) DEFAULT NULL,
  `service_id` varchar(45) DEFAULT NULL,
  `accttitle` varchar(45) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `amount_paid` double DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `transno` varchar(45) DEFAULT NULL,
  `proof_payment` longblob,
  `status` varchar(45) DEFAULT NULL,
  `referenceno` varchar(45) DEFAULT NULL,
  `datearray` date DEFAULT NULL,
  `timearray` time DEFAULT NULL,
  `is_credit` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collection`
--

LOCK TABLES `collection` WRITE;
/*!40000 ALTER TABLE `collection` DISABLE KEYS */;
INSERT INTO `collection` VALUES (14,'RN20250826103404','20250826103404','OR250826103414','20250717083721','CASHONHAND',30000,10000,'cash','','','PAID','RN20250826103404','2025-08-26','10:34:14',0),(15,'RN20250826103414','20250826103404','OR250826103714','20250826100550','CASHONHAND',20000,1000,'cash','','','PAID','RN20250826103414','2025-09-26','10:37:14',0),(16,'RN20250826103621','20250826103621','OR250826103643','20250717083530','CASHONHAND',2500,1000,'cash','','','PAID','RN20250826103621','2025-08-26','10:36:43',0),(17,'RN20250826103643','20250826103621','OR250826104055','20250826104035','CASHONHAND',1500,1500,'cash','','','PAID','RN20250826103643','2025-09-29','10:40:55',0),(18,'RN20250826103714','20250826103404','OR250830155257','20250826100550','CASHONHAND',19000,5000,'cash','','','PAID','RN20250826103714','2025-08-30','15:52:57',1),(19,'RN20250830155257','20250826103404','','20250826100550','AR TRADE',14000,0,'ar','','','pending','RN20250826103714','2025-08-30','15:52:57',NULL);
/*!40000 ALTER TABLE `collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `address` text,
  `contactno` varchar(45) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `civilstatus` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `contactperson` varchar(45) DEFAULT NULL,
  `contactpersonno` varchar(45) DEFAULT NULL,
  `datearray` date DEFAULT NULL,
  `timearray` time DEFAULT NULL,
  `img` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'20250718084109','ABOY','ECZEKIEL','HERMOCILLA','PUROK 7C, SUDAPIN, KIDAPAWAN CITY','09107524284','1986-05-14','PROGRAMMER','Married','Male',NULL,NULL,'2025-07-18','08:41:09',NULL),(3,'20250729151534','ABOY','JONAH EM','HERMOSILLA','PUROK 7A BALINDOG, KIDAPAWAN CITY','09092898005','1992-02-24','PRIVATE EMPLOYEE','Married','Male','09107524284','Brother','2025-07-29','15:15:34',NULL);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dentition`
--

DROP TABLE IF EXISTS `dentition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dentition` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(45) DEFAULT NULL,
  `caseno` varchar(45) DEFAULT NULL,
  `tooth_id` varchar(100) DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  `caries_occ` varchar(45) DEFAULT NULL,
  `caries_mes` varchar(45) DEFAULT NULL,
  `caries_dis` varchar(45) DEFAULT NULL,
  `caries_buc` varchar(45) DEFAULT NULL,
  `caries_ling` varchar(45) DEFAULT NULL,
  `comp_occ` varchar(45) DEFAULT NULL,
  `comp_mes` varchar(45) DEFAULT NULL,
  `comp_dis` varchar(45) DEFAULT NULL,
  `comp_buc` varchar(45) DEFAULT NULL,
  `comp_ling` varchar(45) DEFAULT NULL,
  `amal_occ` varchar(45) DEFAULT NULL,
  `amal_mes` varchar(45) DEFAULT NULL,
  `amal_dis` varchar(45) DEFAULT NULL,
  `amal_buc` varchar(45) DEFAULT NULL,
  `amal_ling` varchar(45) DEFAULT NULL,
  `recur_occ` varchar(45) DEFAULT NULL,
  `recur_mes` varchar(45) DEFAULT NULL,
  `recur_dis` varchar(45) DEFAULT NULL,
  `recur_buc` varchar(45) DEFAULT NULL,
  `recur_ling` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dentition`
--

LOCK TABLES `dentition` WRITE;
/*!40000 ALTER TABLE `dentition` DISABLE KEYS */;
INSERT INTO `dentition` VALUES (1,'20250718084109','20250830155939','55','OK','','','','','','','','','','','','','','','','','','','',''),(2,'20250718084109','20250830155939','61','OK','1','','','','','','1','','','','','','','','','','','','',''),(3,'20250718084109','20250830155939','18','','','','','','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `dentition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productout`
--

DROP TABLE IF EXISTS `productout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productout` (
  `id` int NOT NULL AUTO_INCREMENT,
  `refno` varchar(45) DEFAULT NULL,
  `caseno` varchar(100) DEFAULT NULL,
  `service_id` varchar(45) DEFAULT NULL,
  `unitcost` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `gross` double DEFAULT NULL,
  `trantype` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT 'pending',
  `datearray` date DEFAULT NULL,
  `timearray` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productout`
--

LOCK TABLES `productout` WRITE;
/*!40000 ALTER TABLE `productout` DISABLE KEYS */;
INSERT INTO `productout` VALUES (4,'RN20250826103404','20250826103404','20250717083721',30000,0,30000,'cash','paid','2025-08-26','10:34:04'),(5,'RN20250826103621','20250826103621','20250717083530',2500,0,2500,'cash','paid','2025-08-26','10:36:21'),(6,'RN20250830155939','20250830155939','20250717083439',1000,0,1000,'cash','pending','2025-08-30','15:59:39');
/*!40000 ALTER TABLE `productout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `receivables`
--

DROP TABLE IF EXISTS `receivables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `receivables` (
  `id` int NOT NULL AUTO_INCREMENT,
  `refno` varchar(45) DEFAULT NULL,
  `customer_id` varchar(100) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `amount_paid` double DEFAULT NULL,
  `rem_balance` varchar(45) DEFAULT NULL,
  `datearray` date DEFAULT NULL,
  `timearray` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receivables`
--

LOCK TABLES `receivables` WRITE;
/*!40000 ALTER TABLE `receivables` DISABLE KEYS */;
/*!40000 ALTER TABLE `receivables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `service_id` varchar(45) DEFAULT NULL,
  `service_code` varchar(45) DEFAULT NULL,
  `service_description` varchar(100) DEFAULT NULL,
  `service_unitcost` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (2,'20250715083708','EXTRACT','TOOTH EXTRACTION',500),(4,'20250717083439','Filling','TOOTH FILLING',1000),(5,'20250717083504','ORAL','ORAL PROPHYLAXIS',1500),(6,'20250717083530','WHITENING','TEETH WHITENING',2500),(7,'20250717083546','VNR','VENEERS',1000),(8,'20250717083600','CRWN','CROWNS',2000),(9,'20250717083644','DENT','DENTURES',1000),(10,'20250717083702','BRIDGE','FIXED BRIDGE',2500),(11,'20250717083721','ORTHO','ORTHODONTICS',30000),(12,'20250826100550','BRD','Braces Adjustment',1000),(13,'20250826104035','TWB','Teeth Whitening Balance',1000);
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-09-01 15:45:07
