<header class="header">
  <div class="wrapper">
    <a class="logo" href="<?= $site->url() ?>">
      <img src="<?= $kirby->url() ?>/assets/images/logo.svg" alt="<?= $site->title() ?>">
    </a>

    <nav>
      <ul>
        <?php foreach ($site->children()->listed() as $item) : ?>
          <li>
            <a href="<?= $item->url() ?>" <?= r($item->isOpen(), "aria-current='page'") ?>>
              <?= $item->title() ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>
</header>