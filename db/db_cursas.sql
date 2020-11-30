-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2020 a las 16:29:39
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_cursas`
--
CREATE DATABASE db_cursas;
use db_cursas;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria`
--

CREATE TABLE `tbl_categoria` (
  `id_cat` int(11) NOT NULL,
  `nom_cat` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `edadMax` decimal(2,0) NOT NULL,
  `edadMin` decimal(2,0) NOT NULL,
  `sexo` enum('Masculino','Femenino','Ambos') COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`id_cat`, `nom_cat`, `edadMax`, `edadMin`, `sexo`) VALUES
(7, 'AlevinM', '12', '6', 'Masculino'),
(8, 'JuniorM', '22', '13', 'Masculino'),
(9, 'SeniorM', '65', '23', 'Masculino'),
(10, 'AlevinF', '12', '6', 'Femenino'),
(11, 'JuniorF', '22', '13', 'Femenino'),
(12, 'SeniorF', '65', '23', 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cursa`
--

CREATE TABLE `tbl_cursa` (
  `id_cursa` int(11) NOT NULL,
  `nom_cursa` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_cursa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_cursa`
--

INSERT INTO `tbl_cursa` (`id_cursa`, `nom_cursa`, `fecha_cursa`) VALUES
(1, 'Cursa El Prat', '2020-10-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inscripcion`
--

CREATE TABLE `tbl_inscripcion` (
  `id_dorsal` int(11) NOT NULL,
  `id_cursa` int(11) NOT NULL,
  `id_part` int(11) NOT NULL,
  `pago` enum('Si','No') COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_participante`
--

CREATE TABLE `tbl_participante` (
  `id_part` int(11) NOT NULL,
  `nom_part` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido_part` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `DNI_part` char(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fechaNac_part` date NOT NULL,
  `sexo_part` enum('Masculino','Femenino','','') COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `login_user` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pass_user` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `login_user`, `pass_user`) VALUES
(1, 'pverdejo', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `tbl_cursa`
--
ALTER TABLE `tbl_cursa`
  ADD PRIMARY KEY (`id_cursa`);

--
-- Indices de la tabla `tbl_inscripcion`
--
ALTER TABLE `tbl_inscripcion`
  ADD PRIMARY KEY (`id_dorsal`),
  ADD KEY `fk_id_part` (`id_part`),
  ADD KEY `fk_idCursa` (`id_cursa`),
  ADD KEY `fk_idCat` (`id_cat`);

--
-- Indices de la tabla `tbl_participante`
--
ALTER TABLE `tbl_participante`
  ADD PRIMARY KEY (`id_part`);

--
-- Indices de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tbl_cursa`
--
ALTER TABLE `tbl_cursa`
  MODIFY `id_cursa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_inscripcion`
--
ALTER TABLE `tbl_inscripcion`
  MODIFY `id_dorsal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_participante`
--
ALTER TABLE `tbl_participante`
  MODIFY `id_part` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_inscripcion`
--
ALTER TABLE `tbl_inscripcion`
  ADD CONSTRAINT `fk_idCat` FOREIGN KEY (`id_cat`) REFERENCES `tbl_categoria` (`id_cat`),
  ADD CONSTRAINT `fk_idCursa` FOREIGN KEY (`id_cursa`) REFERENCES `tbl_cursa` (`id_cursa`),
  ADD CONSTRAINT `fk_id_part` FOREIGN KEY (`id_part`) REFERENCES `tbl_participante` (`id_part`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
