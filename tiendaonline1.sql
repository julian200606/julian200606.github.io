-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2023 a las 01:49:58
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
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendaonline1`
--

CREATE TABLE `tiendaonline1` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `fecha de nacimiento` date NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `sexo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tiendaonline1`
--

INSERT INTO `tiendaonline1` (`id`, `nombre`, `fecha de nacimiento`, `correo`, `telefono`, `sexo`) VALUES
(1, 'hector', '2005-11-19', 'hector.campos21@cetis107.edu.mx', '6674957719', 69),
(2, 'johnadab', '2006-01-03', 'gael.echeagaray.cetis107.edu.mx', '6673567499', 23),
(3, 'melissa', '2006-08-22', 'melissa.chavez21@cetis107.edu.mx', '6674146882', 32),
(5, 'patrica', '2006-08-02', 'kenia.guerrero21@cetis07.edu.mx', '6673172109', 43),
(6, 'rene', '2006-10-06', 'rene.rios21@cetis107.edu.mx', '6674627182', 7),
(7, 'erick', '2006-04-19', 'erik.rodriguez21@cetis107.edu.mx', '6674813381', 11),
(8, 'revlla', '2006-11-12', 'angel.revilla21@cets107edu.mx', '5591083731', 5),
(9, 'mariana', '2006-12-12', 'mariana.baez21@cetis107.edu.mx', '6675441502', 12),
(10, 'adrian', '2006-07-08', 'adrian.chavez21@cetis107.edu.mx', '6676328944', 8),
(11, 'luis', '2006-12-04', 'luis.castro21@cetis107.edu.mx', '6879387329', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tiendaonline1`
--
ALTER TABLE `tiendaonline1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tiendaonline1`
--
ALTER TABLE `tiendaonline1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
