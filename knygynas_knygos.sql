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
-- Table structure for table `knygos`
--

DROP TABLE IF EXISTS `knygos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `knygos` (
  `knygos_id` int(10) NOT NULL AUTO_INCREMENT,
  `pavadinimas` varchar(1000) NOT NULL,
  `leidimo_metai` year(4) NOT NULL,
  `zanras` varchar(30) NOT NULL,
  PRIMARY KEY (`knygos_id`),
  UNIQUE KEY `knygos_id` (`knygos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `knygos`
--

LOCK TABLES `knygos` WRITE;
/*!40000 ALTER TABLE `knygos` DISABLE KEYS */;
INSERT INTO `knygos` VALUES (1,'Širdies ligos',2012,'Sveikata'),(2,'Trumpa, bet nuostabi istorija',2015,'Pasaulio pažinimas'),(3,'Kaip atsirado mašinos',1999,'Pasaulio pažinimas'),(4,'Facebook efektas',1999,'Verslas, ekonomika'),(5,'Baltai ir jų šiaurės kaimynai',2011,'Istorija'),(6,'Niokojama Lietuva',2010,'Istorija'),(7,'Gintarinės ledi išpažintis',2006,'Istorija'),(8,'Lietuvos seimas',2009,'Dokumentinė literatūra'),(9,'Laisvės skausmas',2003,'Istorija'),(10,'Žydų kultūra. Istorija ir dabartis',2007,'Istorija'),(11,'Buvome, esame ir būsime',2012,'Istorija'),(12,'Ilgoji uodega',2009,'Verslas'),(13,'Kaip tapti turtingu',2015,'Verslas'),(14,'Pasaulis yra plokščias',2002,'Ekonomika'),(15,'Pardavimo valdymas',2001,'Verslas'),(16,'Projektų lyderis',2000,'Verslas'),(17,'Tonis Soprano apie vadybą',2007,'Verslas'),(18,'Paprastesnis darbo planavimas',2005,'Verslas'),(19,'Įvadas į komunikacijos studijas',2003,'Verslas'),(20,'Didysis projektas',2001,'Pasaulio pažinimas'),(21,'Pakeliui į Babadagą',2008,'Pasaulio pažinimas'),(22,'Baltieji sėkmės drambliai',2007,'Pasaulio pažinimas'),(23,'Ar sunkus lietuvių kirčiavimas',2006,'Pasaulio pažinimas'),(24,'Molėtų rajonas',2002,'Pasaulio pažinimas'),(25,'Kauno senamiestis. Keliautojo žinynas',2001,'Pasaulio pažinimas'),(26,'Du miestai ir sala',2003,'Pasaulio pažinimas'),(27,'Išaukštinimo karas. Pirma knyga (SF 59)',2000,'Fantastika'),(28,'Jūrų valdovo vaikai (F 96)',2009,'Fantastika'),(29,'Deimo efektas',2002,'Fantastika'),(30,'Kregždės bokštas',2001,'Fantastika'),(31,'Nosferatu (SF 114)',2001,'Fantastika'),(32,'Kosmoso vampyrai (SF 140)',2009,'Fantastika'),(33,'Žengi į viduramžį',2013,'Sveikata'),(34,'Plaukų ligos',2003,'Sveikata'),(35,'Seksologijos enciklopedija',2008,'Sveikata'),(36,'Badavimo stebuklas',2001,'Sveikata'),(37,'Diabetologija',2008,'Sveikata'),(38,'Kodėl japonai nestorėja? Sveika gyvensena pagal Niši sistemą',2001,'Sveikata'),(39,'Baltas Paukštis virš Aukštaitijos ir Latgalos. Utena-Preili',2009,'Menas'),(40,'Sielų pjūtis. Pasaulis pasidalija',2008,'Fantastika'),(41,'Ponia Bovary I, II',2007,'Grožinė literatūra'),(42,'Kiekvieną dieną kaip maža mergaitė',2007,'Grožinė literatūra'),(43,'Slovakų novelės',2009,'Grožinė literatūra'),(44,'Saulėtekis',2002,'Grožinė literatūra'),(45,'Ak, tos bulvės',2009,'Grožinė literatūra'),(46,'Atkeršyk. Penktasis aveniu',2002,'Grožinė literatūra'),(47,'Anapus tavęs ir manęs',2001,'Grožinė literatūra'),(48,'Pakalnučių žydėjimas',2006,'Grožinė literatūra'),(49,'Budinti šviesa',2002,'Grožinė literatūra'),(50,'Creative Genius',2009,'Knygos anglų kalba'),(51,'Oxford Learners Pocket Verbs and Tenses',2001,'Knygos anglų kalba'),(52,'Modern Sculpture',2009,'Architektūra'),(53,'Learning from the Heart',2006,'Knygos anglų kalba');
/*!40000 ALTER TABLE `knygos` ENABLE KEYS */;
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
