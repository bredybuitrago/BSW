CREATE DATABASE  IF NOT EXISTS `bsw` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bsw`;
-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: bsw
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `barrio`
--

DROP TABLE IF EXISTS `barrio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `barrio` (
  `barrio_id` int NOT NULL AUTO_INCREMENT,
  `barrio` varchar(250) NOT NULL,
  PRIMARY KEY (`barrio_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barrio`
--

LOCK TABLES `barrio` WRITE;
/*!40000 ALTER TABLE `barrio` DISABLE KEYS */;
INSERT INTO `barrio` VALUES (1,'La Guaca'),(2,'Bochica'),(3,'Carabelas'),(4,'Ciudad Montes'),(5,'El Sol'),(6,'Jazmín'),(7,'Jorge Gaitán Cortés'),(8,'Villa Inés'),(9,'La Asunción'),(10,'La Camelia'),(11,'Los Comuneros'),(12,'Ponderosa'),(13,'Primavera'),(14,'Remanso'),(15,'San Eusebio'),(16,'Santa Matilde'),(17,'Tibaná'),(18,'Torremolinos'),(19,'Alcalá'),(20,'Alquería'),(21,'Autopista Sur'),(22,'La Coruña'),(23,'Los Sauces'),(24,'Muzú'),(25,'Ospina Pérez'),(26,'Santa Rita'),(27,'Tejar'),(28,'Villa del Rosario'),(29,'Villa Sonia'),(30,'Barcelona'),(31,'Bisas del Galán'),(32,'Camelia Sur'),(33,'Colón'),(34,'Galán'),(35,'La Pradera'),(36,'La Trinidad'),(37,'El Arpay La Lira'),(38,'Milenta'),(39,'San Francísco'),(40,'San Gabriel'),(41,'San Rafael'),(42,'San Rafael Industrial'),(43,'Salazar Gomez '),(44,'Cundinamarca'),(45,'El Ejido'),(46,'Gorgonzola'),(47,'Industrial Centenario'),(48,'La Florida Occidental'),(49,'Los Ejidos'),(50,'Pensilvania'),(51,'Batallón Caldas'),(52,'Centro Industrial'),(53,'Ortezal'),(54,'Puente Aranda');
/*!40000 ALTER TABLE `barrio` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-08 21:35:39
