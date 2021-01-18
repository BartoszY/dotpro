  <div class="floating-links">
    <a href="/strona-w-budowie/">Agencja reklamowa</a>
    <a href="/strona-w-budowie/">Produkcja filmowa</a>
  </div>
  
  <footer class="footer" id="kontakt">
    <div class="container footer__container">
      <?php wp_nav_menu(array('theme_location' => 'main-menu-first', 'walker' => new WPDocs_Walker_Nav_Menu() )); ?>
      <?php wp_nav_menu(array('theme_location' => 'main-menu-second', 'walker' => new WPDocs_Walker_Nav_Menu() )); ?>
      <?php wp_nav_menu(array('theme_location' => 'main-menu-third', 'walker' => new WPDocs_Walker_Nav_Menu() )); ?>

      <div class="big-links">
        <a href="/strona-w-budowie/" class="big-links__item">Portfolio</a>
        <a href="/strona-w-budowie/" class="big-links__item">Case studies</a>
        <a href="/strona-w-budowie/" class="big-links__item">About</a>
        <a href="/kontakt" class="big-links__item">Kontakt</a>
      </div>
    </div>

    <div class="footer__copyright">
      <div class="container footer__container">
        <div class="footer__copyright__item">dotpro.pl © - <?= date('Y') ?>, wszelkie prawa zastrzeżone</div>
        <div class="footer__copyright__item"><a href="/polityka-prywatnosci">Polityka prywatności</a>  |  <a href="/kontakt">Dane firmy</a></div>

        <img class="footer__img" src="<?= get_template_directory_uri(); ?>/prod/img/footer.jpg" alt="Footer">
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>