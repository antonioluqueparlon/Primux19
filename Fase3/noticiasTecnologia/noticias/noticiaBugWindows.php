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
                    <h1 class="titNoticia">Windows 10 tiene un bug que puede corromper tu disco duro con tan solo ver un icono</h1>
                </div>
                <div class="col-12">
                    <img src="https://i.blogs.es/02b07c/windows-10-bug/1366_2000.jpg" alt="imgNoticia" class="imgNoticia img-fluid">
                    <p><small class="text-muted">Irene López 19/01/21</small></p>
                    <br>
                    <!--IMAGEN ANCHO DE 1150 ancho y 900 largo -->
                </div>
                <div class="row cuerpoNoticia">
                    <div class="col-12">
                        <p>El investigador de seguridad Jonas L ha descubierto una vulnerabilidad en el sistema de archivos NTFS de Windows que permite corromper un disco con un simple comando de una sola línea.

                            Ese comando puede esconderse dentro de un archivo de acceso directo de Windows, un archivo ZIP, o varios otros vectores. En el primer caso, el bug es tan extraño que se puede explotar la vulnerabilidad incluso si nunca abre el archivo, solo basta con que el usuario mire la carpeta en la que se encuentra el acceso directo.</p>

                        <!-- BREAK 3 -->
                        <h2>La vulnerabilidad puede ser activada por cualquier usuario sin privilegios elevados en Windows 10</h2>

                        <p>Esta vulnerabilidad puede ser activada por cualquier tipo de usuario, no es necesario tener privilegios de administrador, ni credenciales especiales, ni permisos de escritura. Solo basta con abrir un archivo, dentro de cualquier carpeta del sistema, que tenga un nombre escrito especialmente con el comando mencionado.

                            Cuando esto pasa, Windows empieza a mostrar mensajes indicando que los datos del disco se han dañado y pedirá un reinicio para repararlo. El investigador explicó que este fallo apreció con Windows 10 1803, es decir, la actualización de abril de 2018, y está presente hasta en la más reciente versión del sistema.

                            El comando en cuestión, que advertimos no debe ser probado en un sistema activo, solo en máquinas virtuales a menos que quieras que tu disco se corrompa y posiblemente te deje sin acceso a sus datos, sirve para intentar acceder al archivo $i30 (el índice de atributos del sistema de archivos NTFS de Windows) en una carpeta de cierta manera.</p>

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
                        <a href="noticia.php" class="linkNoticia">
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
                        <a href="noticia.php" class="linkNoticia">
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
                        <a href="noticia.php" class="linkNoticia">
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