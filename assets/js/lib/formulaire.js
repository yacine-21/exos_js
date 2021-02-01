/* ajoute l’événement */
    let form_inscription = document.getElementById("inscription");
    let champ_nom = form_inscription.elements["nom"];
    let champ_prenom = form_inscription.elements["prenom"];
    let champ_telephone = form_inscription.elements["telephone"];
    let champ_email = form_inscription.elements["mail"];

form_inscription.addEventListener('submit', valider);
function valider (event) {
    
    
    let form_OK = true;

   
    if(champ_nom.value == ""){
        form_OK = false;
        champ_nom.classList.add("erreur");
        alert("Le nom est invalide veuillez le modifier")
    }else{
        champ_nom.classList.remove("erreur");
    }

    if(champ_prenom.value == ""){
        form_OK = false;
        champ_prenom.classList.add("erreur");
        alert("Le prenom est invalide veuillez le modifier")
    }else{
        champ_prenom.classList.remove("erreur");
    }

    if(champ_telephone.value.length != 10 || isNaN(champ_telephone.value)){
        form_OK = false;
        champ_telephone.classList.add("erreur");
        alert("Le telephone est invalide veuillez le modifier")
    } else {
        champ_telephone.classList.remove("erreur");
    }

    let regex = /^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]­{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$/ ;
    if (regex.exec(champ_email.value) == null) {
        form_OK = false;
        champ_email.classList.add("erreur");
        alert("Le mail est invalide veuillez le modifier")
    } else {
        champ_email.classList.remove("erreur");
    }

    if(!form_OK){
        event.preventDefault();
    }
}
