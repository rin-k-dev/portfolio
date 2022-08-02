<?php get_header(); ?>
<main role="main" class="main">
	<picture class="main__visual">
		<source srcset="<?php echo esc_url(get_template_directory_uri() . '/assets/images/top/mainvisual_PC.png'); ?>" media="(min-width:960px)">
		<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/top/mainvisual.png'); ?>" alt="main visual">
	</picture>
	<?php
		$args = array(
			'category_name' => 'works',
		);
		$the_query = new WP_Query($args);?>

	<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) :
			$the_query->the_post(); ?>
			<article <?php post_class(); ?>>
				<?php the_post_thumbnail(); ?>
				<?php the_title(); ?>
			</article>
			<?php wp_reset_postdata(); ?>
		<?php endwhile; ?>
	<?php else : ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
