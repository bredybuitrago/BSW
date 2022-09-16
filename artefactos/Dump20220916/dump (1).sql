CREATE DATABASE  IF NOT EXISTS `bsw` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bsw`;
-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: bsw
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Dumping data for table `barrio`
--

LOCK TABLES `barrio` WRITE;
/*!40000 ALTER TABLE `barrio` DISABLE KEYS */;
INSERT INTO `barrio` VALUES (1,'La Guaca'),(2,'Bochica'),(3,'Carabelas'),(4,'Ciudad Montes'),(5,'El Sol'),(6,'Jazmín'),(7,'Jorge Gaitán Cortés'),(8,'Villa Inés'),(9,'La Asunción'),(10,'La Camelia'),(11,'Los Comuneros'),(12,'Ponderosa'),(13,'Primavera'),(14,'Remanso'),(15,'San Eusebio'),(16,'Santa Matilde'),(17,'Tibaná'),(18,'Torremolinos'),(19,'Alcalá'),(20,'Alquería'),(21,'Autopista Sur'),(22,'La Coruña'),(23,'Los Sauces'),(24,'Muzú'),(25,'Ospina Pérez'),(26,'Santa Rita'),(27,'Tejar'),(28,'Villa del Rosario'),(29,'Villa Sonia'),(30,'Barcelona'),(31,'Bisas del Galán'),(32,'Camelia Sur'),(33,'Colón'),(34,'Galán'),(35,'La Pradera'),(36,'La Trinidad'),(37,'El Arpay La Lira'),(38,'Milenta'),(39,'San Francísco'),(40,'San Gabriel'),(41,'San Rafael'),(42,'San Rafael Industrial'),(43,'Salazar Gomez '),(44,'Cundinamarca'),(45,'El Ejido'),(46,'Gorgonzola'),(47,'Industrial Centenario'),(48,'La Florida Occidental'),(49,'Los Ejidos'),(50,'Pensilvania'),(51,'Batallón Caldas'),(52,'Centro Industrial'),(53,'Ortezal'),(54,'Puente Aranda');
/*!40000 ALTER TABLE `barrio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `cancha`
--

LOCK TABLES `cancha` WRITE;
/*!40000 ALTER TABLE `cancha` DISABLE KEYS */;
INSERT INTO `cancha` VALUES (2,1,1,70000.00,1,'Primera entrando a mano izquierda','Cancha frontal'),(5,2,2,180000.00,1,'Cancha de futbol 8 con apuntador de marcador digital','Grande'),(6,1,3,78000.00,1,'fjtdfytdfjytfj','Primera'),(7,2,3,160000.00,1,'','fondo'),(8,1,4,75000.00,1,'Guardar observación','Cancha 1'),(9,2,5,135000.00,1,'Chancha grande de futbol 8','1 cancha'),(10,2,6,18000.00,1,'','Primera'),(11,2,6,85000.00,1,'Tablero digital disponible','Segunda'),(12,1,6,90000.00,1,'Servicio de arbitraje','Fondo'),(13,2,5,95000.00,1,'','Primera'),(14,2,6,95000.00,1,'','Segundo'),(15,2,3,100000.00,1,'','Central'),(16,2,4,145000.00,1,'Cancha 5 estrellas','Clara'),(17,1,5,68000.00,1,'Lo mejor del sector','Don Julio'),(18,3,7,220000.00,1,'','Primera'),(19,2,7,120000.00,1,'','Cancha central'),(20,1,8,90000.00,1,'','Principal');
/*!40000 ALTER TABLE `cancha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (1,'Predeterminado','','','','',''),(2,'Cancheritos','123654789','Cancheritos@gmail.com','7896541','Carlso Agudelo','31125698745'),(3,'CoditoDelSur','12345678963','coditodelsur@gmail.com','7615893','Carlos Hernandez','3112798536'),(4,'Uninpahu','16498416849','uninpahu@uninpahu.edu.co','7685256','Jorge menudo','3154785236');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` VALUES (1,'Activo'),(2,'Inactivo');
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `fotos_cancha`
--

LOCK TABLES `fotos_cancha` WRITE;
/*!40000 ALTER TABLE `fotos_cancha` DISABLE KEYS */;
/*!40000 ALTER TABLE `fotos_cancha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `fotos_local`
--

LOCK TABLES `fotos_local` WRITE;
/*!40000 ALTER TABLE `fotos_local` DISABLE KEYS */;
INSERT INTO `fotos_local` VALUES (1,6,'uploads/6/1662602684_Captura.jpg',2),(2,6,'uploads/6/1662602684_ciudadela.jpg',2),(3,6,'uploads/6/1662602684_firmastefania.jpg',2),(4,6,'uploads/6/1662602684_Habitación2.jpg',2),(5,6,'uploads/6/1662602684_Habitación.jpg',2),(6,6,'uploads/6/1662602684_Peticioncomparendosmoto.jpg',2),(7,6,'uploads/6/1662602684_YuraniSánchez.jpg',2),(8,6,'uploads/6/1662603660_Captura.jpg',2),(9,6,'uploads/6/1662603661_ciudadela.jpg',2),(10,6,'uploads/6/1662603825_Habitación.jpg',2),(11,6,'uploads/6/1662603825_Peticioncomparendosmoto.jpg',2),(12,6,'uploads/6/1662604119_YuraniSánchez.jpg',2),(13,6,'uploads/6/1662678982_firmastefania.jpg',2),(14,6,'uploads/6/1662678982_Habitación2.jpg',2),(20,3,'uploads/3/1662682900_firmastefania.jpg',1),(21,4,'uploads/4/1662682913_firmastefania.jpg',1),(22,3,'uploads/3/1662682930_Peticioncomparendosmoto.jpg',1),(23,5,'uploads/5/1662682964_Habitación.jpg',1),(24,6,'uploads/6/1662769221_1662601491_Captura.jpg',1),(25,6,'uploads/6/1662769221_1662601491_ciudadela.jpg',1),(26,6,'uploads/6/1662769221_1662601491_firmastefania.jpg',1),(27,7,'uploads/7/1662769605_1662769221_1662601491_firmastefania.jpg',1),(28,7,'uploads/7/1662769620_1662769221_1662601491_Captura.jpg',1),(29,7,'uploads/7/1662769620_1662769221_1662601491_ciudadela.jpg',1),(30,8,'uploads/8/1662770066_1662601491_Habitación.jpg',1),(31,8,'uploads/8/1662770066_1662601491_Habitación2.jpg',1),(32,8,'uploads/8/1662770066_1662601491_Peticioncomparendosmoto.jpg',1);
/*!40000 ALTER TABLE `fotos_local` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `horario`
--

LOCK TABLES `horario` WRITE;
/*!40000 ALTER TABLE `horario` DISABLE KEYS */;
INSERT INTO `horario` VALUES (1,'|miercoles|jueves|viernes|sabado|domingo|','8:00am','11:00pm'),(2,'|viernes|sabado|domingo|','7:00pm','11:00pm'),(3,'|lunes|martes|miercoles|jueves|viernes|sabado|domingo|','7:00am','12:00am'),(4,'|lunes|martes|miercoles|jueves|viernes|sabado|domingo|','10:00am','11:00pm'),(5,'|lunes|jueves|viernes|sabado|domingo|','1:00pm','2:00am'),(6,'|viernes|sabado|domingo|','2:00pm','11:00pm'),(7,'|martes|jueves|viernes|sabado|domingo|','10:00am','11:00pm'),(8,'|lunes|miercoles|viernes|sabado|domingo|','7:00am','1:00am');
/*!40000 ALTER TABLE `horario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `local`
--

LOCK TABLES `local` WRITE;
/*!40000 ALTER TABLE `local` DISABLE KEYS */;
INSERT INTO `local` VALUES (1,3,1,'Capellanías',52,2,'7896545','','Juan Capari','Calle 9 #35 - 17',1,'4.613847936197985','-74.10058352852425'),(2,3,2,'Futboleros',6,1,'9876542','HenryRizoto@bsw.com','Henry Rizoto','Calle 2B 40 26 ',1,'4.610044792951868','-74.11257867094949'),(3,2,3,'Cancheritos',52,4,'7615893','jorgeortiz@bsw.com','Jorge Ortiz','Av Americas #44 - 68',1,'4.627471793957056','-74.10174596735456'),(4,2,4,'Cancheritos puente aranda',54,2,'3112795566','Yurani.Sanchez@uninpahu.edu.co','Yurani Sánchez','Carrera 62 17 44',1,'4.635638575283338','-74.11060765388069'),(5,2,5,'Cancheritos don Julio',6,2,'9665863','Julio.Vermouth@outlook.com','Julio Vermouth','Carrera 40 2B 98',1,'4.610193801637706','-74.11226494353232'),(6,2,6,'Cesar Arriaga',19,1,'5782565','','Cesar Arriaga','Calle 33 SUR 51D 28',1,'4.602873329749272','-74.12712713886485'),(7,4,7,'Uninpahu',9,1,'7652536','juantalamera@uninpahu.edu.co','JUAN TALAMERA','cALLE 9 33 28',1,'4.613303908758269','-74.09999371011993'),(8,4,8,'Uninpahu sede 2',44,1,'7559866','johanl@uninpahu.edu.co','Johan Bermudez','Calle 19C 31 75',1,'4.621484896253392','-74.08793762212005');
/*!40000 ALTER TABLE `local` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `membresia`
--

LOCK TABLES `membresia` WRITE;
/*!40000 ALTER TABLE `membresia` DISABLE KEYS */;
/*!40000 ALTER TABLE `membresia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (1,'Usuario',1),(2,'Arrendatario',1);
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `permisos_perfil`
--

LOCK TABLES `permisos_perfil` WRITE;
/*!40000 ALTER TABLE `permisos_perfil` DISABLE KEYS */;
/*!40000 ALTER TABLE `permisos_perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `reserva`
--

LOCK TABLES `reserva` WRITE;
/*!40000 ALTER TABLE `reserva` DISABLE KEYS */;
/*!40000 ALTER TABLE `reserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tipo_cancha`
--

LOCK TABLES `tipo_cancha` WRITE;
/*!40000 ALTER TABLE `tipo_cancha` DISABLE KEYS */;
INSERT INTO `tipo_cancha` VALUES (1,'Futbol 5',1),(2,'Futbol 8',1),(3,'Futbol 11',1);
/*!40000 ALTER TABLE `tipo_cancha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,2,'12345678963','coditodelsur','CoditoDelSur','coditodelsur@gmail.com','7c222fb2927d828af22f592134e8932480637c0d',1,3),(2,2,'123654789','Cancheritos','Cancheritos','Cancheritos@gmail.com','7c222fb2927d828af22f592134e8932480637c0d',1,2),(15,1,'','BredyBuitrago','Bredi Camilo Buitrago Millan','bredybuitrago@gmail.com','7c222fb2927d828af22f592134e8932480637c0d',1,1),(16,2,'16498416849','uninpahu','Uninpahu','uninpahu@uninpahu.edu.co','7c222fb2927d828af22f592134e8932480637c0d',1,4);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'bsw'
--

--
-- Dumping routines for database 'bsw'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-16 14:19:19
