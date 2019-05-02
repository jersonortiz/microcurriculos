-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2019 a las 05:34:32
-- Versión del servidor: 10.1.36-MariaDB
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
-- Base de datos: `seguimiento_micro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `codigo_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `semestre` int(11) NOT NULL,
  `intensidadhoraria` int(11) NOT NULL,
  `creditos` int(11) NOT NULL,
  `nombre_plandeestudios` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `nombre` varchar(50) NOT NULL,
  `nombre_facultad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`nombre`, `nombre_facultad`) VALUES
('CIENCIAS AGRARIAS', 'CIENCIAS AGRARIAS Y DEL AMBIENTE'),
('CIENCIAS DEL MEDIO AMBIENTE', 'CIENCIAS AGRARIAS Y DEL AMBIENTE'),
('CIENCIAS PECUARIAS', 'CIENCIAS AGRARIAS Y DEL AMBIENTE'),
('BIOLOGIA', 'CIENCIAS BASICAS'),
('FISICA', 'CIENCIAS BASICAS'),
('MATEMATICAS Y ESTADISTICA', 'CIENCIAS BASICAS'),
('QUIMICA', 'CIENCIAS BASICAS'),
('ATENCION CLINICA Y REHABILITACION', 'CIENCIAS DE LA SALUD'),
('PROMOCION, PROTECCION Y GESTION EN SALUD', 'CIENCIAS DE LA SALUD'),
('CIENCIAS ADMINISTRATIVAS', 'CIENCIAS EMPRESARIALES'),
('CIENCIAS CONTABLES Y FINANCIERAS', 'CIENCIAS EMPRESARIALES'),
('ESTUDIOS INTERNACIONALES Y DE FRONTERA', 'CIENCIAS EMPRESARIALES'),
('ANDRAGOGIA COMUNICACIÓN Y MULTIMEDIA', 'EDUCACION, ARTES Y HUMANIDADES'),
('ARQUITECTURA DISEÑO Y URBANISMO', 'EDUCACION, ARTES Y HUMANIDADES'),
('HUMANIDADES, SOCIALES E IDIOMAS', 'EDUCACION, ARTES Y HUMANIDADES'),
('CONSTRUCCIONES CIVILES VÍAS Y TRANSPORTES', 'INGENIERIA'),
('DISEÑO MECANICO, MATERIAL Y PROCESOS', 'INGENIERIA'),
('ELECTRICIDAD Y ELECTRONICA', 'INGENIERIA'),
('GEOTECNIA', 'INGENIERIA'),
('HIDRAULICA', 'INGENIERIA'),
('SISTEMAS E INFORMATICA', 'INGENIERIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `codigo_persona` int(11) NOT NULL,
  `nombre_departamento` varchar(50) NOT NULL,
  `gruponumero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `codigo_persona` int(11) NOT NULL,
  `id_matricula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`codigo_persona`, `id_matricula`) VALUES
(340, 1),
(959, 1),
(1081, 1),
(1130, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`nombre`) VALUES
('CIENCIAS AGRARIAS Y DEL AMBIENTE'),
('CIENCIAS BASICAS'),
('CIENCIAS DE LA SALUD'),
('CIENCIAS EMPRESARIALES'),
('EDUCACION, ARTES Y HUMANIDADES'),
('INGENIERIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `grupo_numero` int(11) NOT NULL,
  `codigo_asignatura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupomatricula`
--

CREATE TABLE `grupomatricula` (
  `grupo_numero` int(11) NOT NULL,
  `id_matricula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `id` int(50) NOT NULL,
  `semestre` int(11) NOT NULL,
  `código_programa` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`id`, `semestre`, `código_programa`) VALUES
(1, 1, 115),
(2, 2, 115),
(3, 1, 119),
(4, 2, 119),
(5, 1, 111),
(6, 2, 111),
(7, 1, 211),
(8, 2, 211),
(9, 1, 116),
(10, 2, 116),
(11, 1, 109),
(12, 2, 109),
(13, 1, 112),
(14, 2, 112),
(15, 1, 118),
(16, 2, 118),
(17, 1, 192),
(18, 2, 192),
(19, 1, 198),
(20, 2, 198),
(21, 1, 113),
(22, 2, 113),
(23, 1, 114),
(24, 2, 114),
(25, 1, 117),
(26, 2, 117),
(27, 1, 120),
(28, 2, 120),
(29, 1, 102),
(30, 2, 102),
(31, 1, 136),
(32, 2, 136),
(33, 1, 137),
(34, 2, 137),
(35, 1, 150),
(36, 2, 150),
(37, 1, 135),
(38, 2, 135),
(39, 1, 134),
(40, 2, 134),
(41, 1, 234),
(42, 2, 234),
(43, 1, 133),
(44, 2, 133),
(45, 1, 180),
(46, 2, 180),
(47, 1, 181),
(48, 2, 181),
(49, 1, 148),
(50, 2, 148),
(51, 1, 121),
(52, 2, 121),
(53, 1, 125),
(54, 2, 125),
(55, 1, 122),
(56, 2, 122),
(57, 1, 123),
(58, 2, 123),
(59, 1, 126),
(60, 2, 126),
(61, 1, 195),
(62, 2, 195),
(63, 1, 162),
(64, 2, 162),
(65, 1, 164),
(66, 2, 164),
(67, 1, 165),
(68, 2, 165),
(69, 1, 161),
(70, 2, 161),
(71, 1, 163),
(72, 2, 163),
(73, 1, 100),
(74, 2, 100),
(75, 1, 101),
(76, 2, 101);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `microcurriculo`
--

CREATE TABLE `microcurriculo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `peso` varchar(50) NOT NULL,
  `formato` varchar(50) NOT NULL,
  `archivo` varchar(50) NOT NULL,
  `codigo_asignatura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`codigo`, `nombre`, `apellidos`, `correo`, `contraseña`, `tipo`) VALUES
(340, 'camilo andres', 'jaimes sanchez', 'camiloandresjs@ufps.edu.co', '1674d63ef58fb2ca8b70bfc4443b4343e7f15863', 2),
(959, 'carlos enrique', 'guerrero acosta', 'carlosenriquega@ufps.edu.co', '450f9b16e4b0559c28be8a4097e21614c6af6117', 2),
(1080, 'oscar alberto', 'gallardo perez', 'oscargallardo@ufps.edu.co', 'dfd35f40aba09e6adee88265ef12430126d359b5', 3),
(1081, 'paula andrea', 'rozo corredor', 'paulaandrearc@ufps.edu.co', 'ed4b1925f6306d4ee0e6edf3d0391b5cd9dac3ca', 2),
(1111, 'carlos eduardo', 'pardo garcia', 'carlospardo@ufps.edu.co', '13d27f12a8581ff3e9bb196b07e1dd3841927085', 3),
(1130, 'jerson andres', 'ortiz calderon', 'jersonandresoc@ufps.edu.co', 'caaddf802df14958ed285712665ef978c31e738f', 2),
(1178, 'jose martin', 'calixto cely', 'mcalixto@ufps.edu.co', '218baa3a1d5c84f7207798fdcf53a9e5b47842f0', 3),
(1995, 'judith del pilar', 'rodriguez tenjo', 'judithdelpilarrt@ufps.edu.co', 'bb11a84cc7fc6de5dc20b49853bf1e2e1e3bfb4c', 3),
(1996, 'jairo alberto', 'fuentes camargo', 'jairoalbertofc@ufps.edu.cov', '77b1c6cb997d06dd6202119ec9d63215afea7cbd', 3),
(2049, 'maria del pilar', 'rojas puentes', 'pilarrojas@ufps.edu.co', '1c3c8246eee4a0cc60e3ca4ce4c2cd82e588637a', 3),
(3556, 'milton jesus', 'vera contreras', 'miltonjesusvc@ufps.edu.co', '7f192ed27667bdb74beb7aa6499095a4c1f02ae6', 3),
(4412, 'eduard gilberto', 'puerto cuadros', 'eduardpuerto@ufps.edu.co', '59572984021d5b2ca9fffc0435284aa4b67d48f8', 3),
(4608, 'matias', 'herrera caceres', 'matiashc@ufps.edu.co', 'ef059cf85fb69cedc1dec4b7bd4b450c24c43d71', 3),
(5096, 'claudia yamile', 'gomez llanez', 'claudiaygomez@ufps.edu.co', '532fc4fdf20bb32066b05edecd14c3e7a40a9517', 3),
(6209, 'nelly rosana', 'diaz leal', 'nellyrosanadl@ufps.edu.co', '7952b8f72e05f9e2abbce0a544ff34ad64d446b2', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plandeestudios`
--

CREATE TABLE `plandeestudios` (
  `nombre` varchar(50) NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plandeestudios`
--

INSERT INTO `plandeestudios` (`nombre`, `codigo`) VALUES
('tecnologia agroindustrial', 100),
('tecnico profesional en procesamiento de alimentos', 101),
('tecnico profesional en fabricacion industrial de p', 102),
('electromecanica', 109),
('ingenieria civil', 111),
('ingenieria civil(cohorte especial)', 111),
('mecanica', 112),
('tecnologia en gestion y desarrollo de productos ce', 113),
('tecnologia en gestion de procesos de manufactura', 114),
('sistemas', 115),
('electronica', 116),
('minas', 118),
('ingenieria industrial', 119),
('tecnico profesional en produccion de ceramica arte', 120),
('administracion de empresas-diurna', 121),
('contaduria publica-diurna', 122),
('contaduria publica-nocturna', 123),
('administracion de empresas-nocturna', 125),
('comercio internacional', 126),
('comunicacion social', 133),
('trabajo social-diurna', 134),
('derecho', 135),
('licenciatura en matematicas', 136),
('licenciatura en ciencias naturales y educacion amb', 137),
('tecnologia de regencia en farmacia', 148),
('arquitectura', 150),
('ingenieria biotecnologica', 161),
('ingenieria agronomica', 162),
('ingenieria pecuaria', 163),
('ingenieria agroindustrial', 164),
('ingenieria ambiental', 165),
('enfermeria', 180),
('seguridad y salud en el trabajo', 181),
('tecnologia en obras civiles-presencial', 192),
('quimica industrial', 195),
('tecnologia en procesos industriales', 198),
('trabajo social-nocturna', 234);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `nombre` varchar(50) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nombre_facultad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`nombre`, `codigo`, `nombre_facultad`) VALUES
('TECNOLOGIA AGROINDUSTRIAL', 100, 'CIENCIAS AGRARIAS Y DEL AMBIENTE'),
('TECNICO PROFESIONAL EN PROCESAMIENTO DE ALIMENTOS', 101, 'CIENCIAS AGRARIAS Y DEL AMBIENTE'),
('TÉCNICO PROFESIONAL EN FABRICACIÓN INDUSTRIAL DE P', 102, 'INGENIERIA'),
('INGENIERIA ELECTROMECANICA', 109, 'INGENIERIA'),
('INGENIERIA CIVIL - DIURNA', 111, 'INGENIERIA'),
('INGENIERIA MECANICA', 112, 'INGENIERIA'),
('TECNOLOGIA EN GESTION Y DESARROLLO DE PRODUCTOS CE', 113, 'INGENIERIA'),
('TECNOLOGIA EN GESTION DE PROCESOS DE MANUFACTURA', 114, 'INGENIERIA'),
('INGENIERIA DE SISTEMAS', 115, 'INGENIERIA'),
('INGENIERIA ELECTRONICA', 116, 'INGENIERIA'),
('TÉCNICO PROFESIONAL EN PROCESOS DE MANUFACTURA DE ', 117, 'INGENIERIA'),
('INGENIERIA DE MINAS', 118, 'INGENIERIA'),
('INGENIERIA INDUSTRIAL', 119, 'INGENIERIA'),
('TÉCNICO PROFESIONAL EN PRODUCCIÓN DE CERÁMICA ARTE', 120, 'INGENIERIA'),
('ADMINISTRACION DE EMPRESAS - DIURNA', 121, 'CIENCIAS EMPRESARIALES'),
('CONTADURIA PUBLICA - DIURNA', 122, 'CIENCIAS EMPRESARIALES'),
('CONTADURIA PUBLICA - NOCTURNA', 123, 'CIENCIAS EMPRESARIALES'),
('ADMINISTRACION DE EMPRESAS - NOCTURNA', 125, 'CIENCIAS EMPRESARIALES'),
('COMERCIO INTERNACIONAL', 126, 'CIENCIAS EMPRESARIALES'),
('COMUNICACION SOCIAL', 133, 'EDUCACION, ARTES Y HUMANIDADES'),
('TRABAJO SOCIAL - DIURNA', 134, 'EDUCACION, ARTES Y HUMANIDADES'),
('DERECHO', 135, 'EDUCACION, ARTES Y HUMANIDADES'),
('LICENCIATURA EN MATEMATICAS', 136, 'EDUCACION, ARTES Y HUMANIDADES'),
('LICENCIATURA EN CIENCIAS NATURALES Y EDUCACION AMB', 137, 'EDUCACION, ARTES Y HUMANIDADES'),
('TECNOLOGIA DE REGENCIA EN FARMACIA', 148, 'CIENCIAS DE LA SALUD'),
('ARQUITECTURA', 150, 'EDUCACION, ARTES Y HUMANIDADES'),
('INGENIERIA BIOTECNOLOGICA', 161, 'CIENCIAS AGRARIAS Y DEL AMBIENTE'),
('INGENIERIA ARGONOMICA', 162, 'CIENCIAS AGRARIAS Y DEL AMBIENTE'),
('INGENIERIA PECUARIA', 163, 'CIENCIAS AGRARIAS Y DEL AMBIENTE'),
('INGENIERIA AGROINDUSTRIAL', 164, 'CIENCIAS AGRARIAS Y DEL AMBIENTE'),
('INGENIERIA AMBIENTAL', 165, 'CIENCIAS AGRARIAS Y DEL AMBIENTE'),
('ENFERMERIA', 180, 'CIENCIAS DE LA SALUD'),
('SEGURIDAD Y SALUD EN EL TRABAJO', 181, 'CIENCIAS DE LA SALUD'),
('TECNOLOGIA EN OBRAS CIVILES - PRESENCIAL', 192, 'INGENIERIA'),
('QUIMICA INDUSTRIAL', 195, 'CIENCIAS BASICAS'),
('TECNOLOGIA EN PROCESOS INDUSTRIALES', 198, 'INGENIERIA'),
('INGENIERIA CIVIL(COHORTE ESPECIAL)', 211, 'INGENIERIA'),
('TRABAJO SOCIAL - NOCTURNA', 234, 'EDUCACION, ARTES Y HUMANIDADES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `porcentaje` float NOT NULL,
  `id_prueba` int(11) NOT NULL,
  `id_unidad` int(11) NOT NULL,
  `id_tema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `id` int(11) NOT NULL,
  `id_unidad` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `actividadpresencial` varchar(200) NOT NULL,
  `trabajoindependiente` varchar(200) NOT NULL,
  `unidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `descripcion`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'ESTUDIANTE'),
(3, 'DOCENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE `unidad` (
  `id` int(11) NOT NULL,
  `nombre_contenido` varchar(50) NOT NULL,
  `id_microcurriculo` int(11) NOT NULL,
  `horaspresenciales` time NOT NULL,
  `horasindependientes` time NOT NULL,
  `horatotal` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`codigo_persona`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_asignatura_plandeestudios` (`nombre_plandeestudios`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`nombre`),
  ADD KEY `fk_departamento_facultad` (`nombre_facultad`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`codigo_persona`),
  ADD KEY `fk_docente_departamento` (`nombre_departamento`),
  ADD KEY `fk_docente_grupo` (`gruponumero`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`codigo_persona`) USING BTREE,
  ADD KEY `fk_estudiante_matricula` (`id_matricula`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`grupo_numero`),
  ADD KEY `fk_grupo_asignatura` (`codigo_asignatura`);

--
-- Indices de la tabla `grupomatricula`
--
ALTER TABLE `grupomatricula`
  ADD PRIMARY KEY (`grupo_numero`,`id_matricula`),
  ADD KEY `fk_grupomatricula_matricula` (`id_matricula`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_matricula_programa` (`código_programa`);

--
-- Indices de la tabla `microcurriculo`
--
ALTER TABLE `microcurriculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_microcurriculo_asignatura` (`codigo_asignatura`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_persona_tipo` (`tipo`);

--
-- Indices de la tabla `plandeestudios`
--
ALTER TABLE `plandeestudios`
  ADD PRIMARY KEY (`nombre`),
  ADD KEY `fk_plandeestudios_programa` (`codigo`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_programa_facultad` (`nombre_facultad`);

--
-- Indices de la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_prueba_tema` (`id_tema`),
  ADD KEY `fk_prueba_unidad` (`id_unidad`),
  ADD KEY `fk_prueba_matricula` (`id_prueba`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_unidad_tema` (`id_unidad`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_unidad_tema` (`id_microcurriculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_administrador_persona` FOREIGN KEY (`codigo_persona`) REFERENCES `persona` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `fk_asignatura_plandeestudios` FOREIGN KEY (`nombre_plandeestudios`) REFERENCES `plandeestudios` (`nombre`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `fk_departamento_facultad` FOREIGN KEY (`nombre_facultad`) REFERENCES `facultad` (`nombre`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `fk_docente_departamento` FOREIGN KEY (`nombre_departamento`) REFERENCES `departamento` (`nombre`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_docente_grupo` FOREIGN KEY (`gruponumero`) REFERENCES `grupo` (`grupo_numero`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_docente_persona` FOREIGN KEY (`codigo_persona`) REFERENCES `persona` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `fk_estudiante_matricula` FOREIGN KEY (`id_matricula`) REFERENCES `matricula` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_estudiante_persona` FOREIGN KEY (`codigo_persona`) REFERENCES `persona` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `fk_grupo_asignatura` FOREIGN KEY (`codigo_asignatura`) REFERENCES `asignatura` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupomatricula`
--
ALTER TABLE `grupomatricula`
  ADD CONSTRAINT `fk_grupomatricula_grupo` FOREIGN KEY (`grupo_numero`) REFERENCES `grupo` (`grupo_numero`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_grupomatricula_matricula` FOREIGN KEY (`id_matricula`) REFERENCES `matricula` (`id`);

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `fk_matricula_programa` FOREIGN KEY (`código_programa`) REFERENCES `programa` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `microcurriculo`
--
ALTER TABLE `microcurriculo`
  ADD CONSTRAINT `fk_microcurriculo_asignatura` FOREIGN KEY (`codigo_asignatura`) REFERENCES `asignatura` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_persona_tipo` FOREIGN KEY (`tipo`) REFERENCES `tipo` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `plandeestudios`
--
ALTER TABLE `plandeestudios`
  ADD CONSTRAINT `fk_plandeestudios_programa` FOREIGN KEY (`codigo`) REFERENCES `programa` (`codigo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `programa`
--
ALTER TABLE `programa`
  ADD CONSTRAINT `fk_programa_facultad` FOREIGN KEY (`nombre_facultad`) REFERENCES `facultad` (`nombre`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `prueba`
--
ALTER TABLE `prueba`
  ADD CONSTRAINT `fk_prueba_matricula` FOREIGN KEY (`id_prueba`) REFERENCES `matricula` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_prueba_tema` FOREIGN KEY (`id_tema`) REFERENCES `tema` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_prueba_unidad` FOREIGN KEY (`id_unidad`) REFERENCES `unidad` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tema`
--
ALTER TABLE `tema`
  ADD CONSTRAINT `fk_unidad_tema` FOREIGN KEY (`id_unidad`) REFERENCES `unidad` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD CONSTRAINT `fk_unidad_microcurriculo` FOREIGN KEY (`id`) REFERENCES `microcurriculo` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
