-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 22, 2020 at 09:46 PM
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

--
-- Dumping data for table `det_reg`
--

INSERT INTO `det_reg` (`correlativo`, `ident_reg`, `ident_jef`) VALUES
(1, 1, 3),
(2, 1, 4),
(3, 1, 5),
(4, 1, 6),
(5, 1, 7),
(6, 1, 8),
(7, 1, 9),
(8, 1, 10),
(9, 1, 11),
(10, 1, 12),
(11, 1, 13),
(12, 1, 14),
(13, 1, 15),
(14, 1, 16),
(15, 1, 17),
(16, 1, 18),
(17, 2, 21),
(18, 2, 22),
(19, 2, 23),
(20, 2, 24),
(21, 2, 25);

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
(2, 15568318, 'ERICK GIOVANNY', 'GONZALEZ BUITRAGO', '1982-03-25', '(0416) 076 9717', '', 'EG39859@GMAIL.COM', 'CALLE 2', 'RESIDENCIAS CANTV', 'GRANEL', '', 'ERICK', '827ccb0eea8a706c4c34a16891f84e7b', '1', 2),
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
(25, 2892023, 'LUIS ELIGIO', 'MOLINA', '1943-05-05', '(0412) 519 6958', '', 'SOYVIDAINTEGRAL@GMAIL.COM', 'CALLE 2', 'Z13_3', '10 KG', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '1', 4);

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
(1, 'Consejo Comunal celebrará reunión el próximo 25 de Enero', 'Toda la Comunidad de Comunidad 12 de Octubre esta invitada', '<p style=\"text-align:center\"><span style=\"font-size:24px\"><strong>Consejo Comunal celebrar&aacute; reuni&oacute;n el pr&oacute;ximo 25 de Enero</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\">Toda la Comunidad de Comunidad 12 de Octubre esta invitada</span></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et libero vitae neque varius convallis ut in sapien. Donec quis eros quis eros sollicitudin aliquam. Aenean at gravida justo. Morbi sodales eu metus ac sollicitudin. Morbi vitae maximus leo. Suspendisse sed elementum augue. Integer a nisi id orci ultrices scelerisque in in lacus. Curabitur dignissim scelerisque purus, id viverra sem sodales sed. Curabitur mauris nisi, semper quis odio molestie, faucibus porttitor neque. Donec in sapien et libero tincidunt lacinia at eu lectus. Sed porttitor ullamcorper sapien id semper. Vestibulum accumsan consequat nisl pretium convallis. Mauris placerat in lectus ut posuere. Fusce sed felis eu enim scelerisque consequat sit amet in sem. Donec facilisis enim felis, sed varius eros auctor id. Phasellus et diam mi.</p>\r\n\r\n<p>Proin ac metus dignissim, pulvinar leo at, pulvinar odio. Nullam sed erat velit. Maecenas molestie, tellus et scelerisque congue, ligula sapien sodales nisl, a aliquet massa ante id leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur ut rhoncus nisi. Nunc fermentum arcu enim, porta mattis metus ullamcorper eu. Etiam ac magna purus. In sit amet est sapien. Donec imperdiet mi sit amet luctus feugiat.</p>\r\n\r\n<p>Duis vel iaculis ex, quis blandit mauris. Pellentesque lobortis est ante, at eleifend sapien molestie sed. Curabitur rutrum condimentum sapien eget sagittis. Suspendisse rutrum ligula enim, vehicula porta magna ornare eget. Cras hendrerit blandit mauris. Sed sed lectus ac lorem congue laoreet. Suspendisse potenti. Nam tempor, arcu quis commodo ultrices, sapien quam venenatis purus, vel tristique purus diam et ante. Etiam lobortis diam id sagittis feugiat. Maecenas nec congue tortor, ac suscipit massa. Pellentesque suscipit diam at pellentesque auctor. Nulla facilisi. Ut sed dignissim sapien. Praesent luctus ante vitae orci pulvinar suscipit. Curabitur quis arcu id ligula facilisis varius a eget nulla.</p>\r\n\r\n<p>Proin a arcu nec risus tempor egestas sed sed ex. Aliquam et diam pharetra, pharetra orci varius, dictum metus. Fusce vehicula quis lectus quis rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque dictum elementum rutrum. Morbi varius at lorem eu faucibus. Sed ultrices porttitor eros eget fermentum. Fusce nisi elit, luctus vel faucibus sit amet, bibendum quis eros. Fusce efficitur massa vel aliquet mattis. Proin augue dui, ultrices eget odio molestie, scelerisque sodales turpis. Praesent maximus leo non libero tristique, vel viverra tortor laoreet. Mauris semper condimentum dolor eget commodo. Praesent hendrerit et magna at semper.</p>\r\n\r\n<p>Etiam augue ex, venenatis aliquet accumsan non, pharetra sit amet libero. Curabitur congue gravida sapien quis rhoncus. Sed et metus rhoncus, commodo enim quis, dapibus magna. Nam sit amet libero velit. Morbi laoreet egestas justo, sed tempor magna ultricies vel. Pellentesque consequat eros euismod enim interdum ultricies. Phasellus tincidunt porttitor leo. Curabitur quis ex mauris. Duis at nisl in lacus eleifend luctus. Curabitur vel pharetra massa.</p>\r\n', 'default.png', '2020-01-22 20:18:28', '1', 1),
(2, 'PDVSA Gas Comunal entregará bombonas la próxima semana', 'Se avisará según la calle donde usted viva cuando será entregada', '<p style=\"text-align:center\"><span style=\"font-size:24px\"><strong>PDVSA Gas Comunal entregar&aacute; bombonas la pr&oacute;xima semana</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\">Se avisar&aacute; seg&uacute;n la calle donde usted viva cuando ser&aacute; entregada</span></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et libero vitae neque varius convallis ut in sapien. Donec quis eros quis eros sollicitudin aliquam. Aenean at gravida justo. Morbi sodales eu metus ac sollicitudin. Morbi vitae maximus leo. Suspendisse sed elementum augue. Integer a nisi id orci ultrices scelerisque in in lacus. Curabitur dignissim scelerisque purus, id viverra sem sodales sed. Curabitur mauris nisi, semper quis odio molestie, faucibus porttitor neque. Donec in sapien et libero tincidunt lacinia at eu lectus. Sed porttitor ullamcorper sapien id semper. Vestibulum accumsan consequat nisl pretium convallis. Mauris placerat in lectus ut posuere. Fusce sed felis eu enim scelerisque consequat sit amet in sem. Donec facilisis enim felis, sed varius eros auctor id. Phasellus et diam mi.</p>\r\n\r\n<p>Proin ac metus dignissim, pulvinar leo at, pulvinar odio. Nullam sed erat velit. Maecenas molestie, tellus et scelerisque congue, ligula sapien sodales nisl, a aliquet massa ante id leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur ut rhoncus nisi. Nunc fermentum arcu enim, porta mattis metus ullamcorper eu. Etiam ac magna purus. In sit amet est sapien. Donec imperdiet mi sit amet luctus feugiat.</p>\r\n\r\n<p>Duis vel iaculis ex, quis blandit mauris. Pellentesque lobortis est ante, at eleifend sapien molestie sed. Curabitur rutrum condimentum sapien eget sagittis. Suspendisse rutrum ligula enim, vehicula porta magna ornare eget. Cras hendrerit blandit mauris. Sed sed lectus ac lorem congue laoreet. Suspendisse potenti. Nam tempor, arcu quis commodo ultrices, sapien quam venenatis purus, vel tristique purus diam et ante. Etiam lobortis diam id sagittis feugiat. Maecenas nec congue tortor, ac suscipit massa. Pellentesque suscipit diam at pellentesque auctor. Nulla facilisi. Ut sed dignissim sapien. Praesent luctus ante vitae orci pulvinar suscipit. Curabitur quis arcu id ligula facilisis varius a eget nulla.</p>\r\n\r\n<p>Proin a arcu nec risus tempor egestas sed sed ex. Aliquam et diam pharetra, pharetra orci varius, dictum metus. Fusce vehicula quis lectus quis rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque dictum elementum rutrum. Morbi varius at lorem eu faucibus. Sed ultrices porttitor eros eget fermentum. Fusce nisi elit, luctus vel faucibus sit amet, bibendum quis eros. Fusce efficitur massa vel aliquet mattis. Proin augue dui, ultrices eget odio molestie, scelerisque sodales turpis. Praesent maximus leo non libero tristique, vel viverra tortor laoreet. Mauris semper condimentum dolor eget commodo. Praesent hendrerit et magna at semper.</p>\r\n\r\n<p>Etiam augue ex, venenatis aliquet accumsan non, pharetra sit amet libero. Curabitur congue gravida sapien quis rhoncus. Sed et metus rhoncus, commodo enim quis, dapibus magna. Nam sit amet libero velit. Morbi laoreet egestas justo, sed tempor magna ultricies vel. Pellentesque consequat eros euismod enim interdum ultricies. Phasellus tincidunt porttitor leo. Curabitur quis ex mauris. Duis at nisl in lacus eleifend luctus. Curabitur vel pharetra massa.</p>\r\n', 'img_b6704e617c1fb320cd14f9064df1d3a4.jpg', '2020-01-22 21:27:28', '1', 1),
(3, 'Estudiantes de la UNEFA realizan Servicio Comunitario en la Comunidad', 'Alumnos de la Carrera Ingeniería de Sistemas realizan Sistema para la gestión del Consejo Comunal', '<p style=\"text-align:center\"><span style=\"font-size:24px\"><strong>Estudiantes de la UNEFA realizan Servicio Comunitario en la Comunidad</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\">Alumnos de la Carrera Ingenier&iacute;a de Sistemas realizan Sistema para la gesti&oacute;n del Consejo Comunal</span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et libero vitae neque varius convallis ut in sapien. Donec quis eros quis eros sollicitudin aliquam. Aenean at gravida justo. Morbi sodales eu metus ac sollicitudin. Morbi vitae maximus leo. Suspendisse sed elementum augue. Integer a nisi id orci ultrices scelerisque in in lacus. Curabitur dignissim scelerisque purus, id viverra sem sodales sed. Curabitur mauris nisi, semper quis odio molestie, faucibus porttitor neque. Donec in sapien et libero tincidunt lacinia at eu lectus. Sed porttitor ullamcorper sapien id semper. Vestibulum accumsan consequat nisl pretium convallis. Mauris placerat in lectus ut posuere. Fusce sed felis eu enim scelerisque consequat sit amet in sem. Donec facilisis enim felis, sed varius eros auctor id. Phasellus et diam mi.</p>\r\n\r\n<p>Proin ac metus dignissim, pulvinar leo at, pulvinar odio. Nullam sed erat velit. Maecenas molestie, tellus et scelerisque congue, ligula sapien sodales nisl, a aliquet massa ante id leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur ut rhoncus nisi. Nunc fermentum arcu enim, porta mattis metus ullamcorper eu. Etiam ac magna purus. In sit amet est sapien. Donec imperdiet mi sit amet luctus feugiat.</p>\r\n\r\n<p>Duis vel iaculis ex, quis blandit mauris. Pellentesque lobortis est ante, at eleifend sapien molestie sed. Curabitur rutrum condimentum sapien eget sagittis. Suspendisse rutrum ligula enim, vehicula porta magna ornare eget. Cras hendrerit blandit mauris. Sed sed lectus ac lorem congue laoreet. Suspendisse potenti. Nam tempor, arcu quis commodo ultrices, sapien quam venenatis purus, vel tristique purus diam et ante. Etiam lobortis diam id sagittis feugiat. Maecenas nec congue tortor, ac suscipit massa. Pellentesque suscipit diam at pellentesque auctor. Nulla facilisi. Ut sed dignissim sapien. Praesent luctus ante vitae orci pulvinar suscipit. Curabitur quis arcu id ligula facilisis varius a eget nulla.</p>\r\n\r\n<p>Proin a arcu nec risus tempor egestas sed sed ex. Aliquam et diam pharetra, pharetra orci varius, dictum metus. Fusce vehicula quis lectus quis rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque dictum elementum rutrum. Morbi varius at lorem eu faucibus. Sed ultrices porttitor eros eget fermentum. Fusce nisi elit, luctus vel faucibus sit amet, bibendum quis eros. Fusce efficitur massa vel aliquet mattis. Proin augue dui, ultrices eget odio molestie, scelerisque sodales turpis. Praesent maximus leo non libero tristique, vel viverra tortor laoreet. Mauris semper condimentum dolor eget commodo. Praesent hendrerit et magna at semper.</p>\r\n\r\n<p>Etiam augue ex, venenatis aliquet accumsan non, pharetra sit amet libero. Curabitur congue gravida sapien quis rhoncus. Sed et metus rhoncus, commodo enim quis, dapibus magna. Nam sit amet libero velit. Morbi laoreet egestas justo, sed tempor magna ultricies vel. Pellentesque consequat eros euismod enim interdum ultricies. Phasellus tincidunt porttitor leo. Curabitur quis ex mauris. Duis at nisl in lacus eleifend luctus. Curabitur vel pharetra massa.</p>\r\n', 'img_6af942beb25cb9afa9aabd00340ac11a.jpg', '2020-01-22 21:31:16', '1', 1),
(4, 'El CLAP se distribuirá el miercoles 22 de Enero', 'Después de varias semanas posterior al pago, se entregará a la comunidad', '<p style=\"text-align:center\"><span style=\"font-size:24px\"><strong>El CLAP se distribuir&aacute; el miercoles 22 de Enero</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:24px\">Despu&eacute;s de varias semanas posterior al pago, se entregar&aacute; a la comunidad</span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et libero vitae neque varius convallis ut in sapien. Donec quis eros quis eros sollicitudin aliquam. Aenean at gravida justo. Morbi sodales eu metus ac sollicitudin. Morbi vitae maximus leo. Suspendisse sed elementum augue. Integer a nisi id orci ultrices scelerisque in in lacus. Curabitur dignissim scelerisque purus, id viverra sem sodales sed. Curabitur mauris nisi, semper quis odio molestie, faucibus porttitor neque. Donec in sapien et libero tincidunt lacinia at eu lectus. Sed porttitor ullamcorper sapien id semper. Vestibulum accumsan consequat nisl pretium convallis. Mauris placerat in lectus ut posuere. Fusce sed felis eu enim scelerisque consequat sit amet in sem. Donec facilisis enim felis, sed varius eros auctor id. Phasellus et diam mi.</p>\r\n\r\n<p>Proin ac metus dignissim, pulvinar leo at, pulvinar odio. Nullam sed erat velit. Maecenas molestie, tellus et scelerisque congue, ligula sapien sodales nisl, a aliquet massa ante id leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur ut rhoncus nisi. Nunc fermentum arcu enim, porta mattis metus ullamcorper eu. Etiam ac magna purus. In sit amet est sapien. Donec imperdiet mi sit amet luctus feugiat.</p>\r\n\r\n<p>Duis vel iaculis ex, quis blandit mauris. Pellentesque lobortis est ante, at eleifend sapien molestie sed. Curabitur rutrum condimentum sapien eget sagittis. Suspendisse rutrum ligula enim, vehicula porta magna ornare eget. Cras hendrerit blandit mauris. Sed sed lectus ac lorem congue laoreet. Suspendisse potenti. Nam tempor, arcu quis commodo ultrices, sapien quam venenatis purus, vel tristique purus diam et ante. Etiam lobortis diam id sagittis feugiat. Maecenas nec congue tortor, ac suscipit massa. Pellentesque suscipit diam at pellentesque auctor. Nulla facilisi. Ut sed dignissim sapien. Praesent luctus ante vitae orci pulvinar suscipit. Curabitur quis arcu id ligula facilisis varius a eget nulla.</p>\r\n\r\n<p>Proin a arcu nec risus tempor egestas sed sed ex. Aliquam et diam pharetra, pharetra orci varius, dictum metus. Fusce vehicula quis lectus quis rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque dictum elementum rutrum. Morbi varius at lorem eu faucibus. Sed ultrices porttitor eros eget fermentum. Fusce nisi elit, luctus vel faucibus sit amet, bibendum quis eros. Fusce efficitur massa vel aliquet mattis. Proin augue dui, ultrices eget odio molestie, scelerisque sodales turpis. Praesent maximus leo non libero tristique, vel viverra tortor laoreet. Mauris semper condimentum dolor eget commodo. Praesent hendrerit et magna at semper.</p>\r\n\r\n<p>Etiam augue ex, venenatis aliquet accumsan non, pharetra sit amet libero. Curabitur congue gravida sapien quis rhoncus. Sed et metus rhoncus, commodo enim quis, dapibus magna. Nam sit amet libero velit. Morbi laoreet egestas justo, sed tempor magna ultricies vel. Pellentesque consequat eros euismod enim interdum ultricies. Phasellus tincidunt porttitor leo. Curabitur quis ex mauris. Duis at nisl in lacus eleifend luctus. Curabitur vel pharetra massa.</p>\r\n', 'img_469e1bd6935b44d63e6033cf316bf9cd.jpg', '2020-01-22 21:32:30', '1', 1),
(5, 'Servicio Comunitario de la UNEFA realiza Inducción del Sistema Web para el Consejo Comunal', 'Miembros del Consejo Comunal y de la Comunidad en general asistieron a la invitación de los alumnos', '<p style=\"text-align:center\"><span style=\"font-size:24px\"><strong>Servicio Comunitario de la UNEFA realiza Inducci&oacute;n del Sistema Web para el Consejo Comunal</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\">Miembros del Consejo Comunal y de la Comunidad en general asistieron a la invitaci&oacute;n de los alumnos</span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et libero vitae neque varius convallis ut in sapien. Donec quis eros quis eros sollicitudin aliquam. Aenean at gravida justo. Morbi sodales eu metus ac sollicitudin. Morbi vitae maximus leo. Suspendisse sed elementum augue. Integer a nisi id orci ultrices scelerisque in in lacus. Curabitur dignissim scelerisque purus, id viverra sem sodales sed. Curabitur mauris nisi, semper quis odio molestie, faucibus porttitor neque. Donec in sapien et libero tincidunt lacinia at eu lectus. Sed porttitor ullamcorper sapien id semper. Vestibulum accumsan consequat nisl pretium convallis. Mauris placerat in lectus ut posuere. Fusce sed felis eu enim scelerisque consequat sit amet in sem. Donec facilisis enim felis, sed varius eros auctor id. Phasellus et diam mi.</p>\r\n\r\n<p>Proin ac metus dignissim, pulvinar leo at, pulvinar odio. Nullam sed erat velit. Maecenas molestie, tellus et scelerisque congue, ligula sapien sodales nisl, a aliquet massa ante id leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur ut rhoncus nisi. Nunc fermentum arcu enim, porta mattis metus ullamcorper eu. Etiam ac magna purus. In sit amet est sapien. Donec imperdiet mi sit amet luctus feugiat.</p>\r\n\r\n<p>Duis vel iaculis ex, quis blandit mauris. Pellentesque lobortis est ante, at eleifend sapien molestie sed. Curabitur rutrum condimentum sapien eget sagittis. Suspendisse rutrum ligula enim, vehicula porta magna ornare eget. Cras hendrerit blandit mauris. Sed sed lectus ac lorem congue laoreet. Suspendisse potenti. Nam tempor, arcu quis commodo ultrices, sapien quam venenatis purus, vel tristique purus diam et ante. Etiam lobortis diam id sagittis feugiat. Maecenas nec congue tortor, ac suscipit massa. Pellentesque suscipit diam at pellentesque auctor. Nulla facilisi. Ut sed dignissim sapien. Praesent luctus ante vitae orci pulvinar suscipit. Curabitur quis arcu id ligula facilisis varius a eget nulla.</p>\r\n\r\n<p>Proin a arcu nec risus tempor egestas sed sed ex. Aliquam et diam pharetra, pharetra orci varius, dictum metus. Fusce vehicula quis lectus quis rutrum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque dictum elementum rutrum. Morbi varius at lorem eu faucibus. Sed ultrices porttitor eros eget fermentum. Fusce nisi elit, luctus vel faucibus sit amet, bibendum quis eros. Fusce efficitur massa vel aliquet mattis. Proin augue dui, ultrices eget odio molestie, scelerisque sodales turpis. Praesent maximus leo non libero tristique, vel viverra tortor laoreet. Mauris semper condimentum dolor eget commodo. Praesent hendrerit et magna at semper.</p>\r\n\r\n<p>Etiam augue ex, venenatis aliquet accumsan non, pharetra sit amet libero. Curabitur congue gravida sapien quis rhoncus. Sed et metus rhoncus, commodo enim quis, dapibus magna. Nam sit amet libero velit. Morbi laoreet egestas justo, sed tempor magna ultricies vel. Pellentesque consequat eros euismod enim interdum ultricies. Phasellus tincidunt porttitor leo. Curabitur quis ex mauris. Duis at nisl in lacus eleifend luctus. Curabitur vel pharetra massa.</p>\r\n', 'img_0400d0513fecae45315b51eff29ff4ef.jpg', '2020-01-22 21:35:10', '1', 1);

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
(5, 30134924, 'GIAN', 'MOLINA', '2003-01-09', '', '', '', 'CALLE 2', 'Z13_1', 'HIJA/HIJO', '10 KG', '', '1', 4, 24);

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

--
-- Dumping data for table `tab_reg`
--

INSERT INTO `tab_reg` (`ident_reg`, `nombr_reg`, `descr_reg`, `fecre_reg`, `statu_reg`) VALUES
(1, 'CLAP DICIEMBRE 2019', 'CALLE 2 URBANIZACION HACARITAMA', '2019-12-21', '1'),
(2, 'GAS DICIEMBRE 2019', 'VEREDA BELLAVISTA', '2019-12-27', '1');

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
  MODIFY `correlativo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tab_jef`
--
ALTER TABLE `tab_jef`
  MODIFY `ident_jef` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tab_not`
--
ALTER TABLE `tab_not`
  MODIFY `ident_not` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tab_per`
--
ALTER TABLE `tab_per`
  MODIFY `ident_per` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tab_reg`
--
ALTER TABLE `tab_reg`
  MODIFY `ident_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
