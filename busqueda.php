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
            //DESDE navigation.php A TRAVÉS DE FORMULARIO ENVIAMOS PALABRA CLAVE QUE VAMOS A BUSCAR
            if (isset($_POST['buscar'])) {
                //echo $_POST['busqueda'];
            ?>
                <h1>Resultados de la busqueda:"<?php echo $_POST['busqueda'] ?>" </h1>
                <?php
                $noticia = NoticiaController::recuperarNoticiaContienePalabraClave($_POST['busqueda']);
                //SI NO SE RECUPERA NINGUNA NOTICIA MOSTRAMOS ALERT
                if (empty($noticia)) { ?>
                <div class="alert alert-warning">
                    No hay ninguna noticia relacionada con su búsqueda
                </div>
           <?php     } else {

                //SI SE RECUPERA ALGUNA NOTICIA CON LA PALABRA BUSCADA LA MOSTRAMOS EN PANTALLA
                    foreach ($noticia as $values) {
                ?>
                        <div class="card cardArticulo">
                            <a href="<?php echo $values->enlace; ?>" class="enlaceNoticia">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="<?php echo $values->imagen; ?>" class="card-img" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4 class="card-title indexNoticiaTitulo"><?php echo $values->titulo; ?></h4>
                                            <p class="card-text indexNoticiaTexto">Ultima actualización: <?php echo $values->fecha; ?></small></p>
                                            <p class="card-text indexNoticiaTexto"><?php echo $values->descripcion; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
            <?php }
                }
            }
            ?>
        </section>
    </main>
</body>

<?php include("includes/footer.php"); ?>

</html>