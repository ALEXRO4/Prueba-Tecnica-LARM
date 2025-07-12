-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2025 a las 04:47:47
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practicat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apaterno` text NOT NULL,
  `amaterno` text DEFAULT NULL,
  `calle` text NOT NULL,
  `numero` text NOT NULL,
  `cp` text NOT NULL,
  `municipio` text NOT NULL,
  `estado` text NOT NULL,
  `email` text NOT NULL,
  `contrasena` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `apaterno`, `amaterno`, `calle`, `numero`, `cp`, `municipio`, `estado`, `email`, `contrasena`) VALUES
(3, 'Luis', 'Romero', 'Martinez', 'calle 2', '2A', '09209', 'Iztapalapa', 'CDMX', 'luis_alexro4@hotmail.com', '123'),
(7, 'alan', 'torres', 'mora', 'calle 1', 'lote 2B', '1234', 'GDL', 'Jalisco', 'alan@gmail.com', 'alan'),
(10, 'Eduardo', 'Romero', '', 'Calle lirio ', '456', '5293', 'Naucalpan', 'EDOMEX', 'edu@gmail.com', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
