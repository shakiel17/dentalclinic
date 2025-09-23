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
INSERT INTO `settings` VALUES (1,'HERMOSILLA DENTAL CLINIC','Hilaria`s Building 029 Old PC Barracks, Brgy. Sudapin, Kidapawan City','09951937188','hermosilla.dentalclinic@gmail.com',_binary 'ÿ\Øÿ\à\0JFIF\0\0\0\0\0\0ÿ\â\ØICC_PROFILE\0\0\0\Èlcms\0\0mntrRGB XYZ \â\0\0\0	\0\0acspMSFT\0\0\0\0sawsctrl\0\0\0\0\0\0\0\0\0\0\0\0\0\0ö\Ö\0\0\0\0\0\Ó-hand‘\0=@€°=@t,¥\"\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0	desc\0\0\0ğ\0\0\0_cprt\0\0\0\0\0wtpt\0\0\0\0\0rXYZ\0\0,\0\0\0gXYZ\0\0@\0\0\0bXYZ\0\0T\0\0\0rTRC\0\0h\0\0\0`gTRC\0\0h\0\0\0`bTRC\0\0h\0\0\0`desc\0\0\0\0\0\0\0uRGB\0\0\0\0\0\0\0\0\0\0\0\0text\0\0\0\0CC0\0XYZ \0\0\0\0\0\0óT\0\0\0\0\ÉXYZ \0\0\0\0\0\0o \0\08ò\0\0XYZ \0\0\0\0\0\0b–\0\0·‰\0\0\ÚXYZ \0\0\0\0\0\0$ \0\0…\0\0¶\Äcurv\0\0\0\0\0\0\0*\0\0\0|\0øœuƒ\ÉN\nbô\Ïöj. C$¬)j.~3\ë9³?\ÖFWM6Tv\\dl†uV~ˆ,’6œ«§Œ²Û¾™\Ê\Ç\×e\äwñùÿÿÿ\Û\0C\0		\n\n	\r\r\"##!  %*5-%\'2(  .?/279<<<$-BFA:F5;<9ÿ\Û\0C\n\n\n9& &99999999999999999999999999999999999999999999999999ÿÀ\0ôô\"\0ÿ\Ä\0\0\0\0\0\0\0\0\0\0\0\0ÿ\Ä\0O\0\0\0!1AQaq‘\"2¡±Á#BRbr\Ñ3S’¢²$C‚\Âğ4c\Ò\áDUsñ5ET„”&ƒ“ÿ\Ä\0\Z\0\0\0\0\0\0\0\0\0\0\0\0ÿ\Ä\06\0\0\0\0\0\0!1A\"2Qaq‘#3¡±\ÑğBR\ábÁ$ñ4ÿ\Ú\0\0\0?\0\ÜQ\0DDD@\0DDD@\0DDEÁq½[-€úmt‘ö\\ÿ\0[øFõ\Æ\ÔVl\êMğw¢¤\\9L´ÀKi ¨ª#\íca§\Ï¹W\ëyO¹I‘KEM\0=/&B>Ü³OL{\æX¨›\ìj\è°\êe¨\ë³ôŒÀ\r…¡Ÿ•ğ\Ú=Us\Şb»N\Ú~\Ùgr§ÿ\0 Ÿ–-–}™®Y·\ÍS3Ocñ¼Š\à—QY\"8}Ú„\Ğ\'i>\â²xt¤˜\ä\Ğ\Òù˜>y]±òi}xõ¤¢g\æ‘\ß&”ûU\ïŠ\ÇJµÌûW`ÿ\0Í©~Y`?KRø=P™\É}\Ôûu\ÔMü¥\Ç\ä¯ÿ\0k¿ó*\àr\ï[ş:u‘v\Z¿O8\à]iüI%\ì\ÍMb½Œ\Í¨Näº¼V\ãLOk\\,¼™\ß\ì\ÍC\'t®uñ+˜\é\ÕşF¥\r\Î\ß?\ìk©dü’´ü\n\êAabòò}¨\ãöi#“ò\Ìß™”\é}MD\í¦[\ê\Ø\á\Ó\ÉşRŸlµy«Ï\èÁñ#sE‡‹Æ¬µ~Ò¦\çoD\íqø‚\ï£\åıñ¦©;q\ìŸ\å\Â\êş¡_MxivfÂ‹<¢\åJ™\Ø¶\Ùc\ët/÷|UŠİ­lø\r¯d/?fq\Íû\Î\ïz\ÑMS\âErªq\å_1\È\ÉX\Úöi\È+\é^V\0DDD@\0DDD@\0DDD@\0DDD@\0DDD@V¯š\Ş\ÍhÚôªş¶k¸bÏ¯Zòõu&*wz.8€³\Ş\î>XYm\Å\×^\Ù\æı‹aL¤j—[õ®\Ğ\Òk«b‰\Ø\Î\ÆróşQ½R®ü§°\ËUwüÚƒü#õU\ËN†¾\İH–H}\'o2T	ÿ\0/5v´rqh£\Ã\ë_%tƒ¡\ÇaC™Tu17y”Y¦¨ró(Uz›Q\Ş\å\æ[URı®\Ó4·\Ã\r\Ş|rº-úPW\á\ï§m3]¿j¡ø>C\'Ü¶*:*Z¹ªJh \î\ÆÀ\Ñ\î^\ë«©\çd›–\ÑY\İ%\Ğ4_q‘ç¥°07\ŞsğV\Z-§©0E\0™\Ã\íL\âüøp÷+\Z-0\ÃU\"T\í›\å´t´mÙ¥¦†õDÀ\Ñ\î^è¸ªnö\Ú\\úEÂ’,t>fƒñWf¢ˆn\Î\ÔUúm§ 8u\Î7ùlsşqI\Ê&g³4ò~XO\Ï\n·}K™/©%\\\ßbÚŠ”\îSlm8õ\î\í³ş¥ø9N²ö\×ÿ\0õ³şµµSşGzSô.È©c”»\ãpï¿õ.ˆ¹CÓ²{S\Í\æ…\ß,®¬MOû\éOĞ¶\"ƒY\é\Ù\Ît„~v¹Ÿ=\Ş\ÛSb\áI.~\ä\Í?5b²\á¢.2\\£µGV\Øm\Ù56\ÚY~ÑŒy\êDo\ŞI\ÅKf&\×>»“›@&=+º9¹6‡“²«7.Ln0\å\Ô5pT·\î¼\İóõ«\"\Ï<3\í—À²7Mw0‰h5y\Å[E2FHiÿ\03w1j\å\"ñI†Õ²*\Ø\ÇK†\Ãü\Æ\ïr\×\Îõu\Ñö;¦Ó¦¢dRŸñ õ\î\Ü|AYş\Çe{\Õ2Î¼e\çD}§”+%yk\'t”R‰‡«Ÿ\Ì>xV¸¥h\Û$R2H\Ü2Ã|V_y\äÊ®©-uM¨oDRúğ<¹V#û¥\êöZ\êª3—Uşs—>\Õm[]™ŞŒ\'\äfô‹7±òš\ÌWŠ\\tsğpñiù}·\\¨®p	\èjc>’Ã¼w#\Ålªú\íò²‰\×(r´DWˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\"üp\Úi8#\İG¬­v-¨œÿ\0H«\àDw\Ìxb\Ío:¶÷¨eôf9ñ\Å!\Ãi©õ»7»\áØ§‡&UO»JZ\Æ\Ğmm6N28uc†{öW»Ÿ¶X\âØ¢§\ryt®\Ş÷wŸÜ¼\çE\ï)xbiR®µ¶\ìÎ¬<œW\Öl\Ës“\Ğ\á;ù±‡H~Cı\îZ›M\Úl \Z:F	G_\ë<øR\è´Õ†®®\åS¶S\ä\"»^­¶xö\ë\ê\ã‡#!¤\å\Î\îh\ŞUñ\Êxõ£´\Ñ\çşmGÉ£õğR³]~fr5\Ê\\#H\'\'‚‚ºjû³-š¾9$\á\Ãõ\îİ¸x¬­ó\ê}U!\0\ÖU°œ°l\Ä<°\Ñ\â¦\í|™\\&\Ã\îQR·\î0sù\æV_µ\Ùg\áC\æËº1õü©4e´\ÒzŸ;ñü£õU\ê­{¨\ë]±\ìƒkv\Ìøg%_­ÜŸ\Ø(€2A%[\ÇÚùCX©((è›³IK\r\ê0ß‚t1ó\Ï/€\êU,s1‘hÕ·\ÍòAp§¨yk|6ˆº›“k\ì\Û\åu$“ü ­–¾d\Û8ñ2\ìŒ\ÆK*\í\î±3òB]ñ!w\Å\Éu[q©\åc[ú«ú+\n•ı¤ó}\ÊK92²5\îï‘Ÿô¯q\ÉÅ€7µ$õ™wü½\Ö\Z•ı¨\çV~¥5üš\Ø\\7:±½Ò˜\\“r]m?²¯«g\ç\rw\È+\ê.<-/ûGZ~¦k7%n\ã\r\Ü\ÇÁxr©\ä\ÊóL5s­§4û\Æ=\ë[E[À\ÒûX‰®\æ?o\Ñúº©°\Âd¤a\ã+*@h\å9÷-F\ÍA5¾‰°\ÔWO[7K)\ŞOgP]è¬§\r\Z¸ÌŒ\ís\ä\"\"\ĞV\0^5T´õº\Z˜#š\'qdõ\ìˆ\Ö`¢_96 ©–\×+©%\ãÍ¼—F~c\ßÜ¨5–\ëŞ–­llô²†M½Ww8n=\Ëy^s\ÃDNŠh\Ù$ns\ĞA ¬V\à¡-\á³/…ò[=Ñœi\îR\Üİ˜/P\í‘\ßşfşKD¢¬¦¯§mE$\ìšp{Gşê‹©97‚}º‹3\Äq4\ï>¡\î=\åF§©½iK‰kL\Ôsj7U\ã´p#·\ÉR¯»òµf½Iº\áfğÙ›\Ò*~—×”7}ŠzÍš:Ã¸~­\ç°ôwz¸/B»#b\Î,\Ï(¸¼˜DE2!D@\0DDD@\0DDD@\0DDD@s\×\×RÛ©SY;!…¼\\ó\ÓØ³mG\ÊDó—\ÓÙ˜`‡¤<e\ç¸p\åMØˆT¼Lœ+”ø/·\ÍAl±Å·]P\Zò2Ø›½\î\î3¹g7\ÎQ®5\Ä\Ãl\Ğ\â;ƒ½©òkšÇ¢¯ù=2µï§†C´fŸ.‘ı \ç¼\ái+i±€\êjpù\Ç\åõŸ\á\Õ\à²gˆ\Äq\á\æ]•uó»3[Vˆ¿^\åôš½ªx\Şr\éªI/wn\Ï\ã…z³\è%»eóD\êÙ‡ÚŸ\Ùğo<«Z+\êÁ\×\rò\ÍûÒ—±ól‰dlkÑ€ÖŒ\0¾‘¢ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€.+µ¦†ñLi\ë©\Û3:	\â\Ó\Ö»Qq¤\ÖL\êynŒƒTh\n\ÛP}Mu] \Ş@XÁ\Ú:Ghò_šS^VZv)nuTCp$\æH\Ça\é…l\n™«t-\Ûn®ß±MZw–\ã”öõĞ¼û0²­\ë¡ü¹Ii°µ[®—:VUQ\ÎÉ¡w4ğ\ì# ö.•ƒP\\.úN\êö´>	˜q,2{/£§°®i}QC¨ió	æªš3$>°\ícµ]‡\Å\Æ\ß¶‘)p\İn‰\ÔDZ\ÊB\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆ¾&š8\"|\ÓH\Ø\ã`Ë\ã€i@}ª¶«Ö´V úxvjkøs`ú¬?ˆü¸÷*¾¯\åJº++<SÁ\Îü½C·r\â\Òz®\îYYr/¦£w¬ı¤½\İC´ÿ\0\İ`³)Ë§F\ï\Ô\Ñ\Z”V«Æ¶ÿ\0­n\\_;‡Iõb„|\Äö­#L\è‹u•¬šfŠºÑ¿œxõXùñ\îV\Z\n\Z[u+)h\àd0³ƒZ=\ç¬ö®…e8HÁ\êò#;œ¶\È\"\"\ÖR\0DDD@\0DDD@\0DDD@\0DDú“NP\ê\Z^n¥»4}\\\í³?QØ±ëµª\é¥n¬\Ûs¢‘§j\Zˆ\Î\ÇX?·•\Åvµ\Ñ\Ş(ŸI[’\'p\ëi\ë ¬˜Œ*·\Å¤]U\Î>\nö‹\Öp\ß\Ú:\Â\Øn-86^\Öööyv[–ª4\İn™®i.s\é\Ü\ìÁP\İ\Û\ÇA\êpW\Í	¬\Ûuk-\×†\×4a;„\Ãş¯Š¯‰zºV\ì\É[R\Ë\\8.èˆ·™\Â\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ‹Šñu¤³Ğ¾²²Mˆ\ÛÀt¸ô\0:J\ãi,\ÙÔ³\Ùw+…-®õu“6(YÄ“\ÔI\ìX\î©\ÕÚ¢±´\Ğ2FRmb*v\ïs\ÏAv8Îzò½]\îz\ÆñQ\Æ\ç\íšzf†³\Û\Ö~KI\Ñú>›O\Ä\'—f{ƒ‡­&73±¿¯Jóe9\â\å¦G\ÔÒ£\ZVr\äŠÑº\n:-Š\ë»[-OAÅ±ö³\îªúˆ·\ÕTj˜™\ç77›ˆ¬\"\0DDD@\0DDD@\0DDD@\0DDD@\Íq¡¦¹Q\ÉIWe†A‡4üGQX¾«\ÓUZf¹¥®s\é^\ìÁ8\ÜA©\Ãıön+’\én¦º\Ğ\ËGW|2°z\ê!f\Ä\á•\Ñ÷-ª\×\ìV4¯m\æA\\ğ.\Î;¹æş±\ã\İrXF ²\×ik»[¶\à¶\é\ê»h\Â:BÔ´N¨P\Ğ\ìJZ\Êø@\çY÷‡\ŞŸ\àª\Â\â}+<Èµ¥\ã•\ã8DDD@\0DDD@•UL4”òTTH\Øá¥\Ï{¸\0œ\Æ\ër¥´\Ğ\ÉYY d1€I+½]®Z\Âõ#\Î\Úv\Å=;NC\ë\ÒO\È/MW¨*µMÕ‘@\É=®Ø§€qq;²GY÷-#EiX´ı;0k\î¬÷[\Ù\×Ö¼\É\ÊX¹è•\Z\ÒT\ÇS\äô\Ò\ZZ›N\Òd\ì\Ë] úÙ±\Ãğ·¨|~$E\è\Â„tÇƒ,¤\äóaD@\0DDD@\0DDD@\0DDD@\0DDD@\0DDmş\ÍK}·IGT1\ìx\ãwA‘—-%\Æyºªwd³#~`…½*Ö¸\ÓL\Ôİ¨št\0˜]\Ãk­§¿\Ü|V<^¨µ\ÃÌ‹\é³K\Òød–½Sß­‘\ÖS\î\'Õ’<\ïcºB“Xf’¿O¦¯Rú;\Ï7Sğu\Ô-\ÂcM\Ãã‘¡\ÍsNAR\Â\â:\Ñß•\Ék\Ğı´DZŠ‚\" ˆ€\"\"\0ˆˆ\" ˆ€,“”mSôI¶QIš(õi\İ+\Ç\È|wõ+7)\Z—\èº£i_ŠÊ–ú\Äñ\Ç\Ò{\Ï>\ÅZ\ä\ßL•WÒ•‘\æ’}[\\7Hñò\çâ¬•’\èWó4\ÕÔ‘b\ä\ëJu;n•\Ñÿ\0|•¿T\Ç\Ù4ÿ\0¨û‡Š¼\"-•U\Z¢£‰\Í\Í\æ\Â\"+„D@\0DDD@\0DDD@\0DDD@\0DDD@\0DDD@fœ§é‚o”l\ÜH-\è\Èøv¯\ŞKµ&\ĞuO\Ür\êg2Ï˜ñ\ìZ<\ÑG</†V\Æö–¹®!aÚ¦\Ï>™¿B\ç¶=¡-4£3»X;—™ˆƒ\ÃØ®‡\ÍUµdtH\İC\éK\Üw\ë4Uca\êLÁö^8ø>*az1’’RFfšy0ˆŠG\" ˆ€\"\"\0ˆˆ\â½\\\à³\Û\'®¨>¤M\ÈoK@\åv¬”\ëñ¯ºd\Í5!õñÁ\Òtùp\ïÊ£wF]\Ë*†¹dC\Ûi+u†¥\"W’ù\ŞdšA\Â68\îÁm´TP\ÒEKMš\ZÖ€«úO%¡²L\ÌV\Õ\0ùsÅ£¡¾=¥Y\ÕxJ:q\Õ.Y+¬\Ôò\\ ˆ‹YHDDD@\0DDD@\0DDP\ZV[l \Ç3\İ-QÅ‚\á\ÚzûÜ¨µzâµ\ßŞ¬Bxó\ì\ÉV÷|F{q5\Öòor\È\Õ)o‘¬¢\Êik´]q\r}5e¢cş$R8´ygúT\Ü6\ëı$«N\ß\Ût¥ı\Ì\î\Ï`\'õjŒq:·K?ƒÿ\0­º²å—´T\Ëv»:B¿Q\Énª‹‹Ia\í\ë\Ìv«„3E<M–$ok\Ør\ì*\è[<¬„ \ã\ÉöˆŠ\Â!|\É#\"cŸ#\Ú\Æ4d¹\Ç\0 >‘W.Z\â\ÃA‘é’ñöi\Æ\Ş|x{\Õv§•\âš\Ô\ç7\ïI6â¨&¨s\"\ÅT\ß\ÑQgTÜ¨°¿6·5½qË“\ä@ø«MVZ/n\ÓT\ç?\à\Ì6^{º)MSyE‰U8ò‰\ÄDW•„D@\0DDUµN´¥\Óõ\Ò<\ÎÃ¤\0\ì†0ôö\Ïz„\ìkTÄ£\'’-*½®,\"ûe{#nj\àÌ’z[\ãñÂ§š:˜#‡\Å#C\Ø\áÀƒ¼è“Š²./†r-\Å\æŒS@ßö#Å´•$G(?dô;Àû‰[Z\ÇùL±m\àWB\ÌSV\å\Ç\'\Ú<|OR»rw|7{a™Ùª£\Äo\Ï7\ì»\Ëw‚Ã„›®n‰|%$¬E©¢fˆ€\"\"\0ˆˆ\" !5…\èX¬sU4}\ßW?|ôøo>7\ä\ê\Æo7³YR\é\é‘\å\Ûö\ß\Ğ;z\Ïwjú\å&ğ\ëµüPÓ’øi4\Ğ\İûRkßà´­)feŠ\É\Æ\Ü\Î/<|¸w\çú1ñ‰§ğ«÷dº\"/D\Ì\0DDD@\0DDD@\0DDWµ¶¡V\ÜX5s’\ÈA\è\ëw‡Ä…aX\ï)•\î«\Ô\ÒAµ˜\éX\Ø\Ú:2F\Ñ>üx,Ø»]U\æ¹e´\ÃT·*\ÓK$ò¾Y^\ç\Èò\\\ç8\ä“\ÖW\Â-OE\èx)`¾\í–¥\ãi<e±Œ—|M2ºY#læ ³f{Abº\ÜZIo¨•‡ƒ\Ãiñ;”­%ƒV\Ú%4”up¼t\Ä\às\Ø@\'#°­ ^Œ§\Åo©\æex†û¬zš’\æ\Æ\Û5…°\Âş\rœ\ÆXZz\È\â\Şñ»±{·MŞ¬\ßt½\ÈUR?\Ö\æ\àv‡ô»¿qWúŠxjc1TC±-‘¡Àø\ÇAg¦¶\ÈM\Ü8\å\Ğf2zÀ>\É\îÂ·\ì\í¿\Ïß‡ş\ÈõoôT \å\Ñ]\Ì^m54õ\rö„cù]Œy•\ì\îSl\Øõi+\É\ícú•Ê¢\n˜ùºˆc™ŸvF‡\"£¿³6,\ç\èš?ÿ\0\È.º\ï\\I}j¯º)uü£\ÖV}E\Ü\æ\Ê\î\Ö;Á£ş\ê4\é\İa¨H’¸\Ê\Ö\ãÒ¤\Øüƒ‡’Õ©©i\é±MO,û±°4{—²‹\Â\Ê‰&ÿ\0#ª\Õ*3*^K\ê]ƒUs‰‘F_\ï$/yy.nÁ\æ®\Ço£j\r\ßÔ´dRX*r\à\ç^~¦¨´­\ÎÁ‡Ô±²S¸\àMKs\ÔzŠƒi-psI‚:ô=m,5Ô’\Ò\Ô0>ZZæ¥€\\)]C_SHó—A#£\'¯^v/©iÇ†i¦\İk&j|œj9n\ÔrP\ÖH_WL<^\Î= \î\ÏhW5Šr{Tú]WF\ìÍµ‡X üÀ[Zô0V»+ß”g¾*2\Ø\"\"\ÖR\0DDQùP°úuµ·HšŠAõ˜\â\èú|ş\âU\á|½‘c\Ú\×x«¶µdY(I\Å\æŠ%W\ÏH¤’\Ï;ó%?¯zXNñ\àO¿±_\Ö#_ú3XD±‚Hÿ\0G£\Ë#¼-¦–¢*ºhª!v\ÔR°=\ëd,ø;‹®\\Ä¶ø¬õ.ª¬\í¾Y*(ˆ\ép“\Ğñ\Ãô\î%dš.\î\ë¢‰\Ó\Èd<\Ì\à\î\Ùñ=\Ç\Ín+\å>\Î-÷ÁYq\rh/8\è{^{‰U\ã`\ã•\Ñ\å¢Y\ç\Ü\ØWt\ß\é}9N\ç»3\ÓıL½d\Äc\Ç*Ä·BjqR]\ÌòZ^L\"\"‘Àˆˆ\" \n/S\İ[e²UV\äm±¸Œ—\Ãß¿ÁJ,Ã•»§9UKkŞ¬C~#¹£Àg\ÍQ‰·¥[‘eP\Õ$ˆ\îM-&\é5Ó‚ø©>°—oÚû?3\à¶\\\Ğ¯¢´\İ8{q5G\×\É\×\ëpõcQ\ÂUÓ­z½\Î\İ=Rˆ´•D@\0DDD@\0DDD@\0XF®qv§¹’r}!\ãŞ·u…k&lj›˜ı»õ\çÿ\0Qò/‰§\r\ægo\'v¶Üµ$FV\íCL\Ó3‰\rd´,\ë’\0Š\åPFò\æ0®$üB\ÑU˜i©?R¼\çDE°¤\"\"\0ˆˆ\" ˆ€,3[cûUr\Ù\á\Îü‚\Ü\×óıö¤V^«\êA\Ëd\îov\ÑÇ¹y\ß\Ô_/sNn\É^O 3\ê\Ú-Û£\Ûyğiù\ámk1ä„¾¶º½\Ãtqˆš{\\r¤y­9Y€Ug\êGó˜DE´ \"\"\0ˆˆ\" (Üª\Ú=*\Ñ\Ê6\æZGaø\éc¿C2¿9)»úUª[lÌ”\ÚfzX\ï\Ğ\ç\Ì+­U<Ut\Ò\ÓLİ¨¥ac\ÇX#c\Z~¢M-­S»SO1\à	\Æ{¸;Áy÷}\Íñ³³Ùškñ\Ö\ã\èmŠ»¯m?Kiº†µ¹œs\Ñõ\å¼GˆÏ¹X‘nœ\â\âû™\âô¼ÑòYtô;ó¨\ìEXÍ‘ùÛ¼{²<V¼°­CI&œ\ÕS6S˜˜M\ênv›\å\ÃÁm´Q\×P\Ó\Õ\Åû9\ãl\î#+M\'S\å\â\êK¹Ğˆ‹yœ\"\"\0ˆˆ—¹¬c\âZ2I\è¤kõf¶\à–T\Ô¸ˆÛ¿\Â0´\ÎPn?Giz¢\×bJŒ@\ÏóqşP\åU\ä†İµ5u\É\íö\0†3\Úw»\à\ß5\ç\â~ò\èUófš¼0s4\Ğ\0‚\"/@\Ì\0DDD@\0DDD@\0DDŠr‡7«\ëú°\á\âÆ­­d¼«S˜õ3\ê\ÍNÓ\ĞHøaaÇ¬\ê\ÏÜ¿üe‹’V\â\ÃVüñª#É­ıU\áQy$~lµŒ\Ï\nœã½£ôW¥vğbB\ß;ˆ´„D@\0DDº’\à-v*\Ú\Ì\á\Ñ\Äv?1\Ü\ßyZ_+W=ˆ)-lw¬ó\ÏH;\æûó\ä©ZR\ÒoW\Új2	ˆ»nS\ÔÁ¼ùğñ^>6N\ËTcmL53V\Ğ6\Ól\Ó4\Í{q-G×¿ü\Ü=À+ü\0\0\0\0Àú½hAB*+±OS\Ì\"\"‘Àˆˆ\" ˆ€,«•›_1s§¹1¾¥K6xyŒy-UVùB·}!¥ª°3%>\'gùxÿ\0)rÏ‹¯©SE´\ËL\ÑÕ£®Ki\Ê:—;2†sru\í7q><|T\Ò\Íy!¸o®¶¸õNÁü®ÿ\0JÒ—p\Öu*R9ltÍ£6\åzÛºŠ\æÁ\×‡\Ş\ßõ)nK.^—§H\çfJ9G\åvñ\ï\Ú\n[[\Ğ}#¦+\á/c9\Öu\å»ı\à\â³\ŞJ«ıQ:•\ÇÔ«ˆ´\Ä\ßX{¶¼\ÖYı\Ö)>\Ò-^:Zô5ôD^‰˜\"/ª©\æšHc\'\Ë\Ã\Ø×‚\æ÷„\ÌÈˆ€Ì¹_®Ú¨ ·´û\rt\Ïû‡Á\Şj\Õ\Éõ \éJ F83;·h\îş\\/›îŠ¶_+YU-Sfpk~­\à\0P «2c†&\ì\ÇCZ:€%t\É]+%ò.”\×MEhˆµ”„D@\0DDD@\0DDD@\0DDgü®Q—\Ğ\ĞVû)¿\Ì2?§Ş´	­(>‘\Ó5Ğ—¶>u\í\ßò#\ÅSˆ†º¤‰\×-2L©òA?ÿ\03§\'÷oøù-cÜ—ÕŠ}PØ‰\İS\ãñ·úVÂ©À\Ë:Rô\'z\ÊaÂˆˆ\" ¿	\0dœ\0¡n\Z²\ÅoÈš\ã>\Ä_X}\ÙÇŠŒ§¬\äò:“|kğ$€UXjùê›µm\Ó\×*¦{y¶\ã½xk\íU‘Ú¨€RWV\æ!~\ÙcNs¿§\Õ÷•[¾\n.K±%\\³H\ÍõM\Ğ\Ş/µu€“³\ä‡\ë\â´^L¬ju\Âfbz\Ì\ç‹c\èó\ã\ä¨Z6\Ä\ëõ\æ8\\\Ó\è\Ñ}d\îü=]ç‡ŸR\Ü\ZÖ±¡­­\0€Ã‚­\ÎN\é\ß-+B?Qz†Pˆˆ\"…«\Ôô‡\Ò[)¤¹U°\áíˆgñ<\î\ÛÊŒ¤£\ÉÔ›\àšEk»WIu}¶\ãGó\Ã»m-\Ú\ÙÁ\Ü0r¦’2RY \ÖAD\Üo\Ôôµš)k«±ŸG€d·µÇƒGzJJ+6o‚Y|\È\Æ\É£{C˜\àC\éA\Ò\Ş.Lº\ÒQ\\­ğÓŠÀşh\Å?8ZZ2C·§’2R\à4ÑŠi§ºÁ®¢ä†²¡\Ô\Ï\ÏH$´<µ¬o”ºGP\ê\ÇTG\êúC3H\è#q÷·>+\\·T¶¶\ßMT\Ş\Ä\Ùˆ\ÊÅ‚ğJuú2û÷Q‘\î\à\Ò\Ò2\â\nÁ¢.\Óú°d(ªğ{ZózX\Ç)´ª\æ\nˆ\Ù(ò\Ù>ö®P†3]™\Ü3\İ\Ç\Ô\Ù\Æı\á^˜«5\Úz\İPN\\ø\Zz\Ü¼[\âõ$Ñ¬D¢\Ã\'©§\\¾ji\Ùd¯\Äni\ë~¹m\Õ2ˆ)¥˜ğ…\ŞC+\Ğp\Z½_@¿t¤şV“ñ`\Ço(AwfŠ6Rfâˆ‹\Ğ3D@\0DDD@\0DDD@\0DDD@\á\0ŒW\ê 0ùXtÖ²\Æö²–¨8vÇœû\ÚV\àFB\Ì9Z·suÔ—7Õ™†\'şf\ï`û•\ßHWı#¦\è*	\Ëù°\Çõ\í7\Õ?ø¬UÓ¶uü\Íø£ˆ·™\Â\"òª©†’JŠ‰1§=\Çp	À>\ä{\"\ÒHö±sœp\0\ë%Q/Ü£A\Í=S&q\Ï<\Ìö\'\İ\â«z·U\Õ\êJ¡C@\Ù[F\\\ZÈ€õ\æwA8÷r\ÑZ64L¬­cd¸¸dtˆ{oo—n|î–Š¶]Ù¡B0YÏŸB—M\êMK‰\ï·	i©¼@7? \Ü<w«mŸKY\ìá¦š‘”‹/®ÿ\03\Ã\Ã\niğ\Ã\ÂòıY\\¬“Û°Xæ½¹¾ù©}›2GNyˆš\İûOÏ¬Gy\İ\à‰­¯_BX¦•\ÅL\ßU^\Ñ\éğü•w“]0acoU¬ú×\î\ìw\Ù\í÷\ÎõN\';d©Å“«(\'6Y´†;¥”ø¢O^w—uwû©´E®1PJ+‚–\Ûy°ˆŠGò©¨†’\ÏQ+bŠ1—=\Ç\0\år¸S[)SU&\Äcpyq\è\0t“Ô¢im\Õ7Š†W\ŞcØ…‡j„\ï\êtn\ì\à;\Ô%-ò\\’K»>G¦\êMù–†\ĞxcÕš¤¡‡\Ìö))¤·\éûS\ÊzXF\æ0q=\0’WUe\\4²T\Ô\ÊØ¡Œe\ÎwB„·\ÓOz¬\íp\ÑSDv¨©\Ä\Ìxû\İC£½A­/%¼Ÿó\èwŸÑ§\è\ê6§ºW³f¶³Wû˜Ç²\Îş“\ÚT»\Ş\Ø\Ø\ç½Á­h\Éq8\0/Šº˜(\éä¨©•±CË\ã€£R½³Ö±ğZ\ÌT§sª:\'Sz›\ÓÒ»…¥nÿ\0›œónÏ£YY¨b¶½ô¶\Ğpú\Üaòõˆ‡@üGÁIR\Ò\Û\ìt\æš\ÊzxÁ|q\Şz\Ü\ãÄ•\Ø\çEO	s‹\"Š6ä“¹­\àv&¿TÔ¶yZ\æY!vb\Ã­\Ã\í8}Á\Ğ:x®?õ“ş}óğ=\ì‘\Ës®}ö¥c\\\ÎnŠ\'\r\ì‹;\Ş{]ğÂDVF:Qó3X)s\rº°eÏ‰Ç¿|\n°òuU\éZJ\'.‹j#\à\ãv?*üö“–L~\ÂVI\ï\Ùÿ\0Rä†£n\Ó]MŸ\Ù\ÎüM\ÇúV%\à\ÅüWóô/æŸ}Y¯,Şµ¶¬!ñ¸ùóZR¦ò«O\Î\é†Ëğ\Ô1\Ù\ì ·\æØ¸\ê¦D)yMœ—\Õs\ÚU‘“û	Ÿú¿Ô‹:°j\Úh\ßI\Ò\î\î\ä‹58\ØFµØ¶tIÉ´kú¦ncM\Ü\ä\Î¦ò\Ò\Åfœ”C\ÎjiÂ¦{¼r\ÑóW\îP$\æô}\Å\İmk|\Ş\ÑóT\îH#\Í\Æ\á/İ…­ó?öR¿|L\ÊöªLÔ‘z`ˆˆ\" ˆ€\"¯:²¦÷vôk|Ï†\ßG ôŠ†ò¼†\Ó\Õ\Ö|…F2\ÕÁÖ²ˆ¤p\"ˆ¾\İ\ßDb£¢ŒT\\\êwC@/wSG½{Y-¶Ó¿¨}MT\Î\ç\'™\Ç\Úw`\è€\n\Zó–”w-³dŠ\")œˆ€\"(*ıSCM;é©£¾¥ƒ/•›{˜ğ\n2œc»gRo‚u-ªº;º¶&½±\ÎÀ\à×Œº—SMf5DE\Ğ\0DD:\â\Ûô¦š«‰­Ú–!\ÏG\Ş\İşñ‘\â«|’\\6©«m\Îvø\Ü&`\ì;Ày­	dQÿ\0ü;_aŞ¥#ŸŒôsOı?Ò±b>\î\Ø\ÛÛ†__ŠºˆFB-¥\ã\Ü\Ö4½\î\rkFI\'\0kY%\î¥Ô”¯sm\Ñ;p\áÎ‘ögPÿ\0b\ÃÊ†¡0D\Û53ğù\0uAƒz\ã\Äöc­Wù<Ó¢ñr5u,\Í)‚7=ı\r\î\é>k\Í\Å[+gÑ‡\Ì\ÕTc®E£“­,()\Ûv­ûÔ­\ÌLpı›OOy÷yD[ª®5\ÇLLó““Í…ø\â\Z\Ò\ç\0$ô/\Õ¢\ï ³\ÓHb…\Ã5“7‹Y\ĞÁø\î\áJRÒ³8–l®EHu¶¤5\Óô%	\æ\á„\Î\éğ\'f¿\0\0\0Ğ¼©)¡¢¦š6\ÇM\Ùk[À\ì¡Uz3o—\É)K?€DEi\0¸\î·:kU!¨©q\ÆvXÆŒºG\rh\é%~\İn4öº7\ÕT¸†\ÍkF\\÷\rh\é%FÚ­µ5m»İš=/QOœ¶™§£µÇ¤ø*\å\'˜òI.\ì[-µum»^\Z=$\Ã\Óg,¦o\Íıg\ÉJ\Ü+©­Ô’UU\ÊØ¡`\Éqø³Ø¼®·JkU7=P\ã—˜\ã`\Ë\äwCZ:J ¶U\\j\Ùt½4°\íSQƒ–A\Ú~óûz|¾\îÿ\0œ\çwÁ\çGES}ª\åt‰\ÑRFv©h\Ñ\Ôù:\İ\Ô:\åue=$•UR¶(csû\â¿k* ¢¥’¦¦F\Çci\Îw@Pt4“_jcº\\£tt±ª:7tuHñ÷º‡By6\íw|\n::‹\íDwœNŠ’3µKDÿ\0t’—u…=<\ÑS\Âù¦‘±\ÄÁ´\ç¸\à\0¼\ëë©­Ô¯ª«•±BÁ½\Ç\à:\Ïbƒ†Š«P\ÌÊ»¤N‚\ÜÃµ¸¼ô>_“|\ÓÉ²İ±\Î\ïƒ\å‘Íª¥l³5ğ\ÙsGsª\È\à\çu3¨t«+Z\Z\ĞÖ€\Z\0ı\0¸\"œa§w\Éóˆ¦p†\Ö0‰ôµÑ‡¢\Ïş[\ä¨üÍ³_qƒ>\ÜL‘#ıKF»E\Ï\Ú\ë!ı\äo›HYg%ljiû\Êg·ùš~Kûb+fŠ÷ªH×”»„O¤®M#„aÿ\0\Â\à~J}Gj8¹\í?r¥Ô²ß²V\ËVpkØ¦)&?\"\"ù“\Ô6S[¤jG\Ş|cùù(GY\ê\İ_\ÖbÖ¦¹Q8Ò’¹˜=\ê+‘ñı\Î\ä\î¹=\Å{3\ß‡\îb\à³CDE\è‚\" ˆ€*ıú¶¢®­¶+l…•2·j¦vÿ\0\á\â\ëüÇ€ó]š‚\íô]#y¨ù\ê\Ù\İ\Í\ÓB8½\ç\ä8”\ÓöŸ¢\éf“­¨w9S1\â÷Ÿ\àSz…ó&¶Z™\Ùo¢§·Q\ÅIKd17\r3Úº‰d²D¾]Yj¥3T\Ê\înûR¼ğ\İet\\k©\í\ÔR\Õ\Õ?b›—\íQ6**Šº³|¹°¶¦F\ì\Ó@ğñ\ÌzO‚„\äó\ÓBQ]\Ù\Ña´¾ˆKYZñ5Î§|òô4t1½M\n]J1QY#\æóˆ¤p\"\"µY-V¢¯\ßI3é­´\Ï\æ\êª¹ò¿¦6€:Jğ©§‚G1e´ô\í\0\×K\Øaû9\é{»z%\Ø\×[.õ4šjC4õ-t\Õ¥¡Í\Ä{a\Äú¤ı\Ó\Ç\ÉN\é6\Ğ6\ÔB^\\}#—û[‰dN/ÿ\0²ÿ\0²\ç\áY¢^£‚C#¡­h\à\0\à\Ú\"\ÖR\0DDD@•+?¥\Ú\ã¹D\Ü\ËHpüt\ÆCñ*ğ¼\ç†:ˆ$†V‡\Ç#K\\\ÓÀƒ¸…]µ« \â\ÉBZe™S\ä\ãP¬PNü\Õ\Ò4\r\ç{\ã\è>‡Z´\\+!·\Ğ\ÏYPí˜¡asË½bW\Zz\İ+¨¤d:9`~\ÔR}\æ·#Š\è\ÔZ\Â\å¥–v\Å-!\Îl@·uœ‹1½88\ÏÌ£T³\\2&¾®{µ\Îj—‚\éªd\'do\ŞN\à=Ámúf\Ò\Ë-–ˆ¶\Ö\íJGK\ÏÓ¸,Ó“;?\Ò\ÏL‘¹‚‹\ß\Òó\ìùo>k\êX\növ>Y\ÌD¿µD^‰˜/˜\ãl`\ìŒm\ã\ÚW\Ò ˆ€.zú\Ê{}$µUR\áŒe\Î?\ïŠö‘\ìŠ7I#ƒX\ĞKœN\0¥Whc~£®eÎ¡¤[ vh\áp\Ç:\ïŞ¸HñPœ²\ÙrI.\ìôµP\Ô\\«[yºFX\æÿ\0ÁÒ»üŸ´\ï\Æ}\ß»\Í\ê;{\ÙKN«¸L>ªš3¼ö¸ı–ö•\ËYz¶¥ö\ë[,\í8š©\Û\â§ÿ\0©İƒ\ÅwY\ìôö¶=\Ís¦ª”\æj‰7¾C\ÚzPU\Ç\Ò7üÿ\0\â$ıeô9\í6ySô•\ÒV\ÔÜœ0¤\î°twñ*Zic‚\'\Ë+\Ú\È\Øœ\ç\0JûU§\çTWÁ?BÒ¿#…Tƒ£µ€ù•7”Q\å‘ó<Ø¤†MKWÂ­eªmRS¸c?¼x\ê\ê=ò·‹½5ª&™v¤S³Œ\É+º€ù®K•\ì\ÇSôeª\Õ\Üq½€\â8[\ÏGw½mV\ÑJ\êÊ©M]\ÊQ‰*8ºÁö[Ø ³\â<÷dŸ«9\íöªšÚ¦\\\ï{.‡0R´\æ:~\ß\Äş\ß%<ˆ­ŒTx \ŞaD@|½»lsz\Æ5É“‹uu8û\Ñ\Èğ“ò[:\Æy<\Öğ®wúJÃ‹üZş?±¢Ÿ$™xV³¢¨\ï\Æ\æù…\î‹s\Ü\Î6¢ıp\ÄEòÇ¬l|¨Œ\éI;&g\ÅDò<\ì\Ò\Ü\Ù\ÔøÏ˜w\è¦ùLfÖª?uñŸ\ææ«¼¿\İY\ÖØ–\×ê½™íŒ\Ã÷1GğY¥¢\"ôÁ\ãWS\r4µ5á‰¥\Ïq\è†\åf7\nu\×;Œ\Ùš§››o~\áŸz«E§¨/7\ç\Å©š\İBKg’Z‡¿—\î¤…L\ìš\Ù\"qŠ|²^\Æ\ßL«v ¹¹°¾F\ì\Ñ\Ã#€\æb\ëü\Î\â{\Ë\î\Ö\Æ{w\ZF÷\Ì\Ñó\\1\é?³k§?˜|J\èf²³Ù´\Ğÿ\0ú\í?%\ÈFÈ¬¶:\Ü[>ş\Ì8\İ\èÿ\0’\Ï\Õ~\rAe?ı^\ßÿ\0\ì³õ_b\Éi-tCÿ\0\Çg\è .ôWKˆ²PQ\ÓD\Æaõ\Ó\ÇA½œ\ïpIJÈ®Á(³É—K~¡½s\Õ5Ô±\Û(_õ1I3Zg”}²	öGGZµÁ]GPğ\È*\à•Ç€d\ÇÜ¹Å\Ğ\Ö}DZÑ˜\Zwy/ª{5®–v\ÏOn¤†f\çeñ\ÂÖ‘\Ñ\Ä\ØFq\ç-\ÎI\Åğw\"«\êKõcg}º\ÍO4\ÓÇIš(ù\Î`oK»}ª\ÓSSu¤ª‚8…ûs\Õ\×\ÌyÉ‡\Üƒ€Z\ã»Å¦+3ªf\Ë\Â\"ò©¨†–MQ+\"‰ƒ.{İ€<Uüª\éw¢­Ö«.Ì•ƒtÓ‘˜\é‡Y\ëwS|\×;\ën\Z\ÜÕ³œ¢¶n¹\Ã”uF\ÌTÕ¾‚\ÓD ¦±BÌ¹Ä\äô¹Ç¤öªµ9ùxõı¿ryi\ç“\Ê\Õm¥²Q<5ä“™\'¨”ú\Ò;¥\Î*;L\íW\\.w¶°\ÇMVX\È/kg¿;»ƒ\ß&­¨1F\\\ËNõ\Ş7\Z·\ìÀ:OJ³±c\Z\ZÆŒ5 `Ô¹¤\Ö\\ ö\ç–}\"/™È˜\é$sXÆŒ¹\Î8\0v«ˆKñk\Ú\Ç4ğ \ä*œ÷YuMT–\ËC\ß½‡U\Íİ‘÷\Úzÿ\0\Ùömc\å`³i˜\Ø\Èi\Ç7%a°ß¾ÿ\0wZ§¬Ÿ~¿zrV\ë|¡µ¹‘\Ì÷IQ\'±OK\äsG\Í~Y\ïP\İ$¨…´õ4\Ó\Ó\ìó‘T3eÀ8d\Äñ\ÂçŠİ¦-õ5ò>@İ©ªe;R\Êz³\Úp\0\à¿4\İ,””•+‰luu\Ï\ç\ç\Ú8·«3øG\Í§©&2Yˆ¸\è.¶û‹\åed5‹|Û³Œ®\Åji\îˆ5E\çQ<TĞ¾i\ädQ0e\ÏyÀ½So\Z¾\ëm¯–\È\Ó4n/®“ ¼\ì\Æ>j[-\ÉF.E\Ù6\Ì\ËÎŸ€\Ë-4—jz€%|\Ñ\ÈL\í$p-q\ß\à¥#\ÖBv&ªu,½1\ÔD\è\Ü<\ÆctrñlıÎ¸>ÛœZÿ\0M\åj)X\ru8õ\ï\Òß˜ÿ\0º\ÈO4•-¦lO3¹\Û<z\Û\\1µ·I«¬1ÿ\0õ(¤q\à\ØÁy>\0ô„Ú\ë%=®‰\Ô\" M|±\Ì\ĞF\æ°q“\ÑĞ±\âi®\Ù)E\ï\ì]T\å“[G\Ú4}¦\Z\Z\Ê\Ø#«w\ÖL\Ğvœ^{NÜ¬”upWSGSK+e†A–½¼\n‹6¢­²2\ÇOk_»˜\åÄ.s¸¼.\Û-º;M²†7ˆ›½Ç‹œNIñ$­•©G(\å¶E2i\ï\Ü\íEø\ç´¹\Ä\07’z=^©´S\ÉÌ¶«\ÒgèŠ•¦W\áù«%(Ç–E&ø&Tu\\7	\îÔ†9›\r ¾M“\ë\Êş¸\èoJ¯‹•n¬ª–\ÛOM=¾\'b®W$wü°²ONı\Ş\ãoŠ6E#Œl±\rh\êB2VqÁ&´ò}\"\ã¼>¢+Md”€š–\Âó}l,\ËN\êEPúŠ\İ%eUHØ€É€\"w\Úv{GwŒm¾5\ÉE®NÂ·$\Ú-÷\Ê\Ø.u2\ÒMP\ØlôNºbp%\ë\í\Çrô\r¯\Ôlce¶Ù±\Ãfj†õö\ï+óO\é(¨#÷}2¢-\ìiUò@\év~\Ñ\ßÜ¬ë„¥¼ö\Ì9%´O\n*:z\nfSR\Â\Èa`\ÃXÑ¹{¢€\Ô\Z\ØñGL\ßK¹\ÊC#§a\Îxm\Å[)F7² ““\Øó\Ô5¦®wY\é\ç03œ®©\ÚÀ‚.¬ô9\Ş\á½x\Ó\ËSv§e®·\Ú#˜[‡=£¢ ¨¯+‘4\Ï}ŸÒ¥’C3 ³\Û=.û\Äym\0\0\0\0¸\0ª„e?¶Ì±µ‘\Ék¶RZ©…=$A\Î\\N÷<õ¸ô•ØŠ\"÷¨)mNe8kê«¥ı•,#/wP\íø«›Œ¢+\ÉÉ’è«¥º\Ö@\ê«\Å\Ì\Û)À\Ú0R84°~)OOv®\ÉW_5eM¶\á\\\Ë.Àz§\Ë+óŒC\ã;†OzªW\é\åU\ç\Ü\Ğ\Úö¸¸5À–œô 4e\ÖKV\'%Õ•\Ä\ç\Ö=©õlqM¬ˆI$òAÄ²\Çn–W¶8\Ú2\ç8\à\ÚT]¶õô­c›EK#\èkvZ\çu0\î¼\É\'“	7¹.±N\ÎÖµÃ¤J”­†ªNf–i~\ã¼‚\Çù0av¬‰\ßr\'Ÿv>k+ñk^ÿ\0±}>I*ø•\Û=ÿ\0u¤¯µ\Éw5j­“\î@÷y4­\Í\ä³(\\Ÿ\Ïˆ¾\\õM\Ë_G\Î\é“z˜\×y8’¤rE.\Í\î²/¿Mµ\ä\áú­R\Ã\Ï\éÛœ@dºšLw\ìœ,¯“	¹­Y?}\Ù\î\Úÿ\0Jö1b`\ÌU\ïT‘³\"\"ôLÁr\Ü\ë\à¶PMYP\ìErqÄ€;IÜ¸\ÚK6ÌÔ—	\Û\ÌÚ­\î\ÅÆ·!®ı\Ë>Ô‡»£µH\Ú\íğZ\è!£¦n#ˆc\'‹I=¤\ïQún‚vs\×[ƒqq­Ãœ\ßÜ³\ì\Æ;º{TÚ„o[ş\"Ryl‚\"ù–FE\ä‘Á¬`.s‰\Ü\0\âU„H\ÍCtu¶‘Œ§`–¾¥\Ü\Õ4_yÇ¤ö%zX­mµPˆvÌ³¼™\'˜ñ’CÄ•§£}Ú¾]CP\Òğb¡c¾\Ä].\Ç[¹YPñ=o\åü÷\'-¼!|¼¸1Å cp=%}\"´W\ÑtQ\Ù@’¦&\×>G¾­²85ü\áq\Î\Ğ;Ô•n¥²\Ñnš\ãÜ\Üã¼›’½«lvªù9Ú«}4²/tchø¯Z+eü%<®8\ÃOš¦1²)EdM¸·™ô\Í\Ş\ã\ê\Úm/†3ÿ\0‰¯ú¶ø0z\ÇÜ½)´\Û%™•Wš§\Ü\ê\Zr\Ö\È6aŒş\r\Ş\'*yºy\ï\'™\Í^›„µ$Ö´w\0^GË«g0\Ä\ç\ÅbØ’A¹\Õd}–ş³Ò½+\İ&£¸Kl\îe²™\Û5’´\à\Ê\ï\İ4õ}\ã\à¬P\Å2(˜\ÖFÀ\ZÖ´`\0:‹ûÇ—o\×ıòüD1GLŠ&5‘°µ­\0uö¼ªª`¤\Ó\Ô\ÌÈ¢`Ë÷`n—+\áØ²\Ç\è\Ôgq¯\Ğÿ\0–\ÃÇ¼\îS”\Ôv\îqE²F\ïz¤µ\ì2B\éjdı•4CjI`\ê\í*Ÿ«$­’–^*\"¦uSöi\èƒş®!\Ó$®ûdup\Î8ğWE’’×·$aóUIûZ™Ô=§«°/ZûM¾\ã4VRG;\à$\Æ^3Œöp<:UVW;\"óúŒ£Vl\ÔÜ¨\"¡¢\ÑXX=iO«5i\é?…§¯‰ø[i) £§e=4MŠ\Æ\ZÆŒ\0½€ÀÀEeu¨”³)º–®²§SR\Ğ\Åm¨«‚•‚v±£f9%>\É{\à\Öñ\ïR0\Ø&¯{j5@«x9m,ym<~hö•aEJÍ¹<ó;¯l‘VeM\r³XVš©\é\è\âô8›‘\Â6¸e\Ä\ã£r\ê“S\ÅR\ã\r–š[œ\Ü6˜6ag\æy\İ\å•5QKOR\0¥\r\á¶À\ìy¯F5¬hk\Z\Z\ÑÀ€T$¶Oa©>QFÔ–ŠÊšzCv­\çj+*£§8²\ØiÃ³’\Úv=jBù5“JÛšÖ±\Û&¤3„04ƒ¿µ\Ç\ì«\Æ\ßKs¥4Õ‘s‘ŒA#x+\æ\Ùk¡µD\è\è©\ÛqËIsY\'yñP\è\îò\áıN\ë\Ø\ë\0\0\0€_c$n\Ë\Ú\×¢2¾‘h+>#†(³\Í\Æ\Æg\î´-†¦\ZººŠ\Ô\ÔQT¿•œ\Ó6±¼‚\á‘ÁI\Şn\rµZ\êkŸ¤·ka¼OGû*”kE\í\ã|÷ªƒ\ì\ÑRGKV\Û\Î6»Ï’\Ïtâ²‹\ç\èY\Ş\çŞ²‰®4´wû\Õ\Ê\é&Y)\ç\Äaı\Ù\0c»*ÁJ\ÍYWMr\ÉGn\Ù`k¤#Ÿ•\Ä\rç¡»\×M†À(dôÚ¾iõ¥»-lMÙŠı\Ø\ÇGi\âT\ê\åu>dòöGe5\Â ¥)&!÷:ª»“ø\âyH`=Œnõ¾:+œ­\İM?PFÀ\Ğ	8wVr¦—Ä±²hŸ¬k\ãx-s\\2=+zi\'§fCS\Ïr6\İ¾Áh†T\ÃMnÓ¥‘\às;Ë‰<rWõ;j\Üb²P\Ïrpn×Ÿ’÷§\Òv\Zyy\È\ípm~0^\ÈS-kX\ĞÖ€Ö€\0À\n*3\Ë.±\Ö\ã\Ï%tXkn„>ÿ\0\\eŒ\ïô:bc„v\í;\Å|\éJh\'ª\í,OF\Æ7°´\à‘ù“\à‚©’–fFv^\æ\Ó\Ôq¹V,w\êK]’\ßQM\\\Ê\Êx\Äo´¯s‹‡ Ş•Bi³©¹\'‘l\\—+®z¶¡´\î\0ñq\ê‰=\Ê(\Õ\ßî­#mt\çüz¬>\\vF7\ŞWM·O\Ñ\ÑO\ér™++\Zš‡m¼~^†\å=r—•}H\éK“Œ¾ó\İ’\Ñn<^\áı\æQ\Ø>À\í;\×6ŸµQı=S-,-m-¸˜#\'y’b3#\Üx’2æ­Š¥fºÁb§†\ãS*…D¯\Ëi\Şñ.Ó‰i\0ƒ¸…\\£\É9?™4\ÛM\"Ú¼+k)¨)\İQW<p\Ä\Ş.yÀP\Æ\çz¹z¶\Ûa£ˆÿ\0\â+ıS\á\ß\ç…\ëG§)\ÙPÚ»Œ\Ò\\«[\ÂIı–~Fpj³[—‘Ò—$EûP\İ&´\Ô\ÖZ\éKEŞ§n&Ha§€\ß\í…ñg«´Yc\æ¨û\Õ\æa™d€óy<rş\rn{U\Í\ìlŒs\Ğ\æ¸`´Œ‚\Å=4¬Ø§‚8Y\Çf6r‹ªZµgüö%­e–D6J«¬­ª\Ô2F´\íGCú–v»\ïı\ËóT>+\ìF©ÍŠ\ŞÊ’\éw1¯<\Şz†U|MS\Äè¦’F\í\Îc\Ú=\à©:–œ—\'÷Üª\ÔVjVm\Ís¤©²‡\à2W\ÓÕ·V\Ík•\í<*jÁ†!\Ú´\ï\0¤\é­\ÊG\í\Ó[\é!Ş´ù€»Wt\Íòòø\Î+„AG§\\÷Të„9l8Ø‡±=\îÊœkCZ\Z\Ğ@À€_¨¥(ğq¶\ÈıC\'3`¹I÷id#øJ\Íù#‡jùW67GL[\â\\?B®úş£Ñ´•Á\Ù\Şöˆ\ÇnÓ€ø«|Aˆ.u{N€÷O\Ä,vø±0^…ğÚ©3EQZ®Q™º<ÿ\0ö\Ò7Ä´š•U®Q¦\æt…vö<^3\î\Ê\ÕsÊ¹?b˜,ä‘‰\"\"ù£\Ô?¤%ce‰ñ»\Ù{KOqXV”\Ûõm¿oqmH‰İ™;\'\â·u„j¨m\Õ\ÕûœÊ“+{2v‡\Å{ÿ\0‰ú3|\ân\è¼\é\æmD\Ì\ÏbF‡·¸Œ¯Eè™‚ø’(\ånÌŒkÛpá‘‘¼öˆ\" \n³«\ç}UE‚!5\ï\ÍC™Å°´ú\İ\ÙıU™~`g8Ş¡8\êGbòyŸ‘FÈ£dq´5Œ­h\à\0\à\Ò\"™Àˆˆ\" †ûS-%–º¦\0L±@÷3‚»—\á\0ŒW\Z\Ídur@Ù«¬¶‹#>‘¥ka\Îq”e\î;\É\ë$œ¯ƒ¨*\î^¥†ó4ÿ\0\â\êA\Ú>Ó¼ŒV+D3s\Ñ\Û(\Û&s´!nGv\í\ÊET¡<²\Ï%\ìI¸\ç™M§,\í«¼Ôº\åR\İ\ík\Æ!ò³‡‰Ê·Ed`£Á\Û\ä\"\"‘Àˆˆ/‰d%{XÁ\Å\Î8\Å@\×\ëK¹¶Õš©x\é›\Î\Üx{\Ôe8\Ã\Ìò:¢\ß…O\é\ÍIq\İl°ú4g„\Õ\Ï\Ùş]\Ç\â¾Nœ¿\ÜNnºŠH\Øx\ÅFİ\ç»\Ş\n¯­Ÿ’-ş_©-r\Ë5]u%vªª¡½rHñPUš\ëO\Ó;dV:wı\Øc.÷ğ÷¯\Ú=a¦vÜ”Ïª“¥õ\Ş7r›¥ ££¥¤‚ÿ\0.0ß‚}\ëô_Ÿ\ì<Ü­m&¨ÿ\0\åúv\éP:\æl1•ûôÆ®¨\ßO§!„u\ÏP» «j\'No™¿\ÈjdTö\æ£ÿ\0\'¦£\Ö?ªüm¶\Æ\Ò\×\êdGş•nD\èÿ\0\ÉıF¿dT¾ŒÖ\ã¤o\å§iøµ>ŒÖƒ…ş‘\İô\í\éV\ÔN‚õV:\Ñ}\n—¡\ëˆ÷¶\çk—±ñ‘ğjs\Ú\æ4¶™\Ç\ás>d+j\'G\ÒO\ê5û\"¥ôö¨§ÿ\0‰\Ò\æN\Øjøe~n\é\é\Î.V›•	\é/‹-ó\İğV\ä8\Æş	Óš\âT¿\Ğ\Õè‚¤\Ö:~¯—8XOD¹ú€\nb¦\n–m\Ó\Í\ÍûÑ¸8{—]\Ñ[ŸH·RH\ã\Å\Æ!µ\ç\Å|Ztõ®\Ï<³PSs/”»\×q\î%v=LüYdœ¶%Z@\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\n7+u\\ÕŠš˜óO“\Ú\ZÌ…\Ó\Ée73¥„¤~\Şw¼°0\ßôª\Ï+•œ\íŞˆ!/=…\ÇôhZ–¤ô9n§#l\r.N#\'\ŞJÁ_\'\èğÔ—©*¨ü­Tsv\nx\ß5@>\0™\nğ²şX*v«­Ô€ş\Î7HG\æ8\ÒU¸\Éi¦D(Y\Íš\'L6ói–¥\Í¬\åƒ=iù¢»rwK\èºJ‹#—jS\â\ãvBœ,qmo‘+-–§‘eY*ôœÆ¡Š¤V¢\0IüM$v\Ê\×U•ºz\ÏKZÑ—SË²{\Z\áúæ¥†ª_±\ÊSDæ…¬ºR\Şü\å\Ñ\Ç\Í;³d\ìü\0S\ë<ä†»jº\Ş\ã¾7‰š;Áø5¡«0\Ó\×TYc¦mDW•„E[­ª\Õt•“:\Z\n\Z\êM²ck$,7 \îÊŒ\ç§|¥™dEUş\Ú6—u\Ö\Ïq¡\ëymƒüÛ¾º—Wiúœl] nxLÕ…uo¹\'	.\Ä\â/\Zzºj¡šzˆfq¼;à½•©\æ@\"\"\0ˆˆ\" ¾%–8[µ,Œcz\ÜpeV¦±\Òçº\Ò\äq<ù¨¹F<³©7Á,Š§.¿´—è¡¬®“ C	\ß\çƒ\î^.½\ê\ë†\ê(\Ø~\İ[·\Ü|\n­\â!\Û†\äºr\ï±r\\Õ²\Ú¦WA	e\Ïõ¿‡Š®5¨.;\îúŠV0ñ†l‚:³»\àT…»E\Øhp¢}úƒ\Î\àw{—5\Ù/,røÿ\0£ºb¹gõ\Ä5/1Ù­•·\'\ÛLak<ø¿65¥\Ó\Ú}¢\Ğ\Ñ\ÎIxø+dldlcZÖÁ­}.ô¥/4¾›¿\Ìæ´¸ER-\rG4‚[µum\ÎQû\éo€Çš°PZ\è-\ÍÙ££‚\Ã,`÷%u¢”j„7HãœŸ,\"\"°ˆDD@\ë¢F“¹`\ã\ê\Çõ<¼+¨\é\ë\é%¥ªœ‚Q‡·$dw\ê¨´»‹É¦Uk­”v•–kT~5MKa–&8\âH\È;D‚z7qQV\í;j¶\ÔúM-&\ÌÀ`=ò9\äÍ¢q\à¥Tjƒ}¾¥,Ê†¶€\Õ^,PzkÃ¹ó\èî—›\Ã[\Ó\Ù\ÅX,tŒ£¶\Å(YCÄºI¶\Zs÷ºR\ëf »˜MtCy²$ss\Ç{H\ê\Ú\ßCOn¦ô¬s\"÷?k‰+‘­«½×·ı‡,\â‘\í6\è^G\İ+3†¶ª×£]KX÷IG_H]K7\îßñı\ä-8€Ax+ŠK=¾[[m’S5\ÔMhhˆ“¸øø®[S\éöga%N¨7Á\å\ãq·\Ò\\\éı¶\ÍC¶]\ÖH \00\à¿U\Ù&²ey•.O-”P\ÚY];[T÷K¤ß’\Ğó»\Üµs\Ğ\Ñ\Ó\ĞSŠzX„q\\\Z	;\É\É\ã\ÚWB…P\ÑS–§™C\×W@\ë¤t\ÑUd·°U4¹\Ü\ä\Ù,8½\\ñû\Ê\çm¬Š\ãAOY	ú¹˜;3\Ñà¾©© ¦|\ï†0\×\ÎşrC’K€3¿°¢£§ §ô±ˆ\âsƒA$I\'i*0„”Ü›\äì¤šI:¨‘¦®„F“úJê´’mTDœ“?¤/jªxªé¥§›p\Ê\ÒÇ·8\È;Š\á¶X-¶©Œ\ÔP>7–\ì\Ì÷Œw8‘Ğ¤Ôµ\æ¸9šÓ‘&ˆŠ\Â!D@\0DQú‚¼Zì•µ¹\Ğ\ÄKs÷¸7\ŞBäšŠÍK7‘‘\İ\É\ÔZöHšv™5P„÷\ZCs\ä2¶À\0\0,‹’ºU¨¤¬x\Ëic.\Éû\î\Ü=\Û^K]X°)¸\Ê\Çİ—\â\ê+°X–¿ªu~®«k=a›\0\ëV\ÑU;)©¥¨\â8˜^\ã\ØJÄ´¬/¼\ë*W\Ê2d¨5un%\ç\á\ïQÇ½Zk]\Ù\Ü>\Ù\Ë\ĞÚ­\ÔÂŠ\ßMJ\ŞD\ØÇ€B-\éd²3©\íÿ\0JX+¨À\Ëäˆ–\Ä7·\Ş”D”T“L\êy<\ÌO“ªÿ\0A\ÕTÀœ2¤\ã\Ãù€[bÂµ]–=UR\ØrÍ‰DĞ‘\Ğ¬1\İ\ÃÁmVš\æ\\­”µ±\ãfx\Ãñ\ÔH\Ş<\åƒ\'U>Q£³\Êk¹Öˆ‹\Ğ3D@U–\×YŸH·R\ÈO\ÚtMÏŸŞ‹\'\É\Ô\Ú\à¬\Ô\è=?1\Úe,;\ïE+‡\Ç!x?ğ·\Ë\Ä\Õ½À+b*ºÿ\0‰.¤½J°\ÓW¨¿aª\ê\Çş¬\"O‰_†Éª\ì\ê{\é­Hûı_\î:øŠ™´\ë\ì\êX}+?EùôN±;¤€\ÊVÒ­¨ú¿«Gè¾…Kû9¨\åı¶«•¿út\à|O\ì\\òÿ\0\Å\ê;´Àñ]‘\ïÊ¶¢}ÿ\0V:’*±rbk¶¦mMKºL³şXRTº^\ÅKj\ÕK‘À½›gù²¦uS\\xŠ8\ç\'\ÜøŠ(\á`dLk\Z85£}¢+H„D@\0DDD@x¼\Z	©\éi\é_Y]Q“-phÀ\â\ç8ğ¦\×Q[Q]C\èr‡`0J$`…{¢®\íIx·BÊ™a\Ğ\ËN\ç†°œú¤\îµ%k©¬ªÏ¬ 4O\Ú\Ãc2¶BGY\Æ\áÜªM\ëiÿ\0¢m-;‹‚\Çr{s+F \ç=»%\Ùö\\[\ÇÁwª¾—‹e<6Ú‹;„M•\äÔŠˆ\È\Î\';9\ÏJ\ì¤Ô—§ÿ\0%še¡pTÜ„Š+w4\\j™#öö½œtt\ç+½DWP\ÔM©-u¬`0AÍ‘\Ù‹€\Æ\ï»6\Ò\Û\Ø\är\îK¨j\İCOC¨)\í5,ôˆƒ\Û1>¨q$ü\êe@\Ül‚\å{¨}TA\ÔR\Ğ6\r¬Œ‡‡—n\ê#q\Êåš²ğ]\É\Z+€«®¯¥–š9\Z\Â\ì\çk-\Ïg.\Õ_Ò–ËºK‰¸\È%|²·b\\Œ\ÈÖ´4\ÔpsÒ¬µ¶ãœ„’Oc‚\Ór/L\ÄF?Fª}1Ë³µ³şõŞ¢4\í\rE¹úCyúùg±\ØÁR\é\Üw\ä\ä²\Ïb¼\ÍA]Y,µÙŸWI\ÌfwT6=²\È<Gn\åaUk\\w«&\Ù©µ\ÔÌ‘\Æ	\ÛP\Øğ\×8œ8ù<¥F¦\Úñsü\à”\Ò\\DVˆ€\"\"\0ˆˆ òµr\æm´¶\Ö;Ö¨8ñø[\ÃÌŸr¿,ST\ÔÉ©u“¡§;M2¶–¬Œ÷g%c\Æ\ÏMzW/b\ê#œ³}‹\×%\Ö\ïCÓ¾”\á‰+$/ÿ\0(\Ü>g\Å\\W4tt\Ò\Â1,h\ì\Ùhª8(ú\ÎZ¤\ÙV\å&\á\è:^v4\âJ§[\Üw»\ÜñUHh6\ê\ë®.£`…‡´œŸ€ó\\Ü¬\\ı\"ñ½\Ë)Y´\áøİ¿\á³æ®¼ŸÛ¾\Òôsq$ùÿ\0\æ\áü»+û\ÜV}¢^üüK\Z\"/D\Ìr¹kÛ†\ê\Æ\ïa\æ$=‡{}ùó]<“]ö¹\í¯w¯Lı¶À\ï\Ğ\ç\Í[o\Ö\æ]¬õt\Ç\×FCI\èwŸÆ´•\Åö\rM“\æ6‡˜\' ƒ\ãƒ\à¼Û¾\ç¬\ì\ÍPûÊœ{£tDE\éB\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\"  õ•\ÜY´ıMC]³3\Ç5^\Ù\éğ>\n‹\ÉE§\Ò.“\\\äo\ÕÒ·b?\Î\ï\Ğg\Ì/S\ï\ãzeº]ª@ûR>[‡~V‹¤­\Ëa¦¤-lm\Ìz\Şxùpğ^zûüN}£úÿ\0?CO\á\Õ\îÉ…\åUQ%4µ;f(˜^ó\Ô\0\É^ª‘Ê¥\ß\Ğ\ì\Ñ\Û\ãv%¬w­†7yó8÷­–Ø«ƒ“\ìQ\ê’F}AÚŸU1²gj² ¾L}–\ç\'\È»µ¡­\rh `Ğ³nH\í^µ]\ÚF\îQ|Ày­)eÀ\Ö\Ô5¾Yn\"Y\ËJ\ìn(ˆ€,ƒ•? _tm\Ä£hã€{^{‰Zú„\Öa|°\ÏJÖƒ;G9	üc€ñ\Ş<VlU]Z\Ú\\–\Ó=\Ì\å\äşóôÆŸˆH\ì\Ô\Ó}L¹\âq\ìŸ\ïYV) /F\Ëk\'qe=O\Ô\Êí“ŸT\ã\î%mk˜;º•¬ùB\èiDE¨¨\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" \nU\Ş[b²OY‘\Î\ãb—\\|\ÂÆµõñ÷û\ãi)	’š\Ü\ÔMnşq\ä\à‘×¿pÿ\0ºÍŠ»¥\×/‚Ú¡®^Ç§\'w\İ\ïæ¾ \ÃHy\×9\Ûö¤>Ï¿‡j\ØTF•³2\Åe‚Œ\0e\Æ\Ü\Îiç—.»…§¥^O—È¶z\å˜\'\'‚\Ã5e\ÎME©d|‘…\â\nv‘œw’OŠ\ÒyE½U…ğ\ÆüT\Öf&cˆo\Ú>[¼B§òYeôË«\îr·0\Ònfx\è7ø…›İ¶F˜ü\ËiZ\"\ìf•a¶2\Ïh¥ f4\Ì8´\ã½\ÇÌ• ˆ½¥’37›Í„D]8\0DD?\Êe\è\ÛÇ§B\ÌSV’ã¹²}¡\ã\ÇÏ©^y?¾ı3dc%~j\éq¹;\Ü>Ë¼G¼)¨­_-\ĞË€^3\Ï\Øx\à\ßFV?§.u\ZWQ‡N\×5¬q†¦?Ãş\\Gró\'ÿ\0­~¯í‘ª?{^]Ñ¹¢ùŠFM%Áñ½¡\Íp9}/L\Ê\0DDD@\0DDD@\0DDD@\0DDD@\0DDD@\0DDq^.Tö‹tÕµN\ÄqŒ\ã¥Ç Ò¸\ÚK6\Ïb»\Ê.£‹a¢§~+j\Ú@Á\ß8xğ=J»\ÉvôŠƒzªg\ÕBKiÁ\Óú]\áñ\îUú:zık©œ^H2»nGF:»†\0\í[],44‘RÓ°2š\ZÆ€ŸRx›z²ò®\rS}(h\\³\Ù~=\Íc÷¸5­$À/\ÕC\åCPú%´S?\ë\ê™ˆ>\Ì}^?õ¶\ÛUPrfxE\Í\äŠF¨ºÍ©õt\rs\Ø\çi£#8$\ïñ[œ´Gd³\Ó\ĞÇ‚\æ\È\áöxŸ÷Ñ…D\ä®Á\Î\Ìû\ÕC=Hò\Êpz]ö\á\Ã\Äõ-9dÁV\ŞvÏ–]|—‘p‚\"-\æpˆˆ\" ˆ€,\ç•-;¶Á{¥g¬\Ü6¤\Äpğ\à|:–Œ¾%‰“Dø¥`|oikš\áA\âWT­ƒ‹\'	¸K4gœ—j=¶}	Tÿ\0Y¹u3‰\â8–xq=KFX~«²Tik\ãM;\ØK¹\ÚYA\Ş0xg¬—Z\Ôô† ‹PÚ›7ªÚ¨ğ\Ù\ã\ë‡ığYp–µ÷3\å\İ\çDE¼\Î\0DDD@\0DDD@\0DDD@\0DDD@\0DDD@ø÷5Œs\Ş\àÖ´d’p\0XÆ´\Ô3jk«)h\Ã\İIö £|;¶±\Û\Ñ\Ù\ŞT¿(º¿Ò%\İ\'\Ô4\â¢VŸlı\Ñ\Ù\×\×\İ\ÆW“\'\è6\í_*¤o\Ô\Æ\á¾6“\Ú}Ã½y\×M\â\'Ñ¯\ì\Óª\ã®\\ö\'tnOZ›ƒ]W.;\Ç_\İƒõS\è¿æ±¥\ïpkZ2I8\0-ğ‚„TW\Ï&\äód}ş\ïOdµ\Í]Pr0\Æg{\Üx4,b†š»V\ê=—;jj—\í\ÊünczOp€\î·\\\ê7j œ¸\Ñ@Kao\ß=.\ÇoGb\Ğô›_9;G§T€\é\0\èo‡Ooróf\Ş.\İ+ÊK\îa›\å–\Z\ZHh(á¤§f\Ä0´1£°/tE\ê%–\È\È\0DDD@©l”÷û\\”sa¯ö¢“\Ø\îƒú¬~\×]_£õ¶\Ø[$.\æçˆ\Ïoû\Şr\İUC_\éQ{¤ô\ÊF¤ n\à?\Åo\İ\ï\êòX±t9}\ä<È¾›ğË†Y­\Õ\Ô÷*(«)dC+vš~Gµt¬[Dj‰4õq§©\Ú4»·\ãw\r >#ô[42\Ç<L–\'µñ¼5\Í9­\Ãb\ÑÏ¿r\Ö\àı´E^\×6\ë•\Ê\Å$6Éœ\É\Ú|m82·ÛŸ÷•t\ä\ã\ÒÌ„Vo\"À\Ç5\ícƒšxr\nıX¾Õ•:r¨\ÒU¾…\ÎÄ‘\ëDzH¶*J¨+i£©¦•²\Ã \Ë^ÓB§ˆ\Ën}	\Ù[ƒ=‘h+ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€,÷”f)\Û-¦\Ù&f>¬ó4ûmi\ë\ë=ü>µ\æ·m+d¶Z¥\ÍAõf§t}a§\ïvôwğ…\Ğz5\×Yr¹0Š&œ±\ã1ÿ\0§\â°_|¬—F®{³Eu¨­s:9<\Ñş”\è\î÷ÿ\0»´\íA‡\í\Ş=]}\Üu%øÖ†´5 €\0¿Vš)1ÒŠ¬››Í…›r—ªFd¡“²©\í?\Éúùu©«–˜\ĞÑ¼„­\â?Ái\é\ï\êó\ï\Ïô~›Q\ÜğòñIÚ^\àz\Ïı\Ö\\]\îO£_,ºš\ÒZ\åÁ?É–™ô™\Åê±ŸSş\î\Ò=§µ\Ü:;{–¤¼\é\àŠš\à(\Ú\ZÆ´n\0t/EªŠU0ÒŠl›œ³ˆ® \0DDD@\0DDs\Ê6‘2/6\è²ÿ\0j¦&?ŒŸZ‡\ĞZÀ\Ú$m¾½\ä\Ğ<ú¯;ù’\Ó\×\çÖµ\å—r£\r+¤»Z\âş\î}i\áhıŸ\â«¬twpó±Ê©uªùškšš\Ñ3Pcšö‡±Á\Íp\È \ä¿VK¡5¡µ–[®O.¢\'\Èw˜{?/Ák{dc^\Ç1\Ã-p9u…®‹\ãtsEVV\àòe?[\è¸\ï-uu\0lw\0=aÁ³wõ\ß>\ÊšÔ—\r)^úyc{©ö±53÷±\Ô~+nU\ÍY¤¨õ%û ®hõ&cº\ÇÁg¿õu*\ÚD\ëµe¦|Ö›¥â‰•tS	#w¶¢:\n\íX\\3^´]\àŒ:G´Ã¾9›ó¼GbÕ´Æª \Ô0„U`eô\ï>°\íaOŠVxe´YK\ëtO\"\"\ÖR\0DDD@\0DDD@\0DDD@\0DDr\\\î4–ªG\ÕV\Î\ØboI\âOP%q´–l%™\Ô\ç5.q\rh$œ\0e­õ\ß<n³JD~Ìµ-;\İ\Ø\Ş\Î\ß.ØQ««õ,â†Š9\"¤s¶Y7¾SÑµ=\ÃŞ­\Z3A2„\Ç_wkd©\Ù\Ç\ÚzÏ¸v¯>wOútñİšcÖµOŸB\'C\ègU˜\î7x\Ëi½¨ pÁ“µ\İM\ì\é\î\ã©5­cCZZ\0\0ú‹]4F˜\å™\Ø\æóaVµ¦ª‡OQ\ìG³%|£\ê£?d}\çv||Õ•a\ÓÙ¯wSQEP\×>¸¼™^\ïe­ûß—Ç‚¯l\ëŠP[²tÁI\ç.\Ïfµ\×\ê›\É`{Ÿ$Ûw\ï\r$ü‚\Û,öº[=¾:*Fl\ÆÁ¼.=$ö•Ï§,T–{ii†Óù%#Ö‘\İg\äª\æ\r\ÒY\Ë\ÌÅ¶\ëy.\"-e!D@\0DDD@\0B;\Â\",×º$\Ò.v¨‰§>´\Ğ4~\Ïñ4}\ŞÎ\î\Z\'ZKesh«‹¥·¸ñt=£¬vyv\ìK:\Ö\ÚK\Î\\l\ÑaşÔ´\Í\×k;{<º—~UË«O\Ğ\Õ]ªKD\Íxª dğH\Ù\"m5\í9/E‡i}S]§*e¤.ú\Êwœo\ëEl6[\Í\r\îŒT\ÑJ\Şi\Ü\æ¢:Œ>*7,¸~…VT\áğ«5\r\î\ÓWB\Ş-p\Ü\æ°zO¨ô•\ÏMO\é”Ï’ZV;i•d:?ÍüĞ¿\âJ\íøh]»\ÙúŠ\ípøÆ–\åŠ[\àÁ\à*š?¨ˆòZ,EQ&†FI\ÆZö‚;\n£j~N\é«\êm´Ó\æû7w}ß‡r¥[®\×\İ\\\è\×Å¿/¦˜e\í¨Y•ö\áŞ›–kÔµ\×7‡>†âŠ±§u½®ò•gw5+·8şp>\â¬\ët,Œ\Öqy™\å“ˆ¦D\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" £/W\ëm’-ºê–±\Äe±\ïwpùğY£×·¹4¶æ¾’\çg9–N\ÂG\á\æV{±5\Õ\Ë\ßĞ²J|mO­\íöM¸!\"®´n\æ\Ø}V\Ä~\\{–r\Æ_µ\Å\Óh\æ\\\î>¬P—\Äö©­1\É\İMYeMàº\"ûGwıßrÓ¨h©­ôÌ¦¤…\Â\Î`Àÿ\0¹\íY•v\â^vmB\İP«h\î\È]-¤\è4ôa\ìıa|\îûš:°¢-ğ„`´\Ålg”œl\"\"‘À¿6@qvN\âz\×\ê ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\n–°\ÑT\×Æºª—f\ákl½\í\íø¬\Â)núZ\êq\ÎRUG¹\Í<;zø£o–:\í/£\Ö\ÂbF\î{X?\ì,XŒ\"›\×\r¤_]\Ú|2\İ\ÚS[Q_)\êikøsdú²\Â~\\{Õ­bZ›FÜ¬.tÁ¦¢ˆ‰\ã\ÈüC£à¤´\Ç(Uv\à\Êk˜}]0\Ü$\Ï\Ö0wı¯ıªº±E\ë\'\êJt©-Uš\Ú\â»ZhnôÆº“3 Å§¬!~\Ú\î”WjaQCPÉ£\é\Ù;\Û\ØG{\×b\ß\ášõF}\Ó2½AÉµU6\ÔÖ‰}&.<Ì„	q\à}\Ê&Ï«¯švoEŸnX£8u=H ·°¼|;Ô£\î\Ö[u\â.n¾’9°0F\Ş\ç\r\ác\'ª—“/ù¬¦³!\ìš\ê\Ëu\Ùc\æô9\Î\îns€Oc¸|œ@ \ä˜\ß93=©mfş\æb¼Àø\áW\éîš—I\Ê q¨§`\á\íÚŒ÷gwˆQX«*\Ú\èü\ÑŞ”g¼·¢Î­\\¨Dü2\éB\è\ÏL”\ç#øNñ\æU\ÆÙ¨¬÷@=\á\Şx0»eÿ\0\ÂpVªñ\Ù\åe2®Q\åˆˆ® \0DDD@\0DDsV\Ü(\íñó••PÀŞ¹\îµ\Æ\ÒİŒ³:QRîœ¤\Ú)v›GÕ²\r†yş\åL¹kMC|—\Ñ\é\\øZı\Â\ZF£\ã\í–\ÌmP\Ù<ß±thœ½Jñ¨­VfŸM¬cdtMõ|\Íg\×\ŞR«*ƒ¡µCè‘\Ü\ëğ\ép\à=\ëš\Ñ\É\İ\â½\ÂZ\ç6Š7o<\ç­!ÿ\0(ù¯ö-g²\ì¾*~z 7¬\à{:‚«<MüxW\æO*«÷fqfÑ·½A7¥U—Á\Î]=FK\ß\Üó\ãÚ´­?¤\íV \×Á;Rù\å\Ş\ï\à§Q_Nº·\åú•\Î\éOnÁ’ ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€ü A¡Rµ/\'´Wú‹imI\ŞYªq\îû>JìŠ»*…‹)\"Q›‹\Í$ô÷­+q\Âj:ì½§\Õx\ì<;\ÛOr•›0^¢\æ\İ\Ã\Ò\"où›\Äxy+\íu-};©\ê\àx]Å¯nGş\ë?\Ôšµ5–l>1\İşW~¾k\Ã\İCÎ—šô4+!f\Ó[š%U=l\r–h\æ‰\Ü\Çd\ì°H\å¾iz\ÜSC7H#\r‡5u±r˜\Çl\Åx¦\Ø<9øG‹O%mX\èKi\ì\È\Ï\Öñ\İ\Z2ó¨‚\Z˜ñG,n\âÇ´8¹\í·Z¤\\\å\r\\S·§a\Û\Çx\â<WbÚš’Ø£tT.œ\Ù+KŸN%£ş\é\Ùn)ùaT\î|š]©ò\ê) ¬h\à3Í¼ø\Şõ­¢\Íf©ö\Ë\àY\ç\æ\"\Ú\ÍW¦ˆ}u4m\à$\Ñøg-òR\Ô<§]\"À«¤¦¨h\éncqñ\Ş=\ËX ƒ¼(ª\İ7e®$\Ô[)œ\ã\ÅÁ›.>#Uö[aøsú“\ëB^h•\ÊSm3`UST\Ó8ô€\Ñ\â7û”\İ.±\Ó\ÕXØº@\Üş÷1ÿ\0P\n*³“{ù0ššc\Ğ&\Ğş`O½CTòXñ“Mui\êl\ã\Ş\É5b\á\ÊLeKï‘ Ct·Oû\ZúY?$\Í?ºš\àá–GX+\"Ÿ“K\Ü³šŠQ\Ù#÷…\Äı\r©©\Î\Ó(‰\íf~¹Oµ\\¹­”6´X«,š\Ê\r\Ñ\Årg\ä˜üŠûu.¹a\0º÷\á3\Ï\Í>\Û.ğc ¿\É:,\\\Úu¬ş\Ó.\Ïß™\ß2¿Õµ\İ,\Äu\ÉPß›“\í“|Vÿ\0Ÿ!Ğy#dš¢fš8\Ç\ãpS©¬t ó·ZM\İ\r<ù¬\ÊNu§\×m4Y\é|¹ø¤©ù-¬v=\"\çOşœeÿ\0.ı£/-\Ï\Èt\ë\\È±\Õò‹`€iõ\'ş\\DVw*O Š+cZz4™şQŠ\î¦\ä¾\Ü\ÌzE}T¿5™óÊ›¢\Ñ\Zz“[\Û+‡Ú™\Åùğ\'\åÌ±s\å¥üùŒé¹›\Ôj\íQy\Ãóÿ\0‡I˜õ½\ëÒ‡Bj+œœ\íDb\0\í\æJ™=c\à2|\Ö\ÅOO\r4b8!(\Ç\Æ\Ğ\Ñ\ä¢,­\ì“c\íyVE\ÓÉ¶Ÿe÷\n‰j\ß\Ò\Æı[=\Ûı\á[\íö\Úl|\İ$4\í\é\Øh÷%u¢\Õ]5\×\åERœ¥\Ëˆ­ \0DDD@\0DDD@\0DDD@\0DDD@\0DD5t”õ°˜j hÅ’48{\Õ.óÉ­¾¤ºKl\ï£yÿ\0\rŞ»?Q\ïW¤UYL,ó\"Qœ£\Ã1“\Ô6)yöÁ+š\Í\âzWc·vñ\â]¯”;\İP\è\ë#±+p\ï\â<­‘E]t\å¢\í“YC\Ş\Äh\Ùñ\r\ë#ÁJ:e‘z½Ki¢¿k\å&\ÑU†\ÖG5\ÏF\Û<\Æÿ\0rµP\\\è.-Ú¢¬‚qÄˆ\Ş	\ãˆT[—%\Ñ8¹\Öëƒ™\Õ\í\Ú\Ä?EX®\Ñ\ZŠ\Ú\í¶R\Ãx>™\ÛGÀ{^\åÎ¾&¿<søRò¼±Oª5-¡üÓ«jZ[\Æ:–\íP\ÈS´<¨WÇYAO8\ë\Æ3óS>§\æ\Ø\ã\Ã\Íq¹ª\"¥Qr•e˜QU3ºrÀ\æùƒŸr²\Ù\ïV\ë\Ô.–\ßRÙƒ78`‡7¼\ëL.®{E•J¹G”H\"\"´€DDD@\0DDD@\0DDD@\0DDD@\0DDD@\0DDD@\0DDD@\0DD•E4QóuE3>\ìŒE@\Öh};VI4\'˜^Y\î\äE]Œ—‰fJ2i\ì\Ê6²\ÒVû$FJYj\\qœH\æ‘\îFr]=¨£l/\Ãj\ÍH\ÓÁ\Í?\ï(‹\Ä\ËM\ë/Toæ·™·¢\"÷\Ï8\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"\0ˆˆ\" ˆ€\"\"ÿ\Ù','Mon - Sat | 9:00 am - 5:00 pm; Sun | by Appointment');
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
