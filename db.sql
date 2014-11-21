-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: magandi
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Table structure for table `Product`
--

DROP TABLE IF EXISTS `Product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Product` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shop_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `short_description` varchar(100) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `active` char(1) DEFAULT NULL,
  `is_ban` char(1) DEFAULT NULL,
  `max_tag_count` int(11) DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `price` float unsigned DEFAULT NULL,
  `sale_price` float unsigned DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `last_rating_update` datetime DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Product`
--

LOCK TABLES `Product` WRITE;
/*!40000 ALTER TABLE `Product` DISABLE KEYS */;
INSERT INTO `Product` VALUES (1,1,'test product',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,1,'test product',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `Product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Shop`
--

DROP TABLE IF EXISTS `Shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Shop` (
  `shop_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `seller_id` int(10) unsigned NOT NULL,
  `name` varchar(90) NOT NULL DEFAULT 'No Name',
  `description` varchar(2000) DEFAULT NULL,
  `short_description` varchar(100) DEFAULT NULL,
  `addresses` varchar(500) DEFAULT NULL,
  `contacts` varchar(250) DEFAULT NULL,
  `with_delivery` char(1) NOT NULL DEFAULT 'N',
  `is_ban` char(1) NOT NULL DEFAULT 'N',
  `is_deleted` char(1) NOT NULL DEFAULT 'N',
  `active` char(1) NOT NULL DEFAULT 'Y',
  `max_tag_count` int(10) unsigned DEFAULT '3',
  `rating_shop` float DEFAULT NULL,
  `rating_product` float DEFAULT NULL,
  `yandex_map_coordinates` varchar(500) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `last_rating_update` datetime DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Shop`
--

LOCK TABLES `Shop` WRITE;
/*!40000 ALTER TABLE `Shop` DISABLE KEYS */;
INSERT INTO `Shop` VALUES (1,1,'No Name',NULL,NULL,NULL,NULL,'N','N','N','Y',7,NULL,NULL,NULL,NULL,'2014-11-21 15:18:00',NULL,'2014-11-21 12:00:17'),(2,1,'Name 2',NULL,NULL,NULL,NULL,'Y','N','N','Y',8,NULL,NULL,NULL,'2014-11-21 15:18:00','2014-11-21 15:31:57',NULL,NULL);
/*!40000 ALTER TABLE `Shop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `vk_id` varchar(45) DEFAULT NULL,
  `facebook_id` varchar(45) DEFAULT NULL,
  `is_ban` char(1) DEFAULT 'N',
  `is_subscription` char(1) DEFAULT 'N',
  `money` float DEFAULT '0',
  `created_time` datetime DEFAULT NULL,
  `last_update` datetime DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES (1,'Test','Test','test@test.com',NULL,NULL,NULL,NULL,NULL,'2014-11-21 12:23:10',NULL,NULL,NULL),(2,'Test','Test','test@test.com',NULL,NULL,NULL,NULL,NULL,'2014-11-21 12:52:35',NULL,NULL,NULL),(3,'Test','Test','test@test.com',NULL,NULL,NULL,'Y',NULL,'2014-11-21 13:12:19',NULL,NULL,NULL),(4,'also','Also',NULL,NULL,NULL,NULL,NULL,NULL,'2014-11-21 13:43:39',NULL,NULL,NULL);
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-21 17:00:42
