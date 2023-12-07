<?php
session_start();

include('conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



<?php
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

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
        
    }
}

$consulta4 = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $consulta4);
if ($resultado) {
    echo "<h2>Información de Usuarios</h2>";
    echo "<table border='1'class='tabla'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Apellidos</th><th>DNI</th><th>Email</th><th>Pais</th></tr>";

    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
     
        echo "<td>" . (isset($fila['id']) ? $fila['id'] : '') . "</td>";
        echo "<td>" . (isset($fila['nombre']) ? $fila['nombre'] : '') . "</td>";
        echo "<td>" . (isset($fila['apellidos']) ? $fila['apellidos'] : '') . "</td>";
        echo "<td>" . (isset($fila['DNI']) ? $fila['DNI'] : '') . "</td>";
        echo "<td>" . (isset($fila['email']) ? $fila['email'] : '') . "</td>";
        echo "<td>" . (isset($fila['Pais']) ? $fila['Pais'] : '') . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}
?>
