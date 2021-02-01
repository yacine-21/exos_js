let champ = document.getElementById('champ')
let restants = document.getElementById("restants")
let button = document.getElementById("tweet")
let photo = document.getElementById("photo")

champ.addEventListener("input", update);
photo.addEventListener('change', update);

let nbMax = 10;
let nbPhoto = 5;

function update (){
    let nbCaracteres = champ.value.length;

    let nbCaracteresRestants = nbMax - nbCaracteres;

    if (photo.checked) {
        nbCaracteresRestants -= nbPhoto;
    } 


    restants.innerText = nbCaracteresRestants;

    if (nbCaracteresRestants < 0){
        restants.classList.add("limite");
        button.setAttribute("disabled", true);
    } else {
        restants.classList.remove("limite")
        button.removeAttribute("disabled");
    }

    console.log(champ.value)
}
