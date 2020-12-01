<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/navigation.php");?>
<?php include("includes/subNavigation.php");?>


<main>
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <h1>APARTADO</h1>
          <div class="card img-fluid" >
            <a href="noticia.php">
            <img class="card-img-top img-fluid" src="http://lorempixel.com/output/sports-q-c-320-180-9.jpg" alt="Card image" >
            <div class="card-img-overlay d-flex align-items-end" >
              <p class="card-text font-weight-bold txtTop ">Lorem ipsum dolor sit amet</p>
            </div>
            </a>
          </div>
      </div>
      
      <!--ÚLTIMA NOTICIAS QUE APARECEN A LA IZQUIERDA EN PANTALLAS GRANDES Y DESAPARECE EN PANTALLAS DE MÓVIL-->
     <div class="col-lg-4 col-md-12 d-sm-none d-none d-md-block">
     <h1>Últimas noticias</h1>
        <div class="row">
          <div class="col-md-12">
            <div class="card bg-light cardApartadoDerecha">
              <div class="card-body text-center">
                <p class="card-text">ASKHAPSGIHWOGOGWPONG</p>
              </div>  
            </div> 
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card bg-light cardApartadoDerecha">
              <div class="card-body text-center">
                <p class="card-text">ASKHAPSGIHWOGOGWPONG</p>
              </div>  
            </div> 
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card bg-light cardApartadoDerecha">
              <div class="card-body text-center">
                <p class="card-text">ASKHAPSGIHWOGOGWPONG</p>
              </div>  
            </div> 
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 d-lg-none d-xl-block">
            <div class="card bg-light cardApartadoDerecha">
              <div class="card-body text-center">
                <p class="card-text">ASKHAPSGIHWOGOGWPONG</p>
              </div>  
            </div> 
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 d-lg-none d-xl-block">
            <div class="card bg-light cardApartadoDerecha">
              <div class="card-body text-center">
                <p class="card-text">ASKHAPSGIHWOGOGWPONG</p>
              </div>  
            </div> 
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
            <img class="img-fluid" src="http://lorempixel.com/output/nightlife-q-c-404-179-9.jpg" alt="" width="70%" height="200">
            <div class="carousel-caption txtTop txtCarrousel">
            <h3>titular</h3>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="http://lorempixel.com/output/abstract-q-c-404-179-7.jpg"  class="img-fluid" alt="" width="70%" height="200">
            <div class="carousel-caption txtTop txtCarrousel">
              <h3>titular</h3>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="http://lorempixel.com/output/people-q-c-404-179-7.jpg"  class="img-fluid" alt="" width="70%" height="200">
            <div class="carousel-caption txtTop txtCarrousel">
              <h3>titular</h3>
            </div>   
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
      <a href="#" class="enlaceNoticia">
        <div class="row no-gutters">
          <div class="col-md-12 col-lg-4">
            <img src="https://as01.epimg.net/meristation/imagenes/2020/06/17/betech/1592423233_521074_1592423565_noticia_normal_recorte1.jpg" class="card-img" alt="...">
          </div>
          <div class="col-md-12 col-lg-8">
          <div class="card-body">
              <h3 class="card-title indexNoticiaTitulo">Card title</h3>
              <p class="card-text indexNoticiaTimer"><small class="text-muted">Last updated 3 mins ago</small></p>
              <p class="card-text indexNoticiaTexto">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="card cardArticulo tarjetaNoticiaApartado">
      <a href="#" class="enlaceNoticia">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="https://as01.epimg.net/meristation/imagenes/2020/06/17/betech/1592423233_521074_1592423565_noticia_normal_recorte1.jpg" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
          <div class="card-body">
              <h3 class="card-title indexNoticiaTitulo">Card title</h3>
              <p class="card-text indexNoticiaTimer"><small class="text-muted">Last updated 3 mins ago</small></p>
              <p class="card-text indexNoticiaTexto">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="card cardArticulo tarjetaNoticiaApartado">
      <a href="#" class="enlaceNoticia">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="https://as01.epimg.net/meristation/imagenes/2020/06/17/betech/1592423233_521074_1592423565_noticia_normal_recorte1.jpg" class="card-img" alt="...">
          </div>
          <div class="col-md-8">
          <div class="card-body">
              <h3 class="card-title indexNoticiaTitulo">Card title</h3>
              <p class="card-text indexNoticiaTimer"><small class="text-muted">Last updated 3 mins ago</small></p>
              <p class="card-text indexNoticiaTexto">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
