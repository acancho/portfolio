-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2024 a las 13:31:33
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
-- Base de datos: `carta_cine`
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebida`
--
ALTER TABLE `bebida`
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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebida`
--
ALTER TABLE `bebida`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
