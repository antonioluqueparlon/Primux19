<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <?php include("../includes/head-tag-contents.php"); ?>

  <script src="trex/juego.js"></script>


</head>

<body onload="inicializa()">
  <?php include("../includes/navigation.php"); ?>

  <main>
    <br>

    <h1>PARLON JUEGO</h1><br><br>
    <audio style="margin-left:700px" controls="controls">
      <source src="music/micancion.ogg" type="audio/ogg" />
      <source src="music/micancion.mp3" type="audio/mpeg" />
      Your browser does not support the audio element.
    </audio>

    <canvas id="canvas" width="700" height="300" style="border: 2px solid #000000"></canvas>

    

  </main>

  

  <!--Inclusion footer-->
  <?php include("../includes/footer.php"); ?>

</body>


</html>