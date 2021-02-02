<?php 
    $conn = mysqli_connect('localhost', 'root', 'cfgsdaw1', 'technoteam');
    if(!$conn){
        echo 'Error en la base datos';
    }
?>