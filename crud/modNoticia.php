<?php
require_once 'Controller/NoticiaController.php';
$noticia = NoticiaController::buscarNoticia(11);


if (isset($_POST['edit'])) {
    $fecha = date('Y-m-d');
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
        $fich_unic = time() . "-" . $_FILES['foto']['name'];
        $ruta = "img/fotos/" . $fich_unic;
        move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
    } else {
        $ruta = $noticia->imagen;
    }
    $not = new Noticia($_POST['id'],$_POST['idUsuario'], $fecha, $_POST['titulo'], $_POST['descripcion'], $_POST['contenido'], $ruta);
    //JuegoControlador::insertarJuego($juego);
    NoticiaController::actualizarNoticia($not);
    header("Location:index.php");
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>MOD NOTICIA</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>EDITAR NOTICIA</h2>
                
            </div>
        </div>
        <div class="row">
            <form enctype="multipart/form-data" method="POST">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12">
                            Fecha:<br> <input type="text" name="anno" disabled value="<?php echo $noticia->fecha; ?>"><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Titulo:<br> <input type="text" name="titulo" value="<?php echo $noticia->titulo; ?>"><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Descripcion:<br> <input type="text" name="descripcion" value="<?php echo $noticia->descripcion; ?>"><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Contenido:<br> <input type="text" name="contenido" value="<?php echo $noticia->contenido; ?>"><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Imagen: <input type="file" name="foto"><br><br>                      
                        </div>
                    </div>
                    <input type="submit" class="btn btn-warning" name="edit" value="Editar">
                    <input type="hidden" name="id" value="<?php echo $noticia->id; ?>">
                    <input type="hidden" name="idUsuario" value="<?php echo $noticia->idUsuario; ?>">
                </div>
            </form>
            <div class="col-md-5">
                <img src="<?php echo $noticia->imagen; ?>" width="100%" height="500px" alt="alt"/>
            </div>

        </div>
    </div>
</body>




