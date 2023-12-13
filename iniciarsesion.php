<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <link href="SASS/CSS/components/formulario.css" rel="stylesheet">
    <link href="SASS/CSS/components/header.css" rel="stylesheet">

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
<div id='banner'>
<img src="img/ginkou.png">
</div>
<div class="formulario">

<form method="post" action= "consultas/consultaniciarsesion.php">
    <p>Iniciar sesion</p>
    <div class="input-wrapper">
        <input type="text" name="nombre" placeholder="Nombre">
        <img class="input-icon" src="persona.png" alt=""width="30px">
    </div>
    <div class="input-wrapper">
        <input type="text" name="email" placeholder="email">
        <img class="input-icon" src="candado.png" alt="" width="30px">

    </div>
    <div class="botones">
    <input class="btn" type="submit" name="enviar" value="Iniciar sesion">
    <p>¿Aun no tienes cuererenta? <a href="registro.php">Regístrate</a></p>
   
    </div>
    

</form>
</div>
</div>
</body>
</html>