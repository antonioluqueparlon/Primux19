<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body class="bodyLogin">
<?php include("includes/navigation.php");?>
<div class="wrapperLogin">
  <div id="formContent">

    <form class="formLogin">
      <input type="text" id="login" class=" second" name="login" placeholder="Usuario">
      <input type="password" id="password" class=" third" name="login" placeholder="Contraseña">
      <input type="submit" class="fourth" value="Entrar">
    </form>

    <div id="formFooter">
      <a class="underlineHover aLogin" href="#">Recuperar contraseña</a>
    </div>

  </div>
</div>

<?php include("includes/footer.php");?>

</body>
</html>