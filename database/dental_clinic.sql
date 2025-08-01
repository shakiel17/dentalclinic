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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admission`
--

LOCK TABLES `admission` WRITE;
/*!40000 ALTER TABLE `admission` DISABLE KEYS */;
INSERT INTO `admission` VALUES (2,'20250722091656','20250718084109','2025-07-22','09:16:56','discharged'),(3,'20250729151610','20250729151534','2025-07-29','15:16:10','discharged');
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
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collection`
--

LOCK TABLES `collection` WRITE;
/*!40000 ALTER TABLE `collection` DISABLE KEYS */;
INSERT INTO `collection` VALUES (44,'RN20250729151920','20250729151610','OR250729154051','11','CASHONHAND',50000,10000,'cash','','','PAID','RN20250729151920','2025-07-29','15:40:51',NULL),(45,'RN20250729154051','20250729151610','OR250729154121','11','CASHONHAND',40000,10000,'cash','','','PAID','RN20250729154051','2025-07-29','15:41:21',NULL),(46,'RN20250729151919','20250729151610','OR250729154101','9','CASHONHAND',1000,1000,'cash','','','PAID','RN20250729151919','2025-07-29','15:41:01',NULL),(47,'RN20250729151921','20250729151610','OR250729154101','2','CASHONHAND',450,450,'cash','','','PAID','RN20250729151921','2025-07-29','15:41:01',NULL),(48,'RN20250729151922','20250729151610','OR250729154101','7','CASHONHAND',1000,1000,'cash','','','PAID','RN20250729151922','2025-07-29','15:41:01',NULL),(49,'RN20250729154121','20250729151610','OR250729154126','11','CASHONHAND',30000,20000,'cash','','','PAID','RN20250729154121','2025-07-29','15:41:26',NULL),(50,'RN20250729154126','20250729151610','OR250729154205','11','CASHONHAND',10000,5000,'cash','','','PAID','RN20250729154126','2025-07-29','15:42:05',NULL),(51,'RN20250729154205','20250729151610','OR250729154211','11','CASHONHAND',5000,1000,'cash','','','PAID','RN20250729154205','2025-07-29','15:42:11',NULL),(52,'RN20250729154211','20250729151610','OR250729154216','11','CASHONHAND',4000,2000,'cash','','','PAID','RN20250729154211','2025-07-29','15:42:16',NULL),(53,'RN20250729154216','20250729151610','OR250729154221','11','CASHONHAND',2000,500,'cash','','','PAID','RN20250729154216','2025-07-29','15:42:21',NULL),(54,'RN20250729154221','20250729151610','OR250729154226','11','CASHONHAND',1500,500,'cash','','','PAID','RN20250729154221','2025-07-29','15:42:26',NULL),(55,'RN20250729154226','20250729151610','OR250729154235','11','CASHONHAND',1000,1000,'cash','','','PAID','RN20250729154226','2025-07-29','15:42:35',NULL),(58,'RN20250729143031','20250722091656','OR250730082655','10','CASHONHAND',2500,500,'cash','','','PAID','RN20250729143031','2025-07-30','08:26:55',0),(59,'RN20250730082655','20250722091656','OR250730082749','10','CASHONHAND',2000,500,'cash','','','PAID','RN20250730082655','2025-07-30','08:27:49',0),(60,'RN20250730082749','20250722091656','OR250730083023','10','CASHONHAND',1500,500,'cash','','','PAID','RN20250730082749','2025-07-30','08:30:23',0),(61,'RN20250730083023','20250722091656','OR250730083030','10','CASHONHAND',1000,500,'cash','','','PAID','RN20250730083023','2025-07-30','08:30:30',0),(62,'RN20250730083030','20250722091656','OR250730083117','10','CASHONHAND',500,500,'cash','','','PAID','RN20250730083030','2025-07-30','08:31:17',0);
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productout`
--

LOCK TABLES `productout` WRITE;
/*!40000 ALTER TABLE `productout` DISABLE KEYS */;
INSERT INTO `productout` VALUES (14,'RN20250729143031','20250722091656','10',2500,0,2500,'cash','paid','2025-07-29','14:30:31'),(17,'RN20250729151919','20250729151610','9',1000,0,1000,'cash','paid','2025-07-29','15:19:19'),(18,'RN20250729151920','20250729151610','11',50000,0,50000,'cash','paid','2025-07-29','15:19:19'),(19,'RN20250729151921','20250729151610','2',450,0,450,'cash','paid','2025-07-29','15:19:19'),(20,'RN20250729151922','20250729151610','7',1000,0,1000,'cash','paid','2025-07-29','15:19:19');
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (2,'20250715083708','EXTRACT','TOOTH EXTRACTION',500),(4,'20250717083439','Filling','TOOTH FILLING',1000),(5,'20250717083504','ORAL','ORAL PROPHYLAXIS',1500),(6,'20250717083530','WHITENING','TEETH WHITENING',2500),(7,'20250717083546','VNR','VENEERS',1000),(8,'20250717083600','CRWN','CROWNS',2000),(9,'20250717083644','DENT','DENTURES',1000),(10,'20250717083702','BRIDGE','FIXED BRIDGE',2500),(11,'20250717083721','ORTHO','ORTHODONTICS',30000);
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

-- Dump completed on 2025-07-30  8:31:50
