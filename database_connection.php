<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "ED222felipe";
$basedatos = "linet";

$conexion= mysqli_connect($servidor,$usuario,$contrasena,$basedatos);
if(!$conexion){
die("Error No se puede conectar");
}
?>