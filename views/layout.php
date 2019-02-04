<!DOCTYPE html>
<html lang="fr" id="top">
<head>
  <meta charset="UTF-8">
  <title>✌ WSF JS</title>
  <link rel="stylesheet" href="/assets/css/app.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono">
</head>
<body>
  <?php
  include 'includes/header.php';
  ?>
  <div class="Main">
    <?php
      include 'includes/navigation.php';
    ?>
    <div class="Content">
      <?php if ($page == 'index') { ?>
        <h2>Home</h2>
      <?php } else { ?>
        <h2><?= Flight::get('pages')[$page] ?></h2>
      <?php }
      // $page retrieved from route
      include('pages/' . $page . '.php');
      ?>
    </div>
  </div>
</body>
</html>