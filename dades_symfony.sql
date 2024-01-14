-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2024 a las 15:54:49
-- Versión del servidor: 8.2.0
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dades_symfony`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prove`
--

CREATE TABLE `prove` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int NOT NULL,
  `tipo_proveedor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `correo_electronico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_mod` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prove`
--

INSERT INTO `prove` (`id`, `nombre`, `telefono`, `tipo_proveedor`, `activo`, `correo_electronico`, `fecha_registro`, `fecha_mod`) VALUES
(1, 'Ejemplo', 123456789, 'Ejemplo', 1, 'ejemplo@ejemplo.com', '2024-01-12', NULL),
(2, 'Ejemplo1', 12345678, 'Ejemplo2', 1, 'Ejemplo@gmail.com', '1000-01-01', '2014-01-24'),
(3, 'ej', 123456788, 'ej', 1, 'ej@ej.com', '2024-01-13', '2024-01-14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `prove`
--
ALTER TABLE `prove`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `prove`
--
ALTER TABLE `prove`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
