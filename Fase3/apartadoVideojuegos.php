<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <?php include("includes/subNavigationVideojuegos.php"); ?>


    <main>
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h1>LANZAMIENTO GLOBAL PS5</h1>
                        <div class="card img-fluid">
                            <a href="noticiasVideojuegos/parlon/noticiaPS5.php">
                                <img class="card-img-top img-fluid" src="https://i.blogs.es/8fdd98/ps51/2560_3000.jpeg" alt="Card image">
                                <div class="card-img-overlay d-flex align-items-end">
                                    <p class="card-text font-weight-bold txtTop">La nueva generacion de consolas despega con el lanzamiento de PS5</p>
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
                                            <p class="card-text">Las ventas digitales se disparan en 2020 en Reino Unido: estos fueron los 20 juegos más vendidos del año</p>
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
                                            <p class="card-text">TheGrefg pulveriza todos los récords de Twitch al presentar su skin de Fortnite</p>
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
                                            <p class="card-text">Nintendo Switch domina la primera semana de ventas UK en 2021, con Animal Crossing al frente de su Top 10 Las ventas de sus juegos crecen en un 123% con respecto al inicio de 2020, impulsadas por el confinamiento.
                                            </p>
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
                                            <p class="card-text">Los 10 videojuegos peor valorados de la década en Metacritic</p>
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
                        <a href="noticia.php" class="enlaceNoticia">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-lg-4">
                                    <img src="https://www.windowscentral.com/sites/wpcentral.com/files/styles/xlarge/public/field/image/2020/04/xbox-series-x-new-logo.jpg?itok=jiiO13jS" class="card-img" alt="...">
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="card-body">
                                        <h3 class="card-title indexNoticiaTitulo">Xbox Series X inicia con éxito: GamePass y sus servicios, te los contamos</h3>
                                        <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualizacion: 20/12/2020
                                            </small></p>
                                        <p class="card-text indexNoticiaTexto">La consola de Microsoft empieza con un valance positivo
                                            y recuperando mucho terreno en el mercado Europeo.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card cardArticulo tarjetaNoticiaApartado">
                        <a href="noticiasVideojuegos/parlon/noticiaStockGraficas.php" class="enlaceNoticia ">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-lg-4">
                                    <img src="https://cdn.vox-cdn.com/thumbor/ak0ZZeT6UIPYpcDSVfS6RcOR73w=/0x0:2640x1749/1200x675/filters:focal(1128x940:1550x1362)/cdn.vox-cdn.com/uploads/chorus_image/image/67414958/twarren_rtx3080.0.jpg" class="card-img" alt="...">
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="card-body">
                                        <h3 class="card-title indexNoticiaTitulo">Conoce las causas de la escasez las NVIDIA RTX 3000</h3>
                                        <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualizacion: 02/01/2021</small></p>
                                        <p class="card-text indexNoticiaTexto">La crisis y la falta de componentes hacen que los clientes
                                            no dispongan aún de las nuevas tecnologías de Nvidia
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card cardArticulo tarjetaNoticiaApartado">
                        <a href="noticiasVideojuegos/parlon/noticiaSwitch.php" class="enlaceNoticia">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-lg-4">
                                    <img src="https://media.vandal.net/i/1706x960/1-2021/2021111940055_1.jpg.webp" class="card-img" alt="...">
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="card-body">
                                        <h3 class="card-title indexNoticiaTitulo">Nintendo Switch domina las ventas de la primera semana de 2021 en Reino Unido</h3>
                                        <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualizacion: 12/01/2021</small></p>
                                        <p class="card-text indexNoticiaTexto">Las ventas de videojuegos en formato físico en Reino Unido
                                            crecen un tercio respecto a 2020 de cara a un confinamiento por el coronavirus
                                            en el país británico.</p>
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