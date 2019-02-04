<div class="Navigation">
  <?php
  $thisUrl = Flight::request()->url;
  ?>
  <ul class="Navigation-list">
    <?php
    $pages = Flight::get('pages');
    foreach ($pages as $url => $title) {
      $classActive = '';
      if ($thisUrl === $url) {
        $classActive = ' Navigation-link--active';
      }
      ?>
      <li class="Navigation-item">
        <a class="Navigation-link<?= $classActive ?>" href="<?= $url ?>"><?= $title ?></a>
      </li>
    <?php } ?>
  </ul>
</div>