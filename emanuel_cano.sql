-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-06-2022 a las 04:30:14
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `utn_intermedio_268`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `id_personaje` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`id_personaje`, `nombre`, `apellido`, `imagen`, `descripcion`) VALUES
(44, 'Harry', 'Potter', 'harry.jpg', 'Buen alumno, pero lo trastorna el pasado.'),
(45, 'Cedric', 'Diggory', 'cedric.jpg', 'Alumno 10 lo quieren todos'),
(46, 'Ron', 'Wislie', 'ron.jpg', 'Alumno regular, pero le pone voluntad'),
(47, 'Hermione', 'Granger', 'hermione.jpg', 'Buena alumna, pero le falta humildad.'),
(506, 'Lord', 'Voldemort', 'logo.png', 'Se porta mal con los chicos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id_personaje`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id_personaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=508;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
