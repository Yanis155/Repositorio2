<?php

include("conexion.php");

$consulta = "select * from socios where dni = {$dni}";
$filas = mysqli_query($conexion, $consulta);
while ($filas = mysqli_fetch_array($filas)){
    printf ($filas[0]."<br>". $filas[1]."<br>".$filas[2]."<br>".$filas[3]."<br>".$filas[4]);
};

?>