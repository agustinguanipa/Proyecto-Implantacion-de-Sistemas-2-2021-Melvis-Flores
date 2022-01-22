-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2020 at 11:34 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ccambpla`
--

-- --------------------------------------------------------

--
-- Table structure for table `det_reg`
--

CREATE TABLE `det_reg` (
  `correlativo` int(11) NOT NULL,
  `ident_reg` int(11) NOT NULL,
  `ident_jef` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tab_jef`
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
  `tibom_jef` varchar(45) DEFAULT NULL,
  `seria_jef` varchar(45) DEFAULT NULL,
  `usuar_jef` varchar(45) DEFAULT NULL,
  `contr_jef` varchar(45) DEFAULT NULL,
  `statu_jef` char(1) DEFAULT NULL,
  `ident_tip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tab_jef`
--

INSERT INTO `tab_jef` (`ident_jef`, `cedul_jef`, `nombr_jef`, `apeli_jef`, `fecna_jef`, `telem_jef`, `telec_jef`, `email_jef`, `calle_jef`, `direc_jef`, `tibom_jef`, `seria_jef`, `usuar_jef`, `contr_jef`, `statu_jef`, `ident_tip`) VALUES
(1, 26607655, 'CARLOS AGUSTIN', 'GUANIPA ALVAREZ', '1998-03-29', '(0426) 690 8396', '(0276) 353 2978', 'AGUSTINGUANIPA98@GMAIL.COM', 'CALLE 2', 'RESIDENCIAS MILDREY PISO 7 APTO 74', 'GRANEL', '', 'AGUSTIN', '827ccb0eea8a706c4c34a16891f84e7b', '1', 1),
(2, 15568318, 'ERICK GIOVANNY', 'GONZALEZ BUITRAGO', '1982-03-25', '(0416) 076 9717', '', 'EG39859@GMAIL.COM', 'CALLE 2', 'RESIDENCIAS CANTV', 'GRANEL', '', 'ERICK', 'f0c7ee8735462eca5530ba43476e72f2', '1', 1),
(3, 5062224, 'MARIANELLA', 'RIVAS', '1990-01-01', '', '', '', 'CALLE 2', 'CASA 1 HACARITAMA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(4, 5679175, 'YAHAIRA ', 'PEREZ', '1962-06-06', '(0414) 074 4455', '', 'YAHAIRAPDC@GMAIL.COM', 'CALLE 2', 'CASA 3 HACARITAMA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(5, 5325138, 'RAUL', 'SANCHEZ', '1958-12-20', '(0414) 700 7713', '', 'RSANCHEZJ45@GMAIL.COM', 'CALLE 2', 'CASA 4 HACARITAMA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(6, 5344450, 'LIRIA', 'GOMEZ', '1958-08-29', '(0411) 471 1508', '', 'LIRIAGOMEZ@HOTMAIL.COM', 'CALLE 2', 'CASA 5 HACARITAMA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(7, 9226851, 'SANDRA', 'SANCHEZ', '1996-10-01', '(0416) 977 0069', '', 'ELISANDRASAN47@GMAIL.COM', 'CALLE 2', 'CASA  7 HACARITAMA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(8, 24783374, 'YUSMAR', 'CONTRERAS', '1994-01-13', '(0424) 762 1952', '', 'YUSMAR_CONTRERASCASTILLO@GMAIL.COM', 'CALLE 2', 'CASA 9 HACARITAMA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(9, 12634653, 'CAROLINA', 'VIVAS', '1975-06-07', '(0424) 751 6613', '', 'VIVAS.C_AP@YAHOO.COM', 'CALLE 2', 'CASA 10 HACARITAMA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(10, 12233963, 'JORGE', 'MONTENEGRO', '1972-02-14', '(0424) 766 0872', '', 'ROSIOTARAZONA@GMAIL.COM', 'CALLE 2', 'CASA 12 HACARITAMA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(11, 4165337, 'NEYDA', 'PRATO', '1954-09-20', '(0414) 704 0377', '', 'NEYDAESPERANZAPRATO@HOTMAIL.COM', 'CALLE 2', 'CASA 17 HACARITAMA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(12, 18424300, 'MICHELLE', 'MOLINA', '1987-11-07', '(0414) 781 8526', '', 'MMEDINA@NEWHOUSEREMAX.COM.VE', 'CALLE 2', 'CASA 18 HACARITAMA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(13, 9128407, 'LUIZ MARIBEL', 'CAMARGO', '1965-02-04', '(0426) 659 2103', '', 'LUZMARCA11@HOTMAIL.COM', 'CALLE 2', 'CASA 19 HACARITAMA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(14, 9205147, 'AZUCENA', 'DE CLEMENTE', '1964-09-18', '(0424) 739 2290', '', 'LATOAZUCENA@HOTMAIL.COM', 'CALLE 2', 'CASA 20 HACARITAMA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(15, 3791316, 'PETRA', 'DUQUE', '1953-01-05', '(0414) 707 6361', '', 'PETRIDUQUEGAIVIS22@GMAIL.COM', 'CALLE 2', 'CASA 22 HACARITAMA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(16, 11875711, 'LAINET', 'FERNANDEZ', '1977-11-14', '(0416) 676 6073', '', 'LAINETS1@HOTMAIL.COM', 'CALLE 2', 'CASA 23 HACARITAMA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(17, 9229363, 'JANETH', 'MEDINA', '1967-07-04', '(0424) 733 1935', '', 'YANETH_MEGA@HOTMAIL.COM', 'CALLE 2', 'CASA 24 HACARITAMA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(18, 10174991, 'ANTONIO', 'CARDENAS', '1972-08-16', '(0424) 767 1366', '', 'ACARDENAS2005@YAHOO.COM', 'CALLE 2', 'CASA 26 HACARITAMA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(19, 8101210, 'MARISELA', 'CEGARRA', '1968-03-09', '(0414) 075 0357', '', 'MARISELACEGARRA09@GMAIL.COM', 'CALLE 2', 'CASA 27 HACARITAMA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(20, 5657589, 'NINFA MARINA', 'DURAN', '1959-09-23', '(0424) 775 3441', '', 'MARINADURAN59@HOTMAIL.COM', 'CALLE 2', 'CASA 30 HACARITAMA', '10 KG', '19346323', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(21, 1539616, 'CARMEN CECILIA', 'TORRES', '1939-07-17', '(0416) 475 0293', '', 'CETA1707@HOTMAIL.COM', 'CALLE 2', 'CASA 31 HACARITAMA', '10 KG', '19344857', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(22, 5028737, 'TITA LINA', 'DUARTE OLIVEROS', '1959-05-30', '(0414) 752 2098', '', 'MARIASOTODUARTE@GMAIL.COM', 'CALLE 2', 'VEREDA BELLA VISTA', '10 KG', '20384368', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(23, 5027823, 'ANA CECILIA', 'DUARTE', '1955-06-18', '(0424) 720 4427', '', 'DUARTEOLIVEROS@GMAIL.COM', 'CALLE 2', 'VEREDA BELLA VISTA', '10 KG', '20383161', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(24, 10169881, 'GINA', 'MOLINA', '1971-12-13', '(0412) 519 6958', '(0276) 353 5202', 'DOCTORA.GINA.UNIVERSIDAD@GMAIL.COM', 'CALLE 2', 'Z13_1', '10 KG', '20461636', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(25, 2892023, 'LUIS ELIGIO', 'MOLINA', '1943-05-05', '(0412) 519 6958', '', 'SOYVIDAINTEGRAL@GMAIL.COM', 'CALLE 2', 'Z13_3', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(26, 1524287, 'BLANCA', 'MENDEZ', '1990-01-01', '', '(0276) 353 9662', '', 'CALLE 2', 'EDF SAYSAYAL APTO 01', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(27, 14503011, 'RONALD', 'LOPEZ', '1990-01-01', '(0414) 750 4598', '', '', 'CALLE 2', 'EDF SAYSAYAL APTO 02', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(28, 4471953, 'DEBORA', 'MEDINA', '1990-01-01', '(0424) 773 6203', '', '', 'CALLE 2', 'EDF SAYSAYAL APTO 03', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(29, 6865275, 'NELSON', 'VIEIRIA', '1990-01-01', '(0424) 763 6256', '', 'JNVIEIRA@HOTMAIL.COM', 'CALLE 2', 'EDF SAYSAYAL APTO 04', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(30, 15856479, 'DIEGO', 'ZAPATA', '1990-01-01', '(0424) 777 5280', '', '', 'CALLE 2', 'EDF SAYSAYAL APTO 05', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(31, 83177648, 'CHAWKI', 'BABEK', '1990-01-01', '(0414) 176 1051', '', '', 'CALLE 2', 'EDF SAYSAYAL APTO 06', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(32, 13793855, 'JERFIK YURLEY', 'DAZA DE CASTRO', '1978-09-05', '(0424) 719 8037', '', 'JERFIK_CKK@GMAIL.COM', 'CALLE 2', 'VEREDA BELLA VISTA CASA N. Z-15', '10 KG', '6232088', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(33, 1557700, 'ANA', 'PASTRAN JAIMES', '1934-03-08', '', '', 'ANAPASTRAN0803@GMAIL.COM', 'CALLE 2', 'PORTALES DE BELLA VISTA', '10 KG', '1188763', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(34, 5428959, 'ALISIA MARIA', 'SOTO RODRIGUEZ', '1936-10-31', '', '', '', 'CALLE 2', 'PORTALES DE BELLA VISTA', '10 KG', '17123808', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(35, 5648850, 'LILIA TATYANA', 'GONZALEZ CONTRERAS', '1958-05-21', '', '', '', 'CALLE 2', 'PORTALES DE BELLA VISTA', '10 KG', '1954452', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(36, 9212622, 'LEONARDO', 'GONZALEZ CONTRERAS', '1963-08-16', '(0416) 635 8550', '', '', 'CALLE 2', 'PORTALES DE BELLA VISTA', '10 KG', '8190302', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(37, 25808188, 'JULIO ENRIQU', 'LIZARAZO', '1949-05-07', '', '', '', 'CALLE 2', 'PORTALES DE BELLA VISTA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(38, 4210183, 'ROSA STELLA', 'GONZALEZ CONTRERAS', '1953-12-09', '', '', '', 'CALLE 2', 'PORTALES DE BELLA VISTA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(39, 81915240, 'FLOR MARI', 'DE LIZARAZO', '1950-12-15', '', '', '', 'CALLE 2', 'PORTALES DE BELLA VISTA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(40, 23149303, 'ANA CELIS', 'SUAREZ', '1951-07-25', '', '', '', 'CALLE 2', 'VEREDA BELLA VISTA CASA N. Z-15-2', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(41, 25463941, 'CRIS JERFRA', 'CASTRO DAZA', '1996-09-05', '', '', '', 'CALLE 2', 'VEREDA BELLA VISTA CASA N. Z-15-2', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(42, 23149006, 'ANA CARLOTA', 'BUITRAGO MORENO', '1959-09-28', '(0426) 270 1419', '', '', 'CALLE 2', 'VEREDA BELLA VISTA CASA N. Z-14', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(43, 6832118, 'ALEXANDER', 'MARIN', '1964-04-23', '', '(0276) 353 1059', '', 'CALLE 2', 'CASA Z-11B', '10 KG', '0020362455', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(44, 12230809, 'MARCOS', 'MORALES', '1972-06-27', '', '(0276) 353 1059', '', 'CALLE 2', 'CASA Z-11A', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(45, 5608734, 'JUDITH', 'MORALES', '1952-06-20', '(0424) 766 6122', '', '', 'CALLE 2', 'CASA Z-11C', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(46, 16123843, 'MARISELA', 'MORALES', '1982-06-12', '', '', '', 'CALLE 2', 'CASA Z-11D', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(47, 8102497, 'ISMAEL', 'BRAVO', '1967-12-01', '(0414) 741 2967', '', 'ISMAELBRAVO2012@GMAIL.COM', 'CALLE 2', 'RESIDENCIAS MILDREY PISO 4 APTO 44', 'GRANEL', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(48, 2935212, 'REINALDO', 'ROMERO URBINA', '0943-11-06', '(0424) 746 2266', '', '', 'CALLE 2', 'RESIDENCIAS MILDREY PISO 7 APTO 72', 'GRANEL', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(49, 14217353, 'GLADYS GIOVANA', 'SANCHEZ', '1979-01-09', '', '(0276) 353 0597', 'GLADYSGIOVANA79@HOTMAIL.COM', 'CALLE 2', 'RESIDENCIAS MILDREY PISO 1 APTO 14', 'GRANEL', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(50, 15231756, 'ALBER NIKOLAY', 'HORTUA', '1981-05-05', '', '(0276) 353 1139', 'ALBERHORTUAGRANDA@GMAIL.COM', 'CALLE 2', 'RESIDENCIAS MILDREY PISO 4 APTO 41', 'GRANEL', '7149331', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(51, 3399154, 'RAFAEL', 'PARRA', '1949-06-21', '', '(0276) 353 1139', 'RAFAELPARRAROA@HOTMAIL.COM', 'CALLE 2', 'RESIDENCIAS MILDREY PISO 4 APTO 43', 'GRANEL', '18284155', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(52, 3194238, 'GONZALO', 'VEZGA', '1946-04-05', '', '(0276) 353 0962', 'GCHACON46@GMAIL.COM', 'CALLE 2', 'RESIDENCIAS MILDREY PISO 2 APTO 22', 'GRANEL', '1202828', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(53, 4635569, 'ALBERTO', 'ORTEGA', '1952-09-24', '(0424) 707 9602', '', '', 'CALLE 2', 'RESIDENCIAS MILDREY PISO 3 APTO 32', 'GRANEL', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(54, 4212723, 'VIRGILIO', 'SERRANO', '1953-04-08', '(0424) 784 5010', '', '', 'CALLE 2', 'RESIDENCIAS MILDREY PISO 3 APTO 31', 'GRANEL', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(55, 5032478, 'NELSON', 'CORTES', '1953-04-09', '(0424) 758 2030', '(0276) 353 2246', '', 'CALLE 2', 'RESIDENCIAS MILDREY PISO 7 APTO 73', 'GRANEL', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(56, 5283244, 'LAURA', 'DUQUE', '1957-11-28', '(0424) 739 8553', '', 'LAURA_DUQUE_DG@HOTMAIL.COM', 'CALLE 2', 'RESIDENCIAS MILDREY PISO 3 APTO 33', 'GRANEL', '20176939', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(57, 5028153, 'ALBA', 'ALVAREZ', '1957-09-20', '', '(0276) 353 2978', 'ALBALIDA2006@HOTMAIL.COM', 'CALLE 2', 'RESIDENCIAS MILDREY PISO 7 APTO 74', 'GRANEL', '5204580', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(58, 13587648, 'JEAN CARLO', 'ALVAREZ', '1978-04-10', '(0416) 777 0773', '', 'AGROJEAN1978@HOTMAIL.COM', 'CALLE 2', 'RESIDENCIAS MILDREY PISO 1 APTO 12', 'GRANEL', '3088770', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(59, 5646943, 'ANA', 'OCHOA', '1959-11-20', '(0414) 446 1932', '', 'ANITIN8A@HOTMAIL.COM', 'CALLE 2', 'RESIDENCIAS MILDREY PISO 8 APTO 83', 'GRANEL', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(60, 16610919, 'SANDY', 'VARELA', '1984-11-15', '(0414) 077 3773', '', 'VFSANDY@HOTMAIL.COM', 'CALLE 2', 'RESIDENCIAS MILDREY PISO 2 APTO 21', 'GRANEL', '7721626', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(61, 2887005, 'YLDA', 'SANCHEZ', '1942-06-01', '', '(0276) 353 2830', 'CARLESALEANDRA@HOTMAIL.COM', 'CALLE 2', 'RESIDENCIAS MILDREY PISO 6 APTO 64', 'GRANEL', '20724514', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(62, 1587610, 'LUCILA', 'VELANDIA', '1940-12-08', '', '(0276) 415 4921', '', 'CALLE 2', 'RESIDENCIAS MILDREY PISO 9 APTO 93', 'GRANEL', '17006006', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(63, 5678383, 'ISIDRO', 'VARELA', '1959-04-04', '', '(0276) 353 2308', 'PRATOISIDRO@GMAIL.COM', 'CALLE 2', 'RESIDENCIAS MILDREY CONSERJERIA', 'GRANEL', '19305752', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(64, 2550373, 'JOSE', 'HERNANDEZ', '1944-09-27', '(0424) 732 4875', '(0276) 353 1126', 'JADOLFO2550@HOTMAIL.COM', 'CALLE 2', 'CASA 1 VEREDA BELLA VISTA', '10 KG', '16399863', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(65, 14265412, 'JOAN', 'ALVIAREZ', '1981-01-11', '(0414) 979 2490', '(0276) 353 5178', 'JCARLOSAL@HOTMAIL.COM', 'CALLE 2', 'CASA 2 VEREDA BELLA VISTA', '10 KG', '15738000', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(66, 13146397, 'MIGDALIA', 'HERNANDEZ', '1976-03-04', '(0414) 907 8829', '(0276) 517 7047', 'MINIDI43@HOTMAIL.COM', 'CALLE 2', 'CASA 3 VEREDA BELLA VISTA', '10 KG', '13013699', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(67, 3199025, 'FRANCISCO', 'VALBUENA', '1946-10-10', '', '(0276) 353 5308', '', 'CALLE 2', 'CASA 4 VEREDA BELLA VISTA', '10 KG', '20780914', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(68, 17502432, 'DARWIN', 'VALBUENA', '1986-03-05', '(0414) 721 5933', '', '', 'CALLE 2', 'CASA 5 VEREDA BELLA VISTA', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(69, 5640447, 'ELSIDA', 'DE PABLOS PARADA', '1956-08-04', '(0414) 076 5964', '', '', 'CALLE 2', 'MAPORAL CASA 1', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(70, 9221548, 'BELKIS XIOMARA', 'DOMINGUEZ TARAZONA', '1965-04-24', '(0424) 712 1451', '', '', 'CALLE 2', 'MAPORAL CASA 2', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(71, 3172419, 'ROSA', 'ROJAS DE VALERO', '1946-08-29', '(0414) 036 3871', '', '', 'CALLE 2', 'MAPORAL CASA 3', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(72, 5029386, 'LUIS', 'ARELLANO RUBIO', '1990-01-01', '(0424) 773 0218', '', '', 'CALLE 2', 'MAPORAL CASA 4', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(73, 4209333, 'ROSA ELEA', 'VALERO ANTELIZ', '1990-01-01', '(0416) 673 0148', '', '', 'CALLE 2', 'MAPORAL CASA 5', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(74, 5666271, 'MANUEL', 'COLMENARES', '1990-01-01', '(0414) 745 1422', '', '', 'CALLE 2', 'MAPORAL CASA 6', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(75, 3791142, 'FREDDY GEOVANNI', 'MEDINA CONTRAMAESTRE', '1990-01-01', '(0414) 705 0467', '', '', 'CALLE 2', 'MAPORAL CASA 7', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(76, 3792886, 'MILARBE', 'GUERRA BELLO', '1990-01-01', '', '(0276) 353 1861', '', 'CALLE 2', 'MAPORAL CASA 8', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(77, 9415417, 'GLEDA OSMARY JOSEFIN', 'LAVIOSA GARCIA', '1990-01-01', '(0414) 713 6604', '', '', 'CALLE 2', 'MAPORAL CASA 9', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(78, 9220632, 'TEOFILO', 'HERNANDEZ ALARCON', '1990-01-01', '(0414) 703 2893', '', '', 'CALLE 2', 'MAPORAL CASA 10', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(79, 10162310, 'RAFAEL ANTONIO', 'VIVAS SANCHEZ', '1990-01-01', '(0416) 674 1635', '', '', 'CALLE 2', 'MAPORAL CASA 11', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(80, 10153494, 'AGEL GEOVANNY', 'CASTRO CONTRERAS', '1990-01-01', '(0424) 764 7358', '', '', 'CALLE 2', 'MAPORAL CASA 12', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(81, 22206585, 'GUILLERMO', 'BARRERA', '1990-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 2', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(82, 9241771, 'CARLOS', 'OCARIZ', '1990-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 3', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(83, 4818335, 'JANISKA', 'BETANCOURT', '1950-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 4', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(84, 9223948, 'JOSE', 'ZAMBRANO', '1970-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 5', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(85, 2759973, 'CARLOS JULIO', 'OCARIZ ANGEL', '1940-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 6', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(86, 9248911, 'ALEXIS', 'OCARIZ SILVA', '1960-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 7', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(87, 7601642, 'FERNANDO', 'PADRON', '1960-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 8', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(88, 11766723, 'GLORIA GAONA', 'DE PEREZ', '1952-10-23', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 9', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(89, 6912793, 'KONRAD SCHIMID', 'URDANETA', '1964-03-21', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 10', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4),
(90, 5022451, 'MARIA DOLORES', 'RAMIREZ ARAQUE', '1950-01-01', '(0416) 602 2513', '', '', 'CALLE 2', 'RESIDENCIAS CANTV', 'GRANEL', '', 'MARIARAMIREZ', 'c91460bf0651860032b027fcba113ccf', '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tab_not`
--

CREATE TABLE `tab_not` (
  `ident_not` int(11) NOT NULL,
  `titul_not` varchar(100) DEFAULT NULL,
  `desco_not` varchar(100) DEFAULT NULL,
  `descr_not` longtext,
  `image_not` varchar(250) DEFAULT NULL,
  `fecpu_not` datetime DEFAULT CURRENT_TIMESTAMP,
  `statu_not` varchar(45) DEFAULT NULL,
  `ident_jef` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tab_not`
--

INSERT INTO `tab_not` (`ident_not`, `titul_not`, `desco_not`, `descr_not`, `image_not`, `fecpu_not`, `statu_not`, `ident_jef`) VALUES
(1, 'Estudiantes de la UNEFA realizan Servicio Comunitario en la Comunidad', 'Alumnos de la Carrera Ingeniería de Sistemas realizan Sistema para la gestión del Consejo Comunal', '<p style=\"text-align:center\"><span style=\"font-size:24px\"><strong>Estudiantes de la UNEFA realizan Servicio Comunitario en la Comunidad</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\">Alumnos de la Carrera Ingenier&iacute;a de Sistemas realizan Sistema para la gesti&oacute;n del Consejo Comunal</span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>Desde Septiembre de 2019 los Estudiantes de la Carrera Ingenier&iacute;a de Sistemas de la Casa de Estudios UNEFA, ubicada aqu&iacute; en la comunidad, exactamente en las oficinas de la CANTV, solicitaron al Consejo Comunal la posiblidad de realizar su Servicio Comunitario, est&eacute; bajo el apoyo del mismo fue aprobado para que los estudiantes Dayana Garcia, Carlos Guanipa, Jesus Carrillo e Isaac Clavijo pudiera concretar una propuesta respecto a las necesidades que pose&iacute;a el Consejo Comunal respecto al area de sistemas e informatica, planteando asi&nbsp;un Sistema Web que permita la gesti&oacute;n de ciertos aspectos en la organizacion administrativa del Consejo. Esta planificado para ser entregado a finales de Enero de 2020, y as&iacute; dotar con una herramienta tecnologica que facilite las labores en el Consejo.</p>\r\n', 'img_6af942beb25cb9afa9aabd00340ac11a.jpg', '2020-01-22 21:31:16', '1', 1),
(2, 'Servicio Comunitario de la UNEFA realiza Inducción del Sistema Web para el Consejo Comunal', 'Miembros del Consejo Comunal y de la Comunidad en general asistieron a la invitación de los alumnos', '<p style=\"text-align:center\"><span style=\"font-size:24px\"><strong>Servicio Comunitario de la UNEFA realiza Inducci&oacute;n del Sistema Web para el Consejo Comunal</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\">Miembros del Consejo Comunal y de la Comunidad en general asistieron a la invitaci&oacute;n de los alumnos</span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>El Pasado 12 de Diciembre, los estudiantes quienes estan realizando su Servicio Comunitario, invitaron a todos los miembros del consejo comunal, y comunidad en general de Comunidad 12 de Octubre para realizar un Curso de Induccion al fuincionamiento del Sistema Web que planifican implementar para Enero de 2020. Este conto con la presencia de miembros del Consejo Comunal y vecino de la comunidad, quienes conocieron las capacidades del proyecto que los estudiantes planean instalar en la comunidad. Se dieron a conocer las caracteristicas y funciones del sitio web y se discutieron de acuerdo a las necesidades, soluciones practicas que se pueden aplicar en el sistema para ser mas eficientes y efectivos en las labores administrativas del Consejo Comunal.&nbsp;</p>\r\n\r\n<p>La pagina web esta disponible a traves del siguiente enlace:&nbsp;<a href=\"http://ccambpla.epizy.com\">Consejo Comunal Comunidad 12 de Octubre</a></p>\r\n', 'img_0400d0513fecae45315b51eff29ff4ef.jpg', '2020-01-22 21:35:10', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tab_per`
--

CREATE TABLE `tab_per` (
  `ident_per` int(11) NOT NULL,
  `cedul_per` int(11) DEFAULT NULL,
  `nombr_per` varchar(45) DEFAULT NULL,
  `apeli_per` varchar(45) DEFAULT NULL,
  `fecna_per` date DEFAULT NULL,
  `telem_per` varchar(45) DEFAULT NULL,
  `telec_per` varchar(45) DEFAULT NULL,
  `email_per` varchar(45) DEFAULT NULL,
  `calle_per` varchar(45) DEFAULT NULL,
  `direc_per` varchar(200) DEFAULT NULL,
  `tifam_per` varchar(45) DEFAULT NULL,
  `tibom_per` varchar(45) DEFAULT NULL,
  `seria_per` varchar(45) DEFAULT NULL,
  `statu_per` char(1) DEFAULT NULL,
  `ident_tip` int(11) NOT NULL,
  `ident_jef` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tab_per`
--

INSERT INTO `tab_per` (`ident_per`, `cedul_per`, `nombr_per`, `apeli_per`, `fecna_per`, `telem_per`, `telec_per`, `email_per`, `calle_per`, `direc_per`, `tifam_per`, `tibom_per`, `seria_per`, `statu_per`, `ident_tip`, `ident_jef`) VALUES
(1, 3909502, 'RICARDO', 'ROSARIO', '1990-01-01', '', '', '', 'CALLE 2', 'CASA 1 HACARITAMA', 'ESPOSA/ESPOSO', '10 KG', '', '1', 4, 3),
(2, 15989982, 'MARIAN', 'ROSARIO', '1990-01-01', '', '', '', 'CALLE 2', 'CASA 1 HACARITAMA', 'HIJA/HIJO', '10 KG', '', '1', 4, 3),
(3, 1087832, 'MARIA', 'RIBAS', '1960-01-01', '', '', '', 'CALLE 2', 'CASA 1 HACARITAMA', 'MADRE/PADRE', '10 KG', '', '1', 4, 3),
(4, 24338121, 'MARIA MASSIEL', 'SOTO DUARTE', '1999-06-05', '(0424) 739 2248', '', 'MARIASOTODUARTE@GMAIL.COM', 'CALLE 2', 'VEREDA BELLA VISTA', 'HIJA/HIJO', '10 KG', '20397002', '1', 4, 22),
(5, 30134924, 'GIAN', 'MOLINA', '2003-01-09', '', '', '', 'CALLE 2', 'Z13_1', 'HIJA/HIJO', '10 KG', '', '1', 4, 24),
(6, 9224854, 'CRISTOBAL', 'CASTRO', '1964-08-06', '', '', '', 'CALLE 2', 'VEREDA BELLA VISTA CASA N. Z-15', 'ESPOSA/ESPOSO', '10 KG', '19371553', '1', 4, 32),
(7, 28016259, 'KAREN SARAI', 'CASTRO', '2000-12-29', '', '', '', 'CALLE 2', 'VEREDA BELLA VISTA CASA N. Z-15', 'HIJA/HIJO', '10 KG', '19371322', '1', 4, 32),
(8, 23149003, 'ANTONIO', 'GONZALEZ', '1959-09-28', '', '', '', 'CALLE 2', 'VEREDA BELLA VISTA CASA N. Z-14', 'ESPOSA/ESPOSO', '10 KG', '', '1', 4, 42),
(9, 12235783, 'DELIMAR', 'MARIN', '1975-02-24', '(0424) 766 6122', '', '', 'CALLE 2', 'CASA Z-11B', 'ESPOSA/ESPOSO', '10 KG', '0020366480', '1', 4, 43),
(10, 21002796, 'JUNIOR', 'MARIN', '1993-10-10', '', '', '', 'CALLE 2', 'CASA Z-11B', 'HIJA/HIJO', '10 KG', '0019377007', '1', 4, 43),
(11, 23825267, 'ALEXMAR', 'COELLO', '1993-10-10', '', '', '', 'CALLE 2', 'CASA Z-11B', 'HIJA/HIJO', '10 KG', '0019377532', '1', 4, 43),
(12, 28156093, 'ANGELIMAR', 'MARIN', '2001-08-17', '', '', '', 'CALLE 2', 'CASA Z-11B', 'HIJA/HIJO', '10 KG', '', '1', 4, 43),
(13, 30398512, 'JEREMY', 'MARIN', '2003-01-18', '', '', '', 'CALLE 2', 'CASA Z-11B', 'HIJA/HIJO', '10 KG', '', '1', 4, 43),
(14, 4092369, 'MARIA', 'HERNANDEZ', '1944-09-25', '(0424) 732 4875', '(0276) 353 1126', '', 'CALLE 2', 'CASA 1 VEREDA BELLA VISTA', 'ESPOSA/ESPOSO', '10 KG', '16361747', '1', 4, 64),
(15, 12974966, 'YANET', 'HERNANDEZ', '1977-03-21', '(0414) 755 9969', '(0276) 353 5178', 'YANETMAI@HOTMAIL.COM', 'CALLE 2', 'CASA 2 VEREDA BELLA VISTA', 'ESPOSA/ESPOSO', '10 KG', '15838888', '1', 4, 65),
(16, 30981545, 'ALETXA', 'PULIDO', '2004-12-17', '', '', '', 'CALLE 2', 'CASA 2 VEREDA BELLA VISTA', 'HIJA/HIJO', '10 KG', '', '1', 4, 65),
(17, 31000000, 'JOHANNA', 'ALVIAREZ', '2012-03-21', '', '', '', 'CALLE 2', 'CASA 2 VEREDA BELLA VISTA', 'HIJA/HIJO', '10 KG', '', '1', 4, 65),
(18, 12630813, 'LAMDY', 'ORTEGA', '1976-03-01', '(0414) 376 0652', '(0276) 517 7047', '', 'CALLE 2', 'CASA 3 VEREDA BELLA VISTA', 'ESPOSA/ESPOSO', '10 KG', '', '1', 4, 66),
(19, 30649781, 'ESTEFANI', 'ORTEGA', '2004-09-04', '', '', '', 'CALLE 2', 'CASA 3 VEREDA BELLA VISTA', 'HIJA/HIJO', '10 KG', '', '1', 4, 66),
(20, 2814085, 'CANDIDA', 'DE VALBUENA', '1952-10-23', '(0414) 746 8062', '(0276) 353 5308', 'CANDEJON@GMAIL.COM', 'CALLE 2', 'CASA 4 VEREDA BELLA VISTA', 'ESPOSA/ESPOSO', '10 KG', '', '1', 4, 67),
(21, 19665201, 'BELSI', 'DE VALBUENA', '1989-12-05', '(0424) 729 7354', '', '', 'CALLE 2', 'CASA 5 VEREDA BELLA VISTA', 'ESPOSA/ESPOSO', '10 KG', '', '1', 4, 68),
(22, 31000001, 'VICTORIA', 'VALBUENA', '2015-03-21', '', '', '', 'CALLE 2', 'CASA 5 VEREDA BELLA VISTA', 'HIJA/HIJO', '10 KG', '', '1', 4, 68),
(23, 31000002, 'ADRIAN', 'VALBUENA', '2016-05-05', '', '', '', 'CALLE 2', 'CASA 5 VEREDA BELLA VISTA', 'HIJA/HIJO', '10 KG', '', '1', 4, 68),
(24, 17466351, 'SONIA', 'VALENCIA', '1990-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 2', 'ESPOSA/ESPOSO', '10 KG', '', '1', 4, 81),
(25, 29810444, 'DIEGO', 'BARRERA VALENCIA', '2000-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 2', 'HIJA/HIJO', '10 KG', '', '1', 4, 81),
(26, 24277841, 'PATRICIA', 'SANCHEZ', '2000-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 2', 'SOBRINA/SOBRINO', '10 KG', '', '1', 4, 81),
(27, 8046551, 'GLENDA', 'ECHEVERRIA', '1990-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 3', 'ESPOSA/ESPOSO', '10 KG', '', '1', 4, 82),
(28, 24775960, 'CARLOS', 'OCARIZ', '2000-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 3', 'HIJA/HIJO', '10 KG', '', '1', 4, 82),
(29, 3499892, 'JUVENCINA', 'ECHEVERRIA', '1950-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 3', 'SUEGRA/SUEGRO', '10 KG', '', '1', 4, 82),
(30, 5660387, 'ESTRELLA', 'SILVA DE OCARIZ', '1950-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 6', 'ESPOSA/ESPOSO', '10 KG', '', '1', 4, 85),
(31, 15028097, 'LUIS', 'OCARIZ SILVA', '1980-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 6', 'HIJA/HIJO', '10 KG', '', '1', 4, 85),
(32, 16716542, 'JESSIKA', 'LARA CALLES', '1980-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 6', 'NUERA/YERNO', '10 KG', '', '1', 4, 85),
(33, 30655157, 'CARLOS ALEJANDRO', 'OCARIZ LARA', '2000-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 6', 'NIETO/NIETA', '10 KG', '', '1', 4, 85),
(34, 31000003, 'VICTORIA', 'OCARIZ LARA', '2010-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 6', 'NIETO/NIETA', '10 KG', '', '1', 4, 85),
(35, 6196149, 'CELINDA ISABEL', 'FUENTES', '1960-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 7', 'ESPOSA/ESPOSO', '10 KG', '', '1', 4, 86),
(36, 26334572, 'GIOVANNA', 'OCARIZ FUENTES', '2000-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 7', 'HIJA/HIJO', '10 KG', '', '1', 4, 86),
(37, 31000004, 'SOPHIA', 'OCARIZ FUENTES', '2010-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 7', 'HIJA/HIJO', '10 KG', '', '1', 4, 86),
(38, 4701871, 'CECILIA', 'GARCIA', '1950-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 8', 'ESPOSA/ESPOSO', '10 KG', '', '1', 4, 87),
(39, 25495693, 'MIRANDA', 'PADRON', '1998-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 8', 'HIJA/HIJO', '10 KG', '', '1', 4, 87),
(40, 3079011, 'JOSE', 'PEREZ', '1946-04-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 9', 'ESPOSA/ESPOSO', '10 KG', '', '1', 4, 88),
(41, 20551618, 'MANUEL', 'PEREZ GAONA', '1990-01-01', '', '', '', 'CALLE 2', 'TAPON PORTALES DE BELLA VISTA CASA 9', 'HIJA/HIJO', '10 KG', '', '1', 4, 88);

-- --------------------------------------------------------

--
-- Table structure for table `tab_reg`
--

CREATE TABLE `tab_reg` (
  `ident_reg` int(11) NOT NULL,
  `nombr_reg` varchar(45) DEFAULT NULL,
  `descr_reg` varchar(250) DEFAULT NULL,
  `fecre_reg` date DEFAULT NULL,
  `statu_reg` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tab_tip`
--

CREATE TABLE `tab_tip` (
  `ident_tip` int(11) NOT NULL,
  `nombr_tip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tab_tip`
--

INSERT INTO `tab_tip` (`ident_tip`, `nombr_tip`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'VOCERO'),
(3, 'JEFE DE CALLE'),
(4, 'CIUDADANO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `det_reg`
--
ALTER TABLE `det_reg`
  ADD PRIMARY KEY (`correlativo`),
  ADD KEY `fk_det_reg_tab_jef1_idx` (`ident_jef`),
  ADD KEY `fk_det_reg_tab_reg1_idx` (`ident_reg`);

--
-- Indexes for table `tab_jef`
--
ALTER TABLE `tab_jef`
  ADD PRIMARY KEY (`ident_jef`),
  ADD KEY `fk_tab_jef_tab_tip1_idx` (`ident_tip`);

--
-- Indexes for table `tab_not`
--
ALTER TABLE `tab_not`
  ADD PRIMARY KEY (`ident_not`),
  ADD KEY `ident_jef` (`ident_jef`);

--
-- Indexes for table `tab_per`
--
ALTER TABLE `tab_per`
  ADD PRIMARY KEY (`ident_per`),
  ADD KEY `fk_tab_per_tab_tip1_idx` (`ident_tip`),
  ADD KEY `fk_tab_per_tab_jef1_idx` (`ident_jef`);

--
-- Indexes for table `tab_reg`
--
ALTER TABLE `tab_reg`
  ADD PRIMARY KEY (`ident_reg`);

--
-- Indexes for table `tab_tip`
--
ALTER TABLE `tab_tip`
  ADD PRIMARY KEY (`ident_tip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `det_reg`
--
ALTER TABLE `det_reg`
  MODIFY `correlativo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tab_jef`
--
ALTER TABLE `tab_jef`
  MODIFY `ident_jef` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `tab_not`
--
ALTER TABLE `tab_not`
  MODIFY `ident_not` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tab_per`
--
ALTER TABLE `tab_per`
  MODIFY `ident_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tab_reg`
--
ALTER TABLE `tab_reg`
  MODIFY `ident_reg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tab_tip`
--
ALTER TABLE `tab_tip`
  MODIFY `ident_tip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tab_not`
--
ALTER TABLE `tab_not`
  ADD CONSTRAINT `tab_not_ibfk_1` FOREIGN KEY (`ident_jef`) REFERENCES `tab_jef` (`ident_jef`);
