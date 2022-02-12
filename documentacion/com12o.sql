-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 09-02-2022 a las 18:49:02
-- Versión del servidor: 5.7.34
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `com12o`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `det_reg`
--

CREATE TABLE `det_reg` (
  `correlativo` int(11) NOT NULL,
  `ident_reg` int(11) NOT NULL,
  `ident_sin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_jef`
--

CREATE TABLE `tab_jef` (
  `ident_jef` int(11) NOT NULL,
  `cedul_jef` int(11) DEFAULT NULL,
  `nombr_jef` varchar(45) DEFAULT NULL,
  `apeli_jef` varchar(45) DEFAULT NULL,
  `fecna_jef` date DEFAULT NULL,
  `telem_jef` varchar(45) DEFAULT NULL,
  `telec_jef` varchar(45) DEFAULT NULL,
  `email_jef` varchar(45) DEFAULT NULL,
  `calle_jef` varchar(45) DEFAULT NULL,
  `direc_jef` varchar(200) DEFAULT NULL,
  `seria_jef` varchar(45) DEFAULT NULL,
  `usuar_jef` varchar(45) DEFAULT NULL,
  `contr_jef` varchar(45) DEFAULT NULL,
  `statu_jef` char(1) DEFAULT NULL,
  `ident_tip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tab_jef`
--

INSERT INTO `tab_jef` (`ident_jef`, `cedul_jef`, `nombr_jef`, `apeli_jef`, `fecna_jef`, `telem_jef`, `telec_jef`, `email_jef`, `calle_jef`, `direc_jef`, `seria_jef`, `usuar_jef`, `contr_jef`, `statu_jef`, `ident_tip`) VALUES
(1, 27327917, 'MELVIS DULIASKA', 'FLORES VALDERRAMA', '1999-02-01', '(0414) 1002020', NULL, 'MELVISDULIASKA@GMAIL.COM', 'CARRERA 5', 'CASA 5-10', '1020304050', 'MELVISFLORES', '827ccb0eea8a706c4c34a16891f84e7b', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_not`
--

CREATE TABLE `tab_not` (
  `ident_not` int(11) NOT NULL,
  `titul_not` varchar(100) DEFAULT NULL,
  `desco_not` varchar(100) DEFAULT NULL,
  `descr_not` varchar(2000) DEFAULT NULL,
  `image_not` varchar(250) DEFAULT NULL,
  `fecpu_not` datetime DEFAULT CURRENT_TIMESTAMP,
  `statu_not` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_reg`
--

CREATE TABLE `tab_reg` (
  `ident_reg` int(11) NOT NULL,
  `obser_reg` varchar(250) DEFAULT NULL,
  `fecre_reg` date DEFAULT NULL,
  `statu_reg` char(1) DEFAULT NULL,
  `ident_jef` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_sim`
--

CREATE TABLE `tab_sim` (
  `ident_sin` int(11) NOT NULL,
  `sin1_sin` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tab_sim`
--

INSERT INTO `tab_sim` (`ident_sin`, `sin1_sin`) VALUES
(1, 'FIEBRE MAYOR A 37.5'),
(2, 'DIFICULTAD PARA RESPIRAR'),
(3, 'TOS SECA'),
(4, 'MOCO O CONGESTION NASAL'),
(5, 'MALESTAR GENERAL'),
(6, 'DOLOR DE GARGANTA'),
(7, 'DIARREA'),
(8, 'DOLOR DE CABEZA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tab_tip`
--

CREATE TABLE `tab_tip` (
  `ident_tip` int(11) NOT NULL,
  `nombr_tip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tab_tip`
--

INSERT INTO `tab_tip` (`ident_tip`, `nombr_tip`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'VOCERO'),
(3, 'JEFE DE CALLE'),
(4, 'CIUDADANO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `det_reg`
--
ALTER TABLE `det_reg`
  ADD PRIMARY KEY (`correlativo`),
  ADD KEY `fk_det_reg_tab_reg1_idx` (`ident_reg`),
  ADD KEY `fk_det_reg_tab_sim1_idx` (`ident_sin`);

--
-- Indices de la tabla `tab_jef`
--
ALTER TABLE `tab_jef`
  ADD PRIMARY KEY (`ident_jef`),
  ADD KEY `fk_tab_jef_tab_tip1_idx` (`ident_tip`);

--
-- Indices de la tabla `tab_not`
--
ALTER TABLE `tab_not`
  ADD PRIMARY KEY (`ident_not`);

--
-- Indices de la tabla `tab_reg`
--
ALTER TABLE `tab_reg`
  ADD PRIMARY KEY (`ident_reg`),
  ADD KEY `fk_tab_reg_tab_jef1_idx` (`ident_jef`);

--
-- Indices de la tabla `tab_sim`
--
ALTER TABLE `tab_sim`
  ADD PRIMARY KEY (`ident_sin`);

--
-- Indices de la tabla `tab_tip`
--
ALTER TABLE `tab_tip`
  ADD PRIMARY KEY (`ident_tip`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `det_reg`
--
ALTER TABLE `det_reg`
  MODIFY `correlativo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_jef`
--
ALTER TABLE `tab_jef`
  MODIFY `ident_jef` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tab_not`
--
ALTER TABLE `tab_not`
  MODIFY `ident_not` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_reg`
--
ALTER TABLE `tab_reg`
  MODIFY `ident_reg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tab_tip`
--
ALTER TABLE `tab_tip`
  MODIFY `ident_tip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `det_reg`
--
ALTER TABLE `det_reg`
  ADD CONSTRAINT `fk_det_reg_tab_reg1` FOREIGN KEY (`ident_reg`) REFERENCES `tab_reg` (`ident_reg`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_det_reg_tab_sim1` FOREIGN KEY (`ident_sin`) REFERENCES `tab_sim` (`ident_sin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tab_jef`
--
ALTER TABLE `tab_jef`
  ADD CONSTRAINT `fk_tab_jef_tab_tip1` FOREIGN KEY (`ident_tip`) REFERENCES `tab_tip` (`ident_tip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tab_reg`
--
ALTER TABLE `tab_reg`
  ADD CONSTRAINT `fk_tab_reg_tab_jef1` FOREIGN KEY (`ident_jef`) REFERENCES `tab_jef` (`ident_jef`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
