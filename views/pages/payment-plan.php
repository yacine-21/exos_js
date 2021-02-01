<div class="Exo">
  <h3>Énoncé</h3>
  <ul>
    <li>Ajoutez un événement <code>input</code> sur le champ <code>&lt;input type="range"></code></li>
    <li>Récupérez la valeur actuelle (0, 25, 50, 75 ou 100)</li>
    <li>Calculez la position (divisez par le pas de 25)</li>
    <li>Pour tous les items:
      <ul>
        <li>Enlevez la classe <code>ok</code></li>
        <li>Ajoutez la classe <code>nok</code></li>
      </ul>
    </li>
    <li>Pour tous les items (de 0 à la position actuelle)
      <ul>
        <li>Ajoutez la classe <code>ok</code></li>
        <li>Enlevez la classe <code>nok</code></li>
      </ul>
    </li>
    <li>Enfin, calculez le montant par mois (divisez par 12) et insérez le résultat dans la page (utilisez l’attribut <code>data-price</code> depuis les labels)</li>
  </ul>
</div>
<div id="payment-plan">
  <h1>Choose your plan</h1>
  <p>Prices per year</p>
  <div class="control js">
    <ul class="labels">
      <li data-price="0">Free</li>
      <li data-price="19">19€</li>
      <li data-price="49">49€</li>
      <li data-price="99">99€</li>
      <li data-price="199">199€</li>
    </ul>
    <input type="range" id="range" min="0" max="100" value="25" step="25">
    <p>Per month: <span class="per-month">-</span>€</p>
  </div>
  <ul class="features">
    <li class="item item--1 ok">Basic plan</li>
    <li class="item item--2 ok">Detailed reports</li>
    <li class="item item--3 nok">Custom CSS & JS</li>
    <li class="item item--4 nok">Data export</li>
    <li class="item item--5 nok">Full access to the platform</li>
  </ul>
</div>

<style>
#payment-plan {
  background: #006494;
  font: 1em sans-serif;
  color: white;
  padding: 2rem 0;
  letter-spacing: 0;
}
#payment-plan h1 {
  width: 400px;
  margin: 1rem auto;
  font-size: 1.2em;
  text-align: center;
}
#payment-plan p {
  width: 400px;
  margin: auto;
  text-align: center;
  margin-top: 0;
  font-size: .8em;
  opacity: .5;
}
#payment-plan .control {
  margin: 50px auto 50px;
}
#payment-plan .control p {
  text-align: left;
  font-size: .8em;
  font-style: italic;
  transform: translate(30px)
}
.labels {
  width: 400px;
  margin: auto;
  display: flex;
  text-align: center;
  font-weight: bold;
  list-style-type: none;
  padding: 0;
}
.labels li {
  flex: 0 0 80px;
}
.features {
  list-style-type: none;
  width: 400px;
  margin: auto;
}
.item {
  display: flex;
  align-items: center;
  padding: .5rem;
}
.item.nok {
  opacity: .3;
}
.item.ok:before {
  content: '✓';
  color: #57E4F9;
}
.item.nok:before {
  content: '×';
}
.item.ok:before,
.item.nok:before {
  display: inline-flex;
  line-height: 1.4;
  width: 20px;
  height: 30px;
  font-size: 1.4em;
  margin-right: .5rem;
  font-weight: bold;
}
input[type=range] {
  width: 340px;
  margin-left: 30px;
}
input[type='range'] {
  display: block;
  border: none;
  margin: 0 auto;
  padding: 0;
  height: 3em;
  background: repeating-linear-gradient(90deg, rgba(255, 255, 255, 0.32), rgba(255, 255, 255, 0.32) 1px, transparent 1px, transparent calc(25% - 1px)) no-repeat 50% 50% content-box;
  background-size: calc(100% - 15px) 50%;
  font-size: 1em;
  cursor: pointer;
}
input[type='range'], input[type='range']::-webkit-slider-runnable-track, input[type='range']::-webkit-slider-thumb {
  -webkit-appearance: none;
}
input[type='range']::-webkit-slider-runnable-track {
  position: relative;
  height: 0.75em;
  border-radius: 0.25em;
  background: rgba(255, 255, 255, 0.32);
}
.js input[type='range']::-webkit-slider-runnable-track {
  background: linear-gradient(#57E4F9, #57E4F9) no-repeat rgba(255, 255, 255, 0.2);
}
input[type='range']::-moz-range-track {
  height: 0.75em;
  border-radius: 0.25em;
  background: rgba(255, 255, 255, 0.32);
}
input[type='range']::-ms-track {
  border: none;
  height: 0.75em;
  border-radius: 0.25em;
  background: rgba(255, 255, 255, 0.32);
  color: transparent;
}
input[type='range']::-moz-range-progress {
  height: 0.75em;
  border-radius: 0.25em;
  background: #57E4F9;
}
input[type='range']::-ms-fill-lower {
  border-radius: 0.25em;
  background: #57E4F9;
}
input[type='range']::-webkit-slider-thumb {
  margin-top: -0.25em;
  box-sizing: border-box;
  border: solid 0.125em #fff;
  width: 1.25em;
  height: 1.25em;
  border-radius: 50%;
  background: #fff;
  cursor: ew-resize;
}
input[type='range']::-moz-range-thumb {
  box-sizing: border-box;
  border: solid 0.125em #fff;
  width: 1.25em;
  height: 1.25em;
  border-radius: 50%;
  background: #fff;
  cursor: ew-resize;
}
input[type='range']::-ms-thumb {
  box-sizing: border-box;
  border: solid 0.125em #fff;
  width: 1.25em;
  height: 1.25em;
  border-radius: 50%;
  background: #fff;
  cursor: ew-resize;
}
input[type='range']:focus {
  outline: none;
  opacity: .99;
}
</style>

<script src="../../assets/js/lib/input-range.js"></script>