<?php

session_start();

if(!isset($_SESSION['usuario']) || $_SESSION['rol'] != 2){
    header("Location: ../login.php");
    exit();
}

include("../conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];

$sql = "UPDATE clientes SET

nombre='$nombre',
correo='$correo',
telefono='$telefono'

WHERE id='$id'";

if(mysqli_query($conn,$sql)){

    echo "
    <script>
        alert('Cliente actualizado correctamente');
        window.location='clientes.php';
    </script>
    ";

}else{

    echo "
    <script>
        alert('Error al actualizar');
        window.location='clientes.php';
    </script>
    ";

}

?>