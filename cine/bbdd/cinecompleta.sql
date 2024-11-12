-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2024 a las 19:16:10
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebida`
--

CREATE TABLE `bebida` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` float(7,2) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bebida`
--

INSERT INTO `bebida` (`id`, `titulo`, `descripcion`, `precio`, `imagen`) VALUES
(1, 'Coca Cola', 'Normal - Zero - Sin cafeina', 3.50, 'coca.png'),
(2, 'fanta', 'Limón - Naranja - Arándanos', 3.50, 'fanta.png'),
(3, 'Aquarius', 'Limón - Naranja', 3.00, 'aquarius.png'),
(4, 'Nestea', 'Limçon - Melocotón - Mango', 3.00, 'nestea.png'),
(5, 'Pepsi', 'Normal', 3.40, 'pepsi.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cines`
--

CREATE TABLE `cines` (
  `id` int(11) NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `provincia` varchar(50) DEFAULT NULL,
  `codigo_postal` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cines`
--

INSERT INTO `cines` (`id`, `imagen`, `nombre`, `direccion`, `ciudad`, `provincia`, `codigo_postal`) VALUES
(25, 'OcineQuadernillos.jpg', 'Ocine Quadernillos', 'Parque Cuadernillos, Autovía A-2 (salidas 34 y 35)', 'Alcalá de Henares', 'Madrid', '28805'),
(26, 'KinépolisDiversiaAlcobendas.jpg', 'Kinépolis Diversia', 'Parque de Ocio Diversia, Avda. Bruselas 21', 'Alcobendas', 'Madrid', '28108'),
(27, 'YelmoCinesTresAguas3D.jpg', 'Yelmo Cines Tres Aguas 3D', 'CC Tres Aguas Avda. de América 7-9', 'Alcorcón', 'Madrid', '28922'),
(28, 'CinesaIntuXanadú3D.jpg', 'Cinesa Intu Xanadú 3D', 'Ctra. N-V Km. 23,500', 'Arroyomolinos', 'Madrid', '28939'),
(29, 'YelmoCinesPlanetocio3D.jpg', 'Yelmo Cines Planetocio 3D', 'Avda. Juan Carlos I 46', 'Collado Villalba', 'Madrid', '28400'),
(30, 'CinesLaRambla3D.jpg', 'Cines La Rambla 3D', 'CC La Rambla Honduras s/n', 'Coslada', 'Madrid', '28820'),
(31, 'CinesaLoranca3D.jpg', 'Cinesa Loranca 3D', 'CC Loranca,  Avda. Pablo Iglesias 17', 'Fuenlabrada', 'Madrid', '28942'),
(32, 'CinesaLasRozasHeronCity3D.jpg', 'Cinesa Heron City 3D', 'CC Heron City Las Rozas,  avda. Juan Ramón Jiménez 3', 'Rozas de Madrid', 'Madrid', '28230'),
(33, 'CinesaParquesur3D.jpg', 'Cinesa Parquesur 3D', 'Pl. de las Barcas 11', 'Leganés', 'Madrid', '28916'),
(34, 'CinesPrincesa.jpg', 'Cines Princesa', 'Princesa 3', 'Madrid', 'Madrid', '28008'),
(35, 'RenoirPlazadeEspaña.jpg', 'Renoir Plaza de España', 'Martín de los Heros 12', 'Madrid', 'Madrid', '28008'),
(36, 'RenoirRetiro.jpg', 'Renoir Retiro', 'Narváez 42', 'Madrid', 'Madrid', '28009'),
(37, 'CinesVerdiMadrid.jpg', 'Cines Verdi Madrid', 'Bravo Murillo 28', 'Madrid', 'Madrid', '28015'),
(38, 'CineCapitol.jpg', 'Cine Capitol', 'Gran Vía,41', 'Madrid', 'Madrid', '28013'),
(39, 'MoobyAribau.jpg', 'Mooby Aribau', 'Aribau 5 y 8-10', 'Barcelona', 'Barcelona', '08001'),
(40, 'Boliche.jpg', 'Boliche', 'Av. Diagonal 508-510', 'Barcelona', 'Barcelona', '08006'),
(41, 'MoobyBosque.jpg', 'Mooby Bosque', 'Rambla de Prat 16', 'Barcelona', 'Barcelona', '08012'),
(42, 'CinesaSOMMultiespai.jpg', 'Cinesa SOM Multiespai', 'CC SOM Multiespai, Río de Janeiro, 42.', 'Barcelona', 'Barcelona', '08016'),
(43, 'YelmoWestfieldLaMaquinista.jpg', 'Yelmo Westfield La Maquinista', 'CC La Maquinista, Potosí s/n', 'Barcelona', 'Barcelona', '08030'),
(44, 'YelmoCinesComedia.jpg', 'Yelmo Cines Comedia', 'Pg. de Gràcia 13', 'Barcelona', 'Barcelona', '08007'),
(45, 'FilmotecadeCatalunya.jpg', 'Filmoteca de Catalunya', 'Plaça Salvador Seguí 1-9', 'Barcelona', 'Barcelona', '08001'),
(46, 'ABC_Saler.jpg', 'ABC Saler', 'Av. Autopista del Saler, 16', 'Valencia', 'Valencia', '46013'),
(47, 'Cines_Babel.jpg', 'Cines Babel', 'Vicente Sancho Tello, 10', 'Valencia', 'Valencia', '46021'),
(48, 'Filmoteca_IVAC.jpg', 'La Filmoteca del IVAC-CulturArts Generalitat', 'Pl. Ayuntamiento 17', 'Valencia', 'Valencia', '46021'),
(49, 'Ocine_Aqua.jpg', 'Ocine Aqua', 'Carrer de Menorca, 19', 'Valencia', 'Valencia', '46023'),
(50, 'Yelmo_Campanar.jpg', 'Yelmo Cines Mercado de Campanar', 'Avinguda de Tirso de Molina, 16', 'Valencia', 'Valencia', '46015'),
(51, 'ABC_Park.jpg', 'ABC Park Multicines', 'Roger de Lauria 21', 'Valencia', 'Valencia', '46002'),
(52, 'Lys_Cines.jpg', 'Lys Cines', 'Passeig de Russafa, 3', 'Valencia', 'Valencia', '46002'),
(53, 'Autocinestar.jpg', 'Autocinestar', 'Ctra. del Riu 407', 'Valencia', 'Valencia', '46012'),
(54, 'CinestudiodOr.jpg', 'Cinestudio d\'Or', 'Carrer de l\'Almirall Cadarso', 'Valencia', 'Valencia', '46005');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE `comida` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` float(7,2) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO `comida` (`id`, `titulo`, `descripcion`, `precio`, `imagen`) VALUES
(1, 'Palomitas', 'Palomitas calentitas de sal o mantequilla.\r\ntambién tenemos la opción de palomitas de colores.', 9.50, 'palomitas.png'),
(2, 'Barrita chocolate', 'Barrita de chocolate con sabor alucinante.\r\ndisfruta de todo el sabor del mejor chocolate ', 5.50, 'barrita.png'),
(3, 'Patatas', 'Patata frita fina y rica.\r\nDisfruta de su sabor lleno de colesterol, crujiente y finita que rica la papa frita', 3.50, 'patata.png'),
(4, 'Pollo frito', 'Pollo crudo y frito siempre riquito.\r\nTiras de pollo en la boca, ¡ten cuidado que te quedas loca!', 8.90, 'pollo.png'),
(5, 'Nachos', 'A que esperas macho, compra tus nacho, con queso o guacamole se el que mas mole', 7.50, 'nachos.png'),
(6, 'Kebab', 'De kebab chaval, este kebab te dejara fatal, no pararas de ir al baño...kebab!', 9.90, 'kebab.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` float(7,2) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `titulo`, `descripcion`, `precio`, `imagen`) VALUES
(1, 'COMBO 1', 'PALOMITAS + BEBIDA + SNACK a elegir', 12.50, 'combo1.png'),
(2, 'COMBO 2', '2 PALOMITAS + NACHOS + 2 BEBIDAS', 13.50, 'combo2.png'),
(3, 'COMBO 3', 'PALOMITAS + PERRITO + BEBIDA a elegir ', 14.00, 'combo3.png'),
(4, 'COMBO 4', 'PALOMITAS + 2 PERRITOS + 2 BEBIDAS + 2 SNACK', 17.90, 'combo4.png'),
(5, 'COMBO 5 ', 'PALOMITAS + BEBIDA +  SNACK + CREPES ', 17.50, 'combo5.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(4) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `id_cine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `nombre`, `id_cine`) VALUES
(1, 'El Padrino (1972)', 25),
(2, 'Interestelar (2014)', 26),
(3, 'Titanic (1997)', 27),
(4, 'El Laberinto del Fauno (2006)', 28),
(5, 'Pulp Fiction (1994)', 29),
(6, 'Forrest Gump (1994)', 30),
(7, 'El Señor de los Anillos: La Comunidad del Anillo (2001)', 31),
(8, 'Matrix (1999)', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'profe', '$2a$12$3Po7wNJWCV76PM/I2cl23ubBIx4KNiITdvwaXHqEFiBneiyQpaz2.'),
(2, 'alumno', '$2a$12$N6cOTEJzjcIR2J2H60zPX.BL/Hbu1FDrb5e..CLfCvp14vcRyb4Pi'),
(4, 'Sergio', '$2y$10$SM2IF5W.MFlHfXBGFw5UpOeoFJ9e6C1v.urizSc7K/CIUfIThtFvO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebida`
--
ALTER TABLE `bebida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cines`
--
ALTER TABLE `cines`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cine` (`id_cine`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebida`
--
ALTER TABLE `bebida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cines`
--
ALTER TABLE `cines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `comida`
--
ALTER TABLE `comida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `peliculas_ibfk_1` FOREIGN KEY (`id_cine`) REFERENCES `cines` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
