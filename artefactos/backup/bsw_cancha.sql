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
-- Table structure for table `cancha`
--

DROP TABLE IF EXISTS `cancha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cancha` (
  `cancha_id` int NOT NULL AUTO_INCREMENT,
  `tipo_cancha_id` int NOT NULL,
  `local_id` int DEFAULT NULL,
  `tarifa_por_hora` decimal(15,2) DEFAULT NULL,
  `estado_id` int NOT NULL,
  `observacion` varchar(255) DEFAULT NULL,
  `identificacion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cancha_id`),
  KEY `estado_id` (`estado_id`),
  KEY `tipo_cancha_id` (`tipo_cancha_id`),
  KEY `local_id` (`local_id`),
  CONSTRAINT `cancha_ibfk_1` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`estado_id`),
  CONSTRAINT `cancha_ibfk_2` FOREIGN KEY (`tipo_cancha_id`) REFERENCES `tipo_cancha` (`tipo_cancha_id`),
  CONSTRAINT `cancha_ibfk_3` FOREIGN KEY (`local_id`) REFERENCES `local` (`local_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cancha`
--

LOCK TABLES `cancha` WRITE;
/*!40000 ALTER TABLE `cancha` DISABLE KEYS */;
INSERT INTO `cancha` VALUES (2,1,1,70000.00,1,'Primera entrando a mano izquierda','Cancha frontal'),(5,2,2,180000.00,1,'Cancha de futbol 8 con apuntador de marcador digital','Grande'),(6,1,3,78000.00,1,'','Primera'),(7,2,3,160000.00,1,'','fondo'),(8,1,4,75000.00,1,'','Cancha 1'),(9,2,5,135000.00,1,'Chancha grande de futbol 8','1 cancha');
/*!40000 ALTER TABLE `cancha` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-08 21:35:38
