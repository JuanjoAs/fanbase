<?php
$dondeEstoy = (explode("?",basename($_SERVER["REQUEST_URI"])));
$dondeEstoy = $dondeEstoy[0];
//echo $dondeEstoy; 

	switch ($dondeEstoy) {
		case "registro":
			$CURRENT_PAGE = "Registro"; 
			$PAGE_TITLE = "FanBase - Registro";
			break;

		case "contactar":
			$CURRENT_PAGE = "Contactar"; 
			$PAGE_TITLE = "FanBase - Contáctanos";
			break;

		case "terminoslegales":
			$CURRENT_PAGE = "Terminos Legales"; 
			$PAGE_TITLE = "FanBase - Terminos Legales";
			break;


		case "info_juego":
			$CURRENT_PAGE = "Informacion Juego"; 
			$PAGE_TITLE = "FanBase - Informacion Juego";
		break;

		case "recomendaciones":
			$CURRENT_PAGE = "Recomendaciones"; 
			$PAGE_TITLE = "FanBase - Recomendaciones";
			break;

		case "pkmclicker":
			$CURRENT_PAGE = "Zona interactiva"; 
			$PAGE_TITLE = "FanBase - Pokémon Clicker";
			break;

		case "findTreasure":
			$CURRENT_PAGE = "Zona interactiva"; 
			$PAGE_TITLE = "FanBase - Buscar el tesoro";
			break;

		case "flappybird":
			$CURRENT_PAGE = "Zona interactiva"; 
			$PAGE_TITLE = "FanBase - Flappy Bird";
			break;

		case "pkmonrun":
			$CURRENT_PAGE = "Zona interactiva"; 
			$PAGE_TITLE = "FanBase - Pokemon Run";
			break;

		case "index":
			$CURRENT_PAGE = "Inicio"; 
			$PAGE_TITLE = "FanBase - Inicio";
			break;

		case "video":
			$CURRENT_PAGE = "Video"; 
			$PAGE_TITLE = "FanBase - Video";
			break;

		case "trailers":
			$CURRENT_PAGE = "Trailer"; 
			$PAGE_TITLE = "FanBase - Trailer";
			break;

		case "nosotros":
			$CURRENT_PAGE = "Nosotros"; 
			$PAGE_TITLE = "FanBase - Nosotros";
			break;

		case "juegos":
			$CURRENT_PAGE = "Juegos"; 
			$PAGE_TITLE = "FanBase - Juegos";
			break;
			
		case "add_reco":
			$CURRENT_PAGE = "Añadir recomendacion"; 
			$PAGE_TITLE = "FanBase - Añadir recomendacion";
			break;
			
		default:
			$CURRENT_PAGE = "Inicio";
			$PAGE_TITLE = "FanBase - Home";
	}
