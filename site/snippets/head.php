<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="canonical" href="<?= $page->url() ?>">
  <meta name="theme-color" content="#ffffff">

  <?php if ($page->seo_title()->isNotEmpty()) : ?>
    <title><?= $page->seo_title() ?></title>
    <meta property="og:title" content="<?= $page->seo_title() ?>" />
  <?php else : ?>
    <title><?= !$page->isHomePage() ? $page->title() . ' - ' : '' ?><?= $site->seo_title() ?></title>
    <meta property="og:title" content="<?= $page->title() ?> - <?= $site->seo_title() ?>" />
  <?php endif; ?>

  <?php if ($page->seo_description()->isNotEmpty()) : ?>
    <meta name="description" content="<?= $page->seo_description()->html() ?>">
    <meta property="og:description" content="<?= $page->seo_description()->html() ?>" />
  <?php else : ?>
    <meta name="description" content="<?= $site->seo_description()->html() ?>">
    <meta property="og:description" content="<?= $site->seo_description()->html() ?>" />
  <?php endif; ?>

  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo html($page->url()); ?>" />

  <?php if ($image = $page->seo_image()->toFile()) : ?>
    <meta property="og:image" content="<?= $image->resize(1200)->url() ?>" />
  <?php elseif ($image = $site->seo_image()->toFile()) : ?>
    <meta property="og:image" content="<?= $image->url() ?>" />
  <?php endif; ?>

  <link rel="apple-touch-icon" sizes="180x180" href="<?= $kirby->url() ?>/assets/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $kirby->url() ?>/assets/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $kirby->url() ?>/assets/icons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?= $kirby->url() ?>/assets/icons/favicon.ico">
  <link rel="manifest" href="<?= $kirby->url() ?>/site.webmanifest">

  <link rel="stylesheet" href="<?= $kirby->url() ?>/assets/dist/css/main.css?v=<?= filemtime($kirby->root('assets') . '/dist/css/main.css') ?>">
</head>

<body class="<?= $page->template() ?>">