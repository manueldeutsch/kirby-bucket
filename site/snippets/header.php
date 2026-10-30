<a class="skip-link" href="#main"><?= t("a11y.skip", "Zum Inhalt springen") ?></a>

<header class="header">
  <div class="wrapper">
    <a class="logo" href="<?= $site->url() ?>" aria-label="<?= $site->title()->esc() ?> - <?= t("a11y.home", "Zur Startseite") ?>">
      <img src="<?= $kirby->url() ?>/assets/images/logo.svg" alt="<?= $site->title()->esc() ?>" width="35" height="35">
    </a>

    <nav aria-label="<?= t("a11y.nav.main", "Hauptnavigation") ?>">
      <ul>
        <?php foreach ($site->children()->listed() as $item) : ?>
          <li>
            <a href="<?= $item->url() ?>" <?= r($item->isOpen(), "aria-current='page'") ?>>
              <?= $item->title()->esc() ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>
</header>