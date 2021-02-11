<?php
 
 session_start();
 
 $permitted_chars = 'ABCDEFGHJKLMNPQRSTUVWXYZABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
   
 function generate_string($input, $strength = 10) {
     $input_length = strlen($input);
     $random_string = '';
     for($i = 0; $i < $strength; $i++) {
         $random_character = $input[mt_rand(0, $input_length - 1)];
         $random_string .= $random_character;
     }
   
     return $random_string;
 }

 $string_length = 6;
 $captcha_string = generate_string($permitted_chars, $string_length);
 $_SESSION['CAPTCHA'] = $captcha_string;

 //vale
  
 //creo la imagen
 $imagen = imagecreate(200, 50);
 //colores
 $fondo = imagecolorallocate($imagen, 60, 0, 0);
 $texto = imagecolorallocate($imagen, 255, 255, 255);
  
  
  //relleno captcha con el color de fondo
 ImageFill($imagen, 50, 0, $fondo);
  
  
 //IMPRIMIR UN TEXTO A LA IMAGEN
 imagestring($imagen, 80, 25, 10, "$_SESSION[CAPTCHA]", $texto);
 
  
 //imprimo la imagen
 header('Content-type: image/png');
 imagepng($imagen);
 imagedestroy($imagen);
 
 
?>