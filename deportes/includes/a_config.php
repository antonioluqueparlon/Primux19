<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/TechnoTeam/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "Sobre Nosotros";
			break;
		case "/TechnoTeam/contacto.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Contacto";
			break;
		case "/TechnoTeam/apartado.php":
			$CURRENT_PAGE = "Apartado"; 
			$PAGE_TITLE = "Apartado";
			break;
		case "/TechnoTeam/noticia.php":
			$CURRENT_PAGE = "Noticia"; 
			$PAGE_TITLE = "Noticia";
			break;
		case "/TechnoTeam/seccion.php":
			$CURRENT_PAGE = "Seccion"; 
			$PAGE_TITLE = "Seccion";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Trend Top";
	}
?>