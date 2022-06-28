<?php snippet("head"); ?>
<?php snippet("header"); ?>

<main class="wrapper">
  <header class="intro">
    <h1><?= $page->title() ?></h1>
  </header>
  <div class="text">
    <?= $page->text()->toBlocks() ?>
  </div>
</main>

<?php snippet("footer"); ?>
<?php snippet("foot"); ?>