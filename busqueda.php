<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>
<script>

</script>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <?php include("includes/subNavigationVideojuegos.php"); ?>


    <main>
        <section class="ultimasNoticias claseSeccion">



            <h1>Resultados de la busqueda:"<?php echo $busqueda[0] ?>" </h1>

            <?php
            $result = mysqli_query($conn, $sql);
            $total = mysqli_num_rows(mysqli_query($conn, $sql));
            while ($item = mysqli_fetch_assoc($result)) {
                

            ?>

                <div class="card cardArticulo">
                    <a href="<?php echo $item['enlace'] ?>" class="enlaceNoticia">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?php echo $item['imagen'] ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h4 class="card-title indexNoticiaTitulo"><?php echo $item['titulo'] ?></h4>
                                    <p class="card-text indexNoticiaTimer"><small class="text-muted">Ultima actualización: <?php echo $item['fecha'] ?></small></p>
                                    <p class="card-text indexNoticiaTexto"><?php echo $item['descripcion'] ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php }
            if ($total == 0) {
                echo "<br>";
                echo "<span style='color:red' margin:auto>No se han encontrado noticias </span>";
            } ?>

        </section>

    </main>



</body>

<?php include("includes/footer.php"); ?>

</html>