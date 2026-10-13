<?php

/** @var \Kirby\Cms\Block $block */
$image    = $block->image()->toFile();
$link     = $block->link()->toUrl();
$class    = $block->class()->isNotEmpty() ? $block->class()->value() : null;
$lazyload = $block->lazyload()->isTrue();
$caption  = $block->caption()->isNotEmpty() ? $block->caption()->kt() : '';

// SVG icons are inlined, everything else is rendered as responsive webp image
$isIcon = $image && $block->icon()->isTrue() && $image->extension() === 'svg';

if ($image && !$isIcon) {
  // only widths up to the original size (Kirby does not upscale)
  $widths   = array_filter([320, 480, 768, 1024, 1280, 1600], fn ($width) => $width < $image->width());
  $widths[] = min($image->width(), 1920);
  $srcset = [];

  foreach ($widths as $width) {
    $srcset[$width . 'w'] = ['width' => $width, 'format' => 'webp', 'quality' => 85];
  }

  // max. wrapper width is 1400px minus 2x 20px padding;
  // "auto" lets browsers use the real rendered width for lazy images
  $sizes = '(min-width: 1400px) 1360px, calc(100vw - 40px)';

  $attr = [
    'src'      => $image->thumb(['width' => min(1024, $image->width()), 'format' => 'webp', 'quality' => 85])->url(),
    'srcset'   => $image->srcset($srcset),
    'sizes'    => $lazyload ? 'auto, ' . $sizes : $sizes,
    'width'    => $image->width(),
    'height'   => $image->height(),
    'alt'      => $block->alt()->or($image->alt())->value() ?? '',
    'loading'  => $lazyload ? 'lazy' : null,
    'decoding' => 'async',
  ];
}

?>
<?php if ($image): ?>
  <figure<?= Html::attr(['class' => $class], null, ' ') ?>>
    <?php if ($link): ?>
      <a href="<?= Str::esc($link) ?>">
    <?php endif ?>

    <?php if ($isIcon): ?>
      <?= svg($image) ?>
    <?php else: ?>
      <img <?= Html::attr($attr, false) ?>>
    <?php endif ?>

    <?php if ($link): ?>
      </a>
    <?php endif ?>

    <?php if ($caption): ?>
      <figcaption><?= $caption->inline() ?></figcaption>
    <?php endif ?>
  </figure>
<?php endif ?>
