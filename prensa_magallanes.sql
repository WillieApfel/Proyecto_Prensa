-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2019 a las 01:23:19
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
-- Estructura de tabla para la tabla `arbitraje`
--

CREATE TABLE `arbitraje` (
  `id` int(11) NOT NULL,
  `principal` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `primera` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `segunda` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tercera` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `rv` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `arbitraje`
--

INSERT INTO `arbitraje` (`id`, `principal`, `primera`, `segunda`, `tercera`, `rv`) VALUES
(1, 'R. Moreno', 'E. Pacheco', 'O. Pimentel', 'A. Barrios', 'D. Sequera'),
(2, 'J. Gómez', 'E. Pacheco', 'J. Santiago', 'W. Medina', 'A. Barrios'),
(3, 'C. Leal', 'J. Santiago', 'J. Gómez', 'J. Prochoron', 'D. Pacheco'),
(4, 'J. Terán', 'L. Nieves', 'K. García', 'A. Barrios', 'W. Medina'),
(5, 'L. Nieves', 'K. Garcia', 'J. Terán', 'C. Rangel', 'J. Linares'),
(6, 'K. García', 'J. Terán', 'L. Nieves', 'W. Medina', 'D. Sequera'),
(7, 'J. Terán', 'L. Nieves', 'K. García', 'A. Barrios', 'D. Sequera'),
(8, 'L. Nieves', 'K. García', 'J. Terán', 'C. Rangel', 'A. Barrios'),
(9, 'R. Moreno', 'O. Pimentel ', 'E. Pachecho', 'C. Rangel', 'W. Medina'),
(10, 'C. Leal', 'J. Santiago', 'J. Gómez', 'J. Bermúdez', 'C. Rodríguez'),
(11, 'J. Santiago', 'J. Gómez', 'C. Leal', 'J. Bermúdez', 'C. Rodríguez'),
(12, 'J. Gómez', 'C. Leal', 'J. Santiago', 'C. Rodríguez', 'J. Bermúdez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario_liga`
--

CREATE TABLE `calendario_liga` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `home_club` int(2) NOT NULL,
  `visitante` int(2) NOT NULL,
  `carreras_hc` int(2) NOT NULL,
  `carreras_v` int(2) NOT NULL,
  `temp` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `calendario_liga`
--

INSERT INTO `calendario_liga` (`id`, `fecha`, `hora`, `home_club`, `visitante`, `carreras_hc`, `carreras_v`, `temp`, `status`) VALUES
(1, '2019-11-05', '18:00:00', 1, 3, 3, 2, '1', 1),
(2, '2019-11-06', '18:00:00', 1, 2, 4, 9, '1', 1),
(3, '2019-11-07', '18:00:00', 6, 1, 8, 3, '1', 1),
(4, '2019-11-08', '18:00:00', 1, 4, 5, 1, '1', 1),
(5, '2019-11-09', '16:00:00', 4, 1, 13, 9, '1', 1),
(6, '2019-11-10', '17:30:00', 1, 2, 4, 5, '1', 1),
(7, '2019-11-12', '18:00:00', 1, 5, 4, 3, '1', 1),
(8, '2019-11-13', '18:00:00', 1, 5, 7, 4, '1', 1),
(9, '2019-11-14', '18:00:00', 1, 6, 6, 1, '1', 1),
(10, '2019-11-15', '18:00:00', 3, 1, 0, 0, '1', 1),
(11, '2019-11-16', '18:00:00', 3, 1, 0, 0, '1', 1),
(12, '2019-11-17', '17:00:00', 3, 1, 0, 0, '1', 1),
(13, '2019-11-19', '18:00:00', 1, 8, 0, 0, '1', 1),
(14, '2019-11-20', '18:00:00', 7, 1, 0, 0, '1', 1),
(15, '2019-11-21', '18:00:00', 1, 7, 0, 0, '1', 1),
(16, '2019-11-22', '18:00:00', 4, 1, 0, 0, '1', 1),
(17, '2019-11-23', '17:30:00', 1, 3, 0, 0, '1', 1),
(18, '2019-11-24', '18:00:00', 1, 2, 0, 0, '1', 1),
(19, '2019-11-26', '00:00:00', 6, 1, 0, 0, '1', 1),
(20, '2019-11-27', '00:00:00', 7, 1, 0, 0, '1', 1),
(21, '2019-11-28', '00:00:00', 1, 6, 0, 0, '1', 1),
(22, '2019-11-29', '00:00:00', 1, 4, 0, 0, '1', 1),
(23, '2019-11-30', '00:00:00', 8, 1, 0, 0, '1', 1),
(24, '2019-12-01', '00:00:00', 6, 1, 0, 0, '1', 1),
(25, '2019-12-04', '00:00:00', 8, 1, 0, 0, '1', 1),
(26, '2019-12-06', '00:00:00', 1, 6, 0, 0, '1', 1),
(27, '2019-12-07', '00:00:00', 5, 1, 0, 0, '1', 1),
(28, '2019-12-08', '00:00:00', 5, 1, 0, 0, '1', 1),
(29, '2019-12-09', '00:00:00', 5, 1, 0, 0, '1', 1),
(30, '2019-12-11', '00:00:00', 1, 8, 0, 0, '1', 1),
(31, '2019-12-12', '00:00:00', 7, 1, 0, 0, '1', 1),
(32, '2019-12-13', '00:00:00', 1, 7, 0, 0, '1', 1),
(33, '2019-12-14', '00:00:00', 2, 1, 0, 0, '1', 1),
(34, '2019-12-15', '00:00:00', 2, 1, 0, 0, '1', 1),
(35, '2019-12-16', '00:00:00', 2, 1, 0, 0, '1', 1),
(36, '2019-12-18', '00:00:00', 1, 3, 0, 0, '1', 1),
(37, '2019-12-20', '00:00:00', 1, 4, 0, 0, '1', 1),
(38, '2019-11-21', '00:00:00', 4, 1, 0, 0, '1', 1),
(39, '2019-12-22', '00:00:00', 1, 8, 0, 0, '1', 1),
(40, '2019-12-27', '00:00:00', 8, 1, 0, 0, '1', 1),
(41, '2019-12-28', '00:00:00', 1, 5, 0, 0, '1', 1),
(42, '2019-12-29', '00:00:00', 1, 7, 0, 0, '1', 1),
(43, '2019-11-05', '00:00:00', 6, 8, 3, 6, '1', 1),
(44, '2019-11-05', '00:00:00', 4, 2, 5, 3, '1', 1),
(45, '2019-11-05', '00:00:00', 5, 7, 3, 5, '1', 1),
(46, '2019-11-06', '00:00:00', 5, 7, 13, 4, '1', 1),
(47, '2019-11-06', '00:00:00', 4, 3, 3, 4, '1', 1),
(48, '2019-11-06', '00:00:00', 8, 6, 3, 2, '1', 1),
(49, '2019-11-07', '00:00:00', 4, 3, 8, 0, '1', 1),
(50, '2019-11-07', '00:00:00', 5, 7, 11, 13, '1', 1),
(51, '2019-11-07', '00:00:00', 8, 2, 4, 6, '1', 1),
(52, '2019-11-08', '00:00:00', 7, 2, 3, 4, '1', 1),
(53, '2019-11-08', '00:00:00', 8, 3, 6, 2, '1', 1),
(54, '2019-11-08', '00:00:00', 5, 6, 2, 5, '1', 1),
(55, '2019-11-09', '00:00:00', 7, 2, 2, 3, '1', 1),
(56, '2019-11-09', '00:00:00', 8, 3, 1, 2, '1', 1),
(57, '2019-11-09', '00:00:00', 5, 6, 15, 2, '1', 1),
(58, '2019-11-10', '00:00:00', 7, 3, 3, 13, '1', 1),
(59, '2019-11-10', '00:00:00', 8, 4, 2, 3, '1', 1),
(60, '2019-11-10', '00:00:00', 5, 6, 5, 4, '1', 1),
(61, '2019-11-12', '00:00:00', 2, 8, 3, 5, '1', 1),
(62, '2019-11-12', '00:00:00', 6, 7, 10, 6, '1', 1),
(63, '2019-11-12', '00:00:00', 3, 4, 4, 8, '1', 1),
(64, '2019-11-13', '00:00:00', 2, 8, 3, 2, '1', 1),
(65, '2019-11-13', '00:00:00', 7, 6, 3, 2, '1', 1),
(66, '2019-11-13', '00:00:00', 3, 4, 2, 3, '1', 1),
(67, '2019-11-13', '00:00:00', 2, 8, 4, 3, '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario_mag`
--

CREATE TABLE `calendario_mag` (
  `id` int(11) NOT NULL,
  `nro_juego` int(10) NOT NULL,
  `tipo_juego` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `tv` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tiempo` varchar(4) COLLATE utf8_spanish_ci NOT NULL,
  `asistencia` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Calendario Completo de Magallanes';

--
-- Volcado de datos para la tabla `calendario_mag`
--

INSERT INTO `calendario_mag` (`id`, `nro_juego`, `tipo_juego`, `tv`, `tiempo`, `asistencia`) VALUES
(1, 1, 'L', 'Direct TV', '3:31', 8342),
(2, 2, 'L', 'IVC', '4:41', 3515),
(3, 3, 'V', 'IVC-TLT', '3:35', 8244),
(4, 4, 'L', 'TLT', '3:20', 4050),
(5, 5, 'V', 'TLT', '3:41', 4415),
(6, 6, 'L', 'Direct TV', '4:40', 3984),
(7, 7, 'L', 'Direct TV', '3:39', 3541),
(8, 8, 'L', 'IVC', '', 0),
(9, 9, 'L', 'MTV-IVC', '', 0),
(10, 10, 'V', 'Direct TV', '', 0),
(11, 11, 'V', 'IVC', '', 0),
(12, 12, 'V', 'IVC', '', 0),
(13, 13, 'L', 'TLT', '', 0),
(14, 14, 'V', 'TLT', '', 0),
(15, 15, 'L', 'TLT', '', 0),
(16, 16, 'V', 'TLT', '', 0),
(17, 17, 'L', 'IVC', '', 0),
(18, 18, 'L', 'TLT', '', 0),
(19, 19, 'V', '', '', 0),
(20, 20, 'V', '', '', 0),
(21, 21, 'L', '', '', 0),
(22, 22, 'L', '', '', 0),
(23, 23, 'V', '', '', 0),
(24, 24, 'V', '', '', 0),
(25, 25, 'V', '', '', 0),
(26, 26, 'L', '', '', 0),
(27, 27, 'V', '', '', 0),
(28, 28, 'V', '', '', 0),
(29, 29, 'V', '', '', 0),
(30, 30, 'L', '', '', 0),
(31, 31, 'V', '', '', 0),
(32, 32, 'L', '', '', 0),
(33, 33, 'V', '', '', 0),
(34, 34, 'V', '', '', 0),
(35, 35, 'V', '', '', 0),
(36, 36, 'L', '', '', 0),
(37, 37, 'L', '', '', 0),
(38, 38, 'V', '', '', 0),
(39, 39, 'L', '', '', 0),
(40, 40, 'V', '', '', 0),
(41, 41, 'L', '', '', 0),
(42, 42, 'L', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(2) NOT NULL,
  `nombrec` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `abreviatura` char(3) COLLATE utf8_spanish_ci NOT NULL,
  `lugar` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `estadio` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `nombrec`, `nombre`, `abreviatura`, `lugar`, `estadio`) VALUES
(1, 'Navegantes del Magallanes', 'Navegantes', 'MAG', 'Valencia', 'José Bernardo Pérez'),
(2, 'Águilas del Zulia', 'Águilas', 'ZUL', 'Maracaibo', 'Luis Aparicio \"El Grande\"'),
(3, 'Bravos de Margarita', 'Bravos', 'BRA', 'Porlamar', 'Nueva Esparta'),
(4, 'Cardenales de Lara', 'Cardenales', 'CAR', 'Barquisimeto', 'Antonio Herrera Gutiérrez'),
(5, 'Caribes de Anzoátegui', 'Caribes', 'ANZ', 'Puerto la Cruz', 'Alfonso \"Chico\" Carrasquel'),
(6, 'Leones del Caracas', 'Leones', 'LEO', 'Caracas', 'Universitario'),
(7, 'Tiburones de la Guaira', 'Tiburones', 'TIB', 'Caracas', 'Universitario'),
(8, 'Tigres de Aragua', 'Tigres', 'ARA', 'Maracay', 'José Pérez Colmenares');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redaccion`
--

CREATE TABLE `redaccion` (
  `id` int(11) NOT NULL,
  `redaccion` longtext COLLATE utf8_spanish_ci NOT NULL,
  `abridores` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `duelo` longtext COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `redaccion`
--

INSERT INTO `redaccion` (`id`, `redaccion`, `abridores`, `duelo`, `fecha`) VALUES
(16, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Yohan vs Junior Guerra', '', '2019-11-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roster`
--

CREATE TABLE `roster` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nro` int(3) NOT NULL,
  `posicion` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `pos_sec` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `bat` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `throw` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `h_feet` int(2) NOT NULL,
  `h_inches` int(2) NOT NULL,
  `w_lbs` int(3) NOT NULL,
  `birthday` date NOT NULL,
  `birthplace` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `org` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `liga` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roster`
--

INSERT INTO `roster` (`id`, `nombre`, `apellido`, `nro`, `posicion`, `pos_sec`, `bat`, `throw`, `h_feet`, `h_inches`, `w_lbs`, `birthday`, `birthplace`, `org`, `liga`) VALUES
(1, 'Yohan', 'Pino', 30, 'RHP', '', 'R', 'R', 6, 2, 190, '1986-12-26', 'Turmero, Aragua', 'Cacaoteros', 'LNBB'),
(2, 'Carlos', 'Alvarado', 70, 'RHP', '', 'R', 'R', 6, 4, 175, '1989-10-22', 'Valencia, Carabobo', '-', '-'),
(3, 'Iván', 'Andueza', 67, 'LHP', '', 'L', 'L', 5, 11, 180, '1995-02-07', 'Barquisimeto, Lara', 'Lanceros', 'LNBB'),
(4, 'Jhon', 'García', 56, 'RHP', '', 'R', 'R', 6, 2, 200, '1987-05-19', 'Tinaquillo, Cojedes', '-', '-'),
(5, 'Silfredo', 'García', 61, 'RHP', '', 'R', 'R', 6, 2, 170, '1991-07-19', 'Pto Cabello, Carabobo', '-', '-'),
(6, 'Eliezer', 'García', 85, 'LHP', '', 'L', 'L', 6, 1, 185, '1984-06-07', 'Bolívar', '-', '-'),
(7, 'Danny', 'Hernández', 72, 'RHP', '', 'R', 'R', 6, 2, 180, '1985-11-19', 'Valencia, Carabobo', '-', '-'),
(8, 'Edgar', 'Ibarra', 99, 'LHP', '', 'L', 'L', 6, 0, 190, '1989-05-31', 'Valencia, Carabobo', '-', '-'),
(9, 'Elis', 'Jiménez', 26, 'RHP', '', 'R', 'R', 6, 2, 195, '1992-06-26', 'Valencia, Carabobo', '-', '-'),
(10, 'Ronard', 'Machado', 97, 'RHP', '', 'R', 'R', 6, 3, 191, '1998-09-03', 'Boca de Aroa, Falcón', 'Cachorros', 'LNBB'),
(11, 'Luis', 'Ramírez', 55, 'LHP', '', 'L', 'L', 5, 10, 160, '1995-11-27', 'Caracas, D.C.', '-', '-'),
(12, 'Jorge', 'Rondón', 44, 'RHP', '', 'R', 'R', 6, 1, 215, '1988-02-16', 'Calabozo, Guárico', 'Musashi', 'BCL'),
(13, 'Kevin', 'Sosa', 42, 'RHP', '', 'R', 'R', 6, 1, 192, '1995-01-06', 'Acarigua, Portuguesa', '-', '-'),
(14, 'Josmil', 'Pinto', 36, 'C', '1B', 'R', 'R', 5, 11, 225, '1989-03-31', 'Valencia, Carabobo', '-', '-'),
(15, 'Arturo', 'Nieto', 63, 'C', '', 'R', 'R', 6, 2, 195, '1992-12-09', 'Maracay, Aragua', 'Miners', 'Frontier League'),
(16, 'Juan C.', 'Torres', 60, 'C', '1B', 'R', 'R', 6, 1, 180, '1988-10-07', 'Valencia, Carabobo', 'Rojos', 'LNM'),
(17, 'Manuel', 'Boscán', 54, 'C', '1B', 'S', 'R', 6, 0, 160, '1993-03-10', 'Maracaibo, Zulia', 'Milkmen', 'American Assoc.'),
(18, 'Ronny', 'Cedeño', 5, 'INF', '', 'R', 'R', 6, 2, 195, '1983-02-02', 'Pto Cabello, Carabobo', '-', '-'),
(19, 'Héctor', 'García', 24, 'INF', '', 'R', 'R', 6, 2, 210, '1990-03-16', 'Caracas, D.C.', 'Musashi', 'BCL'),
(20, 'Anthony', 'Pereira', 88, 'INF', '', 'R', 'R', 6, 0, 195, '1996-11-28', 'Tocuyito, Carabobo', '-', '-'),
(21, 'Jackson', 'Valera', 71, '1B', 'OF', 'R', 'R', 6, 1, 175, '1992-04-08', 'Valencia, Carabobo', 'Shiga', 'BCL'),
(22, 'Wilfred', 'Vivas', 8, 'UT', '', 'R', 'R', 5, 11, 160, '1989-11-08', 'Maracay, Aragua', '-', '-'),
(23, 'Wuilmer', 'Becerra', 83, 'OF', '', 'R', 'R', 6, 3, 243, '1994-10-01', 'Caracas, D.C.', '-', '-'),
(24, 'Diego', 'Cedeño', 43, 'OF', '', 'L', 'L', 5, 11, 160, '1992-05-19', 'Maracay, Aragua', '-', '-'),
(25, 'Ricardo', 'Marcano', 31, 'OF', '', 'L', 'R', 6, 2, 190, '1994-10-18', 'Miranda, Venezuela', 'UCV', 'LNBB'),
(26, 'Alberth', 'Martínez', 75, 'OF', '', 'R', 'R', 6, 1, 170, '1991-01-23', 'San Félix, Bolívar', 'Aigles', 'Can-Am Assoc'),
(27, 'Yorman', 'Rodríguez', 86, 'OF', '', 'R', 'R', 6, 3, 210, '1992-08-15', 'Ocumare de la Costa', 'Delfines', 'LIB'),
(28, 'Manny', 'Acosta', 73, 'RHP', '', 'R', 'R', 6, 4, 215, '1981-05-01', 'Colón, Panama', 'Bravos', 'LMB'),
(29, 'Eduard', 'Reyes', 9, 'RHP', '', 'R', 'R', 6, 0, 175, '1990-08-23', 'Bonao, R.D.', 'Jackals', 'Can-Am Assoc.'),
(30, 'Adrián', 'Salcedo', 92, 'RHP', '', 'R', 'R', 6, 4, 200, '1991-02-05', 'Moca, R.D.', 'Baycats', 'IBL'),
(31, 'Edgar', 'Muñoz', 77, 'INF', '', 'R', 'R', 5, 9, 150, '1991-10-30', 'Cristobal, Panamá', 'Algodoneros', 'LMB'),
(32, 'Rosa', 'Garabez', 65, 'INF', '', 'R', 'R', 6, 2, 165, '1989-10-12', 'Higüey, R.D.', 'Leones', 'LMB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roster_equipo`
--

CREATE TABLE `roster_equipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nro` int(3) NOT NULL,
  `posicion` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `pos_sec` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `bat` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `throw` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `h_feet` int(2) NOT NULL,
  `h_inches` int(2) NOT NULL,
  `w_lbs` int(3) NOT NULL,
  `birthday` date NOT NULL,
  `birthplace` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `org` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `liga` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roster_equipo`
--

INSERT INTO `roster_equipo` (`id`, `nombre`, `apellido`, `nro`, `posicion`, `pos_sec`, `bat`, `throw`, `h_feet`, `h_inches`, `w_lbs`, `birthday`, `birthplace`, `org`, `liga`) VALUES
(1, 'Yohan', 'Pino', 30, 'RHP', '', 'R', 'R', 6, 2, 190, '1986-12-26', 'Turmero, Aragua', 'Cacaoteros', 'LNBB'),
(2, 'Carlos', 'Alvarado', 70, 'RHP', '', 'R', 'R', 6, 4, 175, '1989-10-22', 'Valencia, Carabobo', '-', '-'),
(3, 'Iván', 'Andueza', 67, 'LHP', '', 'L', 'L', 5, 11, 180, '1995-02-07', 'Barquisimeto, Lara', 'Lanceros', 'LNBB'),
(4, 'Jhon', 'García', 56, 'RHP', '', 'R', 'R', 6, 2, 200, '1987-05-19', 'Tinaquillo, Cojedes', '-', '-'),
(5, 'Silfredo', 'García', 61, 'RHP', '', 'R', 'R', 6, 2, 170, '1991-07-19', 'Pto Cabello, Carabobo', '-', '-'),
(6, 'Eliezer', 'García', 85, 'LHP', '', 'L', 'L', 6, 1, 185, '1984-06-07', 'Bolívar', '-', '-'),
(7, 'Danny', 'Hernández', 72, 'RHP', '', 'R', 'R', 6, 2, 180, '1985-11-19', 'Valencia, Carabobo', '-', '-'),
(8, 'Edgar', 'Ibarra', 99, 'LHP', '', 'L', 'L', 6, 0, 190, '1989-05-31', 'Valencia, Carabobo', '-', '-'),
(9, 'Elis', 'Jiménez', 26, 'RHP', '', 'R', 'R', 6, 2, 195, '1992-06-26', 'Valencia, Carabobo', '-', '-'),
(10, 'Ronard', 'Machado', 97, 'RHP', '', 'R', 'R', 6, 3, 191, '1998-09-03', 'Boca de Aroa, Falcón', 'Cachorros', 'LNBB'),
(11, 'Luis', 'Ramírez', 55, 'LHP', '', 'L', 'L', 5, 10, 160, '1995-11-27', 'Caracas, D.C.', '-', '-'),
(12, 'Jorge', 'Rondón', 44, 'RHP', '', 'R', 'R', 6, 1, 215, '1988-02-16', 'Calabozo, Guárico', 'Musashi', 'BCL'),
(13, 'Kevin', 'Sosa', 42, 'RHP', '', 'R', 'R', 6, 1, 192, '1995-01-06', 'Acarigua, Portuguesa', '-', '-'),
(14, 'Josmil', 'Pinto', 36, 'C', '1B', 'R', 'R', 5, 11, 225, '1989-03-31', 'Valencia, Carabobo', '-', '-'),
(15, 'Arturo', 'Nieto', 63, 'C', '', 'R', 'R', 6, 2, 195, '1992-12-09', 'Maracay, Aragua', 'Miners', 'Frontier League'),
(16, 'Juan C.', 'Torres', 60, 'C', '1B', 'R', 'R', 6, 1, 180, '1988-10-07', 'Valencia, Carabobo', 'Rojos', 'LNM'),
(17, 'Manuel', 'Boscán', 54, 'C', '1B', 'S', 'R', 6, 0, 160, '1993-03-10', 'Maracaibo, Zulia', 'Milkmen', 'American Assoc.'),
(18, 'Ronny', 'Cedeño', 5, 'INF', '', 'R', 'R', 6, 2, 195, '1983-02-02', 'Pto Cabello, Carabobo', '-', '-'),
(19, 'Héctor', 'García', 24, 'INF', '', 'R', 'R', 6, 2, 210, '1990-03-16', 'Caracas, D.C.', 'Musashi', 'BCL'),
(20, 'Anthony', 'Pereira', 88, 'INF', '', 'R', 'R', 6, 0, 195, '1996-11-28', 'Tocuyito, Carabobo', '-', '-'),
(21, 'Jackson', 'Valera', 71, '1B', 'OF', 'R', 'R', 6, 1, 175, '1992-04-08', 'Valencia, Carabobo', 'Shiga', 'BCL'),
(22, 'Wilfred', 'Vivas', 8, 'UT', '', 'R', 'R', 5, 11, 160, '1989-11-08', 'Maracay, Aragua', '-', '-'),
(23, 'Wuilmer', 'Becerra', 83, 'OF', '', 'R', 'R', 6, 3, 243, '1994-10-01', 'Caracas, D.C.', '-', '-'),
(24, 'Diego', 'Cedeño', 43, 'OF', '', 'L', 'L', 5, 11, 160, '1992-05-19', 'Maracay, Aragua', '-', '-'),
(25, 'Ricardo', 'Marcano', 31, 'OF', '', 'L', 'R', 6, 2, 190, '1994-10-18', 'Miranda, Venezuela', 'UCV', 'LNBB'),
(26, 'Alberth', 'Martínez', 75, 'OF', '', 'R', 'R', 6, 1, 170, '1991-01-23', 'San Félix, Bolívar', 'Aigles', 'Can-Am Assoc'),
(27, 'Yorman', 'Rodríguez', 86, 'OF', '', 'R', 'R', 6, 3, 210, '1992-08-15', 'Ocumare de la Costa', 'Delfines', 'LIB'),
(28, 'Manny', 'Acosta', 73, 'RHP', '', 'R', 'R', 6, 4, 215, '1981-05-01', 'Colón, Panama', 'Bravos', 'LMB'),
(29, 'Eduard', 'Reyes', 9, 'RHP', '', 'R', 'R', 6, 0, 175, '1990-08-23', 'Bonao, R.D.', 'Jackals', 'Can-Am Assoc.'),
(30, 'Adrián', 'Salcedo', 92, 'RHP', '', 'R', 'R', 6, 4, 200, '1991-02-05', 'Moca, R.D.', 'Baycats', 'IBL'),
(31, 'Edgar', 'Muñoz', 77, 'INF', '', 'R', 'R', 5, 9, 150, '1991-10-30', 'Cristobal, Panamá', 'Algodoneros', 'LMB'),
(32, 'Rosa', 'Garabez', 65, 'INF', '', 'R', 'R', 6, 2, 165, '1989-10-12', 'Higüey, R.D.', 'Leones', 'LMB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roster_week`
--

CREATE TABLE `roster_week` (
  `id` int(11) NOT NULL,
  `jugador` int(11) NOT NULL,
  `semana_inicio` date NOT NULL,
  `semana_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roster_week`
--

INSERT INTO `roster_week` (`id`, `jugador`, `semana_inicio`, `semana_fin`) VALUES
(1, 1, '2019-11-11', '2019-11-17'),
(2, 2, '2019-11-11', '2019-11-17'),
(3, 3, '2019-11-11', '2019-11-17'),
(4, 4, '2019-11-11', '2019-11-17'),
(5, 5, '2019-11-11', '2019-11-17'),
(6, 6, '2019-11-11', '2019-11-17'),
(7, 7, '2019-11-11', '2019-11-17'),
(8, 8, '2019-11-11', '2019-11-17'),
(9, 9, '2019-11-11', '2019-11-17'),
(10, 10, '2019-11-11', '2019-11-17'),
(11, 11, '2019-11-11', '2019-11-17'),
(12, 12, '2019-11-11', '2019-11-17'),
(13, 13, '2019-11-11', '2019-11-17'),
(14, 14, '2019-11-11', '2019-11-17'),
(15, 15, '2019-11-11', '2019-11-17'),
(16, 16, '2019-11-11', '2019-11-17'),
(17, 17, '2019-11-11', '2019-11-17'),
(18, 18, '2019-11-11', '2019-11-17'),
(19, 19, '2019-11-11', '2019-11-17'),
(20, 20, '2019-11-11', '2019-11-17'),
(21, 21, '2019-11-11', '2019-11-17'),
(22, 22, '2019-11-11', '2019-11-17'),
(23, 23, '2019-11-11', '2019-11-17'),
(24, 24, '2019-11-11', '2019-11-17'),
(25, 25, '2019-11-11', '2019-11-17'),
(26, 26, '2019-11-11', '2019-11-17'),
(27, 27, '2019-11-11', '2019-11-17'),
(28, 28, '2019-11-11', '2019-11-17'),
(29, 29, '2019-11-11', '2019-11-17'),
(30, 30, '2019-11-11', '2019-11-17'),
(31, 31, '2019-11-11', '2019-11-17'),
(32, 32, '2019-11-11', '2019-11-17'),
(33, 1, '2019-11-04', '2019-11-10'),
(34, 2, '2019-11-04', '2019-11-10'),
(35, 3, '2019-11-04', '2019-11-10'),
(36, 4, '2019-11-04', '2019-11-10'),
(37, 5, '2019-11-04', '2019-11-10'),
(38, 6, '2019-11-04', '2019-11-10'),
(39, 7, '2019-11-04', '2019-11-10'),
(40, 8, '2019-11-04', '2019-11-10'),
(41, 9, '2019-11-04', '2019-11-10'),
(42, 10, '2019-11-04', '2019-11-10'),
(43, 11, '2019-11-04', '2019-11-10'),
(44, 12, '2019-11-04', '2019-11-10'),
(45, 13, '2019-11-04', '2019-11-10'),
(46, 14, '2019-11-04', '2019-11-10'),
(47, 15, '2019-11-04', '2019-11-10'),
(48, 16, '2019-11-04', '2019-11-10'),
(49, 17, '2019-11-04', '2019-11-10'),
(50, 18, '2019-11-04', '2019-11-10'),
(51, 19, '2019-11-04', '2019-11-10'),
(52, 20, '2019-11-04', '2019-11-10'),
(53, 21, '2019-11-04', '2019-11-10'),
(54, 22, '2019-11-04', '2019-11-10'),
(55, 23, '2019-11-04', '2019-11-10'),
(56, 24, '2019-11-04', '2019-11-10'),
(57, 25, '2019-11-04', '2019-11-10'),
(58, 26, '2019-11-04', '2019-11-10'),
(59, 27, '2019-11-04', '2019-11-10'),
(60, 28, '2019-11-04', '2019-11-10'),
(61, 29, '2019-11-04', '2019-11-10'),
(62, 30, '2019-11-04', '2019-11-10'),
(63, 31, '2019-11-04', '2019-11-10'),
(64, 32, '2019-11-04', '2019-11-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporada`
--

CREATE TABLE `temporada` (
  `id` int(11) NOT NULL,
  `tipo_temp` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `inicio` date NOT NULL,
  `fin` date NOT NULL,
  `temporada` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `temporada`
--

INSERT INTO `temporada` (`id`, `tipo_temp`, `inicio`, `fin`, `temporada`) VALUES
(1, 'TR', '2019-11-05', '2019-12-29', '2019-2020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trofeos`
--

CREATE TABLE `trofeos` (
  `lvbp` int(4) NOT NULL,
  `caribe` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `trofeos`
--

INSERT INTO `trofeos` (`lvbp`, `caribe`) VALUES
(12, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arbitraje`
--
ALTER TABLE `arbitraje`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `redaccion`
--
ALTER TABLE `redaccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roster`
--
ALTER TABLE `roster`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roster_equipo`
--
ALTER TABLE `roster_equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roster_week`
--
ALTER TABLE `roster_week`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jugador` (`jugador`);

--
-- Indices de la tabla `temporada`
--
ALTER TABLE `temporada`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arbitraje`
--
ALTER TABLE `arbitraje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `calendario_liga`
--
ALTER TABLE `calendario_liga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `redaccion`
--
ALTER TABLE `redaccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `roster`
--
ALTER TABLE `roster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `roster_equipo`
--
ALTER TABLE `roster_equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `roster_week`
--
ALTER TABLE `roster_week`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `temporada`
--
ALTER TABLE `temporada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `calendario_mag_ibfk_1` FOREIGN KEY (`id`) REFERENCES `calendario_liga` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `roster_week`
--
ALTER TABLE `roster_week`
  ADD CONSTRAINT `roster_week_ibfk_1` FOREIGN KEY (`jugador`) REFERENCES `roster` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
