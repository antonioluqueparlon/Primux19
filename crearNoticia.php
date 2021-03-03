<?php include("includes/a_config.php"); ?>
<?php require("crud/Controller/UsuarioController.php"); ?>
<!DOCTYPE html>
<?php
require_once 'crud/Controller/NoticiaController.php';

?>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insertar noticia</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link href="https://cdn.quilljs.com/1.2.6/quill.snow.css" rel="stylesheet">
  <link rel="stylesheet" href="css\crearNoticia.css">
  <script src="https://cdn.quilljs.com/1.2.6/quill.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <?php
  $usuario = UsuarioController::obtenerUsuarioMail($_SESSION['user_email_address']);
  if (isset($_POST['añadir'])) {
    $fecha = date('Y-m-d');
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
      $fich_unic = time() . "-" . $_FILES['foto']['name'];
      $ruta = "img/" . $fich_unic;
      move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
      $noticia = new Noticia("", $usuario->id, $fecha,$_POST['apartado'],$_POST['seccion'], $_POST['titulo'], $_POST['desc'], $_POST['contenido'], $ruta);
      NoticiaController::insertarNoticia($noticia);
    } else {
      echo "NO SE HA SUBIDO";
    }
    header("Location:noticiasUsuario.php");

  }
   include("includes/navigation.php");
  
  
  include("includes/head-tag-contents.php"); ?>
</head>

<body class="bodyNoticia">

  <div id="form-container " class="container">
    <h2>Cree su noticia</h2>
    <form method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-8">
          <div class="form-group">
            <label for="foto" id="foto"><strong>Seleccione imagen portada:</strong></label>
            <br><input type="file" name="foto" id="foto">>
          </div>
        </div>
      </div>
      <div class="row">

        <div class="col-md-6">
          <div class="form-group">
            <label for="apartado" id="apartado"><strong>Apartado:</strong> </label>
            <br><input type="text" name="apartado" id="apartado">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="seccion" id="seccion"><strong>Sección:</strong></label>
            <br><input type="text" name="seccion" id="seccion">
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="titulo" id="titulo"><strong>Titular noticia</strong></label>
            <input class="form-control" name="titulo" type="text" id="titulo">
          </div>

          <div class="form-group">
            <label for="desc" id="desc"><strong>Descripcion</strong></label>
            
            <input class="form-control" name="desc" id="desc" type="text">
          </div>
        </div>
      </div>
      <div class=" form-group">
        <label for="editor-container" ><strong>Contenido</strong></label>
        <textarea  id="editor-container" name="contenido"></textarea>
      </div>
      <div class="row">
        <input class="btn btn-primary" type="submit" value="Añadir noticia" name="añadir">
      </div>
    </form>

  </div>
  <script>
    var quill = new Quill('#editor-container', {
      modules: {
        toolbar: [ 
        ]
      },
      placeholder: 'Escriba el cuerpo de su noticia',
      theme: 'snow'
    });
    CKEDITOR.replace('editor-container');
  </script>

</body>


</html>