-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2019 a las 16:21:17
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prensa_magallanes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario_liga`
--

CREATE TABLE `calendario_liga` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `home_club` int(2) NOT NULL,
  `visitante` int(2) NOT NULL,
  `carreras_hc` int(2) NOT NULL,
  `carreras_v` int(2) NOT NULL,
  `tipo_temporada` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `temporada` varchar(9) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `calendario_liga`
--

INSERT INTO `calendario_liga` (`id`, `fecha`, `home_club`, `visitante`, `carreras_hc`, `carreras_v`, `tipo_temporada`, `temporada`) VALUES
(1, '2019-11-05', 1, 3, 3, 2, 'TR', '2019-2020'),
(2, '2019-11-05', 6, 8, 3, 6, 'TR', '2019-2020'),
(3, '2019-11-05', 4, 2, 5, 3, 'TR', '2019-2020'),
(4, '2019-11-05', 5, 7, 3, 5, 'TR', '2019-2020'),
(5, '2019-11-06', 1, 2, 4, 9, 'TR', '2019-2020'),
(6, '2019-11-06', 5, 7, 13, 4, 'TR', '2019-2020'),
(7, '2019-11-06', 4, 3, 3, 4, 'TR', '2019-2020'),
(8, '2019-11-06', 8, 6, 3, 2, 'TR', '2019-2020'),
(9, '2019-11-07', 6, 1, 8, 3, 'TR', '2019-2020'),
(10, '2019-11-07', 4, 3, 8, 0, 'TR', '2019-2020'),
(11, '2019-11-07', 5, 7, 11, 13, 'TR', '2019-2020'),
(12, '2019-11-07', 8, 2, 4, 6, 'TR', '2019-2020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario_mag`
--

CREATE TABLE `calendario_mag` (
  `id` int(11) NOT NULL,
  `nro_juego` int(10) NOT NULL,
  `tipo_juego` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `tiempo` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `asistencia` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Calendario Completo de Magallanes';

--
-- Volcado de datos para la tabla `calendario_mag`
--

INSERT INTO `calendario_mag` (`id`, `nro_juego`, `tipo_juego`, `tiempo`, `asistencia`) VALUES
(1, 1, 'L', '3:31', 8342),
(5, 2, 'L', '4:41', 3515),
(9, 3, 'V', '3:35', 8244);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(2) NOT NULL,
  `nombrec` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `abreviatura` char(3) COLLATE utf8_spanish_ci NOT NULL,
  `lugar` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `nombrec`, `nombre`, `abreviatura`, `lugar`) VALUES
(1, 'Navegantes del Magallanes', 'Navegantes', 'MAG', 'Valencia'),
(2, 'Águilas del Zulia', 'Águilas', 'ZUL', 'Maracaibo'),
(3, 'Bravos de Margarita', 'Bravos', 'BRA', 'Margarita'),
(4, 'Cardenales de Lara', 'Cardenales', 'CAR', 'Barquisimeto'),
(5, 'Caribes de Anzoátegui', 'Caribes', 'ANZ', 'Puerto la Cruz'),
(6, 'Leones del Caracas', 'Leones', 'LEO', 'Caracas'),
(7, 'Tiburones de la Guaira', 'Tiburones', 'TIB', 'Caracas'),
(8, 'Tigres de Aragua', 'Tigres', 'ARA', 'Maracay');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calendario_liga`
--
ALTER TABLE `calendario_liga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_club` (`home_club`,`visitante`),
  ADD KEY `visitante` (`visitante`);

--
-- Indices de la tabla `calendario_mag`
--
ALTER TABLE `calendario_mag`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calendario_liga`
--
ALTER TABLE `calendario_liga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calendario_liga`
--
ALTER TABLE `calendario_liga`
  ADD CONSTRAINT `calendario_liga_ibfk_1` FOREIGN KEY (`home_club`) REFERENCES `equipos` (`id`),
  ADD CONSTRAINT `calendario_liga_ibfk_2` FOREIGN KEY (`visitante`) REFERENCES `equipos` (`id`);

--
-- Filtros para la tabla `calendario_mag`
--
ALTER TABLE `calendario_mag`
  ADD CONSTRAINT `calendario_mag_ibfk_1` FOREIGN KEY (`id`) REFERENCES `calendario_liga` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
