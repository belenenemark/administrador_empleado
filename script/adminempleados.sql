-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-12-2020 a las 23:47:01
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adminempleados`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diseñador`
--

CREATE TABLE `diseñador` (
  `id` int(11) NOT NULL,
  `tipo_diseniador` varchar(50) NOT NULL,
  `dni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `diseñador`
--

INSERT INTO `diseñador` (`id`, `tipo_diseniador`, `dni`) VALUES
(5, '2', 3899999);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `tipo_empleado` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `dni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`, `apellido`, `edad`, `tipo_empleado`, `id_empresa`, `dni`) VALUES
(3, 'belen', 'enemark', 26, 2, 1, 38106534),
(4, 'matias', 'gonzalez', 28, 1, 1, 37236492),
(5, 'Martin', 'Perez', 38, 2, 1, 3899999),
(6, 'Lucas', 'Gonzalez', 38, 1, 1, 3899995),
(7, 'Lucas', 'Gonzalez', 38, 1, 1, 3899994),
(8, 'Lucas', 'Gonzalez', 38, 1, 1, 3899997),
(9, 'Lucas', 'Gonzalez', 38, 1, 1, 3899997);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre`) VALUES
(1, 'idear_soft'),
(6, 'summa solution'),
(2, 'summa solutions');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programador`
--

CREATE TABLE `programador` (
  `id` int(11) NOT NULL,
  `lenguaje_programacion` varchar(50) NOT NULL,
  `dni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programador`
--

INSERT INTO `programador` (`id`, `lenguaje_programacion`, `dni`) VALUES
(8, 'php', 3899997),
(9, 'php', 3899997);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `diseñador`
--
ALTER TABLE `diseñador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`dni`) USING BTREE;

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`,`dni`) USING BTREE,
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `programador`
--
ALTER TABLE `programador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`dni`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `diseñador`
--
ALTER TABLE `diseñador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `programador`
--
ALTER TABLE `programador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `diseñador`
--
ALTER TABLE `diseñador`
  ADD CONSTRAINT `diseñador_ibfk_1` FOREIGN KEY (`id`) REFERENCES `empleado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `programador`
--
ALTER TABLE `programador`
  ADD CONSTRAINT `programador_ibfk_1` FOREIGN KEY (`id`) REFERENCES `empleado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
