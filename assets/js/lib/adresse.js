let ul = document.getElementById("ul")
let form_inscription = document.getElementById("inscription");
let champ_adresse = form_inscription.elements["adresse"];

form_inscription.addEventListener('input', valider);



function valider (event) {
    
    fetch("http://api-adresse.data.gouv.fr/search/?q="+ champ_adresse.value)
    .then(res => res.json())
    .then(resultat => {
        ul.innerHTML = ""
        for (i in resultat.features){
            console.log(resultat.features[i].properties.city)
            let li = document.createElement("li")
            li.classList.add("list-group-item")
            li.innerText = resultat.features[i].properties.city
            ul.appendChild(li)
        }
    })
    event.preventDefault();
}
