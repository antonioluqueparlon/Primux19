<script>

window.onscroll = function() {scrollFunction()};

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
          <p class="aNav">Motor</p></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="apartadoVideojuegos.php">
          <p class="aNav">VideoJuegos</p>
          </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
      <button class="btn my-2 my-sm-0 btnNav" type="submit"><i class="fa fa-search"></i></button>
    </form>
    <a href="login.php"><button class="btn  my-2 my-sm-0 btnNav"><i class="fa fa-user"></i> Entrar</button></a>
  </div>
</nav>

<!--
<div class="container">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Index") {?>active<?php }?>" href="index.php">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>" href="about.php">About Us</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?php if ($CURRENT_PAGE == "Contact") {?>active<?php }?>" href="contacto.php">Contact</a>
	  </li>
	</ul>
</div>
-->