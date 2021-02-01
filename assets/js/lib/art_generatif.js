let canvas = document.getElementById('canvas');
let ctx = canvas.getContext('2d');
canvas.width = canvas.height = 320;

function dessine(x,y,largeur, hauteur){
    ctx.strokeStyle = "rgb(100,0,200)";
    if (vraiouFaux()){
        ctx.moveTo(x,y);
        ctx.lineTo(largeur + x, hauteur + y);
    } else {
        ctx.moveTo(x + largeur, y)
        ctx.lineTo(x, y + hauteur)
    }
    ctx.stroke()
}

function vraiouFaux(){
    let reponse = [true, false]
    i = Math.floor(Math.random() * 2)
    return reponse[i] 
}
console.log(vraiouFaux())


// dessine(0,0,160,160)
// dessine(160,0,160,160)
// dessine(0,160,160,160)
// dessine(160,160,160,160)

pas = 10;
x = 0;
y = 0;
largeur = pas;
hauteur = pas;

while (y <= 320){
    while (x <= 320){
        dessine(x,y,largeur,hauteur)
        x += pas
    } 
    x = 0
    y += pas
}

prenom = [
    "Maya la moche",
    "Yacine",
    "Arthur",
    "Gon",
    "Hisoka",
    "Meruem"
  ]
  
  function newTableau(){
    if(prenom.inludes('a')){
        return 
    }
  }
