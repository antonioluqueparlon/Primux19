<?php include("includes/a_config.php");?>
<?php 

require("crud/Controller/UsuarioController.php");
if(isset($_POST["registrarse"])){
    $error = false;

    if (isset($_POST['captcha']) && $_POST['captcha'] == $_SESSION['captcha_text']) {
      $_SESSION["error_captcha"] = false;
  } else {
      $_SESSION["error_captcha"] = true;
      $error = true;
  }

  //Si el captcha es correcto hace las funciones del registro
  if($error == false){

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
      $usuario = new Usuario($id,$usuario,$pass,$nombre,$apellido1,$apellido2,$fNac,$pais,$cp,$telefono,$rol,"newUser.png");
      UsuarioController::insertarUsuario($usuario);
      $_SESSION['usuarioRegistrado'] = true;
      $_SESSION['user_email_address'] = $_POST["email"];
      $_SESSION['loginFinal'] = true;
      $_SESSION['rol'] = $rol;
      header('Location: index.php');
    }else{
      $_SESSION['usuarioExistente'] = true;
    }
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

  <form class="formLogin needs-validation" name="formRegistro" novalidate method="POST" action="">

  <div class="form-group">
  <label for="mail">Email</label>
      <input type="text" id="mail" class=" second form-control" name="email" placeholder="Email" 
      <?php if (isset($_POST['email'])) {
        echo "value='" . $_POST['email'] . "'";
        }elseif(isset($_SESSION['user_email_address'])) {
          echo "value='" . $_SESSION['user_email_address'] . "'";
          }?> pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" required>
    <div class="invalid-feedback">
            Introduce una dirección de correo válida
    </div>
  </div>

    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" class=" third form-control" name="password" placeholder="Contraseña" pattern=".{4,}" required>
      <div class="invalid-feedback">
              La contraseña debe tener 4 o más carácteres
      </div>
    </div>

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" class=" second form-control" name="nombre" placeholder="Nombre" 
        <?php if (isset($_POST['nombre'])) {
          echo "value='" . $_POST['nombre'] . "'";
          }elseif(isset($_SESSION['user_email_address'])) {
            echo "value='" . $_SESSION['user_first_name'] . "'";
            }?> pattern="[a-zA-ZñÁÉÍÓÚáéíóú ,.'-]+" required>
      <div class="invalid-feedback">
              Añade un nombre
      </div>
    </div>

    <?php 
        if (isset($_SESSION['user_email_address'])){
          $apellidos = explode(" ",$_SESSION['user_last_name']);
          }
    ?>
    <div class="form-group">
        <label for="apellidos">Primer apellido</label>
        <input type="text" id="apellidos" class=" second form-control" name="apellido1" placeholder="Primer Apellido" pattern="[A-Za-zñÁÉÍÓÚáéíóú ]+" 
        <?php if (isset($_POST['apellido1'])){
          echo "value='" .$_POST['apellido1']. "'";
          }elseif(isset($_SESSION['user_email_address']) && isset($apellidos)) {
            echo "value='" .$apellidos[0]. "'";
            }?> required>
      <div class="invalid-feedback">
              Añade un apellido
      </div>
    </div>

    <div class="form-group">
        <label for="apellidos2">Segundo apellido</label>
        <input type="text" id="apellidos2" class=" second form-control" name="apellido2" placeholder="Segundo Apellido" pattern="[A-Za-zñÁÉÍÓÚáéíóú ]+" 
        <?php if (isset($_POST['apellido1'])){
          echo "value='" .$_POST['apellido1']. "'";
          }elseif(isset($_SESSION['user_email_address']) && isset($apellidos[1])) {
            echo "value='" .$apellidos[1]. "'";
            }?> required>
        <div class="invalid-feedback">
              Añade un apellido
      </div>
    </div>

    <label for="pais">País</label></p>
    <select id="pais" name="pais" class="second">
      <?php
        $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
        foreach ($countries as $c) {
            echo "<option class='option' value='" . $c . "'";

            if(isset($_POST["pais"]) && $_POST["pais"] == $c){
               echo"selected";
              };
              
            echo">" . $c . "</option>";
        }
      ?>
    </select>

    <div class="form-group">
        <label for="fnac">Fecha de nacimiento</label>
        <input type="date" id="fnac" name="fnac" class="dateBox second form-control" <?php if(isset($_POST["fnac"])){ echo "value='".$_POST["fnac"]."'";} ?>required>
        <div class="invalid-feedback">
              Añade una fecha
      </div>
    </div>

    <div class="form-group">
        <label for="cp">Código Postal</label>
        <input type="text" id="cp" name="cp" placeholder="Código Postal" class="second  form-control" pattern="[0-9]{5}" <?php if(isset($_POST["cp"])){ echo "value='".$_POST["cp"]."'";} ?> required>
      <div class="invalid-feedback">
              Añade el código postal
      </div>
    </div>

    <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="text" id="telefono" name="telefono" placeholder="Teléfono" class="second  form-control" pattern="[0-9]{9}" <?php if(isset($_POST["telefono"])){ echo "value='".$_POST["telefono"]."'";} ?> required>
        <div class="invalid-feedback">
              Añade un teléfono
      </div>
    </div>

    <input type="hidden" name="rol" value="usuario">
    
    <hr class="solid">

    <div>
      <label for="captcha">¿Eres un robot?</label></p>
        <img src="captcha.php" alt="CAPTCHAIMG" class="captcha-image"><i class="fas fa-redo refresh-captcha"></i>
        <br>
        <input type="text" id="captcha" name="captcha">
        <?php if (isset($_SESSION['error_captcha']) && $_SESSION['error_captcha'] == true) {
          $_SESSION['error_captcha'] = false;
          echo "<p style='color:red'> El texto no coincide </p>";
        }?>
    </div>
    
    <input type="submit" class="fourth" name='registrarse' value="Registrarse">
        
  </form>
  <hr class="solid">
      <div id="formFooterRegistro">
        <a href="logout.php"><button type="button" class="btn  my-2 my-sm-0 btnRegistro">Volver</button></a>
      </div>
  </div>
</div>

<?php include("includes/footer.php");?>


<script>
var refreshButton = document.querySelector(".refresh-captcha");
refreshButton.onclick = function() {
  <?php $_SESSION['error_captcha'] = false; ?>
  document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
<script>
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

</body>
</html>