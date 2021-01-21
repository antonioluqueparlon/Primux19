<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("../includes/navigation.php"); ?>

    <main>
        <section class="noticia">
            <div class="row ">
                <div class="col-12">
                    <h1 class="titNoticia">Signal, FB Messenger y Google Duo sufrían un error similar al de FaceTime: con una llamada se podía espiar a otros</h1>
                </div>
                <div class="col-12">
                    <img src="https://i.blogs.es/c93fab/girl-3718515_1920/1366_2000.jpg" alt="imgNoticia" class="imgNoticia img-fluid">
                    <p><small class="text-muted">Irene López 20/01/21</small></p>
                    <br>
                    <!--IMAGEN ANCHO DE 1150 ancho y 900 largo -->
                </div>
                <div class="row cuerpoNoticia">
                    <div class="col-12">
                        <p>Fue especialmente sonado el grave error que se descubrió en FaceTime a principio de 2019: el bug permitía escuchar y ver a quien llamabas en grupo antes de que descolgase. Fue tan grave que Apple deshabilitó la característica hasta que arregló este importante problema de privacidad descubierto por un adolescente.

                            La historia, ahora, sabemos que se ha repetido en otras aplicaciones dedicadas a la mensajería instantánea y con llamadas incluidas. Hablamos de Signal, Facebook Messenger, Google Duo, JioChat y Mocha han sido las afectadas.</p>
                        <!-- BREAK 3 -->
                        <h2>Escuchando sin permiso antes de que los usuarios descuelguen</h2>

                        <p>Los problemas han sido encontrados por la investigadora de seguridad de Google Project Zero, Natalie Silvanovich, que se preguntó si errores similares podrían estar dándose en otras plataformas dado que este error nunca había sido considerado como posible y, además, era fácil de lograr.

                            "El error fue notable tanto en su impacto como en su mecanismo. La capacidad de obligar a un dispositivo objetivo a transmitir audio a un dispositivo atacante sin obtener la ejecución del código fue un impacto inusual y posiblemente sin precedentes de una vulnerabilidad", ha explicado este martes.

                            Los errores encontrados y ya solucionados en Signal, Facebook Messenger, Google Duo, JioChat y Mocha permitían forzar a los dispositivos a los que se llamaba a transmitir audio a los dispositivos que realizaban la llamada sin necesidad de obtener la ejecución del código. También, en algunas de ello, se podía llegar a transmitir vídeo.</p>

                            </div>
                    <!-- TARJETAS CON NOTICIAS APILADOS DE 2 EN 2-->
                    <div class="col-12">
                        <h2 class="titNoticia">Otras noticias</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="noticiaAlmaLinux.php" class="linkNoticia">
                            <div class="card divOtrasNoticias">
                                <div class="row no-gutters">
                                    <div class="col-md-4 col-sm-12">
                                        <img src="https://i.blogs.es/b20745/screenshot_19/1366_2000.jpg" class="img-fluid card-img" alt="">
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="card-block px-2">
                                            <h4 class="card-title titNoticia">AlmaLinux</h4>
                                            <p class="card-text">Será el otro gran aspirante al trono del 'viejo' CentOS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="noticiaBugWindows.php" class="linkNoticia">
                            <div class="card divOtrasNoticias ">
                                <div class="row no-gutters">
                                    <div class="col-md-4 col-sm-12">
                                        <img src="https://i.blogs.es/02b07c/windows-10-bug/1366_2000.jpg" class="img-fluid card-img" alt="">
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="card-block px-2">
                                            <h4 class="card-title titNoticia">Windows 10 tiene un bug</h4>
                                            <p class="card-text ">Windows 10 tiene un bug que puede corromper tu disco duro con tan solo ver un icono</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="noticiaCerraduraInteligente.php" class="linkNoticia">
                            <div class="card divOtrasNoticias">
                                <div class="row no-gutters">
                                    <div class="col-md-4 col-sm-12">
                                        <img src="http://placeimg.com/280/158/tech" class="img-fluid card-img" alt="">
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="card-block px-2">
                                            <h4 class="card-title titNoticia">Cerradura Inteligente</h4>
                                            <p class="card-text">Xiaomi lanza una cerradura con desbloqueo facial</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="noticiaCiberseguridad.php" class="linkNoticia">
                            <div class="card divOtrasNoticias ">
                                <div class="row no-gutters">
                                    <div class="col-md-4 col-sm-12">
                                        <img src="http://placeimg.com/280/158/animals" class="img-fluid card-img" alt="">
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="card-block px-2">
                                            <h4 class="card-title titNoticia">Ciberseguridad</h4>
                                            <p class="card-text ">Una gran carencia en las empresas españolas</p>
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
                                            <img class="card-img-top imgUltimasNoticias" src="https://static1.abc.es/media/tecnologia/2021/01/13/ciber-2-kVEI--620x349@abc.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Ciberataque</h4>
                                                <p class="card-text">Errores al sufrir un ciberataque</p>
                                                <a href="noticiaEmpresa.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2 tarjetaUltimasNOticias">
                                            <img class="card-img-top imgUltimasNoticias" src="https://i.blogs.es/c93fab/girl-3718515_1920/1366_2000.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">FaceTime</h4>
                                                <p class="card-text">Con una llamada se podía espiar a otros</p>
                                                <a href="noticiaFaceTime.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2 tarjetaUltimasNOticias">
                                            <img class="card-img-top imgUltimasNoticias" src="https://i.blogs.es/2cb17e/files-vista-de-carpeta/1366_2000.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Files</h4>
                                                <p class="card-text">El Explorador de Windows 10 que llevábamos años esperando</p>
                                                <a href="noticiaFiles.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2 tarjetaUltimasNOticias">
                                            <img class="card-img-top imgUltimasNoticias" src="https://i.blogs.es/85b3ee/portapapeles/1366_2000.png" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Windows</h4>
                                                <p class="card-text">Funciones poco conocidas de Windows 10</p>
                                                <a href="noticiaFuncionesWindows.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2 tarjetaUltimasNOticias">
                                            <img class="card-img-top imgUltimasNoticias" src="https://i.blogs.es/9a5143/adios/1366_2000.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Samsung</h4>
                                                <p class="card-text">El futuro de los Samsung Galaxy Note</p>
                                                <a href="noticiaFuturoSamsung.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2 tarjetaUltimasNOticias">
                                            <img class="card-img-top imgUltimasNoticias" src="https://topesdegama.com/app/uploads-topesdegama.com/2020/01/Purificador-de-Xiaomi-930x489.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Gadgets</h4>
                                                <p class="card-text">Xiaomi lanza un medidor para ver la calidad del aire en tu móvil</p>
                                                <a href="noticiaGadgetVirus.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2 tarjetaUltimasNOticias">
                                            <img class="card-img-top imgUltimasNoticias" src="https://i.blogs.es/775434/samsung-galaxy-s21-caja/1366_2000.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Galaxy S21</h4>
                                                <p class="card-text">Ni cargador, ni microSD, ni auriculares</p>
                                                <a href="noticiaGalaxyS21.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2 tarjetaUltimasNOticias">
                                            <img class="card-img-top imgUltimasNoticias" src="https://i.blogs.es/7e5989/htc-desire-21-pro-5g/1366_2000.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">HTC</h4>
                                                <p class="card-text">HTC Desire 21 Pro 5G</p>
                                                <a href="noticiaHTC.php" class="btn btn-primary linkNoticia">Ver más</a>
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