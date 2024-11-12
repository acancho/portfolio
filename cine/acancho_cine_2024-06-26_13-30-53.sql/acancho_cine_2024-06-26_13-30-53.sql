-- MariaDB dump 10.19  Distrib 10.5.22-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: acancho_cine
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
-- Table structure for table `bebida`
--

DROP TABLE IF EXISTS `bebida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bebida` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` float(7,2) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bebida`
--

LOCK TABLES `bebida` WRITE;
/*!40000 ALTER TABLE `bebida` DISABLE KEYS */;
INSERT INTO `bebida` VALUES (1,'Coca Cola','Normal - Zero - Sin cafeina',3.50,'coca.png'),(2,'fanta','Limón - Naranja - Arándanos',3.50,'fanta.png'),(3,'Aquarius','Limón - Naranja',3.00,'aquarius.png'),(4,'Nestea','Limçon - Melocotón - Mango',3.00,'nestea.png'),(5,'Pepsi','Normal',3.40,'pepsi.png');
/*!40000 ALTER TABLE `bebida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cines`
--

DROP TABLE IF EXISTS `cines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(150) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `provincia` varchar(50) DEFAULT NULL,
  `codigo_postal` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cines`
--

LOCK TABLES `cines` WRITE;
/*!40000 ALTER TABLE `cines` DISABLE KEYS */;
INSERT INTO `cines` VALUES (25,'ocinequadernillos.jpg','Ocine Quadernillos','Parque Cuadernillos, Autovía A-2 (salidas 34 y 35)','Alcala de Henares','Madrid','28805'),(26,'kinepolisdiversiaalcobendas.jpg','Kinepolis Diversia','Parque de Ocio Diversia, Avda. Bruselas 21','Alcobendas','Madrid','28108'),(27,'yelmocinestresaguas3d.jpg','Yelmo Cines Tres Aguas','CC Tres Aguas Avda. de América 7-9','Alcorcon','Madrid','28922'),(28,'cinesaintuxanadu3d.jpg','Cinesa Intu Xanadu 3D','Ctra. N-V Km. 23,500','Arroyomolinos','Madrid','28939'),(29,'yelmocinesplanetocio3d.jpg','Yelmo Cines Planetocio','Avda. Juan Carlos I 46','Collado Villalba','Madrid','28400'),(30,'cineslarambla3d.jpg','Cines La Rambla 3D','CC La Rambla Honduras s/n','Coslada','Madrid','28820'),(31,'cinesaloranca3d.jpg','Cinesa Loranca 3D','CC Loranca,  Avda. Pablo Iglesias 17','Fuenlabrada','Madrid','28942'),(32,'cinesalasrozasheroncity3d.jpg','Cinesa Heron City 3D','CC Heron City Las Rozas,  avda. Juan Ramón Jiménez 3','Rozas de Madrid','Madrid','28230'),(33,'cinesaparquesur3d.jpg','Cinesa Parquesur 3D','Pl. de las Barcas 11','Leganes','Madrid','28916'),(34,'cinesprincesa.jpg','Cines Princesa','Princesa 3','Madrid','Madrid','28008'),(35,'renoirplazadeespana.jpg','Renoir Plaza','Martín de los Heros 12','Madrid','Madrid','28008'),(36,'renoirretiro.jpg','Renoir Retiro','Narváez 42','Madrid','Madrid','28009'),(37,'cinesverdimadrid.jpg','Cines Verdi Madrid','Bravo Murillo 28','Madrid','Madrid','28015'),(38,'cinecapitol.jpg','Cine Capitol','Gran Vía,41','Madrid','Madrid','28013'),(39,'moobyaribau.jpg','Mooby Aribau','Aribau 5 y 8-10','Barcelona','Barcelona','08001'),(40,'boliche.jpg','Boliche','Av. Diagonal 508-510','Barcelona','Barcelona','08006'),(41,'moobybosque.jpg','Mooby Bosque','Rambla de Prat 16','Barcelona','Barcelona','08012'),(42,'cinesasommultiespai.jpg','Cinesa SOM Multiespai','CC SOM Multiespai, Río de Janeiro, 42.','Barcelona','Barcelona','08016'),(43,'yelmowestfieldlamaquinista.jpg','Westfield La Maquinista','CC La Maquinista, Potosí s/n','Barcelona','Barcelona','08030'),(44,'yelmocinescomedia.jpg','Yelmo Cines Comedia','Pg. de Gràcia 13','Barcelona','Barcelona','08007'),(45,'filmotecadecatalunya.jpg','Filmoteca de Catalunya','Plaça Salvador Seguí 1-9','Barcelona','Barcelona','08001'),(46,'abc_saler.jpg','ABC Saler','Av. Autopista del Saler, 16','Valencia','Valencia','46013'),(47,'cines_babel.jpg','Cines Babel','Vicente Sancho Tello, 10','Valencia','Valencia','46021'),(48,'filmoteca_ivac.jpg','La Filmoteca del IVAC','Pl. Ayuntamiento 17','Valencia','Valencia','46021'),(49,'ocine_aqua.jpg','Ocine Aqua','Carrer de Menorca, 19','Valencia','Valencia','46023'),(50,'yelmo_campanar.jpg','Mercado de Campanar','Avinguda de Tirso de Molina, 16','Valencia','Valencia','46015'),(51,'abc_park.jpg','ABC Park Multicines','Roger de Lauria 21','Valencia','Valencia','46002'),(52,'lys_cines.jpg','Lys Cines','Passeig de Russafa, 3','Valencia','Valencia','46002'),(53,'autocinestar.jpg','Autocinestar','Ctra. del Riu 407','Valencia','Valencia','46012'),(54,'cinestudiodor.jpg','Cinestudio d\'Or','Carrer de l\'Almirall Cadarso','Valencia','Valencia','46005');
/*!40000 ALTER TABLE `cines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comida`
--

DROP TABLE IF EXISTS `comida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comida` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` float(7,2) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comida`
--

LOCK TABLES `comida` WRITE;
/*!40000 ALTER TABLE `comida` DISABLE KEYS */;
INSERT INTO `comida` VALUES (1,'Palomitas','Palomitas calentitas de sal o mantequilla.\r\ntambién tenemos la opción de palomitas de colores.',9.50,'palomitas.png'),(2,'Barrita chocolate','Barrita de chocolate con sabor alucinante.\r\ndisfruta de todo el sabor del mejor chocolate ',5.50,'barrita.png'),(3,'Patatas','Patata frita fina y rica.\r\nDisfruta de su sabor lleno de colesterol, crujiente y finita que rica la papa frita',3.50,'patata.png'),(4,'Pollo frito','Pollo crudo y frito siempre riquito.\r\nTiras de pollo en la boca, ¡ten cuidado que te quedas loca!',8.90,'pollo.png'),(5,'Nachos','A que esperas macho, compra tus nacho, con queso o guacamole se el que mas mole',7.50,'nachos.png'),(6,'Kebab','De kebab chaval, este kebab te dejara fatal, no pararas de ir al baño...kebab!',9.90,'kebab.png');
/*!40000 ALTER TABLE `comida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` float(7,2) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'COMBO 1','PALOMITAS + BEBIDA + SNACK a elegir',12.50,'combo1.png'),(2,'COMBO 2','2 PALOMITAS + NACHOS + 2 BEBIDAS',13.50,'combo2.png'),(3,'COMBO 3','PALOMITAS + PERRITO + BEBIDA a elegir ',14.00,'combo3.png'),(4,'COMBO 4','PALOMITAS + 2 PERRITOS + 2 BEBIDAS + 2 SNACK',17.90,'combo4.png'),(5,'COMBO 5 ','PALOMITAS + BEBIDA +  SNACK + CREPES ',17.50,'combo5.png');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peliculas` (
  `id` int(4) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `id_cine` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cine` (`id_cine`),
  CONSTRAINT `peliculas_ibfk_1` FOREIGN KEY (`id_cine`) REFERENCES `cines` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peliculas`
--

LOCK TABLES `peliculas` WRITE;
/*!40000 ALTER TABLE `peliculas` DISABLE KEYS */;
INSERT INTO `peliculas` VALUES (1,'El Padrino (1972)',25),(2,'Interestelar (2014)',26),(3,'Titanic (1997)',27),(4,'El Laberinto del Fauno (2006)',28),(5,'Pulp Fiction (1994)',29),(6,'Forrest Gump (1994)',30),(7,'El Señor de los Anillos: La Comunidad del Anillo (2001)',31),(8,'Matrix (1999)',32);
/*!40000 ALTER TABLE `peliculas` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'profe','$2a$12$3Po7wNJWCV76PM/I2cl23ubBIx4KNiITdvwaXHqEFiBneiyQpaz2.'),(2,'alumno','$2a$12$N6cOTEJzjcIR2J2H60zPX.BL/Hbu1FDrb5e..CLfCvp14vcRyb4Pi'),(4,'Sergio','$2y$10$SM2IF5W.MFlHfXBGFw5UpOeoFJ9e6C1v.urizSc7K/CIUfIThtFvO'),(5,'sandra16','$2y$10$LDzI/ldHRoMQgv7mLhAbS.XvPjSk4hJtsTR8mb1GjYK7PS8m7.O.W'),(6,'dvd1','$2y$10$EojK/SQ7CQqJF9t0v.iIBep/u1uBfmOC2n2wzqRnehsmd1P/DOuqC'),(7,'admin','$2y$10$7fTDrs5olTM.zUZ27Ti.0.CM/CJAg1o9sTIUSDHukMyHm8clpKZ6W'),(8,'admin','$2y$10$Rw38F3HXN08TL0BXpvP1euTlqLtozoSlkZ9IxYuCxuUV4OWCKrr3G'),(9,'Adrian','$2y$10$9fBc1TNySggpZPLh/ykGoe6FAe5wN0gB/GpoHHr8E8TqPUFmJF/B6'),(10,'david','$2y$10$RLl/xx58DKMvsQBjJi1nvunWC9dltgW./Ixp1laZ3KLlh1E2VHOwe'),(11,'Antonio1','$2y$10$pXhqjdxmvDh3yxS.yTZk8uMkv8THbouPvDIFMoc0Y24/gZZvDnoMO'),(12,'Sandra16','$2y$10$Opse7dFBBa.TFQQeQ4g2IOg0cKPl5JHyD3QvlSZ1qS4On1pS5/6Uu'),(13,'antoniofb9','$2y$10$F2p8muJdu8kb2aNuyKP8kOaK87iMWTtiAvcnq0Qn3TbRjpEVZrkBu'),(14,'antoniofb9','$2y$10$kmZphhtA/z1SntG/DkzfEub2IHxxaVAxdhTAI1OZeVPtTDJ4Mbr4u');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'acancho_cine'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-26 11:30:58
