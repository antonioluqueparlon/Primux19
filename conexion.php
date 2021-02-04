<?php 
    $conn = mysqli_connect('localhost', 'prueba', 'Password123#@!', 'technoteam');
    if(!$conn){
        echo 'Error en la base datos';
    }
?>