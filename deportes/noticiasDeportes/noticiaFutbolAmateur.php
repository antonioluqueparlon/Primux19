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
                    <h1 class="titNoticia ">RFAF paraliza todo el fútbol base</h1>
                </div>
                <div class="col-12">
                    <img src="../../img/imgDeportes/futbolBase.jpg" alt="imgNoticia"
                        class="imgNoticia img-fluid">
                    <p><small class="text-muted">Jesús Cano Ruiz 20/01/2021</small></p>
                    <!--IMAGEN ANCHO DE 1150 ancho y 900 largo -->
                </div>
                <div class="row cuerpoNoticia">
                    <div class="col-12">
                        <p>
                            En el día del lunes la RFAF emitió una circular por la que paralizaba todo el fútbol desde juvenil hacia abajo (fútbol base) debido a la sitiuación que estamos viviendo por coronavirus.<br><br>
                            Sí que siguen en su curso las competiciones seniors aunque sea amateur como son las competiciones provinciales.
                            <br>En breve ampliamos más información
                            <br><br>
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
                    <a href="../../noticiasTecnologia/noticias/noticiaCerraduraInteligente.php" class="linkNoticia">
                        <div class="card divOtrasNoticias">
                            <div class="row no-gutters">
                                <div class="col-md-4 col-sm-12">
                                    <img src="https://topesdegama.com/app/uploads-topesdegama.com/2020/11/cerradura-inteligente-xiaomi-1-930x487.jpg" class="img-fluid card-img" alt="">
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="card-block px-2">
                                        <h4 class="card-title titNoticia">Cerradura inteligente</h4>
                                        <p class="card-text">Xiaomi lanza al mercado una cerradura inteligente</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="../../noticiasTecnologia/noticias/noticiaMedidorAire.php" class="linkNoticia">
                        <div class="card divOtrasNoticias ">
                            <div class="row no-gutters">
                                <div class="col-md-4 col-sm-12">
                                    <img src="https://topesdegama.com/app/uploads-topesdegama.com/2020/01/Purificador-de-Xiaomi-930x489.jpg" class="img-fluid card-img" alt="">
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="card-block px-2">
                                        <h4 class="card-title titNoticia">Purificador de aire</h4>
                                        <p class="card-text ">Xiaomi lanza un gadget que mide la pureza del aire</p>
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
                                    <div class="card mb-2 tarjetaUltimasNOticias">
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
                                    <div class="card mb-2 tarjetaUltimasNOticias">
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
                                    <div class="card mb-2 tarjetaUltimasNOticias">
                                        <img class="card-img-top imgUltimasNoticias"
                                            src="../../img/imgDeportes/balonmano.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">La penúltima cátedra de Raúl Entrerríos</h4>
                                            <p class="card-text">Cerca de cumplir 40 años, sigue siendo uno de los líderes de España.
                                        </p>
                                            <a href="noticiaREntrerrios.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2 tarjetaUltimasNOticias">
                                        <img class="card-img-top imgUltimasNoticias"
                                            src="../../img/imgDeportes/nadal.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Nadal, Djokovic y Thiem viajan juntos a Australia</h4>
                                            <p class="card-text">Lo publicó el tenista francés en sus redes sociales</p>
                                            <a href="noticiaCuarentenaDjokovic.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item">

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2 tarjetaUltimasNOticias">
                                        <img class="card-img-top imgUltimasNoticias"
                                            src="../../noticiasVideojuegos/parlon/img/grefg.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">The Grefg bate récords en TWITCH</h4>
                                            <p class="card-text">La pasada noche el youtuber batió todos los récords de visualizaciones en TWITCH</p>
                                            <a href="../../noticiasVideojuegos/parlon/noticiaTheGrefg.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2 tarjetaUltimasNOticias">
                                        <img class="card-img-top imgUltimasNoticias"
                                            src="../../img/imgDeportes/futbolAmateur.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Quejas en los clubs amateurs de Madrid</h4>
                                            <p class="card-text">Imposición de reanudar este fin de semana la competición</p>
                                            <a href="noticiaFutbolMadrid.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2 tarjetaUltimasNOticias">
                                        <img class="card-img-top imgUltimasNoticias"
                                            src="../../img/imgDeportes/djokovic.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Djokovic recibe respuesta a sus declaraciones</h4>
                                            <p class="card-text">Ante sus quejas por la cuarentena.</p>
                                            <a href="noticiaCuarentenaDjokovic.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2 tarjetaUltimasNOticias">
                                        <img class="card-img-top imgUltimasNoticias"
                                            src="https://topesdegama.com/app/uploads-topesdegama.com/2020/01/Purificador-de-Xiaomi-930x489.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Medidor de aire</h4>
                                            <p class="card-text">Xiaomi lanza un gadget, muy útil en nuestro día a día, para el móvil que mide la pureza del aire</p>
                                            <a href="../../noticiasTecnologia/noticias/noticiaMedidorAire.php" class="btn btn-primary linkNoticia">Ver más</a>
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