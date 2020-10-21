-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-06-2019 a las 13:01:22
-- Versión del servidor: 10.1.40-MariaDB
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
-- Base de datos: `demongames`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `admin_c_e` varchar(75) NOT NULL,
  `admin_contra` varchar(30) NOT NULL,
  `admin_recontra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `nombre`, `apellidos`, `edad`, `admin_c_e`, `admin_contra`, `admin_recontra`) VALUES
(1, 'm', 'r', 18, '#@q', '12345678', '12345678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito1`
--

CREATE TABLE `carrito1` (
  `id_producto` int(11) NOT NULL,
  `nombre_p` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_envio`
--

CREATE TABLE `datos_envio` (
  `id_nombre` int(100) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `c_elec` varchar(100) NOT NULL,
  `pais` varchar(25) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_envio`
--

INSERT INTO `datos_envio` (`id_nombre`, `nombre`, `apellidos`, `c_elec`, `pais`, `estado`, `direccion`) VALUES
(7, 'J', 'J', '%@q', 'MÃ©xico', 'Gto', 'Victoria'),
(8, 'JJ', 'HL', 'yolo@gmail.com', 'Mexico', 'Gto', 'Alameda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre_p` varchar(30) NOT NULL,
  `costo` float NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre_p`, `costo`, `cantidad`) VALUES
(1, 'Astro', 500, 500),
(2, 'Control', 800, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_nombre` int(100) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `f_nac` date NOT NULL,
  `c_elec` varchar(100) NOT NULL,
  `contra` varchar(30) NOT NULL,
  `re_contra` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_nombre`, `nombre`, `apellidos`, `f_nac`, `c_elec`, `contra`, `re_contra`) VALUES
(4, 'Mau', 'Ramirez', '2001-05-19', 'super@gmail.com', '12345678', '12345678'),
(5, 'm', 'r', '2000-02-09', '%@q', 'chubaca12', 'chubaca12'),
(7, 'J', 'J', '2001-01-01', 'j_28@gmail.com', '12345', '12345'),
(8, 'JJ', 'HL', '2001-06-28', 'yolo@gmail.com', '123456', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `carrito1`
--
ALTER TABLE `carrito1`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `datos_envio`
--
ALTER TABLE `datos_envio`
  ADD PRIMARY KEY (`id_nombre`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `carrito1`
--
ALTER TABLE `carrito1`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos_envio`
--
ALTER TABLE `datos_envio`
  MODIFY `id_nombre` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_nombre` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
