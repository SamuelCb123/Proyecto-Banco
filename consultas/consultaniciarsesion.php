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
}
?>
