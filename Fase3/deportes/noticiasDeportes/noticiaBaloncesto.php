<?php include("../includes/a_config.php");?>
<!DOCTYPE html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php");?>
</head>

<body>

    <?php include("../includes/navigation.php");?>

    <main>
        <section class="noticia">
            <div class="row ">
                <div class="col-12">
                    <h1 class="titNoticia ">La UCO prepara un equipo de baloncesto femenino</h1>
                </div>
                <div class="col-12">
                    <img src="../../img/imgDeportes/basketFemenino.jpg" alt="imgNoticia"
                        class="imgNoticia img-fluid">
                    <p><small class="text-muted">Jesús Cano Ruiz 20/01/21</small></p>
                    <!--IMAGEN ANCHO DE 1150 ancho y 900 largo -->
                </div>
                <div class="row cuerpoNoticia">
                    <div class="col-12">
                        <p>
                        La UCO prepara la próxima temporada la aparición de un equipo de baloncesto femenino amateur, que estaría formado por jugadoras pertenecientes a la Universidad de Córdoba. El equipo comenzaría en la Primera Provincial y tiene el objetivo de dar el salto a la Regional Preferente en el primer año de competición.<br><br>
                         Así, la Universidad cubriría el vacío que tenía en un deporte mayoritario como el baloncesto, una vez que tiene en categorías nacionales equipos de baloncesto masculino y también de fútbol sala.
                        <br>Hasta la fecha, el proyecto está en su fase de inicio y ya se ha contactado con el actual técnico del Barcelona, y experto en subir equipos de categorías para que sea el futuro entrenador de la UCO. La Universidad aprovecharía también la pista de baloncesto de Rabanales para que fuese la sede.<br><br>
                            <br>
                        </p>
                    </div>
                </div>
                <!-- TARJETAS CON NOTICIAS APILADOS DE 2 EN 2-->
                <div class="col-12">
                    <h2 class="titNoticia">Otras noticias</h2>
                </div>
                <div class="col-sm-6">
                    <a href="noticiaCiclismo.php" class="linkNoticia">
                        <div class="card divOtrasNoticias">
                            <div class="row no-gutters">
                                <div class="col-md-4 col-sm-12">
                                    <img src="../../img/imgDeportes/ciclismo1.jpg" class="img-fluid card-img" alt="">
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="card-block px-2">
                                        <h4 class="card-title titNoticia">Vuelta ciclista a Andalucía</h4>
                                        <p class="card-text">Recorrerá Andalucía del día 17 al 21 de Febrero</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="../../noticiasVideojuegos/parlon/noticiaSwitch.php" class="linkNoticia">
                        <div class="card divOtrasNoticias ">
                            <div class="row no-gutters">
                                <div class="col-md-4 col-sm-12">
                                    <img src="../../noticiasVideojuegos/parlon/img/switch.jpg" class="img-fluid card-img" alt="">
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="card-block px-2">
                                        <h4 class="card-title titNoticia">Venta récord de Nintendo Switch</h4>
                                        <p class="card-text ">Se marca una cifra récord de ventas de Nintendo Switch en Japón</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="noticia.php" class="linkNoticia">
                        <div class="card divOtrasNoticias">
                            <div class="row no-gutters">
                                <div class="col-md-4 col-sm-12">
                                    <img src="http://placeimg.com/280/158/tech" class="img-fluid card-img" alt="">
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="card-block px-2">
                                        <h4 class="card-title titNoticia">Title</h4>
                                        <p class="card-text">Description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="noticia.php" class="linkNoticia">
                        <div class="card divOtrasNoticias ">
                            <div class="row no-gutters">
                                <div class="col-md-4 col-sm-12">
                                    <img src="http://placeimg.com/280/158/animals" class="img-fluid card-img" alt="">
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="card-block px-2">
                                        <h4 class="card-title titNoticia">Title</h4>
                                        <p class="card-text ">Description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <h2 class="titNoticia">Últimas noticias</h2>
                <div class="row">
                    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                        <!-- CARROUSEL -->

                        <!--Controles-->
                        <div class="text-center mb-10 ">
                            <button type="button" class="btn-primary btn-circleCarrusel" href="#multi-item-example"
                                data-slide="prev"><i class="fas fa-chevron-left"></i></button>
                            <button type="button" class="btn-primary btn-circleCarrusel" href="#multi-item-example"
                                data-slide="next"><i class="fas fa-chevron-right"></i></button>
                        </div>

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">

                            <!--First slide-->
                            <div class="carousel-item active">

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top imgUltimasNoticias"
                                            src="../../img/imgDeportes/howard.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Howard ficha por 69ers</h4>
                                            <p class="card-text">Howard explica los detalles de su renovación fallida con los Ángeles Lakers</p>
                                            <a href="noticiaBaloncestoHoward.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2 ">
                                        <img class="card-img-top imgUltimasNoticias"
                                            src="../../noticiasVideojuegos/parlon/img/peores.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Los 10 peores juegos de la última década</h4>
                                            <p class="card-text">Desde TechnoTeam hemos seleccionado los 10 juegos fallidos de la década.</p>
                                            <a href="../../noticiasVideojuegos/parlon/noticiaPeoresJuegos.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top imgUltimasNoticias"
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the
                                                card's content.</p>
                                            <a href="noticia.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top imgUltimasNoticias"
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the
                                                card's content.</p>
                                            <a href="noticia.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item">

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top imgUltimasNoticias"
                                            src="../../noticiasVideojuegos/parlon/img/grefg.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">The Grefg bate récords</h4>
                                            <p class="card-text">La pasada noche el youtuber batió todos los récords de visualizaciones en TWITCH</p>
                                            <a href="../../noticiasVideojuegos/parlon/noticiaTheGrefg.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top imgUltimasNoticias"
                                            src="../../img/imgDeportes/futbolBase.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Paralizado el fútbol amateur</h4>
                                            <p class="card-text">RFAF paraliza toda la competición de fútbol base debido a las restricciones</p>
                                            <a href="noticiaFutbolAmateur.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top imgUltimasNoticias"
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the
                                                card's content.</p>
                                            <a href="noticia.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top imgUltimasNoticias"
                                            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the
                                                card's content.</p>
                                            <a href="noticia.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

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
                        <img class="mx-auto d-block img-fluid "
                            src="http://lorempixel.com/output/people-q-c-48-48-9.jpg" alt="fotoPerf">
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
    <?php include("../includes/footer.php");?>
</body>

</html>