<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
  <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

  <?php include("includes/design-top.php"); ?>
  <?php include("includes/navigation.php"); ?>
  <?php include("includes/subNavigation.php"); ?>

  <main>
    <br>

    <h1 class="text-center">Contacta con nosotros</h1>


    <div class="container">
      <div class="row justify-content-center">
        <div class="media-container-column col-lg-8" data-form-type="formoid">
          
          <!---Formbuilder Form--->
          <form action="" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="sQHmU9ddZ8Up3xFCB0G8PPewOlf0QvIkGAfG104Ug4qpQ1Joc9Sjoh6tEFFfpDryG95ypBXJtA0cBC1gUKhU84c9BVA/bNpTUpkRCxUUPmEuLK65I1fSTriIISsl99Pa">
            <div class="row">
              <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">¡Gracias por rellenar el formulario!</div>
              <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
              </div>
            </div>
            <div class="dragArea row">
              <div class="col-md-4  form-group" data-for="name">
                <label for="name-form1-3c" class="form-control-label mbr-fonts-style display-7">Nombre</label>
                <input type="text" name="name" data-form-field="Name" required="required" placeholder="Introduce tu nombre" class="form-control display-7" id="name-form1-3c">
              </div>
              <div class="col-md-4  form-group" data-for="email">
                <label for="email-form1-3c" class="form-control-label mbr-fonts-style display-7">Email</label>
                <input type="email" name="email" data-form-field="Email" required="required" placeholder="Introduce tu email" class="form-control display-7" id="email-form1-3c">
              </div>
              <div data-for="phone" class="col-md-4  form-group">
                <label for="phone-form1-3c" class="form-control-label mbr-fonts-style display-7">Teléfono</label>
                <input type="tel" name="phone" data-form-field="Phone" class="form-control display-7" placeholder="Introduce tu teléfono" id="phone-form1-3c">
              </div>
              <div data-for="message" class="col-md-12 form-group">
                <label for="message-form1-3c" class="form-control-label mbr-fonts-style display-7">Mensaje</label>
                <textarea name="message" data-form-field="Message" class="form-control display-7" placeholder="Introduce tu mensaje aquí" id="message-form1-3c" rows="5"></textarea>
              </div>
              <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-form btn-info display-4">Enviar</button></div>
            </div>
          </form>
          <!---Formbuilder Form--->
        </div>
      </div>
    </div>


    <br><br>
  </main>

  <?php include("includes/footer.php"); ?>

</body>

</html>