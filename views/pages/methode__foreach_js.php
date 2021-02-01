La méthode forEach() permet d'exécuter une fonction donnée sur chaque élément du tableau. <br> <br>
Exercice : on a un tableau de plusieurs objets et pour chaque objets on va créer un li dans le html
<br> <br>

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
<br> <br>
EXEMPLE :
<pre><code>
myArray1.forEach(function(element, index){
    console.log("Je suis a l'index",index,"je suis équivalent a" ,element)
})

resultat : 
Je suis a l'index 0 je suis équivalent a A
Je suis a l'index 1 je suis équivalent a B
Je suis a l'index 2 je suis équivalent a C
Je suis a l'index 3 je suis équivalent a D
Je suis a l'index 4 je suis équivalent a E
Je suis a l'index 5 je suis équivalent a F
Je suis a l'index 6 je suis équivalent a G
Je suis a l'index 7 je suis équivalent a H
Je suis a l'index 8 je suis équivalent a I
Je suis a l'index 9 je suis équivalent a J
Je suis a l'index 10 je suis équivalent a K
Je suis a l'index 11 je suis équivalent a L
</code></pre>



<script src="../../assets/js/lib/js_foreach.js"></script>