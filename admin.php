<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="SASS/CSS/style.css" rel="stylesheet">
    <link href="SASS/CSS/components/Transferencias.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
<div class="sidebar">
        <a href="#">
            <i class="fa-solid fa-house"><span>Mi cuenta</span></i>
        </a>
        <button id="buttonmodal">Editar perfil</button>
        <div class="caja"></div>
        <a href="Transferencias.php">
            <i class="fa-solid fa-money-bill"><span>Transferencias</span></i>
        </a>
        <a href="#">
            <i class="fa-solid fa-building-columns"><span>Prestamo</span></i>
        </a>
        <a href="#">
            <i class="fa-regular fa-message"><span>Mensajes</span></i>
        </a>
        <a href="iniciarsesion.php">
            <i class="fa-solid fa-door-open"><span>Salir</span></i>
        </a>
    </div>
<?php
 include('consultas/consultaniciarsesion.php');
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

</body>
</html>