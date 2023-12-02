<?php
session_start();

include('conexion.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];

$consulta = "SELECT `nombre`, `email` FROM `usuarios` WHERE `nombre` = '$nombre' AND `email` = '$email'";
$resultado = mysqli_query($conexion, $consulta);

if (!$resultado) {
    echo "Error en la consulta: " . mysqli_error($conexion);
} else {
    if (mysqli_num_rows($resultado) > 0) {
        $_SESSION['nombre'] = $nombre;
        header("location: ../perfil.php");
        exit(); 
    } else {
        echo "Usuario no encontrado";
    }
}

mysqli_close($conexion);
?>
