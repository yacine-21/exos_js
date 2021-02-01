<pre><code>
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
    const result = 0 / 0 

    if(result){
        resolve(result);
    }else{
        reject();
    }
})

calcul.then((result) => {
    console.log("Resultat: " + result)
}).catch(() => {
    console.log("Oops something went wrong, please try again...")
})
</code></pre>

<script src="../../assets/js/lib/js_promise.js"></script>