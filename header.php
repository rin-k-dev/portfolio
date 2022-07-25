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
            <?php if (has_nav_menu('primary')) : ?>
                <nav class="header__nav" id="js-nav">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'items_wrap' => '<ul class="nav__items nav-items">%3$s</ul>',
                            'add_li_class' => 'nav-items__item'
                        )
                    ); ?>
                </nav>
            <?php endif; ?>
        </div>
    </header>