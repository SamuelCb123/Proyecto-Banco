<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesiont</title>
    <link href="SASS/css/styles.css" rel="stylesheet"
</head>
<body>
<div class="formulario">



   

<form method="post" action= "consultas/iniciarsesionconsulta.php">
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
    <p>¿Aun no tienes cuenta? <a href="registro.php">Regístrate</a></p>
   
    </div>
    

</form>
</div>
</div>
</body>
</html>