<header class="header">
  <div class="wrapper">
    <a class="logo" href="<?= $site->url() ?>" aria-label="<?= $site->title()->esc() ?> - Zur Startseite">
      <img src="<?= $kirby->url() ?>/assets/images/logo.svg" alt="<?= $site->title()->esc() ?>" width="35" height="35">
    </a>

    <nav>
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