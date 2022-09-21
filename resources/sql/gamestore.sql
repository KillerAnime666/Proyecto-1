-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2022 a las 00:44:18
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gamestore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `apellido` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `cel` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `mail` varchar(40) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `apellido`, `cel`, `mail`) VALUES
(1, 'Sergio', 'Fernandez Davila', '60569601', 'killeranime666@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre_completo` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `user` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre_completo`, `correo`, `user`, `pass`) VALUES
('juan ticona', 'juanc@gmail.com', 'juan', 'juan1'),
('Sergio Fernandez', 'killeranime666@gmail.com', 'Killersito', 'Sergio123'),
('gabriel solares', 'tico@gmail.com', 'tico', 'tico1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
