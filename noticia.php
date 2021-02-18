<?php include("includes/a_config.php");
require_once 'crud/Controller/NoticiaController.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <?php
    if (isset($_POST['eliminar'])) {
        NoticiaController::borrarNoticia($_POST['idNoticia']);
        header("Location:index.php");
    }
    include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>

    <main>
        <?php

        $noticia = NoticiaController::buscarNoticia($_GET['id']);
        $usuario = NoticiaController::buscarUsuarioEnNoticia($noticia->id, $noticia->idUsuario);

        ?>
        <section class="noticia">
            <div class="row ">
                <div class="col-12">
                    <h1 class="titNoticia "><?php echo $noticia->titulo; ?></h1>
                </div>
                <div class="col-12">
                    <img src="<?php echo $noticia->imagen; ?>" alt="imgNoticia" class="imgNoticia img-fluid">
                    <p><small class="text-muted"><?php echo $usuario . ' ' . $noticia->fecha ?></small></p>
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
                <?php if (isset($_SESSION['rol'])) {
                    if ($_SESSION['rol'] == "editor" | $_SESSION['rol'] == "administrador") {
                ?>
                        <form action="editarNoticia.php" method="POST">
                            <input type="hidden" name="idNoticia" value="<?php echo $noticia->id; ?>">
                            <input type="submit" class="btn" value="Editar" name="editar">
                        </form>
                        <form method="post">
                            <input type="hidden" name="idNoticia" value="<?php echo $noticia->id; ?>">
                            <input type="submit" class="btn-danger" value="Eliminar" name="eliminar">
                        </form>
                <?php }
                }
                ?>


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
            <div class="col-12 ">
                <form action="">
                    <div class="form-group">
                        <label class="titNoticia" for="textArea">Comentarios</label>
                        <textarea id="my-textarea" class="form-control" name="comentario" rows="3"></textarea>
                        <button type="submit" class="btn btn-secondary mt-1  ">Comentar</button>
                    </div>
                </form>
            </div>
            <div class="col">
                <div class="row no-gutters">
                    <div class="col-1 ">
                        <img class="mx-auto d-block img-fluid " src="http://lorempixel.com/output/people-q-c-48-48-9.jpg" alt="fotoPerf">
                    </div>
                    <div class="col-11 ">
                        <div class="row no-gutters">
                            <div class="col-12 "><small class="titNoticia">Nombre</small>
                            </div>
                            <div class="col-12 ">Comentario
                            </div>
                            <div class="col-12">
                                <small class="respComentarios">Me gusta</small>
                                <small class="respComentarios">Responder</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php"); ?>
</body>

</html>