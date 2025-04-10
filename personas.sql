-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-04-2025 a las 21:54:02
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `electoral`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `id_personas` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cumple` varchar(11) NOT NULL,
  `estrato` varchar(10) NOT NULL,
  `barrio` varchar(20) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `direccion` varchar(254) NOT NULL,
  `lider` varchar(50) NOT NULL,
  `sitio` varchar(30) NOT NULL,
  `mesa` int(11) NOT NULL,
  `tratamiento` varchar(20) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  PRIMARY KEY (`id_personas`),
  UNIQUE KEY `cedula` (`cedula`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_personas`, `tipo`, `cedula`, `nombres`, `apellidos`, `email`, `cumple`, `estrato`, `barrio`, `sexo`, `departamento`, `municipio`, `direccion`, `lider`, `sitio`, `mesa`, `tratamiento`, `telefono`) VALUES
(1, 'Cédula', 77561111, 'Paola Andrea', 'Gómez Arcila', 'paolaarcila528@gmail.com', '1999-12-12', 'uno', 'El Troncal', 'Femenino', 'Valle del Cauca', 'Cali', 'Calle 9a # 56 - 09', 'Camilo López', 'Colegio XYZ', 22, 'Acepta', 314582222),
(2, 'Cédula', 69666987, 'Luz Angela', 'Gonzalez Gómez', 'gonzalezluzang@gmail.com', '1980-02-23', 'dos', 'Santa Bárbara', 'Femenino', 'Antioquia', 'Medellín', 'Calle 45 # 2 - 08', 'Juan Pablo Pérez', 'Colegio xyz', 13, 'Acepta', 3154786999),
(3, 'Cédula', 1130963143, 'Luis Fernando', 'Rubio Jaramillo', 'rubjaramillo56@gmail.com', '1985-11-30', 'uno', 'El Retorno', 'Masculino', 'Caldas', 'Manizales', 'Av 5 # 6 - 04', 'Alejandra Sánchez', 'Anglo Americano', 5, 'Acepta', 3005632547),
(4, 'Documento Nacional de Extranjería', 1140555999, 'Edwin Fernney', 'Caicedo Vera', 'edwin5698@hotmail.com', '1986-02-02', 'dos', 'Fontibón', 'Masculino', 'Cundinamarca', 'Bogotá', 'Calle 56 # 25 - 05', 'Camilo López', 'Liceo Campo David', 26, 'Acepta', 3012225896),
(5, 'Cédula', 63878531, 'Gloria Patricia', 'Rincón Montoya', 'rincon5882gm@hotmail.com', '1990-06-06', 'tres', 'Cerro Norte', 'Femenino', 'Tolima', 'Ibagué', 'Av 4n # 34n - 10', 'Juan Pablo Pérez', 'Colombo Americano CAS', 4, 'Acepta', 3125589969),
(6, 'Cédula', 1130444555, 'Luis', 'Barragán Torres', 'luisbarragan51@gmail.com', '1995-12-05', 'dos', 'Miraflores', 'Masculino', 'Sucre', 'Sincelejo', 'Carrera 20 # 10 - 56', 'Alejandra Sánchez', 'La Independencia', 32, 'Acepta', 3152223697),
(7, 'Documento Nacional de Extranjería', 89898989, 'Adriana', 'Velandia Aparicio', 'advelandia1986@gmail.com', '1986-08-05', 'cuatro', 'Los Sauces', 'Femenino', 'Amazonas', 'Leticia', 'Carrera 45 # 106 - 02', 'Paola Gómez', 'Marymount', 15, 'Acepta', 3012225698),
(8, 'Cédula', 1135888743, 'Gabriel', 'López Bayardo', 'gab12215@hotmail.com', '1984-04-12', 'dos', 'El Danubio Azul', 'Masculino', 'Huila', 'Neiva', 'Carrera 102 # 25 - 04', 'Paola Gómez', 'Colegio Torre 1', 15, 'Acepta', 3168887854),
(9, 'Cédula', 5688756, 'Rosa Elvira', 'Parra Cuervo', 'rosaelvira555@outlook.com', '1975-09-20', 'cuatro', 'Troncal', 'Femenino', 'Cundinamarca', 'Bogotá', 'Diagonal 5 # 56 - 02', 'Juan Pablo Pérez', 'Colegio Alvernia', 24, 'Acepta', 3012258777),
(10, 'Cédula', 6988844, 'Andres', 'Sotelo Rosales', 'and1555sotelo@outlook.es', '1983-10-16', 'tres', 'El Retorno', 'Masculino', 'Valle del Cauca', 'Cali', 'Av 5n # 105 - 64', 'Camilo López', 'Liceo Campo David', 14, 'Acepta', 3152225698),
(11, 'Documento Nacional de Extranjería', 1135555593, 'María Patricia', 'Contreras', 'mariapc444@hotmail.com', '1982-11-29', 'tres', 'Nuevo Horizonte', 'Femenino', 'Boyacá', 'Tunja', 'Carrera 2 # 15 - 30', 'Alejandra Sánchez', 'Colegio Libertad', 21, 'Acepta', 3156669866),
(12, 'Cédula', 66952112, 'Alejandra', 'Díaz Martínez', 'alejadm2698@outlook.com', '1991-08-27', 'cuatro', 'Meléndez', 'Femenino', 'Valle del Cauca', 'Cali', 'Calle 5 # 68 - 103', 'Juan Pablo Pérez', 'Universidad Santiago de Cali', 32, 'Acepta', 3022245589),
(13, 'Cédula', 1146987888, 'Camilo', 'Pérez', 'camiloperez2@gmail.com', '1980-12-12', 'uno', 'San Fernando', 'Masculino', 'Valle del Cauca', 'Cali', 'Calle 20 # 5 - 25', 'Paola Gómez', 'Colegio xyz', 14, 'Acepta', 3152225896),
(14, 'Cédula', 25899398, 'Manuel', 'Ordónez Páez', 'manupaez23@gmail.com', '1981-01-28', 'tres', 'Calima', 'Masculino', 'Huila', 'Neiva', 'Calle 95 # 60b - 105', 'Camilo López', 'Colegio Villa Uno', 18, 'Acepta', 3154112356),
(15, 'Cédula', 56881234, 'Caterine', 'Guzmán', 'cg5287@outlook.com', '1982-11-25', 'tres', 'Nápoles', 'Femenino', 'Valle del Cauca', 'Cali', 'Calle 52 # 4 - 110', 'Alejandra Sánchez', 'Colegio Departamental', 12, 'Acepta', 3124587896);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
