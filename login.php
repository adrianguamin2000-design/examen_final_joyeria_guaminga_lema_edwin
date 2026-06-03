<?php
session_start();

if(isset($_SESSION['usuario'])){
    header("Location: validar.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Login Joyería</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/estilos.css">

</head>

<body>

<div class="container">

<div class="row justify-content-center mt-5">

<div class="col-md-5">

<div class="card shadow">

<div class="card-header text-center">

<h3 class="logo">
Sistema de Gestión Joyería
</h3>

</div>

<div class="card-body">

<form
action="validar.php"
method="POST">

<div class="mb-3">

<label>
Correo
</label>

<input
type="email"
name="email"
class="form-control"
required>

</div>

<div class="mb-3">

<label>
Contraseña
</label>

<input
type="password"
name="password"
id="password"
class="form-control"
required>

</div>

<div class="mb-3">

<input
type="checkbox"
onclick="mostrarPassword()">

Mostrar contraseña

</div>

<button
type="submit"
class="btn btn-primary btn-login">

Ingresar

</button>

</form>

</div>

</div>

</div>

</div>

</div>

<script src="js/funciones.js"></script>

</body>

</html>