<?php
include('conexion.php');
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$DNI = $_POST['DNI'];
$email = $_POST['email'];
$Pais = $_POST['Pais'];


$consulta = "INSERT INTO usuarios (nombre, apellidos, DNI, email, Pais) VALUES ('$nombre', '$apellidos', '$DNI', '$email', '$Pais')";

$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
   echo "kimi wa subarashi hito da";
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}


mysqli_close($conexion);
?>