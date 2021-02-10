
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>technoteam</title>
</head>
<?php

   ?> 
<div class="container">
    <h2>Añadir noticia</h2><!-- comment -->

    <form method="POST" enctype="multipart/form-data">
       email: <br> <input type="text" name="email"><br><br>
        contraseña: <input type="password" name="password">
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
        <input type="submit" value="Borrar" name="borrar" />
    </form>
</div>
