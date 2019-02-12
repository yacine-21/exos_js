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
  '/offscreen-menu' => 'Menu offscreen',
  '/payment-plan' => 'Tarif d’abonnement'
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

// 404
Flight::map('notFound', function () {
  Flight::render('error.php', ['error' => 404]);
});


Flight::start();
?>