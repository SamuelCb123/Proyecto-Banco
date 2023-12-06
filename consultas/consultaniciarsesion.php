<?php
session_start();

include('conexion.php');

$nombre = $_POST['nombre'];
$email = $_POST['email'];

$consulta2 = "SELECT * FROM administradores WHERE nombre = '$nombre' AND email = '$email'";
$resultado = mysqli_query($conexion, $consulta2);

if (!$resultado) {
    echo "Error en la consulta: " . mysqli_error($conexion);
} else {
    if (mysqli_num_rows($resultado) > 0) {
        $admin = mysqli_fetch_assoc($resultado);
        $_SESSION['admin_id'] = $admin['id'];
        header("location: ../admin.php");
        exit();
    }
}

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

$consulta_usuarios = "SELECT * FROM usuarios";
$resultado_usuarios = mysqli_query($conexion, $consulta_usuarios);
if ($resultado_usuarios) {
    echo "<h2>Información de Usuarios</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Apellidos</th><th>DNI</th><th>Email</th><th>Pais</th></tr>";

    while ($fila = mysqli_fetch_assoc($resultado_usuarios)) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['apellidos'] . "</td>";
        echo "<td>" . $fila['DNI'] . "</td>";
        echo "<td>" . $fila['email'] . "</td>";
        echo "<td>" . $fila['Pais'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}


?>
