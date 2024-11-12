-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2024 a las 15:45:13
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
-- Base de datos: `carta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `id_bebidas` int(11) NOT NULL,
  `nombre_bebidas` varchar(100) NOT NULL,
  `descripcion_bebidas` text DEFAULT NULL,
  `precio_bebidas` decimal(10,2) NOT NULL,
  `cantidad_bebidas` int(10) NOT NULL,
  `foto_bebidas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`id_bebidas`, `nombre_bebidas`, `descripcion_bebidas`, `precio_bebidas`, `cantidad_bebidas`, `foto_bebidas`) VALUES
(1, 'Refresco de cola', 'Refresco de cola frío y refrescante.', 2.50, 50, 'cocacola.png'),
(2, 'Jugo de naranja', 'Jugo de naranja recién exprimido.', 3.00, 30, '1906.jpeg'),
(3, 'Agua mineral', 'Agua mineral sin gas.', 1.00, 100, 'zumonaranja.png'),
(4, 'Cerveza', 'Cerveza rubia muy fría.', 4.00, 20, 'monster.jpg'),
(5, 'Café', 'Café caliente y aromático.', 2.00, 40, '1906.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cachimbas`
--

CREATE TABLE `cachimbas` (
  `id_cachimbas` int(11) NOT NULL,
  `nombre_cachimbas` varchar(100) NOT NULL,
  `descripcion_cachimbas` text DEFAULT NULL,
  `precio_cachimbas` decimal(10,2) NOT NULL,
  `cantidad_cachimbas` int(10) NOT NULL,
  `foto_cachimbas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cachimbas`
--

INSERT INTO `cachimbas` (`id_cachimbas`, `nombre_cachimbas`, `descripcion_cachimbas`, `precio_cachimbas`, `cantidad_cachimbas`, `foto_cachimbas`) VALUES
(1, 'Cachimba clásica', 'Cachimba clásica de acero inoxidable.', 20.00, 10, 'mrshishavalhalla.jpeg'),
(2, 'Cachimba de vidrio', 'Cachimba moderna con base de vidrio.', 30.00, 8, 'nurburgring.webp'),
(3, 'Cachimba de madera', 'Cachimba tradicional hecha a mano.', 25.00, 5, 'regal.jpg'),
(4, 'Cachimba de cerámica', 'Cachimba decorada con motivos cerámicos.', 35.00, 7, 'migtradi.webp'),
(5, 'Cachimba de lujo', 'Cachimba de diseño exclusivo con detalles dorados.', 50.00, 3, 'nurburgring.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE `comida` (
  `id_comida` int(11) NOT NULL,
  `nombre_comida` varchar(100) NOT NULL,
  `descripcion_comida` text DEFAULT NULL,
  `precio_comida` decimal(10,2) NOT NULL,
  `cantidad_comida` int(10) NOT NULL,
  `foto_comida` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO `comida` (`id_comida`, `nombre_comida`, `descripcion_comida`, `precio_comida`, `cantidad_comida`, `foto_comida`) VALUES
(1, 'Hamburguesa', 'Hamburguesa de carne con queso y vegetales.', 8.00, 20, 'quesadilla.jpg'),
(2, 'Pizza', 'Pizza casera con salsa de tomate y pepperoni.', 10.00, 15, 'tequenos.jpg'),
(3, 'Ensalada Cesar', 'Ensalada fresca con pollo a la parrilla y aderezo César.', 6.00, 25, '1906.jpeg'),
(4, 'Tacos', 'Tacos mexicanos con carne de res, salsa y guacamole.', 7.00, 30, 'nachos.jpg'),
(5, 'Sushi', 'Variedad de sushi fresco y sabroso.', 12.00, 12, 'baconcheese.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallespedido`
--

CREATE TABLE `detallespedido` (
  `id_pedido_detallespedido` int(11) DEFAULT NULL,
  `id_comida_detallespedido` int(11) DEFAULT NULL,
  `id_tabaco_detallespedido` int(11) DEFAULT NULL,
  `id_cachimba_detallespedido` int(11) DEFAULT NULL,
  `id_bebidas_detallespedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedidos` int(11) NOT NULL,
  `id_usuario_pedidos` int(11) DEFAULT NULL,
  `mesa_pedidos` varchar(45) NOT NULL,
  `pagado` tinyint(1) NOT NULL DEFAULT 0,
  `tiempo_permanencia` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabacos`
--

CREATE TABLE `tabacos` (
  `id_tabacos` int(11) NOT NULL,
  `marca_tabacos` varchar(50) NOT NULL,
  `nombre_tabacos` varchar(100) NOT NULL,
  `descripcion_tabacos` text DEFAULT NULL,
  `precio_tabacos` decimal(10,2) NOT NULL,
  `cantidad_tabacos` int(10) NOT NULL,
  `tipo_tabacos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tabacos`
--

INSERT INTO `tabacos` (`id_tabacos`, `marca_tabacos`, `nombre_tabacos`, `descripcion_tabacos`, `precio_tabacos`, `cantidad_tabacos`, `tipo_tabacos`) VALUES
(1, 'hookain', 'Tabaco de manzana', 'Tabaco con sabor a manzana fresca.', 8.00, 15, 'Frutal'),
(2, 'hookain', 'Tabaco de menta', 'Tabaco refrescante con sabor a menta.', 7.00, 20, 'Mentolado'),
(3, 'musth', 'Tabaco de cereza', 'Tabaco aromático con sabor a cereza madura.', 9.00, 18, 'Frutal'),
(4, 'sturbuzz', 'Tabaco de vainilla', 'Tabaco suave con toques de vainilla.', 6.00, 25, 'Dulce'),
(5, 'blaze', 'Tabaco de melón', 'Tabaco con aroma y sabor a melón fresco.', 8.50, 17, 'Frutal'),
(6, 'alfakher', 'Tabaco de uva', 'Tabaco con sabor a uva dulce y jugosa.', 7.50, 20, 'Frutal'),
(7, 'alfakher', 'Tabaco de limón', 'Tabaco con sabor a limón fresco y cítrico.', 7.50, 22, 'Cítrico'),
(8, 'nakhla', 'Tabaco de melocotón', 'Tabaco con sabor a melocotón maduro.', 8.00, 18, 'Frutal'),
(9, 'nakhla', 'Tabaco de mango', 'Tabaco con sabor a mango tropical.', 8.00, 15, 'Frutal'),
(10, 'fumari', 'Tabaco de sandía', 'Tabaco con sabor a sandía refrescante.', 9.50, 16, 'Frutal'),
(11, 'fumari', 'Tabaco de fresa', 'Tabaco con sabor a fresa dulce.', 9.50, 19, 'Frutal'),
(12, 'starbuzz', 'Tabaco de piña', 'Tabaco con sabor a piña tropical.', 10.00, 20, 'Frutal'),
(13, 'starbuzz', 'Tabaco de coco', 'Tabaco con sabor a coco cremoso.', 10.00, 17, 'Dulce'),
(14, 'starbuzz', 'Tabaco de mango y maracuyá', 'Tabaco tropical con mezcla de mango y maracuyá.', 11.50, 22, 'Tropical'),
(15, 'fumari', 'Tabaco de albaricoque', 'Tabaco con sabor a albaricoque dulce y jugoso.', 10.50, 20, 'Frutal'),
(16, 'haze', 'Tabaco de manzana verde', 'Tabaco con sabor a manzana verde crujiente y refrescante.', 10.00, 21, 'Frutal'),
(17, 'alfakher', 'Tabaco de sandía y limón', 'Tabaco refrescante con sabor a sandía y limón.', 11.00, 19, 'Frutal'),
(18, 'tangiers', 'Tabaco de maracuyá', 'Tabaco con sabor a maracuyá tropical y ácido.', 12.00, 18, 'Tropical'),
(19, 'socialsmoke', 'Tabaco de mora azul', 'Tabaco con sabor a mora azul dulce y jugosa.', 9.00, 23, 'Frutal'),
(20, 'starbuzz', 'Tabaco de melocotón', 'Tabaco con sabor a melocotón maduro y dulce.', 10.50, 20, 'Frutal'),
(21, 'fumari', 'Tabaco de piña y coco', 'Tabaco con sabor a piña y coco, ideal para un toque tropical.', 11.50, 21, 'Tropical'),
(22, 'haze', 'Tabaco de kiwi', 'Tabaco con sabor a kiwi fresco y ligeramente ácido.', 9.50, 22, 'Frutal'),
(23, 'alfakher', 'Tabaco de limón y hierbabuena', 'Tabaco refrescante con sabor a limón y hierbabuena.', 12.00, 19, 'Cítrico'),
(24, 'tangiers', 'Tabaco de mango y piña', 'Tabaco tropical con mezcla de mango y piña.', 11.00, 20, 'Tropical'),
(25, 'socialsmoke', 'Tabaco de naranja', 'Tabaco con sabor a naranja fresca y jugosa.', 10.00, 24, 'Cítrico'),
(26, 'starbuzz', 'Tabaco de maracuyá y mango', 'Tabaco con sabor tropical a maracuyá y mango.', 12.50, 18, 'Tropical'),
(27, 'fumari', 'Tabaco de coco', 'Tabaco con sabor suave y dulce a coco.', 9.50, 25, 'Dulce'),
(28, 'haze', 'Tabaco de durazno', 'Tabaco con sabor a durazno maduro y jugoso.', 10.50, 22, 'Frutal'),
(29, 'alfakher', 'Tabaco de sandía y fresa', 'Tabaco refrescante con sabor a sandía y fresa.', 11.00, 20, 'Frutal'),
(30, 'tangiers', 'Tabaco de mandarina', 'Tabaco con sabor a mandarina fresca y cítrica.', 10.00, 23, 'Cítrico'),
(31, 'socialsmoke', 'Tabaco de guayaba y piña', 'Tabaco tropical con mezcla de guayaba y piña.', 11.50, 19, 'Tropical'),
(32, 'starbuzz', 'Tabaco de manzana', 'Tabaco con sabor a manzana verde y roja.', 10.00, 22, 'Frutal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `usuario_usuarios` varchar(50) NOT NULL,
  `contrasena_usuarios` varchar(50) NOT NULL,
  `puntos_usuarios` int(100) NOT NULL,
  `puntos_acumulados` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `usuario_usuarios`, `contrasena_usuarios`, `puntos_usuarios`, `puntos_acumulados`) VALUES
(1, 'usuario1', 'clave123', 0, 0),
(2, 'usuario2', 'abc456', 0, 0),
(3, 'usuario3', 'qwerty', 0, 0),
(4, 'usuario4', 'pass123', 0, 0),
(5, 'usuario5', 'clave456', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id_bebidas`);

--
-- Indices de la tabla `cachimbas`
--
ALTER TABLE `cachimbas`
  ADD PRIMARY KEY (`id_cachimbas`);

--
-- Indices de la tabla `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`id_comida`);

--
-- Indices de la tabla `detallespedido`
--
ALTER TABLE `detallespedido`
  ADD KEY `id_pedido` (`id_pedido_detallespedido`),
  ADD KEY `id_comida` (`id_comida_detallespedido`),
  ADD KEY `id_tabaco` (`id_tabaco_detallespedido`),
  ADD KEY `id_cachimba` (`id_cachimba_detallespedido`),
  ADD KEY `FK_detallespedido_bebidas` (`id_bebidas_detallespedido`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedidos`),
  ADD KEY `id_usuario` (`id_usuario_pedidos`);

--
-- Indices de la tabla `tabacos`
--
ALTER TABLE `tabacos`
  ADD PRIMARY KEY (`id_tabacos`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`),
  ADD UNIQUE KEY `usuario` (`usuario_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id_bebidas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallespedido`
--
ALTER TABLE `detallespedido`
  ADD CONSTRAINT `FK_detallespedido_bebidas` FOREIGN KEY (`id_bebidas_detallespedido`) REFERENCES `bebidas` (`id_bebidas`) ON DELETE CASCADE,
  ADD CONSTRAINT `detallespedido_ibfk_1` FOREIGN KEY (`id_pedido_detallespedido`) REFERENCES `pedidos` (`id_pedidos`),
  ADD CONSTRAINT `detallespedido_ibfk_2` FOREIGN KEY (`id_comida_detallespedido`) REFERENCES `comida` (`id_comida`),
  ADD CONSTRAINT `detallespedido_ibfk_4` FOREIGN KEY (`id_tabaco_detallespedido`) REFERENCES `tabacos` (`id_tabacos`),
  ADD CONSTRAINT `detallespedido_ibfk_5` FOREIGN KEY (`id_cachimba_detallespedido`) REFERENCES `cachimbas` (`id_cachimbas`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_usuario_pedidos`) REFERENCES `usuarios` (`id_usuarios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
