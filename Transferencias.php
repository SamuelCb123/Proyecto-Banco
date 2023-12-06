<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="SASS/CSS/style.css" rel="stylesheet">
    <link href="SASS/CSS/components/perfilusuario.css" rel="stylesheet">
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

    <div class="contenido">
        <form method="post" action="" class="ingresar" id="ingresos">
            <label for="ingresardinero">Ingresar dinero</label>
            <input type="number" id="ingresardinero" name="ingresardinero">
            <input  type="submit" value="Guardar cambios">
        </form>
    </div>
</body>
</html>
