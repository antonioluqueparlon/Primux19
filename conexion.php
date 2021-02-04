<?php 
    $conn = mysqli_connect('technoteam.iesmarquesdecomares.org', 'root', '', 'technoteam');
    if(!$conn){
        echo 'Error en la base datos';
    }
?>