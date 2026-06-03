<?php

/*
|--------------------------------------------------------------------------
| VALIDAR LOGIN
|--------------------------------------------------------------------------
*/

session_start();

include("conexion.php");

/*
|--------------------------------------------------------------------------
| RECIBIR DATOS DEL FORMULARIO
|--------------------------------------------------------------------------
*/

$email = $_POST['email'];
$password = $_POST['password'];

/*
|--------------------------------------------------------------------------
| BUSCAR USUARIO
|--------------------------------------------------------------------------
*/

$sql = "SELECT
            usuarios.id,
            usuarios.nombre,
            usuarios.email,
            usuarios.password,
            roles.nombre AS rol,
            roles.id AS id_rol
        FROM usuarios
        INNER JOIN roles
        ON usuarios.id_rol = roles.id
        WHERE usuarios.email = '$email'
        AND usuarios.password = '$password'";

$resultado = mysqli_query($conn,$sql);

if(mysqli_num_rows($resultado) > 0){

    $usuario = mysqli_fetch_assoc($resultado);

    $_SESSION['id'] = $usuario['id'];
    $_SESSION['usuario'] = $usuario['nombre'];
    $_SESSION['rol'] = $usuario['id_rol'];
    $_SESSION['nombre_rol'] = $usuario['rol'];

    if($usuario['id_rol'] == 1){

        header("Location: admin/index.php");

    }else{

        header("Location: empleado/index.php");

    }

}else{

    echo "
    <script>
        alert('Correo o contraseña incorrectos');
        window.location='login.php';
    </script>
    ";

}
?>