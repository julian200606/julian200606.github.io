-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2023 a las 01:49:52
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
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripción` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `descripción`) VALUES
(1, 'Asus TUF Gaming A15', 'Potenciada por el Procesador AMD Ryzen7 4800H que permite realizar múltiples tareas.\r\nGráficos rápidos con una GPU NVIDIA GeForce RTX 3050.\r\n8GB de RAM, expandible hasta 32GB.\r\n512GB de almacenamiento'),
(2, 'Toshiba Pantalla 43\" Pulgadas Full HD LED Smart TV VIDAA 43V35LM (2022)', 'Presiona y pregunta a Alexa Use el Alexa Voice Remote incluido para administrar la potencia, el volumen, la navegación, la reproducción y el cambio de entrada del televisor\r\n'),
(3, 'Dii Heavy Duty Algodón/Poliéster Cubeta Cesta para la Colada o Bin, Grey Rugby Stripe', 'Gran ce la lavandería: Mide 13.7 x 13.7 x 20 pulgadas, y sería u solución de organización perfecta tu cuarto de lavado o baño, armario, coci y mucho más'),
(4, 'Juego de Accesorios de baño de Mosaico, Juego de Accesorios de baño de 4 Piezas con dispensador de j', 'El juego incluye: dispensador de jabón, soporte para cepillo para polvo de dientes, vaso, plato para anillos, mosaico de vidrio agrietado, color oro amarillo'),
(5, 'Fix A Leak Pool Leak Sealer', 'Material duradero\r\nMuy conveniente\r\nFácil de usar\r\nProducto de calidad\r\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
