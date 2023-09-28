document.getElementById("btn_menu").addEventListener("click", mostrar_menu);
document.getElementById("back_menu").addEventListener("click", ocultar_menu);

nav = document.getElementById("nav");
background_menu = document.getElementById("back_menu");
btn_leerMas = document.getElementById("btn");
function mostrar_menu(){

    nav.style.right = "0px";
    background_menu.style.display = "block";
    btn_leerMas.style.display="none";
}

function ocultar_menu(){

    nav.style.right = "-250px";
    background_menu.style.display = "none";
    btn_leerMas.style.display="flex";
}