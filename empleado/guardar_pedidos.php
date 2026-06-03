<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login.php");
    exit();
}

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

if(mysqli_query($conn, $sql)){

    echo "
    <script>
        alert('Pedido registrado correctamente');
        window.location='pedidos.php';
    </script>
    ";

}else{

    echo 'Error SQL: ' . mysqli_error($conn);

}

?>