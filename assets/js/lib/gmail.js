let btn = document.getElementById("button");
let texte = document.getElementById("mails");
let nbMails = document.getElementById("nbMails")
let compteur = 0


btn.addEventListener("click", checkMail)

function checkMail (){
    console.log("Tu as cliqué sur le boutton");
    let mail = document.createElement("p")
    mail.innerText = "nouveau mail";
    texte.appendChild(mail)
    compteur ++
    nbMails.innerText = "Il y a " + compteur + " mail";
    if (compteur > 1 ){
        nbMails.innerText +="s"
    }
}