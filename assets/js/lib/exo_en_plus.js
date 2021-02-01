// créer mon tableau
prenoms = ["Maya la moche","Yacine","Arthur","Gon","Hisoka","Meruem"]

/* créer une fonction qui retourne un nouveau 
tableau contenant uniquement les prénoms de la liste
contenant la lettre 'a'. Les prénoms de ce nouveau 
tableau doivent être stockés en majuscule.
*/

// function newTableau(prenom){
//   let secondTableau = []
  
//    for (let i = 0; i < prenom.length; i++){
//      if (prenom[i].toLowerCase().includes("a")){
//        secondTableau.push(prenom[i].toUpperCase());
//      }
//    }
  
//     return secondTableau
// }

// console.log(newTableau(prenom))

// console.log(prenom)


function avecA (prenoms){
    return prenom.toLowerCase.includes("a");
}

function maj (prenoms){
    return prenoms.toUpperCase;
}

function traitement (prenoms){
    return prenoms.filter(avecA).map(maj)
}

console.log(traitement(prenoms))
