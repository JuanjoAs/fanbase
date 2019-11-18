<?php

	switch ($_SERVER["SCRIPT_NAME"]) {
		
		case "/DIW/fanbase/miniphp/registro.php":
			$CURRENT_PAGE = "Registro"; 
			$PAGE_TITLE = "FanBase - Registro";
			break;
		case "/DIW/fanbase/miniphp/contactar.php":
			$CURRENT_PAGE = "Contactar"; 
			$PAGE_TITLE = "FanBase - Contáctanos";
			break;
		default:
			$CURRENT_PAGE = "Inicio";
			$PAGE_TITLE = "FanBase - Home";
	}
