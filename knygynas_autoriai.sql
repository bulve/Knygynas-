-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: knygynas
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `autoriai`
--

DROP TABLE IF EXISTS `autoriai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autoriai` (
  `autoriaus_id` int(10) NOT NULL AUTO_INCREMENT,
  `vardas` varchar(30) NOT NULL,
  `pavarde` varchar(30) NOT NULL,
  `gimimo_metai` date NOT NULL,
  `mirties_metai` date DEFAULT NULL,
  PRIMARY KEY (`autoriaus_id`),
  UNIQUE KEY `autoriaus_id` (`autoriaus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autoriai`
--

LOCK TABLES `autoriai` WRITE;
/*!40000 ALTER TABLE `autoriai` DISABLE KEYS */;
INSERT INTO `autoriai` VALUES (1,'Algridas','Šova','1985-08-15',NULL),(2,'Kazimiera','Prunskiene','1981-07-15',NULL),(3,'Leonas','Ašmantas','1975-08-15',NULL),(4,'Antanas','Adrijauskas','1991-08-15',NULL),(5,'Vilija','Gudaityte','1985-08-15',NULL),(6,'Chris','Anderson','1985-08-15',NULL),(7,'Donald','J.Trump','1982-08-15','2010-06-30'),(9,'Thomas','L.Friedman','1985-08-15',NULL),(10,'Vytautas','Sūdžius','1985-08-15',NULL),(11,'W.','Briner','1985-08-15',NULL),(12,'Anthony','Schneider','1985-08-15','2010-06-30'),(13,'Fergus','O Connell','1985-08-15',NULL),(14,'John','Friske','1985-08-15',NULL),(15,'Stephen','Hawking','1965-08-15',NULL),(16,'Andrzej','Stasiuk','1989-08-15',NULL),(17,'Valerianas','Skvorcovas','1985-08-15',NULL),(18,'Vytautas','Vitkauskas','1985-08-15','2000-06-30'),(19,'Algirdas','Meilus','1985-08-15',NULL),(20,'Vytenis','Alomanaitis','1985-08-15',NULL),(21,'Jurga','Vilpišauskiene','1983-08-15',NULL),(22,'David','Brin','1985-08-15',NULL),(23,'Paul','Anderson','1985-08-15',NULL),(24,'Kazys','Paulauskas','1975-08-15',NULL),(25,'Andrzej','Sapkowski','1982-08-15',NULL),(26,'Carl','Sargent','1985-08-15','2010-06-30'),(27,'Marc','Gascoigne','1985-01-15',NULL),(28,'Cilin','Wilson','1984-06-15',NULL),(29,'Diane','Bennet','1981-08-15',NULL),(30,'Petras','Gailevicius','1985-08-15',NULL),(31,'Vytautas','Klimas','1991-08-15',NULL),(32,'Polis','Gregas','1985-08-15','2011-06-30'),(33,'Antanas','Norkus','1985-08-15',NULL),(34,'Maja','Gogulan','1972-08-15',NULL),(35,'Adolfas','Sinkevicius','1985-08-15',NULL),(36,'Tim','Lahaye','1955-08-15','2009-06-30'),(37,'Alber','Nigstein','1976-08-15',NULL),(38,'Albus','Dumbuldor','1980-08-15',NULL),(39,'Sirijus','Snape','1985-08-15',NULL),(40,'Andriu','Galvont','1985-08-15',NULL),(41,'Methiu','White','1973-08-15',NULL),(42,'Robin','Hood','1987-08-15',NULL),(43,'David','Pinkmen','1987-08-15',NULL),(44,'Artur','','1985-08-15',NULL),(45,'Josesvili','','1985-02-15',NULL),(46,'Algimantas','Cekuolis','1985-08-15','2005-06-30'),(47,'Alba','Mintu','1982-08-15','2016-06-30'),(48,'Nicka','Petru','1981-01-15',NULL),(49,'Julija','Petrosian','1985-08-15',NULL),(50,'Antanas','Guoga','1986-08-15','2009-12-30'),(51,'Mantas','Ilginskis','1966-12-16','2015-03-01');
/*!40000 ALTER TABLE `autoriai` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-12  4:42:54
