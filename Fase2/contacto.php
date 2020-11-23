<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

  <?php include("includes/navigation.php"); ?>
  <?php include("includes/subNavigation.php"); ?>


  <?php include("includes/footer.php"); ?>




  <main>
    <br>

    <h1>Contacta con nosotros</h1>


    <div class="container bodyContacto">

      <div class="row justify-content-center">

        <div class="col-lg-8 col-lg-offset-2">


          <form id="contact-form" method="post" action="" role="form">

            <div class="messages"></div>

            <div class="controls">

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_name">Nombre</label>
                    <input id="form-group" type="text" name="nombre" class="form-control" placeholder="Por favor introduce tu nombre*" required="required" data-error="Nombre es necesario.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_lastname">Apellidos </label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Por favor introduce tu apellido*" required="required" data-error="Apellido es necesario">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_email">Email</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Por favor introduce tu email*" required="required" data-error="Un email es necesario">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_phone">Teléfono</label>
                    <input id="form_phone" type="tel" name="telefono" class="form-control" placeholder="Por favor introduce tu numero teléfono*">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="form_message">Mensaje</label>
                    <textarea id="form_message" name="mensaje" class="form-control" placeholder="Escriba su mensaje" rows="5" required data-error="Por favor dejanos un mensaje."></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-12">
                  <input type="submit" class="btn btn-success btn-info" value="Enviar">
                </div>
              </div>

            </div>

          </form>

        </div>

      </div>

    </div>

  </main>



</body>

</html>