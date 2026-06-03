<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login.php");
    exit();
}

include("../conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id='$id'";
$resultado = mysqli_query($conn,$sql);

$producto = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Editar Producto</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>Editar Producto</h2>

<form action="actualizar_producto.php" method="POST">

<input
type="hidden"
name="id"
value="<?php echo $producto['id']; ?>">

<div class="mb-3">

<label>Nombre</label>

<input
type="text"
name="nombre"
class="form-control"
value="<?php echo $producto['nombre']; ?>"
required>

</div>

<div class="mb-3">

<label>Descripción</label>

<textarea
name="descripcion"
class="form-control"><?php echo $producto['descripcion']; ?></textarea>

</div>

<div class="mb-3">

<label>Precio</label>

<input
type="number"
step="0.01"
name="precio"
class="form-control"
value="<?php echo $producto['precio']; ?>"
required>

</div>

<div class="mb-3">

<label>Stock</label>

<input
type="number"
name="stock"
class="form-control"
value="<?php echo $producto['stock']; ?>"
required>

</div>

<button type="submit" class="btn btn-warning">
Actualizar
</button>

<a href="productos.php" class="btn btn-secondary">
Volver
</a>

</form>

</div>

</body>
</html>