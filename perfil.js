"use strict";
"use strict";

// Obtener el nombre de usuario desde PHP
let nombreUsuario = "<?php echo isset($_SESSION['nombre']) ? $_SESSION['nombre'] : 'Usuario Desconocido'; ?>";
let diaSemana = new Date().toLocaleDateString('en-US', { weekday: 'long' });
let fecha = new Date().toLocaleDateString('en-US');

function mensajeBienvenida() {
    let mensajeUsuario = document.getElementById("mensaje-bienvenida");

    if (mensajeUsuario) {
        mensajeUsuario.innerHTML = "Hola " + nombreUsuario.toUpperCase() + ", hoy es " + diaSemana + " " + fecha + ".<br>Bienvenido, " + nombreUsuario + "!<br>Fecha de inicio de sesión: " + new Date().toLocaleString();
    } else {
        alert("Hola " + nombreUsuario.toUpperCase() + ", hoy es " + diaSemana + " " + fecha + ".\nBienvenido, " + nombreUsuario + "!\nFecha de inicio de sesión: " + new Date().toLocaleString());
    }
}

// Llamar a la función cuando el DOM esté completamente cargado
document.addEventListener("DOMContentLoaded", mensajeBienvenida);



