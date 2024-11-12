-- MariaDB dump 10.19  Distrib 10.5.22-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: acancho_restaurante
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
-- Table structure for table `carta`
--

DROP TABLE IF EXISTS `carta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carta` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `titulo_en` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `descripcion_en` varchar(200) NOT NULL,
  `precio` float(7,2) NOT NULL,
  `imagen` varchar(90) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `tipo_en` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carta`
--

LOCK TABLES `carta` WRITE;
/*!40000 ALTER TABLE `carta` DISABLE KEYS */;
INSERT INTO `carta` VALUES (1,'Tortilla Española','Tortilla Española','Una deliciosa tortilla de patatas','Una deliciosa tortilla de patatas',19.00,'tortilla.jpg','Comida','Comida'),(2,'Paella Valenciana','Valencian Paella','Un plato tradicional de arroz con mariscos','A traditional dish of rice with seafood',15.00,'paella.jpg','comida','food'),(3,'Sangría','Sangria','Una refrescante bebida de vino con frutas','A refreshing wine drink with fruits',5.00,'sangria.jpg','bebida','drink'),(4,'Churros','Churros','Deliciosos churros caseros','Delicious churros accompanied by hot chocolate',4.00,'churros.jpg','comida','food'),(6,'Gazpacho','Gazpacho','Sopa fría de tomate y verduras','Cold soup of tomato and vegetables',3.00,'gazpacho.jpg','comida','food'),(7,'Fabada Asturiana','Asturian Bean Stew','Guiso de alubias blancas con chorizo y morcilla','Stew with chorizo and black pudding',6.00,'fabada.jpg','comida','food'),(8,'Pulpo a la Gallega','Galician Octopus','Pulpo cocido con pimentón y aceite','Cooked octopus with paprika and olive oil',8.00,'pulpo.jpg','comida','food'),(9,'Patatas Bravas','Bravas Potatoes','Patatas fritas con salsa picante','Fried potatoes with spicy sauce',2.50,'bravas.jpg','comida','food'),(10,'Albóndigas en Salsa','Meatballs in Sauce','Albóndigas de carne en salsa de tomate','Meatballs in tomato sauce',5.00,'albondigas.jpg','comida','food'),(11,'Tarta de Santiago','Santiago Cake','Tarta de almendras típica de Galicia','Typical almond cake from Galicia',4.00,'tarta.jpg','comida','food'),(12,'Calamares Romana','Roman-style Squid','Anillas de calamar rebozadas','Battered and fried squid rings',6.50,'calamares.jpg','comida','food'),(13,'Tortillitas de Camarones','Shrimp Pancakes','tortillas de camarones fritas','Small fried shrimp pancakes',3.50,'tortillitas.jpg','comida','food'),(14,'Salmorejo','Salmorejo','Crema fría de tomate y pan','Cold cream of tomato and bread',3.00,'salmorejo.jpg','comida','food'),(15,'Pisto Manchego','Manchego Ratatouille','Guiso de verduras de la región de La Mancha','Vegetable stew from the La Mancha region',4.50,'pisto.jpg','comida','food'),(16,'Rabo de Toro','Bull Tail','Estofado de rabo de toro en salsa','Bull tail stew',7.00,'rabo.jpg','comida','food'),(17,'Cocido Madrileño','Madrid Stew','Guiso de garbanzos con carne y verduras','Chickpea stew with meat and vegetables',6.00,'cocido.jpg','comida','food'),(18,'Pa amb Tomàquet','Bread with Tomato','Pan con tomate y aceite de oliva','Bread with tomato and olive oil',1.50,'pa.jpg','comida','food'),(19,'Escalivada','Escalivada','Ensalada de verduras asadas','Roasted vegetable salad',4.00,'escalivada.jpg','comida','food'),(20,'Calçots con Romesco','Calçots with Romesco','Cebollas tiernas asadas con salsa romesco','Roasted tender onions with romesco sauce',5.00,'calçots.jpg','comida','food'),(21,'Fideuá','Fideuá','Plato de fideos con mariscos','Noodle dish with seafood',6.50,'fideua.jpg','comida','food'),(22,'Crema Catalana','Catalan Cream','Crema pastelera con azúcar caramelizado','Pastry cream with caramelized sugar',3.50,'crema.jpg','comida','food'),(23,'Turrón','Nougat','Dulce de almendras y miel','Sweet of almonds and honey',3.00,'turron.jpg','comida','food'),(24,'Pollo al Ajillo','Garlic Chicken','Pollo frito con ajo en salsa casera','Fried chicken with garlic',5.00,'pollo.jpg','comida','food'),(25,'Merluza a la Koskera','Koskera Hake','Merluza con almejas y espárragos','Hake with clams and asparagus',7.50,'merluza.jpg','comida','food'),(26,'Gambas al Ajillo','Garlic Prawns','Gambas salteadas con ajo y guindilla','Prawns sautéed with garlic and chili',6.00,'gambas.jpg','comida','food'),(27,'Pimientos de Padrón','Padrón Peppers','Pequeños pimientos verdes fritos','Small fried green peppers',3.50,'pimientos.jpg','comida','food'),(28,'Queso Manchego','Manchego Cheese','Queso de oveja de la región de La Mancha','Sheep cheese from the La Mancha region',4.00,'queso.jpg','comida','food'),(30,'Chorizo a la Sidra','Cider Chorizo','Chorizo cocido en sidra','Chorizo cooked in cider',4.50,'chorizo.jpg','comida','food'),(31,'Almejas a la Marinera','Sailor-style Clams','Almejas en salsa de vino y perejil','Clams in wine and parsley sauce',6.00,'almejas.jpg','comida','food'),(32,'Migas','Breadcrumbs','Plato de pan rallado con chorizo y uvas','Dish of breadcrumbs with chorizo and grapes',4.00,'migas.jpg','comida','food'),(33,'Ensaladilla Rusa','Russian Salad','Ensalada de patatas con mayonesa','Potato salad with mayonnaise',3.00,'ensaladilla.jpg','comida','food'),(34,'Croquetas de Jamón','Ham Croquettes','Croquetas cremosas de jamón','Creamy ham croquettes',3.50,'croquetas.jpg','comida','food'),(35,'Flan de Huevo','Egg Flan','Postre de huevo y caramelo','Egg and caramel dessert',2.50,'flan.jpg','comida','food'),(36,'Empanada Gallega','Galician Pie','Tarta salada de atún y pimientos','Savory pie of tuna and peppers',5.00,'empanada.jpg','comida','food'),(37,'Callos a la Madrileña','Madrid-style Tripe','Guiso de callos con chorizo','Tripe stew with chorizo spain',6.00,'callos.jpg','comida','food'),(38,'Arroz con Leche','Rice Pudding','Postre de arroz con leche y canela','Dessert of rice with milk and cinnamon',3.00,'arroz.jpg','comida','food'),(39,'Tigres','Mussels Tigres','Mejillones rellenos y rebozados','Stuffed and breaded mussels',4.50,'tigres.jpg','comida','food'),(40,'Pulpo a la Vinagreta','Vinaigrette Octopus','Pulpo con vinagreta de verduras','Octopus with vegetable vinaigrette',7.00,'pulpo_vinagreta.jpg','comida','food'),(41,'Cerveza','Beer','Bebida alcohólica de cebada','Alcoholic beverage of barley',2.00,'cerveza.jpg','bebida','drink'),(42,'Vino Tinto','Red Wine','Vino de uvas rojas','Wine from red grapes',3.00,'vino_tinto.jpg','bebida','drink'),(43,'Vino Blanco','White Wine','Vino de uvas blancas','Wine from white grapes',3.00,'vino_blanco.jpg','bebida','drink'),(44,'Sidra','Cider','Bebida alcohólica de manzanas','Alcoholic beverage of apples',2.50,'sidra.jpg','bebida','drink'),(45,'Vermut','Vermouth','Vino aromatizado con hierbas','Wine flavored with herbs spain',3.50,'vermut.jpg','bebida','drink'),(46,'Cava','Cava','Vino espumoso de Cataluña','Sparkling wine from Catalonia',4.00,'cava.jpg','bebida','drink'),(48,'Tinto de Verano','Summer Red Wine','Vino tinto con refresco de limón','Red wine with lemon soda',2.50,'tinto_verano.jpg','bebida','drink'),(49,'Clara','Shandy','Cerveza con refresco de limón','Beer with lemon soda',2.00,'clara.jpg','bebida','drink'),(50,'Licor de Hierbas','Herb Liqueur','Licor de hierbas típico de Galicia','Typical herb liqueur from Galicia',3.00,'licor_hierbas.jpg','bebida','drink'),(51,'Orujo','Orujo','Aguardiente de uvas','Brandy of grapes',3.50,'orujo.jpg','bebida','drink'),(52,'Agua de Valencia','Valencia Water','Cóctel de cava, zumo de naranja y vodka','Cocktail of cava, orange juice and vodka',4.00,'agua_valencia.jpg','bebida','drink'),(53,'Kalimotxo','Kalimotxo','Mezcla de vino tinto y cola','Mix of red wine and cola',2.50,'kalimotxo.jpg','bebida','drink'),(54,'Rebujito','Rebujito','Mezcla de vino de Jerez y refresco de limón','Mix of Sherry wine and lemon soda',3.00,'rebujito.jpg','bebida','drink'),(55,'Carajillo','Carajillo','Café con licor','Coffee with liquor',2.50,'carajillo.jpg','bebida','drink'),(56,'Tinto de Verano','','Vino tinto mezclado con refresco de limón','Vino tinto mezclado con refresco de limón',2.50,'tinto.jpg','bebida','drink'),(58,'Prueba 1','hola','d','d',12.00,'wallpaper.png','Comida','Comida'),(59,'hola','ss','8979aaaaaaaaaaaa','sssssssssssssssss',8.00,'7.jpg','Comida','Food');
/*!40000 ALTER TABLE `carta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fotos`
--

DROP TABLE IF EXISTS `fotos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fotos` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `foto` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fotos`
--

LOCK TABLES `fotos` WRITE;
/*!40000 ALTER TABLE `fotos` DISABLE KEYS */;
INSERT INTO `fotos` VALUES (1,'1.jpg'),(2,'2.jpg'),(3,'3.jpg'),(4,'4.jpg'),(5,'5.jpg'),(6,'6.jpg'),(7,'7.jpg'),(8,'8.jpg'),(9,'9.jpg'),(10,'10.jpg'),(11,'11.jpg'),(12,'12.jpg'),(30,'wallpaper.png');
/*!40000 ALTER TABLE `fotos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'acancho_restaurante'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-26 11:31:33
