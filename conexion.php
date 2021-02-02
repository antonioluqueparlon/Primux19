<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'technoteam');
    if(!$conn){
        echo 'Error en la base datos';
    }
?>