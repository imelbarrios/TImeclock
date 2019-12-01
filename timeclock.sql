-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2019 a las 19:26:44
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `timeclock`
--
CREATE DATABASE IF NOT EXISTS `timeclock` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `timeclock`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

DROP TABLE IF EXISTS `areas`;
CREATE TABLE `areas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE `perfil` (
  `id` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_completo` varchar(25) NOT NULL,
  `nombre_usuario` varchar(15) NOT NULL,
  `clave_usuario` varchar(50) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estado` int(11) NOT NULL DEFAULT '1',
  `id_area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_completo`, `nombre_usuario`, `clave_usuario`, `fecha_registro`, `estado`, `id_area`) VALUES
(1, 'admin admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2019-12-01 17:03:40', 1, 1),
(2, 'Pruebas', 'prueba', '4f74549a5b17e88d7dd15b2fd7789a59', '2019-12-02 00:48:30', 1, 1),
(3, 'pruebas 2', 'pruebas', '4f74549a5b17e88d7dd15b2fd7789a59', '2019-12-02 00:56:59', 1, 1),
(4, 'pruebas 21', '1234', '4f74549a5b17e88d7dd15b2fd7789a59', '2019-12-02 00:58:17', 1, 1),
(5, 'pruebas', '1234', '4f74549a5b17e88d7dd15b2fd7789a59', '2019-12-02 01:00:07', 1, 1),
(6, 'pruebas 213', '1234', '4f74549a5b17e88d7dd15b2fd7789a59', '2019-12-02 01:00:29', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
