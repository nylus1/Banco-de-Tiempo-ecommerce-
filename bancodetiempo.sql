-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-12-2022 a las 21:36:05
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bancodetiempo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `name` varchar(55) NOT NULL,
  `description` varchar(400) NOT NULL,
  `price` int(6) NOT NULL,
  `id_service` int(6) NOT NULL,
  `user_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`name`, `description`, `price`, `id_service`, `user_name`) VALUES
('Cambiar las sabanas.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum felis ac quam tristique mollis.', 45, 3, 'isabelita'),
('Limpiar el coche.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum felis ac quam tristique mollis.', 60, 25, 'illosoldi'),
('Pintar paredes de habitaci?n.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum felis ac quam tristique mollis.', 180, 26, 'admin'),
('Ayudar con los deberes.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum felis ac quam tristique mollis.', 60, 27, 'dipper'),
('Hacer la compra.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum felis ac quam tristique mollis.', 45, 28, 'admin'),
('Ayuda con programaci?n.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum felis ac quam tristique mollis.', 240, 29, 'illosoldi'),
('Aspirar la casa.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum felis ac quam tristique mollis.', 30, 30, 'elsiitah13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `usuario_id` int(5) NOT NULL,
  `name` varchar(35) NOT NULL,
  `surname` varchar(90) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `balance` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`usuario_id`, `name`, `surname`, `email`, `username`, `password`, `balance`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin', 'admin', 350),
(2, 'David', 'Fernandez', 'illosoldi@gmail.com', 'illosoldi', 'illosoldi123', 210),
(3, 'Esther', 'Gonzalez', 'dipper@gmail.com', 'dipper', 'dipper123', 585),
(4, 'Isabel', 'Sevillana', 'isabelita@gmail.com', 'isabelita', 'isabelita123', 120),
(5, 'Elsa', 'Azcona', 'elsiitah13@gmail.com', 'elsiitah13', 'elsiitah13', 420);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_service`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id_service` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `usuario_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
