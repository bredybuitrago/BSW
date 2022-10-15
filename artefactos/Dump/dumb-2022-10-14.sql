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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cancha`
--

LOCK TABLES `cancha` WRITE;
/*!40000 ALTER TABLE `cancha` DISABLE KEYS */;
INSERT INTO `cancha` VALUES (2,1,1,70000.00,1,'Primera entrando a mano izquierda','Cancha frontal'),(5,2,2,180000.00,1,'Cancha de futbol 8 con apuntador de marcador digital','Grande'),(6,1,3,78000.00,1,'fjtdfytdfjytfj','Primera'),(7,2,3,160000.00,1,'','fondo'),(8,1,4,75000.00,1,'Guardar observación','Cancha 1'),(9,2,5,135000.00,1,'Chancha grande de futbol 8','1 cancha'),(10,2,6,18000.00,1,'','Primera'),(11,2,6,85000.00,1,'Tablero digital disponible','Segunda'),(12,1,6,90000.00,1,'Servicio de arbitraje','Fondo'),(13,2,5,95000.00,1,'','Primera'),(14,2,6,95000.00,1,'','Segundo'),(15,2,3,100000.00,1,'','Central'),(16,2,4,145000.00,1,'Cancha 5 estrellas','Clara'),(17,1,5,68000.00,1,'Lo mejor del sector','Don Julio'),(18,3,7,220000.00,1,'','Primera'),(19,2,7,120000.00,1,'','Cancha central'),(20,1,8,90000.00,1,'','Principal'),(21,2,9,120000.00,1,'Bienvenidos','Cancha lideres');
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (1,'Predeterminado','','','','',''),(2,'Cancheritos','123654789','Cancheritos@gmail.com','7896541','Carlso Agudelo','31125698745'),(3,'CoditoDelSur','12345678963','coditodelsur@gmail.com','7615893','Carlos Hernandez','3112798536'),(4,'Uninpahu','16498416849','uninpahu@uninpahu.edu.co','7685256','Jorge menudo','3154785236');
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
-- Table structure for table `fotos_local`
--

DROP TABLE IF EXISTS `fotos_local`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fotos_local` (
  `fotos_local_id` int NOT NULL AUTO_INCREMENT,
  `local_id` int NOT NULL,
  `ruta` varchar(250) DEFAULT NULL,
  `estado_id` int NOT NULL,
  PRIMARY KEY (`fotos_local_id`),
  KEY `estado_id` (`estado_id`),
  KEY `local_id` (`local_id`),
  CONSTRAINT `fotos_local_ibfk_1` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`estado_id`),
  CONSTRAINT `fotos_local_ibfk_2` FOREIGN KEY (`local_id`) REFERENCES `local` (`local_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fotos_local`
--

LOCK TABLES `fotos_local` WRITE;
/*!40000 ALTER TABLE `fotos_local` DISABLE KEYS */;
INSERT INTO `fotos_local` VALUES (1,6,'uploads/6/1662602684_Captura.jpg',2),(2,6,'uploads/6/1662602684_ciudadela.jpg',2),(3,6,'uploads/6/1662602684_firmastefania.jpg',2),(4,6,'uploads/6/1662602684_Habitación2.jpg',2),(5,6,'uploads/6/1662602684_Habitación.jpg',2),(6,6,'uploads/6/1662602684_Peticioncomparendosmoto.jpg',2),(7,6,'uploads/6/1662602684_YuraniSánchez.jpg',2),(8,6,'uploads/6/1662603660_Captura.jpg',2),(9,6,'uploads/6/1662603661_ciudadela.jpg',2),(10,6,'uploads/6/1662603825_Habitación.jpg',2),(11,6,'uploads/6/1662603825_Peticioncomparendosmoto.jpg',2),(12,6,'uploads/6/1662604119_YuraniSánchez.jpg',2),(13,6,'uploads/6/1662678982_firmastefania.jpg',2),(14,6,'uploads/6/1662678982_Habitación2.jpg',2),(20,3,'uploads/3/1662682900_firmastefania.jpg',1),(21,4,'uploads/4/1662682913_firmastefania.jpg',1),(22,3,'uploads/3/1662682930_Peticioncomparendosmoto.jpg',1),(23,5,'uploads/5/1662682964_Habitación.jpg',1),(24,6,'uploads/6/1662769221_1662601491_Captura.jpg',1),(25,6,'uploads/6/1662769221_1662601491_ciudadela.jpg',1),(26,6,'uploads/6/1662769221_1662601491_firmastefania.jpg',1),(27,7,'uploads/7/1662769605_1662769221_1662601491_firmastefania.jpg',1),(28,7,'uploads/7/1662769620_1662769221_1662601491_Captura.jpg',1),(29,7,'uploads/7/1662769620_1662769221_1662601491_ciudadela.jpg',1),(30,8,'uploads/8/1662770066_1662601491_Habitación.jpg',1),(31,8,'uploads/8/1662770066_1662601491_Habitación2.jpg',1),(32,8,'uploads/8/1662770066_1662601491_Peticioncomparendosmoto.jpg',1),(33,9,'uploads/9/1663373558_1662770066_1662601491_Peticioncomparendosmoto.jpg',1);
/*!40000 ALTER TABLE `fotos_local` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horario`
--

LOCK TABLES `horario` WRITE;
/*!40000 ALTER TABLE `horario` DISABLE KEYS */;
INSERT INTO `horario` VALUES (1,'|miercoles|jueves|viernes|sabado|domingo|','8:00am','11:00pm'),(2,'|viernes|sabado|domingo|','7:00pm','11:00pm'),(3,'|lunes|martes|miercoles|jueves|viernes|sabado|domingo|','7:00am','12:00am'),(4,'|lunes|martes|miercoles|jueves|viernes|sabado|domingo|','10:00am','11:00pm'),(5,'|lunes|jueves|viernes|sabado|domingo|','1:00pm','2:00am'),(6,'|lunes|sabado|domingo|','2:00pm','11:00pm'),(7,'|martes|jueves|viernes|sabado|domingo|','10:00am','11:00pm'),(8,'|lunes|miercoles|viernes|sabado|domingo|','7:00am','1:00am'),(9,'|lunes|miercoles|viernes|','8:00am','11:00pm');
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
  `descripcion` varchar(550) DEFAULT NULL,
  PRIMARY KEY (`local_id`),
  KEY `empresa_id` (`empresa_id`),
  KEY `horario_id` (`horario_id`),
  KEY `estado_id` (`estado_id`),
  KEY `barrio_id` (`barrio_id`),
  CONSTRAINT `local_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`empresa_id`),
  CONSTRAINT `local_ibfk_2` FOREIGN KEY (`horario_id`) REFERENCES `horario` (`horario_id`),
  CONSTRAINT `local_ibfk_3` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`estado_id`),
  CONSTRAINT `local_ibfk_4` FOREIGN KEY (`barrio_id`) REFERENCES `barrio` (`barrio_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `local`
--

LOCK TABLES `local` WRITE;
/*!40000 ALTER TABLE `local` DISABLE KEYS */;
INSERT INTO `local` VALUES (1,3,1,'Capellanías',52,2,'7896545','','Juan Capari','Calle 9 #35 - 17',1,'4.613847936197985','-74.10058352852425','Disfrute del mejor espacio para practica de futbol, cancha amplia con excelente ubicación y atencion al publico, contamos con baños con ducha, zona de vestier, lockers para guardar sus pertenencias, parqueadero para carro y moto, zona de alimentacion, un espacio adecuado para venir con toda la familia.'),(2,3,2,'Futboleros',6,1,'9876542','HenryRizoto@bsw.com','Henry Rizoto','Calle 2B 40 26 ',1,'4.610044792951868','-74.11257867094949',NULL),(3,2,3,'Cancheritos',52,4,'7615893','jorgeortiz@bsw.com','Jorge Ortiz','Av Americas #44 - 68',1,'4.627471793957056','-74.10174596735456','Te brindamos las mejores canchas del sector, amplia iluminacion, canchas de ultima generacion para que disfrutes de un partido de Futbol 5 y 8, zona de parqueo, organizamos torneos, zona infantil, solo reserva para tener el gusto de atenderte.'),(4,2,4,'Cancheritos puente aranda',54,2,'3112795566','Yurani.Sanchez@uninpahu.edu.co','Yurani Sánchez','Carrera 62 17 44',1,'4.635638575283338','-74.11060765388069','Bienvenidos al mejor establecimiento para practica de futbol, contamos con amplios espacios donde podran estar comodamente, parqueadero para carro y moto, camerinos donde podran cambiarse y dejar sus pertenencias mientras juegan, ambiente familiar, organizacion de torneos empresariales, servicio de juez.'),(5,2,5,'Cancheritos don Julio',6,2,'9665863','Julio.Vermouth@outlook.com','Julio Vermouth','Carrera 40 2B 98',1,'4.610193801637706','-74.11226494353232','Don Julio abre las puertas a todo el publico que quiera disfrutar de un ambiente deportivo, contamos con servicio de parqueadero, zonas verdes, baños con ducha, zona de alimentacion, ingreso de mascotas, amplias zonas familiares donde podran disfrutar del futbol sin limites, organizacion de torneos.'),(6,2,6,'Cesar Arriaga',19,1,'5782565','','Cesar Arriaga','Calle 33 SUR 51D 28',1,'4.602873329749272','-74.12712713886485','Para los aficionados del futbol  5 y 8, les tenemos la mejor variedad de canchas, acceso a todo tipo de publico, zona de hidratacion, camerinos con ducha, parqueadero gratis, disfrute de un excelente espacio deportivo en familia, con compañeros de trabajo, organizacion de torneos, servicio de juez.'),(7,4,7,'Uninpahu',9,1,'7652536','juantalamera@uninpahu.edu.co','JUAN TALAMERA','cALLE 9 33 28',1,'4.613303908758269','-74.09999371011993','Contamos con excelentes espacios deportivos para que pueda practicar futbol de la mejor forma, canchas cubiertas para todo tipo de clima, ambiente familiar, zona de parqueo, camerinos modernos, contamos con excelente ubicación y precios de locura.'),(8,4,8,'Uninpahu sede 2',44,1,'7559866','johanl@uninpahu.edu.co','Johan Bermudez','Calle 19C 31 75',1,'4.621484896253392','-74.08793762212005','Ofrecemos los mejores precios para que vengas y disfrutes de un buen partido de futbol, abrimos de domingo a domingo de 10am a 10pm, tambien contamos con un espacio esclusivo para que traigas a tus hijos y disfruten de nuestras instalaciones tambien, zona de parqueo.'),(9,2,9,'Lideres',4,1,'7555555','lideres@gmail.com','Jorge Suarez','Calle 3 10 25',1,'4.605394713999843','-74.1107068275291','Bienvenidos a líderes, la mejores canchas del sector, tenemos horarios extendidos, tableros de marcación, y posibilidad de arbitraje');
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
  `franja_inicio` varchar(2) NOT NULL,
  `hora_fin` varchar(10) NOT NULL,
  `franja_fin` varchar(2) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

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

-- Dump completed on 2022-10-14 19:36:02
