// déclaration de la promesse  !

const demarrer = new Promise((resolve, reject) =>{
    let test = true;

    if(test){
        resolve();
    } else {
        reject();
    }
})

// utilisation de la promesse ! 

demarrer.then(() =>{
    console.log("Good")
}).catch(() => {
    console.log("Oops something went wrong, please try again...")
})

/////////////////////////////////////////////////////////////

const calcul = new Promise ((resolve, reject) => {
    const result = 2 / 1

    if(result){
        resolve(result);
    }else{
        reject();
    }
})

calcul.then((result) => {
    console.log("Resultat:",result)
}).catch(() => {
    console.log("Oops something went wrong, please try again...")
});



let array = [1,2,3,4];

let newArray = array.map((el) => el * el)

console.log(array)
console.log(newArray)

/////////////////////////////////////////////////////////////

// ICI je déclare un tableau avec des noms
prenoms = 
[
    "Maya",
    "Yacine",
    "Arthur",
    "Gon",
    "Hisoka",
    "Meruem,",
    "Nezuko",
    "bilal",
    "mehdi",
    "hamza",
    "lyana",
] 


// ici je céer une fonction qui prend en parametre un tableau et qui retourne un tableau qui contient seulement les noms avec un A et les transfo en min
function avecA (array){
    return array.toLowerCase().includes("a");
}


// ici je créer une fonction qui prend en parametre un tableau qui met tous en maj
function maj (array){
    return array.toUpperCase();
}


// ici j'applique les fonctions a mon tableau 
function traitement (array){
    console.log("ici le test pour le traitement")
    return array.filter(avecA).map(maj)
}

resultat = traitement(prenoms)
console.log(resultat)

/////////////////////////////////////////////////////////////////////////////////////

let myArray1 = ["A","B","C","D","E","F","G","H","I","J","K","L"]
for (let i = 0; i < myArray1.length; i++){
    console.log("Je suis a l'index " + i + "  je suis équivalent a  " + myArray1[i])
}

console.log("fin de la boucle for et début de la forEach")

myArray1.forEach(function(element, index){
    console.log("Je suis a l'index",index,"je suis équivalent a" ,element)
})
 