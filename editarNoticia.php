<?php
include("includes/a_config.php");
require_once 'crud/Controller/NoticiaController.php';
if (isset($_POST['editar'])){
  $noticia = NoticiaController::buscarNoticia($_POST['idNoticia']);
  if (isset($_POST['añadir'])) {

    $fecha = date('Y-m-d');
    if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
      $fich_unic = time() . "-" . $_FILES['foto']['name'];
      $ruta = "img/" . $fich_unic;
      move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
    } else {
      $ruta = $noticia->imagen;
    }
    $noticia = new Noticia($_POST['id'], $_POST['idUsuario'], $fecha, $_POST['apartado'], $_POST['seccion'], $_POST['titulo'], $_POST['desc'], $_POST['contenido'], $ruta);
    NoticiaController::actualizarNoticia($noticia, $_POST['id']);
    header("Location:index.php");
  }
  

?>
<title>EDITAR noticia</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link href="https://cdn.quilljs.com/1.2.6/quill.snow.css" rel="stylesheet">
<link rel="stylesheet" href="/css/crearNoticia.css">
<script src="https://cdn.quilljs.com/1.2.6/quill.min.js"></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<?php include("includes/head-tag-contents.php"); ?>
</head>

<body class="bodyNoticia">

  <?php include("includes/navigation.php"); ?>
  

  <div id="form-container " class="container">
    <h2>Modifique su noticia</h2>
    <?php 
    echo $_POST['editar'];?>
    <form method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <img src="<?php echo $noticia->imagen; ?>" class="imgNoticiaIncluida" />
          <div class="alert alert-dark
           alertaImagen">Imagen en portada</div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <strong>Cambie imagen portada:</strong>  <br><input type="file" name="foto">
        </div>
        <div class="col-md-4">
        <strong></strong>Fecha:<br> <input type="text" name="anno" disabled value="<?php echo $noticia->fecha; ?>"><br><br>
        </div>
      </div>
      <div class="row">
       
        <div class="col-md-6">
          <strong>Apartado:</strong>  <br><input type="text" name="apartado" value="<?php echo $noticia->apartado?>">
        </div>
        <div class="col-md-6">
          <strong>Sección:</strong>  <br><input type="text" name="seccion" value="<?php echo $noticia->seccion?>">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="display_name"><strong>Titular noticia</strong></label>
            <input class="form-control" name="titulo" type="text" value="<?php echo $noticia->titulo; ?>">
          </div>

          <div class="form-group">
            <label for="location"><strong>Descripcion</strong></label>
            <input class="form-control" value="<?php echo $noticia->descripcion; ?>" name="desc" type="text">
          </div>
        </div>
      </div>
      <div class=" form-group">
        <label for="contenido"><strong>Contenido</strong></label>
        <textarea name="contenido" id="editor-container"><?php echo $noticia->contenido; ?></textarea>
      </div>
      <div class="row">
        <input class="btn btn-primary" type="submit" value="Editar noticia" name="añadir">
        <input type="hidden" name="id" value="<?php echo $noticia->id; ?>">
        <input type="hidden" name="idUsuario" value="<?php echo $noticia->idUsuario; ?>">
      </div>
    </form>

  </div>





  <script>
    var quill = new Quill('#editor', {
      theme: 'snow'
    });
    CKEDITOR.replace('editor-container');
  </script>



</body>

</html>
<?php } ?>