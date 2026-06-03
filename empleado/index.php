<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login.php");
    exit();
}

if($_SESSION['rol'] != 2){
    header("Location: ../login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">

<title>Panel Empleado</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand">
💎 Empleado Joyería
</a>

<a href="../logout.php" class="btn btn-danger">
Cerrar Sesión
</a>

</div>

</nav>

<div class="container mt-4">

<h2>Panel Empleado</h2>

<div class="row">

<div class="col-md-4">

<div class="card">

<div class="card-body text-center">

<h4>Productos</h4>

<a
href="productos.php"
class="btn btn-primary">

Ingresar

</a>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card">

<div class="card-body text-center">

<h4>Clientes</h4>

<a
href="clientes.php"
class="btn btn-success">

Ingresar

</a>

</div>

</div>

</div>

<div class="col-md-4">

<div class="card">

<div class="card-body text-center">

<h4>Pedidos</h4>

<a href="agregar_pedidos.php" class="btn btn-success">
    Ingresar
</a>

</div>

</div>

</div>

</div>

</div>

</body>

</html>