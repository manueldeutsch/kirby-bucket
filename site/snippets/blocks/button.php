<a href="<?= $block->link() ?>" class="button <?= $block->class() ?>" <?= $block->external()->toBool()
  ? "target='_blank'"
  : "" ?>>
  <span><?= $block->text() ?></span>
</a>