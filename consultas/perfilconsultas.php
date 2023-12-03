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

$consulta = "UPDATE usuarios SET nombre=?, apellidos=?, codigopostal=?, fechadenacimiento=?, direccion=?, ciudad=?, Pais=?, provincia=? WHERE Pais=?";
$stmt = mysqli_prepare($conexion, $consulta);

// Check if the statement was prepared successfully
if ($stmt) {
    // Bind parameters
    mysqli_stmt_bind_param($stmt, "sssssssss", $nombre, $apellidos, $codigopostal, $fechadenacimiento, $direccion, $ciudad, $Pais, $provincia, $Pais);

    // Execute the statement
    $resultado = mysqli_stmt_execute($stmt);

    // Check for errors
    if ($resultado) {
        echo "Update successful";
    } else {
        echo "Error updating record: " . mysqli_error($conexion);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "Error preparing statement: " . mysqli_error($conexion);
}

// Close the connection
mysqli_close($conexion);
?>
