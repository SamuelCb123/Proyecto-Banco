<?php
session_start();
if (isset($_SESSION['nombre'])) {
    echo "Nombre de usuario en sesión: " . $_SESSION['nombre'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Usuario</title>
</head>
<body>
    <p id="mensaje-bienvenida"></p>
    <script src="perfil.js"></script>
</body>
</html>


