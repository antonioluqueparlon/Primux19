<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/TechnoTeam/Fase2/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "Sobre Nosotros";
			break;
		case "/TechnoTeam/Fase2/contacto.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Contacto";
			break;
		case "/TechnoTeam/Fase2/apartado.php":
			$CURRENT_PAGE = "Apartado"; 
			$PAGE_TITLE = "Apartado";
			break;
		case "/TechnoTeam/Fase2/noticia.php":
			$CURRENT_PAGE = "Noticia"; 
			$PAGE_TITLE = "Noticia";
			break;
		case "/TechnoTeam/Fase2/seccion.php":
			$CURRENT_PAGE = "Seccion"; 
			$PAGE_TITLE = "Seccion";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Trend Top";
	}
