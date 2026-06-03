<?php

session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: ../login.php");
    exit();
}

include("../conexion.php");

$sql = "SELECT * FROM clientes";
$resultado = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

<h2>Gestión de Clientes</h2>

<a href="index.php" class="btn btn-secondary mb-3">
Volver al Panel
</a>

<a href="agregar_cliente.php" class="btn btn-success mb-3">
Agregar Cliente
</a>

<a
href="pedidos.php"
class="btn btn-warning">

Ingresar

</a>

<table class="table table-bordered">

<thead class="table-dark">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Teléfono</th>
    <th>Acciones</th>
</tr>
</thead>

<tbody>

<?php while($fila=mysqli_fetch_assoc($resultado)){ ?>

<tr>

<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['correo']; ?></td>
<td><?php echo $fila['telefono']; ?></td>

<td>

<a
href="editar_cliente.php?id=<?php echo $fila['id']; ?>"
class="btn btn-warning btn-sm">

Editar

</a>

<a
href="eliminar_cliente.php?id=<?php echo $fila['id']; ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('¿Eliminar cliente?')">

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