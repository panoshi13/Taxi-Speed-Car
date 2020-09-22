-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-08-2020 a las 22:59:37
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taxispeedcar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'noticias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `idconductor` int(11) NOT NULL,
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `dni` int(11) NOT NULL,
  `foto` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`idconductor`, `nombre`, `apellido`, `dni`, `foto`) VALUES
(1, 'LUIS ALBERTO', 'GONZALES GAMEZ', 76123190, '18108571 (1).jpg'),
(2, 'DESHEALY LIRA', 'CARHUARICRA VICTORINO', 71584745, '09764769.jpg'),
(3, 'DESHEALY LIRA', 'CARHUARICRA VICTORINO', 71584745, '09764769.jpg'),
(4, 'CHRISALIDA ROSARIO', 'ALFARO CHACON', 76123199, '43742467.jpg'),
(5, 'HAROLD STING', 'ALFARO CHACON', 76123198, 'LINO.jpg'),
(6, 'CHRISALIDA ROSARIO', 'ALFARO CHACON', 76123199, '40921459.jpg'),
(7, 'EDISON', 'PAUCAR PACHECO', 76125478, '42053832.jpg'),
(8, 'HAROLD STING', 'ALFARO CHACON', 76123198, '80538305.jpg'),
(9, 'NANCY', 'CHACON TOROBEO', 40269490, '07031640.jpg'),
(10, 'LEONIDAS', 'SARMIENTO SANCHEZ', 77777777, 'istockphoto-453256953-612x612.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `placa`
--

CREATE TABLE `placa` (
  `idcartilla` int(11) NOT NULL,
  `placa` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `n_autorizacion_servicio` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `n_persona_autorizada` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `n_ruc` int(11) NOT NULL,
  `n_tarjeta_unica_circulacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cartilla_image` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_renovacion` date NOT NULL,
  `nombre_conductor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_conductor` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `dni_conductor` int(11) NOT NULL,
  `foto_conductor` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Disparadores `placa`
--
DELIMITER $$
CREATE TRIGGER `TR_cartillaInsertada` AFTER INSERT ON `placa` FOR EACH ROW INSERT INTO conductor(idconductor, nombre,apellido,dni,foto)
        VALUES(null,new.nombre_conductor,new.apellido_conductor,new.dni_conductor,new.foto_conductor)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `brief` varchar(511) COLLATE utf8_spanish_ci DEFAULT NULL,
  `content` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `estado` int(11) DEFAULT 1,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `titulo`, `brief`, `content`, `image`, `created_at`, `estado`, `user_id`, `category_id`) VALUES
(20, 'Trámites que puedes realizar a través de ventanilla virtual de ATU', 'Con el objetivo de evitar que en su centro de atención presencial se formen colas... ', 'De esta forma se evita colas, aglomeraciones y se mitiga la propagación del Covid-19.\r\n\r\nLima, 13 de agosto de 2020. Con el objetivo de evitar que en su centro de atención presencial se formen colas, aglomeraciones de personas y, de esta forma, mitigar la propagación del Covid-19, la Autoridad de Transporte Urbano para Lima y Callao (ATU) ha puesto, desde el 14 de julio, a disposición del público usuario su ventanilla virtual (http://sistemas.atu.gob.pe/ventanilla).\r\n\r\nAquí, los conductores de las unidades de transporte urbano podrán realizar los siguientes trámites: Registrar su solicitud de fraccionamiento, liberación de vehículos con cobranza coactiva o medidas preventivas derivadas de un procedimiento administrativo sancionador.\r\n\r\nAdemás, para realizar el pago de multas y/o fraccionamientos, tampoco es necesario que el operador de transporte se acerque presencialmente a nuestras oficinas, tan solo debe enviar un correo electrónico a tesoreria@atu.gob.pe adjuntando su comprobante de pago del Banco de la Nación o Scotiabank y señalando su nombre, D. N. I, placa del vehículo y número de acta de control.\r\n\r\n“Es importante que en este periodo de emergencia en el que seguimos luchando para vencer al Coronavirus mantengamos el distanciamiento social y evitemos a toda costa las aglomeraciones de personas, solo así podremos salir adelante, por eso exhorto a todos los conductores a utilizar nuestras plataformas virtuales”, dijo la presidenta de la ATU, María Jara.\r\n\r\nCabe precisar que solo corresponde pagar ante la ATU, multas que corresponden al transporte regular de pasajeros, servicio de taxi, transporte escolar, transporte turístico y transporte de personal.', 'locales-Uber.jpg', '2020-08-21 13:37:01', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_spanish_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` int(11) DEFAULT 1,
  `tipo` int(11) DEFAULT 1,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `username`, `email`, `password`, `image`, `estado`, `tipo`, `created_at`) VALUES
(1, 'harold', 'alfaro', 'panoshi', 'harold13_98@hotmail.com', 'harold123', 'imagen.jpg', 1, 1, NULL),
(2, 'nancy', 'chacon', 'nancycha', 'nancy_8j@hotmail.com', 'nancy123', NULL, 1, 1, '2020-07-28 18:02:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`idconductor`);

--
-- Indices de la tabla `placa`
--
ALTER TABLE `placa`
  ADD PRIMARY KEY (`idcartilla`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `conductor`
--
ALTER TABLE `conductor`
  MODIFY `idconductor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `placa`
--
ALTER TABLE `placa`
  MODIFY `idcartilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
