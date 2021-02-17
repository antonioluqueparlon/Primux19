<!DOCTYPE html>
<?php
require_once 'crud/Controller/NoticiaController.php';
$noticia = NoticiaController::buscarNoticia(12);
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
  <link rel="stylesheet" href="/css/crearNoticia.css">
 <script src="https://cdn.quilljs.com/1.2.6/quill.min.js"></script>
 <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
</head>
<body>
<?php
if (isset($_POST['añadir'])){
     $fecha = date('Y-m-d');
        if (is_uploaded_file($_FILES['foto']['tmp_name'])){       
            $fich_unic=time() ."-". $_FILES['foto']['name'];
            $ruta = "img/".$fich_unic;
             move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
            // echo $_POST['titulo'] . " - " . $_POST['desc'] . " - " . $_POST['contenido']. $ruta ;
           
            $noticia = new Noticia("",8, $fecha, $_POST['titulo'], $_POST['desc'], $_POST['contenido'], $ruta);
            NoticiaController::actualizarNoticia($noticia);
        }else{
            echo "NO SE HA SUBIDO";
        }
        //header("Location:index.php");

    }
  ?>
<div id="form-container" class="container">
  <h2>Añadir noticia</h2>
  <div class="col-md-5">
                <img src="<?php echo $noticia->imagen; ?>" width="300px"  alt="alt"/>
      </div>
  <form method="POST" enctype="multipart/form-data">
    <div>
    
      <div class="col-xs-4">
        Imagen portada: <input type="file" name="foto">
      </div>
      <div class="col-md-12">
          Fecha:<br> <input type="text" name="anno" disabled value="<?php echo $noticia->fecha; ?>"><br><br>
      </div>
      <div class="col-xs-8">
        <div class="form-group">
          <label for="display_name">Titular noticia</label>
          <input class="form-control" name="titulo" type="text" value="<?php echo $noticia->titulo;?>">
        </div>
        <div class="form-group">
          <label for="location">Descripcion</label>
          <input class="form-control" value="<?php echo $noticia->descripcion;?>" name="desc" type="text" >
        </div>
      </div>
    </div>
    <div class=" form-group">
      <label for="contenido">Contenido</label>
      <textarea name="contenido" id="editor-container">
      <?php echo $noticia->contenido;?>
      </textarea>
    </div>
    <div class="row">
      <input class="btn btn-primary" type="submit" value="Insertar noticia" name="añadir">
    </div>
  </form>
</div>

<script>
var quill = new Quill('#editor-container', {
  modules: {
    toolbar: [
      ['bold', 'italic'],
      ['link', 'blockquote', 'code-block', 'image'],
      [{ list: 'ordered' }, { list: 'bullet' }]
    ]
  },
  placeholder: 'Escriba el cuerpo de su noticia',
  theme: 'snow'
});
CKEDITOR.replace('editor-container');




</script>

</body>
</html>