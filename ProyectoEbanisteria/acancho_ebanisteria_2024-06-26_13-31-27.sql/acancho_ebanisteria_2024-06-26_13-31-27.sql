-- MariaDB dump 10.19  Distrib 10.5.22-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: acancho_ebanisteria
-- ------------------------------------------------------
-- Server version	10.5.22-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `resenas`
--

DROP TABLE IF EXISTS `resenas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resenas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `puntuacion` decimal(3,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resenas`
--

LOCK TABLES `resenas` WRITE;
/*!40000 ALTER TABLE `resenas` DISABLE KEYS */;
INSERT INTO `resenas` VALUES (1,'María López','Excelente trabajo en la fabricación de mi armario a medida, muy profesional.',4.80),(2,'Juan Pérez','Muebles de alta calidad y atención personalizada, los recomiendo.',4.70),(3,'Ana García','Me encantó el diseño y la fabricación de mi mesa de comedor, quedó espectacular.',4.90),(4,'Pedro Martínez','Encargué varios muebles para mi casa y quedé muy satisfecho con el resultado.',4.50),(5,'Luisa Rodríguez','Gran variedad de productos y excelente atención al cliente.',4.60),(6,'Carlos Sánchez','Muebles personalizados de gran calidad, volveré a comprar.',4.80),(7,'Sofía Torres','Me ayudaron a elegir el mobiliario perfecto para mi oficina, estoy muy contenta.',4.70),(8,'Martín Gómez','Los muebles llegaron en perfecto estado y en el tiempo acordado.',4.40),(9,'Elena Ruiz','Gran atención al cliente y muebles de calidad excepcional.',4.90),(10,'Pablo Díaz','Me hicieron un mueble a medida para mi sala y quedó perfecto, excelente trabajo.',5.00),(13,'Adrian','Ok',5.00);
/*!40000 ALTER TABLE `resenas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabajos`
--

DROP TABLE IF EXISTS `trabajos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trabajos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `localizacion` varchar(150) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajos`
--

LOCK TABLES `trabajos` WRITE;
/*!40000 ALTER TABLE `trabajos` DISABLE KEYS */;
INSERT INTO `trabajos` VALUES (72,'Armario de Roble','Acero inoxidable','Armario','Londres','Armario de acero inoxidable para almacenamiento','armario2.jpeg'),(73,'Estantería Vintage','Madera de nogal','Estantería','París','Estantería de madera de nogal para libros','armario3.jpeg'),(74,'Armario Elegante','Aluminio','Armario','Tokio','Armario de aluminio para ropa','armario4.jpeg'),(75,'Cómoda Rústica','Madera de abeto','Cómoda','Nueva York','Cómoda de madera de abeto con estilo rústico','armario5.jpeg'),(76,'Armario Clásico','Madera de cerezo','Armario','Londres','Armario clásico de madera de cerezo','armario6.jpeg'),(77,'Archivador Moderno','Metal','Archivador','París','Archivador metálico moderno para documentos','armario7.jpeg'),(78,'Armario de Nogal','Madera de pino','Armario','Madrid','Armario de madera de pino','armario8.jpeg'),(79,'Armario de Roble','Madera de nogal','Armario','Barcelona','Armario de madera de nogal','armario9.jpeg'),(80,'Armario de Cerezo','Madera de cerezo','Armario','Sevilla','Armario de madera de cerezo','armario10.jpeg'),(81,'Armario Metálico','Metal','Armario','Valencia','Armario metálico para documentos','armario11.jpeg'),(82,'Armario de Abeto','Madera de abeto','Armario','Zaragoza','Armario de madera de abeto','armario12.jpeg'),(83,'Armario Industrial','Metal','Armario','Málaga','Armario metálico para papeles','armario13.jpeg'),(84,'Armario de Caoba','Madera de caoba','Armario','Murcia','Armario de madera de caoba','armario14.jpeg'),(85,'Armario Almacenamiento','Metal','Armario','Palma','Armario metálico para almacenamiento','armario15.jpeg'),(86,'Armario de Castaño','Madera de castaño','Armario','Las Palmas','Armario de madera de castaño','armario16.jpeg'),(87,'Armario Fresno','Madera de fresno','Armario','Bilbao','Armario de madera de fresno','armario17.jpeg'),(88,'Armario de Aliso','Madera de aliso','Armario','Alicante','Armario de madera de aliso','armario18.jpeg'),(89,'Puerta de Roble','Madera de roble','Puerta','Córdoba','Puerta de madera de roble para interiores','puerta1.jpeg'),(90,'Puerta de Pino','Madera de pino','Puerta','Valladolid','Puerta de madera de pino para exteriores','puerta2.jpeg'),(91,'Puerta Metálica','Metal','Puerta','Vigo','Puerta metálica para interiores','puerta3.jpeg'),(92,'Puerta Industrial','Metal','Puerta','Gijón','Puerta metálica para uso industrial','puerta5.jpeg'),(93,'Puerta de Cerezo','Madera de cerezo','Puerta','Málaga','Puerta de madera de cerezo para exteriores','puerta6.jpeg'),(94,'Cocina Moderna','Madera de roble','Cocina','Madrid','Cocina moderna de madera de roble','cocina1.jpeg'),(95,'Cocina Rústica','Madera de pino','Cocina','Valencia','Cocina rústica de madera de pino','cocina3.jpeg'),(96,'Cajonera Roble','Madera de roble','Cajonera','Madrid','Cajonera de madera de roble para oficina','cajonera1.jpeg'),(97,'Cajonera Metálica','Metal','Cajonera','Barcelona','Cajonera metálica para uso industrial','cajonera2.jpeg');
/*!40000 ALTER TABLE `trabajos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'profe','$2a$12$x1juI4HfZuOztJ1Q/rJph.EgiqqRJzX/j4xK6lWdGgaM8AKjXUMlm'),(2,'alumno','$2a$12$q4cvsZ/k33nesjjZLI51ZuxDIcFhe2K.ySqgJ43PRe35Uo08N9crG');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'acancho_ebanisteria'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-26 11:31:28
