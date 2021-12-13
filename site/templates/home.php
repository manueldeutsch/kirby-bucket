<?php snippet("header"); ?>

<main class="home">
  <div class="wrapper">
    <div class="text-container">
      <?= $page->text()->kt() ?>
    </div>
    <?php snippet("layouts", ["field" => $page->layout()]); ?>
  </div>
</main>

<?php snippet("footer"); ?>