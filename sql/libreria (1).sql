-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2022 a las 08:54:57
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `idAutor` int(11) NOT NULL,
  `nombreAutor` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidoAutor` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`idAutor`, `nombreAutor`, `apellidoAutor`) VALUES
(1, 'Alice', 'Oseman'),
(2, 'Haruki', 'Murakami'),
(3, 'Paulo', 'Coelho'),
(4, 'Pablo', 'Neruda'),
(5, 'Antonio', 'Ortiz'),
(8, 'Alice', 'Kellen'),
(9, 'Alice', 'Munro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `categoria` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `categoria`) VALUES
(3, 'Ciencia Ficción'),
(1, 'Ficción Adolescente'),
(2, 'Romance');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nombreCliente` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidoCliente` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `correoCliente` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `idRol` int(11) NOT NULL,
  `usuarioCliente` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasenaCliente` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `idPais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombreCliente`, `apellidoCliente`, `correoCliente`, `idRol`, `usuarioCliente`, `contrasenaCliente`, `idPais`) VALUES
(1, 'Nikol', 'Ramírez', 'nikolr9.29@gmail.com', 3, 'Nikol', 'HgLesw==', 52),
(2, 'Alexandra', 'Ramos', 'Alexandra@gmail.com', 3, 'Alexandra', 'HgLesw==', 12),
(3, 'Andrea', 'Ramos', 'andrea@gmail.com', 3, 'Andrea', 'T1WL8/Oy', 52),
(4, 'Nikol', 'Ramírez', 'nikol@gmail.com', 3, 'Nikol12', 'HgLesw==', 52),
(5, 'Neil', 'Armstrong', 'Neil@hotmail.com', 3, 'Neil', 'QF6G7fc=', 52),
(6, 'Camila', 'Ramírez', 'Camila@gmail.com', 3, 'Camila', 'TVqC6Pqy', 52),
(7, 'John', 'Glenn', 'JohnGlenn@gmail.com', 3, 'JohnGlenn', 'HgLesw==', 17),
(8, 'Antonio', 'Ortiz', 'AntonioOrtiz@hotmail.com', 3, 'AntoniOrtiz', 'Gw3YuQ==', 52),
(9, 'Julian', 'Lopez', 'julian@gmail.com', 3, 'Julian', 'HwnctaPl', 102);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `idCompra` int(11) NOT NULL,
  `idLibro` int(11) NOT NULL,
  `fechaCompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras_cliente`
--

CREATE TABLE `compras_cliente` (
  `idCompra_cliente` int(11) NOT NULL,
  `idCompra` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `idEditorial` int(11) NOT NULL,
  `nombreEditorial` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`idEditorial`, `nombreEditorial`) VALUES
(1, 'Flower');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `estado` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `estado`) VALUES
(1, 'Habilitado'),
(2, 'Inhabilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE `foro` (
  `idForo` int(7) NOT NULL,
  `autor` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT '',
  `titulo` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL DEFAULT '',
  `mensaje` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `respuestas` int(11) NOT NULL DEFAULT 0,
  `identificador` int(7) NOT NULL DEFAULT 0,
  `ult_respuesta` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `idLibro` int(11) NOT NULL,
  `nombreLibro` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcionLibro` text COLLATE utf8_spanish2_ci NOT NULL,
  `precioLibro` int(20) NOT NULL,
  `idEditorial` int(11) NOT NULL,
  `idPais` int(11) NOT NULL,
  `idTematica` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro_autor`
--

CREATE TABLE `libro_autor` (
  `idLibro_autor` int(11) NOT NULL,
  `idLibro` int(11) NOT NULL,
  `idAutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `idPais` int(11) NOT NULL,
  `nombrePais` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`idPais`, `nombrePais`) VALUES
(1, 'Afganistán'),
(2, 'Islas Gland'),
(3, 'Albania'),
(4, 'Alemania'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Anguilla'),
(8, 'Antártida'),
(9, 'Antigua y Barbuda'),
(10, 'Antillas Holandesas'),
(11, 'Arabia Saudí'),
(12, 'Argelia'),
(13, 'Argentina'),
(14, 'Armenia'),
(15, 'Aruba'),
(16, 'Australia'),
(17, 'Austria'),
(18, 'Azerbaiyán'),
(19, 'Bahamas'),
(20, 'Bahréin'),
(21, 'Bangladesh'),
(22, 'Barbados'),
(23, 'Bielorrusia'),
(24, 'Bélgica'),
(25, 'Belice'),
(26, 'Benin'),
(27, 'Bermudas'),
(28, 'Bhután'),
(29, 'Bolivia'),
(30, 'Bosnia y Herzegovina'),
(31, 'Botsuana'),
(32, 'Isla Bouvet'),
(33, 'Brasil'),
(34, 'Brunéi'),
(35, 'Bulgaria'),
(36, 'Burkina Faso'),
(37, 'Burundi'),
(38, 'Cabo Verde'),
(39, 'Islas Caimán'),
(40, 'Camboya'),
(41, 'Camerún'),
(42, 'Canadá'),
(43, 'República Centroafricana'),
(44, 'Chad'),
(45, 'República Checa'),
(46, 'Chile'),
(47, 'China'),
(48, 'Chipre'),
(49, 'Isla de Navidad'),
(50, 'Ciudad del Vaticano'),
(51, 'Islas Cocos'),
(52, 'Colombia'),
(53, 'Comoras'),
(54, 'República Democrática del'),
(55, 'Congo'),
(56, 'Islas Cook'),
(57, 'Corea del Norte'),
(58, 'Corea del Sur'),
(59, 'Costa de Marfil'),
(60, 'Costa Rica'),
(61, 'Croacia'),
(62, 'Cuba'),
(63, 'Dinamarca'),
(64, 'Dominica'),
(65, 'República Dominicana'),
(66, 'Ecuador'),
(67, 'Egipto'),
(68, 'El Salvador'),
(69, 'Emiratos Árabes Unidos'),
(70, 'Eritrea'),
(71, 'Eslovaquia'),
(72, 'Eslovenia'),
(73, 'España'),
(74, 'Islas ultramarinas de Est'),
(75, 'Estados Unidos'),
(76, 'Estonia'),
(77, 'Etiopía'),
(78, 'Islas Feroe'),
(79, 'Filipinas'),
(80, 'Finlandia'),
(81, 'Fiyi'),
(82, 'Francia'),
(83, 'Gabón'),
(84, 'Gambia'),
(85, 'Georgia'),
(86, 'Islas Georgias del Sur y '),
(87, 'Ghana'),
(88, 'Gibraltar'),
(89, 'Granada'),
(90, 'Grecia'),
(91, 'Groenlandia'),
(92, 'Guadalupe'),
(93, 'Guam'),
(94, 'Guatemala'),
(95, 'Guayana Francesa'),
(96, 'Guinea'),
(97, 'Guinea Ecuatorial'),
(98, 'Guinea-Bissau'),
(99, 'Guyana'),
(100, 'Haití'),
(101, 'Islas Heard y McDonald'),
(102, 'Honduras'),
(103, 'Hong Kong'),
(104, 'Hungría'),
(105, 'India'),
(106, 'Indonesia'),
(107, 'Irán'),
(108, 'Iraq'),
(109, 'Irlanda'),
(110, 'Islandia'),
(111, 'Israel'),
(112, 'Italia'),
(113, 'Jamaica'),
(114, 'Japón'),
(115, 'Jordania'),
(116, 'Kazajstán'),
(117, 'Kenia'),
(118, 'Kirguistán'),
(119, 'Kiribati'),
(120, 'Kuwait'),
(121, 'Laos'),
(122, 'Lesotho'),
(123, 'Letonia'),
(124, 'Líbano'),
(125, 'Liberia'),
(126, 'Libia'),
(127, 'Liechtenstein'),
(128, 'Lituania'),
(129, 'Luxemburgo'),
(130, 'Macao'),
(131, 'ARY Macedonia'),
(132, 'Madagascar'),
(133, 'Malasia'),
(134, 'Malawi'),
(135, 'Maldivas'),
(136, 'Malí'),
(137, 'Malta'),
(138, 'Islas Malvinas'),
(139, 'Islas Marianas del Norte'),
(140, 'Marruecos'),
(141, 'Islas Marshall'),
(142, 'Martinica'),
(143, 'Mauricio'),
(144, 'Mauritania'),
(145, 'Mayotte'),
(146, 'México'),
(147, 'Micronesia'),
(148, 'Moldavia'),
(149, 'Mónaco'),
(150, 'Mongolia'),
(151, 'Montserrat'),
(152, 'Mozambique'),
(153, 'Myanmar'),
(154, 'Namibia'),
(155, 'Nauru'),
(156, 'Nepal'),
(157, 'Nicaragua'),
(158, 'Níger'),
(159, 'Nigeria'),
(160, 'Niue'),
(161, 'Isla Norfolk'),
(162, 'Noruega'),
(163, 'Nueva Caledonia'),
(164, 'Nueva Zelanda'),
(165, 'Omán'),
(166, 'Países Bajos'),
(167, 'Pakistán'),
(168, 'Palau'),
(169, 'Palestina'),
(170, 'Panamá'),
(171, 'Papúa Nueva Guinea'),
(172, 'Paraguay'),
(173, 'Perú'),
(174, 'Islas Pitcairn'),
(175, 'Polinesia Francesa'),
(176, 'Polonia'),
(177, 'Portugal'),
(178, 'Puerto Rico'),
(179, 'Qatar'),
(180, 'Reino Unido'),
(181, 'Reunión'),
(182, 'Ruanda'),
(183, 'Rumania'),
(184, 'Rusia'),
(185, 'Sahara Occidental'),
(186, 'Islas Salomón'),
(187, 'Samoa'),
(188, 'Samoa Americana'),
(189, 'San Cristóbal y Nevis'),
(190, 'San Marino'),
(191, 'San Pedro y Miquelón'),
(192, 'San Vicente y las Granadi'),
(193, 'Santa Helena'),
(194, 'Santa Lucía'),
(195, 'Santo Tomé y Príncipe'),
(196, 'Senegal'),
(197, 'Serbia y Montenegro'),
(198, 'Seychelles'),
(199, 'Sierra Leona'),
(200, 'Singapur'),
(201, 'Siria'),
(202, 'Somalia'),
(203, 'Sri Lanka'),
(204, 'Suazilandia'),
(205, 'Sudáfrica'),
(206, 'Sudán'),
(207, 'Suecia'),
(208, 'Suiza'),
(209, 'Surinam'),
(210, 'Svalbard y Jan Mayen'),
(211, 'Tailandia'),
(212, 'Taiwán'),
(213, 'Tanzania'),
(214, 'Tayikistán'),
(215, 'Territorio Británico del '),
(216, 'Territorios Australes Fra'),
(217, 'Timor Oriental'),
(218, 'Togo'),
(219, 'Tokelau'),
(220, 'Tonga'),
(221, 'Trinidad y Tobago'),
(222, 'Túnez'),
(223, 'Islas Turcas y Caicos'),
(224, 'Turkmenistán'),
(225, 'Turquía'),
(226, 'Tuvalu'),
(227, 'Ucrania'),
(228, 'Uganda'),
(229, 'Uruguay'),
(230, 'Uzbekistán'),
(231, 'Vanuatu'),
(232, 'Venezuela'),
(233, 'Vietnam'),
(234, 'Islas Vírgenes Británicas'),
(235, 'Islas Vírgenes de los Est'),
(236, 'Wallis y Futuna'),
(237, 'Yemen'),
(238, 'Yibuti'),
(239, 'Zambia'),
(240, 'Zimbabue');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `rolUsuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `rolUsuario`) VALUES
(1, 'Administrador'),
(2, 'Empleado'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tematica`
--

CREATE TABLE `tematica` (
  `idTematica` int(11) NOT NULL,
  `tematica` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tematica`
--

INSERT INTO `tematica` (`idTematica`, `tematica`) VALUES
(4, 'Arte'),
(3, 'Ciencias'),
(6, 'Cómics'),
(11, 'Derecho'),
(9, 'Economía'),
(10, 'Fotografía'),
(1, 'Historia'),
(5, 'Idiomas'),
(7, 'Informática'),
(2, 'Literatura'),
(8, 'Medicina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidoUsuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `correoUsuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `idRol` int(25) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasenaUsuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `idEstado` int(11) NOT NULL,
  `idPais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombreUsuario`, `apellidoUsuario`, `correoUsuario`, `idRol`, `usuario`, `contrasenaUsuario`, `idEstado`, `idPais`) VALUES
(1, 'Nikol', 'Ramírez', 'nikol@admin.com', 1, 'Nikol', 'HgLesw==', 1, 52),
(5, 'Alexandra', 'Ramos', 'Alexandra@gmail.com', 2, 'Alexandra', 'HgLesw==', 2, 52),
(6, 'Dennis', 'Morato', 'dennis@gmail.com', 1, 'Dennis', 'HwnctaM=', 1, 16),
(7, 'Jessenia', 'Quintero', 'dennisquintero@gmail.com', 1, 'Jk', 'HwnctaPl', 1, 114),
(8, 'N', 'R', 'nr@gmail.com', 2, 'nr', 'QEnes6Xndg==', 1, 52),
(9, 'Julian', 'Lopez', 'julian@gmail.com', 3, 'Julian', 'HwnctaM=', 1, 57),
(10, 'Pepe', 'Ramírez', 'pepe@gmail.com', 3, 'Pepe', 'HgLesw==', 1, 115);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`idAutor`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`),
  ADD UNIQUE KEY `categoria` (`categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `usuarioCliente` (`usuarioCliente`),
  ADD UNIQUE KEY `correoCliente` (`correoCliente`),
  ADD KEY `idRol` (`idRol`),
  ADD KEY `idPais` (`idPais`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idCompra`),
  ADD KEY `idLibro` (`idLibro`);

--
-- Indices de la tabla `compras_cliente`
--
ALTER TABLE `compras_cliente`
  ADD PRIMARY KEY (`idCompra_cliente`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idCompra` (`idCompra`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`idEditorial`),
  ADD UNIQUE KEY `nombreEditorial` (`nombreEditorial`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`idForo`),
  ADD KEY `id` (`idForo`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`idLibro`),
  ADD KEY `idEditorial` (`idEditorial`),
  ADD KEY `idTematica` (`idTematica`),
  ADD KEY `idPais` (`idPais`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `libro_autor`
--
ALTER TABLE `libro_autor`
  ADD PRIMARY KEY (`idLibro_autor`),
  ADD KEY `idAutor` (`idAutor`),
  ADD KEY `idLibro` (`idLibro`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`idPais`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `tematica`
--
ALTER TABLE `tematica`
  ADD PRIMARY KEY (`idTematica`),
  ADD UNIQUE KEY `tematica` (`tematica`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `correoUsuario` (`correoUsuario`),
  ADD KEY `idRol` (`idRol`),
  ADD KEY `idPais` (`idPais`),
  ADD KEY `idEstado` (`idEstado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `idAutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `idCompra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compras_cliente`
--
ALTER TABLE `compras_cliente`
  MODIFY `idCompra_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `idEditorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `idForo` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `idLibro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `libro_autor`
--
ALTER TABLE `libro_autor`
  MODIFY `idLibro_autor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `idPais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tematica`
--
ALTER TABLE `tematica`
  MODIFY `idTematica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`),
  ADD CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`idPais`) REFERENCES `pais` (`idPais`);

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`idLibro`) REFERENCES `libro` (`idLibro`);

--
-- Filtros para la tabla `compras_cliente`
--
ALTER TABLE `compras_cliente`
  ADD CONSTRAINT `compras_cliente_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`),
  ADD CONSTRAINT `compras_cliente_ibfk_2` FOREIGN KEY (`idCompra`) REFERENCES `compra` (`idCompra`);

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`idEditorial`) REFERENCES `editorial` (`idEditorial`),
  ADD CONSTRAINT `libro_ibfk_2` FOREIGN KEY (`idTematica`) REFERENCES `tematica` (`idTematica`),
  ADD CONSTRAINT `libro_ibfk_3` FOREIGN KEY (`idPais`) REFERENCES `pais` (`idPais`),
  ADD CONSTRAINT `libro_ibfk_4` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`);

--
-- Filtros para la tabla `libro_autor`
--
ALTER TABLE `libro_autor`
  ADD CONSTRAINT `libro_autor_ibfk_1` FOREIGN KEY (`idLibro`) REFERENCES `libro` (`idLibro`),
  ADD CONSTRAINT `libro_autor_ibfk_2` FOREIGN KEY (`idAutor`) REFERENCES `autor` (`idAutor`),
  ADD CONSTRAINT `libro_autor_ibfk_3` FOREIGN KEY (`idLibro`) REFERENCES `libro` (`idLibro`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idPais`) REFERENCES `pais` (`idPais`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
