<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>
<script>

</script>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <?php include("includes/subNavigationVideojuegos.php"); ?>


    <main>
        <section class="ultimasNoticias claseSeccion">

        <?php
        
        $noticia=Noticia::buscarPorTitulo($titulo);
        
        foreach($noticia as $values){
            ?>
        <a href="#<?php echo $numero++;?>" class="enlaceCiudades">
            <p class=" enlaceCiudades card-title titulosPrincipal mt-2" id="descripciones">
                <?php echo $values->titulo;?></p>
        </a>

        <hr>
        <?php
            }
        ?>
        

    </main>



</body>

<?php include("includes/footer.php"); ?>

</html>