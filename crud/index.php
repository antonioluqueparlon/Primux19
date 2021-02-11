
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
if (isset($_POST['añadir'])){
        $rol = 0;
        foreach ($_POST['rol'] as $value) {
            $rol += $value;
        }
       if (is_uploaded_file($_FILES['foto']['tmp_name'])){
           $fich_unic=time() ."-". $_FILES['foto']['name'];
           $ruta = "./crud/imgCrud/".$fich_unic;
           move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
           $usuario = new Usuario("",$_POST['email'],$_POST['password'],$_POST['nombre'],$_POST['priApell'],$_POST['segApell'],
           $_POST['fechaNacimiento'],$_POST['pais'],$_POST['cp'],$_POST['telefono'],$rol, $ruta);
           
           UsuarioController::insertarUsuario($usuario);
       }else{
           echo "NO SE HA SUBIDO";
       }
       header("Location:prueba.php");

   }
if(isset($_POST['borrar'])){
   echo $_POST['email'];
   UsuarioController::EliminarUsuario($_POST['email']);
   header("Location:prueba.php");
}
if(isset($_POST['modificar'])){
    header("Location:modUsuario.php");
 }
   ?> 
<div class="container">
    <h2>Añadir usuario</h2><!-- comment -->
    <a href="prueba.php">Ir a prueba</a>
    <form method="POST" enctype="multipart/form-data">
       email: <br> <input type="text" name="email"><br><br>
        contraseña: <br><input type="password" name="password"><br><br>
       Nombre:<br> <input type="text" name="nombre"><br><br>
        
       Primer apellido:<br> <input type="text" name="priApell"><br><br>
       Segundo apellido:<br> <input type="text" name="segApell"><br><br>
       fecha nacimiento:<br> <input type="date" name="fechaNacimiento"><br><br>
       País:<br> <input type="text" name="pais"><br><br>
        Código posta:<br> <input type="text" name="cp"><br><br>
        Telefono:<br> <input type="text" name="telefono"><br><br>
        Rol:<br> <select multiple="" name="rol[]">
            <option value="1">Administrador</option>
            <option value="2" >Editor</option>
            <option value="4">Usuario</option>
         
        </select>
        Imagen: <input type="file" name="foto"><br><br>
        <input type="submit" name="añadir" value="Añadir">
        <input type="submit" name="modificar" value="Modificar">
        
    </form>
    <form method="POST">
    email: <br> <input type="text" name="email"><br><br>
    <input type="submit" value="Borrar" name="borrar" />
    </form>
</div>
