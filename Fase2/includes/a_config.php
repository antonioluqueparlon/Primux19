<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/Fase2/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "Sobre Nosotros";
			break;
		case "/Fase2/contacto.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "COntacto";
			break;
		case "/Fase2/apartado.php":
			$CURRENT_PAGE = "Apartado"; 
			$PAGE_TITLE = "Apartado";
			break;
		case "/Fase2/noticia.php":
			$CURRENT_PAGE = "Noticia"; 
			$PAGE_TITLE = "Noticia";
			break;
		case "/Fase2/seccion.php":
			$CURRENT_PAGE = "Seccion"; 
			$PAGE_TITLE = "Seccion";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Trend Top";
	}
