<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login.php");
    exit();
}

include("../conexion.php");

$sql = "SELECT
            pedidos.id,
            clientes.nombre AS cliente,
            productos.nombre AS producto,
            pedidos.cantidad,
            pedidos.fecha,
            pedidos.estado
        FROM pedidos
        INNER JOIN clientes
        ON pedidos.cliente_id = clientes.id
        INNER JOIN productos
        ON pedidos.producto_id = productos.id";

$resultado = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>

<title>Pedidos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>Gestión de Pedidos</h2>

<a href="index.php" class="btn btn-secondary mb-3">
Volver al Panel
</a>

<a href="agregar_pedido.php" class="btn btn-success mb-3">
Nuevo Pedido
</a>

<table class="table table-bordered">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Cliente</th>
<th>Producto</th>
<th>Cantidad</th>
<th>Fecha</th>
<th>Estado</th>

</tr>

</thead>

<tbody>

<?php while($fila=mysqli_fetch_assoc($resultado)){ ?>

<tr>

<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['cliente']; ?></td>
<td><?php echo $fila['producto']; ?></td>
<td><?php echo $fila['cantidad']; ?></td>
<td><?php echo $fila['fecha']; ?></td>
<td><?php echo $fila['estado']; ?></td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</body>
</html>