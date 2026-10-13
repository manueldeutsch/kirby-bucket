<!doctype html>
<html lang="<?= $kirby->language() ? $kirby->language()->code() : 'de' ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="canonical" href="<?= $page->url() ?>">
  <meta name="theme-color" content="#ffffff">

  <?php
  $title = $page->seo_title()->or(
    $page->isHomePage() ? $site->seo_title() : $page->title() . ' - ' . $site->seo_title()
  );
  $description = $page->seo_description()->or($site->seo_description());
  $image = $page->seo_image()->toFile() ?? $site->seo_image()->toFile();
  ?>

  <title><?= $title->esc() ?></title>
  <meta name="description" content="<?= $description->esc() ?>">

  <meta property="og:title" content="<?= $title->esc() ?>">
  <meta property="og:description" content="<?= $description->esc() ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $page->url() ?>">
  <meta property="og:site_name" content="<?= $site->title()->esc() ?>">
  <meta property="og:locale" content="<?= $kirby->language() ? $kirby->language()->locale(LC_ALL) : 'de_DE' ?>">
  <?php if ($image) : ?>
    <meta property="og:image" content="<?= $image->resize(1200)->url() ?>">
  <?php endif; ?>

  <meta name="twitter:card" content="summary_large_image">

  <link rel="apple-touch-icon" sizes="180x180" href="<?= $kirby->url() ?>/assets/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $kirby->url() ?>/assets/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $kirby->url() ?>/assets/icons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?= $kirby->url() ?>/assets/icons/favicon.ico">
  <link rel="manifest" href="<?= $kirby->url() ?>/site.webmanifest">

  <link rel="stylesheet" href="<?= $kirby->url() ?>/assets/dist/css/main.css?v=<?= filemtime($kirby->root('assets') . '/dist/css/main.css') ?>">
</head>

<body class="<?= $page->template() ?>">