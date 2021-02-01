let button = document.querySelector(".Hamburger")
let menu = document.getElementById("menu")
let iconeOpen = document.querySelector(".Hamburger--open")
let iconeClose = document.querySelector(".Hamburger--close")



button.addEventListener("click",OpenMenu)

function OpenMenu(){
    // ajoue et enleve la classe
    menu.classList.toggle("opened");
    // ajoute/enleve l'attribut hidden
    // iconeOpen.toggleAttribute('hidden');
    // iconeClose.toggleAttribute('hidden');
    [iconeOpen, iconeClose].map(icone => icone.toggleAttribute("hidden"));
}