
<p>
La méthode map() crée un nouveau tableau avec les résultats de l'appel d'une fonction fournie sur chaque élément du tableau appelant.

Donc la méthode map s'utilise sur un array, elle créer et return  un new tableau avec dans ce tableau le résultat de la fonction qui est appelé pour chaque élément du tableau
</p>
<div>
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

</div>
<p>
Exercice transformer tous les éléments d'un tableau en les mettant au carré en utilisant la méthode map()

Donc créer un new tableau a partir d'un tableau existant et dans ce new tableau il doit contenir les carré des nombres présent dans le premier tableau
</p>
<BR></BR>
EXEMPLE : 
<pre><code>
let pesonnagesDeMangas = ["Luffy","Zoro","Sanji"]; // créeer un tableau avec "Luffy, Zoro et sanji"
let newPesonnagesDeMangas = pesonnagesDeMangas.map((personnage) => {
    return personnage  + "s"; // je créer un nouveau teableau dans lequel je vais stocker le resultat de la methode map()
}); 


console.log(newPesonnagesDeMangas); // ["Luffys", "Zoros", "Sanjis"]
console.log(pesonnagesDeMangas); // ["Luffy", "Zoro", "Sanji"]
</code>
</pre>

<script src="../../assets/js/lib/methode_map.js"></script>