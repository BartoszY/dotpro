<?php
/**
 * Template Name: Produkcja fotograficzna
 */
get_header(); 
?>

<main class="main">
<?php while ( have_posts() ) : the_post(); ?>

  <!-- <div class="sticky-nav">
    <?php wp_nav_menu(array('theme_location' => 'foto-menu', 'menu_id' => 'foto-menu', 'menu_class' => 'sticky-nav__menu', 'container' => '')); ?>
  </div> -->

  <button class="scroll-to-top"><img src="<?= get_template_directory_uri(); ?>/prod/img/arrow-up.svg" alt="Do góry"></button>

  <div class="page-content">
    <div class="container">
    
      <div class="page-header">
        <h1 class="page-header__title heading"><?php the_title() ?></h1>
        <div></div>

        <?php wp_nav_menu(array('theme_location' => 'foto-menu', 'menu_id' => 'foto-menu', 'menu_class' => 'page-header__menu', 'container' => '')); ?>
      </div>


      <?php $hero = get_field('hero'); if( $hero ) : ?>
      <div class="pf-heros" data-aos="fade-up" data-aos-delay="100">
        <img class="enlarge-hover" src="<?= $hero['small']['sizes']['medium'] ?>" alt="<?= $hero['small']['alt'] ?>">
        <img class="enlarge-hover" src="<?= $hero['big']['sizes']['large'] ?>" alt="<?= $hero['big']['alt'] ?>">
      </div>
      <?php endif; ?>


      <?php $text_with_foto = get_field('text_with_foto'); if( $text_with_foto ) : ?>
      <div class="pf-photo-with-text" data-aos="fade-up" data-aos-delay="100">
        <article data-aos="fade-up" data-aos="fade-up" data-aos-delay="300">
          <?= $text_with_foto['text'] ?>
        </article>

        <img class="enlarge-hover" src="<?= $text_with_foto['image']['sizes']['large'] ?>" alt="<?= $text_with_foto['image']['alt'] ?>">
      </div>
      <?php endif; ?>


      <?php $center_image = get_field('center_image'); if( $center_image ) : ?>
      <div class="full-image-with-padding" data-aos="fade-up" data-aos-delay="200">
        <img class="enlarge-hover" src="<?= $center_image['sizes']['large'] ?>" alt="<?= $center_image['alt'] ?>">
      </div>
      <?php endif; ?>


      <?php $duo_text = get_field('duo_text'); if( $duo_text ) : ?>
      <div class="text-duo">
        <div data-aos="fade-up" data-aos-delay="100">
          <?= $duo_text['left'] ?>
        </div>

        <div data-aos="fade-up" data-aos-delay="200">
          <?= $duo_text['right'] ?>
        </div>
      </div>
      <?php endif; ?>


      <?php $two_images_horizontaly = get_field('two_images_horizontaly'); if( $two_images_horizontaly ) : ?>
      <div class="overlapping-images" data-aos="fade-up" data-aos-delay="100">
        <img class="enlarge-hover" src="<?= $two_images_horizontaly['left']['sizes']['large'] ?>" alt="<?= $two_images_horizontaly['left']['alt'] ?>">
        <img class="enlarge-hover" src="<?= $two_images_horizontaly['right']['sizes']['large'] ?>" alt="<?= $two_images_horizontaly['right']['alt'] ?>">
      </div>
      <?php endif; ?>


      <?php $form_with_image = get_field('form_with_image'); if( $form_with_image ) : ?>
      <div class="photo-with-form" data-aos="fade-up" data-aos-delay="100">
        <img class="enlarge-hover" src="<?= $form_with_image['image']['sizes']['large'] ?>" alt="<?= $form_with_image['image']['alt'] ?>">

        <div class="photo-with-form__text" data-aos="fade-up" data-aos-delay="300">
          <?= $form_with_image['text'] ?>
        </div>
      </div>
      <?php endif; ?>


      <?php $duo_text_2 = get_field('duo_text_2'); if( $duo_text_2 ) : ?>
      <div class="text-duo">
        <div data-aos="fade-up" data-aos-delay="100">
          <?= $duo_text_2['left'] ?>
        </div>

        <div data-aos="fade-up" data-aos-delay="200">
          <?= $duo_text_2['right'] ?>
        </div>
      </div>
      <?php endif; ?>


      <?php $duo_cta = get_field('duo_cta'); if( $duo_cta ) : ?>
      <div class="images-with-buttons">
        <div class="images-with-buttons__left" data-aos="fade-up" data-aos-delay="100">
          <img class="enlarge-hover" src="<?= $duo_cta['left_image']['sizes']['large'] ?>" alt="<?= $duo_cta['left_image']['alt'] ?>">
          <a href="<?= $duo_cta['left_button']['url'] ?>" class="button button--big"><?= $duo_cta['left_button']['title'] ?></a>
        </div>

        <div class="images-with-buttons__right" data-aos="fade-up" data-aos-delay="300">
          <a href="<?= $duo_cta['right_button']['url'] ?>" class="button button--big"><?= $duo_cta['right_button']['title'] ?></a>
          <img class="enlarge-hover" src="<?= $duo_cta['right_image']['sizes']['large'] ?>" alt="<?= $duo_cta['right_image']['alt'] ?>">
        </div>
      </div>
      <?php endif; ?>


      <?php $center_image_2 = get_field('center_image_2'); if( $center_image_2 ) : ?>
      <div class="image-full-width" data-aos="fade-up" data-aos-delay="300">
        <img class="enlarge-hover" src="<?= $center_image_2['sizes']['large'] ?>" alt="<?= $center_image_2['alt'] ?>">
      </div>
      <?php endif; ?>


      <?php $duo_text_3 = get_field('duo_text_3'); if( $duo_text_3 ) : ?>
      <div class="text-duo">
        <div data-aos="fade-up" data-aos-delay="100">
          <?= $duo_text_3['left'] ?>
        </div>

        <div data-aos="fade-up" data-aos-delay="200">
          <?= $duo_text_3['right'] ?>
        </div>
      </div>
      <?php endif; ?>


      <?php $three_images = get_field('three_images'); if( $three_images ) : ?>
      <div class="three-overlapping-images" data-aos="fade-up" data-aos-delay="100">
        <img class="enlarge-hover" src="<?= $three_images['left']['sizes']['large'] ?>" alt="<?= $three_images['left']['alt'] ?>">
        <img class="enlarge-hover" src="<?= $three_images['right']['sizes']['large'] ?>" alt="<?= $three_images['right']['alt'] ?>">
        <img class="enlarge-hover" src="<?= $three_images['big']['sizes']['large'] ?>" alt="<?= $three_images['big']['alt'] ?>">
      </div>
      <?php endif; ?>


      <?php $center_image_3 = get_field('center_image_3'); if( $center_image_3 ) : ?>
      <div class="image-full-width image-full-width--center" data-aos="fade-up" data-aos-delay="100">
        <img class="enlarge-hover" src="<?= $center_image_3['sizes']['large'] ?>" alt="<?= $center_image_3['alt'] ?>">
      </div>
      <?php endif; ?>

      <!-- LOAD MORE MODULES -->

      <?php if( have_rows('content') ): ?>
        <div class="load-more-photos-wrapper" data-aos="fade-up" data-aos-delay="300">
          <button class="load-more-photos"><img src="<?= get_template_directory_uri(); ?>/prod/img/arrow.svg" alt="Load more"></button>
        </div>

        <div class="more-modules-wrapper">
        <?php get_template_part( 'partials/foto_flex_modules' ) ?>
        </div>
      <?php endif; ?>

    </div>
  </div>

<?php endwhile; ?>
</main>

<?php get_footer(); ?>