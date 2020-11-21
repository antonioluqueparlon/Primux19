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

    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario">
      <input type="password" id="password" class="fadeIn third" name="login" placeholder="Contraseña">
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

    <div id="formFooter">
      <a class="underlineHover aLogin" href="#">Recuperar contraseña</a>
    </div>

  </div>
</div>

<?php include("includes/footer.php");?>

</body>
</html>