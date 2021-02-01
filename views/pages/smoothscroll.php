<div class="Exo">
  <h3>Énoncé</h3>
  <ul>
    <li>Creéz des ancres (liens) en haut: vers le milieu de la page, vers le bas</li>
    <li>Créez une ancre au milieu: vers le bas</li>
    <li>Créez une ancre en bas: vers le haut</li>
    <li>Testez <code>scroll-behavior: smooth</code> en CSS pour animer le défilement (balise <code>&lt;style></code>)</li>
    <li>Utilisez <a href="https://github.com/cferdinandi/smooth-scroll">Smooth-scroll.js</a> pour plus de flexibilité et un meilleur support navigateur
      <ul>
        <li>Chargez la librairie (avec <code>&lt;script src="">&lt;/script></code>)</li>
        <li>Initialisez-là avec vos liens (dans un block <code>&lt;script></code>)</li>
        <li>Modifiez la vitesse et la méthode d’accélération</li>
      </ul>
    </li>
    <li>Enfin, ajoutez deux nouvelles ancres MAIS sans animation
      <ul>
        <li>en haut: vers le bas</li>
        <li>en bas: vers le haut</li>
      </ul>
    </li>
  </ul>
</div>

<p id="haut">
  <a href="#milieu">Vers le milieu</a>
  <a href="#bas">Vers le bas</a>
</p>

<?php
  // mot au hasard <p>
  for ($i=0; $i <80; $i++) {
    echo "<p>YACINEEEEEEEEEE</p>";
  }
?>

<p id="milieu">
  <a href="#bas">Vers le bas</a>
</p>

<?php
  // mot au hasard <p>
  for ($i=0; $i <80; $i++) {
    echo "<p>YACINEEEEEEEEEE</p>";
  }
?>

<p id="bas">
  <a href="#haut">Vers le haut</a>
</p>

<script src="/assets/js/lib/js.js"></script>

<script>
  var scroll = new SmoothScroll('a[href*="#"]', {
  speed: 50,
  easing: "easeInOutCubic"
});
</script>

