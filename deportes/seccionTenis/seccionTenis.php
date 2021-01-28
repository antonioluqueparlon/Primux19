<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
</head>

<body>

    <!--<?php //include("includes/design-top.php"); 
        ?>-->
    <?php include("../includes/navigation.php"); ?>
    <?php include("../includes/subNavigationDeportes.php"); ?>


    <main>
        <section class="ultimasNoticias claseSeccion">

            <h1>Últimas Noticias</h1>

            <div class="card cardArticulo">
                <a href="../noticiasDeportes/noticiaViajeOpenAustralia.php" class="enlaceNoticia">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="../../img/imgDeportes/nadal.jpg" class="card-img imgApartadoNoticias" alt="Nadal aeropuerto">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title indexNoticiaTitulo">Nadal, Djokovic y Thiem volaron juntos desde Barcelona</h4>
                                <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualizacion: 18/01/2021</small></p>
                                <p class="card-text indexNoticiaTexto">Los tres primeros del ranking llegaron este jueves a Adelaida, donde tendrán su particular cuarentena con las tres primeras de la WTA y Serena y jugarán una exhibición. </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="card cardArticulo">
                <a href="../noticiasDeportes/noticiaCuarentenaDjokovic.php" class="enlaceNoticia">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="../../img/imgDeportes/djokovic.jpg" class="card-img imgApartadoNoticias" alt="Djokovic">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title indexNoticiaTitulo">Australia niega la petición de Djokovic para la cuarentena</h4>
                                <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualizacion: 18/01/2021</small></p>
                                <p class="card-text indexNoticiaTexto"> "No hay trato especial para nadie" fue la respuesta que recibió el serbio.
                                El serbio pidió que se relajasen las medidas de cuarentena para los participantes en el torneo pero Daniel Andrews confirmó que rechazaron las demandas del tenista de Belgrado. </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
        </section>

    </main>

    <?php include("../includes/footer.php"); ?>

</body>

</html>