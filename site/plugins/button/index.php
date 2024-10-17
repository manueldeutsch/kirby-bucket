<?php

Kirby::plugin('kirby-bucket/button-block', [
  'blueprints' => [
    'blocks/button' => __DIR__ . '/blueprint.yml',
  ],

  'snippets' => [
    'blocks/button'    => __DIR__ . '/snippet.php'
  ]
]);
