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
                    <h1 class="titNoticia">Files es el Explorador de Windows 10 que llevábamos años esperando, con diseño moderno y navegación por pestañas</h1>
                </div>
                <div class="col-12">
                    <img src="https://i.blogs.es/2cb17e/files-vista-de-carpeta/1366_2000.jpg" alt="imgNoticia" class="imgNoticia img-fluid">
                    <p><small class="text-muted">Irene López 18/01/21</small></p>
                    <br>
                    <!--IMAGEN ANCHO DE 1150 ancho y 900 largo -->
                </div>
                <div class="row cuerpoNoticia">
                    <div class="col-12">
                        <p>Por allá a mediados de 2019 en Genbeta hablamos de Files UWP, una alternativa al explorador de archivos en Windows 10 que sí tenía pestañas y diseño Modern. En aquel entonces se trataba de una aplicación en su infancia, bastante lejos de reemplazar al Explorador de Windows, pero que prometía bastante.

                            Hoy la historia es otra, los casi dos años de desarrollo le han servido a su creador para poner esta aplicación muy a punto, tanto que fácilmente puede reemplazar al Explorador que tenemos en estos momentos en Windows 10 sin que extrañes gran cosa de él, y en cambio, puede que ofrezca más en algunos aspectos.

                        </p>
                        <!-- BREAK 3 -->
                        <h2>Las benditas pestañas</h2>

                        <p>Files UWP dejó a un lado las siglas y ahora se llama solo "Files", está disponible en la Microsoft Store, es gratuito, y además es open source. Puedes ver el proyecto en GitHub que hasta ahora ya tiene más de 70 colaboradores.

                            Si bien sabemos que Microsoft está trabajando (hace bastante tiempo) en una versión moderna del Explorador de Windows, incluso en sus apariciones más recientes se nota de lejos que sigue estando bastante verde, y si comparamos la versión que se puede probar para Windows 10X con Files, la diferencia es enorme.</p>
                        <!-- BREAK 4 -->

                        <p>Files es un gestor de archivos que ofrece ahora todas las funciones básicas del Explorador de Windows, con el adicional de que sí soporta pestañas y además tiene diseño moderno, es decir que a diferencia del de Microsoft sí usa Fluent Design.</p>
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
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="https://static1.abc.es/media/tecnologia/2021/01/13/ciber-2-kVEI--620x349@abc.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Ciberataque</h4>
                                                <p class="card-text">Errores al sufrir un ciberataque</p>
                                                <a href="noticiaEmpresa.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="https://i.blogs.es/c93fab/girl-3718515_1920/1366_2000.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">FaceTime</h4>
                                                <p class="card-text">Con una llamada se podía espiar a otros</p>
                                                <a href="noticiaFaceTime.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="https://i.blogs.es/2cb17e/files-vista-de-carpeta/1366_2000.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Files</h4>
                                                <p class="card-text">El Explorador de Windows 10 que llevábamos años esperando</p>
                                                <a href="noticiaFiles.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="https://i.blogs.es/85b3ee/portapapeles/1366_2000.png" alt="Card image cap">
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
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="https://i.blogs.es/9a5143/adios/1366_2000.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Samsung</h4>
                                                <p class="card-text">El futuro de los Samsung Galaxy Note</p>
                                                <a href="noticiaFuturoSamsung.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="https://topesdegama.com/app/uploads-topesdegama.com/2020/01/Purificador-de-Xiaomi-930x489.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Gadgets</h4>
                                                <p class="card-text">Xiaomi lanza un medidor para ver la calidad del aire en tu móvil</p>
                                                <a href="noticiaGadgetVirus.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="https://i.blogs.es/775434/samsung-galaxy-s21-caja/1366_2000.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Galaxy S21</h4>
                                                <p class="card-text">Ni cargador, ni microSD, ni auriculares</p>
                                                <a href="noticiaGalaxyS21.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="https://i.blogs.es/7e5989/htc-desire-21-pro-5g/1366_2000.jpg" alt="Card image cap">
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