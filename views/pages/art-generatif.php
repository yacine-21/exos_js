<div class="Exo">
  <h3>Énoncé</h3>
  <ul>
    <li>Creéz un élément <code>&lt;canvas&gt;</code> en HTML</li>
    <li>Récupérez cet élément et son contexte 2D en JS</li>
    <li>Définissez la largeur et hauteur du <code>&lt;canvas&gt;</code> en JS (320px * 320px)</li>
    <li>Créez une fonction <code>dessine(x, y, largeur, hauteur)</code> qui doit dessiner une diagonale: un trait du point <code>x</code>/<code>y</code>, jusqu’au point <code>x+largeur</code>/<code>y+hauteur</code></li>
    <li>Testez cette fonction</li>
    <li>Créez une fonction <code>vraiOuFaux()</code> qui doit renvoyer vrai ou faux (0 ou 1) de manière aléatoire</li>
    <li>Utilisez cette fonction <code>vraiOuFaux()</code> dans <code>dessine()</code> pour aléatoirement dessiner une diagonale du haut/gauche vers le bas/droite OU depuis le haut/droite vers le bas/gauche</li>
    <li>Enfin, pensez à une grille virtuelle et appellez la fonction <code>dessine()</code> pour chaque case de cette grille
      <ul>
        <li>Créez une variable <code>pas</code> (80 par exemple, soit 4 cases * 4 cases)</li>
        <li>Créez deux boucles imbriquées, une pour les lignes et une pour les colonnes (<code>i</code> et <code>j</code> augmentant de <code>pas</code>)</li>
        <li>Appellez <code>dessine()</code> en lui passant les bons paramètres (<code>x</code>, <code>y</code> et <code>pas</code>)</li>
        <li>Modifiez le pas à votre convenance</li>
      </ul>
    </li>
    <li>YOLO!</li>
  </ul>
  <h3>Aide code</h3>
  <pre><code>var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');
canvas.width = canvas.height = 320;

// un trait
ctx.moveTo(0, 0);
ctx.lineTo(0, 100);</code></pre>
</div>

<p><a href="https://web.iamvdo.me/js/api-html5/#canvas">Lien vers cours</a></p>

<style>
#canvas {
  display: block;
  background: deeppink;
  width: 320px;
  height: 320px;
}
</style>
<canvas id="canvas"></canvas>