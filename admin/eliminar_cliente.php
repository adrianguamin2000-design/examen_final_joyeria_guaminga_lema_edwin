<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login.php");
    exit();
}

include("../conexion.php");

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM clientes WHERE id='$id'");

header("Location: clientes.php");

?>