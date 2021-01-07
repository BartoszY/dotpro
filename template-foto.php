<?php
/**
 * Template Name: Produkcja fotograficzna
 */
get_header(); 
?>

<main class="main">
<?php while ( have_posts() ) : the_post(); ?>

  <div class="container">
    
  </div>

  <div class="page-content">
    <div class="container">
    
      <div class="page-header">
        <h1 class="page-header__title heading"><?php the_title() ?></h1>

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
        <img src="<?= get_template_directory_uri(); ?>/prod/img/1.png" alt="">
        <img src="<?= get_template_directory_uri(); ?>/prod/img/2.png" alt="">
      </div>


      <div class="pf-photo-with-text">
        <article>
          <h3>W dzisiejszych czasach aparat posiada praktycznie każdy</h3>
          <p>- najczęściej w smartfonie. Mimo to zapotrzebowanie na usługi profesjonalnych fotografów nie maleje. Bo im więcej ludzi wykonuje zdjęcia, tym więcej przekonuje się, że różnica między zdjęciem akceptowalnym lub nawet przyzwoitym a profesjonalną fotografią, która w 100% realizuje swój cel, jest olbrzymia.</p>
        </article>

        <img src="<?= get_template_directory_uri(); ?>/prod/img/3.png" alt="">
      </div>


      <div class="full-image-with-padding">
        <img src="<?= get_template_directory_uri(); ?>/prod/img/4.png" alt="">
      </div>


      <div class="text-duo">
        <div>
          <h3>Jeśli szukasz firmy, która szybko i rzetelnie zrealizuje Twoje zlecenie fotograficzne, to dobrze trafiłeś.</h3>
        </div>

        <div>
          <p>Dotpro to nie jeden fotograf, ale cały zespół specjalistów w swoich dziedzinach, bo wiemy, że ma uniwersalnych ludzi od wszystkiego.</p>
          <p>Dla jednego konikiem będzie fotografia architektury i zdjęcia wnętrz, dla innego fotografia reklamowa, packshoty i zdjęcia aranżowane a ktoś inny jest mistrzem w zdjęciach foodowych/ gastronomicznych czy fotografii eventowej. Jeszcze inny jest mistrzem w postprodukcji, czyli obróbce zdjęć.</p>
        </div>
      </div>


      <div class="overlapping-images">
        <img src="<?= get_template_directory_uri(); ?>/prod/img/5.png" alt="">
        <img src="<?= get_template_directory_uri(); ?>/prod/img/6.png" alt="">
      </div>


      <div class="photo-with-form">
        <img src="<?= get_template_directory_uri(); ?>/prod/img/7.png" alt="">

        <div class="photo-with-form__text">
          <h3>Zainteresowała Cię<br> nasza praca?</h3>
          <p>Zostaw nam swój adres mailowy, a odezwiemy się do Ciebie!</p>

          <?php echo do_shortcode( '[contact-form-7 id="22" title="Formularz LP"]' ) ?>
        </div>
      </div>


      <div class="text-duo">
        <div>
          <h3>W Dotpro mamy na pokładzie ich wszystkich!</h3>
        </div>

        <div>
          <p>Duży zespół pozwala nam na realizacje nawet najbardziej skomplikowanych projektów - nie ma dla nas sesji nie do zrealizowania. Mamy możliwość wykonywania sesji masowych, po kilkaset produktów dziennie, jak również sesji biznesowych dla korporacji z oddziałami w całym kraju, zatrudniających setki pracowników.</p>
        </div>
      </div>


      <div class="images-with-buttons">
        <div class="images-with-buttons__left">
          <img src="<?= get_template_directory_uri(); ?>/prod/img/8.png" alt="">
          <a href="#" class="button button--big">Agencja reklamowa</a>
        </div>

        <div class="images-with-buttons__right">
          <a href="#" class="button button--big">Produkcja filmowa</a>
          <img src="<?= get_template_directory_uri(); ?>/prod/img/9.png" alt="">
        </div>
      </div>


      <div class="image-full-width">
        <img src="<?= get_template_directory_uri(); ?>/prod/img/10.png" alt="">
      </div>


      <div class="text-duo">
        <div>
          <p>Zlecenia realizujemy w naszym studiach fotograficznym zlokalizowanych we Wrocławiu i w Warszawie oraz oczywiście u klienta. W przypadku zdjęć produktów istnieje możliwość przesłania nam ich celem wykonania sesji.</p>
        </div>

        <div>
          <h3>Jesteśmy dziś dostępni dla Ciebie - porozmawiajmy, jak możemy pomóc zrealizować Twoje fotograficzne wyzwanie.</h3>
        </div>
      </div>


      <div class="three-overlapping-images">
        <img src="<?= get_template_directory_uri(); ?>/prod/img/11.png" alt="">
        <img src="<?= get_template_directory_uri(); ?>/prod/img/12.png" alt="">
        <img src="<?= get_template_directory_uri(); ?>/prod/img/13.png" alt="">
      </div>


      <div class="image-full-width image-full-width--center">
        <img src="<?= get_template_directory_uri(); ?>/prod/img/14.png" alt="">
      </div>

      <div class="load-more-photos-wrapper">
        <button class="load-more-photos"><img src="<?= get_template_directory_uri(); ?>/prod/img/arrow.svg" alt=""></button>
      </div>


    </div>
  </div>

<?php endwhile; ?>
</main>

<?php get_footer(); ?>