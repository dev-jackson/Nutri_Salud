-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2020 a las 06:37:26
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nutricion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_plan`
--

CREATE TABLE `detalle_plan` (
  `iddetalle_plan` int(11) NOT NULL,
  `plan` varchar(45) DEFAULT NULL,
  `lunes` varchar(500) DEFAULT NULL,
  `martes` varchar(500) DEFAULT NULL,
  `miercoles` varchar(500) DEFAULT NULL,
  `jueves` varchar(500) DEFAULT NULL,
  `viernes` varchar(500) DEFAULT NULL,
  `sabado` varchar(500) DEFAULT NULL,
  `domingo` varchar(500) DEFAULT NULL,
  `planes_nutri_idplanes_nutri` int(11) DEFAULT NULL,
  `plan_elegido_idplan_elegido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_plan`
--

INSERT INTO `detalle_plan` (`iddetalle_plan`, `plan`, `lunes`, `martes`, `miercoles`, `jueves`, `viernes`, `sabado`, `domingo`, `planes_nutri_idplanes_nutri`, `plan_elegido_idplan_elegido`) VALUES
(2, 'hasta 8 kilos en 1 mes', 'ensalada de lechuga, 160 g de pescado blanco a la plancha con una patata hervida y una infusion ', 'ensalada de lechuga, lentejas con acelgas, patatas y zanahorias y una infusion ', 'menestra de acelgas, zanahoria y patata, 160 g de pescado blanco a la plancha y 50 g de fresas', '80g de pasta con espinacas, 150 g de pollo a la plancha, una pera y una infusion', 'garbanzos con verduras y cucus ', 'caldo de verduras, ensalada con 1 patata hervida, 1 zanahoria hervida, 1 tomate y lechuga, una tortilla francesa de un huevo', '60g de garbanzos con 50 g de cuscus y verdura, un tomate y yogur', 18, NULL),
(4, '1200 kalorias al dia', '1 taza de caldo dietetico, 1 cucharadita con salvado de avena, 1 porción de pollo sin piel', 'sopa casera de verduras, 120 g de pescadilla, 30 g de pan, una fruta del tiempo', '200 g de champiñones, 100 g de carne de ternera, 30 g de pan, una fruta del tiempo', ' 150 g de ensalada de lechuga, remolacha y zanahoria, 65 g de atún al natural, 30 g de pan y una fruta del tiempo.', 'consomé desgrasado, 120 g de merluza, 30 g de pan, una fruta del tiempo.', 'gazpacho andaluz casero, 100 g de carne de pavo, 30 g de pan.', 'sopa de pasta, sémola, arroz o tapioca (15 g en seco), 1 huevo, 30 g de pan, una fruta del tiempo.', NULL, NULL),
(5, '1500 kalorias', '1 ensalada de endivias aliñadas con 1 cucharadita de aceite de oliva y nuez, 120 g de pescado blanco hecho a la plancha con perejil.', '1 ensalada de 2 patatas hervidas con 2 huevos duros, 2 cucharaditas de aceite de oliva y perejil picado.', '60 g de lentejas en crudo preparadas con la parte blanca de un puerro, tomate, un cuarto de berenjena y la misma cantidad de calabacín.', '1 ensalada de canónigos y tomates cherry aliñada con 1 cucharadita de aceite de oliva y sal de ajo', '1 ensalada de escarola con tomates cherry aliñada con aceite de oliva y albahaca.', '4 cucharadas de arroz integral o basmati preparado con 1 tomate a la plancha, 1 cucharadita de aceite de oliva y unas lascas de queso parmesano por encima.', '1 wok preparado con 120 g de pechuga de pollo, un trozo de calabacin, un trozo de pimiento rojo.', NULL, NULL),
(6, 'bajar de peso y quemar grasa', 'Ensalada de canónigos con nueces, parmesano y vinagreta de limón. ', 'Berenjenas rellenas. Pollo al limon ', 'Lomos de trucha al horno con tomate y cebolla.', 'solomilo de cerdo con hortalizas', 'ensalada de aguacate, mango y salmon', 'Merluza a la vinagreta', 'Lubina al horno con eneldo.', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes_nutri`
--

CREATE TABLE `planes_nutri` (
  `idplanes_nutri` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `cliente_idcliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `planes_nutri`
--

INSERT INTO `planes_nutri` (`idplanes_nutri`, `nombre`, `descripcion`, `cliente_idcliente`) VALUES
(16, 'hasta 8 kilos en 1 mes', 'baja de peso en un mes hasta 8 kilos', NULL),
(17, 'bajar peso y quemar grasa', 'este plan sigue una dieta estricta baja en ka', NULL),
(18, '1500 kalorias', 'dieta baja en calorías', NULL),
(19, '1200 kalorias al dia', 'consiste en consumir 1200 kalorias al dia', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_elegido`
--

CREATE TABLE `plan_elegido` (
  `idplan_elegido` int(11) NOT NULL,
  `cliente` varchar(45) DEFAULT NULL,
  `detalle_plan` varchar(45) DEFAULT NULL,
  `cliente_idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `ci` varchar(15) DEFAULT NULL,
  `clave` varchar(500) NOT NULL,
  `roles` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idcliente`, `nombre`, `apellido`, `ci`, `clave`, `roles`) VALUES
(24, 'kevin ', 'Perez', '1207730753', '$2y$10$sGSQeh15.r1mql829BYVCOIZlvm9xBVCDWsFgJRsv9dZx3tt2GSp6', 'C'),
(25, 'luis', 'pozo', '2400197527', '$2y$10$Uh7CVqyk6xrJhyRguUWEaeC/V5Shrb98OMFRgGWe5rmH6gQPFcCZu', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_plan`
--
ALTER TABLE `detalle_plan`
  ADD PRIMARY KEY (`iddetalle_plan`),
  ADD KEY `fk_detalle_plan_planes_nutri_idx` (`planes_nutri_idplanes_nutri`),
  ADD KEY `fk_detalle_plan_plan_elegido1_idx` (`plan_elegido_idplan_elegido`);

--
-- Indices de la tabla `planes_nutri`
--
ALTER TABLE `planes_nutri`
  ADD PRIMARY KEY (`idplanes_nutri`),
  ADD KEY `fk_planes_nutri_cliente1_idx` (`cliente_idcliente`);

--
-- Indices de la tabla `plan_elegido`
--
ALTER TABLE `plan_elegido`
  ADD PRIMARY KEY (`idplan_elegido`),
  ADD KEY `fk_plan_elegido_cliente1_idx` (`cliente_idcliente`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idcliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_plan`
--
ALTER TABLE `detalle_plan`
  MODIFY `iddetalle_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `planes_nutri`
--
ALTER TABLE `planes_nutri`
  MODIFY `idplanes_nutri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `plan_elegido`
--
ALTER TABLE `plan_elegido`
  MODIFY `idplan_elegido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_plan`
--
ALTER TABLE `detalle_plan`
  ADD CONSTRAINT `fk_detalle_plan_plan_elegido1` FOREIGN KEY (`plan_elegido_idplan_elegido`) REFERENCES `plan_elegido` (`idplan_elegido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_plan_planes_nutri` FOREIGN KEY (`planes_nutri_idplanes_nutri`) REFERENCES `planes_nutri` (`idplanes_nutri`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `planes_nutri`
--
ALTER TABLE `planes_nutri`
  ADD CONSTRAINT `fk_planes_nutri_cliente1` FOREIGN KEY (`cliente_idcliente`) REFERENCES `usuario` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `plan_elegido`
--
ALTER TABLE `plan_elegido`
  ADD CONSTRAINT `fk_plan_elegido_cliente1` FOREIGN KEY (`cliente_idcliente`) REFERENCES `usuario` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
