<?php get_header(); ?>

<main class="main">
	<h2 class="blog-heading" data-aos="fade-right">Baza wiedzy</h2>

	<div class="container posts-wrapper">
		<?php while ( have_posts() ) : the_post(); ?>
		
		<div class="post-row" data-aos="fade-up">
			<a href="<?php the_permalink() ?>"><img class="post-row__img" src="<?= get_the_post_thumbnail_url(null, 'medium') ?>" alt="<?php the_title() ?>"></a>

			<div>
				<p class="post-row__date"><?php echo get_the_date('d F Y') ?></p>
				<h2 class="post-row__title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<div class="post-row__excerpt">
					<?php the_excerpt(); ?>
				</div>
				<a href="<?php the_permalink() ?>" class="button">Czytaj więcej</a>
			</div>
		</div>

		<?php echo do_shortcode( '[ajax_load_more id="9645506028" container_type="div" css_classes="posts-wrapper" post_type="post" category="" category__and="" category__not_in="" author=""]' )?>

		<?php endwhile; ?>
	</div>
</main>

<?php get_footer(); ?>