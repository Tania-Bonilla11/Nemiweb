-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2021 a las 19:23:05
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nemi_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estrellas`
--

DROP TABLE IF EXISTS `estrellas`;
CREATE TABLE `estrellas` (
  `id` int(10) NOT NULL,
  `idUsuario` int(10) NOT NULL,
  `idLugar` int(10) NOT NULL,
  `1est` varchar(10) NOT NULL,
  `2est` varchar(10) NOT NULL,
  `3est` varchar(10) NOT NULL,
  `4est` varchar(10) NOT NULL,
  `5est` varchar(10) NOT NULL,
  `ranking` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estrellas`
--

INSERT INTO `estrellas` (`id`, `idUsuario`, `idLugar`, `1est`, `2est`, `3est`, `4est`, `5est`, `ranking`) VALUES
(9, 21, 14, 'orange', 'orange', 'orange', 'orange', 'black', 4),
(11, 21, 12, 'orange', 'orange', 'black', 'black', 'black', 2),
(12, 22, 14, 'orange', 'orange', 'orange', 'orange', 'orange', 5),
(14, 22, 12, 'orange', 'orange', 'black', 'black', 'black', 2),
(17, 21, 17, 'orange', 'black', 'black', 'black', 'black', 1),
(18, 22, 13, 'orange', 'orange', 'black', 'black', 'black', 2),
(19, 21, 13, 'orange', 'orange', 'orange', 'black', 'black', 3),
(20, 21, 22, 'orange', 'orange', 'orange', 'orange', 'black', 4),
(21, 22, 17, 'orange', 'orange', 'black', 'black', 'black', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fav`
--

DROP TABLE IF EXISTS `fav`;
CREATE TABLE `fav` (
  `id` int(10) NOT NULL,
  `idUsuario` int(10) NOT NULL,
  `idLugar` int(10) NOT NULL,
  `class` varchar(20) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `lat` varchar(500) NOT NULL,
  `ing` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fav`
--

INSERT INTO `fav` (`id`, `idUsuario`, `idLugar`, `class`, `nombre`, `descripcion`, `lat`, `ing`, `telefono`, `imagen`) VALUES
(16, 22, 11, 'fa fa-bookmark', 'usu', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '13.343399223697636', '-88.43387961387634', '', 'fondo.jpg'),
(17, 22, 14, 'fa fa-bookmark', 'ugb', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '13.342052562621326', '-88.46869200468063', '75915528', 'cafe.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

DROP TABLE IF EXISTS `lugares`;
CREATE TABLE `lugares` (
  `id` int(15) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(4000) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `ing` varchar(100) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`id`, `nombre`, `descripcion`, `lat`, `ing`, `telefono`, `imagen`) VALUES
(9, 'el jocotal', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '13.33634221869579', '-88.2493543624878', '', 'icono.jpg'),
(10, 'el transito', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '13.345612324818243', '-88.35296273231506', '', 'fondo2.jpg'),
(11, 'usu', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '13.343399223697636', '-88.43387961387634', '', 'fondo.jpg'),
(12, 'hola', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '13.783626835674351', '-87.83580165356398', '7878787', 'fondo3.jpg'),
(14, 'ugb', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '13.342052562621326', '-88.46869200468063', '75915528', 'cafe.jpg'),
(17, 'parque acuatico san jose', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '13.414239694123019', '-88.3445855230093', '75958565', 'WhatsApp Image 2021-05-05 at 6.52.00 PM (1).jpeg'),
(19, 'san rafael', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '13.378122737920606', '-88.34885995835066', '75958565', 'WhatsApp Image 2021-05-05 at 6.52.00 PM (1).jpeg'),
(20, 'san jorge', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '13.414464070913365', '-88.34459524601698', '75958565', 'WhatsApp Image 2021-05-05 at 6.52.00 PM (1).jpeg'),
(25, 'yano el coyol', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '13.337010346344842', '-88.3721673488617', '75958565', 'casa.png'),
(26, 'el transito', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '13.354490623292133', '-88.34859173744915', '45552522', 'WhatsApp Image 2021-05-16 at 12.26.41 PM (1).jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencias`
--

DROP TABLE IF EXISTS `sugerencias`;
CREATE TABLE `sugerencias` (
  `id` int(15) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(4000) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `ing` varchar(100) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sugerencias`
--

INSERT INTO `sugerencias` (`id`, `nombre`, `descripcion`, `lat`, `ing`, `telefono`, `imagen`) VALUES
(27, 'hola', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '15.024380438910743', '-87.39727020263672', '75958565', 'WhatsApp Image 2021-05-16 at 12.32.03 PM.jpeg'),
(28, 'hola', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '15.167577595475697', '-90.65025329589844', '75958565', 'WhatsApp Image 2021-05-16 at 12.32.03 PM.jpeg'),
(29, 'hola', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '13.351207622099446', '-88.3446854352951', '8455445', 'WhatsApp Image 2021-05-16 at 12.32.03 PM.jpeg'),
(30, 'carne asada ricacaca', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '16.783505561927786', '-91.84982299804688', '75958565', 'WhatsApp Image 2021-05-16 at 12.26.41 PM (1).jpeg'),
(31, 'hola', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '13.353545916872893', '-88.25598478317261', '78787875', 'WhatsApp Image 2021-05-16 at 12.26.41 PM (1).jpeg'),
(33, 'carne asada ricacaca', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles.', '14.397438794346602', '-88.86394500732422', '75958565', 'WhatsApp Image 2021-05-16 at 12.26.41 PM.jpeg'),
(34, 'hola', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '20.715015145512087', '-87.80685424804688', '75958565', 'WhatsApp Image 2021-05-16 at 12.32.03 PM.jpeg'),
(35, 'hola', 'Para terminar este recorrido, hemos escogido el parque Maquilishuat, ubicado en la colonia del mismo nombre. Destaca por su abundante vegetación y su gran cantidad de árboles', '51.944264879028765', '-71.048583984375', '75958565', 'WhatsApp Image 2021-05-16 at 12.26.41 PM.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE `tipo_usuario` (
  `id` int(10) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(130) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `last_session` datetime DEFAULT NULL,
  `activacion` int(11) NOT NULL DEFAULT 0,
  `token` varchar(40) NOT NULL,
  `token_password` varchar(100) DEFAULT NULL,
  `password_request` int(11) DEFAULT 0,
  `id_tipo` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `correo`, `last_session`, `activacion`, `token`, `token_password`, `password_request`, `id_tipo`, `imagen`) VALUES
(21, 'kevin11', '$2y$10$lLAZsb7Bl9/GJkcG/3Knse.zSgCXFe3xHn946hzTv0UWLQx/b07SO', 'Kevin Parada Martinez', 'geovan8@gmail.com', '2021-05-21 15:29:53', 1, 'a77c327adc3b79c3073663ed03d5c372', '', 0, 1, 'WhatsApp Image 2021-05-05 at 6.52.00 PM (1).jpeg'),
(22, 'jose503', '$2y$10$oOMWKqUPFHU3EfJMoCtZWubpvnZC3H9gcBhl8AxSYsg/d5ztYM3Vm', 'Jose Enrique Alvarado ', 'carlos@gmail.com', '2021-05-21 14:09:05', 1, '22a9a553237f01a0d1787c9826026cd3', '', 0, 2, 'fondo3.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estrellas`
--
ALTER TABLE `estrellas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fav`
--
ALTER TABLE `fav`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estrellas`
--
ALTER TABLE `estrellas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `fav`
--
ALTER TABLE `fav`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `sugerencias`
--
ALTER TABLE `sugerencias`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
