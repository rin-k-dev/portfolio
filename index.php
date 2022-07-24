<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>    

<?php  
    $args = array(
        'category_name' => 'works',
        'order' => 'ASC'
    );
    $the_query = new WP_Query( $args );
?>

<?php if($the_query->have_posts()): while($the_query->have_posts()):
    $the_query->the_post(); ?>
    <article <?php post_class(); ?>>
    <?php the_post_thumbnail(); ?>
    <?php the_title(); ?>
    </article>
    <?php wp_reset_postdata(); ?>
<?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>    
<?php wp_footer(); ?>
</body>
</html>