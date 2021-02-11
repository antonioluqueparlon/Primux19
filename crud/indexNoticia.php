<!DOCTYPE html>
<?php
require_once 'controller/NoticiaController.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
 
        
  <?php
  /*
  $noticia = NoticiaController::buscarNoticia(1);
  echo $noticia->titulo . "<br>";
  echo $noticia->descripcion;
  ?>
        ============================<br><!-- comment -->
    <?PHP
    echo "TODOAS LAS NOTICIAS <br>";
    $noticias = NoticiaController::recuperarTodasNoticias();
    foreach ($noticias as $not){
        echo $not->id . " ". $not->titulo . " " . $not->descripcion . "<br>";
    }
   echo " ============================<br>
            ============================<br>";
    echo "NOTICIAS PALABRA CLAVE <br>";
    $nots = NoticiaController::recuperarNoticiaContienePalabraClave("xbox");
    foreach ($nots as $valor){
        echo $valor->id . " ". $valor->titulo . " " . $valor->descripcion . " " . $valor->contenido. "<br>";
    }
     echo " ============================<br>
            ============================<br>";
     echo "NOTICIAS USUARIO ESPECÍFICO <br>";
    $noticiasUsuario = NoticiaController::recuperarNoticiaUsuario(3);
    foreach ($noticiasUsuario as $valor){
        echo $valor->id . " ". $valor->idUsuario . " ". $valor->titulo . " " . $valor->descripcion . " " . $valor->contenido. "<br>";
    }
     */



    ?>
    </body>
</html>
