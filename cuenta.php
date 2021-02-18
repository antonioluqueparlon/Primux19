<?php include("includes/a_config.php");?>
<?php 
require("crud/Controller/UsuarioController.php");

if(!isset($_SESSION['loginFinal'])){
    header('Location: login.php');
}

if(isset($_POST['salir'])){
    header('Location: index.php');
}

$usuario = UsuarioController::obtenerUsuarioMail($_SESSION['user_email_address']);

if(isset($_POST['guardar'])){

    $usuario->nombre = $_POST['nombre'];
    $usuario->primerApellido = $_POST['primerApe'];
    $usuario->segundoApellido = $_POST['segundoApe'];
    $usuario->password = $_POST['password'];
    $usuario->pais = $_POST['pais'];

    $usuario->imagen = $_FILES['imagen']['name'];
    $oldpath = $_FILES['imagen']['tmp_name'];
    $newpath = "img/".$_FILES['imagen']['name'];
    move_uploaded_file($oldpath,$newpath);

    $usuario->fechaNacimiento = $_POST['fechaNac'];
    $usuario->email = $_SESSION['user_email_address'];
    $usuario->codigoPostal = $_POST['cp'];
    $usuario->telefono = $_POST['tel'];

    UsuarioController::modificarUsuario($usuario, $usuario->id);
} 


?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body class="bodyLogin">
<?php include("includes/navigation.php");?>

<div class="wrapperLogin">
  <div id="formContent">

  <form class="formLogin needs-validation" name="formRegistro" novalidate method="POST" action="" enctype="multipart/form-data">
    
<?php if(!isset($_POST['modificar'])) { ?>
  <div class="form-row">
<?php } ?>
    <div class="col">

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nombre" name="nombre" pattern="[a-zA-Z ,.'-]+" <?php  echo"value='".$usuario->nombre."'"; if(!isset($_POST['modificar'])){ echo "disabled";}?> required>
        <div class="invalid-feedback">
                Añade un nombre
            </div>
        </div>

        <div class="form-group">
                <input type="text" class="form-control" placeholder="Primer Apellido" name="primerApe" pattern="[A-Za-z]+" <?php  echo"value='".$usuario->primerApellido."'"; if(!isset($_POST['modificar'])){ echo "disabled";}?> required>
            <div class="invalid-feedback">
                Añade un apellido
            </div>
        </div>

        <div class="form-group">
                <input type="text" class="form-control" placeholder="Segundo Apellido"  name="segundoApe" pattern="[A-Za-z]+" <?php  echo"value='".$usuario->segundoApellido."'"; if(!isset($_POST['modificar'])){ echo "disabled";}?> required>
            <div class="invalid-feedback">
                    Añade un apellido
            </div>
        </div>

    </div>

    <div class="col">
    <?php if(!isset($_POST['modificar'])) { ?>
        <?php echo"<img src='img/".$usuario->imagen."' style='width:200px'>"; ?>
        <?php } ?>  
    </div>

<?php if(!isset($_POST['modificar'])) { ?>    
    </div>
<?php } ?>

  <div class="form-group"> 
        <input <?php if(isset($_POST['modificar'])){ echo 'type="hidden"';} else { echo 'type="text"';} ?> class="form-control" placeholder="Email" name="email"  pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" <?php  echo"value='".$usuario->email."'";?> disabled>
      <div class="invalid-feedback">
            Introduce una dirección de correo válida
    </div>

    <div class="form-group">
        <input <?php if(!isset($_POST['modificar'])){ echo 'type="hidden"';} else { echo 'type="password"';} ?> name="password" class="form-control" placeholder="Contraseña" required>
    <div class="invalid-feedback">
            Introduce una contraseña de 4 o más dígitos
    </div>

    <select id="pais" name="pais" class="second" <?php if(!isset($_POST['modificar'])){ echo "disabled";} ?>>
      <?php
        $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
        foreach ($countries as $c) {
            echo "<option class='option' value='" . $c . "'";

            if($usuario->pais == $c){
               echo"selected";
              };
              
            echo">" . $c . "</option>";
        }
      ?>
    </select>

    <div class="form-group">
        <input type="date" class="form-control dateBox" name="fechaNac" <?php  echo"value='".$usuario->fechaNacimiento."'"; if(!isset($_POST['modificar'])){ echo "disabled";}?> required>
    <div class="invalid-feedback">
              Añade una fecha
      </div>
    </div>

    <?php if(isset($_POST['modificar'])) { ?>
        <input type="file" class="form-control" name="imagen" id="imagen">
    <?php }?>
    
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Código postal" name="cp" pattern="[0-9]{5}" <?php  echo"value='".$usuario->codigoPostal."'"; if(!isset($_POST['modificar'])){ echo "disabled";}?> required>
        <div class="invalid-feedback">
              Añade el código postal
      </div>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Teléfono"  pattern="[0-9]{9}" name="tel" <?php  echo"value='".$usuario->telefono."'"; if(!isset($_POST['modificar'])){ echo "disabled";}?> required>
    <div class="invalid-feedback">
              Añade un teléfono
      </div>
    </div>

    <?php if(!isset($_POST['modificar'])){ ?>
    <input type="submit" class="fourth" name='modificar' value="Modificar">
    <?php } ?>

    <?php if(isset($_POST['modificar'])){?>
    <input type="submit" class="fourth" name='guardar' value="Guardar">
    <?php }?>

    <?php if(isset($_POST['modificar'])){?>
    <input type="submit" class="fourth" name='volver' value="Volver">
    <?php }else{?>
        <button name="salir" class="btn  my-2 my-sm-0 btnRegistro" >Volver</button>
    <?php }?>
    </form>
</div>
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

  </div>
</div>

<?php include("includes/footer.php");?>
