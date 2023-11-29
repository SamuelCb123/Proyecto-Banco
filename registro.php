<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="SASS/css/styles.css" rel="stylesheet"
</head>

<body>
<header class="header">
    <nav class="nav">
        <a href="#" class="logo">
            <img src="img/logobancosa.png" alt="" width="110px">
        </a>
        <a href="registro.php" class="button">Registro</a>
        <a href="iniciarsesion.php" class="button">Iniciar sesrión</a>
    </nav>
</header>
<div class="formulario">
    <form method="post" action="">
        <p>registros</p>
        <div class="input-wrapper">
            <input type="text" name="nombre" placeholder="Nombre">
            <img class="input-icon" src="persona.png" alt=""width="30px">
        </div>
        <div class="input-wrapper">
            <input type="text" name="apellidos" placeholder="apellidos">
            <img class="input-icon" src="persona.png" alt=""width="30px">
        </div>
        <div class="input-wrapper">
            <input type="text" name="DNI" placeholder="DNI">
            <img class="input-icon" src="persona.png" alt=""width="30px">
        </div>
        <div class="input-wrapper">
            <input type="text" name="email" placeholder="email">
            <img class="input-icon" src="persona.png" alt=""width="30px">
        </div>
        <div class="input-wrapper">
            <input type="date" name="fechadenacimiento" placeholder="fechadenacimiento"required>
            <img class="input-icon" src="persona.png" alt=""width="30px">
        </div>
        <div class="input-wrapper">
            <input type="number" name="codigopostal" placeholder="codigopostal"required>
            <img class="input-icon" src="persona.png" alt=""width="30px">
        </div>
        <div class="input-wrapper">
            <input type="text" name="direccion" placeholder="direccion"required>
            <img class="input-icon" src="persona.png" alt=""width="30px">
        </div>
        <div class="input-wrapper">
            <input type="text" name="Ciudad" placeholder="ciudad"required>
            <img class="input-icon" src="persona.png" alt=""width="30px">
        </div>
        <div class="input-wrapper">
            <input type="text" name="Provincia" placeholder="provincia"required>
            <img class="input-icon" src="persona.png" alt=""width="30px">
        </div>
        <div class="input-wrapper">
            <input type="text" name="Pais" placeholder="pais"required>
            <img class="input-icon" src="persona.png" alt=""width="30px">
        </div>
        <input class="btn" type="submit" name="enviar" value="registros">
</body>
</html>