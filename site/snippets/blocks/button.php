<a href="<?= $block->external()->toBool() ? $block->link() : $site->url() . $block->link() ?>" class="button <?= $block->class() ?>" <?= $block->external()->toBool() ? "target='_blank'" : "" ?>>
  <span><?= $block->text() ?></span>
</a>