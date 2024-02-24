-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2024 a las 02:27:10
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uniagustiniana`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `ID_DOCENTE` int(10) UNSIGNED NOT NULL,
  `NOMBRE_DOCE` varchar(100) NOT NULL,
  `APELLIDO_DOCE` varchar(100) NOT NULL,
  `USUARIO_DOCE` varchar(100) NOT NULL,
  `CORREO_DOCE` varchar(100) NOT NULL,
  `EDAD_DOCE` varchar(100) NOT NULL,
  `CELULAR_DOCE` varchar(100) NOT NULL,
  `DIRECCION_DOCE` varchar(200) NOT NULL,
  `PASSWORD_DOCE` varchar(200) NOT NULL,
  `CARRERA` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `ID_ESTUDIANTE` int(11) NOT NULL,
  `NOMBRE_ESTUDIANTE` varchar(100) NOT NULL,
  `APELLIDO_ESTUDIANTE` varchar(100) NOT NULL,
  `USUARIO` varchar(100) NOT NULL,
  `CORREO_ESTU` varchar(100) NOT NULL,
  `EDAD_ESTU` varchar(100) NOT NULL,
  `CELULAR_ESTU` varchar(100) NOT NULL,
  `DIRECCION_ESTU` varchar(200) NOT NULL,
  `PASSWORD_ESTU` varchar(200) NOT NULL,
  `CARRERA` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`ID_DOCENTE`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`ID_ESTUDIANTE`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `ID_DOCENTE` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `ID_ESTUDIANTE` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
