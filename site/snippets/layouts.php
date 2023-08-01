<?php foreach ($field->toLayouts() as $layout) : ?>
  <section class="grid <?= $layout->class() ?>" id="<?= $layout->customid() ?>">
    <?php foreach ($layout->columns() as $column) : ?>
      <div class="column" style="--columns:<?= $column->span() ?>">
        <div class="content-blocks">
          <?= $column->blocks() ?>
        </div>
      </div>
    <?php endforeach; ?>
  </section>
<?php endforeach; ?>