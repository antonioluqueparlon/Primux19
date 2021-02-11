
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>technoteam usuario</title>
</head>
<?php
require_once './Controller/UsuarioController.php';
$usuario = UsuarioController::buscarPorCorreo("jesucr4@gmail.com");

if (isset($_POST['añadir'])){
    
        $rol = 0;
        foreach ($_POST['rol'] as $value) {
            $rol += $value;
        }
       if (is_uploaded_file($_FILES['foto']['tmp_name'])){
           $fich_unic=time() ."-". $_FILES['foto']['name'];
           $ruta = "../crud/imgCrud/".$fich_unic;
           move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
       }else{
            $ruta = $usuario->imagen;
       }
           $usuario = new Usuario($_POST['idUsuario'],$_POST['email'],$_POST['password'],$_POST['nombre'],$_POST['priApell'],$_POST['segApell'],
           $_POST['fechaNacimiento'],$_POST['pais'],$_POST['cp'],$_POST['telefono'],$rol, $ruta);
           
           UsuarioController::modificarUsuario($usuario, $_POST['idUsuario']);
       
       
      // header("Location:prueba.php");

}

   ?> 
<div class="container">
    <h2>modificar usuario</h2><!-- comment -->
    
    <form method="POST" enctype="multipart/form-data">
    <?php echo $usuario->id; ?>
       email: <br> <input type="text" name="email" value="<?php echo $usuario->email;?>"><br><br>
        contraseña: <br><input type="password" name="password" value="<?php echo $usuario->password;?>"><br><br>
       Nombre:<br> <input type="text" name="nombre" value="<?php echo $usuario->nombre ;?>"><br><br>
        
       Primer apellido:<br> <input type="text" name="priApell" value="<?php echo $usuario->primerApellido ;?>"><br><br>
       Segundo apellido:<br> <input type="text" name="segApell" value="<?php echo $usuario->segundoApellido ;?>"><br><br>
       fecha nacimiento:<br> <input type="date" name="fechaNacimiento" value="<?php echo $usuario->fechaNacimiento ;?>"><br><br>
       País:<br> <input type="text" name="pais" value="<?php echo $usuario->pais ;?>"><br><br>
        Código posta:<br> <input type="text" name="cp" value="<?php echo $usuario->codigoPostal ;?>"><br><br>
        Telefono:<br> <input type="text" name="telefono" value="<?php echo $usuario->telefono ;?>"><br><br>
        <?php 
        $arrayPosiciones = explode(",",$usuario->rol);
        ?>
        Rol:<br> <select multiple="" name="rol[]">
            <option value="1" <?php if(in_array("administrador", $arrayPosiciones)) echo "selected"; ?>>Administrador</option>
            <option value="2" <?php if(in_array("editor", $arrayPosiciones)) echo "selected"; ?>>Editor</option>
            <option value="4" <?php if(in_array("usuario", $arrayPosiciones)) echo "selected"; ?>>Usuario</option>
         
        </select>
        Imagen: <input type="file" name="foto"><br><br>
        <input type="submit" name="añadir" value="Añadir" >
        <input type="hidden" name="idUsuario" value="<?php echo $usuario->id; ?>">
        
    </form>

</div>
