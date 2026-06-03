<?php

session_start();

if($_SESSION['rol'] != 2){
    header("Location: ../login.php");
}

include("../conexion.php");

$resultado =
mysqli_query($conn,
"SELECT * FROM productos");

?>

<!DOCTYPE html>
<html>

<head>

<title>Productos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>Productos</h2>

<a href="index.php" class="btn btn-secondary mb-3">
Volver
</a>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Precio</th>
<th>Stock</th>
</tr>

<?php while($fila=mysqli_fetch_assoc($resultado)){ ?>

<tr>

<td><?= $fila['id'] ?></td>
<td><?= $fila['nombre'] ?></td>
<td>$<?= $fila['precio'] ?></td>
<td><?= $fila['stock'] ?></td>

</tr>

<?php } ?>

</table>

</div>

</body>

</html>