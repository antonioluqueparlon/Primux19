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
                    <h1 class="titNoticia ">Una Xbox portátil de ensueño: Series Z tiene todo lo que necesitas pero tristemente no es real</h1>
                </div>
                <div class="col-12 imgNoticia">
                    <img src="img/xboxportatil.PNG" alt="imgNoticia" class="imgNoticia img-fluid">
                    <div class="card-img-overlay d-flex align-items-end">
                        <p class="card-text font-weight-bold txtTop">Un aficionado crea un render en realidad aumentada que muestra la consola, y no es la primera vez.</p>
                    </div>


                    <br>
                    <!--IMAGEN ANCHO DE 1150 ancho y 900 largo -->

                </div>
                <div class="row cuerpoNoticia">
                    <div class="col-12">
                        <p><small class="text-muted">Antonio Luque 02/12/20</small></p>

                        Siempre se ha hablado de la posibilidad de ver una Xbox portátil, y es algo en lo que la propia Microsoft pensó años atrás.
                        Desde el nacimiento de xCloud, su servicio de juego en la nube, el deseo de poder jugar a los grandes títulos
                        de Xbox vayas donde vayas es una realidad, pero aún hay aficionados que siguen soñando con la idea de tener en sus
                        manos una consola portátil de Xbox. Es el caso de Kashama, un usuario de Tiktok
                        que una vez más ha vuelto a sorprender con el diseño de una Xbox portátil imaginaria. ¿Su nombre? Xbox Series Z.

                        <br><br>

                        En primer lugar es importante recalcar que se trata de un modelo 3D en un programa de realidad aumentada,
                        no se trata de un aparato físico, pero dicho esto, el trabajo de este aficionado es de lo más interesante.
                        El diseño de la consola en
                        sí es bastante sobrio, en la línea de Nintendo 3DS, pero con la distribución de los botones propia de Xbox.

                        <br><br>
                        <!-- VIDEO -->

                        <div id="video-container">
                            <video id="video" width="1040" height="365">
                                <source src="../videos/xboxportatil.webm" type="video/webm">
                                <source src="../videos/xboxportatil.ogv" type="video/ogv">
                                <source src="../videos/xboxportatil.mp4" type="video/mp4">
                                <p>
                                    Your browser doesn't support HTML5 video.
                                    <a href="../videos/xboxportatil.mp4">Download</a> the video instead.
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

                        Ya de entrada resulta llamativa la forma en la que se abre el aparato,
                        pues es un proceso automático -muy futurista- que nos deja con una gran pantalla en la parte superior
                        de la consola, y una pantalla táctil más pequeña entre los botones y sticks.
                        Ciertamente es un diseño más estándar que el de otro modelo portátil de Xbox que este mismo
                        aficionado creó hace un tiempo.

                        <br><br>

                        En ese caso, y sin nombre en clave, se trataba de un mando que a su vez era la propia pantalla de la consola,
                        como podéis ver en este mismo tema.
                        ¿Qué os parece el diseño? ¿Cuál os gusta más de entre las dos creaciones de este aficionado?
                        <br><br>

                        <h1>xCloud, el juego en la nube de Xbox</h1><br><br>
                        Como te contamos en 3DJuegos al hablar de nuestras impresiones con xCloud tras varios meses disfrutando del servicio,
                        "la integración de xCloud en el Xbox Game Pass le otorga un matiz diferenciador" frente a otras plataformas de juego en la nube.
                        Gracias a este servicio, los aficionados tienen ante sí una enorme variedad de videojuegos que pueden disfrutar en sus dispositivos
                        móviles, y más adelante también en PC,
                        sin preocuparse de tener la consola o un hardware lo suficientemente potente como para hacer funcionar juegos punteros.

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