<?php
require_once './crud/Modelo/Usuario.php';
require_once './crud/Modelo/Noticia.php';
require_once './crud/Controller/NoticiaController.php';
?>

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
  <a class="navbar-brand" href="index.php"><img src="img/logo2.png" alt="technoteam_logo"></a>
  <button aria-label="Logo" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
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
      <?php if (isset($_SESSION['rol'])){
          if ($_SESSION['rol']== "editor" | $_SESSION['rol']=="administrador"){
            ?>
            <li class="nav-item dropdown">
      <a class="nav-link  dropdown-toggle" href="#"  data-toggle="dropdown">
        <span class="aNav">Mis noticias</span>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="crearNoticia.php">Crear noticia</a>
        <a class="dropdown-item" href="noticiasUsuario.php">Ver mis noticias</a>
        
      </div>
    </li>
      
        <?php }
      } 
        ?>
    </ul>

    <!-- BARRA DE BUSQUEDA  -->

    <?php

    if (isset($_POST['buscar'])) {
      echo '';
    }

    ?>
    <form class="form-inline my-2 my-lg-0" id="form" action="busqueda.php" method="POST">
      <!-- busqueda.php -->
      <input aria-label="busqueda" class="form-control mr-sm-2" type="text" placeholder="Buscar" name="busqueda" id="search" label>
      <button class="btn my-2 my-sm-0 btnNav" name="buscar" type="submit"><i class="fa fa-search"></i>Buscar</button>
      <ul id="response"></ul>
    </form>




    <?php if (!isset($_SESSION['loginFinal'])) { ?>
      <a href="login.php"><button class="btn  my-2 my-sm-0 btnNav"><i class="fa fa-user"></i> Entrar</button></a>
    <?php } else {
    ?>
      <div class="dropdown">
        <a href="cuenta.php"><button class="btn  my-2 my-sm-0 btnNav"><i class="fa fa-user"></i> Mi Cuenta</button></a>
        <div class="dropdown-content">
          <a href="logout.php"><button class="btn  my-2 my-sm-0 btnNav">Cerrar Sesión</button></a>
        </div>
      </div>
    <?php } ?>


  </div>
</nav>


<!-- MENSAJE COOKIES -->
<div class="modal fade cookiealert" id="cookiespopup" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">


        <div class="modal_content">

          <div class="cookies_popup_body">
            <h3 class="text-titleNuevo">Nosotros valoramos tu privacidad <i class="fas fa-cookie-bite"></i></h3>
            <hr>
            <p class="colortextocookie text-justify">En nuestro sitio web utilizamos cookies propias y terceros (Google Analytics) para mejorar tu experiencia de usuario y recoger datos estadísticos sobre el uso de nuestra web por parte de los usuarios. Las cookies se asocian únicamente al navegador que está utilizando, de modo que no se almacena ningún tipo de datos personales sobre el usuario que visita nuestra página web. Usted puede configurar su navegador para que notifique y/o rechace la instalación de las cookies, sin que ello perjudique la posibilidad del usuario de poder acceder a las distintas zonas de la web. Si navegas por nuestra web, estarás aceptando el uso de las cookies en las condiciones establecidas en esta Política de Cookies. Esta política puede ser actualizada, por lo que te invitamos a revisarla de forma regular.
            </p>
          </div>
        </div>

        <div class="row">

          <div class="col-md-6">
            <div class="cpb_btns">
              <!--<a href="../terminoslegales.php" target="_blank" class="enlacePrimario btn btn-block btn-secundary btnNav"> -->
              <a href="http://www.interior.gob.es/politica-de-cookies" target="_blank" class="enlacePrimario btn btn-block btn-secundary btnNav">
                Leer Más sobre las cookies
              </a>
            </div>
          </div>

          <div class="col-md-6">
            <div class="cpb_btns">
              <button type="button" class="btn btn-secundary btn-block btnNav acceptcookies" aria-label="Close">
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


<?php if (isset($_SESSION['loginFinal'])) {
?>
  <div class="card cookie-alertNovedades">
    <div class="card-body">
      <h5 class="card-title">&#x1F36A;<strong>¿Quieres estar al día con nuestras noticias?</strong></h5>
      <p class="card-text text-justify">Acepta la cookie para recibir las últimas actualizacioens sobre las noticias a las que estés suscrito y disfrutar de una mejor experiencia en TechnoTeam</p>
      <div class="btn-toolbar justify-content-end">
        <a href="#" class="btn btn-secundary btn-block btnNav btn-link denie-cookiesNovedades">Denegar</a>
        <a href="#" class="btn btn-secundary btn-block btnNav accept-cookiesNovedades">Aceptar</a>
      </div>
    </div>
  </div>
  <script src="./js/cookiealertNovedades.js"></script>
<?php
}
?>