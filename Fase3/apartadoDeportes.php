<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php");?>
</head>

<body>

    <?php include("includes/navigation.php");?>
    <?php include("includes/subNavigationDeportes.php");?>


    <main>
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h1>El detallazo del Athletic: Garitano en la foto de campeones</h1>
                        <div class="card img-fluid">
                            <a href="deportes/noticiasDeportes/noticiaFutbol.php">
                                <img class="card-img-top img-fluid"
                                    src="../Fase3/img/imgDeportes/athleticBilbao.jpg" alt="Card image">
                                <div class="card-img-overlay d-flex align-items-end">
                                    <p class="card-text font-weight-bold txtTop"> Final Supercopa España: El club publicó un tuit con el exentrenador y Marcelino</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!--ÚLTIMA NOTICIAS QUE APARECEN A LA IZQUIERDA EN PANTALLAS GRANDES Y DESAPARECE EN PANTALLAS DE MÓVIL-->
                    <div class="col-lg-4 col-md-12 d-sm-none d-none d-md-block">
                        <h1>Últimas noticias</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="noticia.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text titNoticiaUltNoticias">El récord de Doncid del que nadie puede presumir en la historia de la NBA</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="noticia.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text titNoticiaUltNoticias">Nadal, Djokovic y Thiem volaron juntos desde Barcelona</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="noticia.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text titNoticiaUltNoticias">Simeone necesita que João Félix remonte el vuelo</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-lg-none d-xl-block">
                                <a href="noticia.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text titNoticiaUltNoticias">Australia niega la petición de Djokovic para la cuarentena</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-lg-none d-xl-block">
                                <a href="noticia.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text titNoticiaUltNoticias">La nueva aventura de Ane Santesteban</p>
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
                                        <img class="img-fluid"
                                            src="../Fase3/img/imgDeportes/basketFemenino.jpg" alt="baloncesto femenino"
                                            width="70%" height="200">
                                        <div class="carousel-caption txtTop txtCarrousel">
                                            <h3>UCO basket femenino</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="noticia.php">
                                        <img src="../Fase3/img/imgDeportes/anne.jpg"
                                            class="img-fluid" alt="" width="70%" height="200">
                                        <div class="carousel-caption txtTop txtCarrousel">
                                            <h3>Anne cambia equipo</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="noticia.php">
                                        <img src="../Fase3/img/imgDeportes/doncic.jpg"
                                            class="img-fluid" alt="" width="70%" height="200">
                                        <div class="carousel-caption txtTop txtCarrousel">
                                            <h3>Triple doble histórico de Doncic</h3>
                                        </div>
                                    </a>
                                </div>
                                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                    <button type="button" class="btn-primary btn-circleCarrusel"
                                        href="#multi-item-example" data-slide="prev"><i
                                            class="fas fa-chevron-left"></i></button>
                                </a>
                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                    <button type="button" class="btn-primary btn-circleCarrusel"
                                        href="#multi-item-example" data-slide="next"><i
                                            class="fas fa-chevron-right"></i></button>
                                </a>
                            </div>
                        </div>

                    </div>
                    <!-- /.carousel -->


                    <!--TARJETAS DE NOTICIAS -->
                    <div class="card cardArticulo tarjetaNoticiaApartado">
                        <a href="noticia.php" class="enlaceNoticia">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-lg-4">
                                    <img src="../Fase3/img/imgDeportes/balonmano.jpg"
                                        class="card-img imgApartadoNoticias" alt="Raúl Entrerríos">
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="card-body">
                                        <h3 class="card-title indexNoticiaTitulo">La penúltima cátedra del capitán Raúl Entrerríos</h3>
                                        <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualizacion: 18/01/2021</small></p>
                                        <p class="card-text indexNoticiaTexto">Cerca de cumplir 40 años, sigue siendo uno de los líderes de España.
                                        Será su último Mundial con la selección española antes de su retirada</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card cardArticulo tarjetaNoticiaApartado">
                        <a href="noticia.php" class="enlaceNoticia ">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-lg-4">
                                    <img src="../Fase3/img/imgDeportes/expMessi.jpg"
                                        class="card-img imgApartadoNoticias" alt="Expulsión Messi">
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="card-body">
                                        <h3 class="card-title indexNoticiaTitulo">La otra cara de la expulsión de Messi contra el Athletic</h3>
                                        <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualizacion: 18/01/2021</small></p>
                                        <p class="card-text indexNoticiaTexto">En redes sociales se ha viralizado una toma frontal donde ponen en duda que Messi tuviera que ser expulsado directamente. Fue su primera expulsión en Barcelona.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card cardArticulo tarjetaNoticiaApartado">
                        <a href="noticia.php" class="enlaceNoticia">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-lg-4">
                                    <img src="../Fase3/img/imgDeportes/ciclismo1.jpg"
                                        class="card-img imgApartadoNoticias" alt="ciclismo">
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="card-body">
                                        <h3 class="card-title indexNoticiaTitulo">Vuelta ciclista a Andalucía</h3>
                                        <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualizacion: 19/01/2021</small></p>
                                        <p class="card-text indexNoticiaTexto">La icónica Vuelta ciclista a Andalucía tendrá luchando por su 
                                            clasificación a Valverde, Nibali y "Superman" López en su 67ª edición.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
        </section>
    </main>

    <?php include("includes/footer.php");?>

</body>

</html>