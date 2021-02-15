<?php

session_start(); 

$permitted_chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ123456789';
  
function generate_string($input) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < 6; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
    return $random_string;
}
$image = imagecreatetruecolor(200, 50);
 
$red = rand(125, 175);
$green = rand(125, 175);
$blue = rand(125, 175);
 
$colors = imagecolorallocate($image, $red - 20*mt_rand(0,4), $green - 20*mt_rand(0,4), $blue - 20*mt_rand(0,4));
 
imagefill($image, 0, 0, $colors);

//Obtengo los colores del texto que van a ser blanco y negro
$black = imagecolorallocate($image, 0, 0, 0);
$white = imagecolorallocate($image, 255, 255, 255);
$textcolors = [$black, $white];
 
//Fuente del texto
$fonts = dirname(__FILE__) .'/fonts/Arvo-Bold.ttf';
 

$captcha_string = generate_string($permitted_chars);
 
$_SESSION['captcha_text'] = $captcha_string;
 
for($i = 0; $i < 6; $i++) {
  $letter_space = 170/6;
  $initial = 15;
   
  imagettftext($image, 20, rand(-15, 15), $initial + $i*$letter_space, rand(25, 45), $textcolors[rand(0, 1)], $fonts, $captcha_string[$i]);
}
 
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>