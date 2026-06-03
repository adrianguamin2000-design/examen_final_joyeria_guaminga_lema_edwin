<?php

include("../conexion.php");

$id = $_POST['id'];
$cliente_id = $_POST['cliente_id'];
$producto_id = $_POST['producto_id'];
$cantidad = $_POST['cantidad'];
$estado = $_POST['estado'];

$sql = "UPDATE pedidos SET

cliente_id='$cliente_id',
producto_id='$producto_id',
cantidad='$cantidad',
estado='$estado'

WHERE id='$id'";

mysqli_query($conn,$sql);

header("Location: pedidos.php");
exit();

?>