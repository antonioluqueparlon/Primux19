<?php include("includes/a_config.php");?>
<?php require("crud/Controller/UsuarioController.php"); ?>
<?php

//Consulta sobre el usuario en bbdd

if(isset($_SESSION["loginFinal"])){
  header('Location: index.php');
}

if(isset($_POST["Entrar"])){
    $usuario = $_POST["user"];
    $pass = $_POST["password"];
    if(UsuarioController::buscarUsuarioMailPass($usuario,$pass)){
      $_SESSION["loginFinal"] = true;
      $_SESSION['user_email_address'] = $usuario;
      $_SESSION["rol"] = UsuarioController::obtenerRol($usuario);
      header('Location: index.php');
    }else{
      $_SESSION['usuarioNoEncontrado'] = true;
    }

}

if (isset($_GET["code"])) {
    //It will Attempt to exchange a code for an valid authentication token.
    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

    //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
    if (!isset($token['error'])) {
        //Set the access token used for requests
        $google_client->setAccessToken($token['access_token']);

        //Store "access_token" value in $_SESSION variable for future use.
        $_SESSION['access_token'] = $token['access_token'];

        //Create Object of Google Service OAuth 2 class
        $google_service = new Google_Service_Oauth2($google_client);

        //Get user profile data from google
        $data = $google_service->userinfo->get();
        //Below you can find Get profile data and store into $_SESSION variable

        if (!empty($data['email'])) {
          $_SESSION['user_email_address'] = $data['email'];
      }

      if(UsuarioController::buscarUsuarioMail($_SESSION['user_email_address'])){
        $_SESSION["loginFinal"] = true;
        $_SESSION["rol"] = UsuarioController::obtenerRol($_SESSION['user_email_address']);
        header('Location: index.php');
      }else{

        if (!empty($data['given_name'])) {
            $_SESSION['user_first_name'] = $data['given_name'];
        }

        if (!empty($data['family_name'])) {
            $_SESSION['user_last_name'] = $data['family_name'];
        }

        if (!empty($data['gender'])) {
            $_SESSION['user_gender'] = $data['gender'];
        }

        if (!empty($data['picture'])) {
            $_SESSION['user_image'] = $data['picture'];
        }
    
        $_SESSION["registro"] = true;
      header('Location: registro.php');
    }
  }
}

//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if (!isset($_SESSION['access_token'])) {
    //Create a URL to obtain user authorization

    //Cambiar por un button
    $login_button = '<a href="' . $google_client->createAuthUrl() . '"><button class="btn  my-2 my-sm-0 btnRegistro">Entrar con<img src="img/googleIcon.png" alt="google_icon" style="width:20px; height:20px; margin-left:10px;"></button></a>';
}

?>


<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body class="bodyLogin">
<?php include("includes/navigation.php");?>

<?php 
  if(isset($_SESSION['usuarioNoEncontrado']) && $_SESSION['usuarioNoEncontrado'] == true){
    $_SESSION['usuarioNoEncontrado'] = false;
?>
  <div class="alert alert-danger" role="alert">
    No existe el usuario
  </div>
<?php
  }
?>

<div class="wrapperLogin">
  <div id="formContent">

    <form class="formLogin" method="POST" action="">
      <label for="login">Usuario</label>
      <input type="text" id="login" class=" second" name="user" placeholder="Usuario" autofocus>
      <label for="password">Contraseña</label>
      <input type="password" id="password" class=" third" name="password" placeholder="Contraseña">
      <input type="submit" class="fourth" name="Entrar" value="Entrar">
    </form>

    <?php echo '<div align="center">' . $login_button . '</div>'; ?>

    <div id="formFooterRegistro">
      <a href="registro.php"><button class="btn  my-2 my-sm-0 btnRegistro">Registrarse</button></a>
    </div>

  </div>
</div>

<?php include("includes/footer.php");?>

</body>
</html>