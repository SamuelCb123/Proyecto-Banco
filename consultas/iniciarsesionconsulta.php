<?php
include('conexion.php');
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$consulta = "SELECT `nombre`, `email` FROM `usuarios` WHERE `nombre` = '$nombre' AND `email` = '$email'";
$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
echo "hs iniciado sesion correctamente";
}
else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}


mysqli_close($conexion);
?>