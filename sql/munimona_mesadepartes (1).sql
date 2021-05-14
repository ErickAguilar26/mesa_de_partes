-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2021 a las 17:55:45
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `munimona_mesadepartes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ee_derivado`
--

CREATE TABLE `ee_derivado` (
  `idDerivado` int(11) NOT NULL,
  `idTramite` int(11) NOT NULL,
  `asunto` varchar(100) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `idGerenciaEmisora` int(11) NOT NULL,
  `idGerenciaReceptora` int(11) NOT NULL,
  `fechaHora` datetime NOT NULL,
  `idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ee_documento`
--

CREATE TABLE `ee_documento` (
  `idDocumento` int(11) NOT NULL,
  `idFut` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ee_empleado`
--

CREATE TABLE `ee_empleado` (
  `idEmpleado` int(11) NOT NULL,
  `nombres` varchar(75) NOT NULL,
  `apellidos` varchar(75) NOT NULL,
  `idGerencia` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `contraseña` varchar(300) NOT NULL,
  `idTipoEmpleado` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `celular` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ee_empleado`
--

INSERT INTO `ee_empleado` (`idEmpleado`, `nombres`, `apellidos`, `idGerencia`, `usuario`, `contraseña`, `idTipoEmpleado`, `correo`, `celular`) VALUES
(1, 'Erick', 'Aguilar', 1, 'erick', 'erick', 1, 'erick_aqp@gmail.com', 974641148),
(2, 'Mesa', 'Virtual', 1, 'mesita', 'mesita', 1, 'mesaquemasaplauda@gmail.com', 974641148),
(3, 'Elmo', 'Pacheco', 14, 'elmo', 'elmo', 2, 'elmo@gmail.com', 978549658),
(4, 'Manuel', 'Pradi', 1, 'manuelillo', 'manuelillo', 2, 'manuelon@gmail.com', 965874569),
(5, 'Carlos', 'Barrios', 6, 'barrunto', 'barrunto', 2, 'barrios@gmail.com', 965874569),
(6, 'Carlos', 'Oropeza', 12, 'manuelillo', 'oropeza', 2, 'oropeza@gmail.com', 965874569),
(7, 'Takeshi', 'Hanama', 1, 'paja', 'paja', 3, 'takeshisan@gmail.com', 965874569),
(8, 'Luis', 'Ezequilla', 2, 'tava', 'tava', 3, 'tava@gmail.com', 965874569),
(9, 'Maria', 'chipa', 3, 'chipa', 'chipa', 3, 'chipa@gmail.com', 965874569),
(10, 'Jorge', 'Antaya', 2, 'antaya', 'antaya', 2, 'antaya@gmail.com', 965874569),
(11, 'Martin', 'Ascencio', 10, 'martin', 'martin', 2, 'martin@gmail.com', 965874569),
(12, 'Linder', 'Lopez', 15, 'linder', 'linder', 2, 'lider@gmail.com', 965874569),
(13, 'Lizeth', 'Hernandez', 1, 'liz', 'liz', 4, 'lizi@gmail.com', 965874569),
(14, 'Fiorella', 'Revilla', 15, 'fiofio', 'fio', 4, 'fiofio@hotmail.com', 945896215),
(15, 'Cesar', 'Profe ambiental', 6, 'cesar', 'cesar', 4, 'cesar@hotmail.com', 925874158),
(16, 'Dianni', 'Mejia', 2, 'dianni', 'dianni', 4, 'dianni@hotmail.com', 925874158);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ee_estado`
--

CREATE TABLE `ee_estado` (
  `idEstado` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ee_estado`
--

INSERT INTO `ee_estado` (`idEstado`, `nombre`, `descripcion`) VALUES
(1, 'En espera', 'Esperando ser recepcionado por Mesa de Partes.'),
(2, 'En revisión', 'Esperando ser revisado por Secretaría General.'),
(3, 'Derivado', 'Documento llegó a su gerencia destino.'),
(4, 'En correción', 'El FUT necesita corregirse. A la espera.'),
(5, 'Tramitado', 'FUT tramitado exitosamente.'),
(6, 'Cancelado', 'Cuando no respondió a las notificaciones.'),
(7, 'Archivado', 'Documento archivado por haberse completado o cancelado.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ee_fut`
--

CREATE TABLE `ee_fut` (
  `idFut` int(11) NOT NULL,
  `idSolicitante` int(11) NOT NULL,
  `idTramite` int(11) NOT NULL,
  `idGerenciaDestino` int(11) NOT NULL,
  `sumilla` varchar(75) NOT NULL,
  `fundamentacion` varchar(200) NOT NULL,
  `nDocs` int(11) NOT NULL,
  `nFolios` int(11) NOT NULL,
  `fechaHora` datetime NOT NULL,
  `codigoCargo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ee_gerencia`
--

CREATE TABLE `ee_gerencia` (
  `idGerencia` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `nTramitesTotal` int(11) NOT NULL,
  `nTramitesCompletados` int(11) NOT NULL,
  `nTramitesFallidos` int(11) NOT NULL,
  `iniciales` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ee_gerencia`
--

INSERT INTO `ee_gerencia` (`idGerencia`, `nombre`, `nTramitesTotal`, `nTramitesCompletados`, `nTramitesFallidos`, `iniciales`) VALUES
(1, 'GERENCIA MUNICIPAL', 0, 0, 0, 'GG'),
(2, 'GERENCIA DE SECRETARIA GENERAL', 0, 0, 0, 'SG'),
(3, 'GERENCIA DE ASESORIA JURIDICA', 0, 0, 0, 'GAJ'),
(4, 'GERENCIA DE DESARROLLO ECONOMIDO Y SEGURIDAD CIUDADANA Y GESTION DE RIESGOS DE DESASTRES', 0, 0, 0, 'GDEySCyGRD'),
(5, 'GERENCIA DE DESARROLLO HUMANO Y PROMOCION SOCIAL', 0, 0, 0, 'GDHyPS'),
(6, 'GERENCIA DE PROTECCION DEL MEDIO AMBIENTE Y SALUBRIDAD', 0, 0, 0, 'GPMAyS'),
(7, 'GERENCIA DE PLANIFICACION Y PRESUPUESTO', 0, 0, 0, 'GPP'),
(8, 'GERENCIA DE ADMINISTRACION', 0, 0, 0, 'GA'),
(9, 'GERENCIA DE DESARROLLO URBANO', 0, 0, 0, 'GDU'),
(10, 'GERENCIA DE ADMINISTRACION TRIBUTARIA', 0, 0, 0, 'GAT'),
(11, 'SEMSEEM', 0, 0, 0, 'SEMSEEM'),
(12, 'SEMAPAM', 0, 0, 0, 'SEMAPAM'),
(13, 'PROCURADURIA PUBLICA MUNICIPAL', 0, 0, 0, 'PPM'),
(14, 'ALCALDIA', 0, 0, 0, 'ALC'),
(15, 'SALON DE REGIDORES', 0, 0, 0, 'SR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ee_informacion`
--

CREATE TABLE `ee_informacion` (
  `idInformacion` int(11) NOT NULL,
  `idSolicitante` int(11) NOT NULL,
  `idTramite` int(11) NOT NULL,
  `idGerenciaDestino` int(11) NOT NULL,
  `informacionDetallada` varchar(200) NOT NULL,
  `fechaHora` datetime NOT NULL,
  `descripción` varchar(200) DEFAULT NULL,
  `codigoCargo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ee_operacion`
--

CREATE TABLE `ee_operacion` (
  `idOperacion` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `operacionDescripcion` varchar(200) NOT NULL,
  `fechaHora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ee_operacion`
--

INSERT INTO `ee_operacion` (`idOperacion`, `idEmpleado`, `operacionDescripcion`, `fechaHora`) VALUES
(1, 1, 'Se registró un nuevo Administrador', '2021-05-06 09:35:23'),
(2, 3, 'Se registró un nuevo Gerente = Manuel Pradi', '2021-05-06 09:40:26'),
(3, 3, 'Se registró un nuevo Gerente = Carlos Barrios', '2021-05-06 09:40:27'),
(4, 3, 'Se registró un nuevo Gerente = Carlos Oropeza', '2021-05-06 09:40:27'),
(5, 3, 'Se registró un nuevo subGerente = Takeshi', '2021-05-06 09:44:47'),
(6, 3, 'Se registró un nuevo subGerente = Luis', '2021-05-06 09:44:48'),
(7, 3, 'Se registró un nuevo subGerente = Maria', '2021-05-06 09:44:48'),
(8, 3, 'Se registró un nuevo Gerente = Jorge Antaya', '2021-05-06 09:48:15'),
(9, 3, 'Se registró un nuevo Gerente = Martin Ascencio', '2021-05-06 09:48:15'),
(10, 1, 'Se registró un nuevo Gerente = Linder Lopez', '2021-05-06 10:03:02'),
(11, 4, 'Se registró un nuevo empleado = Lizeth', '2021-05-06 10:05:47'),
(12, 12, 'Se registró un nuevo empleado = Fiorella', '2021-05-06 10:05:47'),
(13, 5, 'Se registró un nuevo empleado = Cesar', '2021-05-06 10:05:47'),
(14, 10, 'Se registró un nuevo empleado = Dianni', '2021-05-06 10:05:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ee_solicitante`
--

CREATE TABLE `ee_solicitante` (
  `idSolicitante` int(11) NOT NULL,
  `nombres` varchar(75) NOT NULL,
  `apellidos` varchar(75) NOT NULL,
  `idDoc` int(11) NOT NULL,
  `numDoc` int(11) NOT NULL,
  `domicilio` varchar(75) NOT NULL,
  `telefono` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `lugarOrigen` varchar(100) DEFAULT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ee_subgerencia`
--

CREATE TABLE `ee_subgerencia` (
  `idSubgerencia` int(11) NOT NULL,
  `idGerencia` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `nTramitesTotal` int(11) NOT NULL,
  `nTramitesCompletados` int(11) NOT NULL,
  `nTramitesFallidos` int(11) NOT NULL,
  `iniciales` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ee_subgerencia`
--

INSERT INTO `ee_subgerencia` (`idSubgerencia`, `idGerencia`, `nombre`, `nTramitesTotal`, `nTramitesCompletados`, `nTramitesFallidos`, `iniciales`) VALUES
(1, 1, 'SUB GERENCIA DE SISTEMAS Y PROCESOS INFORMATICOS', 0, 0, 0, 'SGSyPI'),
(2, 2, 'SUB GERENCIA DE RELACIONES PUBLICAS, IMAGEN INSTITUCIONAL Y PROTOCOLO', 0, 0, 0, 'SGRPIIyP'),
(3, 2, 'SUB GERENCIA DE TRAMITE DOCUMENTARIO Y ARCHIVO GENERAL', 0, 0, 0, 'SGTDyAG'),
(4, 4, 'SUB GERENCIA DE DESARROLLO ECONOMICO Y TURISMO', 0, 0, 0, 'SGDEyT'),
(5, 4, 'SUB GERENCIA DE SEGURIDAD CIUDADANA Y TRANSPORTE URBANO', 0, 0, 0, 'SGSCyTU'),
(6, 4, 'SUB GERENCIA DE GESTION DE RIESGOS DE DESASTRES Y DEFENSA CIVIL', 0, 0, 0, 'SGGRDyDC'),
(7, 5, 'SUB GERENCIA DE EDUCACION, SALUD, CULTURA, DEPORTE Y JUVENTUD', 0, 0, 0, 'SGESCDyJ'),
(8, 5, 'SUB GERENCIA DE SERVICIOS, PROGRAMAS SOCIALES Y PARTICIPACION VECINAL', 0, 0, 0, 'SGSPSyPV'),
(9, 5, 'SUB GERENCIA DE REGISTRO CIVIL', 0, 0, 0, 'SGRC'),
(10, 6, 'SUB GERENCIA DE GESTION AMBIENTAL Y SALUBRIDAD', 0, 0, 0, 'SGGAyS'),
(11, 6, 'SUB GERENCIA DE LIMPIEZA PUBLICA, AREAS VERDES Y ORNATO', 0, 0, 0, 'SGLPAVyO'),
(12, 7, 'SUB GERENCIA DE PLANEAMIENTO, RACIONALIZACION Y PROGRAMACION DE INVERSIONES', 0, 0, 0, 'SGPRyPI'),
(13, 7, 'SUB GERENCIA DE PRESUPUESTO', 0, 0, 0, 'SGP'),
(14, 8, 'SUB GERENCIA DE RECURSOS HUMANOS', 0, 0, 0, 'SGRH'),
(15, 8, 'SUB GERENCIA DE CONTABILIDAD', 0, 0, 0, 'SGC'),
(16, 8, 'SUB GERENCIA DE TESORERIA', 0, 0, 0, 'SGT'),
(17, 8, 'SUB GERENCIA DE LOGISTICA, PATRIMONIO Y SERVICIOS GENERALES', 0, 0, 0, 'SGLPySG'),
(18, 9, 'SUB GERENCIA DE PLANEAMIENTO URBANO Y CATASTRO', 0, 0, 0, 'SGPUyC'),
(19, 9, 'SUB GERENCIA DE ESTUDIOS Y PROYECTOS', 0, 0, 0, 'SGEyP'),
(20, 9, 'SUB GERENCIA DE OBRAS PUBLICAS, SUPERVISION, LIQUIDACION, SEGURIDAD Y MANTENIMIENTO', 0, 0, 0, 'SGOPSLSyM'),
(21, 9, 'SUB GERENCIA DE OBRAS PRIVADAS Y CONTROL URBANO', 0, 0, 0, 'SGOPCU'),
(22, 10, 'SUB GERENCIA DE REGISTRO Y ORIENTACION Y RECAUDACION TRIBUTARIA', 0, 0, 0, 'SGRyOyRT'),
(23, 10, 'SUB GERENCIA DE FISCALIZACION TRIBUTARIA Y ADMINISTRATIVA', 0, 0, 0, 'SGFTyA'),
(24, 10, 'SUB GERENCIA DE EJECUCION COACTIVA', 0, 0, 0, 'SGEC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ee_tipodoc`
--

CREATE TABLE `ee_tipodoc` (
  `idTipoDoc` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ee_tipodoc`
--

INSERT INTO `ee_tipodoc` (`idTipoDoc`, `nombre`) VALUES
(1, 'DNI'),
(2, 'RUC'),
(3, 'CARNET DE EXTRAJERIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ee_tipoempleado`
--

CREATE TABLE `ee_tipoempleado` (
  `idTipoEmpleado` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ee_tipoempleado`
--

INSERT INTO `ee_tipoempleado` (`idTipoEmpleado`, `nombre`) VALUES
(1, 'ROOT'),
(2, 'GERENTE'),
(3, 'SUBGERENTE'),
(4, 'EMPLEADO'),
(5, 'INVITADO'),
(6, 'SECRETARIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ee_tipotramite`
--

CREATE TABLE `ee_tipotramite` (
  `idTipoTramite` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ee_tipotramite`
--

INSERT INTO `ee_tipotramite` (`idTipoTramite`, `nombre`, `descripcion`) VALUES
(1, 'FUT', 'ya pero eres o no eres?'),
(2, 'ACCESO A LA INFORMACION', 'chichiricosoro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ee_tramite`
--

CREATE TABLE `ee_tramite` (
  `idTramite` int(11) NOT NULL,
  `idTipoTramite` int(11) NOT NULL,
  `vecesDerivadas` int(11) NOT NULL,
  `archivado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ee_derivado`
--
ALTER TABLE `ee_derivado`
  ADD PRIMARY KEY (`idDerivado`),
  ADD KEY `derivado_tramite_idx` (`idTramite`),
  ADD KEY `derivado_gerenciaEmisora_idx` (`idGerenciaEmisora`),
  ADD KEY `derivado_gerenciaReceptora_idx` (`idGerenciaReceptora`),
  ADD KEY `derivado_estado_idx` (`idEstado`);

--
-- Indices de la tabla `ee_documento`
--
ALTER TABLE `ee_documento`
  ADD PRIMARY KEY (`idDocumento`),
  ADD KEY `documentos_fut_idx` (`idFut`);

--
-- Indices de la tabla `ee_empleado`
--
ALTER TABLE `ee_empleado`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD KEY `empleado_gerencia_idx` (`idGerencia`),
  ADD KEY `empleado_tipoEmpleado_idx` (`idTipoEmpleado`);

--
-- Indices de la tabla `ee_estado`
--
ALTER TABLE `ee_estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `ee_fut`
--
ALTER TABLE `ee_fut`
  ADD PRIMARY KEY (`idFut`),
  ADD KEY `fut_solicitante_idx` (`idSolicitante`),
  ADD KEY `futTramite_idx` (`idTramite`),
  ADD KEY `fut_gerenciaDestino_idx` (`idGerenciaDestino`);

--
-- Indices de la tabla `ee_gerencia`
--
ALTER TABLE `ee_gerencia`
  ADD PRIMARY KEY (`idGerencia`);

--
-- Indices de la tabla `ee_informacion`
--
ALTER TABLE `ee_informacion`
  ADD PRIMARY KEY (`idInformacion`),
  ADD KEY `informacion_solicitante_idx` (`idSolicitante`),
  ADD KEY `informacion_tramite_idx` (`idTramite`),
  ADD KEY `idGerenciaDestino_idx` (`idGerenciaDestino`);

--
-- Indices de la tabla `ee_operacion`
--
ALTER TABLE `ee_operacion`
  ADD PRIMARY KEY (`idOperacion`),
  ADD KEY `operacion_empleado_idx` (`idEmpleado`);

--
-- Indices de la tabla `ee_solicitante`
--
ALTER TABLE `ee_solicitante`
  ADD PRIMARY KEY (`idSolicitante`),
  ADD KEY `solicitante_tipoDoc_idx` (`idDoc`);

--
-- Indices de la tabla `ee_subgerencia`
--
ALTER TABLE `ee_subgerencia`
  ADD PRIMARY KEY (`idSubgerencia`),
  ADD KEY `subgerencia_gerencia_idx` (`idGerencia`);

--
-- Indices de la tabla `ee_tipodoc`
--
ALTER TABLE `ee_tipodoc`
  ADD PRIMARY KEY (`idTipoDoc`);

--
-- Indices de la tabla `ee_tipoempleado`
--
ALTER TABLE `ee_tipoempleado`
  ADD PRIMARY KEY (`idTipoEmpleado`);

--
-- Indices de la tabla `ee_tipotramite`
--
ALTER TABLE `ee_tipotramite`
  ADD PRIMARY KEY (`idTipoTramite`);

--
-- Indices de la tabla `ee_tramite`
--
ALTER TABLE `ee_tramite`
  ADD PRIMARY KEY (`idTramite`),
  ADD KEY `tramite_tipoTramite_idx` (`idTipoTramite`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ee_derivado`
--
ALTER TABLE `ee_derivado`
  MODIFY `idDerivado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ee_documento`
--
ALTER TABLE `ee_documento`
  MODIFY `idDocumento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ee_empleado`
--
ALTER TABLE `ee_empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `ee_estado`
--
ALTER TABLE `ee_estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ee_fut`
--
ALTER TABLE `ee_fut`
  MODIFY `idFut` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ee_gerencia`
--
ALTER TABLE `ee_gerencia`
  MODIFY `idGerencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `ee_informacion`
--
ALTER TABLE `ee_informacion`
  MODIFY `idInformacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ee_operacion`
--
ALTER TABLE `ee_operacion`
  MODIFY `idOperacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ee_solicitante`
--
ALTER TABLE `ee_solicitante`
  MODIFY `idSolicitante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ee_subgerencia`
--
ALTER TABLE `ee_subgerencia`
  MODIFY `idSubgerencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `ee_tramite`
--
ALTER TABLE `ee_tramite`
  MODIFY `idTramite` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ee_derivado`
--
ALTER TABLE `ee_derivado`
  ADD CONSTRAINT `derivado_estado` FOREIGN KEY (`idEstado`) REFERENCES `ee_estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `derivado_gerenciaEmisora` FOREIGN KEY (`idGerenciaEmisora`) REFERENCES `ee_gerencia` (`idGerencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `derivado_gerenciaReceptora` FOREIGN KEY (`idGerenciaReceptora`) REFERENCES `ee_gerencia` (`idGerencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `derivado_tramite` FOREIGN KEY (`idTramite`) REFERENCES `ee_tramite` (`idTramite`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ee_documento`
--
ALTER TABLE `ee_documento`
  ADD CONSTRAINT `documentos_fut` FOREIGN KEY (`idFut`) REFERENCES `ee_fut` (`idFut`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ee_empleado`
--
ALTER TABLE `ee_empleado`
  ADD CONSTRAINT `empleado_gerencia` FOREIGN KEY (`idGerencia`) REFERENCES `ee_gerencia` (`idGerencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `empleado_tipoEmpleado` FOREIGN KEY (`idTipoEmpleado`) REFERENCES `ee_tipoempleado` (`idTipoEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ee_fut`
--
ALTER TABLE `ee_fut`
  ADD CONSTRAINT `fut_gerenciaDestino` FOREIGN KEY (`idGerenciaDestino`) REFERENCES `ee_gerencia` (`idGerencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fut_solicitante` FOREIGN KEY (`idSolicitante`) REFERENCES `ee_solicitante` (`idSolicitante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fut_tramite` FOREIGN KEY (`idTramite`) REFERENCES `ee_tramite` (`idTramite`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ee_informacion`
--
ALTER TABLE `ee_informacion`
  ADD CONSTRAINT `idGerenciaDestino` FOREIGN KEY (`idGerenciaDestino`) REFERENCES `ee_gerencia` (`idGerencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `informacion_solicitante` FOREIGN KEY (`idSolicitante`) REFERENCES `ee_solicitante` (`idSolicitante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `informacion_tramite` FOREIGN KEY (`idTramite`) REFERENCES `ee_tramite` (`idTramite`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ee_operacion`
--
ALTER TABLE `ee_operacion`
  ADD CONSTRAINT `operacion_empleado` FOREIGN KEY (`idEmpleado`) REFERENCES `ee_empleado` (`idEmpleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ee_solicitante`
--
ALTER TABLE `ee_solicitante`
  ADD CONSTRAINT `solicitante_tipoDoc` FOREIGN KEY (`idDoc`) REFERENCES `ee_tipodoc` (`idTipoDoc`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ee_subgerencia`
--
ALTER TABLE `ee_subgerencia`
  ADD CONSTRAINT `subgerencia_gerencia` FOREIGN KEY (`idGerencia`) REFERENCES `ee_gerencia` (`idGerencia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ee_tramite`
--
ALTER TABLE `ee_tramite`
  ADD CONSTRAINT `tramite_tipoTramite` FOREIGN KEY (`idTipoTramite`) REFERENCES `ee_tipotramite` (`idTipoTramite`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
