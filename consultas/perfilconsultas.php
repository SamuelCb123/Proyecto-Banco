<?php
include('conexion.php');
session_start();

$id_usuario = $_SESSION['id_usuario'];

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$codigopostal = $_POST['codigopostal'];
$fechadenacimiento = $_POST['fechadenacimiento'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$Pais = $_POST['Pais'];
$provincia = $_POST['provincia'];


$consulta = "UPDATE usuarios 
SET nombre = IF('$nombre' <> '', '$nombre', nombre),
    apellidos = IF('$apellidos' <> '', '$apellidos', apellidos),
    codigopostal = IF('$codigopostal' <> '', '$codigopostal', codigopostal),
    fechadenacimiento = IF('$fechadenacimiento' <> '', '$fechadenacimiento', fechadenacimiento),
    direccion = IF('$direccion' <> '', '$direccion', direccion),
    ciudad = IF('$ciudad' <> '', '$ciudad', ciudad),
    Pais = IF('$Pais' <> '', '$Pais', Pais),
    provincia = IF('$provincia' <> '', '$provincia', provincia)
WHERE id_usuario = '$id_usuario'";

$resultado = mysqli_query($conexion, $consulta);
mysqli_close($conexion);
