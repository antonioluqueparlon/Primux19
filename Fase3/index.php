<?php include("./includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("./includes/head-tag-contents.php");?>
</head>
<body>

<?php include("./includes/navigation.php");?>


<main class="indexTT">
<section class="noticiasDestacadas">
        <div class="row">
            <div class="col-md-3">
            <a href="apartado.php" class="enlaceNoticia">
                <div class="card-content card-contentIndex">
                    <div class="card-img card-imgIndex">
                        <img class="imagenTarjetaIndex" src="https://placeimg.com/380/230/nature" alt="">
                    </div>
                    <div class="card-desc card-descIndex">
                        <h3>Noticia 1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam</p> 
                    </div>
                </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-content card-contentIndex">
                <a href="apartado.php" class="enlaceNoticia">
                    <div class="card-img card-imgIndex">
                        <img class="imagenTarjetaIndex" src="https://placeimg.com/380/230/animals" alt="">
                    </div>
                    <div class="card-desc card-descIndex">
                        <h3>Noticia 2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam</p>
                    </div>
                </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-content card-contentIndex">
                <a href="apartado.php" class="enlaceNoticia">
                    <div class="card-img card-imgIndex">
                        <img class="imagenTarjetaIndex" src="https://placeimg.com/380/230/tech" alt="">
                    </div>
                    <div class="card-desc card-descIndex">
                        <h3>Noticia 3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam</p> 
                    </div>
                </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-content card-contentIndex">
                <a href="apartado.php" class="enlaceNoticia">
                    <div class="card-img card-imgIndex">
                        <img class="imagenTarjetaIndex" src="https://placeimg.com/380/230/food" alt="">
                    </div>
                    <div class="card-desc card-descIndex">
                        <h3>Noticia 4</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                            voluptas totam</p>  
                    </div>
                  </a>
                </div>
        </div>
    </div>
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
          <img class="d-block w-100 carrouselImg" src="https://placeimg.com/1200/600/food" alt="First slide">
          <div class="carousel-caption  d-md-block">
          <div class="subtitleCar">
          <h3>Noticia 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi recusandae fugiat obcaecati hic saepe totam illo eum aliquam.</p>
          </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 carrouselImg" src="https://placeimg.com/1200/600/tech" alt="Second slide">
          <div class="carousel-caption  d-md-block">
          <div class="subtitleCar">
          <h3>Noticia 2</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi recusandae fugiat obcaecati hic saepe totam illo eum aliquam.</p>
          </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 carrouselImg" src="https://placeimg.com/1200/600/money" alt="Third slide">
          <div class="carousel-caption  d-md-block">
          <div class="subtitleCar">
            <h3>Noticia 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi recusandae fugiat obcaecati hic saepe totam illo eum aliquam.</p>
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
<a href="#" class="enlaceNoticia">
  <div class="row no-gutters">
    <div class="col-md-12 col-lg-4">
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
<div class="card cardArticulo">
<a href="#" class="enlaceNoticia">
  <div class="row no-gutters">
    <div class="col-md-12 col-lg-4">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFGi3dVsGtzx7EGSC8-GK7OSgaScqlAa396g&usqp=CAU" class="card-img" alt="...">
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
<div class="card cardArticulo">
  <a href="#" class="enlaceNoticia">
  <div class="row no-gutters">
    <div class="col-md-12 col-lg-4">
      <img src="https://i.blogs.es/187a45/iphone-11-pro-02/450_1000.jpg" class="card-img" alt="...">
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
</section>

</main>

<?php include("includes/footer.php");?>

</body>
</html>