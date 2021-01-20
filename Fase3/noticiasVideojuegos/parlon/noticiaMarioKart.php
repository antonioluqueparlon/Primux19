<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
    <script src="scriptReproductor.js"></script>
</head>

<body>

    <?php include("../includes/navigation.php"); ?>

    <main>
        <section class="noticia">
            <div class="row ">
                <div class="col-12">
                    <h1 class="titNoticia ">Una bici estática y el anillo de Ring Fit es todo lo que necesita este jugador para competir en Mario Kart 8</h1>
                </div>
                <div class="col-12 imgNoticia">
                    <img src="img/mariokart.jpg" alt="imgNoticia" class="imgNoticia img-fluid">
                    <div class="card-img-overlay d-flex align-items-end">
                        <p class="card-text font-weight-bold txtTop">Si quieres competir contra Mario y compañía, tendrás que pedalear más fuerte que nadie.</p>
                    </div>


                    <br>
                    <!--IMAGEN ANCHO DE 1150 ancho y 900 largo -->

                </div>
                <div class="row cuerpoNoticia">
                    <div class="col-12">
                        <p><small class="text-muted">Antonio Luque 02/12/20</small></p>

                        Ring Fit Adventure ha sido uno de los productos más solicitados de 2020 ante los confinamientos,
                        una manera de hacer deporte desde casa por medio de juegos y actividades físicas. Pero hay quienes necesitan una
                        motivación adicional, algo que les empuje de verdad a ponerse en forma. Y, en el caso de este jugador,
                        eso es Mario Kart 8 Deluxe. Armado con los mandos de su Nintendo Switch, un anillo de Ring Fit Adventure, y muchos cartones,
                        el usuario Mike Choi convierte su bicicleta estática en un "Bike-Con" para conducir de la manera más agotadora posible.

                        <br><br>

                        En esencia, la creación de este usuario convierte los pedales de la bicicleta en el botón de acelerar del mando,
                        de manera que cuanto más rápido pedalea, más acelera su kart en el juego.
                        Esto se consigue por medio de unos sensores colocados en la propia bicicleta,
                        y de un chip con un receptor inalámbrico que va unido al Joy-Con del jugador,
                        y que acciona unas piezas mecánicas con mayor o menor fuerza según la velocidad a la que pedalee el jugador,
                        para así pulsar los botones del mando.

                        <br><br>


                        <!-- VIDEO -->

                        <div id="video-container">
                            <video id="video" width="1040" height="365">
                                <source src="../videos/mariokart.webm" type="video/webm">
                                <source src="../videos/mariokart.ogv" type="video/ogv">
                                <source src="../videos/mariokart.mp4" type="video/mp4">
                                <p>
                                    Your browser doesn't support HTML5 video.
                                    <a href="../videos/mariokart.mp4">Download</a> the video instead.
                                </p>
                            </video>
                            <div id="video-controls">
                                <button type="button" id="play-pause">Reproducir</button>
                                <input type="range" id="seek-bar" value="0">
                                <button type="button" id="mute">Silenciar</button>
                                <label id="colorBlanco"> Nivel Volumen </label><input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
                                <button type="button" id="full-screen">Pantalla Completa</button></button>
                            </div>
                        </div>

                        <br><br>

                        Esta pieza se encaja en el Ring-Con de Ring Fit Adventure, y sin necesidad de pulsar ningún botón,
                        el ciclista de turno puede emplear el anillo para controlar la dirección del kart, y apretarlo con fuerza
                        para lanzar objetos o soltarlos por detrás ¿El resultado? Como podéis ver en el vídeo, esta locura de "Bike-Con"
                        al estilo de Nintendo Labo es completamente funcional… Y completamente agotadora. Ya no es el hecho de tener que pedalear
                        rápido para poder competir,
                        sino que el jugador tenga que ganar velocidad antes de que empiece la carrera tan solo para no quedarse clavado en la salida.

                        <br><br>

                        Y, bueno, tampoco puedes ayudarte de los brazos de manera alguna para ajustar
                        tu postura al pedalear y mantener el ritmo. En definitiva, una manera de jugar a Mario Kart 8 apta solo para deportistas…
                        O para masoquistas.
                        Y vosotros, ¿Os veis capaces de ganar una carrera con el Bike-Con de este jugador?
                        <br><br>

                        <h1>Mario Kart 8 Deluxe continúa imparable en Nintendo Switch</h1><br><br>

                        Publicado en 2017 como una reedición del juego de Wii U, Mario Kart 8 Deluxe tardó muy poco en consolidarse
                        como una de las estrellas del catálogo de Nintendo Switch. De hecho, se trata a día de hoy del juego más
                        vendido de esta consola, con más de 28 millones de copias vendidas, y su fuerte demanda navideña
                        hizo de este producto el juego más vendido en España de diciembre. Una propuesta que no pierde fuelle,
                        de la que os hablamos en nuestro análisis de Mario Kart 8 Deluxe.




                    </div>



                    <!-- TARJETAS CON NOTICIAS APILADOS DE 2 EN 2-->
                    <div class="col-12">
                        <h2 class="titNoticia">Otras noticias</h2>
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
                                <button type="button" class="btn-primary btn-circleCarrusel" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></button>
                                <button type="button" class="btn-primary btn-circleCarrusel" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></button>
                            </div>

                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
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
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
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
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
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
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
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
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
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
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
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
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
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
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
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
    <?php include("../includes/footer.php"); ?>
</body>

</html>