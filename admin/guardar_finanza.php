<?php

session_start();

include("../conexion.php");

$tipo = $_POST['tipo'];
$descripcion = $_POST['descripcion'];
$monto = $_POST['monto'];

$fecha = date("Y-m-d");

$sql = "INSERT INTO finanzas
(fecha, tipo, descripcion, monto)
VALUES
('$fecha','$tipo','$descripcion','$monto')";

if(mysqli_query($conn,$sql)){
    header("Location: finanzas.php");
}else{
    echo "Error: " . mysqli_error($conn);
}

?>