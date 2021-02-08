<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <?php include("includes/head-tag-contents.php"); ?>
  <script>
    $(document).ready(function() {
      $("#reloadCaptcha").click(function() {
        var captchaImage = $('#captcha').attr('src');
        captchaImage = captchaImage.substring(0, captchaImage.lastIndexOf("?"));
        captchaImage = captchaImage + "?rand=" + Math.random() * 1000;
        $('#captcha').attr('src', captchaImage);
      });
    });
  </script>
</head>


<?php
?>


<body>
  <?php include("includes/navigation.php"); ?>

  <main>
    <br>

    <h1>Contacta con nosotros</h1><br><br>


    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-8 col-lg-offset-2">


          <form id="contact-form" method="post" action="" role="form">

            <div class="messages"></div>

            <div class="controls">

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_name">Nombre</label>
                    <input id="form_name" type="text" name="nombre" class="form-control" placeholder="Introduce tu nombre *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_lastname">Apellidos </label>
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Introduce tu apellido *" required="required" data-error="Lastname is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_email">Email</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Por favor introduce tu email *" required="required" data-error="Valid email is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="form_phone">Teléfono</label>
                    <input id="form_phone" type="tel" name="telefono" class="form-control" placeholder="Por favor introduce tu numero teléfono">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="form_message">Mensaje</label>
                    <textarea id="form_message" name="mensaje" class="form-control" placeholder="Escriba su mensaje" rows="5" required data-error="Please,leave us a message."></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>


                <div class="form-group">
                  <label for="captcha" class="text-info">
                    <?php if ($message) { ?>
                      <span class="text-warning"><strong><?php echo $message; ?></strong></span>
                    <?php } ?>
                  </label><br>
                  <input type="text" name="securityCode" id="securityCode" class="form-control" placeholder="Código de seguridad">
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label"> <img style="border: 1px solid #D3D0D0" src="get_captcha.php?rand=<?php echo rand(); ?>" id='captcha'></label>

                  <div class="col-md-8"><br>
                    <a href="javascript:void(0)" id="reloadCaptcha"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a> Recargar codigo
                  </div>

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

  <!--Inclusion footer-->
  <?php include("includes/footer.php"); ?>

</body>

</html>