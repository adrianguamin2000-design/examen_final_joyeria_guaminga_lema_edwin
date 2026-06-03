<?php

session_start();

if(!isset($_SESSION['usuario']) || $_SESSION['rol'] != 2){
    header("Location: ../login.php");
    exit();
}

include("../conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id='$id'";

if(mysqli_query($conn,$sql)){

    echo "
    <script>
        alert('Cliente eliminado correctamente');
        window.location='clientes.php';
    </script>
    ";

}else{

    echo "
    <script>
        alert('Error al eliminar');
        window.location='clientes.php';
    </script>
    ";

}

?>