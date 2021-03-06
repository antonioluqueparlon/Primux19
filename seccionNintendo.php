<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="es" >
<script>

</script>

<head>
    <?php include("includes/head-tag-contents.php"); 
    ?>
</head>

<body>

    <!--<?php //include("includes/design-top.php"); 
        ?>-->
    <?php include("includes/navigation.php"); ?>
    <?php include("includes/subNavigationVideojuegos.php"); ?>


    <main>
        <section class="ultimasNoticias claseSeccion">

            <h1>NINTENDO </h1>

            <?php
            //PARA PÁGINA PRINCIPAL RECUPERAMOS 4 NOTICIAS DE MANERA ALEATORIA
            $noticia = NoticiaController::recuperarNoticiaSeccionNintendo();
            if(empty($noticia)){
                ?> <div class="alert alert-dark
                ">No ha creado ninguna noticia </div> <?php
            }else{
            foreach ($noticia as $values) {
                //echo $values->enlace;
            ?>

                <div class="card cardArticulo">
                    <a href="noticia.php?id=<?php echo $values->id;?>" class="enlaceNoticia">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?php echo $values->imagen; ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title indexNoticiaTitulo"><?php echo $values->titulo; ?></h4>
                                    <p class="card-text indexNoticiaTimer"><small class="indexNoticiaTitulo"><?php echo $values->fecha; ?></small></p>
                                    <p class="card-text indexNoticiaTexto"><?php echo $values->descripcion; ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>

        </section>

    </main>

    <?php include("includes/footer.php"); }?>

</body>

</html>