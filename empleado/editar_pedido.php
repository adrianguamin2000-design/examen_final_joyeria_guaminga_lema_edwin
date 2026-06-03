<?php

include("../conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM pedidos WHERE id='$id'";
$resultado = mysqli_query($conn,$sql);

$pedido = mysqli_fetch_assoc($resultado);

$clientes = mysqli_query($conn,"SELECT * FROM clientes");
$productos = mysqli_query($conn,"SELECT * FROM productos");

?>

<!DOCTYPE html>
<html>
<head>

<title>Editar Pedido</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>Editar Pedido</h2>

<form action="actualizar_pedido.php" method="POST">

<input type="hidden"
name="id"
value="<?php echo $pedido['id']; ?>">

<div class="mb-3">

<label>Cliente</label>

<select name="cliente_id" class="form-control">

<?php while($cliente=mysqli_fetch_assoc($clientes)){ ?>

<option
value="<?php echo $cliente['id']; ?>"
<?php if($cliente['id']==$pedido['cliente_id']) echo "selected"; ?>>

<?php echo $cliente['nombre']; ?>

</option>

<?php } ?>

</select>

</div>

<div class="mb-3">

<label>Producto</label>

<select name="producto_id" class="form-control">

<?php while($producto=mysqli_fetch_assoc($productos)){ ?>

<option
value="<?php echo $producto['id']; ?>"
<?php if($producto['id']==$pedido['producto_id']) echo "selected"; ?>>

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
value="<?php echo $pedido['cantidad']; ?>"
required>

</div>

<div class="mb-3">

<label>Estado</label>

<select name="estado" class="form-control">

<option <?php if($pedido['estado']=="Pendiente") echo "selected"; ?>>
Pendiente
</option>

<option <?php if($pedido['estado']=="Entregado") echo "selected"; ?>>
Entregado
</option>

<option <?php if($pedido['estado']=="Cancelado") echo "selected"; ?>>
Cancelado
</option>

</select>

</div>

<button class="btn btn-primary">
Actualizar
</button>

<a href="pedidos.php" class="btn btn-secondary">
Volver
</a>

</form>

</div>

</body>
</html>