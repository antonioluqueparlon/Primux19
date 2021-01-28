<?php

$host = "localhost";
$user = "dwes";
$pass = "abc123.";
$bd = "technoteam";

$conn = new mysqli($host,$user,$pass,$bd)or die("Error: ".mysqli_errno($conn));

?>