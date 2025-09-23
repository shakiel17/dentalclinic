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
  `ap` varchar(45) DEFAULT NULL,
  `dateadmit` date DEFAULT NULL,
  `timeadmit` time DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admission`
--

LOCK TABLES `admission` WRITE;
/*!40000 ALTER TABLE `admission` DISABLE KEYS */;
INSERT INTO `admission` VALUES (7,'20250826103404','20250718084109',NULL,'2025-08-25','11:34:00','discharged'),(8,'20250826103621','20250718084109',NULL,'2025-08-26','10:36:21','discharged'),(16,'20250830155939','20250718084109',NULL,'2025-08-30','15:59:39','discharged'),(17,'20250902092906','20250729151534','1','2025-09-02','09:29:06','Active');
/*!40000 ALTER TABLE `admission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `braces`
--

DROP TABLE IF EXISTS `braces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `braces` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(100) DEFAULT NULL,
  `images` longblob,
  `category` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `braces`
--

LOCK TABLES `braces` WRITE;
/*!40000 ALTER TABLE `braces` DISABLE KEYS */;
/*!40000 ALTER TABLE `braces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certification`
--

DROP TABLE IF EXISTS `certification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `certification` (
  `id` int NOT NULL AUTO_INCREMENT,
  `caseno` varchar(45) DEFAULT NULL,
  `recommendation` text,
  `no_days_rest` int DEFAULT NULL,
  `datearray` date DEFAULT NULL,
  `timearray` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certification`
--

LOCK TABLES `certification` WRITE;
/*!40000 ALTER TABLE `certification` DISABLE KEYS */;
INSERT INTO `certification` VALUES (1,'20250902092906','Need to xray',5,'2025-09-03','12:07:27');
/*!40000 ALTER TABLE `certification` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collection`
--

LOCK TABLES `collection` WRITE;
/*!40000 ALTER TABLE `collection` DISABLE KEYS */;
INSERT INTO `collection` VALUES (14,'RN20250826103404','20250826103404','OR250826103414','20250717083721','CASHONHAND',30000,10000,'cash','','','PAID','RN20250826103404','2025-08-26','10:34:14',0),(15,'RN20250826103414','20250826103404','OR250826103714','20250826100550','CASHONHAND',20000,1000,'cash','','','PAID','RN20250826103414','2025-09-26','10:37:14',0),(16,'RN20250826103621','20250826103621','OR250826103643','20250717083530','CASHONHAND',2500,1000,'cash','','','PAID','RN20250826103621','2025-08-26','10:36:43',0),(17,'RN20250826103643','20250826103621','OR250826104055','20250826104035','CASHONHAND',1500,1500,'cash','','','PAID','RN20250826103643','2025-09-29','10:40:55',0),(18,'RN20250826103714','20250826103404','OR250830155257','20250826100550','CASHONHAND',19000,5000,'cash','','','PAID','RN20250826103714','2025-08-30','15:52:57',1),(19,'RN20250830155257','20250826103404','','20250826100550','AR TRADE',14000,0,'ar','','','pending','RN20250826103714','2025-08-30','15:52:57',NULL),(20,'RN20250830155939','20250830155939','OR250902093944','20250717083439','CASHONHAND',1000,1000,'cash','','','PAID','RN20250830155939','2025-08-29','09:39:44',NULL);
/*!40000 ALTER TABLE `collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contract`
--

DROP TABLE IF EXISTS `contract`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contract` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(100) DEFAULT NULL,
  `total_fee` double DEFAULT NULL,
  `initial_fee` double DEFAULT NULL,
  `monthly_fee` double DEFAULT NULL,
  `signature` longblob,
  `datearray` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contract`
--

LOCK TABLES `contract` WRITE;
/*!40000 ALTER TABLE `contract` DISABLE KEYS */;
INSERT INTO `contract` VALUES (2,'20250718084109',35000,10000,1000,_binary 'data:image/png;base64,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','2025-09-23');
/*!40000 ALTER TABLE `contract` ENABLE KEYS */;
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
  `treatment` varchar(100) DEFAULT NULL,
  `surgery` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dentition`
--

LOCK TABLES `dentition` WRITE;
/*!40000 ALTER TABLE `dentition` DISABLE KEYS */;
INSERT INTO `dentition` VALUES (1,'20250718084109','20250830155939','55','OK','','','','','','','','','','','','','','','','','','','','',NULL,NULL),(2,'20250718084109','20250830155939','61','OK','1','','','','','','1','','','','','','','','','','','','','',NULL,NULL),(3,'20250718084109','20250830155939','18','','','','','','','','','','','','','','','','','','','','','',NULL,NULL),(4,'20250718084109','20250830155939','27','OK','1','','','','','1','','','','','','1','1','','','','','','1','',NULL,NULL),(5,'20250718084109','20250830155939','15','OK','','','','','','','','','','','','','','','','','','','','',NULL,NULL),(8,'20250729151534','20250902092906','16','OK','','','','','','','','','','','','','','','','','','','','',NULL,NULL),(9,'20250729151534','20250902092906','21','D','1','','','','','','1','','','','','','1','','','','','','1','1','Am',''),(10,'20250729151534','20250902092906','55','OK','1','','','','','','1','','','','','','1','','','','','','1','1','',''),(11,'20250729151534','20250902092906','54','OK','','','','','','','','','','','','','','','','','','','','','',''),(12,'20250729151534','20250902092906','53','OK','','','','','','','','','','','','','','','','','','','','','',''),(13,'20250729151534','20250902092906','52','OK','','','','','','','','','','','','','','','','','','','','','',''),(14,'20250729151534','20250902092906','51','OK','1','','','','','','1','','','','','','1','','','','','','','1','',''),(15,'20250729151534','20250902092906','61','','','','','','','','1','','','','','','1','','','','','','','','',''),(16,'20250729151534','20250902092906','62','OK','','1','','','','','','1','','','','','','','','','','','','1','',''),(17,'20250729151534','20250902092906','63','','','','','','','','1','','','','','','1','','','','','','','','',''),(18,'20250729151534','20250902092906','17','OK','','','','','','','','','','','','','','','','','','','','','',''),(19,'20250729151534','20250902092906','48','Rf','1','','','','','','','1','','','','1','','','','','','','1','1','Co',''),(20,'20250729151534','20250902092906','75','OK','','','','','','','','','','','','','','','','','','','','','',''),(21,'20250729151534','20250902092906','18','Ex','','','','','','','','','','','','','','','','','','','','','','');
/*!40000 ALTER TABLE `dentition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `pfamount` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctor`
--

LOCK TABLES `doctor` WRITE;
/*!40000 ALTER TABLE `doctor` DISABLE KEYS */;
INSERT INTO `doctor` VALUES (1,'Clark Kent A. Hermosilla',500);
/*!40000 ALTER TABLE `doctor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prescription`
--

DROP TABLE IF EXISTS `prescription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prescription` (
  `id` int NOT NULL AUTO_INCREMENT,
  `caseno` varchar(45) DEFAULT NULL,
  `customer_id` varchar(45) DEFAULT NULL,
  `description` text,
  `quantity` int DEFAULT NULL,
  `route` varchar(100) DEFAULT NULL,
  `frequency` varchar(100) DEFAULT NULL,
  `datearray` date DEFAULT NULL,
  `timearray` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prescription`
--

LOCK TABLES `prescription` WRITE;
/*!40000 ALTER TABLE `prescription` DISABLE KEYS */;
INSERT INTO `prescription` VALUES (3,'20250902092906','20250729151534','Clindamycin',21,'Oral','3x a day for 7 days','2025-09-03','09:46:08'),(4,'20250902092906','20250729151534','Mefenamic Acid',21,'Oral','3x a day as needed','2025-09-03','09:47:03');
/*!40000 ALTER TABLE `prescription` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productout`
--

LOCK TABLES `productout` WRITE;
/*!40000 ALTER TABLE `productout` DISABLE KEYS */;
INSERT INTO `productout` VALUES (4,'RN20250826103404','20250826103404','20250717083721',30000,0,30000,'cash','paid','2025-08-26','10:34:04'),(5,'RN20250826103621','20250826103621','20250717083530',2500,0,2500,'cash','paid','2025-08-26','10:36:21'),(6,'RN20250830155939','20250830155939','20250717083439',1000,0,1000,'cash','paid','2025-08-30','15:59:39'),(7,'RN20250902092906','20250902092906','20250717083504',1500,0,1500,'cash','pending','2025-09-02','09:29:06');
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

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `companyname` text,
  `address` text,
  `contactno` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `logo` longblob,
  `clinic_hours` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'HERMOSILLA DENTAL CLINIC','Hilaria`s Building 029 Old PC Barracks, Brgy. Sudapin, Kidapawan City','09951937188','hermosilla.dentalclinic@gmail.com',_binary '�\��\�\0JFIF\0\0\0\0\0\0�\�\�ICC_PROFILE\0\0\0\�lcms\0\0mntrRGB XYZ \�\0\0\0	\0\0acspMSFT\0\0\0\0sawsctrl\0\0\0\0\0\0\0\0\0\0\0\0\0\0�\�\0\0\0\0\0\�-hand��\0=@��=@t,���\"�\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0	desc\0\0\0�\0\0\0_cprt\0\0\0\0\0wtpt\0\0\0\0\0rXYZ\0\0,\0\0\0gXYZ\0\0@\0\0\0bXYZ\0\0T\0\0\0rTRC\0\0h\0\0\0`gTRC\0\0h\0\0\0`bTRC\0\0h\0\0\0`desc\0\0\0\0\0\0\0uRGB\0\0\0\0\0\0\0\0\0\0\0\0text\0\0\0\0CC0\0XYZ \0\0\0\0\0\0�T\0\0\0\0\�XYZ \0\0\0\0\0\0o�\0\08�\0\0�XYZ \0\0\0\0\0\0b�\0\0��\0\0\�XYZ \0\0\0\0\0\0$�\0\0�\0\0�\�curv\0\0\0\0\0\0\0*\0\0\0|\0��u�\�N\nb�\��j. C$�)j.~3\�9�?\�FWM6Tv\\dl�uV~��,�6�����۾�\�\�\�e\�w�����\�\0C\0		\n\n	\r\r\"##!  %*5-%\'2(  .?/279<<<$-BFA:F5;<9�\�\0C\n\n\n9& &99999999999999999999999999999999999999999999999999��\0��\"\0�\�\0\0\0\0\0\0\0\0\0\0\0\0�\�\0O\0\0\0!1AQaq��\"2���#BRbr\�3S���$C�\��4c\�\�DUs�5ET��&���\�\0\Z\0\0\0\0\0\0\0\0\0\0\0\0�\�\06\0\0\0\0\0\0!1A\"2Qaq��#3��\��BR\�b�$�4�\�\0\0\0?\0\�Q\0DDD@\0DDD@\0DDE�q�[-��mt��\\�\0[�F�\�\�Vl\�M�w��\\9L��Ki ��#\�ca�\��W\�yO�I�KEM\0=/&B>ܳOL{\�X��\�j\�\�e�\�����\r�����\�=Us\�b�N\�~\�gr��\0 ��-�}��Y�\�S3Oc��\��QY\"8}ڄ\�\'i>\�xt��\�\�\���>y]��i}x���g\�\�&��U\�\�J�̍�W`�\0ͩ�~Y`?KR�=P�\�}\��u\�M��\�\���\0k��*\�r\�[�:u�v\Z�O8\�]i�I%\�\�Mb��\��N亼V\�LOk\\,��\�\�\�C\'t��u�+�\�\��F�\r\�\�?\�k�d����\n\��Aab��}�\��i#��\�ߙ�\�}MD\�[\�\�\�\�\��R�l�y�ϐ\���#sE��Ƭ�~Ҧ\�oD\�q��\�\���;q\�\�\�\���_Mxivf<�\�J�\��\�c\�t/�|U�ݭl�\r�d/?fq\��\�\�z\�MS\�Er�q\�_1\�\�X\��i\�+\�^V\0DDD@\0DDD@\0DDD@\0DDD@\0DDD@V��\�\�hڏ������k��bϯZ��u&*wz.8���\�\�>XYm\�\�^\�\���aL�j�[��\�\�k�b�\�\�\�r��Q�R����\�Uw�ڃ��#�U\�N��\�H�H}\'o2T	�\0/5v�rqh�\�\�_%t��\�a�C�Tu17y�Y��r�(Uz�Q\�\�\�[UR��\�4�\�\r\�|r�-�PW\�\�m3]�j��>C\'ܶ*:*Z��Jh��\�\��\�\�^\��\�d��\�Y\�%\�4_q�祰07\�s�V\Z-��0E\0�\�\�L\���p�+\Z-0\�U\"T\�\��t�m٥���D�\�\�^踪n�\�\\�E,t>f��Wf��n\�\�U��m� 8u\�7�ls�qI\�&�g�4�~XO\�\n�}K�/�%\\\�bڊ�\�Slm8�\�\�����9N��\��\0�����S�GzS�.ȩc��\�p�.��CӲ{S\�\�\�,��MO��\�Oж\"��Y\�\�\�t�~v���=\�\�S�b\�I.~\�\�?5b�\�.2\\��GV\�m\�56\�Y~ьy�\�Do\�I\�Kf�&\�>���@&=+�9�6����7.Ln0\�\�5pT�\�\����\"\�<3\���7Mw0�h5�y�\�[E�2FHi�\03w1j\�\"�I�ղ*\�\�K�\��\�\�r\�\��u\��;�Ӧ�dR�� �\�\�|AY�\�e{\�2μe\�D}��+%yk\'t�R�����\�>xV���h\�$R2H\�2Ð|V_y\�ʮ�-uM�oDR���<�V#���\��Z\�3��U�s�>\�m[]�ތ\'\�f�7��\�W�\\ts�p�i�}�\\��p	\�jc�>�üw�#\�l��\��\�(r��DW��\"\"\0��\" ��\"\"\0��\" ��\"\"\0��\" ��\"\"\0��\"�p\�i8#�\�G��v-���\0H�\�Dw�\�x�b\�o:���e�f9�\�!\�i����7�\�ا�&UO�JZ\�\�mm6N28uc�{�W���X\�آ�\ryt�\��w��ܼ\�E\�)xbiR���\�ά<�W\�l\�s�\�\�;���H~C�\�Z�M\�l�\Z:F	G_\�<��R\�Ն��\�S�S\�\"��^��x�\�\�\�#!�\�\�\�h\�U�\�x���\�\��mGɣ��R�]~fr5\�\\#H\'\'���j��-��9$\�\���\�ݸx���\�}U!\0\�U���l\�<�\�\�\�|�\\&\�\�QR�\�0s��\�V_�\�g\�C\�˺1������4e�\�z�;����U\�{�\�]�\�kv\��g%_�ܟ\�(�2A%[\�ڝ�CX�((蛳IK\r\�0߂t1�\�/�\�U,s1�hշ\��Ap����yk|6����k\�\�\�u$���������d\�8�2\�\�K*\�\�3�B]�!w\�\�u[q�\�c[���+\n����}\�K92�5\���q\�ŀ7�$��w��\�\Z���\�V~�5��\�\\7:��ҏ�\\�r]m?���g\�\rw\�+\�.<-/�GZ~�k7%n\�\r\�\���xr��\�\��L5s��4�\�=\�[E[�\��X��\�?o\������\�d�a\�+*@h\�9�-F\�A5���\�WO[7K)\�OgP]謧\r\Z�̌\�s\�\"\"\�V\0^5T����\Z�#�\'qd��\�\�`�_96���\�+�%\�ͼ�F~c\�ܨ5�\�ޖ�l�l���M�Ww8n=\�y^s\�DN�h\�$ns\�A��V\�-\�/��[=ќi\�R\�ݘ/P\��\��f��KD�����mE$\�p{G�ꋩ97�}��3\�q4\�>�\�=\�F���iK�kL\�s�j7U\�p#�\�R���f�I�\�f�ٛ\�*~�ה7}�z͚:ø~�\��wz�/B�#b\�,\�(���DE2!D@\0DDD@\0DDD@\0DDD@s\�\�R۩�SY;!��\\�\�سmG\�D�\�٘`���<e\�p\�M؈T�L�+��/�\�Al�ŷ]P\Z�2؛�\�\�3�g7\�Q�5\�\�l�\�\�;����k�Ǣ��=2�阮C�f�.���\�\�i+i��\�jp�\�\���\�\�\�g�\�q\�\�]�u�3[V��^\�����x\�r\�I/wn\�\�z�\�%�e�D\�هڟ\��o<�Z+\��\�\r�\����җ��l��dlkр֌\0������\" ��\"\"\0��\" ��\"\"\0��\" ��.+����Li\�\�3:	\�\�\��Qq�\�L\�yn��Th\n\�P}Mu] \�@X�\�:Gh�_�S^VZv)nuTCp$\�H\�a\��l\n��t-\�n�߱MZw�\����м�0��\����Ii��[��:VUQ\�ɡw4�\�#��.��P\\.�N\���>	�q,2{/�����i}QC�i�	檚3$>�\�c�]�\�\�\���)p\�n�\�DZ\�B\" ��\"\"\0��\" ��\"\"\0��\" ��\"\"\0��&�8\"|\�H\�\�`˞\�i@}���ִV �xvjk�s`��?����*��\�J��++�<S�\���C��r\�\�z�\�YYr/��w����\�C��\0\�`�)˧F\�\�\�\Z�V�ƶ�\0�n\\_;�I�b�|\���#L\�u���f��ѿ�x�X��\�V\Z\n\Z[u+)h\�d0��Z=\����e8H�\��#;���\�\"\"\�R\0DDD@\0DDD@\0DDD@\0DD��NP\�\Z^n��4}\\\��?Qر뵪\�n�\�s���j\Z�\�\�X?��\�v�\�\�(�I[�\'p\�i\�����*�\��]U\�>\n��\�p\�\�:\�\�n-86^\���yv[��4\�n��i.s\�\�\��P\�\�\�A\�pW\�	�\�uk-\��\�4a�;�\������z�V\�\�[R\�\\8.舷�\�\" ��\"\"\0��\" ��\"\"\0��\" ���u��о��M�\��t��\0:J\�i,\�Գ\�w+�-���u�6(YĞ�\�I\�X\�\�ڢ��\�2FRmb*v\�s\�Av8�Ώz�]\�z\��Q\�\�\�zf���\�\�~KI\��>�O\�\'�f{���&73���J�e9\�\�G\�ң\ZVr\�Ѻ\n:-�\�[-OAű���\�����\�Tj���\�77���\"\0DDD@\0DDD@\0DDD@\0DDD@\�q���Q\�IWe�A�4�GQX��\�UZf���s\�^\��8\�A�\���n+�\�n��\�\�GW|2�z\�!f\�\�\��-�\�\�V4�m\�A\\�.�\�;�掞��\�\�rXF��\�ik�[�\��\�\��h�\�:BԴN��P\�\�JZ\��@\�Y��\��\�\�\�}+<ȝ��\��\�8DDD@\0DDD@�UL4��TTH\�፥\�{�\0�\�\�r��\�\�YY d1��I+�]�Z\��#�\�\�v\�=;NC\�\�O\�/MW�*�MՑ@\�=�ا�qq;�GY�-#EiX��;0k\�����[\�\�ּ\�\�X�菕\Z\�T\�S\��\�\ZZ�N\�d\�\�] �ٱ\��|~$E\�\��tǃ,�\��a�D@\0DDD@\0DDD@\0DDD@\0DDD@\0DDm�\�K}�IGT1�\�x\�wA��-%\�y��wd�#~`��*ָ\�L\�ݨ�t\0�]\�k���\�|V<^��\�̋\�K\��d���S߭�\�S\�\'Ւ<\�c�B�Xf��O��R�;\�7S�u�\�-\�c�M\�㑡\�sNA�R\�\�:\�ߕ\�k\����DZ��\" ��\"\"\0��\" ��,��mS��I�QI�(��i\�+\�\�|w�+7)\Z�\��i_�ʖ�\��\�\�{\�>\�Z\�\�L�Wҕ�\�}[\\7H��\�⬕�\�W�4\�ԑb\�\�Ju;n�\��\0|��T\�\�4�\0�����\"-�U\Z���\�\�\�\�\"+�D@\0DDD@\0DDD@\0DDD@\0DDD@\0DDD@f��靂o�l\�H-�\�\��v�\�K�&\�uO\�r\�g2Ϙ�\�Z<\�G</�V\�����!aڦ\�>��B\�=�-4��3�X;����\�خ�\�U�dtH\�C\�K\�w\�4Uca\�L��^8�>*az1��RFf�y0��G\" ��\"\"\0��\�\\\�\�\'��>�M\�oK�@\�v���\��d\�5!���\�t�p\�ʣwF]\�*��dC\�i+u��\"W��\�d�A\�68\��m�T�P\�EKM��\Z֎���O%��L\�V\�\0�sţ��=�Y\�xJ:q\�.Y+�\��\\ ��YHDDD@\0DDD@\0DDP\Z�V[l \�3\�-Qł\�\�z�ܨ�z⎵\�ެBx�\�\�V�|F{q5\��or\�\�)o���\�ik�]q\r}5e�c�$R8�yg�T\�6\��$�N\�\�t��\�\�\�`\'�j�q:�K?��\0����嗴T\�v��:�B�Q\�n���Ia\�\�\�v��3E<M�$ok\�r\�*\�[<���\�\����\�!|\�#\"c�#\�\�4d�\�\0 >�W.Z\�\�A�鞒��i\�\�|x{\�v��\�\�\�7\�I6�⨞&�s\"\�T\�\�QgTܨ��6�5�q˓\�@��M�VZ/n\�T\�?\�\�6^{��)MSyE�U8�\�DW��D@\0DDU�N��\���\�<\�ä\0\�0���\�z�\�kT�ģ\'�-*��,\"�e{#nj\�̐�z[\����:�#��\�#C\�\����蓊�./�r-\�\�S@ߍ��#�Ŵ�$G(?d�;���[Z\��L�m\�WB\�SV\�\�\'\�<|OR�rw|7{a�٪�\�o\�7\�\�w�Ä��n�|�%$�E��f��\"\"\0��\" !5�\�X�sU4�}\�W?|��o>7\�\�\�o7�YR\�\��\�\��\�\�;z\�wj�\�&�\��PӒ�i4\�\��Rk߁ഭ)fe�\��\�\�\�/<|�w\��1���d�\"/D\�\0DDD@\0DDD@\0DDW���V\�X5s�\�A\�\�w�ąaX\�)�\�\�\�A��\�X\�\�:2F\�>�x,ػ]U\�e�\�T�*\�K$�Y^\�\��\\\�8\�\�W\�-OE\�x)`��\���\�i�<e�����|�M2�Y#l栳f{Ab�\�ZIo����\�i�;��%�V\�%4�up�t\�\�s\�@\'#���^��\�o�\�ex���z��\�\�\�5��\��\r�\�XZz\�\�\��{�Mެ\�t�\�UR?\�\�\�v����qW��xjc1TC��-����\�Ag��\�M\�8\�\�f2z�>\�\�·\�\�\�߇�\��o�T�\�\�]\�^m54�\r��c��]�y�\�\�Sl\��i+\�\�c��ʢ�\n����c��vF�\"���6,\�\�?�\0\�.�\�\\I}j��)u��\�V}E�\�\�\�\�\�;���\�4\�\�a�H��\�\�\�Ҥ\�����թ�i\��MO,���4{���\�\��&�\0#�\�*3*^K\�]�Us���F_\�$/yy.n�\�\�o�j\r\�ԴdRX*r\�\�^~����\���Ա�S�\�MKs\�z��i-psI�:�=m,5Ԓ\�\�0>ZZ枥�\\)]C_SH�A#�\'�^v/�iǆi�\�k&j|�j9n\�rP\�H_WL<^\�=�\�\�hW5�r{T�]WF\�͵�X ��[Z�0V�+ߔg�*2\�\"\"\�R\0DDQ�P��u��H��A��\�\��|��\�U\�|����c\�\�x���dY(I\�\�%W\�H��\�;�%?�zXN�\�O��_\�#_�3XD��H�\0G�\�#�-���*�h�!v\�R�=�\�d,�;��\\Ķ���.��\�Y*(�\�p�\��\��\�%d�.\�\���\�\�d<\�\�\�\��=\�\�n+\�>\�-��Yq\rh/8\�{^{��U\�`\�\�\��Y\�\�\�Wt\�\�}9N\�3\��L�d�\�c\�*ķBjqR]\��Z^L\"\"����\" \n/S\�[e�UV\�m�����\�߿�J,Õ��9UKk�ެC��~#���g\�Q���[�eP\�$�\�M-&\�5ӂ��>��oڐ�?3\�\\\����\�8{q5G\�\�\�\�p�cQ\�Uӭz�\�\�=R���D@\0DDD@\0DDD@\0XF�qv���r}!\�޷u�k&lj�������\��\0Q�/��\r\�go\'v�ܵ$FV\�CL\�3��\rd�,\�\0�\�PF�\�0�$�B\�U�i�?R�\�DE��\"\"\0��\" ��,3[c�Ur\�\�\���\�\�����V^�\�A\�d�\�ov\�ǹy\�\�_�/sNn\�^O 3\�\�-ۣ\�y�i�\�mk1䎄����\�tq��{\\r�y�9Y��Ug\�G�DE��\"\"\0��\" (ܪ\�=*\�\�6\�ZGa�\�c�C�2�9)��U�[l�̔�\�fzX\�\�\�\�+�U<Ut\�\�Lݨ�ac\�X#c\Z~�M-�S��SO1\�	\�{�;�y�}\��ٚk�\�\�\�m���m?Ki������s\��\�G�ϹX�n�\�\���\���ѐ�Yt�;�\�EX͑�ۼ{�<V���CI&�\�S6S��M\�nv�\�\��m�Q\�P\�\�\��9\�l�\�#+M\'S\�\�\�K�Ј�y�\"\"\0�����c�\�Z2I\��k�f�\��T\���ۿ\�0�\�Pn?Giz�\�bJ�@\��q�P\�U\�ݵ5u\�\��\0�3\�w�\�\�5\�\�~�\�U�f��0s4\�\0�\"/@\�\0DDD@\0DDD@\0DD�r�7�\����\�\�ƭ�d��S��3\�\�NӞ\�H�aaǬ\�\�ܿ�e��V\�\�V��#ɭ�U\�Qy$~l��\�\n�㽣�W�v�bB\�;���D@\0DD��\�-v*\�\�\�\�\�v?1\�\�yZ_+W=�)-lw��\�H;\���\�ZR\�oW\�j2	��nS\������^>6N\�TcmL53V\�6\�l\�4\�{q-G׿�\�=�+�\0\0\0\0���hAB*+��OS\�\"\"����\" ��,���_1s��1��K6xy�y-UV�B�}!���3%>\'g�x�\0)rϋ��SE�\�L\�գ�Ki\�:�;2�sru\�7q><|T\�\�y!�o����N����\0Jҗp\�u*R9ltͣ6\�zۺ�\��\��\�\��)nK.^���H\�fJ9G\�v�\�\�\n[[\�}#�+\�/c9\�u\��\�\�\�J��Q:�\�ԫ��\�\�X{��\�Y�\�)>\�-^:Z�5�D^��\"/��\�Hc�\'\�\�\�ׂ\����\�Ȉ�̹_�ڨ����\rt\����\�j\�\���\�J F83;�h\��\\/�_+�YU-Sfpk~�\�\0P �2c�&\�\�CZ:�%t\�]+%�.�\�MEh����D@\0DDD@\0DDD@\0DDg��Q�\�\�V��)�\�2?�޴	�(>�\�5Ё��>u�\�\��#\�S�����\�-2L��A?�\03�\'�o���-cܗՊ}P؉\�S\����V©�\�:R�\'z\�a��\" �	\0d�\0�n\Z�\�oȚ\��>\�_X}\�Ǌ���\��:�|k�$�UXj�꛵m\�\�*�{y��\�xk\�U�ڨ�RWV\�!~\�cNs��\���[�\n.K�%\\�H\��M\�\�/�u����\��\�\�^L���ju\�fbz\�\�c\��\�\�Z6\�\��\�8\\\�\�\�}d\��=]營R\�\Zֱ���\0�Â�\�N\�\�-+B?Qz�P��\"��\��\�[)��U�\�툁g�<\�\�ʌ��\�ԛ\��Ek�WIu}�\�G��\��m-\�\��\�0r��2RY�\�AD\�o\�����)k���G�d��ǃGzJJ+6o�Y|\�\�\��{C�\�C�\�A\�\�.L�\�Q\\��ӊ��h\�?8ZZ2C�����2R\�4ъi������䆲�\�\�\�H$�<��o��GP\�\�TG\��C3H\�#q��>+\\�T��\�MT\�\�\��\�ł�Ju�2��Q�\�\�\�\�2\�\n��.\���d�(��{Z�zX\�)����\�\n�\�(�\�>��P��3]�\�3\�\�\�\�\��\�^��5\�z\�PN\\�\Zz\��[\��$ѝ��D�\�\'���\\�ji\�d�\�ni\�~�m\�2�)�����\�C+\�p\Z�_@�t��V��`\�o(Awf�6Rf∋\�3D@\0DDD@\0DDD@\0DDD@\�\0��W\� 0�Xtֲ\�����8vǜ�\�V\�FB\�9Z�suԗ7ՙ�\'�f\�`��\�HW�#�\�*	\���\��\�7\�?��UӶu�\������\�\"򪩆��J��1��=\�p	�>\�{\"�\�H���s�p\0\�%Q/ܣA\�=�S&q\�<\��\'\�\�z�U\�\�J�C@\�[F\\\ZȀ�\�wA8�r\�Z64L��cd��dt�{oo�n|�]١B0YϟB�M\�MK�\�	i���@7? \�<w�m�KY\�ᦚ����/��\03\�\�\ni�\�\���Y\\��۰X潹���}�2GNy��\��OϬGy\�\����_BX���\�L\�U^\�\����w�]0acoU��׏\�\�w\�\����\��N\';d��œ�(\'6Y���;����O^w��uw���E�1PJ+��\�y���G򩨆�\�Q+b�1�=\�\0\�r�S[)SU&\�cpyq\�\0t�Ԣim\�7��W\�c؅�j��\�\�t�n\�\�;\�%-�\\�K�>G�\�M���\�xc՚���\��))��\��S�\�zXF\�0q=\0�WUe\\4�T\�\�ء�e\�wB��\�Oz��\�p�\�SDv��\�\�x�\�C��A�/%���\�w��ѧ\�\�6��W�f��W��ǲ\���\�T�\�\�\�\���h\�q8\0/���(\�䨩��C˞\�����R��ֱ�Z\�T�s�:�\'Sz�\�һ���n�\0���nϣYY�b����\�p�\�a����@�G�IR\�\�\�t\�\�zx�|�q\�z\�\�ĕ\�\�EO	s�\"�6䓹�\�v&�TԶyZ\�Y!vb�\��\�\�8}�\�:x�?���}��=\�\�s�}���c\\\�n�\'\r\�;\�{]�DVF:Q�3�X)s\r��eωǿ|\n��uU\�ZJ�\'.�j#\�\�v?*����L~\�VI\�\��\0R�䆣n\�]M�\�\��M\��V%\�\��W��/柁}Y�,޵��!���ZR��O\�\�ˍ�\�1\�\� �\�ظ\�D)yM��\�s\�U���	���ԋ:�j\�h\�I\�\�\�\�58\�F�ضtIɴk��ncM\�\�\����\�\�f��C\�ji¦{�r\��W\�P$\��}\�\�mk|\�\��T\�H#\�\�\�/݅��?�R�|L\���Lԑz`��\" ��\"�:���v�k|φ\�G ���\�\�\�|�F2\��ֲ��p\"��\�\�Db���T\\\�wC@/wSG�{Y-��ӿ��}MT\�\�\'�\�\�w`\��\n\Z�w-�d�\")���\"(*�SCM;驣����/���{��\n2�c�gRo�u-��;����&��\��\�׌��SMf�5�DE\�\0DD:\�\�������ږ!\�G\�\���\�|�\\6��m\�v�\�&`\�;��y�	dQ�\0�;_aޥ#���sO�?ұb>\�\�\�ۆ__���FB-�\�\�\�4�\�\rkFI\'\0�k�Y%\�Ԕ�sm\�;p\�Α��gP�\0b\�ʆ�0D\�53��\0uA�z\�\��c�W�<Ӣ�r5u,\�)�7=�\r\�\�>k\�\�[+gч\�\�Tc�E���,()\�v���ԭ\�Lp��OOy�yD[��5\�LL�ͅ�\�\Z\�\�\0$�/\���\� �\�Hb�\�5�7�Y\����\�\�JRҳ8�l�EHu��5\��%	\�\��\�\��\'�f�\0\0\0м�)������6\�M\�k[�\�Uz3o�\�)K?�DEi\0�\�:kU!��q\�vXƌ�G\rh\�%~\�n4��7\�T���\�kF\\�\rh\�%Fڭ�5m�ݚ=/QO������Ǥ�*\�\'���I.\�[-�um�^\Z=$\�\�g,�o\��g\�J\�+��ԒUU\�ء`\�q��ؼ��JkU7=P\��\�`\�\�wCZ:J���U\\j\�t�4�\�SQ��A\�~��z|�\��\0��\�w�\�GES}��\�t�\�RFv�h�\�\��:\�\�:\�ue=$�UR�(cs��\�k*������F\�ci\�w@Pt4�_jc�\\�tt���:7tuH����By6�\�w|\n::�\�Dw�N��3�KD�\0t��u�=<\�S\�����\���\�\�\0�\�멭ԯ����B��\�\�:\�b����P\�ʻ�N�\�õ���>_�|\�ɲݱ\�\�\�ͪ�l�5�\�sGs�\�\�\�u3�t�+Z\Z\�ր\Z\0�\0��\"�a�w\����p�\�0���ч��\��[\���ͳ_q�>\�L�#�KF�E\�\�\�!�\�o�HYg%lji�\�g���~K�b+f���Hה��O��M#�a�\0\�\�~J}Gj8�\�?r��Բ߲V\�Vpkئ)&?\"\"��\�6�S[�jG\�|c���(GY\�\�_\�b֦�Q8Ғ��=\�+���\�\�\�=\�{3\��\�b�\�CDE\��\" ��*�������+l��2�j�v�\0\�\�\��ǀ�]��\��]#y��\�\�\�\�\�B8�\�\�8�\����\�f����w9S1\����\�Sz���&�Z�\�o���Q\�IKd17\r3ں�d�D��]Yj�3T\�\�n��R��\�et\\k�\�\�R\�\�?b���\�Q6**���|����F\�\�@��\�zO��\��\�BQ]\�\�a���KYZ�5Χ|��4t1�M\n]J1QY#�\����p\"\"�Y-V���\�I3魴\�\�\���6�:J𩧂G�1e���\�\0\�K\�a�9\�{�z%\�\�[.�4�jC4�-t\���́\�{a\����\�\�\�N\�6\�6\�B^\\}#����[�d��N/��\0��\0�\�\�Y�^��C#���h\�\0\�\�\"\�R\0DDD@�+?�\�\�D\�\�Hp�t\�C�*�\�:�$�V�\�#K\\\�����]�� \�\�BZe�S\�\�P��PN�\�\�4\r\�{\�\�>�Z�\\+!�\�\�YP혡as�˽bW\Zz\�+��d:9`~\�R}\��#��\�\�Z\�\����v\�-!\�l@��u���1�88\�̍�T�\\2&��{�\�j��\�d\'do\�N\�=�m�f\�\�-����\�\�JGK\�Ӹ,ӓ;?\�\�L����\�\��\��o>k\�X\n�v>Y\�D��D^��/�\�l`\�m\�\�W\� ��.z�\�{}$�UR\�e\�?\���\�7I#�X\�K�N\0�Whc~��eΡ�[ vh\�p\�:\�޸H�P��\�rI.\���P\�\\�[y�FX\��\0�һ���\�\�}\��\�\�;{\�KN��L>��3�������\�Yz����\�[,\�8��\�\��\0�݃\�wY\����=\�s���\�j�7�C\�zPU\�\�7��\0\�$�e�9\�6yS��\�V\�ܜ0�\�tw�*Zic�\'\�+\�\�\��\�\0J�U�\�TW�?Bҿ#�T������7�Q\��<ؤ�MKW­�e�mRS�c�?�x\�\�=򷋽5�&�v��S��\�+����K�\�\�S�e�\�\�q��\�8[\�Gw�mV\�J\�ʩM]\�Q�*8���[ؠ�\�<�d��9\����ڦ\\\�{.��0R�\�:~\�\��\�%<���Tx \�a�D@|��lsz\�5ɓ�uu8�\�\���[:\�y<\����w�JË�Z�?���$��xV�����\�\�\���\�s\�\�6��p\�E�Ǭl|��\�I;&g\�D�<\�\�\�\�\��Ϙw\��Lf֐�?u�\�櫼��\�Y\�؏�\�꽙팏\��1G�Y��\"��\�WS\r4�5ብ\�q\��\�f7\n�u\�;�\�����o~\�z�E��/7\�\���\�BKg�Z����\����L\�\�\"q�|�^\�\�L�v�����F\�\�\�#�\�b\��\�\�{\�\�\�\�{w\ZF�\�\��\\1\�?�k�?�|J\�f���ٴ\��\0�\�?%\�FȬ�:\�[>��\�8\�\��\0�\�\�~\rAe?�^\��\0\��_b\�i-tC�\0\�g\�.�WK��PQ\�D\�a�\�\�A���\�pIJȮ�(�ɗK~��s\�5Ա\�(_�1I3Zg�}�	�GGZ��]GP�\�*\��ǀd�\�ܹŎ\�\�}DZс�\Zwy/�{5��v\�On��f\�e�\�֑\�\�\�Fq\�-\�I\��w\"�\�K�cg}�\�O4\�ǏI�(�\�`oK�}�\�SSu����8��s\�\�\�yɇ\���Z\�Ŧ+3�f\�\�\"򩨆�MQ+\"��.{݀<U���\�w���֫.̕�tӑ�\�Y\�wS|\�;\�n\Z�\�ճ���n�\��uF\�Tվ��\�D ���B̹ĝ\���Ǥ���9�x���ryi\�\�\�m��Q<5䓙\'���\�;�\�*;L\�W\\.w��\�MVX\�/kg�;��\�&��1F\\\�N�\�7\Z�\��:OJ�����c\Z\Zƌ5�`Թ�\�\\ �\�}\"/�Ș\�$sXƌ�\�8\0v��K�k\�\�4� \�*��YuMT�\�C\���U\�ݑ�\�z�\0\��mc\�`�i�\�\�i\�7%a��߾�\0wZ���~�zrV\�|����\��IQ\'�OK\�sG\�~Y\�P\�$����4\�\�\��T3e�8d\��\�犎ݦ-�5�>@ݩ�e;R\�z�\�p\0\�4\�,���+�luu\�\�\�\�8��3�G\���&2Y��\�.���\�ed5�|۳��\�ji\�5�E\�Q<Tоi\�dQ0e\�y��So\Z��\�m��\�\�4n/�� ��\�\�>j[-\�F.E\�6\�\�Ο�\�-4�jz�%|\�\�L\�$p-q\�\�#\�Bv&�u,�1\�D\�\�<\�ctr�l�θ>ۜZ�\0M\�j)X\ru8�\�\�ߘ�\0�\�O4�-�lO3�\�<z\�\\1���I��1�\0�(�q\�\��y>\0�ڎ\�%=��\�\" M|�\�\�F\�q��\�б\�i�\�)E\�\�]T\��[G\�4}�\Z\Z\�\�#�w\�L\�v�^{Nܬ�upWSGSK+e�A���\n�6���2\�Ok_���\�Ğ.s���.\�-�;M���7���ǋ�NI�$���G(\�E2i\�\�\�E�\���\�\07�z=^��S\�̶�\�g芕�W\���%(ǖE&�&Tu\\7	\�Ԇ9�\r �M�\�\���\�oJ���n���\�OM=�\'b�W�$w���ON�\�\�o�6E#�l��\rh\�B2Vq�&��}\"\�>�+Md����\��}l,\�N\�EP��\�%eUH؀ɀ\"w\�v{Gw�m�5\�E�N·$\�-�\�\�.u2\�MP\�l�N�bp%\�\�\�r�\r�\�lce�ٱ�\�fj���\�+�O\�(�#��}2�-\�iU��@\�v~\�\�ܬ됄���\�9%�O\n*:z\nfSR\�\�a`\�Xѹ{��\�\Z��\��GL\�K�\�C#�a\�xm��\�[)F7� ��\��\�5��wY\�\�03���\���.��9\�\�x\�\�Sv�e���\�#�[�=�� ��+��4\�}�ҥ�C3��\�=.�\�ym\0\0\0\0�\0��e?�̱��\�k�RZ��=$A�\�\\N�<����؊\"��)mNe8kꫥ��,#/wP\������+\�ɒ諏��\�@\�\�\�\�)�\�0R84�~)OOv�\�W_5eM�\�\\\�.�z�\�+�C�\�;�Oz�W\�\�U\�\�\�\����5�����4e�\�KV\'%Օ��\�\�\�=��lqM��I$�AĲ\�n�W�8\�2\�8\�\�T]����c�EK#\�kvZ\�u0\��\�\'�	7�.��N\�ֵ�äJ����Nf�i~\���\��0av��\�r\'�v>k+�k^�\0�}>I*��\�=�\0u���\�w5j��\�@�y4�\�\�(\\�\���\\�M\�_G\�\��z�\�y8��rE.\�\�/�M�\�\���R\�\�\�ۜ@d��Lw\�,��	��Y?}\�\�\��\0J�1b`\�U\�T��\"\"�L�r\�\�\�PMYP\�ErqĞ�;Iܸ\�K6̍ԗ	\�\�ڭ\�\�Ʒ!��\�>ԇ���H\�\��Z\�!��n#�c\'��I=�\�Q�n�vs\�[�qq�Ü\�ܳ\�\�;�{Tڄo[�\"Ryl�\"��FE\���`.s�\�\0\�U�H\�Ctu����`���\�\�4_yǤ�%zX�m�P�v̳��\'��Cĕ��}ھ]CP\��b�c�\�].\�[��YP�=o\���\'-�!|��1Šcp=%}\"��W\�tQ\�@��&\�>G���85�\�q\�\�;ԕn��\�n�\�܍\�㼛���lv��9ګ}4�/tch��Z+e�%<�8\�O��1�)EdM����\�\�\�\�\�m/�3�\0�����0z\�ܽ)�\�%��W��\�\�\Zr\�\�6a��\r\�\'*y�y\�\'�\�^����$�ִw\0^G˫g0\�\�\�b�ؒA�\�d}���ҽ+\�&��Kl�\�e��\�5��\�\�\�\�4�}\�\�P\�2(�\�F�\Zִ`\0:��Ǘo\����D1GL�&5����\0u����`��\�\�\�Ȣ`˞�`n�+\�ز\�\�\�gq���\��\0�\�Ǽ\�S�\�v\�qE�F\�z��\�2B\�jd��4CjI`\�\�*��$���^*\"�uS�i\���!\�$��dup\�8�WE��׷$a�UI�Z��ԏ=���/Z�M�\�4VRG;\�$\�^3��p<:UVW;\"����Vl\�ܨ\"��\�XX=iO�5i\�?�����[i)���e=4M�\�\Zƌ\0����Eeu���)�����SR\�\�m�����v��f9%>\�{�\�\��\�R0\�&�{j5@�x9m,ym<~h��aEJ͹<�;�l�VeM\r�XV��\�\�\��8��\�6�e\�\�r\�S\�R\�\r��[�\�6�6ag\�y\�\�5QKOR\0��\r\��\�y�F5�hk\Z\Z\���T$�Oa�>QFԖ�ʚzCv�\�j+*���8�\�ió�\�v=jB�5�Jֱۚ\�&�3�04���\�\�\�\�Ks�4Ցs���A#x+\�\�k��D\�\�\�qˎIs�Y\'y�P\�\��\��N\�\�\�\0\0\0�_�c$n\�\�\��2��h+>#�(�\�\�\�g\�-��\Z���\�\�QT����\�6���\��I\�n\r�Z\�k���ka�OG�*�kE\�\�|���\�\�RGKV\�\�6�ϒ\�tⲋ\�\�Y\�\�޲��4�w�\�\�\�&Y)\�\�a�\�\0c�*�J\�YWMr\�Gn\�`k�#��\�\r硻\�M��(d�ھi���-lMي�\�\�Gi\�T\�\�u>d��Ge5\� �)&!�:����\�yH`=�n��:+���\�M�?PF�\�	8wVr��ı�h��k\�x-s\\2=+zi\'�fCS\�r6\���h�T\�Mnӥ�\�s�;ˉ<rW�;j\�b�P\�rpn�ן���\�v\Zyy\�\�pm~0^�\�S-kX\�րց�\0�\n*3\�.�\�\�\�%tXkn�>�\0\\e�\��:bc�v\�;\�|\�Jh\'��\�,�OF\�7��\�����\������fFv^\�\�\�q�V,w\�K]��\�QM\\\�\�x\�o���s�� �ޕBi���\'�l\\�+��z����\�\0�q\��=\�(\�\�#mt\��z�>\\vF7\�WM�O\�\�O\�r�++�\Z��m�~^��\�=r��}H\�K����\��\�n<^\��\�Q\�>�\�;\�6��Q�=S-,-m-��#\'y�b3#\�x�2歊�f��b���\�S*�D�\�i\��.Ӊi\0���\\�\�9?�4\�M\"ڼ+k)�)\�QW<p\�\�.y�P\�\�z�z�\�a���\0\�+�S\�\�\�\�G�)\�Pڻ�\�\\�[\�I��~Fpj�[��җ$E�P\�&�\�\�Z\�KEާn&Ha��\�\���g��Yc\��\�\�a�d��y<r�\rn{U\�\�l�s\�\�`���\�=4�ا�8Y\�f6�r��Z�g��%�e�D6J����\�2F�\�GC��v�\��\��T>+\�F�͊\�ʒ\�w1�<\�z�U�|MS\�覍�F\�\�c\�=\�:���\'�܎�\�VjVm\�s����\�2W\�շV\�k�\�<*j��!\��\�\0�\�\�G\�\�[\�!ގ����Wt\����\�+�AG��\\���T넍9l8؁���=\�ʜkCZ\Z\�@��_��(�q�\��C\'3`�I�id#�J\��#�j�W67GL[\�\\?B����Ѵ��\�\���\�nӀ��|�A�.u{N���O\�,v��0^��ک3EQZ�Q��<�\0�\�7Ĵ���U�Q�\�t�v�<^3\�\�\�sʹ?b�,䑉\"\"��\�?�%ce��\�{KOqXV��\��m�oqmH�ݙ;\'\�u�j��m\�\���ʓ+{2v�\�{�\0��3|\�n\�\�\�mD\�\�bF�����E虂��(\�ňkېpᑑ���\" \n��\�}UE�!5\�\�C�Ű��\�\��U�~`g8ޡ8\�Gb�y��Fȣdq�5��h\�\0\�\�\"����\" ��S-%���\0L�@�3���\�\0��W\Z\�dur@٫���#>��ka\�q�e\�;\�\�$����*\�^����4�\0\�\�A�\�>Ӽ�V+D3s\�\�(\�&s�!nGv\�\�ET�<�\�%\�I�\�M�,\�Ժ\�R\�\�k\�!�򳇉ʞ�Ed`��\�\�\"\"����/�d�%{X�\�\�8\�@\�\�K��՚�x\�\�\�x{\�e8\�\��:�\��O\�\�Iq\�l��4g�\�\�\��]\�\�N��\�Nn��H\�x\�F݁\�\�\n����-�_�-r\�5]u%v�����rH�PU�\�O\�;dV:w�\�c.����\�=a�vܔϪ���\�7r���������\0.0߂}\��_�\�<ܭm&��\0\��v\�P:\�l1���Ʈ�\�O�!�u\�P� �j\'No��\�j�dT��\��\0\'��\�?��m�\�\�\�\�dG��nD\��\0\��F�dT��֎\��o\�i��>�փ���\��\�\�V\�N��V:�\�}\n��\���\�k����js\�\�4��\�\�s�>d+j\'G\�O\�5�\"������\0�\�\�N\�j�e~n\�\�\�.V��	\�/�-�\��V\�8\��	Ӛ\�T�\�\�肤\�:~��8XOD����\nb��\n�m\�\�\��Ѹ8{�]�\�[�H�RH\�\�\�!�\�\�|Zt��\�<�PSs/��\�q\�%v=L�Yd��%Z@\"\"\0��\" ��\"\"\0��\n7+u\\Պ���O�\�\Z̅\�\�e73���~\�w��0\���\�+��\�ގ��!/=�\��hZ���9n�#l\r.N#\'\�J�_�\'\��ԗ�*���Tsv\nx\�5@>\0�\n��X*v��Ԁ�\�7HG\�8\�U�\�i�D(Y\��\'L6�i��\��\�=�i���rwK\�J�#�jS\�\�vB�,qmo�+-���eY*��ơ��V�\0I�M$v\�\�U��z\�KZїS˲{\Z\���楍��_�\�SD慬�R\��\�\�\�\�;�d\��\0S\�<䆻j��\�\�7��;��5��0\�\�TYc�mDW��E[��\�t��:\Z\n\Z\�M�ck$,�7�\�ʌ\�|���dEU�\�6�u\�\�q�\�y�m��۾��Wi��l] nxLՅuo�\'	.\�\�/\Zz�j��z�fq�;ཕ�\�@\"\"\0��\" �%�8[�,�cz\�peV��\�睺\�\�q�<���F<��7�,��.���衬���C	\�\�\�^.�\�\�\�(\�~\�[��\�|\n�\�!\��\�r\�r\\ղ\��WA	e\�������5�.;\���V0�l�:��\�T��E\�hp�}��\�\�w{�5\�/,r��\0��b�g�\�5/1٭��\'�\�Lak<���65�\�\�}�\�\�\�I�x�+dldlcZ֍��}.��/4���\�洸ER-\rG4�[�um\�Q�\�o�ǚ�PZ\�-\�٣��\�,`��%u��j�7H㜟,\"\"��DD@\�F��`\�\�\��<�+�\�\�\�%�����Q��$dw�\�������ɦUk��v��kT~�5MKa�&8\�H\�;D�z7qQV\�;j�\��M-&\��`=�9\�͢q\�Tj��}��,ʆ��\�^,Pzkù�\�\�[\�\�\�X,t���\�(YCĺI�\Zs��R\�f���MtCy�$ss\�{H\�\�\�COn���s\"��?�k�+����׷��,\�\�6\�^G\�+3���ף]KX�IG_H]K7\�ߍ��\�-8�Ax+�K=�[[m�S5\�Mhh������[S�\��ga%N�7�\�\�q�\�\\\���\�C�]\�H�\00\�U\�&�ey�.O-�P\�Y];[T�K�ߒ\��\��s\�\�\�\�S�zX�q\\\Z	;\�\�\�\�WB�P\�S���C\�W@\�t\�Ud��U4�\�\�\�,8�\\��\�\�m��\�AOY	���;3\�ྩ� �|\�0\�\��rC�K��3����������\�s�A$I\'�i*0��ܛ\�줚I:�����F��J괒mTD��?�/j�x�饧��p\�\�Ƿ8\�;�\�X-���\�P>7�\�\���w8�ФԵ\�9�ӑ&��\�!D@\0DQ���Z앵�\�\�Ks��7\�B䚊͝K7��\�\�\�Z�H�v�5P��\ZCs\�2��\0\0,���U���x\�ic.\��\�\�=\�^K]X�)�\�\�ݗ\�\�+�X���u~��k=a�\0\�V\�U;)����\�8�^\�\�JĴ�/�\�*W\�2d�5un%\�\�\�QǽZk]\�\�>\�\�\�ڭ\�\�MJ\�D\�ǀB-\�d�3�\��\0JX+��\�䈖\�7�\��D�T�L\�y<\�O���\0A\�T��2�\�\���[bµ]�=UR\�r͉DБ\��1\�\��mV�\�\\����\�fx\��\�H\�<\�\'U>Q��\�k�ֈ�\�3D@U�\�Y�H�R\�O\�tMϟދ�\'\�\�\�\�\�\�=?1\�e,�;\�E+�\�!x�?�\�\�\���+b*��\0�.��J�\�W��a�\�\���\"O�_�ɪ\�\�{\��H���_\�:�����\�\�\�X}+?E��N�;���\�Vҭ�����G辅K�9�\�������t\�|O\�\\��\0\�\�;���]�\�ʶ�}��\0V:�*�rbk��mMK�L��XRT�^\�K�j\�K����g���uS\\x�8\�\'\���(\�`dLk\Z85�}�+H�D@\0DDD@x�\Z	�\�i\�_Y]Q�-ph�\�\�8��\�Q[Q�]C\�r�`0J$`�{���\�Ix�Bʙa�\�\�N\�����\��%k����Ϭ�4O\�\�c2�BGY\�\�ܪM\�i�\0�m-;��\�r{s+F \�=�%\��\\[\��w����e<6ڋ;�M�\�Ԋ�\�\�\';9\�J\�ԗ��\0%�e�pT܄�+w4\\j�#�����tt\�+�DWP\�M�-u�`0A͑\���\�\��6\�\�\�\�r\�K�j\�COC�)\�5,�\�1>�q$��\�e@\�l�\�{�}TA\�R\�6\r�����n\�#q\�嚲�]\�\Z+�������9\Z\�\�\�k-\�g.\�_Җˍ�K��\�%|��b\\�\�ִ4\�psҬ��㜄�Oc�\�r/L\�F?F�}1˳�����ޢ4\�\rE��Cy��g��\��R\�\�w\�\�\�b�\�A]Y,��ٟWI\�fwT6=�\�<Gn\�aUk\\w�&\���\�̑\�	\�P\��\�8�8�<�F�\��s�\��\�\\DV���\"\"\0����r\�m��\�;֨8��[\�̟r�,ST\�ɩu���;M2�����g%c\�\�MzW/b\�#��}�\�%\�\�CӾ�\�+$/�\0(\�>g\�\\W�4tt�\�\�1,h\�\�h�8(�\�Z�\�V\�&\�\�:^v4\�J�[\�w�\��U�Hh6\�\�.�`�������\\ܬ\\�\"���\�)Y�\��ݿ\�殼�۾�\��sq$���\0\�\���+�\�V}�^��K\Z\"/D\��r�kۆ�\�\�\�a\�$=�{}��]<�]��\�w�L���\�\�\�\�[o\�\�]��t\�\�FCI\�w�ƴ�\��\rM�\�6��\'���\�\�۾\��\�\�P�ʜ{�tDE\�B\" ��\"\"\0��\" ��\"\"\0��\" ��\"\"\0��\" ��\"\"\0��\" ��\"\"\0��\" ��\"\"\0��\"  ��\�Y��MC]�3\�5^\�\��>\n�\�E�\�.�\\\�o\�ҷb?\�\�\�g\�/S\�\�ze�]�@�R>[�~V���\�a��-lm\�z\�x�p�^z��N}���\0?CO\�\�\�Ʌ\�UQ%4�;f(�^�\�\0\�^��ʥ\�\�\�\�\�\�v%�w���7y�8���ث��\�Q\�F}AڟU1�gj���L}�\�\'\�����\rh�`гnH\�^�]\�F\�Q|��y�)e�\�\�5�Yn\"Y\�J\�n(��,��?�_tm\��h【{^{��Z��\�a|�\�Jփ;G9	�c��\�<VlU]Z\�\\�\�=\�\�\����Ɵ�H\�\�\�}L�\�q\�\�YV)�/F\�k\'qe=O\�\�퓟T�\�\�%mk�;����B\�i�DE��\"\"\0��\" ��\"\"\0��\" ��\"\"\0��\" ��\"\"\0��\" ��\"\"\0��\" ��\"\"\0��\" \nU\�[b�OY�\�\�b���\\|\�Ƶ����\�i)	���\�\�Mn�q\�\��׿p�\0�͊��\�/�ڡ�^ǧ\'w\�\�澠\�Hy\�9\���>Ͽ�j\�TF��2\�e��\0e\�\�\�i珗.����^O�ȶz\�\'\'�\�5e\�ME�d|��\�\nv���w�O�\�yE�U��\��T\�f&c�o\�>[�B��Ye�˫\�r�0\�nfx\�7���ݶF��\�iZ\"\�f�a�2\�h��f4\�8��\�\�̕ ����37�̈́D]8\0DD?\�e�\�\�ǧB\�SV�べ�}�\�\�ϩ^y?��3dc%~j\�q�;\�>˼G�)��_-\�ˀ^3\�\�x\�\�FV?�.u\ZWQ�N\�5�q��?Ý�\\Gr�\'�\0�~�푪?{^]ѹ���FM%���\�p9}/L\�\0DDD@\0DDD@\0DDD@\0DDD@\0DDD@\0DDq^.T��tյN\�q�\�ǠҸ\�K6\�b�\�.��a��~+j\�@�\�8x�=J�\�v��z�g\�BKi�\��]\��\�U�:z�k��^H2�nGF:��\0\�[],44�RӰ2�\ZƎ��Rx�z��\rS}(h\\�\�~=\�c��5�$��/\�C\�CP�%�S?\�\���>\�}^?��\�UPrfxE\�\�F��ͩ�t\rs\�\�i�#8$\��[��Gd�\�\�ǂ\�\�\���x��хD\��\�\��\�C=H�\�pz]��\�\�\��-9d�V\�vϖ]|��p�\"-\�p��\" ��,\�-;��{�g�\�6�\�p�\�|:���%��D��`|oik�\�A\�WT���\'	�K4g��j=�}	T�\0Y�u3�\�8�xq=KFX~��Tik\�M;�\�K�\�YA\�0xg��Z\�􆠋Pڛ7�ڨ�\�\�\����Yp���3\�\�\��DE�\�\0DDD@\0DDD@\0DDD@\0DDD@\0DDD@��5�s\�\�ִd�p\0Xƴ\�3jk�)h\�\�I� ��|�;��\�\�\�\�T�(��ҝ%�\�\'\�4\�V�l�\�\�\�\�\�\�W��\'\�6\�_*�o\�\�\�6��\�}ýy\�M\�\'ѯ�\�\��\�\\�\'tn��OZ��]W.;\�_\���S\�汥\�pkZ2I8\0-���TW\�&\��d}�\�Od�\�]Pr0\�g{\�x4,b���V\�=�;jj�\�\��nczOp�\��\\\�7j����\�@Kao\�=.\�oGb\���_9;G�T�\�\0\�o�Oor�f\�.\�+ʍK\�a�\�\Z\ZHh(ᤧf\�0�1��/tE\�%�\�\�\0DDD@�l���\\�sa����\�\���~\�]_���\�[$.\�爝\�o�\�r\�UC_\�Q{��\�F� n\�?\�o\�\�\��X�t9}\�<Ⱦ��ˆY�\�\��*(�)dC+v�~G�t�[Dj�4�q��\�4��\�w\r�>#�[42\�<L�\'��5\�9��\�b\�Ͽr\�\����E^\�6\�\�\�$6ɜ\�\�|m82�۟��t\�\�\�̄Vo\"�\�5\�c��xr\n�X��Օ:r�\�U��\�đ\�DzH�*J�+i�����\� \�^ӐB���\�n}	\�[�=�h+��\"\"\0��\" ��\"\"\0��\" ��\"\"\0��\" ��\"\"\0��\" ��,��f)\�-�\�&f>��4�mi\�\�=�>�\�m+d�Z�\�A�f��t}a�\�v�w��\�z5\�Yr�0�&���\�1�\0�\�_|��F�{�Eu��s:9<\���\�\���\0��\�A�\�\�=�]}\�u%�ֆ�5���\0�V�)�1Ҋ���ͅ�r��Fd����\�?\���u�����\�Ѽ��\�?�i\�\�\��\�\��~��Q\����Iڞ^�\�z\��\�\\]\�O�_,��\�Z\��?ɖ���\�걟S�\�\�=���\�:;{���\�\���\����(\�\Zƴn\0t/E��U0Ҋl����� \0DDD@\0DDs\�6�2/6\��\0j�&�?���Z�\�Z�\�$m��\�\�<��;��\�\�\�ֵ\�r��\r+��Z\��\�}i\�h��\���twp�ʩu���k��\�3Pc�����\�p\� \��VK�5���[�O.�\'\�w�{?/�k{dc^\�1\�-p9u���\�tsEVV\��e?[\�\�-uu\0lw\0=a��w�\�>\��ԗ\r)^�yc{���53���\�~+nU\�Y���%���h�&�c�\��g��u*\�D\�e�|֛�≕tS	#w���:\n\�X\\3^�]\��:G�þ9���Gbմƪ�\�0��U`e�\�>�\�aO�Vxe��YK�\�tO\"\"\�R\0DDD@\0DDD@\0DDD@\0DDr\\\�4��G\�V\�\�boI\�OP%q��l%�\�\�5�.q\rh$�\0e��\�<n�JD~̵-;\�\�\�\�\�.؍Q���,↊9\"�s�Y7�Sѵ�=\�ޭ\Z3A2�\�_wkd�\�\�\�zϸv�>wO�t�ݚcֵO�B\'C\�gU�\�7x\�i���p���\�M\�\�\�\�5�cCZZ\0\0��]4F�\��\�\��aV����OQ\�G�%|�\�?d}\�v||Օa\�ٯw�SQEP\�>���^\�e��ߗǂ�l\�P[�t�I\�.\�f�\�\�\�`{�$�۞w\�\r$��\�,��[=�:*Fl\����.=$��ϧ,T�{ii�ӎ�%#֑\�g\��\�\r\�Y\�\�Ŷ\�y.\"-e!D@\0DDD@\0B;\�\",׺$\�.v���>�\�4~\��4}\�Ύ\�\Z\'ZKesh������t=��vyv\�K:\�\�K\�\\l\�a�Դ\�\�k;{<���~U˫O\�\�]�KD\��x��d�H\�\"�m5\�9/E�i}S]�*e�.�\�w�o\�El6[\�\r\�T\�J\�i\�\��:�>*7,�~�VT\���5\r\�\�WB\�-p\�\��zO���\�MO\�ϒZV;i�d:?͎�п�\�J\��h]�\���\�p�Ɩ\��[\��\�*�?���Z,EQ&�FI\�Z��;\n�j~N\�\�m�ӝ\��7w}߇r�[�\�\�\\\�\�ſ/��e�\��Y��\�ޛ�kԵ\�7�>�⊱�u�����gw5+�8�p>\�\�t,�\�qy�\����D\"\"\0��\" ��\"\"\0��\" ��\"\"\0��\" �/W\�m�-�ꖱ\�e��\�wp��Y��׷�4�澒�\�g9�N\�G\�\�V{�5\�\�\�вJ|mO�\��M�!\"��n\�\�}V\�~\\{�r\�_�\�\�h\�\\\�>�P��\����1\�\�MYeMພ\"�Gw�ߏrӨh���̦���\�\�`��\0�\�Y�v\�^vmB\�P�h\�\�]-�\�4�a\��a|\���:��-��`�\�lg���l\"\"���6@qvN\�z\�\� ��\"\"\0��\" ��\"\"\0��\" ��\"\"\0��\n��\�T\�ƺ��f�\�kl��\�\���\�)n�Z\�q\�RUG�\�<;z��o�:\�/�\�\��bF\�{X?\�,X�\"�\�\r�_]\�|2\�\�S[Q_)\�ik�sd��\�~\\{խbZ�Fܬ.t�����\�\��C�ऴ\�(Uv\�\�k�}]0\�$\�\�0w�������E\�\'\�Jt�-U�\�\�Zhn�ƞ���3��ŧ�!~\�\�WjaQCPɣ\�\�;\�\�G{\�b\�\��F}\�2�AɵU6\�։}&.<̄	q\�}\�&ϫ��voE�nX�8u=H ���|;ԣ\�\�[u\�.n��9�0F\�\�\r\�c�\'���/�����!\�\�\�u\�c\��9\�\�ns�Oc�|�@ \��\�93�=�mf�\�b���\�W\�I\� q��`\�\�ڌ�gw�QX�*\�\��\�ޔg���έ\\�D�2\�B\�\�L�\�#�N�\�U\�٨��@=\�\�x0�e�\0\�pV��\�\�e2�Q\���� \0DDD@\0DDsV\�(\���P�޹�\�\�\�݌�:QR\�)v�Gղ\r�y��\�L�kMC|�\�\�\\�Z�\�\ZF��\�\��\�mP\�<߱th���J�Vf�M�cdtM��|\�g\�\�R�*���C葝\�\��\�p\�=\�\�\�\�\�\�Z\�6�7o<\�!�\0(����-g�\�*~z��7�\�{:��<M�xW\�O*��fqfѷ�A7�U��\�]=FK\�\��\�ڴ�?�\�V \��;R�\�\�\��\�Q_N��\���\�\�On�����\" ��\"\"\0��\" ��\"\"\0��\" ��\"\"\0��\" ��� A�R�/\'�W��imI\�Y��q\��>J슻*��)\"Q��\�$���+q\�j:�콧\�x\�<;\�Or��0^�\�\�\�\�\"o��\�xy+\�u-};�\�\��x]ůnG�\�?\���5�l>�1\��W~�k\�\�CΗ��4+!f\�[�%U=l\r��h\�\�\�d\�H\�iz\�SC7H#\r�5u�r�\�l\�x�\�<9�G�O%mX\�Ki\�\�\�\��\�\Z2�\Z���G,n\�Ǵ8�\�Z�\\\�\r\\S��a\�\�x\�<Wbښ�أtT.��\�+K�N%���\�\�n)�aT\�|�]��\�)��h\�3ͼ�\����\�f��\�\�Y\�\�\"\�\�W��}u4m\�$\��g-�R\�<�]\"�����h\�ncq�\�=\�X ��(�\�7e�$\�[)�\�\���.>#U�[a�s��\�B^h�\�Sm3`UST\�8�\�\�7��\�.�\�\�Xغ@\���1�\0P\n*��{�0��c\�&\��`O�CT�X�Mui\�l�\�\�\�5b\�\�LeKCt�O�\Z�Y?$\�?��\�ᖐGX+\"��K\����Q\�#���\��\r��\�\�(�\�f~�O�\\����6�X�,�\�\r\�\�rg\����u.�a\0��\�3\�\�>\�.�c��\�:,\\\�u��\�.�\�ߙ\�2��յ\�,\�u\�Pߛ�\�|V�\0�!Џy#d��f�8\�\�pS��t��ZM\�\r�<��\�Nu�\�m4Y\�|�����-�v=\"\�O��e�\0.��/-\�\�t\�\\ȱ\��`�i�\'�\\DVw*O �+cZz4��Q��\�\�\�\�zE}T��5��ʛ�\�\Zz�[\�+�ڙ\���\'\�̱s\����鏹�\�j\�Qy�\���\0�I���\�҇Bj+��\�Db\0\�\�J�=c\�2|\�\�OO\r4b8!�(\�\�\�\�\��,�\�c\�yVE\�ɝ��e�\n�j\�\�\��[=\��\�[\��\�l|\�$4\�\�\�h��%u�\�]5\�\�ER��\��� \0DDD@\0DDD@\0DDD@\0DDD@\0DD5t����j��h�Œ48{\�.�ɭ���Kl\�y�\0\r޻?Q\�W�UYL,�\"Q��\�1��\�6)y��+�\�\�zWc�v�\�]��;\�P\�\�#�+p\�\�<��E]t\�\�YC\�\�h\��\r\�#�J:e�z�Ki��k\�&\�U�\�G5\�F\�<\��\0r�P\\\�.-ڢ��qĈ\�	\�T[�%\�8�\�냙\�\�\�\�?EX�\�\Z�\�\�R\�x>�\�G�{^\�ξ&�<s��R򼍱O�5-��ӫjZ[\�:�\�P\�S�<�WǁYAO8\�\�3�S�>�\�\�\�\�\�q��\"�Qr�e�QU3�r�\����r�\�\�V\�\�.�\�Rك78`�7�\�L.�{E�J�G�H\"\"��DDD@\0DDD@\0DDD@\0DDD@\0DDD@\0DDD@\0DDD@\0DD�E4Q�uE3>\�E@\�h};VI4\'�^Y\�\�E]����fJ2i\�\�6�\�V�$FJYj\\q�H\�\�Fr]=��l/\�j\�H\��\�?\�(�\�\�M\�/To淙��\"�\�8\"\"\0��\" ��\"\"\0��\" ��\"\"\0��\" ��\"\"\0��\" ��\"\"�\�','Mon - Sat | 9:00 am - 5:00 pm; Sun | by Appointment');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-09-23 11:52:43
