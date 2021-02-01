let carre = document.querySelector(".carre")

carre.addEventListener("mousedown", onMouseDown);
carre.addEventListener("mouseup", onMouseUp);

let startX = 0;
let startY = 0;


function onMouseDown(event){
  startX = event.clientX;
  startY = event.clientY
  console.log("tu as cliqué sur la souris", event.clientX, event.clientY);
  carre.addEventListener("mousemove", mouseMove);  
}


function onMouseUp(event){
  console.log('Tu as relaché la souris', event.clientX, event.clientY)
  carre.removeEventListener("mousemove", mouseMove)
}


function mouseMove(event){
  let mouseX = event.clientX;
  let mouseY = event.clientY;
  let deltaX = mouseX - startX; 
  let deltaY = mouseY - startY;
  carre.style.transform = `translate(${deltaX}px,${deltaY}px)`
  console.log("la souris bouge", deltaX, deltaY)
}