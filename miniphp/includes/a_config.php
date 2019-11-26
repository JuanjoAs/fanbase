<?php

echo "-----------------------------------------------------------------------------------------------".$_SERVER["REQUEST_URI"];

	switch ($_SERVER["REQUEST_URI"]) {
		case "/gitfanbase/fanbase/miniphp/registro.php":
			$CURRENT_PAGE = "Registro"; 
			$PAGE_TITLE = "FanBase - Registro";
			break;
		case "/gitfanbase/fanbase/miniphp/contactar.php":
			$CURRENT_PAGE = "Contactar"; 
			$PAGE_TITLE = "FanBase - Contáctanos";
		case "/gitfanbase/fanbase/miniphp/recomendaciones.php":
			$CURRENT_PAGE = "Recomendaciones"; 
			$PAGE_TITLE = "FanBase - Recomendaciones";
			break;
		case "/gitfanbase/fanbase/miniphp/index.php":
			$CURRENT_PAGE = "Inicio"; 
			$PAGE_TITLE = "FanBase - Inicio";
			break;
		default:
			$CURRENT_PAGE = "Inicio";
			$PAGE_TITLE = "FanBase - Home";
	}
