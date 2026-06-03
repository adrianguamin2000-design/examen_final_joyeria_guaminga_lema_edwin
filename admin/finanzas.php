<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login.php");
    exit();
}

include("../conexion.php");

$resultado = mysqli_query(
$conn,
"SELECT * FROM finanzas ORDER BY fecha DESC"
);

?>

<!DOCTYPE html>
<html>

<head>

<title>Finanzas</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>Finanzas</h2>

<a href="index.php" class="btn btn-secondary mb-3">
Volver al Panel
</a>

<a href="agregar_finanza.php" class="btn btn-success mb-3">
Nuevo Movimiento
</a>

<table class="table table-bordered">

<thead class="table-dark">

<tr>
<th>ID</th>
<th>Fecha</th>
<th>Tipo</th>
<th>Descripción</th>
<th>Monto</th>
</tr>

</thead>

<tbody>

<?php while($fila=mysqli_fetch_assoc($resultado)){ ?>

<tr>

<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['fecha']; ?></td>
<td><?php echo $fila['tipo']; ?></td>
<td><?php echo $fila['descripcion']; ?></td>
<td>$<?php echo $fila['monto']; ?></td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</body>
</html>