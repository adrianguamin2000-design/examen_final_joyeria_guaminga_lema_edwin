<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login.php");
    exit();
}

include("../conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$sql = "UPDATE clientes SET

nombre='$nombre',
correo='$correo',
telefono='$telefono'

WHERE id='$id'";

mysqli_query($conn,$sql);

header("Location: clientes.php");

?>