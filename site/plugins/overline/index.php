<?php

Kirby::plugin('kirby-bucket/overline-block', [
  'blueprints' => [
    'blocks/overline' => __DIR__ . '/blueprint.yml',
  ],

  'snippets' => [
    'blocks/overline'    => __DIR__ . '/snippet.php'
  ],
]);
