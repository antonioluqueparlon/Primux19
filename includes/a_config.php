<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/TechnoTeam/Fase3/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "Sobre Nosotros";
			break;
		case "/TechnoTeam/Fase3/contacto.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Contacto";
			break;
		case "/TechnoTeam/Fase3/apartado.php":
			$CURRENT_PAGE = "Apartado"; 
			$PAGE_TITLE = "Apartado";
			break;
		case "/TechnoTeam/Fase3/noticia.php":
			$CURRENT_PAGE = "Noticia"; 
			$PAGE_TITLE = "Noticia";
			break;
		case "/TechnoTeam/Fase3/seccion.php":
			$CURRENT_PAGE = "Seccion"; 
			$PAGE_TITLE = "Seccion";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Trend Top";
	}

		//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('906960082307-ci8nv0fk2jlgpsavochp0tbrmirm0qbv.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('-jJzmpQu8bbNJ4N2R1_Dg5bt');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://'.$_SERVER['HTTP_HOST'].'/login.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');


//start session on web page
session_start();

$login_button = '';


//if(!isset($_SESSION["loginFinal"]) && !isset($_SESSION["registro"])){
	//Reset OAuth access token
	//$google_client->revokeToken();
	//Destroy entire session data.
	//session_destroy();

	//redirect page to index.php
	//header('Location:http://localhost:3000/login.php');

//}

?>