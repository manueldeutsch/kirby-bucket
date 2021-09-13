<?php snippet('header'); ?>

<main class="default error">
  <div class="wrapper">
    <header class="intro">
      <h1><?= $page->title() ?></h1>
    </header>
    <div class="text">
      <?= $page->text()->kt() ?>
    </div>
  </div>
</main>

<?php snippet('footer');
?>
