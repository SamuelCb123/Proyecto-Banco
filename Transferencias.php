<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="SASS/CSS/style.css" rel="stylesheet">
    <link href="SASS/CSS/components/transferencias.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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

<div class="contenido">
    <form method="post" action="consultas/ingresar.php" class="ingresar" id="ingresos">
        <label for="tipodemovimiento">Tipo de Movimiento:</label>
        <select name="tipodemovimiento" id="tipodemovimiento">
            <option value="Ingresar">Ingresar</option>
            <option value="Retirar">Retirar</option>
        </select>
        <br>
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
</div>

</body>
</html>
