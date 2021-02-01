let randomNumber = Math.round(Math.random() * 100)
let nombreEssai = 0

console.log(randomNumber)

let answer = prompt ("Veuillez trouver le nombre mystere")

while (randomNumber != answer){
    if (answer < randomNumber){
        alert("Le nombre mystere est plus grand" )
        nombreEssai ++;
    } else if(answer > randomNumber) {
        alert("Le nombre mystere est plus petit")
        nombreEssai ++;
    } else {
        alert("gg vous avez trouvé en " + nombreEssai + " essai")
        break
    }
    answer = prompt ("Veuillez trouver le nombre mystere")
}
