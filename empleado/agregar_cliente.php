<?php
session_start();

if($_SESSION['rol'] != 2){
    header("Location: ../login.php");
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Nuevo Cliente</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>Registrar Cliente</h2>

<form action="guardar_cliente.php" method="POST">

<div class="mb-3">

<label>Nombre</label>

<input
type="text"
name="nombre"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Correo</label>

<input
type="email"
name="correo"
class="form-control">

</div>

<div class="mb-3">

<label>Teléfono</label>

<input
type="text"
name="telefono"
class="form-control">

</div>

<button class="btn btn-success">
Guardar
</button>

<a href="clientes.php" class="btn btn-secondary">
Volver
</a>

</form>

</div>

</body>
</html>