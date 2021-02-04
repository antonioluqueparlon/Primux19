<?php 
    $conn = mysqli_connect('http://technoteam.iesmarquesdecomares.org/', 'root', 'cfgsdaw1', 'technoteam');
    if(!$conn){
        echo 'Error en la base datos';
    }
?>