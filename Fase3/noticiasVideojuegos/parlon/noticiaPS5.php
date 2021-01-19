<?php include("../includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("../includes/head-tag-contents.php"); ?>
    <script src="scriptReproductor.js"></script>
    
</head>

<body>

    <?php include("../includes/navigation.php"); ?>

    <main>
        <section class="noticia">
            <div class="row ">
                <div class="col-12">
                    <h1 class="titNoticia ">LANZAMIENTO PS5</h1>
                </div>
                <div class="col-12">
                    <img src="img/consola.jpg" alt="imgNoticia" class="imgNoticia img-fluid">
                    <div class="card-img-overlay d-flex align-items-end">
                        <p class="card-text font-weight-bold txtTop">La nueva generacion de consolas despega con el lanzamiento de PS5</p>
                    </div>


                    <br>
                    <!--IMAGEN ANCHO DE 1150 ancho y 900 largo -->

                </div>
                <div class="row cuerpoNoticia">
                    <div class="col-12">
                        <p><small class="text-muted">Antonio Luque 02/12/20</small></p>

                        <h1>¿Qué precio va a tener PS5?</h1>
                        <p>La nueva <strong>PS5</strong> estará disponible en dos versiones, una con lector de Blu-ray disponible por <a href="https://www.vidaextra.com/redirect?url=https%3A%2F%2Fwww.amazon.es%2FSony-PlayStation-Consola-5%2Fdp%2FB08H93ZRK9&category=listas">499,99 euros</a>, y una edición digital sin lector de discos por <a href="https://www.vidaextra.com/redirect?url=https%3A%2F%2Fwww.amazon.es%2FSony-PlayStation-Consola-5%2Fdp%2FB08H98GVK8%2F&category=listas">399,99 euros</a>. Este es, por descontado, el precio oficial que marca Sony, pero poco a poco es de esperar que vayan surgiendo promociones y packs.</p>
                        <!-- BREAK 3 -->
                        <h1>¿Qué modelos va a haber de PS5?</h1>

                        <p>Tal y como comentábamos unas líneas más arriba, <strong>PS5</strong> llegará en dos versiones, la <strong>digital</strong> y otra con <strong>lector de discos</strong>, que por lo demás mantendrán idénticas configuraciones de almacenamiento con un disco SSD de 825 GB.</p>
                        <!-- BREAK 4 -->

                        <h1>¿Cómo es el diseño de PS5?</h1>

                        <p>El diseño de <strong>PS5</strong> parece hecho a medida para garantizar que la máquina sobrevive al calor generado por su potencia. Con paredes desmontables para limpiar mejor la suciedad interna o acceder al cambio de disco duro.</p>
                        <!-- BREAK 5 -->

                        <div class="article-asset-image article-asset-large">
                            <div class="asset-content">
                                <img class="sf-lazy " data-sf-srcset="https://i.blogs.es/634b13/ps5-lado/450_1000.jpeg 450w, https://i.blogs.es/634b13/ps5-lado/650_1200.jpeg 681w,https://i.blogs.es/634b13/ps5-lado/1024_2000.jpeg 1024w, https://i.blogs.es/634b13/ps5-lado/1366_2000.jpeg 1366w," data-sf-src="https://i.blogs.es/634b13/ps5-lado/450_1000.jpeg" alt="Ps5 Lado">
                                <noscript><img alt="Ps5 Lado" class="" src="https://i.blogs.es/634b13/ps5-lado/1366_2000.jpeg"></noscript>

                            </div>
                        </div>
                        <p>En su mayor caso, el de la edición con unidad óptica, las <strong>medidas</strong> de <strong>PS5</strong> llegan hasta los 39 x 10,4 x 26 cm, quedándose en 39 x 9,2 x 26 cm en el caso de las dimensiones de la edición digital. Ambas montan puerto de HDMI, Ethernet, Wi-Fi 6, tres puertos USB-A y uno USB-C.</p>
                        <!-- BREAK 6 -->

                        <div id="video-container">
                            <!-- Video -->
                            <video id="video" width="1040" height="365">
                                <source src="../videos/ps5hardware.webm" type="video/webm">
                                <source src="../videos/ps5hardware.ogv" type="video/ogv">
                                <source src="../videos/ps5hardware.mp4" type="video/mp4">
                                <p>
                                    Your browser doesn't support HTML5 video.
                                    <a href="../videos/ps5hardware.mp4">Download</a> the video instead.
                                </p>
                            </video>
                            <!-- Video Controls -->
                            <div id="video-controls">
                                <button type="button" id="play-pause">Reproducir</button>
                                <input type="range" id="seek-bar" value="0">
                                <button type="button" id="mute">Silenciar</button>
                                Nivel Volumen<input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
                                <button type="button" id="full-screen">Pantalla Completa</button></button>
                            </div>
                        </div>

                        <br>


                        <h1>PS5: todas las características técnicas</h1>
                        <br>
                        <p>A continuación os dejamos con las características técnicas de la <strong>PS5</strong>:</p>
                        <div class="article-asset-table article-asset-normal m-hr-scroll">
                            <div class="asset-content">
                                <table class="tabla-datos">
                                    <thead>
                                        <tr>
                                            <th class="align-left">
                                                <p><br></p>
                                            </th>
                                            <th class="align-left">
                                                <p>PS5</p>
                                            </th>
                                            <th class="align-left">
                                                <p>Ps5 digital edition</p>
                                            </th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="align-left">
                                                <p>CPU</p>
                                            </th>
                                            <td class="align-left">
                                                <p>8 x núcleos Zen 2 a 3,5 GHz</p>
                                            </td>
                                            <td class="align-left">
                                                <p>8 x núcleos Zen 2 a 3,5 GHz</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="align-left">
                                                <p>GPU</p>
                                            </th>
                                            <td class="align-left">
                                                <p>10,28 TFLOPS<br>
                                                    36 CUs a 2,23 GHz</p>
                                            </td>
                                            <td class="align-left">
                                                <p>10,28 TFLOPS 36 CUs a 2,23 GHz</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="align-left">
                                                <p>ARQUITECTURA</p>
                                            </th>
                                            <td class="align-left">
                                                <p>AMD RDNA 2 personalizada</p>
                                            </td>
                                            <td class="align-left">
                                                <p>AMD RDNA 2 personalizada</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="align-left">
                                                <p>MEMORIA / INTERFAZ</p>
                                            </th>
                                            <td class="align-left">
                                                <p>16 GB GDDR6 / 256-bit</p>
                                            </td>
                                            <td class="align-left">
                                                <p>16 GB GDDR6 / 256-bit</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="align-left">
                                                <p>ANCHO DE BANDA DE LA MEMORIA</p>
                                            </th>
                                            <td class="align-left">
                                                <p>448 GB/s</p>
                                            </td>
                                            <td class="align-left">
                                                <p>448 GB/s</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="align-left">
                                                <p>ALMACENAMIENTO INTERNO</p>
                                            </th>
                                            <td class="align-left">
                                                <p>825 GB SSD personalizado</p>
                                            </td>
                                            <td class="align-left">
                                                <p>825 GB SSD personalizado</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="align-left">
                                                <p>TASAS DE TRANSFERENCIA</p>
                                            </th>
                                            <td class="align-left">
                                                <p>5,5 GB/s (datos en bruto)<br>
                                                    8-9 GB/s (datos comprimidos)</p>
                                            </td>
                                            <td class="align-left">
                                                <p>5,5 GB/s (datos en bruto)</p>
                                                <p>8-9 GB/s (datos comprimidos)</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="align-left">
                                                <p>ALMACENAMIENTO EXTERNO</p>
                                            </th>
                                            <td class="align-left">
                                                <p>Tarjetas SSD NVMe</p>
                                            </td>
                                            <td class="align-left">
                                                <p>Tarjetas SSD NVMe</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="align-left">
                                                <p>UNIDAD ÓPTICA</p>
                                            </th>
                                            <td class="align-left">
                                                <p>Blu-ray 4K UHD</p>
                                            </td>
                                            <td class="align-left">
                                                <p>Sin unidad óptica</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="align-left">
                                                <p>dimensiones</p>
                                            </th>
                                            <td class="align-left">
                                                <p>39 x 10,4 x 26 cm</p>
                                            </td>
                                            <td class="align-left">
                                                <p>39 x 9,2 x 26 cm</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="align-left">
                                                <p>peso</p>
                                            </th>
                                            <td class="align-left">
                                                <p>4,5 kg</p>
                                            </td>
                                            <td class="align-left">
                                                <p>3,9 kg</p>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <p>A los <strong>825 GB</strong> de almacenamiento del SSD habrá que restarle el sistema operativo y el peso del juego <a href="https://www.vidaextra.com/tag/astros-playroom">Astro's Playroom</a> que viene preinstalado en la consola, así que el tamaño del disco es algo a tener en cuenta a la hora de elegir entre una y otra versión.</p>
                        <!-- BREAK 7 -->
                        <p>Más allá de los componentes que montan sus tripas, desde el anuncio de la consola <strong>Sony</strong> ha querido destacar varias mejoras clave que implementará la nueva generación de <strong>PS5</strong> y que no gozábamos en PS4.</p>
                        <!-- BREAK 8 -->
                        <div class="article-asset-image article-asset-large">
                            <div class="asset-content">
                                <img class="sf-lazy " data-sf-srcset="https://i.blogs.es/2b9d41/ps54/450_1000.jpeg 450w, https://i.blogs.es/2b9d41/ps54/650_1200.jpeg 681w,https://i.blogs.es/2b9d41/ps54/1024_2000.jpeg 1024w, https://i.blogs.es/2b9d41/ps54/1366_2000.jpeg 1366w," data-sf-src="https://i.blogs.es/2b9d41/ps54/450_1000.jpeg" alt="Ps54">
                                <noscript><img alt="Ps54" class="" src="https://i.blogs.es/2b9d41/ps54/450_1000.jpeg"></noscript>

                            </div>
                        </div>
                        <p>En primer lugar está el <strong>ray tracing</strong>, la tecnología de Nvidia que ya lleva revolucionando la iluminación y los reflejos en el mundillo del PC desde hace una buena temporada y que ahora promete arrojar más realismo también en la máquina de <strong>Sony</strong>.</p>
                        <!-- BREAK 9 -->
                        <p>Con esa misma idea en mente, la de intentar conseguir que el juego traspase la pantalla para llegar al usuario, una de las novedades más impulsadas por la compañía ha sido la implementación del <strong>sonido 3D</strong>. La idea es que el audio mejore de la misma forma que lo han hecho los gráficos hasta ahora, permitiendo así una experiencia más inmersiva.</p>
                        <!-- BREAK 10 -->
                        <h2>Juegos confirmados y fechas de lanzamiento</h2>

                        <p>Estos son <a href="https://www.vidaextra.com/listas/estos-todos-juegos-que-podras-jugar-este-ano-ps5">todos los juegos de PS5</a> confirmados para la <strong>PS5</strong> junto a sus fechas de lanzamiento:</p>
                        <!-- BREAK 11 -->
                        <ul>
                            <li><a href="https://www.vidaextra.com/analisis/assassins-creed-valhalla-avance-preview-gameplay-experiencia-juego-para-pc-ps5-xbox-series-x">Assassin's Creed Valhalla</a> (19 de noviembre)</li>
                            <li><a href="https://www.vidaextra.com/tag/astros-playroom" rel="noopener noreferrer" data-id="noopener noreferrer">Astro’s Playroom</a> (19 de noviembre)</li>
                            <li><a href="https://www.vidaextra.com/tag/call-of-duty-black-ops-cold-war" rel="noopener noreferrer" data-id="noopener noreferrer">Call of Duty Black Ops: Cold War</a> (19 de noviembre)</li>
                            <li><a href="https://www.vidaextra.com/rpg/13-cosas-que-me-han-gustado-cyberpunk-2077-haberlo-jugado-otras-5-que-no">Cyberpunk 2077</a> (19 de noviembre)</li>
                            <li><a href="https://www.vidaextra.com/tag/demons-souls" rel="noopener noreferrer" data-id="noopener noreferrer">Demon’s Souls</a> (19 de noviembre)</li>
                            <li><strong>Destruction All Stars</strong> &nbsp;(19 de noviembre)</li>
                            <li><a href="https://www.vidaextra.com/analisis/dirt-5-avance-preview-experiencia-juego-fecha-lanzamiento-precio-para-ps4-xbox-one-pc">DiRT 5</a> (10 de noviembre)</li>
                            <li><a href="https://www.vidaextra.com/deportes/23-cosas-fifa-21-a-tener-cuenta-ps5-xbox-one-x-nintendo-switch" rel="noopener noreferrer" data-id="noopener noreferrer">FIFA 21</a> (19 de noviembre)</li>
                            <li><a href="https://www.vidaextra.com/guias-y-trucos/trucos-secretos-estrategias-para-mejorar-fortnite" rel="noopener noreferrer" data-id="noopener noreferrer">Fortnite</a> (19 de noviembre)</li>
                            <li><a href="https://www.vidaextra.com/tag/godfall" rel="noopener noreferrer" data-id="noopener noreferrer">Godfall</a> (19 de noviembre)</li>
                            <li><a href="https://www.vidaextra.com/tag/marvels-spider-man-miles-morales" rel="noopener noreferrer" data-id="noopener noreferrer">Marvel’s Spider-Man: Miles Morales</a> (19 de noviembre)</li>
                            <li><strong>Marvel’s Spider-Man: Miles Morales Ultimate Edition</strong> (19 de noviembre)</li>
                            <li><a href="https://www.vidaextra.com/deportes/nba-2k21-asoma-cabeza-muestra-su-gameplay-primera-vez-este-nuevo-trailer">NBA 2K21</a> (19 de noviembre)</li>
                            <li><a href="https://www.vidaextra.com/tag/marvels-spider-man-miles-morales" rel="noopener noreferrer" data-id="noopener noreferrer">Marvel’s Spider-Man: Miles Morales</a> (19 de noviembre)</li>
                            <li><strong>Marvel’s Spider-Man: Miles Morales Ultimate Edition</strong> (19 de noviembre)</li>
                            <li><a href="https://www.vidaextra.com/analisis/watch-dogs-legion-avance-preview-detalles-experiencia-juego-para-pc-stadia-ps5-xbox-series-x">Watch Dogs: Legion</a> (19 de noviembre)</li>
                            <li><a href="https://www.vidaextra.com/tag/yakuza-like-a-dragon" rel="noopener noreferrer" data-id="noopener noreferrer">Yakuza: Like a Dragon</a> (19 de noviembre)</li>
                        </ul>


                        <p>Algunos de ellos, como <strong>DiRT 5</strong> o <strong>Watch Dogs: Legion,</strong> saldrán antes en PC y consolas actuales, pero estarán disponibles para la <strong>PS5 </strong>desde el primer día. A todo esto hay que sumar el catálogo retrocompatible que incluye la mayoría de juegos de PS4. Os lo explicamos con más detalle a continuación.</p>
                        <!-- BREAK 12 -->
                        <p>También se ha dado a conocer que <strong>la mayoría de los juegos de PS4 podrán jugarse en PS5</strong>, pero algunos podrían mostrar errores o comportamientos extraños al jugarse desde la nueva consola.</p>
                        <!-- BREAK 13 -->
                        <p>Varias compañías han asegurado que están trabajando para actualizar los juegos y que puedan disfrutarse también en PS5, pero por ahora estos son <strong>los juegos que no serán retrocompatibles</strong>.</p>
                        <!-- BREAK 14 -->
                        <ul>
                            <li>Afro Samurai 2: Revenge of Kuma Volume 1</li>
                            <li>DWVR</li>
                            <li>Hitman GO: Definitive Edition</li>
                            <li>Just Deal With It!</li>
                            <li>Joe’s Diner</li>
                            <li>Robinson: The Journey</li>
                            <li>Shadow Complex Remastered</li>
                            <li>Shadwen</li>
                            <li>TT Isle of Man: Ride on the Edge 2</li>
                            <li>We Sing</li>
                        </ul>

                        <p>Para usar los juegos en formato físico de PS4 bastará con insertar el disco en la <a href="https://www.vidaextra.com/juegos-nuevos/nueva-ps5-informacion">PS5</a> y jugar, no hay más, mientras que los juegos de PS4 que ya tengamos en formato digital <strong>podremos transferirlos a la PS5 a través de dos vías</strong>:</p>
                        <!-- BREAK 15 -->
                        <ul>
                            <li><strong>Por WiFi</strong>. Se podrán transferir tanto los juegos enteros como las partidas guardadas. Es raro que no comenten nada de la posibilidad de descargar partidas guardadas desde PS Plus.</li>
                            <li><strong>Usando un dispositivo de almacenamiento externo</strong>. Si tenemos un disco duro con juegos de PS4, por ejemplo, podremos conectarlo a la PS5 y acceder a ellos para jugar con normalidad.</li>
                        </ul>

                        <p>Por otro lado, para instalar en PS5 un juego de PS4 que tengamos <strong>en formato digital</strong> y que no queramos transferir usando los otros métodos (o bien no lo tengamos instalado, simplemente adquirido), bastará con acceder a la biblioteca de juegos, seleccionarlo y darle a la opción Descargar.</p>


                        <div class="article-asset-image article-asset-large">
                            <div class="asset-content">
                                <img class="fotoNoticiaestilo " src="https://i.blogs.es/2b9d41/ps54/1366_2000.jpeg" alt="Ps5">
                            </div>
                        </div>
                        <br><br>

                        <!-- BREAK 16 -->
                        <h1>Mandos y periféricos en PS5</h1>

                        <p>El mítico <strong>DualShock</strong> pasa a mejor vida y cede hueco a la llegada del <a href="https://www.vidaextra.com/hardware/dualsense-ps5-salto-inmersion-bloqueo-gatillos-cuando-arma-se-encasquilla-experiencia-sensorial">DualSense</a>, un <strong>nuevo mando para PS5</strong> que contará con jugosas novedades más allá de su rediseño. Eso también afectará al precio, claro, que pasa a costar <strong>69,99 euros</strong>.</p>
                        <!-- BREAK 17 -->
                        <p>El nuevo <strong>DualSense</strong> suma a las características habituales un micrófono integrado, vibración háptica y gatillos adaptativos. La suma de esos dos últimos será clave para llevar la experiencia de juego a un nuevo nivel, por ejemplo simulando las diferencias entre conducir sobre la hierba o el asfalto y modificando la presión necesaria al disparar un arma si, por ejemplo, estamos tensando un arco.</p>
                        <!-- BREAK 18 -->
                        <div class="article-asset-image article-asset-large">
                            <div class="asset-content">
                                <img class="fotoNoticiaestilo " src="img/mandops5.jpg" alt="Ps5dualsense">
                            </div>
                        </div>
                        <p>Con la intención de seguir apoyando el soporte a <a href="https://www.vidaextra.com/tag/playstation-vr">PlayStation VR</a>, <strong>Sony</strong> ha renovado su cámara con lentes duales 1080p y herramientas de eliminación de fondo con la intención de que puedas aprovecharla para tus retransmisiones.</p>
                        <!-- BREAK 19 -->
                        <p>Además la gama de auriculares de PlayStation crece con la llegada de los <strong>Pulse 3D Wireless Headset</strong>, unos cascos inalámbricos adaptados para explotar las posibilidades del audio 3D de la nueva consola.</p>
                        <!-- BREAK 20 -->
                        <p>Junto a la consola y los mandos se pondrán a la venta una serie de <strong>periféricos</strong> destinados a ocupar esos puertos. Estos son los accesorios que llegarán en el lanzamiento de PS5 y el precio de cada uno de ellos:</p>
                        <!-- BREAK 21 -->
                        <ul>
                            <li><strong>Auriculares inalámbricos Pulse 3D</strong>: 99,99 euros</li>
                            <li><strong>Cámara HD</strong>: 59,99 euros</li>
                            <li><strong>Mando a distancia</strong>: 29,99 euros</li>
                            <li><strong>Estación de carga para dos DualSense</strong>: 29,99 euros</li>
                        </ul>
                        <div class="article-asset-image article-asset-large">
                            <div class="asset-content">
                                <img class="fotoNoticiaestilo " src="img/camara.jpg" alt="Ps53">

                            </div>
                        </div>
                    </div>


                    <!-- TARJETAS CON NOTICIAS APILADOS DE 2 EN 2-->
                    <div class="col-12">
                        <h2 class="titNoticia">Otras noticias</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="noticia.php" class="linkNoticia">
                            <div class="card divOtrasNoticias">
                                <div class="row no-gutters">
                                    <div class="col-md-4 col-sm-12">
                                        <img src="http://placeimg.com/280/158/tech" class="img-fluid card-img" alt="">
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="card-block px-2">
                                            <h4 class="card-title titNoticia">Title</h4>
                                            <p class="card-text">Description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="noticia.php" class="linkNoticia">
                            <div class="card divOtrasNoticias ">
                                <div class="row no-gutters">
                                    <div class="col-md-4 col-sm-12">
                                        <img src="http://placeimg.com/280/158/animals" class="img-fluid card-img" alt="">
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="card-block px-2">
                                            <h4 class="card-title titNoticia">Title</h4>
                                            <p class="card-text ">Description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="noticia.php" class="linkNoticia">
                            <div class="card divOtrasNoticias">
                                <div class="row no-gutters">
                                    <div class="col-md-4 col-sm-12">
                                        <img src="http://placeimg.com/280/158/tech" class="img-fluid card-img" alt="">
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="card-block px-2">
                                            <h4 class="card-title titNoticia">Title</h4>
                                            <p class="card-text">Description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="noticia.php" class="linkNoticia">
                            <div class="card divOtrasNoticias ">
                                <div class="row no-gutters">
                                    <div class="col-md-4 col-sm-12">
                                        <img src="http://placeimg.com/280/158/animals" class="img-fluid card-img" alt="">
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <div class="card-block px-2">
                                            <h4 class="card-title titNoticia">Title</h4>
                                            <p class="card-text ">Description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <h2 class="titNoticia">Últimas noticias</h2>
                    <div class="row">
                        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                            <!-- CARROUSEL -->

                            <!--Controles-->
                            <div class="text-center mb-10 ">
                                <button type="button" class="btn-primary btn-circleCarrusel" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></button>
                                <button type="button" class="btn-primary btn-circleCarrusel" href="#multi-item-example" data-slide="next"><i class="fas fa-chevron-right"></i></button>
                            </div>

                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make up the bulk of the
                                                    card's content.</p>
                                                <a href="noticia.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make up the bulk of the
                                                    card's content.</p>
                                                <a href="noticia.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make up the bulk of the
                                                    card's content.</p>
                                                <a href="noticia.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make up the bulk of the
                                                    card's content.</p>
                                                <a href="noticia.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--/.First slide-->

                                <!--Second slide-->
                                <div class="carousel-item">

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make up the bulk of the
                                                    card's content.</p>
                                                <a href="noticia.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make up the bulk of the
                                                    card's content.</p>
                                                <a href="noticia.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make up the bulk of the
                                                    card's content.</p>
                                                <a href="noticia.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3" style="float:left">
                                        <div class="card mb-2">
                                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">Card title</h4>
                                                <p class="card-text">Some quick example text to build on the card title and
                                                    make up the bulk of the
                                                    card's content.</p>
                                                <a href="noticia.php" class="btn btn-primary linkNoticia">Ver más</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--/.Second slide-->

                            </div>
                            <!--/.Slides-->
                        </div>
                    </div>

                </div>
                <div class="col-12 ">
                    <form action="">
                        <div class="form-group">
                            <label class="titNoticia" for="textArea">Comentarios</label>
                            <textarea id="my-textarea" class="form-control" name="comentario" rows="3"></textarea>
                            <button type="submit" class="btn btn-secondary mt-1  ">Comentar</button>
                        </div>
                    </form>
                </div>
                <div class="col">
                    <div class="row no-gutters">
                        <div class="col-1 ">
                            <img class="mx-auto d-block img-fluid " src="http://lorempixel.com/output/people-q-c-48-48-9.jpg" alt="fotoPerf">
                        </div>
                        <div class="col-11 ">
                            <div class="row no-gutters">
                                <div class="col-12 "><small class="titNoticia">Nombre</small>
                                </div>
                                <div class="col-12 ">Comentario
                                </div>
                                <div class="col-12">
                                    <small class="respComentarios">Me gusta</small>
                                    <small class="respComentarios">Responder</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
    <?php include("../includes/footer.php"); ?>
</body>

</html>