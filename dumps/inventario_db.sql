-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-02-2019 a las 03:17:40
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_consumibles`
--

DROP TABLE IF EXISTS `tb_consumibles`;
CREATE TABLE `tb_consumibles` (
  `id_consumible` int(10) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `marca` varchar(20) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `total_consumibles` int(3) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_consumibles`
--

INSERT INTO `tb_consumibles` (`id_consumible`, `tipo`, `marca`, `descripcion`, `color`, `total_consumibles`, `estado`) VALUES
(1, 'Teclado', 'Logitech', 'Teclado USB Inalambrico', 'Negro', 9, 1),
(2, 'Mause', 'Logitech', 'Mouse USB Inalambrico', 'Negro', 9, 1),
(3, 'Unidad de Estado Sol', 'S/M', 'Disco Duro de estado solido de 480Gb', 'Plateado', 4, 1),
(4, 'Memoria RAM', 'S/M', 'Memoria interna para LAPTOP de 4Gb', NULL, 4, 1),
(5, 'Memoria RAM', 'S/M', 'Memoria interna para PC de 2Gb', NULL, 4, 1),
(6, 'Monitor', 'Ghia', 'Monitor de 19\"', 'Negro', 6, 1),
(7, 'Monitor', 'Vorago', 'Monitor de 19', 'Negro', 6, 1),
(8, 'Diadema', 'S/M', 'S/C', 'Negro', 3, 1),
(9, 'Teclado', 'Logitech', 'Teclado con cable USB', 'Negro', 3, 1),
(10, 'Microfono', 'S/M', 'S/C', 'Negro', 3, 1),
(11, 'Tester 8', 'Tester 9', 'Tester 10', 'Tester 11', 33, 0),
(12, '', '', '', '', 0, 0),
(13, '', '', '', '', 0, 0),
(14, 'Monitor', 'HP', 'Monitor 19', 'Negro', 30, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_consu_depar`
--

DROP TABLE IF EXISTS `tb_consu_depar`;
CREATE TABLE `tb_consu_depar` (
  `id_consu_depar` int(10) NOT NULL,
  `fk_consumible` int(10) DEFAULT NULL,
  `fk_departamento` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_departamento`
--

DROP TABLE IF EXISTS `tb_departamento`;
CREATE TABLE `tb_departamento` (
  `id_departamento` int(10) NOT NULL,
  `nombre_departamento` varchar(50) DEFAULT NULL,
  `fk_ubicacion` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_depar_encar`
--

DROP TABLE IF EXISTS `tb_depar_encar`;
CREATE TABLE `tb_depar_encar` (
  `id_depar_encar` int(10) NOT NULL,
  `fk_departamentoEnc` int(10) DEFAULT NULL,
  `fk_encargado` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_encargado`
--

DROP TABLE IF EXISTS `tb_encargado`;
CREATE TABLE `tb_encargado` (
  `id_encargado` int(10) NOT NULL,
  `nombre_encargado` varchar(20) DEFAULT NULL,
  `apellidos_encargado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ubicacion`
--

DROP TABLE IF EXISTS `tb_ubicacion`;
CREATE TABLE `tb_ubicacion` (
  `id_ubicacion` int(10) NOT NULL,
  `ubicacion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE `tb_usuarios` (
  `id_usuario` int(10) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `telefono` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `rol` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nombre`, `apellidos`, `telefono`, `email`, `username`, `password`, `estado`, `rol`) VALUES
(1, 'Rodrigo', 'Arenas González', '5560072127', 'arenasgonzalezrodrigo@gmail.com', 'RodrigoAn5', 'da5fcb6c28d91fa10d80ac559e7e0cb8', 1, '1'),
(7, 'Administrator', 'Administrator', '', 'Administrator', 'Administrator', '200CEB26807D6BF99FD6F4F0D1CA54D4', 1, '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_consumibles`
--
ALTER TABLE `tb_consumibles`
  ADD PRIMARY KEY (`id_consumible`);

--
-- Indices de la tabla `tb_consu_depar`
--
ALTER TABLE `tb_consu_depar`
  ADD PRIMARY KEY (`id_consu_depar`),
  ADD KEY `fk_consumible` (`fk_consumible`),
  ADD KEY `fk_departamento` (`fk_departamento`);

--
-- Indices de la tabla `tb_departamento`
--
ALTER TABLE `tb_departamento`
  ADD PRIMARY KEY (`id_departamento`),
  ADD KEY `fk_ubicacion` (`fk_ubicacion`);

--
-- Indices de la tabla `tb_depar_encar`
--
ALTER TABLE `tb_depar_encar`
  ADD PRIMARY KEY (`id_depar_encar`),
  ADD KEY `fk_encargado` (`fk_encargado`),
  ADD KEY `fk_departamentoEnc` (`fk_departamentoEnc`);

--
-- Indices de la tabla `tb_encargado`
--
ALTER TABLE `tb_encargado`
  ADD PRIMARY KEY (`id_encargado`);

--
-- Indices de la tabla `tb_ubicacion`
--
ALTER TABLE `tb_ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_consumibles`
--
ALTER TABLE `tb_consumibles`
  MODIFY `id_consumible` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tb_consu_depar`
--
ALTER TABLE `tb_consu_depar`
  MODIFY `id_consu_depar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_departamento`
--
ALTER TABLE `tb_departamento`
  MODIFY `id_departamento` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_depar_encar`
--
ALTER TABLE `tb_depar_encar`
  MODIFY `id_depar_encar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_encargado`
--
ALTER TABLE `tb_encargado`
  MODIFY `id_encargado` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_ubicacion`
--
ALTER TABLE `tb_ubicacion`
  MODIFY `id_ubicacion` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_consu_depar`
--
ALTER TABLE `tb_consu_depar`
  ADD CONSTRAINT `fk_consumible` FOREIGN KEY (`fk_consumible`) REFERENCES `tb_consumibles` (`id_consumible`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_departamento` FOREIGN KEY (`fk_departamento`) REFERENCES `tb_departamento` (`id_departamento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_departamento`
--
ALTER TABLE `tb_departamento`
  ADD CONSTRAINT `fk_ubicacion` FOREIGN KEY (`fk_ubicacion`) REFERENCES `tb_ubicacion` (`id_ubicacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_depar_encar`
--
ALTER TABLE `tb_depar_encar`
  ADD CONSTRAINT `fk_departamentoEnc` FOREIGN KEY (`fk_departamentoEnc`) REFERENCES `tb_departamento` (`id_departamento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_encargado` FOREIGN KEY (`fk_encargado`) REFERENCES `tb_encargado` (`id_encargado`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
