<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<main role="main" class="main">
		<?php the_content(); ?>
<?php endwhile; endif; ?>
	</main>
<?php get_footer(); ?>