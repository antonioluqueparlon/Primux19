<?php 
    $conn = mysqli_connect('technoteam.iesmarquesdecomares.org', 'root', 'cfgsdaw1', 'technoteam');
    if(!$conn){
        echo 'Error en la base datos';
    }
?>