-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2023 a las 19:02:24
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `corpoelec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `nombre` varchar(40) NOT NULL,
  `dni` varchar(30) NOT NULL,
  `cuenta` varchar(40) NOT NULL,
  `id` int(11) NOT NULL,
  `nombremp` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `direccion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nombre`, `dni`, `cuenta`, `id`, `nombremp`, `correo`, `sexo`, `telefono`, `direccion`) VALUES
('diego', '12312312', '01312231', 12, 'diego rif', 'diegorif@gmail.com', 'hombre', '041231231', 'barrrio marron'),
('jose Guzman', 'j3045678', '0131003230120', 123, 'jose lol', 'Guzman01@yahoon.com', 'hombre', '03123123', 'barrio sur'),
('Yojan chamorro', 'J-31299597', '014567890986512', 143, 'Yojan F.C', 'kendryjohan490@gmail', 'masculino', '0412125411', 'Barrio bircentenario sur ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `Num_factura` varchar(50) NOT NULL,
  `Periodo` date NOT NULL,
  `monto_elec` float NOT NULL,
  `mon_total` float NOT NULL,
  `Iva_elec` float NOT NULL,
  `Cuenta` varchar(50) NOT NULL,
  `Rif` varchar(30) NOT NULL,
  `nombremp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`Num_factura`, `Periodo`, `monto_elec`, `mon_total`, `Iva_elec`, `Cuenta`, `Rif`, `nombremp`) VALUES
('0123123123', '2023-03-08', 123.45, 567.54, 454.23, '012321342', 'j-09421312', 'Ciudad chinita c.A'),
('0123456789', '2023-03-06', 127.45, 127.54, 123.45, '0134567789', 'j-345678', 'yo f.c'),
('01312312', '2022-11-09', 123.45, 0, 124.54, '014567890986512', 'J-31299597', 'Yojan F.C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `email`, `password`, `role`, `username`) VALUES
(1, 'ken333', '123', 'admin', 'admin'),
(2237, 'kendry333', '1234', 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`Num_factura`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2238;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
