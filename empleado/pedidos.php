<?php

session_start();

if(!isset($_SESSION['usuario']) || $_SESSION['rol'] != 2){
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
<th>Acciones</th>

</tr>

</thead>

<tbody>

<?php while($fila=mysqli_fetch_assoc($resultado)){ ?>

<tr>

<td><?= $fila['id'] ?></td>
<td><?= $fila['cliente'] ?></td>
<td><?= $fila['producto'] ?></td>
<td><?= $fila['cantidad'] ?></td>
<td><?= $fila['fecha'] ?></td>
<td><?= $fila['estado'] ?></td>

<td>

<a href="editar_pedido.php?id=<?php echo $fila['id']; ?>"
class="btn btn-warning btn-sm">
Editar
</a>

<a href="eliminar_pedido.php?id=<?php echo $fila['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('¿Desea eliminar este pedido?')">
Eliminar
</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</body>

</html>