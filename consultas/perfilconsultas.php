<?php
include('conexion.php');
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$codigopostal = $_POST['codigopostal'];
$fechadenacimiento = $_POST['fechadenacimiento'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$Pais = $_POST['Pais'];
$provincia = $_POST['provincia'];


$consulta = "UPDATE usuarios SET nombre = '$nombre', apellidos= '$apellidos', codigopostal = '$codigopostal', fechadenacimiento ='$fechadenacimiento', direccion = '$direccion', ciudad = '$ciudad', Pais = '$Pais', provincia = '$provincia' WHERE Pais = :'$Pais' ";
$resultado = mysqli_query($conexion, $consulta);
 mysqli_close($conexion);
?>