"use strict"
 
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


