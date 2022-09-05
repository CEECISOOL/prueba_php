-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2022 a las 22:50:43
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_comercio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cbus`
--

CREATE TABLE `cbus` (
  `id_cbu` int(10) NOT NULL,
  `alias` varchar(25) NOT NULL,
  `cbu` varchar(25) NOT NULL,
  `comercios_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cbus`
--

INSERT INTO `cbus` (`id_cbu`, `alias`, `cbu`, `comercios_id`) VALUES
(8, 'ceecisool.gol.acevedo', '1234554555', 6),
(10, 'caes.bilyr', '245664554545554', 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comercios`
--

CREATE TABLE `comercios` (
  `id_comercio` int(10) NOT NULL,
  `cuit` bigint(12) DEFAULT NULL,
  `razon_social` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comercios`
--

INSERT INTO `comercios` (`id_comercio`, `cuit`, `razon_social`, `user_id`) VALUES
(6, 23456543445, 'prueba de comercio', 1),
(29, 23456543445, 'prueba de comercio desde formulario modificando2', 1),
(30, 20258373902, 'pruebaaaaaa dos', 1),
(32, 2346784535, 'prueba', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `name`, `lastname`, `email`, `password`) VALUES
(1, 'cecilia', 'acevedo', 'cbritez6@gmail.com', '1234'),
(2, 'cecilia solange', 'acevedo', 'ceeci@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cbus`
--
ALTER TABLE `cbus`
  ADD PRIMARY KEY (`id_cbu`),
  ADD KEY `id_comercios_cbu` (`comercios_id`);

--
-- Indices de la tabla `comercios`
--
ALTER TABLE `comercios`
  ADD PRIMARY KEY (`id_comercio`),
  ADD KEY `id_user_comercio` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cbus`
--
ALTER TABLE `cbus`
  MODIFY `id_cbu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `comercios`
--
ALTER TABLE `comercios`
  MODIFY `id_comercio` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cbus`
--
ALTER TABLE `cbus`
  ADD CONSTRAINT `id_comercios_cbu` FOREIGN KEY (`comercios_id`) REFERENCES `comercios` (`id_comercio`) ON DELETE CASCADE;

--
-- Filtros para la tabla `comercios`
--
ALTER TABLE `comercios`
  ADD CONSTRAINT `id_user_comercio` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
