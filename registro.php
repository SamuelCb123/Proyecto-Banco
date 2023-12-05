<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="SASS/CSS/components/header.css" rel="stylesheet">
    <link href="SASS/CSS/style.css" rel="stylesheet">
</head>

<body>
<header class="header">
    <nav class="nav">
        <a href="#" class="logo">
            <img src="img/logobancosa.png" alt="" width="110px">
        </a>
        <a href="registro.php" class="button">Registro</a>
        <a href="iniciarsesion.php" class="button">Iniciar sesión</a>
    </nav>
</header>
<div class="formulario">
    <form method="post" action="consultas/registroconsulta.php" enctype="multipart/form-data">
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
            <input type="text" name="Pais" placeholder="pais"required>
            <img class="input-icon" src="persona.png" alt=""width="30px">
        </div>
        <div class="input-wrapper">
            <input type="file" name="foto" placeholder="foto">
            <img class="input-icon" src="" alt="" width="">
                </div>

        <input class="btn" type="submit" name="enviar" value="registros">
</body>
</html>