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


/////////////////////////////////////////////////////////////////////////////////////

    random_number = Math.round((Math.random() * 7 ))

while (random_number != 5) {
    random_number = Math.round((Math.random() * 5 ))
    console.log("JE SUIS LE NOMBRE RANDOM : "+random_number)
}


 let pos = () => {
      navigator.geolocation.getCurrentPosition(function (position) {
          latitude = position.coords.latitude;
          longitude = position.coords.longitude;
          pos = [latitude,longitude]
          console.log(pos[0], pos[1])
          pos2 = pos.map( pos => pos * random_number)
          console.log(pos2[0], pos2[1])
})};
 pos();

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

let form = document.getElementById("repo")
let owner_name = document.getElementById("owner");
let name_repos = document.getElementById("name_repo")
let div = document.getElementById("div")

form.addEventListener("submit", submit)

function submit (event){
        
    url = 'https://api.github.com/repos/'
    url += owner_name.value + "/"
    url += name_repos.value
    
    console.log(owner_name.value)
    console.log(name_repos.value)
    console.log(url)
    
    fetch(url)
    .then(res => res.json())
    .then(repo => {

    let description = repo.description
    let owner = repo.owner.login
    let watch = repo.parent.watchers

 
    p1.innerText = "YOUR REPOSITORY HAS BEEW WATCHED " + watch + " TIMES"
    p2.innerText = "YOUR DESCRIPTION REPOSITORY IS : " + description
    p3.innerText = "THE OWNER OF THIS REPOSITORY IS : " + owner

    }).catch(error => {
        console.log(error)
        p1.innerText = error
    })
    let p1 = document.createElement("p");
    let p2 = document.createElement("p");
    let p3 = document.createElement("p");
    x = false;
    
    div.appendChild(p1)
    div.appendChild(p2)
    div.appendChild(p3)

        event.preventDefault();    
}