<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "iniciodesesion"; // Base de datos principal

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
} else {
    //echo "Conexión exitosa"; // Opcional
}

