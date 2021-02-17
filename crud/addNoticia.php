<?php
require_once 'controller/NoticiaController.php';
 include("includes/head-tag-contents.php");
?>

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
if (isset($_POST['añadir'])) {
    $fecha = date('Y-m-d');
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
        $fich_unic = time() . "-" . $_FILES['foto']['name'];
        $ruta = "img/fotos/" . $fich_unic;
        move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
        $noticia = new Noticia("", $_POST['idUsuario'], $fecha, $_POST['titulo'], $_POST['desc'], $_POST['contenido'], $ruta);
        NoticiaController::insertarNoticia($noticia);
    } else {
        echo "NO SE HA SUBIDO";
    }
    //header("Location:index.php");

}
if (isset($_POST['borrar'])) {
    echo $_POST['idNoticia'];
    NoticiaController::borrarNoticia($_POST['idNoticia']);
}
?>

<body class="bodyLogin">
    <?php include("includes/navigation.php"); ?>
    <div class="container">
        <h2>Añadir noticia</h2><!-- comment -->

        <form method="POST" enctype="multipart/form-data">
            idNoticia:<br> <input type="number" name="idNoticia"><br><br>
            idUsuario:<br> <input type="number" name="idUsuario"><br><br>

            Titulo noticia:<br> <input type="text" name="titulo"><br><br>
            Descripcion: <br><textarea name="desc" rows="2" cols="15"></textarea><br><br>
            Contenido: <br><textarea name="contenido" rows="2" cols="15"></textarea><br><br>
            Imagen: <input type="file" name="foto"><br><br>
            <input type="submit" name="añadir" value="Añadir">
            <input type="submit" value="Borrar" name="borrar" />
        </form>
    </div>
</body>