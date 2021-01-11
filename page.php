<?php get_header(); ?>

<main class="main">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<h1 class="page-title"><?php the_title() ?></h1>

		<article class="page-content">
			<?php the_content(); ?>
		</article>
	</div>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>