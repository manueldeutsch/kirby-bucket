<footer class="footer">
  <div class="wrapper">
    <span>&copy; <?= date("Y") ?> - <?= $site->title()->esc() ?></span>

    <nav aria-label="<?= t("a11y.nav.legal", "Rechtliches") ?>">
      <ul>
        <?php foreach ($site->children()->unlisted() as $item) : ?>
          <?php if ($item->template() != "error") : ?>
            <li>
              <a href="<?= $item->url() ?>" <?= r($item->isOpen(), "aria-current='page'") ?>>
                <?= $item->title()->esc() ?>
              </a>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>
</footer>