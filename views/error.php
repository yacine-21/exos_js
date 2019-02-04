<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>WSF JS</title>
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
      <?php
      $errorText = 'Erreur ' . $error;
      switch ($error) {
        case 404:
          $errorText .= ' - Fichier non trouvé';
          break;
      }
      ?>
      <h2><?= $errorText ?></h2>
    </div>
  </div>
</body>
</html>