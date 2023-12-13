 "use strict";
"use strict";

let nombreUsuario = nombreUsuarioPHP;
let diaSemana = new Date().toLocaleDateString('es-ES', { weekday: 'long' });
let fecha = new Date().toLocaleDateString('es-ES');

function mensajeBienvenida() {
    let mensajeUsuario = document.getElementById("mensaje-bienvenida");

    if (mensajeUsuario) {
        mensajeUsuario.innerHTML = "Hola " + nombreUsuario.toUpperCase() + ", hoy es " + diaSemana + " " + fecha + ".<br>Bienvenido, " + nombreUsuario + "!<br>Fecha de inicio de sesión: " + new Date().toLocaleString('es-ES');
    } 
}

mensajeBienvenida();



function openModal() {
    document.getElementById("modal").style.display = "block";
}

function closeModal() {
    document.getElementById("modal").style.display = "none";
}

document.getElementById("buttonmodal").onclick = openModal;



document.addEventListener('DOMContentLoaded', function () {
    const showMenuBtn = document.getElementById('show-menu-btn');
    const hideMenuBtn = document.getElementById('hide-menu-btn');
    const sidebar = document.querySelector('.sidebar');

    showMenuBtn.addEventListener('click', function () {
        sidebar.classList.add('visible');
    });

    hideMenuBtn.addEventListener('click', function () {
        sidebar.classList.remove('visible');
    });


}


)
