<?php snippet("head"); ?>
<?php snippet("header"); ?>

<main>
  <div class="wrapper">
    <?= $page->text()->toBlocks() ?>
  </div>
</main>

<?php snippet("footer"); ?>
<?php snippet("foot"); ?>