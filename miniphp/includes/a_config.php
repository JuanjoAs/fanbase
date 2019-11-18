<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/gitfanbase/fanbase/miniphp/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About Us";
			break;
		case "/gitfanbase/fanbase/miniphp/recomendaciones.php":
			$CURRENT_PAGE = "Recomendaciones"; 
			$PAGE_TITLE = "FanBase - Recomendaciones";
			break;
		default:
			$CURRENT_PAGE = "Inicio";
			$PAGE_TITLE = "FanBase - Home";
	}
?>