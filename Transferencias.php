<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="SASS/CSS/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
<div class="sidebar">
        <a href="#">
            <i class="fa-solid fa-house"><span>Mi cuenta</span></i>
            <button id="buttonmodal">Editar perfil</button>
            
            <div class="sidebar">
        <a href="#">
            <i class="fa-solid fa-house"><span>Mi cuenta</span></i>
            <button id="buttonmodal">Editar perfil</button>
            
            <div id="modal" class="modal_container">
                <div class="modal-content">
                <script src="perfil.js"></script>
                    <h2>Editar perfil</h2>
                    <script src="perfil2.js"></script>
                    <form method="post" action="consultas/perfilconsultas.php">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre">

                        <label for="apellidos">Apellidos</label>
                        <input type="text" id="apellidos" name="apellidos">

                        <label for="codigo">codigopostal:</label>
                        <input type="number" id="codigopostal" name="codigopostal">

                        <label for="telefono">fechadenacimiento</label>
                        <input type="date" id="fechadenacimiento" name="fechadenacimiento">

                        <label for="direccion">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" >

                        <label for="ciudad">Ciudad:</label>
                        <input type="text" id="ciudad" name="ciudad">

                        <label for="pais">País:</label>
                        <input type="text" id="Pais" name="Pais">

                        <label for="provincia">provincia</label>
                        <input type="text" id="provincia" name="provincia">

                       

                        <input type="submit" value="Guardar cambios">
                    </form>
                    
                  
                    <div id="close" class="close" onclick="closeModal()">&times;</div>
                </div>
            </div>
        </a>
        <div class="caja">
        
        </div>
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
 <form method="post" action="" class="ingresar">
    <label for="ingresardinero">Ingresar dinero</label>
    <input type="number" id="ingresardinero" name="ingresardinero">
    <input  type="submit" value="Guardar cambios">
 </form>
</body>
</html>