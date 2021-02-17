<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <?php include("includes/subNavigationDeportes.php"); ?>

    <?php
    //PARA PÁGINA PRINCIPAL RECUPERAMOS 4 NOTICIAS DE MANERA ALEATORIA
    $noticia1 = NoticiaController::recuperarNoticiaApartadoDeportesMasReciente();
    foreach ($noticia1 as $value) {
    ?>
        <main>
            <section class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <h1><?php echo $value->titulo; ?></h1>
                            <div class="card img-fluid">
                                <a href="noticia.php?id=<?php echo $value->id; ?>">
                                    <img class="card-img-top img-fluid" src="<?php echo $value->imagen ?>" alt="Card image">
                                    <div class="card-img-overlay d-flex align-items-end">
                                        <p class="card-text font-weight-bold txtTop"> <?php echo $value->descripcion ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php
                }
                    ?>

                    <!--ÚLTIMA NOTICIAS QUE APARECEN A LA IZQUIERDA EN PANTALLAS GRANDES Y DESAPARECE EN PANTALLAS DE MÓVIL-->
                    <div class="col-lg-4 col-md-12 d-sm-none d-none d-md-block">
                        <h1>Últimas noticias</h1>
                        <?php
                        //PARA PÁGINA PRINCIPAL RECUPERAMOS 4 NOTICIAS DE MANERA ALEATORIA
                        $noticia1 = NoticiaController::recuperarNoticiaApartadoDeportesDerecha();
                        foreach ($noticia1 as $value) {
                        ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="noticia.php?id=<?php echo $value->id; ?>" class="linkNoticia">
                                        <div class="card bg-light cardApartadoDerecha">
                                            <div class="card-body text-center">
                                                <p class="card-text titNoticiaUltNoticias"><?php echo $value->titulo; ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>

                    <!--FIN DE ÚLTIMAS NOTICIAS EN PANTALLAS GRANDES 
    CARRUSEL DE NOTICIAS PARA PANTALLAS MÓVIL
    -->
                    <div class="col-sm-12 d-sm-block d-block d-md-none ">
                        <h1>Últimas noticias</h1>
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <!-- <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>-->
                            <div class="carousel-inner">
                                <?php
                                //PARA PÁGINA PRINCIPAL RECUPERAMOS 4 NOTICIAS DE MANERA ALEATORIA
                                $noticia1 = NoticiaController::recuperarNoticiaApartadoDeportesDerechaUnasolo();
                                foreach ($noticia1 as $value) {
                                ?>
                                    <div class="carousel-item active">
                                        <a href="noticia.php?id=<?php echo $value->id; ?>">
                                            <img class="img-fluid" src="<?php echo $value->imagen; ?>" alt="baloncesto femenino" width="70%" height="200">
                                            <div class="carousel-caption txtTop txtCarrousel">
                                                <h3><?php echo $value->titulo; ?></h3>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                                }
                                ?>

                                <?php
                                //PARA PÁGINA PRINCIPAL RECUPERAMOS 4 NOTICIAS DE MANERA ALEATORIA
                                $noticia1 = NoticiaController::recuperarNoticiaApartadoDeportesDerecha();
                                foreach ($noticia1 as $value) {
                                ?>
                                    <div class="carousel-item">
                                        <a href="noticia.php?id=<?php echo $value->id; ?>">
                                            <img src="<?php echo $value->imagen; ?>" class="img-fluid" alt="" width="70%" height="200">
                                            <div class="carousel-caption txtTop txtCarrousel">
                                                <h3><?php echo $value->titulo; ?></h3>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                                }
                                ?>

                                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                    <button type="button" class="btn-primary btn-circleCarrusel" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></button>
                                </a>
                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                    <button type="button" class="btn-primary btn-circleCarrusel" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></button>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- /.carousel -->


                    <?php
                    $noticiasUltimas = NoticiaController::recuperarNoticiasUltimasNoticiasDeportes();
                    foreach ($noticiasUltimas as $values) {
                    ?>
                        
                            <!--TARJETAS DE NOTICIAS -->
                            <div class="card cardArticulo tarjetaNoticiaApartado">
                                <a href="noticia.php?id=<?php echo $value->id; ?>" class="enlaceNoticia">
                                    <div class="row no-gutters">
                                        <div class="col-md-12 col-lg-4">
                                            <img src="<?php echo $values->imagen; ?>" class="card-img imgApartadoNoticias" alt="Imagen">
                                        </div>
                                        <div class="col-md-12 col-lg-8">
                                            <div class="card-body">
                                                <h3 class="card-title indexNoticiaTitulo"><?php echo $values->titulo; ?></h3>
                                                <p class="card-text indexNoticiaTimer"><small class="text-muted"><?php echo $values->fecha; ?></small></p>
                                                <p class="card-text indexNoticiaTexto"><?php echo $values->descripcion; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            
                        <?php
                    }
                        ?>
                    </div>
            </section>
        </main>

        <?php include("includes/footer.php"); ?>

</body>

</html>