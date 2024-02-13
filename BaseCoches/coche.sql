-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2023 a las 14:22:43
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base123`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coche`
--

CREATE TABLE `coche` (
  `Marca` varchar(50) NOT NULL,
  `Modelo` varchar(150) NOT NULL,
  `Precio` int(10) NOT NULL,
  `Impuesto` int(3) NOT NULL,
  `Promocion` int(3) NOT NULL,
  `Codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `coche`
--

INSERT INTO `coche` (`Marca`, `Modelo`, `Precio`, `Impuesto`, `Promocion`, `Codigo`) VALUES
('Nissan', '200SX', 789, 4, 2, 12),
('Nissan', '201SX', 17500, 4, 2, 13),
('Nissan', '202SX', 17500, 4, 2, 14),
('Nissan', '203SX', 17500, 4, 2, 15),
('Nissan', '204SX', 17500, 4, 2, 16),
('Honda', 'Civic 2020', 27500, 4, 2, 17),
('Honda', 'Civic 2021', 27500, 4, 2, 18),
('Honda', 'Civic 2021', 27500, 4, 2, 19),
('Honda', 'Civic 1503', 15454, 16, 3, 21);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coche`
--
ALTER TABLE `coche`
  ADD PRIMARY KEY (`Codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coche`
--
ALTER TABLE `coche`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
