  <footer class="footer">
    <span>&copy; <?= date('Y') ?></span> -
    <a href="<?= url() ?>/imprint">Imprint</a>
  </footer>

  <div id="cookies-eu-banner" style="display: none;">
    <div class="layout-wrapper">
      <div class="text-wrapper">
        <span class="emoji">🍪</span>
        <div><?= $site->cookie_text()->kt() ?></div>
      </div>
      <div class="button-wrapper">
        <button id="cookies-eu-reject"><?= $site->cookie_reject() ?></button>
        <button id="cookies-eu-accept"><?= $site->cookie_accept() ?></button>
      </div>
    </div>
  </div>

  <script src="<?= $site->url() ?>/assets/dist/main.min.js?v1.0"></script>
</body>
</html>
