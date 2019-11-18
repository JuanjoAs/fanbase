<?php

	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/DIW/fanbase/miniphp/registro.php":
			$CURRENT_PAGE = "Registro"; 
			$PAGE_TITLE = "FanBase - Registro";
			break;
		case "/DIW/fanbase/miniphp/contactar.php":
			$CURRENT_PAGE = "Contactar"; 
			$PAGE_TITLE = "FanBase - Contáctanos";
		case "/gitfanbase/fanbase/miniphp/recomendaciones.php":
			$CURRENT_PAGE = "Recomendaciones"; 
			$PAGE_TITLE = "FanBase - Recomendaciones";
			break;
		default:
			$CURRENT_PAGE = "Inicio";
			$PAGE_TITLE = "FanBase - Home";
	}
