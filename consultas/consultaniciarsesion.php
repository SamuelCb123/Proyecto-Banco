<?php
session_start();

include('conexion.php');

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

$consulta2 = "SELECT * FROM administradores WHERE nombre = '$nombre' AND email = '$email'";
$resultadoAdmin = mysqli_query($conexion, $consulta2);

if (!$resultadoAdmin) {
    echo "Error en la consulta de administradores: " . mysqli_error($conexion);
} else {
    if (mysqli_num_rows($resultadoAdmin) > 0) {
        $admin = mysqli_fetch_assoc($resultadoAdmin);
        $_SESSION['admin_id'] = $admin['id'];
        header("location: ../admin.php");
        exit();
    }
}


$consulta = "SELECT `nombre`, `email`, `id_usuario` FROM `usuarios` WHERE `nombre` = '$nombre' AND `email` = '$email'";
$resultadoUsuario = mysqli_query($conexion, $consulta);

if (!$resultadoUsuario) {
    echo "Error en la consulta de usuarios: " . mysqli_error($conexion);
} else {
    if (mysqli_num_rows($resultadoUsuario) > 0) {
        $usuario = mysqli_fetch_assoc($resultadoUsuario);
        $_SESSION['id_usuario'] = $usuario['id_usuario']; 
        $_SESSION['nombre'] = $nombre;

      
        header("location: ../perfil.php");
        exit();
    } else {
      
        if (isset($_SESSION['admin_id'])) {
            header("location: ../registro.php");
            exit();
        }
    }
}

$consulta4 = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $consulta4);

if ($resultado) {
    echo "<h2>Información de Usuarios</h2>";
    echo "<table border='1' class='tabla'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Apellidos</th><th>DNI</th><th>Email</th><th>Pais</th><th>Fecha de nacimiento</th><th>direccion</th><th>codigopostal</th><th>ciudad</th><th>provincia</th></tr>";

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . (isset($fila['id_usuario']) ? $fila['id_usuario'] : '') . "</td>";
        echo "<td>" . (isset($fila['nombre']) ? $fila['nombre'] : '') . "</td>";
        echo "<td>" . (isset($fila['apellidos']) ? $fila['apellidos'] : '') . "</td>";
        echo "<td>" . (isset($fila['DNI']) ? $fila['DNI'] : '') . "</td>";
        echo "<td>" . (isset($fila['email']) ? $fila['email'] : '') . "</td>";
        echo "<td>" . (isset($fila['Pais']) ? $fila['Pais'] : '') . "</td>";
        echo "<td>" . (isset($fila['direccion']) ? $fila['direccion'] : '') . "</td>";
        echo "<td>" . (isset($fila['codigopostal']) ? $fila['codigopostal'] : '') . "</td>";
        echo "<td>" . (isset($fila['ciudad']) ? $fila['ciudad'] : '') . "</td>";
        echo "<td>" . (isset($fila['provincia']) ? $fila['provincia'] : '') . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}
?>
