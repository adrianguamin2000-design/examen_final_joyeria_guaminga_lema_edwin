<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login.php");
    exit();
}

if($_SESSION['rol'] != 1){
    header("Location: ../login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Panel Administrador</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f4f4f4;
}

.card{
    transition:0.3s;
}

.card:hover{
    transform:scale(1.03);
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand">
💎 Sistema Joyería
</a>

<div>

<span class="text-white me-3">
<?php echo $_SESSION['usuario']; ?>
</span>

<a href="../logout.php" class="btn btn-danger">
Cerrar Sesión
</a>

</div>

</div>

</nav>

<div class="container mt-5">

<h2 class="mb-4">
Panel de Administración
</h2>

<div class="row">

<!-- PRODUCTOS -->

<div class="col-md-3 mb-4">

<div class="card shadow">

<div class="card-body text-center">

<h4>💍 Productos</h4>

<p>
Administrar inventario.
</p>

<a
href="productos.php"
class="btn btn-primary">

Ingresar

</a>

</div>

</div>

</div>

<!-- CLIENTES -->

<div class="col-md-3 mb-4">

<div class="card shadow">

<div class="card-body text-center">

<h4>👤 Clientes</h4>

<p>
Administrar clientes.
</p>

<a
href="clientes.php"
class="btn btn-success">
Ingresar
</a>

</div>

</div>

</div>

<!-- PEDIDOS -->

<div class="col-md-3 mb-4">

<div class="card shadow">

<div class="card-body text-center">

<h4>📦 Pedidos</h4>

<p>
Administrar pedidos.
</p>

<a
href="pedidos.php"
class="btn btn-warning">

Ingresar

</a>

</div>

</div>

</div>

<!-- FINANZAS -->

<div class="col-md-3 mb-4">

<div class="card shadow">

<div class="card-body text-center">

<h4>💲 Finanzas</h4>

<p>
Administrar ingresos.
</p>

<a
href="finanzas.php"
class="btn btn-info">

Ingresar

</a>

</div>

</div>

</div>

</div>

</div>

</body>
</html>
