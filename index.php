<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <div class="header__inner">
            <h1 id="top">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <button class="header__hamburger hamburger" id="js-hamburger">
                <span></span><span></span>
            </button>
            <nav class="header__nav" id="js-nav">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'primary'
                    )
                ); ?>
            </nav>
        </div>
    </header>
    <main role="main" class="main">
        <?php
        $args = array(
            'category_name' => 'works',
            'order' => 'ASC'
        );
        $the_query = new WP_Query($args);
        ?>

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
    <footer class="footer">
        <div class="footer__container">
            <h2>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h2>
            <nav class="footer__site-map">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'primary'
                    )
                ); ?>
            </nav>
        </div>
        <p class="copy">&copy;Rin Kunisada All rights reserved.</p>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>