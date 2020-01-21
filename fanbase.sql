-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-01-2020 a las 14:34:10
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
-- Estructura de tabla para la tabla `recomendacion`
--

CREATE TABLE `recomendacion` (
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
  `linkplataforma4` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `recomendacion`
--

INSERT INTO `recomendacion` (`nombre`, `descripcion`, `imagen`, `tipo`, `plataforma1`, `plataforma2`, `plataforma3`, `plataforma4`, `linkplataforma1`, `linkplataforma2`, `linkplataforma3`, `linkplataforma4`) VALUES
('Ataque a los Titanes', 'Shingeki no Kyojin (進撃の巨人?), también conocida en países de habla hispana como Ataque a los titanes1​ y Ataque de los titanes,2​ es una serie de manga escrita e ilustrada por Hajime Isayama. El manga se publicó por primera vez en septiembre de 2009 en la revista Bessatsu Shōnen Magazine.<br>\r\n\r\nLa trama gira en torno a Eren Jaeger quien junto a sus amigos de la infancia, decide unirse al ejército con el objetivo de vengar la muerte de su madre y la destrucción de su ciudad a manos de unos seres humanoides llamadas Titanes. Más adelante, Eren descubrirá que posee la capacidad de transformarse en un Titán, lo que desencadena toda una serie de acontecimientos que afectarán tanto a Eren, como a todos los que le rodean.', 'assets/img/recomendaciones/titanes.png', 'seriepeli', 'imdb', '', '', '', 'https://www.imdb.com/title/tt2560140/', '', '', ''),
('Cyberpunk 2077', 'El juego AAA más esperado de la última década. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate tempore ea sit commodi. At nisi maiores quo doloribus aperiam quam nam fuga eaque a tempore excepturi nemo hic, quod voluptate. At nisi maiores quo doloribus aperiam quam nam fuga eaque a tempore excepturi nemo hic, quod voluptate.\r\n', 'assets/img/recomendaciones/cyberpunk.png', 'juego', 'gog', 'steam', 'microsoft', '', 'https://www.gog.com/game/cyberpunk_2077', 'https://store.steampowered.com/app/1091500/Cyberpunk_2077/', 'https://www.microsoft.com/es-es/p/cyberpunk-2077/bx3m8l83bbrw', ''),
('El Señor de los Anillos: El retorno del rey', 'El Señor de los Anillos: el retorno del Rey (título original en inglés: The Lord of the Rings: The Return of the King) es la tercera película de la trilogía cinematográfica de El Señor de los Anillos, dirigida por Peter Jackson y basada en la tercera parte de la obra de J. R. R. Tolkien, El Señor de los Anillos. Tuvo un presupuesto de 94 millones de dólares y fue rodada del 11 de octubre de 1999 al 22 de diciembre de 2000.\r\n<br>\r\nTrata sobre la última parte del viaje que emprendieron los nueve compañeros (de los cuales quedan solamente ocho) para salvar a la Tierra Media de la oscuridad impuesta por Sauron. En esta parte se decide el destino de todos los habitantes de estas tierras.\r\n<br>\r\nLos primeros dos filmes fueron El Señor de los Anillos: la Comunidad del Anillo y El Señor de los Anillos: las dos torres, aunque en esta película se incluyen algunos eventos del libro anterior: Las dos torres.', 'assets/img/recomendaciones/anillos3.png', 'seriepeli', 'imdb', '', '', '', 'https://www.imdb.com/title/tt0167260/', '', '', ''),
('Frozen 2', 'Frozen 2 (estilizado como Frozen II) es una película estadounidense musical de fantasía animada por computadora producida por Walt Disney Animation Studios, y es la secuela de la película Frozen de 2013.<br>\r\nLa reina Elsa, su hermana Anna, Kristoff, Olaf y Sven se embarcan en un nuevo viaje en lo profundo del bosque, más allá de su tierra natal de Arendelle, para descubrir la verdad sobre un antiguo misterio de su reino. Su objetivo principal es descubrir por qué Elsa oye voces procedentes del Bosque encantado, donde desde hace tiempo nadie puede entrar ni salir. De no lograrlo su reino estaría en peligro.\r\n', 'assets/img/recomendaciones/frozen2.png', 'seriepeli', 'imdb', '', '', '', 'https://www.imdb.com/title/tt4520988/', '', '', ''),
('League of Legends', 'League of Legends (también conocido por sus siglas LoL) es un videojuego del género multijugador de arena de batalla en línea (MOBA) y deporte electrónico el cual fue desarrollado por Riot Games para Microsoft Windows y OS X. En un principio los servidores estaban alojados en la empresa GOA y fue vendida a la empresa china Tencent Holdings Limited. ', 'assets/img/recomendaciones/leagueoflegends.png', 'juego', 'pc', 'google', '', '', 'https://signup.euw.leagueoflegends.com/es/signup/redownload', 'https://play.google.com/store/apps/details?id=com.riotgames.league.wildrift&hl=es_419', '', ''),
('Pokémon: Espada y Escudo', 'Pokémon Espada y Pokémon Escudo son los videojuegos de la octava generación. Se lanzaron el 15 de noviembre de 2019 para Nintendo Switch. Fueron anunciados el 28 de febrero de 2019 en un Nintendo Direct especial. <br>\r\n\r\nTu aventura te llevará por toda la región de Galar, donde encontrarás rincones únicos, como enormes praderas verdes llenas de naturaleza o pueblos y ciudades donde personas y Pokémon conviven en armonía. Otra característica de la cultura de la región es que los combates Pokémon son la forma de entretenimiento por excelencia. Los aspirantes miden sus fuerzas contra los Líderes de Gimnasio en combates Pokémon que se llevan a cabo en los estadios distribuidos por todo Galar. Siempre que se celebra un combate, los estadios se llenan de multitudes de espectadores y fans que acuden a animar a sus Entrenadores favoritos. Estuvieron revueltos en un halo de discusión debido a que incluyeron sólo 400 Pokémon, siendo el primer juego de la saga en no incluir todos, cuando incluso usando los mismos modelos de la anterior consola, la 3DS, incluyen casi la mitad.', 'assets/img/recomendaciones/pokemonespada.png', 'juego', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `rango` set('admin','user','editor','') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `nombre`, `email`, `password`, `rango`) VALUES
(1, 'admin', 'SysAdmin', 'admin@fanbase.com', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(2, 'SrJuanjo', 'Juanjo', 'juanjo@fanbase.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(3, 'Rafa', 'Rafael', 'rafa@fanbase.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `id` int(11) NOT NULL,
  `id_video` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentario` text COLLATE utf8_spanish_ci NOT NULL,
  `valoracion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `recomendacion`
--
ALTER TABLE `recomendacion`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `valoracion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
