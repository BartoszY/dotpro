<?php
/**
 * Template Name: Produkcja fotograficzna
 */
get_header(); 
?>

<main class="main">
<?php while ( have_posts() ) : the_post(); ?>

  <div class="sticky-nav">
    <nav class="sticky-nav__menu">
      <a href="#">fotografia biznesowa</a>
      <a href="#">fotografia architektury</a>
      <a href="#">zdjęcia aranżowane</a>
      <a href="#">fotografia reklamowa</a>
      <a href="#">fotografia eventowa</a>
      <a href="#">packshoty</a>
      <a href="#">fotografia wnętrz</a>
      <a href="#">fotografia dla gastronomii</a>
      <a href="#">key visuale</a>
    </nav>
  </div>

  <div class="page-content">
    <div class="container">
    
      <div class="page-header">
        <h1 class="page-header__title heading"><?php the_title() ?></h1>
        <div></div>

        <div class="page-header__menu">
          <a href="#">fotografia biznesowa</a>
          <a href="#">fotografia architektury</a>
          <a href="#">zdjęcia aranżowane</a>
          <a href="#">fotografia reklamowa</a>
          <a href="#">fotografia eventowa</a>
          <a href="#">packshoty</a>
          <a href="#">fotografia wnętrz</a>
          <a href="#">fotografia dla gastronomii</a>
          <a href="#">key visuale</a>
        </div>
      </div>


      <div class="pf-heros">
        <img class="enlarge-hover" src="<?= get_template_directory_uri(); ?>/prod/img/1.png" alt="" data-aos="fade-up" data-aos-delay="300">
        <img class="enlarge-hover" src="<?= get_template_directory_uri(); ?>/prod/img/2.png" alt="" data-aos="fade-up">
      </div>


      <div class="pf-photo-with-text">
        <article data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
          <h3>W dzisiejszych czasach aparat posiada praktycznie każdy</h3>
          <p>- najczęściej w smartfonie. Mimo to zapotrzebowanie na usługi profesjonalnych fotografów nie maleje. Bo im więcej ludzi wykonuje zdjęcia, tym więcej przekonuje się, że różnica między zdjęciem akceptowalnym lub nawet przyzwoitym a profesjonalną fotografią, która w 100% realizuje swój cel, jest olbrzymia.</p>
        </article>

        <img class="enlarge-hover" src="<?= get_template_directory_uri(); ?>/prod/img/3.png" alt="" data-aos="fade-up" data-aos-delay="400">
      </div>


      <div class="full-image-with-padding" data-aos="fade-up" data-aos-delay="200">
        <img class="enlarge-hover" src="<?= get_template_directory_uri(); ?>/prod/img/4.png" alt="">
      </div>


      <div class="text-duo">
        <div data-aos="fade-up" data-aos-delay="100">
          <h3>Jeśli szukasz firmy, która szybko i rzetelnie zrealizuje Twoje zlecenie fotograficzne, to dobrze trafiłeś.</h3>
        </div>

        <div data-aos="fade-up" data-aos-delay="200">
          <p>Dotpro to nie jeden fotograf, ale cały zespół specjalistóww swoich dziedzinach, bo wiemy, że ma uniwersalnych ludzi od wszystkiego.</p>
          <p>Dla jednego konikiem będzie fotografia architektury i zdjęcia wnętrz, dla innego fotografia reklamowa, packshoty i zdjęcia aranżowane a ktoś inny jest mistrzem w zdjęciach foodowych/ gastronomicznych czy fotografii eventowej. Jeszcze inny jest mistrzem w postprodukcji, czyli obróbce zdjęć.</p>
        </div>
      </div>


      <div class="overlapping-images">
        <img class="enlarge-hover" src="<?= get_template_directory_uri(); ?>/prod/img/5.png" data-aos="fade-up" data-aos-delay="100">
        <img class="enlarge-hover" src="<?= get_template_directory_uri(); ?>/prod/img/6.png" data-aos="fade-up" data-aos-delay="300">
      </div>


      <div class="photo-with-form">
        <img class="enlarge-hover" src="<?= get_template_directory_uri(); ?>/prod/img/7.png" data-aos="fade-up" data-aos-delay="100">

        <div class="photo-with-form__text" data-aos="fade-up" data-aos-delay="300">
          <h3>Zainteresowała Cię<br> nasza praca?</h3>
          <p>Zostaw nam swój adres mailowy, a odezwiemy się do Ciebie!</p>

          <?php echo do_shortcode( '[contact-form-7 id="22" title="Formularz LP"]' ) ?>
        </div>
      </div>


      <div class="text-duo">
        <div data-aos="fade-up" data-aos-delay="100">
          <h3>W Dotpro mamy na pokładzie ich wszystkich!</h3>
        </div>

        <div data-aos="fade-up" data-aos-delay="200">
          <p>Duży zespół pozwala nam na realizacje nawet najbardziej skomplikowanych projektów - nie ma dla nas sesji nie do zrealizowania. Mamy możliwość wykonywania sesji masowych, po kilkaset produktów dziennie, jak również sesji biznesowych dla korporacji z oddziałami w całym kraju, zatrudniających setki pracowników.</p>
        </div>
      </div>


      <div class="images-with-buttons">
        <div class="images-with-buttons__left" data-aos="fade-up" data-aos-delay="100">
          <img class="enlarge-hover" src="<?= get_template_directory_uri(); ?>/prod/img/8.png" alt="">
          <a href="#" class="button button--big">Agencja reklamowa</a>
        </div>

        <div class="images-with-buttons__right" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="button button--big">Produkcja filmowa</a>
          <img class="enlarge-hover" src="<?= get_template_directory_uri(); ?>/prod/img/9.png" alt="">
        </div>
      </div>


      <div class="image-full-width" data-aos="fade-up" data-aos-delay="300">
        <img class="enlarge-hover" src="<?= get_template_directory_uri(); ?>/prod/img/10.png" alt="">
      </div>


      <div class="text-duo">
        <div data-aos="fade-up" data-aos-delay="100">
          <p>Zlecenia realizujemy w naszym studiach fotograficznym zlokalizowanych we Wrocławiu i w Warszawie oraz oczywiścieu klienta. W przypadku zdjęć produktów istnieje możliwość przesłania nam ich celem wykonania sesji.</p>
        </div>

        <div data-aos="fade-up" data-aos-delay="200">
          <h3>Jesteśmy dziś dostępni dla Ciebie - porozmawiajmy, jak możemy pomóc zrealizować Twoje fotograficzne wyzwanie.</h3>
        </div>
      </div>


      <div class="three-overlapping-images">
        <img class="enlarge-hover" src="<?= get_template_directory_uri(); ?>/prod/img/11.png" alt="" data-aos="fade-up" data-aos-delay="100">
        <img class="enlarge-hover" src="<?= get_template_directory_uri(); ?>/prod/img/12.png" alt="" data-aos="fade-up" data-aos-delay="100">
        <img class="enlarge-hover" src="<?= get_template_directory_uri(); ?>/prod/img/13.png" alt="" data-aos="fade-up" data-aos-delay="100">
      </div>


      <div class="image-full-width image-full-width--center">
        <img class="enlarge-hover" src="<?= get_template_directory_uri(); ?>/prod/img/14.png" alt="" data-aos="fade-up" data-aos-delay="100">
      </div>

      <div class="load-more-photos-wrapper" data-aos="fade-up" data-aos-delay="300">
        <button class="load-more-photos"><img src="<?= get_template_directory_uri(); ?>/prod/img/arrow.svg" alt=""></button>
      </div>


    </div>
  </div>

<?php endwhile; ?>
</main>

<?php get_footer(); ?>