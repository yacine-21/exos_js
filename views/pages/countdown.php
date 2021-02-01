<div class="Exo">
  <h3>Énoncé</h3>
  <ul>
    <li>Créez un compteur en utilisant <a href="http://hilios.github.io/jQuery.countdown/">The Final Countdown</a>, un plugin jQuery</li>
    <li>Chargez <a href="https://jquery.com/">jQuery</a>, chargez la librairie</li>
    <li>Basez-vous sur l’exemple de la page d’accueil
      <ul>
        <li>Récupérez un élément de votre page avec <code>$("#element")</code></li>
        <li>Définissez votre date finale au format <code>"YYYY/MM/DD HH:MM:SS"</code></li>
        <li>Dans la fonction <em>callback</em>, modifiez le texte des 4 éléments différents avec les formatteurs <code>"%D"</code>, <code>"%H"</code>, <code>"%M"</code> et <code>"%S"</code>: <code>$("#heure").text(event.strftime("%H"))</code></li>
      </ul>
    </li>
  </ul>
</div>
<div id="clock">
  <div class="block">
    <p id="days" class="block-title">0</p>
    <p>jours</p>
  </div>
  <div class="block">
    <p id="hours" class="block-title">0</p>
    <p>heures</p>
  </div>
  <div class="block">
    <p id="minutes" class="block-title">0</p>
    <p>minutes</p>
  </div>
  <div class="block">
    <p id="seconds" class="block-title">0</p>
    <p>secondes</p>
  </div>
</div>

<style>
#clock {
  display: flex;
}
.block {
  width: 100px;
  text-align: center;
  background: deeppink;
  border-radius: 3px;
  margin: 5px;
}
.block-title {
  font-size: 3em;
  margin: 1.5rem 0;
}
</style>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="/assets/js/lib/Contdown.js"></script>

<div id="getting-started"></div>

<script type="text/javascript">
  $('#clock')
  .countdown('2021/03/02', function(event) {
    $("#days").html(event.strftime('%D'));
    $("#hours").html(event.strftime('%H'));
    $("#minutes").html(event.strftime('%M'));
    $("#seconds ").html(event.strftime('%S'));
  });
</script>