-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2022 a las 06:46:42
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_chivas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chivas`
--

CREATE TABLE `chivas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `tamano` decimal(10,0) NOT NULL,
  `matricula` varchar(11) NOT NULL,
  `numAsientos` int(11) NOT NULL,
  `propietario` varchar(100) NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `costo` decimal(10,0) NOT NULL,
  `itinerario` text NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `chivas`
--

INSERT INTO `chivas` (`id`, `nombre`, `tamano`, `matricula`, `numAsientos`, `propietario`, `cedula`, `telefono`, `correo`, `ciudad`, `imagen`, `costo`, `itinerario`, `descripcion`) VALUES
(6, 'La Vagabunda', '3', 'PBO-453', 10, 'Luis Mendex', '0987654321', '0487654321', 'Luiszx@gmail.com', 'Cuenca', 'servicio-01.jpg', '100', '· 2 Horas de recorrido · Recorrido por Zonas turísticas · Incluye DJ y Animador · Capacidad de 30 personas debido a la pandemia · Cócteles de Daikiri Frutos Rojos o Canelazo Frozen · Pausa en el Centro Histórico · Elección pareja más animada · Regalos varios · Aire Acondicionado + Vista Panorámica * Opcionales: Bebidas Soft', 'El paseo en Chiva o Bus comienza desde el lugar que tu nos indiques.  Avanzamos despacito por las calles con más historia de la ciudad hasta llegar al casco colonial, podrás tomar fotos únicas a todos los atractivos turísticos mientras te abrigas con un sorbito de canelazo.'),
(7, 'La Cholita', '3', 'BBO-453', 10, 'Rocio Guaman', '0787654321', '0987654321', 'Rocioszx@gmail.com', 'Banos', 'servicio-02.jpg', '100', '· 2 Horas de recorrido · Recorrido por Zonas turísticas · Incluye DJ y Animador · Capacidad de 30 personas debido a la pandemia · Cócteles de Daikiri Frutos Rojos o Canelazo Frozen · Pausa en el Centro Histórico · Elección pareja más animada · Regalos varios · Aire Acondicionado + Vista Panorámica * Opcionales: Bebidas Soft', 'El paseo en Chiva o Bus comienza desde el lugar que tu nos indiques.  Avanzamos despacito por las calles con más historia de la ciudad hasta llegar al casco colonial, podrás tomar fotos únicas a todos los atractivos turísticos mientras te abrigas con un sorbito de canelazo.'),
(8, 'El callejero', '3', 'CBO-453', 10, 'Carlos Colcha', '0987654321', '0487654321', 'Carloszx@gmail.com', 'Riobamba', 'servicio-03.jpg', '100', '· 2 Horas de recorrido · Recorrido por Zonas turísticas · Incluye DJ y Animador · Capacidad de 30 personas debido a la pandemia · Cócteles de Daikiri Frutos Rojos o Canelazo Frozen · Pausa en el Centro Histórico · Elección pareja más animada · Regalos varios · Aire Acondicionado + Vista Panorámica * Opcionales: Bebidas Soft', 'El paseo en Chiva o Bus comienza desde el lugar que tu nos indiques.  Avanzamos despacito por las calles con más historia de la ciudad hasta llegar al casco colonial, podrás tomar fotos únicas a todos los atractivos turísticos mientras te abrigas con un sorbito de canelazo.'),
(9, 'Proyecto X', '3', 'ABC-453', 12, 'Manuel Medrano', '0227654321', '0411654321', 'LManuel@gmail.com', 'Puyo', 'servicio-04.jpg', '100', '· 2 Horas de recorrido · Recorrido por Zonas turísticas · Incluye DJ y Animador · Capacidad de 30 personas debido a la pandemia · Cócteles de Daikiri Frutos Rojos o Canelazo Frozen · Pausa en el Centro Histórico · Elección pareja más animada · Regalos varios · Aire Acondicionado + Vista Panorámica * Opcionales: Bebidas Soft', 'El paseo en Chiva o Bus comienza desde el lugar que tu nos indiques.  Avanzamos despacito por las calles con más historia de la ciudad hasta llegar al casco colonial, podrás tomar fotos únicas a todos los atractivos turísticos mientras te abrigas con un sorbito de canelazo.'),
(10, 'LocuraChiva', '3', 'PTO-453', 7, 'Carla Carrison', '0987659921', '0499654321', 'Carkazx@gmail.com', 'Cuenca', 'servicio-05.jpg', '100', '· 2 Horas de recorrido · Recorrido por Zonas turísticas · Incluye DJ y Animador · Capacidad de 30 personas debido a la pandemia · Cócteles de Daikiri Frutos Rojos o Canelazo Frozen · Pausa en el Centro Histórico · Elección pareja más animada · Regalos varios · Aire Acondicionado + Vista Panorámica * Opcionales: Bebidas Soft', 'El paseo en Chiva o Bus comienza desde el lugar que tu nos indiques.  Avanzamos despacito por las calles con más historia de la ciudad hasta llegar al casco colonial, podrás tomar fotos únicas a todos los atractivos turísticos mientras te abrigas con un sorbito de canelazo.'),
(11, 'Spiderman', '3', 'PBO-453', 10, 'Mishel Mender', '0955654321', '0487655521', 'Mishelzx@gmail.com', 'Banos', 'servicio-06.jpg', '100', '· 2 Horas de recorrido · Recorrido por Zonas turísticas · Incluye DJ y Animador · Capacidad de 30 personas debido a la pandemia · Cócteles de Daikiri Frutos Rojos o Canelazo Frozen · Pausa en el Centro Histórico · Elección pareja más animada · Regalos varios · Aire Acondicionado + Vista Panorámica * Opcionales: Bebidas Soft', 'El paseo en Chiva o Bus comienza desde el lugar que tu nos indiques.  Avanzamos despacito por las calles con más historia de la ciudad hasta llegar al casco colonial, podrás tomar fotos únicas a todos los atractivos turísticos mientras te abrigas con un sorbito de canelazo.'),
(12, 'Pastinisa', '3', 'PBZ-453', 6, 'Luis Nigel', '03387654321', '0483354321', 'Nigelszx@gmail.com', 'Quito', 'servicio-07.jpg', '100', '· 2 Horas de recorrido · Recorrido por Zonas turísticas · Incluye DJ y Animador · Capacidad de 30 personas debido a la pandemia · Cócteles de Daikiri Frutos Rojos o Canelazo Frozen · Pausa en el Centro Histórico · Elección pareja más animada · Regalos varios · Aire Acondicionado + Vista Panorámica * Opcionales: Bebidas Soft', 'El paseo en Chiva o Bus comienza desde el lugar que tu nos indiques.  Avanzamos despacito por las calles con más historia de la ciudad hasta llegar al casco colonial, podrás tomar fotos únicas a todos los atractivos turísticos mientras te abrigas con un sorbito de canelazo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `cedula`, `nombre`, `apellido`, `correo`, `telefono`, `password`) VALUES
(1, '0605019124', 'Maria', 'Dolores', 'mariasasd@correo.com', '0987654321', '0'),
(4, '1400650931', 'Julisa', 'Sanches', 'julisal.melendres@espoch.edu.ec', '0983458215', '0'),
(5, '1102466099', 'AngelMelendres', 'Melendres', 'jabianmelendres@gmail.com', '+5939927266', '123456'),
(7, '0606060606', 'Pablico', 'Chacon', 'chacon@sad.com', '0987654321', '234456789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE `contratos` (
  `id` int(11) NOT NULL,
  `idChiva` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contratos`
--

INSERT INTO `contratos` (`id`, `idChiva`, `idCliente`, `codigo`, `fecha`) VALUES
(4, 8, 5, 'Paseo2', '2022-07-16'),
(6, 7, 1, 'Encebollado', '2022-07-19'),
(7, 8, 4, '682922', '2022-07-08'),
(8, 6, 1, 'asd11', '2022-06-30'),
(9, 9, 5, '111111111', '2022-07-15'),
(10, 6, 1, '1', '2022-07-15'),
(12, 6, 5, '682922', '2023-05-04'),
(13, 7, 1, '682922', '2022-07-15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `chivas`
--
ALTER TABLE `chivas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_chivas_has_clientes_chivas` (`idChiva`),
  ADD KEY `fk_chivas_has_clientes_clientes1` (`idCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `chivas`
--
ALTER TABLE `chivas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `contratos`
--
ALTER TABLE `contratos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD CONSTRAINT `fk_chivas_has_clientes_chivas` FOREIGN KEY (`idChiva`) REFERENCES `chivas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_chivas_has_clientes_clientes1` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
