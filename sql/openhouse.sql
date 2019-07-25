-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2019 a las 13:14:25
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `openhouse`
--

-- --------------------------------------------------------
CREATE DATABASE openhouse;
use openhouse;

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_pregunta` int(11) NOT NULL,
  `pregunta` varchar(256) NOT NULL,
  `categoria` set('DISEÑO','PRESENTACION','MANEJO','FUNCIONABILIDAD','COMENTARIO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_pregunta`, `pregunta`, `categoria`) VALUES
(1, 'EL SOFTWARE MOSTRADO TIENE UN DISEÑO LLAMATIVO Y CÓMODO, ES AGRADABLE A LA VISTA Y FÁCIL DE ENTENDER', 'DISEÑO'),
(2, 'LOS COLORES USADO EN EL SOFTWARE SON ACORDES Y MANTIENE LA COHERENCIA EN LAS VISTAS OBSERVADAS', 'DISEÑO'),
(3, 'LOS PONENTES PRESENTAN DE MANERA ACORDE EL SOFTWARE Y DEJAN CLARAS TODAS LAS DUDAS Y LA FUNCIONALIDAD DE ESTE', 'PRESENTACION'),
(4, 'LOS PARTICIPANTES MUESTRAN EL SOFTWARE REALIZADO DE MANERA AMIGABLE, JOVIAL Y DINÁMICA MANTENIENDO CLARIDAD EN SU PRESENTACION', 'PRESENTACION'),
(5, 'LOS PARTICIPANTES MUESTRAN CON PROPIEDAD EL SOFTWARE DESARROLLADO Y SE MUESTRAN SEGUROS SOBRE EL CONOCIMIENTO DEL PROBLEMA QUE RESUELVEN CON SU SOFTWARE', 'MANEJO'),
(6, 'CONSIDERA QUE LOS PARTICIPANTES CONOCEN EL TEMA DEL SOFTWARE DESARROLLADO Y LO EXPLICAN CON CLARIDAD', 'MANEJO'),
(7, 'EL SOFTWARE MOSTRADO ES FUNCIONAL Y SOLVENTA LAS NECESIDADES PLANTEADAS', 'FUNCIONABILIDAD'),
(8, 'CONSIDERA QUE EL SOFTWARE ES ACORDE A LA SOLUCIÓN DEL PROBLEMA Y SI TUVIERA LA PROBLEMÁTICA PLANTEADA HARÍA USO DE ESTE', 'FUNCIONABILIDAD'),
(9, '¿QUE CONSIDERA USTED QUE LOS PARTICIPANTES PODRÍAN MEJORAR?', 'COMENTARIO'),
(10, '¿QUE OTRA FUNCIÓN O FUNCIONES, LE PARECERÍA QUE EL SOFTWARE PUDIESE TENER O IMPLEMENTAR EN UN FUTURO?', 'COMENTARIO'),
(11, 'Tiene algun consejo para el grupo', 'COMENTARIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(512) NOT NULL,
  `cohorte` varchar(45) NOT NULL,
  `nivel` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyecto`, `nombre`, `descripcion`, `cohorte`, `nivel`) VALUES
(1, 'SISTEMA DE NOTAS CDS', 'UN SISTEMA DE NOTAS QUE BUSCA MEJORAR LA EFICIENCIA DE LOS PROCESOS DE INGRESO DE NOTAS EN EL CDS SANTA ANA', 'COHORTE 4', 'NIVEL 2'),
(2, 'RANKING BECAS OPORTUNIDADES', 'RANKING BECAS OPORTUNIDADES', 'COHORTE 4', 'NIVEL 2'),
(3, 'CLINICA MEDICA RHOPE', 'CLINICA MEDICA RHOPE', 'COHORTE 4', 'NIVEL 2'),
(4, 'PM PUBLICIDAD', 'PM PUBLICIDAD', 'COHORTE 4', 'NIVEL 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id_respuesta` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `calificacion` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`id_respuesta`, `id_proyecto`, `id_pregunta`, `calificacion`) VALUES
(22, 1, 1, '5'),
(23, 1, 2, '5'),
(24, 1, 3, '5'),
(25, 1, 4, '5'),
(26, 1, 5, '5'),
(27, 1, 6, '5'),
(28, 1, 7, '5'),
(29, 1, 8, '5'),
(30, 1, 9, 'qwerqwerqwer'),
(31, 1, 10, 'asdfasdfasdf'),
(32, 1, 11, 'asfasdfasdfasdf'),
(33, 2, 1, '4'),
(34, 2, 2, '3'),
(35, 2, 3, '2'),
(36, 2, 4, '3'),
(37, 2, 5, '3'),
(38, 2, 6, '2'),
(39, 2, 7, '3'),
(40, 2, 8, '3'),
(41, 2, 9, 'wrqerqwe'),
(42, 2, 10, 'tyurtruityu'),
(43, 2, 11, 'tuityuitu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_pregunta`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `fk_proyectos_idx` (`id_proyecto`),
  ADD KEY `fk_preguntas_idx` (`id_pregunta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id_respuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD CONSTRAINT `fk_preguntas` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntas` (`id_pregunta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_proyectos` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id_proyecto`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
