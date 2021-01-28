<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php");?>
</head>

<body>

    <?php include("includes/navigation.php");?>
    <?php include("includes/subNavigationMotor.php");?>


    <main>
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <h1>Lo más visto</h1>
                        <div class="card img-fluid">
                            <a href="noticiasMotor/subseccionFormula1/n1F1.php">
                                <img class="card-img-top img-fluid"
                                    src="noticiasMotor/img/sainzFerrari.jpg" alt="Card image">
                                <div class="card-img-overlay d-flex align-items-end">
                                    <p class="card-text font-weight-bold txtTop">"No tengo dudas: Sainz tendrá éxito en Ferrari"</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!--ÚLTIMA NOTICIAS QUE APARECEN A LA IZQUIERDA EN PANTALLAS GRANDES Y DESAPARECE EN PANTALLAS DE MÓVIL-->
                    <div class="col-lg-4 col-md-12 d-sm-none d-none d-md-block">
                        <h1>Últimas noticias</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="noticiasMotor/subseccionFormula1/n2F1.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text">Mazepin, consciente de que tendrá "un solo disparo en la F1"</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="noticiasMotor/subseccionFormula1/n3F1.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text">La renovación de Hamilton</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="noticiasMotor/subseccionFormula1/n4F1.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text">El nuevo motor del Ferrari SF21</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-lg-none d-xl-block">
                                <a href="noticiasMotor/subseccionFormulaE/n1FE.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text">La salida de Audi y BMW de la Fórmula E abre nuevas puertas
</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-lg-none d-xl-block">
                                <a href="noticiasMotor/subseccionFormulaE/n2FE.php" class="linkNoticia">
                                    <div class="card bg-light cardApartadoDerecha">
                                        <div class="card-body text-center">
                                            <p class="card-text">Coronavirus: eventos cancelados</p>
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
                                            src="http://lorempixel.com/output/nightlife-q-c-404-179-9.jpg" alt=""
                                            width="70%" height="200">
                                        <div class="carousel-caption txtTop txtCarrousel">
                                            <h3>titular</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="noticia.php">
                                        <img src="http://lorempixel.com/output/abstract-q-c-404-179-7.jpg"
                                            class="img-fluid" alt="" width="70%" height="200">
                                        <div class="carousel-caption txtTop txtCarrousel">
                                            <h3>titular</h3>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="noticia.php">
                                        <img src="http://lorempixel.com/output/people-q-c-404-179-7.jpg"
                                            class="img-fluid" alt="" width="70%" height="200">
                                        <div class="carousel-caption txtTop txtCarrousel">
                                            <h3>titular</h3>
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
                        <a href="noticiasMotor/subseccionRally/n1R.php" class="enlaceNoticia">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-lg-4">
                                    <img src="../Fase3/noticiasMotor/img/wrc400.jpg"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="card-body">
                                        <h3 class="card-title indexNoticiaTitulo">WRC: Bottas quiere correr el Rally del Ártico tras acabar sexto en Finlandia</h3>
                                        <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualización hace 38 min</small></p>
                                        <p class="card-text indexNoticiaTexto">Valtteri Bottas finalizó sexto en el Rally del Ártico en Finlandia que formará parte del Mundial en 2021, y no descarta competir en él ya que la pretemporada de F1 no arrancará hasta marzo.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card cardArticulo tarjetaNoticiaApartado">
                        <a href="noticiasMotor/subseccionRally/n3R.php" class="enlaceNoticia ">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-lg-4">
                                    <img src="../Fase3/noticiasMotor/img/naniRoma400.jpg"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="card-body">
                                        <h3 class="card-title indexNoticiaTitulo">Nani Roma, 5º en su 25º Dakar: "Volveremos más fuertes en 2022"</h3>
                                        <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualización hace 39 min</small></p>
                                        <p class="card-text indexNoticiaTexto">Nani Roma y Alex Winocq lograron cerrar el top 5 del Dakar 2021 en coches en el estreno del equipo Bahrain Raid Xtreme y su BRX T1.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card cardArticulo tarjetaNoticiaApartado">
                        <a href="noticiasMotor/subseccionRally/n4R.php" class="enlaceNoticia">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-lg-4">
                                    <img src="../Fase3/noticiasMotor/img/dakarJuego400.jpg"
                                        class="card-img" alt="...">
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <div class="card-body">
                                        <h3 class="card-title indexNoticiaTitulo">El Dakar tendrá nuevo videojuego: primeros detalles</h3>
                                        <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualización hace 56 min</small></p>
                                        <p class="card-text indexNoticiaTexto">El estudio portugués Saber Porto –ex BigMoon– está desarrollando un nuevo videojuego oficial de mundo abierto del Rally Dakar con muchas novedades.</p>
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