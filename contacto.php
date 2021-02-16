<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<?php


?>

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
              </div>

              <div class="elem-group">
                <label for="captcha">Por favor introduce el captcha</label>
                <img src="captcha.php" alt="CAPTCHA" class="captcha-image"><i class="fas fa-redo refresh-captcha"></i>
                <br>
                <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
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

<?php

if($_POST) {
  $visitor_name = "";
  $visitor_email = "";
  $email_title = "";
  $concerned_department = "";
  $visitor_message = "";

  if(isset($_POST['captcha_challenge']) && $_POST['captcha_challenge'] == $_SESSION['captcha_text']) {
   
      if(isset($_POST['visitor_name'])) {
          $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
      }
       
      if(isset($_POST['visitor_email'])) {
          $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
          $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
           
      }
       
      if(isset($_POST['email_title'])) {
          $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
      }
       
      if(isset($_POST['concerned_department'])) {
          $concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING);
      }
       
      if(isset($_POST['visitor_message'])) {
          $visitor_message = htmlspecialchars($_POST['visitor_message']);
      }
       
      if($concerned_department == "billing") {
          $recipient = "billing@domain.com";
      }
      else if($concerned_department == "marketing") {
          $recipient = "marketing@domain.com";
      }
      else if($concerned_department == "technical support") {
          $recipient = "tech.support@domain.com";
      }
      else {
          $recipient = "contact@domain.com";
      }
       
      $headers  = 'MIME-Version: 1.0' . "\r\n"
      .'Content-type: text/html; charset=utf-8' . "\r\n"
      .'From: ' . $visitor_email . "\r\n";
       
      if(mail($recipient, $email_title, $visitor_message, $headers)) {
          echo '<p>Thank you for contacting us. You will get a reply within 24 hours.</p>';
      } else {
          echo '<p>We are sorry but the email did not go through.</p>';
      }
  } else {
      echo '<p>You entered an incorrect Captcha.</p>';
  }
   
} else {
  echo '<p>Something went wrong</p>';
}
?>

<script>
    var refreshButton = document.querySelector(".refresh-captcha");
    refreshButton.onclick = function() {
      document.querySelector(".captcha-image").src = 'captcha.php?' + Date.now();
    }
  </script>