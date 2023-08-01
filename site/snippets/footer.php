<footer class="footer">
  <div class="wrapper">
    <span>&copy; <?= date("Y") ?> - Kirby Bucket</span>

    <nav>
      <ul>
        <?php foreach ($site->children()->unlisted() as $item) : ?>
          <?php if ($item->template() != "error") : ?>
            <li>
              <a href="<?= $item->url() ?>" <?= r($item->isOpen(), "aria-current='page'") ?>>
                <?= $item->title() ?>
              </a>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>
</footer>