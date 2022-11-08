-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2022 a las 04:12:26
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuelaproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` bit(1) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `nombre`, `edad`, `sexo`, `domicilio`, `fecha_nacimiento`) VALUES
(1, 'jose pedro', 21, b'1', 'culiac', '2022-11-15'),
(2, 'Kevin Edel ', 42, b'1', 'culiacansito', '2022-11-16'),
(3, 'Wilbur V. Ortega', 21, b'1', '4582 Quarry Drive\r\nMontgomery, AL 36104\r\n', '2022-11-02'),
(4, 'Amanda H. Johnson', 42, b'0', '1079 Davis Avenue\r\nConcord, CA 94520', '2022-07-07'),
(5, 'Jimmy L. Drysdale', 23, b'1', '892 Brannon Avenue\r\nJacksonville, FL 32205', '2023-02-20'),
(6, 'Garry K. Allen', 25, b'1', '4858 Hope Street\r\nTigard, OR 97223', '2022-09-15'),
(7, 'Levi W. Poche', 32, b'1', '169 Marcus Street\r\nElk River, AL 35611\r\n', '2023-04-20'),
(8, 'Israel B. Williams', 49, b'1', '37 Golden Street\r\nIslamorada, FL 33036', '2022-04-03'),
(9, 'Sophia C. Martin', 21, b'0', '1248 Meadow Drive\r\nMissoula, MT 59801', '2022-04-06'),
(10, 'Sandra A. Portis', 37, b'0', '4566 Duff Avenue\r\nBarre, VT 05641', '2022-10-08'),
(11, 'Kent R. Turner', 42, b'1', '122 Hiney Road\r\nLas Vegas, NV 89120', '2021-12-30'),
(12, 'Andrew V. Ewert', 22, b'1', '3456 Sun Valley Road\r\nReardan, WA 99029', '2022-04-21'),
(13, 'Trina J. Lynch', 33, b'0', '1038 Passaic Street\r\nNewark, NJ 07102', '2022-11-19'),
(14, 'Bobby D. Zane', 32, b'1', '970 Glory Road\r\nMonterey, TN 38574', '2022-09-25'),
(15, 'Ernest S. Mullins', 34, b'1', '4009 College Street\r\nAtlanta, GA 30318', '2022-06-24'),
(16, 'Peter L. Ribeiro', 23, b'1', '867 Hidden Meadow Drive\r\nWahpeton, ND 58075', '2022-03-25'),
(17, 'Traci T. Cathey', 35, b'0', '4448 Oakway Lane\r\nLos Angeles, CA 90017', '2022-07-18'),
(18, 'William M. Caban', 27, b'1', '2697 Wiseman Street\r\nSevierville, TN 37862', '2020-12-10'),
(19, 'Juanita D. Leggett', 19, b'0', '1091 Brighton Circle Road\r\nWinsted, MN 55395', '2022-04-07'),
(20, 'Terry M. Rutledge', 51, b'1', '4115 Hardesty Street\r\nAlbany, NY 12206', '2022-07-05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
