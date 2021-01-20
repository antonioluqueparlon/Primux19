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
                    <h1 class="titNoticia ">El 25 aniversario de Pokémon calienta motores con un vídeo promocional y una colaboración con Katy Perry</h1>
                </div>
                <div class="col-12 imgNoticia">
                    <img src="img/25ds.jpg" alt="imgNoticia" class="imgNoticia img-fluid">
                    <div class="card-img-overlay d-flex align-items-end">
                        <p class="card-text font-weight-bold txtTop">A la espera de un nuevo Direct, los fans tendrán que conformarse con productos y novedades.</p>
                    </div>


                    <br>
                    <!--IMAGEN ANCHO DE 1150 ancho y 900 largo -->

                </div>
                <div class="row cuerpoNoticia">
                    <div class="col-12">
                        <p><small class="text-muted">Antonio Luque 02/12/20</small></p>

                        La saga Pokémon está de aniversario: el 27 de febrero, los cartuchos originales de Rojo y Verde celebran 25 años desde
                        su lanzamiento en Japón. Desde The Pokémon Company llevan tiempo anticipando la celebración de este evento, aunque sus
                        planes eran algo confusos: ¿remakes de Diamante y Perla, al fin? ¿Algo completamente diferente?
                        A la espera de noticias oficiales, sí que han llegado los primeros detalles de lo que nos depara el 2021.

                        <br><br>

                        La primera novedad es un vídeo conmemorativo, que puedes ver adjunto en la noticia.
                        Es un simpático repaso por los videojuegos, cartas, artículos de colección y episodios animados
                        que han marcado historia; y que culmina con el anuncio de una colaboración con la cantante Katy Perry.
                        Con la coletilla "toda fiesta necesita una lista de canciones",
                        quedamos a la espera de nuevos detalles sobre esta y más asociaciones con artistas.

                        <br><br>


                        <!-- VIDEO -->

                        <div id="video-container">
                            <video id="video" width="1040" height="365">
                                <source src="../videos/25aniversario.webm" type="video/webm">
                                <source src="../videos/25aniversario.ogv" type="video/ogv">
                                <source src="../videos/25aniversario.mp4" type="video/mp4">
                                <p>
                                    Your browser doesn't support HTML5 video.
                                    <a href="../videos/25aniversario.mp4">Download</a> the video instead.
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

                        o que sí sabemos con certeza (vía Serebii) es que contaremos con productos de marcas como Build-a-Bear,
                        Levi's, McDonald's, General Mills, Jawards, Scholastic, Mattel, Funko, PowerA y The Wand Company.
                        De esta última hablamos el mes pasado: pondrá a la venta una réplica de Poké Ball,
                        aunque su precio ha desanimado a muchos interesados. Si no estás entre ellos, puedes reservarla ya, por cierto.

                        <br><br>

                        Por otro lado, juegos como Pokémon GO y Pokémon Masters EX tendrán sus propios eventos temáticos,
                        cuyos detalles llegarán progresivamente en los próximos meses. En cuanto a las novedades jugables,
                        los fans e insiders rumorean acerca de un Direct programado para la fecha de aniversario, información que debes sostener
                        con pinzas pero que parece del todo plausible: es, ni más ni menos, la dirección que ha tomado la franquicia en el pasado.
                        <br><br>

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