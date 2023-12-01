// Usa la variable global para obtener el nombre de usuario
let nombreUsuario = nombreUsuarioPHP;
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

document.addEventListener("DOMContentLoaded", mensajeBienvenida);
