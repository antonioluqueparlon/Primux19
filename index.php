<?php include("includes/a_config.php"); ?>
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
          <a href="noticia.php?id=<?php echo $values->id;?>" class="enlaceNoticia">
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
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="noticiasMotor/subseccionFormulaE/n1FE.php" class="enlaceNoticia">
              <img class="d-block w-100 carrouselImg" src="noticiasMotor/img/formulae.jpg" alt="First slide">
              <div class="carousel-caption  d-md-block">
                <div class="subtitleCar">
                  <h3>La salida de Audi y BMW de la Fórmula E</h3>
                  <p>Eso provocará la llegada de nuevos fabricantes</p>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <a href="noticiasTecnologia/noticias/noticiaBugWindows.php" class="enlaceNoticia">
              <img class="d-block w-100 carrouselImg" src="https://i.blogs.es/02b07c/windows-10-bug/1366_2000.jpg" alt="Second slide">
              <div class="carousel-caption  d-md-block">
                <div class="subtitleCar">
                  <h3>Windows 10 tiene un bug que puede corromper tu disco duro</h3>
                  <p>El investigador de seguridad Jonas L ha descubierto una vulnerabilidad en el sistema de archivos NTFS de Windows que permite corromper un disco con un simple comando de una sola línea.</p>
                </div>
              </div>
          </div>
          <div class="carousel-item">
            <a href="noticiasVideojuegos/parlon/noticiaMarioKart.php" class="enlaceNoticia">
              <img class="d-block w-100 carrouselImg" src="noticiasVideojuegos/parlon/img/mariokart.jpg" alt="Third slide">
              <div class="carousel-caption  d-md-block">
                <div class="subtitleCar">
                  <h3>Mario Kart 8 se reinventa</h3>
                  <p>Una bici estática y el anillo de Ring Fit es todo lo que necesita este jugador para competir en Mario Kart 8</p>
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

      <div class="card cardArticulo">
        <a href="noticiasTecnologia/noticias/noticiaFaceTime.php" class="enlaceNoticia">
          <div class="row no-gutters">
            <div class="col-md-12 col-lg-4">
              <img src="https://i.blogs.es/c93fab/girl-3718515_1920/1366_2000.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title indexNoticiaTitulo">El terrible error de face time</h3>
                <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualización hace 1 min</small></p>
                <p class="card-text indexNoticiaTexto">Signal, FB Messenger y Google Duo sufrían un error similar al de FaceTime: con una llamada se podía espiar a otros</p>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="card cardArticulo">
        <a href="noticiasVideojuegos/parlon/noticiaGraficas2.php" class="enlaceNoticia">
          <div class="row no-gutters">
            <div class="col-md-12 col-lg-4">
              <img src="noticiasVideojuegos/parlon/img/rtx3060.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title indexNoticiaTitulo">La tarjeta gráfica de Nvidia RTX 30 más barata</h3>
                <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualización hace 3 min</small></p>
                <p class="card-text indexNoticiaTexto">Tal y como estaba previsto,Nvidia ha presentado su nueva gama de tarjetas gráficas de la familia RTX 3060.</p>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="card cardArticulo">
        <a href="noticiasMotor/subseccionRally/n1R.php" class="enlaceNoticia">
          <div class="row no-gutters">
            <div class="col-md-12 col-lg-4">
              <img src="noticiasMotor/img/bottas400.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title indexNoticiaTitulo">WRC: Bottas quiere correr el Rally del Ártico tras acabar sexto en Finlandia</h3>
                <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualización hace 9 min</small></p>
                <p class="card-text indexNoticiaTexto">Valtteri Bottas finalizó sexto en el Rally del Ártico en Finlandia que formará parte del Mundial en 2021, y no descarta competir en él ya que la pretemporada de F1 no arrancará hasta marzo.</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </section>

  </main>




  <?php include("includes/footer.php"); ?>

</body>

</html>