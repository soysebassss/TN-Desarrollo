-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2018 a las 03:31:12
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `todonorte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cli_id` int(11) NOT NULL,
  `cli_nombre` varchar(100) NOT NULL,
  `cli_apellidos` varchar(100) NOT NULL,
  `cli_rut` varchar(45) NOT NULL,
  `cli_dv` char(1) NOT NULL,
  `cli_direccion` varchar(45) NOT NULL,
  `cli_telefono` varchar(45) NOT NULL,
  `cli_giro` varchar(45) NOT NULL,
  `cli_nombreFantasia` varchar(100) NOT NULL,
  `cli_estado` char(1) NOT NULL,
  `cli_correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cli_id`, `cli_nombre`, `cli_apellidos`, `cli_rut`, `cli_dv`, `cli_direccion`, `cli_telefono`, `cli_giro`, `cli_nombreFantasia`, `cli_estado`, `cli_correo`) VALUES
(26, 'Sebastian', 'Aldea Gonzalez', '19823932', '1', 'El olivo #1980', '933012861', 'Servicios Informaticos', 'Seloco', '2', 'sebastian@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `com_id` int(11) NOT NULL,
  `com_codigoProducto` int(11) NOT NULL,
  `com_iva` int(11) NOT NULL,
  `com_valorTotal` int(11) NOT NULL,
  `com_numeroFactura` int(11) NOT NULL,
  `com_recargo` int(11) NOT NULL,
  `com_pro_id` int(11) NOT NULL,
  `com_for_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costosfijos`
--

CREATE TABLE `costosfijos` (
  `cos_id` int(11) NOT NULL,
  `cos_valorDespacho` int(11) NOT NULL,
  `cos_arriendo` varchar(45) NOT NULL,
  `cos_servicio` varchar(45) DEFAULT NULL,
  `cos_telefono` int(11) NOT NULL,
  `cos_otro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costosvariables`
--

CREATE TABLE `costosvariables` (
  `cos_varId` int(11) NOT NULL,
  `cos_papel` int(11) NOT NULL,
  `cos_tinta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `fac_numero` int(11) NOT NULL,
  `fac_valorNeto` int(11) NOT NULL,
  `fac_iva` int(11) NOT NULL,
  `fac_glosa` varchar(200) NOT NULL,
  `fac_recargo` int(11) NOT NULL,
  `fac_descuento` int(11) NOT NULL,
  `fac_total` int(11) NOT NULL,
  `fac_for_pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formapago`
--

CREATE TABLE `formapago` (
  `for_id` int(11) NOT NULL,
  `for_abono` int(11) DEFAULT NULL,
  `for_fecha` date NOT NULL,
  `for_numero` int(11) NOT NULL,
  `for_tipo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horas`
--

CREATE TABLE `horas` (
  `hor_id` int(11) NOT NULL,
  `hor_valorHorasSub` int(11) NOT NULL,
  `hor_horasTrabajadas` int(11) NOT NULL,
  `hor_valorHoraHombre` int(11) NOT NULL,
  `hor_totalHoras` int(11) NOT NULL,
  `hor_tra_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `mat_id` int(11) NOT NULL,
  `mat_nombre` varchar(45) NOT NULL,
  `mat_valor` varchar(45) NOT NULL,
  `mat_ccOcupados` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `pro_id` int(11) NOT NULL,
  `pro_nombre` varchar(45) NOT NULL,
  `pro_apellidos` varchar(45) NOT NULL,
  `pro_rut` varchar(45) NOT NULL,
  `pro_dv` char(1) NOT NULL,
  `pro_direccion` varchar(45) NOT NULL,
  `pro_comuna` varchar(45) NOT NULL,
  `pro_banco` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`pro_id`, `pro_nombre`, `pro_apellidos`, `pro_rut`, `pro_dv`, `pro_direccion`, `pro_comuna`, `pro_banco`) VALUES
(1, 'Franco Renato', 'Muñoz Sepulveda', '12345678', '9', 'Calle Falsa 123', 'Conchali', 'Santander'),
(2, 'fernando', 'reyes vasquez', '12345678', '9', 'calle falsa 123', 'calle larga', 'estado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `tra_id` int(11) NOT NULL,
  `tra_nombre` varchar(45) NOT NULL,
  `tra_cantidad` int(11) NOT NULL,
  `tra_precioUnitario` int(11) NOT NULL,
  `tra_medida` int(11) NOT NULL,
  `tra_metrosLineales` int(11) NOT NULL,
  `tra_metrosTotalRollo` int(11) NOT NULL,
  `tra_valorRollo` int(11) NOT NULL,
  `tra_totalTintasCC` int(11) NOT NULL,
  `tra_valorTintas` int(11) NOT NULL,
  `tra_ccUtilizados` int(11) NOT NULL,
  `tra_materiaPrima` int(11) NOT NULL,
  `tra_cli_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_nombre` varchar(45) NOT NULL,
  `usu_apellidos` varchar(45) DEFAULT NULL,
  `usu_rut` int(11) NOT NULL,
  `usu_dv` char(1) NOT NULL,
  `usu_correo` varchar(100) NOT NULL,
  `usu_clave` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_nombre`, `usu_apellidos`, `usu_rut`, `usu_dv`, `usu_correo`, `usu_clave`) VALUES
(1, 'admin', 'admin admin', 12345678, '9', 'admin@admin.cl', 'admin123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cli_id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`com_id`,`com_pro_id`,`com_for_id`),
  ADD KEY `fk_Compra_Proveedor1_idx` (`com_pro_id`),
  ADD KEY `fk_Compra_FormaPago1_idx` (`com_for_id`);

--
-- Indices de la tabla `costosfijos`
--
ALTER TABLE `costosfijos`
  ADD PRIMARY KEY (`cos_id`);

--
-- Indices de la tabla `costosvariables`
--
ALTER TABLE `costosvariables`
  ADD PRIMARY KEY (`cos_varId`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`fac_numero`,`fac_for_pago`),
  ADD KEY `fk_Factura_FormaPago_idx` (`fac_for_pago`);

--
-- Indices de la tabla `formapago`
--
ALTER TABLE `formapago`
  ADD PRIMARY KEY (`for_id`);

--
-- Indices de la tabla `horas`
--
ALTER TABLE `horas`
  ADD PRIMARY KEY (`hor_id`,`hor_tra_id`),
  ADD KEY `fk_Horas_Trabajo1_idx` (`hor_tra_id`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`mat_id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`tra_id`,`tra_cli_id`,`tra_mat_id`),
  ADD KEY `fk_Trabajo_Cliente1_idx` (`tra_cli_id`),
  ADD KEY `fk_Trabajo_Materiales1_idx` (`tra_mat_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `costosvariables`
--
ALTER TABLE `costosvariables`
  MODIFY `cos_varId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `formapago`
--
ALTER TABLE `formapago`
  MODIFY `for_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `tra_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_Compra_FormaPago1` FOREIGN KEY (`com_for_id`) REFERENCES `formapago` (`for_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Compra_Proveedor1` FOREIGN KEY (`com_pro_id`) REFERENCES `proveedor` (`pro_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fk_Factura_FormaPago` FOREIGN KEY (`fac_for_pago`) REFERENCES `formapago` (`for_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `horas`
--
ALTER TABLE `horas`
  ADD CONSTRAINT `fk_Horas_Trabajo1` FOREIGN KEY (`hor_tra_id`) REFERENCES `trabajo` (`tra_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD CONSTRAINT `fk_Trabajo_Cliente1` FOREIGN KEY (`tra_cli_id`) REFERENCES `cliente` (`cli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Trabajo_Materiales1` FOREIGN KEY (`tra_mat_id`) REFERENCES `materiales` (`mat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
