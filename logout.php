<?php

//logout.php

include('includes/a_config.php');

//Reset OAuth access token
$google_client->revokeToken();
//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('Location:http://localhost:3000/TechnoTeam/login.php');

?>
