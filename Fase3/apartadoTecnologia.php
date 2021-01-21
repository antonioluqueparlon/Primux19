<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <?php include("includes/subNavigationTecnologia.php"); ?>


    <main>
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h1>Los grandes errores que cometen las empresas después de sufrir un ciberataque</h1>
                        <div class="card img-fluid">
                            <a href="noticiasTecnologia/noticias/noticiaEmpresa.php">
                                <img class="card-img-top img-fluid" src="https://static1.abc.es/media/tecnologia/2021/01/13/ciber-2-kVEI--620x349@abc.jpg" alt="Card image">
                                <div class="card-img-overlay d-flex align-items-end">
                                    <p class="card-text font-weight-bold txtTop">En los últimos cuatro años, los ciberdelitos han crecido un 135%</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!--ÚLTIMA NOTICIAS QUE APARECEN A LA IZQUIERDA EN PANTALLAS GRANDES Y DESAPARECE EN PANTALLAS DE MÓVIL-->
                    <div class="col-lg-4 col-md-12 d-sm-none d-none d-md-block">
                        <h1>Últimas noticias</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="noticiasTecnologia/noticias/noticiaMedidorAire.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text">Xiaomi lanza un medidor para ver la calidad del aire en tu móvil</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="noticiasTecnologia/noticias/noticiaGadgetVirus.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text">Mejores gadgets para luchar contra los virus y bacterias en casa</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="noticiasTecnologia/noticias/noticiaCerraduraInteligente.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text">Xiaomi lanza una cerradura inteligente ¡con desbloqueo facial!
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-lg-none d-xl-block">
                                <a href="noticiasTecnologia/noticias/noticiaRobotAspirador.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text">Qué robot aspirador escoger si tienes mascotas en casa</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                    <!--FIN DE ÚLTIMAS NOTICIAS EN PANTALLAS GRANDES 
    CARRUSEL DE NOTICIAS PARA PANTALLAS MÓVIL
    -->
                    <div class="col-sm-12 d-sm-block d-block d-md-none ">
                        <h1>Últimas noticias</h1>
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <!-- <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>-->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="noticia.php">
                                        <img class="img-fluid" src="http://lorempixel.com/output/nightlife-q-c-404-179-9.jpg" alt="" width="70%" height="200">
                                        <div class="carousel-caption txtTop txtCarrousel">
                                            <h3>titular</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="noticia.php">
                                        <img src="http://lorempixel.com/output/abstract-q-c-404-179-7.jpg" class="img-fluid" alt="" width="70%" height="200">
                                        <div class="carousel-caption txtTop txtCarrousel">
                                            <h3>titular</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="noticia.php">
                                        <img src="http://lorempixel.com/output/people-q-c-404-179-7.jpg" class="img-fluid" alt="" width="70%" height="200">
                                        <div class="carousel-caption txtTop txtCarrousel">
                                            <h3>titular</h3>
                                        </div>
                                    </a>
                                </div>
                                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                    <button type="button" class="btn-primary btn-circleCarrusel" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></button>
                                </a>
                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                    <button type="button" class="btn-primary btn-circleCarrusel" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></button>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- /.carousel -->


                    <!--TARJETAS DE NOTICIAS -->
                    <div class="card cardArticulo tarjetaNoticiaApartado">
                        <a href="noticiasTecnologia/noticias/noticiaGalaxyS21.php" class="enlaceNoticia">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-lg-4">
                                    <img src="https://i.blogs.es/775434/samsung-galaxy-s21-caja/1366_2000.jpg" class="card-img" alt="...">
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="card-body">
                                        <h3 class="card-title indexNoticiaTitulo">Ni cargador, ni microSD, ni auriculares: Samsung los elimina en los Galaxy S21 y hace pensar que será lo habitual</h3>
                                        <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualizacion: 14/01/2021
                                            </small></p>
                                        <p class="card-text indexNoticiaTexto">Samsung se une así a una tendencia que inició Apple con los iPhone 12 </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card cardArticulo tarjetaNoticiaApartado">
                        <a href="noticiasTecnologia/noticias/noticiaHTC.php" class="enlaceNoticia ">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-lg-4">
                                    <img src="https://i.blogs.es/7e5989/htc-desire-21-pro-5g/1366_2000.jpg" class="card-img" alt="...">
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="card-body">
                                        <h3 class="card-title indexNoticiaTitulo">HTC Desire 21 Pro 5G: el primer Desire con 5G tiene pantalla de 90 Hz y cuatro cámaras traseras</h3>
                                        <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualizacion: 14/01/2021</small></p>
                                        <p class="card-text indexNoticiaTexto">La firma taiwanesa presentó el pasado mes de junio el HTC Desire 20 Pro y el HTC U20 5G</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card cardArticulo tarjetaNoticiaApartado">
                        <a href="noticiasTecnologia/noticias/noticiaQualcomm.php" class="enlaceNoticia">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-lg-4">
                                    <img src="https://i.blogs.es/df5c9b/3d-sonic-sensor-gen-2-1280x720/1366_2000.jpg" class="card-img" alt="...">
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="card-body">
                                        <h3 class="card-title indexNoticiaTitulo">Qualcomm presenta su nuevo lector de huellas ultrasónico bajo la pantalla: dice ser un 50% más rápido que el anterior</h3>
                                        <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualizacion: 14/01/2021</small></p>
                                        <p class="card-text indexNoticiaTexto">Qualcomm acaba de presentar la última generación de su sensor de huellas dactilares integrado en la pantalla.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
        </section>
    </main>

    <?php include("includes/footer.php"); ?>

</body>

</html>