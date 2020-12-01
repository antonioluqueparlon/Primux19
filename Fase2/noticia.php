<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>
<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>

<main >
<section class="noticia">
		<div class="row ">
			<div class="row ">
				<h1 class="titNoticia">NOMBRE NOTICIA</h1>
			</div>
			<div class="row">
				<img src="http://lorempixel.com/output/sports-q-c-1150-800-7.jpg" alt="imgNoticia" >
				<!--IMAGEN ANCHO DE 1150 ancho y 900 largo -->
			</div>
			<div class="row cuerpoNoticia">
				<p >
				Lorem ipsum dolor sit amet consectetur adipiscing elit integer per curae, sociosqu congue molestie penatibus non enim auctor feugiat interdum himenaeos, vitae metus aliquet parturient aliquam in semper fermentum arcu. Volutpat ac platea venenatis nisi sagittis ante mi neque, sollicitudin cursus litora class turpis potenti aliquet sem augue, condimentum urna egestas mauris curabitur luctus suspendisse. Semper urna non viverra fringilla leo suspendisse erat facilisi malesuada, 
				auctor velit et bibendum dis feugiat porta aliquet commodo, vitae porttitor mi integer hac rhoncus fusce habitant. 
				Odio fringilla sociis gravida viverra suspendisse est luctus phasellus, nulla ornare enim mattis ultrices primis eu sem, vitae hac himenaeos massa ultricies metus euismod.<br><br>
				Semper venenatis quisque ad donec accumsan fames scelerisque congue duis facilisis, habitasse justo ultrices magna torquent litora parturient consequat id senectus, tellus vitae blandit aenean eleifend sagittis nibh elementum phasellus. 
				Accumsan mauris integer varius sapien aenean imperdiet curabitur cubilia quis leo posuere lacus rutrum, primis suscipit nulla ante hac pellentesque sociosqu egestas pretium velit porttitor. Malesuada sociis fringilla dictum purus massa nibh, sagittis quam donec habitasse feugiat fames, congue eleifend et faucibus scelerisque.<br><br>
				Vel volutpat ultrices taciti sociis nulla mi euismod justo, eros bibendum imperdiet mus metus arcu cras eu, congue vitae rhoncus vestibulum ut lacus a. 
				Ridiculus aptent aenean nunc cursus id netus arcu posuere metus mauris, tristique hac malesuada facilisis vitae at eleifend lectus semper, justo varius sollicitudin habitasse nec lobortis torquent convallis sapien. Tempor egestas enim facilisi venenatis montes mus convallis dictum vivamus gravida, sociosqu lobortis blandit congue proin posuere erat malesuada elementum eu, odio inceptos litora id tristique suspendisse suscipit dis nulla.<br>
				</p>
			</div>
			<h2 class="titNoticia">Otras noticias</h2>
			<div class="row">
				<div class="col-md-6">
					<div class="row divOtrasNoticias">
						<img src="http://placeimg.com/280/158/tech">
						<p  class="txtNoticias">Lorem ipsum dolor sit amet consectetur.</p>				
					</div>
				</div>
				<div class="col-md-6">
					<div class="row divOtrasNoticias">
						<img src="http://placeimg.com/280/158/animals">
						<p  class="txtNoticias">Lorem ipsum dolor sit amet consectetur.</p>				
					</div>
				</div>
				<div class="col-md-6">
					<div class="row divOtrasNoticias">
						<img src="http://placeimg.com/280/158/tech">
						<p  class="txtNoticias">Lorem ipsum dolor sit amet consectetur.</p>				
					</div>
				</div>
				<div class="col-md-6">
					<div class="row divOtrasNoticias">
						<img src="http://placeimg.com/280/158/animals">
						<p  class="txtNoticias">Lorem ipsum dolor sit amet consectetur.</p>				
					</div>
				</div>	
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
					<img class="card-img-top"
					src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
					<div class="card-body">
					<h4 class="card-title titNoticia">Card title</h4>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
						card's content.</p>
					<a class="btn btn-primary">Button</a>
					</div>
				</div>
				</div>

				<div class="col-md-3" style="float:left">
				<div class="card mb-2">
					<img class="card-img-top"
					src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
					<div class="card-body">
					<h4 class="card-title titNoticia">Card title</h4>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
						card's content.</p>
					<a class="btn btn-primary">Button</a>
					</div>
				</div>
				</div>

				<div class="col-md-3" style="float:left">
				<div class="card mb-2">
					<img class="card-img-top"
					src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
					<div class="card-body">
					<h4 class="card-title titNoticia">Card title</h4>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
						card's content.</p>
					<a class="btn btn-primary">Button</a>
					</div>
				</div>
				</div>
				
				<div class="col-md-3" style="float:left">
				<div class="card mb-2">
					<img class="card-img-top"
					src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
					<div class="card-body">
					<h4 class="card-title titNoticia">Card title</h4>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
						card's content.</p>
					<a class="btn btn-primary">Button</a>
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
					<div class="col col-sm-1">
						<img class="mx-auto d-block" src="http://lorempixel.com/output/people-q-c-48-48-9.jpg" alt="fotoPerf" >
					</div>
					<div class="col col-sm-11 ">
						<div class="row no-gutters">
							<div class="col-12 "><p class="titNoticia">Nombre</p>
							</div>
							<div class="col-12 ">Comentario
							</div>
						</div>
					</div>
				</div>
			</div>	
			</div>
		</div>
		
		

</section>
</main>

<?php include("includes/footer.php");?>

</body>
</html>
