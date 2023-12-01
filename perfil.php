
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script>
        let nombreUsuarioPHP = "<?php echo isset($_SESSION['nombre']) ? $_SESSION['nombre'] : 'Usuario Desconocido'; ?>";
    </script>
</head>
<body>
<header class="menulateral">
    <div class="left_area">
<p id="mensaje-bienvenida"></p>
</div>
</header>
<div class="sidebar">
    <a href="#"></a>
    <i class="fa-solid fa-house"><span>Mi cuenta</span></i>
            <button id="abrirModal">Abrir Modal</button>

  <div id="ventanaModal" class="modal">
    <div class="modal-content">
        <span class="cerrar">&times;</span>
        <h2>Ventana modal</h2>
        <p>Esto es el texto de la ventana</p>
    </div>
  </div>
            
  
        <div class="cajas">
        
      
        </div>
        <a href="#">
            <i class="fa-solid fa-money-bill"><span>Transferencias</span></i>
        </a>
        <a href="#">
            <i class="fa-solid fa-building-columns"><span>Prestamo</span></i>
        </a>
        <a href="#">
            <i class="fa-regular fa-message"><span>Mensajes</span></a></i>
        <a href="iniciarsesion.php">
            <i class="fa-solid fa-door-open"><span>Salir</span></a></i>
    </div>

</div>
 
    
    <script src="perfil.js"></script>
</body>
</html>