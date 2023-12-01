
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Usuario</title>
    <script>
        let nombreUsuarioPHP = "<?php echo isset($_SESSION['nombre']) ? $_SESSION['nombre'] : 'Usuario Desconocido'; ?>";
    </script>
</head>
<body>
    <p id="mensaje-bienvenida"></p>
    
    <script src="perfil.js"></script>
</body>
</html>