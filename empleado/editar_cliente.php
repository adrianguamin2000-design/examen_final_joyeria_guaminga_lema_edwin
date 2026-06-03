<?php

session_start();

if(!isset($_SESSION['usuario']) || $_SESSION['rol'] != 2){
    header("Location: ../login.php");
    exit();
}

include("../conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM clientes WHERE id='$id'";
$resultado = mysqli_query($conn,$sql);

$cliente = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">

<title>Editar Cliente</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<h2>Editar Cliente</h2>

<form action="actualizar_cliente.php" method="POST">

<input type="hidden"
name="id"
value="<?php echo $cliente['id']; ?>">

<div class="mb-3">

<label>Nombre</label>

<input
type="text"
name="nombre"
class="form-control"
value="<?php echo $cliente['nombre']; ?>"
required>

</div>

<div class="mb-3">

<label>Correo</label>

<input
type="email"
name="correo"
class="form-control"
value="<?php echo $cliente['correo']; ?>">

</div>

<div class="mb-3">

<label>Teléfono</label>

<input
type="text"
name="telefono"
class="form-control"
value="<?php echo $cliente['telefono']; ?>">

</div>

<button type="submit" class="btn btn-warning">
Actualizar
</button>

<a href="clientes.php" class="btn btn-secondary">
Volver
</a>

</form>

</div>

</body>
</html>