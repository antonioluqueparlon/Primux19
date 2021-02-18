<?php include("includes/a_config.php"); ?>
<?php require("crud/Controller/UsuarioController.php"); ?>
<!DOCTYPE html>
<html>



<head>
  <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

  <?php include("includes/navigation.php"); ?>


  <main class="indexTT">
    <section class="noticiasDestacadas ">
      <div class="row">
        <?php
        
        //PARA PÁGINA PRINCIPAL RECUPERAMOS 4 NOTICIAS DE MANERA ALEATORIA
        $noticia = NoticiaController::recuperarTodasNoticias();
        foreach ($noticia as $values) {
          //echo $values->enlace;
        ?>
          <div class="col-md-3 tarjetaUltimasNOticias ">
            <a href="noticia.php?id=<?php echo $values->id; ?>" class="enlaceNoticia">
              <div class="card-content card-contentIndex tarjetaUltimasNOticias">
                <div class="card-img card-imgIndex ">
                  <img class="imagenTarjetaIndex imgUltimasNoticias" src="<?php echo $values->imagen; ?>" alt="">
                </div>
                <div class="card-desc card-descIndex ">
                  <h3><?php echo $values->titulo; ?></h3>
                  <p><?php echo $values->descripcion; ?></p>
                </div>
            </a>
          </div>
      </div>
    <?php
        }
    ?>


    </section>


    

      <section class="otrasNoticias">
        <div class="row otrasNoticiasH1">
          <h1>Otras Noticias</h1>
        </div>


        <div id="carouselwithIndicators" class="carousel slide w-100" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <?php
    //PARA PÁGINA PRINCIPAL RECUPERAMOS 4 NOTICIAS DE MANERA ALEATORIA
    $noticiaCarrusel = NoticiaController::buscarNoticiaRandom();
    $noticiaCarrusel2 = NoticiaController::buscarNoticiaRandom();
    $noticiaCarrusel3 = NoticiaController::buscarNoticiaRandom();

    ?>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href="noticia.php?id=<?php echo $noticiaCarrusel->id; ?>" class="enlaceNoticia">
                <img class="d-block w-100 carrouselImg" src="<?php echo $noticiaCarrusel->imagen ?>" alt="First slide">
                <div class="carousel-caption  d-md-block">
                  <div class="subtitleCar">
                    <h3><?php echo $noticiaCarrusel->titulo ?></h3>
                    <p><?php echo $noticiaCarrusel->descripcion ?></p>
                  </div>
                </div>
            </div>
          <?php
        
          ?>


          <div class="carousel-item">
            <a href="noticia.php?id=<?php echo $noticiaCarrusel2->id; ?>" class="enlaceNoticia">
              <img class="d-block w-100 carrouselImg" src="<?php echo $noticiaCarrusel2->imagen ?>" alt="Second slide">
              <div class="carousel-caption  d-md-block">
                <div class="subtitleCar">
                  <h3><?php echo $noticiaCarrusel2->titulo ?></h3>
                  <p><?php echo $noticiaCarrusel2->titulo ?></p>
                </div>
              </div>
          </div>

          <div class="carousel-item">
            <a href="noticia.php?id=<?php echo $noticiaCarrusel3->id; ?>" class="enlaceNoticia">
              <img class="d-block w-100 carrouselImg" src="<?php echo $noticiaCarrusel3->imagen ?>" alt="Second slide">
              <div class="carousel-caption  d-md-block">
                <div class="subtitleCar">
                  <h3><?php echo $noticiaCarrusel3->titulo ?></h3>
                  <p><?php echo $noticiaCarrusel3->titulo ?></p>
                </div>
              </div>
          </div>


          </div>
          <a class="carousel-control-prev" href="#carouselwithIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselwithIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </div>
      </section>



      <section class="ultimasNoticias">

        <h1>Últimas Noticias</h1>
        <?php
        $noticiasUltimas = NoticiaController::recuperarNoticiasUltimasNoticias();
        foreach ($noticiasUltimas as $values) {
        ?>

          <div class="card cardArticulo">
            <a href="noticia.php?id=<?php echo $values->id; ?>" class="enlaceNoticia">
              <div class="row no-gutters">
                <div class="col-md-12 col-lg-4">
                  <img src="<?php echo $values->imagen; ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h3 class="card-title indexNoticiaTitulo"><?php echo $values->titulo; ?></h3>
                    <p class="card-text indexNoticiaTimer"><small class="text-muted"><?php echo $values->fecha; ?></small></p>
                    <p class="card-text indexNoticiaTexto"><?php echo $values->descripcion; ?></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php
        }
        ?>

      </section>

  </main>





  <?php include("includes/footer.php"); ?>

</body>

</html>