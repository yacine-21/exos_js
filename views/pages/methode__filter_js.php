<p>
La méthode filter() crée et retourne un nouveau tableau contenant tous les éléments du tableau d'origine qui remplissent une condition déterminée par la fonction callback.

La méthode filter s'utilise sur un tableau, elle créer et return un new tableau qui va contenir tous les éléments du tableaux principal a condition qu'ils remplissent la condition qu'on aura déterminé dans la fonction callback de la méthode filter.
</p>
<br>

Exercice : On veut faire un site E-commerce, et on récupère d'une BDD une liste de produits et triller la liste selon une condition!


/////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
/////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
<br>
<br>
EXEMPLE : 
<pre><code>
let numbers = [1,2,3,4,5,6,7,8]; // créer un array avec les chiffres de 1 a 8

let newNumbers = numbers.filter((number) => {
  return number !== 4 && number !== 5; // créer un new array "newNumbers", qui va contenir les elements du tableau "numbers" qui respectent la conditon
})

console.log(newNumbers) // [1, 2, 3, 6, 7, 8]
console.log(numbers) // [1, 2, 3, 4, 5, 6, 7, 8]
</code>
</pre>

<script src="../../assets/js/lib/js_filter.js"></script>