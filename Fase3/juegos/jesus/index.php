<?php include("../includes/a_config.php"); ?>

  
  <link rel="stylesheet" href="styleGameJesus.css"></link>
  <?php include("../includes/head-tag-contents.php"); ?>


<body onload="createBoard()">
  <?php include("../includes/navigation.php"); ?>

  <main>
    <br>

    <h1>JUEGO DE MEMORIA</h1><br><br>
    <!--div principal-->
  <div class="juego">
    <!--MARCADOR DE PUNTUACIÓN-->
  <h3 id="puntos">Puntuación:</h3><strong id="result"></strong>
  <!--div en el que irán añadiéndose las imágenes-->
    <div class="grid"></div>
    <img id="enhorabuena" src="imagesGame/a.png" style="display:none"/>
    </div>
    
    
    <script src="memorygame.js"></script>
    

    

  </main>

  

  <!--Inclusion footer-->
  <?php include("../includes/footer.php"); ?>

</body>


</html>