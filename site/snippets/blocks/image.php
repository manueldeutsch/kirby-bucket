<?php

/** @var \Kirby\Cms\Block $block */
$alt      = $block->alt();
$link     = $block->link();
$src      = null;
$class    = $block->class()->isNotEmpty() ? $block->class()->esc() : '';
$lazyload = $block->lazyload()->isTrue() ? 'loading="lazy"' : '';
$icon     = $block->icon()->isTrue();
$caption  = $block->caption()->isNotEmpty() ? $block->caption()->kt() : '';

if ($block->location() == 'web') {
  $src = $block->src()->esc();
} elseif ($image = $block->image()->toFile()) {
  $alt = $alt->or($image->alt());
  $src = $image->thumb(['width' => 1024, 'format' => 'webp', 'quality' => 85])->url();
  $srcset = $image->srcset([
    '320w' => ['width' => 320, 'format' => 'webp', 'quality' => 85],
    '480w' => ['width' => 480, 'format' => 'webp', 'quality' => 85],
    '768w' => ['width' => 768, 'format' => 'webp', 'quality' => 85],
    '1024w' => ['width' => 1024, 'format' => 'webp', 'quality' => 85],
    '1280w' => ['width' => 1280, 'format' => 'webp', 'quality' => 85],
    '1600w' => ['width' => 1600, 'format' => 'webp', 'quality' => 85],
    '1920w' => ['width' => 1920, 'format' => 'webp', 'quality' => 85],
  ]);
  $sizes = '(max-width: 320px) 320px, (max-width: 480px) 480px, (max-width: 768px) 768px, (max-width: 1024px) 1024px, (max-width: 1280px) 1280px, (max-width: 1600px) 1600px, 1920px';
}

?>
<?php if ($src): ?>
  <figure <?= Html::attr(['class' => $class], null, ' ') ?>>
    <?php if ($link->isNotEmpty()): ?>
      <a href="<?= Str::esc($link->toUrl()) ?>">
        <?php if ($icon): ?>
          <?= svg($src, ['alt' => $alt->esc(), $lazyload]) ?>
        <?php else: ?>
          <img src="<?= $src ?>" srcset="<?= $srcset ?>" sizes="<?= $sizes ?>" alt="<?= $alt->esc() ?>" <?= $lazyload ?>>
        <?php endif ?>
      </a>
    <?php else: ?>
      <?php if ($icon): ?>
        <?= svg($src, ['alt' => $alt->esc(), $lazyload]) ?>
      <?php else: ?>
        <img src="<?= $src ?>" srcset="<?= $srcset ?>" sizes="<?= $sizes ?>" alt="<?= $alt->esc() ?>" <?= $lazyload ?>>
      <?php endif ?>
    <?php endif ?>
    <?php if ($caption): ?>
      <figcaption><?= $caption->inline() ?></figcaption>
    <?php endif ?>
  </figure>
<?php endif ?>