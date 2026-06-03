<?php

include("../conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO clientes(
nombre,
correo,
telefono
)
VALUES(
'$nombre',
'$correo',
'$telefono'
)";

mysqli_query($conn,$sql);

header("Location: clientes.php");

?>