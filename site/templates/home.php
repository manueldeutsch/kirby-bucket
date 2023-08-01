<?php snippet("head"); ?>
<?php snippet("header"); ?>

<main>
  <div class="wrapper">
    <?php snippet("layouts", ["field" => $page->layout()]); ?>
  </div>
</main>

<?php snippet("footer"); ?>
<?php snippet("foot"); ?>