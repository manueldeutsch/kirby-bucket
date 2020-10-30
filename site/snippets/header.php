<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="canonical" href="<?php echo html($page->url()) ?>" />
  <title><?= $site->seo_title() ?> | <?= $page->title() ?></title>

  <meta name="description" content="<?= $site->seo_description()->html() ?>">
  <meta property="og:title" content="<?= $site->seo_title() ?> | <?= $page->title() ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo html($site->url()) ?>" />
  <meta property="og:description" content="<?= $site->seo_description()->html() ?>" />
  <?php if($image = $site->seo_image()->toFile()): ?>
    <meta property="og:image" content="<?= $image->url() ?>" />
  <?php endif ?>

  <?= css(['assets/dist/main.min.css?v1.0', '@auto']) ?>
</head>
<body class="<?= $page->title()->lower() ?>">

  <header class="header">
    <a class="logo" href="<?= $site->url() ?>">Kirby Rocket</a>
  </header>
