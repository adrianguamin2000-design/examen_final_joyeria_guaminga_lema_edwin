<?php

session_start();

include("../conexion.php");

$clientes = mysqli_query($conn,"SELECT * FROM clientes");
$productos = mysqli_query($conn,"SELECT * FROM productos");

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Registrar Pedido</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-4">

<h2>Registrar Pedido</h2>

<form action="guardar_pedidos.php" method="POST">

<div class="mb-3">
<label>Cliente</label>

<select name="cliente_id" class="form-control" required>

<option value="">Seleccione</option>

<?php while($cliente=mysqli_fetch_assoc($clientes)){ ?>

<option value="<?php echo $cliente['id']; ?>">

<?php echo $cliente['nombre']; ?>

</option>

<?php } ?>

</select>

</div>

<div class="mb-3">
<label>Producto</label>

<select name="producto_id" class="form-control" required>

<option value="">Seleccione</option>

<?php while($producto=mysqli_fetch_assoc($productos)){ ?>

<option value="<?php echo $producto['id']; ?>">

<?php echo $producto['nombre']; ?>

</option>

<?php } ?>

</select>

</div>

<div class="mb-3">
<label>Cantidad</label>

<input
type="number"
name="cantidad"
class="form-control"
required>
</div>

<div class="mb-3">
<label>Estado</label>

<select name="estado" class="form-control">

<option value="Pendiente">Pendiente</option>
<option value="Entregado">Entregado</option>
<option value="Cancelado">Cancelado</option>

</select>

</div>

<button type="submit" class="btn btn-success">
Guardar Pedido
</button>

<a href="pedidos.php" class="btn btn-secondary">
Volver
</a>

</form>

</div>

</body>
</html>