-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2022 a las 09:18:34
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_prueba_2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `fecha_nac` date NOT NULL,
  `nacionalidad` varchar(10) NOT NULL,
  `genero` varchar(6) NOT NULL,
  `ciudad_res` varchar(100) NOT NULL,
  `url_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id`, `nombres`, `apellidos`, `rut`, `fecha_nac`, `nacionalidad`, `genero`, `ciudad_res`, `url_foto`) VALUES
(4, 'dfhgdfgdfg', 'dfgdfgd', '123456789-', '1987-04-14', 'Chilena', 'Hombre', 'dfgdfgdfg', 'img/perfil/hatiberg fiestero.jpg'),
(5, 'dsfsdf', 'sdfsdf', '202079172', '1997-12-17', 'Chilena', 'Otros', 'sdfsdf', 'img/perfil/HatiNavideño.png'),
(6, 'asdasd', 'asdasdasd', '8765987-K', '2022-11-03', 'Uruguaya', 'Mujer', 'sdfsdfsdf', 'img/perfil/IMG_9999C_CHICA-1.jpg'),
(7, 'dsfsdf', 'sdfsdf', '12345678-9', '2022-10-31', 'Chilena', 'Hombre', 'sdfsdfds', 'img/perfil/FWc-Qi_WIAQ67Ju.png'),
(8, 'dsfsdf', 'sdfsdf', '12345678-9', '2022-10-31', 'Chilena', 'Hombre', 'sdfsdfds', 'img/perfil/FWc-Qi_WIAQ67Ju.png'),
(9, 'dsfsdf', 'sdfsdf', '12345678-9', '2022-10-31', 'Chilena', 'Hombre', 'sdfsdfds', 'img/perfil/FWc-Qi_WIAQ67Ju.png'),
(10, 'dsfsdf', 'sdfsdf', '12345678-9', '2022-10-31', 'Chilena', 'Hombre', 'sdfsdfds', 'img/perfil/FWc-Qi_WIAQ67Ju.png'),
(11, 'dsfsdf', 'sdfsdf', '12345678-9', '2022-10-31', 'Chilena', 'Hombre', 'sdfsdfds', 'img/perfil/FWc-Qi_WIAQ67Ju.png'),
(12, 'dsfsdf', 'sdfsdf', '12345678-9', '2022-10-31', 'Chilena', 'Hombre', 'sdfsdfds', 'img/perfil/FWc-Qi_WIAQ67Ju.png'),
(13, 'dsfsdf', 'sdfsdf', '12345678-9', '2022-10-31', 'Chilena', 'Hombre', 'sdfsdfds', 'img/perfil/FWc-Qi_WIAQ67Ju.png'),
(14, 'sdfsdfsd', 'fdsfsdf', '12345678-9', '1987-10-18', 'Canadiense', 'Otros', 'valpo', 'img/perfil/EoUSbVOVgAQsoGi.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
