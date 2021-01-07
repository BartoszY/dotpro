<?php
/**
 * Template Name: Strona główna
 */
get_header(); 
?>

<main class="main">
<?php while ( have_posts() ) : the_post(); ?>

  
  
<?php endwhile; ?>
</main>

<?php get_footer(); ?>