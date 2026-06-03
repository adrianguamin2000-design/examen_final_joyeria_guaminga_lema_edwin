<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

<title>Nuevo Movimiento</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>Registrar Movimiento</h2>

<form action="guardar_finanza.php" method="POST">

<div class="mb-3">

<label>Tipo</label>

<select name="tipo" class="form-control">

<option>Ingreso</option>
<option>Gasto</option>

</select>

</div>

<div class="mb-3">

<label>Descripción</label>

<input
type="text"
name="descripcion"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Monto</label>

<input
type="number"
step="0.01"
name="monto"
class="form-control"
required>

</div>

<button class="btn btn-success">
Guardar
</button>

<a href="finanzas.php" class="btn btn-secondary">
Volver
</a>

</form>

</div>

</body>
</html>