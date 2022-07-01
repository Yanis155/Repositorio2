<?php

$user = "root";
$pass = "";
$db = "socios";
$server = "LocalHost";
$conexion = new mysqli($server,$user,$pass,$db);


if (mysqli_error($conexion)){
    echo ("fallo en la conexión");
};  

?>
