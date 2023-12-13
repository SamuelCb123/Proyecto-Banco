<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="SASS/CSS/style.css" rel="stylesheet">
    <link href="SASS/CSS/components/admin.css" rel="stylesheet">
</head>

<body>
<button id="show-menu-btn">&#9776; Mostrar Menú</button>

<div class="sidebar">
    <a href="#">
        <i class="fa-solid fa-house"><span>Mi cuenta</span></i>
        <button id="buttonmodal">Editar perfil</button>
        <button id="hide-menu-btn">&#10005; Ocultar Menú</button>

        <div id="modal" class="modal_container">
            <div class="modal-content">
                <script src="perfil2.js"></script>
                <h2>Editar perfil</h2>

              

                <div id="close" class="close" onclick="closeModal()">&times;</div>
            </div>
        </div>
    </a>
    <div class="caja"></div>
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