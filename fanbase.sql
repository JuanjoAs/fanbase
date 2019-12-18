-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-12-2019 a las 14:55:52
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fanbase`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recomendaciones`
--

CREATE TABLE `recomendaciones` (
  `nombre` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `plataforma1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `plataforma2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `plataforma3` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `plataforma4` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `linkplataforma1` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `linkplataforma2` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `linkplataforma3` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `linkplataforma4` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `recomendaciones`
--

INSERT INTO `recomendaciones` (`nombre`, `descripcion`, `imagen`, `tipo`, `plataforma1`, `plataforma2`, `plataforma3`, `plataforma4`, `linkplataforma1`, `linkplataforma2`, `linkplataforma3`, `linkplataforma4`) VALUES
('Cyberpunk 2077', 'El juego AAA más esperado de la última década. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tempore ea sit commodi. At nisi maiores quo doloribus aperiam quam nam fuga eaque a tempore excepturi nemo hic, quod voluptate. At nisi maiores quo doloribus aperiam quam nam fuga eaque a tempore excepturi nemo hic, quod voluptate.\r\n', 'assets/img/recomendaciones/cyberpunk.png', 'juego', 'gog', 'steam', 'microsoft', '', 'https://www.gog.com/game/cyberpunk_2077', 'https://store.steampowered.com/app/1091500/Cyberpunk_2077/', 'https://www.microsoft.com/es-es/p/cyberpunk-2077/bx3m8l83bbrw', ''),
('League of Legends', 'League of Legends (también conocido por sus siglas LoL) es un videojuego del género multijugador de arena de batalla en línea (MOBA) y deporte electrónico el cual fue desarrollado por Riot Games para Microsoft Windows y OS X. En un principio los servidores estaban alojados en la empresa GOA y fue vendida a la empresa china Tencent Holdings Limited. ', 'assets/img/recomendaciones/leagueoflegends.png', 'juego', 'pc', 'google', '', '', 'https://signup.euw.leagueoflegends.com/es/signup/redownload', 'https://play.google.com/store/apps/details?id=com.riotgames.league.wildrift&hl=es_419', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `recomendaciones`
--
ALTER TABLE `recomendaciones`
  ADD PRIMARY KEY (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
