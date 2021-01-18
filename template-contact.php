<?php
/**
 * Template Name: Kontakt
 */
get_header(); 
?>

<main class="main">
<?php while ( have_posts() ) : the_post(); ?>

  <div class="page-content">
    <div class="container">
      <h1 class="page-title heading"><?php the_title() ?></h1>

      <div class="contact-content">
        <article>
          <?php the_content() ?>
        </article>

        <?php echo do_shortcode( get_field('form_shortcode') ) ?>
      </div>
    </div>
  </div>
  
<?php endwhile; ?>
</main>

<?php get_footer(); ?>