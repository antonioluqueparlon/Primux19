<?php 
    $conn = mysqli_connect('localhost', 'TechnoTeam', '1234', 'technoteam');
    if(!$conn){
        echo 'Error en la conexión a la base datos';
    }
?>