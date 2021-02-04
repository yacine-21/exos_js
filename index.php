<?php

require 'flight/Flight.php';

/**
 * Routes
 */

// Pages
$pages = [
  '/' => 'Home',
  '/smoothscroll' => 'Smooth Scroll',
  '/countdown' => 'Countdown',
  '/langage-bases' => 'Langage - Bases',
  '/jeu-nombre' => 'Jeu nombre',
  '/art-generatif' => 'Art génératif',
  '/langage-dom' => 'Langage - DOM/Events',
  '/gmail' => 'Gmail',
  '/twitter' => 'Twitter',
  '/offscreen-menu' => 'Menu offscreen',
  '/payment-plan' => 'Tarif d’abonnement',
  '/test' => "Drag Me",
  "/formulaire" => "Formulaire",
  "/yacine" => "EXO YACINE",
  "/methode_map_js" => "JS METHODES MAP()",
  "/methode__filter_js" => "JS METHODES FILTER()",
  "/methode__foreach_js" => "JS METHODES FOREACH()",
  "/js_promise" => "JS PROMSISE",
  "/fetch" => "REQUETE FETCH",
];
Flight::set('pages', $pages);

foreach ($pages as $key => $page) {
  Flight::route($key, function ($route) {
    $page = $route->pattern;
    if ($page == '/') {
      $page = 'index';
    }
    Flight::render('layout.php', ['page' => $page]);
  }, true);
}

Flight::start();
?>