<?php
$dondeEstoy = (explode("?",basename($_SERVER["REQUEST_URI"])));
$dondeEstoy = $dondeEstoy[0];
//echo $dondeEstoy; 

	switch ($dondeEstoy) {
		case "registro.php":
			$CURRENT_PAGE = "Registro"; 
			$PAGE_TITLE = "FanBase - Registro";
			break;

		case "contactar.php":
			$CURRENT_PAGE = "Contactar"; 
			$PAGE_TITLE = "FanBase - Contáctanos";
			break;

		case "terminoslegales.php":
			$CURRENT_PAGE = "Terminos Legales"; 
			$PAGE_TITLE = "FanBase - Terminos Legales";
			break;


		case "info_juego.php":
			$CURRENT_PAGE = "Informacion Juego"; 
			$PAGE_TITLE = "FanBase - Informacion Juego";
		break;

		case "recomendaciones.php":
			$CURRENT_PAGE = "Recomendaciones"; 
			$PAGE_TITLE = "FanBase - Recomendaciones";
			break;

		case "pkmclicker.php":
			$CURRENT_PAGE = "Zona interactiva"; 
			$PAGE_TITLE = "FanBase - Pokémon Clicker";
			break;

		case "findTreasure.php":
			$CURRENT_PAGE = "Zona interactiva"; 
			$PAGE_TITLE = "FanBase - Buscar el tesoro";
			break;

		case "flappybird.php":
			$CURRENT_PAGE = "Zona interactiva"; 
			$PAGE_TITLE = "FanBase - Flappy Bird";
			break;

		case "pkmonrun.php":
			$CURRENT_PAGE = "Zona interactiva"; 
			$PAGE_TITLE = "FanBase - Pokemon Run";
			break;

		case "index.php":
			$CURRENT_PAGE = "Inicio"; 
			$PAGE_TITLE = "FanBase - Inicio";
			break;

		case "video.php":
			$CURRENT_PAGE = "Video"; 
			$PAGE_TITLE = "FanBase - Video";
			break;

		case "trailers.php":
			$CURRENT_PAGE = "Trailer"; 
			$PAGE_TITLE = "FanBase - Trailer";
			break;

		case "nosotros.php":
			$CURRENT_PAGE = "Nosotros"; 
			$PAGE_TITLE = "FanBase - Nosotros";
			break;

		case "juegos.php":
			$CURRENT_PAGE = "Juegos"; 
			$PAGE_TITLE = "FanBase - Juegos";
			break;
			
		default:
			$CURRENT_PAGE = "Inicio";
			$PAGE_TITLE = "FanBase - Home";
	}
