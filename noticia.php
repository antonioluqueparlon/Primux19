<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>

    <main>
        <?php

        $noticia = NoticiaController::buscarNoticia($_GET['id']);
        $usuario= NoticiaController::buscarUsuarioEnNoticia($noticia->id, $noticia->idUsuario);

        ?>
        <section class="noticia">
            <div class="row ">
                <div class="col-12">
                    <h1 class="titNoticia "><?php echo $noticia->titulo; ?></h1>
                </div>
                <div class="col-12">
                    <img src="<?php echo $noticia->imagen; ?>" alt="imgNoticia" class="imgNoticia img-fluid">
                    <p><small class="text-muted"><?php echo $usuario.' '.$noticia->fecha ?></small></p>
                    <!--IMAGEN ANCHO DE 1150 ancho y 900 largo -->
                </div>
                <div class="row cuerpoNoticia">
                    <div class="col-12">
                        <p>

                            <?php
                            echo $noticia->contenido;
                            ?>
                            <br>
                        </p>
                    </div>
                </div>

                <!-- TARJETAS CON NOTICIAS APILADOS DE 2 EN 2-->
                <div class="col-12">
                    <h2 class="titNoticia">Otras noticias</h2>
                </div>
                <?php
                $noticiaOtras = NoticiaController::recuperarTodasNoticiasOtras();
                foreach ($noticiaOtras as $values) {
                ?>
                    <div class="col-sm-6">
                        <a href="noticia.php?id=<?php echo $values->id; ?>" class="linkNoticia">
                            <div class="card divOtrasNoticias">
                                <div class="row no-gutters">
                                    <div class="col-md-4 col-sm-12">
                                        <img src="<?php echo $values->imagen; ?>" class="img-fluid card-img fotoOtras" alt="">
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="card-block px-2">
                                            <h4 class="card-title titNoticia"><?php echo $values->titulo; ?></h4>
                                            <p class="card-text"><?php echo $values->descripcion; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>


                <h2 class="titNoticia">Últimas noticias</h2>
                <div class="row">
                    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">


                        <!-- CARROUSEL -->

                        <!--Controles-->
                        <div class="text-center mb-10 ">
                            <button type="button" class="btn-primary btn-circleCarrusel" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></button>
                            <button type="button" class="btn-primary btn-circleCarrusel" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></button>
                        </div>



                        <!--Slides-->

                        <div class="carousel-inner" role="listbox">

                            <!--First slide-->
                            <div class="carousel-item active">
                                <?php
                                $noticiaUltimas = NoticiaController::recuperarTodasNoticiasUltimas1();
                                foreach ($noticiaUltimas as $values) {
                                ?>

                                    <div class="col-md-3 " style="float:left">
                                        <div class="card mb-2 tarjetaUltimasNOticias">
                                            <img class="card-img-top fotoArriba" src="<?php echo $values->imagen; ?>" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title"><?php echo $values->titulo; ?></h4>
                                                <p class="card-text"><?php echo $values->descripcion; ?></p>
                                                <a href="noticia.php?id=<?php echo $values->id; ?>" class="btn btn-primary ">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                }
                                ?>

                            </div>


                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item">
                                <?php
                                $noticiaUltimas2 = NoticiaController::recuperarTodasNoticiasUltimas1();
                                foreach ($noticiaUltimas2 as $values) {
                                ?>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2 tarjetaUltimasNOticias">
                                            <img class="card-img-top" src="<?php echo $values->imagen; ?>" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title"><?php echo $values->titulo; ?></h4>
                                                <p class="card-text"><?php echo $values->descripcion; ?></p>
                                                <a href="noticia.php?id=<?php echo $values->id; ?>" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                }
                                ?>

                            </div>
                            <!--/.Second slide-->

                        </div>
                        <!--/.Slides-->
                    </div>
                </div>

            </div>

            <!--//comentarios-->
            <div class="container">
        <div class="col-md-6 pane">
            <div class="col-md-4">
                <div class="alert alert-light">
                    <h4>Comentarios</h4>
                </div>
            </div>
            <div id="result">
            </div>
            <div class="col-md-8">
                <form>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input class="form-control" type="text" id="name">
                    </div>
                    <div class="form-group">
                        <form>
                            <p class="clasificacion">
                                <input id="radio1" type="radio" name="estrellas" value="5">
                                <label for="radio1">★</label>
                                <input id="radio2" type="radio" name="estrellas" value="4">
                                <label for="radio2">★</label>
                                <input id="radio3" type="radio" name="estrellas" value="3">
                                <label for="radio3">★</label>
                                <input id="radio4" type="radio" name="estrellas" value="2">
                                <label for="radio4">★</label>
                                <input id="radio5" type="radio" name="estrellas" value="1">
                                <label for="radio5">★</label>
                            </p>
                        </form>
                    </div>
                    <div class="form-group">
                        <label>Comentario</label>
                        <textarea id="comment" class="form-control"></textarea></label>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="commentBox();">Enviar</button>
                </form>
            </div>

        </section>
    </main>
    <?php include("includes/footer.php"); ?>
</body>

</html>