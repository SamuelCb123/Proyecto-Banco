<?php
include('conexion.php');
session_start();

// Verificar si la clave 'id_usuario' está presente en $_SESSION
if (isset($_SESSION['id_usuario'])) {
    $id_usuario = $_SESSION['id_usuario'];

    // Obtener datos del formulario
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
    $apellidos = mysqli_real_escape_string($conexion, $_POST['apellidos']);
    $codigopostal = mysqli_real_escape_string($conexion, $_POST['codigopostal']);
    $fechadenacimiento = mysqli_real_escape_string($conexion, $_POST['fechadenacimiento']);
    $direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
    $ciudad = mysqli_real_escape_string($conexion, $_POST['ciudad']);
    $Pais = mysqli_real_escape_string($conexion, $_POST['Pais']);
    $provincia = mysqli_real_escape_string($conexion, $_POST['provincia']);

    // Consulta SQL para actualizar datos en la base de datos
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

    // Ejecución de la consulta
    $resultado = mysqli_query($conexion, $consulta);

    // Verificar el resultado de la consulta
    if ($resultado) {
        echo "Datos actualizados correctamente.";
    } else {
        echo "Error al actualizar los datos: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
} else {
    echo "Error: La clave 'id_usuario' no está definida en la sesión.";
}
?>
