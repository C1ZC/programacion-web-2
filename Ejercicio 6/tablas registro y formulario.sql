-- Base de datos: `automotora`
--C1ZC--
--https://github.com/C1ZC
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
-- Estructura de tabla para la tabla `profesore`
--
CREATE DATABASE automotora;

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuarios` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(70) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Password` varchar(60) NOT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

CREATE TABLE IF NOT EXISTS `autos` (
  `idautos` int(11) NOT NULL ,
  `Matricula` varchar(10) NOT NULL,
  `Serial_motor` varchar(20) NOT NULL,
  `Serial_carroceria` varchar(30) NOT NULL,
  `Marca` varchar(20) NOT NULL,
  `Modelo` varchar(20) NOT NULL,
  `Anio` int(20) NOT NULL,
  `Color` varchar(15),
  `Precio` decimal(14,2) NOT NULL,
   UNIQUE (`idautos`)); 