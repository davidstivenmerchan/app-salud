-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2022 a las 19:46:05
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `salud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condiciones_salud`
--

CREATE TABLE `condiciones_salud` (
  `id_condicion_salud` int(11) NOT NULL,
  `nom_condicion_salud` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condiciones_salud_detalle`
--

CREATE TABLE `condiciones_salud_detalle` (
  `id_condicion_salud_detalle` int(11) NOT NULL,
  `id_condicion_salud` int(11) NOT NULL,
  `n_identificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controles`
--

CREATE TABLE `controles` (
  `id_control` int(11) NOT NULL,
  `nom_control` varchar(15) NOT NULL,
  `n_identificacion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicadores_salud`
--

CREATE TABLE `indicadores_salud` (
  `id_indicador_salud` int(11) NOT NULL,
  `nom_indicador_salud` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicadores_salud_detalle`
--

CREATE TABLE `indicadores_salud_detalle` (
  `id_indicador_salud_detalle` int(11) NOT NULL,
  `id_indicador_salud` int(11) NOT NULL,
  `n_identificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados_examenes_detalle`
--

CREATE TABLE `resultados_examenes_detalle` (
  `id_resultado_examen_detalle` int(11) NOT NULL,
  `n_identificacion` int(11) NOT NULL,
  `id_resultado_examen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado_examenes`
--

CREATE TABLE `resultado_examenes` (
  `id_resultado_examen` int(11) NOT NULL,
  `nom_resultado_examen` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_docu`
--

CREATE TABLE `tipo_docu` (
  `id_tipo_docu` int(11) NOT NULL,
  `nom_tipo_usu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_docu`
--

INSERT INTO `tipo_docu` (`id_tipo_docu`, `nom_tipo_usu`) VALUES
(1, 'CC'),
(2, 'TI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usu`
--

CREATE TABLE `tipo_usu` (
  `id_tipo_usu` int(11) NOT NULL,
  `nom_tipo_usu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usu`
--

INSERT INTO `tipo_usu` (`id_tipo_usu`, `nom_tipo_usu`) VALUES
(1, 'niño'),
(2, 'adulto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `n_identificacion` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `id_tipo_usu` int(15) NOT NULL,
  `edad` int(15) NOT NULL,
  `email` varchar(15) NOT NULL,
  `numero` int(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `id_tipo_docu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`n_identificacion`, `nombre`, `apellido`, `id_tipo_usu`, `edad`, `email`, `numero`, `password`, `id_tipo_docu`) VALUES
(122, 's', 'd', 2, 1233, '123', 123, '123', 1),
(1002, 'david', 'merchan', 2, 21, 'david@', 123, '123', 1),
(1002636576, 'david stiven', 'merchan gonzale', 2, 20, 'david@gmail.com', 2147483647, '123', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `condiciones_salud`
--
ALTER TABLE `condiciones_salud`
  ADD PRIMARY KEY (`id_condicion_salud`);

--
-- Indices de la tabla `condiciones_salud_detalle`
--
ALTER TABLE `condiciones_salud_detalle`
  ADD PRIMARY KEY (`id_condicion_salud_detalle`);

--
-- Indices de la tabla `controles`
--
ALTER TABLE `controles`
  ADD PRIMARY KEY (`id_control`);

--
-- Indices de la tabla `indicadores_salud`
--
ALTER TABLE `indicadores_salud`
  ADD PRIMARY KEY (`id_indicador_salud`);

--
-- Indices de la tabla `indicadores_salud_detalle`
--
ALTER TABLE `indicadores_salud_detalle`
  ADD PRIMARY KEY (`id_indicador_salud_detalle`);

--
-- Indices de la tabla `resultados_examenes_detalle`
--
ALTER TABLE `resultados_examenes_detalle`
  ADD PRIMARY KEY (`id_resultado_examen_detalle`);

--
-- Indices de la tabla `resultado_examenes`
--
ALTER TABLE `resultado_examenes`
  ADD PRIMARY KEY (`id_resultado_examen`);

--
-- Indices de la tabla `tipo_docu`
--
ALTER TABLE `tipo_docu`
  ADD PRIMARY KEY (`id_tipo_docu`);

--
-- Indices de la tabla `tipo_usu`
--
ALTER TABLE `tipo_usu`
  ADD PRIMARY KEY (`id_tipo_usu`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`n_identificacion`),
  ADD KEY `id_tipo_docu` (`id_tipo_docu`),
  ADD KEY `id_tipo_usu` (`id_tipo_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `condiciones_salud`
--
ALTER TABLE `condiciones_salud`
  MODIFY `id_condicion_salud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `condiciones_salud_detalle`
--
ALTER TABLE `condiciones_salud_detalle`
  MODIFY `id_condicion_salud_detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `controles`
--
ALTER TABLE `controles`
  MODIFY `id_control` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `indicadores_salud`
--
ALTER TABLE `indicadores_salud`
  MODIFY `id_indicador_salud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `indicadores_salud_detalle`
--
ALTER TABLE `indicadores_salud_detalle`
  MODIFY `id_indicador_salud_detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `resultados_examenes_detalle`
--
ALTER TABLE `resultados_examenes_detalle`
  MODIFY `id_resultado_examen_detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `resultado_examenes`
--
ALTER TABLE `resultado_examenes`
  MODIFY `id_resultado_examen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_docu`
--
ALTER TABLE `tipo_docu`
  MODIFY `id_tipo_docu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_usu`
--
ALTER TABLE `tipo_usu`
  MODIFY `id_tipo_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_tipo_docu`) REFERENCES `tipo_docu` (`id_tipo_docu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_tipo_usu`) REFERENCES `tipo_usu` (`id_tipo_usu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
