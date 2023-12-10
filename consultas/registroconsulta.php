<?php
include('conexion.php');

function validarDNI($DNI){
    return preg_match('/^[0-9]{8}[A-Za-z]$/', $DNI);
}

session_start(); 

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$DNI = $_POST['DNI'];
$email = $_POST['email'];
$Pais = $_POST['Pais'];

if (!validarDNI($DNI)) {
    echo "Error: El DNI no tiene el formato correcto.";
    exit();
}

$consultaVerificar = "SELECT id_usuario FROM usuarios WHERE DNI = '$DNI' OR email = '$email'";
$resultadoVerificar = mysqli_query($conexion, $consultaVerificar);

if (mysqli_num_rows($resultadoVerificar) > 0) {
    echo "Error: El DNI o el correo ya están registrados.";
    exit();
}

$consultaInsertar = "INSERT INTO usuarios (nombre, apellidos, DNI, email, Pais) VALUES ('$nombre', '$apellidos', '$DNI', '$email', '$Pais')";
$resultadoInsertar = mysqli_query($conexion, $consultaInsertar);

if ($resultadoInsertar) {
    $id_usuario = mysqli_insert_id($conexion);
    $_SESSION['id_usuario'] = $id_usuario; 
    header("location: ../iniciarsesion.php");
} else {
    echo "Error en la consulta de inserción: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>

