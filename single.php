<?php get_header(); ?>

<main class="main">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="container">

		<?php if (has_post_thumbnail()) : ?>
		<img class="page-thumb" src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="<?php the_title() ?>">
		<?php endif; ?>

		<h1 class="page-title"><?php the_title() ?></h1>

		<article class="page-content">
			<?php the_content(); ?>
		</article>
	</div>
	<?php endwhile; ?>
</main>

<?php get_footer(); ?>