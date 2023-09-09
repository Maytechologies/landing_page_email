-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-10-2022 a las 01:49:03
-- Versión del servidor: 5.7.33
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `email_masivos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_usuario`
--

CREATE TABLE `tm_usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_nom` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_apep` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_apem` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usu_correo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `fech_crea` datetime NOT NULL,
  `fech_modi` datetime DEFAULT NULL,
  `fech_elim` datetime DEFAULT NULL,
  `est` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_usuario`
--

INSERT INTO `tm_usuario` (`usu_id`, `usu_nom`, `usu_apep`, `usu_apem`, `usu_correo`, `fech_crea`, `fech_modi`, `fech_elim`, `est`) VALUES
(1, 'marco antonio', 'lopez', 'yanez', 'staroffic@gmail.com', '2022-10-26 03:47:33', NULL, NULL, 1),
(2, 'mauro ali', 'lopez', 'yanez', 'mauroali@gmail.com', '2022-10-26 03:47:33', NULL, NULL, 1),
(3, 'mario argenis', 'lopez', 'yanez', 'ingmario@gmail.com', '2022-10-26 03:47:33', NULL, NULL, 1),
(4, NULL, NULL, NULL, 'starcual@gmail.com', '2022-10-26 11:57:41', NULL, NULL, 1),
(5, NULL, NULL, NULL, 'juanaper@gmail.com', '2022-10-26 19:49:05', NULL, NULL, 1),
(6, NULL, NULL, NULL, 'mirnaalejandra@gmail.com', '2022-10-26 21:01:58', NULL, NULL, 1),
(7, NULL, NULL, NULL, 'mirnaalejandra@gmail.com', '2022-10-26 21:03:33', NULL, NULL, 1),
(8, NULL, NULL, NULL, 'mirnaalejandra@gmail.com', '2022-10-26 21:03:36', NULL, NULL, 1),
(9, NULL, NULL, NULL, 'mirnaalejandra@gmail.com', '2022-10-26 21:03:37', NULL, NULL, 1),
(10, NULL, NULL, NULL, 'mirnaalejandra@gmail.com', '2022-10-26 21:03:38', NULL, NULL, 1),
(11, NULL, NULL, NULL, 'joseangel@gmail.com', '2022-10-26 21:04:17', NULL, NULL, 1),
(12, NULL, NULL, NULL, 'joseangel@gmail.com', '2022-10-26 21:04:33', NULL, NULL, 1),
(13, NULL, NULL, NULL, 'migueperalta@gmail.com', '2022-10-26 21:10:06', NULL, NULL, 1),
(14, NULL, NULL, NULL, 'joseangel@gmail.com', '2022-10-26 21:11:03', NULL, NULL, 1),
(15, NULL, NULL, NULL, 'mirnaalejandra@gmail.com', '2022-10-26 21:21:27', NULL, NULL, 1),
(16, NULL, NULL, NULL, 'maurodiscplay@gmail.com', '2022-10-26 21:24:07', NULL, NULL, 1),
(17, NULL, NULL, NULL, 'andreaquero@gmail.com', '2022-10-26 21:38:39', NULL, NULL, 1),
(18, NULL, NULL, NULL, 'nakarival@gmail.com', '2022-10-26 21:46:03', NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
