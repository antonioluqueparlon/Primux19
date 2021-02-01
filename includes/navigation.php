<script>
  window.onscroll = function() {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      document.getElementById("navbar").style.padding = "30px 10px";
      document.getElementById("logo").style.fontSize = "25px";
    } else {
      document.getElementById("navbar").style.padding = "80px 10px";
      document.getElementById("logo").style.fontSize = "35px";
    }
  }
</script>
<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="img/logo2.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse navText" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="apartadoTecnologia.php">
          <p class="aNav">Tecnología</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="apartadoDeportes.php">
          <p class="aNav">Deportes</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="apartadoMotor.php">
          <p class="aNav">Motor</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="apartadoVideojuegos.php">
          <p class="aNav">VideoJuegos</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Juegos.php">
          <p class="aNav">Juegos</p>
        </a>
      </li>
    </ul>
    <!-- barra de busqueda -->

    <?php

    include_once('conexion.php');


    if (!empty($_GET['busqueda'])) {
      $busqueda = $_GET['busqueda'];
      $sql = "SELECT * FROM noticia WHERE titulo LIKE '%" . $busqueda . "%'";
      //echo '< class="single">';
      $result = mysqli_query($conn, $sql);
      while ($item = mysqli_fetch_assoc($result)) {
        echo '';
      }
    }


    ?>
    <form class="form-inline my-2 my-lg-0" action="busqueda.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Buscar" name="busqueda" id="search">
      <button class="btn my-2 my-sm-0 btnNav" type="submit"><i class="fa fa-search"></i></button>
      <ul id="response"></ul>
    </form>





    <a href="login.php"><button class="btn  my-2 my-sm-0 btnNav"><i class="fa fa-user"></i> Entrar</button></a>
  </div>
</nav>

<!--
<div class="container">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Index") { ?>active<?php } ?>" href="index.php">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "About") { ?>active<?php } ?>" href="about.php">About Us</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") { ?>active<?php } ?>" href="contacto.php">Contact</a>
	  </li>
	</ul>
</div>
-->

<!-- MENSAJE COOKIES -->
<div class="modal fade cookiealert" id="cookiespopup" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">


        <div class="modal_content">

          <div class="cookies_popup_body">
            <h3 class="text-titleNuevo">Nosotros valoramos tu privacidad</h3>
            <hr>
            <p class="colortextocookie text-justify">En nuestro sitio web utilizamos cookies propias y terceros (Google Analytics) para mejorar tu experiencia de usuario y recoger datos estadísticos sobre el uso de nuestra web por parte de los usuarios. Las cookies se asocian únicamente al navegador que está utilizando, de modo que no se almacena ningún tipo de datos personales sobre el usuario que visita nuestra página web. Usted puede configurar su navegador para que notifique y/o rechace la instalación de las cookies, sin que ello perjudique la posibilidad del usuario de poder acceder a las distintas zonas de la web. Si navegas por nuestra web, estarás aceptando el uso de las cookies en las condiciones establecidas en esta Política de Cookies. Esta política puede ser actualizada, por lo que te invitamos a revisarla de forma regular.
            </p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6">
            <div class="cpb_btns">
              <a href="http://www.interior.gob.es/politica-de-cookies" target="_blank" class="enlacePrimario">
                Leer Más
              </a>
            </div>
          </div>

          <div class="col-md-6">
            <div class="cpb_btns">
              <button type="button" class="btn btn-secundary btn-block acceptcookies" aria-label="Close">
                Aceptar
              </button>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>

<script src="./js/cookiealertTerminos.js"></script>
<script>
  startApp();
</script>