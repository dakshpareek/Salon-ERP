-- MySQL dump 10.13  Distrib 5.1.73, for Win64 (unknown)
--
-- Host: localhost    Database: hc
-- ------------------------------------------------------
-- Server version	5.1.73-community

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `active`
--

DROP TABLE IF EXISTS `active`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `active` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(50) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `therapy` varchar(100) DEFAULT NULL,
  `therapist` varchar(1000) DEFAULT NULL,
  `dt` date DEFAULT NULL,
  `start` time DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `active`
--

LOCK TABLES `active` WRITE;
/*!40000 ALTER TABLE `active` DISABLE KEYS */;
/*!40000 ALTER TABLE `active` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(50) DEFAULT NULL,
  `intime` time DEFAULT NULL,
  `outtime` time DEFAULT NULL,
  `dt` date DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `ft` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance`
--

LOCK TABLES `attendance` WRITE;
/*!40000 ALTER TABLE `attendance` DISABLE KEYS */;
INSERT INTO `attendance` VALUES (1,'Sheena Gupta','10:00:00',NULL,'2018-03-11','Working',NULL),(2,'Sachin','08:00:00',NULL,'2018-03-11','Leave',NULL),(3,'Suman','10:00:00','11:50:03','2018-03-12','Outdoor',NULL);
/*!40000 ALTER TABLE `attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `experties` varchar(1000) DEFAULT NULL,
  `image` blob,
  `status` varchar(200) DEFAULT NULL,
  `salary` varchar(100) DEFAULT NULL,
  `rsalary` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (1,'Sheena Gupta','sheenagupta970@gmail.com',9878080548,'','Make-Up,Hair','','Expert','18000','18000'),(2,'Suman','',7300137983,'','Skin','','Expert','13000','13000'),(3,'Sachin','',8003738462,'','Hair,Male Services','','','13000','13000'),(4,'Monu','',7891224785,'','Male Services','','Expert','13000','13000'),(5,'Pawan','',7791830365,'','Male Services','','Expert','13000','12500'),(6,'Himanshu','',9983557764,'','Hair','','Assistant',NULL,NULL),(7,'Priya','',8284801345,'','Make-Up,Skin','','Expert',NULL,NULL),(8,'Jay','',8385909475,'','Hair','','Assistant',NULL,NULL);
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `records` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `therapy` varchar(100) DEFAULT NULL,
  `dt` date DEFAULT NULL,
  `discount` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `records`
--

LOCK TABLES `records` WRITE;
/*!40000 ALTER TABLE `records` DISABLE KEYS */;
INSERT INTO `records` VALUES (1,'daksh','','2700','2,15','2018-03-11','0',NULL),(2,'asd','','5000','21','2018-03-11','0','male');
/*!40000 ALTER TABLE `records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(100) DEFAULT NULL,
  `edate` date DEFAULT NULL,
  `emoney` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salary`
--

LOCK TABLES `salary` WRITE;
/*!40000 ALTER TABLE `salary` DISABLE KEYS */;
INSERT INTO `salary` VALUES (1,'Sheena Gupta','2018-03-12','100'),(2,'Sheena Gupta','2018-03-12','100'),(3,'Sheena Gupta','2018-03-12','1000'),(4,'Sheena Gupta','2018-03-12','5000'),(5,'daksh','2018-03-11','200'),(6,'Pawan','2018-03-12','500');
/*!40000 ALTER TABLE `salary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_cat` varchar(200) DEFAULT NULL,
  `service_name` varchar(200) DEFAULT NULL,
  `price` bigint(10) DEFAULT NULL,
  `duration` bigint(10) DEFAULT NULL,
  `master_cat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Make-Up','Grooming Make-up',1800,0,'Make-Up'),(2,'Make-Up','Party Make-Up with Advance Look & Hair Styles',2200,0,'Make-Up'),(3,'Bridal Make-Up','Krylone Make-Up',8000,0,'Make-Up'),(4,'Bridal Make-Up','Make-up Studio',12000,0,'Make-Up'),(5,'Bridal Make-Up','MAC',18000,0,'Make-Up'),(6,'Bridal Make-Up','Airbrush',25000,0,'Make-Up'),(7,'Eye Make-Up','Liner',50,0,'Make-Up'),(8,'Bridal Make-Up','Glitter Eye',150,0,'Make-Up'),(9,'Cut,File and Polish','Nail Paint',50,0,'Make-Up'),(10,'Cut,File and Polish','Cut,File & Polish',150,0,'Make-Up'),(11,'Hair Makeover','Smoothening Below Shoulder upto',6000,0,'Hair'),(12,'Hair Makeover','Smoothening Waist & Below upto',7000,0,'Hair'),(13,'Hair Makeover','Rebonding Below Shoulder upto',6500,0,'Hair'),(14,'Hair Makeover','Rebonding Waist & Below upto',8000,0,'Hair'),(15,'Hair Spa','Insta Care Spa',500,0,'Hair'),(16,'Hair Spa','Protein Rush Spa',150,0,'Hair'),(17,'Hair Spa','Keratine Spa',1800,0,'Hair'),(18,'Hair Spa','Moroccan Spa',2000,0,'Hair'),(19,'Scalp Treatment','Dandruff Treatment',1500,0,'Hair'),(20,'Scalp Treatment','Hairfall Tratment',1500,0,'Hair'),(21,'Keratine','Keratine Infusion upto',5000,0,'Hair'),(22,'Color','Full Global Base Shade upto',2000,0,'Hair'),(23,'Color','Full Global Faishon Shade upto',3500,0,'Hair'),(24,'Color','Highligting Per Foil',300,0,'Hair'),(25,'Color','Highligting Full Streaking',3500,0,'Hair'),(26,'Color','Highligting Balayage with Highlight upto',3000,0,'Hair'),(27,'Root Touch-up','1 inch Touch up(with Amonia)',500,0,'Hair'),(28,'Root Touch-up','2 inch Touch up(with Amonia)',700,0,'Hair'),(29,'Root Touch-up','1 inch Touch up(without Amonia)',600,0,'Hair'),(30,'Root Touch-up','2 inch Touch up(without Amonia)',700,0,'Hair'),(31,'Top-up','Deep Conditioning',150,0,'Hair'),(32,'Top-up','Repair Boost',300,0,'Hair'),(33,'Top-up','Color Boost',300,0,'Hair'),(34,'Top-up','Shine Boost',350,0,'Hair'),(35,'Head Massage','Oil Massage',150,0,'Hair'),(36,'Head Massage','Moroccan Oil Head Massage with Neck & Shoulder ',400,0,'Hair'),(37,'Styling','Ironing upto',350,0,'Hair'),(38,'Styling','Ironing Curls',600,0,'Hair'),(39,'Styling','Tongs & Roller Set',600,0,'Hair'),(40,'Up-Styling','Simple Bun',300,0,'Hair'),(41,'Up-Styling','Messy Bun',700,0,'Hair'),(42,'Up-Styling','Informal',850,0,'Hair'),(43,'Wash and Blow Dry','Wash & Plain Dry',200,0,'Hair'),(44,'Wash and Blow Dry','Wash & Blow Dry',350,0,'Hair'),(45,'Wash and Blow Dry','Blow Dry Inwords',350,0,'Hair'),(46,'Wash and Blow Dry','Blow Dry Out Curls',350,0,'Hair'),(47,'Skin Threading','Eyebrows',30,0,'Skin'),(48,'Skin Threading','Upper Lip',20,0,'Skin'),(49,'Skin Threading','Lower Lip',20,0,'Skin'),(50,'Skin Threading','Chin',20,0,'Skin'),(51,'Skin Threading','Sidelock',50,0,'Skin'),(52,'Skin Threading','Forhead',20,0,'Skin'),(53,'Skin Threading','Neck',40,0,'Skin'),(54,'Skin Threading','Face',150,0,'Skin'),(55,'Bleaching','Upper Lips',50,0,'Skin'),(56,'Bleaching','Face and Neck',400,0,'Skin'),(57,'Bleaching','Face Neck & Blouse Line',500,0,'Skin'),(58,'Bleaching','Under Arms',200,0,'Skin'),(59,'Bleaching','Half Arms',190,0,'Skin'),(60,'Bleaching','Full Arms',380,0,'Skin'),(61,'Bleaching','Feet',150,0,'Skin'),(62,'Bleaching','Half Legs',300,0,'Skin'),(63,'Bleaching','Full Legs',600,0,'Skin'),(64,'Bleaching','Mindriff',350,0,'Skin'),(65,'Bleaching','Full Back Front',600,0,'Skin'),(66,'Bleaching','Full Body',2100,0,'Skin'),(67,'Detan','Face & Neck',250,0,'Skin'),(68,'Detan','Face Neck & Blouse Line',350,0,'Skin'),(69,'Detan','Under Arms',150,0,'Skin'),(70,'Detan','Half Arms',160,0,'Skin'),(71,'Detan','Full Arms',300,0,'Skin'),(72,'Detan','Feet',150,0,'Skin'),(73,'Detan','Half Leg',250,0,'Skin'),(74,'Detan','Full Legs',500,0,'Skin'),(75,'Detan','Mindriff',300,0,'Skin'),(76,'Detan','Full Back Front',550,0,'Skin'),(77,'Detan','Full Body',1500,0,'Skin'),(78,'Clean-Up','Regular',400,0,'Skin'),(79,'Clean-Up','Fruit',600,0,'Skin'),(80,'Clean-Up','Paragone',750,0,'Skin'),(81,'Facial','Baisc Facial',600,0,'Skin'),(82,'Facial','Fresh Fruit',800,0,'Skin'),(83,'Facial','Paragone',1500,0,'Skin'),(84,'Facial','O3',2000,0,'Skin'),(85,'Facial','Cherals',1500,0,'Skin'),(86,'Facial','Whitening Facial',1500,0,'Skin'),(87,'Facial','Moroccan Facial',2500,0,'Skin'),(88,'Aroma Facial','Diamond',1200,0,'Skin'),(89,'Aroma Facial','Silver',1200,0,'Skin'),(90,'Aroma Facial','Gold',1200,0,'Skin'),(91,'Waxing','Upper Lip',50,0,'Skin'),(92,'Waxing','Chin',50,0,'Skin'),(93,'Waxing','Sidelock',80,0,'Skin'),(94,'Waxing','Forhead',60,0,'Skin'),(95,'Waxing','Face',200,0,'Skin'),(96,'Waxing','Under Arms',50,0,'Skin'),(97,'Waxing','Half Leg',150,0,'Skin'),(98,'Waxing','Full Leg',450,0,'Skin'),(99,'Waxing','Midriff',300,0,'Skin'),(100,'Waxing','Full Back Front',400,0,'Skin'),(101,'Waxing','Full Arms,Legs & Underam',500,0,'Skin'),(102,'Waxing','Full Body',1500,0,'Skin'),(103,'Waxing','Bikni',1000,0,'Skin'),(104,'Peel of Waxing','Upper Lip',80,0,'Skin'),(105,'Peel of Waxing','Lower Lip',80,0,'Skin'),(106,'Peel of Waxing','Chin',50,0,'Skin'),(107,'Peel of Waxing','Sidelock',150,0,'Skin'),(108,'Peel of Waxing','Forhead',100,0,'Skin'),(109,'Peel of Waxing','Face',300,0,'Skin'),(110,'Peel of Waxing','Under Arms',150,0,'Skin'),(111,'Flavoured Waxing','Half Arms',250,0,'Skin'),(112,'Flavoured Waxing','Full Arms',500,0,'Skin'),(113,'Flavoured Waxing','Half Leg',450,0,'Skin'),(114,'Flavoured Waxing','Full Leg',900,0,'Skin'),(115,'Flavoured Waxing','Midriff',450,0,'Skin'),(116,'Flavoured Waxing','Full Back Front',650,0,'Skin'),(117,'Flavoured Waxing','Full Leg,Full Arms,Under Arms',1400,0,'Skin'),(118,'Flavoured Waxing','Full Body',2100,0,'Skin'),(119,'Flavoured Waxing','Brazilian Wax',1250,0,'Skin'),(120,'Manicure','Basic',300,20,'Hands and Feets'),(121,'Manicure','Aroma',450,30,'Hands and Feets'),(122,'Manicure','Lotus',600,45,'Hands and Feets'),(123,'Manicure','Heer Peel',1000,75,'Hands and Feets'),(124,'Pedicure','Basic',400,15,'Hands and Feets'),(125,'Pedicure','Aroma',550,30,'Hands and Feets'),(126,'Pedicure','Lotus',800,40,'Hands and Feets'),(127,'Pedicure','Heer Peel',1500,50,'Hands and Feets'),(128,'Male Services','Head Wash',50,0,'Male Services'),(129,'Male Services','Hair Cut with Head Wash',150,0,'Male Services'),(130,'Male Services','Clean Shave',100,0,'Male Services'),(131,'Male Services','Beard & Whitening Cream Massage',250,0,'Male Services'),(132,'Male Services','Beard Color',300,0,'Male Services'),(133,'Male Services','Beard Trim with Set',100,0,'Male Services'),(134,'Male Services','Head Massage',150,0,'Male Services'),(135,'Male Services','Head Massage with Neck',300,0,'Male Services'),(136,'Male Services','Shoulder & Steam Full Back and Front Hair Trim',200,0,'Male Services'),(137,'Hair Spa','Insta Care Spa',500,0,'Male Services'),(138,'Hair Spa','Meroccan Spa',1000,0,'Male Services'),(139,'Hair Spa','Vertin Spa',700,0,'Male Services'),(140,'Hair Color','Global Color with Amonia(Base Shade)',500,0,'Male Services'),(141,'Hair Color','Global Color without Amonia(Base Shade)',700,0,'Male Services'),(142,'Hair Color','Global Fashion Shade',800,0,'Male Services'),(143,'Hair Color','Highlights Full Streaking',1000,0,'Male Services');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `quant` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock`
--

LOCK TABLES `stock` WRITE;
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
INSERT INTO `stock` VALUES (4,'Dye','35','Sale'),(7,'Hair Oil','15','Use'),(9,'New','20','Use'),(10,'New','10','Sale');
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock_record`
--

DROP TABLE IF EXISTS `stock_record`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(100) DEFAULT NULL,
  `pname` varchar(100) DEFAULT NULL,
  `quant` varchar(100) DEFAULT NULL,
  `edate` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock_record`
--

LOCK TABLES `stock_record` WRITE;
/*!40000 ALTER TABLE `stock_record` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock_record` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-12 20:35:52
