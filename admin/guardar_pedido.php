<?php

include("../conexion.php");

$cliente_id = $_POST['cliente_id'];
$producto_id = $_POST['producto_id'];
$cantidad = $_POST['cantidad'];
$estado = $_POST['estado'];

$fecha = date("Y-m-d");

$sql = "INSERT INTO pedidos(

cliente_id,
producto_id,
cantidad,
fecha,
estado

)

VALUES(

'$cliente_id',
'$producto_id',
'$cantidad',
'$fecha',
'$estado'

)";

mysqli_query($conn,$sql);

header("Location: pedidos.php");

?>