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
                    <h1 class="titNoticia ">Gráficos fotorrealistas y terror en lo nuevo de los autores de Hellblade: esta es la tecnología tras Project Mara</h1>
                </div>
                <div class="col-12 imgNoticia">
                    <img src="img/fotorealismo.png" alt="imgNoticia" class="imgNoticia img-fluid">
                    <div class="card-img-overlay d-flex align-items-end">
                        <p class="card-text font-weight-bold txtTop">Desde el amparo de Xbox Game Studios, el equipo británico tiene un juego experimental entre manos.</p>
                    </div>


                    <br>
                    <!--IMAGEN ANCHO DE 1150 ancho y 900 largo -->

                </div>
                <div class="row cuerpoNoticia">
                    <div class="col-12">
                        <p><small class="text-muted">Antonio Luque 02/12/20</small></p>

                        <!-- VIDEO -->

                        <div id="video-container">
                            <video id="video" width="1040" height="365">
                                <source src="../videos/gameplayprojectmara.webm" type="video/webm">
                                <source src="../videos/gameplayprojectmara.ogv" type="video/ogv">
                                <source src="../videos/gameplayprojectmara.mp4" type="video/mp4">
                                <p>
                                    Your browser doesn't support HTML5 video.
                                    <a href="../videos/gameplayprojectmara.mp4">Download</a> the video instead.
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

                        Teniendo en cuenta el éxito y la aceptación tras un juego tan único como Hellblade: Senua's Sacrifice,
                        no hay duda de que el estudio británico <strong>Ninja Theory</strong> tiene en el punto de vista los juegos narrativos,
                        el horror y la tergiversación del mundo real tal y como lo conocemos. Con una premisa parecida a esta
                        en mente, el año pasado se anunció al mundo Project Mara, un juego experimental llamado a <strong>desafiar la
                            narrativa tradicional</strong> con métodos más innovadores.
                        <br><br>

                        Aparentemente, parte del proceso consiste en reinventarse a nivel tecnológico: el camino a seguir será el <strong>fotorrealismo</strong>,
                        gracias más que probablemente a las virtudes del motor Unreal Engine 5. Sus responsables han compartido en Youtube
                        un <strong>pequeño documental</strong> sobre el proceso de desarrollo de los gráficos que darán vida a esta nueva aventura,
                        y resulta todo un espectáculo del que también se puede aprender mucho.
                        <br><br>

                        En el vídeo, el creativo Tameem Antoniades explica que una de sus ambiciones es "capturar la realidad obsesivamente".
                        Para ello, el equipo de desarrollo escoge una localización reducida,<strong>un apartamento,</strong> que debe estar recreado a la perfección.
                        Y cuando hablamos de perfección, nos referimos a un nivel microscópico: aparentemente, hay meses de trabajo tras los shaders
                        y texturas que permiten al
                        juego recrear no solo la tridimensionalidad de los objetos a simple vista, sino también sus
                        <strong>fibras, oquedades y rugosidades.</strong>
                        <br><br>


                        La escala tras esta tecnología resulta también muy importante, porque cubre diferentes capas y objetos de toda clase:
                        es por eso que se han usado <strong>escáneres LiDAR</strong> (que se están comenzando a implementar en dispositivos móviles como el
                        iPhone 12 Pro) para medir mediante láser la distancia entre objetos con mayor precisión. ¿Los resultados? Como puedes ver,
                        abrumadores: recurriendo a <strong>métodos procedurales,</strong>
                        se puede cubrir un suelo con polvo, pelo y microfibras; o un grifo con gotas de agua creíbles. La cuestión es ver en qué quedará todo esto.
                        <br><br>

                        <h1>Los estudios de Xbox y sus videojuegos</h1><br><br>

                        <div class="article-asset-image article-asset-large">
                            <div class="asset-content">
                                <img class="fotoNoticiaestilo " src="img/projectmara2.jpg" alt="switch">
                            </div>
                        </div>

                        <br><br>

                        Ninja Theory fue uno de los muchos estudios <strong>absorbidos por Microsoft</strong> a lo largo de los últimos años:
                        una tendencia que, cuando creíamos concluida, volvió por todo lo alto con la compra de Bethesda.
                        Aún es pronto para ver cómo de bien o mal se resuelven estos acuerdos, pero al menos ya tenemos una idea de los juegos
                        en los que trabaja Xbox Game Studios. Curiosamente, los autores de Hellblade encajan con
                        el perfil de <strong>aventura individual</strong> centrada en la historia que más se había echado de menos durante la generación de Xbox One.
                        <br><br>

                        <p><small class="text-muted">Fuente: https://www.3djuegos.com/noticias-ver/210801/graficos-fotorrealistas-y-terror-en-lo-nuevo-de-los-autores/</small></p>


                    </div>



                    <!-- TARJETAS CON NOTICIAS APILADOS DE 2 EN 2-->
                    <div class="col-12">
                        <h2 class="titNoticia">Otras noticias</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="../../deportes/noticiasDeportes/noticiaCiclismo.php" class="linkNoticia">
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
                        <a href="../../deportes/noticiasDeportes/noticiaViajeOpenAustralia.php" class="linkNoticia">
                            <div class="card divOtrasNoticias">
                                <div class="row no-gutters">
                                    <div class="col-md-4 col-sm-12">
                                        <img src="../../img/imgDeportes/nadal.jpg" class="img-fluid card-img" alt="">
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="card-block px-2">
                                            <h4 class="card-title titNoticia">Nadal, Djokovic y Thiem volaron juntos desde Barcelona</h4>
                                            <p class="card-text">Rafa Nadal, Novak Djokovic y Dominic Thiem y están en Adelaida para cumplir los 14 días de cuarentena antes de competir en el Abierto de Australia.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="noticia25Nintendo.php" class="linkNoticia">
                            <div class="card divOtrasNoticias ">
                                <div class="row no-gutters">
                                    <div class="col-md-4 col-sm-12">
                                        <img src="../../noticiasVideojuegos/parlon/img/25ds.jpg" class="img-fluid card-img" alt="">
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="card-block px-2">
                                            <h4 class="card-title titNoticia">El 25 aniversario de Pokémon calienta motores con un vídeo promocional y una colaboración con Katy Perry</h4>
                                            <p class="card-text ">A la espera de un nuevo Direct, los fans tendrán que conformarse con productos y novedades.</p>
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
                                        <div class="card mb-2 tarjetaUltimasNOticias">
                                            <img class="card-img-top" src="../../img/imgDeportes/athleticBilbao.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">El detallazo del Athletic: Garitano en la foto de campeones</h4>
                                                <p class="card-text">Final Supercopa España: El club publicó un tuit con el exentrenador y Marcelino</p>
                                                <a href="../../deportes/noticiasDeportes/noticiaFutbol.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2 tarjetaUltimasNOticias">
                                            <img class="card-img-top" src="../../img/imgDeportes/balonmano.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">La penúltima cátedra del capitán Raúl Entrerríos</h4>
                                                <p class="card-text">Con 40 años, sigue siendo uno de los líderes de España.
                                                    Será su último Mundial con la selección española antes de su retirada.</p>
                                                <a href="noticia.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2 tarjetaUltimasNOticias">
                                            <img class="card-img-top" src="img/xboxportatil.PNG" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Una Xbox portátil de ensueño: Series Z </h4>
                                                <p class="card-text">Un aficionado crea un render en realidad aumentada que muestra la consola, y no es la primera vez.</p>
                                                <a href="noticiaXboxPortatil.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2 tarjetaUltimasNOticias">
                                            <img class="card-img-top" src="img/grefg.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">TheGrefg pulveriza todos los récords de Twitch</h4>
                                                <p class="card-text">Los hispanohablantes pulverizan el record con mas de 2 millones de espectadores en la plataforma</p>
                                                <a href="noticiaTheGrefg.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2 tarjetaUltimasNOticias">
                                            <img class="card-img-top" src="img/mariokart.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Una bici estática es todo lo que necesitas para competir en Mario Kart 8</h4>
                                                <p class="card-text">Si quieres competir contra Mario y compañía, tendrás que pedalear más fuerte que nadie.</p>
                                                <a href="noticiaMarioKart.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2 tarjetaUltimasNOticias">
                                            <img class="card-img-top" src="https://static1.abc.es/media/tecnologia/2021/01/13/ciber-2-kVEI--620x349@abc.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Los grandes errores que cometen las empresas después de sufrir un ciberataque</h4>
                                                <p class="card-text">En los últimos cuatro años, los ciberdelitos han crecido un 135% </p>
                                                <a href="noticiasTecnologia/noticias/noticiaEmpresa.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2 tarjetaUltimasNOticias">
                                            <img class="card-img-top" src="../../img/imgDeportes/futbolAmateur.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Paralizado el fútbol amateur</h4>
                                                <p class="card-text">RFAF paraliza toda la competición de fútbol base debido a las restricciones</p>
                                                <a href="../../deportes/noticiasDeportes/noticiaFutbolAmateur.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2 tarjetaUltimasNOticias">
                                            <img class="card-img-top" src="../../img/imgDeportes/ciclismo1.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Vuelta ciclista a Andalucía </h4>
                                                <p class="card-text">La icónica Vuelta ciclista a Andalucía tendrá luchando por su clasificación a Valverde, Nibali y "Superman" López.</p>
                                                <a href="../../deportes/noticiasDeportes/noticiaCiclismo.php" class="btn btn-primary linkNoticia">Ver más</a>
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