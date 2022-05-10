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
-- Table structure for table `local`
--

DROP TABLE IF EXISTS `local`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `local` (
  `local_id` int NOT NULL AUTO_INCREMENT,
  `empresa_id` int NOT NULL,
  `horario_id` int NOT NULL,
  `nombre_local` varchar(150) NOT NULL,
  `barrio_id` int NOT NULL,
  `numero_canchas` int DEFAULT NULL,
  `contacto` varchar(150) DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `administrador` varchar(150) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `estado_id` int NOT NULL,
  `cordenadas_lat` varchar(45) DEFAULT NULL,
  `cordenadas_lon` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`local_id`),
  KEY `empresa_id` (`empresa_id`),
  KEY `horario_id` (`horario_id`),
  KEY `estado_id` (`estado_id`),
  KEY `barrio_id` (`barrio_id`),
  CONSTRAINT `local_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`empresa_id`),
  CONSTRAINT `local_ibfk_2` FOREIGN KEY (`horario_id`) REFERENCES `horario` (`horario_id`),
  CONSTRAINT `local_ibfk_3` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`estado_id`),
  CONSTRAINT `local_ibfk_4` FOREIGN KEY (`barrio_id`) REFERENCES `barrio` (`barrio_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `local`
--

LOCK TABLES `local` WRITE;
/*!40000 ALTER TABLE `local` DISABLE KEYS */;
INSERT INTO `local` VALUES (1,3,1,'Capellanías',52,2,'7896545','','Juan Capari','Calle 9 #35 - 17',1,'4.613847936197985','-74.10058352852425'),(2,3,2,'Futboleros',6,1,'9876542','HenryRizoto@bsw.com','Henry Rizoto','Calle 2B 40 26 ',1,'4.610044792951868','-74.11257867094949'),(3,2,3,'Cancheritos',52,4,'7615893','jorgeortiz@bsw.com','Jorge Ortiz','Av Americas #44 - 68',1,'4.627471793957056','-74.10174596735456'),(4,2,4,'Cancheritos puente aranda',54,2,'3112795566','Yurani.Sanchez@uninpahu.edu.co','Yurani Sánchez','Carrera 62 17 44',1,'4.635638575283338','-74.11060765388069'),(5,2,5,'Cancheritos don Julio',6,2,'9665863','Julio.Vermouth@outlook.com','Julio Vermouth','Carrera 40 2B 98',1,'4.610193801637706','-74.11226494353232'),(6,2,6,'Cesar Arriaga',19,1,'5782565','','Cesar Arriaga','Calle 33 SUR 51D 28',1,'4.602873329749272','-74.12712713886485');
/*!40000 ALTER TABLE `local` ENABLE KEYS */;
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
