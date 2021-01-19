<?php
/**
 * Template Name: Produkcja fotograficzna Moduły
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
    
      <div class="lp-header">
        <h2 class="lp-header__category">Fotografia</h2>
        <h1 class="lp-header__title heading"><?php the_title() ?></h1>
        <div></div>

        <?php wp_nav_menu(array('theme_location' => 'foto-menu', 'menu_id' => 'foto-menu', 'menu_class' => 'lp-header__menu', 'container' => '')); ?>
      </div>

      <?php get_template_part( 'partials/foto_flex_modules' ) ?>
    </div>
  </div>

<?php endwhile; ?>
</main>

<?php get_footer(); ?>