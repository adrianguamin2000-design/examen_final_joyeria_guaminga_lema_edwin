<?php

/*
|--------------------------------------------------------------------------
| CONEXION MYSQL
|--------------------------------------------------------------------------
| Puerto configurado en XAMPP: 3308
|--------------------------------------------------------------------------
*/

$host = "localhost";
$user = "root";
$password = "";
$database = "joyeria";
$port = 3308;

$conn = mysqli_connect(
    $host,
    $user,
    $password,
    $database,
    $port
);

if(!$conn){
    die("Error de conexión: " . mysqli_connect_error());
}
?>