<?php
include("configuracion.php"); //archivo que contiene los datos de conexion

// creacion de conexion
$conexion = new mysqli($server, $user, $pass, $bd);

// checkeo de conexion
if (mysqli_connect_errno()){
    echo "No conectado", mysqli_connect_errno();
    exit();
}
?>