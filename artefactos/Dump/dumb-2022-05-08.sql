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

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresa` (
  `empresa_id` int NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(150) NOT NULL,
  `nit` varchar(50) DEFAULT NULL,
  `correo_empresa` varchar(150) DEFAULT NULL,
  `contacto_empresa` varchar(150) DEFAULT NULL,
  `nombre_representante` varchar(150) DEFAULT NULL,
  `contacto_representante` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`empresa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (1,'Predeterminado','','','','',''),(2,'Cancheritos','123654789','Cancheritos@gmail.com','7896541','Carlso Agudelo','31125698745'),(3,'CoditoDelSur','12345678963','coditodelsur@gmail.com','7615893','Carlos Hernandez','3112798536');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estado` (
  `estado_id` int NOT NULL AUTO_INCREMENT,
  `estado` varchar(30) NOT NULL,
  PRIMARY KEY (`estado_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` VALUES (1,'Activo'),(2,'Inactivo');
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fotos_cancha`
--

DROP TABLE IF EXISTS `fotos_cancha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fotos_cancha` (
  `fotos_cancha_id` int NOT NULL AUTO_INCREMENT,
  `cancha_id` int NOT NULL,
  `ruta` varchar(250) DEFAULT NULL,
  `estado_id` int NOT NULL,
  PRIMARY KEY (`fotos_cancha_id`),
  KEY `estado_id` (`estado_id`),
  KEY `cancha_id` (`cancha_id`),
  CONSTRAINT `fotos_cancha_ibfk_1` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`estado_id`),
  CONSTRAINT `fotos_cancha_ibfk_2` FOREIGN KEY (`cancha_id`) REFERENCES `cancha` (`cancha_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fotos_cancha`
--

LOCK TABLES `fotos_cancha` WRITE;
/*!40000 ALTER TABLE `fotos_cancha` DISABLE KEYS */;
/*!40000 ALTER TABLE `fotos_cancha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horario`
--

DROP TABLE IF EXISTS `horario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `horario` (
  `horario_id` int NOT NULL AUTO_INCREMENT,
  `dias` varchar(150) NOT NULL,
  `hora_inicio` varchar(10) DEFAULT NULL,
  `hora_fin` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`horario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horario`
--

LOCK TABLES `horario` WRITE;
/*!40000 ALTER TABLE `horario` DISABLE KEYS */;
INSERT INTO `horario` VALUES (1,'|miercoles|jueves|viernes|sabado|domingo|','8:00am','11:00pm'),(2,'|viernes|sabado|domingo|','7:00pm','11:00pm'),(3,'|lunes|martes|miercoles|jueves|viernes|sabado|domingo|','7:00am','12:00am'),(4,'|lunes|martes|miercoles|jueves|viernes|sabado|domingo|','10:00am','11:00pm'),(5,'|lunes|jueves|viernes|sabado|domingo|','1:00pm','2:00am'),(6,'|viernes|sabado|domingo|','2:00pm','11:00pm');
/*!40000 ALTER TABLE `horario` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `membresia`
--

DROP TABLE IF EXISTS `membresia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `membresia` (
  `membresia_id` int NOT NULL AUTO_INCREMENT,
  `usuario_id` int NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `cancelada` int DEFAULT NULL,
  PRIMARY KEY (`membresia_id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `membresia_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membresia`
--

LOCK TABLES `membresia` WRITE;
/*!40000 ALTER TABLE `membresia` DISABLE KEYS */;
/*!40000 ALTER TABLE `membresia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu` (
  `menu_id` int NOT NULL AUTO_INCREMENT,
  `menu` varchar(250) DEFAULT NULL,
  `icono` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perfil` (
  `perfil_id` int NOT NULL AUTO_INCREMENT,
  `perfil` varchar(30) NOT NULL,
  `estado_id` int NOT NULL,
  PRIMARY KEY (`perfil_id`),
  KEY `estado_id` (`estado_id`),
  CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`estado_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (1,'Usuario',1),(2,'Arrendatario',1);
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permisos_perfil`
--

DROP TABLE IF EXISTS `permisos_perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permisos_perfil` (
  `permisos_perfil_id` int NOT NULL AUTO_INCREMENT,
  `menu_id` int NOT NULL,
  `perfil_id` int NOT NULL,
  `estado_id` int NOT NULL,
  PRIMARY KEY (`permisos_perfil_id`),
  KEY `menu_id` (`menu_id`),
  KEY `perfil_id` (`perfil_id`),
  KEY `estado_id` (`estado_id`),
  CONSTRAINT `permisos_perfil_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`),
  CONSTRAINT `permisos_perfil_ibfk_2` FOREIGN KEY (`perfil_id`) REFERENCES `perfil` (`perfil_id`),
  CONSTRAINT `permisos_perfil_ibfk_3` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`estado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permisos_perfil`
--

LOCK TABLES `permisos_perfil` WRITE;
/*!40000 ALTER TABLE `permisos_perfil` DISABLE KEYS */;
/*!40000 ALTER TABLE `permisos_perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reserva`
--

DROP TABLE IF EXISTS `reserva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reserva` (
  `reserva_id` int NOT NULL AUTO_INCREMENT,
  `cancha_id` int NOT NULL,
  `usuario_id` int NOT NULL,
  `fecha` date NOT NULL,
  `hora_inicio` varchar(10) NOT NULL,
  `hora_fin` varchar(10) NOT NULL,
  `cantidad_horas` int NOT NULL,
  PRIMARY KEY (`reserva_id`),
  KEY `cancha_id` (`cancha_id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`cancha_id`) REFERENCES `cancha` (`cancha_id`),
  CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reserva`
--

LOCK TABLES `reserva` WRITE;
/*!40000 ALTER TABLE `reserva` DISABLE KEYS */;
/*!40000 ALTER TABLE `reserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_cancha`
--

DROP TABLE IF EXISTS `tipo_cancha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_cancha` (
  `tipo_cancha_id` int NOT NULL AUTO_INCREMENT,
  `tipo_cancha` varchar(250) NOT NULL,
  `estado_id` int NOT NULL,
  PRIMARY KEY (`tipo_cancha_id`),
  KEY `estado_id` (`estado_id`),
  CONSTRAINT `tipo_cancha_ibfk_1` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`estado_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_cancha`
--

LOCK TABLES `tipo_cancha` WRITE;
/*!40000 ALTER TABLE `tipo_cancha` DISABLE KEYS */;
INSERT INTO `tipo_cancha` VALUES (1,'Futbol 5',1),(2,'Futbol 8',1),(3,'Futbol 11',1);
/*!40000 ALTER TABLE `tipo_cancha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `usuario_id` int NOT NULL AUTO_INCREMENT,
  `perfil_id` int NOT NULL,
  `identificacion` varchar(250) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `estado_id` int NOT NULL,
  `empresa_id` int NOT NULL,
  PRIMARY KEY (`usuario_id`),
  KEY `perfil_id` (`perfil_id`),
  KEY `estado_id` (`estado_id`),
  KEY `empresa_id` (`empresa_id`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfil` (`perfil_id`),
  CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`estado_id`),
  CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`empresa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,2,'12345678963','coditodelsur','CoditoDelSur','coditodelsur@gmail.com','7c222fb2927d828af22f592134e8932480637c0d',1,3),(2,2,'123654789','Cancheritos','Cancheritos','Cancheritos@gmail.com','7c222fb2927d828af22f592134e8932480637c0d',1,2),(15,1,'','BredyBuitrago','Bredi Camilo Buitrago Millan','bredybuitrago@gmail.com','7c222fb2927d828af22f592134e8932480637c0d',1,1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-08 21:37:19
