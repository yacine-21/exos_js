<div class="Exo">
  <h3>Énoncé</h3>
  <ul>
    <li>Utilisez la structure HTML fournie</li>
    <li>Créez le CSS état initial: menu à l’extérieur de l’écran (transformations CSS)</li>
    <li>Créez le CSS final: menu dans la page, par dessus le site (avec une classe HTML)</li>
    <li>En JavaScript, ajoutez un événement <code>click</code> sur le bouton hamburger: changez l’état de votre application (en ajoutant/retirant la classe HTML prévue)</li>
    <li>Modifiez le texte du bouton: 🍔/❌</li>
  </ul>
  <h3>Aide code</h3>
  <pre><code>&lt;div id="offscreen">
  &lt;div id="menu">
    &lt;button class="Hamburger">
      &lt;span class="Hamburger--open">🍔&lt;/span>
      &lt;span class="Hamburger--close" hidden>❌&lt;/span>
    &lt;/button>
    &lt;p>Hello menu&lt;/p>
  &lt;/div>
  &lt;div id="not-menu">
    &lt;p>Hello World&lt;/p>
  &lt;/div>
&lt;/div></code></pre>
</div>

<style>
#offscreen {
  position: relative;
  height: 400px;
  //background: rgba(255,255,255,.2);
  overflow: hidden;
}
#menu {
  position: absolute;
  background: #ff0;
  padding: 1rem;
  width: 250px;
  color: #111;
  height: 100%;
  transform: translate(-100%);
  transition: transform 500ms;
}
#menu.opened {
  transform: translate(0);
}
#menu button {
  position: absolute;
  left: calc(100% + 1rem);
  border: none;
  background: deeppink;
  font-size: 2em;
  color: #ff0;
}
#menu button:hover,
#menu button:focus {
  outline: 2px solid #ff0;
}
#not-menu {
  padding: 1rem;
  padding-left: 6rem;
  font-size: 2em;
  background: deeppink;
  color: #111;
}
#not-menu p {
  margin: 0;
}
</style>

<div id="offscreen">
  <div id="menu">
    <button class="Hamburger">
      <span class="Hamburger--open">🍔</span>
      <span class="Hamburger--close" hidden>❌</span>
    </button>
    <p>Hello menu</p>
  </div>
  <div id="not-menu">
    <p>Hello World</p>
  </div>
</div>


<script src="../../assets/js/lib/offscreen.js"></script>