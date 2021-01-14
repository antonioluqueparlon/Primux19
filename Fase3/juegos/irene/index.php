<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>

</head>

<body onload="Snake()">
    <?php include("../includes/navigation.php"); ?>

    <main>

        <canvas id="canvas" width="400" height="400"></canvas>
        <script src="https://code.jquery.com/jquery-2.1.0.js"></script>
        <script src="js/Block.js"></script>
        <script src="js/Apple.js"></script>
        <script src="js/Snake.js"></script>
        <script src="js/main.js"></script>



    </main>

    <!--Inclusion footer-->
    <?php include("../includes/footer.php"); ?>

</body>

</html>