<?php include("includes/a_config.php");?>
<?php 

require("crud/Controller/UsuarioController.php");
if(isset($_POST["registrarse"])){
    $id = UsuarioController::obtenerUltimoUsuario();
    $usuario = $_POST["email"];
    $pass = $_POST["password"];
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $pais = $_POST["pais"];
    $fNac = date('Y-m-d', strtotime($_POST["fnac"]));
    $cp = $_POST["cp"];
    $telefono = $_POST["telefono"];
    $rol = $_POST["rol"];

  if(!UsuarioController::buscarUsuarioMail($usuario)){
    $usuario = new Usuario($id,$usuario,$pass,$nombre,$apellido1,$apellido2,$fNac,$pais,$cp,$telefono,$rol,"");
    UsuarioController::insertarUsuario($usuario);
    $_SESSION['usuarioRegistrado'] = true;
    $_SESSION['loginFinal'] = true;
    $_SESSION['rol'] = $rol;
    header('Location: index.php');
  }else{
    $_SESSION['usuarioExistente'] = true;
  }

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
  if(isset($_SESSION['usuarioExistente']) && $_SESSION['usuarioExistente'] == true){
    $_SESSION['usuarioExistente'] = false;
?>
  <div class="alert alert-danger" role="alert">
    Ya existe ese usuario.
  </div>
<?php
  }
?>

<div class="wrapperLogin">
  <div id="formContent">

  <form class="formLogin needs-validation" novalidate method="POST" action="">

  <input type="text" id="mail" class=" second form-control" name="email" placeholder="Email" <?php if (isset($_SESSION['user_email_address'])) {echo "value='" . $_SESSION['user_email_address'] . "'";}?> required>
    <input type="password" id="password" class=" third form-control" name="password" placeholder="Contraseña" required>
    <input type="text" id="nombre" class=" second form-control" name="nombre" placeholder="Nombre" <?php if (isset($_SESSION['user_email_address'])) {echo "value='" . $_SESSION['user_first_name'] . "'";}?> required>
    
    <?php 
        if (isset($_SESSION['user_email_address'])){
          $apellidos = explode(" ",$_SESSION['user_last_name']);
          }
    ?>
    <input type="text" id="apellidos" class=" second form-control" name="apellido1" placeholder="Primer Apellido" <?php if (isset($_SESSION['user_email_address']) && isset($apellidos)) {echo "value='" .$apellidos[0]. "'";}?> required>
    <input type="text" id="apellidos" class=" second form-control" name="apellido2" placeholder="Segundo Apellido" <?php if (isset($_SESSION['user_email_address']) && isset($apellidos[1])) {echo "value='" .$apellidos[1]. "'";}?> required>
    
    <select id="pais" name="pais" class="second">
      <?php
        $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
        foreach ($countries as $c) {
            echo "<option value='" . $c . "'>" . $c . "</option>";
        }
      ?>
    </select>

    <input type="date" name="fnac" class="second form-control" required>
    <input type="text" name="cp" placeholder="Código Postal" class="second  form-control" required>
    <input type="text" name="telefono" placeholder="Teléfono" class="second  form-control" required>
    <input type="hidden" name="rol" value="usuario">
    <input type="submit" class="fourth" name='registrarse' value="Registrarse">
    </form>

    <a href="logout.php"><button class="btn  my-2 my-sm-0 btnRegistro">Volver</button></a>

  </div>
</div>

<?php include("includes/footer.php");?>

</body>
</html>