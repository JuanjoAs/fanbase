-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-12-2019 a las 17:38:55
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

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
CREATE DATABASE IF NOT EXISTS `fanbase` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `fanbase`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recomendaciones`
--

DROP TABLE IF EXISTS `recomendaciones`;
CREATE TABLE IF NOT EXISTS `recomendaciones` (
  `nombre` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
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
  `linkplataforma4` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `recomendaciones`
--

INSERT INTO `recomendaciones` (`nombre`, `descripcion`, `imagen`, `tipo`, `plataforma1`, `plataforma2`, `plataforma3`, `plataforma4`, `linkplataforma1`, `linkplataforma2`, `linkplataforma3`, `linkplataforma4`) VALUES
('Ataque a los Titanes', 'Shingeki no Kyojin (進撃の巨人?), también conocida en países de habla hispana como Ataque a los titanes1​ y Ataque de los titanes,2​ es una serie de manga escrita e ilustrada por Hajime Isayama. El manga se publicó por primera vez en septiembre de 2009 en la revista Bessatsu Shōnen Magazine.<br>\r\n\r\nLa trama gira en torno a Eren Jaeger quien junto a sus amigos de la infancia, decide unirse al ejército con el objetivo de vengar la muerte de su madre y la destrucción de su ciudad a manos de unos seres humanoides llamadas Titanes. Más adelante, Eren descubrirá que posee la capacidad de transformarse en un Titán, lo que desencadena toda una serie de acontecimientos que afectarán tanto a Eren, como a todos los que le rodean.', 'assets/img/recomendaciones/titanes.png', 'seriepeli', 'imdb', '', '', '', 'https://www.imdb.com/title/tt2560140/', '', '', ''),
('Cyberpunk 2077', 'El juego AAA más esperado de la última década. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tempore ea sit commodi. At nisi maiores quo doloribus aperiam quam nam fuga eaque a tempore excepturi nemo hic, quod voluptate. At nisi maiores quo doloribus aperiam quam nam fuga eaque a tempore excepturi nemo hic, quod voluptate.\r\n', 'assets/img/recomendaciones/cyberpunk.png', 'juego', 'gog', 'steam', 'microsoft', '', 'https://www.gog.com/game/cyberpunk_2077', 'https://store.steampowered.com/app/1091500/Cyberpunk_2077/', 'https://www.microsoft.com/es-es/p/cyberpunk-2077/bx3m8l83bbrw', ''),
('El Señor de los Anillos: El retorno del rey', 'El Señor de los Anillos: el retorno del Rey (título original en inglés: The Lord of the Rings: The Return of the King) es la tercera película de la trilogía cinematográfica de El Señor de los Anillos, dirigida por Peter Jackson y basada en la tercera parte de la obra de J. R. R. Tolkien, El Señor de los Anillos. Tuvo un presupuesto de 94 millones de dólares y fue rodada del 11 de octubre de 1999 al 22 de diciembre de 2000.\r\n<br>\r\nTrata sobre la última parte del viaje que emprendieron los nueve compañeros (de los cuales quedan solamente ocho) para salvar a la Tierra Media de la oscuridad impuesta por Sauron. En esta parte se decide el destino de todos los habitantes de estas tierras.\r\n<br>\r\nLos primeros dos filmes fueron El Señor de los Anillos: la Comunidad del Anillo y El Señor de los Anillos: las dos torres, aunque en esta película se incluyen algunos eventos del libro anterior: Las dos torres.', 'assets/img/recomendaciones/anillos3.png', 'seriepeli', 'imdb', '', '', '', 'https://www.imdb.com/title/tt0167260/', '', '', ''),
('League of Legends', 'League of Legends (también conocido por sus siglas LoL) es un videojuego del género multijugador de arena de batalla en línea (MOBA) y deporte electrónico el cual fue desarrollado por Riot Games para Microsoft Windows y OS X. En un principio los servidores estaban alojados en la empresa GOA y fue vendida a la empresa china Tencent Holdings Limited. ', 'assets/img/recomendaciones/leagueoflegends.png', 'juego', 'pc', 'google', '', '', 'https://signup.euw.leagueoflegends.com/es/signup/redownload', 'https://play.google.com/store/apps/details?id=com.riotgames.league.wildrift&hl=es_419', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
