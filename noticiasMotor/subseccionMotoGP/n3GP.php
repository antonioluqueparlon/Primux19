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
                    <h1 class="titNoticia ">Oficial: Adrián Fernández por Alonso López con Biaggi</h1>
                </div>
                <div class="col-12">
                    <img src="../img/fernandez.jpg" alt="imgNoticia"
                        class="imgNoticia img-fluid">
                    <p><small class="text-muted">Antonio Pérez 02/12/20</small></p>
                    <!--IMAGEN ANCHO DE 1150 ancho y 900 largo -->
                </div>
                <div class="row cuerpoNoticia">
                    <div class="col-12">
                        <p>Husqvarna hizo oficial que Adrián Fernández, hermano de Raúl, ocupará la plaza de Alonso López en el equipo de Biaggi en el Mundial de Moto3 de 2021.</p>
                        <p>López había sido renovado por el conjunto del expiloto romano y hasta eso se hizo público, pero la escuadra con sede en Mónaco ha decidido despedir a Alonso y firmar a 'Pitito', como es conocido.</p>
                        <p>Fernández compitió el año pasado en el Mundial júnior de Moto3 en el FIM CEV Repsol. Acabó séptimo con 79 puntos. Ya debutó en el Mundial en el Gran Premio de Portugal 2020, en Portimao. Lo hizo de la mano del equipo Snipers sustituyendo a Filip Salac a bordo de una Honda. Acabó 18º. Ahora llevará una Husqvarna, idéntica a la KTM.</p>

                        <img src="../img/moto.png" alt="imgNoticia"
                        class="imgNoticia img-fluid"><p><small class="text-muted">Adrian, en Portimao</small></p></br>

                        <p>Alonso, por su parte, ya se ha repuesto del mazazo moral de verse fuera cuando estaba confirmado y piensa seguir corriendo. Tiene ofertas de distintas categorías y busca un proyecto atractivo para explotar el talento que ya demostró en el pasado. Su reto es volver al Mundial cuanto antes y no descarta pasar por un buen equipo en el FIM CEV de Moto2 para lograrlo.</p>
                    </div>
                </div>
                <!-- TARJETAS CON NOTICIAS APILADOS DE 2 EN 2-->
                <div class="col-12">
                    <h2 class="titNoticia">Otras noticias</h2>
                </div>
                <div class="col-sm-6">
                    <a href="n2F1.php" class="linkNoticia">
                        <div class="card divOtrasNoticias">
                            <div class="row no-gutters">
                                <div class="col-md-4 col-sm-12">
                                    <img src="../img/mazepin280.jpg" class="img-fluid card-img" alt="">
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="card-block px-2">
                                        <h4 class="card-title titNoticia">Mazepin y su único disparo en F1</h4>
                                        <p class="card-text">Nikita Mazepin (Moscú, 1999) es consciente de que tendrá una sola oportunidad para demostrar su valía en la F1.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="n3F1.php" class="linkNoticia">
                        <div class="card divOtrasNoticias ">
                            <div class="row no-gutters">
                                <div class="col-md-4 col-sm-12">
                                    <img src="../img/Hamilton280.jpg" class="img-fluid card-img" alt="">
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="card-block px-2">
                                        <h4 class="card-title titNoticia">La renovación de Hamilton</h4>
                                        <p class="card-text ">Hablamos sobre el retraso en el anuncio de la renovación de contrato entre Lewis Hamilton y Mercedes AMG F1</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="n4F1.php" class="linkNoticia">
                        <div class="card divOtrasNoticias">
                            <div class="row no-gutters">
                                <div class="col-md-4 col-sm-12">
                                    <img src="../img/ferrari280.jpg" class="img-fluid card-img" alt="">
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="card-block px-2">
                                        <h4 class="card-title titNoticia">Nuevo motor del ferrari SF21</h4>
                                        <p class="card-text">Ganancias térmicas, eléctricas y de refrigeración</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="../subseccionFormulaE/n1FE.php" class="linkNoticia">
                        <div class="card divOtrasNoticias ">
                            <div class="row no-gutters">
                                <div class="col-md-4 col-sm-12">
                                    <img src="../img/formulae280.jpg" class="img-fluid card-img" alt="">
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="card-block px-2">
                                        <h4 class="card-title titNoticia">La salida de Audi y BMW de la Fórmula E abre nuevas puertas</h4>
                                        <p class="card-text ">Eso provocará la llegada de nuevos fabricantes</p>
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
                                    <div class="card mb-2">
                                        <img class="card-img-top"
                                            src="../img/covid320.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Coronavirus: eventos cancelados</h4>
                                            <p class="card-text">La pandemia de COVID-19 (coronavirus) ya ha obligado a modificar los calendarios 2021 de F1, MotoGP y más...</p>
                                            <a href="../subseccionFormulaE/n2FE.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top"
                                            src="../img/2021320.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">novedades para la temporada 2021 de Fórmula E</h4>
                                            <p class="card-text">Los MinEDrivers están listos para explicarte todas las actualizaciones para la temporada 2021 de Fórmula E.</p>
                                            <a href="../subseccionFormulaE/n3FE.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top"
                                            src="../img/alpine320.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Alpine estudia entrar en la Fórmula E junto a Lotus</h4>
                                            <p class="card-text">Alpine y Lotus están evaluando crear un equipo de Fórmula E, además de desarrollar un programa en el Mundial de Resistencia de la FIA (WEC).  </p>
                                            <a href="../subseccionFormulaE/n4FE.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top"
                                            src="../img/mclaren320.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">McLaren da un paso más para unirse a la Fórmula E</h4>
                                            <p class="card-text">McLaren Racing ha firmado un acuerdo con la Fórmula E para asegurarse la opción de unirse al campeonato eléctrico en 2022, con la nueva era Gen3.</p>
                                            <a href="../subseccionFormulaE/n5FE.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item">

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top"
                                            src="../img/vries320.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Muere Jan de Vries, el gran enemigo de Ángel Nieto</h4>
                                            <p class="card-text">Ángel Nieto no pudo sobrevivir a un grave accidente en Ibiza</p>
                                            <a href="../subseccionMotoGP/n1GP.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top"
                                            src="../img/motogp320.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Los test de pretemporada de MotoGP en Sepang se suspenden por el covid</h4>
                                            <p class="card-text">'Shakedown' (14 al 16 de febrero) y el primer test de pretemporada (19 al 21 de febrero) previstos ambos en Sepang (Malasia) para iniciar la temporada 2021 de MotoGP, quedan cancelados .</p>
                                            <a href="../subseccionMotoGP/n2GP.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top"
                                            src="../img/fernandez320.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Oficial: Adrián Fernández por Alonso López con Biaggi
</h4>
                                            <p class="card-text">Husqvarna hizo oficial que Adrián Fernández, hermano de Raúl, ocupará la plaza de Alonso López en el equipo de Biaggi en el Mundial de Moto3 de 2021.
</p>
                                            <a href="../subseccionMotoGP/n3GP.php" class="btn btn-primary linkNoticia">Ver más</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3" style="float:left">
                                    <div class="card mb-2">
                                        <img class="card-img-top"
                                            src="../img/dovizioso320.jpg"
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Dovizioso ya no oculta sus críticas a Ducati
</h4>
                                            <p class="card-text">Andrea Dovizioso no se corta verbalmente desde que no tiene equipo en MotoGP.</p>
                                            <a href="../subseccionMotoGP/n4GP.php" class="btn btn-primary linkNoticia">Ver más</a>
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
                            src="../img/usuario.jpg" alt="fotoPerf">
                    </div>
                    <div class="col-11 ">
                        <div class="row no-gutters">
                            <div class="col-12 "><small class="titNoticia">Pedro47</small>
                            </div>
                            <div class="col-12 ">Me gusta, sigan así.
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