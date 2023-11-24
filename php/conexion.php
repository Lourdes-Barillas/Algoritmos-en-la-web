<?php
$conexion = mysqli_connect("localhost", "root", "", "algoritmosweb", "3306");

if(!$conexion){
    die("no pudo conectarse a la base de datos");
}
echo"conexion exitosa";
mysqli_close($conexion);
?>