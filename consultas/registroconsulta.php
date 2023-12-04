<?php
include('conexion.php');
function validarDNI($DNI){
    return preg_match('/^[0-9]{8}[A-Za-z]$/', $DNI);
}
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$DNI = $_POST['DNI'];
$email = $_POST['email'];
$Pais = $_POST['Pais'];
$foto = $_FILES['foto'];

$fotos = "Proyecto-Banco/img";


if (!validarDNI($DNI)) {
    echo "Error: El DNI no tiene el formato correcto.";
    exit();
}

$consulta = "INSERT INTO usuarios (nombre, apellidos, DNI, email, Pais) VALUES ('$nombre', '$apellidos', '$DNI', '$email', '$Pais')";

$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    $id_usuario = mysqli_insert_id($conexion);
    session_start();
    $_SESSION['id_usuario'] = $id_usuario;
    header("location: ../iniciarsesion.php");
    
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}


mysqli_close($conexion);
?>