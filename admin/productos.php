<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login.php");
    exit();
}

include("../conexion.php");

$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Productos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>Gestión de Productos</h2>

<a href="index.php" class="btn btn-secondary mb-3">
Volver al Panel
</a>

<a href="agregar_producto.php" class="btn btn-success mb-3">
Agregar Producto
</a>

<a
href="editar_producto.php?id=<?php echo $fila['id']; ?>"
class="btn btn-warning btn-sm">

Editar

</a>

<table class="table table-bordered table-hover">

<thead class="table-dark">

<tr>

<th>ID</th>
<th>Nombre</th>
<th>Descripción</th>
<th>Precio</th>
<th>Stock</th>
<th>Acciones</th>

</tr>

</thead>

<tbody>

<?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

<tr>

<td><?php echo $fila['id']; ?></td>

<td><?php echo $fila['nombre']; ?></td>

<td><?php echo $fila['descripcion']; ?></td>

<td>$<?php echo $fila['precio']; ?></td>

<td><?php echo $fila['stock']; ?></td>

<td>

<a
href="editar_producto.php?id=<?php echo $fila['id']; ?>"
class="btn btn-warning btn-sm">

Editar

</a>

<a
href="eliminar_producto.php?id=<?php echo $fila['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('¿Eliminar producto?')">

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