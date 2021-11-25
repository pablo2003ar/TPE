-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2021 a las 00:16:14
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_prod`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(13, 'Raqueta'),
(15, 'Paleta'),
(16, 'Accessorios'),
(18, 'Otras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `id_producto`, `id_usuario`, `descripcion`, `puntaje`, `fecha`) VALUES
(8, 27, 6, '34243', 1, NULL),
(10, 28, 6, '', 1, NULL),
(11, 28, 6, '121312412', 1, NULL),
(12, 28, 6, '121312412', 1, NULL),
(13, 27, 6, '123', 1, NULL),
(27, 29, 1, '123', 1, NULL),
(28, 29, 1, '323', 1, NULL),
(29, 29, 6, '42424', 1, NULL),
(30, 29, 6, '42424', 4, NULL),
(31, 30, 1, 'dfdfsf', 1, NULL),
(32, 30, 1, 'fawfaw', 1, NULL),
(33, 30, 1, 'wdwd', 1, NULL),
(34, 30, 1, 'moadwad', 1, NULL),
(36, 25, 6, 'dd', 4, NULL),
(37, 25, 6, 'fefeafea', 1, NULL),
(38, 25, 6, 'fhhhhhh', 1, NULL),
(44, 33, 6, 'tetaetaet', 1, NULL),
(45, 32, 6, 'primer comentariop', 1, NULL),
(46, 25, 6, 'probando', 1, '2022-11-21'),
(47, 25, 6, 'feafef', 3, '2021-11-22'),
(48, 26, 6, '1', 1, '2021-11-23'),
(49, 26, 6, '2', 2, '2021-11-23'),
(50, 26, 6, '3', 3, '2021-11-23'),
(51, 26, 6, '4', 4, '2021-11-23'),
(52, 26, 6, '5', 5, '2021-11-23'),
(53, 25, 6, 'Exelente producto', 1, '2021-11-23'),
(54, 33, 16, 'capo', 1, '2021-11-23'),
(55, 33, 16, 'capo', 2, '2021-11-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre`) VALUES
(1, 'Babolat');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `descripcion`, `precio`, `id_marca`, `id_categoria`) VALUES
(25, 'Test', 333, 1, 15),
(26, 'TESTSITO', 4444, 1, 16),
(27, 'Arre', 3341, 1, 13),
(28, 'Rakitich', 3334, 1, 13),
(29, 'raq', 2323, 1, 13),
(30, 'tete', 343, 1, 13),
(31, 'asd2323', 4, 1, 13),
(32, 'mono', 22, 1, 13),
(33, 'werwrw', 4444, 1, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `tipo`) VALUES
(1, 'NORMAL'),
(2, 'ADMIN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `email`, `password`, `id_rol`) VALUES
(1, 'admin', 'admin@demo.com', '$2y$10$K2HNNpbnkKR2KeVIn5ANK.FlNGRWi2A5G1ar9h2V.WCXSHuwlHJcG', 2),
(5, 'test@test.com', 'test@test.com', '$2y$10$zDDkJ6xUvec8nOQZvfOg6.VcpO5W/pTFBjr9d8/PCbGP9GRdmDECe', 2),
(6, 't@t', 't@t', '$2y$10$sGMyC13OYJJN1a9BtKEfbOtkcMtBD47j0uLQOHXsVc2y8ly/jLvDG', 1),
(7, 'test@1', 'test@1', '$2y$10$kCCKI9KjvaEnuerkdtcVDuTDRp6i6n2CorE/bqMyPowpJOG8G867S', 1),
(16, 'probando', 'probando@d', '$2y$10$qoHW24wSKeyuqpc56mz.GOqGIklN/Oqp8DuhumvYWEF9M44OlunTS', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
