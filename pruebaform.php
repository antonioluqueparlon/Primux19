<?php include("includes/head-tag-contents.php");?>

<?php if(isset($_POST['email'])){
    echo"ok";
} ?>

<form class="formLogin needs-validation" novalidate method="POST" action="">

  <div class="form-group">
      <input type="text" id="mail" class=" second form-control" name="email" placeholder="Email" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" required>
    <div class="invalid-feedback">
            Introduce una dirección de correo válida
    </div>
  </div>
  <input type="submit" class="fourth" name='registrarse' value="Registrarse">
    </form>

    <script>
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>