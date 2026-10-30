<a href="<?= $block->link()->toUrl() ?>" class="button <?= $block->class() ?>" <?= $block->external()->toBool() ? "target='_blank' rel='noopener'" : "" ?>>
  <span><?= $block->text() ?></span>
</a>