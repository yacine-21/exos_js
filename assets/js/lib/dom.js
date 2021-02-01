// let heure_avant = document.getElementById("heure")
// let heure = document.getElementById("bouton")

// heure.addEventListener("click", buttonClicked)

// heure_avant.innerHTML = new Date().toLocaleTimeString('fr')

//  function buttonClicked (){
//     heure_avant.innerText = new Date().toLocaleTimeString('fr')
// }

// // une fonction qui se relance après 1s
// function loop () {
//     let temps = new Date().toLocaleTimeString('fr');
//     let secondes = temps.split(":");

//     if (secondes[2] % 10 === 0 ){
//         heure_avant.classList.add("multiple")
//     } else {
//         heure_avant.classList.remove("multiple")
//     }
//     heure_avant.innerText = new Date().toLocaleTimeString('fr')
//     setTimeout(loop, 1000);
//   }
//   loop();

let heure_avant = document.getElementById("heure")
let heure = document.getElementById("bouton")

heure_avant.addEventListener("click", buttonClicked)

heure_avant.innerHTML = new Date().toLocaleTimeString('fr')

 function buttonClicked (){
    heure_avant.classList.add("click");
}

// une fonction qui se relance après 1s
function loop () {
    let temps = new Date().toLocaleTimeString('fr');
    let secondes = temps.split(":");

    if (secondes[2] % 10 === 0 ){
        heure_avant.classList.add("multiple")
    } else {
        heure_avant.classList.remove("multiple")
    }
    heure_avant.innerText = new Date().toLocaleTimeString('fr')
    setTimeout(loop, 1000);
  }
  loop();
