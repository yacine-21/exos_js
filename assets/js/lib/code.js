r = 25
let surface = Math.round((Math.PI * Math.pow (r,2)))

console.log("La surface d'un cercle de rayon",r,"est de",surface)


randomNumber = (Math.random() * 100)


while (randomNumber){
    if (randomNumber >= 50 && randomNumber <= 55){  
        console.log(randomNumber)
        console.log("yes")
        break
    } else {
        console.log(randomNumber)
        console.log("no")
    }
}
