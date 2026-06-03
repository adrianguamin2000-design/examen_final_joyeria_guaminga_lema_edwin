<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login.php");
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Agregar Producto</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>Nuevo Producto</h2>

<form action="guardar_producto.php" method="POST">

<div class="mb-3">

<label>Nombre</label>

<input
type="text"
name="nombre"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Descripción</label>

<textarea
name="descripcion"
class="form-control">
</textarea>

</div>

<div class="mb-3">

<label>Precio</label>

<input
type="number"
step="0.01"
name="precio"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Stock</label>

<input
type="number"
name="stock"
class="form-control"
required>

</div>

<button class="btn btn-success">
Guardar
</button>

<a href="productos.php" class="btn btn-secondary">
Volver
</a>

</form>

</div>

</body>
</html>